<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditorium;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Auth;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SuperAdminController extends Controller
{
    public function addaudi()
    {
        $admins=DB::table('users')
        ->where('role', 'admin')
        ->whereNotExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('auditoria')
                ->whereColumn('users.id', 'auditoria.admin');
        })
        ->get();
        return view("Super_Admin.add_audi",compact('admins'));
    }
    public function superadmina()
    {
        $auditorium = Auditorium::all();
        return view("Super_Admin.add_auditorium",compact('auditorium'));
    }
    public function storeaudi(Request $request)
    {
        $request->validate([
            'nameAudi' => 'required',
            'capacity' => 'nullable',
            'description' => 'nullable',
            'cost'=>'required',
            'images.*' => ['required', 'mimes:jpeg,png,jpg,gif|max:2048'],
        ]);
    
        $imagePaths = [];
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = date('YmdHi') . $image->getClientOriginalName();
                $image->move(public_path('Audi'), $filename);
                $imagePaths[] = 'Audi/' . $filename;
            }
        }
    
        $imagePath = implode(',', $imagePaths); 
    
        $auditorium = new Auditorium([
            'nameAudi' => $request->input('nameAudi'),
            'capacity' => $request->input('capacity'),
            'description' => $request->input('description'),
            'cost' => $request->input('cost'),
            'images' => $imagePath,
            'admin' => $request->input('admin'),
        ]);
    
        $auditorium->save();
        $auditoriums = Auditorium::all();
    
        return redirect()->route('superadmina')->with('success', 'Auditorium added!');
    }
    public function viewAudi($id)
    {
        $auditorium = Auditorium::find($id);
        $user = User::find($auditorium->admin);
        return view("Super_Admin.view_audi", compact('auditorium', 'user'));
    }
    public function editAudi($id)
    {
        $auditorium = Auditorium::find($id);
        $admins = DB::table('users')
        ->where('role', 'admin')
        ->whereNotExists(function ($query) use ($id) {
            $query->select(DB::raw(1))
                ->from('auditoria')
                ->whereColumn('users.id', 'auditoria.admin')
                ->where('auditoria.id', '<>', $id); 
        })
        ->orWhere('id', $auditorium->admin) 
        ->get();
        return view("Super_Admin.edit_audi",compact('auditorium','admins'));
    }
    public function updateAudi(Request $request, $id)
    {
        $auditorium = Auditorium::find($id);
    
        $request->validate([
            'nameAudi' => 'required',
            'capacity' => 'nullable',
            'description' => 'nullable',
            'cost' => 'required',
            'images.*' => ['mimes:jpeg,png,jpg,gif|max:2048'],
        ]);
        $delete_images = $request->input('delete_images', []);
        $imagePaths = [];
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = date('YmdHi') . $image->getClientOriginalName();
                $image->move(public_path('Audi'), $filename);
                $imagePaths[] = 'Audi/' . $filename;
            }
        }
    
        $existingImages = explode(',', $auditorium->images);
        // Delete images that are no longer selected
        $imagesToKeep = array_diff($existingImages, $delete_images);
        $disk = Storage::getDefaultDriver();
        foreach ($delete_images as $imageToDelete) {
  
            if (Storage::disk($disk)->exists($imageToDelete)) {
                Storage::disk($disk)->delete($imageToDelete);
            }
        }
        $allImages = array_merge($imagesToKeep, $imagePaths);
        // Update images with new ones
        $auditorium->images = implode(',', $allImages);
    
        $auditorium->nameAudi = $request->input('nameAudi');
        $auditorium->capacity = $request->input('capacity');
        $auditorium->description = $request->input('description');
        $auditorium->cost = $request->input('cost');
        $auditorium->admin = $request->input('admin');
        $auditorium->save();
        if (Auth::user()->role == 'superadmin') 
             return redirect()->route('superadmina')->with('success', 'Auditorium updated successfully.');
        else
            return redirect()->route('home',['auditoriumId' => $auditorium->id])->with('success', 'Auditorium updated successfully.');
    }
    public function superadmin()  //Request $request
    {
        $admins = User::where('role','Admin')->get();
        return view("Super_Admin.add_admin",compact('admins'));
    }
    public function addadmin()
    {
        return view("Super_Admin.add_ad");
    }
    public function storead(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'nullable',
            'email' => 'required',
            'password'=>'required',
        ]);
    
        $user = new User([
            'firstname'=> $request->input('firstname'),
            'lastname'=> $request->input('lastname'),
            'email'=> $request->input('email'),
            'mobile'=> $request->input('mobile'),
            'address'=> $request->input('address'),
            'password'=>Hash::make( $request->input('password')),
            'role'=> $request->input('role'),
            'faculty'=> $request->input('faculty'),
            'department'=> $request->input('department'),
            'designation'=> $request->input('designation'),
            'nic'=> $request->input('nic'),
            'organization'=> $request->input('organization'),
            'external_address'=> $request->input('external_address'),
            'purpose'=> $request->input('purpose'),
            'image'=> $request->input('image'),
            'usertype'=>$request->input('usertype'),
            'remember_tocken' => Str::random(10)
        ]);
    
        $user->save();
        if ($user->role == 'Admin') {
            return redirect()->route('superadmin')->with('success', 'Admin added!');
        } elseif ($user->role == 'customer') {
            return redirect()->route('login')->with('error-login', 'Customer created!');
        }
    }
    public function viewAd($id)
    {
        $admin = User::find($id);
        return view("Super_Admin.view_admin",compact('admin'));
    }
    public function destroy($id)
    {
        //
        $admin = User::find($id);
        $admin->delete();

        return redirect()->route('superadmin')->with('success','Admin Deleted! ');
    }
}
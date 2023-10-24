<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class SuperController extends Controller
{
    public function superfront()
    {
        return view('Super_Admin.front');
    }

    public function addaudi()
    {
        return view('Super_Admin.newaudi');
    }
}


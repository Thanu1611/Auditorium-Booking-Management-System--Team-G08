@extends('Layouts.role')
@section('content')
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <br><br><br>
        <table class="min-w-full text-center">
          <thead class="border-b bg-violet-950">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              UserID
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              Booking_Date
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              Booking_Time
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              Booking_Status
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              Booking_Details
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
            <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">data1</td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                data2
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                data3
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                data4
              </td>
              
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                <a class="inline-block px-7 py-3 bg-violet-950 text-white font-medium text-sm leading-snug uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-50 ease-in-out w-full" href="#"> View</a>
                <br><br>
                <a class="inline-block px-7 py-3 bg-violet-950 text-white font-medium text-sm leading-snug uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-50 ease-in-out w-full" href="#"> Approval</a>
                <br><br>
                <a class="inline-block px-7 py-3 bg-violet-950 text-white font-medium text-sm leading-snug uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-50 ease-in-out w-full" href="#"> DisApproval</a>
                </td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
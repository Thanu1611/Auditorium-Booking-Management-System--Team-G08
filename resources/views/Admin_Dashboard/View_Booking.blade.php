@extends('Layouts.role')
@section('content')
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <br><br><br>
        <table class="min-w-full text-center">
          <thead class="border-b bg-gray-800">
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
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                data2
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                data3
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                data4
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                data5
              </td>
            </tr class="bg-white border-b">
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
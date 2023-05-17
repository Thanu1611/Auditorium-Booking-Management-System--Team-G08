@extends('Layouts.role')
@section('content')
<div  style="width: 90%;height: 70%;">
  <div >
    <div >
      <div class="overflow-hidden">
        <br><br><br>
        <table>
          <thead >
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
          </thead >
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
@extends('Layouts.role')
@section('content')
<section class="h-screen">
  <div class="container px-6 py-12 h-full">
    <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
    <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
        <img
          src="https://www.lib.jfn.ac.lk/wp-content/uploads/2022/09/LibFront.jpg"
          class="w-full"
          alt="Library image"
        />
      </div>
      <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
        <form>
          <div class="mb-6">
          <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-first-name">
            Name of the event : 
          </label>
            <input type="text"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              placeholder="Name of the event"/>
          </div>

          <div class="mb-6">
          <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="grid-last-name">
       Details of the event:
      </label>
            <textarea
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              placeholder="Details"></textarea>
          </div>
          <div class="mb-6">
      <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="booking_date">Booking Date : </label>
      <input type="date" class="form-group" id="booking_date" name="booking_date">
    </div>
    <div class="mb-6">
      <br>
      <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="booking_time">Booking Time : </label>
      <input type="radio" class="form-group" id="booking_time" name="booking_time">Full day
      <input type="radio" class="form-group" id="booking_time" name="booking_time">First half day
      <input type="radio" class="form-group" id="booking_time" name="booking_time">Second half day
    </div>
    <div class="mb-6">
      <br>
      <label class="block uppercase tracking-wide text-gray-700 text-xl font-bold mb-2" for="Catering">Will be Catering : </label>
      <input type="radio" class="form-group" id="Catering" name="Catering">Yes
      <input type="radio" class="form-group" id="Catering" name="Catering">No
    </div>
          <button
            type="submit"
            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
            data-mdb-ripple="true"
            data-mdb-ripple-color="light"
          >
            Booking
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
 
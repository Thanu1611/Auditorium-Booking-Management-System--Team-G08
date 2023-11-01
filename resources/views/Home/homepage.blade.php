@extends('Home.master')

@section('section1')
    <h3 style="font-size: 25px; color: #785;">Kailasapathy Auditorium</h3>
    <img src="{{ asset('images/Kaila.jpg') }}" alt="My Image" width="300" height="200"><br><br>
    <a href="Ka" button class="button button1">View Details</a><br><br>
    <a href="#" button class="button button1">Add Booking</a><br><br>
   
@endsection


@section('section2')
    <h3 style="font-size: 25px; color: #785;">CS Auditorium</h3>
    <img src="{{ asset('images/DCS.jpg') }}" alt="My Image" width="300" height="200"><br><br>
    <a href="CS" button class="button button1">View Details</a><br><br>
    <a href="#" button class="button button1">Add Booking</a><br><br>
@endsection

<br>
@section('section3')
    <h3 style="font-size: 25px; color: #785;">Library Mini Auditorium</h3>
    <img src="{{ asset('images/audi1.jpeg') }}" alt="My Image" width="300" height="200"><br><br>
    <a href="#" button class="button button1">View  Details</button></a><br><br>
    <a href="#" button class="button button1">Add Booking</a><br><br>
@endsection

<br>
@section('section4')
<h3 style="font-size: 25px; color: #785;">Physics Mini Auditorium</h3>
    <img src="{{ asset('images/phy1.jpg') }}" alt="My Image" width="300" height="200"><br><br>
    <a href="PA" button class="button button1">View Details</a><br><br>
    <a href="#" button class="button button1">Add Booking</a><br><br>
@endsection

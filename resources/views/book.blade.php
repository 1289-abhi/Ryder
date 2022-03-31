@extends('layout')
@section('content')
<div class="book">
    <div class="title-section"><h1 class="title show-on-scroll">Book A Ride</h1></div>
    <div class="form-section">
        <p class="form-subtitle">Looking For A Taxi</p>
        <h1 class="form-title">Make Your Booking</h1>
        <p class="form-content">Getting late or planning a trip? With Ryder be free from the tension of finding a vehicle. We are at your door step in no time. You just have to think efficiently with us and find your Ryder now!</p>
        @if(session('message'))
            <div style="background-color: #ACDF87;color:#1e35631;padding: 0.5rem 1rem;border-radius:50px">
            {{ session('message') }}
            </div>
            @endif
            @if($errors->any())
                <div style="background-color: #f1959b;color:#be1600;padding: 0.5rem 1rem;border-radius:50px">
                    <ul type="none">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
        <form action="" method="POST" class="booking-form"> 
        {{csrf_field()}}
            <div>
                Select Information:<br>
                <p><input type="text" name="name" value="{{old('name')}}" placeholder="Your Name" required>
                <input type="email" name="email" value="{{old('email')}}" placeholder="Your Email" required></p>
                <p><input type="text" name="phone" value="{{old('phone')}}" placeholder="Your Contact No." required>
                <input type="number" name="passengers" placeholder="Passengers" required></p>
                <p><input Type="text" name="pickaddress" placeholder="Pickup Address" required></p>
                <p><input type="text" name="dropaddress" placeholder="Drop off Address" required></p>
                <p><input type="date" name="date" placeholder="Select Date" required>
                <input type="time" name="time" placeholder="Select Time" required></p>
            </div>
            <div class="radio-buttons">
                <div>Select Car Type:</div>
                <div class="radio">
                <input type="radio" name="car_type" value="Any Type"> Any Type
                <input type="radio" name="car_type" value="Hybrid"> Hybrid
                <input type="radio" name="car_type" value="Luxury"> Luxury
                <input type="radio" name="car_type" value="SUV"> SUV
                <input type="radio" name="car_type" value="Vans"> Vans</div>
            </div>
            <input type="submit" name="book" value="Book Now">
            
        </form>
    </div>
</div>
@endsection 
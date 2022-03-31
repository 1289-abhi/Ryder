@extends('layout')
@section('content')
<div class="join">
    <div class="title-section"><h1 class="title show-on-scroll">Become A Vendor</h1></div>
    <div class="form-section">
        <p class="form-subtitle">Link your taxi and start earning</p>
        <h1 class="form-title">Attach Your Taxi</h1>
        <p class="form-content">Travel is the requirement of each and every person either professionally or personally. Taxi is essential part for any kind of travel. With the help of the advancement in the technology, BookMyTaxi is taking advantage to grab more number of booking nationwide. Being associated with us, our vendors can have the same advantage and increase their revenue. Fill the form below and boost your earning</p>
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
        <form action="{{route('join')}}" method="POST" class="booking-form">
        {{csrf_field()}}
            <div>
                <p><input type="text" name="name" placeholder="Your Name" required></p>
                <p><input type="email" name="email" placeholder="Your Email" required></p>
                <p><input type="text" name="phone"  placeholder="Your Contact No." required></p>
                <p><input type="text" name="address" placeholder="Address" required></p>
                <p><input Type="text" name="city" placeholder="City" required>
                <input type="text" name="state" placeholder="State" required></p>
                <p><input type="text" name="vehicleType" placeholder="Vehicle Type" required>
                <input type="number" name="noOfVehicles" placeholder="No. of vehicles" required></p>
            </div>
            <input type="submit" name="book" value="Send Resume">
            
        </form>
    </div>
</div>
@endsection
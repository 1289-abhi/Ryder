@extends('layout')
@section('content')
    <div class="contact">
    <div class="title-section"><h1 class="title show-on-scroll">Contact Us</h1></div>
    
    <div class="form-section">
        <p class="contact-subtitle">Contact With Us Now</p>
        <h1 >Leave A Message</h1>
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
        <form action="{{route('contact.mailContactForm')}}" method="POST">
            {{csrf_field()}}
            <p>
            <input type="text" name="name" value="{{old('name')}}" placeholder="Your Name" required>
            <input type="email" name="email" value="{{old('email')}}" placeholder="Your Email" required></p>
            <p>
            <input type="text" name="phone" value="{{old('phone')}}" placeholder="Your Contact No." required>
            <input type="text" name="subject" value="" placeholder="Subject" required></p>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
            <input type="submit" name="send" value="send">
        </form>
    </div>
    </div>
@endsection
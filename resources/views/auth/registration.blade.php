@extends('layout')
@section('content')

<div class="register">
    <div class="form-section">
        <h1>Register</h1>
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
        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                                <p>Already a user? <a href="{{route('login')}}" style="color:#f0da4c;text-decoration:none;font-weight:bold">Login</a></p>
                                <input type="submit" value="Sign Up" name="Sign Up">
                        </form>

    </div>
    </div>



@endsection
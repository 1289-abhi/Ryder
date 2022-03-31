@extends('layout')
@section('content')

<div class="login">
    <div class="form-section">
        <h1>Login</h1>
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
            <form method="POST" action="{{ route('login.custom') }}">
                            @csrf
                                <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                                <p>Not a registered user? <a href="{{route('register-user')}}"style="color:#f0da4c;text-decoration:none;font-weight:bold">Sign Up</a></p>
                                <input type="submit" value="Login" name="Login">
                        </form>
    </div>
    </div>

           
@endsection
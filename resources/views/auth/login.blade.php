@extends('master') 
@section('konten')
<hr>
<link href="css/login.css" rel="stylesheet">
<div class="login">
    <form action="/authenticate" method="post" class="user">
        @csrf
        <div class="login-container">
            <div class="login-form">
                <h3>Login</h3>
                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <input type="text" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    
        </body>
    </html>
        @if (count($errors) > 0)
    <div class="alert alert-danger mt-3">
     @foreach ($errors->all() as $error)
           - {{ $error }} <br>
     @endforeach
</div>
@endif

@if(session('error'))
<div class="alert alert-danger mt-3">
     {{session('error')}}!
</div>
@endif
    @endsection
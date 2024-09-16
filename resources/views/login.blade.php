@extends('templates.main')

@section('content')

    <style>
        .error {
            color: red;
        }
    </style>
    <section class="login" id="login">
        <h1 class="heading"> <span>Login</span> </h1>
        <div class="login-box">

    
<form method="post" action="{{route('handleLogin')}}">
    @csrf
    <!-- Email -->
    <label for="email">Email:</label> <br>
    <input type="email" name="email" id="email" value="{{old('email')}}"> <br>
    <!-- Password -->
    <label for="password">Password:</label> <br>
    <input type="password" name="password" id="password"> <br>
    <!-- Error -->
    @if(session('error'))
    <span class="error">{{ session('error') }}</span> <br>
@endif

    <br>
    <!-- Submit -->
    <input type="submit" value="Login">
</form>
        </div>
    </section>
@endsection

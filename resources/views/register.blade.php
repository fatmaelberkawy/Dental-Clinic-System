@extends('templates.main')

@section('content')
<section class="register" id="register">
    <h1 class="heading"> Create <span>Account</span> </h1>
    <div class="register-box">
    <form method="post" action="{{route('handleRegister')}}">
        @csrf
        <!-- Name -->
        <label for="name">Name:</label> <br>
        <input type="text" name="name" id="name" value="{{old('name')}}"> <br>
        @error('name')
            <span class="error">{{ $message }}</span> <br>
        @enderror
        <!-- Email -->
        <label for="email">Email:</label> <br>
        <input type="email" name="email" id="email" value="{{old('email')}}"> <br>
        @error('email')
            <span class="error">{{ $message }}</span> <br>
        @enderror
        <!-- Password -->
        <label for="password">Password:</label> <br>
        <input type="password" name="password" id="password"> <br>
        @error('password')
            <span class="error">{{ $message }}</span> <br>
        @enderror
        <!-- Password Confirmation -->
        <label for="password_confirmation">Password Confirmation:</label> <br>
        <input type="password" name="password_confirmation" id="password_confirmation"> <br>
        <!-- Submit -->
        <input type="submit" value="Create account">
    </form>
    </div>
</section>
@endsection
   
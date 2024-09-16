@extends('templates.main')

@section('content')
<section class="profile" id="profile">
    <div class="profile-box">
    <h1>{{ session('user')->name }}</h1>
    <p>Email: {{ session('user')->email }}</p>
    <a href="{{route('logout')}}">Logout</a>
    </div>
</section>
@endsection
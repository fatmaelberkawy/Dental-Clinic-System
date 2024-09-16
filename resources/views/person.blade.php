@extends('templates.main')

@section('content')
    <section class="person" id="person">
        <div class="person-box">
            <style>
    h1{
    color:red;
    }
     
    p{
        color:red;
    }

            </style>
            
    <h1>{{ $patient->name}} </h1>
    <p>Phone:{{$patient->phone}}</p>
    <p>Email: {{$patient->email}}</p>
    <p>Doctor_Name:{{$patient->Doctor_Name}}</p>
    <p>Date:{{$patient->date}}</p>
        </div>
    </section>
@endsection
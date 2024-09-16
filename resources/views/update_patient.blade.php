@extends('templates.main')
@section('content')
<section class="appointment" id="appointment">
    <h1 class="heading"> <span>update</span> patient data </h1>
  
    <div class="row">
        <div class="image">
            <img src="{{asset('image\Date picker-rafiki.svg')}}" alt="">
        </div>
  
        <form action="{{route('handleupdatePatient',['id'=>$patient->id])}}" method="post">


            
            <h3>update appointment</h3>

            @csrf

            <input type="text" name="name" placeholder="name" class="box" value="{{$patient->name}}">
            <input type="phone" name="phone" placeholder="phone" class="box" value="{{$patient->phone}}">
            <input type="email" name="email" placeholder="email" class="box" value="{{$patient->email}}">
            <select type="Doctor_Name" name="Doctor_Name" placeholder="Doctor_Name" class="box" value="{{$patient->Doctor_Name}}"><option >Doctor_Name</option><option >Dr. Yara Ahmed</option><option >Dr. Malik Ibrahim</option><option >Dr. Aisha Salem</option><option>Dr. Dareen Mostafa</option><option >Dr. Fahad Elsawy</option><option >Dr. Yassin Emam</option><option>Dr. Khadija Abdullah</option><option>Dr. Bilal Abdulrhman</option></select>
            <input type="date" name="date" placeholder="date" class="box" value="{{$patient->date}}">
            <input type="submit" value="update patient" name="submit_appointment"  class="btn">
        </form>
    </div>
  </section>
  @endsection
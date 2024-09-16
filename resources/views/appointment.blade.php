
@extends('templates.main')
@section('content')
<section class="appointment" id="appointment">
    <h1 class="heading"> <span>appointment</span> now </h1>
  
    <div class="row">
        <div class="image">
            <img src="{{asset('image\Date picker-rafiki.svg')}}" alt="">
        </div>
  
        <form action="{{route('handleAddPatient')}}" method="post">


            
            <h3>make appointment</h3>

            @csrf

            <input type="text" name="name" placeholder="name" class="box">
            <input type="phone" name="phone" placeholder="phone" class="box" >
            <input type="email" name="email" placeholder="email" class="box">
            <select type="Doctor_Name" name="Doctor_Name" placeholder="Doctor_Name" class="box">
                <option >Doctor_Name</option>
                <option value="1" >Dr. Yara Ahmed</option>
                <option value="2">Dr. Malik Ibrahim</option>
                <option value="3">Dr. Aisha Salem</option>
                <option value="4">Dr. Dareen Mostafa</option>
                <option value="5">Dr. Fahad Elsawy</option>
                <option value="6">Dr. Yassin Emam</option>
                <option value="7">Dr. Khadija Abdullah</option>
                <option value="8">Dr. Bilal Abdulrhman</option></select>
           
 
  
            <input type="date" name="date" placeholder="date" class="box">
          


            <input type="submit" value="appointment now" name="submit_appointment"  class="btn">
        </form>
    </div>
  </section>
  @endsection
@extends('templates.main')
@section('content')
 <section  class="about" id="about">
 <h1 class="heading"><span>about</span> us </h1>
    <div class="row">
        <div class="image">
           <img src="{{asset('image/Doctors-bro.svg')}}" alt="">
        </div>
        <div class="content">
          <h3>Giving you More Reasons To Smile.</h3>
           <p>It’s a fact that many people say they hate going to the dentist. Maybe you’re in that camp too. But no matter how you feel about dental visits before you arrive, we’ll do everything we can to send you home with a Great White Smile. After all, it’s what we named our practice. </p>
           <a href="{{asset('appointment')}}" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a> 
        </div>
    </div>
</section>
 @endsection
 

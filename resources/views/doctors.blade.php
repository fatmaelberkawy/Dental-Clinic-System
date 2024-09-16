@extends('templates.main')
@section('content')
<section class="doctors" id="doctors">
<h1 class="heading"> Our <span>doctors</span> </h1>
  
<div class="box-container">

    <div class="box">
        <img src="{{asset('image\photo_2023-05-27_22-20-52.jpg')}}" alt="">
        <h3>Dr. Yara Ahmed</h3>
        <span>Prosthodontist</span>
        <h4>Friday - Tuesday</h4>
        <span>9am - 1am</span>
        
    </div>

    <div class="box">
        <img src="{{asset('image\photo_2023-05-27_22-20-55.jpg')}}" alt="">
        <h3>Dr. Malik Ibrahim</h3>
        <span>Oral Surgeon </span>

        <h4>Wednesday - Saturday</h4>

        <span>2pm - 5:30pm</span>
       
    </div>

    <div class="box">
        <img src="{{asset('image\photo_2023-05-27_22-20-55 (2).jpg')}}" alt="">
        <h3>Dr. Aisha Salem</h3>
        <span>Root Canal Specialist</span>
        <h4>Monday - Friday</h4>
        <span>10am - 3pm</span>
        
    </div>

    <div class="box">
        <img src="{{asset('image\photo_2023-05-27_22-20-54.jpg')}}" alt="">
        <h3>Dr. Dareen Mostafa</h3>
        <span>Gum Specialist </span>
        <h4>Saturday - Tuesday</h4>
        <span>12pm - 6pm</span>
       
    </div>

    <div class="box">
        <img src="{{asset('image\photo_2023-05-27_22-20-54 (2).jpg')}}" alt="">
        <h3>Dr. Fahad Elsawy</h3>
        <span>Orthodontist</span>
        <h4>Sunday - Wednesday</h4>
        <span>9am - 5pm</span>
       
    </div>

    <div class="box">
        <img src="{{asset('image\photo_2023-05-27_22-20-53.jpg')}}" alt="">
        <h3>Dr. Yassin Emam</h3>
        <span> Pediatric Dentist </span>
        <h4>Monday - Saturday</h4>
        <span>9am - 4:30pm</span>
       
    </div>

    <div class="box">
        <img src="{{asset('image\photo_2023-05-28_01-39-12.jpg')}}" alt="">
        <h3>Dr. Khadija Abdullah </h3>
        <span>General Dentist</span>
        <h4>Tuesday - Friday</h4>
        <span>3pm - 9pm</span>
       
    </div>

    <div class="box">
        <img src="{{asset('image\photo_2023-05-27_22-20-50.jpg')}}" alt="">
        <h3>Dr. Bilal Abdulrhman</h3>
        <span>Endodontist</span>
        <h4>Friday - Tuesday</h4>
        <span>12am - 7pm</span>
       </div>
    </div>
</section>
 @endsection
 

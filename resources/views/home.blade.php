@extends('templates.main')
@section('content')
<style>
    h1 {
        color:red;
    }
</style>

<section class="home" id="home">
 <div class="image">
     <img src="{{asset('image\Oral care-amico.svg')}}" alt="">
</div>


 <div class="content">
    <h1>You are logged in</h1>
    <h3>Keep Your Smile Clean & Great</h3>
    <p> Your Teeth Your Life.</p>
    <a href="{{asset('appointment')}}" class="btn"> appointment us <span class="fas fa-chevron-right"></span> </a> 
   
 

</div>
</section>
 @endsection
 

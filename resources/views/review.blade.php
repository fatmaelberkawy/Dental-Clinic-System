@extends('templates.main')
@section('content')
<section class="review" id="review">
<h1 class="heading"> client's <span>review</span> </h1>
    
    <div class="box-container">

        <div class="box">
            <img src="{{asset('image\download.jpeg')}}" alt="">
            <h3>Amir Seif_Eldin</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">This clinic has helped me overcome my apprehension from dental treatment. With highly skilled and empathatic professionals and best protective measures for infection control, I a happy and satisfied patient.</p>
        </div>

        <div class="box">
            <img src="{{asset('image\＊ ♡𝆬_🎀 𝓐𝓲𝓺𝓲𝓻𝓵 ✿𝆬 ⃞ 🌊.jpeg')}}" alt="">
            <h3>Fatma Elberkawy</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Appreciable team and work. With their friendly nature, patient tend to feel calm and comfortable. Also, the doctors here are specialist in Lasers providing least painful treatment to the patient.</p>
        </div>

        <div class="box">
        <img src="{{asset('image\ae42fd66-984f-4953-8afc-9fcfe9e2f34f.jpeg')}}" alt="">
        <h3>Sara Essam</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">I highly recommend this dental clinic, visited recently as a new patient requiring treatment. I was at ease within minutes because of the skilled professional doctor working with latest technology.</p>
        </div>

    </div>
</section>
 @endsection
 



@if(session('user'))
    <!-- Navbar for logged in users -->
    <nav>
    
    <a href="{{route('home')}}" @class(['active'=>Route::is('home')])>Home</a> 
    <a href="{{route('about')}}" @class(['active'=>Route::is('about')])>About</a>
    <a href="{{route('services')}}" @class(['active'=>Route::is('services')])>Services</a>
    <a href="{{route('doctors')}}" @class(['active'=>Route::is('doctors')])>Doctors</a>
    <a href="{{route('faq')}}" @class(['active'=>Route::is('faq')])>Faq</a>
    <a href="{{route('review')}}" @class(['active'=>Route::is('review')])>Review</a>
    <a href="{{route('contact')}}" @class(['active'=>Route::is('contact')])>Contact</a>
    <a href="{{route('profile')}}" @class(['active'=>Route::is('profile')])>Profile</a> 
    <a href="{{route('logout')}}">Logout</a>
    
</nav>
@else
<nav>
    <!-- Navbar for guests -->
    <a href="{{route('showLogin')}}" @class(['active'=>Route::is('showLogin')])>Login</a> 
    <a href="{{route('showRegister')}}" @class(['active'=>Route::is('showRegister')])>Register</a>
</nav>
@endif

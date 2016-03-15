@extends('layouts.app')

@section('content')
<!-- Banner -->
<section id="banner">
    <div class="inner">
        <h2>Music Central</h2>
        <p>Welcome @if (Auth::guest()) guest @else {{ Auth::user()->name }} @endif<br>To the centrum of music!.</p>
        <ul class="actions">
            @if (Auth::guest())
                <li><a href="{{ url('/register') }}" class="button special">Register</a></li>
                <li><a href="{{ url('/login') }}" class="button special">Log In</a></li>
            @else

            @endif
        </ul>
    </div>
    <a href="#one" class="more scrolly">Learn More</a>
</section>

<!-- One -->
<section id="one" class="wrapper style1 special">
    <div class="inner">
        <header class="major">
            <h2>For Who?</h2>
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper alt style2">
    <section class="spotlight">
        <div class="image"><img src="images/bibelot.jpg" alt="" /></div><div class="content">
            <h2>Venue's and Bookers</h2>
            <p>Find bands listen to them and mail them.</p>
        </div>
    </section>
    <section class="spotlight">
        <div class="image"><img src="images/dead_company.jpg" alt="" /></div><div class="content">
            <h2>Artists and bands</h2>
            <p>Find venues to play and let venues find you!.</p>
        </div>
    </section>
    <section class="spotlight">
        <div class="image"><img src="images/studio.jpg" alt="" /></div><div class="content">
            <h2>Studio's and Producers</h2>
            <p>Let bands find your studio and play soundtracks on the website.</p>
        </div>
    </section>
</section>
@endsection

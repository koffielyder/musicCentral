<nav id="nav">
    <ul>
        <li class="special">
        <a href="#menu" class="menuToggle"><span>@if (Auth::guest())Hi Guest!@else{{ Auth::user()->name }}@endif</span></a>
            <div id="menu">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>
                        <ul class="multi-menu-holder" onclick="slide(1)" id="subMenu1">
                            <a>Music <div class="menu-arrow" id="arrow1">▲</div></a>
                            <div class="subMenuItem" id="subMenuItem1">
                                <li><a href="elements.html">Artists</a></li>
                                <li><a href="elements.html">Venues</a></li>
                            </div>
                        </ul>
                    </li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/register') }}">Sign Up</a></li>
                        <li><a href="{{ url('/login') }}">Log In</a></li>
                    @else
                        <li><a href="{{ url('/') }}">My Profile</a></li>
                        <li><a href="{{ url('/logout') }}">Log Out</a></li>
                    @endif
                </ul>
            </div>              
        </li>
    </ul>
</nav>
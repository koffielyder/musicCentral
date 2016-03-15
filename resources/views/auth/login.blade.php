@extends('layouts.general')

@section('content')
<section id="banner">
    <div class="inner">
        <div class="container">
            <div class="col-sm-4 col-md-4 col-lg-4"></div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <h2>Log In</h2>
                <form role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                    <div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" placeholder="Password" value="{{ old('email') }}"/>
                                
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" name="password" id="password-input" placeholder="Password" />
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                    </div>
                
                    <ul class="actions vertical">
                        @if (Auth::guest())
                            <li><button href="{{ url('/login') }}" type="submit" class="button padding col-xs-12 col-sm-12 col-md-12 col-lg-12">Log In</button></li>
                            <li><a href="{{ url('/register') }}" class="button special col-xs-12 col-sm-12 col-md-12 col-lg-12">Register</a></li>
                        @else

                        @endif
                    </ul>
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                </form>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4"></div>
        </div>
    </div>
</section>
@endsection

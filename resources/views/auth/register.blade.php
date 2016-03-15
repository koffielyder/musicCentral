@extends('layouts.general')

@section('content')
<section id="banner">
    <div class="inner">
        <div class="container">
            <div class="col-sm-4 col-md-4 col-lg-4"></div>

            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <h2>Register</h2>
                <form role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}
                    <div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"/>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"/>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding"></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding {{ $errors->has('Password') ? ' has-error' : '' }}">
                                <input type="password" name="password" placeholder="Password" />
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>  
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 padding {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input type="password" name="password_confirmation" placeholder="Password" />
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        
                    </div>
                
                    <ul class="actions vertical">
                        @if (Auth::guest())
                            <li><button href="{{ url('/register') }}" type="submit" class="button padding col-xs-12 col-sm-12 col-md-12 col-lg-12">Register</button></li>
                            <li><a href="{{ url('/login') }}" class="button special col-xs-12 col-sm-12 col-md-12 col-lg-12">Log In</a></li>
                        @else

                        @endif
                    </ul>
                </form>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4"></div>
        </div>
    </div>
</section>
@endsection



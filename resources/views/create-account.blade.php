@extends('layouts.default')

@section('content')
        <div class="create-ac">
            <div class="button-wrap">
                <div class="registration all-button active">
                    <a href="create-account">Registration</a>
                </div>
                <div class="log-in all-button">
                    <a href="login-to-account">Log in</a>
                </div>
            </div>
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="caption">
                    <p>Create Your Account</p>
                </div>
                <div class="inp-wrap">
                    <input id="firstName" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" name="firstName" value="{{ old('firstName') }}" placeholder="first name" required autofocus>
                    @if ($errors->has('firstName'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('firstName') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="inp-wrap">
                    <input id="lastName" type="text" class="form-control{{ $errors->has('lastName') ? ' is-invalid' : '' }}" name="lastName" value="{{ old('lastName') }}" placeholder="last name" required autofocus>
                    @if ($errors->has('lastName'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('lastName') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="inp-wrap">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="EMAIL" required >
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="inp-wrap half-part-wrap">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="inp-wrap half-part-wrap last-part">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">

                </div>
                <button class="btn btns submit" type="submit">
                    <i></i>
                    <p>CREATE</p>
                </button>
                <div class="social-wrap">
                    <div class="caption">
                        <p>Connect With</p>
                    </div>
                    <a href="{{route('auth/facebook')}}">Connect with
                        <img src="img/pics/connect-fb.png" alt="">
                    </a>
                    <a href="{{route('auth/vk')}}">Connect with
                        <img src="img/pics/connect-vk.png" alt="">
                    </a>
                    <a href="{{route('auth/google')}}">Connect with
                        <img src="img/pics/connect-g.png" alt="">
                    </a>
                </div>
                <input class="checkbox" type="checkbox" id="create-ac" name="checkbox">
                <label for="create-ac">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget laoreet est.</label>

            </form>
        </div>
@endsection
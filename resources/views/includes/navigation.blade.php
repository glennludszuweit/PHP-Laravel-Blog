<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">{{ config('app.name', 'gngBLOG') }}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('shop.index') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>

                @if(Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <form method="post" id="logout-form" action="{{ route('logout') }}">@csrf</form>
                        <a href="#" class="nav-link" onclick="document.getElementById('logout-form').submit();">Logout</a>
                    </li>

                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" >Login | Register</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#" data-toggle="modal" data-target="#ModalRegisterForm">Register</a>--}}
{{--                    </li>--}}
                @endif
            </ul>
        </div>
    </div>
</nav>

<!--  Login Modal  -->
{{--<div id="ModalLoginForm" class="modal fade">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content ml-2 mt-5">--}}
{{--            <div class="modal-header">--}}
{{--                <h2 class="modal-title">Login</h2>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">--}}
{{--                    @csrf--}}
{{--                    <div class="form-group">--}}
{{--                        <label class="form-control-label">Email</label>--}}
{{--                        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autofocus>--}}
{{--                        @if ($errors->has('email'))--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                        @endif--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <label class="form-control-label">Password</label>--}}
{{--                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required>--}}
{{--                        @if ($errors->has('password'))--}}
{{--                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                        @endif--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <div>--}}
{{--                            <div class="checkbox">--}}
{{--                                <label for="remember">--}}
{{--                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <div>--}}
{{--                            <button type="submit" class="btn btn-success">Login</button>--}}

{{--                            <a href="{{ route('password.request') }}" class="btn btn-link">{{ __('Forgot Your Password?') }}</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div><!-- /.modal-content -->--}}
{{--    </div><!-- /.modal-dialog -->--}}
{{--</div><!-- /.modal -->--}}

<!--  Register Modal  -->
{{--<div id="ModalRegisterForm" class="modal fade">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content ml-2 mt-5">--}}
{{--            <div class="modal-header">--}}
{{--                <h1 class="modal-title">Register</h1>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">--}}
{{--                    @csrf--}}
{{--                    <div class="card-body py-5">--}}
{{--                        <div class="form-group">--}}
{{--                            <label class="form-control-label">{{ __('Name') }}</label>--}}
{{--                            <input id="name" type="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}
{{--                            @if ($errors->has('name'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('name') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label class="form-control-label">{{ __('E-Mail Address') }}</label>--}}
{{--                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}
{{--                            @if ($errors->has('email'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label class="form-control-label">{{ __('Password') }}</label>--}}
{{--                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}
{{--                            @if ($errors->has('password'))--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                            @endif--}}
{{--                        </div>--}}

{{--                        <div class="form-group">--}}
{{--                            <label for="password-confirm" class="form-control-label">{{ __('Confirm Password') }}</label>--}}
{{--                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="form-group">--}}
{{--                        <button type="submit" class="btn btn-success btn-block">{{ __('Create Account') }}</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div><!-- /.modal-content -->--}}
{{--    </div><!-- /.modal-dialog -->--}}
{{--</div><!-- /.modal -->--}}

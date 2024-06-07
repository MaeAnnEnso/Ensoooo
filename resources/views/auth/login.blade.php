@include('layouts.header')
@include('layouts.script')
<body class="inner_page login">
    <div class="full_container">
        <div class="container">
            <div class="center verticle_center full_height">
                <div class="login_section">
                    <div class="logo_login">
                        <div class="center">
                            <img width="210" src="{{ asset('images/logo/logo.png')}}" alt="#" />
                        </div>
                    </div>
                    <div class="login_form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset>
                                <div class="field">
                                    <label class="label_field">Email Address</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="E-mail" value="{{ old('email') }}" autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label class="label_field">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="field">
                                    <label class="label_field hidden">hidden label</label>
                                    <label class="form-check-label"><input type="checkbox" class="form-check-input"> Remember Me</label>
                                    @if (Route::has('password.request'))
                                    <a class="forgot" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                                <div class="field margin_0">
                                    <label class="label_field hidden">hidden label</label>
                                    <button class="main_bt"> {{ __('Sign in') }}</button>
                                </div>
                                
                                <div class="text-center">
                                    <a class="nav-link" href="{{ route('register') }}">Create an Account.</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
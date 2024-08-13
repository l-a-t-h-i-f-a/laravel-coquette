<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" 
            required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" 
            required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AllStar | Login & Register</title>
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- STYLE -->
    <link rel="stylesheet" href="{{asset('AllStar')}}/assets/css/style.css">
</head>
<body>
    <div class="form-container">
        <div class="col col-1">
            <div class="image-layer">
                <img src="{{asset('AllStar')}}/assets/img/white-outline.png" class="form-image-main">
                <img src="{{asset('AllStar')}}/assets/img/dots.png" class="form-image dots">
                <img src="{{asset('AllStar')}}/assets/img/coin.png" class="form-image coin">
                <img src="{{asset('AllStar')}}/assets/img/spring.png" class="form-image spring">
                <img src="{{asset('AllStar')}}/assets/img/strr.png" class="form-image rocket">
                <img src="{{asset('AllStar')}}/assets/img/cloud.png" class="form-image cloud">
                <img src="{{asset('AllStar')}}/assets/img/stars.png" class="form-image stars">
            </div>
            <p class="featured-words">u're in a seconds to see our store <span>AllStar</span></p>
        </div>

    <div class="col col-2">
        <div class="btn-box">
            <button class="btn btn-1" id="login">Sign In</button>
            <button class="btn btn-2" id="register">Sign Up</button>
        </div>

            <!-- Login Form Container -->
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-form">
            <div class="form-title">
                <span>Sign In</span>
            </div>
            <div class="form-inputs">
                <div class="input-box">
                    <input type="text" id="email" name="email" class="input-field" placeholder="Email" :value="old('email')" required autofocus autocomplete="username">
                    <i class="bx bx-user icon"></i>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" class="input-field" placeholder="Password" required autocomplete="current-password">
                    <i class="bx bx-lock-alt icon"></i>
                </div>
                <div class="forgot-pass">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                @endif
                </div>
                <div class="input-box">
                    <button class="input-submit">
                        <span>{{ __('Sign In') }}</span>
                        <i class="bx bx-right-arrow-alt"></i>
                    </button>
                </div>
           </div>
           <div class="social-login">
                <i class="bx bxl-google"></i>
                <i class="bx bxl-facebook"></i>
                <i class="bx bxl-twitter"></i>
                <i class="bx bxl-github"></i>
            </div>
        </div>
    </form>
           
       <!-- Register Form Container -->
       <form method="POST" action="{{ route('register') }}">
       @csrf
        <div class="register-form">
            <div class="form-title">
                <span>Create</span>
            </div>
            <div class="form-inputs">
                <div class="input-box">
                    <input  id="name" class="input-field" type="text" name="name" :value="old('name')" 
            required autofocus autocomplete="name">
                    <i class="bx bx-envelope icon"></i>
                </div>
                <div class="input-box">
                    <input id="email" class="input-field" type="email" name="email" :value="old('email')" 
                    required autocomplete="username">
                    <i class="bx bx-user icon"></i>
                </div>
                <div class="input-box">
                    <input id="password" class="input-field"
                            type="password"
                            name="password"
                            required autocomplete="new-password">
                    <i class="bx bx-lock-alt icon"></i>
                </div>
                <div class="input-box">
                    <button class="input-submit">
                        <span>{{ __('Sign Up') }}</span>
                        <i class="bx bx-right-arrow-alt"></i>
                    </button>
                </div>
            </div>
            <div class="social-login">
                <i class="bx bxl-google"></i>
                <i class="bx bxl-facebook"></i>
                <i class="bx bxl-twitter"></i>
                <i class="bx bxl-github"></i>
            </div>
        </div>
       </form>
    </div>

    <!-- JS -->
    <script src="{{asset('AllStar')}}/assets/js/main.js"></script>
</body>
</html>

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
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
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<!-- BEGIN: Head -->

<!-- Mirrored from rubick.left4code.com/page/login/light/register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2022 12:05:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <link href="../../../dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">

    <title>Register - Midone - Tailwind HTML Admin Template</title>

    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="../../../dist/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="#" class="-intro-x flex items-center pt-5">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="../../../dist/images/logo.svg">
                    <span class="text-white text-lg ml-3">
                        Car Rental
                    </span>
                </a>
                <div class="my-auto">
                    <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                        src="../../../dist/images/illustration.svg">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">A few more clicks to <br>
                        sign up to your account.</div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your
                        e-commerce accounts in one place</div>
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">Sign Up</h2>
                    <form action="{{ route('register') }}" method="post">@csrf

                        <div class="intro-x mt-2 text-slate-400 dark:text-slate-400 xl:hidden text-center">A few more
                            clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                        <div class="intro-x mt-8">
                            <input type="text" name="name"
                                class="intro-x login__input form-control py-3 px-4 block" placeholder="Name">
                            <input type="text" name="email"
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Email">
                            <input type="password" name="password"
                                class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="password">
                            <input type="password" name="password_confirmation"
                                class="intro-x login__input form-control py-3 px-4 block mt-4"
                                placeholder="Confirm Password">
                            <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-success"></div>
                                <div class="col-span-3 h-full rounded bg-slate-100 dark:bg-darkmode-800"></div>
                            </div>
                        </div>
                        <div
                            class="intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm">
                            <input id="remember-me" type="checkbox" class="form-check-input border mr-2">
                            <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
                            <a class="text-primary dark:text-slate-200 ml-1" href="#">Privacy Policy</a>.
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Register</button>
                            <button
                                class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top">Sign
                                in</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>
    <!-- BEGIN: Dark Mode Switcher-->
    <div data-url="http://rubick.left4code.com/page/login/dark/register"
        class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
        <div class="dark-mode-switcher__toggle  border"></div>
    </div>
    <!-- END: Dark Mode Switcher-->
    <!-- BEGIN: Main Color Switcher-->
    <div
        class="shadow-md fixed bottom-0 right-0 box border rounded-full h-12 px-5 flex items-center justify-center z-50 mb-10 mr-52">
        <div class="mr-4 hidden sm:block text-slate-600 dark:text-slate-200">Color Scheme</div>
        <a href="register0779.html?color_scheme=default"
            class="block w-8 h-8 cursor-pointer bg-blue-800 rounded-full border-4 mr-1 hover:border-slate-200 border-slate-300 dark:border-darkmode-800/80"></a>
        <a href="registercf7b.html?color_scheme=theme-1"
            class="block w-8 h-8 cursor-pointer bg-emerald-900 rounded-full border-4 mr-1 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
        <a href="register4150.html?color_scheme=theme-2"
            class="block w-8 h-8 cursor-pointer bg-blue-900 rounded-full border-4 mr-1 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
        <a href="registerc3da.html?color_scheme=theme-3"
            class="block w-8 h-8 cursor-pointer bg-cyan-900 rounded-full border-4 mr-1 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
        <a href="register9fb4.html?color_scheme=theme-4"
            class="block w-8 h-8 cursor-pointer bg-indigo-900 rounded-full border-4 hover:border-slate-200 border-white dark:border-darkmode-600"></a>
    </div>
    <!-- END: Main Color Switcher-->

    <!-- BEGIN: JS Assets-->
    <script src="../../../dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>


<!-- Mirrored from rubick.left4code.com/page/login/light/register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Dec 2022 12:05:21 GMT -->

</html>

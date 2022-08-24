<!DOCTYPE html>

<html>

<head>



    <title>Giriş</title>



    <meta name="viewport" content="width=device-width, initial-scale=1.0 ,maximum-scale=1.0 , user-scalable=no">

    <!--Farklı cihazlardan girişte aynı görünsün user-scaleble=no kullanıcı sayfayı büyüteemesin küçültemesin -->

    <meta name="description" content="Türkiyenin en gelişmiş ve en iyi kitap oylama sitesi">

    <!--site aratıldığı zaman altında yazan bilgi-->

    <meta name="keywords" content="Kitap oyla,Roman Oyla,Kitap Yorum Yap,Roman Yorum Yap">

    <!-- Site için tanımlanabilecek temel etiketler-->

    <meta charset="UTF-8">

    <!--Site dili için-->

    <meta http-equiv="Content-language" content="tr" />

    <!--Site dili için-->

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Microsoft Edge için-->

    <meta name="robots" content="index , follow , noarchive">

    <!--Botlar için site indexlenebilir takip elilebilir fakat arşivlenemez diyoruz-->

    <meta name="revisit-after" content="7 Days">

    <!--arama motoru ve benzeri robotlar ne kadar süreyle sayfayı ziyaret etsin-->

    <meta name="rating" content="general">

    <!-- Sayfa kimlere hitap ediyor general=genel -->

    <meta name="copyright" content="Copyright &copy;2022 - 2023 kutuphane.test Her hakkı saklıdır">

    <!--site sahibi-->

    <meta name="reply-to" content="bilgehanbezir741@gmail.com">

    <!-- Arama motorları Web site sahibine buradan ulaşabilirsiniz diye belirtiyoruz-->

    <meta name="author" content="Bilgehan Bezir - bilgehanbezir741@gmail.com">

    <!--site sahibi hakkında bilgi-->

    <meta name="designer" content="Bilgehan Bezir">

    <!--siteyi kim tasarladı kim dizayn etti-->

    <meta name="generator" content="Visual Studio Code">

    <!--site hangi programda yazıldı-->

    <link rel="stylesheet" href="/kitap/css/index.css">

    <link type="image/png" rel="icon" sizes="96x96" href="/kitap/images/book-1.png">
    <!-- Yeni sekmenin yanındaki ikon -->



    <style>
        body {

            margin: 0;

            color: #b1b1b1;

            background: url(/kitap/images/Kutuphane.jpg);

            font: 600 16px/18px 'Open Sans', sans-serif;

            background-size: 100%;

            background-attachment: fixed;

        }

        *,
        :after,
        :before {
            box-sizing: border-box
        }

        .clearfix:after,
        .clearfix:before {
            content: '';
            display: table
        }

        .clearfix:after {
            clear: both;
            display: block
        }

        a {
            color: inherit;
            text-decoration: none
        }



        label,
        a {

            user-select: none;

        }



        .login-wrap {

            width: 100%;

            margin: auto;

            max-width: 525px;

            min-height: 700px;

            position: relative;

            margin-top: 30px;

        }

        .login-html {

            width: 100%;

            height: 100%;

            position: absolute;

            padding: 70px 70px 50px 70px;

            background: #002c2c;

            border-radius: 30px;

        }

        .login-html .sign-in-htm,

        .login-html .sign-up-htm {

            top: 0;

            left: 0;

            right: 0;

            bottom: 0;

            position: absolute;

            transform: rotateY(180deg);

            backface-visibility: hidden;

            transition: all .4s linear;

        }

        .login-html .sign-in,

        .login-html .sign-up,

        .login-form .group .check {

            display: none;

        }

        .login-html .tab,

        .login-form .group .label,

        .login-form .group .button {

            text-transform: uppercase;

            user-select: none;

            cursor: pointer;

        }

        .login-html .tab {

            font-size: 22px;

            margin: 0 15px 10px 0;

            display: inline-block;

            border-bottom: 2px solid transparent;

        }

        .login-html .sign-in:checked+.tab,

        .login-html .sign-up:checked+.tab {

            color: #fff;

            border-color: #ff5e00;

        }

        .login-form {

            min-height: 345px;

            position: relative;

            perspective: 1000px;

            transform-style: preserve-3d;

        }

        .login-form .group {

            margin-bottom: 10px;

        }

        .login-form .group .label,

        .login-form .group .input,

        .login-form .group .button {

            width: 100%;

            color: #fff;

            display: block;

        }

        .login-form .group .input,

        .login-form .group .button {

            border: none;

            padding: 10px 10px;

            border-radius: 25px;

            background: rgba(255, 255, 255, .1);

        }

        .login-form .group input[data-type="password"] {

            text-security: circle;

            -webkit-text-security: circle;

        }

        .login-form .group .label {

            color: rgb(255, 255, 255);

            font-size: 12px;

        }

        .login-form .group .button {

            background: #ff5e00;

        }



        .login-form .group label .icon {

            width: 15px;

            height: 15px;

            border-radius: 2px;

            position: relative;

            display: inline-block;

            background: rgba(255, 0, 0, 0.1);

        }

        .login-form .group label .icon:before,

        .login-form .group label .icon:after {

            content: '';

            width: 10px;

            height: 2px;

            background: rgb(255, 255, 255);

            position: absolute;

            transition: all .2s ease-in-out 0s;

        }

        .login-form .group label .icon:before {

            left: 3px;

            width: 5px;

            bottom: 6px;

            transform: scale(0) rotate(0);

        }

        .login-form .group label .icon:after {

            top: 6px;

            right: 0;

            transform: scale(0) rotate(0);

        }

        .login-form .group .check:checked+label {

            color: rgb(255, 255, 255);

        }

        .login-form .group .check:checked+label .icon {

            background: #00ff73;

        }

        .login-form .group .check:checked+label .icon:before {

            transform: scale(1) rotate(45deg);

        }

        .login-form .group .check:checked+label .icon:after {

            transform: scale(1) rotate(-45deg);

        }

        .login-html .sign-in:checked+.tab+.sign-up+.tab+.login-form .sign-in-htm {

            transform: rotate(0);

        }

        .login-html .sign-up:checked+.tab+.login-form .sign-up-htm {

            transform: rotate(0);

        }



        .hr {

            height: 2px;

            margin: 30px 0 20px 0;

            background: rgb(255, 255, 255);

        }

        .foot-lnk {

            text-align: center;

        }
    </style>



</head>





<body>




    <div class="login-wrap">

        <div class="login-html">

            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label
                style="margin-left: 60px;" for="tab-1" class="tab">Giriş Yap</label>

            <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label
                style="margin-left: 60px;" for="tab-2" class="tab">Kayıt Ol</label>

            <div class="login-form">

                <div class="sign-in-htm">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="group">
                            <x-label for="email" class="label" :value="__('E-mail')" />

                            <x-input id="email" class="block mt-1 w-full input" type="email" name="email"
                                :value="old('email')" required autofocus />

                        </div>

                        <div class="group">

                            <x-label for="password" class="label" :value="__('Şifre')" />

                            <x-input id="password" class="block mt-1 w-full input" type="password" name="password"
                                required autocomplete="current-password" />

                        </div>

                        <div class="group">

                            <input id="check" type="checkbox" class="check" checked>

                            <label for="check"><span class="icon"></span> Hesabı Kaydet</label>

                        </div>

                        <div class="group">
                            <x-button class="ml-3 button">
                                {{ __('Giriş Yap') }}
                            </x-button>
                        </div>

                    </form>
                    <div class="hr"></div>

                    <div class="foot-lnk">

                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('password.request') }}">
                                {{ __('Şifreni mi unuttun?') }}
                            </a>
                        @endif

                    </div>

                </div>

                <div class="sign-up-htm">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- First_name -->

                        <div class="group">

                            <x-label for="first_name" class="label" :value="__('Ad')" />

                            <x-input id="first_name" class="block mt-1 w-full input" type="text" name="first_name"
                                :value="old('first_name')" required autofocus />

                        </div>

                        <!-- Last_name -->

                        <div class="group">

                            <x-label for="last_name" class="label" :value="__('Soyad')" />

                            <x-input id="last_name" class="block mt-1 w-full input" type="text" name="last_name"
                                :value="old('last_name')" required autofocus />

                        </div>

                        <!-- Phone -->

                        <div class="group">

                            <x-label for="phone" class="label" :value="__('Telefon')" />

                            <x-input id="phone" class="block mt-1 w-full input" type="text" name="phone"
                                :value="old('phone')" required autofocus />

                        </div>

                        <!-- Email Address -->

                        <div class="group">
                            <x-label for="email" class="label" :value="__('E-mail')" />

                            <x-input id="email" class="block mt-1 w-full input" type="email" name="email"
                                :value="old('email')" required />

                        </div>

                        <!-- Address -->

                        <div class="group">

                            <x-label for="address" class="label" :value="__('Adres')" />

                            <x-input id="address" class="block mt-1 w-full input" type="text" name="address"
                                :value="old('address')" required autofocus />

                        </div>
                        <!-- Password -->

                        <div class="group">
                            <x-label for="password" class="label" :value="__('Şifre')" />

                            <x-input id="password" class="block mt-1 w-full input" type="password" name="password"
                                required autocomplete="new-password" />

                        </div>

                        <!-- Confirm Password -->

                        <div class="group">
                            <x-label for="password_confirmation" class="label" :value="__('Şifreyi Tekrarla')" />

                            <x-input id="password_confirmation" class="block mt-1 w-full input" type="password"
                                name="password_confirmation" required />

                        </div>

                        <!--Confirm Button-->

                        <div class="group">

                            <x-button class="ml-4 button">
                                {{ __('Üye Ol') }}
                            </x-button>

                        </div>

                        <div class="hr"></div>

                        <!--Already register?-->

                        <div class="foot-lnk">

                            <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                href="{{ route('login') }}">
                                {{ __('Çoktan üye misin?') }}
                            </a>

                        </div>

                </div>

            </div>

        </div>

    </div>













</body>

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>


            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}

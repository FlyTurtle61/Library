<!DOCTYPE html>

<html>

<head>



    <title> Giriş</title>



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

            min-height: 500px;

            position: relative;

            margin-top: 10%;

        }

        .login-html {

            width: 100%;

            height: 100%;

            position: absolute;

            padding: 70px 70px 50px 70px;

            background: #002c2c;

            border-radius: 30px;

        }


        .group .label,

        .group .button {

            text-transform: uppercase;

            user-select: none;

            cursor: pointer;

        }



        .group {

            margin-bottom: 10px;

        }

        .group .label,

        .group .input,

        .group .button {

            width: 100%;

            color: #fff;

            display: block;

        }

        .group .input,

        .group .button {

            border: none;

            padding: 10px 10px;

            border-radius: 25px;

            background: rgba(255, 255, 255, .1);

        }

        .group input[data-type="password"] {

            text-security: circle;

            -webkit-text-security: circle;

        }

        .group .label {

            color: rgb(255, 255, 255);

            font-size: 12px;

        }

        .group .button {

            background: #ff5e00;

        }
    </style>



</head>





<body>

    <div class="login-wrap">

        <div class="login-html">

            <div class="login-form">
                <div class="group">
                    <h1>Forgot Password</h1>
                    <br><br>
                    <div class="label">
                        {{ __(' "Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one." ') }}
                    </div>
                </div>
                <br>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="group">
                        <x-label for="email" class="label" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full input" type="email" name="email"
                            :value="old('email')" required autofocus />
                    </div>

                    <div class="flex items-center justify-end mt-4 group">
                        <x-button class="button">
                            {{ __('Email Password Reset Link') }}
                        </x-button>
                    </div>
                </form>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" style="color: green" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" style="color: red" :errors="$errors" />
            </div>
        </div>
    </div>
















</body>


{{-- <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form> --}}

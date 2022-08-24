<!DOCTYPE html>
<html lang="tr">

<head>
    <title>@yield('title')</title>

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

    <link type="image/png" rel="icon" sizes="96x96" href="/kitap/images/book-1.png">
    <!-- Yeni sekmenin yanındaki ikon -->


    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">

    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">

    <link rel="stylesheet" href="/assets/css/app.css">

    <link rel="shortcut icon" href="/assets/images/favicon.svg" type="image/x-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background-color: #e5e5e5;
            /*Büyük scrool bence buna radius vermiyelim çünkü güzel bir görüntü olmuor boşluk kalıyor */
        }

        ::-webkit-scrollbar-thumb {
            /* scrool un içindeki küçük scrool yükseklik ayarıylada oynayabiliriz belki */
            -webkit-border-radius: 10px;
            border-radius: 10px;
            background: rgb(0, 221, 255);
        }
    </style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            @yield('sidebar')
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>@yield('page_title')</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    @yield('content')
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-end">

                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://google.com">Bilgehan Bezir</a></p>
                        <p>2022 &copy; "kutuphane.com Tüm hakları saklıdır"</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>


    <script src="/assets/js/main.js"></script>
</body>

</html>

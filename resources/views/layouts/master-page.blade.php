<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>


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
    background-color: #0f0966;			/*Büyük scrool bence buna radius vermiyelim çünkü güzel bir görüntü olmuor boşluk kalıyor */
}

::-webkit-scrollbar-thumb {			/* scrool un içindeki küçük scrool yükseklik ayarıylada oynayabiliriz belki */
    -webkit-border-radius: 10px;
    border-radius: 10px;
    background: rgb(0, 179, 255);
}
    </style>
</head>

<body>
<div id="app">
    <div id="sidebar" class="active">
       @yield("sidebar")
    </div>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>@yield("page_title")</h3>
        </div>
        <div class="page-content">
            <section class="row">
                @yield("content")
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

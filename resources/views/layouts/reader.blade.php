<!DOCTYPE html>

<html>

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

    <link rel="stylesheet" href="/kitap/css/index.css">

    <link type="image/png" rel="icon" sizes="96x96" href="/kitap/images/book-1.png">
    <!-- Yeni sekmenin yanındaki ikon -->

</head>



<body>

    <header>

        <a style="z-index: -1; opacity: 0; margin-top: 0;" name="Yukarı"> </a>

        <nav id="UstMenu">

            <div id="UstMenuAcmaButonu">

                <div class="UstMenuAcmaButonuSilindir">



                </div>

                <div class="UstMenuAcmaButonuSilindir">



                </div>

                <div class="UstMenuAcmaButonuSilindir">



                </div>

            </div>

            <ul id="UstMenu-Left">

                <li class="Left-Options"><a href="main">Anasayfa</a></li>

                <li class="Left-Options"><a href="hakkımızda.html">Hakkımızda</a></li>

                <li class="Left-Options"><a href="iletişim.html">İletişim</a></li>

                <li id="Drop" class="Left-Options">

                    <a>Takip Edin ⬇</a>

                    <ul id="DropDown">

                        <li class="drop"><a href="https://www.facebook.com/bilgehan.bezir.5">Facebook</a></li>

                        <li class="drop"><a href="https://www.instagram.com/bezirrrr/?hl=tr">İnstagram</a></li>

                        <li class="drop"><a href="https://twitter.com/AguBugu63700448">Twitter</a></li>

                        <li class="drop"><a href="https://www.linkedin.com/in/bilgehan-bezir-612b431b9/">Linkedin</a>
                        </li>

                        <li class="drop"><a
                                href="https://www.youtube.com/channel/UCmd16bN_WWv5K-KAsc0dukQ?view_as=subscriber">Youtube</a>
                        </li>

                    </ul>

                </li>

                <li class="Left-Options"><a href="wallpaperlar-page-1.html">Wallpaperlar</a></li>

                <li class="Left-Options"><a href="videolar.html">Videolar</a></li>





            </ul>

            <ul id="UstMenu-Right">


                <li id="Drop" class="Right-Options">

                    <a>Profilim ⬇</a>

                    <ul id="DropDown">

                        <li class="drop"><a href="">Deneme</a></li>

                        <li class="drop"><a href="">Deneme</a></li>

                        <li class="drop">
                            <form method="POST" action="http://kutuphane.test/logout">
                                @csrf
                                <a href="http://kutuphane.test/logout"
                                    onclick="event.preventDefault();
                                this.closest('form').submit();">

                                    Çıkış Yap
                                </a>
                            </form>
                        </li>

                    </ul>

                </li>
            </ul>

        </nav>



        <div id="UstMenuAcmaButonuAlani">

            <ul>

                <li class="UstMenuAcmaButonuSecenekleri"> <a href="index.html">Anasayfa </a> </li>

                <li class="UstMenuAcmaButonuSecenekleri"> <a href="hakkımızda.html"> Hakkımızda</a> </li>

                <li class="UstMenuAcmaButonuSecenekleri"> <a href="iletişim.html">İletişim </a> </li>

                <li class="UstMenuAcmaButonuSecenekleri"> <a href="wallpaperlar-page-1.html"> Wallpaperlar</a> </li>

                <li class="UstMenuAcmaButonuSecenekleri"> <a href="videolar.html">Videolar </a> </li>

            </ul>

        </div>

    </header>



    <main>
        @yield('content')
    </main>



    <div id="yukarı">

        <a href="#Yukarı"> <img src="/kitap/images/yukarı-ikon.png" alt="Yukarı Gitmek İçin Bas">

        </a>

    </div>



    <footer>

        <div id="FooterSol">

            <div id="FooterSolResim"><img src="/kitap/images/1180606026.jpg" alt=""></div>

            <div id="FooterSolYazi">
                <p>Bilgehan Bezir</p>
            </div>

        </div>



        <div id="FooterOrta">



            <div class="FooterOrtaBilgiler">

                <p>Popüler Kitap Türleri</p>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Dünya Klasikleri</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Korku-Gerilim</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Macera-Aksiyon</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Fantastik</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Bilim Kurgu</a>

                </div>

            </div>



            <div class="FooterOrtaBilgiler">

                <p>Popüler Yazarlar</p>



                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Charles Dickens</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Victor Hugo</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Ahmet Ümit</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">J.R.Tolkien</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">George R. R. Martin</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Stephen King</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Dostoyevski</a>

                </div>



            </div>



            <div class="FooterOrtaBilgiler">

                <p>Popüler Kitaplar</p>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Babalar Ve Oğullar</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">İki Şehrin Hikayesi</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Yüzüklerin Efendisi</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Sultanı Öldürmek</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Kralların Yolu</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Taht Oyunları</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Sefiller</a>

                </div>

            </div>



            <div class="FooterOrtaBilgiler">

                <p>Popüler Yayınevleri</p>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Truva Yayınları</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Maçka Yayınları</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Duru Yayınları</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Bilge Yayınları</a>

                </div>

                <div class="FooterOrtaBilgilerAlani">

                    <a href="">Alfa Yayınları</a>

                </div>

            </div>

        </div>



        <div id="FooterSag">

            <div class="footer-ikon">

                <a href="https://www.facebook.com/bilgehan.bezir.5" title="facebook"> <img class="ikon-footer"
                        src="/kitap/images/facebook-ikon.png" alt="facebook"></a>

                <a href="https://www.instagram.com/bezirrrr/?hl=tr" title="instagram"> <img class="ikon-footer"
                        src="/kitap/images/instagram-ikon.png" alt="instagram"></a>

                <a href="https://www.linkedin.com/in/bilgehan-bezir-612b431b9/" title="Linkedin"> <img
                        class="ikon-footer" src="/kitap/images/linkedin.png" alt="Linkedin"></a>

            </div>



            <div class="footer-ikon">

                <a href="https://twitter.com/AguBugu63700448" title="twitter"> <img class="ikon-footer"
                        src="/kitap/images/twitter-ikon.png" alt="twitter"></a>

                <a href="https://www.youtube.com/channel/UCmd16bN_WWv5K-KAsc0dukQ?view_as=subscriber" title="youtube">
                    <img class="ikon-footer"src="/kitap/images/youtube-ikon.png" alt="youtube"></a>

                <a href="https://github.com/FlyTurtle61" title="Github"> <img class="ikon-footer"
                        src="/kitap/images/github-ikon.png" alt="Github"></a>

            </div>



            <div class="footer-ikon">

                <a href="yapım aşamasında.html" class="mail-footer">📧 bilgehanbezir741@gmail.com</a>

            </div>

        </div>







    </footer>



    <div id="Haklarimiz">

        <p>"CopyRight © 18.07.2022 kutuphane.test TÜM Hakları Saklıdır"</p>

    </div>


</body>

</html>

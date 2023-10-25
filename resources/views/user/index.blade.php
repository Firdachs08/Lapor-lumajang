<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Favicon-->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--Remix icons-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <!--css-->
    <link rel="stylesheet" href="{{url('dist/css/style.css')}}">

    <title>Document</title>
</head>
<body>
    <!--======HEADER=====-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                Kabupaten LUMAJANG
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#beranda" class="nav__link">Beranda</a>
                    </li>
                    <li class="nav__item">
                        <a href="#form" class="nav__link">Formulir Pengaduan</a>
                    </li>
                    <li class="nav__item">
                        <a href="#panduan" class="nav__link">Panduan</a>
                    </li>
                    <li class="nav__item">
                        <a href="#kontak" class="nav__link">Kontak Kami</a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-fill"></i>
                </div>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__img">
                    <img src="dist/assets/img/kominfo.jpg" alt="" class="home__img">
                </div>


                <div class="home__data">
                    <h1 class="home__title">
                        LAPOR LUMAJANG
                    </h1>
                    <p class="home__description">
                        Aplikasi pengaduan masyarakat yang memberikan Anda suara dalam membangun komunitas yang lebih baik.
                        Di sini, Anda memiliki kesempatan untuk melaporkan masalah sekitar Anda,
                        mulai dari infrastruktur hingga keamanan,
                        dan memastikan bahwa suara Anda didengar.
                    </p>
                    <a href="" class="button button--flex">
                        Kirim Pengaduan
                    </a>
                </div>
            </div>
        </section>

        <!--=====Step=====-->
        <section class="steps section container">
            <div class="steps__bg">
                <h2 class="section__title-center steps__title">
                    Langkah-langkah Pengaduan
                </h2>
                <div class="steps__container grid">
                    <div class="steps__bg2">
                    <div class="steps__card">
                        <div class="steps__card-number">01</div>
                        <h3 class="steps__card-title">siapkan data diri</h3>
                        <p class="steps__card-description">siapkan ktp data diri anda</p>
                    </div>
                    <div class="steps__card">
                        <div class="steps__card-number">02</div>
                        <h3 class="steps__card-title">Ktp</h3>
                        <p class="steps__card-description">patikan ktp anda</p>
                    </div>
                    <div class="steps__card">
                        <div class="steps__card-number">03</div>
                        <h3 class="steps__card-title">isi formulir</h3>
                        <p class="steps__card-description"></p>
                    </div>
                    <div class="steps__card">
                        <div class="steps__card-number">04</div>
                        <h3 class="steps__card-title">pengaduan selesai</h3>
                        <p class="steps__card-description"></p>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pengaduan" id="pengaduan">
            <div class="feed-container container">
                <!-- Kotak Pengadu -->
                <div class="pengadu-box">
                    <div class="pengadu-icon">
                        <!-- Tambahkan ikon orang di sini -->
                        <i class="ri-user-fill"></i>
                        <p class="identitas-pengadu">identitas pengadu</p>
                    </div>
                </div>

                <!-- Kotak Isi Pengaduan -->
                <div class="isi-pengaduan-box">
                    <div class="isi-pengaduan-content">
                        <h3 class="isi-pengaduan-title">Judul Pengaduan</h3>
                        <p class="isi-pengaduan-description">Deskripsi pengaduan. Deskripsi pengaduan. Deskripsi pengaduan.</p>
                    </div>
                </div>
            </div>

            <div class="feed-container container">
                <!-- Kotak Pengadu -->
                <div class="pengadu-box">
                    <div class="pengadu-icon">
                        <!-- Tambahkan ikon orang di sini -->
                        <i class="ri-user-fill"></i>
                        <p class="identitas-pengadu">identitas pengadu</p>
                    </div>
                </div>

                <!-- Kotak Isi Pengaduan -->
                <div class="isi-pengaduan-box">
                    <div class="isi-pengaduan-content">
                        <h3 class="isi-pengaduan-title">Judul Pengaduan</h3>
                        <p class="isi-pengaduan-description">Deskripsi pengaduan. Deskripsi pengaduan. Deskripsi pengaduan.</p>
                    </div>
                </div>
            </div>
        </section>




    </main>

    <!--=====FOOTER=====-->
    <footer class="footer section">
        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="#" class="footer__logo">
                    <i class=""></i> Diskominfo Lumajang
                </a>

                <h3 class="footer__title">
                    Subscribe to our newsletter <br> to stay update
                </h3>

                <div class="footer__subscribe">
                    <input type="email" placeholder="Enter your email" class="footer__input">

                    <button class="button button--flex footer__button">
                        Subscribe
                        <i class="ri-arrow-right-up-line button__icon"></i>
                    </button>
                </div>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Our Address</h3>

                <ul class="footer__data">
                    <li class="footer__information">1234 - Peru</li>
                    <li class="footer__information">La Libertad - 43210</li>
                    <li class="footer__information">123-456-789</li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Contact Us</h3>

                <ul class="footer__data">
                    <li class="footer__information">+999 888 777</li>

                    <div class="footer__social">
                        <a href="https://www.facebook.com/" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" class="footer__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">
                    We accept all credit cards
                </h3>

                <div class="footer__cards">
                    <img src="assets/img/card1.png" alt="" class="footer__card">
                    <img src="assets/img/card2.png" alt="" class="footer__card">
                    <img src="assets/img/card3.png" alt="" class="footer__card">
                    <img src="assets/img/card4.png" alt="" class="footer__card">
                </div>
            </div>
        </div>

        <p class="footer__copy">&#169; Bedimcode. All rigths reserved</p>
    </footer>

    <!--=====Scroll up=====-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-fill scrollup__icon"></i>
    </a>
    <!--=====Scroll Reveal=====-->
    <script src=""></script>

    <script src="dist/js/main.js"></script>


</body>
</html>

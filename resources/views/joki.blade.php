<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">

    <!--=============== FAVICON ===============-->
    <link
        rel="shortcut icon"
        href="assets/img/favicon.png"
        type="image/x-icon" />

    <!--=============== REMIXICONS ===============-->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
        rel="stylesheet" />

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/joki.css">

    <title>YVEZH - Joki</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="{{ route('index') }}" target="_blank" class="nav__logo"> YVEZH JOKI </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__itemm">
                        <a href="#home" class="nav__link active-link">
                            <i class="ri-home-5-line"></i> Home
                        </a>
                    </li>
                    <li class="nav__itemm">
                        <a href="#info_dikit" class="nav__link">
                            <i class="ri-information-line"></i> About Us
                        </a>
                    </li>
                    <li class="nav__itemm">
                        <a href="#achievements" class="nav__link">
                            <i class="ri-shield-star-line"></i> Why Us?
                        </a>
                    </li>
                    <li class="nav__itemm">
                        <a href="#projects" class="nav__link">
                            <i class="ri-price-tag-3-line"></i> Price List
                        </a>
                    </li>
                    <li class="nav__itemm">
                        <a href="#tata_cara" class="nav__link">
                            <i class="ri-guide-line"></i> Joki Guide
                        </a>
                    </li>
                    <li class="nav__itemm">
                        <a href="#contact" class="nav__link">
                            <i class="ri-mail-send-line"></i> Contact Us
                        </a>
                    </li>
                </ul>

                <!-- Close button -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__buttons">
                <!-- Theme change button -->
                <i class="ri-moon-line change-theme" id="theme-button"></i>

                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid section__border">
                <div class="home__data grid">
                    <h1 class="home__title">
                        Jasa Joki <br />
                        Genshin Impact <br />
                    </h1>
                    <div class="home__blob grid">
                        <div class="home__perfil">
                            <img src="poster.png" alt="home perfil" />
                        </div>
                        <img
                            src="assets/img/shape-wawes.svg"
                            alt=""
                            class="home__shape-wawes" />
                        <img
                            src="assets/img/shape-circle.svg"
                            alt=""
                            class="home__shape-circle" />
                    </div>
                    <ul class="home__social">
                        <a href="#" target="_blank" class="home__social-link">
                            <i class="ri-linkedin-box-line"></i>
                        </a>
                        <a href="#" target="_blank" class="home__social-link">
                            <i class="ri-github-line"></i>
                        </a>
                        <a href="#" target="_blank" class="home__social-link">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </ul>
                </div>
                <!--==================== HOME INFO 1 ====================-->
                <div class="home__info">
                    <div>
                        <h3 class="home__info-title">JASA JOKI GENSIN IMPEK</h3>
                        <p class="home__info-description">
                            Joki Genshin teraman no fek - fek no scam aseli guys, estimasi pengerjaan "secepatnya" saaat atmin sedang tidak sibuk
                        </p>
                    </div>
                    <div>
                        <h3 class="home__info-title">CONTACT</h3>
                        <p class="home__info-description">
                            Jawa Tengah <br />
                            giipc5013@gmail.com.com <br />
                            +62 821 3612 2777 <br />
                        </p>
                    </div>
                    <div>
                        <h3 class="home__info-title">SPILL - SPILL AKUN ATMIN</h3>
                        <p class="home__info-description">
                            Udah AR 60 - Dah jadi sepuh lek <br />
                            Explor udah tamat semua - Karakter udah gausah ditanya<br />
                        </p>
                    </div>
                </div>

                <!--==================== HOME INFO 2 ====================-->
                <div class="home__info">
                    <div>
                        <h3 class="home__info-title">UID AKUN ATMIN</h3>
                        <p class="home__info-number">880069908</p>
                    </div>
                    <div>
                        <h3 class="home__info-title">JUMLAH PEKERJA</h3>
                        <p class="home__info-number">1 (Atmin sendirian)</p>
                    </div>
                    <div>
                        <h3 class="home__info-title">JUMLAH YANG UDAH JOKI</h3>
                        <p class="home__info-number">3+ (buka pas gabut doang)</p>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== INFO DIKIT ====================-->
        <section class="qualification section" id="info_dikit">
            <h2 class="section__title">Info Dikit</h2>
            <span class="section__subtitle"> Sedikit Ingfo Soal Joki Yvezh </span>
            <div class="qualification__container container grid section__border">
                <!--==================== QUALIFICATION 1 ====================-->
                <div class="qualification__content">
                    <h3 class="qualification__title">
                        <i class="ri-book-line"></i> Tentang Joki Genshin Yvezh
                    </h3>
                    <div class="qualification__info">
                        <div>
                            <h3 class="qualification__name">
                                (01) Jam Buka Joki
                            </h3>
                            <span class="qualification__country">
                                Jasa Joki ini buka pas atmin lagi gabut gatau mau ngapain
                            </span>
                            <span class="qualification__year"> atau bisa juga buka sesuai mood atmin </span>
                            <span class="qualification__year"> Tapi buat yang udah order joki tetep bakalan atmin layanin sampe bener-bener selese </span>
                        </div>
                        <div>
                            <h3 class="qualification__name">(02) Mon maap kalo dikerjainnya lama</h3>
                            <span class="qualification__country">
                                Mohon maaf yah kalo akunnya ada yg lama dikerjainnya workernya cuma 1 orang soalnya
                            </span>
                            <span class="qualification__year"> Buat kaya explore, itu perlu waktu </span>
                            <span class="qualification__year"> Buat yang mau farm ato up char, itu perlu waktu juga belum lg material di gensin itungannya kikir </span>
                            <span class="qualification__year"> Dan yang lain sebagainya... </span>

                        </div>
                        <div>
                            <h3 class="qualification__name">(03) Akunnya aman gak bg kalo joki disini?</h3>
                            <span class="qualification__year"> Aman le, atmin gabakal pake cheat, mod, atauapalah itu </span>
                            <span class="qualification__year"> Gabakal atmin colong juga akunnya, udah agak bosen main gensin le </span>
                        </div>
                    </div>
                </div>
            </div>

            <img
                src="assets/img/shape-circle.svg"
                alt="qualification image"
                class="qualification__img" />
        </section>

        <!--==================== KENAPA HARUS DISINI? ====================-->
        <section class="achievements section" id="achievements">
            <h2 class="section__title">Kenapa Harus Joki Disini?</h2>
            <span class="section__subtitle"> Alasan kenapa kamu harus joki gensin disini </span>
            <div class="achievements__container container grid section__border">
                <div class="achievements__card">
                    <i class="ri-trophy-line"></i>
                    <h2 class="achievements__title">
                        Terpercaya <br />
                        Bangett 100% no fek-fek
                    </h2>
                    <p class="achievements__description">
                        Akunmu udah pasti aman le dan 100% gabakal kena banned atau dicolong
                    </p>
                    <div class="achievements__border"></div>
                </div>
                <div class="achievements__card">
                    <i class="ri-trophy-line"></i>
                    <h2 class="achievements__title">
                        Harga <br />
                        Bersahabat
                    </h2>
                    <p class="achievements__description">
                        Harganya pasti ramah di dompet le
                    </p>
                    <div class="achievements__border"></div>
                </div>
                <div class="achievements__card">
                    <i class="ri-trophy-line"></i>
                    <h2 class="achievements__title">
                        Kualitas <br />
                        Spek Nasional
                    </h2>
                    <p class="achievements__description">
                        Udah pasti atmin kerjain sesuai request kalian dan secepatnya admin selesaikan
                    </p>
                    <div class="achievements__border"></div>
                </div>
            </div>
        </section>


        <!--==================== Price List ====================-->
        <!--==================== Price List Rawat Akun ====================-->
        <section class="projects section" id="projects">
            <h2 class="section__title">Rawat Akun</h2>
            <span class="section__subtitle"> Price List </span>
            <div class="container section__border">
                <div class="projects__container swiper">
                    <div class="swiper-wrapper">
                        <!--==================== Rawat Akun - Harian ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\rawat-akun\harian.png"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp 5.000 </span>
                                <h1 class="projects__title">Rawat Akun - Harian</h1>
                                <a href="#" class="projects__button">
                                    Daily Commission + Resin (sesuai request)
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Rawat Akun - Mingguan ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\rawat-akun\mingguan.png"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle">Rp 25.000 </span>
                                <h1 class="projects__title">Rawat Akun - Mingguan</h1>
                                <a href="#" class="projects__button">
                                    Daily Commission + Resin (sesuai request) <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Rawat Akun - Bulanan ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\rawat-akun\bulanan.png"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 50.000 </span>
                                <h1 class="projects__title">Rawat Akun - Bulanan</h1>
                                <a href="#" class="projects__button">
                                    Daily Commission + Resin (sesuai request) <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper arrows -->
                    <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                    <!-- Swiper pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!--==================== Price List Joki Story ====================-->
        <section class="projects section">
            <h2 class="section__title">Joki Quest</h2>
            <span class="section__subtitle"> Price List </span>
            <div class="container section__border">
                <div class="projects__container swiper">
                    <div class="swiper-wrapper">
                        <!--==================== Archon Quest ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\quest\archon-quest.webp"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp 30.000 / Chapter </span>
                                <h1 class="projects__title">Archon Quest</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request mau yang chapter mana
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Story Quest ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\quest\story-quest.webp"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle">Rp 30.000 / Karakter</span>
                                <h1 class="projects__title">Story Quest</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request mau karakter yg mana <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== World Quest ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\quest\world-quest.webp"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 5.000 - Rp. 30.000 / Chapter</span>
                                <h1 class="projects__title">World Quest</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Hangout Quest ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\quest\hangout-quest.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 30.000 / Karakter atau Rp. 7.000 / Chapter </span>
                                <h1 class="projects__title">Hangout Quest</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Tribal Chronicles Quest ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\quest\tribal-chronicles.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 35.000 / Karakter </span>
                                <h1 class="projects__title">Tribal Chronicles Quest</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper arrows -->
                    <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                    <!-- Swiper pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!--==================== Price List Joki Explore ====================-->
        <section class="projects section">
            <h2 class="section__title">Joki Explorasi</h2>
            <span class="section__subtitle"> Price List </span>
            <div class="container section__border">
                <div class="projects__container swiper">
                    <div class="swiper-wrapper">
                        <!--==================== Explore - Mondstadt ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\explore\mondstadt.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 2.000 / 1% Daerah </span>
                                <h1 class="projects__title">Explore Daerah Region Mondstadt</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan, include all chest,<br> teleport, culus, dll <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Explore - Liyue ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\explore\liyue.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 2.000 / 1% Daerah </span>
                                <h1 class="projects__title">Explore Daerah Region Liyue</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan, include all chest,<br> teleport, culus, dll <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Explore - Inazuma ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\explore\inazuma.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 4.000 / 1% Daerah </span>
                                <h1 class="projects__title">Explore Daerah Region Inazuma</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan, include all chest,<br> teleport, culus, dll <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Explore - Sumeru ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\explore\sumeru.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle">Rp. 4.000 / 1% Daerah </span>
                                <h1 class="projects__title">Explore Daerah Region Sumeru</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan, include all chest,<br> teleport, culus, dll <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Explore - Fontaine ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\explore\fontaine.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle">Rp. 4.000 / 1% Daerah </span>
                                <h1 class="projects__title">Explore Daerah Region Fontaine</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan, include all chest,<br> teleport, culus, dll <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Explore - Natlan ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\explore\natlan.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle">Rp. 4.000 / 1% Daerah </span>
                                <h1 class="projects__title">Explore Daerah Region Natlan</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan, include all chest,<br> teleport, culus, dll <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper arrows -->
                    <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                    <!-- Swiper pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!--==================== Price List Joki Up Lv Char, Weapon, Build / Farm Artefak ====================-->
        <section class="projects section">
            <h2 class="section__title">Up Lv. Karakter, Senjata, dan Build Artefak</h2>
            <span class="section__subtitle"> Price List </span>
            <div class="container section__border">
                <div class="projects__container swiper">
                    <div class="swiper-wrapper">
                        <!--==================== Up Level Karakter, Lv. 1 - 90 ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\uplv\char.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 90.000 </span>
                                <h1 class="projects__title">Up Level Karakter, Lv. 1 - 90</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan, include all material <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Up Level Senjata, Lv. 1 - 90 ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\uplv\weapon.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 90.000 </span>
                                <h1 class="projects__title">Up Level Senjata, Lv. 1 - 90</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan, include all material <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Rp. 10.000 - 50.000 / Karakter ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\uplv\artefak.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 10.000 - 50.000 / Karakter </span>
                                <h1 class="projects__title">4 set Artefak Karakter</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper arrows -->
                    <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                    <!-- Swiper pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!--==================== Price List Joki Events ====================-->
        <section class="projects section">
            <h2 class="section__title">Joki Event</h2>
            <span class="section__subtitle"> Price List </span>
            <div class="container section__border">
                <div class="projects__container swiper">
                    <div class="swiper-wrapper">
                        <!--==================== Event Kecil ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\event\smallevent.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 10.000 </span>
                                <h1 class="projects__title">Event Kecil</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Event Besar ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\event\bigevent.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 20.000 - 40.000 </span>
                                <h1 class="projects__title">Event Besar</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper arrows -->
                    <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                    <!-- Swiper pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!--==================== Price List Joki Lainnya (Spiral, Weekly Boss, Weekly Bounty, Imaginarium Teather, Teleport, Oculus, Achievement, Material) ====================-->
        <section class="projects section">
            <h2 class="section__title">Joki Lainnya</h2>
            <span class="section__subtitle"> Price List </span>
            <div class="container section__border">
                <div class="projects__container swiper">
                    <div class="swiper-wrapper">
                        <!--==================== Joki Spiral Abyss ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\lainnya\spiral.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 5.000 / Bintang </span>
                                <h1 class="projects__title">Joki Spiral Abyss</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Farm Material Tanaman, Hasil Tambang, Musuh, Dll ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\lainnya\material.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> Rp. 500 / 3pcs </span>
                                <h1 class="projects__title">Farm Material Tanaman, <br>Hasil Tambang, Musuh, Dll</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Weekly Boss ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\lainnya\weeklyboss.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle"> 5.000 </span>
                                <h1 class="projects__title">Weekly Boss</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Weekly Bounty ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\lainnya\weeklybounty.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle">Rp. 15.000 </span>
                                <h1 class="projects__title">Weekly Bounty</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Imaginarium Teather ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\lainnya\imaginarium.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle">Rp. 5.000 - 10.000 / 1 Stage </span>
                                <h1 class="projects__title">Imaginarium Teather</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Statue of The Seven & Teleport ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\lainnya\statueoftheseven.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle">Rp. 2.000 / Teleport dan Rp. 5000 / Statue of The Seven </span>
                                <h1 class="projects__title">Statue of The Seven & Teleport</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Oculus atau yang sejenisnya ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\lainnya\oculus.webp"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle">Rp. 2.000 - 5.000 / Oculus atau yang sejenisnya </span>
                                <h1 class="projects__title">Oculus atau yang sejenisnya</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan<i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        <!--==================== Achievement ====================-->
                        <div class="projects__content swiper-slide">
                            <img
                                src="assets\img\lainnya\achievement.jpg"
                                alt="projects image"
                                class="projects__img" />
                            <div>
                                <span class="projects__subtitle">Rp. 2.000 - 20.000 / Achoevement</span>
                                <h1 class="projects__title">Achievement</h1>
                                <a href="#" class="projects__button">
                                    Sesuai Request dan tingkat kesulitan<i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Swiper arrows -->
                    <div class="swiper-button-next">
                        <i class="ri-arrow-right-s-line"></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class="ri-arrow-left-s-line"></i>
                    </div>
                    <!-- Swiper pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>


        <!--==================== Tata Cara Order Jokian ====================-->
        <section class="qualification section" id="tata_cara">
            <h2 class="section__title">Tata Cara Order Joki</h2>
            <span class="section__subtitle"> Tutor buat yang mau order jokiannya </span>
            <div class="qualification__container container grid section__border">
                <!--==================== Tata Caranya ====================-->
                <div class="qualification__content">
                    <div class="qualification__info">
                        <div>
                            <h3 class="qualification__name">
                                (01) Hubungi Atmin
                            </h3>
                            <span class="qualification__country">
                                Bisa hubungin atmin lewat wa, dm instagram, email, ataupun langsung kirim pesannya lewat bagian "Hubungi Atmin"
                            </span>
                        </div>
                        <div>
                            <h3 class="qualification__name">(02) Pembayaran</h3>
                            <span class="qualification__country">
                                Pas udah deal, bisa bayar via Gopay atau Ovo yah habis itu kirim bukti pembayarannya
                            </span>

                        </div>
                        <div>
                            <h3 class="qualification__name">(03) Data Login</h3>
                            <span class="qualification__year"> Pas udah dibayar kasih data login kamu yah kaya : </span><br>
                            <span class="qualification__year"> - Username/Email </span>
                            <span class="qualification__year"> - Password akun </span>
                            <span class="qualification__year"> - No. UID </span>
                            <span class="qualification__year"> - Nama Server </span>
                            <span class="qualification__year"> - Nama User </span>
                        </div>
                    </div>
                </div>
            </div>

            <img
                src="assets/img/shape-circle.svg"
                alt="qualification image"
                class="qualification__img" />
        </section>

        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
            <h2 class="section__title">
                Hubungi Atmin
            </h2>
            <span class="section__subtitle">
                Yang mau order bisa kesini yah
            </span>
            <div class="contact__container container grid section__border">
                <div class="contact__content">
                    <h3 class="contact__title">
                        <i class="ri-chat-3-line"></i>
                        Kirim pesan
                    </h3>
                    <div class="contact__info">
                        <div class="contact__data">
                            <span class="contact__data-title">
                                Email
                            </span>
                            <span class="contact__data-info">
                                naufalfathi37@gmail.com
                            </span>
                        </div>
                        <div class="contact__data">
                            <span class="contact__data-title">
                                WhatsApp
                            </span>
                            <span class="contact__data-info">
                                +62 812-2611-0988
                            </span>
                            <a href="https://wa.me/6281226110988" target="_blank" rel="noopener noreferrer" class="contact__button">
                                Text me <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                        <div class="contact__data">
                            <span class="contact__data-title">
                                Instagram
                            </span>
                            <span class="contact__data-info">
                                @vyezhvillette
                            </span>
                            <a href="https://www.instagram.com/direct/t/17843304806301496" target="_blank" class="contact__button">
                                Visit <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="contact__content">
                    <h3 class="contact__title">
                        <i class="ri-send-plane-line"></i> Mau order joki?
                    </h3>
                    <form action="{{ route('contact.store') }}" method="POST" class="contact__form" id="contact-form">
                        @csrf
                        <div class="contact__form-div">
                            <label class="contact__form-tag">
                                Name
                            </label>
                            <input type="text" name="user_name" required placeholder="Your name" class="contact__form-input" id="contact-name">
                        </div>
                        <div class="contact__form-div">
                            <label class="contact__form-tag">
                                Email
                            </label>
                            <input type="email" name="user_email" required placeholder="Your email" class="contact__form-input" id="contact-email">
                        </div>
                        <div class="contact__form-div">
                            <label class="contact__form-tag">
                                WhatsApp Number
                            </label>
                            <input type="tel" name="user_whatsapp" required placeholder="Your WhatsApp number" class="contact__form-input" id="contact-whatsapp">
                        </div>
                        <div class="contact__form-div contact__form-area">
                            <label class="contact__form-tag">
                                Message
                            </label>
                            <textarea name="user_project" placeholder="Ask me something?" id="contact-project" class="contact__form-input"></textarea>
                        </div>
                        <p class="contact__message" id="contact-message"></p>
                        <button type="submit" class="contact__button">
                            Send <i class="ri-arrow-right-up-line"></i>
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
        <div class="footer__container container">
            <h1 class="footer__title">Yvezh Joki</h1>
            <p>Joki Gensin Teraman dan Terpercaya</p>
            <ul class="footer__list">
                <li>
                    <a href="#home" class="footer__link">Home</a>
                </li>
                <li>
                    <a href="#info_dikit" class="footer__link">About Us</a>
                </li>
                <li>
                    <a href="#projects" class="footer__link">Price List</a>
                </li>
            </ul>
            <ul class="footer__social">
                <a href="https://wa.me/6281226110988" target="_blank" class="footer__social-link">
                    <i class="ri-whatsapp-line"></i>
                </a>
                <a href="https://github.com/Ftih07" target="_blank" class="footer__social-link">
                    <i class="ri-github-line"></i>
                </a>
                <a href="https://www.instagram.com/vyezhvillette/" target="_blank" class="footer__social-link">
                    <i class="ri-instagram-line"></i>
                </a>
            </ul>
            <span class="footer__copy">
                &#169; Copyright. All rights reserved.
            </span>
        </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== EMAIL JS ===============-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>
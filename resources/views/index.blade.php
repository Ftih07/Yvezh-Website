<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>YVEZH</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                YVEZH
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__itemm">
                        <a href="#home" class="nav__link active-link">
                            <i class="ri-home-line"></i> Home
                        </a>
                    </li>
                    <li class="nav__itemm">
                        <a href="#skills" class="nav__link">
                            <i class="ri-code-line"></i> Skills
                        </a>
                    </li>
                    <li class="nav__itemm">
                        <a href="#qualification" class="nav__link">
                            <i class="ri-book-line"></i> Qualifications
                        </a>
                    </li>
                    <li class="nav__itemm">
                        <a href="#achievements" class="nav__link">
                            <i class="ri-trophy-line"></i> Achievements
                        </a>
                    </li>
                    <li class="nav__itemm">
                        <a href="#projects" class="nav__link">
                            <i class="ri-macbook-line"></i> Projects
                        </a>
                    </li>
                    <li class="nav__itemm">
                        <a href="#contact" class="nav__link">
                            <i class="ri-chat-4-line"></i> Contact Me
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
                        Hi, I'm Naufal Fathi <br>
                        Fullstack Web Developer <br>
                        <br>
                    </h1>
                    <div class="home__blob grid">
                        <div class="home__perfil">
                            <img src="assets/img/PF.jpg" alt="home perfil">
                        </div>
                        <img src="assets/img/shape-wawes.svg" alt="" class="home__shape-wawes">
                        <img src="assets/img/shape-circle.svg" alt="" class="home__shape-circle">
                    </div>
                    <ul class="home__social">
                        <a href="https://linkedin.com/in/naufal-fathi-rizqy-fadhilah-384b7629a" target="_blank" class="home__social-link">
                            <i class="ri-linkedin-box-line"></i>
                        </a>
                        <a href="https://github.com/Ftih07" target="_blank" class="home__social-link">
                            <i class="ri-github-line"></i>
                        </a>
                        <a href="https://www.instagram.com/vyezhvillette/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </ul>
                </div>
                <!--==================== HOME INFO 1 ====================-->
                <div class="home__info">
                    <div>
                        <h3 class="home__info-title">
                            BIOGRAPHY
                        </h3>
                        <p class="home__info-description">
                            Hi, I'm Naufal Fathi Rizqy Fadhilah, Fullstack Web Developer.
                            Passionate about creating wonderful and interactive websites.
                        </p>
                    </div>
                    <div>
                        <h3 class="home__info-title">
                            CONTACT
                        </h3>
                        <p class="home__info-description">
                            Jawa Tengah <br>
                            naufalfathi37@gmail.com <br>
                            +62 812 2611 0988 <br>
                        </p>
                    </div>
                    <div>
                        <h3 class="home__info-title">
                            ACHIEVEMENTS
                        </h3>
                        <p class="home__info-description">
                            @foreach($selectedCompanies as $company)
                            {{ $company->name }} - {{ $company->place }} <br><br>
                            @endforeach
                        </p>
                    </div>
                </div>

                <!--==================== HOME INFO 2 ====================-->
                <div class="home__info">
                    <div>
                        <h3 class="home__info-title">
                            STUDENT AT
                        </h3>
                        <p class="home__info-number">
                            SMK TELKOM PURWOKERTO
                        </p>
                    </div>
                    <div>
                        <h3 class="home__info-title">
                            COMPLETED PROJECTS
                        </h3>
                        <p class="home__info-number">
                            {{ $projectsCount }}+
                        </p>
                    </div>
                    <div>
                        <h3 class="home__info-title">
                            COMPANIES WORKED FOR
                        </h3>
                        <p class="home__info-number">
                            {{ $companyCount }}+
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!--==================== SKILLS ====================-->
        <section class="skills section" id="skills">
            <h2 class="section__title">
                Skills
            </h2>
            <span class="section__subtitle">
                Experience
            </span>
            <div class="skills__container container grid section__border">
                @foreach($skilltypes as $type)
                <div class="skills__content">
                    <h3 class="skills__title">
                        <i class="ri-braces-line"></i> {{ $type->name }}
                    </h3>
                    <div class="skills__info">
                        @foreach($type->skills as $skill)
                        <div class="skills__data">
                            <div class="skills__blob">
                                <img src="{{ asset('storage/' . $skill->icon) }}" alt="{{ $skill->name }}">
                            </div>
                            <h3 class="skills__name">{{ $skill->name }}</h3>
                            <span class="skills__subtitle">{{ $skill->skill_level }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!--==================== QUALIFICATION ====================-->
        <section class="qualification section" id="qualification">
            <h2 class="section__title">
                Qualification
            </h2>
            <span class="section__subtitle">
                Experience and Education
            </span>
            <div class="qualification__container container grid section__border">
                <!--==================== QUALIFICATION 1 ====================-->
                @foreach($qualificationtype as $qualificationtype)
                <div class="qualification__content">
                    <h3 class="qualification__title">
                        <i class="ri-book-line"></i> {{ $qualificationtype->name }}
                    </h3>
                    <div class="qualification__info">
                        @foreach($qualificationtype->qualifications as $qualification)
                        <div>
                            <h3 class="qualification__name">
                                {{ $qualification->name }}
                            </h3>
                            <span class="qualification__country">
                                {{ $qualification->place }}
                            </span>
                            <span class="qualification__year">
                                {{ $qualification->date }}
                            </span>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

            <img src="assets/img/shape-circle.svg" alt="qualification image" class="qualification__img">
        </section>

        <!--==================== ACHIEVEMENTS ====================-->
        <section class="achievements section" id="achievements">
            <h2 class="section__title">
                Achievements
            </h2>
            <span class="section__subtitle">
                What makes me stand out
            </span>
            <div class="achievements__container container grid section__border">
                @foreach($achievement as $achievement)
                <div class="achievements__card">
                    <i class="ri-trophy-line"></i>
                    <h2 class="achievements__title">
                        {{ $achievement->name }}
                    </h2>
                    <p class="achievements__description">
                        {{ $achievement->desc }}
                    </p>
                    <div class="achievements__border">
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!--==================== PROJECTS ====================-->
        <section class="projects section" id="projects">
            <h2 class="section__title">
                Projects
            </h2>
            <span class="section__subtitle">
                My personal projects
            </span>
            <div class="container section__border">
                <div class="projects__container swiper">
                    <div class="swiper-wrapper">
                        <!--==================== PROJECT 1 ====================-->
                        @foreach($projects as $project)
                        <div class="projects__content swiper-slide">
                            <img src="{{ asset('storage/' . $project->image_project) }}" alt="{{ $project->name }}" class="projects__img">
                            <div>
                                <span class="projects__subtitle">
                                    {{ $project->role }}
                                </span>
                                <h1 class="projects__title">
                                    {{ $project->name }}
                                </h1>
                                <p class="projects__tech">
                                    {{ $project->tech }}
                                </p>
                                <a href="{{ $project->demo_link }}" class="projects__button" target="_blank">
                                    Demo <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
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

        <!--==================== TESTIMONIAL ====================-->
        <!-- <section class="testimonial section"></section> -->

        <!--==================== CONTACT ====================-->
        <section class="contact section" id="contact">
            <h2 class="section__title">
                Contact Me
            </h2>
            <span class="section__subtitle">
                Get in touch
            </span>
            <div class="contact__container container grid section__border">
                <div class="contact__content">
                    <h3 class="contact__title">
                        <i class="ri-chat-3-line"></i>
                        Text me
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
                                Linkedin
                            </span>
                            <span class="contact__data-info">
                                Naufal Fathi Rizqy Fadhilah
                            </span>
                            <a href="https://linkedin.com/in/naufal-fathi-rizqy-fadhilah-384b7629a" target="_blank" class="contact__button">
                                Visit <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="contact__content">
                    <h3 class="contact__title">
                        <i class="ri-send-plane-line"></i> Have a query for me?
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
            <h1 class="footer__title">
                Naufal Fathi Rizqy Fadhilah
            </h1>
            <p>
                Fullstack Web Developer
            </p>
            <ul class="footer__list">
                <li>
                    <a href="#home" class="footer__link">Home</a>
                </li>
                <li>
                    <a href="#skills" class="footer__link">Skills</a>
                </li>
                <li>
                    <a href="#projects" class="footer__link">Projects</a>
                </li>
            </ul>
            <ul class="footer__social">
                <a href="https://linkedin.com/in/naufal-fathi-rizqy-fadhilah-384b7629a" target="_blank" class="footer__social-link">
                    <i class="ri-linkedin-box-line"></i>
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
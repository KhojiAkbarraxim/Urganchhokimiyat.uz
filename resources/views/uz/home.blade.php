<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Амударё туман хокимлиги расмий сайти</title>

    <x-link>
        <!-- css links -->
    </x-link>

</head>

<body>

    <x-main>

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="home-section d-flex justify-cntent-center align-items-center">
            <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

                <div class="carousel-item active">
                    <div class="carousel-container">
                        <h2>Янгиликлар</h2>
                        <p>Президентимиз карорлари ва конунларидан хабардор бўлинг.
                            Амударё туманда рўй бераетган янгиликлар, юзага келган муамолар ва ечимлардан бохабар
                            бўлинг.
                        </p>
                        <a href="/news" class="btn-get-started animate__animated animate__fadeInUp scrollto">Кўпрок
                            билиш</a>
                    </div>
                </div>

            </div>
        </section>


        <main id="main">

            <!-- ======= Portfoio Section ======= -->
            <section id="portfolio" class="container">
                <div class="section-title">
                    <h2 class="port-news" id="news-h">Янгиликлар<span></span></h2>
                </div>
                <div>
                    <section class="news-container">
                        <div class="not__found-home">
                            <img src="\assets\img\2542043_alert_error_problem_warning_icon.png">
                            <p>Ma'lumotlar mavjud emas</p>
                        </div>
                    </section>

                    @include('components.card')
                </div>
            </section>

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Биз билан богланиш</h2>
                    </div>

                    <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                        <div class="col-lg-5">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Манзил:</h4>
                                    <p> Амударё тумани, Манғит шаҳри Гурлан кўчаси 65-уй. <br>
                                        Иш вақти: 09:00–18:00, тушлик: 13:00-14:00<br>
                                        Дам олиш кунлари: Шанба ва якшанба</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>E-mail:</h4>
                                    <p>amudaryo.t@exat.uz</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Тел:</h4>
                                    <p>+998 (61) 515-38-01</p>
                                </div>

                            </div>

                        </div>

                        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Исм" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Электрон почта" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" cols="75" placeholder="Хабар" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Kuting</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Sizning emailingiz muvaffaqqiyatli jo'natildi!</div>
                                </div>
                                <div class="text-center"><button type="submit">Хабар юбориш</button></div>
                            </form>

                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->

    </x-main>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i>
    </a>

    <x-js-link>
        <!-- js links -->
    </x-js-link>

    <script src="assets/js/home.js"></script>
    <script src="assets/js/calendar.js"></script>

</body>

</html>

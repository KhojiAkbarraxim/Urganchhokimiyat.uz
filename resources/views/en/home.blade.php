<!DOCTYPE html>
<html lang="uz">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Official site of Urganch district administration</title>

    <x-link>
        <!-- css links -->
    </x-link>

</head>

<body>

    <x-en.main>

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex justify-cntent-center align-items-center">
            <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

                <div class="carousel-item active">
                    <div class="carousel-container">
                        <h2>News</h2>
                        <p>Be aware of the decisions and laws of our president.
                            Be aware of the news, problems and solutions happening in Urganch District.</p>
                        <a href="en/news" class="btn-get-started animate__animated animate__fadeInUp scrollto">Learn
                            more</a>
                    </div>
                </div>

            </div>
        </section>


        <main id="main">

            <!-- ======= Portfoio Section ======= -->
            <section id="portfolio" class="portfoio">
                <div class="section-title">
                    <h2 class="port-news" id="news-h">News<span></span></h2>
                </div>
                <div class="new-div">
                    <section class="news-container">

                    </section>

                    <div class="card" style="margin-right: 70px; margin-top: 14px">
                        <img src="/assets/img/hokim.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">
                                Mayor of Urganch district <br>Ghairatjon Sultanov
                            </p>
                            <div class="calendar__wrapper">
                                <header>
                                    <p class="current-date"></p>
                                    <div class="icons">
                                        <span id="prev" class="material-symbols-rounded">chevron_left</span>
                                        <span id="next" class="material-symbols-rounded">chevron_right</span>
                                    </div>
                                </header>
                                <div class="calendar">
                                    <ul class="weeks">
                                        <th>Su</th>
                                        <th>Mo</th>
                                        <th>Tu</th>
                                        <th>We</th>
                                        <th>Th</th>
                                        <th>Fr</th>
                                        <th>Sa</th>
                                    </ul>
                                    <ul class="days"></ul>
                                </div>
                            </div>
                            <a href="https://lex.uz/docs/-6600413">
                                <img id="img-2030" src="/assets/img/2030.jpg">
                            </a>
                            <a href="/greenArea">
                                <div class="green-area">
                                    <img width="40" height="40"
                                        style="vertical-align: baseline;  margin-right: -11px"
                                        src="https://img.icons8.com/officexs/40/deciduous-tree.png"
                                        alt="deciduous-tree" />
                                    <img width="30" height="30"
                                        style="vertical-align: baseline;  margin-right: -11px"
                                        src="https://img.icons8.com/offices/30/deciduous-tree.png"
                                        alt="deciduous-tree" />
                                    <img width="16" height="16"
                                        style="vertical-align: baseline; margin-right: -6px"
                                        src="https://img.icons8.com/officexs/16/deciduous-tree.png"
                                        alt="deciduous-tree" />
                                    Green area
                                </div>
                                <div class="green-area">
                                    <img width="48" height="48"
                                        src="https://img.icons8.com/emoji/48/recycling-symbol-emoji.png"
                                        alt="recycling-symbol-emoji" />
                                    Trash
                                </div>
                            </a>
                        </div>
                        {{-- <div class="card-body">
                            <h5 class="card-title text-center">Вилоятимизда аҳолига тиббий хизмат кўрсатиш даражаси
                                қандай?
                            </h5>
                            <hr>
                            <span>Аъло</span>
                            <input type="submit" onclick="changeCounter(1)" value="" class="m-btn1 q-nice">
                            <span class="q-border1"></span>
                            <span>Яхши</span>
                            <input type="submit" onclick="changeCounter(2)" name="yaxshi" class="m-btn2 q-good"
                                value=""></input><span class="q-border2"></span>
                            <span>Қониқарли</span>
                            <input type="submit" onclick="changeCounter(3)" name="qoniqarli" class="m-btn3 q-notbad"
                                value=""></input><span class="q-border3"></span>
                            <span>Қониқарсиз</span>
                            <input type="submit" onclick="changeCounter(4)" name="qoniqarsiz" class="m-btn4 q-bad"
                                value=""></input>
                            <span class="q-border4"></span>
                        </div> --}}
                    </div>
                </div>
            </section>

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>Contact Us</h2>
                    </div>

                    <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

                        <div class="col-lg-5">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Address:</h4>
                                    <p> Urganch District, Mustaqillik Street 1, 220500 <br>
                                        Working hours: 09:00–18:00, lunch: 13:00–14:00<br>
                                        Weekends: Saturday and Sunday</p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>E-mail:</h4>
                                    <p>info@urganchhokimiyat.uz</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Phone:</h4>
                                    <p>+998 (62) 352-28-43</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Name" required>
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send message</button></div>
                            </form>

                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->

        </main><!-- End #main -->

    </x-en.main>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i>
    </a>

    <x-js-link>
        <!-- js links -->
    </x-js-link>

</body>

</html>

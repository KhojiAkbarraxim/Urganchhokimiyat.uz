<!-- ======= Top Bar ======= -->
<div id="topbar" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <span class="test">
            The site is working in TEST mode
        </span>
        <div class="container">
            <div style="text-align: end;">
                <p class="font-changer">
                    <span class="js-font-decrease">A</span>
                    <span class="js-font-increase">A</span>
                </p>
                <a class="tlr btn btn-outline-secondary">Uz(lat)</a>
                <a class="tlr btn btn-outline-secondary">Uz(cril)</a>
                <a class="btn-en translator btn btn-outline-secondary">En</a>
                <a class="btn-ru translator btn btn-outline-secondary">Ru</a>
            </div>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
        <h1 class="logo"><a href="/home">Official site of <br> Urganch district <br> administration</a></h1>
        <nav id="navbar" class="navbar">
            <ul>
                <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        District administration
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">District administration office</a></li>
                        <li><a class="dropdown-item" href="#">Structure of control apparatus</a></li>
                        <li><a class="dropdown-item" href="#">Admission Schedule</a></li>
                        <li><a class="dropdown-item" href="#">Agenda, work plan and meeting issues</a></li>
                        <li><a class="dropdown-item" href="#">Events with the participation of the
                                administration</a></li>
                        <li><a class="dropdown-item" href="#">Vacancies</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">About District</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">News</a></li>
                        <li><a class="dropdown-item" href="#">Tenders and Announcements</a></li>
                        <li><a class="dropdown-item" href="#">District Information</a></li>
                        <li><a class="dropdown-item" href="#">District organizations</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">Electronic Services</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="https://murojaat.gov.uz">Reference Statistics</a></li>
                        <li><a class="dropdown-item" href="#">Answers to Frequently Asked Questions</a></li>
                        <li><a class="dropdown-item" href="https://data.egov.uz">Open data</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-item dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown">Regulations</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Activity of deputies</a></li>
                        <li><a class="dropdown-item" href="https://e-qaror.gov.uz/search?region_id=12&district_id=173">Decisions of the district governor</a></li>
                        <li><a class="dropdown-item" href="https://e-qaror.gov.uz/search?region_id=12&district_id=173">Orders of the district governor</a></li>
                        <li><a class="dropdown-item" href="#">District administration's operating instructions</a></li>
                        <li><a class="dropdown-item" href="#">Formal lectures</a></li>
                        <li><a class="dropdown-item" href="#">Measures developed</a></li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->


{{ $slot }}


<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>SUBSCRIBE TO THE NEWS</h4>
                    <p>Fill in the blank to stay up to date</p>
                </div>
                <div class="col-lg-6">
                    <form action="" method="post">
                        <input type="email" name="email" placeholder="Enter your email address"><input
                            type="submit" value="send">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 footer-contact">
                    <h4>Contact us</h4>
                    <p>
                        Urganch district
                        Independence Street 1, 220500 <br><br>
                        <strong>Tel:</strong> +998 (62) 352-28-43<br>
                        <strong>E-mail:</strong> info@urganchhokimiyat.uz<br>
                    </p>
                </div>
                <div class="col-lg-6 c ol-md-6 footer-info">
                    <h3>About<br></h3>
                    <p>Khorazim Province Urganch District Khokimat official website information system. It happened in
                        our district
                        news and useful links.</p>
                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/Urganchtuman.axborotxizmati/" class="facebook"><i
                                class="bx bxl-facebook"></i></a>
                        <a href="http://www.instagram.com/urganchtumankhokimligi" class="instagram"><i
                                class="bx bxl-instagram"></i></a>
                        <a href="https://t.me/Urganch_tuman_news" class="linkedin"><i
                                class="bx bxl-telegram"></i></a>
                    </div>
                </div>

            </div>
        </div>
</footer><!-- End Footer -->
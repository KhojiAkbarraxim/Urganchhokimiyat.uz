<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Янгиликлар</title>

    <meta content="" name="description">
    <meta content="" name="keywords">

    <x-link>
        <!-- css links -->
    </x-link>

</head>

<body>

    <x-main>


        <main id="main">

            <!-- ======= Breadcrumbs ======= -->
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                    <ol>
                        <li><a href="/home">Асосий сахифа</a></li>
                        <li><a href="#">Янгиликлар</a></li>
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <div class="btn-group mb-3">
                        <button id="dropdown-text" type="button" class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Янгиликлар
                        </button>
                        <ul class="dropdown-menu dropdown-category">
                            <li><a style="color: #0880e8" class="dropdown-item">siyosiy</a></li>
                            <li><a style="color: #0880e8" class="dropdown-item">ijtiomoiy</a></li>
                            <li><a style="color: #0880e8" class="dropdown-item">iqtisodiy</a></li>
                            <li><a style="color: #0880e8" class="dropdown-item">salomatlik</a></li>
                            <li><a style="color: #0880e8" class="dropdown-item">ekologiya</a></li>
                            <li><a style="color: #0880e8" class="dropdown-item">biznes</a></li>
                            <li><a style="color: #0880e8" class="dropdown-item">statistika</a></li>
                        </ul>
                    </div>

                    <div class="row">

                        <div class="col-lg-8 entries col-sm-12">
                            <div class="not__found-news">
                                <img src="\assets\img\2542043_alert_error_problem_warning_icon.png">
                                <p>Ma'lumotlar mavjud emas</p>
                            </div>

                            <div class="news">

                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item" id='pagination-previous'>
                                        <a class="page-link" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    {{-- <li class="page-item"><a class="page-link" href="/news?page=1">1</a></li> --}}
                                    <li class="page-item" id='pagination-next'>
                                        <a class="page-link" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- End blog entries list -->

                        @include('components.card')

                    </div>

                </div>

                </div>
                </div>
            </section><!-- End Blog Section -->

        </main><!-- End #main -->

    </x-main>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <x-js-link>
        <!-- js links -->
    </x-js-link>

    <!-- Template Main JS File -->
    <script src="assets/js/calendar.js"></script>
    <script src="assets/js/news.js"></script>

</body>

</html>

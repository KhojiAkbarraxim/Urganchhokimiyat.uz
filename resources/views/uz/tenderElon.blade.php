<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Тендер ва эълонлар</title>

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
                        <li><a href="#">Тендер ва эълонлар</a></li>
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-8 entries col-sm-12">
                            <div class="not__found">
                                <img src="\assets\img\2542043_alert_error_problem_warning_icon.png" alt="">
                                <p>Ma'lumotlar mavjud emas</p>
                            </div>
                        </div><!-- End blog entries list -->

                        @include('components.card')

                    </div>

                </div>

                </div>
            </section><!-- End Blog Section -->

        </main><!-- End #main -->

    </x-main>

    <x-js-link>
        <!-- js links -->
    </x-js-link>

    <script src="assets/js/calendar.js"></script>
    <script src="assets/js/quizTest.js"></script>
    <script src="assets/js/tenderElon.js"></script>

</body>

</html>

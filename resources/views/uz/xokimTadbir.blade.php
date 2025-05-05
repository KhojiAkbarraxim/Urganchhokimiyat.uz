<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ҳокимлик иштирокидаги тадбирлар</title>

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
                        <li><a href="#">Ҳокимлик иштирокидаги тадбирлар</a></li>
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">
                    <div class="row" style="width: 100%">
                        <div class="col-lg-8 entries col-sm-12">
                            <div class="my-container xokim-tadbir">
                                <div class="not__found-xokimtadbir">
                                    <img src="\assets\img\2542043_alert_error_problem_warning_icon.png" alt="">
                                    <p>Ma'lumotlar mavjud emas</p>
                                </div>
                            </div>
                        </div>

                        @include('components.card')

                    </div>

                </div>
            </section><!-- End Blog Section -->

        </main><!-- End #main -->

    </x-main>

    <x-js-link>
        <!-- js links -->
    </x-js-link>

    <script src="assets/js/calendar.js"></script>
    <script src="assets/js/xokimTadbir.js"></script>

</body>

</html>

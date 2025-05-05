<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Раҳбарият</title>

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
                        <li><a href="#">Раҳбарият</a></li>
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">
                    <div class="members__container">
                        <div class="members__items">
                            <div class="not__found-apparat">
                                <img src="\assets\img\2542043_alert_error_problem_warning_icon.png">
                                <p>Ma'lumotlar mavjud emas</p>
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

    <script src="assets/js/xokimApparat.js"></script>
    <script src="assets/js/calendar.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кўп бериладиган саволларга жавоблар</title>

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
                        <li><a href="#">Кўп бериладиган саволларга жавоблар</a></li>
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog">
                <div class="container question-container" style="display: flex;" data-aos="fade-up">
                    <div style="width: 74%" class="accordion" id="accordionExample">
                        <div class="not__found-questionanswer">
                            <img src="\assets\img\2542043_alert_error_problem_warning_icon.png">
                            <p>Ma'lumotlar mavjud emas</p>
                        </div>
                    </div>

                    @include('components.card')

                </div>
            </section><!-- End Blog Section -->

        </main><!-- End #main -->

    </x-main>

    <x-js-link>
        <!-- js links -->
    </x-js-link>

    <script src="/assets/js/savolJavob.js"></script>
    <script src="assets/js/calendar.js"></script>
    <script src="assets/js/quizTest.js"></script>

</body>

</html>

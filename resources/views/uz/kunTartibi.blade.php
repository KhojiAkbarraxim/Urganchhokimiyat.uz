<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Хокимлик иш режаси ва йиғилиш масалалари</title>

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
                        <li><a href="#">Хокимлик иш режаси ва йиғилиш масалалари</a></li>
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">
                    <div class="wrapper">
                        <div class="table__wrapper">
                            <table class="table">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th scope="col">№</th>
                                        <th scope="col">Хокимят вакили</th>
                                        <th scope="col">Тасниф</th>
                                        <th scope="col">Бошланиш вақти</th>
                                        <th scope="col">Қабул манзили</th>
                                    </tr>
                                </thead>
                                <tbody class="kun-tbody">

                                </tbody>
                            </table>
                            <div class="not__found-kuntartibi">
                                <img src="\assets\img\2542043_alert_error_problem_warning_icon.png" alt="">
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

    <script src="/assets/js/calendar.js"></script>
    <script src="/assets/js/kunTartibi.js"></script>

</body>

</html>

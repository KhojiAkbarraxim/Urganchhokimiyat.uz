<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Туман ташкилотлари</title>

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
                        <li><a href="#">Туман ташкилотлари</a></li>
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <div class="btn-group mb-3">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Янгиликлар
                        </button>
                        <ul id="tuman__tashkilot-dropwdown" class="dropdown-menu">

                        </ul>
                    </div>

                    <div class="wrapper">
                        <div class="table__wrapper">

                            <table class="table tashkilot_table">
                                <tr style="text-align: center;">
                                    <th scope="col">№</th>
                                    <th scope="col">Ташкилот номи</th>
                                    <th scope="col">Ташкилот раҳбари</th>
                                    <th scope="col">Манзили</th>
                                    <th scope="col">Ташкилот ҳақида</th>
                                </tr>
                                <tbody class="kun-tbody">

                                </tbody>
                            </table>
                            <div class="not__found-tumantashkilot">
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

    <script src="assets/js/tumanTashkilot.js"></script>
    <script src="assets/js/calendar.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Yashil Hudud</title>

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
                        <li><a href="/home">Асосий саҳифа</a></li>
                        <li><a href="#">Яшил ҳудуд</a></li>

                        <div class="s-data">
                            <span><img width="32" height="32" src="https://img.icons8.com/flat-round/64/tree.png"
                                    alt="tree" />Дарахитларнинг умумий сони: <span
                                    class="tree__count">0</span></span>
                        </div>
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog greenArea">
                <div class="container">
                    <div class="green__area-div">
                        <table class="table green__area">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Манзил</th>
                                    <th scope="col">Дарахитлар сони</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <div>
                            <iframe src="/map" width="100%" height="560" frameborder="1" allowfullscreen="true"
                                style="position:relative;"></iframe>
                        </div>
                    </div>

                    @include('components.card')

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

    <script src="assets/js/calendar.js"></script>
    <script src="assets/js/quizTest.js"></script>
    <script src="/assets/js/greenArea.js"></script>

</body>

</html>

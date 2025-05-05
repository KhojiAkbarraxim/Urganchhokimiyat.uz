<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ҳокимлик тузилмаси</title>

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
                        <li><a href="#">Ҳокимлик тузилмаси</a></li>
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <p class="management__data-date ">20.05.2024</p>

                    <div class="management__container">

                        <div class="management__item ">
                            <div class="management__image">
                                <img src="images/about vilage/index.png" class="Apparat image">
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


</body>

</html>

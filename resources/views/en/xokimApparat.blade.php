<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>District Administration Office</title>

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
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="#">District Administration Office</a></li>
                    </ol>

                </div>
            </section><!-- End Breadcrumbs -->

            <!-- ======= Blog Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">
                    <div class="members__container">
                        <div class="members__items">
                        
                        </div>
                        <div class="card">
                            <img src="/assets/img/hokim.jpg" class="card-img-top">
                            <div class="card-body">
                                <p class="card-text">
                                    Head of Urgench District <br> Gayratjon Sultanov
                                </p>
                                <div class="calendar">
                                    <div class="calendar-header">
                                        <button id="prevBtn">&lt;</button>
                                        <h2 id="monthYear"></h2>
                                        <button id="nextBtn">&gt;</button>
                                    </div>
                                    <div class="calendar-body">
                                        <table class="calendar-table">
                                            <thead>
                                                <tr>
                                                    <th>Sun</th>
                                                    <th>Mon</th>
                                                    <th>Tue</th>
                                                    <th>Wed</th>
                                                    <th>Thu</th>
                                                    <th>Fri</th>
                                                    <th>Sat</th>
                                                </tr>
                                            </thead>
                                            <tbody id="calendarBody"></tbody>
                                        </table>
                                    </div>
                                </div>
                                <a href="https://lex.uz/docs/-6600413">
                                    <img id="img-2030" src="/assets/img/2030.jpg">
                                </a>
                                <a href="/greenArea">
                                    <div class="green-area">
                                        <img width="40" height="40"
                                            style="vertical-align: baseline;  margin-right: -11px"
                                            src="https://img.icons8.com/officexs/40/deciduous-tree.png"
                                            alt="deciduous-tree" />
                                        <img width="30" height="30"
                                            style="vertical-align: baseline;  margin-right: -11px"
                                            src="https://img.icons8.com/offices/30/deciduous-tree.png"
                                            alt="deciduous-tree" />
                                        <img width="16" height="16"
                                            style="vertical-align: baseline; margin-right: -6px"
                                            src="https://img.icons8.com/officexs/16/deciduous-tree.png"
                                            alt="deciduous-tree" />
                                        Green Area
                                    </div>
                                    <div class="green-area">
                                        <img width="48" height="48"
                                            src="https://img.icons8.com/emoji/48/recycling-symbol-emoji.png"
                                            alt="recycling-symbol-emoji" />
                                        Recycling
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center">How is the level of medical service to the population
                                    in our province?</h5>
                                <hr>
                                <span>Excellent</span>
                                <input type="submit" onclick="changeCounter(1)" value="" class="m-btn1 q-nice">
                                <span class="q-border1"></span>
                                <span>Good</span>
                                <input type="submit" onclick="changeCounter(2)" name="yaxshi" class="m-btn2 q-good"
                                    value=""></input><span class="q-border2"></span>
                                <span>Fair</span>
                                <input type="submit" onclick="changeCounter(3)" name="qoniqarli"
                                    class="m-btn3 q-notbad" value=""></input><span class="q-border3"></span>
                                <span>Poor</span>
                                <input type="submit" onclick="changeCounter(4)" name="qoniqarsiz" class="m-btn4 q-bad"
                                    value=""></input>
                                <span class="q-border4"></span>
                            </div>
                        </div>
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

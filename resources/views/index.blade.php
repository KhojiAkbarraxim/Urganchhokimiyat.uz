@extends('layouts.site')

@section('content')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Янгиликлар</h2>
          <p class="animate__animated animate__fadeInUp">Прeзидентимиз карорлари ва конунларидан хабардор бўлинг.
            Урганч туманида рўй бераетган янгиликлар, юзага келган муамолар ва ечимлардан бохабар бўлинг.</p>
          <a href="news.html" class="btn-get-started animate__animated animate__fadeInUp scrollto">Кўпрок билиш</a>
        </div>
      </div>

    </div>
  </section> 
  <main id="main">
    <!-- ======= Clients Section ======= -->
  <!-- <section id="clients" class="clients"> -->
  <!-- <div class="container-fluid" data-aos="zoom-in">
        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <a class="swiper-slide"><img class="img-fluid " src="./assets/img/uz-gerb.png"><a
                href="https://president.uz/uz" class="a-text">
                <pre>Ўзбекистан Республикаси <br>Расмий веб-сайти</pre>
              </a></a>
            <a class="swiper-slide"><img class="img-fluid " src="./assets/img/uz-qabulhona.jpg"><a
                href="https://pm.gov.uz/uz" class="a-text">
                <pre>Ўзбекистан Республикаси <br>Президентнинг Виртуал Кабулхонаси</pre>
              </a></a>
            <a class="swiper-slide"><img class="img-fluid " src="./assets/img/uz-partali.jpg"><a
                href="https://gov.uz/uz/" class="a-text">
                <pre>Ўзбекистан Республикаси <br>Хукумат Портали</pre>
              </a></a>
            <a class="swiper-slide"><img class="img-fluid " src="./assets/img/uz-gerb1.png"><a href="https://senat.uz/"
                class="a-text">
                <pre>Ўзбекистан Республикаси <br>Олий Мажлисининг Сенати</pre>
              </a></a>
            <a class="swiper-slide"><img class="img-fluid " src="./assets/img/uz-map.png"><a
                href="https://parliament.gov.uz/" class="a-text">
                <pre>Ўзбекистан Республикаси <br>Олий Мажлисининг Конунчилик Палатаси</pre>
              </a></a>
            <a class="swiper-slide"><img class="img-fluid " src="./assets/img/uz-gerbandflag.png"><a
                href="https://constitution.uz/oz" class="a-text">
                <pre>Ўзбекистан Республикаси <br>Конституцияси</pre>
              </a></a>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div> -->

  <!-- ======= Portfoio Section ======= -->
  <section id="portfolio" class="portfoio container ">
    
    <div class="section-title ">
      <h2>Фото лавхалар</h2>
    </div>
    @foreach ($posts as $post)
    <div class="row">
      <div class="card mb-3" style="max-width: 5040px; max-height: 2000px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{$post->photo_path}}" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
              <p class="card-text">{{$post->short_content}}</p>
                <p class="card-text"><small class="text-body-secondary">{{$post->created_at}}</small></p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      {{-- <div class="card mb-3" style="max-width: 5040px; max-height: 2000px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="./assets/img/portfolio/portfolio-6.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div> --}}

      <!-- <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Янгиликлар</h2>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>Bugun Urganch tumanida mahallani qo'llab-quvvatlash bo'yicha tuman kengashining tashkiliy yig'ilishi bo'lib o'tdi.</p>
            <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
              class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
              class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info img-fluid ">
            <h4>App 2</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
              class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 2</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
              class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 2</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
              class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>App</p>
            <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
              class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 1</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
              class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Card 3</h4>
            <p>Card</p>
            <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
              class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
              class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

      </div>

    </div> -->
  </section><!-- End Portfoio Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Биз билан богланиш</h2>
      </div>

      <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

        <div class="col-lg-5">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Манзил:</h4>
              <p> Урганч туман Мустақиллик кўчаси 1-уй, 220500 <br>
                Иш вақти: 09:00–18:00, тушлик: 13:00-14:00<br>
                Дам олиш кунлари: Шанба ва якшанба</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>E-mail:</h4>
              <p>info@urganchhokimiyat.uz</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Тел:</h4>
              <p>+998 (62) 352-28-43</p>
            </div>

          </div>

        </div>

        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Исм" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Электрон почта" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Хабар" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Хабар юбориш</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  </main><!-- End #main -->
 @endsection
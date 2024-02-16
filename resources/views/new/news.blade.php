@extends('layouts.site')

@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <ol>
        <li><a href="{{route('home')}}">Home</a></li>
      </ol>
      <h2>Yangiliklar*</h2>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

      <div class="row">

        <div class="col-lg-8 entries">
          @foreach ($posts as $post)
            
          <article class="entry">

            <div class="entry-img">
              <img src="{{$post->photo_path}}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="{{ route('yangiliklar.show' , ['yangiliklar' => $post->id])}}">{{$post->title}}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ route('yangiliklar.show' , ['yangiliklar' => $post->id])}}"><time
                      datetime="2020-01-01">{{$post->created_at}}</time></a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
            {{$post->short_content}}
              </p>
              <div class="read-more">
                <a href="{{ route('yangiliklar.show' , ['yangiliklar' => $post->id])}}">Batafsil o'qish</a>
              </div>
            </div>

          </article><!-- End blog entry -->
          @endforeach
          <article class="entry">

            <div class="entry-img">
              <img src="assets/img/news/blog-2.jpg" alt="" class="img-fluid">
            </div>
          <div class="blog-pagination"> dr3
            <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div>

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar">

            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="bi bi-search"></i> Qidiruv
                </button>
              </form>
            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Recent Posts</h3>
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="assets/img/news/blog-recent-1.jpg" alt="">
                <h4><a href="{{ route('yangiliklar.show' , ['yangiliklar' => $post->id])}}">Nihil blanditiis at in nihil autem</a></h4>
                <time datetime="2020-01-02">Jan 1, 2020</time>
              </div>
            </div><!-- End sidebar recent posts-->
          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
  </section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection
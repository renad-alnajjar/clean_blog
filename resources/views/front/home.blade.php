@extends('layouts.front')

@section('content')
<!-- # site-content
        ================================================== -->
{{-- <section id="content" class="s-content">


    <!-- hero -->
    <div class="hero">

        <div class="hero__slider swiper-container">

            <div class="swiper-wrapper">
                @foreach ($featured_posts as $post)
                <article class="hero__slide swiper-slide">
                    <div class="hero__entry-image" style="background-image: url('{{ $post->image_url }}');"></div>
                    <div class="hero__entry-text">
                        <div class="hero__entry-text-inner">
                            <div class="hero__entry-meta">
                                <span class="cat-links">
                                    <a href="category.html">{{ $post->category->name }}</a>
                                </span>
                            </div>
                            <h2 class="hero__entry-title">
                                <a href="{{ $post->url }}">
                                    {{ $post->title }}
                                </a>
                            </h2>
                            <p class="hero__entry-desc">
                                {{ $post->excerpt }}
                            </p>
                            <a class="hero__more-link" href="{{ $post->url }}">Read More</a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div> <!-- swiper-wrapper -->

            <div class="swiper-pagination"></div>

        </div> <!-- end hero slider -->

        <a href="#bricks" class="hero__scroll-down smoothscroll">
            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M10.25 6.75L4.75 12L10.25 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                    d="M19.25 12H5"></path>
            </svg>
            <span>Scroll</span>
        </a>

    </div> <!-- end hero -->


    <!--  masonry -->
    <div id="bricks" class="bricks">

        <div class="masonry">

            <div class="bricks-wrapper" data-animate-block>

                <div class="grid-sizer"></div>

                @foreach ($posts as $post)
                <article class="brick entry" data-animate-el>

                    <div class="entry__thumb">
                        <a href="single-standard.html" class="thumb-link">
                            <img src="{{ $post->image_url }}" alt="{{ $post->title }}">
                        </a>
                    </div> <!-- end entry__thumb -->

                    <div class="entry__text">
                        <div class="entry__header">
                            <div class="entry__meta">
                                <span class="cat-links">
                                    <a href="#">{{ $post->category->name }}</a>
                                </span>
                                <span class="byline">
                                    By:
                                    <a href="#0">{{ $post->user->name }}</a>
                                </span>
                            </div>
                            <h1 class="entry__title"><a href="{{ $post->url }}">{{ $post->title }}</a></h1>
                        </div>
                        <div class="entry__excerpt">
                            <p>
                                {{ $post->excerpt }}
                            </p>
                        </div>
                        <a class="entry__more-link" href="{{ $post->url }}">Read More</a>
                    </div> <!-- end entry__text -->

                </article> <!-- end article -->
                @endforeach

            </div> <!-- end bricks-wrapper -->

        </div> <!-- end masonry-->

        {{ $posts->links('layouts.pagination.front') }}


    </div> <!-- end bricks -->

</section> <!-- end s-content --> --}}



<!-- ***********************************************************  -->

<!-- Main Slider -->
<section class="main-slider">
    <div class="banner-carousel">
        <!-- Swiper -->
        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background-image:url(images/main-slider/1.jpg)">
                <div class="auto-container">
                    <div class="content clearfix">
                        <div class="title">Welcome our Medical Care Center</div>
                        <h2>Take Care of Your Health</h2>
                        <div class="text">We're always available for our Patients with emergent problems. You
                            can easily reach us 24/7 via the phone number below:</div>
                        <div class="btn-box clearfix">
                            <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Our
                                    Services</span></a>
                            <a href="contact.html" class="theme-btn phone-btn"><span
                                    class="icon flaticon-call"></span>555–123–2323</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide" style="background-image:url(images/main-slider/1.jpg)">
                <div class="auto-container">
                    <div class="content">
                        <div class="title">Welcome our Medical Care Center</div>
                        <h2>Take Care of Your Health</h2>
                        <div class="text">We're always available for our Patients with emergent problems. You
                            can easily reach us 24/7 via the phone number below:</div>
                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Our
                                    Services</span></a>
                            <a href="contact.html" class="theme-btn phone-btn"><span
                                    class="icon flaticon-call"></span>555–123–2323</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide" style="background-image:url(images/main-slider/1.jpg)">
                <div class="auto-container">
                    <div class="content">
                        <div class="title">Welcome our Medical Care Center</div>
                        <h2>Take Care of Your Health</h2>
                        <div class="text">We're always available for our Patients with emergent problems. You
                            can easily reach us 24/7 via the phone number below:</div>
                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-style-two"><span class="txt">Our
                                    Services</span></a>
                            <a href="contact.html" class="theme-btn phone-btn"><span
                                    class="icon flaticon-call"></span>555–123–2323</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- End Main Slider -->



<!-- News Section -->
<section class="news-section">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2>Latest News & Articals</h2>
            <div class="separator style-three"></div>
        </div>
        <div class="row clearfix">

            <!-- News Block -->
            @foreach ($posts as $post)
            <div class="news-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image">
                        <div class="category">Artical</div>
                        <a href="blog-detail.html"><img src="{{ $post->image_url }}" alt="" /></a>
                    </div>
                    <div class="lower-content">
                        <ul class="post-meta">
                            <li><a href="#">{{ $post->comments->count() }}</a></li>
                            <li><a href="#">{{ $post->created_at }}</a></li>
                            <li><a href="#">{{ $post->user->name }}</a></li>
                        </ul>
                        <h3><a href="#">{{ $post->title }}</a></h3>
                        <div class="text">{{ $post->excerpt }}</div>
                        <a href="{{$post->url}}" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
       
    </div>


    {{ $posts->links('layouts.pagination.front') }}
</section>
<!-- End News Section -->



@endsection

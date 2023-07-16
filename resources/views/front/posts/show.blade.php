@extends('layouts.front')

@section('content')

<!-- # site-content
        ================================================== -->
        {{-- <div id="content" class="s-content s-content--blog">

                <div class="row entry-wrap">
                    <div class="column lg-12">

                        <article class="entry format-standard">

                            <header class="entry__header">

                                <h1 class="entry__title">
                                    {{ $post->title }}
                                </h1>

                                <div class="entry__meta">
                                    <div class="entry__meta-author">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <circle cx="12" cy="8" r="3.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.8475 19.25H17.1525C18.2944 19.25 19.174 18.2681 18.6408 17.2584C17.8563 15.7731 16.068 14 12 14C7.93201 14 6.14367 15.7731 5.35924 17.2584C4.82597 18.2681 5.70558 19.25 6.8475 19.25Z"></path>
                                        </svg>
                                        <a href="#">{{ $post->user->name }}</a>
                                    </div>
                                    <div class="entry__meta-date">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-width="1.5"></circle>
                                            <path stroke="currentColor" stroke-width="1.5" d="M12 8V12L14 14"></path>
                                        </svg>
                                        {{ $post->published_at }}
                                    </div>
                                    <div class="entry__meta-cat">
                                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 17.25V9.75C19.25 8.64543 18.3546 7.75 17.25 7.75H4.75V17.25C4.75 18.3546 5.64543 19.25 6.75 19.25H17.25C18.3546 19.25 19.25 18.3546 19.25 17.25Z"></path>
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 7.5L12.5685 5.7923C12.2181 5.14977 11.5446 4.75 10.8127 4.75H6.75C5.64543 4.75 4.75 5.64543 4.75 6.75V11"></path>
                                        </svg>

                                        <span class="cat-links">
                                            <a href="#0">{{ $post->category->name }}</a>
                                        </span>
                                    </div>
                                </div>
                            </header>

                            <div class="entry__media">
                                <figure class="featured-image">
                                    <img src="{{ $post->image_url }}" alt="">
                                </figure>
                            </div>

                            <div class="content-primary">

                                <div class="entry__content">
                                    {!! $post->content !!}

                                    <p class="entry__tags">
                                        <strong>Tags:</strong>

                                        <span class="entry__tag-list">
                                            <a href="#0">orci</a>
                                            <a href="#0">lectus</a>
                                            <a href="#0">varius</a>
                                            <a href="#0">turpis</a>
                                        </span>

                                    </p>

                                    <div class="entry__author-box">
                                        <figure class="entry__author-avatar">
                                            <img alt="" src="{{ asset('images/avatars/user-06.jpg') }}" class="avatar">
                                        </figure>
                                        <div class="entry__author-info">
                                            <h5 class="entry__author-name">
                                                <a href="#0">
                                                    {{ $post->user->name }}
                                                </a>
                                            </h5>
                                            <p>
                                            Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero,
                                            a pharetra augue laboris in sit minim cupidatat ut dolor voluptate enim veniam
                                            consequat occaecat.
                                            </p>
                                        </div>
                                    </div>

                                </div> <!-- end entry-content -->

                                <div class="post-nav">
                                    @if($prevPost)
                                    <div class="post-nav__prev">
                                        <a href="{{ route('posts.show', $prevPost->slug) }}" rel="prev">
                                            <span>Prev</span>
                                            {{ $prevPost->title }}.
                                        </a>
                                    </div>
                                    @endif
                                    @if($nextPost)
                                    <div class="post-nav__next">
                                        <a href="{{ route('posts.show', $nextPost->slug) }}" rel="next">
                                            <span>Next</span>
                                            {{ $nextPost->title }}.
                                        </a>
                                    </div>
                                    @endif
                                </div>

                            </div> <!-- end content-primary -->

                        </article> <!-- end entry -->

                        <!-- comments -->
                        <div class="comments-wrap">

                            <div id="comments">
                                <div class="large-12">

                                    <h3>{{ trans_choice(':count Comments', $comments->count(), ['count' => $comments->count()]) }}</h3>

                                    <!-- START commentlist -->
                                    <ol class="commentlist">
                                        @foreach($comments as $comment)
                                        <li class="depth-1 comment">
                                            <div class="comment__avatar">
                                                <img class="avatar" src="{{ asset('images/avatars/user-01.jpg') }}" alt="" width="50" height="50">
                                            </div>
                                            <div class="comment__content">
                                                <div class="comment__info">
                                                    <div class="comment__author">{{ $comment->name }}</div>

                                                    <div class="comment__meta">
                                                        <div class="comment__time">{{ $comment->created_at }}</div>
                                                        <div class="comment__reply">
                                                            <a class="comment-reply-link" href="#0">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="comment__text">
                                                    <p>{{ $comment->body }}</p>
                                                </div>
                                            </div>
                                        </li> <!-- end comment level 1 -->
                                        @endforeach
                                    </ol>
                                    <!-- END commentlist -->

                                </div> <!-- end col-full -->
                            </div> <!-- end comments -->


                            <div class="comment-respond">

                                @if (session()->has('success'))
                                <p class="alert alert-success">{{ session('success') }}</p>
                                @endif

                                <!-- START respond -->
                                <div id="respond">

                                    <h3>
                                    {{ __('Add Comment') }}
                                    <span>{{ __('Your email address will not be published.') }}</span>
                                    </h3>

                                    <form name="contactForm" id="contactForm" method="post" action="{{ route('comments.store') }}" autocomplete="off">
                                        @csrf
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <fieldset class="row">

                                            <div class="column lg-6 tab-12 form-field">
                                                <input name="name" id="cName" class="u-fullwidth h-remove-bottom" placeholder="Your Name" value="" type="text">
                                            </div>

                                            <div class="column lg-6 tab-12 form-field">
                                                <input name="email" id="cEmail" class="u-fullwidth h-remove-bottom" placeholder="Your Email" value="" type="text">
                                            </div>

                                            <div class="column lg-12 form-field">
                                                <input name="website" id="cWebsite" class="u-fullwidth h-remove-bottom" placeholder="Website" value="" type="text">
                                            </div>

                                            <div class="column lg-12 message form-field">
                                                <textarea name="body" id="cMessage" class="u-fullwidth" placeholder="Your Message"></textarea>
                                            </div>

                                            <div class="column lg-12">
                                                <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large u-fullwidth" value="{{ __('Add Comment') }}" type="submit">
                                            </div>

                                        </fieldset>
                                    </form> <!-- end form -->

                                </div>
                                <!-- END respond-->

                            </div> <!-- end comment-respond -->

                        </div> <!-- end comments-wrap -->

                    </div>
                </div> <!-- end entry-wrap -->
        </section> <!-- end s-content --> --}}


        <!-- ***************************************************************** -->
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div>


            <!--Sidebar Page Container-->
            <div class="sidebar-page-container">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Content Side-->

                        <div class="content-side col-lg-8 col-md-12 col-sm-12">

                                <div class="news-detail">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{$post->image_url}}" alt="" />
                                        </div>
                                        <div class="lower-content">
                                            <div class="content">
                                                <ul class="post-info">
                                                    <li><span class="icon flaticon-chat-comment-oval-speech-bubble-with-text-lines"></span>
                                                        {{$post->comments->count()}}</li>
                                                </ul>
                                                <ul class="post-meta">
                                                    <li>{{$post->created_at}}</li>
                                                    <li>Post By: {{$post->user->name}}</li>
                                                </ul>
                                                <h3>{{$post->title}}</h3>
                                                <div class="text">
                                                    <p>{{$post->excerpt}} </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            @foreach ( $comments as $comment )
                                <div class="comments-area">

                                    <div class="group-title">
                                        <h2>Comments {{$comment->id}}</h2>
                                    </div>

                                    <!--Comment Box-->
                                    <div class="comment-box">
                                        <div class="comment">
                                            <div class="author-thumb"><img src="images/resource/author-7.jpg" alt=""></div>
                                            <div class="comment-inner">
                                                <div class="comment-info clearfix"><strong>Paul Jones </strong>
                                                    <div class="comment-time">August 29, 2018</div>
                                                </div>
                                                <div class="text">Cosmic ocean science Tunguska event the only home we’ve ever known
                                                    Orion’s sword, concept of the one billions upon billions paroxysm of global
                                                    death.</div>
                                                <a class="comment-reply" href="#"><span class="fas fa-reply-all"></span>Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Comment Box-->
                                    <div class="comment-box reply-comment">
                                        <div class="comment">
                                            <div class="author-thumb"><img src="images/resource/author-8.jpg" alt=""></div>
                                            <div class="comment-inner">
                                                <div class="comment-info clearfix"><strong>Catherine Brown</strong>
                                                    <div class="comment-time">August 29, 2017</div>
                                                </div>
                                                <div class="text">Cosmic ocean science Tunguska event the only home we’ve ever known
                                                    Orion’s of the one billions upon billions paroxysm of global death.</div>
                                                <a class="comment-reply" href="#"><span class="fas fa-reply-all"></span>Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                            <!--Comments Area-->



                            <!-- Comment Form -->
                            <div class="comment-form">

                                <div class="group-title">
                                    <h2>Leave a Reply</h2>
                                </div>

                                <!-- Comment Form -->
                                <div class="comment-form">
                                    <!-- Comment Form -->
                                    <form method="post" action="blog.html">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Full Name" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email" required>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="subject" placeholder="Subject" required>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Message"></textarea>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <button class="theme-btn comment-btn" type="submit" name="submit-form">Post
                                                    Comments</button>
                                            </div>

                                        </div>
                                    </form>

                                </div>
                                <!--End Faq Form -->

                            </div>



                        </div>

                        <!--Sidebar Side-->
                        <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                            <aside class="sidebar">
                                <!--Category Blog-->
                                <div class="sidebar-widget categories-blog">
                                    <div class="sidebar-title">
                                        <h2>Best Categories</h2>
                                        <div class="separator"></div>
                                    </div>
                                    <ul>
                                        <li><a href="#">Body Surgery <span>05</span></a></li>
                                        <li><a href="#">Dental Care <span>12</span></a></li>
                                        <li><a href="#">Eye Care <span>35</span></a></li>
                                        <li><a href="#">Blood Cancer <span>25</span></a></li>
                                        <li><a href="#">Neurology Sargery <span>65</span></a></li>
                                        <li><a href="#">Health Care <span>12</span></a></li>
                                    </ul>
                                </div>

                            </aside>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here"
                                    required>
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>

                    <br>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">SEO</a></li>
                        <li><a href="#">Logistics</a></li>
                        <li><a href="#">Freedom</a></li>
                    </ul>

                </div>

            </div>
        </div>

        <!-- Color Palate / Color Switcher -->
        <div class="color-palate">
            <div class="color-trigger">
                <i class="fas fa-cog"></i>
            </div>
            <div class="color-palate-head">
                <h6>Choose Your Color</h6>
            </div>
            <div class="various-color clearfix">
                <div class="colors-list">
                    <span class="palate default-color active" data-theme-file="css/color-themes/default-theme.css"></span>
                    <span class="palate green-color" data-theme-file="css/color-themes/green-theme.css"></span>
                    <span class="palate olive-color" data-theme-file="css/color-themes/olive-theme.css"></span>
                    <span class="palate orange-color" data-theme-file="css/color-themes/orange-theme.css"></span>
                    <span class="palate purple-color" data-theme-file="css/color-themes/purple-theme.css"></span>
                    <span class="palate teal-color" data-theme-file="css/color-themes/teal-theme.css"></span>
                    <span class="palate brown-color" data-theme-file="css/color-themes/brown-theme.css"></span>
                    <span class="palate redd-color" data-theme-file="css/color-themes/redd-color.css"></span>
                </div>
            </div>

            <ul class="rtl-version option-box">
                <li class="rtl">RTL Version</li>
                <li>LTR Version</li>
            </ul>

            <a href="#" class="purchase-btn">Purchase now $17</a>

            <div class="palate-foo">
                <span>You will find much more options for colors and styling in admin panel. This color picker is used only for
                    demonstation purposes.</span>
            </div>

        </div>
@endsection


@extends('layouts.app')
<div class="navigation collapsed ">
    <div class="navigation-mobile-top-banner">
        <div class="navigation-back-to-cozmo">
            <a href="#" class="navigation-back-to-cozmo-link">Search NYC Apartments <i class="fa fa-angle-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="navigation-top-wrapper">
        <div class="container">
            <div class="navigation-top">
                <svg class="open-navigation toggle-navigation" width="20px" height="14px" viewBox="0 0 20 14" version="1.1">

                    <title></title>

                    <defs></defs>
                    <g id="Final_CleanedUp" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Assets" transform="translate(-400.000000, -198.000000)" fill="#FFFFFF">
                            <path d="M400,212 L420,212 L420,209.666667 L400,209.666667 L400,212 Z M400,206.166667 L420,206.166667 L420,203.833333 L400,203.833333 L400,206.166667 Z M400,200.333333 L420,200.333333 L420,198 L400,198 L400,200.333333 Z" id="mweb_hamburger"></path>
                        </g>
                    </g>
                </svg>
                <svg class="close-navigation toggle-navigation" width="15px" height="15px">

                    <title></title>
                    <desc>Created with Sketch.</desc>
                    <defs></defs>
                    <g id="Final_CleanedUp" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Assets" transform="translate(-348.000000, -197.000000)" fill="#FFFFFF">
                            <polyline id="mweb_close" points="363 198.510714 361.489286 197 355.5 202.989286 349.510714 197 348 198.510714 353.989286 204.5 348 210.489286 349.510714 212 355.5 206.010714 361.489286 212 363 210.489286 357.010714 204.5 363 198.510714"></polyline>
                        </g>
                    </g>
                </svg>
                <div class="navigation-logo-container">
                    <a class="logo" href="#">
                        <img src="{{asset('assets/masterFrontend/img/lgo.png')}}">
                    </a>
                    <span class="navigation-by-cozmo">by CoZmo</span>
                </div>
                <div class="navigation-back-to-cozmo">
                    <a href="#" class="navigation-back-to-cozmo-link">Search NYC Apartments <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation-bottom-wrapper">
        <div class="container">
            <div class="navigation-bottom">
                <ul class="navigation-links">
                    <li>
                        <a href="#" class="">Trends & Data</a>
                        <ul class="sub-navigation">
                            <li class="sub-navigation-mobile-link"><a href="#" target="" class="">See all Trends & Data</a></li>
                            <li><a href="#" target="" class="">Affordability</a></li>
                            <li><a href="#" target="" class="">Market Reports</a></li>
                            <li><a href="#" target="" class="">Neighborhoods</a></li>
                            <li><a href="#" target="" class="">Rentals</a></li>
                            <li><a href="#" target="" class="">Sales</a></li>
                            <li><a href="#" target="" class="">Data Dashboard</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">Good Deals</a>
                        <ul class="sub-navigation">
                            <li class="sub-navigation-mobile-link"><a href="#" target="" class="">See all Good Deals</a></li>
                            <li><a href="#" target="" class="">Sales Deals</a></li>
                            <li><a href="#" target="" class="">Rental Deals</a></li>
                            <li><a href="#" target="" class="">Most Popular</a></li>
                            <li><a href="#" target="" class="">Open Houses</a></li>
                            <li><a href="#" target="" class="">Deal of the Week</a></li>
                            <li><a href="#" target="" class="">Housing Lotteries</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">NYC Living</a>
                        <ul class="sub-navigation">
                            <li class="sub-navigation-mobile-link"><a href="#" target="" class="">See all NYC Living</a></li>
                            <li><a href="#" target="" class="">Design</a></li>
                            <li><a href="#" target="" class="">Celebrity Homes</a></li>
                            <li><a href="#" target="" class="">Exploring NYC</a></li>
                            <li><a href="#" target="" class="">New Developments</a></li>
                            <li><a href="#" target="" class="">#CoZmofinds</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">Tips & Advice</a>
                        <ul class="sub-navigation">
                            <li class="sub-navigation-mobile-link"><a href="#" target="" class="">See all Tips & Advice</a></li>
                            <li><a href="#" target="" class="">Ask Us</a></li>
                            <li><a href="#" target="" class="">NYC Explained</a></li>
                            <li><a href="#" class="">Discussions</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="">NYC Guides</a>
                        <ul class="sub-navigation">
                            <li class="sub-navigation-mobile-link"><a href="/guides" target="" class="">See all NYC Guides</a></li>
                            <li><a href="#" target="" class="">How to Rent</a></li>
                            <li><a href="#" target="" class="">How to Buy</a></li>
                            <li><a href="#" target="" class="">How to Sell</a></li>
                            <li><a href="#" target="" class="">Neighborhood Guides</a></li>
                            <li><a href="#" target="" class="">Moving to NYC Guide</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="navigation-search-container">
                    <form #>
                        <input type="text" name="s" class="navigation-search" placeholder="Search CoZmo Blog ...">
                        <i class="fa fa-search navigation-search-icon" aria-hidden="true"></i>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation-mobile-overlay"></div>
</div>
@section('content')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/style.css')}}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/blog.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/blog_header.css')}}">

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-10">
                <div class="featured-posts">
                    <div class="row">
                        <div class="col-12">


                            <div class="se-card se-card--featured se-card--horizontal " id="se-card-96094">

                                {{-- Main Feature                               --}}
                                @foreach($main_feature as $mf)
                                <div class="se-card__inner-container">
                                    <span class="se-card__featured-badge">Featured</span>
                                    <div class="se-card__header">
                                        <a  class=" ga-event" data-event-action="click_post" data-event-label="featured_post=1" href="#"> <img src="images/cozmo/{{ $mf->image }}" alt="" class="se-card__image ga-event"></a>
                                    </div>
                                    <div class="se-card__body">
                                        <span class="se-card__eyebrow"><a class="alternate-grey ga-event" data-event-action="click_tag" data-event-label="Most Popular featured_post=1" href="#">{{$mf->blog_category}}</a></span>
                                        <h4 class="se-card__title"><span class="line-clamp" data-text="Loftlike East Village 1BR Asks $1M"><a class="ga-event" data-event-action="click_post" data-event-label="featured_post=1" href="#">{{$mf->title}} </a></span></h4>
                                        <div class="se-card__by-line">
                                            <img class="se-card__author-img" src="{{asset('assets/masterFrontend/img/dummy.jpg')}}" alt=""> By <a class="alternate-dark ga-event" data-event-action="click_post_author" data-event-label="featured_post=1" href="#" class="se-card__author-link">Michele Petry</a> <span class="se-card__middle-dot">&middot;</span> <span>{{ date('d-M-y', strtotime($mf->date_created)) }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{--Normal Feature Blogs                        --}}
                       @foreach($normal_feature as $nf)
                        <div class="col-sm-12 col-lg-6">
                            <div class="se-card se-card--featured  " id="se-card-96042">
                                <div class="se-card__inner-container">
                                    <span class="se-card__featured-badge">Featured</span>
                                    <div class="se-card__header">
                                        <a style="background-image: url(/images/cozmo/{{$nf->image}})" class="se-card__image ga-event" data-event-action="click_post" data-event-label="featured_post=2" href="#"> </a>
                                    </div>
                                    <div class="se-card__body">
                                        <span class="se-card__eyebrow"><a class="alternate-grey ga-event" data-event-action="click_tag" data-event-label="Celebrity Homes featured_post=2" href="#">{{$nf->type}}</a></span>
                                        <h4 class="se-card__title"><span class="line-clamp" data-text="Inside New Kid on the Block Joey McIntyre's UWS Home, Asking $4.4M"><a class="ga-event" data-event-action="click_post" data-event-label="featured_post=2" href="#">{{$nf->title}} </a></span></h4>
                                        <div class="se-card__by-line">
                                            <img class="se-card__author-img" src="" alt=""> By <a class="alternate-dark ga-event" data-event-action="click_post_author" data-event-label="featured_post=2" href="#" class="se-card__author-link">Michele Petry</a> <span class="se-card__middle-dot">&middot;</span> <span>{{ date('d-M-y', strtotime($mf->date_created)) }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                           @endforeach

                        </div>
                </div>            </div>
            <div class="col-12 col-lg-2">
                <div class="popular-posts__outer-container">
                    <div class="popular-posts__container">
                        <h5 class="popular-posts__header">MORE FROM cozmo</h5>
                        <div class="popular-posts__list-container">
                            {{--  Random Blogs                            --}}
                            @foreach($random_Blog as $rnd)
                            <div class="popular-post__container">
                                <p class="popular-post__title"><span class="line-clamp" data-text="5 Virtual Home Tours to Take From Your Sofa"><a class="ga-event" data-event-action="click_post" data-event-label="popular_post=1" href="#">{{$rnd->title}}</span></p>
                                <div class="popular-post__image" style="background-image: url(/images/cozmo/{{$rnd->image}})"><a class="ga-event" data-event-action="click_post" data-event-label="popular_post=1" href="#"></a></div>
                            </div>
                                @endforeach


                                             </div>
                    </div>
                </div>            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="section-title">The Latest</h3>
            </div>
        </div>
        <div id="post-list-container">
            <div class="post-list row">
                @foreach($blg as $data)
                <div class="col-12 col-lg-4">

                    <div class="se-card   " id="se-card-95984">
                        <div class="se-card__inner-container">
                            <div class="se-card__header">
                                <a style="background-image: url(/images/cozmo/{{$data->image}})" class="se-card__image ga-event" data-event-action="click_post" data-event-label="list_position=1" href="#"> </a>
                            </div>
                            <div class="se-card__body">
                                <span class="se-card__eyebrow"><a class="alternate-grey ga-event" data-event-action="click_tag" data-event-label="Housing Lotteries list_position=1" href="#">{{$data->blog_category}}</a></span>
                                <h4 class="se-card__title"><span class="line-clamp" data-text="Greenpoint Housing Lottery at 470 Manhattan Ave: 31 Units From $1,288"><a class="ga-event" data-event-action="click_post" data-event-label="list_position=1" href="#">{{$data->title}} </a></span></h4>
                                <div class="se-card__by-line">
                                    <img class="se-card__author-img" src="{{asset('assets/masterFrontend/img/dummy.jpg')}}" alt=""> By <a class="alternate-dark ga-event" data-event-action="click_post_author" data-event-label="list_position=1" href="#" class="se-card__author-link">CoZmo Team</a> <span class="se-card__middle-dot">&middot;</span> <span>{{ date('d-M-y', strtotime($data->date_created)) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="load-more__container">
                    <a class="load-more__btn cta" rel="nofollow" href="#" id="load-more-button"
                       data-mix-ads="1"
                       data-ignored-ids="67111,96094,96042,29460,95578,95939,93871,95837,85397"
                       data-category-id=""
                       data-author-id=""
                       data-s=""
                       data-initial-page="1"
                       data-taxonomy=""><span>Load More Stories</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="back-to-top">
        <div class="back-to-top__wrapper">
            <div class="back-to-top__container">
                <button class="cta back-to-top__button"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i> Back to Top</button>
            </div>
        </div>
    </div>
@endsection





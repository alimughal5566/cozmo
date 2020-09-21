
@extends('layouts.app')
<div style="height: 15%;"></div>
@include('layouts.top-bar')

<link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/fonts.css')}}">
<link rel="preload" href="fonts/SourceSansPro-Bold-487f2e9da2ff0740755a5ef01dc15a2888b89537795895203a831b13b199d8bb.woff2" as="font" crossorigin="anonymous"/>
<link rel="preload" href="fonts/SourceSansPro-SemiBold-fc772b0188bc262494be9dc529c50893ae189110dfcad5a286512b737aef93b8.woff2" as="font" crossorigin="anonymous"/>
<link rel="preload" href="fonts/SourceSansPro-Regular-ecf76895be1cf9e8b3edb254030e9c9c1d8f3c2efc1f9dc7e04ceff29eccae9c.woff2" as="font" crossorigin="anonymous"/>
<link rel="preload" href="fonts/SourceSansPro-Light-7ec7f22119da3493aedefd66ffd30f0aaf4cf4aee42d8254638bcca5971c3568.woff2" as="font" crossorigin="anonymous"/>
@section('header')
    @include('layouts.header')
@endsection

@section('content')

{{--<h1>Hello WOrd</h1>--}}

<div class="Home-featuredContainer grid-container grid-container-9cols-984">
    <!-- Featured Buildings -->
    <ul class="Home-featuredBuildings grid-span-9 grid-container-9cols">
        <li class="Home-featuredBuildingLarge Home-featuredCard Home-featuredCard--large jsFranchiseBoxAd jsGoogleAd">
            <div class="TallCard TallCard--hoverable Home-featuredCardInner">
                <div id="FranchiseBox_1" style="zoom: 1; opacity: 1;">
                    <img src="{{asset('assets/masterFrontend/img/apartment.png')}}" alt="" style="width: 100%;">
                </div>
                <div class="textContent">
                    <ul class="textContentList">
                        <li class="buildingName"><h2>New Developments in Manhattan</h2></li>
                        <li class="propertyCopy"><p>Explore luxury condominiums available now. From elegant boutique residences to full-service buildings in the heart of it all—own something that has never been lived in! </p></li>
                    </ul>
                </div>
                <div class="logoContainer"><div class="{{asset('assets/masterFrontend/img/lgo.png')}}"></div></div>
            </div>
        </li>

        @foreach($random_feature_left as $row)
        <li id="listing_1458011_featured"
            class="Home-featuredCard grid-span-3-984 item listing featured"
            se:behavior="selectable hoverable clickable"
            data-track="lt-hfclick-s-1458011"
            data-imp="lt-hfimp-s-1458011"
            data-id="1458011">

            <div class="TallCard TallCard--hoverable Home--absolutePosition u-height--full">
                <div class="TallCard-image" style="background-image: url(/images/cozmo/{{$row->main_image}})">

                    <div class="TallCard-listedBy">
                        Listed by Toll Brothers Real Estate Inc.
                    </div>

                    <div class="TallCard-imageTag">Featured</div>
                </div>

                <div class="TallCard-content">
                    <div class="Title Title--secondarySmCaps u-color-koalaGrey TallCard--marginBottom3">
                        Sale in
                        {{$row->city}}
                    </div>

                    <div class="u-ellipsis u-color-brightBlue" data-listing-type="Sale">
                        <a se:clickable:target="true" class="Title Title--secondary u-color-classicBlue--important u-text--noDecoration" data-gtm-event-category="sales_homepage" data-gtm-event-action="featured_listing" data-gtm-event-label="clickslot=2" data-gtm-event-value="869995" href="{{ url('/property/detail/' . $row->id)}}">{{$row->name_of_street}}</a>
                    </div>

                    <div class="TallCard-largeBold">
                        ${{$row->price}}
                        <span class="TallCard-largeBold--arrow">
            &uarr;
          </span>
                    </div>

                    <div class="TallCard-bottomStrip u-nowrap">
            <span class="TallCard-info">
              <span class="TallCard-info--bedIcon"></span>
               {{$row->no_of_bedroom}} Bed
            </span>
                        <span class="TallCard-info">
              <span class="TallCard-info--bathIcon"></span>
               {{$row->no_of_bathrooms}} Bath
            </span>
                        <span class="TallCard-info Home-featuredSqFt">
              <span class="TallCard-info--sizeIcon"></span>
              {{$row->square_feet}} ft&sup2;
            </span>
                    </div>

                </div>
            </div>
        </li>
            @endforeach

    </ul>


    <!-- End Featured Buildings -->

    <!-- Featured Listings -->

    <ul class="Home-featuredListings Home-featuredListings--fourAd grid-span-3 grid-span-9-984 grid-container-9cols-984">

       @foreach($random_feature_right as $row)
        <li id="listing_1401291_featured"
            class="Home-featuredCard grid-span-3-984 item listing featured"
            se:behavior="selectable hoverable clickable"
            data-track="lt-hfclick-s-1401291"
            data-imp="lt-hfimp-s-1401291"
            data-id="1401291">

            <div class="TallCard TallCard--hoverable Home--absolutePosition u-height--full">
                <div class="TallCard-image" style="background-image: url(/images/cozmo/{{$row->main_image}})">

                    <div class="TallCard-listedBy">
                        Listed by Modern Spaces
                    </div>

                    <div class="TallCard-imageTag">Featured</div>
                </div>

                <div class="TallCard-content">
                    <div class="Title Title--secondarySmCaps u-color-koalaGrey TallCard--marginBottom3">
                        Sale in
{{--                        @dd($row);--}}
                        {{$row->state}}
                    </div>

                    <div class="u-ellipsis u-color-brightBlue" data-listing-type="Sale">
                        <a se:clickable:target="true" class="Title Title--secondary u-color-classicBlue--important u-text--noDecoration" data-gtm-event-category="sales_homepage" data-gtm-event-action="featured_listing" data-gtm-event-label="clickslot=1" data-gtm-event-value="684592" href="{{ url('/property/detail/' . $row->id)}}">{{$row->name_of_street}}  </a>
                    </div>

                    <div class="TallCard-largeBold">
                        ${{$row->price}}
                        <span class="TallCard-largeBold--arrow">
            &uarr;
          </span>
                    </div>

                    <div class="TallCard-bottomStrip u-nowrap">
            <span class="TallCard-info">
              <span class="TallCard-info--bedIcon"></span>
              {{$row->no_of_bedroom}} Bed
            </span>
                        <span class="TallCard-info">
              <span class="TallCard-info--bathIcon"></span>
              {{$row->no_of_bathrooms}} Bath
            </span>
                        <span class="TallCard-info Home-featuredSqFt">
              <span class="TallCard-info--sizeIcon"></span>
              {{$row->square_feet}} ft&sup2;
            </span>
                    </div>

                </div>
            </div>
        </li>
           @endforeach
    </ul>

    <!-- End Featured Listings -->

    <!-- Apartments for You -->

    <div class="Home-apartmentsForYou grid-span-9">
        <div class="Home-apartmentsForYouInner">
            <h2 class="Title Title--primaryMd Home-sectionTitle">
                Trending Apartments in NYC
            </h2>
            <div class="Home-apartmentsForYouListContainer">
                <ul class="Home-apartmentsForYouList flexBox-row flexBox-nowrap jsSlider" data-slider-type="Apartments for You">

                   @foreach($appartment as $app)
                    <li class="Home-apartmentForYou"
                        se:behavior="selectable hoverable clickable">
                        <div class="LongCard LongCard--hoverable">
                            <div class="LongCard-inner">
                                <div class="LongCard-image" style="background-image: url({{ asset('images/cozmo/' . $app->main_image) }})"></div>
                                <div class="LongCard-content">
                                    <div class="Title Title--secondarySmCaps u-color-koalaGrey">
{{--                                                                                                            location here        --}}
                                        <a class="u-color-koalaGrey--important u-text--noDecoration" href="#">{{$app->city}}</a>
                                    </div>

                                    <div class="u-ellipsis u-color-brightBlue" data-listing-type="Sale">
                                        <a se:clickable:target="true" class="Title Title--secondary u-color-classicBlue--important u-text--noDecoration" data-gtm-event-category="sales_homepage" data-gtm-event-action="recommended" data-gtm-event-label="listing_click" data-gtm-event-value="600000" href="{{ url('/property/detail/' . $app->id)}}">{{$app->name_of_street}}</a>
                                    </div>

                                    <div class="LongCard-largeBold">
                                        ${{$app->price}}
                                        <span class="LongCard-largeBold--arrow">
              ↓
            </span>
                                    </div>

                                    <div class="LongCard-bottomStrip u-nowrap">
              <span class="LongCard-info">
                <span class="LongCard-info--bedIcon"></span>
                {{$app->no_of_bedroom}}
              </span>
                                        <span class="LongCard-info">
                <span class="LongCard-info--bathIcon"></span>
                {{$app->no_of_bathrooms}}
              </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                   @endforeach

                </ul>
                <a class="Home-apartmentsForYouListArrow Home-apartmentsForYouListArrow--prev jsSliderPrev"
                   href="javascript:void(0)"
                   data-event-category="sales_homepage"
                   data-event-action="recommended"
                   data-event-label="left_arrow_click"
                   data-event-value="">
                    <div class="CircleArrow CircleArrow--prev">Prev</div>
                </a>
                <a class="Home-apartmentsForYouListArrow jsSliderNext"
                   href="javascript:void(0)"
                   data-event-category="sales_homepage"
                   data-event-action="recommended"
                   data-event-label="right_arrow_click"
                   data-event-value="">
                    <div class="CircleArrow">Next</div>
                </a>
            </div>

        </div>
    </div>

    <!-- End Apartments for You -->

    <div class="Home-featuredExtras grid-span-9">




        <!-- Blog -->

        <div class="Home-topDivider Home--vertPadding24">
            <h2 class="Title Title--primaryMd Home-sectionTitle">One Block Over</h2>

            {{--            Home Blog Portion--}}

            <div class="Home-blog">


                <ul class="Home-blogFeed latest">

                    <li class="Home-blogPost">
                        <a class="Home-blogPostImage"
                           href="#"

                           style="background-image:url({{ asset('images/cozmo/' . $latestTopBlog->image) }})">
                        </a>
                        <div>
                            <h3 class="Home-blogFeedTitle Title Title--secondarySmCaps u-color-koalaGrey u-noMargin">The Latest</h3>
                            <div class="Home-blogPostLink">
                                <a class="u-color-whaleGrey--important" rel="noopener noreferrer" href="#">{{$latestTopBlog->title}}</a>
                            </div>
                        </div>
                    </li>
                  @foreach($latestBlog as $lb)
                    <li class="Home-blogPost">
                        <div class="Home-blogPostLink">
                            <a class="u-color-whaleGrey--important" rel="noopener noreferrer" href="#">{{$lb->title}}</a>
                        </div>
                    </li>
                    @endforeach

                </ul>



                <ul class="Home-blogFeed popular">
                    <li class="Home-blogPost">
                        <a class="Home-blogPostImage"
                           href="#"

                           style="background-image:url({{ asset('images/cozmo/' . $TopmostPopular->image) }})">
                        </a>
                        <div>
                            <h3 class="Home-blogFeedTitle Title Title--secondarySmCaps u-color-koalaGrey u-noMargin">Most Popular</h3>
                            <div class="Home-blogPostLink">
                                <a class="u-color-whaleGrey--important" rel="noopener noreferrer" href="#">{{$TopmostPopular->title}}</a>
                            </div>
                        </div>
                    </li>
                 @foreach($mostPopular as $mp)
                    <li class="Home-blogPost">
                        <div class="Home-blogPostLink">
                            <a class="u-color-whaleGrey--important" rel="noopener noreferrer" href="#">{{$mp->title}}</a>
                        </div>
                    </li>
                 @endforeach
                </ul>
                <ul class="Home-blogFeed trends">
                    <li class="Home-blogPost">
                        <a class="Home-blogPostImage"
                           href="#"

                           style="background-image:url({{asset('assets/masterFrontend/img/apartment.png')}})">
                        </a>
                        <div>
                            <h3 class="Home-blogFeedTitle Title Title--secondarySmCaps u-color-koalaGrey u-noMargin">Trends &amp; Data</h3>
                            <div class="Home-blogPostLink">
                                <a class="u-color-whaleGrey--important" rel="noopener noreferrer" href="#">Sales and Inventory Fall as COVID-19 Disrupts Shopping Season</a>
                            </div>
                        </div>
                    </li>
                    <li class="Home-blogPost">
                        <div class="Home-blogPostLink">
                            <a class="u-color-whaleGrey--important" rel="noopener noreferrer" href="#">How Will COVID-19 Impact NYC Home Prices?</a>
                        </div>
                    </li>
                    <li class="Home-blogPost">
                        <div class="Home-blogPostLink">
                            <a class="u-color-whaleGrey--important" rel="noopener noreferrer" href="#">What Happens to NYC Rents During a Recession?</a>
                        </div>
                    </li>
                    <li class="Home-blogPost">
                        <div class="Home-blogPostLink">
                            <a class="u-color-whaleGrey--important" rel="noopener noreferrer" href="#">COVID-19 Cuts New Inventory, But Prices Stay Flat</a>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

        <!-- End Blog -->

    </div>

</div>

   @endsection

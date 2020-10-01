@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/fonts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/detailcss/detail.css')}}">
<script
    src="https://www.datadoghq-browser-agent.com/datadog-rum-us.js"
    type="text/javascript">
</script>




@section('header')
    @include('layouts.header')
@endsection

<h1 class="text-center">This Page is Under Development</h1>
@section('content')

    <style>
        .SiteBlock-content {
            padding-top: 25px !important;
        }
        .u-background-mouseGrey {
            background-color: #ffffff !important;
        }

        .Breadcrumb--detailsPage {
            padding-bottom: 5px;
            padding-top: 0;
            width: 100%;
            background: transparent;
            margin: 0;
        }
        #content>.Container {
            padding-top: 0;
        }
        .price , .details_bed {
            font-size : 15px;
            text-transform: capitalize;
        }
    </style>



    <div id="site-content" class="SiteBlock-content ">


        <div id="content">









            <main class="Container">
                <div id="header_print_info" class="only-print">
                    Printed from CoZmo-web.com at 03:44 AM, Apr 28 2020
                </div>















                <div class="result-header hidden-xs">
                    <div class="hidden-xs" id="results-criteria">
                        <div class="Breadcrumb Breadcrumb--detailsPage Breadcrumb--searchPage ">
            <span>
                <a class="Breadcrumb-item" href="#">
                  <span itemprop="name">Sales</span>
                </a>
                <i class="Breadcrumb-separator fa fa-angle-right"></i>
              <meta itemprop="position" content="1">
            </span>
                            <span>
                <a class="Breadcrumb-item" href="#">
                  <span itemprop="name">Manhattan</span>
                </a>
                <i class="Breadcrumb-separator fa fa-angle-right"></i>
              <meta itemprop="position" content="2">
            </span>
                            <span>
                <a class="Breadcrumb-item" href="#">
                  <span itemprop="name">All Downtown</span>
                </a>
                <i class="Breadcrumb-separator fa fa-angle-right"></i>
              <meta itemprop="position" content="3">
            </span>
                            <span>
                <a class="Breadcrumb-item" href="#">
                  <span itemprop="name">Battery Park City</span>
                </a>
                <i class="Breadcrumb-separator fa fa-angle-right"></i>
              <meta itemprop="position" content="4">
            </span>
                        </div>
                        <div class="result-count first">{{$total_properties}}</div>
                        <h1 class="first">
                           @if($cty != null)
                            @foreach($cty as $ct)
                                {{$ct}} {{ ' ' }}
                            @endforeach
                            @endif
                            Apartments For Sale
                        </h1>
                        <span class="price">{{ ' ' }}-{{$price}}</span>
                        <span class="details_bed">{{ ' ' }}{{$std}}</span>
                    </div>
                </div>


                <hr class="Separator hidden-xs u-margin-top-10 u-margin-bottom-10">

                <div id="result-details" class="row extra-space">
                    <aside class="right hidden-xs hidden-sm hidden-print">
                        <div class="sidebar sidebar--sticky ">
                            <div class="details-and-map tabset hidden-sm u-padding-bottom-20 u-padding-top-10">
                                <ul class="tabset-tabs-container">
                                    <li class="tabset-tab selected" se:behavior="clickable">
                                        <a href="#"> Details</a>
                                    </li>
                                    <li class="tabset-tab " se:behavior="clickable">
                                        <a href="#"> Map</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="SingleArea" data-cut-text="true">
                                <h2 class="SingleArea-title SingleArea-title--h2">
                                    About Manhattan Rentals
                                </h2>
                                <div class="SingleArea-description">
            <span class="SingleArea-cuttedText">Use CoZmo-web to find apartments for rent in Manhattan for you and your pet by searching by price,  bedrooms, amenities and more.  Living in a Manhattan rental offers the unique opportunity to choose from many neighborhoods, all located in the heart of the world's number one real estate market.  Don't let the perfect townhouse, house, condo or Manhattan rental prevent you from living in one of the dozens of beautiful NYC neighborhoods.

</span>
                                    <a class="SingleArea-opener" href="#">Read more</a>
                                </div>
                            </div>

                            <div se:behavior="map" id="map" class="map" style="height: 336px;width: 100%;" se:map:zoom="15" se:map:min_zoom="12" se:map:max_zoom="19" se:map:center_latlon="40.73921,-73.99034" se:map:center_around="polygons" se:map:mapbox=".4f8c9dd3,.ba6c0422" se:map:layer_names="Streets,Satellite">
                                <div se:behavior="map_layer_definition" se:map_layer:name="streets" se:map_layer:url="#" se:map_layer:title="Streets" se:map_layer:min_zoom="12" se:map_layer:max_zoom="19" se:map_layer:type="base"></div>
                                <div se:behavior="map_layer_definition" se:map_layer:name="satellite" se:map_layer:url="https://api.mapbox.com/v4/.ba6c0422/{z}/{x}/{y}.png?access_token={accessToken}" se:map_layer:title="Satellite" se:map_layer:min_zoom="12" se:map_layer:max_zoom="19" se:map_layer:type="base"></div>
                                <div se:behavior="map_layer_definition" se:map_layer:name="bikeshare" se:map_layer:url="https://api.mapbox.com/v4/.se-nyc-bikeshare/{z}/{x}/{y}.png?access_token={accessToken}" se:map_layer:title="Citi Bike" se:map_layer:type="overlay" se:map_layer:utf_grid="https://api.tiles.mapbox.com/v3/.se-nyc-bikeshare/{z}/{x}/{y}.grid.json?callback={cb}" se:map_layer:utf_popup_content_js="'<b>Citi Bike Station</b><br />' + ev.data.name + '<br />' + ev.data.docks + ' docks'"></div>
                                <div se:behavior="map_layer_definition" se:map_layer:name="evacuation" se:map_layer:url="https://api.tiles.mapbox.com/v4/.se-nyc-evacuation/{z}/{x}/{y}.png?access_token={accessToken}" se:map_layer:title="Storm Evacuation Zones" se:map_layer:type="overlay" se:map_layer:utf_grid="https://api.tiles.mapbox.com/v3/.se-nyc-evacuation/{z}/{x}/{y}.grid.json?callback={cb}" se:map_layer:utf_popup_content_js="'<center>NYC Storm Evacuation<br />Zone ' + ev.data.Zone + '</center>'"></div>
                            </div>
                            <div se:behavior="map_polygon" se:map="map" se:map:paths="_atqG~~ggN?_c`|@~b`|@??~b`|@$kfqwF|kwbMdbBz[|n@r@~Vc\zB}o@ue@a}@}Oea@{E}fAsS{y@wtAuf@wn@vBsi@Icf@gOcYce@oh@yj@w|@up@kW{WuQ}CgX|Gqb@mEek@_\wc@gh@kk@z@ef@da@ghAeAmoAnFijA_c@qz@uj@sa@i[gf@ye@e]qEcI~EqEoG|CcFfAuIwHyBuH^q@rA_FzFgG`NkBhDjEzFdDtGpEpDnFxCtBnI{E`OmI~K_G`]pBf[vi@h[|k@|Lzt@f`@bSfa@ft@dChr@xOnn@li@pmGb`ExfDl{Bfi@xQ~hAjI|uAxM" se:map:color="#0066CC" se:map:weight="3" se:map:opacity="0.6" se:map:fillcolor="#FFFFFF" se:map:fillopacity="0.3" se:map:group="polygons"></div>

                            <div class="sidebar-map-bottom-ad">
                                <div id="b_right_p1" style="zoom: 1; opacity: 1;" class="">
                                    <!--  <script defer type="text/javascript">
                                       googletag.cmd.push(function() {
                                         googletag.display("b_right_p1");
                                       });
                                     </script> -->
                                </div>

                            </div>
                        </div>
                    </aside><a href="#" style="display: none;" rel="file" id="ubbfccwz">fvtabqxeexc</a>


                    <main class="left-two-thirds items item-rows listings u-overflow--unset">




                        <div class="SRPVideoBanner">
                            <img class="u-margin-right-15 SRPVideoBanner-icon" src="{{asset('assets/frontend/img/refine_search_eye.svg')}}">
                            <div>
                                <div class="SRPVideoBanner-title">
                                    Virtual viewing options now available
                                </div>
                                <div class="Text--sm22">
                                    Go to <b>REFINE THIS SEARCH</b> below to filter by listings with videos or 3D tours
                                </div>
                            </div>
                        </div>
                        <hr class="Separator hidden-xs u-margin-top-10 u-margin-bottom-10">


                        <div class="view-options view-options--sticky  hidden-xs hidden-print">
                            <div class="search-actions">
                                <a id="search_modal_link" class="button button-primary" data-toggle="modal" data-target="#searchModal" data-analytics-type="click" data-analytics-name="registerEvent" data-analytics-params="{&quot;event_category&quot;:&quot;search&quot;,&quot;event_action&quot;:&quot;click&quot;,&quot;event_label&quot;:&quot;refine&quot;}" data-finish-ab-test="filter_on_desktop_homepage_srp_2019" href="#">Refine This Search</a>




                                <a class="button button-tool jsSaveButton saveItemAfterAuthentication" rel="nofollow" id="add_folder_entry_Search_2302_link" data-gtm-rendered-from="add_entry_link_anon_and_lists" data-gtm-item-type="Search" data-gtm-item-id="2302" data-gtm-page-category="" data-gtm-page-type="search" data-gtm-track-save-item-type="false" data-item-id="2302" data-item-type="Search" onclick="window.gon.state.analyticsData = {'source':'save', 'itemId': '2302', 'itemType': 'Search'};" href="#"><i class="fa fa-star" data-gtm-item-type="Search" data-gtm-item-id="2302" data-gtm-track-save-item-type="false" data-item-id="2302" data-item-type="Search"></i> SAVE SEARCH</a>


                            </div>

                            <div class="label spaced">Sort by</div>
                            <select name="sort_by" class="DefaultField" se:behavior="form_submitter" style="height: 34px;">
                                <option selected="selected" value="listed_desc">Newest</option>
                                <option value="interesting_desc">Recently updated</option>
                                <option value="price_desc">Most expensive</option>
                                <option value="price_asc">Least expensive</option>
                                <option value="sqft_desc">Largest</option>
                                <option value="sqft_asc">Smallest</option>
                            </select>
                        </div>


                        <ul>
                            <!-- Featurre properties-->
                            @foreach($feature as $row)
                                <li>

                                    <article id="listing_3010089_featured" class="item featured" se:behavior="selectable hoverable clickable rememberable mappable" se:map="map" se:map:point="40.74165328,-73.99249389" data-track="lt-fclick-r-3010089" data-imp="lt-fimp-r-3010089" data-blockindex="0">
                                        <div class="banner no_fee"></div>
                                        <div id="banner_3010089"></div>
                                        <figure class="photo">
                                            <span id="saved_banner_3010089"></span>
                                            <a data-gtm-featured-listing="true" data-gtm-listing-id="3010089" data-gtm-listing-type="rentals" data-gtm-floorplan-3d="false" data-analytics-type="click" data-analytics-name="registerEvent" data-analytics-params="{&quot;event_category&quot;:&quot;rentals_search&quot;,&quot;event_action&quot;:&quot;featured_listing_click&quot;,&quot;event_label&quot;:&quot;listing_id=3010089|slot=1&quot;}" href="{{ url('/property/detail/' . $row->id)}}"><img alt="No Image Available Please Refresh" class="performance-marked" data-performance-mark="search.Rentals.listingImageVisible" src="{{asset('/images/cozmo/'.$row->main_image)}}"></a>

                                        </figure>

                                        <div class="featured-tag">Featured</div>


                                        <div class="details row">
                                            <h3 class="details-title">
                                                <a se:clickable:target="true" class="details-titleLink" data-gtm-featured-listing="true" data-gtm-listing-id="3010089" data-gtm-listing-type="rentals" data-gtm-floorplan-3d="false" data-analytics-type="click" data-analytics-name="registerEvent" data-analytics-params="{&quot;event_category&quot;:&quot;rentals_search&quot;,&quot;event_action&quot;:&quot;featured_listing_click&quot;,&quot;event_label&quot;:&quot;listing_id=3010089|slot=1&quot;}" href="{{ url('/property/detail/' . $row->id)}}">{{$row->address->name_of_street}}</a>

                                                <span id="buttons_3010089"></span>
                                            </h3>

                                            <ul>
                                                <li class="price-info">
                                                    <span class="price_arrow">↓</span>
                                                    <span class="price">${{$row->price}}</span>
                                                    <span class="secondary_text">for {{$row->property_for}}</span>
                                                </li>
                                                <li>
                                                    <ul class="details_info details-info-flex"><li class="first_detail_cell">{{$row->no_of_bedroom}} beds</li><li class="detail_cell">{{$row->no_of_bathrooms}} baths</li><li class="last_detail_cell">{{$row->square_feet}} ft²</li></ul>        </li>
                                                <li class="details_info">
                                                    {{$row->property_type}} in <a href="{{ url('/property/detail/' . $row->id)}}">{{$row->address->city}}</a>        </li>
                                                <li class="details_info details-info-flex">
                                                    Listed by Owner<br>
                                                </li>
                                                <li>
                                                    <span id="saved_section_3010089"></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </li>
                            @endforeach


                        </ul>

                        <!-- <script defer>
                          document.addEventListener("DOMContentLoaded", function () {
                              $j("#saved_banner_3010089").replaceWith('<div id=\'saved_banner_Rental-3010089\' class=\'banner saved unsaved\'><\/div>');
                              $j("#banner_3010089").replaceWith('<div class=\'banner no_fee\'><\/div>');
                                $j("#buttons_3010089").replaceWith('<div class=\"item_tools\">\n  \n\n\n  <a class=\"button button-tool hide-text jsSaveButton saveItemAfterAuthentication hdpSavePopover\" rel=\"nofollow\" id=\"add_folder_entry_Rental_3010089_link\" data-gtm-rendered-from=\"add_entry_link_anon_and_lists\" data-gtm-item-type=\"Rental\" data-gtm-item-id=\"3010089\" data-gtm-page-category=\"\" data-gtm-page-type=\"search\" data-gtm-track-save-item-type=\"false\" data-item-id=\"3010089\" data-item-type=\"Rental\" onclick=\"window.gon.state.analyticsData = {&#39;source&#39;:&#39;save&#39;, &#39;itemId&#39;: &#39;3010089&#39;, &#39;itemType&#39;: &#39;Rental&#39;};\" href=\"#\"><i class=\'fa fa-star\' data-gtm-item-type=Rental data-gtm-item-id=3010089 data-gtm-track-save-item-type=false data-item-id=\'3010089\' data-item-type=\'Rental\'><\/i> SAVE<\/a>\n\n\n<\/div>\n');
                              $j("#saved_section_3010089").replaceWith('\n');
                              $j("#saved_banner_2977308").replaceWith('<div id=\'saved_banner_Rental-2977308\' class=\'banner saved unsaved\'><\/div>');
                              $j("#banner_2977308").replaceWith('<div class=\'banner no_fee\'><\/div>');
                                $j("#buttons_2977308").replaceWith('<div class=\"item_tools\">\n  \n\n\n  <a class=\"button button-tool hide-text jsSaveButton saveItemAfterAuthentication hdpSavePopover\" rel=\"nofollow\" id=\"add_folder_entry_Rental_2977308_link\" data-gtm-rendered-from=\"add_entry_link_anon_and_lists\" data-gtm-item-type=\"Rental\" data-gtm-item-id=\"2977308\" data-gtm-page-category=\"\" data-gtm-page-type=\"search\" data-gtm-track-save-item-type=\"false\" data-item-id=\"2977308\" data-item-type=\"Rental\" onclick=\"window.gon.state.analyticsData = {&#39;source&#39;:&#39;save&#39;, &#39;itemId&#39;: &#39;2977308&#39;, &#39;itemType&#39;: &#39;Rental&#39;};\" href=\"#\"><i class=\'fa fa-star\' data-gtm-item-type=Rental data-gtm-item-id=2977308 data-gtm-track-save-item-type=false data-item-id=\'2977308\' data-item-type=\'Rental\'><\/i> SAVE<\/a>\n\n\n<\/div>\n');
                              $j("#saved_section_2977308").replaceWith('\n');
                          });
                        </script> -->



                        <ul>
                            <!-- Normal Properties-->
                            @if($data != null)
                                @foreach($data as $row)
                                    <li>

                                        <article id="listing_3027430" class="item" se:behavior="selectable hoverable clickable rememberable mappable" se:map="map" se:map:point="40.77330017,-73.95420074" data-track="lt-sclick-r-3027430" data-imp="lt-simp-r-3027430" data-blockindex="0">
                                            <div class="banner no_fee"></div>

                                            <div id="banner_3027430"></div>
                                            <figure class="photo">
                                                <span id="saved_banner_3027430"></span>
                                                <a data-gtm-regular-listing="true" data-gtm-listing-id="3027430" data-gtm-listing-type="rental" href="{{ url('/property/detail/' . $row->id)}}"><img alt="{{$row->address->name_of_street}}" class="performance-marked" data-performance-mark="search.Rentals.listingImageVisible" src="{{asset('/images/cozmo/'.$row->main_image)}}" /></a>

                                            </figure>



                                            <div class="details row">
                                                <h3 class="details-title">
                                                    <a se:clickable:target="true" class="details-titleLink" data-gtm-regular-listing="true" data-gtm-listing-id="3027430" data-gtm-listing-type="rental" href="{{ url('/property/detail/' . $row->id)}}">{{$row->address->name_of_street}}</a>

                                                    <span id="buttons_3027430"></span>
                                                </h3>

                                                <ul>
                                                    <li class="price-info">

                                                        <span class='price'>${{$row->price}}</span>
                                                        <span class='secondary_text'>for {{$row->property_for}}</span>
                                                    </li>
                                                    <li>
                                                        <ul class='details_info details-info-flex'><li class='first_detail_cell'>{{$row->no_of_bedroom}} beds</li><li class='detail_cell'>{{$row->no_of_bathrooms}} baths</li><li class='last_detail_cell'>{{$row->square_feet}} ft&sup2;</li></ul>        </li>
                                                    <li class="details_info">
                                                        {{$row->property_type}} in {{$row->address->city}}        </li>
                                                    <li>
                                                        <span id="saved_section_3027430"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </article>
                                    </li>
                                @endforeach
                            @endif

                        </ul>



                        <!--  <div class="more-saved-search">-->
                        <!--    <p class="tip">Tip: </p>-->
                        <!--    <p class="tip-text">&nbsp;To get instant notifications of new listings,&nbsp;</p>-->

                        <!--    <span class="nobreak">-->

                        <!--<a rel="nofollow" data-gtm-rendered-from="add_entry_link_anon_and_lists" data-gtm-item-type="Search" data-gtm-item-id="2302" data-gtm-page-category="" data-gtm-page-type="search" data-gtm-track-save-item-type="false" class="saveItemAfterAuthentication" data-item-id="2302" data-item-type="Search" href="#">save this search</a>-->



                        <!--    </span>-->


                        <!--  </div>-->

                        <!--    <div class="pagination center_aligned bottom_pagination big_space">-->
                        <!--    <nav class="pagination">-->

                        <!--        <span class="page current">-->
                        <!--  1-->
                        <!--</span>-->

                        <!--        <span class="page">-->
                        <!--  <a rel="next" href="#">2</a>-->
                        <!--</span>-->

                        <!--        <span class="page">-->
                        <!--  <a href="#">3</a>-->
                        <!--</span>-->

                        <!--        <span class="page gap">…</span>-->

                        <!--        <span class="page">-->
                        <!--  <a href="#">653</a>-->
                        <!--</span>-->

                        <!--    <span class="next">-->
                        <!--  <a rel="next" href="#">-->
                        <!--    <i class="fa fa-caret-right"></i>-->
                        <!--</a></span>-->

                        <!--  </nav>-->

                        <!--</div>-->


                    </main>

                    <div class="StickyBottomContainer StickyBottomContainer--search jsSearchPageStickyBlock">
                        <div class="StickyBottomContainer-actions">


                            <a rel="nofollow" class="Button Button--classicBlue saveItemAfterAuthentication" style="color: #fff;" data-gtm-rendered-from="add_entry_link_anon_and_lists" data-gtm-item-type="Search" data-gtm-item-id="2302" data-gtm-page-category="" data-gtm-page-type="search" data-gtm-track-save-item-type="false" data-item-id="2302" data-item-type="Search" onclick="window.gon.state.analyticsData = {'source':'save', 'itemId': '2302', 'itemType': 'Search'};" href="#">save this search</a>

                        </div>
                        <div class="StickyBottomContainer-info">
                            <div class="Text Text--disclaimer u-text-center">
                                You’ll get updates for changes and new listings
                            </div>
                        </div>
                    </div>
                </div>



                <div id="sortModal" class="modal modal-search fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header modal-header-navbar" style="padding:0px;">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <ul class="nav navbar-nav navbar-left" id="closing-id">
                                            <li>
                                                <a href="#" data-dismiss="modal" aria-hidden="true" class="u-noBorder MenuMobileButton u-noMargin isActive">
                                                    <span class="MenuMobileButton-icon"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="navbar-title">Sort</div>
                                    </div>
                                </nav>
                            </div>

                            <div>
                                <div>
                                    <ul class="SortList">
                                        <li class="SortList-item">
                                            <input class="DefaultRadio" id="listed_desc" type="radio" name="sort_by" value="listed_desc" checked=""><label for="listed_desc">Newest</label>
                                        </li>
                                        <li class="SortList-item">
                                            <input class="DefaultRadio" id="interesting_desc" type="radio" name="sort_by" value="interesting_desc" se:behavior="form_submitter"><label for="interesting_desc">Recently updated</label>
                                        </li>
                                        <li class="SortList-item">
                                            <input class="DefaultRadio" id="price_desc" type="radio" name="sort_by" value="price_desc" se:behavior="form_submitter"><label for="price_desc">Most expensive</label>
                                        </li>
                                        <li class="SortList-item">
                                            <input class="DefaultRadio" id="price_asc" type="radio" name="sort_by" value="price_asc" se:behavior="form_submitter"><label for="price_asc">Least expensive</label>
                                        </li>
                                        <li class="SortList-item">
                                            <input class="DefaultRadio" id="sqft_desc" type="radio" name="sort_by" value="sqft_desc" se:behavior="form_submitter"><label for="sqft_desc">Largest</label>
                                        </li>
                                        <li class="SortList-item">
                                            <input class="DefaultRadio" id="sqft_asc" type="radio" name="sort_by" value="sqft_asc" se:behavior="form_submitter"><label for="sqft_asc">Smallest</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="searchModal" class="modal modal-search fade">
                    <div class="modal-dialog u-height--full u-background-GreyLighter">
                        <div class="modal-content">
                            <div class="modal-header modal-header-navbar">
                                <nav class="navbar navbar-default">
                                    <div class="container-fluid">
                                        <ul class="nav navbar-nav navbar-left">
                                            <li>
                                                <a href="#" data-dismiss="modal" aria-hidden="true" class="u-noBorder MenuMobileButton u-noMargin isActive">
                                                    <span class="MenuMobileButton-icon"></span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="navbar-title">Refine Your Search</div>
                                    </div>
                                </nav>
                            </div>

                            <div class="modal-body">

                                <form class="user_input large criteria SearchCriteria SearchCriteria--dialog" id="form" name="1588059846" data-form-with-analytics-criteria="true" data-criteria-url="/nyc/rentals/search_criteria" se:coordinator="criteria_expander" se:behavior="form_validatable_on_coordinate" data-search-key="rentals" action="/nyc/process/rentals/update_search" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="73mnBQD4fQqB3Mn/9aMrVb/XphFH/qrxS9RiwVQ56LwVc/UctuO7hQBKtPdP00KPqYdUwUDfNYm2GiPI2UUP6Q==">  <input type="hidden" name="previous" id="previous" value="area:100">
                                    <input type="hidden" name="refined_search" id="refined_search" value="true">

                                    <div class="refine-search">
                                        <div class="SearchCriteria-row area"><div id="location_combo_area" class="SearchCriteria-location">
                                                <div class="LocationCriteria">
                                                    <label class="SearchCriteria-label" for="area-txt-box">Location</label>

                                                    <div class="AreaSelect area-selector" data-area="selector">
                                                        <div class="AreaSelect-input area-input">
                                                            <ul class="AreaSelect-selectedItems area-sel-items" data-area="selectedItems">
                                                                <li id="area-text" class="AreaSelect-chooseItem" data-area="selectItem">
                                                                    <input class="AreaSelect-textBox" data-area="textBox" type="text" id="area-txt-box" placeholder="Neighborhood, Address, Building, Keyword" autocomplete="off">
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="AreaSelect-list area-list" data-area="list">
                                                            <ul class="AreaSelect-itemsList area-items" data-area="itemsList">
                                                                <li class="AreaSelect-item AreaSelect-item--0 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1" class="DefaultCheckbox" value="1" data-parent-id="0" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1">
                                                                        NYC and NJ
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--1 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-100" class="DefaultCheckbox" value="100" data-parent-id="1" data-always-checked-with="" data-non-sale-checked-with="" checked="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-100">
                                                                        Manhattan
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-102" class="DefaultCheckbox" value="102" data-parent-id="100" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-102">
                                                                        All Downtown
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-112" class="DefaultCheckbox" value="112" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-112">
                                                                        Battery Park City
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-115" class="DefaultCheckbox" value="115" data-parent-id="102" data-always-checked-with="146" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-115">
                                                                        Chelsea
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-163" class="DefaultCheckbox" value="163" data-parent-id="115" data-always-checked-with="146" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-163">
                                                                        West Chelsea
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-110" class="DefaultCheckbox" value="110" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-110">
                                                                        Chinatown
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-103" class="DefaultCheckbox" value="103" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-103">
                                                                        Civic Center
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-117" class="DefaultCheckbox" value="117" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="106" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-117">
                                                                        East Village
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-104" class="DefaultCheckbox" value="104" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-104">
                                                                        Financial District
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-114" class="DefaultCheckbox" value="114" data-parent-id="104" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-114">
                                                                        Fulton/Seaport
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-158" class="DefaultCheckbox" value="158" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-158">
                                                                        Flatiron
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-159" class="DefaultCheckbox" value="159" data-parent-id="158" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-159">
                                                                        NoMad
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-113" class="DefaultCheckbox" value="113" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-113">
                                                                        Gramercy Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-116" class="DefaultCheckbox" value="116" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-116">
                                                                        Greenwich Village
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-118" class="DefaultCheckbox" value="118" data-parent-id="116" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-118">
                                                                        Noho
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-108" class="DefaultCheckbox" value="108" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-108">
                                                                        Little Italy
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-109" class="DefaultCheckbox" value="109" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-109">
                                                                        Lower East Side
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-111" class="DefaultCheckbox" value="111" data-parent-id="109" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-111">
                                                                        Two Bridges
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-162" class="DefaultCheckbox" value="162" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-162">
                                                                        Nolita
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-107" class="DefaultCheckbox" value="107" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-107">
                                                                        Soho
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-166" class="DefaultCheckbox" value="166" data-parent-id="107" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-166">
                                                                        Hudson Square
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-106" class="DefaultCheckbox" value="106" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-106">
                                                                        Stuyvesant Town/PCV
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-105" class="DefaultCheckbox" value="105" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-105">
                                                                        Tribeca
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-157" class="DefaultCheckbox" value="157" data-parent-id="102" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-157">
                                                                        West Village
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-119" class="DefaultCheckbox" value="119" data-parent-id="100" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-119">
                                                                        All Midtown
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-121" class="DefaultCheckbox" value="121" data-parent-id="119" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-121">
                                                                        Central Park South
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-120" class="DefaultCheckbox" value="120" data-parent-id="119" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-120">
                                                                        Midtown
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-123" class="DefaultCheckbox" value="123" data-parent-id="119" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-123">
                                                                        Midtown East
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-133" class="DefaultCheckbox" value="133" data-parent-id="123" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-133">
                                                                        Kips Bay
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-130" class="DefaultCheckbox" value="130" data-parent-id="123" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-130">
                                                                        Murray Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-131" class="DefaultCheckbox" value="131" data-parent-id="123" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-131">
                                                                        Sutton Place
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-132" class="DefaultCheckbox" value="132" data-parent-id="123" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-132">
                                                                        Turtle Bay
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--5 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-134" class="DefaultCheckbox" value="134" data-parent-id="132" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-134">
                                                                        Beekman
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-122" class="DefaultCheckbox" value="122" data-parent-id="119" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-122">
                                                                        Midtown South
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-124" class="DefaultCheckbox" value="124" data-parent-id="119" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-124">
                                                                        Midtown West
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-152" class="DefaultCheckbox" value="152" data-parent-id="124" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-152">
                                                                        Hell's Kitchen
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-146" class="DefaultCheckbox" value="146" data-parent-id="124" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-146">
                                                                        Hudson Yards
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-139" class="DefaultCheckbox" value="139" data-parent-id="100" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-139">
                                                                        All Upper East Side
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-140" class="DefaultCheckbox" value="140" data-parent-id="139" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-140">
                                                                        Upper East Side
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-143" class="DefaultCheckbox" value="143" data-parent-id="140" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-143">
                                                                        Carnegie Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-141" class="DefaultCheckbox" value="141" data-parent-id="140" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-141">
                                                                        Lenox Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-164" class="DefaultCheckbox" value="164" data-parent-id="140" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-164">
                                                                        Upper Carnegie Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-142" class="DefaultCheckbox" value="142" data-parent-id="140" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-142">
                                                                        Yorkville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-144" class="DefaultCheckbox" value="144" data-parent-id="100" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-144">
                                                                        All Upper Manhattan
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-154" class="DefaultCheckbox" value="154" data-parent-id="144" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-154">
                                                                        Central Harlem
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-165" class="DefaultCheckbox" value="165" data-parent-id="154" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-165">
                                                                        South Harlem
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-155" class="DefaultCheckbox" value="155" data-parent-id="144" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-155">
                                                                        East Harlem
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-148" class="DefaultCheckbox" value="148" data-parent-id="144" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-148">
                                                                        Hamilton Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-150" class="DefaultCheckbox" value="150" data-parent-id="144" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-150">
                                                                        Inwood
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-226" class="DefaultCheckbox" value="226" data-parent-id="144" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-226">
                                                                        Marble Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-147" class="DefaultCheckbox" value="147" data-parent-id="144" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-147">
                                                                        Morningside Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-149" class="DefaultCheckbox" value="149" data-parent-id="144" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-149">
                                                                        Washington Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-151" class="DefaultCheckbox" value="151" data-parent-id="149" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-151">
                                                                        Fort George
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-145" class="DefaultCheckbox" value="145" data-parent-id="149" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-145">
                                                                        Hudson Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-153" class="DefaultCheckbox" value="153" data-parent-id="144" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-153">
                                                                        West Harlem
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-161" class="DefaultCheckbox" value="161" data-parent-id="153" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-161">
                                                                        Manhattanville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-135" class="DefaultCheckbox" value="135" data-parent-id="100" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-135">
                                                                        All Upper West Side
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-137" class="DefaultCheckbox" value="137" data-parent-id="135" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-137">
                                                                        Upper West Side
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-136" class="DefaultCheckbox" value="136" data-parent-id="137" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-136">
                                                                        Lincoln Square
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-138" class="DefaultCheckbox" value="138" data-parent-id="137" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-138">
                                                                        Manhattan Valley
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-101" class="DefaultCheckbox" value="101" data-parent-id="100" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-101">
                                                                        Roosevelt Island
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--1 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-300" class="DefaultCheckbox" value="300" data-parent-id="1" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-300">
                                                                        Brooklyn
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-336" class="DefaultCheckbox" value="336" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-336">
                                                                        Bath Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-331" class="DefaultCheckbox" value="331" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-331">
                                                                        Bay Ridge
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-333" class="DefaultCheckbox" value="333" data-parent-id="331" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-333">
                                                                        Fort Hamilton
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-310" class="DefaultCheckbox" value="310" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-310">
                                                                        Bedford-Stuyvesant
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-353" class="DefaultCheckbox" value="353" data-parent-id="310" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-353">
                                                                        Ocean Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-312" class="DefaultCheckbox" value="312" data-parent-id="310" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-312">
                                                                        Stuyvesant Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-334" class="DefaultCheckbox" value="334" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-334">
                                                                        Bensonhurst
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-363" class="DefaultCheckbox" value="363" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-363">
                                                                        Bergen Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-306" class="DefaultCheckbox" value="306" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-306">
                                                                        Boerum Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-338" class="DefaultCheckbox" value="338" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-338">
                                                                        Borough Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-335" class="DefaultCheckbox" value="335" data-parent-id="338" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-335">
                                                                        Mapleton
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-342" class="DefaultCheckbox" value="342" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-342">
                                                                        Brighton Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-305" class="DefaultCheckbox" value="305" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-305">
                                                                        Brooklyn Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-354" class="DefaultCheckbox" value="354" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-354">
                                                                        Brownsville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-313" class="DefaultCheckbox" value="313" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-313">
                                                                        Bushwick
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-359" class="DefaultCheckbox" value="359" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-359">
                                                                        Canarsie
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-321" class="DefaultCheckbox" value="321" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-321">
                                                                        Carroll Gardens
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-364" class="DefaultCheckbox" value="364" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-364">
                                                                        Clinton Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-322" class="DefaultCheckbox" value="322" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-322">
                                                                        Cobble Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-328" class="DefaultCheckbox" value="328" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-328">
                                                                        Columbia St Waterfront District
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-341" class="DefaultCheckbox" value="341" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-341">
                                                                        Coney Island
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-325" class="DefaultCheckbox" value="325" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-325">
                                                                        Crown Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-327" class="DefaultCheckbox" value="327" data-parent-id="325" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-327">
                                                                        Weeksville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-307" class="DefaultCheckbox" value="307" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-307">
                                                                        DUMBO
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-308" class="DefaultCheckbox" value="308" data-parent-id="307" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-308">
                                                                        Vinegar Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-343" class="DefaultCheckbox" value="343" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-343">
                                                                        Ditmas Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-352" class="DefaultCheckbox" value="352" data-parent-id="343" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-352">
                                                                        Fiske Terrace
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-303" class="DefaultCheckbox" value="303" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-303">
                                                                        Downtown Brooklyn
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-332" class="DefaultCheckbox" value="332" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-332">
                                                                        Dyker Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-358" class="DefaultCheckbox" value="358" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-358">
                                                                        East Flatbush
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-309" class="DefaultCheckbox" value="309" data-parent-id="358" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-309">
                                                                        Farragut
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-330" class="DefaultCheckbox" value="330" data-parent-id="358" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-330">
                                                                        Wingate
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-314" class="DefaultCheckbox" value="314" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-314">
                                                                        East New York
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-316" class="DefaultCheckbox" value="316" data-parent-id="314" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-316">
                                                                        City Line
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-315" class="DefaultCheckbox" value="315" data-parent-id="314" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-315">
                                                                        New Lots
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-317" class="DefaultCheckbox" value="317" data-parent-id="314" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-317">
                                                                        Starrett City
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-346" class="DefaultCheckbox" value="346" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-346">
                                                                        Flatbush
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-360" class="DefaultCheckbox" value="360" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-360">
                                                                        Flatlands
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-304" class="DefaultCheckbox" value="304" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-304">
                                                                        Fort Greene
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-370" class="DefaultCheckbox" value="370" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-370">
                                                                        Gerritsen Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-320" class="DefaultCheckbox" value="320" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-320">
                                                                        Gowanus
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-337" class="DefaultCheckbox" value="337" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-337">
                                                                        Gravesend
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-301" class="DefaultCheckbox" value="301" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-301">
                                                                        Greenpoint
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-367" class="DefaultCheckbox" value="367" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-367">
                                                                        Greenwood
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-340" class="DefaultCheckbox" value="340" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-340">
                                                                        Kensington
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-350" class="DefaultCheckbox" value="350" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-350">
                                                                        Manhattan Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-361" class="DefaultCheckbox" value="361" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-361">
                                                                        Marine Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-348" class="DefaultCheckbox" value="348" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-348">
                                                                        Midwood
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-362" class="DefaultCheckbox" value="362" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-362">
                                                                        Mill Basin
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-339" class="DefaultCheckbox" value="339" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-339">
                                                                        Ocean Parkway
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-365" class="DefaultCheckbox" value="365" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-365">
                                                                        Old Mill Basin
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-319" class="DefaultCheckbox" value="319" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-319">
                                                                        Park Slope
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-326" class="DefaultCheckbox" value="326" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-326">
                                                                        Prospect Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-329" class="DefaultCheckbox" value="329" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-329">
                                                                        Prospect Lefferts Gardens
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-355" class="DefaultCheckbox" value="355" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-355">
                                                                        Prospect Park South
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-318" class="DefaultCheckbox" value="318" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-318">
                                                                        Red Hook
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-345" class="DefaultCheckbox" value="345" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-345">
                                                                        Seagate
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-349" class="DefaultCheckbox" value="349" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-349">
                                                                        Sheepshead Bay
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-344" class="DefaultCheckbox" value="344" data-parent-id="349" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-344">
                                                                        Homecrest
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-366" class="DefaultCheckbox" value="366" data-parent-id="349" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-366">
                                                                        Madison
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-323" class="DefaultCheckbox" value="323" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-323">
                                                                        Sunset Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-302" class="DefaultCheckbox" value="302" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-302">
                                                                        Williamsburg
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-373" class="DefaultCheckbox" value="373" data-parent-id="302" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-373">
                                                                        East Williamsburg
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-324" class="DefaultCheckbox" value="324" data-parent-id="300" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-324">
                                                                        Windsor Terrace
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--1 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-400" class="DefaultCheckbox" value="400" data-parent-id="1" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-400">
                                                                        Queens
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-401" class="DefaultCheckbox" value="401" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-401">
                                                                        Astoria
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-474" class="DefaultCheckbox" value="474" data-parent-id="401" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-474">
                                                                        Ditmars-Steinway
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-431" class="DefaultCheckbox" value="431" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-431">
                                                                        Auburndale
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-428" class="DefaultCheckbox" value="428" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-428">
                                                                        Bayside
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-480" class="DefaultCheckbox" value="480" data-parent-id="428" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-480">
                                                                        Bay Terrace (Queens)
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-443" class="DefaultCheckbox" value="443" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-443">
                                                                        Bellerose
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-446" class="DefaultCheckbox" value="446" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-446">
                                                                        Briarwood
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-479" class="DefaultCheckbox" value="479" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-479">
                                                                        Brookville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-437" class="DefaultCheckbox" value="437" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-437">
                                                                        Cambria Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-459" class="DefaultCheckbox" value="459" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-459">
                                                                        Clearview
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-418" class="DefaultCheckbox" value="418" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-418">
                                                                        College Point
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-409" class="DefaultCheckbox" value="409" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-409">
                                                                        Corona
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-429" class="DefaultCheckbox" value="429" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-429">
                                                                        Douglaston
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-406" class="DefaultCheckbox" value="406" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-406">
                                                                        East Elmhurst
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-408" class="DefaultCheckbox" value="408" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-408">
                                                                        Elmhurst
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-442" class="DefaultCheckbox" value="442" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-442">
                                                                        Floral Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-416" class="DefaultCheckbox" value="416" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-416">
                                                                        Flushing
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-456" class="DefaultCheckbox" value="456" data-parent-id="416" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-456">
                                                                        East Flushing
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-457" class="DefaultCheckbox" value="457" data-parent-id="416" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-457">
                                                                        Murray Hill (Queens)
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-415" class="DefaultCheckbox" value="415" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-415">
                                                                        Forest Hills
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-419" class="DefaultCheckbox" value="419" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-419">
                                                                        Fresh Meadows
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-439" class="DefaultCheckbox" value="439" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-439">
                                                                        Glen Oaks
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-413" class="DefaultCheckbox" value="413" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-413">
                                                                        Glendale
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-453" class="DefaultCheckbox" value="453" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-453">
                                                                        Hillcrest
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-434" class="DefaultCheckbox" value="434" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-434">
                                                                        Hollis
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-425" class="DefaultCheckbox" value="425" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-425">
                                                                        Howard Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-467" class="DefaultCheckbox" value="467" data-parent-id="425" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-467">
                                                                        Hamilton Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-470" class="DefaultCheckbox" value="470" data-parent-id="425" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-470">
                                                                        Lindenwood
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-471" class="DefaultCheckbox" value="471" data-parent-id="425" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-471">
                                                                        Old Howard Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-468" class="DefaultCheckbox" value="468" data-parent-id="425" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-468">
                                                                        Ramblersville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-469" class="DefaultCheckbox" value="469" data-parent-id="425" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-469">
                                                                        Rockwood Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-405" class="DefaultCheckbox" value="405" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-405">
                                                                        Jackson Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-432" class="DefaultCheckbox" value="432" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-432">
                                                                        Jamaica
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-447" class="DefaultCheckbox" value="447" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-447">
                                                                        Jamaica Estates
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-421" class="DefaultCheckbox" value="421" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-421">
                                                                        Jamaica Hills
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-424" class="DefaultCheckbox" value="424" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-424">
                                                                        Kew Gardens
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-420" class="DefaultCheckbox" value="420" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-420">
                                                                        Kew Gardens Hills
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-436" class="DefaultCheckbox" value="436" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-436">
                                                                        Laurelton
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-430" class="DefaultCheckbox" value="430" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-430">
                                                                        Little Neck
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-402" class="DefaultCheckbox" value="402" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-402">
                                                                        Long Island City
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-478" class="DefaultCheckbox" value="478" data-parent-id="402" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-478">
                                                                        Hunters Point
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-410" class="DefaultCheckbox" value="410" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-410">
                                                                        Maspeth
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-411" class="DefaultCheckbox" value="411" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-411">
                                                                        Middle Village
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-449" class="DefaultCheckbox" value="449" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-449">
                                                                        New Hyde Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-407" class="DefaultCheckbox" value="407" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-407">
                                                                        North Corona
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-451" class="DefaultCheckbox" value="451" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-451">
                                                                        Oakland Gardens
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-426" class="DefaultCheckbox" value="426" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-426">
                                                                        Ozone Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-454" class="DefaultCheckbox" value="454" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-454">
                                                                        Pomonok
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-438" class="DefaultCheckbox" value="438" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-438">
                                                                        Queens Village
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-414" class="DefaultCheckbox" value="414" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-414">
                                                                        Rego Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-423" class="DefaultCheckbox" value="423" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-423">
                                                                        Richmond Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-412" class="DefaultCheckbox" value="412" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-412">
                                                                        Ridgewood
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-477" class="DefaultCheckbox" value="477" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-477">
                                                                        Rockaway All
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-448" class="DefaultCheckbox" value="448" data-parent-id="477" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-448">
                                                                        Arverne
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-462" class="DefaultCheckbox" value="462" data-parent-id="477" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-462">
                                                                        Bayswater
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-463" class="DefaultCheckbox" value="463" data-parent-id="477" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-463">
                                                                        Belle Harbor
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-464" class="DefaultCheckbox" value="464" data-parent-id="477" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-464">
                                                                        Breezy Point
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-441" class="DefaultCheckbox" value="441" data-parent-id="477" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-441">
                                                                        Broad Channel
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-466" class="DefaultCheckbox" value="466" data-parent-id="477" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-466">
                                                                        Edgemere
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-440" class="DefaultCheckbox" value="440" data-parent-id="477" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-440">
                                                                        Far Rockaway
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-473" class="DefaultCheckbox" value="473" data-parent-id="477" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-473">
                                                                        Hammels
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-465" class="DefaultCheckbox" value="465" data-parent-id="477" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-465">
                                                                        Neponsit
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-452" class="DefaultCheckbox" value="452" data-parent-id="477" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-452">
                                                                        Rockaway Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-444" class="DefaultCheckbox" value="444" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-444">
                                                                        Rosedale
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-433" class="DefaultCheckbox" value="433" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-433">
                                                                        South Jamaica
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-427" class="DefaultCheckbox" value="427" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-427">
                                                                        South Ozone Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-450" class="DefaultCheckbox" value="450" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-450">
                                                                        South Richmond Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-445" class="DefaultCheckbox" value="445" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-445">
                                                                        Springfield Gardens
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-435" class="DefaultCheckbox" value="435" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-435">
                                                                        St. Albans
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-403" class="DefaultCheckbox" value="403" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-403">
                                                                        Sunnyside
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-455" class="DefaultCheckbox" value="455" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-455">
                                                                        Utopia
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-417" class="DefaultCheckbox" value="417" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-417">
                                                                        Whitestone
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-461" class="DefaultCheckbox" value="461" data-parent-id="417" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-461">
                                                                        Beechhurst
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-460" class="DefaultCheckbox" value="460" data-parent-id="417" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-460">
                                                                        Malba
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-422" class="DefaultCheckbox" value="422" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-422">
                                                                        Woodhaven
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-404" class="DefaultCheckbox" value="404" data-parent-id="400" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-404">
                                                                        Woodside
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--1 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-200" class="DefaultCheckbox" value="200" data-parent-id="1" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-200">
                                                                        Bronx
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-243" class="DefaultCheckbox" value="243" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-243">
                                                                        Baychester
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-221" class="DefaultCheckbox" value="221" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-221">
                                                                        Bedford Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-218" class="DefaultCheckbox" value="218" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-218">
                                                                        Belmont
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-265" class="DefaultCheckbox" value="265" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-265">
                                                                        Bronxwood
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-229" class="DefaultCheckbox" value="229" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-229">
                                                                        Castle Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-236" class="DefaultCheckbox" value="236" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-236">
                                                                        City Island
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-234" class="DefaultCheckbox" value="234" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-234">
                                                                        Co-op City
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-211" class="DefaultCheckbox" value="211" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-211">
                                                                        Concourse
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-273" class="DefaultCheckbox" value="273" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-273">
                                                                        Country Club
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-209" class="DefaultCheckbox" value="209" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-209">
                                                                        Crotona Park East
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-216" class="DefaultCheckbox" value="216" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-216">
                                                                        East Tremont
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-219" class="DefaultCheckbox" value="219" data-parent-id="216" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-219">
                                                                        West Farms
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-246" class="DefaultCheckbox" value="246" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-246">
                                                                        Eastchester
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-276" class="DefaultCheckbox" value="276" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-276">
                                                                        Edenwald
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-214" class="DefaultCheckbox" value="214" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-214">
                                                                        Fordham
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-210" class="DefaultCheckbox" value="210" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-210">
                                                                        Highbridge
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-204" class="DefaultCheckbox" value="204" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-204">
                                                                        Hunts Point
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-224" class="DefaultCheckbox" value="224" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-224">
                                                                        Kingsbridge
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-220" class="DefaultCheckbox" value="220" data-parent-id="224" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-220">
                                                                        Kingsbridge Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-241" class="DefaultCheckbox" value="241" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-241">
                                                                        Laconia
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-205" class="DefaultCheckbox" value="205" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-205">
                                                                        Longwood
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-202" class="DefaultCheckbox" value="202" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-202">
                                                                        Melrose
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-212" class="DefaultCheckbox" value="212" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-212">
                                                                        Morris Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-237" class="DefaultCheckbox" value="237" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-237">
                                                                        Morris Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-207" class="DefaultCheckbox" value="207" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-207">
                                                                        Morrisania
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-208" class="DefaultCheckbox" value="208" data-parent-id="207" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-208">
                                                                        Claremont
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-201" class="DefaultCheckbox" value="201" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-201">
                                                                        Mott Haven
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-271" class="DefaultCheckbox" value="271" data-parent-id="201" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-271">
                                                                        North New York
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-260" class="DefaultCheckbox" value="260" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-260">
                                                                        Norwood
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-231" class="DefaultCheckbox" value="231" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-231">
                                                                        Parkchester
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-233" class="DefaultCheckbox" value="233" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-233">
                                                                        Pelham Bay
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-266" class="DefaultCheckbox" value="266" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-266">
                                                                        Pelham Gardens
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-238" class="DefaultCheckbox" value="238" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-238">
                                                                        Pelham Parkway
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-203" class="DefaultCheckbox" value="203" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-203">
                                                                        Port Morris
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-225" class="DefaultCheckbox" value="225" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-225">
                                                                        Riverdale
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-227" class="DefaultCheckbox" value="227" data-parent-id="225" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-227">
                                                                        Fieldston
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-249" class="DefaultCheckbox" value="249" data-parent-id="225" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-249">
                                                                        Spuyten Duyvil
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-274" class="DefaultCheckbox" value="274" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-274">
                                                                        Schuylerville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-228" class="DefaultCheckbox" value="228" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-228">
                                                                        Soundview
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-232" class="DefaultCheckbox" value="232" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-232">
                                                                        Throgs Neck
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-267" class="DefaultCheckbox" value="267" data-parent-id="232" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-267">
                                                                        Locust Point
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-248" class="DefaultCheckbox" value="248" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-248">
                                                                        Tremont
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-215" class="DefaultCheckbox" value="215" data-parent-id="248" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-215">
                                                                        Mt. Hope
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-213" class="DefaultCheckbox" value="213" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-213">
                                                                        University Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-240" class="DefaultCheckbox" value="240" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-240">
                                                                        Van Nest
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-245" class="DefaultCheckbox" value="245" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-245">
                                                                        Wakefield
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-272" class="DefaultCheckbox" value="272" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-272">
                                                                        Westchester Village
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-235" class="DefaultCheckbox" value="235" data-parent-id="272" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-235">
                                                                        Westchester Square
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-242" class="DefaultCheckbox" value="242" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-242">
                                                                        Williamsbridge
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-244" class="DefaultCheckbox" value="244" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-244">
                                                                        Woodlawn
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-270" class="DefaultCheckbox" value="270" data-parent-id="200" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-270">
                                                                        Woodstock
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--1 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-500" class="DefaultCheckbox" value="500" data-parent-id="1" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-500">
                                                                        Staten Island
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-503" class="DefaultCheckbox" value="503" data-parent-id="500" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-503">
                                                                        East Shore
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-510" class="DefaultCheckbox" value="510" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-510">
                                                                        Arrochar
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-511" class="DefaultCheckbox" value="511" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-511">
                                                                        Bay Terrace
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-522" class="DefaultCheckbox" value="522" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-522">
                                                                        Dongan Hills
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-523" class="DefaultCheckbox" value="523" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-523">
                                                                        Egbertville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-526" class="DefaultCheckbox" value="526" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-526">
                                                                        Emerson Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-527" class="DefaultCheckbox" value="527" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-527">
                                                                        Fort Wadsworth
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-529" class="DefaultCheckbox" value="529" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-529">
                                                                        Grant City
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-530" class="DefaultCheckbox" value="530" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-530">
                                                                        Grasmere
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-540" class="DefaultCheckbox" value="540" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-540">
                                                                        Lighthouse Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-546" class="DefaultCheckbox" value="546" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-546">
                                                                        Midland Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-548" class="DefaultCheckbox" value="548" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-548">
                                                                        New Dorp
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-591" class="DefaultCheckbox" value="591" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-591">
                                                                        New Dorp Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-550" class="DefaultCheckbox" value="550" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-550">
                                                                        Oakwood
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-592" class="DefaultCheckbox" value="592" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-592">
                                                                        Oakwood Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-551" class="DefaultCheckbox" value="551" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-551">
                                                                        Ocean Breeze
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-561" class="DefaultCheckbox" value="561" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-561">
                                                                        Richmondtown
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-568" class="DefaultCheckbox" value="568" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-568">
                                                                        South Beach
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-575" class="DefaultCheckbox" value="575" data-parent-id="503" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-575">
                                                                        Todt Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-505" class="DefaultCheckbox" value="505" data-parent-id="500" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-505">
                                                                        Mid-Island
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-514" class="DefaultCheckbox" value="514" data-parent-id="505" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-514">
                                                                        Bulls Head
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-516" class="DefaultCheckbox" value="516" data-parent-id="505" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-516">
                                                                        Castleton Corners
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-528" class="DefaultCheckbox" value="528" data-parent-id="505" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-528">
                                                                        Graniteville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-543" class="DefaultCheckbox" value="543" data-parent-id="505" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-543">
                                                                        Manor Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-545" class="DefaultCheckbox" value="545" data-parent-id="505" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-545">
                                                                        Meiers Corners
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-549" class="DefaultCheckbox" value="549" data-parent-id="505" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-549">
                                                                        New Springville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-573" class="DefaultCheckbox" value="573" data-parent-id="505" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-573">
                                                                        Sunnyside (Staten Island)
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-582" class="DefaultCheckbox" value="582" data-parent-id="505" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-582">
                                                                        Westerleigh
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-583" class="DefaultCheckbox" value="583" data-parent-id="505" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-583">
                                                                        Willowbrook
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-501" class="DefaultCheckbox" value="501" data-parent-id="500" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-501">
                                                                        North Shore
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-509" class="DefaultCheckbox" value="509" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-509">
                                                                        Arlington
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-519" class="DefaultCheckbox" value="519" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-519">
                                                                        Clifton
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-524" class="DefaultCheckbox" value="524" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-524">
                                                                        Elm Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-533" class="DefaultCheckbox" value="533" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-533">
                                                                        Grymes Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-537" class="DefaultCheckbox" value="537" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-537">
                                                                        Howland Hook
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-544" class="DefaultCheckbox" value="544" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-544">
                                                                        Mariners Harbor
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-547" class="DefaultCheckbox" value="547" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-547">
                                                                        New Brighton
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-553" class="DefaultCheckbox" value="553" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-553">
                                                                        Park Hill
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-556" class="DefaultCheckbox" value="556" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-556">
                                                                        Port Richmond
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-562" class="DefaultCheckbox" value="562" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-562">
                                                                        Rosebank
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-569" class="DefaultCheckbox" value="569" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-569">
                                                                        Saint George
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-565" class="DefaultCheckbox" value="565" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-565">
                                                                        Shore Acres
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-566" class="DefaultCheckbox" value="566" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-566">
                                                                        Silver Lake
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-571" class="DefaultCheckbox" value="571" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-571">
                                                                        Stapleton
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-576" class="DefaultCheckbox" value="576" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-576">
                                                                        Tompkinsville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-580" class="DefaultCheckbox" value="580" data-parent-id="501" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-580">
                                                                        West Brighton
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-502" class="DefaultCheckbox" value="502" data-parent-id="500" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-502">
                                                                        South Shore
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-507" class="DefaultCheckbox" value="507" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-507">
                                                                        Annadale
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-508" class="DefaultCheckbox" value="508" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-508">
                                                                        Arden Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-517" class="DefaultCheckbox" value="517" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-517">
                                                                        Charleston
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-525" class="DefaultCheckbox" value="525" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-525">
                                                                        Eltingville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-531" class="DefaultCheckbox" value="531" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-531">
                                                                        Great Kills
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-532" class="DefaultCheckbox" value="532" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-532">
                                                                        Greenridge
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-538" class="DefaultCheckbox" value="538" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-538">
                                                                        Huguenot
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-554" class="DefaultCheckbox" value="554" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-554">
                                                                        Pleasant Plains
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-557" class="DefaultCheckbox" value="557" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-557">
                                                                        Princes Bay
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-560" class="DefaultCheckbox" value="560" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-560">
                                                                        Richmond Valley
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-563" class="DefaultCheckbox" value="563" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-563">
                                                                        Rossville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-577" class="DefaultCheckbox" value="577" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-577">
                                                                        Tottenville
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-584" class="DefaultCheckbox" value="584" data-parent-id="502" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-584">
                                                                        Woodrow
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-504" class="DefaultCheckbox" value="504" data-parent-id="500" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-504">
                                                                        West Shore
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-512" class="DefaultCheckbox" value="512" data-parent-id="504" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-512">
                                                                        Bloomfield
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-518" class="DefaultCheckbox" value="518" data-parent-id="504" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-518">
                                                                        Chelsea (Staten Island)
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-578" class="DefaultCheckbox" value="578" data-parent-id="504" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-578">
                                                                        Travis
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--1 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1000000" class="DefaultCheckbox" value="1000000" data-parent-id="1" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1000000">
                                                                        New Jersey
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1003000" class="DefaultCheckbox" value="1003000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1003000">
                                                                        Bayonne
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-856000" class="DefaultCheckbox" value="856000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-856000">
                                                                        Cliffside Park
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1005000" class="DefaultCheckbox" value="1005000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1005000">
                                                                        East Newark
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-862000" class="DefaultCheckbox" value="862000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-862000">
                                                                        Edgewater
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-869000" class="DefaultCheckbox" value="869000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-869000">
                                                                        Fort Lee
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1009000" class="DefaultCheckbox" value="1009000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1009000">
                                                                        Guttenberg
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1010000" class="DefaultCheckbox" value="1010000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1010000">
                                                                        Harrison
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1004000" class="DefaultCheckbox" value="1004000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1004000">
                                                                        Hoboken
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1001000" class="DefaultCheckbox" value="1001000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1001000">
                                                                        Jersey City
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1117008" class="DefaultCheckbox" value="1117008" data-parent-id="1001000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1117008">
                                                                        Bergen/Lafayette
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1001150" class="DefaultCheckbox" value="1001150" data-parent-id="1001000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1001150">
                                                                        Historic Downtown
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1001600" class="DefaultCheckbox" value="1001600" data-parent-id="1001000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1001600">
                                                                        Journal Square
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1117007" class="DefaultCheckbox" value="1117007" data-parent-id="1001000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1117007">
                                                                        Newport
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1001400" class="DefaultCheckbox" value="1001400" data-parent-id="1001000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1001400">
                                                                        The Heights
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1001250" class="DefaultCheckbox" value="1001250" data-parent-id="1001000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1001250">
                                                                        Waterfront
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--4 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1001270" class="DefaultCheckbox" value="1001270" data-parent-id="1001250" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1001270">
                                                                        Paulus Hook
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--3 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1002100" class="DefaultCheckbox" value="1002100" data-parent-id="1001000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1002100">
                                                                        West Side
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1011000" class="DefaultCheckbox" value="1011000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1011000">
                                                                        Kearny
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1007000" class="DefaultCheckbox" value="1007000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1007000">
                                                                        North Bergen
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1012000" class="DefaultCheckbox" value="1012000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1012000">
                                                                        Secaucus
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1006000" class="DefaultCheckbox" value="1006000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1006000">
                                                                        Union City
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1008000" class="DefaultCheckbox" value="1008000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1008000">
                                                                        Weehawken
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-item AreaSelect-item--2 item" data-area="item">
                                                                    <input type="checkbox" name="area[]" id="area-1013000" class="DefaultCheckbox" value="1013000" data-parent-id="1000000" data-always-checked-with="" data-non-sale-checked-with="" tabindex="-1">

                                                                    <label class="AreaSelect-itemLabel area-label" data-area="label" for="area-1013000">
                                                                        West New York
                                                                    </label>
                                                                </li>
                                                                <li class="AreaSelect-keywordSearch keyword-search" data-area="keywordSearch"></li>
                                                            </ul>

                                                            <div class="AreaSelect-linkBlock area_selector_link_more hidden-xs hidden-sm" id="area_select_more">
                                                                <a rel="nofollow" data-modal-class="modal-location" data-modal-live="true" data-analytics-type="click" data-analytics-name="clickOnAreaMapSelector" tabindex="-1" class="u-noOutline" data-toggle="modal" data-modal-source="/area/-/area_map_selector_dialog" href="#">or show all neighborhoods</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <input id="area-selector-perf-mark-prefix" type="hidden" value="search.Rentals.">
                                                </div>
                                            </div>
                                            <div class="SearchCriteria-noFee">
                                                <div class="NoFeeCriteria">
                                                    <input type="checkbox" name="no_fee" id="no_fee" value="1" class="SearchCriteria-inputCheckbox NoFeeCriteria-inputCheckbox DefaultCheckbox">
                                                    <label class="NoFeeCriteria-label" for="no_fee">No Fee Only</label>
                                                </div>
                                            </div>
                                        </div><div class="SearchCriteria-row price_status">
                                            <div id="price" class="SearchCriteria-price  rental">
                                                <div class="PriceCriteria">
                                                    <label class="SearchCriteria-label" for="price_from">
                                                        Price
                                                    </label>

                                                    <div id="monthly_price" class="PriceCriteria-selectors" style="">
      <span id="price_from_container" class="PriceCriteria-selector ">
        <select id="price_from" class="SearchCriteria-select DefaultField" name="price_from" se:behavior="support_custom_value trigger_change_on_page_load">
          <option value="">Any</option>
<option value="Custom">» Custom</option>
<option value="500">$500</option>
<option value="750">$750</option>
<option value="1000">$1,000</option>
<option value="1250">$1,250</option>
<option value="1500">$1,500</option>
<option value="1750">$1,750</option>
<option value="2000">$2,000</option>
<option value="2500">$2,500</option>
<option value="3000">$3,000</option>
<option value="3500">$3,500</option>
<option value="4000">$4,000</option>
<option value="4500">$4,500</option>
<option value="5000">$5,000</option>
<option value="6000">$6,000</option>
<option value="7000">$7,000</option>
<option value="8000">$8,000</option>
<option value="9000">$9,000</option>
<option value="10000">$10,000</option>
<option value="12500">$12,500</option>
<option value="15000">$15,000</option>
        </select>

        <span id="price_from_custom_container" class="PriceCriteria-inputText" style="display: none;">
          <input type="text" class="SearchCriteria-input" id="price_from" name="price_from_ignore" value="$0" se:behavior="comma_separatable">
        </span>
      </span>

                                                        <span id="price_to_text" class="PriceCriteria-text">to</span>

                                                        <span id="price_to_container" class="PriceCriteria-selector ">
        <select class="SearchCriteria-select DefaultField" id="price_to" name="price_to" se:behavior="support_custom_value trigger_change_on_page_load">
          <option value="">Any</option>
<option value="Custom">» Custom</option>
<option value="500">$500</option>
<option value="750">$750</option>
<option value="1000">$1,000</option>
<option value="1250">$1,250</option>
<option value="1500">$1,500</option>
<option value="1750">$1,750</option>
<option value="2000">$2,000</option>
<option value="2500">$2,500</option>
<option value="3000">$3,000</option>
<option value="3500">$3,500</option>
<option value="4000">$4,000</option>
<option value="4500">$4,500</option>
<option value="5000">$5,000</option>
<option value="6000">$6,000</option>
<option value="7000">$7,000</option>
<option value="8000">$8,000</option>
<option value="9000">$9,000</option>
<option value="10000">$10,000</option>
<option value="12500">$12,500</option>
<option value="15000">$15,000</option>
        </select>

        <span id="price_to_custom_container" class="PriceCriteria-inputText" style="display: none">
          <input class="SearchCriteria-input" type="text" id="price_to" name="price_to_ignore" value="$0" se:behavior="comma_separatable">
        </span>
      </span>

                                                    </div>
                                                </div>
                                            </div>

                                            <div id="beds" class="SearchCriteria-beds">
                                                <div class="BedsCriteria">
                                                    <label class="SearchCriteria-label" for="beds">Bedrooms</label>

                                                    <select class="SearchCriteria-select DefaultField" name="beds" id="beds">
                                                        <option value="">Any Beds</option>
                                                        <option value="<1">Studio only</option>
                                                        <option value="<=1">Studio / 1 br</option>
                                                        <option value="1">1 bedroom</option>
                                                        <option value="2">2 bedrooms</option>
                                                        <option value="3">3 bedrooms</option>
                                                        <option value="4">4 bedrooms</option>
                                                    </select>

                                                    <div class="BedsCriteria-selector" id="beds_op_container">
                                                        <input class="SearchCriteria-checkbox BedsCriteria-checkbox DefaultCheckbox" type="checkbox" name="beds_op" value=">=" se:behavior="field_hideable" se:hide_on_values=",<1, <=1" se:toggle_controller_selector="form#form select[name='beds']" se:element_to_toggle_selector="#beds_op_container" id="beds_or_more_checkbox">
                                                        <label class="BedsCriteria-label" for="beds_or_more_checkbox">
                                                            or more
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="baths" class="SearchCriteria-baths above_fold">
                                                <div class="BathsCriteria">
                                                    <label class="SearchCriteria-label" for="baths">
                                                        Bathrooms
                                                    </label>

                                                    <select class="SearchCriteria-select DefaultField" name="baths" id="baths">
                                                        <option value="">Any Baths</option>
                                                        <option value=">=1">1 or more</option>
                                                        <option value=">=1.5">1.5 or more</option>
                                                        <option value=">=2">2 or more</option>
                                                        <option value=">=2.5">2.5 or more</option>
                                                        <option value=">=3">3 or more</option>
                                                        <option value=">=3.5">3.5 or more</option>
                                                        <option value=">=4">4 or more</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div><div class="SearchCriteria-row virtual_tour_options"><div class="SearchCriteria-virtualViewing">
                                                <div class="VirtualViewingCriteria">
                                                    <label class="SearchCriteria-label VirtualViewingCriteria-topLabel">Virtual Viewing</label>
                                                    <div class="VirtualViewingCriteria-options">
                                                        <div class="VirtualViewingCriteria-option">
                                                            <label for="has_videos" class="VirtualViewingCriteria-label">
                                                                <input type="checkbox" name="has_videos" id="has_videos" value="1" class="SearchCriteria-inputCheckbox VirtualViewingCriteria-inputCheckbox DefaultCheckbox">
                                                                Video
                                                            </label>
                                                        </div>
                                                        <div class="VirtualViewingCriteria-option">
                                                            <label for="has_3d_tour" class="VirtualViewingCriteria-label">
                                                                <input type="checkbox" name="has_3d_tour" id="has_3d_tour" value="1" class="SearchCriteria-inputCheckbox VirtualViewingCriteria-inputCheckbox DefaultCheckbox">
                                                                3D tour
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="SearchCriteria-row">
                                            <div class="SearchCriteria-buttons">
        <span class="SearchCriteria-searchButton">
          <input type="submit" name="do_search" id="performSearch" class="button" value="Search">
        </span>

                                                <div class="SearchCriteria-optionsToggleButton">
                                                    <div class="SearchCriteria-optionsButton below_fold_toggle below_fold_toggle_rental hidden" se:behavior="togglable coordinated " se:coordinator="criteria_expander" se:togglable:cssselector=".below_fold_toggle_rental" se:analytics:params="{&quot;event_category&quot;:&quot;search&quot;,&quot;event_action&quot;:&quot;click&quot;,&quot;event_label&quot;:&quot;basic_options&quot;}">
                                                        <i class="fa fa-minus se-Icon"></i>Basic Options
                                                    </div>

                                                    <div class="SearchCriteria-optionsButton below_fold_toggle below_fold_toggle_rental" se:behavior="togglable coordinated " se:coordinator="criteria_expander" se:togglable:cssselector=".below_fold_toggle_rental" se:analytics:params="{&quot;event_category&quot;:&quot;search&quot;,&quot;event_action&quot;:&quot;click&quot;,&quot;event_label&quot;:&quot;advanced_options&quot;}">
                                                        <i class="fa fa-plus se-Icon"></i>Advanced Options
                                                    </div>
                                                </div>
                                            </div>



                                            <button type="submit" name="do_search" id="performSearch" class="button hidden-sm hidden-md">
                                                Search
                                            </button>
                                        </div>

                                        <div class="SearchCriteria-row SearchCriteria-saveSearchUpsell save_search_upsell">
                                            <p class="SearchCriteria-saveSearchUpsellText">Get instant updates on new listings:

                                                <a rel="nofollow" data-gtm-rendered-from="add_entry_link_anon_and_lists" data-gtm-item-type="Search" data-gtm-item-id="2302" data-gtm-page-category="" data-gtm-page-type="search" data-gtm-track-save-item-type="false" class="saveItemAfterAuthentication" data-item-id="2302" data-item-type="Search" onclick="window.gon.state.analyticsData = {'source':'save', 'itemId': '2302', 'itemType': 'Search'};" href="#">save this search</a>



                                            </p>
                                        </div>

                                        <div class="below_fold_toggle below_fold_toggle_rental hidden" se:behavior="loadable andale_coordinatable coordinated" se:coordinator="criteria_expander" se:url="/nyc/process/rentals/search_fields?context=rental&amp;criteria=area%3A100&amp;criteria_group=below_fold&amp;location=standard">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="modal-search-alert" data-modal-name="anonymousModal">
                    <a data-dismiss="modal" class="button button-close" href="#"></a>
                    <div class="search-alert-content" data-animated-modal="anonymousModal">
                        <div class="search-alert-content-device">
                            <img srcset="" src="img/apartment.png">
                            <img srcset="" class="search-alert-content-deviceImage search-alert-content-deviceImage--submitted" src="img/apartment.png">
                        </div>
                        <div class="search-alert-content-title">
                            <div class="search-alert-content-titleText"><span class="search-alert-content-titleTextRow">Create an alert for</span> this
                                search
                            </div>
                            <div class="search-alert-content-titleText search-alert-content-titleText--submitted">You're all set</div>
                        </div>
                        <div class="search-alert-content-description">
                            <div class="search-alert-content-descriptionText">
                                <span class="search-alert-content-descriptionTextRow">Get email updates on listings that</span> match this criteria
                            </div>
                            <div class="search-alert-content-descriptionText search-alert-content-descriptionText--submitted">
                                <span class="search-alert-content-descriptionTextRow">We'll let you know when something</span> comes up
                            </div>
                        </div>
                        <div id="AnonymousModalForm" data-form-path="/anonymous_captures/new?site=nyc"></div>

                    </div>
                </div>



                <div class="SearchLinks">
                    <div class="SearchLinks-column">
                        <h3 class="SearchLinks-title">Manhattan Rentals</h3>
                        <div class="SearchLinks-info">
                            <div class="SearchLinks-item">
                                <a class="SearchLinks-link" href="#">Studios in Manhattan</a>
                            </div>
                            <div class="SearchLinks-item">
                                <a class="SearchLinks-link" href="#">1 Bedrooms in Manhattan</a>
                            </div>
                            <div class="SearchLinks-item">
                                <a class="SearchLinks-link" href="#">2 Bedrooms in Manhattan</a>
                            </div>
                            <div class="SearchLinks-item">
                                <a class="SearchLinks-link" href="#">3 Bedrooms in Manhattan</a>
                            </div>
                        </div>
                    </div>

                    <div class="SearchLinks-column">
                        <div class="SearchLinks-title">Nearby Manhattan</div>
                        <div class="SearchLinks-info">
                            <div class="SearchLinks-item">
                                <a class="SearchLinks-link" href="#">Roosevelt Island Apartments for rent</a>
                            </div>
                            <div class="SearchLinks-item">
                                <a class="SearchLinks-link" href="#">Downtown Apartments for rent</a>
                            </div>
                            <div class="SearchLinks-item">
                                <a class="SearchLinks-link" href="#">Civic Center Apartments for rent</a>
                            </div>
                            <div class="SearchLinks-item">
                                <a class="SearchLinks-link" href="#">Financial District Apartments for rent</a>
                            </div>
                        </div>
                    </div>

                    <div class="SearchLinks-column">
                        <div class="SearchLinks-title">More</div>
                        <div class="SearchLinks-info">
                            <div class="SearchLinks-item">
                                <a class="SearchLinks-link" href="#">No-fee rentals</a>
                            </div>
                            <div class="SearchLinks-item">
                                <a class="SearchLinks-link" href="#">Pet friendly for rent</a>
                            </div>
                        </div>
                    </div>
                </div>



            </main>
        </div>

        <div style="line-height: 1px; height: 1px; overflow: hidden; position: absolute;">
            <noscript>
                <img src="img/apartment.png" alt="" />
            </noscript>
        </div>


        <div class="closer"></div>

    </div>




@endsection

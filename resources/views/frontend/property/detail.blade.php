@extends('layouts.app')
@section('content')
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/list.css')}}">
@section('header')
    @include('layouts.header')
@endsection
    <script type="text/javascript" src="{{asset('assets/masterFrontend/js/html5gallery.js')}}"></script>
    <!-- Impressions Tracking Config -->
    <script
        src="https://www.datadoghq-browser-agent.com/datadog-rum-us.js"
        type="text/javascript">
    </script>


<div id="site-content" class="SiteBlock-content ">
    <div id="content" >
        <main class="Container">
            <div id='header_print_info' class='only-print'>
                Printed from CoZmo-web.com at 03:09 AM, Apr 29 2020
            </div>
            <div id="listingCorrection" class="modal fade in">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header modal-header-navbar">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <ul class="nav navbar-nav navbar-left">
                                        <li>
                                            <a href="#" class="u-noBorder MenuMobileButton u-noMargin isActive" data-dismiss="modal" aria-hidden="true">
                                                <span class="MenuMobileButton-icon"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="navbar-title">Report a problem</div>
                                </div>
                            </nav>
                        </div>
                        <div class="modal-body">
                            <p class="center_aligned">
                                <a rel="nofollow noopener noreferrer" href="#">This listing is no longer available on CoZmo-web</a>
                            </p>
                            <p class="center_aligned">
                                <a rel="nofollow noopener noreferrer" href="#">This is a fraudulent listing</a>
                            </p>
                            <p class="center_aligned">
                                <a rel="nofollow noopener noreferrer" href="#">This listing has incorrect information/photos</a>
                            </p>
                            <p class="center_aligned">
                                <a rel="nofollow noopener noreferrer" href="#">This is a discriminatory or offensive listing</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <div id="addnoteModal" class="modal modal-search fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header modal-header-navbar" style="padding:0px;">
                            <nav class="navbar navbar-default">

                                <div class="container-fluid">
                                    <ul class="nav navbar-nav navbar-left" id="closing-id">
                                        <li>
                                            <a class="u-noBorder MenuMobileButton u-noMargin isActive" href="#" data-dismiss="modal" aria-hidden="true">
                                                <span class="MenuMobileButton-icon"></span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="navbar-title">Note</div>
                                </div>
                            </nav>
                        </div>

                        <div class="modal-body">
                            <form action="/nyc/lists/list_items/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="WL0TqPCRkZdqeepr/sxNggia8rc/EyIgiGfF0MXilxUhqqhT55IqZ8DNZRmKPjppgrrhFacVOMYxC6NOx/L1gQ==" />          <div class="form-group">
            <textarea name="note" id="note" class="DefaultField field-block" style="height: 100px; font-size: 14px;">
</textarea>
                                    <input type="hidden" name="id" id="id" value="" />
                                    <button name="commit" type="submit" value="Save" class="button" style="margin-top: 25px;" se:behavior="dialog_submitter">Save</button>
                                </div>
                            </form>      </div>
                    </div>
                </div>
            </div>

            <div id="editnoteModal" class="modal modal-search fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header modal-header-navbar" style="padding:0px;">
                            <nav class="navbar navbar-default">
                                <div class="container-fluid">
                                    <ul class="nav navbar-nav navbar-left" id="closing-id">
                                        <li><a href="javascript:void(0)" data-dismiss="modal" aria-hidden="true">Close</a></li>
                                    </ul>
                                    <div class="navbar-title">Note</div>
                                </div>
                            </nav>
                        </div>
                        <div class="modal-body">
                            <form action="/nyc/lists/list_items/update" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="pAzmKnzGkF+Di2Y4sYzv+2jOSVNFBREInFLoy2vadfXdG13Ra8Urryk/6UrFfpgQ4u5a8d0DC+4lPo5VacoXYQ==" />          <div class="form-group">
            <textarea name="note" id="note" class="DefaultField field-block" style="height: 100px; font-size: 14px;">
</textarea>
                                    <input type="hidden" name="id" id="id" />
                                    <button name="commit" type="submit" value="Save" class="button" style="margin-top: 25px; margin-right: 20px;" se:behavior="dialog_submitter">Save</button>
                                    <button name="delete_note" type="submit" value="Delete Note" class="delete-note-link" se:behavior="dialog_submitter">Delete Note</button>
                                </div>
                            </form>      </div>
                    </div>
                </div>
            </div>






            <div class="row DetailsPage">

                <div class="u-ellipsis Breadcrumb Breadcrumb--detailsPage ">
    <span>
        <a class="Breadcrumb-item" itemprop="item" href="#">
          <span itemprop="name">{{$data->property_for}}</span>
        </a>
        <i class="Breadcrumb-separator fa fa-angle-right"></i>
      <meta itemprop="position" content="1" />
    </span>
                    <span>
        <a class="Breadcrumb-item" itemprop="item" href="#">
          <span itemprop="name">{{$address->country}}</span>
        </a>
        <i class="Breadcrumb-separator fa fa-angle-right"></i>
      <meta itemprop="position" content="2" />
    </span>
                    <span>
        <a class="Breadcrumb-item" itemprop="item" href="#">
          <span itemprop="name">{{$address->state}}</span>
        </a>
        <i class="Breadcrumb-separator fa fa-angle-right"></i>
      <meta itemprop="position" content="3" />
    </span>
                    <span>
        <a class="Breadcrumb-item" itemprop="item" href="#">
          <span itemprop="name">{{$address->city}}</span>
        </a>
        <i class="Breadcrumb-separator fa fa-angle-right"></i>
      <meta itemprop="position" content="4" />
    </span>
                    <span>
        <span class="Breadcrumb-item Breadcrumb-item--current" itemprop="name">{{$address->name_of_street}}</span>
      <meta itemprop="position" content="5" />
    </span>
                </div>


                    {{--image gallery --}}
                <article class="left-three-fifths hdp_gallery_2018_box">
                    <div style="text-align:center;">
                        <div style="" class="html5gallery" data-skin="darkness" data-width="480" data-height="272" data-resizemode="fill" >
                            <img src="{{asset('/images/cozmo/'.$data->main_image)}}" alt="Tulips">
                            <img src="{{asset('/images/cozmo/'.$data->video)}}" alt="Tulips">

                            <!-- Add Youtube video to Gallery -->
                            <video width="320" height="240" controls>
                                <source src="{{asset('/images/cozmo/'.$data->video)}}" type="video/mp4">
                                <source src="{{asset('/images/cozmo/'.$data->video)}}" type="video/ogg">
                            </video>
                        </div>

                    </div>

                </article>


                <article class="right-two-fifths">
                    <section class="main-info">
                        <h1 class="building-title">
                            <a class="incognito" href="#">{{$data->title}}</a>
                        </h1>

                        <div class="details">
                            <div class="details_info_price">
                                <div class="price ">
                                    ${{$data->price}}
                                    <span class="secondary_text">for {{$data->property_for}}</span>

                                </div>


                                <div class="status nofee">
                                    <a class="u-text--bold u-color-pureBlack--important" href="#">NO FEE</a>
                                </div>
                            </div>


                            <div class="details_info"><span class='detail_cell first_detail_cell'>{{$data->square_feet}} ft&sup2;</span><span class='detail_cell '>${{$data->price_per_square_feet}} per ft&sup2;</span><span class='detail_cell '>{{$data->no_of_bedroom}} rooms</span><span class='detail_cell '>{{$data->no_of_bedroom}} beds</span><span class='detail_cell last_detail_cell'>{{$data->no_of_bathrooms}} baths</span></div>

                            <div class="details_info">
                                <span class='nobreak'></span><a href="#">Three-Family Home</a>
                                <span class="nobreak">in <a href="#">{{$address->city}}</a></span>
                            </div>

                            <div style="color: red; font-size: 12px;">

                            </div>


                            <div class="details-agent MobileContactAgent MobileContactAgent--ctaButton jsMessageAgentButton jsContactButton isRental" data-contact-button="true">
                                <a class="button-blue button button-large button-block MobileContactAgent-button" data-modal-class="jsContactModal" onclick="SE.analytics.hdpRentalOpenContactFormMobile(&#39;inline&#39;)" data-toggle="modal" data-modal-source="/nyc/messages/new?contact_id=286000&is_modal=true&owner_id=2862083&owner_type=Rental&remote_form=true" href="#">contact owner</a>

                            </div>

                            <div class="StickyBottomContainer StickyBottomContainer--contactOwner jsStickyBlock">
                                <div class="StickyBottomContainer-actions">
                                    <a class="button-blue button button-large button-block MobileContactAgent-button" data-modal-class="jsContactModal" data-toggle="modal" data-modal-source="/nyc/messages/new?contact_id=286000&is_modal=true&owner_id=2862083&owner_type=Rental&remote_form=true" href="#">contact owner</a>
                                </div>
                                <div class="StickyBottomContainer-info">
        <span class="Text Text--sm u-colorGreySemi">
                  {{$data->title}}
        </span>
                                    <span class="StickyBottomContainer-dot"></span>
                                    <span class="Text Text--sm u-colorGreySemi">
          <b>${{$data->price}}</b>
        </span>
                                </div>
                            </div>



                        </div>

                    </section>

                    <section class="actions">

                        <div class="hide-print">

                            <div class="actions-buttons u-flexbox jsShowButtons">
                                <div class="Popover Popover--saveListing jsSaveListingsPopover">
                                    <div class="Popover-content">
                                        <div class="u-text--bold">Want to stay updated?</div>
                                        Save this apartment for email and push
                                        notifications on price updates and more
                                    </div>
                                </div>




                                <a class="RealtyActions RealtyActions--small jsSaveButton listing-button jsSaveButton saveItemAfterAuthentication hdpSavePopover" rel="nofollow" id="add_folder_entry_Rental_2862083_link" data-gtm-rendered-from="add_entry_link_anon_and_lists" data-gtm-item-type="Rental" data-gtm-item-id="2862083" data-gtm-page-category="" data-gtm-page-type="show" data-gtm-track-save-item-type="false" data-item-id="2862083" data-item-type="Rental" href="#"><i class='fa fa-star-o jsIconStar' data-gtm-item-type=Rental data-gtm-item-id=2862083 data-gtm-track-save-item-type=false data-item-id='2862083' data-item-type='Rental'></i> SAVE</a>

                                <span class="RealtyActions RealtyActions--small">

<div class="Popover Popover--shareListing jsShareItem" data-popover="true">
  <a class="RealtyActions-item Popover-button jsTriggerShareItemForm jsDissmissAwarenessTooltip jsTriggerShareItemForm-Rental-2862083" href="#"><i class='fa fa-envelope-o'></i> SHARE</a>
  <div class="Popover-content">
    <span class="RealtyActions-sharePopoverTitle">
      New
    </span>
    <p class="RealtyActions-sharePopoverText">Show your contact info to clients when they open this listing.</p>
  </div>
</div>


        </span>

                            </div>

                            <div class="annotation">
                                <div class="popularity">
                                    This rental has been saved by 100 users.
                                </div>
                            </div>


                            See a problem with this listing? Report it
                            <a rel="nofollow" data-toggle="modal" data-target="#listingCorrection" href="#">here</a>.
                        </div>


                    </section>


                    <section>

                        <div class="padded_solid_black_border items item-rows top_spacer bottom_spacer hidden-xs hidden-sm contact-form-inline">
                            <div>  <div id="contact-owner-box" class="jsContactOwnerBox" se:behavior="loadable trigger_on_page_load" se:load_text="Loading contact form..." se:url="/nyc/messages/new?contact_id=286000&amp;owner_id=2862083&amp;owner_type=Rental&amp;remote_form=true" rel="nofollow" se:loaded="true"><div class="modal-header modal-header-navbar visible-xs visible-sm">
                                        <nav class="navbar navbar-default">
                                            <div class="container-fluid">
                                                <ul class="nav navbar-nav navbar-left">
                                                    <li>
                                                        <a href="#" class="u-noBorder MenuMobileButton u-noMargin isActive" data-dismiss="modal" aria-hidden="true">
                                                            <span class="MenuMobileButton-icon"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="navbar-title">Contact</div>
                                            </div><!-- /.container-fluid -->
                                        </nav>
                                    </div>
                                    <div class="modal-body">
                                        <form id="deliver_message_form" class="large jsDeliverNewDialogMessageForm contact-owner-form" se:behavior="form_validatable" action="/nyc/messages/deliver?origin=contact_agent&amp;page_category=rentals&amp;page_type=show" accept-charset="UTF-8" data-remote="true" method="post" novalidate="novalidate"><input name="utf8" type="hidden" value="✓">

                                            <h4 class="contact-box-title">Contact owner</h4>

                                            <div id="agent-promo" class="visible-xs visible-sm">
                                                <div class="contact_info">
                                                    <div class="subtitle">
                                                        <h2>

                                                        </h2>
                                                        <span>Owner</span>

                                                        <div class="ShowPhone" data-show-phone="true">
                                                            <div class="ShowPhone-text" data-show-phone="text" data-analytics-type="click" data-analytics-name="userClicksToShowPhone" data-analytics-params="rentals_show">
                                                                Show phone number
                                                            </div>
                                                            <div class="ShowPhone-number" data-show-phone="number">(267) 338-5116</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="recipient_id" id="recipient_id" value="all">
                                                <input type="hidden" name="recipient_type" id="recipient_type" value="Contact">
                                            </div>





                                            <input type="hidden" name="recipient_type" id="recipient_type" value="Contact">
                                            <input type="hidden" name="recipient_id" id="recipient_id" value="286000">

                                            <input type="hidden" name="message[owner_type]" id="message_owner_type" value="Rental">
                                            <input type="hidden" name="message[owner_id]" id="message_owner_id" value="2862083">
                                            <input type="hidden" name="message[origin_label]" id="message_origin_label" value="hdp_active">
                                            <div class="form-group">
                                                <div class="center-block">
                                                    <input type="text" name="message[email]" id="message_email" size="42" placeholder="Your email" class="DefaultField field-block">
                                                </div>
                                                <div se:behavior="form_tip" se:form_tip:id="message_email" class="field_with_errors smaller form_tip"></div>
                                            </div>

                                            <input type="hidden" name="message[subject]" id="message_subject" value="About your listing '1358 Herkimer Street' " size="42" placeholder="Enter a subject" class="field-block">

                                            <div class="form-group">
                                                <textarea name="message[body]" id="message_body" class="DefaultField field-block" placeholder="Message (optional)" style="height: 70px; font-size: 14px;" cols="60" rows="6"></textarea>
                                            </div>




                                            <div class="actions">
                                                <button name="commit" type="button" value="Send Message" class="button visible-xs visible-sm">Send Message</button>

                                                <button name="commit" type="button" value="Send Message" class="button button-contact-owner">Send Message</button>
                                            </div>

                                            <input type="hidden" name="contact_from" id="contact_from" value="rental_hdp_frbo">

                                            <div class="u-text u-text--alignCenter u-padding-top-10">
                                                <div class="ShowPhone" data-show-phone="true">
                                                    <div class="ShowPhone-text" data-show-phone="text" data-analytics-type="click" data-analytics-name="userClicksToShowPhone" data-analytics-params="rentals_show">
                                                        Show phone number
                                                    </div>
                                                    <div class="ShowPhone-number" data-show-phone="number">
                                                        Or call (267) 338-5116
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="TermsInfo u-padding-top-10">
                                                <span class="Text Text--disclaimer">I accept CoZmo</span>
                                                <a class="TermsInfo-link" rel="noopener noreferrer" href="#">Terms of Use</a>
                                            </div>

                                        </form></div>

                                    <!-- <script type="text/javascript">
                                      (function($) {
                                        $('body').on('click', '#deliver_message_form .contact_info input[type=checkbox]', function() {
                                          var arr = [],
                                              checkboxes = $('.contact_info').find('input:checkbox:checked');

                                          if (checkboxes.length > 0) {
                                            checkboxes.each(function(){
                                              this.checked && arr.push(this.id)
                                            });
                                            $('#recipient_id').val(arr);
                                          } else {
                                            return false
                                          }
                                        });

                                        $('.jsDeliverNewDialogMessageForm').on('submit', function() {
                                          SE.analytics.contactSendMessage("rentals", $('body').hasClass('lg-on') ? 'modal_gallery' : 'modal')
                                        });
                                      }(jQuery));
                                    </script> -->
                                </div>
                            </div>


                        </div>

                    </section>

                    <section class="ad-listing-page">
                        <sidebar class="hidden-xs hidden-sm hide-print">
                            <div id="b_right_p1" style="zoom: 1; opacity: 1;" class="">
                                <!--    <script defer type="text/javascript">
                                     googletag.cmd.push(function() {
                                       googletag.display("b_right_p1");
                                     });
                                   </script> -->
                            </div>

                        </sidebar>

                    </section>
                </article>

                <article class="left-three-fifths">
                    <section>
                        <div class="Vitals">
                            <div class="Vitals-detailsInfo">
                                <h6 class="Vitals-title">SALES LAUNCH DATE
                                </h6>
                                <div class="Vitals-data">
                                    {{$data->available_on}}
                                </div>
                            </div>

                            <div class="Vitals-detailsInfo">
                                <h6 class="Vitals-title">LAST PRICE CHANGE
                                </h6>
                                <div class="Vitals-data font-weight-bold">
                                    {{date("Y-m-d ", strtotime($data->date_created))}}

                                </div>
                            </div>

                            <div class="Vitals-detailsInfo ">
                                <h6 class="Vitals-title">ESTIMATED PAYMENT
                                </h6>
                                <div class="Vitals-data u-capitalize" title="">
                                    No Recorded Changes
                                </div>
                            </div>
                        </div>
                        <div class="Vitals">
                            <div class="Vitals-detailsInfo">

                                <h6 class="Vitals-title">MONTHLY COMMON CHARGES</h6>
                                <div class="Vitals-data">
                                    {{$data->available_on}}
                                </div>
                            </div>

                            <div class="Vitals-detailsInfo">
                                <h6 class="Vitals-title">MONTHLY TAXES</h6>
                                <div class="Vitals-data font-weight-bold">
                                    {{date("Y-m-d ", strtotime($data->date_created))}}

                                </div>
                            </div>

                            <div class="Vitals-detailsInfo ">
                                <h6 class="Vitals-title">TAX ABATEMENT
                                </h6>
                                <div class="Vitals-data u-capitalize" title="">
                                    No Recorded Changes
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="DetailsPage-contentBlock">
                        <div class="Description jsDescription">
                            <h2 class="Title Title--primaryMd">Description</h2>
                            <div class="Description-block jsDescriptionExpanded">
                            {{$data->description}}
                            </div>
                        </div>

                    </section>


                    <hr class="Separator">
                    <section class="DetailsPage-contentBlock">
                        <div class="AmenitiesBlock">
                            <div class="AmenitiesBlock-title">
                                <h2 class="Title Title--primaryMd">Amenities</h2>
                            </div>
                            <div class="AmenitiesBlock-verifiedStatus">
                                <span class="Text Text--sm">CoZmo-web Verified</span>
                            </div>

                            <h6 class="Title Title--secondarySmCaps">Highlights</h6>
                            <ul class="AmenitiesBlock-highlights">
                                <li class="AmenitiesBlock-highlightsItem">
                                    <div class="AmenitiesBlock-highlightsIconBox">
                                        <span class="AmenitiesBlock-highlightsIcon AmenitiesBlock-highlightsIcon--pets"></span>
                                    </div>
                                    <div class="AmenitiesBlock-highlightsLabel ">
                                        <div class="Text">
                                            Pets Allowed
                                        </div>
                                    </div>
                                </li>
                                <li class="AmenitiesBlock-highlightsItem">
                                    <div class="AmenitiesBlock-highlightsIconBox">
                                        <span class="AmenitiesBlock-highlightsIcon AmenitiesBlock-highlightsIcon--washer"></span>
                                    </div>
                                    <div class="AmenitiesBlock-highlightsLabel ">
                                        <div class="Text">
                                            Washer/Dryer In-Unit
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h6 class="Title Title--secondarySmCaps">Rental</h6>
                            <ul class="AmenitiesBlock-list ">
                                <li class="AmenitiesBlock-item">
                                    Guarantors Accepted
                                </li>
                                <li class="AmenitiesBlock-item">
                                    <div id="rtt_main_p1" style="zoom: 1; opacity: 1;" class="">
                                        <script defer type="text/javascript">
                                            googletag.cmd.push(function() {
                                                googletag.display("rtt_main_p1");
                                            });
                                        </script>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </section>



                    <hr class="Separator" />
                    <section class="DetailsPage-contentBlock">
                        <div class="BuildingInfo">
                            <h2 class="Title Title--primaryMd">About the Building</h2>
                            <div class="backend_data BuildingInfo-item">
                                <a class="Text" href="#"> 1358 Herkimer Street</a>
                                <span class="Text">
            &nbsp;Brooklyn, NY 11233
          </span>
                            </div>

                            <hr class="Separator">
                            <div class="BuildingInfo-item">
                                <span class="Text">Three-Family Home in Ocean Hill</span>
                            </div>

                            <hr class="Separator">
                            <div class="BuildingInfo-item">
                                <span class='BuildingInfo-detail'><span class='Text'><span class='BuildingInfo-icon BuildingInfo-icon--units'></span>3 Units</span></span><span class='BuildingInfo-detail'><span class='Text'><span class='BuildingInfo-icon BuildingInfo-icon--floors'></span>3 Stories</span></span><span class='BuildingInfo-detail'><span class='Text'><span class='BuildingInfo-icon BuildingInfo-icon--built'></span>1910 Built</span></span>
                            </div>
                            <hr class="Separator">

                            <div class="BuildingInfo-item">

                                <div>
                                    <span class="Text">Rentals listings:</span>
                                    <a class="Text" href="#">1 active and 10 previous</a>
                                </div>

                                <div>
                                    <span class="Text">Documents and Permits:</span>
                                    <a rel="nofollow" class="Text" href="#">6 documents</a>
                                </div>
                            </div>
                            <div class="u-padding-top-10">
                                <a class="Button Button--minWidth Button--hollowClassic" id="more_in_building_button" href="#">more about the building</a>
                            </div>
                        </div>
                    </section>
                    <hr class="Separator">


                    <section class="DetailsPage-contentBlock">

                        <div class="jsPriceHistory">
                            <h2 class="Title Title--primaryMd">Price History</h2>
                            <div class="DetailsPage-priceHistory jsPriceHistoryExpanded">
                                <table class="Table Table--fixedLayout Table--alternating">
                                    <tr class="Table-row">
                                        <td class="Table-cell Table-cell--priceHistory Table-cell--priceHistoryDate">
    <span class="Text">
      04/15/2020
    </span>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-ellipsis">
                                            Re-listed by Owner
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-text--alignRight Table-cell--priceHistorySumSmall">
        <span class="u-text--bold">
          $2,650
        </span>

                                        </td>
                                    </tr>

                                    <tr class="Table-row">
                                        <td class="Table-cell Table-cell--priceHistory Table-cell--priceHistoryDate">
    <span class="Text">
      09/13/2019
    </span>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-ellipsis">
                                            Off market temporarily
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-text--alignRight Table-cell--priceHistorySumSmall">
        <span class="u-text--bold">
          $2,650
        </span>

                                        </td>
                                    </tr>

                                    <tr class="Table-row">
                                        <td class="Table-cell Table-cell--priceHistory Table-cell--priceHistoryDate">
    <span class="Text">
      09/10/2019
    </span>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-ellipsis">
                                            Listed by Owner
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-text--alignRight Table-cell--priceHistorySumSmall">
        <span class="u-text--bold">
          $2,650
        </span>

                                        </td>
                                    </tr>

                                    <tr class="Table-row">
                                        <td class="Table-cell Table-cell--priceHistory Table-cell--priceHistoryDate">
    <span class="Text">
      08/21/2015
    </span>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-ellipsis">
                                            <a rel="nofollow" href="#">R New York Listing is no longer available on CoZmo-web</a>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-text--alignRight Table-cell--priceHistorySumSmall">
        <span class="u-text--bold">
          $2,295
        </span>

                                        </td>
                                    </tr>

                                    <tr class="Table-row">
                                        <td class="Table-cell Table-cell--priceHistory Table-cell--priceHistoryDate">
    <span class="Text">
      08/05/2015
    </span>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-ellipsis">
                                            <a rel="nofollow" href="#">Previously Listed by R New York</a>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-text--alignRight Table-cell--priceHistorySumSmall">
        <span class="u-text--bold">
          $2,295
        </span>

                                        </td>
                                    </tr>

                                    <tr class="Table-row">
                                        <td class="Table-cell Table-cell--priceHistory Table-cell--priceHistoryDate">
    <span class="Text">
      08/04/2015
    </span>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-ellipsis">
                                            <a rel="nofollow" href="#">Owner Listing is no longer available on CoZmo-web Last priced at $2,295</a>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-text--alignRight Table-cell--priceHistorySumSmall">
        <span class="u-text--bold">
          $2,295
        </span>

                                        </td>
                                    </tr>

                                    <tr class="Table-row">
                                        <td class="Table-cell Table-cell--priceHistory Table-cell--priceHistoryDate">
    <span class="Text">
      06/23/2015
    </span>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-ellipsis">
                                            <a rel="nofollow" href="#">Previously Listed by Owner</a>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-text--alignRight Table-cell--priceHistorySumSmall">
        <span class="u-text--bold">
          $2,650
        </span>

                                        </td>
                                    </tr>

                                    <tr class="Table-row">
                                        <td class="Table-cell Table-cell--priceHistory Table-cell--priceHistoryDate">
    <span class="Text">
      06/17/2014
    </span>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-ellipsis">
                                            <a rel="nofollow" href="#">Corcoran Listing is no longer available on CoZmo-web Last priced at $2,595</a>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-text--alignRight Table-cell--priceHistorySumSmall">
        <span class="u-text--bold">
          $2,595
        </span>

                                        </td>
                                    </tr>

                                    <tr class="Table-row">
                                        <td class="Table-cell Table-cell--priceHistory Table-cell--priceHistoryDate">
    <span class="Text">
      06/04/2014
    </span>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-ellipsis">
                                            <a rel="nofollow" href="#">Previously Listed by Corcoran</a>
                                        </td>
                                        <td class="Table-cell Table-cell--priceHistory u-text--alignRight Table-cell--priceHistorySumSmall">
        <span class="u-text--bold">
          $2,990
        </span>

                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>


                    </section>

                    <section class="listings_sections jsIsVisibleAds hidden">

                        <div id='amn_main_container' class="ad_amenities_ad">
                            <hr class="Separator">
                            <h2>Home Services</h2>
                            <div id="amn_main_p1" style="zoom: 1; opacity: 1;">
                                <script type="text/javascript">
                                    googletag.cmd.push(function() {
                                        googletag.display("amn_main_p1");
                                        googletag.pubads().addEventListener("slotRenderEnded", function(event) {
                                            var removeContainer = false;
                                            var els = document.getElementsByClassName("jsIsVisibleAds");
                                            if (event.slot.getSlotElementId() == "amn_main_p1") {
                                                if (event.isEmpty) {
                                                    if(removeContainer) {
                                                        Array.prototype.forEach.call(els, function (el) {el.remove()})
                                                    } else {
                                                        // amn_main_p1.remove();
                                                        Array.prototype.forEach.call(els, function (el) {el.classList.add("isAdless")})
                                                    }
                                                } else {
                                                    Array.prototype.forEach.call(els, function (el) {el.classList.remove("hidden")})
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>

                            <div id="amn_main_p2" style="zoom: 1; opacity: 1;">
                                <script type="text/javascript">
                                    googletag.cmd.push(function() {
                                        googletag.display("amn_main_p2");
                                        googletag.pubads().addEventListener("slotRenderEnded", function(event) {
                                            var removeContainer = false;
                                            var els = document.getElementsByClassName("jsIsVisibleAds");
                                            if (event.slot.getSlotElementId() == "amn_main_p2") {
                                                if (event.isEmpty) {
                                                    if(removeContainer) {
                                                        Array.prototype.forEach.call(els, function (el) {el.remove()})
                                                    } else {
                                                        // amn_main_p2.remove();
                                                        Array.prototype.forEach.call(els, function (el) {el.classList.add("isAdless")})
                                                    }
                                                } else {
                                                    Array.prototype.forEach.call(els, function (el) {el.classList.remove("hidden")})
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>

                            <div id="amn_main_p3" style="zoom: 1; opacity: 1;">
                                <script type="text/javascript">
                                    googletag.cmd.push(function() {
                                        googletag.display("amn_main_p3");
                                        googletag.pubads().addEventListener("slotRenderEnded", function(event) {
                                            var removeContainer = false;
                                            var els = document.getElementsByClassName("jsIsVisibleAds");
                                            if (event.slot.getSlotElementId() == "amn_main_p3") {
                                                if (event.isEmpty) {
                                                    if(removeContainer) {
                                                        Array.prototype.forEach.call(els, function (el) {el.remove()})
                                                    } else {
                                                        // amn_main_p3.remove();
                                                        Array.prototype.forEach.call(els, function (el) {el.classList.add("isAdless")})
                                                    }
                                                } else {
                                                    Array.prototype.forEach.call(els, function (el) {el.classList.remove("hidden")})
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>

                        </div>

                    </section>
                </article>

                <div class='closer'></div>

                <div class="full">
                    <hr class="Separator">
                    <section class="DetailsPage-contentBlock">
                        <div class="SimilarBlock">
                            <h2 class="Title Title--primaryMd">Similar Rentals</h2>
                            <div class="SimilarBlock-slider">
                                <ul class="u-hidden jsSimilarListings" data-slide-count="9">
                                    <li class="lslide active">
                                        <div class="Card ">
                                            <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3013180" data-track="lt-simclick-r-3013180" data-desktop-imp="lt-simimp-r-3013180" href="#"></a>
                                            <div class="Card-image" style="background-image: url('/images/cozmo/'.{{$data->main_image}})">
                                            </div>


                                            <div class="Card-info">
                                                <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3013180_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3013180_77a9a9" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3013180_link&item_id=3013180&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3013180%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                    Rental
                                                    in Crown Heights
                                                </div>

                                                <div class="Card-address">
                                                    2178 Bergen Street #3A
                                                </div>

                                                <div class="Card-priceSpacer">
                                                    <div class="Card-price ">
                                                        {{$data->price}}
                                                    </div>

                                                    <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                </div>

                                                <div class="Card-property">
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                        3 Beds
                                                    </div>
                                                    <div class="Card-propertySeparator"></div>
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                        1 Bath
                                                    </div>
                                                    <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                    <div class="Card-propertyItem Card-propertyItem--additional">
                                                        <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                        - - - ft&sup2;
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>            <li class="lslide active">
                                        <div class="Card ">
                                            <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3019971" data-track="lt-simclick-r-3019971" data-desktop-imp="lt-simimp-r-3019971" href="#"></a>
                                            <div class="Card-image" style="background-image: url('img/apartment.png')">
                                            </div>


                                            <div class="Card-info">
                                                <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3019971_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3019971_4b1761" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3019971_link&item_id=3019971&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3019971%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                    Rental
                                                    in Crown Heights
                                                </div>

                                                <div class="Card-address">
                                                    2178 Bergan Street #4E
                                                </div>

                                                <div class="Card-priceSpacer">
                                                    <div class="Card-price ">
                                                        $2,499
                                                    </div>

                                                    <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                </div>

                                                <div class="Card-property">
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                        3 Beds
                                                    </div>
                                                    <div class="Card-propertySeparator"></div>
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                        1 Bath
                                                    </div>
                                                    <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                    <div class="Card-propertyItem Card-propertyItem--additional">
                                                        <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                        - - - ft&sup2;
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>            <li class="lslide active">
                                        <div class="Card ">
                                            <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3019973" data-track="lt-simclick-r-3019973" data-desktop-imp="lt-simimp-r-3019973" href="#"></a>
                                            <div class="Card-image" style="background-image: url('img/apartment.png')">
                                            </div>


                                            <div class="Card-info">
                                                <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3019973_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3019973_427012" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3019973_link&item_id=3019973&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3019973%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                    Rental
                                                    in Crown Heights
                                                </div>

                                                <div class="Card-address">
                                                    2178 Bergen Street #4A
                                                </div>

                                                <div class="Card-priceSpacer">
                                                    <div class="Card-price ">
                                                        $2,650
                                                    </div>

                                                    <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                </div>

                                                <div class="Card-property">
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                        3 Beds
                                                    </div>
                                                    <div class="Card-propertySeparator"></div>
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                        1 Bath
                                                    </div>
                                                    <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                    <div class="Card-propertyItem Card-propertyItem--additional">
                                                        <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                        - - - ft&sup2;
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>            <li class="lslide active">
                                        <div class="Card ">
                                            <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3022005" data-track="lt-simclick-r-3022005" data-desktop-imp="lt-simimp-r-3022005" href="#"></a>
                                            <div class="Card-image" style="background-image: url('img/apartment.png')">
                                            </div>


                                            <div class="Card-info">
                                                <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3022005_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3022005_11b3fe" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3022005_link&item_id=3022005&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3022005%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                    Rental
                                                    in Ocean Hill
                                                </div>

                                                <div class="Card-address">
                                                    238 Mac Dougal Street #1AA
                                                </div>

                                                <div class="Card-priceSpacer">
                                                    <div class="Card-price ">
                                                        $2,395
                                                    </div>

                                                    <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                </div>

                                                <div class="Card-property">
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                        3 Beds
                                                    </div>
                                                    <div class="Card-propertySeparator"></div>
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                        2 Baths
                                                    </div>
                                                    <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                    <div class="Card-propertyItem Card-propertyItem--additional">
                                                        <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                        - - - ft&sup2;
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>            <li class="lslide active">
                                        <div class="Card ">
                                            <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3022013" data-track="lt-simclick-r-3022013" data-desktop-imp="lt-simimp-r-3022013" href="#"></a>
                                            <div class="Card-image" style="background-image: url('img/apartment.png')">
                                            </div>


                                            <div class="Card-info">
                                                <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3022013_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3022013_c92a39" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3022013_link&item_id=3022013&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3022013%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                    Rental
                                                    in Ocean Hill
                                                </div>

                                                <div class="Card-address">
                                                    238 Mac Dougal Street #2AA
                                                </div>

                                                <div class="Card-priceSpacer">
                                                    <div class="Card-price ">
                                                        $2,395
                                                    </div>

                                                    <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                </div>

                                                <div class="Card-property">
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                        3 Beds
                                                    </div>
                                                    <div class="Card-propertySeparator"></div>
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                        2 Baths
                                                    </div>
                                                    <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                    <div class="Card-propertyItem Card-propertyItem--additional">
                                                        <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                        - - - ft&sup2;
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>            <li class="lslide active">
                                        <div class="Card ">
                                            <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3023067" data-track="lt-simclick-r-3023067" data-desktop-imp="lt-simimp-r-3023067" href="#"></a>
                                            <div class="Card-image" style="background-image: url('img/apartment.png')">
                                            </div>


                                            <div class="Card-info">
                                                <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3023067_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3023067_515fea" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3023067_link&item_id=3023067&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3023067%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                    Rental
                                                    in Ocean Hill
                                                </div>

                                                <div class="Card-address">
                                                    74 Hull Street #3
                                                </div>

                                                <div class="Card-priceSpacer">
                                                    <div class="Card-price ">
                                                        $2,475
                                                    </div>

                                                    <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                </div>

                                                <div class="Card-property">
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                        3 Beds
                                                    </div>
                                                    <div class="Card-propertySeparator"></div>
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                        2 Baths
                                                    </div>
                                                    <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                    <div class="Card-propertyItem Card-propertyItem--additional">
                                                        <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                        - - - ft&sup2;
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>            <li class="lslide active">
                                        <div class="Card ">
                                            <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3026476" data-track="lt-simclick-r-3026476" data-desktop-imp="lt-simimp-r-3026476" href="#"></a>
                                            <div class="Card-image" style="background-image: url('img/apartment.png')">
                                            </div>


                                            <div class="Card-info">
                                                <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3026476_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3026476_365342" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3026476_link&item_id=3026476&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3026476%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                    Rental
                                                    in Crown Heights
                                                </div>

                                                <div class="Card-address">
                                                    2174 Bergen Street #2G
                                                </div>

                                                <div class="Card-priceSpacer">
                                                    <div class="Card-price ">
                                                        $2,325
                                                    </div>

                                                    <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                </div>

                                                <div class="Card-property">
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                        3 Beds
                                                    </div>
                                                    <div class="Card-propertySeparator"></div>
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                        1 Bath
                                                    </div>
                                                    <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                    <div class="Card-propertyItem Card-propertyItem--additional">
                                                        <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                        - - - ft&sup2;
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>            <li class="lslide active">
                                        <div class="Card ">
                                            <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3026478" data-track="lt-simclick-r-3026478" data-desktop-imp="lt-simimp-r-3026478" href="#"></a>
                                            <div class="Card-image" style="background-image: url('img/apartment.png')">
                                            </div>


                                            <div class="Card-info">
                                                <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3026478_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3026478_0c835e" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3026478_link&item_id=3026478&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3026478%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                    Rental
                                                    in Crown Heights
                                                </div>

                                                <div class="Card-address">
                                                    2178 Bergen Street #4A
                                                </div>

                                                <div class="Card-priceSpacer">
                                                    <div class="Card-price ">
                                                        $2,650
                                                    </div>

                                                    <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                </div>

                                                <div class="Card-property">
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                        3 Beds
                                                    </div>
                                                    <div class="Card-propertySeparator"></div>
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                        1 Bath
                                                    </div>
                                                    <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                    <div class="Card-propertyItem Card-propertyItem--additional">
                                                        <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                        - - - ft&sup2;
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>            <li class="lslide active">
                                        <div class="Card ">
                                            <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3027010" data-track="lt-simclick-r-3027010" data-desktop-imp="lt-simimp-r-3027010" href="#"></a>
                                            <div class="Card-image" style="background-image: url('img/apartment.png')">
                                            </div>


                                            <div class="Card-info">
                                                <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3027010_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3027010_d9d5b6" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3027010_link&item_id=3027010&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3027010%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                    Rental
                                                    in Ocean Hill
                                                </div>

                                                <div class="Card-address">
                                                    379 Sumpter Street #3B
                                                </div>

                                                <div class="Card-priceSpacer">
                                                    <div class="Card-price ">
                                                        $2,600
                                                    </div>

                                                    <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                </div>

                                                <div class="Card-property">
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                        3 Beds
                                                    </div>
                                                    <div class="Card-propertySeparator"></div>
                                                    <div class="Card-propertyItem">
                                                        <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                        1.5 Baths
                                                    </div>
                                                    <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                    <div class="Card-propertyItem Card-propertyItem--additional">
                                                        <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                        - - - ft&sup2;
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </li>        </ul>
                            </div>
                            <div class="SimilarBlock-actions u-hidden jsSimilarListingsActions">
        <span class="SimilarBlock-actionsButton SimilarBlock-actionsButton--prev">
          <div class="CircleArrow CircleArrow--prev isInactive jsArrowLeft"></div>
        </span>
                                <span class="SimilarBlock-actionsButton">
          <div class="CircleArrow jsArrowRight"></div>
        </span>
                            </div>

                            <div class="SimilarBlock-expandedWrapper jsSimilarExpandedTarget">
                                <div class="SimilarBlock-expandedContent jsSimilarExpandedSection">
                                    <ul>
                                        <li class="SimilarBlock-item">
                                            <div class="Card isMobileHorizontal">
                                                <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3013180" data-mobile-track="lt-simclick-r-3013180" data-mobile-imp="lt-simimp-r-3013180" href="#"></a>
                                                <div class="Card-image" style="background-image: url('img/apartment.png')">
                                                </div>


                                                <div class="Card-info">
                                                    <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3013180_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3013180_c8ca71" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3013180_link&item_id=3013180&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3013180%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                    <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                        Rental
                                                        in Crown Heights
                                                    </div>

                                                    <div class="Card-address">
                                                        2178 Bergen Street #3A
                                                    </div>

                                                    <div class="Card-priceSpacer">
                                                        <div class="Card-price ">
                                                            $2,500
                                                        </div>

                                                        <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                    </div>

                                                    <div class="Card-property">
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                            3 Beds
                                                        </div>
                                                        <div class="Card-propertySeparator"></div>
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                            1 Bath
                                                        </div>
                                                        <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                        <div class="Card-propertyItem Card-propertyItem--additional">
                                                            <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                            - - - ft&sup2;
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>            <li class="SimilarBlock-item">
                                            <div class="Card isMobileHorizontal">
                                                <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3019971" data-mobile-track="lt-simclick-r-3019971" data-mobile-imp="lt-simimp-r-3019971" href="#"></a>
                                                <div class="Card-image" style="background-image: url('img/apartment.png')">
                                                </div>


                                                <div class="Card-info">
                                                    <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3019971_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3019971_9b1d1e" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3019971_link&item_id=3019971&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3019971%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                    <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                        Rental
                                                        in Crown Heights
                                                    </div>

                                                    <div class="Card-address">
                                                        2178 Bergan Street #4E
                                                    </div>

                                                    <div class="Card-priceSpacer">
                                                        <div class="Card-price ">
                                                            $2,499
                                                        </div>

                                                        <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                    </div>

                                                    <div class="Card-property">
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                            3 Beds
                                                        </div>
                                                        <div class="Card-propertySeparator"></div>
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                            1 Bath
                                                        </div>
                                                        <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                        <div class="Card-propertyItem Card-propertyItem--additional">
                                                            <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                            - - - ft&sup2;
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>            <li class="SimilarBlock-item">
                                            <div class="Card isMobileHorizontal">
                                                <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3019973" data-mobile-track="lt-simclick-r-3019973" data-mobile-imp="lt-simimp-r-3019973" href=""></a>
                                                <div class="Card-image" style="background-image: url('img/apartment.png')">
                                                </div>


                                                <div class="Card-info">
                                                    <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3019973_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3019973_b1fe6a" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3019973_link&item_id=3019973&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3019973%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                    <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                        Rental
                                                        in Crown Heights
                                                    </div>

                                                    <div class="Card-address">
                                                        2178 Bergen Street #4A
                                                    </div>

                                                    <div class="Card-priceSpacer">
                                                        <div class="Card-price ">
                                                            $2,650
                                                        </div>

                                                        <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                    </div>

                                                    <div class="Card-property">
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                            3 Beds
                                                        </div>
                                                        <div class="Card-propertySeparator"></div>
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                            1 Bath
                                                        </div>
                                                        <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                        <div class="Card-propertyItem Card-propertyItem--additional">
                                                            <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                            - - - ft&sup2;
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>            <li class="SimilarBlock-item">
                                            <div class="Card isMobileHorizontal">
                                                <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3022005" data-mobile-track="lt-simclick-r-3022005" data-mobile-imp="lt-simimp-r-3022005" href="#"></a>
                                                <div class="Card-image" style="background-image: url('img/apartment.png')">
                                                </div>


                                                <div class="Card-info">
                                                    <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3022005_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3022005_dc823a" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3022005_link&item_id=3022005&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3022005%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                    <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                        Rental
                                                        in Ocean Hill
                                                    </div>

                                                    <div class="Card-address">
                                                        238 Mac Dougal Street #1AA
                                                    </div>

                                                    <div class="Card-priceSpacer">
                                                        <div class="Card-price ">
                                                            $2,395
                                                        </div>

                                                        <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                    </div>

                                                    <div class="Card-property">
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                            3 Beds
                                                        </div>
                                                        <div class="Card-propertySeparator"></div>
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                            2 Baths
                                                        </div>
                                                        <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                        <div class="Card-propertyItem Card-propertyItem--additional">
                                                            <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                            - - - ft&sup2;
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>            <li class="SimilarBlock-item">
                                            <div class="Card isMobileHorizontal">
                                                <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3022013" data-mobile-track="lt-simclick-r-3022013" data-mobile-imp="lt-simimp-r-3022013" href="#"></a>
                                                <div class="Card-image" style="background-image: url('img/apartment.png')">
                                                </div>


                                                <div class="Card-info">
                                                    <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3022013_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3022013_2db29d" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3022013_link&item_id=3022013&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3022013%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                    <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                        Rental
                                                        in Ocean Hill
                                                    </div>

                                                    <div class="Card-address">
                                                        238 Mac Dougal Street #2AA
                                                    </div>

                                                    <div class="Card-priceSpacer">
                                                        <div class="Card-price ">
                                                            $2,395
                                                        </div>

                                                        <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                    </div>

                                                    <div class="Card-property">
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                            3 Beds
                                                        </div>
                                                        <div class="Card-propertySeparator"></div>
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                            2 Baths
                                                        </div>
                                                        <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                        <div class="Card-propertyItem Card-propertyItem--additional">
                                                            <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                            - - - ft&sup2;
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>            <li class="SimilarBlock-item">
                                            <div class="Card isMobileHorizontal">
                                                <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3023067" data-mobile-track="lt-simclick-r-3023067" data-mobile-imp="lt-simimp-r-3023067" href="#"></a>
                                                <div class="Card-image" style="background-image: url('img/apartment.png')">
                                                </div>


                                                <div class="Card-info">
                                                    <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3023067_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3023067_63ccd3" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3023067_link&item_id=3023067&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3023067%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                    <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                        Rental
                                                        in Ocean Hill
                                                    </div>

                                                    <div class="Card-address">
                                                        74 Hull Street #3
                                                    </div>

                                                    <div class="Card-priceSpacer">
                                                        <div class="Card-price ">
                                                            $2,475
                                                        </div>

                                                        <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                    </div>

                                                    <div class="Card-property">
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                            3 Beds
                                                        </div>
                                                        <div class="Card-propertySeparator"></div>
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                            2 Baths
                                                        </div>
                                                        <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                        <div class="Card-propertyItem Card-propertyItem--additional">
                                                            <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                            - - - ft&sup2;
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>            <li class="SimilarBlock-item">
                                            <div class="Card isMobileHorizontal">
                                                <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3026476" data-mobile-track="lt-simclick-r-3026476" data-mobile-imp="lt-simimp-r-3026476" href="#"></a>
                                                <div class="Card-image" style="background-image: url('img/apartment.png')">
                                                </div>


                                                <div class="Card-info">
                                                    <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3026476_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3026476_01ea42" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3026476_link&item_id=3026476&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3026476%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                    <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                        Rental
                                                        in Crown Heights
                                                    </div>

                                                    <div class="Card-address">
                                                        2174 Bergen Street #2G
                                                    </div>

                                                    <div class="Card-priceSpacer">
                                                        <div class="Card-price ">
                                                            $2,325
                                                        </div>

                                                        <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                    </div>

                                                    <div class="Card-property">
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                            3 Beds
                                                        </div>
                                                        <div class="Card-propertySeparator"></div>
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                            1 Bath
                                                        </div>
                                                        <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                        <div class="Card-propertyItem Card-propertyItem--additional">
                                                            <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                            - - - ft&sup2;
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>            <li class="SimilarBlock-item">
                                            <div class="Card isMobileHorizontal">
                                                <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3026478" data-mobile-track="lt-simclick-r-3026478" data-mobile-imp="lt-simimp-r-3026478" href="#"></a>
                                                <div class="Card-image" style="background-image: url('img/apartment.png')">
                                                </div>


                                                <div class="Card-info">
                                                    <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3026478_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3026478_0380f7" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3026478_link&item_id=3026478&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3026478%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                    <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                        Rental
                                                        in Crown Heights
                                                    </div>

                                                    <div class="Card-address">
                                                        2178 Bergen Street #4A
                                                    </div>

                                                    <div class="Card-priceSpacer">
                                                        <div class="Card-price ">
                                                            $2,650
                                                        </div>

                                                        <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                    </div>

                                                    <div class="Card-property">
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                            3 Beds
                                                        </div>
                                                        <div class="Card-propertySeparator"></div>
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                            1 Bath
                                                        </div>
                                                        <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                        <div class="Card-propertyItem Card-propertyItem--additional">
                                                            <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                            - - - ft&sup2;
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>            <li class="SimilarBlock-item">
                                            <div class="Card isMobileHorizontal">
                                                <a class="Card-globalLink jsSimilarListingGlobalLink" data-listing-type="rentals_show" data-listing-id="3027010" data-mobile-track="lt-simclick-r-3027010" data-mobile-imp="lt-simimp-r-3027010" href="#"></a>
                                                <div class="Card-image" style="background-image: url('img/apartment.png')">
                                                </div>


                                                <div class="Card-info">
                                                    <a class="Card-saveButton" rel="nofollow" id="add_folder_entry_Rental_3027010_link" data-position="left" data-modal-wrapper-class="" data-modal-target-id="add_folder_entry_Rental_3027010_2b2048" data-gtm-item="rental" data-gtm-origin="save" data-gtm-login-required="true" data-modal-class="modal-signin modalRemoveOnHide" data-toggle="modal" data-modal-source="/nyc/user/register_dialog/2862083?page_category=&page_type=show&origin=save&item=Rental&return_to_save_search=add_folder_entry_Rental_3027010_link&item_id=3027010&return_to=%2Ffolders%2F-%2Fadd_entry_dialog%3Fentry%5Bitem_type%5D%3DRental%26entry%5Bitem_id%5D%3D3027010%26hdpr2016%3Dtrue%26saved_in_folders_info%3Dtrue" href="#"></a>

                                                    <div class="Title Title--secondarySmCaps u-colorGreySemi">
                                                        Rental
                                                        in Ocean Hill
                                                    </div>

                                                    <div class="Card-address">
                                                        379 Sumpter Street #3B
                                                    </div>

                                                    <div class="Card-priceSpacer">
                                                        <div class="Card-price ">
                                                            $2,600
                                                        </div>

                                                        <span class="Card-label">
            <span class="ListingLabel ListingLabel--mobileSmaller ListingLabel--noFee">NO FEE</span>
          </span>
                                                    </div>

                                                    <div class="Card-property">
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bed"></span>
                                                            3 Beds
                                                        </div>
                                                        <div class="Card-propertySeparator"></div>
                                                        <div class="Card-propertyItem">
                                                            <span class="Card-propertyIcon Card-propertyIcon--bath"></span>
                                                            1.5 Baths
                                                        </div>
                                                        <div class="Card-propertySeparator Card-propertySeparator--additional"></div>
                                                        <div class="Card-propertyItem Card-propertyItem--additional">
                                                            <span class="Card-propertyIcon Card-propertyIcon--size"></span>
                                                            - - - ft&sup2;
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </li>        </ul>
                                </div>
                            </div>
                        </div>
                    </section>



                </div>

                <div class="full">
                    <hr class="Separator">
                    <section class="DetailsPage-contentBlock">
                        <div class="Nearby">
                            <div class="Nearby-half">
                                <h2 class="Title Title--primaryMd">Nearby</h2>
                                <div class="Nearby-transportation">
                                    <h6 class="Title Title--secondarySmCaps">Transportation</h6>
                                    <ul class="Nearby-transportationList">
                                        <li class="Nearby-transportationItem">
                                            <span class='StationRoute StationRoute--lineC'>C</span>
                                            <span class="Text ">
           at Rockaway Av
          <b>0.12 miles</b>
        </span>
                                        </li>
                                        <li class="Nearby-transportationItem">
                                            <span class='StationRoute StationRoute--lineA'>A</span>
                                            <span class='StationRoute StationRoute--lineC'>C</span>
                                            <span class='StationRoute StationRoute--lineJ'>J</span>
                                            <span class='StationRoute StationRoute--lineL'>L</span>
                                            <span class="Text ">
           at Broadway Junction
          <b>0.26 miles</b>
        </span>
                                        </li>
                                        <li class="Nearby-transportationItem">
        <span class="Text ">
           at East New York
          <b>0.32 miles</b>
        </span>
                                        </li>
                                        <li class="Nearby-transportationItem">
                                            <span class='StationRoute StationRoute--lineL'>L</span>
                                            <span class="Text ">
           at Atlantic Av
          <b>0.33 miles</b>
        </span>
                                        </li>
                                        <li class="Nearby-transportationItem">
                                            <span class='StationRoute StationRoute--lineL'>L</span>
                                            <span class="Text ">
           at Bushwick Av
          <b>0.4 miles</b>
        </span>
                                        </li>
                                    </ul>

                                    <a class="Text u-colorBlue " rel="noopener noreferrer" href="#">View subway lines on Google Maps <i class='fa fa-caret-right'></i></a>


                                </div>
                                <div class="Nearby-schools">
                                    <h6 class="Title Title--secondarySmCaps">Schools</h6>

                                    <div class="Text ">There is no data available</div>

                                </div>

                                <div class="Nearby-disclaimer">
                                    <div class="Text Text--disclaimer">
                                        Disclaimer: School attendance zone boundaries are not guaranteed to be accurate – they are provided by a third party and subject to change. Check with the applicable school district prior to making a decision based on these boundaries.
                                    </div>
                                </div>
                            </div>

                            <div class="Nearby-half Nearby-half--map">
                                <div class="hidden-xs hidden-sm Nearby-map">
                                    <div se:behavior='map' id='map' class='map' style='height: 300px;' se:map:zoom='15' se:map:min_zoom='12' se:map:max_zoom='19' se:map:center_latlon='40.73921,-73.99034' se:map:center_around='all' se:map:mapbox='CoZmo-web.4f8c9dd3,' se:map:layer_names='Streets,Satellite' >
                                        <div se:map_layer:title="Streets" se:map_layer:min_zoom="12" se:map_layer:max_zoom="19" se:map_layer:type="base" ></div>
                                        <div se:behavior='map_layer_definition' se:map_layer:name="satellite" se:map_layer:title="Satellite" se:map_layer:min_zoom="12" se:map_layer:max_zoom="19" se:map_layer:type="base" ></div>
                                        <div se:behavior='map_layer_definition' se:map_layer:name="bikeshare" se:map_layer:title="Citi Bike" se:map_layer:type="overlay"  se:map_layer:utf_popup_content_js="'<b>Citi Bike Station</b><br />' + ev.data.name + '<br />' + ev.data.docks + ' docks'" ></div>
                                        <div se:behavior='map_layer_definition' se:map_layer:name="evacuation" se:map_layer:title="Storm Evacuation Zones" se:map_layer:type="overlay" se:map_layer:utf_popup_content_js="'<center>NYC Storm Evacuation<br />Zone ' + ev.data.Zone + '</center>'" ></div>
                                    </div>
                                    <div class='item_tools'><a href='#' onClick='openGMaps("1358 Herkimer Street, Brooklyn, NY"); return false;' class='Button Button--hollowClassic Button--minWidth'>View on Google</a></div>  <div se:behavior='map_polygon' se:map='map' se:map:paths='_atqG~~ggN?_c`|@~b`|@??~b`|@$}sgwFjvcbMhD{qAqGmTg}@fsBn`A}J' se:map:color='#0066CC' se:map:weight='3' se:map:opacity='0.6' se:map:fillColor='#FFFFFF' se:map:fillOpacity='0.3' se:map:group='polygons'></div>
                                    <div>
                                    </div>
                                </div>
                                <a class="hidden-md" href="#"><img style="max-width: 100%" alt="View map" src="" /></a>
                            </div>
                        </div>

                    </section>
                </div>

                <div class="full">
                    <hr class="Separator">
                    <section class="DetailsPage-contentBlock">
                        <h2 class="Title Title--primaryMd">Latest Discussions</h2>


                        <button
                            class="u-hover-underline u-hover-ink u-noPadding u-boldLink u-pointer u-font-family-inherit"
                            onclick="window.gon.state.analyticsData = {'source':'discussions'}; window.gon.state.triggerScenario('EmailCapture');"
                            type="button"
                        >
                            Be the first to create a discussion about this listing
                        </button>

                    </section>


                    <hr class="Separator">
                    <section class="DetailsPage-contentBlock">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#listingCorrection" rel="nofollow" class="u-boldLink">
                            Report a problem
                        </a>
                    </section>

                </div>



            </div>

            <div class="SearchLinks SearchLinks--withoutExtraSpace">
                <div class="SearchLinks-column">
                    <h3 class="SearchLinks-title">Ocean Hill Rentals</h3>
                    <div class="SearchLinks-info">
                        <div class="SearchLinks-item">
                            <a class="SearchLinks-link" href="#">Studios in Ocean Hill</a>
                        </div>
                        <div class="SearchLinks-item">
                            <a class="SearchLinks-link" href="#">1 Bedrooms in Ocean Hill</a>
                        </div>
                        <div class="SearchLinks-item">
                            <a class="SearchLinks-link" href="#">2 Bedrooms in Ocean Hill</a>
                        </div>
                        <div class="SearchLinks-item">
                            <a class="SearchLinks-link" href="#">3 Bedrooms in Ocean Hill</a>
                        </div>
                    </div>
                </div>

                <div class="SearchLinks-column">
                    <div class="SearchLinks-title">Nearby Ocean Hill</div>
                    <div class="SearchLinks-info">
                        <div class="SearchLinks-item">
                            <a class="SearchLinks-link" href="#">Bedford Stuyvesant Apartments for rent</a>
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

    </div>


    <div class='closer'></div>

</div>


<script>
    setTimeout(function () {
    var visitCount = document.getElementById('visitCount').
    })
</script>

@endsection

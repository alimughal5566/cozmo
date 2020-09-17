
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

    <link rel="preload" href="fonts/SourceSansPro-Bold-487f2e9da2ff0740755a5ef01dc15a2888b89537795895203a831b13b199d8bb.woff2" as="font" crossorigin="anonymous"/>
    <link rel="preload" href="fonts/SourceSansPro-SemiBold-fc772b0188bc262494be9dc529c50893ae189110dfcad5a286512b737aef93b8.woff2" as="font" crossorigin="anonymous"/>
    <link rel="preload" href="fonts/SourceSansPro-Regular-ecf76895be1cf9e8b3edb254030e9c9c1d8f3c2efc1f9dc7e04ceff29eccae9c.woff2" as="font" crossorigin="anonymous"/>
    <link rel="preload" href="fonts/SourceSansPro-Light-7ec7f22119da3493aedefd66ffd30f0aaf4cf4aee42d8254638bcca5971c3568.woff2" as="font" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/style.css')}}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/fonts.css')}}">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        .modal.animate .a-zoomDown{-webkit-animation:zoomOutDown .5s;animation:zoomOutDown .5s}
        .modal.animate.show .a-zoomDown{-webkit-animation:zoomInDown .5s;animation:zoomInDown .5s}
    </style>


    <title>CoZmo-Web</title>
    <script src="https://smartlock.google.com/client" async></script>

</head>
<body id="application" class="windows_platform webkit_engine chrome_browser desktop site_nyc site_home sales_home isFullbleed">

<div id="site-wrapper" class="SiteBlock ">
    <div id="site-canvas" class="SiteBlock-canvas">

{{----}}
        @yield('header')
{{--Header Here--}}
{{----}}
        <div id="site-content" class="SiteBlock-content ">

            <div id="content" >



                <main class="Home">









{{--                       --}}
{{--              top bar here      --}}
{{--                    --}}
                    <section class="Home-more Home-section u-background-mouseGrey">

                        <div class="Home-featuredContainer grid-container grid-container-9cols-984">

{{--     <h1>hello word</h1>--}}

                            @yield('content')
                            <!-- Featured Buildings -->


                        </div>
                    </section>





                </main>
            </div>

            <div style="line-height: 1px; height: 1px; overflow: hidden; position: absolute;">

                <noscript>
                    <img src="https://sb.scorecardresearch.com/p?c1=2&amp;c2=6036206&amp;cv=2.0&amp;cj=1" alt="" />
                </noscript>
            </div>


            <div class='closer'></div>
        </div>
    </div>
</div>

{{----}}

{{--Footer Here--}}
@include('layouts.footer')
{{----}}

<!--    <div id="costumModal12" class="modal" data-easein="bounceDownIn"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                        <h4 class="modal-title">
                            Modal Header
                        </h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">
                            Close
                        </button>
                        <button class="btn btn-primary">
                            Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div> -->





<div id="authentication"></div>


<div class="modal animate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border: none;padding: 25px 25px 0;">
                <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="font-size: 47px;
    font-weight: 200;
    padding: 0 1rem;">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center p-lg login_mdl">
                <h3>Sign In / Register</h3>
                <div class="text_mdl">
                    <p>Take full advantage of CoZmo’s features</p>
                </div>
                <form><div class="styled__ModalInput-s4fk6y-17 kKfFuV"><input placeholder="Email" type="text" name="email" class="styled__InputWrapper-sc-1bcbvs9-0 lmEhiB" value=""></div><div class="styled__ModalDisclaimer-s4fk6y-12 fnKrex"><p type="disclaimer" class="Text-f1piir-0 fGeFFI">Real estate professional? <span class="styled__MobileLineBrake-s4fk6y-10 cZCHHS"></span>Use your company email address.</p></div><div class="styled__ModalButton-s4fk6y-11 cUKKrb"><button class="styled__BaseButton-sc-1082hez-0 styled__Primary-sc-1082hez-1 ha-dhen">Submit</button></div></form>
                <p type="sm" class="Text-f1piir-0 styled__TextCopy-s4fk6y-21 cUTBUf">I accept CoZmo's&nbsp;<a href="#" class="styled__Link-o2bgiv-0 styled__primaryTouchedUnderline-o2bgiv-3 kFvUIC">Terms of Use</a></p>
            </div>
            <!-- <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div> -->
        </div>
    </div>
</div>
<script>
    $(function(){
        $('[role=dialog]')
            .on('show.bs.modal', function(e) {
                $(this)
                    .find('[role=document]')
                    .removeClass()
                    .addClass('modal-dialog ' + $(e.relatedTarget).data('ui-class'))
            })
    })
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.Home-advancedSearch').click(function() {
            /* Act on the event */
            $('.Home-advancedSearchLink').toggle();
        });
    });
</script>

</body>

</html>

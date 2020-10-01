@include('layouts.flashmessage')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

<script src="{{asset('assets/masterFrontend/js/search2.js')}}"></script>
<script src="{{asset('assets/masterFrontend/js/search.js')}}"></script>



<style>
    .bootstrap-select {
        width: 100% !important;
    }
    .filter-option-inner-inner {
        margin-top: 5px;
    }
    .load {display:none;}
    .preload { width:100px;
        height: 100px;
        position: fixed;
        top: 50%;
        left: 50%;}
    .bg {
        /* The image used */
        {{--background-image: url("{{asset('images/cozmo/loading.gif')}}");--}}

        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

</style>
<div class="preload">
    <img  class="bg" src="{{asset('images/cozmo/loading.gif')}}">
</div>
<div class="load">


<section class="">
    <div class="u-width--984 u-centered">

        <div class="Home-searchTypeContainer">

          <a href="{{url('/UserSales')}}">  <span class="Home-searchType Title Title--primaryMd isCurrent" >Sales</span> </a>
            <a class="Home-searchType Title Title--primaryMd top_active  "
               href='{{url('/UserRentals')}}'>Rentals</a>

        </div>

        <!-- Search -->

        <form class="u-noMargin criteria large" method="get" action="{{ route('search.simple') }}" enctype="multipart/form-data">
            <input name="utf8" type="hidden" value="&#x2713;" />
            <input type="hidden" name="authenticity_token" value="85xA6oxOEOcaYkMVTSch6uXNkkf8vWzQ62kMAPfCdprYFHDG1Jh3mnSwdtuv8vlnmC8oBSvjBfc9Wsm8mH256Q==" />

            <div class="Home-searchFieldsContainer">
                <div class="Home-searchFields">

                    <div class="Home-searchAreaWrapper">
                        <div class="Home-searchAreaEnhanced Home-searchField">

                            <div class="SearchAreasDropdown jsSearchAreaDropdown">
                                <div class="SearchAreasDropdown-textInputContainer jsSearchAreaInputContainer">
                                    <div class="SearchAreasDropdown-selectedAreas jsSearchAreaSelectedAreas">
                                        <input
                                            class="SearchAreasDropdown-textInput jsSearchAreaInput"
                                            type="text"
                                            placeholder="Neighborhood, Address, Building, Keyword"
                                            autocomplete="off"
                                        />
                                    </div>
                                </div>
                                <div class="SearchAreasDropdown-areasListContainer">
                                    <ul class="Collapsible jsCollapsible">
                                        <li class="jsTrigger">
                                            <div class="Collapsible-checkbox jsSearchAreaItem jsSearchAllItem">
                                                <label
                                                    class="Collapsible-checkboxLabel"
                                                    for="area-1">
                                                    <input type="checkbox" name="area[]" id="area-1" value="1" class="Checkbox jsSearchAreaCheckbox jsCheckAll" data-area="1" data-area-name="All NYC and NJ" />
                                                    Search All (NYC and NJ&nbsp;<span class="u-color-brightBlue u-italic">New!</span>)
                                                </label>
                                            </div>
                                        </li>




                                        <li class="jsTrigger">
                                            <div
                                                class="Collapsible-trigger jsCollapsibleTrigger jsSearchAreaItem"
                                                data-collapsible-trigger-area="Staten Island">
                                                Staten Island
                                                <span class="Collapsible-triggerIcon">
          <i class="fa fa-angle-down u-text--bold"></i>
        </span>
                                            </div>
                                            <div class="Collapsible-body">
                                                <ul>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem">
                                                            <label
                                                                class="Collapsible-checkboxLabel u-text--bold"
                                                                for="area-500">
                                                                <input type="checkbox" name="area[]" id="area-500" value="500" class="Checkbox jsSearchAreaCheckbox" data-area="500" data-area-name="All Staten Island" data-children-ids="503,505,501,502,504" />
                                                                All Staten Island
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-503">
                                                                <input type="checkbox" name="area[]" id="area-503" value="503" class="Checkbox jsSearchAreaCheckbox" data-area="503" data-area-name="East Shore" data-parent-id="500" data-children-ids="510,511,522,523,526,527,529,530,540,546,548,591,550,592,551,561,568,575" />
                                                                East Shore
                                                            </label>
                                                        </div>

                                                    </li>






                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-505">
                                                                <input type="checkbox" name="area[]" id="area-505" value="505" class="Checkbox jsSearchAreaCheckbox" data-area="505" data-area-name="Mid-Island" data-parent-id="500" data-children-ids="514,516,528,543,545,549,573,582,583" />
                                                                Mid-Island
                                                            </label>
                                                        </div>

                                                    </li>



                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-501">
                                                                <input type="checkbox" name="area[]" id="area-501" value="501" class="Checkbox jsSearchAreaCheckbox" data-area="501" data-area-name="North Shore" data-parent-id="500" data-children-ids="509,519,524,533,537,544,547,553,556,562,569,565,566,571,576,580" />
                                                                North Shore
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-502">
                                                                <input type="checkbox" name="area[]" id="area-502" value="502" class="Checkbox jsSearchAreaCheckbox" data-area="502" data-area-name="South Shore" data-parent-id="500" data-children-ids="507,508,517,525,531,532,538,554,557,560,563,577,584" />
                                                                South Shore
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-504">
                                                                <input type="checkbox" name="area[]" id="area-504" value="504" class="Checkbox jsSearchAreaCheckbox" data-area="504" data-area-name="West Shore" data-parent-id="500" data-children-ids="512,518,578" />
                                                                West Shore
                                                            </label>
                                                        </div>

                                                    </li>


                                                </ul>
                                            </div>
                                        </li>
                                        <li class="jsTrigger">
                                            <div
                                                class="Collapsible-trigger jsCollapsibleTrigger jsSearchAreaItem"
                                                data-collapsible-trigger-area="New Jersey">
          <span>
            New Jersey <span class="u-color-brightBlue u-italic u-text--normal u-capitalize">New!</span>
          </span>
                                                <span class="Collapsible-triggerIcon">
          <i class="fa fa-angle-down u-text--bold"></i>
        </span>
                                            </div>
                                            <div class="Collapsible-body">
                                                <ul>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem">
                                                            <label
                                                                class="Collapsible-checkboxLabel u-text--bold"
                                                                for="area-1000000">
                                                                <input type="checkbox" name="area[]" id="area-1000000" value="1000000" class="Checkbox jsSearchAreaCheckbox" data-area="1000000" data-area-name="All New Jersey" data-children-ids="1003000,856000,1005000,862000,869000,1009000,1010000,1004000,1001000,1011000,1007000,1012000,1006000,1008000,1013000" />
                                                                All New Jersey
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1003000">
                                                                <input type="checkbox" name="area[]" id="area-1003000" value="1003000" class="Checkbox jsSearchAreaCheckbox" data-area="1003000" data-area-name="Bayonne" data-parent-id="1000000" data-children-ids="" />
                                                                Bayonne
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-856000">
                                                                <input type="checkbox" name="area[]" id="area-856000" value="856000" class="Checkbox jsSearchAreaCheckbox" data-area="856000" data-area-name="Cliffside Park" data-parent-id="1000000" data-children-ids="" />
                                                                Cliffside Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1005000">
                                                                <input type="checkbox" name="area[]" id="area-1005000" value="1005000" class="Checkbox jsSearchAreaCheckbox" data-area="1005000" data-area-name="East Newark" data-parent-id="1000000" data-children-ids="" />
                                                                East Newark
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-862000">
                                                                <input type="checkbox" name="area[]" id="area-862000" value="862000" class="Checkbox jsSearchAreaCheckbox" data-area="862000" data-area-name="Edgewater" data-parent-id="1000000" data-children-ids="" />
                                                                Edgewater
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-869000">
                                                                <input type="checkbox" name="area[]" id="area-869000" value="869000" class="Checkbox jsSearchAreaCheckbox" data-area="869000" data-area-name="Fort Lee" data-parent-id="1000000" data-children-ids="" />
                                                                Fort Lee
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1009000">
                                                                <input type="checkbox" name="area[]" id="area-1009000" value="1009000" class="Checkbox jsSearchAreaCheckbox" data-area="1009000" data-area-name="Guttenberg" data-parent-id="1000000" data-children-ids="" />
                                                                Guttenberg
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1010000">
                                                                <input type="checkbox" name="area[]" id="area-1010000" value="1010000" class="Checkbox jsSearchAreaCheckbox" data-area="1010000" data-area-name="Harrison" data-parent-id="1000000" data-children-ids="" />
                                                                Harrison
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1004000">
                                                                <input type="checkbox" name="area[]" id="area-1004000" value="1004000" class="Checkbox jsSearchAreaCheckbox" data-area="1004000" data-area-name="Hoboken" data-parent-id="1000000" data-children-ids="" />
                                                                Hoboken
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1001000">
                                                                <input type="checkbox" name="area[]" id="area-1001000" value="1001000" class="Checkbox jsSearchAreaCheckbox" data-area="1001000" data-area-name="Jersey City" data-parent-id="1000000" data-children-ids="1117008,1001150,1001600,1117007,1001400,1001250,1002100" />
                                                                Jersey City
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-1117008">
                                                                <input type="checkbox" name="area[]" id="area-1117008" value="1117008" class="Checkbox jsSearchAreaCheckbox" data-area="1117008" data-area-name="Bergen/Lafayette" data-parent-id="1001000" data-children-ids="" />
                                                                Bergen/Lafayette
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-1001150">
                                                                <input type="checkbox" name="area[]" id="area-1001150" value="1001150" class="Checkbox jsSearchAreaCheckbox" data-area="1001150" data-area-name="Historic Downtown" data-parent-id="1001000" data-children-ids="" />
                                                                Historic Downtown
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-1001600">
                                                                <input type="checkbox" name="area[]" id="area-1001600" value="1001600" class="Checkbox jsSearchAreaCheckbox" data-area="1001600" data-area-name="Journal Square" data-parent-id="1001000" data-children-ids="" />
                                                                Journal Square
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-1117007">
                                                                <input type="checkbox" name="area[]" id="area-1117007" value="1117007" class="Checkbox jsSearchAreaCheckbox" data-area="1117007" data-area-name="Newport" data-parent-id="1001000" data-children-ids="" />
                                                                Newport
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-1001400">
                                                                <input type="checkbox" name="area[]" id="area-1001400" value="1001400" class="Checkbox jsSearchAreaCheckbox" data-area="1001400" data-area-name="The Heights" data-parent-id="1001000" data-children-ids="" />
                                                                The Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-1001250">
                                                                <input type="checkbox" name="area[]" id="area-1001250" value="1001250" class="Checkbox jsSearchAreaCheckbox" data-area="1001250" data-area-name="Waterfront" data-parent-id="1001000" data-children-ids="1001270" />
                                                                Waterfront
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level4">
                                                            <label class="Collapsible-checkboxLabel" for="area-1001270">
                                                                <input type="checkbox" name="area[]" id="area-1001270" value="1001270" class="Checkbox jsSearchAreaCheckbox" data-area="1001270" data-area-name="Paulus Hook" data-parent-id="1001250" data-children-ids="" />
                                                                Paulus Hook
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-1002100">
                                                                <input type="checkbox" name="area[]" id="area-1002100" value="1002100" class="Checkbox jsSearchAreaCheckbox" data-area="1002100" data-area-name="West Side" data-parent-id="1001000" data-children-ids="" />
                                                                West Side
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1011000">
                                                                <input type="checkbox" name="area[]" id="area-1011000" value="1011000" class="Checkbox jsSearchAreaCheckbox" data-area="1011000" data-area-name="Kearny" data-parent-id="1000000" data-children-ids="" />
                                                                Kearny
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1007000">
                                                                <input type="checkbox" name="area[]" id="area-1007000" value="1007000" class="Checkbox jsSearchAreaCheckbox" data-area="1007000" data-area-name="North Bergen" data-parent-id="1000000" data-children-ids="" />
                                                                North Bergen
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1012000">
                                                                <input type="checkbox" name="area[]" id="area-1012000" value="1012000" class="Checkbox jsSearchAreaCheckbox" data-area="1012000" data-area-name="Secaucus" data-parent-id="1000000" data-children-ids="" />
                                                                Secaucus
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1006000">
                                                                <input type="checkbox" name="area[]" id="area-1006000" value="1006000" class="Checkbox jsSearchAreaCheckbox" data-area="1006000" data-area-name="Union City" data-parent-id="1000000" data-children-ids="" />
                                                                Union City
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1008000">
                                                                <input type="checkbox" name="area[]" id="area-1008000" value="1008000" class="Checkbox jsSearchAreaCheckbox" data-area="1008000" data-area-name="Weehawken" data-parent-id="1000000" data-children-ids="" />
                                                                Weehawken
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-1013000">
                                                                <input type="checkbox" name="area[]" id="area-1013000" value="1013000" class="Checkbox jsSearchAreaCheckbox" data-area="1013000" data-area-name="West New York" data-parent-id="1000000" data-children-ids="" />
                                                                West New York
                                                            </label>
                                                        </div>

                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>



                                <button
                                    class="SearchAreasDropdown-searchButton u-hidden jsSearchAreaDropdownSearchButton"
                                    type="button">
                                    Search for <span class="SearchAreasDropdown-searchButtonText jsSearchAreaDropdownSearchButtonText"></span>
                                </button>
                            </div>



{{--                            <div class="SearchAreasDropdown jsSearchAreaDropdown">--}}
{{--                                <div class="SearchAreasDropdown-textInputContainer jsSearchAreaInputContainer">--}}
{{--                                    <div class="SearchAreasDropdown-selectedAreas jsSearchAreaSelectedAreas">--}}
{{--                                        <input--}}
{{--                                            class="SearchAreasDropdown-textInput jsSearchAreaInput"--}}
{{--                                            type="text"--}}
{{--                                            placeholder="Neighborhood, Address, Building, Keyword"--}}
{{--                                            autocomplete="off"--}}
{{--                                        />--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="SearchAreasDropdown-areasListContainer">--}}
{{--                                    <ul class="Collapsible jsCollapsible">--}}
{{--                                        <li class="jsTrigger">--}}
{{--                                            <div class="Collapsible-checkbox jsSearchAreaItem jsSearchAllItem">--}}
{{--                                                <label--}}
{{--                                                    class="Collapsible-checkboxLabel"--}}
{{--                                                    for="area-1">--}}
{{--                                                    <input type="checkbox"class="Checkbox jsSearchAreaCheckbox jsCheckAll"  data-area-name="All States" />--}}
{{--                                                    Search All (NYC and NJ&nbsp;<span class="u-color-brightBlue u-italic">New!</span>)--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}

{{--                                        <?php--}}
{{--                                        $count = 0;--}}
{{--                                        $count2 = 0;--}}
{{--                                        ?>--}}


{{--                                        @foreach($data as $datum)--}}
{{--                                        <li class="jsTrigger">--}}

{{--                                            <div--}}

{{--                                                class="Collapsible-trigger jsCollapsibleTrigger jsSearchAreaItem"--}}
{{--                                                data-collapsible-trigger-area="{{$datum->state}}">--}}
{{--                                                {{$datum->state}}--}}
{{--                                                <span class="Collapsible-triggerIcon">--}}
{{--          <i class="fa fa-angle-down u-text--bold"></i>--}}
{{--        </span>--}}
{{--                                            </div>--}}
{{--                                            <div class="Collapsible-body">--}}
{{--                                                <ul>--}}
{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <?php--}}
{{--                                                                $count++;--}}
{{--                                                            ?>--}}
{{--                                                            <label--}}
{{--                                                                class="Collapsible-checkboxLabel"--}}
{{--                                                                for="area-{{$count}}">--}}
{{--                                                                <input type="checkbox" name="state[]" id="checkall{{$count}}" value="500" class="Checkbox jsSearchAreaCheckbox " data-area="{{$count}}" data-area-name="All {{$datum->state}}" />--}}
{{--                                                                All {{$datum->state}}--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    @foreach($datum->city as $citt)--}}
{{--                                                        <?php--}}
{{--                                                        $count2++;--}}
{{--                                                        ?>--}}
{{--                                                        <li class="jsCollapsibleChild">--}}
{{--                                                            <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">--}}
{{--                                                                <label class="Collapsible-checkboxLabel" for="">--}}
{{--                                                                    <input type="checkbox" name="area[]" id="checkall{{$count2}}" value="514" class="Checkbox jsSearchAreaCheckbox" data-area="{{$count2}}" data-area-name="{{$citt}}" data-parent-id="checkall{{$count}}">--}}
{{--                                                                    {{$citt}}--}}
{{--                                                                </label>--}}
{{--                                                            </div>--}}

{{--                                                        </li>--}}
{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel"--}}
{{--                                                                   for="area-1">--}}
{{--                                                                <input type="checkbox" name="city[]" value="{{$citt}}" class="Checkbox{{$count}} jsSearchAreaCheckbox " data-area="503" data-area-name="East Shore" data-parent-id="{{$count}}"  />--}}
{{--                                                                {{$citt}}--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}
{{--                                                          @endforeach--}}







{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                        @endforeach--}}
{{--                                        <input type="hidden" value="{{$count}}" id="cont">--}}
{{--                                        <li class="jsTrigger">--}}
{{--                                            <div--}}
{{--                                                class="Collapsible-trigger jsCollapsibleTrigger jsSearchAreaItem"--}}
{{--                                                data-collapsible-trigger-area="New Jersey">--}}
{{--          <span>--}}
{{--            New Jersey <span class="u-color-brightBlue u-italic u-text--normal u-capitalize">New!</span>--}}
{{--          </span>--}}
{{--                                                <span class="Collapsible-triggerIcon">--}}
{{--          <i class="fa fa-angle-down u-text--bold"></i>--}}
{{--        </span>--}}
{{--                                            </div>--}}
{{--                                            <div class="Collapsible-body">--}}
{{--                                                <ul>--}}
{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem">--}}
{{--                                                            <label--}}
{{--                                                                class="Collapsible-checkboxLabel u-text--bold"--}}
{{--                                                                for="area-1000000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1000000" value="1000000" class="Checkbox jsSearchAreaCheckbox" data-area="1000000" data-area-name="All New Jersey" data-children-ids="1003000,856000,1005000,862000,869000,1009000,1010000,1004000,1001000,1011000,1007000,1012000,1006000,1008000,1013000" />--}}
{{--                                                                All New Jersey--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1003000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1003000" value="1003000" class="Checkbox jsSearchAreaCheckbox" data-area="1003000" data-area-name="Bayonne" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                Bayonne--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-856000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-856000" value="856000" class="Checkbox jsSearchAreaCheckbox" data-area="856000" data-area-name="Cliffside Park" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                Cliffside Park--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1005000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1005000" value="1005000" class="Checkbox jsSearchAreaCheckbox" data-area="1005000" data-area-name="East Newark" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                East Newark--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-862000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-862000" value="862000" class="Checkbox jsSearchAreaCheckbox" data-area="862000" data-area-name="Edgewater" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                Edgewater--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-869000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-869000" value="869000" class="Checkbox jsSearchAreaCheckbox" data-area="869000" data-area-name="Fort Lee" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                Fort Lee--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1009000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1009000" value="1009000" class="Checkbox jsSearchAreaCheckbox" data-area="1009000" data-area-name="Guttenberg" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                Guttenberg--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1010000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1010000" value="1010000" class="Checkbox jsSearchAreaCheckbox" data-area="1010000" data-area-name="Harrison" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                Harrison--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1004000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1004000" value="1004000" class="Checkbox jsSearchAreaCheckbox" data-area="1004000" data-area-name="Hoboken" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                Hoboken--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1001000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1001000" value="1001000" class="Checkbox jsSearchAreaCheckbox" data-area="1001000" data-area-name="Jersey City" data-parent-id="1000000" data-children-ids="1117008,1001150,1001600,1117007,1001400,1001250,1002100" />--}}
{{--                                                                Jersey City--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}
{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1117008">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1117008" value="1117008" class="Checkbox jsSearchAreaCheckbox" data-area="1117008" data-area-name="Bergen/Lafayette" data-parent-id="1001000" data-children-ids="" />--}}
{{--                                                                Bergen/Lafayette--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1001150">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1001150" value="1001150" class="Checkbox jsSearchAreaCheckbox" data-area="1001150" data-area-name="Historic Downtown" data-parent-id="1001000" data-children-ids="" />--}}
{{--                                                                Historic Downtown--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1001600">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1001600" value="1001600" class="Checkbox jsSearchAreaCheckbox" data-area="1001600" data-area-name="Journal Square" data-parent-id="1001000" data-children-ids="" />--}}
{{--                                                                Journal Square--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1117007">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1117007" value="1117007" class="Checkbox jsSearchAreaCheckbox" data-area="1117007" data-area-name="Newport" data-parent-id="1001000" data-children-ids="" />--}}
{{--                                                                Newport--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1001400">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1001400" value="1001400" class="Checkbox jsSearchAreaCheckbox" data-area="1001400" data-area-name="The Heights" data-parent-id="1001000" data-children-ids="" />--}}
{{--                                                                The Heights--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1001250">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1001250" value="1001250" class="Checkbox jsSearchAreaCheckbox" data-area="1001250" data-area-name="Waterfront" data-parent-id="1001000" data-children-ids="1001270" />--}}
{{--                                                                Waterfront--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}
{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level4">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1001270">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1001270" value="1001270" class="Checkbox jsSearchAreaCheckbox" data-area="1001270" data-area-name="Paulus Hook" data-parent-id="1001250" data-children-ids="" />--}}
{{--                                                                Paulus Hook--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}


{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1002100">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1002100" value="1002100" class="Checkbox jsSearchAreaCheckbox" data-area="1002100" data-area-name="West Side" data-parent-id="1001000" data-children-ids="" />--}}
{{--                                                                West Side--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}


{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1011000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1011000" value="1011000" class="Checkbox jsSearchAreaCheckbox" data-area="1011000" data-area-name="Kearny" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                Kearny--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1007000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1007000" value="1007000" class="Checkbox jsSearchAreaCheckbox" data-area="1007000" data-area-name="North Bergen" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                North Bergen--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1012000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1012000" value="1012000" class="Checkbox jsSearchAreaCheckbox" data-area="1012000" data-area-name="Secaucus" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                Secaucus--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1006000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1006000" value="1006000" class="Checkbox jsSearchAreaCheckbox" data-area="1006000" data-area-name="Union City" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                Union City--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1008000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1008000" value="1008000" class="Checkbox jsSearchAreaCheckbox" data-area="1008000" data-area-name="Weehawken" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                Weehawken--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                    <li class="jsCollapsibleChild">--}}
{{--                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">--}}
{{--                                                            <label class="Collapsible-checkboxLabel" for="area-1013000">--}}
{{--                                                                <input type="checkbox" name="area[]" id="area-1013000" value="1013000" class="Checkbox jsSearchAreaCheckbox" data-area="1013000" data-area-name="West New York" data-parent-id="1000000" data-children-ids="" />--}}
{{--                                                                West New York--}}
{{--                                                            </label>--}}
{{--                                                        </div>--}}

{{--                                                    </li>--}}

{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}



{{--                                <button--}}
{{--                                    class="SearchAreasDropdown-searchButton u-hidden jsSearchAreaDropdownSearchButton"--}}
{{--                                    type="button" style="display: none !important;">--}}
{{--                                    Search for <span class="SearchAreasDropdown-searchButtonText jsSearchAreaDropdownSearchButtonText"></span>--}}
{{--                                </button>--}}
{{--                            </div>--}}





                            <input type="hidden" name="beds" id="beds" value="" class="jsBedsValue" />




                        </div>
                    </div>

                    <div class="Home-searchRange Home-searchField">
                        <div class="Home-searchRangeInput">
                            <select
                                id="price_from"
                                class="Home-searchRangeSelect jsPriceSelect isEmpty"
                                name="price_from"
                                se:behavior="support_custom_value"
                                data-nochangeonload>
                                <option disabled="disabled" selected="selected" name="price" value="">$ Minimum</option>
                                <option value="any">Any</option>
                                <option value="Custom" class="show_input">&raquo; Custom</option>
                                <option value="100000">$100,000</option>
                                <option value="150000">$150,000</option>
                                <option value="200000">$200,000</option>
                                <option value="250000">$250,000</option>
                                <option value="300000">$300,000</option>
                                <option value="400000">$400,000</option>
                                <option value="500000">$500,000</option>
                                <option value="600000">$600,000</option>
                                <option value="700000">$700,000</option>
                                <option value="750000">$750,000</option>
                                <option value="800000">$800,000</option>
                                <option value="900000">$900,000</option>
                                <option value="1000000">$1,000,000</option>
                                <option value="1250000">$1,250,000</option>
                                <option value="1500000">$1,500,000</option>
                                <option value="1750000">$1,750,000</option>
                                <option value="2000000">$2,000,000</option>
                                <option value="2250000">$2,250,000</option>
                                <option value="2500000">$2,500,000</option>
                                <option value="2750000">$2,750,000</option>
                                <option value="3000000">$3,000,000</option>
                                <option value="3500000">$3,500,000</option>
                                <option value="4000000">$4,000,000</option>
                                <option value="4500000">$4,500,000</option>
                                <option value="5000000">$5,000,000</option>
                                <option value="6000000">$6,000,000</option>
                                <option value="7000000">$7,000,000</option>
                                <option value="8000000">$8,000,000</option>
                                <option value="9000000">$9,000,000</option>
                                <option value="10000000">$10,000,000</option>
                                <option value="12000000">$12,000,000</option>
                                <option value="14000000">$14,000,000</option>
                                <option value="16000000">$16,000,000</option>
                                <option value="20000000">$20,000,000</option>
                                <option value="25000000">$25,000,000</option>
                                <option value="30000000">$30,000,000</option>
                            </select>
                            <input
                                type="text"
                                class="InputText Home-searchRangeCustom"
                                id="price_from_ignore"
                                data-nochangeonload
                                name="price_from_ignore"
                                value="$0"
                                se:behavior="comma_separatable"
                                style="display: none;"
                            />
                        </div>
                        <div class="Home-searchRangeInput">
                            <select
                                class="Home-searchRangeSelect jsPriceSelect isEmpty"
                                id="price_to"
                                name="price_to"
                                se:behavior="support_custom_value"
                                data-nochangeonload>
                                <option disabled="disabled" selected="selected" value="">$ Maximum</option>
                                <option value="">Any</option>
                                <option value="Custom">&raquo; Custom</option>
                                <option value="100000">$100,000</option>
                                <option value="150000">$150,000</option>
                                <option value="200000">$200,000</option>
                                <option value="250000">$250,000</option>
                                <option value="300000">$300,000</option>
                                <option value="400000">$400,000</option>
                                <option value="500000">$500,000</option>
                                <option value="600000">$600,000</option>
                                <option value="700000">$700,000</option>
                                <option value="750000">$750,000</option>
                                <option value="800000">$800,000</option>
                                <option value="900000">$900,000</option>
                                <option value="1000000">$1,000,000</option>
                                <option value="1250000">$1,250,000</option>
                                <option value="1500000">$1,500,000</option>
                                <option value="1750000">$1,750,000</option>
                                <option value="2000000">$2,000,000</option>
                                <option value="2250000">$2,250,000</option>
                                <option value="2500000">$2,500,000</option>
                                <option value="2750000">$2,750,000</option>
                                <option value="3000000">$3,000,000</option>
                                <option value="3500000">$3,500,000</option>
                                <option value="4000000">$4,000,000</option>
                                <option value="4500000">$4,500,000</option>
                                <option value="5000000">$5,000,000</option>
                                <option value="6000000">$6,000,000</option>
                                <option value="7000000">$7,000,000</option>
                                <option value="8000000">$8,000,000</option>
                                <option value="9000000">$9,000,000</option>
                                <option value="10000000">$10,000,000</option>
                                <option value="12000000">$12,000,000</option>
                                <option value="14000000">$14,000,000</option>
                                <option value="16000000">$16,000,000</option>
                                <option value="20000000">$20,000,000</option>
                                <option value="25000000">$25,000,000</option>
                                <option value="30000000">$30,000,000</option>
                            </select>
                            <input
                                class="InputText Home-searchRangeCustom"
                                type="text"
                                id="price_to_ignore"
                                data-nochangeonload
                                name="price_to_ignore"
                                value="$0"
                                se:behavior="comma_separatable"
                                style="display: none"
                            />
                        </div>
                    </div>

                    <div class="Home-searchBeds Home-searchField">
                        <div class="CheckboxGroup Home-searchBedsSelects jsBedsSelection">

                            <label class="CheckboxGroup-label Home-searchBedsLabel" for="search-studio">
                                <span class="CheckboxGroup-copy">Studio</span>
                            </label>
                            <input id="search-1"
                                   class="CheckboxGroup-input jsBedsInput isLeft"
                                   value="1"
                                   type="checkbox"
                                   name="studio[]"


                            />
                            <label class="CheckboxGroup-label Home-searchBedsLabel  " for="search-1">
                                <span class="CheckboxGroup-copy">1</span>
                            </label>
                            <input id="search-2"
                                   class="CheckboxGroup-input jsBedsInput isRight"
                                   value="2"
                                   type="checkbox"
                                   name="studio[]"

                            />
                            <label class="CheckboxGroup-label Home-searchBedsLabel" for="search-2">
                                <span class="CheckboxGroup-copy">2</span>
                            </label>
                            <input id="search-3"
                                   class="CheckboxGroup-input jsBedsInput isRight"
                                   value="3"
                                   name="studio[]"
                                   type="checkbox"

                            />
                            <label class="CheckboxGroup-label Home-searchBedsLabel" for="search-3">
                                <span class="CheckboxGroup-copy">3</span>
                            </label>
                            <input id="search-4+"
                                   class="CheckboxGroup-input jsBedsInput isRight"
                                   value="4"
                                   name="studio[]"
                                   type="checkbox"

                            />
                            <label class="CheckboxGroup-label Home-searchBedsLabel" for="search-4+">
                                <span class="CheckboxGroup-copy" >4+</span>
                            </label>

                        </div>
                        <input type="hidden" name="beds" id="beds" value="" class="jsBedsValue" />

                        <div class="Home-searchBox Home-searchBox--mWebColumn">
                            <div class="Home-virtualView">
                                <div class="Home-virtualViewTooltip">
                                    <div class="Home-virtualViewTitle">VIRTUAL VIEWING</div>
                                    <div class="Home-virtualViewTooltipBox jsVirtualViewTooltip u-displayNone">
                                        <div class="Home-virtualViewTooltipClose jsCloseVirtualViewTooltip"></div>
                                        <div class="Home-virtualViewTooltipTiangle"></div>
                                        <b>New ways to view</b>
                                        <p class="Text Text--disclaimer u-color-pureBlack">Filter to see only listings that have virtual viewing options.</p>
                                    </div>
                                </div>
                                <div class="Home-virtualViewInputBox">
                                    <div class="CheckBox">
                                        <input type="checkbox" name="has_videos" id="has_videos" value="1" class="CheckBox-input" data-nochangeonload="" />
                                        <label class="CheckBox-label CheckBox-label--outsideInput"
                                               for="has_videos">
                                            <span class="Home-virtualViewVideo">Video</span>
                                        </label>
                                    </div>
                                    <div class="CheckBox">
                                        <input type="checkbox" name="has_3d_tour" id="has_3d_tour" value="1" class="CheckBox-input" data-nochangeonload="" />
                                        <label class="CheckBox-label CheckBox-label--outsideInput"
                                               for="has_3d_tour">
                                            <span class="Home-virtualView3DTourIcon">3D tour</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="Home-searchSubmit Home-searchField">
                        <button type="submit"
                                class="Button Button--classicBlue"
                                data-gtm-event-category="sales_homepage"
                                data-gtm-event-action="search_form"
                                data-gtm-event-label="submit"
                                data-gtm-event-value="">
                            Search
                        </button>


                    </div>
                </div>



            </div>


            <div class="Home-advancedSearch SearchCriteria">
                <div class="se-advancedToggle"  data-toggle="collapse" data-target="#demo" style="display: block;">
                    <a href="javascript:void(0)" class="Home-advancedSearchLink"  style="cursor: pointer;">+ Advanced Options</a>
                </div>

                <div class="se-advancedToggle">
                    <a href="javascript:void(0)" class="Home-advancedSearchLink" data-toggle="collapse" data-target="#demo" style="cursor: pointer;display: none;">- Basic Options</a>
                </div>

                <div class="SearchCriteria-advancedOptions collapse se-advancedToggle" se:togglable:animation="slide" id="demo">
                    <div se:behavior="loadable:with_slide andale_coordinatable coordinated" se:coordinator="criteria_expander" se:url="/nyc/process/sales/search_fields?context=sale&amp;criteria=&amp;criteria_group=below_fold&amp;location=homepage" rel="nofollow" se:loaded="true" style="display: block;">
                        <div class="SearchCriteria-row SearchCriteria-row--borderBottom is_nyc_site"><div class="SearchCriteria-type below_fold">
                                <div class="TypeCriteria">
                                    <label class="SearchCriteria-label">Type</label>
                                    <select data-placeholder="e.g. Condo or Co-op" name="type[]" multiple="true" class="SearchCriteria-select multiselect DefaultField" style="display: none;">
                                        <option value="D1">Condos</option>
                                        <option value="P1">Co-ops</option>
                                        <option value="X">Houses</option>
                                        <option value="M">Multi-families</option>
                                        <option value="Y">Timeshares</option>
                                        <option value="A">Land</option>
                                        <option value="?">Other</option>
                                        <option value="Z">Auctions</option>
                                    </select><div class="btn-group" style="width: 100%;"><button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="Any" style="width: 100%;">Any <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><li class=""><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" name="multiselect" value="D1"> Condos</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" name="multiselect" value="P1"> Co-ops</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" name="multiselect" value="X"> Houses</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" name="multiselect" value="M"> Multi-families</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" name="multiselect" value="Y"> Timeshares</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" name="multiselect" value="A"> Land</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" name="multiselect" value="?"> Other</label></a></li><li><a href="javascript:void(0);"><label class="checkbox"><input type="checkbox" name="multiselect" value="Z"> Auctions</label></a></li></ul></div>
                                </div>
                            </div>

                            <div id="baths" class="SearchCriteria-baths below_fold">
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
                        </div><div class="SearchCriteria-row bed_bath_sqft SearchCriteria-row--borderBottom is_nyc_site">
                            <div id="status" class="SearchCriteria-status">
                                <div class="StatusCriteria">
                                    <label class="SearchCriteria-label" for="status">Status</label>
                                    <div class="SearchCriteria-ellipsis jsSearchCriteriaEllipsis" data-select="ellipsis">
                                        <select class="SearchCriteria-select DefaultField" name="status" id="status">
                                            <option value="listed">Include all active listings</option>
                                            <option selected="selected" value="open">Exclude in-contract listings</option>
                                            <option value="pending">Include only listings in contract</option>
                                            <option value="closed">Include only sold and unavailable listings</option>
                                            <option value="sold">Include only sold listings</option>
                                        </select>
                                        <div class="SearchCriteria-selectWrap" data-select-box="true" style="color: #fff;">Exclude in-contract listings</div></div>
                                </div>
                            </div>

                            <script src="//cdn-assets-s3.streeteasy.com/assets/scripts/dynamic/status_field-90fbf68dcd9426291cd3552f0923719e5bcd58ced04486e3e7ef122d8e879376.js"></script>

                            <div id="sqft" class="SearchCriteria-sqFt">
                                <div class="SqFtCriteria">
                                    <label class="SearchCriteria-label" for="sqft">Square Feet</label>

                                    <select class="SearchCriteria-select DefaultField jsSquareFootageSelect" name="sqft" id="sqft">
                                        <option value="">Any</option>
                                        <option value=">=500">500+</option>
                                        <option value=">=600">600+</option>
                                        <option value=">=700">700+</option>
                                        <option value=">=800">800+</option>
                                        <option value=">=900">900+</option>
                                        <option value=">=1000">1000+</option>
                                        <option value=">=1250">1250+</option>
                                        <option value=">=1500">1500+</option>
                                        <option value=">=2000">2000+</option>
                                        <option value=">=2500">2500+</option>
                                        <option value=">=3000">3000+</option>
                                        <option value=">=3500">3500+</option>
                                        <option value=">=4000">4000+</option>
                                        <option value=">=5000">5000+</option>
                                    </select>

                                    <div class="SqFtCriteria-includeUnknownCheckbox jsSquareFootageIncludeUnknownCheckbox isHidden">
                                        <input class="SqFtCriteria-checkbox DefaultCheckbox" type="checkbox" name="sqft_unknown" value="1" id="sqft_unknown">
                                        <label class="SqFtCriteria-label" for="sqft_unknown">
                                            include unknown
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div><div class="SearchCriteria-row bed_bath_sqft SearchCriteria-row--borderBottom is_nyc_site"><div class="SearchCriteria-tourOptions">
                                <div class="TourOptionsCriteria">
                                    <label class="SearchCriteria-label">Tour options</label>

                                    <div class="TourOptionsCriteria-option">
                                        <label for="has_video_chat_tour" class="TourOptionsCriteria-label">
                                            <input type="checkbox" name="has_video_chat_tour" id="has_video_chat_tour" value="1" class="TourOptionsCriteria-checkbox DefaultCheckbox">
                                            Video chat
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="SearchCriteria-openHouse">
                                <div class="OpenHouseCriteria">
                                    <label class="SearchCriteria-label" for="open_house">Open House</label>
                                    <select name="open_house" id="open_house" class="SearchCriteria-select DefaultField"><option value="">Ignore</option>
                                        <option value="<0">Today</option>
                                        <option value="<1">Tomorrow</option>
                                        <option value="<2">In the next 2 days</option>
                                        <option value="<4">In the next 4 days</option>
                                        <option value="<7">In the next 7 days</option></select>
                                </div>
                            </div>
                        </div><div class="SearchCriteria-row boundary SearchCriteria-row--borderBottom">
                            <div class="SearchCriteria-boundary">
                                <div class="BoundaryCriteria">
                                    <label class="SearchCriteria-label">Custom Boundary</label>

                                    <div class="BoundaryCriteria-selectors">
                                        <div id="boundary_selector" class="BoundaryCriteria-selector">
                                            <select name="saved_boundary" id="saved_boundary" se:custom_boundary_default="None" se:custom_boundary_field="#form_boundary_field" se:behavior="custom_boundary_select" se:custom_boundary_select:form_map_elem="form_boundary_map" class="DefaultField"><option value="None">None</option></select>


                                        </div>

                                        <div id="boundary_editor" class="BoundaryCriteria-editor">

                                            <div class="field_container field_container_boundary" se:behavior="load_map">
                                                <span id="form_boundary_label"></span>

                                                <a rel="nofollow" class="form_boundary_link" data-modal-live="true" data-toggle="modal" data-modal-source="/nyc/process/sales/boundary_editor_dialog?criteria=%7B%7D&amp;encoded=false" href="#"><img data-analytics-type="click" data-analytics-name="clickCreateCustomBoundary" src=""></a>

                                                <div se:behavior="map" id="form_boundary_map" class="map u-top-0 leaflet-container leaflet-touch leaflet-fade-anim" style="height: 107px; width: 189px; position: relative;" se:map:static="true" se:map:zoom="15" se:map:min_zoom="12" se:map:max_zoom="19" se:map:center_latlon="40.73921,-73.99034" se:map:center_around="all" se:map:mapbox="streeteasy.4f8c9dd3" tabindex="0">




                                                </div>



                                                <input type="hidden" name="boundary" id="form_boundary_field" value="">
                                            </div>

                                            <a data-modal-class="modal-boundary" data-modal-live="true" data-analytics-type="click" data-analytics-name="clickCreateCustomBoundary" class="BoundaryCriteria-link" rel="nofollow" data-toggle="modal" data-modal-source="#" href="#">Create a new boundary</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><div class="SearchCriteria-row SearchCriteria-row--borderBottom SearchCriteria-row--paddingBottom15">
                            <div class="SearchCriteria-amenities">
                                <div class="AmenitiesCriteria">
                                    <label class="SearchCriteria-label">
                                        Listing amenities      </label>

                                    <ul class="AmenitiesCriteria-list">
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[dishwasher]" id="amenities_dishwasher" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_dishwasher">
                                                    Dishwasher
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[fireplace]" id="amenities_fireplace" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_fireplace">
                                                    Fireplace
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[furnished]" id="amenities_furnished" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_furnished">
                                                    Furnished
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[loft]" id="amenities_loft" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_loft">
                                                    Loft
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[outdoor_space]" id="amenities_outdoor_space" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_outdoor_space">
                                                    Public or Private Outdoor Space
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[storage]" id="amenities_storage" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_storage">
                                                    Storage Available
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[washer_dryer]" id="amenities_washer_dryer" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_washer_dryer">
                                                    Washer/Dryer In-Unit
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="SearchCriteria-amenities">
                                <div class="AmenitiesCriteria">
                                    <label class="SearchCriteria-label">
                                        Building amenities      </label>

                                    <ul class="AmenitiesCriteria-list">
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[doorman]" id="amenities_doorman" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_doorman">
                                                    Doorman
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[elevator]" id="amenities_elevator" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_elevator">
                                                    Elevator
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[fios_available]" id="amenities_fios_available" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_fios_available">
                                                    Verizon FiOS Enabled
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[garage]" id="amenities_garage" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_garage">
                                                    Garage Parking
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[gym]" id="amenities_gym" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_gym">
                                                    Gym
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[laundry]" id="amenities_laundry" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_laundry">
                                                    Laundry in Building
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[leed_registered]" id="amenities_leed_registered" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_leed_registered">
                                                    Green Building
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[parking]" id="amenities_parking" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_parking">
                                                    Parking Available
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[pets]" id="amenities_pets" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_pets">
                                                    Pets Allowed
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[pied_a_terre]" id="amenities_pied_a_terre" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_pied_a_terre">
                                                    Pied-a-Terre Allowed
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[pool]" id="amenities_pool" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_pool">
                                                    Swimming Pool
                                                </label>
                                            </div>
                                        </li>
                                        <li class="AmenitiesCriteria-listItem">
                                            <div class="Amenity">
                                                <input type="checkbox" name="amenities[smoke_free]" id="amenities_smoke_free" value="1" class="Amenity-checkbox DefaultCheckbox">

                                                <label class="Amenity-label" for="amenities_smoke_free">
                                                    Smoke-free
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div><div class="SearchCriteria-row SearchCriteria-row--borderBottom is_nyc_site"><div class="SearchCriteria-description">
                                <div class="DescriptionCriteria">
                                    <label class="SearchCriteria-label">Description</label>
                                    <input type="text" name="description" id="description" size="30" placeholder="Description includes..." class="DescriptionCriteria-inputText SearchCriteria-input DefaultField">
                                </div>
                            </div>
                        </div><div class="SearchCriteria-row property_type is_nyc_site SearchCriteria-row--borderBottom"><h5 class="SearchCriteria-header">Property Types</h5>
                            <div class="SearchCriteria-preWar">
                                <div class="PreWarCriteria">
                                    <label class="SearchCriteria-label" for="pre_war">Pre-war</label>

                                    <select name="pre_war" class="SearchCriteria-select DefaultField">
                                        <option value="">In All Buildings</option>
                                        <option value="yes">Only Pre-War Buildings</option>
                                        <option value="no">Exclude Pre-War Buildings</option>
                                    </select>
                                </div>
                            </div>

                            <div class="SearchCriteria-newDevelopments">
                                <div class="NewDevelopmentsCriteria">
                                    <label class="SearchCriteria-label" for="new_developments">New Developments</label>

                                    <select name="new_developments" class="SearchCriteria-select DefaultField">
                                        <option value="">In All Buildings</option>
                                        <option value="new development">Only in New Buildings</option>
                                        <option value="completed">Exclude New Buildings</option>
                                    </select>
                                </div>
                            </div>

                            <div class="SearchCriteria-incomeRestricted">
                                <div class="IncomeRestrictedCriteria">
                                    <label class="SearchCriteria-label">Income Restricted</label>

                                    <select class="SearchCriteria-select DefaultField" name="income_restricted">
                                        <option value="">Don't care</option>
                                        <option value="yes">Only income restricted listings</option>
                                        <option value="no">Exclude income restricted listings</option>
                                    </select>
                                </div>
                            </div>
                        </div><div class="SearchCriteria-row ">
                            <div class="SearchCriteria-maintenance">
                                <div class="MaintenanceCriteria">
                                    <label class="SearchCriteria-label">Maintenance</label>

                                    <div id="maintenance_le_container" class="MaintenanceCriteria-selector">
                                        <select class="SearchCriteria-select MaintenanceCriteria-select DefaultField" id="maintenance_le" name="maintenance_le" se:behavior="support_custom_value trigger_change_on_page_load">
                                            <option value="">Any</option>
                                            <option value="Custom">» Custom</option>
                                            <option value="500">up to $500</option>
                                            <option value="750">up to $750</option>
                                            <option value="1000">up to $1,000</option>
                                            <option value="1500">up to $1,500</option>
                                            <option value="2000">up to $2,000</option>
                                            <option value="2500">up to $2,500</option>
                                            <option value="3000">up to $3,000</option>
                                            <option value="4000">up to $4,000</option>
                                            <option value="5000">up to $5,000</option>
                                            <option value="6000">up to $6,000</option>
                                            <option value="7000">up to $7,000</option>
                                            <option value="8000">up to $8,000</option>
                                            <option value="9000">up to $9,000</option>
                                            <option value="10000">up to $10,000</option>
                                            <option value="15000">up to $15,000</option>
                                        </select>
                                    </div>

                                    <div id="maintenance_le_custom_container" class="tiny_top_margin float_right" style="display: none;">

                                        <span class="MaintenanceCriteria-text">Up to</span>

                                        <input class="SearchCriteria-input" type="text" id="maintenance_le_ignore" name="maintenance_le_ignore" se:behavior="comma_separatable" value="$0">
                                    </div>
                                </div>
                            </div>
                            <div class="SearchCriteria-taxes">
                                <div class="TaxesCriteria">
                                    <label class="SearchCriteria-label">Taxes</label>
                                    <select class="SearchCriteria-select DefaultField" name="taxes_le">
                                        <option value="">Any</option>
                                        <option value="500">up to $500</option>
                                        <option value="750">up to $750</option>
                                        <option value="1000">up to $1,000</option>
                                        <option value="1500">up to $1,500</option>
                                        <option value="2000">up to $2,000</option>
                                        <option value="2500">up to $2,500</option>
                                        <option value="3000">up to $3,000</option>
                                        <option value="4000">up to $4,000</option>
                                        <option value="5000">up to $5,000</option>
                                        <option value="6000">up to $6,000</option>
                                        <option value="7000">up to $7,000</option>
                                        <option value="8000">up to $8,000</option>
                                        <option value="9000">up to $9,000</option>
                                        <option value="10000">up to $10,000</option>
                                        <option value="15000">up to $15,000</option>
                                    </select>
                                </div>
                            </div>

                            <div class="SearchCriteria-yearBuilt">
                                <div class="YearBuiltCriteria">
                                    <label class="SearchCriteria-label">Year Built</label>

                                    <div class="YearBuiltCriteria-selectors">
                                        <div class="YearBuiltCriteria-selector">
                                            <select id="date_year" name="built_start_ignore" se:behavior="ignorable" se:ignorable:value_to_ignore="1900" class="SearchCriteria-select DefaultField">
                                                <option value="1900" selected="selected">1900</option>
                                                <option value="1901">1901</option>
                                                <option value="1902">1902</option>
                                                <option value="1903">1903</option>
                                                <option value="1904">1904</option>
                                                <option value="1905">1905</option>
                                                <option value="1906">1906</option>
                                                <option value="1907">1907</option>
                                                <option value="1908">1908</option>
                                                <option value="1909">1909</option>
                                                <option value="1910">1910</option>
                                                <option value="1911">1911</option>
                                                <option value="1912">1912</option>
                                                <option value="1913">1913</option>
                                                <option value="1914">1914</option>
                                                <option value="1915">1915</option>
                                                <option value="1916">1916</option>
                                                <option value="1917">1917</option>
                                                <option value="1918">1918</option>
                                                <option value="1919">1919</option>
                                                <option value="1920">1920</option>
                                                <option value="1921">1921</option>
                                                <option value="1922">1922</option>
                                                <option value="1923">1923</option>
                                                <option value="1924">1924</option>
                                                <option value="1925">1925</option>
                                                <option value="1926">1926</option>
                                                <option value="1927">1927</option>
                                                <option value="1928">1928</option>
                                                <option value="1929">1929</option>
                                                <option value="1930">1930</option>
                                                <option value="1931">1931</option>
                                                <option value="1932">1932</option>
                                                <option value="1933">1933</option>
                                                <option value="1934">1934</option>
                                                <option value="1935">1935</option>
                                                <option value="1936">1936</option>
                                                <option value="1937">1937</option>
                                                <option value="1938">1938</option>
                                                <option value="1939">1939</option>
                                                <option value="1940">1940</option>
                                                <option value="1941">1941</option>
                                                <option value="1942">1942</option>
                                                <option value="1943">1943</option>
                                                <option value="1944">1944</option>
                                                <option value="1945">1945</option>
                                                <option value="1946">1946</option>
                                                <option value="1947">1947</option>
                                                <option value="1948">1948</option>
                                                <option value="1949">1949</option>
                                                <option value="1950">1950</option>
                                                <option value="1951">1951</option>
                                                <option value="1952">1952</option>
                                                <option value="1953">1953</option>
                                                <option value="1954">1954</option>
                                                <option value="1955">1955</option>
                                                <option value="1956">1956</option>
                                                <option value="1957">1957</option>
                                                <option value="1958">1958</option>
                                                <option value="1959">1959</option>
                                                <option value="1960">1960</option>
                                                <option value="1961">1961</option>
                                                <option value="1962">1962</option>
                                                <option value="1963">1963</option>
                                                <option value="1964">1964</option>
                                                <option value="1965">1965</option>
                                                <option value="1966">1966</option>
                                                <option value="1967">1967</option>
                                                <option value="1968">1968</option>
                                                <option value="1969">1969</option>
                                                <option value="1970">1970</option>
                                                <option value="1971">1971</option>
                                                <option value="1972">1972</option>
                                                <option value="1973">1973</option>
                                                <option value="1974">1974</option>
                                                <option value="1975">1975</option>
                                                <option value="1976">1976</option>
                                                <option value="1977">1977</option>
                                                <option value="1978">1978</option>
                                                <option value="1979">1979</option>
                                                <option value="1980">1980</option>
                                                <option value="1981">1981</option>
                                                <option value="1982">1982</option>
                                                <option value="1983">1983</option>
                                                <option value="1984">1984</option>
                                                <option value="1985">1985</option>
                                                <option value="1986">1986</option>
                                                <option value="1987">1987</option>
                                                <option value="1988">1988</option>
                                                <option value="1989">1989</option>
                                                <option value="1990">1990</option>
                                                <option value="1991">1991</option>
                                                <option value="1992">1992</option>
                                                <option value="1993">1993</option>
                                                <option value="1994">1994</option>
                                                <option value="1995">1995</option>
                                                <option value="1996">1996</option>
                                                <option value="1997">1997</option>
                                                <option value="1998">1998</option>
                                                <option value="1999">1999</option>
                                                <option value="2000">2000</option>
                                                <option value="2001">2001</option>
                                                <option value="2002">2002</option>
                                                <option value="2003">2003</option>
                                                <option value="2004">2004</option>
                                                <option value="2005">2005</option>
                                                <option value="2006">2006</option>
                                                <option value="2007">2007</option>
                                                <option value="2008">2008</option>
                                                <option value="2009">2009</option>
                                                <option value="2010">2010</option>
                                                <option value="2011">2011</option>
                                                <option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                                <option value="2014">2014</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                            </select>

                                        </div>

                                        <span class="YearBuiltCriteria-text">to</span>

                                        <div class="YearBuiltCriteria-selector">
                                            <select id="date_year" name="built_end_ignore" se:behavior="ignorable" se:ignorable:value_to_ignore="2020" class="SearchCriteria-select DefaultField">
                                                <option value="2020" selected="selected">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                                <option value="1923">1923</option>
                                                <option value="1922">1922</option>
                                                <option value="1921">1921</option>
                                                <option value="1920">1920</option>
                                                <option value="1919">1919</option>
                                                <option value="1918">1918</option>
                                                <option value="1917">1917</option>
                                                <option value="1916">1916</option>
                                                <option value="1915">1915</option>
                                                <option value="1914">1914</option>
                                                <option value="1913">1913</option>
                                                <option value="1912">1912</option>
                                                <option value="1911">1911</option>
                                                <option value="1910">1910</option>
                                                <option value="1909">1909</option>
                                                <option value="1908">1908</option>
                                                <option value="1907">1907</option>
                                                <option value="1906">1906</option>
                                                <option value="1905">1905</option>
                                                <option value="1904">1904</option>
                                                <option value="1903">1903</option>
                                                <option value="1902">1902</option>
                                                <option value="1901">1901</option>
                                                <option value="1900">1900</option>
                                            </select>

                                        </div>
                                    </div>

                                    <p class="YearBuiltCriteria-subText">(1900 includes all previous years)</p>
                                </div>
                            </div>
                        </div><div class="SearchCriteria-row SearchCriteria-row--borderBottom">
                            <div class="SearchCriteria-pricePerSqFt">
                                <div class="PricePerSqFtCriteria">
                                    <label class="SearchCriteria-label">
                                        Price Per Square Foot
                                    </label>

                                    <div class="PricePerSqFtCriteria-selectors">
                                        <div id="ppsf_from_container" class="PricePerSqFtCriteria-selector ">
                                            <select class="SearchCriteria-select PricePerSqFtCriteria-select DefaultField" id="ppsf_from" name="ppsf_from" se:behavior="support_custom_value trigger_change_on_page_load">
                                                <option value="">Any</option>
                                                <option value="Custom">» Custom</option>
                                                <option value="100">$100</option>
                                                <option value="200">$200</option>
                                                <option value="300">$300</option>
                                                <option value="400">$400</option>
                                                <option value="500">$500</option>
                                                <option value="600">$600</option>
                                                <option value="700">$700</option>
                                                <option value="800">$800</option>
                                                <option value="900">$900</option>
                                                <option value="1000">$1,000</option>
                                                <option value="1250">$1,250</option>
                                                <option value="1500">$1,500</option>
                                                <option value="2000">$2,000</option>
                                                <option value="2250">$2,250</option>
                                                <option value="2500">$2,500</option>
                                                <option value="3000">$3,000</option>
                                                <option value="4000">$4,000</option>
                                                <option value="5000">$5,000</option>
                                            </select>

                                            <div id="ppsf_from_custom_container" class="PricePerSqFtCriteria-customSelector" style="display: none">
                                                <input class="DefaultField" type="text" id="ppsf_from_ignore" name="ppsf_from_ignore" value="$0" se:behavior="comma_separatable">
                                            </div>
                                        </div>

                                        <span class="PricePerSqFtCriteria-selectorText">to</span>

                                        <div id="ppsf_to_container" class="PricePerSqFtCriteria-selector ">
                                            <select id="ppsf_to" name="ppsf_to" class="PricePerSqFtCriteria-select SearchCriteria-select DefaultField" se:behavior="support_custom_value trigger_change_on_page_load">
                                                <option value="">Any</option>
                                                <option value="Custom">» Custom</option>
                                                <option value="100">$100</option>
                                                <option value="200">$200</option>
                                                <option value="300">$300</option>
                                                <option value="400">$400</option>
                                                <option value="500">$500</option>
                                                <option value="600">$600</option>
                                                <option value="700">$700</option>
                                                <option value="800">$800</option>
                                                <option value="900">$900</option>
                                                <option value="1000">$1,000</option>
                                                <option value="1250">$1,250</option>
                                                <option value="1500">$1,500</option>
                                                <option value="2000">$2,000</option>
                                                <option value="2250">$2,250</option>
                                                <option value="2500">$2,500</option>
                                                <option value="3000">$3,000</option>
                                                <option value="4000">$4,000</option>
                                                <option value="5000">$5,000</option>
                                            </select>

                                            <div id="ppsf_to_custom_container" class="PricePerSqFtCriteria-customSelector" style="display: none">
                                                <input type="text" class="SearchCriteria-input PricePerSqFtCriteria-input" id="ppsf_to_ignore" name="ppsf_to_ignore" value="$0" se:behavior="comma_separatable">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="PricePerSqFtCriteria-includeUnknownCheckbox">
                                    <input class="SearchCriteria-checkbox DefaultCheckbox" type="checkbox" name="ppsf_unknown" value="1" id="ppsf_unknown">
                                    <label for="ppsf_unknown" class="PricePerSqFtCriteria-label">
                                        include unknown
                                    </label>
                                </div>
                            </div>
                        </div><div class="SearchCriteria-row SearchCriteria-row--borderBottom"><div class="SearchCriteria-schoolZone">
                                <div class="SchoolZoneCriteria jsSchoolZoneCriteria">
                                    <label class="SearchCriteria-label" for="school">Zoned for School</label>

                                    <input class="SearchCriteria-input DefaultField" type="text" id="school" name="school" value="" se:behavior="autocompletable" se:autocompletable:url="/nyc/process/sales/auto_complete_school_json" se:autocompletable:spinner="#school_auto_complete_spinner" autocomplete="off" placeholder="e.g. PS 89">
                                    <span id="school_auto_complete_spinner" class="hidden"><i class="fa fa-spinner Icon Icon--animated"></i></span>
                                    <div class="autocomplete-suggestions" style="position: absolute; display: none; max-height: 300px; z-index: 10000;"></div></div>
                            </div>
                            <div class="SearchCriteria-zip">
                                <div class="ZipCriteria">
                                    <label class="SearchCriteria-label" for="zip">Zip</label>
                                    <input type="text" name="zip" id="zip" size="10" class="SearchCriteria-input DefaultField">
                                </div>
                            </div>

                            <div class="SearchCriteria-building">
                                <div class="BuildingCriteria">
                                    <label class="SearchCriteria-label" for="search_by_address">Building</label>

                                    <div class="BuildingCriteria-address">
                                        <input type="text" name="search_by_address[]" id="search_by_address_" placeholder="Address" class="DefaultField">
                                    </div>

                                    <div class="BuildingCriteria-input" se:behavior="form_field_addee coordinated" se:coordinator="building_adder" se:field_key="search_by_address">
                                    </div>

                                    <div class="BuildingCriteria-link" se:behavior="form_field_adder coordinated" se:coordinator="building_adder">
                                        add another
                                    </div>
                                </div>
                            </div>
                        </div><div class="SearchCriteria-row transportation SearchCriteria-row--borderBottom"><div class="SearchCriteria-transitLines">
                                <div class="TransitLinesCriteria">
                                    <label class="SearchCriteria-label">Nearby Transit Lines</label>

                                    <ul id="transit_search_bottom" class="TransitLinesCriteria-list">
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_1" value="1" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_1 TransitLine-label" for="transit_lines_1">1</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_2" value="2" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_2 TransitLine-label" for="transit_lines_2">2</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_3" value="3" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_3 TransitLine-label" for="transit_lines_3">3</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_4" value="4" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_4 TransitLine-label" for="transit_lines_4">4</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_5" value="5" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_5 TransitLine-label" for="transit_lines_5">5</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_6" value="6" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_6 TransitLine-label" for="transit_lines_6">6</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_7" value="7" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_7 TransitLine-label" for="transit_lines_7">7</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_A" value="A" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_A TransitLine-label" for="transit_lines_A">A</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_C" value="C" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_C TransitLine-label" for="transit_lines_C">C</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_E" value="E" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_E TransitLine-label" for="transit_lines_E">E</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_B" value="B" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_B TransitLine-label" for="transit_lines_B">B</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_D" value="D" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_D TransitLine-label" for="transit_lines_D">D</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_F" value="F" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_F TransitLine-label" for="transit_lines_F">F</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_M" value="M" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_M TransitLine-label" for="transit_lines_M">M</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_J" value="J" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_J TransitLine-label" for="transit_lines_J">J</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_Z" value="Z" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_Z TransitLine-label" for="transit_lines_Z">Z</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_N" value="N" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_N TransitLine-label" for="transit_lines_N">N</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_Q" value="Q" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_Q TransitLine-label" for="transit_lines_Q">Q</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_R" value="R" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_R TransitLine-label" for="transit_lines_R">R</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_W" value="W" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_W TransitLine-label" for="transit_lines_W">W</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_G" value="G" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_G TransitLine-label" for="transit_lines_G">G</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_L" value="L" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_L TransitLine-label" for="transit_lines_L">L</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_S" value="S" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_S TransitLine-label" for="transit_lines_S">S</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_PATH" value="PATH" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_PATH TransitLine-label" for="transit_lines_PATH">PATH</label>
                                            </div>
                                        </li>
                                        <li class="TransitLinesCriteria-listItem">
                                            <div class="TransitLine">
                                                <input type="checkbox" name="transit_lines[]" id="transit_lines_HBLR" value="HBLR" class="TransitLine-checkbox DefaultCheckbox">

                                                <label class="sub_icon line_HBLR TransitLine-label" for="transit_lines_HBLR">HBLR</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><div class="SearchCriteria-row SearchCriteria-row--paddingBottom5">
                            <div class="SearchCriteria-saleType">
                                <label class="SearchCriteria-label">
                                    Sale Type
                                </label>
                                <div class="SaleTypeCriteria">
                                    <ul class="SaleTypeCriteria-list">
                                        <li class="SaleTypeCriteria-listItem">
                                            <div class="SaleType">
                                                <input class="SaleType-checkbox DefaultCheckbox" type="checkbox" name="sale_type[]" value="S" id="sale_type_S">

                                                <label class="SaleType-label" for="sale_type_S">Sponsor Unit</label>
                                            </div>
                                        </li>
                                        <li class="SaleTypeCriteria-listItem">
                                            <div class="SaleType">
                                                <input class="SaleType-checkbox DefaultCheckbox" type="checkbox" name="sale_type[]" value="R" id="sale_type_R">

                                                <label class="SaleType-label" for="sale_type_R">Resale</label>
                                            </div>
                                        </li>
                                        <li class="SaleTypeCriteria-listItem">
                                            <div class="SaleType">
                                                <input class="SaleType-checkbox DefaultCheckbox" type="checkbox" name="sale_type[]" value="F" id="sale_type_F">

                                                <label class="SaleType-label" for="sale_type_F">Foreclosure</label>
                                            </div>
                                        </li>
                                        <li class="SaleTypeCriteria-listItem">
                                            <div class="SaleType">
                                                <input class="SaleType-checkbox DefaultCheckbox" type="checkbox" name="sale_type[]" value="A" id="sale_type_A">

                                                <label class="SaleType-label" for="sale_type_A">Auction Sale</label>
                                            </div>
                                        </li>
                                        <li class="SaleTypeCriteria-listItem">
                                            <div class="SaleType">
                                                <input class="SaleType-checkbox DefaultCheckbox" type="checkbox" name="sale_type[]" value="H" id="sale_type_H">

                                                <label class="SaleType-label" for="sale_type_H">Restricted Sale</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="SearchCriteria-advancedOptionsSearchButton">
                            <button type="submit" name="do_search" class="Button Button--classicBlue" data-gtm-event-category="sales_homepage" data-gtm-event-action="search_form" data-gtm-event-label="submit" data-gtm-event-value="">
                                Search
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
        <!-- End Search -->

        <!-- Recent Searches / Explore NYC -->
        <div class="Home-additionalLinksContainer Home-topDivider">

            <h2 class="Title Title--secondarySmCaps u-color-koalaGrey u-noMargin u-nowrap u-padding-right-10">Explore NYC</h2>
            <ul class="Home-additionalLinks jsSlider" data-slider-type="Additional Links">
                <li class="Home-additionalLink Home-additionalLink--withImage">
                    <a href="#"

                       data-ga-click
                       data-event-category="sales_homepage"
                       data-event-action="content_bar"
                       data-event-label="clickslot=1"
                       class="flexBox-row flexBox-noWrap flexBox-alignMiddle u-text--noDecoration">
                        <span class="Home-additionalLinkImage Home-additionalLinkImage--dataDashboardIcon"></span>
                        <div class="Home-additionalLinkCopy">
                            <div class="u-copySize--16 u-ellipsis">NYC Data Dashboard</div>
                            <div class="u-color-koalaGrey u-ellipsis">
                                Stay on top of the latest market trends
                            </div>
                        </div>
                    </a>
                </li>

                <li class="Home-additionalLink Home-additionalLink--withImage">
                    <a href="#"

                       data-ga-click
                       data-event-category="sales_homepage"
                       data-event-action="content_bar"
                       data-event-label="clickslot=2"
                       class="flexBox-row flexBox-noWrap flexBox-alignMiddle u-text--noDecoration">
                        <span class="Home-additionalLinkImage Home-additionalLinkImage--tipsIcon"></span>
                        <div class="Home-additionalLinkCopy">
                            <div class="u-copySize--16 u-ellipsis">Tips &amp; Advice</div>
                            <div class="u-color-koalaGrey u-ellipsis">
                                Become an expert on buying in NYC
                            </div>
                        </div>
                    </a>
                </li>

                <li class="Home-additionalLink Home-additionalLink--withImage">
                    <a href="#"

                       data-ga-click
                       data-event-category="sales_homepage"
                       data-event-action="content_bar"
                       data-event-label="clickslot=3"
                       class="flexBox-row flexBox-noWrap flexBox-alignMiddle u-text--noDecoration">
                        <span class="Home-additionalLinkImage Home-additionalLinkImage--blogIcon"></span>
                        <div class="Home-additionalLinkCopy">
                            <div class="u-copySize--16 u-ellipsis">One Block Over</div>
                            <div class="u-color-koalaGrey u-ellipsis">
                                News, living, trends and market data
                            </div>
                        </div>
                    </a>
                </li>
            </ul>

        </div>
        <!-- End Recent Searches / Explore NYC -->
    </div>
</section>
</div>

<script>
    $(document).ready(function(){
        $('.show_input').click(function(){
            $('#price_from_ignore').slideDown();
        });
</script>
<script>
        //  var cnt = document.getElementById('#cont').value;
        //
        // console.log(cnt);
        for(var i=1; i<='<?php $count ?>'; i++){
            $("#checkall"+i).click(function () {
                $(".Checkbox"+i).prop('checked', $(this).prop('checked'),function(){
                    this.value=this.checked  ? 1:0;
                }) .change() ;
            });
    }
</script>
{{--<script>--}}
{{--    // $('.Home-searchType').click(function(){--}}
{{--    //    $('.Home-searchType').removeClass('isCurrent');--}}
{{--    //    $(this).addClass('isCurrent');--}}
{{--    // });--}}
{{--</script>--}}
<script>
    $(function() {
        $(".preload").fadeOut(2000, function() {
            $(".load").fadeIn(1000);
        });
    });

</script>
<script>
    $(document).ready(function(){
        $(".show_input").click(function(){
            $(".Home-searchRangeCustom").slideDown();
        });
</script>

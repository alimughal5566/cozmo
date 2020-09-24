@include('layouts.flashmessage')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<section class="">
    <div class="u-width--984 u-centered">

        <div class="Home-searchTypeContainer">

          <a href="{{url('/UserSales')}}">  <span class="Home-searchType Title Title--primaryMd isCurrent" >Sales</span> </a>
            <a class="Home-searchType Title Title--primaryMd top_active  "
               href='{{url('/UserRentals')}}'>Rentals</a>

        </div>

        <!-- Search -->

        <form class="u-noMargin criteria large"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="85xA6oxOEOcaYkMVTSch6uXNkkf8vWzQ62kMAPfCdprYFHDG1Jh3mnSwdtuv8vlnmC8oBSvjBfc9Wsm8mH256Q==" />

            <div class="Home-searchFieldsContainer">
                <div class="Home-searchFields">

                    <div class="Home-searchAreaWrapper">
                        <div class="Home-searchAreaEnhanced Home-searchField">

                            <div class="SearchAreasDropdown jsSearchAreaDropdown">
                                <div class="SearchAreasDropdown-textInputContainer jsSearchAreaInputContainer fa fa-map-marker" style="width: 100%;">
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
                                                data-collapsible-trigger-area="Manhattan">
                                                Manhattan
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
                                                                for="area-100">
                                                                <input type="checkbox" name="area[]" id="area-100" value="100" class="Checkbox jsSearchAreaCheckbox" data-area="100" data-area-name="All Manhattan" data-children-ids="102,119,139,144,135,101" />
                                                                All Manhattan
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level1">
                                                            <label class="Collapsible-checkboxLabel" for="area-102">
                                                                <input type="checkbox" name="area[]" id="area-102" value="102" class="Checkbox jsSearchAreaCheckbox" data-area="102" data-area-name="All Downtown" data-parent-id="100" data-children-ids="112,115,110,103,117,104,158,113,116,108,109,162,107,106,105,157" />
                                                                All Downtown
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-112">
                                                                <input type="checkbox" name="area[]" id="area-112" value="112" class="Checkbox jsSearchAreaCheckbox" data-area="112" data-area-name="Battery Park City" data-parent-id="102" data-children-ids="" />
                                                                Battery Park City
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-115">
                                                                <input type="checkbox" name="area[]" id="area-115" value="115" class="Checkbox jsSearchAreaCheckbox" data-area="115" data-area-name="Chelsea" data-always-checked-with="146" data-parent-id="102" data-children-ids="163" />
                                                                Chelsea
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-163">
                                                                <input type="checkbox" name="area[]" id="area-163" value="163" class="Checkbox jsSearchAreaCheckbox" data-area="163" data-area-name="West Chelsea" data-always-checked-with="146" data-parent-id="115" data-children-ids="" />
                                                                West Chelsea
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-110">
                                                                <input type="checkbox" name="area[]" id="area-110" value="110" class="Checkbox jsSearchAreaCheckbox" data-area="110" data-area-name="Chinatown" data-parent-id="102" data-children-ids="" />
                                                                Chinatown
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-103">
                                                                <input type="checkbox" name="area[]" id="area-103" value="103" class="Checkbox jsSearchAreaCheckbox" data-area="103" data-area-name="Civic Center" data-parent-id="102" data-children-ids="" />
                                                                Civic Center
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-117">
                                                                <input type="checkbox" name="area[]" id="area-117" value="117" class="Checkbox jsSearchAreaCheckbox" data-area="117" data-area-name="East Village" data-parent-id="102" data-children-ids="" />
                                                                East Village
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-104">
                                                                <input type="checkbox" name="area[]" id="area-104" value="104" class="Checkbox jsSearchAreaCheckbox" data-area="104" data-area-name="Financial District" data-parent-id="102" data-children-ids="114" />
                                                                Financial District
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-114">
                                                                <input type="checkbox" name="area[]" id="area-114" value="114" class="Checkbox jsSearchAreaCheckbox" data-area="114" data-area-name="Fulton/Seaport" data-parent-id="104" data-children-ids="" />
                                                                Fulton/Seaport
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-158">
                                                                <input type="checkbox" name="area[]" id="area-158" value="158" class="Checkbox jsSearchAreaCheckbox" data-area="158" data-area-name="Flatiron" data-parent-id="102" data-children-ids="159" />
                                                                Flatiron
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-159">
                                                                <input type="checkbox" name="area[]" id="area-159" value="159" class="Checkbox jsSearchAreaCheckbox" data-area="159" data-area-name="NoMad" data-parent-id="158" data-children-ids="" />
                                                                NoMad
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-113">
                                                                <input type="checkbox" name="area[]" id="area-113" value="113" class="Checkbox jsSearchAreaCheckbox" data-area="113" data-area-name="Gramercy Park" data-parent-id="102" data-children-ids="" />
                                                                Gramercy Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-116">
                                                                <input type="checkbox" name="area[]" id="area-116" value="116" class="Checkbox jsSearchAreaCheckbox" data-area="116" data-area-name="Greenwich Village" data-parent-id="102" data-children-ids="118" />
                                                                Greenwich Village
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-118">
                                                                <input type="checkbox" name="area[]" id="area-118" value="118" class="Checkbox jsSearchAreaCheckbox" data-area="118" data-area-name="Noho" data-parent-id="116" data-children-ids="" />
                                                                Noho
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-108">
                                                                <input type="checkbox" name="area[]" id="area-108" value="108" class="Checkbox jsSearchAreaCheckbox" data-area="108" data-area-name="Little Italy" data-parent-id="102" data-children-ids="" />
                                                                Little Italy
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-109">
                                                                <input type="checkbox" name="area[]" id="area-109" value="109" class="Checkbox jsSearchAreaCheckbox" data-area="109" data-area-name="Lower East Side" data-parent-id="102" data-children-ids="111" />
                                                                Lower East Side
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-111">
                                                                <input type="checkbox" name="area[]" id="area-111" value="111" class="Checkbox jsSearchAreaCheckbox" data-area="111" data-area-name="Two Bridges" data-parent-id="109" data-children-ids="" />
                                                                Two Bridges
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-162">
                                                                <input type="checkbox" name="area[]" id="area-162" value="162" class="Checkbox jsSearchAreaCheckbox" data-area="162" data-area-name="Nolita" data-parent-id="102" data-children-ids="" />
                                                                Nolita
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-107">
                                                                <input type="checkbox" name="area[]" id="area-107" value="107" class="Checkbox jsSearchAreaCheckbox" data-area="107" data-area-name="Soho" data-parent-id="102" data-children-ids="166" />
                                                                Soho
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-166">
                                                                <input type="checkbox" name="area[]" id="area-166" value="166" class="Checkbox jsSearchAreaCheckbox" data-area="166" data-area-name="Hudson Square" data-parent-id="107" data-children-ids="" />
                                                                Hudson Square
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-106">
                                                                <input type="checkbox" name="area[]" id="area-106" value="106" class="Checkbox jsSearchAreaCheckbox" data-area="106" data-area-name="Stuyvesant Town/PCV" data-parent-id="102" data-children-ids="" />
                                                                Stuyvesant Town/PCV
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-105">
                                                                <input type="checkbox" name="area[]" id="area-105" value="105" class="Checkbox jsSearchAreaCheckbox" data-area="105" data-area-name="Tribeca" data-parent-id="102" data-children-ids="" />
                                                                Tribeca
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-157">
                                                                <input type="checkbox" name="area[]" id="area-157" value="157" class="Checkbox jsSearchAreaCheckbox" data-area="157" data-area-name="West Village" data-parent-id="102" data-children-ids="" />
                                                                West Village
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level1">
                                                            <label class="Collapsible-checkboxLabel" for="area-119">
                                                                <input type="checkbox" name="area[]" id="area-119" value="119" class="Checkbox jsSearchAreaCheckbox" data-area="119" data-area-name="All Midtown" data-parent-id="100" data-children-ids="121,120,123,122,124" />
                                                                All Midtown
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-121">
                                                                <input type="checkbox" name="area[]" id="area-121" value="121" class="Checkbox jsSearchAreaCheckbox" data-area="121" data-area-name="Central Park South" data-parent-id="119" data-children-ids="" />
                                                                Central Park South
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-120">
                                                                <input type="checkbox" name="area[]" id="area-120" value="120" class="Checkbox jsSearchAreaCheckbox" data-area="120" data-area-name="Midtown" data-parent-id="119" data-children-ids="" />
                                                                Midtown
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-123">
                                                                <input type="checkbox" name="area[]" id="area-123" value="123" class="Checkbox jsSearchAreaCheckbox" data-area="123" data-area-name="Midtown East" data-parent-id="119" data-children-ids="133,130,131,132" />
                                                                Midtown East
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-133">
                                                                <input type="checkbox" name="area[]" id="area-133" value="133" class="Checkbox jsSearchAreaCheckbox" data-area="133" data-area-name="Kips Bay" data-parent-id="123" data-children-ids="" />
                                                                Kips Bay
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-130">
                                                                <input type="checkbox" name="area[]" id="area-130" value="130" class="Checkbox jsSearchAreaCheckbox" data-area="130" data-area-name="Murray Hill" data-parent-id="123" data-children-ids="" />
                                                                Murray Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-131">
                                                                <input type="checkbox" name="area[]" id="area-131" value="131" class="Checkbox jsSearchAreaCheckbox" data-area="131" data-area-name="Sutton Place" data-parent-id="123" data-children-ids="" />
                                                                Sutton Place
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-132">
                                                                <input type="checkbox" name="area[]" id="area-132" value="132" class="Checkbox jsSearchAreaCheckbox" data-area="132" data-area-name="Turtle Bay" data-parent-id="123" data-children-ids="134" />
                                                                Turtle Bay
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level4">
                                                            <label class="Collapsible-checkboxLabel" for="area-134">
                                                                <input type="checkbox" name="area[]" id="area-134" value="134" class="Checkbox jsSearchAreaCheckbox" data-area="134" data-area-name="Beekman" data-parent-id="132" data-children-ids="" />
                                                                Beekman
                                                            </label>
                                                        </div>

                                                    </li>



                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-122">
                                                                <input type="checkbox" name="area[]" id="area-122" value="122" class="Checkbox jsSearchAreaCheckbox" data-area="122" data-area-name="Midtown South" data-parent-id="119" data-children-ids="" />
                                                                Midtown South
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-124">
                                                                <input type="checkbox" name="area[]" id="area-124" value="124" class="Checkbox jsSearchAreaCheckbox" data-area="124" data-area-name="Midtown West" data-parent-id="119" data-children-ids="152,146" />
                                                                Midtown West
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-152">
                                                                <input type="checkbox" name="area[]" id="area-152" value="152" class="Checkbox jsSearchAreaCheckbox" data-area="152" data-area-name="Hell&#39;s Kitchen" data-parent-id="124" data-children-ids="" />
                                                                Hell&#39;s Kitchen
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-146">
                                                                <input type="checkbox" name="area[]" id="area-146" value="146" class="Checkbox jsSearchAreaCheckbox" data-area="146" data-area-name="Hudson Yards" data-parent-id="124" data-children-ids="" />
                                                                Hudson Yards
                                                            </label>
                                                        </div>

                                                    </li>



                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level1">
                                                            <label class="Collapsible-checkboxLabel" for="area-139">
                                                                <input type="checkbox" name="area[]" id="area-139" value="139" class="Checkbox jsSearchAreaCheckbox" data-area="139" data-area-name="All Upper East Side" data-parent-id="100" data-children-ids="140" />
                                                                All Upper East Side
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-140">
                                                                <input type="checkbox" name="area[]" id="area-140" value="140" class="Checkbox jsSearchAreaCheckbox" data-area="140" data-area-name="Upper East Side" data-parent-id="139" data-children-ids="143,141,164,142" />
                                                                Upper East Side
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-143">
                                                                <input type="checkbox" name="area[]" id="area-143" value="143" class="Checkbox jsSearchAreaCheckbox" data-area="143" data-area-name="Carnegie Hill" data-parent-id="140" data-children-ids="" />
                                                                Carnegie Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-141">
                                                                <input type="checkbox" name="area[]" id="area-141" value="141" class="Checkbox jsSearchAreaCheckbox" data-area="141" data-area-name="Lenox Hill" data-parent-id="140" data-children-ids="" />
                                                                Lenox Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-164">
                                                                <input type="checkbox" name="area[]" id="area-164" value="164" class="Checkbox jsSearchAreaCheckbox" data-area="164" data-area-name="Upper Carnegie Hill" data-parent-id="140" data-children-ids="" />
                                                                Upper Carnegie Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-142">
                                                                <input type="checkbox" name="area[]" id="area-142" value="142" class="Checkbox jsSearchAreaCheckbox" data-area="142" data-area-name="Yorkville" data-parent-id="140" data-children-ids="" />
                                                                Yorkville
                                                            </label>
                                                        </div>

                                                    </li>



                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level1">
                                                            <label class="Collapsible-checkboxLabel" for="area-144">
                                                                <input type="checkbox" name="area[]" id="area-144" value="144" class="Checkbox jsSearchAreaCheckbox" data-area="144" data-area-name="All Upper Manhattan" data-parent-id="100" data-children-ids="154,155,148,150,226,147,149,153" />
                                                                All Upper Manhattan
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-154">
                                                                <input type="checkbox" name="area[]" id="area-154" value="154" class="Checkbox jsSearchAreaCheckbox" data-area="154" data-area-name="Central Harlem" data-parent-id="144" data-children-ids="165" />
                                                                Central Harlem
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-165">
                                                                <input type="checkbox" name="area[]" id="area-165" value="165" class="Checkbox jsSearchAreaCheckbox" data-area="165" data-area-name="South Harlem" data-parent-id="154" data-children-ids="" />
                                                                South Harlem
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-155">
                                                                <input type="checkbox" name="area[]" id="area-155" value="155" class="Checkbox jsSearchAreaCheckbox" data-area="155" data-area-name="East Harlem" data-parent-id="144" data-children-ids="" />
                                                                East Harlem
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-148">
                                                                <input type="checkbox" name="area[]" id="area-148" value="148" class="Checkbox jsSearchAreaCheckbox" data-area="148" data-area-name="Hamilton Heights" data-parent-id="144" data-children-ids="" />
                                                                Hamilton Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-150">
                                                                <input type="checkbox" name="area[]" id="area-150" value="150" class="Checkbox jsSearchAreaCheckbox" data-area="150" data-area-name="Inwood" data-parent-id="144" data-children-ids="" />
                                                                Inwood
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-226">
                                                                <input type="checkbox" name="area[]" id="area-226" value="226" class="Checkbox jsSearchAreaCheckbox" data-area="226" data-area-name="Marble Hill" data-parent-id="144" data-children-ids="" />
                                                                Marble Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-147">
                                                                <input type="checkbox" name="area[]" id="area-147" value="147" class="Checkbox jsSearchAreaCheckbox" data-area="147" data-area-name="Morningside Heights" data-parent-id="144" data-children-ids="" />
                                                                Morningside Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-149">
                                                                <input type="checkbox" name="area[]" id="area-149" value="149" class="Checkbox jsSearchAreaCheckbox" data-area="149" data-area-name="Washington Heights" data-parent-id="144" data-children-ids="151,145" />
                                                                Washington Heights
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-151">
                                                                <input type="checkbox" name="area[]" id="area-151" value="151" class="Checkbox jsSearchAreaCheckbox" data-area="151" data-area-name="Fort George" data-parent-id="149" data-children-ids="" />
                                                                Fort George
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-145">
                                                                <input type="checkbox" name="area[]" id="area-145" value="145" class="Checkbox jsSearchAreaCheckbox" data-area="145" data-area-name="Hudson Heights" data-parent-id="149" data-children-ids="" />
                                                                Hudson Heights
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-153">
                                                                <input type="checkbox" name="area[]" id="area-153" value="153" class="Checkbox jsSearchAreaCheckbox" data-area="153" data-area-name="West Harlem" data-parent-id="144" data-children-ids="161" />
                                                                West Harlem
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-161">
                                                                <input type="checkbox" name="area[]" id="area-161" value="161" class="Checkbox jsSearchAreaCheckbox" data-area="161" data-area-name="Manhattanville" data-parent-id="153" data-children-ids="" />
                                                                Manhattanville
                                                            </label>
                                                        </div>

                                                    </li>



                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level1">
                                                            <label class="Collapsible-checkboxLabel" for="area-135">
                                                                <input type="checkbox" name="area[]" id="area-135" value="135" class="Checkbox jsSearchAreaCheckbox" data-area="135" data-area-name="All Upper West Side" data-parent-id="100" data-children-ids="137" />
                                                                All Upper West Side
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-137">
                                                                <input type="checkbox" name="area[]" id="area-137" value="137" class="Checkbox jsSearchAreaCheckbox" data-area="137" data-area-name="Upper West Side" data-parent-id="135" data-children-ids="136,138" />
                                                                Upper West Side
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-136">
                                                                <input type="checkbox" name="area[]" id="area-136" value="136" class="Checkbox jsSearchAreaCheckbox" data-area="136" data-area-name="Lincoln Square" data-parent-id="137" data-children-ids="" />
                                                                Lincoln Square
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-138">
                                                                <input type="checkbox" name="area[]" id="area-138" value="138" class="Checkbox jsSearchAreaCheckbox" data-area="138" data-area-name="Manhattan Valley" data-parent-id="137" data-children-ids="" />
                                                                Manhattan Valley
                                                            </label>
                                                        </div>

                                                    </li>



                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level1">
                                                            <label class="Collapsible-checkboxLabel" for="area-101">
                                                                <input type="checkbox" name="area[]" id="area-101" value="101" class="Checkbox jsSearchAreaCheckbox" data-area="101" data-area-name="Roosevelt Island" data-parent-id="100" data-children-ids="" />
                                                                Roosevelt Island
                                                            </label>
                                                        </div>

                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                        <li class="jsTrigger">
                                            <div
                                                class="Collapsible-trigger jsCollapsibleTrigger jsSearchAreaItem"
                                                data-collapsible-trigger-area="Brooklyn">
                                                Brooklyn
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
                                                                for="area-300">
                                                                <input type="checkbox" name="area[]" id="area-300" value="300" class="Checkbox jsSearchAreaCheckbox" data-area="300" data-area-name="All Brooklyn" data-children-ids="336,331,310,334,363,306,338,342,305,354,313,359,321,364,322,328,341,325,307,343,303,332,358,314,346,360,304,370,320,337,301,367,340,350,361,348,362,339,365,319,326,329,355,318,345,349,323,302,324" />
                                                                All Brooklyn
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-336">
                                                                <input type="checkbox" name="area[]" id="area-336" value="336" class="Checkbox jsSearchAreaCheckbox" data-area="336" data-area-name="Bath Beach" data-parent-id="300" data-children-ids="" />
                                                                Bath Beach
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-331">
                                                                <input type="checkbox" name="area[]" id="area-331" value="331" class="Checkbox jsSearchAreaCheckbox" data-area="331" data-area-name="Bay Ridge" data-parent-id="300" data-children-ids="333" />
                                                                Bay Ridge
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-333">
                                                                <input type="checkbox" name="area[]" id="area-333" value="333" class="Checkbox jsSearchAreaCheckbox" data-area="333" data-area-name="Fort Hamilton" data-parent-id="331" data-children-ids="" />
                                                                Fort Hamilton
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-310">
                                                                <input type="checkbox" name="area[]" id="area-310" value="310" class="Checkbox jsSearchAreaCheckbox" data-area="310" data-area-name="Bedford-Stuyvesant" data-parent-id="300" data-children-ids="353,312" />
                                                                Bedford-Stuyvesant
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-353">
                                                                <input type="checkbox" name="area[]" id="area-353" value="353" class="Checkbox jsSearchAreaCheckbox" data-area="353" data-area-name="Ocean Hill" data-parent-id="310" data-children-ids="" />
                                                                Ocean Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-312">
                                                                <input type="checkbox" name="area[]" id="area-312" value="312" class="Checkbox jsSearchAreaCheckbox" data-area="312" data-area-name="Stuyvesant Heights" data-parent-id="310" data-children-ids="" />
                                                                Stuyvesant Heights
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-334">
                                                                <input type="checkbox" name="area[]" id="area-334" value="334" class="Checkbox jsSearchAreaCheckbox" data-area="334" data-area-name="Bensonhurst" data-parent-id="300" data-children-ids="" />
                                                                Bensonhurst
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-363">
                                                                <input type="checkbox" name="area[]" id="area-363" value="363" class="Checkbox jsSearchAreaCheckbox" data-area="363" data-area-name="Bergen Beach" data-parent-id="300" data-children-ids="" />
                                                                Bergen Beach
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-306">
                                                                <input type="checkbox" name="area[]" id="area-306" value="306" class="Checkbox jsSearchAreaCheckbox" data-area="306" data-area-name="Boerum Hill" data-parent-id="300" data-children-ids="" />
                                                                Boerum Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-338">
                                                                <input type="checkbox" name="area[]" id="area-338" value="338" class="Checkbox jsSearchAreaCheckbox" data-area="338" data-area-name="Borough Park" data-parent-id="300" data-children-ids="335" />
                                                                Borough Park
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-335">
                                                                <input type="checkbox" name="area[]" id="area-335" value="335" class="Checkbox jsSearchAreaCheckbox" data-area="335" data-area-name="Mapleton" data-parent-id="338" data-children-ids="" />
                                                                Mapleton
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-342">
                                                                <input type="checkbox" name="area[]" id="area-342" value="342" class="Checkbox jsSearchAreaCheckbox" data-area="342" data-area-name="Brighton Beach" data-parent-id="300" data-children-ids="" />
                                                                Brighton Beach
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-305">
                                                                <input type="checkbox" name="area[]" id="area-305" value="305" class="Checkbox jsSearchAreaCheckbox" data-area="305" data-area-name="Brooklyn Heights" data-parent-id="300" data-children-ids="" />
                                                                Brooklyn Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-354">
                                                                <input type="checkbox" name="area[]" id="area-354" value="354" class="Checkbox jsSearchAreaCheckbox" data-area="354" data-area-name="Brownsville" data-parent-id="300" data-children-ids="" />
                                                                Brownsville
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-313">
                                                                <input type="checkbox" name="area[]" id="area-313" value="313" class="Checkbox jsSearchAreaCheckbox" data-area="313" data-area-name="Bushwick" data-parent-id="300" data-children-ids="" />
                                                                Bushwick
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-359">
                                                                <input type="checkbox" name="area[]" id="area-359" value="359" class="Checkbox jsSearchAreaCheckbox" data-area="359" data-area-name="Canarsie" data-parent-id="300" data-children-ids="" />
                                                                Canarsie
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-321">
                                                                <input type="checkbox" name="area[]" id="area-321" value="321" class="Checkbox jsSearchAreaCheckbox" data-area="321" data-area-name="Carroll Gardens" data-parent-id="300" data-children-ids="" />
                                                                Carroll Gardens
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-364">
                                                                <input type="checkbox" name="area[]" id="area-364" value="364" class="Checkbox jsSearchAreaCheckbox" data-area="364" data-area-name="Clinton Hill" data-parent-id="300" data-children-ids="" />
                                                                Clinton Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-322">
                                                                <input type="checkbox" name="area[]" id="area-322" value="322" class="Checkbox jsSearchAreaCheckbox" data-area="322" data-area-name="Cobble Hill" data-parent-id="300" data-children-ids="" />
                                                                Cobble Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-328">
                                                                <input type="checkbox" name="area[]" id="area-328" value="328" class="Checkbox jsSearchAreaCheckbox" data-area="328" data-area-name="Columbia St Waterfront District" data-parent-id="300" data-children-ids="" />
                                                                Columbia St Waterfront District
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-341">
                                                                <input type="checkbox" name="area[]" id="area-341" value="341" class="Checkbox jsSearchAreaCheckbox" data-area="341" data-area-name="Coney Island" data-parent-id="300" data-children-ids="" />
                                                                Coney Island
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-325">
                                                                <input type="checkbox" name="area[]" id="area-325" value="325" class="Checkbox jsSearchAreaCheckbox" data-area="325" data-area-name="Crown Heights" data-parent-id="300" data-children-ids="327" />
                                                                Crown Heights
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-327">
                                                                <input type="checkbox" name="area[]" id="area-327" value="327" class="Checkbox jsSearchAreaCheckbox" data-area="327" data-area-name="Weeksville" data-parent-id="325" data-children-ids="" />
                                                                Weeksville
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-307">
                                                                <input type="checkbox" name="area[]" id="area-307" value="307" class="Checkbox jsSearchAreaCheckbox" data-area="307" data-area-name="DUMBO" data-parent-id="300" data-children-ids="308" />
                                                                DUMBO
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-308">
                                                                <input type="checkbox" name="area[]" id="area-308" value="308" class="Checkbox jsSearchAreaCheckbox" data-area="308" data-area-name="Vinegar Hill" data-parent-id="307" data-children-ids="" />
                                                                Vinegar Hill
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-343">
                                                                <input type="checkbox" name="area[]" id="area-343" value="343" class="Checkbox jsSearchAreaCheckbox" data-area="343" data-area-name="Ditmas Park" data-parent-id="300" data-children-ids="352" />
                                                                Ditmas Park
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-352">
                                                                <input type="checkbox" name="area[]" id="area-352" value="352" class="Checkbox jsSearchAreaCheckbox" data-area="352" data-area-name="Fiske Terrace" data-parent-id="343" data-children-ids="" />
                                                                Fiske Terrace
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-303">
                                                                <input type="checkbox" name="area[]" id="area-303" value="303" class="Checkbox jsSearchAreaCheckbox" data-area="303" data-area-name="Downtown Brooklyn" data-parent-id="300" data-children-ids="" />
                                                                Downtown Brooklyn
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-332">
                                                                <input type="checkbox" name="area[]" id="area-332" value="332" class="Checkbox jsSearchAreaCheckbox" data-area="332" data-area-name="Dyker Heights" data-parent-id="300" data-children-ids="" />
                                                                Dyker Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-358">
                                                                <input type="checkbox" name="area[]" id="area-358" value="358" class="Checkbox jsSearchAreaCheckbox" data-area="358" data-area-name="East Flatbush" data-parent-id="300" data-children-ids="309,330" />
                                                                East Flatbush
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-309">
                                                                <input type="checkbox" name="area[]" id="area-309" value="309" class="Checkbox jsSearchAreaCheckbox" data-area="309" data-area-name="Farragut" data-parent-id="358" data-children-ids="" />
                                                                Farragut
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-330">
                                                                <input type="checkbox" name="area[]" id="area-330" value="330" class="Checkbox jsSearchAreaCheckbox" data-area="330" data-area-name="Wingate" data-parent-id="358" data-children-ids="" />
                                                                Wingate
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-314">
                                                                <input type="checkbox" name="area[]" id="area-314" value="314" class="Checkbox jsSearchAreaCheckbox" data-area="314" data-area-name="East New York" data-parent-id="300" data-children-ids="316,315,317" />
                                                                East New York
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-316">
                                                                <input type="checkbox" name="area[]" id="area-316" value="316" class="Checkbox jsSearchAreaCheckbox" data-area="316" data-area-name="City Line" data-parent-id="314" data-children-ids="" />
                                                                City Line
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-315">
                                                                <input type="checkbox" name="area[]" id="area-315" value="315" class="Checkbox jsSearchAreaCheckbox" data-area="315" data-area-name="New Lots" data-parent-id="314" data-children-ids="" />
                                                                New Lots
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-317">
                                                                <input type="checkbox" name="area[]" id="area-317" value="317" class="Checkbox jsSearchAreaCheckbox" data-area="317" data-area-name="Starrett City" data-parent-id="314" data-children-ids="" />
                                                                Starrett City
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-346">
                                                                <input type="checkbox" name="area[]" id="area-346" value="346" class="Checkbox jsSearchAreaCheckbox" data-area="346" data-area-name="Flatbush" data-parent-id="300" data-children-ids="" />
                                                                Flatbush
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-360">
                                                                <input type="checkbox" name="area[]" id="area-360" value="360" class="Checkbox jsSearchAreaCheckbox" data-area="360" data-area-name="Flatlands" data-parent-id="300" data-children-ids="" />
                                                                Flatlands
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-304">
                                                                <input type="checkbox" name="area[]" id="area-304" value="304" class="Checkbox jsSearchAreaCheckbox" data-area="304" data-area-name="Fort Greene" data-parent-id="300" data-children-ids="" />
                                                                Fort Greene
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-370">
                                                                <input type="checkbox" name="area[]" id="area-370" value="370" class="Checkbox jsSearchAreaCheckbox" data-area="370" data-area-name="Gerritsen Beach" data-parent-id="300" data-children-ids="" />
                                                                Gerritsen Beach
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-320">
                                                                <input type="checkbox" name="area[]" id="area-320" value="320" class="Checkbox jsSearchAreaCheckbox" data-area="320" data-area-name="Gowanus" data-parent-id="300" data-children-ids="" />
                                                                Gowanus
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-337">
                                                                <input type="checkbox" name="area[]" id="area-337" value="337" class="Checkbox jsSearchAreaCheckbox" data-area="337" data-area-name="Gravesend" data-parent-id="300" data-children-ids="" />
                                                                Gravesend
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-301">
                                                                <input type="checkbox" name="area[]" id="area-301" value="301" class="Checkbox jsSearchAreaCheckbox" data-area="301" data-area-name="Greenpoint" data-parent-id="300" data-children-ids="" />
                                                                Greenpoint
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-367">
                                                                <input type="checkbox" name="area[]" id="area-367" value="367" class="Checkbox jsSearchAreaCheckbox" data-area="367" data-area-name="Greenwood" data-parent-id="300" data-children-ids="" />
                                                                Greenwood
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-340">
                                                                <input type="checkbox" name="area[]" id="area-340" value="340" class="Checkbox jsSearchAreaCheckbox" data-area="340" data-area-name="Kensington" data-parent-id="300" data-children-ids="" />
                                                                Kensington
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-350">
                                                                <input type="checkbox" name="area[]" id="area-350" value="350" class="Checkbox jsSearchAreaCheckbox" data-area="350" data-area-name="Manhattan Beach" data-parent-id="300" data-children-ids="" />
                                                                Manhattan Beach
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-361">
                                                                <input type="checkbox" name="area[]" id="area-361" value="361" class="Checkbox jsSearchAreaCheckbox" data-area="361" data-area-name="Marine Park" data-parent-id="300" data-children-ids="" />
                                                                Marine Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-348">
                                                                <input type="checkbox" name="area[]" id="area-348" value="348" class="Checkbox jsSearchAreaCheckbox" data-area="348" data-area-name="Midwood" data-parent-id="300" data-children-ids="" />
                                                                Midwood
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-362">
                                                                <input type="checkbox" name="area[]" id="area-362" value="362" class="Checkbox jsSearchAreaCheckbox" data-area="362" data-area-name="Mill Basin" data-parent-id="300" data-children-ids="" />
                                                                Mill Basin
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-339">
                                                                <input type="checkbox" name="area[]" id="area-339" value="339" class="Checkbox jsSearchAreaCheckbox" data-area="339" data-area-name="Ocean Parkway" data-parent-id="300" data-children-ids="" />
                                                                Ocean Parkway
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-365">
                                                                <input type="checkbox" name="area[]" id="area-365" value="365" class="Checkbox jsSearchAreaCheckbox" data-area="365" data-area-name="Old Mill Basin" data-parent-id="300" data-children-ids="" />
                                                                Old Mill Basin
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-319">
                                                                <input type="checkbox" name="area[]" id="area-319" value="319" class="Checkbox jsSearchAreaCheckbox" data-area="319" data-area-name="Park Slope" data-parent-id="300" data-children-ids="" />
                                                                Park Slope
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-326">
                                                                <input type="checkbox" name="area[]" id="area-326" value="326" class="Checkbox jsSearchAreaCheckbox" data-area="326" data-area-name="Prospect Heights" data-parent-id="300" data-children-ids="" />
                                                                Prospect Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-329">
                                                                <input type="checkbox" name="area[]" id="area-329" value="329" class="Checkbox jsSearchAreaCheckbox" data-area="329" data-area-name="Prospect Lefferts Gardens" data-parent-id="300" data-children-ids="" />
                                                                Prospect Lefferts Gardens
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-355">
                                                                <input type="checkbox" name="area[]" id="area-355" value="355" class="Checkbox jsSearchAreaCheckbox" data-area="355" data-area-name="Prospect Park South" data-parent-id="300" data-children-ids="" />
                                                                Prospect Park South
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-318">
                                                                <input type="checkbox" name="area[]" id="area-318" value="318" class="Checkbox jsSearchAreaCheckbox" data-area="318" data-area-name="Red Hook" data-parent-id="300" data-children-ids="" />
                                                                Red Hook
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-345">
                                                                <input type="checkbox" name="area[]" id="area-345" value="345" class="Checkbox jsSearchAreaCheckbox" data-area="345" data-area-name="Seagate" data-parent-id="300" data-children-ids="" />
                                                                Seagate
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-349">
                                                                <input type="checkbox" name="area[]" id="area-349" value="349" class="Checkbox jsSearchAreaCheckbox" data-area="349" data-area-name="Sheepshead Bay" data-parent-id="300" data-children-ids="344,366" />
                                                                Sheepshead Bay
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-344">
                                                                <input type="checkbox" name="area[]" id="area-344" value="344" class="Checkbox jsSearchAreaCheckbox" data-area="344" data-area-name="Homecrest" data-parent-id="349" data-children-ids="" />
                                                                Homecrest
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-366">
                                                                <input type="checkbox" name="area[]" id="area-366" value="366" class="Checkbox jsSearchAreaCheckbox" data-area="366" data-area-name="Madison" data-parent-id="349" data-children-ids="" />
                                                                Madison
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-323">
                                                                <input type="checkbox" name="area[]" id="area-323" value="323" class="Checkbox jsSearchAreaCheckbox" data-area="323" data-area-name="Sunset Park" data-parent-id="300" data-children-ids="" />
                                                                Sunset Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-302">
                                                                <input type="checkbox" name="area[]" id="area-302" value="302" class="Checkbox jsSearchAreaCheckbox" data-area="302" data-area-name="Williamsburg" data-parent-id="300" data-children-ids="373" />
                                                                Williamsburg
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-373">
                                                                <input type="checkbox" name="area[]" id="area-373" value="373" class="Checkbox jsSearchAreaCheckbox" data-area="373" data-area-name="East Williamsburg" data-parent-id="302" data-children-ids="" />
                                                                East Williamsburg
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-324">
                                                                <input type="checkbox" name="area[]" id="area-324" value="324" class="Checkbox jsSearchAreaCheckbox" data-area="324" data-area-name="Windsor Terrace" data-parent-id="300" data-children-ids="" />
                                                                Windsor Terrace
                                                            </label>
                                                        </div>

                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                        <li class="jsTrigger">
                                            <div
                                                class="Collapsible-trigger jsCollapsibleTrigger jsSearchAreaItem"
                                                data-collapsible-trigger-area="Queens">
                                                Queens
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
                                                                for="area-400">
                                                                <input type="checkbox" name="area[]" id="area-400" value="400" class="Checkbox jsSearchAreaCheckbox" data-area="400" data-area-name="All Queens" data-children-ids="401,431,428,443,446,479,437,459,418,409,429,406,408,442,416,415,419,439,413,453,434,425,405,432,447,421,424,420,436,430,402,410,411,449,407,451,426,454,438,414,423,412,477,444,433,427,450,445,435,403,455,417,422,404" />
                                                                All Queens
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-401">
                                                                <input type="checkbox" name="area[]" id="area-401" value="401" class="Checkbox jsSearchAreaCheckbox" data-area="401" data-area-name="Astoria" data-parent-id="400" data-children-ids="474" />
                                                                Astoria
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-474">
                                                                <input type="checkbox" name="area[]" id="area-474" value="474" class="Checkbox jsSearchAreaCheckbox" data-area="474" data-area-name="Ditmars-Steinway" data-parent-id="401" data-children-ids="" />
                                                                Ditmars-Steinway
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-431">
                                                                <input type="checkbox" name="area[]" id="area-431" value="431" class="Checkbox jsSearchAreaCheckbox" data-area="431" data-area-name="Auburndale" data-parent-id="400" data-children-ids="" />
                                                                Auburndale
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-428">
                                                                <input type="checkbox" name="area[]" id="area-428" value="428" class="Checkbox jsSearchAreaCheckbox" data-area="428" data-area-name="Bayside" data-parent-id="400" data-children-ids="480" />
                                                                Bayside
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-480">
                                                                <input type="checkbox" name="area[]" id="area-480" value="480" class="Checkbox jsSearchAreaCheckbox" data-area="480" data-area-name="Bay Terrace (Queens)" data-parent-id="428" data-children-ids="" />
                                                                Bay Terrace (Queens)
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-443">
                                                                <input type="checkbox" name="area[]" id="area-443" value="443" class="Checkbox jsSearchAreaCheckbox" data-area="443" data-area-name="Bellerose" data-parent-id="400" data-children-ids="" />
                                                                Bellerose
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-446">
                                                                <input type="checkbox" name="area[]" id="area-446" value="446" class="Checkbox jsSearchAreaCheckbox" data-area="446" data-area-name="Briarwood" data-parent-id="400" data-children-ids="" />
                                                                Briarwood
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-479">
                                                                <input type="checkbox" name="area[]" id="area-479" value="479" class="Checkbox jsSearchAreaCheckbox" data-area="479" data-area-name="Brookville" data-parent-id="400" data-children-ids="" />
                                                                Brookville
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-437">
                                                                <input type="checkbox" name="area[]" id="area-437" value="437" class="Checkbox jsSearchAreaCheckbox" data-area="437" data-area-name="Cambria Heights" data-parent-id="400" data-children-ids="" />
                                                                Cambria Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-459">
                                                                <input type="checkbox" name="area[]" id="area-459" value="459" class="Checkbox jsSearchAreaCheckbox" data-area="459" data-area-name="Clearview" data-parent-id="400" data-children-ids="" />
                                                                Clearview
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-418">
                                                                <input type="checkbox" name="area[]" id="area-418" value="418" class="Checkbox jsSearchAreaCheckbox" data-area="418" data-area-name="College Point" data-parent-id="400" data-children-ids="" />
                                                                College Point
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-409">
                                                                <input type="checkbox" name="area[]" id="area-409" value="409" class="Checkbox jsSearchAreaCheckbox" data-area="409" data-area-name="Corona" data-parent-id="400" data-children-ids="" />
                                                                Corona
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-429">
                                                                <input type="checkbox" name="area[]" id="area-429" value="429" class="Checkbox jsSearchAreaCheckbox" data-area="429" data-area-name="Douglaston" data-parent-id="400" data-children-ids="" />
                                                                Douglaston
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-406">
                                                                <input type="checkbox" name="area[]" id="area-406" value="406" class="Checkbox jsSearchAreaCheckbox" data-area="406" data-area-name="East Elmhurst" data-parent-id="400" data-children-ids="" />
                                                                East Elmhurst
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-408">
                                                                <input type="checkbox" name="area[]" id="area-408" value="408" class="Checkbox jsSearchAreaCheckbox" data-area="408" data-area-name="Elmhurst" data-parent-id="400" data-children-ids="" />
                                                                Elmhurst
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-442">
                                                                <input type="checkbox" name="area[]" id="area-442" value="442" class="Checkbox jsSearchAreaCheckbox" data-area="442" data-area-name="Floral Park" data-parent-id="400" data-children-ids="" />
                                                                Floral Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-416">
                                                                <input type="checkbox" name="area[]" id="area-416" value="416" class="Checkbox jsSearchAreaCheckbox" data-area="416" data-area-name="Flushing" data-parent-id="400" data-children-ids="456,457" />
                                                                Flushing
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-456">
                                                                <input type="checkbox" name="area[]" id="area-456" value="456" class="Checkbox jsSearchAreaCheckbox" data-area="456" data-area-name="East Flushing" data-parent-id="416" data-children-ids="" />
                                                                East Flushing
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-457">
                                                                <input type="checkbox" name="area[]" id="area-457" value="457" class="Checkbox jsSearchAreaCheckbox" data-area="457" data-area-name="Murray Hill (Queens)" data-parent-id="416" data-children-ids="" />
                                                                Murray Hill (Queens)
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-415">
                                                                <input type="checkbox" name="area[]" id="area-415" value="415" class="Checkbox jsSearchAreaCheckbox" data-area="415" data-area-name="Forest Hills" data-parent-id="400" data-children-ids="" />
                                                                Forest Hills
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-419">
                                                                <input type="checkbox" name="area[]" id="area-419" value="419" class="Checkbox jsSearchAreaCheckbox" data-area="419" data-area-name="Fresh Meadows" data-parent-id="400" data-children-ids="" />
                                                                Fresh Meadows
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-439">
                                                                <input type="checkbox" name="area[]" id="area-439" value="439" class="Checkbox jsSearchAreaCheckbox" data-area="439" data-area-name="Glen Oaks" data-parent-id="400" data-children-ids="" />
                                                                Glen Oaks
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-413">
                                                                <input type="checkbox" name="area[]" id="area-413" value="413" class="Checkbox jsSearchAreaCheckbox" data-area="413" data-area-name="Glendale" data-parent-id="400" data-children-ids="" />
                                                                Glendale
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-453">
                                                                <input type="checkbox" name="area[]" id="area-453" value="453" class="Checkbox jsSearchAreaCheckbox" data-area="453" data-area-name="Hillcrest" data-parent-id="400" data-children-ids="" />
                                                                Hillcrest
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-434">
                                                                <input type="checkbox" name="area[]" id="area-434" value="434" class="Checkbox jsSearchAreaCheckbox" data-area="434" data-area-name="Hollis" data-parent-id="400" data-children-ids="" />
                                                                Hollis
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-425">
                                                                <input type="checkbox" name="area[]" id="area-425" value="425" class="Checkbox jsSearchAreaCheckbox" data-area="425" data-area-name="Howard Beach" data-parent-id="400" data-children-ids="467,470,471,468,469" />
                                                                Howard Beach
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-467">
                                                                <input type="checkbox" name="area[]" id="area-467" value="467" class="Checkbox jsSearchAreaCheckbox" data-area="467" data-area-name="Hamilton Beach" data-parent-id="425" data-children-ids="" />
                                                                Hamilton Beach
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-470">
                                                                <input type="checkbox" name="area[]" id="area-470" value="470" class="Checkbox jsSearchAreaCheckbox" data-area="470" data-area-name="Lindenwood" data-parent-id="425" data-children-ids="" />
                                                                Lindenwood
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-471">
                                                                <input type="checkbox" name="area[]" id="area-471" value="471" class="Checkbox jsSearchAreaCheckbox" data-area="471" data-area-name="Old Howard Beach" data-parent-id="425" data-children-ids="" />
                                                                Old Howard Beach
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-468">
                                                                <input type="checkbox" name="area[]" id="area-468" value="468" class="Checkbox jsSearchAreaCheckbox" data-area="468" data-area-name="Ramblersville" data-parent-id="425" data-children-ids="" />
                                                                Ramblersville
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-469">
                                                                <input type="checkbox" name="area[]" id="area-469" value="469" class="Checkbox jsSearchAreaCheckbox" data-area="469" data-area-name="Rockwood Park" data-parent-id="425" data-children-ids="" />
                                                                Rockwood Park
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-405">
                                                                <input type="checkbox" name="area[]" id="area-405" value="405" class="Checkbox jsSearchAreaCheckbox" data-area="405" data-area-name="Jackson Heights" data-parent-id="400" data-children-ids="" />
                                                                Jackson Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-432">
                                                                <input type="checkbox" name="area[]" id="area-432" value="432" class="Checkbox jsSearchAreaCheckbox" data-area="432" data-area-name="Jamaica" data-parent-id="400" data-children-ids="" />
                                                                Jamaica
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-447">
                                                                <input type="checkbox" name="area[]" id="area-447" value="447" class="Checkbox jsSearchAreaCheckbox" data-area="447" data-area-name="Jamaica Estates" data-parent-id="400" data-children-ids="" />
                                                                Jamaica Estates
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-421">
                                                                <input type="checkbox" name="area[]" id="area-421" value="421" class="Checkbox jsSearchAreaCheckbox" data-area="421" data-area-name="Jamaica Hills" data-parent-id="400" data-children-ids="" />
                                                                Jamaica Hills
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-424">
                                                                <input type="checkbox" name="area[]" id="area-424" value="424" class="Checkbox jsSearchAreaCheckbox" data-area="424" data-area-name="Kew Gardens" data-parent-id="400" data-children-ids="" />
                                                                Kew Gardens
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-420">
                                                                <input type="checkbox" name="area[]" id="area-420" value="420" class="Checkbox jsSearchAreaCheckbox" data-area="420" data-area-name="Kew Gardens Hills" data-parent-id="400" data-children-ids="" />
                                                                Kew Gardens Hills
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-436">
                                                                <input type="checkbox" name="area[]" id="area-436" value="436" class="Checkbox jsSearchAreaCheckbox" data-area="436" data-area-name="Laurelton" data-parent-id="400" data-children-ids="" />
                                                                Laurelton
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-430">
                                                                <input type="checkbox" name="area[]" id="area-430" value="430" class="Checkbox jsSearchAreaCheckbox" data-area="430" data-area-name="Little Neck" data-parent-id="400" data-children-ids="" />
                                                                Little Neck
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-402">
                                                                <input type="checkbox" name="area[]" id="area-402" value="402" class="Checkbox jsSearchAreaCheckbox" data-area="402" data-area-name="Long Island City" data-parent-id="400" data-children-ids="478" />
                                                                Long Island City
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-478">
                                                                <input type="checkbox" name="area[]" id="area-478" value="478" class="Checkbox jsSearchAreaCheckbox" data-area="478" data-area-name="Hunters Point" data-parent-id="402" data-children-ids="" />
                                                                Hunters Point
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-410">
                                                                <input type="checkbox" name="area[]" id="area-410" value="410" class="Checkbox jsSearchAreaCheckbox" data-area="410" data-area-name="Maspeth" data-parent-id="400" data-children-ids="" />
                                                                Maspeth
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-411">
                                                                <input type="checkbox" name="area[]" id="area-411" value="411" class="Checkbox jsSearchAreaCheckbox" data-area="411" data-area-name="Middle Village" data-parent-id="400" data-children-ids="" />
                                                                Middle Village
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-449">
                                                                <input type="checkbox" name="area[]" id="area-449" value="449" class="Checkbox jsSearchAreaCheckbox" data-area="449" data-area-name="New Hyde Park" data-parent-id="400" data-children-ids="" />
                                                                New Hyde Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-407">
                                                                <input type="checkbox" name="area[]" id="area-407" value="407" class="Checkbox jsSearchAreaCheckbox" data-area="407" data-area-name="North Corona" data-parent-id="400" data-children-ids="" />
                                                                North Corona
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-451">
                                                                <input type="checkbox" name="area[]" id="area-451" value="451" class="Checkbox jsSearchAreaCheckbox" data-area="451" data-area-name="Oakland Gardens" data-parent-id="400" data-children-ids="" />
                                                                Oakland Gardens
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-426">
                                                                <input type="checkbox" name="area[]" id="area-426" value="426" class="Checkbox jsSearchAreaCheckbox" data-area="426" data-area-name="Ozone Park" data-parent-id="400" data-children-ids="" />
                                                                Ozone Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-454">
                                                                <input type="checkbox" name="area[]" id="area-454" value="454" class="Checkbox jsSearchAreaCheckbox" data-area="454" data-area-name="Pomonok" data-parent-id="400" data-children-ids="" />
                                                                Pomonok
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-438">
                                                                <input type="checkbox" name="area[]" id="area-438" value="438" class="Checkbox jsSearchAreaCheckbox" data-area="438" data-area-name="Queens Village" data-parent-id="400" data-children-ids="" />
                                                                Queens Village
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-414">
                                                                <input type="checkbox" name="area[]" id="area-414" value="414" class="Checkbox jsSearchAreaCheckbox" data-area="414" data-area-name="Rego Park" data-parent-id="400" data-children-ids="" />
                                                                Rego Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-423">
                                                                <input type="checkbox" name="area[]" id="area-423" value="423" class="Checkbox jsSearchAreaCheckbox" data-area="423" data-area-name="Richmond Hill" data-parent-id="400" data-children-ids="" />
                                                                Richmond Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-412">
                                                                <input type="checkbox" name="area[]" id="area-412" value="412" class="Checkbox jsSearchAreaCheckbox" data-area="412" data-area-name="Ridgewood" data-parent-id="400" data-children-ids="" />
                                                                Ridgewood
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-477">
                                                                <input type="checkbox" name="area[]" id="area-477" value="477" class="Checkbox jsSearchAreaCheckbox" data-area="477" data-area-name="Rockaway All" data-parent-id="400" data-children-ids="448,462,463,464,441,466,440,473,465,452" />
                                                                Rockaway All
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-448">
                                                                <input type="checkbox" name="area[]" id="area-448" value="448" class="Checkbox jsSearchAreaCheckbox" data-area="448" data-area-name="Arverne" data-parent-id="477" data-children-ids="" />
                                                                Arverne
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-462">
                                                                <input type="checkbox" name="area[]" id="area-462" value="462" class="Checkbox jsSearchAreaCheckbox" data-area="462" data-area-name="Bayswater" data-parent-id="477" data-children-ids="" />
                                                                Bayswater
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-463">
                                                                <input type="checkbox" name="area[]" id="area-463" value="463" class="Checkbox jsSearchAreaCheckbox" data-area="463" data-area-name="Belle Harbor" data-parent-id="477" data-children-ids="" />
                                                                Belle Harbor
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-464">
                                                                <input type="checkbox" name="area[]" id="area-464" value="464" class="Checkbox jsSearchAreaCheckbox" data-area="464" data-area-name="Breezy Point" data-parent-id="477" data-children-ids="" />
                                                                Breezy Point
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-441">
                                                                <input type="checkbox" name="area[]" id="area-441" value="441" class="Checkbox jsSearchAreaCheckbox" data-area="441" data-area-name="Broad Channel" data-parent-id="477" data-children-ids="" />
                                                                Broad Channel
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-466">
                                                                <input type="checkbox" name="area[]" id="area-466" value="466" class="Checkbox jsSearchAreaCheckbox" data-area="466" data-area-name="Edgemere" data-parent-id="477" data-children-ids="" />
                                                                Edgemere
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-440">
                                                                <input type="checkbox" name="area[]" id="area-440" value="440" class="Checkbox jsSearchAreaCheckbox" data-area="440" data-area-name="Far Rockaway" data-parent-id="477" data-children-ids="" />
                                                                Far Rockaway
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-473">
                                                                <input type="checkbox" name="area[]" id="area-473" value="473" class="Checkbox jsSearchAreaCheckbox" data-area="473" data-area-name="Hammels" data-parent-id="477" data-children-ids="" />
                                                                Hammels
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-465">
                                                                <input type="checkbox" name="area[]" id="area-465" value="465" class="Checkbox jsSearchAreaCheckbox" data-area="465" data-area-name="Neponsit" data-parent-id="477" data-children-ids="" />
                                                                Neponsit
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-452">
                                                                <input type="checkbox" name="area[]" id="area-452" value="452" class="Checkbox jsSearchAreaCheckbox" data-area="452" data-area-name="Rockaway Park" data-parent-id="477" data-children-ids="" />
                                                                Rockaway Park
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-444">
                                                                <input type="checkbox" name="area[]" id="area-444" value="444" class="Checkbox jsSearchAreaCheckbox" data-area="444" data-area-name="Rosedale" data-parent-id="400" data-children-ids="" />
                                                                Rosedale
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-433">
                                                                <input type="checkbox" name="area[]" id="area-433" value="433" class="Checkbox jsSearchAreaCheckbox" data-area="433" data-area-name="South Jamaica" data-parent-id="400" data-children-ids="" />
                                                                South Jamaica
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-427">
                                                                <input type="checkbox" name="area[]" id="area-427" value="427" class="Checkbox jsSearchAreaCheckbox" data-area="427" data-area-name="South Ozone Park" data-parent-id="400" data-children-ids="" />
                                                                South Ozone Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-450">
                                                                <input type="checkbox" name="area[]" id="area-450" value="450" class="Checkbox jsSearchAreaCheckbox" data-area="450" data-area-name="South Richmond Hill" data-parent-id="400" data-children-ids="" />
                                                                South Richmond Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-445">
                                                                <input type="checkbox" name="area[]" id="area-445" value="445" class="Checkbox jsSearchAreaCheckbox" data-area="445" data-area-name="Springfield Gardens" data-parent-id="400" data-children-ids="" />
                                                                Springfield Gardens
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-435">
                                                                <input type="checkbox" name="area[]" id="area-435" value="435" class="Checkbox jsSearchAreaCheckbox" data-area="435" data-area-name="St. Albans" data-parent-id="400" data-children-ids="" />
                                                                St. Albans
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-403">
                                                                <input type="checkbox" name="area[]" id="area-403" value="403" class="Checkbox jsSearchAreaCheckbox" data-area="403" data-area-name="Sunnyside" data-parent-id="400" data-children-ids="" />
                                                                Sunnyside
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-455">
                                                                <input type="checkbox" name="area[]" id="area-455" value="455" class="Checkbox jsSearchAreaCheckbox" data-area="455" data-area-name="Utopia" data-parent-id="400" data-children-ids="" />
                                                                Utopia
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-417">
                                                                <input type="checkbox" name="area[]" id="area-417" value="417" class="Checkbox jsSearchAreaCheckbox" data-area="417" data-area-name="Whitestone" data-parent-id="400" data-children-ids="461,460" />
                                                                Whitestone
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-461">
                                                                <input type="checkbox" name="area[]" id="area-461" value="461" class="Checkbox jsSearchAreaCheckbox" data-area="461" data-area-name="Beechhurst" data-parent-id="417" data-children-ids="" />
                                                                Beechhurst
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-460">
                                                                <input type="checkbox" name="area[]" id="area-460" value="460" class="Checkbox jsSearchAreaCheckbox" data-area="460" data-area-name="Malba" data-parent-id="417" data-children-ids="" />
                                                                Malba
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-422">
                                                                <input type="checkbox" name="area[]" id="area-422" value="422" class="Checkbox jsSearchAreaCheckbox" data-area="422" data-area-name="Woodhaven" data-parent-id="400" data-children-ids="" />
                                                                Woodhaven
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-404">
                                                                <input type="checkbox" name="area[]" id="area-404" value="404" class="Checkbox jsSearchAreaCheckbox" data-area="404" data-area-name="Woodside" data-parent-id="400" data-children-ids="" />
                                                                Woodside
                                                            </label>
                                                        </div>

                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                        <li class="jsTrigger">
                                            <div
                                                class="Collapsible-trigger jsCollapsibleTrigger jsSearchAreaItem"
                                                data-collapsible-trigger-area="Bronx">
                                                Bronx
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
                                                                for="area-200">
                                                                <input type="checkbox" name="area[]" id="area-200" value="200" class="Checkbox jsSearchAreaCheckbox" data-area="200" data-area-name="All Bronx" data-children-ids="243,221,218,265,229,236,234,211,273,209,216,246,276,214,210,204,224,241,205,202,212,237,207,201,260,231,233,266,238,203,225,274,228,232,248,213,240,245,272,242,244,270" />
                                                                All Bronx
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-243">
                                                                <input type="checkbox" name="area[]" id="area-243" value="243" class="Checkbox jsSearchAreaCheckbox" data-area="243" data-area-name="Baychester" data-parent-id="200" data-children-ids="" />
                                                                Baychester
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-221">
                                                                <input type="checkbox" name="area[]" id="area-221" value="221" class="Checkbox jsSearchAreaCheckbox" data-area="221" data-area-name="Bedford Park" data-parent-id="200" data-children-ids="" />
                                                                Bedford Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-218">
                                                                <input type="checkbox" name="area[]" id="area-218" value="218" class="Checkbox jsSearchAreaCheckbox" data-area="218" data-area-name="Belmont" data-parent-id="200" data-children-ids="" />
                                                                Belmont
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-265">
                                                                <input type="checkbox" name="area[]" id="area-265" value="265" class="Checkbox jsSearchAreaCheckbox" data-area="265" data-area-name="Bronxwood" data-parent-id="200" data-children-ids="" />
                                                                Bronxwood
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-229">
                                                                <input type="checkbox" name="area[]" id="area-229" value="229" class="Checkbox jsSearchAreaCheckbox" data-area="229" data-area-name="Castle Hill" data-parent-id="200" data-children-ids="" />
                                                                Castle Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-236">
                                                                <input type="checkbox" name="area[]" id="area-236" value="236" class="Checkbox jsSearchAreaCheckbox" data-area="236" data-area-name="City Island" data-parent-id="200" data-children-ids="" />
                                                                City Island
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-234">
                                                                <input type="checkbox" name="area[]" id="area-234" value="234" class="Checkbox jsSearchAreaCheckbox" data-area="234" data-area-name="Co-op City" data-parent-id="200" data-children-ids="" />
                                                                Co-op City
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-211">
                                                                <input type="checkbox" name="area[]" id="area-211" value="211" class="Checkbox jsSearchAreaCheckbox" data-area="211" data-area-name="Concourse" data-parent-id="200" data-children-ids="" />
                                                                Concourse
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-273">
                                                                <input type="checkbox" name="area[]" id="area-273" value="273" class="Checkbox jsSearchAreaCheckbox" data-area="273" data-area-name="Country Club" data-parent-id="200" data-children-ids="" />
                                                                Country Club
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-209">
                                                                <input type="checkbox" name="area[]" id="area-209" value="209" class="Checkbox jsSearchAreaCheckbox" data-area="209" data-area-name="Crotona Park East" data-parent-id="200" data-children-ids="" />
                                                                Crotona Park East
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-216">
                                                                <input type="checkbox" name="area[]" id="area-216" value="216" class="Checkbox jsSearchAreaCheckbox" data-area="216" data-area-name="East Tremont" data-parent-id="200" data-children-ids="219" />
                                                                East Tremont
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-219">
                                                                <input type="checkbox" name="area[]" id="area-219" value="219" class="Checkbox jsSearchAreaCheckbox" data-area="219" data-area-name="West Farms" data-parent-id="216" data-children-ids="" />
                                                                West Farms
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-246">
                                                                <input type="checkbox" name="area[]" id="area-246" value="246" class="Checkbox jsSearchAreaCheckbox" data-area="246" data-area-name="Eastchester" data-parent-id="200" data-children-ids="" />
                                                                Eastchester
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-276">
                                                                <input type="checkbox" name="area[]" id="area-276" value="276" class="Checkbox jsSearchAreaCheckbox" data-area="276" data-area-name="Edenwald" data-parent-id="200" data-children-ids="" />
                                                                Edenwald
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-214">
                                                                <input type="checkbox" name="area[]" id="area-214" value="214" class="Checkbox jsSearchAreaCheckbox" data-area="214" data-area-name="Fordham" data-parent-id="200" data-children-ids="" />
                                                                Fordham
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-210">
                                                                <input type="checkbox" name="area[]" id="area-210" value="210" class="Checkbox jsSearchAreaCheckbox" data-area="210" data-area-name="Highbridge" data-parent-id="200" data-children-ids="" />
                                                                Highbridge
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-204">
                                                                <input type="checkbox" name="area[]" id="area-204" value="204" class="Checkbox jsSearchAreaCheckbox" data-area="204" data-area-name="Hunts Point" data-parent-id="200" data-children-ids="" />
                                                                Hunts Point
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-224">
                                                                <input type="checkbox" name="area[]" id="area-224" value="224" class="Checkbox jsSearchAreaCheckbox" data-area="224" data-area-name="Kingsbridge" data-parent-id="200" data-children-ids="220" />
                                                                Kingsbridge
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-220">
                                                                <input type="checkbox" name="area[]" id="area-220" value="220" class="Checkbox jsSearchAreaCheckbox" data-area="220" data-area-name="Kingsbridge Heights" data-parent-id="224" data-children-ids="" />
                                                                Kingsbridge Heights
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-241">
                                                                <input type="checkbox" name="area[]" id="area-241" value="241" class="Checkbox jsSearchAreaCheckbox" data-area="241" data-area-name="Laconia" data-parent-id="200" data-children-ids="" />
                                                                Laconia
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-205">
                                                                <input type="checkbox" name="area[]" id="area-205" value="205" class="Checkbox jsSearchAreaCheckbox" data-area="205" data-area-name="Longwood" data-parent-id="200" data-children-ids="" />
                                                                Longwood
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-202">
                                                                <input type="checkbox" name="area[]" id="area-202" value="202" class="Checkbox jsSearchAreaCheckbox" data-area="202" data-area-name="Melrose" data-parent-id="200" data-children-ids="" />
                                                                Melrose
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-212">
                                                                <input type="checkbox" name="area[]" id="area-212" value="212" class="Checkbox jsSearchAreaCheckbox" data-area="212" data-area-name="Morris Heights" data-parent-id="200" data-children-ids="" />
                                                                Morris Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-237">
                                                                <input type="checkbox" name="area[]" id="area-237" value="237" class="Checkbox jsSearchAreaCheckbox" data-area="237" data-area-name="Morris Park" data-parent-id="200" data-children-ids="" />
                                                                Morris Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-207">
                                                                <input type="checkbox" name="area[]" id="area-207" value="207" class="Checkbox jsSearchAreaCheckbox" data-area="207" data-area-name="Morrisania" data-parent-id="200" data-children-ids="208" />
                                                                Morrisania
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-208">
                                                                <input type="checkbox" name="area[]" id="area-208" value="208" class="Checkbox jsSearchAreaCheckbox" data-area="208" data-area-name="Claremont" data-parent-id="207" data-children-ids="" />
                                                                Claremont
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-201">
                                                                <input type="checkbox" name="area[]" id="area-201" value="201" class="Checkbox jsSearchAreaCheckbox" data-area="201" data-area-name="Mott Haven" data-parent-id="200" data-children-ids="271" />
                                                                Mott Haven
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-271">
                                                                <input type="checkbox" name="area[]" id="area-271" value="271" class="Checkbox jsSearchAreaCheckbox" data-area="271" data-area-name="North New York" data-parent-id="201" data-children-ids="" />
                                                                North New York
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-260">
                                                                <input type="checkbox" name="area[]" id="area-260" value="260" class="Checkbox jsSearchAreaCheckbox" data-area="260" data-area-name="Norwood" data-parent-id="200" data-children-ids="" />
                                                                Norwood
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-231">
                                                                <input type="checkbox" name="area[]" id="area-231" value="231" class="Checkbox jsSearchAreaCheckbox" data-area="231" data-area-name="Parkchester" data-parent-id="200" data-children-ids="" />
                                                                Parkchester
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-233">
                                                                <input type="checkbox" name="area[]" id="area-233" value="233" class="Checkbox jsSearchAreaCheckbox" data-area="233" data-area-name="Pelham Bay" data-parent-id="200" data-children-ids="" />
                                                                Pelham Bay
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-266">
                                                                <input type="checkbox" name="area[]" id="area-266" value="266" class="Checkbox jsSearchAreaCheckbox" data-area="266" data-area-name="Pelham Gardens" data-parent-id="200" data-children-ids="" />
                                                                Pelham Gardens
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-238">
                                                                <input type="checkbox" name="area[]" id="area-238" value="238" class="Checkbox jsSearchAreaCheckbox" data-area="238" data-area-name="Pelham Parkway" data-parent-id="200" data-children-ids="" />
                                                                Pelham Parkway
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-203">
                                                                <input type="checkbox" name="area[]" id="area-203" value="203" class="Checkbox jsSearchAreaCheckbox" data-area="203" data-area-name="Port Morris" data-parent-id="200" data-children-ids="" />
                                                                Port Morris
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-225">
                                                                <input type="checkbox" name="area[]" id="area-225" value="225" class="Checkbox jsSearchAreaCheckbox" data-area="225" data-area-name="Riverdale" data-parent-id="200" data-children-ids="227,249" />
                                                                Riverdale
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-227">
                                                                <input type="checkbox" name="area[]" id="area-227" value="227" class="Checkbox jsSearchAreaCheckbox" data-area="227" data-area-name="Fieldston" data-parent-id="225" data-children-ids="" />
                                                                Fieldston
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-249">
                                                                <input type="checkbox" name="area[]" id="area-249" value="249" class="Checkbox jsSearchAreaCheckbox" data-area="249" data-area-name="Spuyten Duyvil" data-parent-id="225" data-children-ids="" />
                                                                Spuyten Duyvil
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-274">
                                                                <input type="checkbox" name="area[]" id="area-274" value="274" class="Checkbox jsSearchAreaCheckbox" data-area="274" data-area-name="Schuylerville" data-parent-id="200" data-children-ids="" />
                                                                Schuylerville
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-228">
                                                                <input type="checkbox" name="area[]" id="area-228" value="228" class="Checkbox jsSearchAreaCheckbox" data-area="228" data-area-name="Soundview" data-parent-id="200" data-children-ids="" />
                                                                Soundview
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-232">
                                                                <input type="checkbox" name="area[]" id="area-232" value="232" class="Checkbox jsSearchAreaCheckbox" data-area="232" data-area-name="Throgs Neck" data-parent-id="200" data-children-ids="267" />
                                                                Throgs Neck
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-267">
                                                                <input type="checkbox" name="area[]" id="area-267" value="267" class="Checkbox jsSearchAreaCheckbox" data-area="267" data-area-name="Locust Point" data-parent-id="232" data-children-ids="" />
                                                                Locust Point
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-248">
                                                                <input type="checkbox" name="area[]" id="area-248" value="248" class="Checkbox jsSearchAreaCheckbox" data-area="248" data-area-name="Tremont" data-parent-id="200" data-children-ids="215" />
                                                                Tremont
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-215">
                                                                <input type="checkbox" name="area[]" id="area-215" value="215" class="Checkbox jsSearchAreaCheckbox" data-area="215" data-area-name="Mt. Hope" data-parent-id="248" data-children-ids="" />
                                                                Mt. Hope
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-213">
                                                                <input type="checkbox" name="area[]" id="area-213" value="213" class="Checkbox jsSearchAreaCheckbox" data-area="213" data-area-name="University Heights" data-parent-id="200" data-children-ids="" />
                                                                University Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-240">
                                                                <input type="checkbox" name="area[]" id="area-240" value="240" class="Checkbox jsSearchAreaCheckbox" data-area="240" data-area-name="Van Nest" data-parent-id="200" data-children-ids="" />
                                                                Van Nest
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-245">
                                                                <input type="checkbox" name="area[]" id="area-245" value="245" class="Checkbox jsSearchAreaCheckbox" data-area="245" data-area-name="Wakefield" data-parent-id="200" data-children-ids="" />
                                                                Wakefield
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-272">
                                                                <input type="checkbox" name="area[]" id="area-272" value="272" class="Checkbox jsSearchAreaCheckbox" data-area="272" data-area-name="Westchester Village" data-parent-id="200" data-children-ids="235" />
                                                                Westchester Village
                                                            </label>
                                                        </div>

                                                    </li>
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-235">
                                                                <input type="checkbox" name="area[]" id="area-235" value="235" class="Checkbox jsSearchAreaCheckbox" data-area="235" data-area-name="Westchester Square" data-parent-id="272" data-children-ids="" />
                                                                Westchester Square
                                                            </label>
                                                        </div>

                                                    </li>


                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-242">
                                                                <input type="checkbox" name="area[]" id="area-242" value="242" class="Checkbox jsSearchAreaCheckbox" data-area="242" data-area-name="Williamsbridge" data-parent-id="200" data-children-ids="" />
                                                                Williamsbridge
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-244">
                                                                <input type="checkbox" name="area[]" id="area-244" value="244" class="Checkbox jsSearchAreaCheckbox" data-area="244" data-area-name="Woodlawn" data-parent-id="200" data-children-ids="" />
                                                                Woodlawn
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level2">
                                                            <label class="Collapsible-checkboxLabel" for="area-270">
                                                                <input type="checkbox" name="area[]" id="area-270" value="270" class="Checkbox jsSearchAreaCheckbox" data-area="270" data-area-name="Woodstock" data-parent-id="200" data-children-ids="" />
                                                                Woodstock
                                                            </label>
                                                        </div>

                                                    </li>

                                                </ul>
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
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-510">
                                                                <input type="checkbox" name="area[]" id="area-510" value="510" class="Checkbox jsSearchAreaCheckbox" data-area="510" data-area-name="Arrochar" data-parent-id="503" data-children-ids="" />
                                                                Arrochar
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-511">
                                                                <input type="checkbox" name="area[]" id="area-511" value="511" class="Checkbox jsSearchAreaCheckbox" data-area="511" data-area-name="Bay Terrace" data-parent-id="503" data-children-ids="" />
                                                                Bay Terrace
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-522">
                                                                <input type="checkbox" name="area[]" id="area-522" value="522" class="Checkbox jsSearchAreaCheckbox" data-area="522" data-area-name="Dongan Hills" data-parent-id="503" data-children-ids="" />
                                                                Dongan Hills
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-523">
                                                                <input type="checkbox" name="area[]" id="area-523" value="523" class="Checkbox jsSearchAreaCheckbox" data-area="523" data-area-name="Egbertville" data-parent-id="503" data-children-ids="" />
                                                                Egbertville
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-526">
                                                                <input type="checkbox" name="area[]" id="area-526" value="526" class="Checkbox jsSearchAreaCheckbox" data-area="526" data-area-name="Emerson Hill" data-parent-id="503" data-children-ids="" />
                                                                Emerson Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-527">
                                                                <input type="checkbox" name="area[]" id="area-527" value="527" class="Checkbox jsSearchAreaCheckbox" data-area="527" data-area-name="Fort Wadsworth" data-parent-id="503" data-children-ids="" />
                                                                Fort Wadsworth
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-529">
                                                                <input type="checkbox" name="area[]" id="area-529" value="529" class="Checkbox jsSearchAreaCheckbox" data-area="529" data-area-name="Grant City" data-parent-id="503" data-children-ids="" />
                                                                Grant City
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-530">
                                                                <input type="checkbox" name="area[]" id="area-530" value="530" class="Checkbox jsSearchAreaCheckbox" data-area="530" data-area-name="Grasmere" data-parent-id="503" data-children-ids="" />
                                                                Grasmere
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-540">
                                                                <input type="checkbox" name="area[]" id="area-540" value="540" class="Checkbox jsSearchAreaCheckbox" data-area="540" data-area-name="Lighthouse Hill" data-parent-id="503" data-children-ids="" />
                                                                Lighthouse Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-546">
                                                                <input type="checkbox" name="area[]" id="area-546" value="546" class="Checkbox jsSearchAreaCheckbox" data-area="546" data-area-name="Midland Beach" data-parent-id="503" data-children-ids="" />
                                                                Midland Beach
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-548">
                                                                <input type="checkbox" name="area[]" id="area-548" value="548" class="Checkbox jsSearchAreaCheckbox" data-area="548" data-area-name="New Dorp" data-parent-id="503" data-children-ids="" />
                                                                New Dorp
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-591">
                                                                <input type="checkbox" name="area[]" id="area-591" value="591" class="Checkbox jsSearchAreaCheckbox" data-area="591" data-area-name="New Dorp Beach" data-parent-id="503" data-children-ids="" />
                                                                New Dorp Beach
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-550">
                                                                <input type="checkbox" name="area[]" id="area-550" value="550" class="Checkbox jsSearchAreaCheckbox" data-area="550" data-area-name="Oakwood" data-parent-id="503" data-children-ids="" />
                                                                Oakwood
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-592">
                                                                <input type="checkbox" name="area[]" id="area-592" value="592" class="Checkbox jsSearchAreaCheckbox" data-area="592" data-area-name="Oakwood Beach" data-parent-id="503" data-children-ids="" />
                                                                Oakwood Beach
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-551">
                                                                <input type="checkbox" name="area[]" id="area-551" value="551" class="Checkbox jsSearchAreaCheckbox" data-area="551" data-area-name="Ocean Breeze" data-parent-id="503" data-children-ids="" />
                                                                Ocean Breeze
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-561">
                                                                <input type="checkbox" name="area[]" id="area-561" value="561" class="Checkbox jsSearchAreaCheckbox" data-area="561" data-area-name="Richmondtown" data-parent-id="503" data-children-ids="" />
                                                                Richmondtown
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-568">
                                                                <input type="checkbox" name="area[]" id="area-568" value="568" class="Checkbox jsSearchAreaCheckbox" data-area="568" data-area-name="South Beach" data-parent-id="503" data-children-ids="" />
                                                                South Beach
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-575">
                                                                <input type="checkbox" name="area[]" id="area-575" value="575" class="Checkbox jsSearchAreaCheckbox" data-area="575" data-area-name="Todt Hill" data-parent-id="503" data-children-ids="" />
                                                                Todt Hill
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
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-514">
                                                                <input type="checkbox" name="area[]" id="area-514" value="514" class="Checkbox jsSearchAreaCheckbox" data-area="514" data-area-name="Bulls Head" data-parent-id="505" data-children-ids="" />
                                                                Bulls Head
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-516">
                                                                <input type="checkbox" name="area[]" id="area-516" value="516" class="Checkbox jsSearchAreaCheckbox" data-area="516" data-area-name="Castleton Corners" data-parent-id="505" data-children-ids="" />
                                                                Castleton Corners
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-528">
                                                                <input type="checkbox" name="area[]" id="area-528" value="528" class="Checkbox jsSearchAreaCheckbox" data-area="528" data-area-name="Graniteville" data-parent-id="505" data-children-ids="" />
                                                                Graniteville
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-543">
                                                                <input type="checkbox" name="area[]" id="area-543" value="543" class="Checkbox jsSearchAreaCheckbox" data-area="543" data-area-name="Manor Heights" data-parent-id="505" data-children-ids="" />
                                                                Manor Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-545">
                                                                <input type="checkbox" name="area[]" id="area-545" value="545" class="Checkbox jsSearchAreaCheckbox" data-area="545" data-area-name="Meiers Corners" data-parent-id="505" data-children-ids="" />
                                                                Meiers Corners
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-549">
                                                                <input type="checkbox" name="area[]" id="area-549" value="549" class="Checkbox jsSearchAreaCheckbox" data-area="549" data-area-name="New Springville" data-parent-id="505" data-children-ids="" />
                                                                New Springville
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-573">
                                                                <input type="checkbox" name="area[]" id="area-573" value="573" class="Checkbox jsSearchAreaCheckbox" data-area="573" data-area-name="Sunnyside (Staten Island)" data-parent-id="505" data-children-ids="" />
                                                                Sunnyside (Staten Island)
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-582">
                                                                <input type="checkbox" name="area[]" id="area-582" value="582" class="Checkbox jsSearchAreaCheckbox" data-area="582" data-area-name="Westerleigh" data-parent-id="505" data-children-ids="" />
                                                                Westerleigh
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-583">
                                                                <input type="checkbox" name="area[]" id="area-583" value="583" class="Checkbox jsSearchAreaCheckbox" data-area="583" data-area-name="Willowbrook" data-parent-id="505" data-children-ids="" />
                                                                Willowbrook
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
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-509">
                                                                <input type="checkbox" name="area[]" id="area-509" value="509" class="Checkbox jsSearchAreaCheckbox" data-area="509" data-area-name="Arlington" data-parent-id="501" data-children-ids="" />
                                                                Arlington
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-519">
                                                                <input type="checkbox" name="area[]" id="area-519" value="519" class="Checkbox jsSearchAreaCheckbox" data-area="519" data-area-name="Clifton" data-parent-id="501" data-children-ids="" />
                                                                Clifton
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-524">
                                                                <input type="checkbox" name="area[]" id="area-524" value="524" class="Checkbox jsSearchAreaCheckbox" data-area="524" data-area-name="Elm Park" data-parent-id="501" data-children-ids="" />
                                                                Elm Park
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-533">
                                                                <input type="checkbox" name="area[]" id="area-533" value="533" class="Checkbox jsSearchAreaCheckbox" data-area="533" data-area-name="Grymes Hill" data-parent-id="501" data-children-ids="" />
                                                                Grymes Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-537">
                                                                <input type="checkbox" name="area[]" id="area-537" value="537" class="Checkbox jsSearchAreaCheckbox" data-area="537" data-area-name="Howland Hook" data-parent-id="501" data-children-ids="" />
                                                                Howland Hook
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-544">
                                                                <input type="checkbox" name="area[]" id="area-544" value="544" class="Checkbox jsSearchAreaCheckbox" data-area="544" data-area-name="Mariners Harbor" data-parent-id="501" data-children-ids="" />
                                                                Mariners Harbor
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-547">
                                                                <input type="checkbox" name="area[]" id="area-547" value="547" class="Checkbox jsSearchAreaCheckbox" data-area="547" data-area-name="New Brighton" data-parent-id="501" data-children-ids="" />
                                                                New Brighton
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-553">
                                                                <input type="checkbox" name="area[]" id="area-553" value="553" class="Checkbox jsSearchAreaCheckbox" data-area="553" data-area-name="Park Hill" data-parent-id="501" data-children-ids="" />
                                                                Park Hill
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-556">
                                                                <input type="checkbox" name="area[]" id="area-556" value="556" class="Checkbox jsSearchAreaCheckbox" data-area="556" data-area-name="Port Richmond" data-parent-id="501" data-children-ids="" />
                                                                Port Richmond
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-562">
                                                                <input type="checkbox" name="area[]" id="area-562" value="562" class="Checkbox jsSearchAreaCheckbox" data-area="562" data-area-name="Rosebank" data-parent-id="501" data-children-ids="" />
                                                                Rosebank
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-569">
                                                                <input type="checkbox" name="area[]" id="area-569" value="569" class="Checkbox jsSearchAreaCheckbox" data-area="569" data-area-name="Saint George" data-parent-id="501" data-children-ids="" />
                                                                Saint George
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-565">
                                                                <input type="checkbox" name="area[]" id="area-565" value="565" class="Checkbox jsSearchAreaCheckbox" data-area="565" data-area-name="Shore Acres" data-parent-id="501" data-children-ids="" />
                                                                Shore Acres
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-566">
                                                                <input type="checkbox" name="area[]" id="area-566" value="566" class="Checkbox jsSearchAreaCheckbox" data-area="566" data-area-name="Silver Lake" data-parent-id="501" data-children-ids="" />
                                                                Silver Lake
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-571">
                                                                <input type="checkbox" name="area[]" id="area-571" value="571" class="Checkbox jsSearchAreaCheckbox" data-area="571" data-area-name="Stapleton" data-parent-id="501" data-children-ids="" />
                                                                Stapleton
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-576">
                                                                <input type="checkbox" name="area[]" id="area-576" value="576" class="Checkbox jsSearchAreaCheckbox" data-area="576" data-area-name="Tompkinsville" data-parent-id="501" data-children-ids="" />
                                                                Tompkinsville
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-580">
                                                                <input type="checkbox" name="area[]" id="area-580" value="580" class="Checkbox jsSearchAreaCheckbox" data-area="580" data-area-name="West Brighton" data-parent-id="501" data-children-ids="" />
                                                                West Brighton
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
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-507">
                                                                <input type="checkbox" name="area[]" id="area-507" value="507" class="Checkbox jsSearchAreaCheckbox" data-area="507" data-area-name="Annadale" data-parent-id="502" data-children-ids="" />
                                                                Annadale
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-508">
                                                                <input type="checkbox" name="area[]" id="area-508" value="508" class="Checkbox jsSearchAreaCheckbox" data-area="508" data-area-name="Arden Heights" data-parent-id="502" data-children-ids="" />
                                                                Arden Heights
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-517">
                                                                <input type="checkbox" name="area[]" id="area-517" value="517" class="Checkbox jsSearchAreaCheckbox" data-area="517" data-area-name="Charleston" data-parent-id="502" data-children-ids="" />
                                                                Charleston
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-525">
                                                                <input type="checkbox" name="area[]" id="area-525" value="525" class="Checkbox jsSearchAreaCheckbox" data-area="525" data-area-name="Eltingville" data-parent-id="502" data-children-ids="" />
                                                                Eltingville
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-531">
                                                                <input type="checkbox" name="area[]" id="area-531" value="531" class="Checkbox jsSearchAreaCheckbox" data-area="531" data-area-name="Great Kills" data-parent-id="502" data-children-ids="" />
                                                                Great Kills
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-532">
                                                                <input type="checkbox" name="area[]" id="area-532" value="532" class="Checkbox jsSearchAreaCheckbox" data-area="532" data-area-name="Greenridge" data-parent-id="502" data-children-ids="" />
                                                                Greenridge
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-538">
                                                                <input type="checkbox" name="area[]" id="area-538" value="538" class="Checkbox jsSearchAreaCheckbox" data-area="538" data-area-name="Huguenot" data-parent-id="502" data-children-ids="" />
                                                                Huguenot
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-554">
                                                                <input type="checkbox" name="area[]" id="area-554" value="554" class="Checkbox jsSearchAreaCheckbox" data-area="554" data-area-name="Pleasant Plains" data-parent-id="502" data-children-ids="" />
                                                                Pleasant Plains
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-557">
                                                                <input type="checkbox" name="area[]" id="area-557" value="557" class="Checkbox jsSearchAreaCheckbox" data-area="557" data-area-name="Princes Bay" data-parent-id="502" data-children-ids="" />
                                                                Princes Bay
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-560">
                                                                <input type="checkbox" name="area[]" id="area-560" value="560" class="Checkbox jsSearchAreaCheckbox" data-area="560" data-area-name="Richmond Valley" data-parent-id="502" data-children-ids="" />
                                                                Richmond Valley
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-563">
                                                                <input type="checkbox" name="area[]" id="area-563" value="563" class="Checkbox jsSearchAreaCheckbox" data-area="563" data-area-name="Rossville" data-parent-id="502" data-children-ids="" />
                                                                Rossville
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-577">
                                                                <input type="checkbox" name="area[]" id="area-577" value="577" class="Checkbox jsSearchAreaCheckbox" data-area="577" data-area-name="Tottenville" data-parent-id="502" data-children-ids="" />
                                                                Tottenville
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-584">
                                                                <input type="checkbox" name="area[]" id="area-584" value="584" class="Checkbox jsSearchAreaCheckbox" data-area="584" data-area-name="Woodrow" data-parent-id="502" data-children-ids="" />
                                                                Woodrow
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
                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-512">
                                                                <input type="checkbox" name="area[]" id="area-512" value="512" class="Checkbox jsSearchAreaCheckbox" data-area="512" data-area-name="Bloomfield" data-parent-id="504" data-children-ids="" />
                                                                Bloomfield
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-518">
                                                                <input type="checkbox" name="area[]" id="area-518" value="518" class="Checkbox jsSearchAreaCheckbox" data-area="518" data-area-name="Chelsea (Staten Island)" data-parent-id="504" data-children-ids="" />
                                                                Chelsea (Staten Island)
                                                            </label>
                                                        </div>

                                                    </li>

                                                    <li class="jsCollapsibleChild">
                                                        <div class="Collapsible-checkbox jsSearchAreaItem Collapsible-level3">
                                                            <label class="Collapsible-checkboxLabel" for="area-578">
                                                                <input type="checkbox" name="area[]" id="area-578" value="578" class="Checkbox jsSearchAreaCheckbox" data-area="578" data-area-name="Travis" data-parent-id="504" data-children-ids="" />
                                                                Travis
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

                                    <button
                                        class="SearchAreasDropdown-searchButton u-hidden jsSearchAreaDropdownSearchButton"
                                        type="button">
                                        Search for <span class="SearchAreasDropdown-searchButtonText jsSearchAreaDropdownSearchButtonText"></span>
                                    </button>
                                    <a rel="nofollow" data-modal-class="modal-location" data-modal-live="true" data-analytics-type="click" data-analytics-name="clickOnAreaMapSelector" tabindex="-1" class="SearchAreasDropdown-showAllLink u-noOutline hidden-xs hidden-sm" data-toggle="modal" data-modal-source="/area/-/area_map_selector_dialog" href="#"><i class='SearchAreasDropdown-icon fa fa-map-o'></i>&nbsp;&nbsp; View Map</a>
                                </div>

                                <input id="area-selector-perf-mark-prefix" type="hidden" value="home.sales">
                            </div>

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
                                <option disabled="disabled" selected="selected" value="">$ Minimum</option>
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

                            <input id="search-studio"
                                   class="CheckboxGroup-input jsBedsInput"
                                   value="&lt;1"
                                   type="checkbox"
                            />
                            <label class="CheckboxGroup-label Home-searchBedsLabel" for="search-studio">
                                <span class="CheckboxGroup-copy">Studio</span>
                            </label>
                            <input id="search-1"
                                   class="CheckboxGroup-input jsBedsInput"
                                   value="1"
                                   type="checkbox"
                            />
                            <label class="CheckboxGroup-label Home-searchBedsLabel" for="search-1">
                                <span class="CheckboxGroup-copy">1</span>
                            </label>
                            <input id="search-2"
                                   class="CheckboxGroup-input jsBedsInput"
                                   value="2"
                                   type="checkbox"
                            />
                            <label class="CheckboxGroup-label Home-searchBedsLabel" for="search-2">
                                <span class="CheckboxGroup-copy">2</span>
                            </label>
                            <input id="search-3"
                                   class="CheckboxGroup-input jsBedsInput"
                                   value="3"
                                   type="checkbox"
                            />
                            <label class="CheckboxGroup-label Home-searchBedsLabel" for="search-3">
                                <span class="CheckboxGroup-copy">3</span>
                            </label>
                            <input id="search-4+"
                                   class="CheckboxGroup-input jsBedsInput"
                                   value="&gt;=4"
                                   type="checkbox"
                            />
                            <label class="CheckboxGroup-label Home-searchBedsLabel" for="search-4+">
                                <span class="CheckboxGroup-copy">4+</span>
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
{{--<script>--}}
{{--    // $('.Home-searchType').click(function(){--}}
{{--    //    $('.Home-searchType').removeClass('isCurrent');--}}
{{--    //    $(this).addClass('isCurrent');--}}
{{--    // });--}}
{{--</script>--}}

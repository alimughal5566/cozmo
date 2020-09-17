@extends('layouts.app')
<div style="height: 15%;"></div>



<link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/fonts.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/masterFrontend/css/building.css')}}">
<style>
    .SearchBlock-normal--marginTop {
        margin-top: 18px;
    }
    @media (min-width: 980px) {
        .SiteBlock-content {
            padding-top: 0px !important;
        }
    }
</style>
@section('header')
    @include('layouts.header')
@endsection
    <div class="ColoredBox ColoredBox--white cstom_color">
        <div class="ColoredBox-content">

            <div class="SearchBlock">
                <h1 class="SearchBlock-title">Search Buildings</h1>

                <form data-form-with-analytics-criteria="true" data-criteria-url="/nyc/buildings/search_criteria" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
                    <div class="SearchBlock-options SearchBlock-options--basic">

                        <div class="SearchBlock-wide" id="location_combo_area">
                            <h3 class="SearchBlock-label">Location</h3>
                            <div class="AreaSelect csmtom_slctor" data-area="selector">
                                <div class="AreaSelect-input fa fa-map-marker" style="width: 100%;">
                                    <ul class="AreaSelect-selectedItems" data-area="selectedItems">
                                        <li class="AreaSelect-chooseItem" data-area="selectItem">
                                            <input class="AreaSelect-textBox" type="text" data-area="textBox" placeholder="Neighborhood, Address, Building, Keyword" autocomplete="off"/>
                                        </li>
                                    </ul>
                                </div>
                                <div class="AreaSelect-list" data-area="list">
                                    <ul class="AreaSelect-itemsList" data-area="itemsList">
                                        <li class="AreaSelect-item AreaSelect-item--0" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1"
                                                   class="DefaultCheckbox"
                                                   value="1"
                                                   data-area="input"
                                                   data-parent-id="0"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1">NYC and NJ</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--1" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-100"
                                                   class="DefaultCheckbox"
                                                   value="100"
                                                   data-area="input"
                                                   data-parent-id="1"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-100">Manhattan</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-102"
                                                   class="DefaultCheckbox"
                                                   value="102"
                                                   data-area="input"
                                                   data-parent-id="100"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-102">All Downtown</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-112"
                                                   class="DefaultCheckbox"
                                                   value="112"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-112">Battery Park City</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-115"
                                                   class="DefaultCheckbox"
                                                   value="115"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with="146"
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-115">Chelsea</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-163"
                                                   class="DefaultCheckbox"
                                                   value="163"
                                                   data-area="input"
                                                   data-parent-id="115"
                                                   data-always-checked-with="146"
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-163">West Chelsea</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-110"
                                                   class="DefaultCheckbox"
                                                   value="110"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-110">Chinatown</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-103"
                                                   class="DefaultCheckbox"
                                                   value="103"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-103">Civic Center</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-117"
                                                   class="DefaultCheckbox"
                                                   value="117"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with="106"
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-117">East Village</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-104"
                                                   class="DefaultCheckbox"
                                                   value="104"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-104">Financial District</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-114"
                                                   class="DefaultCheckbox"
                                                   value="114"
                                                   data-area="input"
                                                   data-parent-id="104"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-114">Fulton/Seaport</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-158"
                                                   class="DefaultCheckbox"
                                                   value="158"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-158">Flatiron</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-159"
                                                   class="DefaultCheckbox"
                                                   value="159"
                                                   data-area="input"
                                                   data-parent-id="158"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-159">NoMad</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-113"
                                                   class="DefaultCheckbox"
                                                   value="113"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-113">Gramercy Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-116"
                                                   class="DefaultCheckbox"
                                                   value="116"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-116">Greenwich Village</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-118"
                                                   class="DefaultCheckbox"
                                                   value="118"
                                                   data-area="input"
                                                   data-parent-id="116"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-118">Noho</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-108"
                                                   class="DefaultCheckbox"
                                                   value="108"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-108">Little Italy</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-109"
                                                   class="DefaultCheckbox"
                                                   value="109"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-109">Lower East Side</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-111"
                                                   class="DefaultCheckbox"
                                                   value="111"
                                                   data-area="input"
                                                   data-parent-id="109"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-111">Two Bridges</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-162"
                                                   class="DefaultCheckbox"
                                                   value="162"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-162">Nolita</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-107"
                                                   class="DefaultCheckbox"
                                                   value="107"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-107">Soho</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-166"
                                                   class="DefaultCheckbox"
                                                   value="166"
                                                   data-area="input"
                                                   data-parent-id="107"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-166">Hudson Square</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-106"
                                                   class="DefaultCheckbox"
                                                   value="106"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-106">Stuyvesant Town/PCV</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-105"
                                                   class="DefaultCheckbox"
                                                   value="105"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-105">Tribeca</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-157"
                                                   class="DefaultCheckbox"
                                                   value="157"
                                                   data-area="input"
                                                   data-parent-id="102"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-157">West Village</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-119"
                                                   class="DefaultCheckbox"
                                                   value="119"
                                                   data-area="input"
                                                   data-parent-id="100"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-119">All Midtown</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-121"
                                                   class="DefaultCheckbox"
                                                   value="121"
                                                   data-area="input"
                                                   data-parent-id="119"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-121">Central Park South</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-120"
                                                   class="DefaultCheckbox"
                                                   value="120"
                                                   data-area="input"
                                                   data-parent-id="119"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-120">Midtown</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-123"
                                                   class="DefaultCheckbox"
                                                   value="123"
                                                   data-area="input"
                                                   data-parent-id="119"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-123">Midtown East</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-133"
                                                   class="DefaultCheckbox"
                                                   value="133"
                                                   data-area="input"
                                                   data-parent-id="123"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-133">Kips Bay</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-130"
                                                   class="DefaultCheckbox"
                                                   value="130"
                                                   data-area="input"
                                                   data-parent-id="123"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-130">Murray Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-131"
                                                   class="DefaultCheckbox"
                                                   value="131"
                                                   data-area="input"
                                                   data-parent-id="123"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-131">Sutton Place</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-132"
                                                   class="DefaultCheckbox"
                                                   value="132"
                                                   data-area="input"
                                                   data-parent-id="123"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-132">Turtle Bay</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--5" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-134"
                                                   class="DefaultCheckbox"
                                                   value="134"
                                                   data-area="input"
                                                   data-parent-id="132"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-134">Beekman</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-122"
                                                   class="DefaultCheckbox"
                                                   value="122"
                                                   data-area="input"
                                                   data-parent-id="119"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-122">Midtown South</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-124"
                                                   class="DefaultCheckbox"
                                                   value="124"
                                                   data-area="input"
                                                   data-parent-id="119"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-124">Midtown West</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-152"
                                                   class="DefaultCheckbox"
                                                   value="152"
                                                   data-area="input"
                                                   data-parent-id="124"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-152">Hell's Kitchen</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-146"
                                                   class="DefaultCheckbox"
                                                   value="146"
                                                   data-area="input"
                                                   data-parent-id="124"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-146">Hudson Yards</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-139"
                                                   class="DefaultCheckbox"
                                                   value="139"
                                                   data-area="input"
                                                   data-parent-id="100"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-139">All Upper East Side</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-140"
                                                   class="DefaultCheckbox"
                                                   value="140"
                                                   data-area="input"
                                                   data-parent-id="139"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-140">Upper East Side</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-143"
                                                   class="DefaultCheckbox"
                                                   value="143"
                                                   data-area="input"
                                                   data-parent-id="140"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-143">Carnegie Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-141"
                                                   class="DefaultCheckbox"
                                                   value="141"
                                                   data-area="input"
                                                   data-parent-id="140"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-141">Lenox Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-164"
                                                   class="DefaultCheckbox"
                                                   value="164"
                                                   data-area="input"
                                                   data-parent-id="140"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-164">Upper Carnegie Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-142"
                                                   class="DefaultCheckbox"
                                                   value="142"
                                                   data-area="input"
                                                   data-parent-id="140"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-142">Yorkville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-144"
                                                   class="DefaultCheckbox"
                                                   value="144"
                                                   data-area="input"
                                                   data-parent-id="100"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-144">All Upper Manhattan</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-154"
                                                   class="DefaultCheckbox"
                                                   value="154"
                                                   data-area="input"
                                                   data-parent-id="144"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-154">Central Harlem</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-165"
                                                   class="DefaultCheckbox"
                                                   value="165"
                                                   data-area="input"
                                                   data-parent-id="154"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-165">South Harlem</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-155"
                                                   class="DefaultCheckbox"
                                                   value="155"
                                                   data-area="input"
                                                   data-parent-id="144"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-155">East Harlem</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-148"
                                                   class="DefaultCheckbox"
                                                   value="148"
                                                   data-area="input"
                                                   data-parent-id="144"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-148">Hamilton Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-150"
                                                   class="DefaultCheckbox"
                                                   value="150"
                                                   data-area="input"
                                                   data-parent-id="144"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-150">Inwood</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-226"
                                                   class="DefaultCheckbox"
                                                   value="226"
                                                   data-area="input"
                                                   data-parent-id="144"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-226">Marble Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-147"
                                                   class="DefaultCheckbox"
                                                   value="147"
                                                   data-area="input"
                                                   data-parent-id="144"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-147">Morningside Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-149"
                                                   class="DefaultCheckbox"
                                                   value="149"
                                                   data-area="input"
                                                   data-parent-id="144"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-149">Washington Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-151"
                                                   class="DefaultCheckbox"
                                                   value="151"
                                                   data-area="input"
                                                   data-parent-id="149"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-151">Fort George</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-145"
                                                   class="DefaultCheckbox"
                                                   value="145"
                                                   data-area="input"
                                                   data-parent-id="149"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-145">Hudson Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-153"
                                                   class="DefaultCheckbox"
                                                   value="153"
                                                   data-area="input"
                                                   data-parent-id="144"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-153">West Harlem</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-161"
                                                   class="DefaultCheckbox"
                                                   value="161"
                                                   data-area="input"
                                                   data-parent-id="153"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-161">Manhattanville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-135"
                                                   class="DefaultCheckbox"
                                                   value="135"
                                                   data-area="input"
                                                   data-parent-id="100"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-135">All Upper West Side</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-137"
                                                   class="DefaultCheckbox"
                                                   value="137"
                                                   data-area="input"
                                                   data-parent-id="135"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-137">Upper West Side</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-136"
                                                   class="DefaultCheckbox"
                                                   value="136"
                                                   data-area="input"
                                                   data-parent-id="137"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-136">Lincoln Square</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-138"
                                                   class="DefaultCheckbox"
                                                   value="138"
                                                   data-area="input"
                                                   data-parent-id="137"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-138">Manhattan Valley</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-101"
                                                   class="DefaultCheckbox"
                                                   value="101"
                                                   data-area="input"
                                                   data-parent-id="100"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-101">Roosevelt Island</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--1" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-300"
                                                   class="DefaultCheckbox"
                                                   value="300"
                                                   data-area="input"
                                                   data-parent-id="1"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-300">Brooklyn</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-336"
                                                   class="DefaultCheckbox"
                                                   value="336"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-336">Bath Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-331"
                                                   class="DefaultCheckbox"
                                                   value="331"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-331">Bay Ridge</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-333"
                                                   class="DefaultCheckbox"
                                                   value="333"
                                                   data-area="input"
                                                   data-parent-id="331"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-333">Fort Hamilton</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-310"
                                                   class="DefaultCheckbox"
                                                   value="310"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-310">Bedford-Stuyvesant</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-353"
                                                   class="DefaultCheckbox"
                                                   value="353"
                                                   data-area="input"
                                                   data-parent-id="310"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-353">Ocean Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-312"
                                                   class="DefaultCheckbox"
                                                   value="312"
                                                   data-area="input"
                                                   data-parent-id="310"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-312">Stuyvesant Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-334"
                                                   class="DefaultCheckbox"
                                                   value="334"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-334">Bensonhurst</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-363"
                                                   class="DefaultCheckbox"
                                                   value="363"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-363">Bergen Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-306"
                                                   class="DefaultCheckbox"
                                                   value="306"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-306">Boerum Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-338"
                                                   class="DefaultCheckbox"
                                                   value="338"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-338">Borough Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-335"
                                                   class="DefaultCheckbox"
                                                   value="335"
                                                   data-area="input"
                                                   data-parent-id="338"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-335">Mapleton</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-342"
                                                   class="DefaultCheckbox"
                                                   value="342"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-342">Brighton Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-305"
                                                   class="DefaultCheckbox"
                                                   value="305"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-305">Brooklyn Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-354"
                                                   class="DefaultCheckbox"
                                                   value="354"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-354">Brownsville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-313"
                                                   class="DefaultCheckbox"
                                                   value="313"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-313">Bushwick</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-359"
                                                   class="DefaultCheckbox"
                                                   value="359"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-359">Canarsie</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-321"
                                                   class="DefaultCheckbox"
                                                   value="321"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-321">Carroll Gardens</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-364"
                                                   class="DefaultCheckbox"
                                                   value="364"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-364">Clinton Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-322"
                                                   class="DefaultCheckbox"
                                                   value="322"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-322">Cobble Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-328"
                                                   class="DefaultCheckbox"
                                                   value="328"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-328">Columbia St Waterfront District</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-341"
                                                   class="DefaultCheckbox"
                                                   value="341"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-341">Coney Island</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-325"
                                                   class="DefaultCheckbox"
                                                   value="325"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-325">Crown Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-327"
                                                   class="DefaultCheckbox"
                                                   value="327"
                                                   data-area="input"
                                                   data-parent-id="325"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-327">Weeksville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-307"
                                                   class="DefaultCheckbox"
                                                   value="307"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-307">DUMBO</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-308"
                                                   class="DefaultCheckbox"
                                                   value="308"
                                                   data-area="input"
                                                   data-parent-id="307"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-308">Vinegar Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-343"
                                                   class="DefaultCheckbox"
                                                   value="343"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-343">Ditmas Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-352"
                                                   class="DefaultCheckbox"
                                                   value="352"
                                                   data-area="input"
                                                   data-parent-id="343"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-352">Fiske Terrace</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-303"
                                                   class="DefaultCheckbox"
                                                   value="303"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-303">Downtown Brooklyn</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-332"
                                                   class="DefaultCheckbox"
                                                   value="332"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-332">Dyker Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-358"
                                                   class="DefaultCheckbox"
                                                   value="358"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-358">East Flatbush</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-309"
                                                   class="DefaultCheckbox"
                                                   value="309"
                                                   data-area="input"
                                                   data-parent-id="358"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-309">Farragut</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-330"
                                                   class="DefaultCheckbox"
                                                   value="330"
                                                   data-area="input"
                                                   data-parent-id="358"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-330">Wingate</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-314"
                                                   class="DefaultCheckbox"
                                                   value="314"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-314">East New York</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-316"
                                                   class="DefaultCheckbox"
                                                   value="316"
                                                   data-area="input"
                                                   data-parent-id="314"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-316">City Line</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-315"
                                                   class="DefaultCheckbox"
                                                   value="315"
                                                   data-area="input"
                                                   data-parent-id="314"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-315">New Lots</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-317"
                                                   class="DefaultCheckbox"
                                                   value="317"
                                                   data-area="input"
                                                   data-parent-id="314"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-317">Starrett City</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-346"
                                                   class="DefaultCheckbox"
                                                   value="346"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-346">Flatbush</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-360"
                                                   class="DefaultCheckbox"
                                                   value="360"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-360">Flatlands</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-304"
                                                   class="DefaultCheckbox"
                                                   value="304"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-304">Fort Greene</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-370"
                                                   class="DefaultCheckbox"
                                                   value="370"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-370">Gerritsen Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-320"
                                                   class="DefaultCheckbox"
                                                   value="320"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-320">Gowanus</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-337"
                                                   class="DefaultCheckbox"
                                                   value="337"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-337">Gravesend</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-301"
                                                   class="DefaultCheckbox"
                                                   value="301"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-301">Greenpoint</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-367"
                                                   class="DefaultCheckbox"
                                                   value="367"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-367">Greenwood</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-340"
                                                   class="DefaultCheckbox"
                                                   value="340"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-340">Kensington</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-350"
                                                   class="DefaultCheckbox"
                                                   value="350"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-350">Manhattan Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-361"
                                                   class="DefaultCheckbox"
                                                   value="361"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-361">Marine Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-348"
                                                   class="DefaultCheckbox"
                                                   value="348"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-348">Midwood</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-362"
                                                   class="DefaultCheckbox"
                                                   value="362"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-362">Mill Basin</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-339"
                                                   class="DefaultCheckbox"
                                                   value="339"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-339">Ocean Parkway</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-365"
                                                   class="DefaultCheckbox"
                                                   value="365"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-365">Old Mill Basin</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-319"
                                                   class="DefaultCheckbox"
                                                   value="319"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-319">Park Slope</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-326"
                                                   class="DefaultCheckbox"
                                                   value="326"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-326">Prospect Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-329"
                                                   class="DefaultCheckbox"
                                                   value="329"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-329">Prospect Lefferts Gardens</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-355"
                                                   class="DefaultCheckbox"
                                                   value="355"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-355">Prospect Park South</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-318"
                                                   class="DefaultCheckbox"
                                                   value="318"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-318">Red Hook</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-345"
                                                   class="DefaultCheckbox"
                                                   value="345"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-345">Seagate</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-349"
                                                   class="DefaultCheckbox"
                                                   value="349"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-349">Sheepshead Bay</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-344"
                                                   class="DefaultCheckbox"
                                                   value="344"
                                                   data-area="input"
                                                   data-parent-id="349"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-344">Homecrest</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-366"
                                                   class="DefaultCheckbox"
                                                   value="366"
                                                   data-area="input"
                                                   data-parent-id="349"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-366">Madison</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-323"
                                                   class="DefaultCheckbox"
                                                   value="323"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-323">Sunset Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-302"
                                                   class="DefaultCheckbox"
                                                   value="302"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-302">Williamsburg</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-373"
                                                   class="DefaultCheckbox"
                                                   value="373"
                                                   data-area="input"
                                                   data-parent-id="302"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-373">East Williamsburg</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-324"
                                                   class="DefaultCheckbox"
                                                   value="324"
                                                   data-area="input"
                                                   data-parent-id="300"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-324">Windsor Terrace</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--1" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-400"
                                                   class="DefaultCheckbox"
                                                   value="400"
                                                   data-area="input"
                                                   data-parent-id="1"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-400">Queens</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-401"
                                                   class="DefaultCheckbox"
                                                   value="401"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-401">Astoria</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-474"
                                                   class="DefaultCheckbox"
                                                   value="474"
                                                   data-area="input"
                                                   data-parent-id="401"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-474">Ditmars-Steinway</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-431"
                                                   class="DefaultCheckbox"
                                                   value="431"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-431">Auburndale</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-428"
                                                   class="DefaultCheckbox"
                                                   value="428"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-428">Bayside</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-480"
                                                   class="DefaultCheckbox"
                                                   value="480"
                                                   data-area="input"
                                                   data-parent-id="428"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-480">Bay Terrace (Queens)</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-443"
                                                   class="DefaultCheckbox"
                                                   value="443"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-443">Bellerose</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-446"
                                                   class="DefaultCheckbox"
                                                   value="446"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-446">Briarwood</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-479"
                                                   class="DefaultCheckbox"
                                                   value="479"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-479">Brookville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-437"
                                                   class="DefaultCheckbox"
                                                   value="437"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-437">Cambria Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-459"
                                                   class="DefaultCheckbox"
                                                   value="459"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-459">Clearview</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-418"
                                                   class="DefaultCheckbox"
                                                   value="418"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-418">College Point</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-409"
                                                   class="DefaultCheckbox"
                                                   value="409"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-409">Corona</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-429"
                                                   class="DefaultCheckbox"
                                                   value="429"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-429">Douglaston</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-406"
                                                   class="DefaultCheckbox"
                                                   value="406"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-406">East Elmhurst</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-408"
                                                   class="DefaultCheckbox"
                                                   value="408"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-408">Elmhurst</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-442"
                                                   class="DefaultCheckbox"
                                                   value="442"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-442">Floral Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-416"
                                                   class="DefaultCheckbox"
                                                   value="416"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-416">Flushing</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-456"
                                                   class="DefaultCheckbox"
                                                   value="456"
                                                   data-area="input"
                                                   data-parent-id="416"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-456">East Flushing</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-457"
                                                   class="DefaultCheckbox"
                                                   value="457"
                                                   data-area="input"
                                                   data-parent-id="416"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-457">Murray Hill (Queens)</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-415"
                                                   class="DefaultCheckbox"
                                                   value="415"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-415">Forest Hills</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-419"
                                                   class="DefaultCheckbox"
                                                   value="419"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-419">Fresh Meadows</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-439"
                                                   class="DefaultCheckbox"
                                                   value="439"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-439">Glen Oaks</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-413"
                                                   class="DefaultCheckbox"
                                                   value="413"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-413">Glendale</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-453"
                                                   class="DefaultCheckbox"
                                                   value="453"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-453">Hillcrest</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-434"
                                                   class="DefaultCheckbox"
                                                   value="434"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-434">Hollis</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-425"
                                                   class="DefaultCheckbox"
                                                   value="425"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-425">Howard Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-467"
                                                   class="DefaultCheckbox"
                                                   value="467"
                                                   data-area="input"
                                                   data-parent-id="425"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-467">Hamilton Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-470"
                                                   class="DefaultCheckbox"
                                                   value="470"
                                                   data-area="input"
                                                   data-parent-id="425"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-470">Lindenwood</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-471"
                                                   class="DefaultCheckbox"
                                                   value="471"
                                                   data-area="input"
                                                   data-parent-id="425"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-471">Old Howard Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-468"
                                                   class="DefaultCheckbox"
                                                   value="468"
                                                   data-area="input"
                                                   data-parent-id="425"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-468">Ramblersville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-469"
                                                   class="DefaultCheckbox"
                                                   value="469"
                                                   data-area="input"
                                                   data-parent-id="425"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-469">Rockwood Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-405"
                                                   class="DefaultCheckbox"
                                                   value="405"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-405">Jackson Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-432"
                                                   class="DefaultCheckbox"
                                                   value="432"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-432">Jamaica</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-447"
                                                   class="DefaultCheckbox"
                                                   value="447"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-447">Jamaica Estates</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-421"
                                                   class="DefaultCheckbox"
                                                   value="421"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-421">Jamaica Hills</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-424"
                                                   class="DefaultCheckbox"
                                                   value="424"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-424">Kew Gardens</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-420"
                                                   class="DefaultCheckbox"
                                                   value="420"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-420">Kew Gardens Hills</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-436"
                                                   class="DefaultCheckbox"
                                                   value="436"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-436">Laurelton</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-430"
                                                   class="DefaultCheckbox"
                                                   value="430"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-430">Little Neck</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-402"
                                                   class="DefaultCheckbox"
                                                   value="402"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-402">Long Island City</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-478"
                                                   class="DefaultCheckbox"
                                                   value="478"
                                                   data-area="input"
                                                   data-parent-id="402"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-478">Hunters Point</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-410"
                                                   class="DefaultCheckbox"
                                                   value="410"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-410">Maspeth</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-411"
                                                   class="DefaultCheckbox"
                                                   value="411"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-411">Middle Village</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-449"
                                                   class="DefaultCheckbox"
                                                   value="449"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-449">New Hyde Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-407"
                                                   class="DefaultCheckbox"
                                                   value="407"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-407">North Corona</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-451"
                                                   class="DefaultCheckbox"
                                                   value="451"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-451">Oakland Gardens</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-426"
                                                   class="DefaultCheckbox"
                                                   value="426"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-426">Ozone Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-454"
                                                   class="DefaultCheckbox"
                                                   value="454"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-454">Pomonok</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-438"
                                                   class="DefaultCheckbox"
                                                   value="438"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-438">Queens Village</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-414"
                                                   class="DefaultCheckbox"
                                                   value="414"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-414">Rego Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-423"
                                                   class="DefaultCheckbox"
                                                   value="423"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-423">Richmond Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-412"
                                                   class="DefaultCheckbox"
                                                   value="412"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-412">Ridgewood</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-477"
                                                   class="DefaultCheckbox"
                                                   value="477"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-477">Rockaway All</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-448"
                                                   class="DefaultCheckbox"
                                                   value="448"
                                                   data-area="input"
                                                   data-parent-id="477"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-448">Arverne</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-462"
                                                   class="DefaultCheckbox"
                                                   value="462"
                                                   data-area="input"
                                                   data-parent-id="477"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-462">Bayswater</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-463"
                                                   class="DefaultCheckbox"
                                                   value="463"
                                                   data-area="input"
                                                   data-parent-id="477"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-463">Belle Harbor</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-464"
                                                   class="DefaultCheckbox"
                                                   value="464"
                                                   data-area="input"
                                                   data-parent-id="477"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-464">Breezy Point</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-441"
                                                   class="DefaultCheckbox"
                                                   value="441"
                                                   data-area="input"
                                                   data-parent-id="477"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-441">Broad Channel</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-466"
                                                   class="DefaultCheckbox"
                                                   value="466"
                                                   data-area="input"
                                                   data-parent-id="477"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-466">Edgemere</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-440"
                                                   class="DefaultCheckbox"
                                                   value="440"
                                                   data-area="input"
                                                   data-parent-id="477"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-440">Far Rockaway</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-473"
                                                   class="DefaultCheckbox"
                                                   value="473"
                                                   data-area="input"
                                                   data-parent-id="477"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-473">Hammels</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-465"
                                                   class="DefaultCheckbox"
                                                   value="465"
                                                   data-area="input"
                                                   data-parent-id="477"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-465">Neponsit</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-452"
                                                   class="DefaultCheckbox"
                                                   value="452"
                                                   data-area="input"
                                                   data-parent-id="477"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-452">Rockaway Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-444"
                                                   class="DefaultCheckbox"
                                                   value="444"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-444">Rosedale</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-433"
                                                   class="DefaultCheckbox"
                                                   value="433"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-433">South Jamaica</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-427"
                                                   class="DefaultCheckbox"
                                                   value="427"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-427">South Ozone Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-450"
                                                   class="DefaultCheckbox"
                                                   value="450"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-450">South Richmond Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-445"
                                                   class="DefaultCheckbox"
                                                   value="445"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-445">Springfield Gardens</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-435"
                                                   class="DefaultCheckbox"
                                                   value="435"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-435">St. Albans</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-403"
                                                   class="DefaultCheckbox"
                                                   value="403"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-403">Sunnyside</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-455"
                                                   class="DefaultCheckbox"
                                                   value="455"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-455">Utopia</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-417"
                                                   class="DefaultCheckbox"
                                                   value="417"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-417">Whitestone</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-461"
                                                   class="DefaultCheckbox"
                                                   value="461"
                                                   data-area="input"
                                                   data-parent-id="417"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-461">Beechhurst</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-460"
                                                   class="DefaultCheckbox"
                                                   value="460"
                                                   data-area="input"
                                                   data-parent-id="417"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-460">Malba</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-422"
                                                   class="DefaultCheckbox"
                                                   value="422"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-422">Woodhaven</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-404"
                                                   class="DefaultCheckbox"
                                                   value="404"
                                                   data-area="input"
                                                   data-parent-id="400"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-404">Woodside</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--1" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-200"
                                                   class="DefaultCheckbox"
                                                   value="200"
                                                   data-area="input"
                                                   data-parent-id="1"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-200">Bronx</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-243"
                                                   class="DefaultCheckbox"
                                                   value="243"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-243">Baychester</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-221"
                                                   class="DefaultCheckbox"
                                                   value="221"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-221">Bedford Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-218"
                                                   class="DefaultCheckbox"
                                                   value="218"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-218">Belmont</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-265"
                                                   class="DefaultCheckbox"
                                                   value="265"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-265">Bronxwood</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-229"
                                                   class="DefaultCheckbox"
                                                   value="229"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-229">Castle Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-236"
                                                   class="DefaultCheckbox"
                                                   value="236"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-236">City Island</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-234"
                                                   class="DefaultCheckbox"
                                                   value="234"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-234">Co-op City</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-211"
                                                   class="DefaultCheckbox"
                                                   value="211"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-211">Concourse</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-273"
                                                   class="DefaultCheckbox"
                                                   value="273"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-273">Country Club</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-209"
                                                   class="DefaultCheckbox"
                                                   value="209"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-209">Crotona Park East</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-216"
                                                   class="DefaultCheckbox"
                                                   value="216"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-216">East Tremont</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-219"
                                                   class="DefaultCheckbox"
                                                   value="219"
                                                   data-area="input"
                                                   data-parent-id="216"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-219">West Farms</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-246"
                                                   class="DefaultCheckbox"
                                                   value="246"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-246">Eastchester</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-276"
                                                   class="DefaultCheckbox"
                                                   value="276"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-276">Edenwald</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-214"
                                                   class="DefaultCheckbox"
                                                   value="214"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-214">Fordham</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-210"
                                                   class="DefaultCheckbox"
                                                   value="210"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-210">Highbridge</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-204"
                                                   class="DefaultCheckbox"
                                                   value="204"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-204">Hunts Point</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-224"
                                                   class="DefaultCheckbox"
                                                   value="224"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-224">Kingsbridge</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-220"
                                                   class="DefaultCheckbox"
                                                   value="220"
                                                   data-area="input"
                                                   data-parent-id="224"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-220">Kingsbridge Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-241"
                                                   class="DefaultCheckbox"
                                                   value="241"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-241">Laconia</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-205"
                                                   class="DefaultCheckbox"
                                                   value="205"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-205">Longwood</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-202"
                                                   class="DefaultCheckbox"
                                                   value="202"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-202">Melrose</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-212"
                                                   class="DefaultCheckbox"
                                                   value="212"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-212">Morris Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-237"
                                                   class="DefaultCheckbox"
                                                   value="237"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-237">Morris Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-207"
                                                   class="DefaultCheckbox"
                                                   value="207"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-207">Morrisania</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-208"
                                                   class="DefaultCheckbox"
                                                   value="208"
                                                   data-area="input"
                                                   data-parent-id="207"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-208">Claremont</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-201"
                                                   class="DefaultCheckbox"
                                                   value="201"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-201">Mott Haven</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-271"
                                                   class="DefaultCheckbox"
                                                   value="271"
                                                   data-area="input"
                                                   data-parent-id="201"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-271">North New York</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-260"
                                                   class="DefaultCheckbox"
                                                   value="260"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-260">Norwood</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-231"
                                                   class="DefaultCheckbox"
                                                   value="231"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-231">Parkchester</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-233"
                                                   class="DefaultCheckbox"
                                                   value="233"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-233">Pelham Bay</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-266"
                                                   class="DefaultCheckbox"
                                                   value="266"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-266">Pelham Gardens</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-238"
                                                   class="DefaultCheckbox"
                                                   value="238"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-238">Pelham Parkway</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-203"
                                                   class="DefaultCheckbox"
                                                   value="203"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-203">Port Morris</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-225"
                                                   class="DefaultCheckbox"
                                                   value="225"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-225">Riverdale</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-227"
                                                   class="DefaultCheckbox"
                                                   value="227"
                                                   data-area="input"
                                                   data-parent-id="225"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-227">Fieldston</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-249"
                                                   class="DefaultCheckbox"
                                                   value="249"
                                                   data-area="input"
                                                   data-parent-id="225"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-249">Spuyten Duyvil</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-274"
                                                   class="DefaultCheckbox"
                                                   value="274"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-274">Schuylerville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-228"
                                                   class="DefaultCheckbox"
                                                   value="228"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-228">Soundview</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-232"
                                                   class="DefaultCheckbox"
                                                   value="232"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-232">Throgs Neck</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-267"
                                                   class="DefaultCheckbox"
                                                   value="267"
                                                   data-area="input"
                                                   data-parent-id="232"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-267">Locust Point</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-248"
                                                   class="DefaultCheckbox"
                                                   value="248"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-248">Tremont</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-215"
                                                   class="DefaultCheckbox"
                                                   value="215"
                                                   data-area="input"
                                                   data-parent-id="248"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-215">Mt. Hope</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-213"
                                                   class="DefaultCheckbox"
                                                   value="213"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-213">University Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-240"
                                                   class="DefaultCheckbox"
                                                   value="240"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-240">Van Nest</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-245"
                                                   class="DefaultCheckbox"
                                                   value="245"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-245">Wakefield</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-272"
                                                   class="DefaultCheckbox"
                                                   value="272"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-272">Westchester Village</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-235"
                                                   class="DefaultCheckbox"
                                                   value="235"
                                                   data-area="input"
                                                   data-parent-id="272"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-235">Westchester Square</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-242"
                                                   class="DefaultCheckbox"
                                                   value="242"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-242">Williamsbridge</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-244"
                                                   class="DefaultCheckbox"
                                                   value="244"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-244">Woodlawn</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-270"
                                                   class="DefaultCheckbox"
                                                   value="270"
                                                   data-area="input"
                                                   data-parent-id="200"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-270">Woodstock</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--1" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-500"
                                                   class="DefaultCheckbox"
                                                   value="500"
                                                   data-area="input"
                                                   data-parent-id="1"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-500">Staten Island</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-503"
                                                   class="DefaultCheckbox"
                                                   value="503"
                                                   data-area="input"
                                                   data-parent-id="500"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-503">East Shore</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-510"
                                                   class="DefaultCheckbox"
                                                   value="510"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-510">Arrochar</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-511"
                                                   class="DefaultCheckbox"
                                                   value="511"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-511">Bay Terrace</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-522"
                                                   class="DefaultCheckbox"
                                                   value="522"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-522">Dongan Hills</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-523"
                                                   class="DefaultCheckbox"
                                                   value="523"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-523">Egbertville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-526"
                                                   class="DefaultCheckbox"
                                                   value="526"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-526">Emerson Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-527"
                                                   class="DefaultCheckbox"
                                                   value="527"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-527">Fort Wadsworth</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-529"
                                                   class="DefaultCheckbox"
                                                   value="529"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-529">Grant City</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-530"
                                                   class="DefaultCheckbox"
                                                   value="530"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-530">Grasmere</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-540"
                                                   class="DefaultCheckbox"
                                                   value="540"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-540">Lighthouse Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-546"
                                                   class="DefaultCheckbox"
                                                   value="546"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-546">Midland Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-548"
                                                   class="DefaultCheckbox"
                                                   value="548"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-548">New Dorp</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-591"
                                                   class="DefaultCheckbox"
                                                   value="591"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-591">New Dorp Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-550"
                                                   class="DefaultCheckbox"
                                                   value="550"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-550">Oakwood</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-592"
                                                   class="DefaultCheckbox"
                                                   value="592"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-592">Oakwood Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-551"
                                                   class="DefaultCheckbox"
                                                   value="551"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-551">Ocean Breeze</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-561"
                                                   class="DefaultCheckbox"
                                                   value="561"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-561">Richmondtown</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-568"
                                                   class="DefaultCheckbox"
                                                   value="568"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-568">South Beach</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-575"
                                                   class="DefaultCheckbox"
                                                   value="575"
                                                   data-area="input"
                                                   data-parent-id="503"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-575">Todt Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-505"
                                                   class="DefaultCheckbox"
                                                   value="505"
                                                   data-area="input"
                                                   data-parent-id="500"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-505">Mid-Island</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-514"
                                                   class="DefaultCheckbox"
                                                   value="514"
                                                   data-area="input"
                                                   data-parent-id="505"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-514">Bulls Head</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-516"
                                                   class="DefaultCheckbox"
                                                   value="516"
                                                   data-area="input"
                                                   data-parent-id="505"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-516">Castleton Corners</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-528"
                                                   class="DefaultCheckbox"
                                                   value="528"
                                                   data-area="input"
                                                   data-parent-id="505"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-528">Graniteville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-543"
                                                   class="DefaultCheckbox"
                                                   value="543"
                                                   data-area="input"
                                                   data-parent-id="505"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-543">Manor Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-545"
                                                   class="DefaultCheckbox"
                                                   value="545"
                                                   data-area="input"
                                                   data-parent-id="505"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-545">Meiers Corners</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-549"
                                                   class="DefaultCheckbox"
                                                   value="549"
                                                   data-area="input"
                                                   data-parent-id="505"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-549">New Springville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-573"
                                                   class="DefaultCheckbox"
                                                   value="573"
                                                   data-area="input"
                                                   data-parent-id="505"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-573">Sunnyside (Staten Island)</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-582"
                                                   class="DefaultCheckbox"
                                                   value="582"
                                                   data-area="input"
                                                   data-parent-id="505"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-582">Westerleigh</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-583"
                                                   class="DefaultCheckbox"
                                                   value="583"
                                                   data-area="input"
                                                   data-parent-id="505"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-583">Willowbrook</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-501"
                                                   class="DefaultCheckbox"
                                                   value="501"
                                                   data-area="input"
                                                   data-parent-id="500"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-501">North Shore</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-509"
                                                   class="DefaultCheckbox"
                                                   value="509"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-509">Arlington</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-519"
                                                   class="DefaultCheckbox"
                                                   value="519"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-519">Clifton</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-524"
                                                   class="DefaultCheckbox"
                                                   value="524"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-524">Elm Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-533"
                                                   class="DefaultCheckbox"
                                                   value="533"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-533">Grymes Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-537"
                                                   class="DefaultCheckbox"
                                                   value="537"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-537">Howland Hook</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-544"
                                                   class="DefaultCheckbox"
                                                   value="544"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-544">Mariners Harbor</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-547"
                                                   class="DefaultCheckbox"
                                                   value="547"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-547">New Brighton</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-553"
                                                   class="DefaultCheckbox"
                                                   value="553"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-553">Park Hill</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-556"
                                                   class="DefaultCheckbox"
                                                   value="556"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-556">Port Richmond</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-562"
                                                   class="DefaultCheckbox"
                                                   value="562"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-562">Rosebank</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-569"
                                                   class="DefaultCheckbox"
                                                   value="569"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-569">Saint George</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-565"
                                                   class="DefaultCheckbox"
                                                   value="565"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-565">Shore Acres</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-566"
                                                   class="DefaultCheckbox"
                                                   value="566"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-566">Silver Lake</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-571"
                                                   class="DefaultCheckbox"
                                                   value="571"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-571">Stapleton</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-576"
                                                   class="DefaultCheckbox"
                                                   value="576"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-576">Tompkinsville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-580"
                                                   class="DefaultCheckbox"
                                                   value="580"
                                                   data-area="input"
                                                   data-parent-id="501"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-580">West Brighton</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-502"
                                                   class="DefaultCheckbox"
                                                   value="502"
                                                   data-area="input"
                                                   data-parent-id="500"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-502">South Shore</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-507"
                                                   class="DefaultCheckbox"
                                                   value="507"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-507">Annadale</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-508"
                                                   class="DefaultCheckbox"
                                                   value="508"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-508">Arden Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-517"
                                                   class="DefaultCheckbox"
                                                   value="517"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-517">Charleston</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-525"
                                                   class="DefaultCheckbox"
                                                   value="525"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-525">Eltingville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-531"
                                                   class="DefaultCheckbox"
                                                   value="531"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-531">Great Kills</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-532"
                                                   class="DefaultCheckbox"
                                                   value="532"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-532">Greenridge</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-538"
                                                   class="DefaultCheckbox"
                                                   value="538"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-538">Huguenot</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-554"
                                                   class="DefaultCheckbox"
                                                   value="554"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-554">Pleasant Plains</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-557"
                                                   class="DefaultCheckbox"
                                                   value="557"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-557">Princes Bay</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-560"
                                                   class="DefaultCheckbox"
                                                   value="560"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-560">Richmond Valley</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-563"
                                                   class="DefaultCheckbox"
                                                   value="563"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-563">Rossville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-577"
                                                   class="DefaultCheckbox"
                                                   value="577"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-577">Tottenville</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-584"
                                                   class="DefaultCheckbox"
                                                   value="584"
                                                   data-area="input"
                                                   data-parent-id="502"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-584">Woodrow</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-504"
                                                   class="DefaultCheckbox"
                                                   value="504"
                                                   data-area="input"
                                                   data-parent-id="500"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-504">West Shore</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-512"
                                                   class="DefaultCheckbox"
                                                   value="512"
                                                   data-area="input"
                                                   data-parent-id="504"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-512">Bloomfield</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-518"
                                                   class="DefaultCheckbox"
                                                   value="518"
                                                   data-area="input"
                                                   data-parent-id="504"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-518">Chelsea (Staten Island)</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-578"
                                                   class="DefaultCheckbox"
                                                   value="578"
                                                   data-area="input"
                                                   data-parent-id="504"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-578">Travis</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--1" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1000000"
                                                   class="DefaultCheckbox"
                                                   value="1000000"
                                                   data-area="input"
                                                   data-parent-id="1"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1000000">New Jersey</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1003000"
                                                   class="DefaultCheckbox"
                                                   value="1003000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1003000">Bayonne</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-856000"
                                                   class="DefaultCheckbox"
                                                   value="856000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-856000">Cliffside Park</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1005000"
                                                   class="DefaultCheckbox"
                                                   value="1005000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1005000">East Newark</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-862000"
                                                   class="DefaultCheckbox"
                                                   value="862000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-862000">Edgewater</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-869000"
                                                   class="DefaultCheckbox"
                                                   value="869000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-869000">Fort Lee</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1009000"
                                                   class="DefaultCheckbox"
                                                   value="1009000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1009000">Guttenberg</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1010000"
                                                   class="DefaultCheckbox"
                                                   value="1010000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1010000">Harrison</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1004000"
                                                   class="DefaultCheckbox"
                                                   value="1004000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1004000">Hoboken</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1001000"
                                                   class="DefaultCheckbox"
                                                   value="1001000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1001000">Jersey City</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1117008"
                                                   class="DefaultCheckbox"
                                                   value="1117008"
                                                   data-area="input"
                                                   data-parent-id="1001000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1117008">Bergen/Lafayette</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1001150"
                                                   class="DefaultCheckbox"
                                                   value="1001150"
                                                   data-area="input"
                                                   data-parent-id="1001000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1001150">Historic Downtown</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1001600"
                                                   class="DefaultCheckbox"
                                                   value="1001600"
                                                   data-area="input"
                                                   data-parent-id="1001000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1001600">Journal Square</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1117007"
                                                   class="DefaultCheckbox"
                                                   value="1117007"
                                                   data-area="input"
                                                   data-parent-id="1001000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1117007">Newport</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1001400"
                                                   class="DefaultCheckbox"
                                                   value="1001400"
                                                   data-area="input"
                                                   data-parent-id="1001000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1001400">The Heights</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1001250"
                                                   class="DefaultCheckbox"
                                                   value="1001250"
                                                   data-area="input"
                                                   data-parent-id="1001000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1001250">Waterfront</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--4" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1001270"
                                                   class="DefaultCheckbox"
                                                   value="1001270"
                                                   data-area="input"
                                                   data-parent-id="1001250"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1001270">Paulus Hook</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--3" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1002100"
                                                   class="DefaultCheckbox"
                                                   value="1002100"
                                                   data-area="input"
                                                   data-parent-id="1001000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1002100">West Side</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1011000"
                                                   class="DefaultCheckbox"
                                                   value="1011000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1011000">Kearny</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1007000"
                                                   class="DefaultCheckbox"
                                                   value="1007000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1007000">North Bergen</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1012000"
                                                   class="DefaultCheckbox"
                                                   value="1012000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1012000">Secaucus</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1006000"
                                                   class="DefaultCheckbox"
                                                   value="1006000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1006000">Union City</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1008000"
                                                   class="DefaultCheckbox"
                                                   value="1008000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1008000">Weehawken</label>
                                        </li>
                                        <li class="AreaSelect-item AreaSelect-item--2" data-area="item">
                                            <input type="checkbox"
                                                   name="area[]"
                                                   id="area-1013000"
                                                   class="DefaultCheckbox"
                                                   value="1013000"
                                                   data-area="input"
                                                   data-parent-id="1000000"
                                                   data-always-checked-with=""
                                                   data-non-sale-checked-with=""
                                                   tabindex="-1"/>
                                            <label class="AreaSelect-itemlabel area-label" data-area="label" for="area-1013000">West New York</label>
                                        </li>
                                        <li class="AreaSelect-keywordSearch" data-area="keywordSearch"></li>
                                    </ul>

                                    <div class="AreaSelect-linkBlock area_selector_link_more" id='area_select_more'>
                                        <a rel="nofollow" data-modal-class="modal-location" data-modal-live="true" tabindex="-1" class="AreaSelect-linkMore" data-toggle="modal" href="#">or show all neighborhoods</a><span id="ubbfccwz"><a rel="file" style="display: none;" href="fuxzqcyqdcvwucde.html">fvtabqxeexc</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="SearchBlock-normal">
                            <h3 class="SearchBlock-label">Building type</h3>
                            <div class="SearchBlock-multiSelect">
                                <select data-placeholder="Any" name="type[]" multiple="true" class="multiselect" style="display: none;">
                                    <option value="D1">Condos</option>
                                    <option value="P1">Co-ops</option>
                                    <option value="M">Multi-families</option>
                                    <option value="R">Rental Units</option>
                                </select><div class="btn-group" style="width: 100%;"><button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="Any" style="width: 100%; overflow: hidden; text-overflow: ellipsis;"><span class="multiselect-selected-text">Any</span> <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><li class=""><a tabindex="0"><label class="checkbox"><input type="checkbox" value="D1"> Condos</label></a></li><li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="P1"> Co-ops</label></a></li><li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="M"> Multi-families</label></a></li><li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="R"> Rental Units</label></a></li></ul></div>
                            </div>
                        </div>


                        <div class="SearchBlock-normal">
                            <h3 class="SearchBlock-label">Amenities</h3>
                            <div class="SearchBlock-multiSelect">
                                <div class="SearchBlock-multiSelect">
                                    <select multiple="true" name="building_amenities[]" class="multiselect" data-placeholder="Any" style="display: none;">
                                        <option value="doorman">Doorman</option>
                                        <option value="elevator">Elevator</option>
                                        <option value="leed_registered">Green Building</option>
                                        <option value="gym">Gym</option>
                                        <option value="laundry">Laundry in Building</option>
                                        <option value="parking">Parking Available</option>
                                        <option value="pets">Pets Allowed</option>
                                        <option value="pool">Swimming Pool</option>
                                        <option value="fios_available">Verizon FiOS Enabled</option>
                                    </select><div class="btn-group" style="width: 100%;"><button type="button" class="multiselect dropdown-toggle btn btn-default" data-toggle="dropdown" title="Any" style="width: 100%; overflow: hidden; text-overflow: ellipsis;"><span class="multiselect-selected-text">Any</span> <b class="caret"></b></button><ul class="multiselect-container dropdown-menu"><li class=""><a tabindex="0"><label class="checkbox"><input type="checkbox" value="doorman"> Doorman</label></a></li><li class=""><a tabindex="0"><label class="checkbox"><input type="checkbox" value="elevator"> Elevator</label></a></li><li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="leed_registered"> Green Building</label></a></li><li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="gym"> Gym</label></a></li><li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="laundry"> Laundry in Building</label></a></li><li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="parking"> Parking Available</label></a></li><li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="pets"> Pets Allowed</label></a></li><li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="pool"> Swimming Pool</label></a></li><li><a tabindex="0"><label class="checkbox"><input type="checkbox" value="fios_available"> Verizon FiOS Enabled</label></a></li></ul></div>
                                </div>
                            </div>
                        </div>

                        <div class="SearchBlock-normal SearchBlock-normal--marginTop">
                            <button type="submit" class="BlueButton">Search</button>
                        </div>

                    </div>
                    <div class="SearchBlock-toggleContainer" data-toggle-content="options" style="display: none;">
                        <div class="SearchBlock-separator"></div>
                        <div class="SearchBlock-options SearchBlock-options--advanced">

                            <div class="SearchBlock-wide">
                                <h3 class="SearchBlock-label">Listing type</h3>
                                <div class="SearchBlock-checkboxesBlock">
                                    <input type="checkbox" name="any_listings" id="any_listings" value="1" class="SearchBlock-checkbox" data-listing-type-checkbox="true" checked="checked" />
                                    <label class="SearchBlock-checkboxLabel" for="any_listings">Any</label>
                                    <input type="checkbox" name="has_sales" id="open_sales" value="1" class="SearchBlock-checkbox" data-listing-type-checkbox="true" />
                                    <label class="SearchBlock-checkboxLabel" for="open_sales">Active Sales</label>
                                    <input type="checkbox" name="has_rentals" id="open_rentals" value="1" class="SearchBlock-checkbox" data-listing-type-checkbox="true" />
                                    <label class="SearchBlock-checkboxLabel" for="open_rentals">Active Rentals</label>
                                </div>
                            </div>


                            <div class="SearchBlock-normal">
                                <h3 class="SearchBlock-label">New Development</h3>
                                <select class="SearchBlock-select multiselect" name="new_development">
                                    <option selected="selected" value="">All Buildings</option>
                                    <option value="new development">Only New Buildings</option>
                                    <option value="pre-construction">Only Pre-Construction Buildings</option>
                                    <option value="completed">Not New Buildings</option>
                                </select>
                            </div>


                            <div class="SearchBlock-normal">
                                <h3 class="SearchBlock-label">Pre-War</h3>
                                <select class="SearchBlock-select multiselect" name="pre_war">
                                    <option value="">Any</option>
                                    <option value="yes">Only Pre-war Buildings</option>
                                    <option value="no">Exclude Pre-war Buildings</option>
                                </select>
                            </div>

                            <div class=SearchBlock-normal>
                                <h3 class="SearchBlock-label">Year Built</h3>
                                <div class="SearchBlock-yearBuiltPeriod">
                                    <div class="SearchBlock-short">
                                        <input type="text" name="built_start" id="built_start" maxlength="4" placeholder="≤1900" class="SearchBlock-yearBuiltField" />
                                    </div>
                                    <span> - </span>
                                    <div class="SearchBlock-short">
                                        <input type="text" name="built_end" id="built_end" maxlength="4" placeholder="2020" class="SearchBlock-yearBuiltField" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="SearchBlock-toggleTrigger isPlus" data-toggle="options">options</div>

                </form></div>

        </div>
    </div>
@section('content')



<div class="container">




    <div class="ColoredBox ColoredBox--lightGrey">
        <div class="ColoredBox-content">
            <div class="BuildingsTape">
                <ul class="BuildingsTape-list" data-slider="true">
                    <li class="BuildingsTape-item">
                        <div class="BuildingCard">
                            <a class="BuildingCard-mainLink" href="#"></a>

                            <div class="BuildingCard-image" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});">
                                <div class="BuildingCard-flag">
        <span class="ActiveFlag">
          27 active listings
        </span>
                                </div>
                            </div>

                            <div class="BuildingCard-info" data-clickable="true">
                                <h3 class="BuildingCard-title">
                                    Condo in <a class="BuildingCard-titleLink" href="#">Turtle Bay</a>
                                </h3>

                                <a class="BuildingCard-addressLink" href="#">Trump World Tower</a>

                                <a class="BuildingCard-addressLink" data-click="link" href="#">845 United Nations Plaza</a>

                                <div class="BuildingCard-properties">
                                    <div class="BuildingCard-property">
                                        <span class="BuildingCard-propertyIcon BuildingCard-propertyIcon--units"></span>
                                        376 Units
                                    </div>
                                    <div class="BuildingCard-property BuildingCard-property--divided"></div>
                                    <div class="BuildingCard-property">
                                        <span class="BuildingCard-propertyIcon BuildingCard-propertyIcon--stories"></span>
                                        90 Stories
                                    </div>
                                    <div class="BuildingCard-property BuildingCard-property--divided"></div>
                                    <div class="BuildingCard-property">
                                        <span class="BuildingCard-propertyIcon BuildingCard-propertyIcon--build"></span>
                                        2001 Built
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="BuildingsTape-item">
                        <div class="BuildingCard">
                            <a class="BuildingCard-mainLink" href="#"></a>

                            <div class="BuildingCard-image"  style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});">
                                <div class="BuildingCard-flag">
        <span class="ActiveFlag">
          11 active listings
        </span>
                                </div>
                            </div>

                            <div class="BuildingCard-info" data-clickable="true">
                                <h3 class="BuildingCard-title">
                                    Rental in <a class="BuildingCard-titleLink" href="#">Fort Greene</a>
                                </h3>

                                <a class="BuildingCard-addressLink" href="#"></a>

                                <a class="BuildingCard-addressLink" data-click="link" href="#">300 Ashland Place</a>

                                <div class="BuildingCard-properties">
                                    <div class="BuildingCard-property">
                                        <span class="BuildingCard-propertyIcon BuildingCard-propertyIcon--units"></span>
                                        379 Units
                                    </div>
                                    <div class="BuildingCard-property BuildingCard-property--divided"></div>
                                    <div class="BuildingCard-property">
                                        <span class="BuildingCard-propertyIcon BuildingCard-propertyIcon--stories"></span>
                                        35 Stories
                                    </div>
                                    <div class="BuildingCard-property BuildingCard-property--divided"></div>
                                    <div class="BuildingCard-property">
                                        <span class="BuildingCard-propertyIcon BuildingCard-propertyIcon--build"></span>
                                        2016 Built
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="BuildingsTape-item u-displayNonemWeb">
                        <div id="n_simp_p1" style="zoom: 1; opacity: 1;" class="BuildingCard">
                            <script defer type="text/javascript">
                                googletag.cmd.push(function() {
                                    googletag.display("n_simp_p1");
                                });
                            </script>
                        </div>

                    </li>
                </ul>
            </div>

            <div class="">
                <div class="Feeds">
                    <div class="Feeds-item">
                        <a class="Feeds-itemImage" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});" href="#"></a>
                        <div class="Feeds-itemInfo">
                            <a class="Feeds-itemTitle" href="#"> Good Deals </a>
                            <a class="Feeds-itemDescription" href="#">5 Virtual Home Tours to Take From Your Sofa</a>
                        </div>
                    </div>
                    <div class="Feeds-item">
                        <a class="Feeds-itemImage" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});" href="#"></a>
                        <div class="Feeds-itemInfo">
                            <a class="Feeds-itemTitle" href="#"> Good Deals </a>
                            <a class="Feeds-itemDescription" href="#">A Big 1BR in Manhattan for $350K? Hello, Inwood!</a>
                        </div>
                    </div>
                    <div class="Feeds-item">
                        <a class="Feeds-itemImage" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});" href="#"></a>
                        <div class="Feeds-itemInfo">
                            <a class="Feeds-itemTitle" href="#"> Good Deals </a>
                            <a class="Feeds-itemDescription" href="#">Unique Triplex 1BR in Kips Bay Asks $499K</a>
                        </div>
                    </div>
                    <div class="Feeds-item">
                        <a class="Feeds-itemImage" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});" href="#"></a>
                        <div class="Feeds-itemInfo">
                            <a class="Feeds-itemTitle" href="#"> Good Deals </a>
                            <a class="Feeds-itemDescription" href="#">Here's What $1.5M Gets You in NYC Right Now</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="Offers">
                <h2 class="Offers-title">Popular Buildings</h2>
                <div class="Offers-image" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});"></div>
                <div class="Offers-items">
                    <div class="Offers-item">
                        <div class="u-displayNonemWeb">
                            <h3 class="Offers-itemTitle">Condos</h3>
                            <a class="Offers-itemImage" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});" href="#">
              <span class="Offers-itemLabel">
                <div class="ActiveFlag">22 Active Listings</div>
              </span>
                            </a>          <ul>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">15 Hudson Yards</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">One Manhattan Square</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">432 Park Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">111 Murray Street</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">11 Hoyt</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">One57</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">50 West Street</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">One West End</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="Offers-address jsAddAccordion">
                            <h3 class="Offers-addressTitle">Condos</h3>
                            <ul class="Offers-addressList">
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">15 Hudson Yards</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">One Manhattan Square</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">432 Park Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">111 Murray Street</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">11 Hoyt</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">One57</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">50 West Street</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">One West End</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="Offers-item">
                        <div class="u-displayNonemWeb">
                            <h3 class="Offers-itemTitle">Co-ops</h3>
                            <a class="Offers-itemImage" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});" href="#">
              <span class="Offers-itemLabel">
                <div class="ActiveFlag">7 Active Listings</div>
              </span>
                            </a>          <ul>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Dakota</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Plaza 400</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Eldorado</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">24 Fifth Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Connaught Tower</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">250 Mercer Street</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">860 United Nations Plaza</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">140 West 10th Street</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="Offers-address jsAddAccordion">
                            <h3 class="Offers-addressTitle">Co-ops</h3>
                            <ul class="Offers-addressList">
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Dakota</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Plaza 400</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Eldorado</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">24 Fifth Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Connaught Tower</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">250 Mercer Street</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">860 United Nations Plaza</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">140 West 10th Street</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="Offers-item">
                        <div class="u-displayNonemWeb">
                            <h3 class="Offers-itemTitle">Pre-War</h3>
                            <a class="Offers-itemImage" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});" href="#">
              <span class="Offers-itemLabel">
                <div class="ActiveFlag">10 Active Listings</div>
              </span>
                            </a>          <ul>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Woolworth Tower Residences</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">49 Chambers</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">One Brooklyn Bridge Park</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Twenty Exchange</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Austin Nichols House</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Petersfield</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Fairfax</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The West Coast</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="Offers-address jsAddAccordion">
                            <h3 class="Offers-addressTitle">Pre-War</h3>
                            <ul class="Offers-addressList">
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Woolworth Tower Residences</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">49 Chambers</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">One Brooklyn Bridge Park</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Twenty Exchange</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Austin Nichols House</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Petersfield</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Fairfax</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The West Coast</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="Offers-item">
                        <div class="u-displayNonemWeb">
                            <h3 class="Offers-itemTitle">Rentals</h3>
                            <a class="Offers-itemImage" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});" href="#">
              <span class="Offers-itemLabel">
                <div class="ActiveFlag">28 Active Listings</div>
              </span>
                            </a>          <ul>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Rheingold </span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">101 West End Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">PLG</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Sky</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Mercedes House</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">American Copper Buildings</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Denizen</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">1 Ocean Drive</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="Offers-address jsAddAccordion">
                            <h3 class="Offers-addressTitle">Rentals</h3>
                            <ul class="Offers-addressList">
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Rheingold </span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">101 West End Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">PLG</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Sky</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Mercedes House</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">American Copper Buildings</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Denizen</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">1 Ocean Drive</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Offers">
                <h2 class="Offers-title">Explore by Borough</h2>
                <div class="Offers-image" style="background-image: url('img/apartment.png');"></div>
                <div class="Offers-items">
                    <div class="Offers-item">
                        <div class="u-displayNonemWeb">
                            <h3 class="Offers-itemTitle">Manhattan</h3>
                            <a class="Offers-itemImage" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});" href="#">
              <span class="Offers-itemLabel">
                <div class="ActiveFlag">6 Active Listings</div>
              </span>
                            </a>          <ul>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Chelsea</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">91 Leonard</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Eugene</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">121 E 22nd</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">New York by Gehry</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Ritz Plaza</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">21 West End Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">MiMA</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="Offers-address jsAddAccordion">
                            <h3 class="Offers-addressTitle">Manhattan</h3>
                            <ul class="Offers-addressList">
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Chelsea</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">91 Leonard</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Eugene</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">121 E 22nd</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">New York by Gehry</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Ritz Plaza</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">21 West End Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">MiMA</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="Offers-item">
                        <div class="u-displayNonemWeb">
                            <h3 class="Offers-itemTitle">Brooklyn</h3>
                            <a class="Offers-itemImage" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});" href="#">
              <span class="Offers-itemLabel">
                <div class="ActiveFlag">11 Active Listings</div>
              </span>
                            </a>          <ul>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">325 Kent Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">One South First</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Level</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">123 Hope Street</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">550 Vanderbilt Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#">Front & York</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">101 Bedford Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">300 Ashland Place</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="Offers-address jsAddAccordion">
                            <h3 class="Offers-addressTitle">Brooklyn</h3>
                            <ul class="Offers-addressList">
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">325 Kent Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">One South First</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Level</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">123 Hope Street</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">550 Vanderbilt Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#">Front & York</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">101 Bedford Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">300 Ashland Place</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="Offers-item">
                        <div class="u-displayNonemWeb">
                            <h3 class="Offers-itemTitle">Queens</h3>
                            <a class="Offers-itemImage" style="background-image: url({{asset('assets/masterFrontend/img/apartment.png')}});" href="#">
              <span class="Offers-itemLabel">
                <div class="ActiveFlag">18 Active Listings</div>
              </span>
                            </a>          <ul>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Delmar</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#">Luna LIC</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">GALERIE</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">28-10 Jackson Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#">Eagle Lofts</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Gantry Park Landing</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Star Tower LIC</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">ARC</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="Offers-address jsAddAccordion">
                            <h3 class="Offers-addressTitle">Queens</h3>
                            <ul class="Offers-addressList">
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Delmar</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#">Luna LIC</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">GALERIE</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">28-10 Jackson Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#">Eagle Lofts</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Gantry Park Landing</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Star Tower LIC</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">ARC</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="Offers-item">
                        <div class="u-displayNonemWeb">
                            <h3 class="Offers-itemTitle">Bronx</h3>
                            <a class="Offers-itemImage" style="background-image: url('img/apartment.png');" href="#">
              <span class="Offers-itemLabel">
                <div class="ActiveFlag">3 Active Listings</div>
              </span>
                            </a>          <ul>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Crescendo </span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">112 Lincoln Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">2500 Johnson Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">875 Boynton Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText"> Bridgeline</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Grand</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">800 Grand Concourse</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Crystal House</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="Offers-address jsAddAccordion">
                            <h3 class="Offers-addressTitle">Bronx</h3>
                            <ul class="Offers-addressList">
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Crescendo </span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">112 Lincoln Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">2500 Johnson Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">875 Boynton Avenue</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText"> Bridgeline</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">The Grand</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">800 Grand Concourse</span></a>
                                </li>
                                <li class="Offers-addressItem">
                                    <a class="Offers-addressLink" href="#"><span class="Offers-addressText">Crystal House</span></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>





@endsection

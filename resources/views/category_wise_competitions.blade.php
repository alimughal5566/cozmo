@extends('layouts.app')

@section('content')

<style>
	.video{
		margin-top: 50px;
	}
	.reviews {
    background-color: #fff;
    padding: 30px;
    margin-bottom: 10px;
        width: 92%;
    margin-top: 24px;
    margin-left: 50px;
}
.tabcontent {
    border: 1px solid #c7c7c7;
}
.tabcontent h3 {
    text-align: center;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 32px;
}
.anc_tab {
    background: #ee8322;
    color: #fff !important;
    padding: 7px 23px;
    border-radius: 4px;
        box-shadow: 1px 3px 2px black;
    font-weight: 700;
    transition: .25s ease;
}
.anc_tab .rea {
    margin-left: 16px;
    transition: .25s ease;
}

.anc_tab:hover {
    transition: .25s ease;
        transform: translateY(1px);

}
.anc_tab:hover .rea {
        transform: translateX(6px);
        transition: 0.25s ease;

}
.anc_tab {
            text-decoration: none !important;
}
.cst {
    float: right;
    width: 24%;
    margin-top: -22px;
}
/*.ribbon  {*/
/*    text-align: center !important;*/
/*        margin-top: -32px;*/
/*    margin-left: 20px;*/
/*}*/
.cust_wi {
    margin-bottom: 20px;
    border-bottom: 2px dotted;
    padding-bottom: 20px;
}
.ribbon span {
    font-weight: 900;
    font-size: 20px;
}
.active {
    color: #000 !important;
}
.nav-tabs {
    border: none !important;
}

@media screen and (max-width: 720px) {
    .tabcontent {
        margin-left: 17px !important;
            margin-top: 4px !important;
    }
    .setting_mb {
        padding: 15px 31px;
    }
    .ribbon {
            margin-top: 16px;
    }
    .cst {
        float: none;
        margin-top: 15px;
        width: auto;
    }
    .cst_nav {
        display: flex;
        flex-wrap: initial;
        font-size: 12px !important;
        padding: 14px !important;
    }
    .cst_nav .nav-link {
                font-size: 12px !important;

    }
}





</style>
<section style="min-height:550px;">
    <?php $counter = 0; ?>
<?php
 if (!function_exists('limit_text')) {
 function limit_text($text, $limit) {
if (str_word_count($text, 0) > $limit) {
$words = str_word_count($text, 2);
$pos = array_keys($words);
$text = substr($text, 0, $pos[$limit]) . '...';
}
return $text;
} } ?>
<div class="container" style="overflow: hidden;padding: 0; ">
    <h3 class="new-center">{{ $cat->title }}</h3>
		@if($data->count())
		@foreach($data as $product)

          <div class="row cust_wi">

               <div class="col-md-4" style="display: flex;justify-content: center;align-items: center;">
              <div class="r_image" style="width: 67%;display: flex;">
                   @foreach($product->main_img as $key => $img)
                                       @if($key >0)
                                       @break
                                       @endif
              <a href="{{ url('competition/'.$product->urlCategory->slug.'/'.$product->slug) }}"><img class="img-fluid Cust_col_img" src="<?php echo url("products/$img->package_id/$img->name");?>" alt="{{$product->meta_keyword}}"></a>
               <div class="ribbon ribbon-bottom-right"></div>
               @endforeach
            </div>

            </div>


            <div class="col-md-8 setting_mb">
              <div class="conv">
            <h4 class= "camp_title">{{substr($product->name,0,30)}}</h4>
            <?php $str = strip_tags(limit_text($product->description,10));
                         $str1  =str_replace("\xc2\xa0",' ',$str);
                         $nbsp = html_entity_decode("&nbsp;");
                        $string = str_replace($nbsp, " ", $str1);
                         ?>
            <p class="mb-0">{{$product->short_description_one}}</p>
            <p class="mb-0">{{$product->short_description_two}}</p>
            </div>
            <div class="x-e">

                                      <?php   $cm_endte = DB::table('multi_competition')->where('id',$product->mc_id)->where('soft_delete', 0)->first();
                                          ?>
                                        <div class="main-cownt">
                                            <div class="cownt-padding">
                                               <span class="days" id="day<?php echo$counter;?>"></span>
                                               <div class="smalltext1">Days</div>
                                            </div>
                                            <div class="cownt-padding">
                                               <span class="hours" id="hour<?php echo$counter;?>"></span>
                                               <div class="smalltext1">Hours</div>
                                            </div>
                                            <div class="cownt-padding">
                                               <span class="minutes" id="minute<?php echo$counter;?>"></span>
                                               <div class="smalltext1">Minutes</div>
                                            </div>
                                            <div class="cownt-padding">
                                               <span class="seconds" id="second<?php echo$counter;?>"></span>
                                               <div class="smalltext1">Seconds</div>
                                            </div>
                                            <p id="time-up<?php echo$counter.$cm_endte->id;?>"></p>
                                         </div>

                                       <a class="anc_tab" href="{{ url('competition/'.$product->urlCategory->slug.'/'.$product->slug) }}">
                                      <span>Click to win the competition<i class="fa fa-angle-right rea"></i></span>

                                   </a>
                                   </div>

                            <div class="ribbon ribbon-bottom-right cst"><span>Ticket price £{{ $product->mc_price->price }}</span></div>

            </div>
            <div id="desc" class="reviews tabcontent" style="display: block;">
        <!--<h3>Descriptions</h3>-->
            <ul class="nav nav-tabs cst_nav" id="myTab{{$counter}}" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab{{$counter}}" data-toggle="tab" href="#home{{$counter}}" role="tab" aria-controls="home{{$counter}}" aria-selected="true">General description</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab{{$counter}}" data-toggle="tab" href="#profile{{$counter}}" role="tab" aria-controls="profile{{$counter}}" aria-selected="false">Specific Description</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home{{$counter}}" role="tabpanel" aria-labelledby="home-tab{{$counter}}"><p></p>
<div>
<span style="font-size: 24px;">{{substr($product->name,0,30)}}</span>
</div>
        <?php
            $cate = DB::table('competition_articles')->where('competition_id',$product->id)->first();
            print_r($cate->description);
        ?>
</div>
              <div class="tab-pane fade" id="profile{{$counter}}" role="tabpanel" aria-labelledby="profile-tab{{$counter}}"><p></p>
<div>
<span style="font-size: 24px;">{{substr($product->name,0,30)}}</span>
</div>

        <?php print_r($product->description) ?>
</div>
            </div>

      </div>

          </div>

		 <?php $counter++; ?>
		@endforeach
			@endif




</div>
</section>
@endsection

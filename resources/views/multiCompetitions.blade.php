@extends('layouts.app')
@section('content')
  <?php $title_color= DB::table('title_color')->first();  ?>
  <?php $curr=Config::get("constants.currency"); ?>
                  <section class="car_sec">
                        <div class="container p-0" id="competition">
                    <h2 style="color: #ee8322;    margin: 0;" class="text-center" >{{ $mc->title }}</h2>
                    </div>
                        <ul class="container" id="">
                        @foreach($mc->products as $product)
                        <li>
                            <a href="{{ url('competition/'.$product->urlCategory->slug.'/'.$product->uniqid) }}">
                                <div class="car">
                                    <div class="car_img">
                                        @foreach($product->main_img as $key => $img)                                    
                                        @if($key >0)
                                        @break
                                        @endif
                                        <img src="<?php echo url("products/$img->package_id/$img->name");?>">
                                        @endforeach
                                        <div class="purple_tag">
                                            <img src="{{ url('frontend/images/purple_tag.png') }}">
                                            <p><?php  echo $curr; ?>{{ $product->mc_price->price }}</p>
                                        </div>
                                        <div class="car_content">
                                            <h4 style="color:{{$title_color->color}}">{{ $product->name }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>


                    </section>

@endsection
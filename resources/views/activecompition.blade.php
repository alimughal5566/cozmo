   @extends('layouts.app')
   @section('content')
   <section class="car_sec">
    <h3 class="text-center" style="margin: 30px 0;">Upcoming Competitions</h3>
    <ul class="container">
        <?php $mytime = time(); ?>
        @foreach($featuredProducts as $featured)
        <input type="hidden" name="" value="{{$datecompition = date('Y-m-d', strtotime($featured->start_date))}}">
        @if($datecompition > $mytime)
        <li>
            <a href="{{ url('competition/'.$featured->urlCategory->slu.'/'.$featured->uniqid) }}">
                <div class="car">
                    <div class="car_img">
                        @foreach($featured->image as $key => $img)
                        @if($key >0)
                        @break
                        @endif
                        <img src="<?php echo url("products/$img->package_id/$img->name");?>">
                        @endforeach
                        <div class="purple_tag">
                            <img src="{{ url('frontend/images/purple_tag.png') }}">
                            <p>$ {{ $featured->price }}</p>
                        </div>
                        <div class="car_content">
                            <h4>{{ $featured->name }}</h4>
                        </div>
                    </div>
                </div>
            </a>
        </li>
        @endif
        @endforeach
    </ul>
</section>
@endsection
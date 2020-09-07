<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>

</head>
<style>
.not-fount > h1 {
    color: red;
    padding: 3% 0%;
    border: 1px solid;
}
input[type=text], input[type=password] {
    border: 1px solid #ccc !important;
    border-right: 0 !important;
}
</style>
<body>
  
@extends('layouts.app')
@section('content')

  <section class="all_cheriti">
    <div class="container">
      
      <div class="banner-sec ">
          <div class="with_btn">
            <h3>Articles</h3>
            <div class="search_main_custom">
              <a href="#search_box_custom" class="search_btn_custom" id="search">&#9740;</a>
                
              <form class="search_box_custom" id="search_box_custom" action="article-search" method="post" novalidate="novalidate">
                  {{ csrf_field() }}
          <div class="row">
            <div class="col-lg-12 main-serch-cl">
              <div class="row search_custom">
                
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                  
                  <select style="height: 50px;" class="form-control search-slt" id="exampleFormControlSelect1" name="categories">
                    @if($cat != '')
                    <option value="{{$cat}}">{{$cat}}</option>
                    @endif
                    <option value="">All</option>
                    <option value="Public">Public</option>
                    <option value="Members Only">Members Only</option>
                    <option value="Exec Only">Exec Only</option>
                    <option value="Draft">Draft</option>
                  </select>
                </div>
                
                <div class="col-lg-9 col-md-7 col-sm-7 p-0 set_layout_search">
                  <input style="height: 50px;" class="form-control serch-box" type="text" value="{{$search}}" placeholder="Search Your Article By Title" name="name">
                  <button style="height: 50px;" class="serch-btn" type="submit"><i class="fa fa-search"></i></button>
                </div>
                <!--<div class="col-lg-2 col-md-2 col-sm-2 p-0 main-serch">-->
                  
                <!--</div>-->
              </div>
            </div>
          </div>
        </form>
            </div>
          </div>
            <p>
              @foreach($art as $value)
                {{ $value->all_competation }}
              @endforeach
            </p>
          </div>
    </div>

    <div class='container'>
      <!-- <form id="sear">
        <input type="text" name="name" id="name">
        <input id="submit" type="button" name="button" value="submit">
      </form> -->
    <main>
      <div class="row">

@if(count($users)>0)
@foreach($users as $value)

    <div class="col-md-4">
            <a href="/article-detail/{{ $value->id }}">
          <div class='normal'>
           <div class='module'>
             <div class='thumbnail'>
              <img src="uploads/articles/{{ $value->image }}">
          </div>
          <div class='content'>
            <div class="category">Photos</div>
            <h1 class='title'>{{ $value->title }}</h1>
            <h2 class='sub-title'>{{ $value->long_title }}</h2>
            <div class="description">{{ $value->description }}</div>
            <div class="meta">
              <span class="timestamp">
                <i class='fa fa-user'></i> {{ $value->name }}
              </span>
              <span>
                <i class='fa fa-comments'></i>
                <a href="/article-detail/{{ $value->id }}"> 39 comments</a>
              </span>
               <div class="comment_show">
            <div class="prvs">
              <a href="#">View Previous Comments</a>
            </div>
            <div class="do_cmnt">
              <img src="images/2.jpg" alt="">
              <input type="text" name="" value="" placeholder="Write a comment">
            </div>
          </div>
            </div>
          </div>
         
         </div>
         </div>
         </a>
        </div>

@endforeach
@else()
    <div class="container not-fount">
        <h1>No Record Found--!</h1>
    </div>
@endif
      </div>
      {{$users->links()}}
      <div class="tags_articles">
        <div class="row">
          <!--<div class="artices">-->
          <!-- <h6>BY <i class="fa fa-user"></i></h6>-->
          <!-- <button type="button">[IPUG Exec] European IPUG </button> <span>|</span>-->
          <!-- <button type="button"><i class="fa fa-comments-o mr-2"></i>Post a comment</button> <span>|</span>-->
          <!-- <button type="button"><i class="fa fa-share-alt mr-2"></i>Share article</button> <span>|</span>-->
          <!--</div>-->
            <!--<div class="artices">-->
            <!-- <h6>Tagged <i class="fa fa-tags"></i></h6>-->
            <!-- <button type="button">Competition Authorities </button> <span><i class="fa fa-tag"></i></span>-->
            <!-- <button type="button">Trending Venues in</button> <span><i class="fa fa-tag"></i></span>-->
            <!-- <button type="button">COSSIOM / French IPUG</button> <span><i class="fa fa-tag"></i></span>-->
            <!-- <button type="button">Data Compliance & Audits</button> <span><i class="fa fa-tag"></i></span>-->
            <!-- <button type="button">Data Usage Rights</button> <span><i class="fa fa-tag"></i></span>-->
            <!-- <button type="button">ESMA</button> <span><i class="fa fa-tag"></i></span>-->
            <!-- <button type="button">Exchanges</button> <span><i class="fa fa-tag"></i></span>-->
            <!-- <button type="button">FCA</button> <span><i class="fa fa-tag"></i></span>-->
            <!-- <button type="button">ILM</button> <span><i class="fa fa-tag"></i></span>-->
            <!-- <button type="button">IPUG Events</button> <span><i class="fa fa-tag"></i></span>-->
            <!-- <button type="button">Index Licensing </button> <span><i class="fa fa-tag"></i></span>-->
            <!-- <button type="button">Regulatory  Issues</button> <span><i class="fa fa-tag"></i></span>-->
            <!--</div>-->

        </div>
      </div>
    </main>
  </div>
  </section>

<script>
      jQuery(document).ready(function() {
        $( "#search" ).click(function(e) {
        e.preventDefault();
        $(".search_box_custom").toggleClass('active');
      });  
      });
    </script>
    <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

   <script type="text/javascript">

    $('#submit').click(function(event){
        event.preventDefault();

        name = $('#name').val();

        $.ajax({
          url: 'search_event',
          type:"POST",
          data: form.serialize(),
          success:function(response){
            console.log(response);
          },
         });
        });
      </script>
@endsection()

</body>
</html>
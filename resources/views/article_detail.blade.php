<!DOCTYPE html>
<html>
<head>
  <base href="/public">
	<title>Article-detal</title>
  <style type="text/css" href="css/style.css"></style>
</head>
<body>


@extends('layouts.app')

@section('content')
@foreach($users as $value)
  <section class="all_cheriti">
    <div class="container">
    <div class="banner-sec ">
      @if( $value->article_type  == 'Draft')
            <h3>{{ $value->long_title }} <span style="float: right;"><a href="/article-write/{{$value->id}}">Edit</a></span></h3>
      @else
      <h3>{{ $value->long_title }}</h3>
      @endif
            <p>{{ $value->created_at }}</p>
        </div>
        <div class="row">
          <div class="col-md-7">
            <div class="img_detail">
              <img src="uploads/articles/{{ $value->image }}" alt="" class="first_img">
              <p class="comments">
                    
                    <!-- <a href="javascript:void(0)"><i class="fa fa-thumbs-up mr-1"></i>Like</a> -->
                    <a href="javascript:void(0)" class="comment"><i class="fa fa-comments mr-1"></i>comments</a>
                    <!-- <a href="javascript:void(0)"><i class="fa fa-share mr-1"></i>Share</a> -->
                </p>
                <div class="comment_show">
                  <div class="prvs">
                    <a href="#">View Previous Comments</a>
                  </div>
                  <div class="do_cmnt">
                    <img src="uploads/articles/{{ $value->image }}" alt="">
                    <input type="text" name="" value="" placeholder="Write a comment">
                  </div>
                </div>
            </div>    
          </div>
          <div class="col-md-5">
            <div class="details_section">
              <div class="body">
                <p>{{ $value->description }}</p>
                @endforeach()
              </div>
            </div>
          </div>
        </div>
        <div class="tags_articles">
        <div class="row">
          <div class="artices">
           <h6>BY <i class="fa fa-user"></i></h6>
           <button type="button">[IPUG Exec] European IPUG </button> <span>|</span>
           <button type="button"><i class="fa fa-comments-o mr-2"></i>Post a comment</button> <span>|</span>
           <button type="button"><i class="fa fa-share-alt mr-2"></i>Share article</button> <span>|</span>
          </div>
            <div class="artices">
             <h6>Tagged <i class="fa fa-tags"></i></h6>
             <button type="button">Competition Authorities </button> <span><i class="fa fa-tag"></i></span>
             <button type="button">Trending Venues in</button> <span><i class="fa fa-tag"></i></span>
             <button type="button">COSSIOM / French IPUG</button> <span><i class="fa fa-tag"></i></span>
             <button type="button">Data Compliance &amp; Audits</button> <span><i class="fa fa-tag"></i></span>
             <button type="button">Data Usage Rights</button> <span><i class="fa fa-tag"></i></span>
             <button type="button">ESMA</button> <span><i class="fa fa-tag"></i></span>
             <button type="button">Exchanges</button> <span><i class="fa fa-tag"></i></span>
             <button type="button">FCA</button> <span><i class="fa fa-tag"></i></span>
             <button type="button">ILM</button> <span><i class="fa fa-tag"></i></span>
             <button type="button">IPUG Events</button> <span><i class="fa fa-tag"></i></span>
             <button type="button">Index Licensing </button> <span><i class="fa fa-tag"></i></span>
             <button type="button">Regulatory  Issues</button> <span><i class="fa fa-tag"></i></span>
            </div>

        </div>
      </div>
    </div>
  </section>
    <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script>
    $(document).ready(function(){
        $(".comment").click(function(){
          $(".comment_show").slideToggle();
        });
      });
  </script>
@endsection()

</body>
</html>
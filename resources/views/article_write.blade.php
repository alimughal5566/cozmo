<!DOCTYPE html>
<html>
<head>
  <base href="/public">
	<title>Article-write</title>
  <!--<style type="text/css" href="css/style.css"></style>-->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<style>
    .save_button {
      padding: 7px 25px !important;
    border-radius: 30px !important;
        background: #03a9f4 !important;
  }
  .main_edit input {
      padding: 12px 20px !important;
    border-radius: 5px !important;
  }
  .textarea {
     height: 220px;
    width: 100%;
    border: 1px solid #ccc;
    border-radius: 6px;
    padding: 12px;
  }
  .main_edit .banner-sec {
      margin-bottom: 1rem;
  }
  .main_edit .form-horizontal {
      padding: 0 20px;
  }
  label {
      font-weight: 500;
  }
  .cancel {
      padding: 7px 15px !important;
    border-radius: 30px !important;
  }
</style>


@extends('layouts.app')

@section('content')
<div class="main_edit">
            <div class="banner-sec ">
                <h3>Edit Article</h3>
            </div>
                
                      <form class="form-horizontal" method="POST" action="article-update">
                        {{ csrf_field() }}



@foreach($users as $value)

                  <input type="hidden" name="id" value="{{$value->id}}">


                            <div class="form-group">

                                <label for="title">Title:</label>

                                <input required id="title" value="{{$value->long_title}}" type="text" placeholder="Title" name="long_title">

                            </div>

             

                      

                            <div class="form-group">

                                <label>Description</label>

                                <textarea name="description" cols="8" class="textarea" id="txtEditorz">{{$value->description}}</textarea>

                            </div>
 
                   
                        <div class="end_btns">
                            <button class="btn btn-danger cancel" type="submit">Cancel</button>
                            <button class="btn btn-primary save_button" type="submit">Save</button>
                            
                        </div>
@endforeach

                      </form>
                    </div>


        <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">

        <script src="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>

@endsection()

</body>
</html>
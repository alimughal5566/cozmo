@extends('layouts.simple_layout')
@section('content')
<div class="alert alert-success">
  <strong>Success!</strong> You have been successfully removed from the subscriber listing. Redirecting ...
</div>
<script>
    $(document).ready(function(){
        setTimeout(function() { 
            location.href= '{{url('/')}}';
        }, 3000);
    });
</script>
@endsection
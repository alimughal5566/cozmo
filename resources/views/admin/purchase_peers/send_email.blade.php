@extends( 'admin.layouts.app' )
@section( 'content' )

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

<style>
.selectpicker {
    width:100%;
}
iframe {
    width:80%;
    border:thin solid black;
    height:250px;
}
.row {
    margin-bottom:10px;
}

#email-template-html {
    border:2px solid #ced4da;
    border-radius: 5px;
    max-height:500px;
    min-height:500px;
    overflow-y:auto;
}

.select2-container{
    width: 100% !important;
}
.heading_admin h3 {
    font-weight: 600;
    text-align: center;
    background-color: #e9ebee33;
    text-transform: uppercase;
    /* letter-spacing: 2px; */
    font-size: 25px;
    color: #ee8322;
    padding: 4px 0;
    border-bottom: 1px solid #adadad;
}
.slid_dropdown {
    width: 100%;
    padding: 8px;
    border-radius: 4px;
    color: #aaa;
}
#show_3rd_template label {
    font-size: 13px;
}
.schedule {
   color: #FFF;
    background-color: #28a745;
    border-color: #28a745;
}
.radio_btn {
  display: block;
  padding: 5px 10px;
  margin: 5px 0;
  font: 14px/20px Arial, sans-serif;
  background-color: #ccc;
  border-radius: 7px;
  
  &:hover {
    background-color: gold;
    cursor: pointer;
  }
}

.radio_inp {
    display: none;
}

.isSelected {
  background-color: lightgreen;
}

    .perssen {
            padding: 7px 11px;
    width: 100%;
    border-radius: 4px;
    border: 2px solid #d0d6db;
    }
</style>

<script src="//cdn.ckeditor.com/4.13.1/full-all/ckeditor.js"></script>
<script>
            $(document).ready(function() {
           CKEDITOR.replace( 'txtEditor' );
            });

    </script>

<div class="app-title">

    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
        </li>
        <li class="breadcrumb-item"><a href="{{url('/')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item">Purchase Peers</li>
    </ul>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <h3 class="tile-title">Purchase Peers
            <!-- <a href="{{url('user/detail')}}" class="btn btn-sm btn-success pull-right cust_color"><i class="fa fa-eye"></i>User Detail</a> -->
            </h3>
            @if (session('alert'))
                <div class="alert alert-danger" style="width: 40%">
                    {{ session('alert') }}
                </div>
            @endif
            <form  action="{{ url('user_activity_email')}}" action="multipart/form-data" method="post">
                    @csrf
            <input type="hidden" name="user_activity_id" value="{{$user_activity_id}}">

            <div class="row">
            <div class="col-md-4">
                            <div class="form-group">
                                <label>Subject</label>                                
                                <input  type="text" placeholder="Subject" class="form-control" name="subject" value="{{old('subject')}}" required="" autofocus=""> 
                            </div>
            </div>

            <div class="col-md-4">
                            <div class="form-group">
                                <label>Select Percentage</label>                                
                                <select id="percentage" class="perssen" required>
                                  <option value="">Select Percentage</option>
                                  <?php for ($i=1; $i <21 ; $i++) { ?>
                                      <option value="{{$i}}">{{$i}}</option>
                                 <?php }       ?>
                                  
                                </select> 
                            </div>
            </div>

            <div class="col-md-4 couponn">
                            <div class="form-group">
                                <label>Coupon</label>                                
                                <input id="show_coupon"  type="text" placeholder="Name" class="form-control" name="coupn" value="" readonly> 
                            </div>
            </div>

        </div>
       <!--  <div class="row">        
                <div class="col col-md-7">
                    <label >Slide</label>
            
    
                                 <select name="slide" id="" class="slid_dropdown" required>
                                    <option value="">Select Slide</option>
                          <?php foreach ($slide as $key => $slides): ?>                             
                        <option value="<?php echo $slides->id; ?>"><?php echo $slides->title; ?></option>
                     <?php endforeach; ?>
                         </select>
    
                 </div>

                
             </div> -->

              <div class="row">      
            <!--  <div class="col col-md-4">
                <div class="form-group">
                            <label>Competition Description</label>
                            <input  type="text" placeholder="Competition Description" class="form-control" name="top_trend_description"  value="{{ old('top_trend_description') }}" required>
                        </div>
             </div> -->



              <div class="col col-md-4">
                    <label >Slide</label>
            
    
                                 <select name="slide" id="" class="slid_dropdown" required>
                                    <option value="">Select Slide</option>
                          <?php foreach ($slide as $key => $slides): ?>                             
                        <option value="<?php echo $slides->id; ?>"><?php echo $slides->title; ?></option>
                     <?php endforeach; ?>
                         </select>    
                 </div>

                 <div class="col col-md-4">
                    <div class="form-group">
                        <label>Competition Title</label>
                            <input  type="text" placeholder="Competition Title" class="form-control" name="top_trend_title"  value="{{ old('top_trend_title') }}" required>
                    </div>
                </div>

            <div class="col col-md-4">
                <label>Select Competition</label>
                    <select name="trend_competition[]" id="trend_competition" class="selectpicker" multiple required>
                        <option value="">Select Competition</option>
                      <?php foreach ($products as $key => $product): ?>                             
                    <option value="<?php echo $product->id; ?>"><?php echo $product->name; ?></option>
                 <?php endforeach; ?>
                     </select>

             </div>
         </div> 

            <div class="row">
            <div class="col-lg-12" >
                        <div class="form-group">
                        <label>Competition Description</label>
                        <textarea name="top_trend_description"  cols="16" id="txtEditor" style="height: 35px;width: 100%;" required>{{old('top_trend_description')}}
                            
                        </textarea>
                        </div>  
                    </div>
                    </div>
            <div class="tile-footer text-right">
                <button type="submit" class="btn btn-sm btn-success cust_color">Send</button>
            </div>

            </form>

                </div>
            </div>
        </div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>


<script>

    $('#trend_competition').select2(); 



    $('#percentage').change(function(){
        var select = $(this).val();
        var form_data = {
                        select: select
                       };
                $.ajax( {
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
                    },
                    url: '<?php echo url("purchase_Peers/get_coupon"); ?>',
                    data: form_data,
                    success: function ( msg ) {
                        console.log(msg);
                        if(msg.status=="success")
                        {
                            // $('.couponn').show();
                            $('#show_coupon').val(msg.coupon);
                        }else{
                             // $('.couponn').hide();
                            $('#show_coupon').val("There is no Coupon");
                        }


                    }
    });
                });

</script>









@endsection
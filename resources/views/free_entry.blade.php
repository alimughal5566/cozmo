@extends('layouts.app')
@section('content')

    <link href="{{ url('frontend/css/select2.css') }}" rel="stylesheet">


<div class="container">
	<section class="main-heading" style="text-align: center;">
		<h1>Free Entry</h1>
		<hr>
		@if (session('alert'))
		    <div class="alert alert-danger">
		        {{ session('alert') }}
		    </div>
		@endif
		@if (session('success'))
		    <div class="alert alert-success">
		        {{ session('success') }}
		    </div>
		@endif
			<div class="profile_info">

				<?php  $url = request()->segment(2); ?>

				<form class="form-horizontal" method="POST" action="{{ url('store_free_entry/'.$url) }}" enctype="multipart/form-data" style="width: 58%;">
						{{ csrf_field() }}

				@if(Auth::user()=="")

				<div style="padding: 10px">
					<h2>Please login to Get Free Ticket</h2>
				</div>

				@else

				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label" id="newteam">Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="uname" name="uname" value="{{Auth::user()->name}}" placeholder="User Name" required>
						</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label" id="newteam">Address</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="address" name="address" value="{{Auth::user()->address}}" placeholder="address" required>
						</div>
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label" id="newteam">Date Of Birth</label>
						<div class="col-sm-9 cust-lable">
							 <label>Days</label>
                                                    <select name="days" id="days" style="width: 100px; padding: 4px;text-align: center;" required>  

                                                        <option value=01>01</option>
                                                        <option value=02>02</option>
                                                        <option value=03>03</option>
                                                        <option value=04>04</option>
                                                        <option value=05>05</option>
                                                        <option value=06>06</option>
                                                        <option value=07>07</option>
                                                        <option value=08>08</option>
                                                        <option value=09>09</option>
                                                        <option value=10>10</option>
                                                        <option value=11>11</option>
                                                        <option value=12>12</option>
                                                        <option value=13>13</option>
                                                        <option value=14>14</option>
                                                        <option value=15>15</option>
                                                        <option value=16>16</option>
                                                        <option value=17>17</option>
                                                        <option value=18>18</option>
                                                        <option value=19>19</option>
                                                        <option value=20>20</option>
                                                        <option value=21>21</option>
                                                        <option value=22>22</option>
                                                        <option value=23>23</option>
                                                        <option value=24>24</option>
                                                        <option value=25>25</option>
                                                        <option value=26>26</option>
                                                        <option value=27>27</option>
                                                        <option value=28>28</option>
                                                        <option value=29>29</option>
                                                        <option value=30>30</option>
                                                        <option value=31>31</option>


                                                      </select>
                                                    
                                                    <label>Month</label>
                                                    <select name="month" id="month" style="width: 100px; padding: 4px;text-align: center;" required>

                                                        <option value=01>01</option>
                                                        <option value=02>02</option>
                                                        <option value=03>03</option>
                                                        <option value=04>04</option>
                                                        <option value=05>05</option>
                                                        <option value=06>06</option>
                                                        <option value=07>07</option>
                                                        <option value=08>08</option>
                                                        <option value=09>09</option>
                                                        <option value=10>10</option>
                                                        <option value=11>11</option>
                                                        <option value=12>12</option>

                                                      </select>

                                                      <label>Year</label>
                                                    <select name="year" id="year" style="width: 103px; padding: 4px;text-align: center;" required>
                                                        <?php 
                                                            $year = date("Y");
                                                            for ($i=1900; $i<= $year ; $i++) { 
                                                        ?> 

                                                        <option value={{$i}}>{{$i}}</option>

                                                    <?php } ?>
                                                      </select>
                                            
                                                   
                                                      </div>                                                
				</div>

				<div class="form-group row">
					<label for="" class="col-sm-3 col-form-label" id="newteam">Phone</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="phone" name="phone" value="{{Auth::user()->phone}}" placeholder="Phone" required>
						</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-3 col-form-label" style="padding-left: 45px;">Select Ticket</label>
								<div class="col-sm-9">
							<select class="js-example-basic-multiple form-control" name="states[]" multiple="multiple">	
										<option value="0">select available ticket</option>
										@foreach($tickets as $row)
										<option value="{{ $row->code }}">{{ $row->code }}</option>         
										 @endforeach
									</select>
								</div>
							</div>		



			<button style="width:30%; color: white; background-color: #ee8322;" type="submit" class="btn">Submit</button>

				@endif

			</form>




			</div>
	</section>
</div>
<script type="text/javascript" src="{{ url('frontend/js/select2.js') }}"></script>
<script>

	$(document).ready(function() {
    	$('.js-example-basic-multiple').select2();
	});
</script>





@endsection
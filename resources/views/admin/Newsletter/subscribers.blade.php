@extends( 'admin.layouts.app' )
@section( 'content' )

<style>
    .tab-content{
        margin-top:10px;
    }
    .bbbb{
            color: #fff;
    background-color: #ee8322;
    border-color: #ee8322;
    border-radius: 0;
    }
   .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #fff !important;
    background-color: #ee8322 !important;
    border: 1px solid #ee8322 !important;
}
    .nav-tabs>li>a:hover {
        border-color: #ee8322 #ee8322 #ee8322 !important;
    box-shadow: 5px 3px 9px 0px #88888875 !important;
    color:white !important;
        transform: translate3d(0, -1px, 0) !important;
}
.nav>li>a:focus, .nav>li>a:hover{
        background-color: #ee8322 !important;
}
.breadcrumb {
    padding: 0 !important;
    margin-bottom: 0 !important;
    list-style: none !important;
    background-color: #f5f5f5 !important;
    border-radius: 4px;
}
.dt-buttons button {
        background: #ee8322;
    border: none;
    padding: 5px 14px;
    color: #fff;
    border-radius: 4px;

}

.news-btn {
    color: #fff;
    background-color: #ee8322 !important;
    border-color: #ee8322;
    border-radius: 4px;
    margin-bottom:10px;
    border: none !important;
}
.set_space {
    margin-bottom : 10px;
}
select.form-control:not([size]):not([multiple]) {
    height: auto !important;
}
.form-control {
    border: 2px solid #ced4da !important;
}
.in_one_line {
    display: flex;
    flex-direction: row-reverse;
    justify-content: flex-end;
}
.values {
    margin-top: 17px;
    margin-left: 17px;
}
.impor {
    color: #ee8322;
    border: 1px solid;
    padding: 4px 7px;
}
.zomi {
    color: blue;
    border: 1px solid;
    padding: 4px 7px;
}
.priz { 
     border: 1px solid;
    padding: 4px 7px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
<script type="text/javascript" src="//cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>


    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"/></script>-->
    <!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"/></script>-->
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"/></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"/></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"/></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"/></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"/></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"/></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"/></script>
    
<div class="app-title">

  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
    </li>
    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a>
    </li>
   
  </ul>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">News Letter Subscriptions</h3>
        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        @if ($message = Session::get('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif

        
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#menu1">Subscribed Users</a></li>
            <li ><a  data-toggle="tab" href="#home">All Time Subscribers</a></li>
            
            <li><a data-toggle="tab" href="#menu2">Unsubscribed Users</a></li>
        </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade ">
      <div class="table-responsive">
				<table class="table" id="table_1">
					<thead class="back_blue">
						<tr>
							<th>Email</th>
							<th>Source</th>
							<th>Ip-Address</th>
							<th>Country</th>
							<th>Subscribe At</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						@foreach($subs as $row)
						<tr>
							<td>{{$row->email}}</td>
							<td>{{$row->source}}</td>
							<td>{{$row->ip_address}}</td>
							<td>{{$row->country}}</td>
							<td>{{$row->create_at}}</td>
							<td>
								@if($row->status==1)
								<!-- <div class="badge badge-rounded bg-green">Active</div>  -->
								<a href="javascript:void(0)" data-id="{{$row->id}}" data-status="{{$row->status}}" id="change_status" class="btn btn-sm btn-success" style="width:63px;"> @lang('users.active')</a> @else
								<a href="javascript:void(0)" data-id="{{$row->id}}" data-status="{{$row->status}}" id="change_status" class="btn btn-sm btn-danger"> @lang('users.inactive')</a>
								@endif
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
    </div>
    <div id="menu1" class="tab-pane fade in active">
      <div class="table-responsive">
          <div class="in_one_line">
     <div style="display: flex;    justify-content: space-between;" class="mb-3 mt-3">
        
		 <form  style="margin-left: 30px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
            @csrf
            <div style="display: flex;" id="search_div">
                <input class="mt-2" type="file" name="import_file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                <button class="btn btn-primary news-btn">Upload</button>
            </div>
        </form>
     </div>
     <div class="values">
     <label>Imported</label>
     <span id="imported" class="impor">{{$imported}}</span>
     <label>Prizmaker</label>
     <span id="prizemaker" class="priz">{{$prizemaker}}</span>
     <label>Zombie Game</label>
     <span id="zombie_game" class="zomi">{{$zombie_game}}</span>
     </div>
     </div>
     <div class="container"> 
     <div class="row" style="width: 93%;    margin-top: 9px;">
		 <div class="col-md-4 set_space">
		 <label>No. of Emails</label>
		 <input type="number" id="no_of_emails"  class="form-control" value="" />
		 <!--<button onclick="no_of_emails_button()">Submit</button>-->
		 </div>
		  <div class="col-md-4 set_space">
		 <label>Source</label>
		 <select id="source" class="form-control">
		     <option value="" selected>Select Source</option>
		     <option value="Imported">Imported</option>
		     <option value="Prizemaker">Prizemaker</option>
		     <option value="Zombie Game">Zombie Game</option>
		 </select>
		 <!--<button onclick="source_button()">Submit</button>-->
		 </div>
		  <div class="col-md-4 set_space">
		 <label>Country</label>
		 <select id="country" class="form-control">
           <option value="" selected>Select Country</option>
           <option value="Afganistan">Afghanistan</option>
           <option value="Albania">Albania</option>
           <option value="Algeria">Algeria</option>
           <option value="American Samoa">American Samoa</option>
           <option value="Andorra">Andorra</option>
           <option value="Angola">Angola</option>
           <option value="Anguilla">Anguilla</option>
           <option value="Antigua & Barbuda">Antigua & Barbuda</option>
           <option value="Argentina">Argentina</option>
           <option value="Armenia">Armenia</option>
           <option value="Aruba">Aruba</option>
           <option value="Australia">Australia</option>
           <option value="Austria">Austria</option>
           <option value="Azerbaijan">Azerbaijan</option>
           <option value="Bahamas">Bahamas</option>
           <option value="Bahrain">Bahrain</option>
           <option value="Bangladesh">Bangladesh</option>
           <option value="Barbados">Barbados</option>
           <option value="Belarus">Belarus</option>
           <option value="Belgium">Belgium</option>
           <option value="Belize">Belize</option>
           <option value="Benin">Benin</option>
           <option value="Bermuda">Bermuda</option>
           <option value="Bhutan">Bhutan</option>
           <option value="Bolivia">Bolivia</option>
           <option value="Bonaire">Bonaire</option>
           <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
           <option value="Botswana">Botswana</option>
           <option value="Brazil">Brazil</option>
           <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
           <option value="Brunei">Brunei</option>
           <option value="Bulgaria">Bulgaria</option>
           <option value="Burkina Faso">Burkina Faso</option>
           <option value="Burundi">Burundi</option>
           <option value="Cambodia">Cambodia</option>
           <option value="Cameroon">Cameroon</option>
           <option value="Canada">Canada</option>
           <option value="Canary Islands">Canary Islands</option>
           <option value="Cape Verde">Cape Verde</option>
           <option value="Cayman Islands">Cayman Islands</option>
           <option value="Central African Republic">Central African Republic</option>
           <option value="Chad">Chad</option>
           <option value="Channel Islands">Channel Islands</option>
           <option value="Chile">Chile</option>
           <option value="China">China</option>
           <option value="Christmas Island">Christmas Island</option>
           <option value="Cocos Island">Cocos Island</option>
           <option value="Colombia">Colombia</option>
           <option value="Comoros">Comoros</option>
           <option value="Congo">Congo</option>
           <option value="Cook Islands">Cook Islands</option>
           <option value="Costa Rica">Costa Rica</option>
           <option value="Cote DIvoire">Cote DIvoire</option>
           <option value="Croatia">Croatia</option>
           <option value="Cuba">Cuba</option>
           <option value="Curaco">Curacao</option>
           <option value="Cyprus">Cyprus</option>
           <option value="Czech Republic">Czech Republic</option>
           <option value="Denmark">Denmark</option>
           <option value="Djibouti">Djibouti</option>
           <option value="Dominica">Dominica</option>
           <option value="Dominican Republic">Dominican Republic</option>
           <option value="East Timor">East Timor</option>
           <option value="Ecuador">Ecuador</option>
           <option value="Egypt">Egypt</option>
           <option value="El Salvador">El Salvador</option>
           <option value="Equatorial Guinea">Equatorial Guinea</option>
           <option value="Eritrea">Eritrea</option>
           <option value="Estonia">Estonia</option>
           <option value="Ethiopia">Ethiopia</option>
           <option value="Falkland Islands">Falkland Islands</option>
           <option value="Faroe Islands">Faroe Islands</option>
           <option value="Fiji">Fiji</option>
           <option value="Finland">Finland</option>
           <option value="France">France</option>
           <option value="French Guiana">French Guiana</option>
           <option value="French Polynesia">French Polynesia</option>
           <option value="French Southern Ter">French Southern Ter</option>
           <option value="Gabon">Gabon</option>
           <option value="Gambia">Gambia</option>
           <option value="Georgia">Georgia</option>
           <option value="Germany">Germany</option>
           <option value="Ghana">Ghana</option>
           <option value="Gibraltar">Gibraltar</option>
           <option value="Great Britain">Great Britain</option>
           <option value="Greece">Greece</option>
           <option value="Greenland">Greenland</option>
           <option value="Grenada">Grenada</option>
           <option value="Guadeloupe">Guadeloupe</option>
           <option value="Guam">Guam</option>
           <option value="Guatemala">Guatemala</option>
           <option value="Guinea">Guinea</option>
           <option value="Guyana">Guyana</option>
           <option value="Haiti">Haiti</option>
           <option value="Hawaii">Hawaii</option>
           <option value="Honduras">Honduras</option>
           <option value="Hong Kong">Hong Kong</option>
           <option value="Hungary">Hungary</option>
           <option value="Iceland">Iceland</option>
           <option value="Indonesia">Indonesia</option>
           <option value="India">India</option>
           <option value="Iran">Iran</option>
           <option value="Iraq">Iraq</option>
           <option value="Ireland">Ireland</option>
           <option value="Isle of Man">Isle of Man</option>
           <option value="Israel">Israel</option>
           <option value="Italy">Italy</option>
           <option value="Jamaica">Jamaica</option>
           <option value="Japan">Japan</option>
           <option value="Jordan">Jordan</option>
           <option value="Kazakhstan">Kazakhstan</option>
           <option value="Kenya">Kenya</option>
           <option value="Kiribati">Kiribati</option>
           <option value="Korea North">Korea North</option>
           <option value="Korea Sout">Korea South</option>
           <option value="Kuwait">Kuwait</option>
           <option value="Kyrgyzstan">Kyrgyzstan</option>
           <option value="Laos">Laos</option>
           <option value="Latvia">Latvia</option>
           <option value="Lebanon">Lebanon</option>
           <option value="Lesotho">Lesotho</option>
           <option value="Liberia">Liberia</option>
           <option value="Libya">Libya</option>
           <option value="Liechtenstein">Liechtenstein</option>
           <option value="Lithuania">Lithuania</option>
           <option value="Luxembourg">Luxembourg</option>
           <option value="Macau">Macau</option>
           <option value="Macedonia">Macedonia</option>
           <option value="Madagascar">Madagascar</option>
           <option value="Malaysia">Malaysia</option>
           <option value="Malawi">Malawi</option>
           <option value="Maldives">Maldives</option>
           <option value="Mali">Mali</option>
           <option value="Malta">Malta</option>
           <option value="Marshall Islands">Marshall Islands</option>
           <option value="Martinique">Martinique</option>
           <option value="Mauritania">Mauritania</option>
           <option value="Mauritius">Mauritius</option>
           <option value="Mayotte">Mayotte</option>
           <option value="Mexico">Mexico</option>
           <option value="Midway Islands">Midway Islands</option>
           <option value="Moldova">Moldova</option>
           <option value="Monaco">Monaco</option>
           <option value="Mongolia">Mongolia</option>
           <option value="Montserrat">Montserrat</option>
           <option value="Morocco">Morocco</option>
           <option value="Mozambique">Mozambique</option>
           <option value="Myanmar">Myanmar</option>
           <option value="Nambia">Nambia</option>
           <option value="Nauru">Nauru</option>
           <option value="Nepal">Nepal</option>
           <option value="Netherland Antilles">Netherland Antilles</option>
           <option value="Netherlands">Netherlands (Holland, Europe)</option>
           <option value="Nevis">Nevis</option>
           <option value="New Caledonia">New Caledonia</option>
           <option value="New Zealand">New Zealand</option>
           <option value="Nicaragua">Nicaragua</option>
           <option value="Niger">Niger</option>
           <option value="Nigeria">Nigeria</option>
           <option value="Niue">Niue</option>
           <option value="Norfolk Island">Norfolk Island</option>
           <option value="Norway">Norway</option>
           <option value="Oman">Oman</option>
           <option value="Pakistan">Pakistan</option>
           <option value="Palau Island">Palau Island</option>
           <option value="Palestine">Palestine</option>
           <option value="Panama">Panama</option>
           <option value="Papua New Guinea">Papua New Guinea</option>
           <option value="Paraguay">Paraguay</option>
           <option value="Peru">Peru</option>
           <option value="Phillipines">Philippines</option>
           <option value="Pitcairn Island">Pitcairn Island</option>
           <option value="Poland">Poland</option>
           <option value="Portugal">Portugal</option>
           <option value="Puerto Rico">Puerto Rico</option>
           <option value="Qatar">Qatar</option>
           <option value="Republic of Montenegro">Republic of Montenegro</option>
           <option value="Republic of Serbia">Republic of Serbia</option>
           <option value="Reunion">Reunion</option>
           <option value="Romania">Romania</option>
           <option value="Russia">Russia</option>
           <option value="Rwanda">Rwanda</option>
           <option value="St Barthelemy">St Barthelemy</option>
           <option value="St Eustatius">St Eustatius</option>
           <option value="St Helena">St Helena</option>
           <option value="St Kitts-Nevis">St Kitts-Nevis</option>
           <option value="St Lucia">St Lucia</option>
           <option value="St Maarten">St Maarten</option>
           <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
           <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
           <option value="Saipan">Saipan</option>
           <option value="Samoa">Samoa</option>
           <option value="Samoa American">Samoa American</option>
           <option value="San Marino">San Marino</option>
           <option value="Sao Tome & Principe">Sao Tome & Principe</option>
           <option value="Saudi Arabia">Saudi Arabia</option>
           <option value="Senegal">Senegal</option>
           <option value="Seychelles">Seychelles</option>
           <option value="Sierra Leone">Sierra Leone</option>
           <option value="Singapore">Singapore</option>
           <option value="Slovakia">Slovakia</option>
           <option value="Slovenia">Slovenia</option>
           <option value="Solomon Islands">Solomon Islands</option>
           <option value="Somalia">Somalia</option>
           <option value="South Africa">South Africa</option>
           <option value="Spain">Spain</option>
           <option value="Sri Lanka">Sri Lanka</option>
           <option value="Sudan">Sudan</option>
           <option value="Suriname">Suriname</option>
           <option value="Swaziland">Swaziland</option>
           <option value="Sweden">Sweden</option>
           <option value="Switzerland">Switzerland</option>
           <option value="Syria">Syria</option>
           <option value="Tahiti">Tahiti</option>
           <option value="Taiwan">Taiwan</option>
           <option value="Tajikistan">Tajikistan</option>
           <option value="Tanzania">Tanzania</option>
           <option value="Thailand">Thailand</option>
           <option value="Togo">Togo</option>
           <option value="Tokelau">Tokelau</option>
           <option value="Tonga">Tonga</option>
           <option value="Trinidad & Tobago">Trinidad & Tobago</option>
           <option value="Tunisia">Tunisia</option>
           <option value="Turkey">Turkey</option>
           <option value="Turkmenistan">Turkmenistan</option>
           <option value="Turks & Caicos Is">Turks & Caicos Is</option>
           <option value="Tuvalu">Tuvalu</option>
           <option value="Uganda">Uganda</option>
           <option value="United Kingdom">United Kingdom</option>
           <option value="Ukraine">Ukraine</option>
           <option value="United Arab Erimates">United Arab Emirates</option>
           <option value="United States of America">United States of America</option>
           <option value="Uraguay">Uruguay</option>
           <option value="Uzbekistan">Uzbekistan</option>
           <option value="Vanuatu">Vanuatu</option>
           <option value="Vatican City State">Vatican City State</option>
           <option value="Venezuela">Venezuela</option>
           <option value="Vietnam">Vietnam</option>
           <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
           <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
           <option value="Wake Island">Wake Island</option>
           <option value="Wallis & Futana Is">Wallis & Futana Is</option>
           <option value="Yemen">Yemen</option>
           <option value="Zaire">Zaire</option>
           <option value="Zambia">Zambia</option>
           <option value="Zimbabwe">Zimbabwe</option>
        </select>
		 <!--<button onclick="country_button()">Submit</button>-->
		 </div>
		 <div class="col-md-4 set_space">
		 <label>Email sent Days Ago</label>
		 <input type="number" id="email_sent_days_ago"  class="form-control" value="">
		 <!--<button onclick="email_sent_days_ago_button()">Submit</button>-->
        </div>
        
        <div class="col-md-4 set_space">
		 <label>Email</label>
		 <input type="text" id="email"  class="form-control" value="">
		 <!--<button onclick="email_sent_days_ago_button()">Submit</button>-->
        </div>
        <div class="col-md-4" style="    margin-top: 28px;">
		 <button style="margin-left: 30px;" class="btn btn-primary news-btn" onclick="call_query()">Search</button>
		
		 </div>
		   <form method="POST" action="{{url('/sendmailsub')}}" style="text-align: right;margin-bottom: 10px;">
			 @csrf
			<input type="hidden" name="email_id_list" value="" />
		 	<button class="btn btn-primary news-btn"  id="assign"><i class="fa fa-envelope"></i>Send Newsletter
            </button>
		 </form>
		  </div>
		 </div>
        <table class="table" id="table_2" style="width: 100%;">
        <thead class="back_blue">
            <tr>
            <td style="white-space: nowrap;"> Select </td>

              <th>Sr#</th>
              <th scope="col">Email</th>
              <th>Source</th>
        	  <th>Ip-Address</th>
        	  <th>Country</th>
              <th scope="col">Subscribe At</th>
              <th>Last Email Sent</th>
        
            </tr>
        </thead>
        <tbody id="table_2_tbody">
           
      	<?php
    		$total_subscribers = count($subscribers);
    		foreach ($subscribers as $key =>  $subscribers): ?>
        <tr>
    
    	  <td>
    
    		<input type="checkbox" value="{{ $subscribers->id}}" email="{{$subscribers->email}}" class="assign-emails" id="email-{{ $subscribers->id}}" id="select_all" />
      	  </td>
            <td>{{ $key + 1 }}</td>
            <td style="text-transform: lowercase;">{{ $subscribers->email }}</td>
            <td>{{$subscribers->source}}</td>
    		<td>{{$subscribers->ip_address}}</td>
    		<td>{{$subscribers->country}}</td>
            <td>{{$subscribers->create_at}}</td>
            <?php 
                $date1 = date('Y-m-d', strtotime($subscribers->last_email_sent_date));
                $date2 = date('Y-m-d');
                $diff = abs(strtotime($date2) - strtotime($date1));
                $years = floor($diff / (365*60*60*24));
                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                $last_email_sent_days_ago = floor(($diff - $years * 365*60*60*24 - $months *30*60*60*24)/ (60*60*24));
            ?> 
            <td>{{$last_email_sent_days_ago}}</td>
    
        </tr>
    
    	<?php endforeach; ?>
    
      </tbody>

</table>

    </div>
    </div>
    <div id="menu2" class="tab-pane fade">
      <div class="table-responsive">
				<table class="table" id="table_3">
					<thead class="back_blue">
						<tr>
							<th>Email</th>
							<th>Source</th>
							<th>Ip-Address</th>
							<th>Country</th>
							<th>Subscribe At</th>
						</tr>
					</thead>
					<tbody>
						@foreach($unsub as $row)
						<tr>
							<td>{{$row->email}}</td>
							<td>{{$row->source}}</td>
							<td>{{$row->ip_address}}</td>
							<td>{{$row->country}}</td>
							<td>{{$row->create_at}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
    </div>
  </div>
      
    </div>
  </div>
</div>
<script type="text/javascript">
var email_list = [];
$('#select_all').change(function() {
    var checked;

    if ($(this).prop('checked') === true) {
        email_list = [];
        $('.assign-emails').each(function(){
			var email = $(this).attr('value');
			email_list.push(email);
        });
        checked = true;
    }
    else {
        checked    = false;
        email_list = [];
    }
    console.log(email_list);

    $('input[type="checkbox"]').prop('checked', checked);	
	$('input[name="email_id_list"]').val(email_list.join(", "));		
});

var limit = 5;
$('input.assign-emails').on('change', function(evt) {
   if($("input[class='assign-emails']:checked").length > limit) {
    alert("You can select only 5 email")
       this.checked = false;
   }
});

$('.assign-emails').change(function(){
	var id              = $(this).val();
	var is_checked      = $(this).prop('checked');
	var num_subscribers = <?php echo $total_subscribers; ?>;

	var index      = email_list.indexOf(id);	
	
	if (is_checked) {
		if (index < 0) {
			email_list.push(id);
			if (email_list.length == num_subscribers) {
				$('#select_all').prop('checked', true);	
			}
		}
	}
	else {
		if (index > -1) {
			email_list.splice(index,1);
		}
		$('#select_all').prop('checked', false);
	}
	
	console.log(email_list);
	
	$('input[name="email_id_list"]').val(email_list.join(", "));	
});




</script>
<!-- <script type="text/javascript">
$("selectAll").click(function(){
        $("input[type=checkbox]").prop('checked', $(this).prop('checked'));
    
});


jackHarnerSig();

</script> -->
<script>
    $( "body" ).on( "click", "#change_status", function () {
		var id = parseInt( $( this ).attr( "data-id" ) );
		var status = parseInt( $( this ).attr( "data-status" ) );
		if ( status == 0 || status== 2 ) {
			var s = 1
		} else if ( status == 1 ) {
			s = 0
		}
		var form_data = {
			id: id,
			status: s
		};
		swal( {
				title: "@lang('users.change_status')",
				text: "@lang('users.change_status_msg')",
				type: 'info',
				showCancelButton: true,
				confirmButtonColor: '#F79426',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes',
				showLoaderOnConfirm: true
			},
			function () {
				$.ajax( {
					type: 'POST',
					headers: {
						'X-CSRF-TOKEN': $( 'meta[name="csrf-token"]' ).attr( 'content' )
					},
					url: '<?php echo url("subs/change_status"); ?>',
					data: form_data,
					success: function ( msg ) {
						swal( "@lang('users.success_change')", '', 'success' )
						setTimeout( function () {
							location.reload();
						}, 2000 );
					}
				} );
			} );


	} );
</script>
<script>
        $('#table_1').DataTable({
            dom: 'Bfrtip',
            "pageLength": 15,
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
        // $('#table_2').DataTable({
        //     dom: 'Bfrtip',
        //     "pageLength": 15,
        //     buttons: [
        //         'copyHtml5',
        //         'excelHtml5',
        //         'csvHtml5',
        //         'pdfHtml5'
        //     ]
        // });
        $('#table_3').DataTable({
            dom: 'Bfrtip',
            "pageLength": 15,
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ]
        });
</script> 
<script>
    function email_sent_days_ago_button() {
        var key = 'email_sent_days_ago';
        var value = $("#email_sent_days_ago").val();
        $.get("{{url('/get_subscribers_list/')}}"+"/"+key+"/"+value, function(data){
            populate_table(data);
        });
    }
    function country_button() {
        var key = 'country';
        var value = $("#country").val();
        $.get("{{url('/get_subscribers_list/')}}"+"/"+key+"/"+value, function(data){
            populate_table(data);
        });
    }
    function source_button() {
        var key = 'source';
        var value = $("#source").val();
        $.get("{{url('/get_subscribers_list/')}}"+"/"+key+"/"+value, function(data){
            populate_table(data);
        });
    }
    function no_of_emails_button() {
        var key = 'no_of_emails';
        var value = $("#no_of_emails").val();
        $.get("{{url('/get_subscribers_list/')}}"+"/"+key+"/"+value, function(data){
            populate_table(data);
        });
    }
    
    function call_query() {
        var key = 'all';
        var value = $("#no_of_emails").val() + "," + $("#source").val() + "," + $("#country").val() + "," + $("#email_sent_days_ago").val() + "," + $("#email").val();
        $.get("{{url('/get_subscribers_list/')}}"+"/"+key+"/"+value, function(data){
            populate_table(data);
        });
    }
    
    function populate_table(data){
        if(data.status == 'error'){
            $("#imported").html(data.imported);
            $("#prizemaker").html(data.prizemaker);
            $("#zombie_game").html(data.zombie_game);
            alert(data.message);
            return true;
        }
        if(data.status == 'success'){
            $("#imported").html(data.imported);
            $("#prizemaker").html(data.prizemaker);
            $("#zombie_game").html(data.zombie_game);
            
            var subscribers = data.data;
            $("#table_2_tbody").empty();
            $(subscribers).each(function( key, value ) {
                var date1 = new Date(value.last_email_sent_date); 
                var date2 = new Date(); 
                dt1 = new Date(date1);
                dt2 = new Date(date2);
                Difference_In_Days =  Math.floor((Date.UTC(dt2.getFullYear(), dt2.getMonth(), dt2.getDate()) - Date.UTC(dt1.getFullYear(), dt1.getMonth(), dt1.getDate()) ) /(1000 * 60 * 60 * 24));
                var key = key + 1;
                $("#table_2_tbody").append(
                    `<tr>
                	    <td><input type="checkbox" value="`+value.id+`" email="`+value.email+`" class="assign-emails" id="email-`+value.id+`" id="select_all" /></td>
                        <td>`+key+`</td>
                        <td style="text-transform: lowercase;">`+value.email+`</td>
                        <td>`+value.source+`</td>
                		<td>`+value.ip_address+`</td>
                		<td>`+value.country+`</td>
                        <td>`+value.create_at+`</td>
                        <td>`+Difference_In_Days+`</td>
                    </tr>`
                );
            });
            
            
            var email_list = [];
$('#select_all').change(function() {
    var checked;

    if ($(this).prop('checked') === true) {
        email_list = [];
        $('.assign-emails').each(function(){
			var email = $(this).attr('value');
			email_list.push(email);
        });
        checked = true;
    }
    else {
        checked    = false;
        email_list = [];
    }
    console.log(email_list);

    $('input[type="checkbox"]').prop('checked', checked);	
	$('input[name="email_id_list"]').val(email_list.join(", "));		
});

$('.assign-emails').change(function(){
	var id              = $(this).val();
	var is_checked      = $(this).prop('checked');
	var num_subscribers = <?php echo $total_subscribers; ?>;

	var index      = email_list.indexOf(id);	
	
	if (is_checked) {
		if (index < 0) {
			email_list.push(id);
			if (email_list.length == num_subscribers) {
				$('#select_all').prop('checked', true);	
			}
		}
	}
	else {
		if (index > -1) {
			email_list.splice(index,1);
		}
		$('#select_all').prop('checked', false);
	}
	
	console.log(email_list);
	
	$('input[name="email_id_list"]').val(email_list.join(", "));	
});
        }
    }
</script>  
@endsection
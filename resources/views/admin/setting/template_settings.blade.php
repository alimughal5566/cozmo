

@extends( 'admin.layouts.app' )
@section( 'content' )


<div class="app-title">

<ul class="app-breadcrumb breadcrumb">
<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i>
</li>
<li class="breadcrumb-item"><a href="{{url('/ShowTemplateSettings')}}">Template Settings</a>
</li>

</ul>

</div>

<div class="col-md-12">
<div class="tile">
<h3 class="tile-title">Template Settings</h3>
@if (session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger">
{{ session('error') }}
</div>
@endif
<div class="table-responsive">
<table class="table">
<thead class="back_blue">
<tr>
<th scope="col">Serial No.</th>
<th scope="col" >Name</th>
<th scope="col" >Edit</th>
<th scope="col" >Set Default</th>
</tr>
</thead>
<tbody>
<?php foreach ($template_list as $key => $template): ?>
<tr>
<td>{{ $key + 1 }}</td>
<td>{{ $template->name }}</td>
<td><button class="btn" onclick="edit_record('{{$template->id}}', '{{$template->newsletter_email_subject}}', '{{$template->newsletter_email_offer_description_admin}}', '{{$template->special_event}}')">Edit</button></td>
<td>
<?php
$button_text = 'Set Default';
$button_class = 'primary';
if ($template->default_email_template)
{
$button_text = 'Default';
$button_class = 'success';
}
?>
<button temp-id="{{$template->id}}" class="set-def <?php echo 'btn btn-'.$button_class; ?>">{{$button_text}}</button>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
<div class="modal" id="edit_modal">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">

<button type="button" class="close closemo" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<h3 class="modal-title" id="successHeadingDiv" style="color: Green;">Success</h3>
</div>
<div class="modal-body">
<form action="{{url('/edit_template_settings')}}" method="post">
@csrf
<input type="hidden" id="template_id" name="template_id" >
<label>Newsletter Email Subject</label>
<input type="text" id="newsletter_email_subject" class="form form-control" name="newsletter_email_subject" >
<label>Newsletter Email Offer Description Admin</label>
<input type="text" class="form form-control" id="newsletter_email_offer_description_admin" name="newsletter_email_offer_description_admin" >
<label>Special Event Active</label>
                    <input type="radio" id="yes" name="event" value="yes">
					<label for="yes">Yes</label>
					<input type="radio" id="no" name="event" value="no" checked>
					<label for="no">No</label><br>
<button class="btn" type="submit">Update</button>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger closemo" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$('.set-def').click(function(){
var clicked_btn = $(this);
var template_id = $(this).attr('temp-id');

$.ajax({
url: "<?php echo url('/UpdateTemplateSettings'); ?>",
method: "POST",
data:{'id':template_id, '_token': '{{csrf_token()}}'},
success: function (response) {

$(clicked_btn).addClass('btn-success');
$(clicked_btn).text('Default');

$('.set-def').each(function(index, btn){
if (template_id != $(btn).attr('temp-id')) {
$(btn).removeClass('btn-success');
$(btn).addClass('btn-primary');
$(btn).text('Set Default');
}
});

}
});

});



});
$('.closemo').click(function() {
$('#edit_modal').css('display', 'none');
});
</script>

<script type="text/javascript">
function edit_record(template_id, newsletter_email_subject, newsletter_email_offer_description_admin, special_event){
$("#edit_modal").show();
$("#template_id").val(template_id);
$("#newsletter_email_subject").val(newsletter_email_subject);
$("#newsletter_email_offer_description_admin").val(newsletter_email_offer_description_admin);
if(special_event=="yes")
	    {
	    	$('#yes').prop("checked", true);
	    }else{
	    	$('#no').prop("checked", true);
	    }
}
</script>


@endsection

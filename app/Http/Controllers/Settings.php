<?php
namespace App\Http\Controllers;
use App\Subscribers;
use App\EmailTemplate;
use App\Templates;
use App\Package;
use Illuminate\Http\Request;
use DB;
use Mail;

class Settings extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AdminAccess');

    }
	public function TemplateSettings ()
	{
		$template_list = Templates::where('status', 1)->get();

		return view('admin.setting.template_settings', compact('template_list'));
	}

	public function MakeDefaultTemplate (Request $request)
	{
		$template_id = $request->input('id');
		DB::table('email_templates')->update(['default_email_template' => 0]);
		DB::table('email_templates')->where('id', $template_id)->update(['default_email_template' => 1]);

	}
	public function edit_template_settings (Request $request)
	{
		// print_r($request->all());exit();
	    if($request->newsletter_email_subject == "" || $request->newsletter_email_offer_description_admin == ""){
            return redirect()->back()->with('error', 'Values cannot be empty .')->withInput();
        }
        
		DB::table('email_templates')->where('id', $request->template_id)->update(['newsletter_email_subject' => $request->newsletter_email_subject, 'newsletter_email_offer_description_admin' => $request->newsletter_email_offer_description_admin, 'special_event'=>$request->event]);
        return redirect()->back()->with('success', 'Successfully Updated.');
	}
}

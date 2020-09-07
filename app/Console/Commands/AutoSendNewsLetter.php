<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\CompetitionEmailSchedule;
use Illuminate\Support\Facades\Storage;
use App\Package;
use DB;
use Mail;

class AutoSendNewsLetter extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:competition_email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send competition email on scheduled time';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
		$product_id 					   = 1;
		$template_id 					   = 1;
		$email							   = 'd3gforms@gmail.com';
				
		$template_info                     = DB::table('email_templates')->where('id', '=', $template_id)->get()->first();
		$competition_info                  = Package::where('id', $product_id)->first();
		$num_of_req_imgs                   = $template_info->num_of_imgs;
		$package_images                    = Package::find($product_id)->image()->limit($num_of_req_imgs)->pluck('name');			
		$default_template_img              = $template_info->default_img;
		$social_links   				   = DB::table('setting')->first();

		// image path setting
		$template_view                     = $template_info->view_name;		
		$product_dir_path          		   = url('/').'/products/'.$product_id.'/';
		$template_img_path                 = url('/').'/email_templates_resources/'.$template_view.'/img/';
		$default_template_img_path         = $template_img_path.$default_template_img;
		// data for email
		$data['title']                     = "Newsletter FROM PRIZEMAKER";
		$data['template_view']             = $template_view;
		$data['package_images']            = $package_images;
		$data['num_of_req_imgs']           = $num_of_req_imgs;
		$data['competition_info']          = $competition_info;
		$data['default_template_img']      = $default_template_img;
		$data['default_template_img_path'] = $default_template_img_path;
		$data['product_dir_path']          = $product_dir_path;
		$data['template_info']             = $template_info;
		$data['template_img_path']         = $template_img_path;
		$data['social_links']			   = $social_links;

		Mail::send('email_templates.'.$template_view.'.index', $data, function($message) use($email) {
			$message->to($email, 'name')->subject('Join Our Competition');
		});
	
    }
}

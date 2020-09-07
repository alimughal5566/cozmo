<?php
namespace App\Http\Controllers;
use App\Subscribers;
use App\Templates;
use App\EmailTemplate;
use App\CompetitionEmailSchedule;
use App\Package;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\User;
use App\Blog;

class CronController extends Controller
{
	public function SendMail ()
	{
		$setting = DB::table('setting')->first();
		if($setting->subscriber_cron_job=="active")
		{
		date_default_timezone_set("Asia/Karachi");
        $today = date('Y-m-d');
		$email_schedules = DB::select("SELECT *,
                                                      competition_email_schedule.id as schedule_id,
                                                      packages.id as competition_id
                                               FROM   competition_email_schedule
                                               JOIN   packages
                                               ON     packages.id = competition_email_schedule.competition_id
                                               JOIN   multi_competition
                                               ON     packages.mc_id = multi_competition.id
                                               WHERE (date_format('".date('Y-m-d')."', '%Y %m %d') > date_format(last_sent, '%Y %m %d')
                                               OR     last_sent
                                               IS     NULL)
                                               AND    enabled = 1
                                               ");
		if (!empty($email_schedules))
		{
            $count = 0;
			$days = [1 => 'saturday',
					 2 => 'sunday',
					 3 => 'monday',
					 4 => 'tuesday',
					 5 => 'wednesday',
					 6 => 'thursday',
					 7 => 'friday'];

			$run_asset_queries = true;
			$send_email        = false;


			foreach ($email_schedules as $key => $schedule)
			{
			    if($schedule->end_date <= $today){
			        continue;
                }
                $this->UpdateLastSentDate($schedule->schedule_id, $schedule->competition_id, date('Y-m-d H:i:s'));
				if ((strtotime(date('H:i')) >= strtotime(date('H:i', strtotime($schedule->time)))))
				{
					// if there is need to run asset queries, do this for single time only
					// and disable run flag
					if ($run_asset_queries === true)
					{
//			            $subscribers_list     = Subscribers::where('status', '1')->pluck('email', 'id');
			            // $subscribers_list     = Subscribers::where('status', '1')->where('email', 'stepinnsolution@gmail.com')->pluck('email', 'id');

			            $subscribers_list = array('stepinnsolution@gmail.com','muhammad.wakeel1989@gmail.com','demobeefree@gmail.com', 'waynepennysgroup@gmail.com');

						$template_id          = Templates::where('default_email_template', '1')->pluck('id')->first();

						$template_info        = DB::table('email_templates')->where('id', '=', $template_id)->get()->first();

						$num_of_req_imgs      = $template_info->num_of_imgs;

						$default_template_img = $template_info->default_img;

						$social_links		  = DB::table('setting')->first();

						$run_asset_queries	  = false;
					}

					switch ($schedule->interval_type)
					{
						case 1:	// once only
							if ((empty($schedule->last_sent)))
							{
								$send_email = true;
							}
							break;
						case 2:// daily
							$send_email = true;
							break;
						case 3:// weekly
							if (($days[$schedule->day] == strtolower(date('l'))))
							{
								$send_email = true;
							}
							break;
						case 4:// send before competition
							if (date('Y-m-d') == date('Y-m-d', strtotime($schedule->time)))
							{
								$send_email = true;
							}
					}

					if ($send_email !== false)
					{
					    if($template_info->view_name == 'template_1'){
                            $product_id                        = $schedule->competition_id;	// competition id in new term
                            $template_view                     = $template_info->view_name;
                            $product_dir_path          		   = url('/').'/products/'.$product_id.'/';
                            $template_img_path                 = url('/').'/email_templates_resources/'.$template_view.'/img/';
                            $default_template_img_path         = $template_img_path.$default_template_img;

                            $competition_info                  = Package::where('id', $product_id)->first();
                            $package_images                    = Package::find($product_id)->image()->limit($num_of_req_imgs)->pluck('name');

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
                        }
                        if($template_info->view_name == 'template_3'){
                            $template_data= DB::table('send_temp_save')->first();

                            $competition = DB::table('packages')->where('id',$template_data->select_competition)->first();
							$urlcategory = DB::table('urls_categories')->where('id',$competition->url_category)->first();
					        $img = DB::table('package_images')->where('package_id',$competition->id)->where('main_img',1)->first();
					        $template_view                     = $template_info->view_name;
					        $data['template_view']             = $template_info->view_name;
					        $slide = Blog::find($template_data->blog_id);
					        $template_info = DB::table('email_templates')->where('id', '=',3)->first();
                            $data = array(
                            	'template_info'=>$template_info,
                            	'slide'=>$slide,
                            	'top_desc'=>$template_data->top_description,
                            	'competition'=>$competition,
                            	'urlcategory'=>$urlcategory,
                            	'img'=>$img,
                            	'top_trend_title'=>$template_data->top_trend_title,
                            	'top_trend_description'=>$template_data->top_trend_description,
                            	'trend_competition'=>explode(",",$template_data->trend_competition),
                            	'top_restuarent_title'=>$template_data->top_restuarent_title,
                            	'top_restuarent_description'=>$template_data->top_restuarent_description,
                            	'restuarent_competition'=>explode(",",$template_data->restuarent_competition),
                            	'bike_competition_title'=>$template_data->bike_competition_title,
                            	'bike_competition_description'=>$template_data->bike_competition_description,
                            	'bike_competition'=>explode(",",$template_data->bike_competition),
                            );
                        }


						foreach ($subscribers_list as $subscriber_id => $email)
						{
							$user = User::where('email',$email)->first();

					            if(isset($user) && $user->name!="")
					            {
					                $userss = $user->name;
					            }elseif(isset($user) && $user->name==""){
					                $userss = $user->email;
					            }else{
					                $userss = $email;
					            }
					            $data['user'] = $userss;
					            if($template_info->special_event=='yes')
							            {
							            $subj = $template_info->newsletter_email_subject;
							            }else{
							            $subj = 'Join Our Competition';
							            }

                            $setting = DB::table('setting')->first();
						    $data['subscriber_id'] = $subscriber_id;
						    $data['setting'] = $setting;
                            Mail::send(['html'=>'email_templates.'.$template_view.'.index'], $data, function($message) use($email,$subj) {
                                $message->to($email, 'Prize Maker')->subject
                                ($subj);
                                $setting = DB::table('setting')->first();
                                $message->from($setting->email,'Prize Maker');
                            });
                            Subscribers::where('email', $email)->update(['last_email_sent_date' => date('Y-m-d H:i:s')]);
						    $count++;
						}
					}
				}
			}
			echo "Success, $count Email's Sent.";
		}else{
            echo "No Record Found.";
        }
    }
	}

	private function UpdateLastSentDate($schedule_id, $competition_id, $date_time)
	{
		DB::table('competition_email_schedule')
		  ->where(['id'             => $schedule_id,
				   'competition_id' => $competition_id])
		  ->update(['last_sent'     => $date_time]);
	}
}

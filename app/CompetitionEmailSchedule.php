<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class CompetitionEmailSchedule extends Model
{
	protected $table ='competition_email_schedule';
    public $timestamps = false;
	
	public $schedule_types = ['once' => 1, 'daily' => 2, 'weekly' => 3, 'bf-cmpt' => 4];
	
	public function CreateCompetitionSchedule ($request_input = [], $competition_id)
	{			
		foreach (['email-time', 'email-interval'] as $input)
		{
			if (!(isset($request_input[$input]) && !empty($request_input[$input])))
			{
				return false;
			}
		}
				
		//$this->time          = $request_input['email-time'];
		$this->interval_type  = $this->schedule_types[$request_input['email-interval']];
		$this->day            = $request_input['day-lst'];
		$this->competition_id = $competition_id;
		
		if (isset($request_input['reminder-date']))
		{
			$this->time           = $request_input['reminder-date'].' '.date('H:i:s', strtotime($request_input['email-time']));	
		}
		else
		{
			$this->time           = date('Y-m-d').' '.date('H:i:s', strtotime($request_input['email-time']));				
		}

		
		$this->save();
	}
	
	public function UpdateCompetitionSchedule ($request_input = [], $competition_id)
	{
		if (DB::table('competition_email_schedule')->where('competition_id', $competition_id)->exists())
		{	
			$data = array();
			if (isset($request_input['email-interval']) && !empty($request_input['email-interval']))
			{
				$this->interval_type  = $this->schedule_types[$request_input['email-interval']];		
			}
			
			if (isset($request_input['day-lst']))
			{
				$data['day']  = $request_input['day-lst'];
			}	

			if (isset($request_input['email-interval']))
			{
				$data['interval_type'] = $this->schedule_types[$request_input['email-interval']];			
			}
			
			if (!isset($request_input['enable-email']) || (isset($request_input['enable-email']) && $request_input['enable-email'] == 'off'))
			{
				$data['enabled'] = 0;
			}
			
			if (isset($request_input['reminder-date']) && isset($request_input['email-time']))
			{
				//$this->time           = $request_input['reminder-date'].' '.date('H:i:s', strtotime($request_input['email-time']));	
				$data['time'] = $request_input['reminder-date'].' '.date('H:i:s', strtotime($request_input['email-time']));
			}
			else
			{
				$data['time'] =  date('Y-m-d').' '.date('H:i:s', strtotime($this->time));	
			}

			if (!empty($data))
			{
						DB::table('competition_email_schedule')->where('competition_id', $competition_id)
					->update($data);
			}
		}
		else
		{
			$this->CreateCompetitionSchedule($request_input, $competition_id);			
		}
		
	}
	
}

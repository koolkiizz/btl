<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends Seven_Controller 
{
	public function index()
	{
		$this->load->model('M_Config');
		if(strtotime($this->M_Config->get_time_start()) < strtotime('now')) {
			$this->header('Trang chủ', array('animate.css', 'media-queries.css'), array('jquery.backstretch.min.js', 'jquery.countdown.min.js', 'wow.min.js', 'scripts.js'));
			$remain_time = strtotime('now') - strtotime($this->M_Config->get_time_start());
			$data['remain_time'] = $remain_time;
			$this->load->view('home/body', $data);
			$this->footer();
		}
		else {
			//start
		}
	}
}
<?php
class Seven_Controller extends CI_Controller
{
	protected $data;
	public function __construct()
	{
		parent::__construct();
		$this->data['base_url'] = base_url();
	}


	public function appendStylesheet($file)
	{
		echo '<link rel="stylesheet" type="text/css" href="'.$file.'">';
	}

	public function appendFile($file)
	{
		echo '<script type="text/javascript" src="'.$file.'">';
	}

	public function header($page_title = '', $custom_css = '', $custom_js = '') {

		$headers = [
					'page_title' => $page_title,
					'custom_css' => $custom_css,
					'custom_js' => $custom_js
					];
		$this->data['headers'] = $headers;
		//$this->load->view('welcome_message');
		$this->load->view('defaultLayout/header', $this->data);
	}
	public function footer()
	{
		$this->load->view('defaultLayout/footer');
	}
}
<?php
class Review extends Seven_Controller
{
	public function index()
	{
		$this->load->model('M_Excercises');
		$data['excercises'] = $this->M_Excercises->getAll();
		$this->header('Danh sách đề tài', array('animate.css', 'review.css'),array('wow.min.js', 'review.js'));
		$this->load->view('review/body', $data);
		$this->footer();
	}
}
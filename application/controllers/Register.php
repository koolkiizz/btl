<?php
class Register extends Seven_Controller
{
	public function index()
	{
		$this->load->model('M_config');
		if(strtotime($this->M_config->get_time_start()) < strtotime("now"))
		{
			redirect(base_url());
		}
		$this->load->model("M_students");
		$this->load->model("M_excercises");
		$this->load->model("M_groups");
		if(isset($_POST['register'])) 
		{
			$group_name = $this->input->post('group-name');
			$group_description = $this->input->post('group-description');
			$group_members = $this->input->post('group-members');
			$group_excercise = $this->input->post('group-excercise');
			try{
				//group name check exist
				if($group_name != '') {
					if($this->M_groups->checkExist($group_name))
					{
						throw new Exception("Tên nhóm đã bị lấy!");
					}
				}
				//xss alert
				if($group_name != '') {
					if(strpos($group_name, 'removed')) {
						throw new Exception("Xin lỗi, nhưng không có chỗ cho XSS ở đây!");
					}
				}
				if($group_description != '') {
					if(strpos($group_description, 'removed')) {
						throw new Exception("Xin lỗi, nhưng không có chỗ cho XSS ở đây!");
					}
				}
				//check member
				if(count($group_members) > 5 || count($group_members) < 3) {
					throw new Exception("Một nhóm có ít nhất 3 người và nhiều nhất 5 người!");
					
				}
				foreach($group_members as $member) {
					if(!$this->M_students->checkGroup($member))
					{
						throw new Exception("Hoa đã có chủ rồi, còn cố đập chậu cướp hoa làm gì?");
					}
				}
				//check excercise
				if($group_excercise == '') {
					throw new Exception("WTF? Không chọn đề tài thì làm cái gì?");
				}
				if(!$this->M_excercises->checkSelected($group_excercise)) {
					throw new Exception("Bạn đã quá trễ và không thể \"tha thu\"!");
				}
				//everything is OK
				//add group
				$group_id = $this->M_groups->addGroup($group_name, $group_description, $group_excercise);
				//set group for student
				$this->M_students->setGroup($group_members, $group_id);
				$data['success'] = "Chúc mừng bạn đã đăng ký thành công!";
			}
			catch(Exception $ex) {
				$data['message'] = $ex->getMessage();
			}
		}
		$this->header('Đăng ký bài tập lớn', array('register.css','select2.min.css', 'animate.css'),array('select2.full.min.js', 'wow.min.js'));
		$data['students'] = $this->M_students->getStudentNoGroup();
		$data['excercises'] = $this->M_excercises->getExcerciseWasNotSelected();

		$this->load->view('register/body', $data);
		$this->footer();
	}
}
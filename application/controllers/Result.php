<?php
class Result extends Seven_Controller
{
    public function index()
    {
        $this->load->model("M_Config");
        if(strtotime($this->M_Config->get_time_start()) > strtotime("now"))
        {
            redirect(base_url());
        }
        $this->load->model("M_Students");
        $this->load->model("M_Groups");
        $this->load->model("M_Excercises");
        $datas = array();
        $groups = $this->M_Groups->getAll();
        $i = 0;
        foreach($groups as $group)
        {
            $datas[$i] = array('gr_name' => $group->name, 'gr_des' => $group->description);
            $excercise = $this->M_Excercises->get_specific($group->id_excercise);
            $datas[$i]['excercise'] = $excercise->name;
            $members = $this->M_Groups->get_member($group->id);
            $datas[$i]['members'] = $members;
            $datas[$i]['registed'] = $group->time_created;
            $i++;
        }
        $data['datas'] = $datas;
        $this->header('Danh sách đề tài', array('animate.css', 'result.css'),array('wow.min.js'));
        $this->load->view('result/body', $data);
        $this->footer();
    }
}
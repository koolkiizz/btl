<?php
class M_Students extends CI_Model
{
	public function getAll()
	{
		$query = $this->db->get('students');
		return $query->result();
	}

	public function getStudentNoGroup()
	{
		$this->db->where('group_id', null);
		$query = $this->db->get('students');
		return $query->result();
	}
	public function checkGroup($id)
	{
		$this->db->where('id', $id);
		if($this->db->get('students')->row()->group_id != null) {
			return false;
		}
		return true;
	}
	public function setGroup($student, $group)
	{
		$this->db->where_in('id', $student);
		$update = array('group_id'=>$group);
		$this->db->update('students', $update);
	}
}
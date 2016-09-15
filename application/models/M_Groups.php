<?php
class M_Groups extends CI_Model
{
	public function getAll()
	{
		$query = $this->db->get('groups');
		return $query->result();
	}

	public function checkExist($name)
	{
		$this->db->where('name', $name);
		if($this->db->count_all_results('groups') > 0)
		{
			return true;
		}
		return false;
	}
	public function addGroup($group_name, $group_description, $excercise)
	{
		$insert = array('name'=>$group_name, 'description'=>$group_description, 'id_excercise'=>$excercise);
		$this->db->insert('groups', $insert);
		return $this->db->insert_id();
	}

	public function get_member($gr_id)
	{
		$this->db->where('group_id', $gr_id);
		$query = $this->db->get('students');
		return $query->result();
	}
}
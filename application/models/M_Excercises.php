<?php
class M_Excercises extends CI_Model
{
	public function getAll()
	{
		$query = $this->db->get('excercises');
		return $query->result();
	}

	public function get_specific($id_excercise)
	{
		$this->db->where('id', $id_excercise);
		$query = $this->db->get('excercises');
		return $query->row();
	}

	public function getExcerciseWasNotSelected()
	{
		$this->db->select('ex.id, ex.name');
		$this->db->from('excercises as ex');
		$this->db->join('groups as gr', 'ex.id = gr.id_excercise', 'left');
		$this->db->where('gr.id', null);
		$query = $this->db->get();
		return $query->result();
	}
	public function checkSelected($id) 
	{
		$this->db->select('gr.id');
		$this->db->from('excercises as ex');
		$this->db->join('groups as gr', 'ex.id = gr.id_excercise', 'left');
		$this->db->where('ex.id', $id);
		if($this->db->get()->row()->id != null) {
			return false;
		}
		return true;
	}
}
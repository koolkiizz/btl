<?php
class M_Config extends CI_Model
{
	public function get_time_start()
	{
		$this->db->where('info', 'start_time');
		$query = $this->db->get('config');
		return $query->row()->value;
	}
}
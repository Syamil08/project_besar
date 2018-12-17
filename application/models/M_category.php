<?php


class M_Category extends CI_Model
{
	
	public function get_all()
	{
		return $this->db->get('category')
						->result();
	}
}

?>
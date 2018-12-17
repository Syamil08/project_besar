<?php


class M_donate extends CI_Model
{
	
	public function get_all($id_disaster)
	{
		return $this->db->select('donate.*,s.name n, disaster.title title')
						->from('donate')
						->join('disaster','disaster.id = donate.disaster_id')
						->join('user s','s.id = donate.user_id')
						->where('donate.disaster_id',$id_disaster)
						->get()
						->result();
	}

	public function insert($data)
	{
		return $this->db->insert('donate',$data);
	}

	public function get($id)
	{
		return $this->db->where('id',$id)
						->get('donate')
						->row();
	}

	public function get_all_user($id_user,$status)
	{
		return $this->db->select('donate.*,s.name n, disaster.title title')
						->from('donate')
						->join('disaster','disaster.id = donate.disaster_id')
						->join('user s','s.id = donate.user_id')
						->where('donate.user_id',$id_user)
						->where('donate.status',$status)
						->get()
						->result();
	}

	public function update($data, $id)
	{
		return $this->db->where('id', $id)
						->update('donate', $data);
	}
}


?>
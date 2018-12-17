<?php

class M_user extends CI_Model
{
	
	public function get_all()
	{
		return $this->db->get('user')
						->result();
	}

	public function get_petugas()
	{
		return $this->db->where('role','petugas')
						->get('user')
						->result();
	}

	public function get_donatur()
	{
		return $this->db->where('role','donatur')
						->get('user')
						->result();
	}

	public function get_column_petugas()
	{
		return $this->db->where('role','petugas')
						->select('id,username')
						->get('user')
						->result();
						
	}

	public function insert($data)
	{
		return $this->db->insert('user',$data);
	}

	public function login($username,$password)
	{
		return $this->db->where('username',$username)
						->where('password',$password)
						->where('status','active')
						->get('user')
						->row();
	}

	public function get($id)
	{
		return $this->db->where('id',$id)
						->get('user')
						->row();
	}

	public function update($data,$id)
	{
		return $this->db->where('id',$id)
						->update('user',$data);
	}

	public function delete($id)
	{
		return $this->db->where('id',$id)
						->delete('user');
	}

	public function search($key)
	{
		return $this->db->like('name',$key)
						->get('user')
						->result();
	}

}

?>
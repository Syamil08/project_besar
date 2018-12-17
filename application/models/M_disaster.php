<?php 


class M_disaster extends CI_Model
{
	
	public function get_all()
	{
		return $this->db->select('disaster.*,category.name n, s.name nn')
						->from('disaster')
						->join('category','disaster.category_id = category.id')
						->join('user s','s.id = disaster.user_id')
						->get()
						->result();
	}

	public function insert($data)
	{
		return $this->db->insert('disaster',$data);
	}

	public function get($id)
	{
		return $this->db->where('id',$id)
						->get('disaster')
						->row();
	}

	public function update($data,$id)
	{
		return $this->db->where('id',$id)
						->update('disaster',$data);
	}

	public function delete($id)
	{
		return $this->db->where('id',$id)
						->delete('disaster');
	}

	public function search($key)
	{
		return $this->db->select('disaster.*,category.name n, s.name nn')
						->from('disaster')
						->join('category','disaster.category_id = category.id')
						->join('user s','s.id = disaster.user_id')
						->like('title',$key)
						->get()
						->result();
	}

	public function data($number,$offset)
	{
		return $this->db->select('disaster.*,category.name n, s.name nn')
						->from('disaster')
						->join('category','disaster.category_id = category.id')
						->join('user s','s.id = disaster.user_id')
						->limit($number,$offset)
						->get()
						->result();
	}

	public function jumlah_data()
	{
		return $this->db->get('disaster')
						->num_rows();
	}
}

?>
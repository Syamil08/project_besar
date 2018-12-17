<?php


class Donasi extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_donate');
		$this->load->model('m_disaster');
	}

	public function doDonasi($id)
	{
		if (!userdata()) {
			redirect('user/verify');
		}

		$data['detail'] = $this->m_disaster->get($id);

		$this->load->view('donasi/formDonasi',$data);
	}

	public function save()
	{
		$id_disaster	= $this->input->post('id_disaster');
		$nama_barang 	= $this->input->post('name');
		$jumlah 		= $this->input->post('qty');
		$tanggal 		= $this->input->post('date');
		$lokasi 		= $this->input->post('address');
		$status			= 'schedule';
		
		$data 			= [
						'name'		=> $nama_barang,
						'qty'	=> $jumlah,
						'address'	=> $lokasi,
						'status' 	=> $status,
						'disaster_id' => $id_disaster,
						'user_id' 	=> userdata()->id
		];

		$save 			= $this->m_donate->insert($data);

		if($save){
			$this->session->set_flashdata('msg_success','Terima kasih atas donasi anda');
			redirect('disaster/detail/'.$id_disaster);
		}
		else{
			$this->session->set_flashdata('msg_error','Maaf data tidak tersimpan');
		}
	}

}


?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller
{
	
	public function index()
	{
		$login = $this->session->userdata('logged_in');

		if($login){
			if($login->role == 'petugas'){
				redirect('petugas/index');
			}
			elseif($login->role == 'admin'){
				redirect('admin/index');	
			}
			elseif($login->role == 'donatur'){
				redirect('donatur/index');
			}
		}

		$this->load->model('m_user');

		$user 				= $this->m_user->get_all();

		$data['user']		= $user;

		$this->load->view('user/login',$data);
	}

	public function add()
	{
		$this->load->model('m_user');

		$user 				= $this->m_user->get_all();

		$data['user'] 		= $user;

		$this->load->view('user/register',$data);
	}

	public function save()
	{
		$this->load->model('m_user');

		$firstname		= $this->input->post('firstname');
		$lastname 		= $this->input->post('lastname');
		$username	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$phone 		= $this->input->post('phone');
		$addres 	= $this->input->post('addres');
		$role 		= 'donatur';
		$status 	= 'inactive';

		$data 		= [
					'name'		=> $firstname." ".$lastname,
					'username'	=> $username,
					'password'	=> md5($password),
					'role' 		=> $role,
					'status' 	=> $status,
					'phone'		=> $phone,
					'address'	=> $addres
		];

		$save		= $this->m_user->insert($data);

		if($save){
			$this->session->set_flashdata('msg_success','Selamat Anda Berhasil Terdaftar, Silahkan Tunggu Verifikasi dari Petugas');
		}
		else{
			$this->session->set_flashdata('msg_error','Maaf Aku Anda Tidak Bisa Terdaftar, Silahkan Coba Lagi');
		}

		redirect('user');
	}

	public function verify()
	{
		$this->load->model('m_user');

		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');

		$login 			= $this->m_user->login($username,md5($password));

		if($login)
		{
			$this->session->set_userdata('logged_in',$login);

			if($login->role == 'donatur'){
				redirect('disaster');
			}
			elseif($login->role == 'admin'){
				redirect('admin/tampil_petugas');
			}
			elseif($login->role == 'petugas'){
				redirect('petugas/index');
			}
		}
		else
		{
			$this->session->set_flashdata('msg_error','Masukkan Username dan Password yang sesuai');
			redirect('user');
		}	
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');

		redirect('disaster');
	}
}

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
    public function __construct()
	{
		parent::__construct();
        $this->load->model('user_model');

	}
	// page register
	public function index()
	{
		$this->load->view('register/index', 'refresh');
	}

    public function regis($user_id='')
    {
        $inp = $this->input;
        $username = $inp->post('username');
        if(strlen($username) >= 5 && strlen($username) <=15){
            $data = array(  'id_user'		=> $inp->post('id_user'),
            'nama_user'		=> $inp->post('nama_user'),
            'email'			=> $inp->post('email'),
            'username'      => $inp->post('username'),
            'password'		=> SHA1($inp->post('password'))
        );
        // Proses oleh model
        $this->user_model->tambah($data);
        //notifikasi dan redirect
        $this->session->set_flashdata('add', 'Data telah ditambah');
        redirect(site_url('login'), 'refresh');
            
        }else{
            $this->session->set_Flashdata('failed', 'Username harus 5-32 karakter');
            $this->load->view('register/index', 'refresh');
        }
    }

}

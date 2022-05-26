<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login SPK RESTO KUPANG';
            $this->load->view('Auth/login',$data);
        }
        else{
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $admin = $this->db->get_where('admin',['username'=> $username])->row_array();
        if ($admin) {
            if ($admin['password'] == md5($password)) {
                $data=[
                    'login_status' => true,
                    'id_admin' => $admin['id_admin'],
                    'nama_admin' => $admin['nama'],
                    'username' => $admin['username'],
                ];
                $this->session->set_userdata($data);
                redirect('Admin');
            }
            else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah</div>');
                redirect('Auth');
            }
        }
        else{
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Username Salah</div>');
            redirect('Auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('login_status');
        $this->session->unset_userdata('id_admin');
        $this->session->unset_userdata('nama_admin');
        redirect('');
    }
}
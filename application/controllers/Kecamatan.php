<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata['login_status'] == false) {
            redirect('Auth/logout');
        }
    }

    public function index()
    {
        $data['admin'] = $this->gereja_model->getAdmin();
        $data['title'] = 'Kecamatan';
        $data['page_title'] = 'Kecamatan';
        $data['sidebar'] = 'Kecamatan';
        $data['allkecamatan'] = $this->gereja_model->getKecamatan();
        $this->load->view('Template/header', $data);
        $this->load->view('Admin/kecamatan', $data);
        $this->load->view('Template/footer', $data);
    }

    public function simpan()
    {
        if ($this->kecamatan_model->simpan($this->input->post())) {
            $this->session->set_flashdata('sukses', 'Berhasil '.(empty($this->input->post('edit')) ? 'Ditambahkan' : 'Diubah'));
        } else {
            $this->session->set_flashdata('error', 'Gagal '.(empty($this->input->post('edit')) ? 'Ditambahkan' : 'Diubah').''.$this->session->flashdata('model'));
        }
        redirect('kecamatan');
    }

    public function hapus()
    {
        if ($this->kecamatan_model->hapus($this->input->post('id_kecamatan'))) {
            $this->session->set_flashdata('sukses', 'Kecamatan '.$this->input->post('kecamatan').' berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Kecamatan '.$this->input->post('kecamatan').' gagal dihapus'.$this->session->flashdata('model'));
        }
        redirect('kecamatan');
    }
}

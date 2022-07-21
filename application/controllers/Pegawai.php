<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Pegawai";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = $this->Pegawai_model->get();
        $this->load->view("layout/header");
        $this->load->view("pegawai/vw_pegawai", $data);
        $this->load->view("layout/footer");
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Pegawai";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("pegawai/vw_tambah_pegawai", $data);
        $this->load->view("layout/footer");
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Pegawai";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pegawai'] = $this->Pegawai_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("pegawai/vw_ubah_pegawai", $data);
        $this->load->view("layout/footer",$data);
    }

    public function update()
    {
        $data = [
            'nama_pegawai' => $this->input->post('nama_pegawai'),
            'alamat_pegawai' => $this->input->post('alamat_pegawai'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_hp' => $this->input->post('no_hp'),
            ];
            $id_pegawai = $this->input->post('id_pegawai');
            $this->Pegawai_model->update(['id_pegawai' => $id_pegawai], $data);
            redirect('Pegawai'); 
    }

    public function hapus($id)
    {
        $this->Pegawai_model->delete($id);
        redirect('Pegawai');
    }

    public function upload()
    {
        $data = [
            'nama_pegawai' => $this->input->post('nama_pegawai'),
            'alamat_pegawai' => $this->input->post('alamat_pegawai'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'no_hp' => $this->input->post('no_hp'),
            ];
            $this->Pegawai_model->insert($data);
            redirect('Pegawai');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Barang_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("barang/vw_barang", $data);
        $this->load->view("layout/footer", $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("barang/vw_tambah_barang", $data);
        $this->load->view("layout/footer",$data);
    }
    
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Barang";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Barang_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("barang/vw_ubah_barang", $data);
        $this->load->view("layout/footer",$data);
    }

    public function update()
    {
        $data = [
            'nama_barang' => $this->input->post('nama_barang'),
            'jenis_barang' => $this->input->post('jenis_barang'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            ];
            $id_barang = $this->input->post('id_barang');
            $this->Barang_model->update(['id_barang' => $id_barang], $data);
            redirect('Barang'); 
    }

    public function hapus($id)
    {
        $this->Barang_model->delete($id);
        redirect('Barang');
    }

    public function upload()
    {
        $data = [
            'nama_barang' => $this->input->post('nama_barang'),
            'jenis_barang' => $this->input->post('jenis_barang'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            ];
            $this->Barang_model->insert($data);
            redirect('Barang');
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaksi_model');
        $this->load->model('Supplier_model');
        $this->load->model('Barang_model');
        $this->load->model('Pegawai_model');
    }

    public function index()
    {
        $data['judul3'] = "Halaman Transaksi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->Transaksi_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("transaksi/vw_transaksi", $data);
        $this->load->view("layout/footer");
    }

    public function tambah()
    {
        $data['judul3'] = "Halaman Tambah Transaksi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['barang'] = $this->Barang_model->get();
        $data['supplier'] = $this->Supplier_model->get();
        $data['pegawai'] = $this->Pegawai_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("transaksi/vw_tambah_transaksi", $data);
        $this->load->view("layout/footer", $data);
    }

    public function edit($id)
    {
        $data['judul3'] = "Halaman Edit Transaksi";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->Transaksi_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("transaksi/vw_ubah_transaksi", $data);
        $this->load->view("layout/footer",$data);
    }

    public function update()
    {
        $data = [
            'barang' => $this->input->post('barang'),
            'supplier' => $this->input->post('supplier'),
            'barang_masuk' => $this->input->post('barang_masuk'),
            'barang_keluar' => $this->input->post('barang_keluar'),
            'total_harga' => $this->input->post('total_harga'),
            'pegawai' => $this->input->post('pegawai'),
            ];
            $id_transaksi = $this->input->post('id_transaksi');
            $this->Transaksi_model->update(['id_transaksi' => $id_transaksi], $data);
            redirect('Transaksi'); 
    }

    public function hapus($id)
    {
        $this->Transaksi_model->delete($id);
        redirect('Transaksi');
    }

    public function upload()
    {
        $data = [
            'barang' => $this->input->post('barang'),
            'supplier' => $this->input->post('supplier'),
            'barang_masuk' => $this->input->post('barang_masuk'),
            'barang_keluar' => $this->input->post('barang_keluar'),
            'total_harga' => $this->input->post('total_harga'),
            'pegawai' => $this->input->post('pegawai'),
            ];
            $this->Transaksi_model->insert($data);
            redirect('Transaksi');
    }
    
}
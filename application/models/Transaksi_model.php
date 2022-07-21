<?php
defined('BASEPATH') or exit('No direct script access
allowed');
class Transaksi_model extends CI_Model
{
    public $table = 'transaksi';
    public $id = 'transaksi.id_transaksi';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->select('t.*,b.nama_barang as barang');
        $this->db->from('transaksi t');
        $this->db->join('barang b', 't.barang = b.id_barang');
        $this->db->where('t.barang', $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
}
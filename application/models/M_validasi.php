<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_validasi extends CI_Model
{

    public $table = 'tb_makul';
    public $id = 'id_makul';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_makul', $q);
	$this->db->or_like('semester', $q);
	$this->db->or_like('id_prodi', $q);
	$this->db->or_like('kode_makul', $q);
	$this->db->or_like('nama_makul', $q);
	$this->db->or_like('sks', $q);
	$this->db->or_like('jenis_makul', $q);
	$this->db->or_like('angkatan', $q);
	$this->db->or_like('status', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_makul', $q);
	$this->db->or_like('semester', $q);
	$this->db->or_like('id_prodi', $q);
	$this->db->or_like('kode_makul', $q);
	$this->db->or_like('nama_makul', $q);
	$this->db->or_like('sks', $q);
	$this->db->or_like('jenis_makul', $q);
	$this->db->or_like('angkatan', $q);
	$this->db->or_like('status', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function getallmakul()
    {
        $this->db->select('*');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function join()
    {
        $this->db->select('tb_makul.id_makul, tb_makul.semester, tb_makul.kode_makul, tb_makul.nama_makul, tb_makul.sks, tb_makul.jenis_makul, tb_makul.angkatan, tb_makul.status, tb_prodi.nama_prodi');
        $this->db->join('tb_prodi', 'tb_makul.id_prodi = tb_prodi.id_prodi');
        $this->db->order_by('tb_makul.kode_makul', 'asc');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function getProdiByFakultas($id)
    {
        $this->db->select('*');
        $this->db->order_by('jenjang', 'desc');
        $this->db->order_by('nama_prodi', 'asc');
        $this->db->where('id_fakultas', $id);
        $query = $this->db->get('tb_prodi');
        return $query->result();
    }

    function getDatabyProdi($id)
    {
        $this->db->select('tb_makul.id_makul, tb_makul.semester, tb_makul.kode_makul, tb_makul.nama_makul, tb_makul.sks, tb_makul.jenis_makul, tb_makul.angkatan, tb_makul.status, tb_prodi.nama_prodi');
        $this->db->join('tb_prodi', 'tb_makul.id_prodi = tb_prodi.id_prodi');
        $this->db->order_by('tb_makul.kode_makul', 'asc');
        $this->db->where('tb_makul.id_prodi', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

}

/* End of file M_validasi.php */
/* Location: ./application/models/M_validasi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-12-09 17:01:31 */
/* http://harviacode.com */
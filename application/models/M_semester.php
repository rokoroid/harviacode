<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_semester extends CI_Model
{

    public $table = 'tb_semester';
    public $id = 'id_semester';
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
        $this->db->like('id_semester', $q);
	$this->db->or_like('nama_semester', $q);
	$this->db->or_like('tahun_ajaran', $q);
	$this->db->or_like('waktu_kuliah', $q);
	$this->db->or_like('tgl_mulai', $q);
	$this->db->or_like('tgl_selesai', $q);
	$this->db->or_like('tgl_akhirbayar', $q);
	$this->db->or_like('aktif', $q);
	$this->db->or_like('lock', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_semester', $q);
	$this->db->or_like('nama_semester', $q);
	$this->db->or_like('tahun_ajaran', $q);
	$this->db->or_like('waktu_kuliah', $q);
	$this->db->or_like('tgl_mulai', $q);
	$this->db->or_like('tgl_selesai', $q);
	$this->db->or_like('tgl_akhirbayar', $q);
	$this->db->or_like('aktif', $q);
	$this->db->or_like('lock', $q);
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

    function getallsemester()
    {
        $this->db->select('*');
        $query = $this->db->get($this->table);
        return $query->result();
    }

}

/* End of file M_semester.php */
/* Location: ./application/models/M_semester.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-27 17:56:00 */
/* http://harviacode.com */
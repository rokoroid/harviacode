<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_kelas extends CI_Model
{

    public $table = 'tb_kelas';
    public $id = 'id_kelas';
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
        $this->db->like('id_kelas', $q);
	$this->db->or_like('nama_kelas', $q);
    $this->db->or_like('angkatan', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_kelas', $q);
	$this->db->or_like('nama_kelas', $q);
    $this->db->or_like('angkatan', $q);
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

    function getallkelas()
    {
        $this->db->select('*');
        $query = $this->db->get($this->table);
        return $query->result();
    }

}

/* End of file M_kelas.php */
/* Location: ./application/models/M_kelas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-22 17:20:15 */
/* http://harviacode.com */
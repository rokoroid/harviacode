<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_jadwal extends CI_Model
{

    public $table = 'tb_jadwal';
    public $id = 'id_jadwal';
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
        $this->db->like('id_jadwal', $q);
	$this->db->or_like('id_semester', $q);
	$this->db->or_like('id_makul', $q);
	$this->db->or_like('id_kelas', $q);
	$this->db->or_like('id_dosen', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_jadwal', $q);
	$this->db->or_like('id_semester', $q);
	$this->db->or_like('id_makul', $q);
	$this->db->or_like('id_kelas', $q);
	$this->db->or_like('id_dosen', $q);
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

    // function getProdiByFakultas($id)
    // {
    //     $this->db->select('*');
    //     $this->db->where('id_fakultas', $id);
    //     $this->db->order_by('jenjang', 'desc');
    //     $this->db->order_by('nama_prodi', 'asc');
    //     $query = $this->db->get('tb_prodi');
    //     return $query->result();
    // }

    // function getDatabyProdi($id)
    // {
    //     $this->db->select('tb_jadwal.id_jadwal, tb_jadwal.id_kelas, tb_semester.nama_semester, tb_semester.tahun_ajaran, tb_makul.nama_makul, tb_makul.id_prodi');
    //     $this->db->join('tb_semester', 'tb_jadwal.id_semester = tb_semester.id_semester');
    //     $this->db->join('tb_makul', 'tb_jadwal.id_makul = tb_makul.id_makul');
    //     $this->db->where('tb_makul.id_prodi', $id);
    //     $query = $this->db->get($this->table);
    //     return $query->result();
    // }

    function getallkelas()
    {
        $this->db->select('*');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    // function join()
    // {
    //     $this->db->select('tb_jadwal.id_jadwal, tb_jadwal.id_kelas, tb_semester.nama_semester, tb_semester.tahun_ajaran, tb_makul.nama_makul, tb_makul.id_prodi, tb_dosen.nama_dosen, tb_dosen.gelar_depan, tb_dosen.gelar_belakang');
    //     $this->db->join('tb_semester', 'tb_jadwal.id_semester = tb_semester.id_semester');
    //     $this->db->join('tb_makul', 'tb_jadwal.id_makul = tb_makul.id_makul');
    //     $this->db->join('tb_dosen', 'tb_jadwal.id_dosen = tb_dosen.id_dosen');
    //     $query = $this->db->get($this->table);
    //     return $query->result();
    // }

    function join()
    {
        $sql = "SELECT
                    `tb_jadwal`.`id_jadwal` ,
                    `tb_semester`.`nama_semester` ,
                    `tb_semester`.`tahun_ajaran` ,
                    `tb_makul`.`nama_makul` ,
                    `tb_makul`.`id_prodi` ,
                    `tb_jadwal`.`id_kelas` ,
                    `tb_kelas`.`nama_kelas`,
                    `tb_dosen`.`nama_dosen` ,
                    `tb_dosen`.`gelar_depan` ,
                    `tb_dosen`.`gelar_belakang`
                FROM
                    `tb_jadwal`
                    LEFT JOIN `tb_dosen` 
                        ON (`tb_jadwal`.`id_dosen` = `tb_dosen`.`id_dosen`)
                    LEFT JOIN `tb_semester` 
                        ON (`tb_jadwal`.`id_semester` = `tb_semester`.`id_semester`)
                    LEFT JOIN `tb_makul` 
                        ON (`tb_jadwal`.`id_makul` = `tb_makul`.`id_makul`)
                    LEFT JOIN `tb_kelas` 
                        ON (`tb_jadwal`.`id_kelas` = `tb_kelas`.`id_kelas`)";
        $data = $this->db->query($sql);
        return $data->result();
    }

    function getProdiByFakultas($id)
    {
        $this->db->select('*');
        $this->db->where('id_fakultas', $id);
        $this->db->order_by('jenjang', 'desc');
        $this->db->order_by('nama_prodi', 'asc');
        $query = $this->db->get('tb_prodi');
        return $query->result();
    }

    function getDatabyProdi($id)
    {
        $sql = "SELECT
                    `tb_jadwal`.`id_jadwal` ,
                    `tb_semester`.`nama_semester` ,
                    `tb_semester`.`tahun_ajaran` ,
                    `tb_makul`.`nama_makul` ,
                    `tb_makul`.`id_prodi` , 
                    `tb_jadwal`.`id_kelas` ,
                    `tb_dosen`.`nama_dosen` ,
                    `tb_dosen`.`gelar_depan` ,
                    `tb_dosen`.`gelar_belakang`
                FROM
                    `tb_jadwal`
                    LEFT JOIN `tb_dosen` 
                        ON (`tb_jadwal`.`id_dosen` = `tb_dosen`.`id_dosen`)
                    LEFT JOIN `tb_semester` 
                        ON (`tb_jadwal`.`id_semester` = `tb_semester`.`id_semester`)
                    LEFT JOIN `tb_makul` 
                        ON (`tb_jadwal`.`id_makul` = `tb_makul`.`id_makul`)
                WHERE
                    `tb_makul`.`id_prodi` = {$id}";
        $data = $this->db->query($sql);
        return $data->result();
    }

}

/* End of file M_jadwal.php */
/* Location: ./application/models/M_jadwal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-10-11 10:27:16 */
/* http://harviacode.com */
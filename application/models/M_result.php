<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_result extends CI_Model 
{

	public $table = 'v_jadwalsemester';
    public $order = 'ASC';

    function __construct()
    {
        parent::__construct();
    }

    function get_all()
    {
    	$this->db->select('*');
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function get_all_by_kelas($id)
    {
    	$this->db->select('*');
    	$this->db->where('id_kelas', $id);
    	$query = $this->db->get($this->table);
    	return $query->result();
    }

    function get_all_by_dosen($id)
    {
        $this->db->select('*');
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function get_all_by_ruangan($id)
    {
        $this->db->select('*');
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function get_all_by_waktu($id)
    {
    	$this->db->select('*');
    	$this->db->where('id_waktu', $id);
    	$query = $this->db->get($this->table);
    	return $query->result();
    }

    //senin
    function kelas_senin_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 1);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_senin_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 2);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_senin_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 3);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_senin_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 4);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_senin_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 5);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_senin_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 6);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_senin_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 7);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //selasa
    function kelas_selasa_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 8);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_selasa_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 9);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_selasa_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 10);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_selasa_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 11);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_selasa_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 12);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_selasa_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 13);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_selasa_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 14);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //rabu
    function kelas_rabu_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 15);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_rabu_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 16);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_rabu_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 17);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_rabu_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 18);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_rabu_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 19);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_rabu_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 20);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_rabu_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 21);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //kamis
    function kelas_kamis_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 22);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_kamis_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 23);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_kamis_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 24);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_kamis_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 25);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_kamis_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 26);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_kamis_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 27);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_kamis_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 28);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //jumat
    function kelas_jumat_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 29);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_jumat_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 30);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_jumat_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 31);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_jumat_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 32);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_jumat_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 33);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_jumat_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 34);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_jumat_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 35);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //sabtu
    function kelas_sabtu_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 36);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_sabtu_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 37);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_sabtu_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 38);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_sabtu_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 39);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_sabtu_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 40);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_sabtu_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 41);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function kelas_sabtu_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 42);
        $this->db->where('id_kelas', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //senin
    function dosen_senin_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 1);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_senin_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 2);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_senin_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 3);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_senin_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 4);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_senin_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 5);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_senin_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 6);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_senin_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 7);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //selasa
    function dosen_selasa_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 8);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_selasa_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 9);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_selasa_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 10);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_selasa_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 11);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_selasa_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 12);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_selasa_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 13);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_selasa_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 14);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //rabu
    function dosen_rabu_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 15);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_rabu_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 16);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_rabu_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 17);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_rabu_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 18);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_rabu_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 19);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_rabu_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 20);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_rabu_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 21);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //kamis
    function dosen_kamis_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 22);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_kamis_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 23);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_kamis_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 24);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_kamis_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 25);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_kamis_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 26);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_kamis_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 27);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_kamis_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 28);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //jumat
    function dosen_jumat_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 29);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_jumat_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 30);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_jumat_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 31);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_jumat_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 32);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_jumat_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 33);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_jumat_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 34);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_jumat_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 35);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //sabtu
    function dosen_sabtu_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 36);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_sabtu_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 37);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_sabtu_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 38);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_sabtu_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 39);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_sabtu_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 40);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_sabtu_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 41);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function dosen_sabtu_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 42);
        $this->db->where('id_dosen', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //senin
    function ruang_senin_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 1);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_senin_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 2);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_senin_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 3);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_senin_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 4);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_senin_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 5);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_senin_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 6);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_senin_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 7);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //selasa
    function ruang_selasa_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 8);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_selasa_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 9);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_selasa_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 10);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_selasa_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 11);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_selasa_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 12);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_selasa_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 13);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_selasa_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 14);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //rabu
    function ruang_rabu_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 15);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_rabu_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 16);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_rabu_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 17);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_rabu_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 18);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_rabu_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 19);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_rabu_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 20);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_rabu_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 21);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //kamis
    function ruang_kamis_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 22);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_kamis_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 23);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_kamis_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 24);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_kamis_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 25);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_kamis_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 26);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_kamis_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 27);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_kamis_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 28);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //jumat
    function ruang_jumat_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 29);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_jumat_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 30);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_jumat_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 31);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_jumat_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 32);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_jumat_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 33);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_jumat_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 34);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_jumat_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 35);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    //sabtu
    function ruang_sabtu_tujuh($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 36);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_sabtu_sembilan($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 37);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_sabtu_sebelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 38);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_sabtu_tigabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 39);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_sabtu_limabelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 40);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_sabtu_tujuhbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 41);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }

    function ruang_sabtu_sembilanbelas($id)
    {
        $this->db->select('*');
        $this->db->where('id_waktu', 42);
        $this->db->where('id_ruang', $id);
        $query = $this->db->get($this->table);
        return $query->result();
    }
}

/* End of file M_result.php */
/* Location: ./application/models/M_result.php */
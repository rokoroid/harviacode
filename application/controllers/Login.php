<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','form'));
        $this->load->library(array('session','encryption'));
		$this->load->model('M_users');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function checkAkses()
	{
		$akses = $this->input->post('akses');
		$id = $this->input->post("txt_user");
        $pass = $this->input->post("txt_pass");

        if ($akses == "Dosen") {
        	$dataLogin = array (
        			'id'=>$id,
        			'pass'=>$pass,
        			'bagian'=>$akses
        		);
        	$this->session->set_userdata('sesDataLogin',$dataLogin);
       		redirect('Login/loginDosen');
        }
        else if ($akses == "Baaku") {
        	$dataLogin = array (
        			'id'=>$id,
        			'pass'=>$pass,
        			'bagian'=>$akses
        		);
        	$this->session->set_userdata('sesDataLogin',$dataLogin);
        	redirect('Login/loginBaaku');
        }
        else if ($akses == "Kaprodi") {
            $dataLogin = array (
                    'id'=>$id,
                    'pass'=>$pass,
                    'bagian'=>$akses
                );
            $this->session->set_userdata('sesDataLogin',$dataLogin);
            redirect('Login/loginKaprodi');
        }
	}

	public function loginDosen()
	{
		$checkSession = $this->session->userdata('sesDataLogin');
		// print_r($checkSession['id']);

		$id = $checkSession['id'];
        $pass = $checkSession['pass'];
        
        $cek = $this->db->get_where('tb_users',array('username'=>$id))->num_rows();
        $result = $this->db->get_where('tb_users',array('username'=>$id))->result();

        if ($cek != 0){
            $pass_didb = $this->encryption->decrypt($result[0]->password);

            if ($pass_didb == $pass){
                $data_session = array(
                    'id'=>$result[0]->id_dosen,
                    'nama'=>$result[0]->username,
                    'bagian'=>$result[0]->level
                );
                $this->session->set_userdata('dosen',$data_session);
                redirect('DashboardDosen');
            }else{
                redirect('Login');
            }
        }else{
            redirect('Login');
        }
	}

	public function loginBaaku()
	{
		$checkSession = $this->session->userdata('sesDataLogin');
		// print_r($checkSession['id']);

		$id = $checkSession['id'];
        $pass = $checkSession['pass'];

        $cek = $this->db->get_where('tb_users',array('username'=>$id))->num_rows();
        $result = $this->db->get_where('tb_users',array('username'=>$id))->result();
        // print_r($result);

        if ($cek != 0){
            $pass_didb = $this->encryption->decrypt($result[0]->password);

            if ($pass_didb == $pass){
                $data_session = array(
                    'id'=>"BAAKU",
                    'nama'=>$result[0]->username,
                    'bagian'=>$result[0]->level
                );
                $this->session->set_userdata('baaku',$data_session);
                redirect('DashboardBaaku');
            }else{
                redirect('Login');
            }
        }else{
            redirect('Login');
        }
	}

    public function loginKaprodi()
    {
        $checkSession = $this->session->userdata('sesDataLogin');
        // print_r($checkSession['id']);

        $id = $checkSession['id'];
        $pass = $checkSession['pass'];

        $cek = $this->db->get_where('tb_users',array('username'=>$id))->num_rows();
        $result = $this->db->get_where('tb_users',array('username'=>$id))->result();
        // print_r($result);

        if ($cek != 0){
            $pass_didb = $this->encryption->decrypt($result[0]->password);

            if ($pass_didb == $pass){
                $data_session = array(
                    'id'=>"Kaprodi",
                    'nama'=>$result[0]->username,
                    'bagian'=>$result[0]->level
                );
                $this->session->set_userdata('kaprodi',$data_session);
                redirect('DashboardKaprodi');
            }else{
                redirect('Login');
            }
        }else{
            redirect('Login');
        }
    }

	function logout(){
        $this->session->unset_userdata('dosen');
        $this->session->unset_userdata('baaku');
        redirect('Login');
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
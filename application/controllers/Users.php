<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_users');
        $this->load->model('M_dosen');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'users/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'users/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'users/index.html';
            $config['first_url'] = base_url() . 'users/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_users->total_rows($q);
        // $users = $this->M_users->get_limit_data($config['per_page'], $start, $q);
        $users = $this->M_users->join();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'users_data' => $users,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('users/tb_users_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $dosen = $this->M_dosen->getalldosen();
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('users/create_action'),
	    'id_user' => set_value('id_user'),
	    'id_dosen' => set_value('id_dosen'),
	    'username' => set_value('username'),
	    'level' => set_value('level'),
	    'password' => set_value('password'),
	    'email' => set_value('email'),
	    'no_telp' => set_value('no_telp'),
        'dataDosen' => $dosen,
	);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('users/tb_users_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_dosen' => $this->input->post('id_dosen',TRUE),
		'username' => $this->input->post('username',TRUE),
		'level' => 'Dosen',
		'password' => $this->input->post('password',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
	    );

            $this->M_users->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('users'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_users->get_by_id($id);
        $dosen = $this->M_dosen->getalldosen();

        if ($row) {
            // $pass = $this->encryption->decrypt($row->password);
            $data = array(
                'button' => 'Update',
                'action' => site_url('users/update_action'),
		'id_user' => set_value('id_user', $row->id_user),
		'id_dosen' => set_value('id_dosen', $row->id_dosen),
		'username' => set_value('username', $row->username),
		'level' => set_value('level', $row->level),
		'password' => set_value('password', $row->password),
		'email' => set_value('email', $row->email),
		'no_telp' => set_value('no_telp', $row->no_telp),
        'dataDosen' => $dosen,
	    );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('users/tb_users_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_user', TRUE));
        } else {
            $data = array(
		'id_dosen' => $this->input->post('id_dosen',TRUE),
		'username' => $this->input->post('username',TRUE),
		'level' => $this->input->post('level',TRUE),
		'password' => $this->input->post('password',TRUE),
		'email' => $this->input->post('email',TRUE),
		'no_telp' => $this->input->post('no_telp',TRUE),
	    );

            $this->M_users->update($this->input->post('id_user', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('users'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_users->get_by_id($id);

        if ($row) {
            $this->M_users->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('users'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('users'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_dosen', 'id dosen', 'trim|required');
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	// $this->form_validation->set_rules('level', 'level', 'trim|required');
	$this->form_validation->set_rules('password', 'password', 'trim|required');
	$this->form_validation->set_rules('email', 'email', 'trim|required');
	$this->form_validation->set_rules('no_telp', 'no telp', 'trim|required');

	$this->form_validation->set_rules('id_user', 'id_user', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-23 15:34:43 */
/* http://harviacode.com */
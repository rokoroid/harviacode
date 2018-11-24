<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fakultas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_fakultas');
        $this->load->library('form_validation');
        
        $userSession = $this->session->userdata('baaku');
        if ($userSession['bagian'] != "staff"){
            redirect('Login');
        }
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'fakultas/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'fakultas/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'fakultas/index.html';
            $config['first_url'] = base_url() . 'fakultas/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_fakultas->total_rows($q);
        // $fakultas = $this->M_fakultas->get_limit_data($config['per_page'], $start, $q);
        $fakultas = $this->M_fakultas->getallfakultas();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'fakultas_data' => $fakultas,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('fakultas/tb_fakultas_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('fakultas/create_action'),
	    'id_fakultas' => set_value('id_fakultas'),
	    'kode_fakultas' => set_value('kode_fakultas'),
	    'nama_fakultas' => set_value('nama_fakultas'),
	    'namafak_English' => set_value('namafak_English'),
	    'singkatan' => set_value('singkatan'),
	    'keterangan' => set_value('keterangan'),
	);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('fakultas/tb_fakultas_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_fakultas' => $this->input->post('kode_fakultas',TRUE),
		'nama_fakultas' => $this->input->post('nama_fakultas',TRUE),
		'namafak_English' => $this->input->post('namafak_English',TRUE),
		'singkatan' => $this->input->post('singkatan',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->M_fakultas->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('fakultas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_fakultas->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('fakultas/update_action'),
		'id_fakultas' => set_value('id_fakultas', $row->id_fakultas),
		'kode_fakultas' => set_value('kode_fakultas', $row->kode_fakultas),
		'nama_fakultas' => set_value('nama_fakultas', $row->nama_fakultas),
		'namafak_English' => set_value('namafak_English', $row->namafak_English),
		'singkatan' => set_value('singkatan', $row->singkatan),
		'keterangan' => set_value('keterangan', $row->keterangan),
	    );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('fakultas/tb_fakultas_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('fakultas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_fakultas', TRUE));
        } else {
            $data = array(
		'kode_fakultas' => $this->input->post('kode_fakultas',TRUE),
		'nama_fakultas' => $this->input->post('nama_fakultas',TRUE),
		'namafak_English' => $this->input->post('namafak_English',TRUE),
		'singkatan' => $this->input->post('singkatan',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->M_fakultas->update($this->input->post('id_fakultas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('fakultas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_fakultas->get_by_id($id);

        if ($row) {
            $this->M_fakultas->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('fakultas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('fakultas'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_fakultas', 'kode fakultas', 'trim|required');
	$this->form_validation->set_rules('nama_fakultas', 'nama fakultas', 'trim|required');
	// $this->form_validation->set_rules('namafak_English', 'namafak english', 'trim|required');
	$this->form_validation->set_rules('singkatan', 'singkatan', 'trim|required');
	// $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

	$this->form_validation->set_rules('id_fakultas', 'id_fakultas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Fakultas.php */
/* Location: ./application/controllers/Fakultas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-27 17:55:10 */
/* http://harviacode.com */
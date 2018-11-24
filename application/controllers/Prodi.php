<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_prodi');
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
            $config['base_url'] = base_url() . 'prodi/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'prodi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'prodi/index.html';
            $config['first_url'] = base_url() . 'prodi/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_prodi->total_rows($q);
        // $prodi = $this->M_prodi->join($config['per_page'], $start, $q);
        $prodi = $this->M_prodi->join();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'prodi_data' => $prodi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('prodi/tb_prodi_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $fakultas = $this->M_fakultas->getallfakultas();
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('prodi/create_action'),
	    'id_prodi' => set_value('id_prodi'),
	    'kode_prodiDIKTI' => set_value('kode_prodiDIKTI'),
	    'nama_prodi' => set_value('nama_prodi'),
	    'nama_prodi_Eng' => set_value('nama_prodi_Eng'),
	    'id_fakultas' => set_value('id_fakultas'),
	    'jenjang' => set_value('jenjang'),
	    'keterangan' => set_value('keterangan'),
	    'aktif' => set_value('aktif'),
        'dataFakultas' => $fakultas,
	);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('prodi/tb_prodi_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_prodiDIKTI' => $this->input->post('kode_prodiDIKTI',TRUE),
		'nama_prodi' => $this->input->post('nama_prodi',TRUE),
		'nama_prodi_Eng' => $this->input->post('nama_prodi_Eng',TRUE),
		'id_fakultas' => $this->input->post('id_fakultas',TRUE),
		'jenjang' => $this->input->post('jenjang',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
		'aktif' => $this->input->post('aktif',TRUE),
	    );

            $this->M_prodi->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('prodi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_prodi->get_by_id($id);
        $fakultas = $this->M_fakultas->getallfakultas();

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('prodi/update_action'),
		'id_prodi' => set_value('id_prodi', $row->id_prodi),
		'kode_prodiDIKTI' => set_value('kode_prodiDIKTI', $row->kode_prodiDIKTI),
		'nama_prodi' => set_value('nama_prodi', $row->nama_prodi),
		'nama_prodi_Eng' => set_value('nama_prodi_Eng', $row->nama_prodi_Eng),
		'id_fakultas' => set_value('id_fakultas', $row->id_fakultas),
		'jenjang' => set_value('jenjang', $row->jenjang),
		'keterangan' => set_value('keterangan', $row->keterangan),
		'aktif' => set_value('aktif', $row->aktif),
        'dataFakultas' => $fakultas,
	    );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('prodi/tb_prodi_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('prodi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_prodi', TRUE));
        } else {
            $data = array(
		'kode_prodiDIKTI' => $this->input->post('kode_prodiDIKTI',TRUE),
		'nama_prodi' => $this->input->post('nama_prodi',TRUE),
		'nama_prodi_Eng' => $this->input->post('nama_prodi_Eng',TRUE),
		'id_fakultas' => $this->input->post('id_fakultas',TRUE),
		'jenjang' => $this->input->post('jenjang',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
		'aktif' => $this->input->post('aktif',TRUE),
	    );

            $this->M_prodi->update($this->input->post('id_prodi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('prodi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_prodi->get_by_id($id);

        if ($row) {
            $this->M_prodi->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('prodi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('prodi'));
        }
    }

    public function _rules() 
    {
	// $this->form_validation->set_rules('kode_prodiDIKTI', 'kode prodidikti', 'trim|required');
	$this->form_validation->set_rules('nama_prodi', 'nama prodi', 'trim|required');
	$this->form_validation->set_rules('nama_prodi_Eng', 'nama prodi eng', 'trim|required');
	$this->form_validation->set_rules('id_fakultas', 'id fakultas', 'trim|required');
	$this->form_validation->set_rules('jenjang', 'jenjang', 'trim|required');
	// $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
	$this->form_validation->set_rules('aktif', 'aktif', 'trim|required');

	$this->form_validation->set_rules('id_prodi', 'id_prodi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-30 18:42:35 */
/* http://harviacode.com */
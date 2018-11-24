<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gedung extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_gedung');
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
            $config['base_url'] = base_url() . 'gedung/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'gedung/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'gedung/index.html';
            $config['first_url'] = base_url() . 'gedung/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_gedung->total_rows($q);
        // $gedung = $this->M_gedung->get_limit_data($config['per_page'], $start, $q);
        $gedung = $this->M_gedung->getallgedung();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'gedung_data' => $gedung,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('gedung/tb_gedung_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('gedung/create_action'),
	    'id_gedung' => set_value('id_gedung'),
	    'kode_gedung' => set_value('kode_gedung'),
	    'nama_gedung' => set_value('nama_gedung'),
	    'keterangan' => set_value('keterangan'),
	);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('gedung/tb_gedung_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kode_gedung' => $this->input->post('kode_gedung',TRUE),
		'nama_gedung' => $this->input->post('nama_gedung',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->M_gedung->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('gedung'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_gedung->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('gedung/update_action'),
		'id_gedung' => set_value('id_gedung', $row->id_gedung),
		'kode_gedung' => set_value('kode_gedung', $row->kode_gedung),
		'nama_gedung' => set_value('nama_gedung', $row->nama_gedung),
		'keterangan' => set_value('keterangan', $row->keterangan),
	    );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('gedung/tb_gedung_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('gedung'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_gedung', TRUE));
        } else {
            $data = array(
		'kode_gedung' => $this->input->post('kode_gedung',TRUE),
		'nama_gedung' => $this->input->post('nama_gedung',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->M_gedung->update($this->input->post('id_gedung', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('gedung'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_gedung->get_by_id($id);

        if ($row) {
            $this->M_gedung->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('gedung'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('gedung'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kode_gedung', 'kode gedung', 'trim|required');
	$this->form_validation->set_rules('nama_gedung', 'nama gedung', 'trim|required');
	// $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
	$this->form_validation->set_rules('id_gedung', 'id_gedung', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Gedung.php */
/* Location: ./application/controllers/Gedung.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-27 17:55:29 */
/* http://harviacode.com */
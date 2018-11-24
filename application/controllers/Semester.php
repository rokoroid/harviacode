<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Semester extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_semester');
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
            $config['base_url'] = base_url() . 'semester/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'semester/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'semester/index.html';
            $config['first_url'] = base_url() . 'semester/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_semester->total_rows($q);
        // $semester = $this->M_semester->get_limit_data($config['per_page'], $start, $q);
        $semester = $this->M_semester->getallsemester();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'semester_data' => $semester,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('semester/tb_semester_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('semester/create_action'),
	    'id_semester' => set_value('id_semester'),
	    'nama_semester' => set_value('nama_semester'),
	    'tahun_ajaran' => set_value('tahun_ajaran'),
	    'waktu_kuliah' => set_value('waktu_kuliah'),
	    'tgl_mulai' => set_value('tgl_mulai'),
	    'tgl_selesai' => set_value('tgl_selesai'),
	    'tgl_akhirbayar' => set_value('tgl_akhirbayar'),
	    'aktif' => set_value('aktif'),
	    'lock' => set_value('lock'),
	);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('semester/tb_semester_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_semester' => $this->input->post('nama_semester',TRUE),
		'tahun_ajaran' => $this->input->post('tahun_ajaran',TRUE),
		'waktu_kuliah' => $this->input->post('waktu_kuliah',TRUE),
		'tgl_mulai' => $this->input->post('tgl_mulai',TRUE),
		'tgl_selesai' => $this->input->post('tgl_selesai',TRUE),
		'tgl_akhirbayar' => $this->input->post('tgl_akhirbayar',TRUE),
		'aktif' => $this->input->post('aktif',TRUE),
		'lock' => $this->input->post('lock',TRUE),
	    );

            $this->M_semester->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('semester'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_semester->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('semester/update_action'),
		'id_semester' => set_value('id_semester', $row->id_semester),
		'nama_semester' => set_value('nama_semester', $row->nama_semester),
		'tahun_ajaran' => set_value('tahun_ajaran', $row->tahun_ajaran),
		'waktu_kuliah' => set_value('waktu_kuliah', $row->waktu_kuliah),
		'tgl_mulai' => set_value('tgl_mulai', $row->tgl_mulai),
		'tgl_selesai' => set_value('tgl_selesai', $row->tgl_selesai),
		'tgl_akhirbayar' => set_value('tgl_akhirbayar', $row->tgl_akhirbayar),
		'aktif' => set_value('aktif', $row->aktif),
		'lock' => set_value('lock', $row->lock),
	    );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('semester/tb_semester_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('semester'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_semester', TRUE));
        } else {
            $data = array(
		'nama_semester' => $this->input->post('nama_semester',TRUE),
		'tahun_ajaran' => $this->input->post('tahun_ajaran',TRUE),
		'waktu_kuliah' => $this->input->post('waktu_kuliah',TRUE),
		'tgl_mulai' => $this->input->post('tgl_mulai',TRUE),
		'tgl_selesai' => $this->input->post('tgl_selesai',TRUE),
		'tgl_akhirbayar' => $this->input->post('tgl_akhirbayar',TRUE),
		'aktif' => $this->input->post('aktif',TRUE),
		'lock' => $this->input->post('lock',TRUE),
	    );

            $this->M_semester->update($this->input->post('id_semester', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('semester'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_semester->get_by_id($id);

        if ($row) {
            $this->M_semester->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('semester'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('semester'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_semester', 'nama semester', 'trim|required');
	$this->form_validation->set_rules('tahun_ajaran', 'tahun ajaran', 'trim|required');
	$this->form_validation->set_rules('waktu_kuliah', 'waktu kuliah', 'trim|required');
	$this->form_validation->set_rules('tgl_mulai', 'tgl mulai', 'trim|required');
	$this->form_validation->set_rules('tgl_selesai', 'tgl selesai', 'trim|required');
	$this->form_validation->set_rules('tgl_akhirbayar', 'tgl akhirbayar', 'trim|required');
	$this->form_validation->set_rules('aktif', 'aktif', 'trim|required');
	//$this->form_validation->set_rules('lock', 'lock', 'trim|required');

	$this->form_validation->set_rules('id_semester', 'id_semester', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Semester.php */
/* Location: ./application/controllers/Semester.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-27 17:56:00 */
/* http://harviacode.com */
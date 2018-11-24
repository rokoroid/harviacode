<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ruangan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_ruangan');
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
            $config['base_url'] = base_url() . 'ruangan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'ruangan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'ruangan/index.html';
            $config['first_url'] = base_url() . 'ruangan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_ruangan->total_rows($q);
        // $ruangan = $this->M_ruangan->join($config['per_page'], $start, $q);
        $ruangan = $this->M_ruangan->join();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'ruangan_data' => $ruangan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('ruangan/tb_ruangan_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $gedung= $this->M_gedung->getallgedung();
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('ruangan/create_action'),
	    'id_ruang' => set_value('id_ruang'),
	    'id_gedung' => set_value('id_gedung'),
	    'nama_ruang' => set_value('nama_ruang'),
	    'kapasitas' => set_value('kapasitas'),
	    'jenis' => set_value('jenis'),
	    'keterangan' => set_value('keterangan'),
        'dataGedung' => $gedung,
	);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('ruangan/tb_ruangan_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_gedung' => $this->input->post('id_gedung',TRUE),
		'nama_ruang' => $this->input->post('nama_ruang',TRUE),
		'kapasitas' => $this->input->post('kapasitas',TRUE),
		'jenis' => $this->input->post('jenis',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->M_ruangan->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ruangan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_ruangan->get_by_id($id);
        $gedung= $this->M_gedung->getallgedung();

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ruangan/update_action'),
		'id_ruang' => set_value('id_ruang', $row->id_ruang),
		'id_gedung' => set_value('id_gedung', $row->id_gedung),
		'nama_ruang' => set_value('nama_ruang', $row->nama_ruang),
		'kapasitas' => set_value('kapasitas', $row->kapasitas),
		'jenis' => set_value('jenis', $row->jenis),
		'keterangan' => set_value('keterangan', $row->keterangan),
        'dataGedung' => $gedung,
	    );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('ruangan/tb_ruangan_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruangan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_ruang', TRUE));
        } else {
            $data = array(
		'id_gedung' => $this->input->post('id_gedung',TRUE),
		'nama_ruang' => $this->input->post('nama_ruang',TRUE),
		'kapasitas' => $this->input->post('kapasitas',TRUE),
		'jenis' => $this->input->post('jenis',TRUE),
		'keterangan' => $this->input->post('keterangan',TRUE),
	    );

            $this->M_ruangan->update($this->input->post('id_ruang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ruangan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_ruangan->get_by_id($id);

        if ($row) {
            $this->M_ruangan->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ruangan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ruangan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_gedung', 'id gedung', 'trim|required');
	$this->form_validation->set_rules('nama_ruang', 'nama ruang', 'trim|required');
	$this->form_validation->set_rules('kapasitas', 'kapasitas', 'trim|required');
	$this->form_validation->set_rules('jenis', 'jenis', 'trim|required');
	// $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');

	$this->form_validation->set_rules('id_ruang', 'id_ruang', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Ruangan.php */
/* Location: ./application/controllers/Ruangan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-27 17:55:43 */
/* http://harviacode.com */
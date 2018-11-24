<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Waktu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_waktu');
        $this->load->model('M_hari');
        $this->load->model('M_jam');
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
            $config['base_url'] = base_url() . 'waktu/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'waktu/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'waktu/index.html';
            $config['first_url'] = base_url() . 'waktu/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_waktu->total_rows();
        // $waktu = $this->M_waktu->get_limit_data($config['per_page'], $start, $q);
        $config['base_url'] = base_url().'/waktu/';
        $from = $this->uri->segment(3);
        // $waktu = $this->M_waktu->join($config['per_page'], $start,$from);
        $waktu = $this->M_waktu->join();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'waktu_data' => $waktu,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('waktu/tb_waktu_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $hari = $this->M_hari->getallhari();
        $jam = $this->M_jam->getalljam();
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('waktu/create_action'),
	    'id_waktu' => set_value('id_waktu'),
	    'id_hari' => set_value('id_hari'),
	    'id_jam' => set_value('id_jam'),
        'dataHari' => $hari,
        'dataJam' => $jam,
	);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('waktu/tb_waktu_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_hari' => $this->input->post('id_hari',TRUE),
		'id_jam' => $this->input->post('id_jam',TRUE),
	    );

            $this->M_waktu->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('waktu'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_waktu->get_by_id($id);
        $hari = $this->M_hari->getallhari();
        $jam = $this->M_jam->getalljam();

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('waktu/update_action'),
		'id_waktu' => set_value('id_waktu', $row->id_waktu),
		'id_hari' => set_value('id_hari', $row->id_hari),
		'id_jam' => set_value('id_jam', $row->id_jam),
        'dataHari' => $hari,
        'dataJam' => $jam,
	    );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('waktu/tb_waktu_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('waktu'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_waktu', TRUE));
        } else {
            $data = array(
		'id_hari' => $this->input->post('id_hari',TRUE),
		'id_jam' => $this->input->post('id_jam',TRUE),
	    );

            $this->M_waktu->update($this->input->post('id_waktu', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('waktu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_waktu->get_by_id($id);

        if ($row) {
            $this->M_waktu->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('waktu'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('waktu'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_hari', 'id hari', 'trim|required');
	$this->form_validation->set_rules('id_jam', 'id jam', 'trim|required');

	$this->form_validation->set_rules('id_waktu', 'id_waktu', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Waktu.php */
/* Location: ./application/controllers/Waktu.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-08-01 17:27:17 */
/* http://harviacode.com */
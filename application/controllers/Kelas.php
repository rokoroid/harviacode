<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kelas extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_kelas');
        $this->load->library('form_validation');

        // $userSession = $this->session->userdata('baaku');
        // if ($userSession['bagian'] != "staff"){
        //     redirect('Login');
        // }

        $userSession = $this->session->userdata('kaprodi');
        if ($userSession['bagian'] != "kaprodi"){
            redirect('Login');
        }
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kelas/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kelas/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kelas/index.html';
            $config['first_url'] = base_url() . 'kelas/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_kelas->total_rows($q);
        $kelas = $this->M_kelas->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kelas_data' => $kelas,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header3');
        $this->load->view('template/sidebar3');
        $this->load->view('kelas/tb_kelas_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('kelas/create_action'),
	    'id_kelas' => set_value('id_kelas'),
	    'nama_kelas' => set_value('nama_kelas'),
        'angkatan' => set_value('angkatan'),
	);
        $this->load->view('template/header3');
        $this->load->view('template/sidebar3');
        $this->load->view('kelas/tb_kelas_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_kelas' => $this->input->post('nama_kelas',TRUE),
        'angkatan' => $this->input->post('angkatan',TRUE),
	    );

            $this->M_kelas->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kelas'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_kelas->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kelas/update_action'),
		'id_kelas' => set_value('id_kelas', $row->id_kelas),
		'nama_kelas' => set_value('nama_kelas', $row->nama_kelas),
        'angkatan' => set_value('angkatan', $row->angkatan),
	    );
            $this->load->view('template/header3');
            $this->load->view('template/sidebar3');
            $this->load->view('kelas/tb_kelas_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelas'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_kelas', TRUE));
        } else {
            $data = array(
		'nama_kelas' => $this->input->post('nama_kelas',TRUE),
        'angkatan' => $this->input->post('angkatan',TRUE),
	    );

            $this->M_kelas->update($this->input->post('id_kelas', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kelas'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_kelas->get_by_id($id);

        if ($row) {
            $this->M_kelas->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kelas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelas'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_kelas', 'nama kelas', 'trim|required');

	$this->form_validation->set_rules('id_kelas', 'id_kelas', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Kelas.php */
/* Location: ./application/controllers/Kelas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-11-22 17:20:15 */
/* http://harviacode.com */
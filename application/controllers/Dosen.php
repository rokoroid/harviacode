<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_dosen');
        $this->load->model('M_prodi');
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
            $config['base_url'] = base_url() . 'dosen/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'dosen/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'dosen/index.html';
            $config['first_url'] = base_url() . 'dosen/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_dosen->total_rows($q);
        // $dosen = $this->M_dosen->get_limit_data($config['per_page'], $start, $q);
        $dosen = $this->M_dosen->getalldosen();

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'dosen_data' => $dosen,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dosen/tb_dosen_list', $data);
        $this->load->view('template/footer');
    }

    public function create() 
    {
    	$prodi = $this->M_prodi->getallprodi();
        $data = array(
            'button' => 'Tambah',
            'action' => site_url('dosen/create_action'),
	    'id_dosen' => set_value('id_dosen'),
	    'id_prodi' => set_value('id_prodi'),
	    'id_user' => set_value('id_user'),
	    'nidn' => set_value('nidn'),
	    'nik' => set_value('nik'),
	    'nama_dosen' => set_value('nama_dosen'),
	    'gelar_depan' => set_value('gelar_depan'),
	    'gelar_belakang' => set_value('gelar_belakang'),
	    'jabatan_akademik' => set_value('jabatan_akademik'),
	    'golongan_kepangkatan' => set_value('golongan_kepangkatan'),
	    'agama' => set_value('agama'),
	    'tempat_lahir' => set_value('tempat_lahir'),
	    'tgl_lahir' => set_value('tgl_lahir'),
	    'jk' => set_value('jk'),
	    'ikatan_kerja' => set_value('ikatan_kerja'),
	    'status_aktif' => set_value('status_aktif'),
	    'pendidikan_terakhir' => set_value('pendidikan_terakhir'),
	    'bidang_ilmu' => set_value('bidang_ilmu'),
        'dataProdi' => $prodi,
	);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dosen/tb_dosen_form', $data);
        // print_r($data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_prodi' => $this->input->post('id_prodi',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
		'nidn' => $this->input->post('nidn',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama_dosen' => $this->input->post('nama_dosen',TRUE),
		'gelar_depan' => $this->input->post('gelar_depan',TRUE),
		'gelar_belakang' => $this->input->post('gelar_belakang',TRUE),
		'jabatan_akademik' => $this->input->post('jabatan_akademik',TRUE),
		'golongan_kepangkatan' => $this->input->post('golongan_kepangkatan',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'ikatan_kerja' => $this->input->post('ikatan_kerja',TRUE),
		'status_aktif' => $this->input->post('status_aktif',TRUE),
		'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir',TRUE),
		'bidang_ilmu' => $this->input->post('bidang_ilmu',TRUE),
	    );

            $this->M_dosen->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('dosen'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_dosen->get_by_id($id);
        $prodi = $this->M_prodi->getallprodi();

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('dosen/update_action'),
		'id_dosen' => set_value('id_dosen', $row->id_dosen),
		'id_prodi' => set_value('id_prodi', $row->id_prodi),
		'id_user' => set_value('id_user', $row->id_user),
		'nidn' => set_value('nidn', $row->nidn),
		'nik' => set_value('nik', $row->nik),
		'nama_dosen' => set_value('nama_dosen', $row->nama_dosen),
		'gelar_depan' => set_value('gelar_depan', $row->gelar_depan),
		'gelar_belakang' => set_value('gelar_belakang', $row->gelar_belakang),
		'jabatan_akademik' => set_value('jabatan_akademik', $row->jabatan_akademik),
		'golongan_kepangkatan' => set_value('golongan_kepangkatan', $row->golongan_kepangkatan),
		'agama' => set_value('agama', $row->agama),
		'tempat_lahir' => set_value('tempat_lahir', $row->tempat_lahir),
		'tgl_lahir' => set_value('tgl_lahir', $row->tgl_lahir),
		'jk' => set_value('jk', $row->jk),
		'ikatan_kerja' => set_value('ikatan_kerja', $row->ikatan_kerja),
		'status_aktif' => set_value('status_aktif', $row->status_aktif),
		'pendidikan_terakhir' => set_value('pendidikan_terakhir', $row->pendidikan_terakhir),
		'bidang_ilmu' => set_value('bidang_ilmu', $row->bidang_ilmu),
        'dataProdi' => $prodi,
	    );
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('dosen/tb_dosen_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dosen'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_dosen', TRUE));
        } else {
            $data = array(
		'id_prodi' => $this->input->post('id_prodi',TRUE),
		'id_user' => $this->input->post('id_user',TRUE),
		'nidn' => $this->input->post('nidn',TRUE),
		'nik' => $this->input->post('nik',TRUE),
		'nama_dosen' => $this->input->post('nama_dosen',TRUE),
		'gelar_depan' => $this->input->post('gelar_depan',TRUE),
		'gelar_belakang' => $this->input->post('gelar_belakang',TRUE),
		'jabatan_akademik' => $this->input->post('jabatan_akademik',TRUE),
		'golongan_kepangkatan' => $this->input->post('golongan_kepangkatan',TRUE),
		'agama' => $this->input->post('agama',TRUE),
		'tempat_lahir' => $this->input->post('tempat_lahir',TRUE),
		'tgl_lahir' => $this->input->post('tgl_lahir',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'ikatan_kerja' => $this->input->post('ikatan_kerja',TRUE),
		'status_aktif' => $this->input->post('status_aktif',TRUE),
		'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir',TRUE),
		'bidang_ilmu' => $this->input->post('bidang_ilmu',TRUE),
	    );

            $this->M_dosen->update($this->input->post('id_dosen', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('dosen'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_dosen->get_by_id($id);

        if ($row) {
            $this->M_dosen->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('dosen'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dosen'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_prodi', 'id prodi', 'trim|required');
	// $this->form_validation->set_rules('id_user', 'id user', 'trim|required');
	$this->form_validation->set_rules('nidn', 'nidn', 'trim|required');
	$this->form_validation->set_rules('nik', 'nik', 'trim|required');
	$this->form_validation->set_rules('nama_dosen', 'nama dosen', 'trim|required');
	// $this->form_validation->set_rules('gelar_depan', 'gelar depan', 'trim|required');
	// $this->form_validation->set_rules('gelar_belakang', 'gelar belakang', 'trim|required');
	// $this->form_validation->set_rules('jabatan_akademik', 'jabatan akademik', 'trim|required');
	// $this->form_validation->set_rules('golongan_kepangkatan', 'golongan kepangkatan', 'trim|required');
	// $this->form_validation->set_rules('agama', 'agama', 'trim|required');
	// $this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'trim|required');
	// $this->form_validation->set_rules('tgl_lahir', 'tgl lahir', 'trim|required');
	// $this->form_validation->set_rules('jk', 'jk', 'trim|required');
	// $this->form_validation->set_rules('ikatan_kerja', 'ikatan kerja', 'trim|required');
	// $this->form_validation->set_rules('status_aktif', 'status aktif', 'trim|required');
	// $this->form_validation->set_rules('pendidikan_terakhir', 'pendidikan terakhir', 'trim|required');
	// $this->form_validation->set_rules('bidang_ilmu', 'bidang ilmu', 'trim|required');

	$this->form_validation->set_rules('id_dosen', 'id_dosen', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Dosen.php */
/* Location: ./application/controllers/Dosen.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-27 17:27:02 */
/* http://harviacode.com */
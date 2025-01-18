<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Juri extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('juri_model');
		if ($this->session->userdata('hak_akses') != '3') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
			redirect('auth');
		}
	} 
 
	public function index()
	{
		//$data['user1'] = $this->Admin_model->get_data();
		/* $data['dosen'] = $this->Admin_model->get_data2();
        $data['mhs'] = $this->Admin_model->get_data3();
        $data['proposal'] = $this->Admin_model->get_data4();
        $data['dproposal'] = $this->Admin_model->daftarpro();*/
		$data['title'] = 'E-LOMBA START-UP Dashboard Juri';
		$data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
		$data['jumproposal'] = $this->juri_model->getJumlahproposal();
		$data['sudahnilai'] = $this->juri_model->getSudahnilaiproposal();
		$data['jumtema']=$this->juri_model->Jum_tema();

		$this->load->view('templates_juri/header', $data);
		$this->load->view('templates_juri/sidebar', $data);
		$this->load->view('templates_juri/topbar', $data);
		$this->load->view('juri/index', $data);
		$this->load->view('templates_juri/footer');
		/* $this->load->view('templates_administrator/header');
        $this->load->view('templates_administrator/sidebar');
        $this->load->view('administrator/dashboard', $data);
        $this->load->view('templates_administrator/footer');*/
	}

	public function index_penilaian()
	{
		$id_user = $this->session->userdata('id_user');
		$data['title'] = 'E-LOMBA START-UP Penilaian Proposal';
		$data['id_user'] = $id_user;
		$data['user'] = $this->db->get_where('tb_user', ['id_user' => $this->session->userdata('id_user')])->row_array();
		$data['daftarfinalisasi'] = $this->juri_model->get_finalisasi($id_user);
        //$data['penilaian'] = $this->juri_model->getPenilaian($id_proposal)->row_array();
	
		$this->load->view('templates_juri/header', $data);
		$this->load->view('templates_juri/sidebar', $data);
		$this->load->view('templates_juri/topbar', $data);
		$this->load->view('juri/index_penilaian', $data);
		$this->load->view('templates_juri/footer');
	}

    public function index_sudahnilai($id_proposal)
	{
		$id_user = $this->session->userdata('id_user');
		$this->session->set_userdata('id_proposal', $id_proposal);
		$data['title'] = 'E-LOMBA START-UP Penilaian Proposal';
		$data['id_proposal'] = $id_proposal;
		$data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
		$data['proposal'] = $this->juri_model->getJudul($id_proposal)->row_array();
		$data['startup'] = $this->juri_model->getStartup($id_proposal)->row_array();
		$data['tim'] = $this->juri_model->getBiodatatim($id_proposal)->row_array();
		$data['reviewproduk'] = $this->juri_model->getReviewproduk($id_proposal)->row_array();
		$data['paperpitching'] = $this->juri_model->getPaperpitching($id_proposal)->row_array();
		$data['bisnisplan'] = $this->juri_model->getBisnisplan($id_proposal)->row_array();
		$data['pitchdesk'] = $this->juri_model->getPitchdesk($id_proposal)->row_array();
        $data['penilaian'] = $this->juri_model->getOnePenilaian($id_proposal)->row_array();
		$data['kriteria'] = $this->juri_model->getKriteria();

        if(!$data['penilaian']){
            redirect('juri/index_nilaiproposal/'.$id_proposal);
    
        }else{
            $this->load->view('templates_juri/header', $data);
			$this->load->view('templates_juri/sidebar', $data);
			$this->load->view('templates_juri/topbar', $data);
			$this->load->view('juri/index_sudahnilai', $data);
			$this->load->view('templates_juri/footer');
        }


	}


	public function index_nilaiproposal($id_proposal)
	{
		$id_user = $this->session->userdata('id_user');
		$this->session->set_userdata('id_proposal', $id_proposal);
		$data['title'] = 'E-LOMBA START-UP Penilaian Proposal';
		$data['id_proposal'] = $id_proposal;
		$data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
		$data['proposal'] = $this->juri_model->getJudul($id_proposal)->row_array();
		$data['startup'] = $this->juri_model->getStartup($id_proposal)->row_array();
		$data['tim'] = $this->juri_model->getBiodatatim($id_proposal)->row_array();
		$data['reviewproduk'] = $this->juri_model->getReviewproduk($id_proposal)->row_array();
		$data['paperpitching'] = $this->juri_model->getPaperpitching($id_proposal)->row_array();
		$data['bisnisplan'] = $this->juri_model->getBisnisplan($id_proposal)->row_array();
		$data['pitchdesk'] = $this->juri_model->getPitchdesk($id_proposal)->row_array();
		$data['kriteria'] = $this->juri_model->getKriteria();

 
		$this->form_validation->set_rules('nilai[]', 'Pemberian', 'required|trim');


		if ($this->form_validation->run() == false) {
			$this->load->view('templates_juri/header', $data);
			$this->load->view('templates_juri/sidebar', $data);
			$this->load->view('templates_juri/topbar', $data);
			$this->load->view('juri/index_nilaiproposal', $data);
			$this->load->view('templates_juri/footer');
		} else {
			$this->juri_model->tambah_penilaian();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Pemberian berhasil ditambahkan </div>');
			redirect('juri/index_penilaian', $data);
		}
		// $this->load->view('templates_juri/header', $data);
		// $this->load->view('templates_juri/sidebar', $data);
		// $this->load->view('templates_juri/topbar', $data);
		// $this->load->view('juri/index_nilaiproposal', $data);
		// $this->load->view('templates_juri/footer');
	}
 
	public function input_nilai()
	{
		$id_proposal = $this->input->post('id_proposal', true);
		$this->session->set_userdata('id_proposal', $id_proposal);
		$data['title'] = 'E-LOMBA START-UP Penilaian Proposal';
		$data['user'] = $this->db->get_where('tb_user', ['uname_user' => $this->session->userdata('uname_user')])->row_array();
		$data['proposal'] = $this->juri_model->getJudul($id_proposal)->row_array();
		//$data['penilaian'] = $this->juri_model->getPenilaian($id_proposal)->row_array();
		$data['kriteria'] = $this->juri_model->getKriteria();


		$this->form_validation->set_rules('nilai[]', 'Pemberian', 'required|trim');

 
		if ($this->form_validation->run() == false) {
			$this->load->view('templates_juri/header', $data);
			$this->load->view('templates_juri/sidebar', $data);
			$this->load->view('templates_juri/topbar', $data);
			$this->load->view('juri/index_nilaiproposal', $data);
			$this->load->view('templates_juri/footer');
		} else {
			$this->juri_model->tambah_penilaian();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Pemberian berhasil ditambahkan </div>');
			redirect('juri/index_penilaian/', $data);
		}
	}

	public function index_klasemen()
	{
		$id_user = $this->session->userdata('id_user');
		$data['title'] = 'E-LOMBA START-UP Penilaian Proposal';
		$data['id_user'] = $id_user;
		$data['kriteria'] = $this->juri_model->getKriteria();
		$data['juri'] = $this->juri_model->getJuri();
		$data['satujuri'] = $this->juri_model->getNilai1juri();
		$data['allnilai'] = $this->juri_model->getNilaiall();
		$data['user'] = $this->db->get_where('tb_user', ['id_user' => $this->session->userdata('id_user')])->row_array();
		$data['daftarfinalisasi'] = $this->juri_model->get_finalisasi($id_user);
        $data['penilaian'] = $this->juri_model->getPenilaian();
	 
		$this->load->view('templates_juri/header', $data);
		$this->load->view('templates_juri/sidebar', $data);
		$this->load->view('templates_juri/topbar', $data);
		$this->load->view('juri/index_klasemen', $data);
		$this->load->view('templates_juri/footer');
	}


 
}
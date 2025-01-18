<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Admin_model');

        if($this->session->userdata('hak_akses')!='1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
      
    }
  
    public function index(){
        $data['title']='E-LOMBA START-UP Dashboard Admin';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['jmladmin'] = $this->admin_model->getAdminaktif();
        $data['jmljuri'] = $this->admin_model->getJuriaktif();
        $data['jmlpanitia'] = $this->admin_model->getPanitiaaktif();
        $data['jmlpeserta'] = $this->admin_model->getPesertaaktif();
        $data['jmltema'] = $this->admin_model->getTemaaktif();
        $data['jmlkriteria'] = $this->admin_model->getKriteriaaktif();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index', $data);
        $this->load->view('templates_administrator/footer');
      
    }

    public function index_user(){
        $data['title']='E-LOMBA START-UP Daftar User';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftaruser'] = $this->admin_model->get_data();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_user', $data);
        $this->load->view('templates_administrator/footer');
    
    }

    public function index_admin(){
        $data['title']='E-LOMBA START-UP Daftar Admin';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftaradmin'] = $this->admin_model->get_data1();
        

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_admin', $data);
        $this->load->view('templates_administrator/footer');
      
    }

    public function tambah_admin(){
        $data['title']='E-LOMBA START-UP Tambah Admin';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        
        $this->form_validation->set_rules('uname_user','E-Mail','required|trim|valid_email|is_unique[tb_user.uname_user]',['is_unique'=>'email sudah terdaftar']);
        $this->form_validation->set_rules('pass_user','Password','required|trim|min_length[6]|matches[pass2_user]',['matches'=>'password dont match','min_length'=> 'password min 6 character!']);
        $this->form_validation->set_rules('pass2_user','Password','required|trim|matches[pass_user]');
        $this->form_validation->set_rules('nama_admin','Nama','required|trim');
        $this->form_validation->set_rules('nip_admin','NIP','required|trim');
        $this->form_validation->set_rules('nohp_admin','No-HP','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_admin', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_admin();
           // $this->_sendemail();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Admin Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_admin');
        }
      
    }

    public function edit_admin($id_user){
       // $id_user=$this->session->userdata('id_user');
        $this->session->set_userdata('id_user', $id_user);
        $data['title']='E-LOMBA START-UP Edit Admin';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['dataadmin'] = $this->admin_model->getedit_data1($id_user)->row_array();
        $data['datauser'] = $this->admin_model->getUser($id_user)->row_array();
        $data['detailadmin'] = $this->admin_model->get_dataadmin($id_user);
        
        
        $this->form_validation->set_rules('nama_admin','Nama','required|trim');
        $this->form_validation->set_rules('nip_admin','NIP','required|trim');
        $this->form_validation->set_rules('nohp_admin','No-HP','required|trim');
        
        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/edit_admin', $data);
        $this->load->view('templates_administrator/footer');
        
        // if($this->form_validation->run()==false){
        //     $this->load->view('templates_administrator/header', $data);
        //     $this->load->view('templates_administrator/sidebar', $data);
        //     $this->load->view('templates_administrator/topbar', $data);
        //     $this->load->view('administrator/edit_admin', $data);
        //     $this->load->view('templates_administrator/footer');
            
        // }else{
        //     $nama_admin    =ucwords($this->input->post('nama_admin'));
        //     $nip_admin      =$this->input->post('nip_admin');
        //     $nohp_admin      =$this->input->post('nohp_admin');
            

        //     $data=array(
        //         'nama_admin'    =>$nama_admin,
        //         'nip_admin'      =>$nip_admin,
        //         'nohp_admin'      =>$nohp_admin,
                
        //     );

        //     $where=array(
        //         'id_user'=>$id_user,
                
        //     );
        
        
        //     $this->admin_model->update_data($where,$data,'tb_admin');
        //     $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
        //     Data Berhasil Diedit <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">&times;</span></button></div>');
        //     redirect('administrator/index_admin/', $data);
        // }
      
    }

    function edit_adminaksi(){
        $id_user = $this->input->post('id_user');
        $nama_admin = $this->input->post('nama_admin');
        $nip_admin = $this->input->post('nip_admin');
        $nohp_admin = $this->input->post('nohp_admin');
      
        $data = array(
            'nama_admin' => $nama_admin,
            'nip_admin' => $nip_admin,
            'nohp_admin' => $nohp_admin,
        
        );
     
        $where = array(
            'id_user' => $id_user
        );
     
        $this->Admin_model->update_data($where,$data,'tb_admin');
        redirect('administrator/index_admin/', $data);
    }


    public function index_panitia(){
        $data['title']='E-LOMBA START-UP Daftar Panitia';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarpanitia'] = $this->admin_model->get_data2();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_panitia', $data);
        $this->load->view('templates_administrator/footer');
      
    }

    public function tambah_panitia(){
        $data['title']='E-LOMBA START-UP Tambah Panitia';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        
        $this->form_validation->set_rules('uname_user','E-Mail','required|trim|valid_email|is_unique[tb_user.uname_user]',['is_unique'=>'email sudah terdaftar']);
        $this->form_validation->set_rules('pass_user','Password','required|trim|min_length[6]|matches[pass2_user]',['matches'=>'password dont match','min_length'=> 'password min 6 character!']);
        $this->form_validation->set_rules('pass2_user','Password','required|trim|matches[pass_user]');
        $this->form_validation->set_rules('nama_panitia','Nama','required|trim');
        $this->form_validation->set_rules('nim_panitia','NIM','required|trim');
        $this->form_validation->set_rules('nohp_panitia','No-HP','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_panitia', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_panitia();
           // $this->_sendemail();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Panitia Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_panitia');
        }
      
    }

    public function edit_panitia($id_user){
         $this->session->set_userdata('id_user', $id_user);
         $data['title']='E-LOMBA START-UP Edit Panitia';
         $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
         $data['datapanitia'] = $this->admin_model->getedit_data2($id_user)->row_array();
         $data['datauser'] = $this->admin_model->getUser($id_user)->row_array();
         $data['detailpanitia'] = $this->admin_model->get_datapanitia($id_user);
         
         
         $this->form_validation->set_rules('nama_admin','Nama','required|trim');
         $this->form_validation->set_rules('nip_admin','NIP','required|trim');
         $this->form_validation->set_rules('nohp_admin','No-HP','required|trim');
         
         $this->load->view('templates_administrator/header', $data);
         $this->load->view('templates_administrator/sidebar', $data);
         $this->load->view('templates_administrator/topbar', $data);
         $this->load->view('administrator/edit_panitia', $data);
         $this->load->view('templates_administrator/footer');
       
     }

     function edit_panitiaaksi(){
        $id_user = $this->input->post('id_user');
        $nama_panitia = $this->input->post('nama_panitia');
        $nim_panitia = $this->input->post('nim_panitia');
        $nohp_panitia = $this->input->post('nohp_panitia');
      
        $data = array(
            'nama_panitia' => $nama_panitia,
            'nim_panitia' => $nim_panitia,
            'nohp_panitia' => $nohp_panitia,
        
        );
     
        $where = array(
            'id_user' => $id_user
        );
     
        $this->Admin_model->update_data($where,$data,'tb_panitia');
        redirect('administrator/index_panitia/', $data);
    }

    public function index_juri(){
        $data['title']='E-LOMBA START-UP Daftar Juri';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarjuri'] = $this->admin_model->get_data3();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_juri', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_juri(){
        $data['title']='E-LOMBA START-UP Tambah Juri';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        
        $this->form_validation->set_rules('uname_user','E-Mail','required|trim|valid_email|is_unique[tb_user.uname_user]',['is_unique'=>'email sudah terdaftar']);
        $this->form_validation->set_rules('pass_user','Password','required|trim|min_length[6]|matches[pass2_user]',['matches'=>'password dont match','min_length'=> 'password min 6 character!']);
        $this->form_validation->set_rules('pass2_user','Password','required|trim|matches[pass_user]');
        $this->form_validation->set_rules('nama_juri','Nama','required|trim');
        $this->form_validation->set_rules('nik_juri','NIK','required|trim');
        $this->form_validation->set_rules('nohp_juri','No-HP','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_juri', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_juri();
           // $this->_sendemail();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data juri Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_juri');
        }
      
    }

    public function edit_juri($id_user){
        $this->session->set_userdata('id_user', $id_user);
        $data['title']='E-LOMBA START-UP Edit Juri';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['datajuri'] = $this->admin_model->getedit_data3($id_user)->row_array();
        $data['datauser'] = $this->admin_model->getUser($id_user)->row_array();
        $data['detailjuri'] = $this->admin_model->get_datajuri($id_user);
        
        
        $this->form_validation->set_rules('nama_admin','Nama','required|trim');
        $this->form_validation->set_rules('nip_admin','NIP','required|trim');
        $this->form_validation->set_rules('nohp_admin','No-HP','required|trim');
        
        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/edit_juri', $data);
        $this->load->view('templates_administrator/footer');
      
    }

    function edit_juriaksi(){
        $id_user = $this->input->post('id_user');
        $nama_juri = $this->input->post('nama_juri');
        $nik_juri = $this->input->post('nik_juri');
        $nohp_juri = $this->input->post('nohp_juri');
      
        $data = array(
            'nama_juri' => $nama_juri,
            'nik_juri' => $nik_juri,
            'nohp_juri' => $nohp_juri,
        
        );
     
        $where = array(
            'id_user' => $id_user
        );
     
        $this->Admin_model->update_data($where,$data,'tb_juri');
        redirect('administrator/index_juri/', $data);
    }

    public function index_peserta(){
        $data['title']='E-LOMBA START-UP Daftar Peserta';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarpeserta'] = $this->admin_model->get_data4();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_peserta', $data);
        $this->load->view('templates_administrator/footer');
    } 

    public function detail_peserta($id_user){
        $this->session->set_userdata('id_user', $id_user);
        $data['title']='E-LOMBA START-UP Detail Peserta';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['datapeserta'] = $this->admin_model->getedit_data4($id_user)->row_array();
        $data['datauser'] = $this->admin_model->getUser($id_user)->row_array();
        $data['detailpeserta'] = $this->admin_model->get_datapeserta($id_user);
        
        
        $this->form_validation->set_rules('nama_admin','Nama','required|trim');
        $this->form_validation->set_rules('nip_admin','NIP','required|trim');
        $this->form_validation->set_rules('nohp_admin','No-HP','required|trim');
        
        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/detail_peserta', $data);
        $this->load->view('templates_administrator/footer');
       
    }

    public function index_tema(){
        $data['title']='E-LOMBA START-UP Daftar Tema Proposal';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftartema'] = $this->admin_model->get_data5();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_tema', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_tema(){
        $data['title']='E-LOMBA START-UP Tambah Tema';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        $this->form_validation->set_rules('kode_tema','KODE','required|trim');
        $this->form_validation->set_rules('tema_proposal','Tema','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_tema', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_tema();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data tema Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_tema');
        }
      
    }

    public function edit_tema($id_tema){
        $this->session->set_userdata('id_tema', $id_tema);
        $data['title']='E-LOMBA START-UP Edit Tema Proposal';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['datatema'] = $this->admin_model->getedit_data5($id_tema)->row_array();
     
        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/edit_tema', $data);
        $this->load->view('templates_administrator/footer');
      
    }

    function edit_temaaksi(){
        $id_tema = $this->input->post('id_tema');
        $kode_tema = $this->input->post('kode_tema');
        $tema_proposal = $this->input->post('tema_proposal');
      
        $data = array(
            'kode_tema' => $kode_tema,
            'tema_proposal' => $tema_proposal,
          
        
        );
     
        $where = array(
            'id_tema' => $id_tema
        );
     
        $this->Admin_model->update_data($where,$data,'tb_tema');
        redirect('administrator/index_tema/', $data);
    }


    public function index_hakakses(){
        $data['title']='E-LOMBA START-UP Daftar Hak Akses';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarhak'] = $this->admin_model->get_data6();

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_hakakses', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_hakakses(){
        $data['title']='E-LOMBA START-UP Tambah Hak Akses';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        $this->form_validation->set_rules('hak_akses','HAK AKSES','required|trim');
        $this->form_validation->set_rules('keterangan','Keterangan','required|trim');
        
        
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_hakakses', $data);
            $this->load->view('templates_administrator/footer');
            
        }else{
            $this->admin_model->tambah_hakakses();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data hak akses Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_hakakses');
        }
      
    }

    public function index_kriteria(){
        $data['title']='E-LOMBA START-UP Daftar Kriteria';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['daftarkriteria'] = $this->admin_model->get_data7();
        $id_kriteria=$this->session->set_userdata('id_kriteria');

        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/index_kriteria', $data);
        $this->load->view('templates_administrator/footer');
    }

    public function tambah_kriteria(){
        $id_kriteria=$this->session->set_userdata('id_kriteria');
        $data['title']='E-LOMBA START-UP Tambah Kriteria Penilaian';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        
        $this->form_validation->set_rules('kriteria','Kriteria','required|trim');       
        $this->form_validation->set_rules('ket_kriteria','Keterangan Kriteria','required|trim');       
        $this->form_validation->set_rules('bobot_kriteria','Bobot Kriteria','required');       
        
        if($this->form_validation->run()==false){
            $this->load->view('templates_administrator/header', $data);
            $this->load->view('templates_administrator/sidebar', $data);
            $this->load->view('templates_administrator/topbar', $data);
            $this->load->view('administrator/tambah_kriteria', $data);
            $this->load->view('templates_administrator/footer');
              
        }else{
            $this->admin_model->tambah_kriteria();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Berhasil Ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/index_kriteria');
        }
      
    }
 
    public function edit_kriteria($id_kriteria){
        $this->session->set_userdata('id_kriteria', $id_kriteria);
        $data['title']='E-LOMBA START-UP Edit Kriteria Penilaian';
        $data['user'] = $this->db->get_where('tb_user',['uname_user' => $this->session->userdata('uname_user')])->row_array();
        $data['datakriteria'] = $this->admin_model->getedit_data6($id_kriteria)->row_array();
     
        $this->load->view('templates_administrator/header', $data);
        $this->load->view('templates_administrator/sidebar', $data);
        $this->load->view('templates_administrator/topbar', $data);
        $this->load->view('administrator/edit_kriteria', $data);
        $this->load->view('templates_administrator/footer');
      
    }

    function edit_kriteriaaksi(){
        $id_kriteria = $this->input->post('id_kriteria');
        $kriteria = $this->input->post('kriteria');
        $ket_kriteria = $this->input->post('ket_kriteria');
        $bobot_kriteria = $this->input->post('bobot_kriteria');
       
        $data = array(
            'kriteria' => $kriteria,
            'ket_kriteria' => $ket_kriteria,
            'bobot_kriteria' => $bobot_kriteria,

        );
     
        $where = array(
            'id_kriteria' => $id_kriteria
        );
     
        $this->Admin_model->update_data($where,$data,'tb_kriteria');
        redirect('administrator/index_kriteria/', $data);
    }

   



}

?>
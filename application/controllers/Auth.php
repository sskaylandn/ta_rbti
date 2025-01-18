<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('auth_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('uname_user','E-Mail','required|trim|valid_email');
        $this->form_validation->set_rules('pass_user','Password','required|trim');
        
        if($this->form_validation->run()==false){
            $data['title']='E-LOMBA START-UP LOGIN';
            $this->load->view('templates_login/header',$data);
            $this->load->view('auth/login');
            $this->load->view('templates_login/footer');
        }else{
            $this->_login();
        }
    }
    
    private function _login()
    {  
        $uname_user= $this->input->post('uname_user');
        $pass_user= $this->input->post('pass_user');
    
        $user = $this->db->get_where('tb_user',['uname_user' => $uname_user])->row_array();
        
        
        //jika user ada
        if($user){
            //jika user aktif
            if($user['aktif']==1){
                //cek password
                if(password_verify($pass_user, $user['pass_user'])){
                    $data=[
                        'uname_user' => $user['uname_user'],
                        'pass_user' => $user['pass_user'],
                        'hak_akses' => $user['hak_akses'],
                        'id_user' => $user['id_user'],
                        
                    ];

                    $this->session->set_userdata($data);
                    if($user['hak_akses']==1){
                        redirect('administrator');
                    }else if ($user['hak_akses']==2){
                        redirect('panitia');
                    }else if ($user['hak_akses']==3){
                        redirect('juri');
                    }else{
                        redirect('peserta');
                    }

                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Password Salah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button></div>');
                    redirect('auth');
                }
            }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                User Belum Aktivasi <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>');
                redirect('auth');
            }
        }else{
            $this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            User Tidak Terdaftar <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
    }
    
    
    public function registration()
    {    
        $data['prov'] = $this->admin_model->getProv()->result_array();
        $data['kota'] = $this->admin_model->getKota()->result_array();
        //$id=$this->input->post('id');
        //$data=$this->admin_model->getKota($id);
        //echo json_encode($data);

        $this->form_validation->set_rules('uname_user','E-Mail','required|trim|valid_email|is_unique[tb_user.uname_user]',['is_unique'=>'email sudah terdaftar']);
        $this->form_validation->set_rules('pass_user','Password','required|trim|min_length[6]|matches[pass2_user]',['matches'=>'password dont match','min_length'=> 'password min 6 character!']);
        $this->form_validation->set_rules('pass2_user','Password','required|trim|matches[pass_user]');
        $this->form_validation->set_rules('nama_peserta','Nama','required|trim');
        $this->form_validation->set_rules('nik_peserta','NIK','required|trim');
        $this->form_validation->set_rules('nohp_peserta','No-HP','required|trim');
        $this->form_validation->set_rules('prov_peserta','Provinsi','required|trim');
        $this->form_validation->set_rules('kota_peserta','Kab/Kota','required|trim');
        $this->form_validation->set_rules('alamat_peserta','Alamat','required|trim');
        $this->form_validation->set_rules('institusi_peserta','Institusi','required|trim');


        if($this->form_validation->run()==false){
            $data['title']='E-LOMBA START-UP Create Account';
            $this->load->view('templates_login/header',$data);
            $this->load->view('auth/registration');
            $this->load->view('templates_login/footer');
        }else{
            $this->auth_model->regist_peserta();
            $this->_sendemail();
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Registrasi, Silakan Login <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('auth');
        }
        
    } 

    public function get_kabupaten()
    {
        $id_prov = $this->input->post('id', TRUE);
        $data = $this->auth_model->get_kabupaten($id_prov)->result();
        echo json_encode($data);
    }

   private function _sendemail(){
            $config = [
                'protocol' => 'smtp',
                'smtp_host'=>'ssl://smtp.googlemail.com',
                'smtp_user'=>'kaylashareta12@gmail.com',
                'smtp_pass'=>'ydjnsvccreshzohc',
                'smtp_port'=> 465,
                'mailtype'=>'html',
                'charset'=>'utf-8',
                'newline'=>"\r\n",
            ];

            $this->load->library('email',$config);

            $this->email->from('kaylashareta12@gmail.com','D3 Teknik Informatika UNS');
            $this->email->to('sskaylandn@gmail.com');
            $this->email->subject('Verifikasi');
            $this->email->message('hello');

            if($this->email->send()){
                return true;
            }else{
                echo $this->email->print_debugger();
                die;
            }
            

    }
 

    public function _rules(){
            $this->form_validation->set_rules('uname_user','uname_user','required');
            $this->form_validation->set_rules('pass_user','pass_user','required');
            
    }

	public function logout(){
		$this->session->unset_userdata('uname_user');
        $this->session->unset_userdata('hak_akses');
	
        $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Berhasil Logout <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
        redirect('auth');
	}
}
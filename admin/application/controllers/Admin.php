<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('url','file'));
        $this->load->model('MAdmin');
    }
    public function pesan($tulisan){
        $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">$tulisan</div></div>");
    }
    public function login(){
        if ($this->session->userdata('login_admin') == true) {
            redirect('Admin');
        }
        else {
            $this->load->view('Admin/Login');
            if($_POST){
                $result=$this->MAdmin->validasi_admin($_POST);
                if(!empty($result)){
                    $data_admin=["username" =>$result->username,
                        "password"=>$result->password,
                    ];
                    $this->session->set_userdata('login_admin',true);
                    $this->session->set_userdata('admin',$data_admin);
                    redirect('Admin');
                }

            }
        }
    }
	
	function logout()
    {
        $this->session->sess_destroy();
        redirect('Admin');
    }
	
	public function index()
	{
		 if ($this->session->userdata('login_admin') == true) {
            redirect('Admin/dashboard');
        }
        else {
            redirect('Admin/login');
        }
		
	}
	
	
	function dashboard(){
        if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            //$contents['validuser']=$this->MUser->validUser();
            $this->load->view('Admin/Dashboard');
        }
        else {
            redirect('Admin/login');
        }

    }
	
	
	public function laporanBaru()
	{
		if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['laporanbaru']=$this->MAdmin->laporanBaru();
            $this->load->view('Admin/v_LaporanBaru',$contents);
        }
        else {
            redirect('Admin/login');
        }
	}
	
	 function makelaporanproses($id){
        $this->MAdmin->makelaporanproses($id);
        redirect('Admin/laporanBaru');
    }
	
	function hapuslaporan($id){
        $this->MAdmin->hapuslaporan($id);
        redirect('Admin/laporanBaru');
    }
	
	
		public function laporanProses()
	{
		if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['laporanproses']=$this->MAdmin->laporanProses();
           $this->load->view('Admin/v_LaporanProses',$contents);
        }
        else {
            redirect('Admin/login');
        }
	}
	
	function makelaporanselesai($id){
			$this->MAdmin->makelaporanselesai($id);
			redirect('Admin/laporanProses');
		}
	
	
		public function laporanSelesai()
	{
		if ($this->session->userdata('login_admin') == true) {
            $contents['admin'] = $this->session->userdata('admin');
            $contents['laporanselesai']=$this->MAdmin->laporanSelesai();
           $this->load->view('Admin/v_LaporanSelesai',$contents);
        }
        else {
            redirect('Admin/login');
        }
	}
	
	
	public function berita()
	{
		$this->load->view('Admin/v_Berita');
	}
	
	public function adminmanagement()
	{
		$contents['adm']=$this->MAdmin->adminlist();
		$this->load->view('Admin/v_AdminManagement', $contents);
	}
	
	
	
	
	
	
}

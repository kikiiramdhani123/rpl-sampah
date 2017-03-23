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
            redirect('backoffice');
        }
        else {
            $this->load->view('admin/login');
            if($_POST){
                $result=$this->MAdmin->validasi_admin($_POST);
                if(!empty($result)){
                    $data_admin=["username" =>$result->username,
                        "password"=>$result->password,
                    ];
                    $this->session->set_userdata('login_admin',true);
                    $this->session->set_userdata('admin',$data_admin);
                    redirect('backoffice');
                }

            }
        }
    }
	
	public function index()
	{
		$this->load->view('Admin/Dashboard');
	}
	
	
	
	public function berita()
	{
		$this->load->view('Admin/v_Berita');
	}
	
	
	
	
}

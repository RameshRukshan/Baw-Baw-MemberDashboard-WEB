<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		date_default_timezone_set('Asia/Colombo');

		$this->load->model('Usermodel');
		$this->load->model('Animals');
	}

	function index()
	{
		//$data['incs'] = $this->Animals->getLatestInc();
		$this->load->view('index');
	}

	function sign_in(){
		$this->load->view('sign_in');
	}

	function admin(){
		$this->load->view('admin');
	}

	function profile(){
		$this->load->view('profile');
	}

	function add_animal(){
		$this->load->view('add_animal');
	}

	function forms(){
		$this->load->view('forms');
	}

	function notifications(){
		$this->load->view('notifications');
	}

	function map(){
		$this->load->view('map');
	}



	function loginCheck(){
        
        
        $this->load->model('Usermodel');
        $respond = $this->Usermodel->checkLoginCredentials();

        if ($respond == FALSE){
            $this->session->set_flashdata('lgmsg','Invalid Creadentials, Please Try again...');
            redirect('admin');
        }else{
            $userData = array(
                'RMID'=>$respond->RMID,
                'fName'=>$respond->fName,
                'lName'=>$respond->lName,
                'email'=>$respond->email,
                'phone'=>$respond->phone,
                'address'=>$respond->address,
                'position' =>$respond->position,
                'loginStatus'=>TRUE
            );
            $this->session->set_userdata($userData);
            redirect('');
        }
    }

    function addAnimal(){
    	$this->load->model('Animals');

    	$respond = $this->Animals->insertAnimalData();

    	if($respond){
    		$this->session->set_flashdata('adn','<button class="btn btn-success" disabled> Animal Data added to our system, Thank You...! </button>');
            redirect('add_animal');
    	}else{
    		$this->session->set_flashdata('adn','<button class="btn btn-danger" disabled> Data Adding Faild, please try again...! </button>');
            redirect('add_animal');
    	}

    }

}

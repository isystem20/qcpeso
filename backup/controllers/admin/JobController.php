<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JobController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function JobRegistration()
	{
		$this->load->view('layout/css');
		$this->load->view('layout/top');
		$this->load->view('layout/menu-manage');
		$this->load->view('layout/right');		
		$this->load->view('JobRegistration');
		$this->load->view('layout/js');			
	}

	public function JobMasterlist() {
		$data = array('tables' => TRUE, );
		$this->load->view('layout/css', $data);
		$this->load->view('layout/top');
		$this->load->view('layout/menu-manage');
		$this->load->view('layout/right');
		$this->load->view('JobMasterlist');
		$this->load->view('layout/js', $data);	
	}

	public function PendingJobMasterlist() {
		$data = array('tables' => TRUE, );
		$this->load->view('layout/css', $data);
		$this->load->view('layout/top');
		$this->load->view('layout/menu-manage');
		$this->load->view('layout/right');
		$this->load->view('JobMasterlistPending');
		$this->load->view('layout/js', $data);	
	}


}

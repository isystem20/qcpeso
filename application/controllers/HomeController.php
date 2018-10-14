<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

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

	public function index() {
		$this->load->view('UserLogin');

	}

	public function AdminEmployeeLogin() {
		$this->load->view('EmployeeLogin');
	}



	public function Dashboard()
	{
        $this->load->view('layout/css');
		$this->load->view('layout/top');
		$this->load->view('layout/menu');
		$this->load->view('layout/right');
		$this->load->view('Dashboard');
		$this->load->view('layout/js');	
		
	}

	public function Changelog() {

		$this->load->view('DevelopmentChangeLog');

	}


}

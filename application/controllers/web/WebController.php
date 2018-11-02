<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebController extends CI_Controller {

	public function index() {

		$layout = array('transparentwrapper' => TRUE, );
		$this->load->view('layout/web/1_head');
		$this->load->view('layout/web/2_preloader');
		$this->load->view('layout/web/3_header',$layout);
		$this->load->view('Home');
		$this->load->view('layout/web/5_rightbar');
		$this->load->view('layout/web/6_footer');

	}
	
	
}

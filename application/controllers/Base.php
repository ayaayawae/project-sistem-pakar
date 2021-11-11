<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

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
	public function index()
	{
		$this->home();
	}

	public function home(){
		$this->load->view('pages/home_v.php');
	}

	public function aboutUs(){
		
	}

	public function test(){
		$this->load->view('pages/test_v.php');
		
	}

	public function rules(){
		$this->load->view('pages/rules_v');
	}

	public function result(){
		$this->load->view('pages/result_v');
	}
}

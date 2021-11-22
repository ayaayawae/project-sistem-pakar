<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('pertanyaan_model');
	}

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
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['navbar'] = $this->load->view('components/navbar',NULL,TRUE);
		$this->load->view('pages/home_v.php', $data);
	}

	public function aboutUs(){
		
	}

	public function test(){
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['navbar'] = $this->load->view('components/navbar',NULL,TRUE);
		$data['question'] = $this->pertanyaan_model->getAllQuestions();
		$this->load->view('pages/test_v.php', $data);
	}

	public function rules(){
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['navbar'] = $this->load->view('components/navbar',NULL,TRUE);
		$this->load->view('pages/rules_v', $data);
	}

	public function result(){
		$data['style'] = $this->load->view('include/style',NULL,TRUE);
		$data['navbar'] = $this->load->view('components/navbar',NULL,TRUE);
		$this->load->view('pages/result_v',  $data);
	}
}

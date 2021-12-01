<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Base extends CI_Controller
{
	public function __construct()
	{
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

	public function home()
	{
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['navbar'] = $this->load->view('components/navbar', NULL, TRUE);
		$this->load->view('pages/home_v.php', $data);
	}

	public function aboutUs()
	{
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['navbar'] = $this->load->view('components/navbar', NULL, TRUE);
		$this->load->view('pages/aboutUs_v.php', $data);
	}

	public function test($id_routing)
	{
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['navbar'] = $this->load->view('components/navbar', NULL, TRUE);

		$id_convert = $this->pertanyaan_model->getConvertId($id_routing);
		$id_convert = $id_convert[0]['id_real'];

		if (substr($id_convert, 0, 1) == 'Q') {
			$data['pertanyaan'] = $this->pertanyaan_model->getSpecificQuestion($id_convert);
			$data['pertanyaan'][0]['id_routing'] = $id_routing;
			$this->load->view('pages/test_v.php', $data);
		} else {
			redirect(base_url('index.php/base/result/'.$id_routing));
		}
	}

	public function submitAnswer()
	{
		$id_routing = $this->input->post('id_routing');
		$answer = $this->input->post('answer');
		$next_id_routing = $this->pertanyaan_model->getNextIdRouting($id_routing, $answer);
		redirect(base_url('index.php/base/test/' . $next_id_routing[0]['next']));
	}

	public function rules()
	{
		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['navbar'] = $this->load->view('components/navbar', NULL, TRUE);
		$this->load->view('pages/rules_v', $data);
	}

	public function result($id)
	{	$id_convert = $this->pertanyaan_model->getConvertId($id);
		$id_convert = $id_convert[0]['id_real'];

		$data['style'] = $this->load->view('include/style', NULL, TRUE);
		$data['navbar'] = $this->load->view('components/navbar', NULL, TRUE);

		$data['solusi'] = $this->pertanyaan_model->getSolution($id_convert);
		$this->load->view('pages/result_v',  $data);
	}
}

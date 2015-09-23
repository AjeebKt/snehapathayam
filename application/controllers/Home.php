<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Home class
*/
class Home extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('index');
		$this->load->view('footer');
	}

	public function donate()
	{
		$this->load->view('donate');
		$this->load->view('footer');

	}

	public function about()
	{
		$this->load->view('about');
		$this->load->view('footer');

	}

	public function contact()
	{
		$this->load->view('index');
		$this->load->view('footer');

	}
	public function form_donar()
	{
		$this->load->view('donerForm');
	}

	public function ml_home()
	{
		$this->load->view('ml/index');
		$this->load->view('ml/footer');

	}

	public function ml_donate()
	{
		$this->load->view('ml/donate');
		$this->load->view('ml/footer');

	}

	public function ml_about()
	{
		$this->load->view('ml/about');
		$this->load->view('ml/footer');

	}

	public function ml_contact()
	{
		$this->load->view('ml/contact');
		$this->load->view('ml/footer');
	}

	public function ml_form_donar()
	{
		$this->load->view('ml/donerForm');
	}
}
 ?>
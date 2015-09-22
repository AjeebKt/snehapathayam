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
	}

	public function donate()
	{
		$this->load->view('donate');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function contact()
	{
		$this->load->view('index');
	}

	public function ml_home()
	{
		$this->load->view('ml/index');
	}

	public function ml_donate()
	{
		$this->load->view('ml/donate');
	}

	public function ml_about()
	{
		$this->load->view('ml/about');
	}

	public function ml_contact()
	{
		$this->load->view('ml/contact');
	}
}
 ?>
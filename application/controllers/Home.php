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
}
 ?>
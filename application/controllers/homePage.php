<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homePage extends CI_Controller {

	/**
	*	This is the initial page that gets loaded.
	**/
	public function index()
	{
		$this->load->view('homePage');
	}
}

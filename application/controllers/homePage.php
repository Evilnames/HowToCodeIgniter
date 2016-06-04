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

	/**
	* Example of what happens when you send an item through the URL.
	* http://localhost/howToCodeIgnite/index.php/homePage/testDataSet/{Variable}/
	**/
	public function testDataSet($test)
	{
		$data['test'] = $test;
		$this->load->view('testDataExample', $data);
	}

	/**
	* Home page submits to this page in the url.
	**/
	public function submitData()
	{
		$test = $this->input->get('test');
		echo $test;
	}
}

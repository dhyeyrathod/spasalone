<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay rathod 
*/
class About_us extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('site/about_us_view');
	}
}
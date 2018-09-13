<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author 
*/
class Home extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('site/home_view');
	}
}
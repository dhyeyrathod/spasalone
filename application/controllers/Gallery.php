<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author jay Rathod
*/
class Gallery extends MY_Controller
{	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('site/gallery_view');
	}
}
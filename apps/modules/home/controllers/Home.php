<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->helper("common");
		$this->load->model("Home_model", "Home");
	}

	public function index()
	{

		$result['hot_product'] = $this->Home->hot_product_list();
		$result['featered_product'] = $this->Home->featered_product_list();
		$result['slider'] = $this->Home->slider_list();
		$result['testimonials'] = $this->Home->testimonials_list();
		$this->load->view('home/viewHome', $result);
	}
}
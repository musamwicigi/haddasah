<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('piddiesmart');
	}

	function index(){
	
		$data['main_content'] = 'fe/home';
		$this->load->view('fe/includes/template',$data);
	}
	function men(){
	
		$data['main_content'] = 'fe/men';
		$this->load->view('fe/includes/template',$data);
	}
	function shop(){
	
		$data['main_content'] = 'fe/shop';
		$this->load->view('fe/includes/template',$data);
	}
	function about(){
	
		$data['main_content'] = 'fe/about';
		$this->load->view('fe/includes/template',$data);
	}

	function kidzz(){
	
		$data['main_content'] = 'fe/kidzz';
		$this->load->view('fe/includes/template',$data);
	}
	function product(){
	
		$data['main_content'] = 'fe/product';
		$this->load->view('fe/includes/template',$data);
	}
	function contact(){
	
		$data['main_content'] = 'fe/contact';
		$this->load->view('fe/includes/template',$data);
	}
	function crafts(){
	
		$data['main_content'] = 'fe/crafts';
		$this->load->view('fe/includes/template',$data);
	}
	function blog(){
	
		$data['main_content'] = 'fe/blog';
		$this->load->view('fe/includes/template',$data);
	}
	function single_blog(){
	
		$data['main_content'] = 'fe/single_blog';
		$this->load->view('fe/includes/template',$data);
	}
	
	
}
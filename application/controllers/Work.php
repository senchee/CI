<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Work extends CI_Controller {

    public function index()
    {
        $a['a']="aaaa";
		$a['b']="bbb";
		$a['c']=array("a","b","c");
		//$this->load->library('email');
		//$this->load->view('welcome_message',$a);
		$this->load->view('header');
		$this->load->view('body');
		$this->load->view('footer');
    }
}
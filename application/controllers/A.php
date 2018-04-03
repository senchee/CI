<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A extends CI_Controller {

    public function index()
    {
        $a['a']="aaaa";
		$a['b']="bbb";
		$a['c']=array("a","b","c");
		//$this->load->library('email');
		
		$this->load->view('welcome_message',$a);
		
    }
 
    public function Some()
    {
  
		
        echo "Test 안에 Some  입니다.";
		$this->load->view('welcome_message');
    }
 
    public function Little($parameter)
    {
        echo "Test 안에 Little " . $parameter . " 입니다.";
    }
 
    public function Param($parameter1,$parameter2,$parameter3)
    {
        echo "Test 안에 Param " . $parameter1 . " , " . $parameter2 . " , " . $parameter3 . " ,  입니다.";
    }
}


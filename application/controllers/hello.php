<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by JetBrains PhpStorm.
 * User: Munkh
 * Date: 9/14/13
 * Time: 11:22 PM
 * To change this template use File | Settings | File Templates.
 */

class Hello extends CI_Controller {

    public function index(){
        echo " this is my index function";
    }

    public function one($name){
        $this->load->view("header");
        $data =array("name" => $name);
        $this->load->view("one",$data);
    }

    public function two(){
        echo " two function";
    }
}
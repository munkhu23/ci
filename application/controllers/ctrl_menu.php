<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Munkh
 * Date: 9/22/13
 * Time: 2:10 PM
 * To change this template use File | Settings | File Templates.
 */

class Ctrl_menu extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("model_res_menu");
    }
    public function index(){
        $menu = $this->model_res_menu->get_menu();
        $data_menu = array('menus' => $menu);
        $this->load->view("view_menu", $data_menu);
    }
}
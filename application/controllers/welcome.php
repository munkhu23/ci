<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('model_res_table');
    }

	public function index()
	{
        $query = $this->model_res_table->get_info();

        $data = array('query' => $query);

		$this->load->view('welcome_message', $data);
	}
}
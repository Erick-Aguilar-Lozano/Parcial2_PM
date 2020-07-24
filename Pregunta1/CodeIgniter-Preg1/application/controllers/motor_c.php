<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Controlador de la vista principal, da inicio al flujo e información.
 * @author Erick Aguilar lozano <erickaguilarlozano@gmail.com>
 */
class Motor_c extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('motor_model');
  		$this->load->helper('form');
  		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('motor');
	}
}

/* End of file motor.php */
/* Location: ./application/controllers/motor.php */

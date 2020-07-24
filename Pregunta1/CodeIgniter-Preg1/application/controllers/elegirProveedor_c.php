<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador de la vista principal, da inicio al flujo e información.
 * @author Erick Aguilar lozano <erickaguilarlozano@gmail.com>
 */
class ElegirProveedor_c extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('elegirProveedor_model');
	}
	public function index()
	{
		$data['proceso'] = $this->elegirProveedor_model->obt_codigo_proceso();
		$this->load->view('elegirProveedor', $data);
	}

}

/* End of file ElegirProveedor_c.php */
/* Location: ./application/controllers/ElegirProveedor_c.php */

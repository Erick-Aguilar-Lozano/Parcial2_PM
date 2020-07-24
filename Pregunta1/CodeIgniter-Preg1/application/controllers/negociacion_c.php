<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador de la vista principal, da inicio al flujo e información.
 * @author Erick Aguilar lozano <erickaguilarlozano@gmail.com>
 */
class Negociacion_c extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('negociacion_model');

	}
	public function index()
	{
		$data['proceso'] = $this->negociacion_model->obt_codigo_proceso();
		$this->load->view('negociacion',$data);

	}

}

/* End of file negociacion.php */
/* Location: ./application/controllers/negociacion.php */

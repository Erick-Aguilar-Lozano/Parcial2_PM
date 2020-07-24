<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador de la vista principal, da inicio al flujo e información.
 * @author Erick Aguilar lozano <erickaguilarlozano@gmail.com>
 */
class ListadoNecesidad_c extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('listadoNecesidad_model');
      
	}
	public function index()
	{

		$data['proceso'] = $this->listadoNecesidad_model->obt_codigo_proceso();
		$this->load->view('listadoNecesidad', $data);
	}
}

/* End of file listadoNecesidad.php */
/* Location: ./application/controllers/listadoNecesidad.php */

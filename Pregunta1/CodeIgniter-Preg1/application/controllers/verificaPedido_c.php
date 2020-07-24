<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador de la vista principal, da inicio al flujo e información.
 * @author Erick Aguilar lozano <erickaguilarlozano@gmail.com>
 */
class VerificaPedido_c extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('verificaPedido_model');
	}
	public function index()
	{
		$data['proceso'] = $this->verificaPedido_model->obt_codigo_proceso();
		$this->load->view('verificaPedido', $data);

	}

}

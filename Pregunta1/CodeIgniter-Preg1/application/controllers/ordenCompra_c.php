<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador de la vista principal, da inicio al flujo e información.
 * @author Erick Aguilar lozano <erickaguilarlozano@gmail.com>
 */
class OrdenCompra_c extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('ordenCompra_model');
	}
	public function index()
	{
		$data['proceso'] = $this->ordenCompra_model->obt_codigo_proceso();
		$this->load->view('ordenCompra', $data);

	}

}

/* End of file Pedido_c.php */
/* Location: ./application/controllers/Pedido_c.php */

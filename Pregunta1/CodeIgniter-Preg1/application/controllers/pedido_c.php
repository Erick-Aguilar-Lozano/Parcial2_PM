<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador de la vista principal, da inicio al flujo e información.
 * @author Erick Aguilar lozano <erickaguilarlozano@gmail.com>
 */
class Pedido_c extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('pedido_model');
	}
	public function index()
	{
		$data['proceso'] = $this->pedido_model->obt_codigo_proceso();
		$this->load->view('pedido', $data);

	}

}

/* End of file Pedido_c.php */
/* Location: ./application/controllers/Pedido_c.php */

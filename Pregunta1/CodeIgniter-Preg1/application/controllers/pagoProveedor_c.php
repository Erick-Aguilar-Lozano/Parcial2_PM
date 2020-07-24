<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controlador de la vista principal, da inicio al flujo e información.
 * @author Erick Aguilar lozano <erickaguilarlozano@gmail.com>
 */
class PagoProveedor_c extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('pagoProveedor_model');
	}
	public function index()
	{
		$data['proceso'] = $this->pagoProveedor_model->obt_codigo_proceso();
		$this->load->view('pagoProveedor',$data);
	}
	public function inserta()
	{
			$cuenta = $this->input->post('cuenta');
			$monto = $this->input->post('monto');
			$this->pagoProveedor_model->insertarC($cuenta, $monto);
			//$this->load->view('motor');
			redirect ('PagoProveedor_c');
	}

}

/* End of file Pedido_c.php */
/* Location: ./application/controllers/Pedido_c.php */

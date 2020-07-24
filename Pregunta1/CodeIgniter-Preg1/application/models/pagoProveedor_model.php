<?php defined('BASEPATH') OR exit('No direct script access allowed');
class pagoProveedor_model extends CI_model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function obt_codigo_proceso()
    {
          $id = '8';
          $this->db->select('codProceso');
          $this->db->where('id', $id);
          $consulta = $this->db->get('proceso');
          if($consulta->num_rows() > 0)
              {
                  foreach ($consulta->result() as $dato) {
                      $cod = $dato->codProceso;
                  }
                  return $cod;
              }else
              {
                return array();
              }
    }
    public function insertarC($cuenta, $monto)
  	{
  			$data = array( 'nro_cuenta' => $cuenta ,
                            'monto' => $monto);
  			return $this->db->insert('cuenta_banco', $data);
  	}

}

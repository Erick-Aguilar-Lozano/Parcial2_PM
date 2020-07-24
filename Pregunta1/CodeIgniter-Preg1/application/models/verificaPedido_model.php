<?php defined('BASEPATH') OR exit('No direct script access allowed');
class verificaPedido_model extends CI_model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function obt_codigo_proceso()
    {
          $id = '7';
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

}

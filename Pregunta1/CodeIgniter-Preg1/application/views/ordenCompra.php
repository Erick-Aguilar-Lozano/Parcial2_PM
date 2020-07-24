<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<HTML>
<HEAD>
<TITLE>Motor</TITLE>
</HEAD>
<BODY BGCOLOR="FFFFFF">
<style>
.botonpersonalizado {
text-decoration:none;
font-weight:600;
font-size:20px;
color:#ffffff;
padding-top:20px;
padding-bottom:20px;
padding-left:40px;
padding-right:40px;
background-color:#005BBB;
}
table {
   width: 30%;
   border: 1px solid #000;
}
th, td {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-collapse: collapse;
   padding: 0.3em;
   caption-side: bottom;
}
caption {
   padding: 0.3em;
   color: #fff;
    background: #000;
}
th {
   background: #eee;
}
h3 { color: #FF0000; }
</style>
<HR>
<H1>Motor</H1>
<H1>Optimizacion y mejora para el proceso de compras en linea</H1>
<h3><?php echo 'Proceso : '.$proceso;?></h3>
<br>
<H5>Porfavor llene su orden de compra y continue al siguiente paso<H5>
<p>Nombre:..............................................................................................<br>
<p>Telefono:............................................................................................<br>
  <table>
    <tr>
      <th>Lugar</th>
      <th>Fecha_entrega</th>
      <th>Monto</th>
    </tr>
    <tr>
      <td>La paz-Bolivia</td>
      <td>31/07/20</td>
      <td>300 bs</td>
    </tr>
  </table>
<br><br><br>
<a class="botonpersonalizado" href="<?php echo base_url();?>Pedido_c" >Atras<a/>
<a class="botonpersonalizado" href="<?php echo base_url();?>entregaPedido_c" >Siguiente<a/>
</BODY>
</HTML>

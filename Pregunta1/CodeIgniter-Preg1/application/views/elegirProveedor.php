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
  h3 { color: #FF0000; }
  </style>
<HR>
<H1>Motor</H1>
<H1>Optimizacion y mejora para el proceso de compras en linea</H1>
<h3><?php echo 'Proceso : '.$proceso;?></h3>
<H2>Proveedores:</H2>

<P> <B>* Amazon</B>
<BR>
<P> <B>* Tu tienda en linea</B>
<BR>
<P> <B>* Compra facil</B>
<BR>
<P> <B>* Ketal</B>
<BR>
<P> <B>* Labotecnology</B>
<BR>
<P> <B>* Todo en linea</B>
<BR>
<HR>
<br>
<a class="botonpersonalizado" href="<?php echo base_url();?>Negociacion_c" >Atras<a/>
<a class="botonpersonalizado" href="<?php echo base_url();?>Pedido_c" >Siguiente<a/>
</BODY>
</HTML>

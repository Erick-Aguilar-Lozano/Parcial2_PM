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
<H2>Listado de necesidades:</H2>


<P> <B>* Necesita comprar insumos para el aseo personal(pasta de dientes, jabonsillos, etc.)</B>
<BR>
<P> <B>* Necesita comprar insumos para el aseo del hogar(ace, detergente, basureros, etc.)</B>
<BR>
<P> <B>* Necesita comprar prendas de vestir (pantalones, chamarras, etc.)</B>
<BR>
<P> <B>* Necesita alimentos (frutas, verduras, etc.)</B>
<BR>
<P> <B>* Necesita comprar accesorios para su hogar (sillas, mesas, etc.)</B>
<BR>
<P> <B>* Necesita comprar insumos medicos(antigripales, jarabes, etc.)</B>
<BR>
<HR>
<br>
<a class="botonpersonalizado" href="<?php echo base_url();?>Motor_c" >Atras<a/>
<a class="botonpersonalizado" href="<?php echo base_url();?>Negociacion_c" >Siguiente<a/>
</BODY>
</HTML>

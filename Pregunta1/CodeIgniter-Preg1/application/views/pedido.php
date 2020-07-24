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
<br>
<H2>Mensaje: Su pedido ya esta en cola</H2>
<H5>Porfavor continue al siguiente paso<H5>
<br>
<a class="botonpersonalizado" href="<?php echo base_url();?>elegirProveedor_c" >Atras<a/>
<a class="botonpersonalizado" href="<?php echo base_url();?>ordenCompra_c" >Siguiente<a/>
</BODY>
</HTML>

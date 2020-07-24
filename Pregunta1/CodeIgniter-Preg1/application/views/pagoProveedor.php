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
<H2>Llene los datos para realizar el pago</H2>
<form method="post" action="<?php echo base_url();?>PagoProveedor_c/inserta" >
    <label>Cuenta Bancaria:</label>
    <input id="cuenta" name="cuenta" type="text"></input>
    <label>Monto:</label>
    <input id="monto" name="monto" type="text"></input><br>
    <button type="submit" name="submit" title="Presiona para enviar">Añadir</button>
</form>
<br>
<br>
<br>
<a class="botonpersonalizado" href="<?php echo base_url();?>VerificaPedido_c" >Atras<a/>
</BODY>
</HTML>

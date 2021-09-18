<?php
/** puedes llamar a una variable a partir del nombre que está dentro 
  * de otra
  */

$variable_con_un_nombre = "nombre_nueva_variable";
$nombre_nueva_variable = 10;
echo $$variable_con_un_nombre; 
/**
 * la idea de esto es
 * $$variable_con_un_nombre = $($varible_con_un_nombre)
 * = $("nombre_nueva_variable") = $"nombre_nueva_variable"
 * = $nombre_nueva_variable = 10
 */
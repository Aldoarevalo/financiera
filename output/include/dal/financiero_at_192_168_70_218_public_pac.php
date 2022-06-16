<?php
$dalTablepac = array();
$dalTablepac["idpac"] = array("type"=>3,"varname"=>"idpac", "name" => "idpac", "autoInc" => "1");
$dalTablepac["fecharesolucion"] = array("type"=>7,"varname"=>"fecharesolucion", "name" => "fecharesolucion", "autoInc" => "0");
$dalTablepac["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion", "autoInc" => "0");
$dalTablepac["monto"] = array("type"=>3,"varname"=>"monto", "name" => "monto", "autoInc" => "0");
$dalTablepac["idpac"]["key"]=true;

$dal_info["financiero_at_192_168_70_218_public_pac"] = &$dalTablepac;
?>
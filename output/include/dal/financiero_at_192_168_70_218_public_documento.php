<?php
$dalTabledocumento = array();
$dalTabledocumento["iddocumento"] = array("type"=>3,"varname"=>"iddocumento", "name" => "iddocumento", "autoInc" => "1");
$dalTabledocumento["documento"] = array("type"=>200,"varname"=>"documento", "name" => "documento", "autoInc" => "0");
$dalTabledocumento["descripcion"] = array("type"=>201,"varname"=>"descripcion", "name" => "descripcion", "autoInc" => "0");
$dalTabledocumento["idllamado"] = array("type"=>3,"varname"=>"idllamado", "name" => "idllamado", "autoInc" => "0");
$dalTabledocumento["iddocumento"]["key"]=true;

$dal_info["financiero_at_192_168_70_218_public_documento"] = &$dalTabledocumento;
?>
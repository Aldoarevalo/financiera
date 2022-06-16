<?php
$dalTableestado = array();
$dalTableestado["idestado"] = array("type"=>3,"varname"=>"idestado", "name" => "idestado", "autoInc" => "1");
$dalTableestado["descripcion"] = array("type"=>200,"varname"=>"descripcion", "name" => "descripcion", "autoInc" => "0");
$dalTableestado["idestado"]["key"]=true;

$dal_info["financiero_at_192_168_70_218_public_estado"] = &$dalTableestado;
?>
<?php
$dalTableproveedor = array();
$dalTableproveedor["idproveedor"] = array("type"=>3,"varname"=>"idproveedor", "name" => "idproveedor", "autoInc" => "1");
$dalTableproveedor["proveedor"] = array("type"=>200,"varname"=>"proveedor", "name" => "proveedor", "autoInc" => "0");
$dalTableproveedor["rucnro"] = array("type"=>200,"varname"=>"rucnro", "name" => "rucnro", "autoInc" => "0");
$dalTableproveedor["direccion"] = array("type"=>200,"varname"=>"direccion", "name" => "direccion", "autoInc" => "0");
$dalTableproveedor["telefono"] = array("type"=>3,"varname"=>"telefono", "name" => "telefono", "autoInc" => "0");
$dalTableproveedor["idproveedor"]["key"]=true;

$dal_info["financiero_at_192_168_70_218_public_proveedor"] = &$dalTableproveedor;
?>
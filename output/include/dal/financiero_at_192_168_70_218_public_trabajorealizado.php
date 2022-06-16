<?php
$dalTabletrabajorealizado = array();
$dalTabletrabajorealizado["idtrabajo"] = array("type"=>3,"varname"=>"idtrabajo", "name" => "idtrabajo", "autoInc" => "1");
$dalTabletrabajorealizado["nroorden"] = array("type"=>3,"varname"=>"nroorden", "name" => "nroorden", "autoInc" => "0");
$dalTabletrabajorealizado["fecha"] = array("type"=>135,"varname"=>"fecha", "name" => "fecha", "autoInc" => "0");
$dalTabletrabajorealizado["idproveedor"] = array("type"=>3,"varname"=>"idproveedor", "name" => "idproveedor", "autoInc" => "0");
$dalTabletrabajorealizado["rucnro"] = array("type"=>200,"varname"=>"rucnro", "name" => "rucnro", "autoInc" => "0");
$dalTabletrabajorealizado["tipoorden"] = array("type"=>200,"varname"=>"tipoorden", "name" => "tipoorden", "autoInc" => "0");
$dalTabletrabajorealizado["idtrabajo"]["key"]=true;

$dal_info["financiero_at_192_168_70_218_public_trabajorealizado"] = &$dalTabletrabajorealizado;
?>
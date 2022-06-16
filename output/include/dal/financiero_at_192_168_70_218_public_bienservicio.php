<?php
$dalTablebienservicio = array();
$dalTablebienservicio["idbienservicio"] = array("type"=>3,"varname"=>"idbienservicio", "name" => "idbienservicio", "autoInc" => "0");
$dalTablebienservicio["descripbienesservicios"] = array("type"=>200,"varname"=>"descripbienesservicios", "name" => "descripbienesservicios", "autoInc" => "0");
$dalTablebienservicio["modelo"] = array("type"=>200,"varname"=>"modelo", "name" => "modelo", "autoInc" => "0");
$dalTablebienservicio["marca"] = array("type"=>200,"varname"=>"marca", "name" => "marca", "autoInc" => "0");
$dalTablebienservicio["año"] = array("type"=>3,"varname"=>"a_o", "name" => "año", "autoInc" => "0");
$dalTablebienservicio["impuesto"] = array("type"=>3,"varname"=>"impuesto", "name" => "impuesto", "autoInc" => "0");
$dalTablebienservicio["costo"] = array("type"=>3,"varname"=>"costo", "name" => "costo", "autoInc" => "0");
$dalTablebienservicio["idbienservicio"]["key"]=true;

$dal_info["financiero_at_192_168_70_218_public_bienservicio"] = &$dalTablebienservicio;
?>
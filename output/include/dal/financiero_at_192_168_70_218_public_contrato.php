<?php
$dalTablecontrato = array();
$dalTablecontrato["idcontrato"] = array("type"=>3,"varname"=>"idcontrato", "name" => "idcontrato", "autoInc" => "1");
$dalTablecontrato["idllamado"] = array("type"=>3,"varname"=>"idllamado", "name" => "idllamado", "autoInc" => "0");
$dalTablecontrato["fecha"] = array("type"=>7,"varname"=>"fecha", "name" => "fecha", "autoInc" => "0");
$dalTablecontrato["nrocontrato"] = array("type"=>3,"varname"=>"nrocontrato", "name" => "nrocontrato", "autoInc" => "0");
$dalTablecontrato["documento"] = array("type"=>200,"varname"=>"documento", "name" => "documento", "autoInc" => "0");
$dalTablecontrato["observacion"] = array("type"=>200,"varname"=>"observacion", "name" => "observacion", "autoInc" => "0");
$dalTablecontrato["idcontrato"]["key"]=true;

$dal_info["financiero_at_192_168_70_218_public_contrato"] = &$dalTablecontrato;
?>
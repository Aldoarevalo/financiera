<?php
$dalTableusuarios = array();
$dalTableusuarios["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableusuarios["login"] = array("type"=>200,"varname"=>"login", "name" => "login", "autoInc" => "0");
$dalTableusuarios["password"] = array("type"=>200,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTableusuarios["rol"] = array("type"=>200,"varname"=>"rol", "name" => "rol", "autoInc" => "0");
$dalTableusuarios["id"]["key"]=true;

$dal_info["financiero_at_192_168_70_218_public_usuarios"] = &$dalTableusuarios;
?>
<?php
$topsusers = array();
		$topsusers["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT * FROM v_modalidad;"
	);
		$tables_data["users"][".operations"] = &$topsusers;
?>
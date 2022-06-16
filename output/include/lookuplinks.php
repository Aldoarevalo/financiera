<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["public.llamado"] ) ) {
			$lookupTableLinks["public.llamado"] = array();
		}
		if( !isset( $lookupTableLinks["public.llamado"]["contrato.idllamado"] )) {
			$lookupTableLinks["public.llamado"]["contrato.idllamado"] = array();
		}
		$lookupTableLinks["public.llamado"]["contrato.idllamado"]["edit"] = array("table" => "public.contrato", "field" => "idllamado", "page" => "edit");
		if( !isset( $lookupTableLinks["public.llamado"] ) ) {
			$lookupTableLinks["public.llamado"] = array();
		}
		if( !isset( $lookupTableLinks["public.llamado"]["documento.idllamado"] )) {
			$lookupTableLinks["public.llamado"]["documento.idllamado"] = array();
		}
		$lookupTableLinks["public.llamado"]["documento.idllamado"]["edit"] = array("table" => "public.documento", "field" => "idllamado", "page" => "edit");
		if( !isset( $lookupTableLinks["public.tipollamado"] ) ) {
			$lookupTableLinks["public.tipollamado"] = array();
		}
		if( !isset( $lookupTableLinks["public.tipollamado"]["llamado.idtipollamado"] )) {
			$lookupTableLinks["public.tipollamado"]["llamado.idtipollamado"] = array();
		}
		$lookupTableLinks["public.tipollamado"]["llamado.idtipollamado"]["edit"] = array("table" => "public.llamado", "field" => "idtipollamado", "page" => "edit");
		if( !isset( $lookupTableLinks["public.modalidad"] ) ) {
			$lookupTableLinks["public.modalidad"] = array();
		}
		if( !isset( $lookupTableLinks["public.modalidad"]["llamado.idmodalidad"] )) {
			$lookupTableLinks["public.modalidad"]["llamado.idmodalidad"] = array();
		}
		$lookupTableLinks["public.modalidad"]["llamado.idmodalidad"]["edit"] = array("table" => "public.llamado", "field" => "idmodalidad", "page" => "edit");
		if( !isset( $lookupTableLinks["public.estado"] ) ) {
			$lookupTableLinks["public.estado"] = array();
		}
		if( !isset( $lookupTableLinks["public.estado"]["llamado.idestado"] )) {
			$lookupTableLinks["public.estado"]["llamado.idestado"] = array();
		}
		$lookupTableLinks["public.estado"]["llamado.idestado"]["edit"] = array("table" => "public.llamado", "field" => "idestado", "page" => "edit");
		if( !isset( $lookupTableLinks["public.pac"] ) ) {
			$lookupTableLinks["public.pac"] = array();
		}
		if( !isset( $lookupTableLinks["public.pac"]["llamado.idpac"] )) {
			$lookupTableLinks["public.pac"]["llamado.idpac"] = array();
		}
		$lookupTableLinks["public.pac"]["llamado.idpac"]["edit"] = array("table" => "public.llamado", "field" => "idpac", "page" => "edit");
		if( !isset( $lookupTableLinks["public.trabajorealizado"] ) ) {
			$lookupTableLinks["public.trabajorealizado"] = array();
		}
		if( !isset( $lookupTableLinks["public.trabajorealizado"]["solicituddepago.idtrabajo"] )) {
			$lookupTableLinks["public.trabajorealizado"]["solicituddepago.idtrabajo"] = array();
		}
		$lookupTableLinks["public.trabajorealizado"]["solicituddepago.idtrabajo"]["edit"] = array("table" => "public.solicituddepago", "field" => "idtrabajo", "page" => "edit");
		if( !isset( $lookupTableLinks["public.estadodepago"] ) ) {
			$lookupTableLinks["public.estadodepago"] = array();
		}
		if( !isset( $lookupTableLinks["public.estadodepago"]["solicituddepago.idestadopago"] )) {
			$lookupTableLinks["public.estadodepago"]["solicituddepago.idestadopago"] = array();
		}
		$lookupTableLinks["public.estadodepago"]["solicituddepago.idestadopago"]["edit"] = array("table" => "public.solicituddepago", "field" => "idestadopago", "page" => "edit");
		if( !isset( $lookupTableLinks["public.ordendeserviciocabezera"] ) ) {
			$lookupTableLinks["public.ordendeserviciocabezera"] = array();
		}
		if( !isset( $lookupTableLinks["public.ordendeserviciocabezera"]["trabajorealizado.nroorden"] )) {
			$lookupTableLinks["public.ordendeserviciocabezera"]["trabajorealizado.nroorden"] = array();
		}
		$lookupTableLinks["public.ordendeserviciocabezera"]["trabajorealizado.nroorden"]["edit"] = array("table" => "public.trabajorealizado", "field" => "nroorden", "page" => "edit");
		if( !isset( $lookupTableLinks["public.proveedor"] ) ) {
			$lookupTableLinks["public.proveedor"] = array();
		}
		if( !isset( $lookupTableLinks["public.proveedor"]["trabajorealizado.idproveedor"] )) {
			$lookupTableLinks["public.proveedor"]["trabajorealizado.idproveedor"] = array();
		}
		$lookupTableLinks["public.proveedor"]["trabajorealizado.idproveedor"]["edit"] = array("table" => "public.trabajorealizado", "field" => "idproveedor", "page" => "edit");
		if( !isset( $lookupTableLinks["public.contrato"] ) ) {
			$lookupTableLinks["public.contrato"] = array();
		}
		if( !isset( $lookupTableLinks["public.contrato"]["ordendeserviciocabezera.idcontrato"] )) {
			$lookupTableLinks["public.contrato"]["ordendeserviciocabezera.idcontrato"] = array();
		}
		$lookupTableLinks["public.contrato"]["ordendeserviciocabezera.idcontrato"]["edit"] = array("table" => "public.ordendeserviciocabezera", "field" => "idcontrato", "page" => "edit");
		if( !isset( $lookupTableLinks["public.proveedor"] ) ) {
			$lookupTableLinks["public.proveedor"] = array();
		}
		if( !isset( $lookupTableLinks["public.proveedor"]["ordendeserviciocabezera.idproveedor"] )) {
			$lookupTableLinks["public.proveedor"]["ordendeserviciocabezera.idproveedor"] = array();
		}
		$lookupTableLinks["public.proveedor"]["ordendeserviciocabezera.idproveedor"]["edit"] = array("table" => "public.ordendeserviciocabezera", "field" => "idproveedor", "page" => "edit");
		if( !isset( $lookupTableLinks["public.ordendeserviciocabezera"] ) ) {
			$lookupTableLinks["public.ordendeserviciocabezera"] = array();
		}
		if( !isset( $lookupTableLinks["public.ordendeserviciocabezera"]["ordendeserviciodetalle.nroorden"] )) {
			$lookupTableLinks["public.ordendeserviciocabezera"]["ordendeserviciodetalle.nroorden"] = array();
		}
		$lookupTableLinks["public.ordendeserviciocabezera"]["ordendeserviciodetalle.nroorden"]["edit"] = array("table" => "public.ordendeserviciodetalle", "field" => "nroorden", "page" => "edit");
		if( !isset( $lookupTableLinks["public.bienservicio"] ) ) {
			$lookupTableLinks["public.bienservicio"] = array();
		}
		if( !isset( $lookupTableLinks["public.bienservicio"]["ordendeserviciodetalle.idbienservicio"] )) {
			$lookupTableLinks["public.bienservicio"]["ordendeserviciodetalle.idbienservicio"] = array();
		}
		$lookupTableLinks["public.bienservicio"]["ordendeserviciodetalle.idbienservicio"]["edit"] = array("table" => "public.ordendeserviciodetalle", "field" => "idbienservicio", "page" => "edit");
}

?>
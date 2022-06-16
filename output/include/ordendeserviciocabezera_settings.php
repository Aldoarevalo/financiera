<?php
$tdataordendeserviciocabezera = array();
$tdataordendeserviciocabezera[".searchableFields"] = array();
$tdataordendeserviciocabezera[".ShortName"] = "ordendeserviciocabezera";
$tdataordendeserviciocabezera[".OwnerID"] = "";
$tdataordendeserviciocabezera[".OriginalTable"] = "public.ordendeserviciocabezera";


$tdataordendeserviciocabezera[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataordendeserviciocabezera[".originalPagesByType"] = $tdataordendeserviciocabezera[".pagesByType"];
$tdataordendeserviciocabezera[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataordendeserviciocabezera[".originalPages"] = $tdataordendeserviciocabezera[".pages"];
$tdataordendeserviciocabezera[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataordendeserviciocabezera[".originalDefaultPages"] = $tdataordendeserviciocabezera[".defaultPages"];

//	field labels
$fieldLabelsordendeserviciocabezera = array();
$fieldToolTipsordendeserviciocabezera = array();
$pageTitlesordendeserviciocabezera = array();
$placeHoldersordendeserviciocabezera = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsordendeserviciocabezera["Spanish"] = array();
	$fieldToolTipsordendeserviciocabezera["Spanish"] = array();
	$placeHoldersordendeserviciocabezera["Spanish"] = array();
	$pageTitlesordendeserviciocabezera["Spanish"] = array();
	$fieldLabelsordendeserviciocabezera["Spanish"]["nroorden"] = "numero de orden";
	$fieldToolTipsordendeserviciocabezera["Spanish"]["nroorden"] = "";
	$placeHoldersordendeserviciocabezera["Spanish"]["nroorden"] = "";
	$fieldLabelsordendeserviciocabezera["Spanish"]["idcontrato"] = "Numero de contrato";
	$fieldToolTipsordendeserviciocabezera["Spanish"]["idcontrato"] = "";
	$placeHoldersordendeserviciocabezera["Spanish"]["idcontrato"] = "";
	$fieldLabelsordendeserviciocabezera["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsordendeserviciocabezera["Spanish"]["fecha"] = "";
	$placeHoldersordendeserviciocabezera["Spanish"]["fecha"] = "";
	$fieldLabelsordendeserviciocabezera["Spanish"]["nivel"] = "Nivel";
	$fieldToolTipsordendeserviciocabezera["Spanish"]["nivel"] = "";
	$placeHoldersordendeserviciocabezera["Spanish"]["nivel"] = "";
	$fieldLabelsordendeserviciocabezera["Spanish"]["entidad"] = "Entidad";
	$fieldToolTipsordendeserviciocabezera["Spanish"]["entidad"] = "";
	$placeHoldersordendeserviciocabezera["Spanish"]["entidad"] = "";
	$fieldLabelsordendeserviciocabezera["Spanish"]["tipodeprocedimiento"] = "Tipo de procedimiento";
	$fieldToolTipsordendeserviciocabezera["Spanish"]["tipodeprocedimiento"] = "";
	$placeHoldersordendeserviciocabezera["Spanish"]["tipodeprocedimiento"] = "";
	$fieldLabelsordendeserviciocabezera["Spanish"]["descripcionnombre"] = "Descripcion nombre";
	$fieldToolTipsordendeserviciocabezera["Spanish"]["descripcionnombre"] = "";
	$placeHoldersordendeserviciocabezera["Spanish"]["descripcionnombre"] = "";
	$fieldLabelsordendeserviciocabezera["Spanish"]["rucnro"] = "Ruc Numero del Proveedor";
	$fieldToolTipsordendeserviciocabezera["Spanish"]["rucnro"] = "";
	$placeHoldersordendeserviciocabezera["Spanish"]["rucnro"] = "";
	$fieldLabelsordendeserviciocabezera["Spanish"]["tipoorden"] = "Tipo de orden";
	$fieldToolTipsordendeserviciocabezera["Spanish"]["tipoorden"] = "";
	$placeHoldersordendeserviciocabezera["Spanish"]["tipoorden"] = "";
	$fieldLabelsordendeserviciocabezera["Spanish"]["idproveedor"] = "Proveedor";
	$fieldToolTipsordendeserviciocabezera["Spanish"]["idproveedor"] = "";
	$placeHoldersordendeserviciocabezera["Spanish"]["idproveedor"] = "";
	if (count($fieldToolTipsordendeserviciocabezera["Spanish"]))
		$tdataordendeserviciocabezera[".isUseToolTips"] = true;
}


	$tdataordendeserviciocabezera[".NCSearch"] = true;



$tdataordendeserviciocabezera[".shortTableName"] = "ordendeserviciocabezera";
$tdataordendeserviciocabezera[".nSecOptions"] = 0;

$tdataordendeserviciocabezera[".mainTableOwnerID"] = "";
$tdataordendeserviciocabezera[".entityType"] = 0;
$tdataordendeserviciocabezera[".connId"] = "financiero_at_192_168_70_218";


$tdataordendeserviciocabezera[".strOriginalTableName"] = "public.ordendeserviciocabezera";

	



$tdataordendeserviciocabezera[".showAddInPopup"] = false;

$tdataordendeserviciocabezera[".showEditInPopup"] = false;

$tdataordendeserviciocabezera[".showViewInPopup"] = false;

$tdataordendeserviciocabezera[".listAjax"] = false;
//	temporary
//$tdataordendeserviciocabezera[".listAjax"] = false;

	$tdataordendeserviciocabezera[".audit"] = false;

	$tdataordendeserviciocabezera[".locking"] = false;


$pages = $tdataordendeserviciocabezera[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataordendeserviciocabezera[".edit"] = true;
	$tdataordendeserviciocabezera[".afterEditAction"] = 1;
	$tdataordendeserviciocabezera[".closePopupAfterEdit"] = 1;
	$tdataordendeserviciocabezera[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataordendeserviciocabezera[".add"] = true;
$tdataordendeserviciocabezera[".afterAddAction"] = 1;
$tdataordendeserviciocabezera[".closePopupAfterAdd"] = 1;
$tdataordendeserviciocabezera[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataordendeserviciocabezera[".list"] = true;
}



$tdataordendeserviciocabezera[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataordendeserviciocabezera[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataordendeserviciocabezera[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataordendeserviciocabezera[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataordendeserviciocabezera[".printFriendly"] = true;
}



$tdataordendeserviciocabezera[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataordendeserviciocabezera[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataordendeserviciocabezera[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataordendeserviciocabezera[".isUseAjaxSuggest"] = true;

$tdataordendeserviciocabezera[".rowHighlite"] = true;





$tdataordendeserviciocabezera[".ajaxCodeSnippetAdded"] = false;

$tdataordendeserviciocabezera[".buttonsAdded"] = false;

$tdataordendeserviciocabezera[".addPageEvents"] = false;

// use timepicker for search panel
$tdataordendeserviciocabezera[".isUseTimeForSearch"] = false;


$tdataordendeserviciocabezera[".badgeColor"] = "6493EA";


$tdataordendeserviciocabezera[".allSearchFields"] = array();
$tdataordendeserviciocabezera[".filterFields"] = array();
$tdataordendeserviciocabezera[".requiredSearchFields"] = array();

$tdataordendeserviciocabezera[".googleLikeFields"] = array();
$tdataordendeserviciocabezera[".googleLikeFields"][] = "nroorden";
$tdataordendeserviciocabezera[".googleLikeFields"][] = "idcontrato";
$tdataordendeserviciocabezera[".googleLikeFields"][] = "fecha";
$tdataordendeserviciocabezera[".googleLikeFields"][] = "nivel";
$tdataordendeserviciocabezera[".googleLikeFields"][] = "entidad";
$tdataordendeserviciocabezera[".googleLikeFields"][] = "tipodeprocedimiento";
$tdataordendeserviciocabezera[".googleLikeFields"][] = "descripcionnombre";
$tdataordendeserviciocabezera[".googleLikeFields"][] = "idproveedor";
$tdataordendeserviciocabezera[".googleLikeFields"][] = "rucnro";
$tdataordendeserviciocabezera[".googleLikeFields"][] = "tipoorden";



$tdataordendeserviciocabezera[".tableType"] = "list";

$tdataordendeserviciocabezera[".printerPageOrientation"] = 0;
$tdataordendeserviciocabezera[".nPrinterPageScale"] = 100;

$tdataordendeserviciocabezera[".nPrinterSplitRecords"] = 40;

$tdataordendeserviciocabezera[".geocodingEnabled"] = false;










$tdataordendeserviciocabezera[".pageSize"] = 20;

$tdataordendeserviciocabezera[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataordendeserviciocabezera[".strOrderBy"] = $tstrOrderBy;

$tdataordendeserviciocabezera[".orderindexes"] = array();


$tdataordendeserviciocabezera[".sqlHead"] = "SELECT \"nroorden\",  	\"idcontrato\",  	\"fecha\",  	\"nivel\",  	\"entidad\",  	\"tipodeprocedimiento\",  	\"descripcionnombre\",  	\"idproveedor\",  	\"rucnro\",  	\"tipoorden\"";
$tdataordendeserviciocabezera[".sqlFrom"] = "FROM \"public\".\"ordendeserviciocabezera\"";
$tdataordendeserviciocabezera[".sqlWhereExpr"] = "";
$tdataordendeserviciocabezera[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataordendeserviciocabezera[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataordendeserviciocabezera[".arrGroupsPerPage"] = $arrGPP;

$tdataordendeserviciocabezera[".highlightSearchResults"] = true;

$tableKeysordendeserviciocabezera = array();
$tableKeysordendeserviciocabezera[] = "nroorden";
$tdataordendeserviciocabezera[".Keys"] = $tableKeysordendeserviciocabezera;


$tdataordendeserviciocabezera[".hideMobileList"] = array();




//	nroorden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nroorden";
	$fdata["GoodName"] = "nroorden";
	$fdata["ownerTable"] = "public.ordendeserviciocabezera";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocabezera","nroorden");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "nroorden";

		$fdata["sourceSingle"] = "nroorden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"nroorden\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataordendeserviciocabezera["nroorden"] = $fdata;
		$tdataordendeserviciocabezera[".searchableFields"][] = "nroorden";
//	idcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idcontrato";
	$fdata["GoodName"] = "idcontrato";
	$fdata["ownerTable"] = "public.ordendeserviciocabezera";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocabezera","idcontrato");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idcontrato";

		$fdata["sourceSingle"] = "idcontrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idcontrato\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idcontrato";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idcontrato";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataordendeserviciocabezera["idcontrato"] = $fdata;
		$tdataordendeserviciocabezera[".searchableFields"][] = "idcontrato";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "public.ordendeserviciocabezera";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocabezera","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

		$fdata["sourceSingle"] = "fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"fecha\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataordendeserviciocabezera["fecha"] = $fdata;
		$tdataordendeserviciocabezera[".searchableFields"][] = "fecha";
//	nivel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nivel";
	$fdata["GoodName"] = "nivel";
	$fdata["ownerTable"] = "public.ordendeserviciocabezera";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocabezera","nivel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nivel";

		$fdata["sourceSingle"] = "nivel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"nivel\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataordendeserviciocabezera["nivel"] = $fdata;
		$tdataordendeserviciocabezera[".searchableFields"][] = "nivel";
//	entidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "entidad";
	$fdata["GoodName"] = "entidad";
	$fdata["ownerTable"] = "public.ordendeserviciocabezera";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocabezera","entidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "entidad";

		$fdata["sourceSingle"] = "entidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"entidad\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataordendeserviciocabezera["entidad"] = $fdata;
		$tdataordendeserviciocabezera[".searchableFields"][] = "entidad";
//	tipodeprocedimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tipodeprocedimiento";
	$fdata["GoodName"] = "tipodeprocedimiento";
	$fdata["ownerTable"] = "public.ordendeserviciocabezera";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocabezera","tipodeprocedimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipodeprocedimiento";

		$fdata["sourceSingle"] = "tipodeprocedimiento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"tipodeprocedimiento\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataordendeserviciocabezera["tipodeprocedimiento"] = $fdata;
		$tdataordendeserviciocabezera[".searchableFields"][] = "tipodeprocedimiento";
//	descripcionnombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "descripcionnombre";
	$fdata["GoodName"] = "descripcionnombre";
	$fdata["ownerTable"] = "public.ordendeserviciocabezera";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocabezera","descripcionnombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcionnombre";

		$fdata["sourceSingle"] = "descripcionnombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"descripcionnombre\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataordendeserviciocabezera["descripcionnombre"] = $fdata;
		$tdataordendeserviciocabezera[".searchableFields"][] = "descripcionnombre";
//	idproveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "idproveedor";
	$fdata["GoodName"] = "idproveedor";
	$fdata["ownerTable"] = "public.ordendeserviciocabezera";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocabezera","idproveedor");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idproveedor";

		$fdata["sourceSingle"] = "idproveedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idproveedor\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.proveedor";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"rucnro", 'lookupF'=>"rucnro");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idproveedor";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "proveedor";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataordendeserviciocabezera["idproveedor"] = $fdata;
		$tdataordendeserviciocabezera[".searchableFields"][] = "idproveedor";
//	rucnro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rucnro";
	$fdata["GoodName"] = "rucnro";
	$fdata["ownerTable"] = "public.ordendeserviciocabezera";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocabezera","rucnro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rucnro";

		$fdata["sourceSingle"] = "rucnro";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"rucnro\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataordendeserviciocabezera["rucnro"] = $fdata;
		$tdataordendeserviciocabezera[".searchableFields"][] = "rucnro";
//	tipoorden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "tipoorden";
	$fdata["GoodName"] = "tipoorden";
	$fdata["ownerTable"] = "public.ordendeserviciocabezera";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocabezera","tipoorden");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipoorden";

		$fdata["sourceSingle"] = "tipoorden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"tipoorden\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataordendeserviciocabezera["tipoorden"] = $fdata;
		$tdataordendeserviciocabezera[".searchableFields"][] = "tipoorden";


$tables_data["public.ordendeserviciocabezera"]=&$tdataordendeserviciocabezera;
$field_labels["public_ordendeserviciocabezera"] = &$fieldLabelsordendeserviciocabezera;
$fieldToolTips["public_ordendeserviciocabezera"] = &$fieldToolTipsordendeserviciocabezera;
$placeHolders["public_ordendeserviciocabezera"] = &$placeHoldersordendeserviciocabezera;
$page_titles["public_ordendeserviciocabezera"] = &$pageTitlesordendeserviciocabezera;


changeTextControlsToDate( "public.ordendeserviciocabezera" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.ordendeserviciocabezera"] = array();
//	public.ordendeserviciodetalle
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.ordendeserviciodetalle";
		$detailsParam["dOriginalTable"] = "public.ordendeserviciodetalle";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ordendeserviciodetalle";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_ordendeserviciodetalle");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.ordendeserviciocabezera"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.ordendeserviciocabezera"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.ordendeserviciocabezera"][$dIndex]["masterKeys"][]="nroorden";

				$detailsTablesData["public.ordendeserviciocabezera"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.ordendeserviciocabezera"][$dIndex]["detailKeys"][]="nroorden";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.ordendeserviciocabezera"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.ordendeserviciocabezera"][0] = $masterParams;
				$masterTablesData["public.ordendeserviciocabezera"][0]["masterKeys"] = array();
	$masterTablesData["public.ordendeserviciocabezera"][0]["masterKeys"][]="idcontrato";
				$masterTablesData["public.ordendeserviciocabezera"][0]["detailKeys"] = array();
	$masterTablesData["public.ordendeserviciocabezera"][0]["detailKeys"][]="idcontrato";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.proveedor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.proveedor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "proveedor";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.ordendeserviciocabezera"][1] = $masterParams;
				$masterTablesData["public.ordendeserviciocabezera"][1]["masterKeys"] = array();
	$masterTablesData["public.ordendeserviciocabezera"][1]["masterKeys"][]="idproveedor";
				$masterTablesData["public.ordendeserviciocabezera"][1]["detailKeys"] = array();
	$masterTablesData["public.ordendeserviciocabezera"][1]["detailKeys"][]="idproveedor";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ordendeserviciocabezera()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"nroorden\",  	\"idcontrato\",  	\"fecha\",  	\"nivel\",  	\"entidad\",  	\"tipodeprocedimiento\",  	\"descripcionnombre\",  	\"idproveedor\",  	\"rucnro\",  	\"tipoorden\"";
$proto0["m_strFrom"] = "FROM \"public\".\"ordendeserviciocabezera\"";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "nroorden",
	"m_strTable" => "public.ordendeserviciocabezera",
	"m_srcTableName" => "public.ordendeserviciocabezera"
));

$proto6["m_sql"] = "\"nroorden\"";
$proto6["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idcontrato",
	"m_strTable" => "public.ordendeserviciocabezera",
	"m_srcTableName" => "public.ordendeserviciocabezera"
));

$proto8["m_sql"] = "\"idcontrato\"";
$proto8["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "public.ordendeserviciocabezera",
	"m_srcTableName" => "public.ordendeserviciocabezera"
));

$proto10["m_sql"] = "\"fecha\"";
$proto10["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nivel",
	"m_strTable" => "public.ordendeserviciocabezera",
	"m_srcTableName" => "public.ordendeserviciocabezera"
));

$proto12["m_sql"] = "\"nivel\"";
$proto12["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "entidad",
	"m_strTable" => "public.ordendeserviciocabezera",
	"m_srcTableName" => "public.ordendeserviciocabezera"
));

$proto14["m_sql"] = "\"entidad\"";
$proto14["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tipodeprocedimiento",
	"m_strTable" => "public.ordendeserviciocabezera",
	"m_srcTableName" => "public.ordendeserviciocabezera"
));

$proto16["m_sql"] = "\"tipodeprocedimiento\"";
$proto16["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcionnombre",
	"m_strTable" => "public.ordendeserviciocabezera",
	"m_srcTableName" => "public.ordendeserviciocabezera"
));

$proto18["m_sql"] = "\"descripcionnombre\"";
$proto18["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "idproveedor",
	"m_strTable" => "public.ordendeserviciocabezera",
	"m_srcTableName" => "public.ordendeserviciocabezera"
));

$proto20["m_sql"] = "\"idproveedor\"";
$proto20["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "rucnro",
	"m_strTable" => "public.ordendeserviciocabezera",
	"m_srcTableName" => "public.ordendeserviciocabezera"
));

$proto22["m_sql"] = "\"rucnro\"";
$proto22["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "tipoorden",
	"m_strTable" => "public.ordendeserviciocabezera",
	"m_srcTableName" => "public.ordendeserviciocabezera"
));

$proto24["m_sql"] = "\"tipoorden\"";
$proto24["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "public.ordendeserviciocabezera";
$proto27["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "nroorden";
$proto27["m_columns"][] = "idcontrato";
$proto27["m_columns"][] = "fecha";
$proto27["m_columns"][] = "nivel";
$proto27["m_columns"][] = "entidad";
$proto27["m_columns"][] = "tipodeprocedimiento";
$proto27["m_columns"][] = "descripcionnombre";
$proto27["m_columns"][] = "idproveedor";
$proto27["m_columns"][] = "rucnro";
$proto27["m_columns"][] = "tipoorden";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "\"public\".\"ordendeserviciocabezera\"";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "public.ordendeserviciocabezera";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.ordendeserviciocabezera";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ordendeserviciocabezera = createSqlQuery_ordendeserviciocabezera();


	
		;

										

$tdataordendeserviciocabezera[".sqlquery"] = $queryData_ordendeserviciocabezera;



$tdataordendeserviciocabezera[".hasEvents"] = false;

?>
<?php
$tdatatrabajorealizado = array();
$tdatatrabajorealizado[".searchableFields"] = array();
$tdatatrabajorealizado[".ShortName"] = "trabajorealizado";
$tdatatrabajorealizado[".OwnerID"] = "";
$tdatatrabajorealizado[".OriginalTable"] = "public.trabajorealizado";


$tdatatrabajorealizado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatrabajorealizado[".originalPagesByType"] = $tdatatrabajorealizado[".pagesByType"];
$tdatatrabajorealizado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatrabajorealizado[".originalPages"] = $tdatatrabajorealizado[".pages"];
$tdatatrabajorealizado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatrabajorealizado[".originalDefaultPages"] = $tdatatrabajorealizado[".defaultPages"];

//	field labels
$fieldLabelstrabajorealizado = array();
$fieldToolTipstrabajorealizado = array();
$pageTitlestrabajorealizado = array();
$placeHolderstrabajorealizado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstrabajorealizado["Spanish"] = array();
	$fieldToolTipstrabajorealizado["Spanish"] = array();
	$placeHolderstrabajorealizado["Spanish"] = array();
	$pageTitlestrabajorealizado["Spanish"] = array();
	$fieldLabelstrabajorealizado["Spanish"]["idtrabajo"] = "Idtrabajo";
	$fieldToolTipstrabajorealizado["Spanish"]["idtrabajo"] = "";
	$placeHolderstrabajorealizado["Spanish"]["idtrabajo"] = "";
	$fieldLabelstrabajorealizado["Spanish"]["nroorden"] = "Numero de Orden";
	$fieldToolTipstrabajorealizado["Spanish"]["nroorden"] = "";
	$placeHolderstrabajorealizado["Spanish"]["nroorden"] = "";
	$fieldLabelstrabajorealizado["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipstrabajorealizado["Spanish"]["fecha"] = "";
	$placeHolderstrabajorealizado["Spanish"]["fecha"] = "";
	$fieldLabelstrabajorealizado["Spanish"]["idproveedor"] = "Proveedor";
	$fieldToolTipstrabajorealizado["Spanish"]["idproveedor"] = "";
	$placeHolderstrabajorealizado["Spanish"]["idproveedor"] = "";
	$fieldLabelstrabajorealizado["Spanish"]["rucnro"] = "Ruc numero";
	$fieldToolTipstrabajorealizado["Spanish"]["rucnro"] = "";
	$placeHolderstrabajorealizado["Spanish"]["rucnro"] = "";
	$fieldLabelstrabajorealizado["Spanish"]["tipoorden"] = "Tipo de orden";
	$fieldToolTipstrabajorealizado["Spanish"]["tipoorden"] = "";
	$placeHolderstrabajorealizado["Spanish"]["tipoorden"] = "";
	if (count($fieldToolTipstrabajorealizado["Spanish"]))
		$tdatatrabajorealizado[".isUseToolTips"] = true;
}


	$tdatatrabajorealizado[".NCSearch"] = true;



$tdatatrabajorealizado[".shortTableName"] = "trabajorealizado";
$tdatatrabajorealizado[".nSecOptions"] = 0;

$tdatatrabajorealizado[".mainTableOwnerID"] = "";
$tdatatrabajorealizado[".entityType"] = 0;
$tdatatrabajorealizado[".connId"] = "financiero_at_192_168_70_218";


$tdatatrabajorealizado[".strOriginalTableName"] = "public.trabajorealizado";

	



$tdatatrabajorealizado[".showAddInPopup"] = false;

$tdatatrabajorealizado[".showEditInPopup"] = false;

$tdatatrabajorealizado[".showViewInPopup"] = false;

$tdatatrabajorealizado[".listAjax"] = false;
//	temporary
//$tdatatrabajorealizado[".listAjax"] = false;

	$tdatatrabajorealizado[".audit"] = false;

	$tdatatrabajorealizado[".locking"] = false;


$pages = $tdatatrabajorealizado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatrabajorealizado[".edit"] = true;
	$tdatatrabajorealizado[".afterEditAction"] = 1;
	$tdatatrabajorealizado[".closePopupAfterEdit"] = 1;
	$tdatatrabajorealizado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatrabajorealizado[".add"] = true;
$tdatatrabajorealizado[".afterAddAction"] = 1;
$tdatatrabajorealizado[".closePopupAfterAdd"] = 1;
$tdatatrabajorealizado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatrabajorealizado[".list"] = true;
}



$tdatatrabajorealizado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatrabajorealizado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatrabajorealizado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatrabajorealizado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatrabajorealizado[".printFriendly"] = true;
}



$tdatatrabajorealizado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatrabajorealizado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatrabajorealizado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatrabajorealizado[".isUseAjaxSuggest"] = true;

$tdatatrabajorealizado[".rowHighlite"] = true;





$tdatatrabajorealizado[".ajaxCodeSnippetAdded"] = false;

$tdatatrabajorealizado[".buttonsAdded"] = false;

$tdatatrabajorealizado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatrabajorealizado[".isUseTimeForSearch"] = false;


$tdatatrabajorealizado[".badgeColor"] = "5F9EA0";


$tdatatrabajorealizado[".allSearchFields"] = array();
$tdatatrabajorealizado[".filterFields"] = array();
$tdatatrabajorealizado[".requiredSearchFields"] = array();

$tdatatrabajorealizado[".googleLikeFields"] = array();
$tdatatrabajorealizado[".googleLikeFields"][] = "idtrabajo";
$tdatatrabajorealizado[".googleLikeFields"][] = "nroorden";
$tdatatrabajorealizado[".googleLikeFields"][] = "fecha";
$tdatatrabajorealizado[".googleLikeFields"][] = "idproveedor";
$tdatatrabajorealizado[".googleLikeFields"][] = "rucnro";
$tdatatrabajorealizado[".googleLikeFields"][] = "tipoorden";



$tdatatrabajorealizado[".tableType"] = "list";

$tdatatrabajorealizado[".printerPageOrientation"] = 0;
$tdatatrabajorealizado[".nPrinterPageScale"] = 100;

$tdatatrabajorealizado[".nPrinterSplitRecords"] = 40;

$tdatatrabajorealizado[".geocodingEnabled"] = false;










$tdatatrabajorealizado[".pageSize"] = 20;

$tdatatrabajorealizado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatrabajorealizado[".strOrderBy"] = $tstrOrderBy;

$tdatatrabajorealizado[".orderindexes"] = array();


$tdatatrabajorealizado[".sqlHead"] = "SELECT \"idtrabajo\",  	\"nroorden\",  	\"fecha\",  	\"idproveedor\",  	\"rucnro\",  	\"tipoorden\"";
$tdatatrabajorealizado[".sqlFrom"] = "FROM \"public\".\"trabajorealizado\"";
$tdatatrabajorealizado[".sqlWhereExpr"] = "";
$tdatatrabajorealizado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatrabajorealizado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatrabajorealizado[".arrGroupsPerPage"] = $arrGPP;

$tdatatrabajorealizado[".highlightSearchResults"] = true;

$tableKeystrabajorealizado = array();
$tableKeystrabajorealizado[] = "idtrabajo";
$tdatatrabajorealizado[".Keys"] = $tableKeystrabajorealizado;


$tdatatrabajorealizado[".hideMobileList"] = array();




//	idtrabajo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idtrabajo";
	$fdata["GoodName"] = "idtrabajo";
	$fdata["ownerTable"] = "public.trabajorealizado";
	$fdata["Label"] = GetFieldLabel("public_trabajorealizado","idtrabajo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idtrabajo";

		$fdata["sourceSingle"] = "idtrabajo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idtrabajo\"";

	
	
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


	$tdatatrabajorealizado["idtrabajo"] = $fdata;
		$tdatatrabajorealizado[".searchableFields"][] = "idtrabajo";
//	nroorden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nroorden";
	$fdata["GoodName"] = "nroorden";
	$fdata["ownerTable"] = "public.trabajorealizado";
	$fdata["Label"] = GetFieldLabel("public_trabajorealizado","nroorden");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.ordendeserviciocabezera";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nroorden";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nivel";

	

	
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


	$tdatatrabajorealizado["nroorden"] = $fdata;
		$tdatatrabajorealizado[".searchableFields"][] = "nroorden";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "public.trabajorealizado";
	$fdata["Label"] = GetFieldLabel("public_trabajorealizado","fecha");
	$fdata["FieldType"] = 135;


	
	
			

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


	$tdatatrabajorealizado["fecha"] = $fdata;
		$tdatatrabajorealizado[".searchableFields"][] = "fecha";
//	idproveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idproveedor";
	$fdata["GoodName"] = "idproveedor";
	$fdata["ownerTable"] = "public.trabajorealizado";
	$fdata["Label"] = GetFieldLabel("public_trabajorealizado","idproveedor");
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
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


	$tdatatrabajorealizado["idproveedor"] = $fdata;
		$tdatatrabajorealizado[".searchableFields"][] = "idproveedor";
//	rucnro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rucnro";
	$fdata["GoodName"] = "rucnro";
	$fdata["ownerTable"] = "public.trabajorealizado";
	$fdata["Label"] = GetFieldLabel("public_trabajorealizado","rucnro");
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


	$tdatatrabajorealizado["rucnro"] = $fdata;
		$tdatatrabajorealizado[".searchableFields"][] = "rucnro";
//	tipoorden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "tipoorden";
	$fdata["GoodName"] = "tipoorden";
	$fdata["ownerTable"] = "public.trabajorealizado";
	$fdata["Label"] = GetFieldLabel("public_trabajorealizado","tipoorden");
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


	$tdatatrabajorealizado["tipoorden"] = $fdata;
		$tdatatrabajorealizado[".searchableFields"][] = "tipoorden";


$tables_data["public.trabajorealizado"]=&$tdatatrabajorealizado;
$field_labels["public_trabajorealizado"] = &$fieldLabelstrabajorealizado;
$fieldToolTips["public_trabajorealizado"] = &$fieldToolTipstrabajorealizado;
$placeHolders["public_trabajorealizado"] = &$placeHolderstrabajorealizado;
$page_titles["public_trabajorealizado"] = &$pageTitlestrabajorealizado;


changeTextControlsToDate( "public.trabajorealizado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.trabajorealizado"] = array();
//	public.solicituddepago
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.solicituddepago";
		$detailsParam["dOriginalTable"] = "public.solicituddepago";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "solicituddepago";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_solicituddepago");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.trabajorealizado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.trabajorealizado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.trabajorealizado"][$dIndex]["masterKeys"][]="idtrabajo";

				$detailsTablesData["public.trabajorealizado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.trabajorealizado"][$dIndex]["detailKeys"][]="idtrabajo";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.trabajorealizado"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.proveedor";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.proveedor";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "proveedor";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.trabajorealizado"][0] = $masterParams;
				$masterTablesData["public.trabajorealizado"][0]["masterKeys"] = array();
	$masterTablesData["public.trabajorealizado"][0]["masterKeys"][]="idproveedor";
				$masterTablesData["public.trabajorealizado"][0]["detailKeys"] = array();
	$masterTablesData["public.trabajorealizado"][0]["detailKeys"][]="idproveedor";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_trabajorealizado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idtrabajo\",  	\"nroorden\",  	\"fecha\",  	\"idproveedor\",  	\"rucnro\",  	\"tipoorden\"";
$proto0["m_strFrom"] = "FROM \"public\".\"trabajorealizado\"";
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
	"m_strName" => "idtrabajo",
	"m_strTable" => "public.trabajorealizado",
	"m_srcTableName" => "public.trabajorealizado"
));

$proto6["m_sql"] = "\"idtrabajo\"";
$proto6["m_srcTableName"] = "public.trabajorealizado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nroorden",
	"m_strTable" => "public.trabajorealizado",
	"m_srcTableName" => "public.trabajorealizado"
));

$proto8["m_sql"] = "\"nroorden\"";
$proto8["m_srcTableName"] = "public.trabajorealizado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "public.trabajorealizado",
	"m_srcTableName" => "public.trabajorealizado"
));

$proto10["m_sql"] = "\"fecha\"";
$proto10["m_srcTableName"] = "public.trabajorealizado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idproveedor",
	"m_strTable" => "public.trabajorealizado",
	"m_srcTableName" => "public.trabajorealizado"
));

$proto12["m_sql"] = "\"idproveedor\"";
$proto12["m_srcTableName"] = "public.trabajorealizado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rucnro",
	"m_strTable" => "public.trabajorealizado",
	"m_srcTableName" => "public.trabajorealizado"
));

$proto14["m_sql"] = "\"rucnro\"";
$proto14["m_srcTableName"] = "public.trabajorealizado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "tipoorden",
	"m_strTable" => "public.trabajorealizado",
	"m_srcTableName" => "public.trabajorealizado"
));

$proto16["m_sql"] = "\"tipoorden\"";
$proto16["m_srcTableName"] = "public.trabajorealizado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.trabajorealizado";
$proto19["m_srcTableName"] = "public.trabajorealizado";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idtrabajo";
$proto19["m_columns"][] = "nroorden";
$proto19["m_columns"][] = "fecha";
$proto19["m_columns"][] = "idproveedor";
$proto19["m_columns"][] = "rucnro";
$proto19["m_columns"][] = "tipoorden";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".\"trabajorealizado\"";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.trabajorealizado";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.trabajorealizado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_trabajorealizado = createSqlQuery_trabajorealizado();


	
		;

						

$tdatatrabajorealizado[".sqlquery"] = $queryData_trabajorealizado;



$tdatatrabajorealizado[".hasEvents"] = false;

?>
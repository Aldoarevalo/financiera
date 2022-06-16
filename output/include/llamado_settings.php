<?php
$tdatallamado = array();
$tdatallamado[".searchableFields"] = array();
$tdatallamado[".ShortName"] = "llamado";
$tdatallamado[".OwnerID"] = "";
$tdatallamado[".OriginalTable"] = "public.llamado";


$tdatallamado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatallamado[".originalPagesByType"] = $tdatallamado[".pagesByType"];
$tdatallamado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatallamado[".originalPages"] = $tdatallamado[".pages"];
$tdatallamado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatallamado[".originalDefaultPages"] = $tdatallamado[".defaultPages"];

//	field labels
$fieldLabelsllamado = array();
$fieldToolTipsllamado = array();
$pageTitlesllamado = array();
$placeHoldersllamado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsllamado["Spanish"] = array();
	$fieldToolTipsllamado["Spanish"] = array();
	$placeHoldersllamado["Spanish"] = array();
	$pageTitlesllamado["Spanish"] = array();
	$fieldLabelsllamado["Spanish"]["idllamado"] = "Idllamado";
	$fieldToolTipsllamado["Spanish"]["idllamado"] = "";
	$placeHoldersllamado["Spanish"]["idllamado"] = "";
	$fieldLabelsllamado["Spanish"]["nroid"] = "Nroid";
	$fieldToolTipsllamado["Spanish"]["nroid"] = "";
	$placeHoldersllamado["Spanish"]["nroid"] = "ver a que id corresponde ya hay una id para esta tabla";
	$fieldLabelsllamado["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipsllamado["Spanish"]["fecha"] = "";
	$placeHoldersllamado["Spanish"]["fecha"] = "";
	$fieldLabelsllamado["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsllamado["Spanish"]["nombre"] = "";
	$placeHoldersllamado["Spanish"]["nombre"] = "";
	$fieldLabelsllamado["Spanish"]["idtipollamado"] = "Tipo de llamado";
	$fieldToolTipsllamado["Spanish"]["idtipollamado"] = "";
	$placeHoldersllamado["Spanish"]["idtipollamado"] = "";
	$fieldLabelsllamado["Spanish"]["idmodalidad"] = "Modalidad";
	$fieldToolTipsllamado["Spanish"]["idmodalidad"] = "";
	$placeHoldersllamado["Spanish"]["idmodalidad"] = "";
	$fieldLabelsllamado["Spanish"]["idestado"] = "Estado";
	$fieldToolTipsllamado["Spanish"]["idestado"] = "";
	$placeHoldersllamado["Spanish"]["idestado"] = "";
	$fieldLabelsllamado["Spanish"]["ruc"] = "Ruc";
	$fieldToolTipsllamado["Spanish"]["ruc"] = "";
	$placeHoldersllamado["Spanish"]["ruc"] = "";
	$fieldLabelsllamado["Spanish"]["idpac"] = "Pac";
	$fieldToolTipsllamado["Spanish"]["idpac"] = "";
	$placeHoldersllamado["Spanish"]["idpac"] = "";
	if (count($fieldToolTipsllamado["Spanish"]))
		$tdatallamado[".isUseToolTips"] = true;
}


	$tdatallamado[".NCSearch"] = true;



$tdatallamado[".shortTableName"] = "llamado";
$tdatallamado[".nSecOptions"] = 0;

$tdatallamado[".mainTableOwnerID"] = "";
$tdatallamado[".entityType"] = 0;
$tdatallamado[".connId"] = "financiero_at_192_168_70_218";


$tdatallamado[".strOriginalTableName"] = "public.llamado";

	



$tdatallamado[".showAddInPopup"] = false;

$tdatallamado[".showEditInPopup"] = false;

$tdatallamado[".showViewInPopup"] = false;

$tdatallamado[".listAjax"] = false;
//	temporary
//$tdatallamado[".listAjax"] = false;

	$tdatallamado[".audit"] = false;

	$tdatallamado[".locking"] = false;


$pages = $tdatallamado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatallamado[".edit"] = true;
	$tdatallamado[".afterEditAction"] = 1;
	$tdatallamado[".closePopupAfterEdit"] = 1;
	$tdatallamado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatallamado[".add"] = true;
$tdatallamado[".afterAddAction"] = 1;
$tdatallamado[".closePopupAfterAdd"] = 1;
$tdatallamado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatallamado[".list"] = true;
}



$tdatallamado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatallamado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatallamado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatallamado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatallamado[".printFriendly"] = true;
}



$tdatallamado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatallamado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatallamado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatallamado[".isUseAjaxSuggest"] = true;

$tdatallamado[".rowHighlite"] = true;





$tdatallamado[".ajaxCodeSnippetAdded"] = false;

$tdatallamado[".buttonsAdded"] = false;

$tdatallamado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatallamado[".isUseTimeForSearch"] = false;


$tdatallamado[".badgeColor"] = "6493EA";


$tdatallamado[".allSearchFields"] = array();
$tdatallamado[".filterFields"] = array();
$tdatallamado[".requiredSearchFields"] = array();

$tdatallamado[".googleLikeFields"] = array();
$tdatallamado[".googleLikeFields"][] = "idllamado";
$tdatallamado[".googleLikeFields"][] = "nroid";
$tdatallamado[".googleLikeFields"][] = "fecha";
$tdatallamado[".googleLikeFields"][] = "nombre";
$tdatallamado[".googleLikeFields"][] = "idtipollamado";
$tdatallamado[".googleLikeFields"][] = "idmodalidad";
$tdatallamado[".googleLikeFields"][] = "idestado";
$tdatallamado[".googleLikeFields"][] = "ruc";
$tdatallamado[".googleLikeFields"][] = "idpac";



$tdatallamado[".tableType"] = "list";

$tdatallamado[".printerPageOrientation"] = 0;
$tdatallamado[".nPrinterPageScale"] = 100;

$tdatallamado[".nPrinterSplitRecords"] = 40;

$tdatallamado[".geocodingEnabled"] = false;










$tdatallamado[".pageSize"] = 20;

$tdatallamado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatallamado[".strOrderBy"] = $tstrOrderBy;

$tdatallamado[".orderindexes"] = array();


$tdatallamado[".sqlHead"] = "SELECT \"idllamado\",  	\"nroid\",  	\"fecha\",  	\"nombre\",  	\"idtipollamado\",  	\"idmodalidad\",  	\"idestado\",  	\"ruc\",  	\"idpac\"";
$tdatallamado[".sqlFrom"] = "FROM \"public\".\"llamado\"";
$tdatallamado[".sqlWhereExpr"] = "";
$tdatallamado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatallamado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatallamado[".arrGroupsPerPage"] = $arrGPP;

$tdatallamado[".highlightSearchResults"] = true;

$tableKeysllamado = array();
$tableKeysllamado[] = "idllamado";
$tdatallamado[".Keys"] = $tableKeysllamado;


$tdatallamado[".hideMobileList"] = array();




//	idllamado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idllamado";
	$fdata["GoodName"] = "idllamado";
	$fdata["ownerTable"] = "public.llamado";
	$fdata["Label"] = GetFieldLabel("public_llamado","idllamado");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idllamado";

		$fdata["sourceSingle"] = "idllamado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idllamado\"";

	
	
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


	$tdatallamado["idllamado"] = $fdata;
		$tdatallamado[".searchableFields"][] = "idllamado";
//	nroid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nroid";
	$fdata["GoodName"] = "nroid";
	$fdata["ownerTable"] = "public.llamado";
	$fdata["Label"] = GetFieldLabel("public_llamado","nroid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nroid";

		$fdata["sourceSingle"] = "nroid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"nroid\"";

	
	
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


	$tdatallamado["nroid"] = $fdata;
		$tdatallamado[".searchableFields"][] = "nroid";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "public.llamado";
	$fdata["Label"] = GetFieldLabel("public_llamado","fecha");
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


	$tdatallamado["fecha"] = $fdata;
		$tdatallamado[".searchableFields"][] = "fecha";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "public.llamado";
	$fdata["Label"] = GetFieldLabel("public_llamado","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"nombre\"";

	
	
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


	$tdatallamado["nombre"] = $fdata;
		$tdatallamado[".searchableFields"][] = "nombre";
//	idtipollamado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "idtipollamado";
	$fdata["GoodName"] = "idtipollamado";
	$fdata["ownerTable"] = "public.llamado";
	$fdata["Label"] = GetFieldLabel("public_llamado","idtipollamado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idtipollamado";

		$fdata["sourceSingle"] = "idtipollamado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idtipollamado\"";

	
	
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
	$edata["LookupTable"] = "public.tipollamado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idtipollamado";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdatallamado["idtipollamado"] = $fdata;
		$tdatallamado[".searchableFields"][] = "idtipollamado";
//	idmodalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "idmodalidad";
	$fdata["GoodName"] = "idmodalidad";
	$fdata["ownerTable"] = "public.llamado";
	$fdata["Label"] = GetFieldLabel("public_llamado","idmodalidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idmodalidad";

		$fdata["sourceSingle"] = "idmodalidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idmodalidad\"";

	
	
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
	$edata["LookupTable"] = "public.modalidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idmodalidad";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdatallamado["idmodalidad"] = $fdata;
		$tdatallamado[".searchableFields"][] = "idmodalidad";
//	idestado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "idestado";
	$fdata["GoodName"] = "idestado";
	$fdata["ownerTable"] = "public.llamado";
	$fdata["Label"] = GetFieldLabel("public_llamado","idestado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idestado";

		$fdata["sourceSingle"] = "idestado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idestado\"";

	
	
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
	$edata["LookupTable"] = "public.estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idestado";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdatallamado["idestado"] = $fdata;
		$tdatallamado[".searchableFields"][] = "idestado";
//	ruc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ruc";
	$fdata["GoodName"] = "ruc";
	$fdata["ownerTable"] = "public.llamado";
	$fdata["Label"] = GetFieldLabel("public_llamado","ruc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ruc";

		$fdata["sourceSingle"] = "ruc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"ruc\"";

	
	
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


	$tdatallamado["ruc"] = $fdata;
		$tdatallamado[".searchableFields"][] = "ruc";
//	idpac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "idpac";
	$fdata["GoodName"] = "idpac";
	$fdata["ownerTable"] = "public.llamado";
	$fdata["Label"] = GetFieldLabel("public_llamado","idpac");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idpac";

		$fdata["sourceSingle"] = "idpac";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idpac\"";

	
	
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
	$edata["LookupTable"] = "public.pac";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idpac";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripcion";

	

	
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


	$tdatallamado["idpac"] = $fdata;
		$tdatallamado[".searchableFields"][] = "idpac";


$tables_data["public.llamado"]=&$tdatallamado;
$field_labels["public_llamado"] = &$fieldLabelsllamado;
$fieldToolTips["public_llamado"] = &$fieldToolTipsllamado;
$placeHolders["public_llamado"] = &$placeHoldersllamado;
$page_titles["public_llamado"] = &$pageTitlesllamado;


changeTextControlsToDate( "public.llamado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.llamado"] = array();
//	public.contrato
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.contrato";
		$detailsParam["dOriginalTable"] = "public.contrato";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_contrato");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.llamado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.llamado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.llamado"][$dIndex]["masterKeys"][]="idllamado";

				$detailsTablesData["public.llamado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.llamado"][$dIndex]["detailKeys"][]="idllamado";
//	public.documento
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.documento";
		$detailsParam["dOriginalTable"] = "public.documento";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "documento";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_documento");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.llamado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.llamado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.llamado"][$dIndex]["masterKeys"][]="idllamado";

				$detailsTablesData["public.llamado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.llamado"][$dIndex]["detailKeys"][]="idllamado";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.llamado"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.estado";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.estado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "estado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.llamado"][0] = $masterParams;
				$masterTablesData["public.llamado"][0]["masterKeys"] = array();
	$masterTablesData["public.llamado"][0]["masterKeys"][]="idestado";
				$masterTablesData["public.llamado"][0]["detailKeys"] = array();
	$masterTablesData["public.llamado"][0]["detailKeys"][]="idestado";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.modalidad";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.modalidad";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "modalidad";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.llamado"][1] = $masterParams;
				$masterTablesData["public.llamado"][1]["masterKeys"] = array();
	$masterTablesData["public.llamado"][1]["masterKeys"][]="idmodalidad";
				$masterTablesData["public.llamado"][1]["detailKeys"] = array();
	$masterTablesData["public.llamado"][1]["detailKeys"][]="idmodalidad";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.pac";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.pac";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pac";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.llamado"][2] = $masterParams;
				$masterTablesData["public.llamado"][2]["masterKeys"] = array();
	$masterTablesData["public.llamado"][2]["masterKeys"][]="idpac";
				$masterTablesData["public.llamado"][2]["detailKeys"] = array();
	$masterTablesData["public.llamado"][2]["detailKeys"][]="idpac";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.tipollamado";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.tipollamado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tipollamado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.llamado"][3] = $masterParams;
				$masterTablesData["public.llamado"][3]["masterKeys"] = array();
	$masterTablesData["public.llamado"][3]["masterKeys"][]="idtipollamado";
				$masterTablesData["public.llamado"][3]["detailKeys"] = array();
	$masterTablesData["public.llamado"][3]["detailKeys"][]="idtipollamado";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_llamado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idllamado\",  	\"nroid\",  	\"fecha\",  	\"nombre\",  	\"idtipollamado\",  	\"idmodalidad\",  	\"idestado\",  	\"ruc\",  	\"idpac\"";
$proto0["m_strFrom"] = "FROM \"public\".\"llamado\"";
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
	"m_strName" => "idllamado",
	"m_strTable" => "public.llamado",
	"m_srcTableName" => "public.llamado"
));

$proto6["m_sql"] = "\"idllamado\"";
$proto6["m_srcTableName"] = "public.llamado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nroid",
	"m_strTable" => "public.llamado",
	"m_srcTableName" => "public.llamado"
));

$proto8["m_sql"] = "\"nroid\"";
$proto8["m_srcTableName"] = "public.llamado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "public.llamado",
	"m_srcTableName" => "public.llamado"
));

$proto10["m_sql"] = "\"fecha\"";
$proto10["m_srcTableName"] = "public.llamado";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "public.llamado",
	"m_srcTableName" => "public.llamado"
));

$proto12["m_sql"] = "\"nombre\"";
$proto12["m_srcTableName"] = "public.llamado";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "idtipollamado",
	"m_strTable" => "public.llamado",
	"m_srcTableName" => "public.llamado"
));

$proto14["m_sql"] = "\"idtipollamado\"";
$proto14["m_srcTableName"] = "public.llamado";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "idmodalidad",
	"m_strTable" => "public.llamado",
	"m_srcTableName" => "public.llamado"
));

$proto16["m_sql"] = "\"idmodalidad\"";
$proto16["m_srcTableName"] = "public.llamado";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "idestado",
	"m_strTable" => "public.llamado",
	"m_srcTableName" => "public.llamado"
));

$proto18["m_sql"] = "\"idestado\"";
$proto18["m_srcTableName"] = "public.llamado";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ruc",
	"m_strTable" => "public.llamado",
	"m_srcTableName" => "public.llamado"
));

$proto20["m_sql"] = "\"ruc\"";
$proto20["m_srcTableName"] = "public.llamado";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "idpac",
	"m_strTable" => "public.llamado",
	"m_srcTableName" => "public.llamado"
));

$proto22["m_sql"] = "\"idpac\"";
$proto22["m_srcTableName"] = "public.llamado";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "public.llamado";
$proto25["m_srcTableName"] = "public.llamado";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "idllamado";
$proto25["m_columns"][] = "nroid";
$proto25["m_columns"][] = "fecha";
$proto25["m_columns"][] = "nombre";
$proto25["m_columns"][] = "idtipollamado";
$proto25["m_columns"][] = "idmodalidad";
$proto25["m_columns"][] = "idestado";
$proto25["m_columns"][] = "ruc";
$proto25["m_columns"][] = "idpac";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "\"public\".\"llamado\"";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "public.llamado";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.llamado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_llamado = createSqlQuery_llamado();


	
		;

									

$tdatallamado[".sqlquery"] = $queryData_llamado;



$tdatallamado[".hasEvents"] = false;

?>
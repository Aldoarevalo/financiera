<?php
$tdatacontrato1 = array();
$tdatacontrato1[".searchableFields"] = array();
$tdatacontrato1[".ShortName"] = "contrato1";
$tdatacontrato1[".OwnerID"] = "";
$tdatacontrato1[".OriginalTable"] = "public.contrato";


$tdatacontrato1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato1[".originalPagesByType"] = $tdatacontrato1[".pagesByType"];
$tdatacontrato1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato1[".originalPages"] = $tdatacontrato1[".pages"];
$tdatacontrato1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato1[".originalDefaultPages"] = $tdatacontrato1[".defaultPages"];

//	field labels
$fieldLabelscontrato1 = array();
$fieldToolTipscontrato1 = array();
$pageTitlescontrato1 = array();
$placeHolderscontrato1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato1["Spanish"] = array();
	$fieldToolTipscontrato1["Spanish"] = array();
	$placeHolderscontrato1["Spanish"] = array();
	$pageTitlescontrato1["Spanish"] = array();
	$fieldLabelscontrato1["Spanish"]["idcontrato"] = "Idcontrato";
	$fieldToolTipscontrato1["Spanish"]["idcontrato"] = "";
	$placeHolderscontrato1["Spanish"]["idcontrato"] = "";
	$fieldLabelscontrato1["Spanish"]["idllamado"] = "Idllamado";
	$fieldToolTipscontrato1["Spanish"]["idllamado"] = "";
	$placeHolderscontrato1["Spanish"]["idllamado"] = "";
	$fieldLabelscontrato1["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipscontrato1["Spanish"]["fecha"] = "";
	$placeHolderscontrato1["Spanish"]["fecha"] = "";
	$fieldLabelscontrato1["Spanish"]["nrocontrato"] = "Nrocontrato";
	$fieldToolTipscontrato1["Spanish"]["nrocontrato"] = "";
	$placeHolderscontrato1["Spanish"]["nrocontrato"] = "";
	$fieldLabelscontrato1["Spanish"]["documento"] = "Documento";
	$fieldToolTipscontrato1["Spanish"]["documento"] = "";
	$placeHolderscontrato1["Spanish"]["documento"] = "";
	$fieldLabelscontrato1["Spanish"]["observacion"] = "Observacion";
	$fieldToolTipscontrato1["Spanish"]["observacion"] = "";
	$placeHolderscontrato1["Spanish"]["observacion"] = "";
	if (count($fieldToolTipscontrato1["Spanish"]))
		$tdatacontrato1[".isUseToolTips"] = true;
}


	$tdatacontrato1[".NCSearch"] = true;



$tdatacontrato1[".shortTableName"] = "contrato1";
$tdatacontrato1[".nSecOptions"] = 0;

$tdatacontrato1[".mainTableOwnerID"] = "";
$tdatacontrato1[".entityType"] = 1;
$tdatacontrato1[".connId"] = "financiero_at_192_168_70_218";


$tdatacontrato1[".strOriginalTableName"] = "public.contrato";

	



$tdatacontrato1[".showAddInPopup"] = false;

$tdatacontrato1[".showEditInPopup"] = false;

$tdatacontrato1[".showViewInPopup"] = false;

$tdatacontrato1[".listAjax"] = false;
//	temporary
//$tdatacontrato1[".listAjax"] = false;

	$tdatacontrato1[".audit"] = false;

	$tdatacontrato1[".locking"] = false;


$pages = $tdatacontrato1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato1[".edit"] = true;
	$tdatacontrato1[".afterEditAction"] = 1;
	$tdatacontrato1[".closePopupAfterEdit"] = 1;
	$tdatacontrato1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato1[".add"] = true;
$tdatacontrato1[".afterAddAction"] = 1;
$tdatacontrato1[".closePopupAfterAdd"] = 1;
$tdatacontrato1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato1[".list"] = true;
}



$tdatacontrato1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato1[".printFriendly"] = true;
}



$tdatacontrato1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato1[".isUseAjaxSuggest"] = true;

$tdatacontrato1[".rowHighlite"] = true;





$tdatacontrato1[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato1[".buttonsAdded"] = false;

$tdatacontrato1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato1[".isUseTimeForSearch"] = false;


$tdatacontrato1[".badgeColor"] = "008B8B";


$tdatacontrato1[".allSearchFields"] = array();
$tdatacontrato1[".filterFields"] = array();
$tdatacontrato1[".requiredSearchFields"] = array();

$tdatacontrato1[".googleLikeFields"] = array();
$tdatacontrato1[".googleLikeFields"][] = "idcontrato";
$tdatacontrato1[".googleLikeFields"][] = "idllamado";
$tdatacontrato1[".googleLikeFields"][] = "fecha";
$tdatacontrato1[".googleLikeFields"][] = "nrocontrato";
$tdatacontrato1[".googleLikeFields"][] = "documento";
$tdatacontrato1[".googleLikeFields"][] = "observacion";



$tdatacontrato1[".tableType"] = "list";

$tdatacontrato1[".printerPageOrientation"] = 0;
$tdatacontrato1[".nPrinterPageScale"] = 100;

$tdatacontrato1[".nPrinterSplitRecords"] = 40;

$tdatacontrato1[".geocodingEnabled"] = false;










$tdatacontrato1[".pageSize"] = 20;

$tdatacontrato1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato1[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato1[".orderindexes"] = array();


$tdatacontrato1[".sqlHead"] = "SELECT \"idcontrato\",  	\"idllamado\",  	\"fecha\",  	\"nrocontrato\",  	\"documento\",  	\"observacion\"";
$tdatacontrato1[".sqlFrom"] = "FROM \"public\".\"contrato\"";
$tdatacontrato1[".sqlWhereExpr"] = "";
$tdatacontrato1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato1[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato1[".highlightSearchResults"] = true;

$tableKeyscontrato1 = array();
$tableKeyscontrato1[] = "idcontrato";
$tdatacontrato1[".Keys"] = $tableKeyscontrato1;


$tdatacontrato1[".hideMobileList"] = array();




//	idcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idcontrato";
	$fdata["GoodName"] = "idcontrato";
	$fdata["ownerTable"] = "public.contrato";
	$fdata["Label"] = GetFieldLabel("public_contrato1","idcontrato");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatacontrato1["idcontrato"] = $fdata;
		$tdatacontrato1[".searchableFields"][] = "idcontrato";
//	idllamado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idllamado";
	$fdata["GoodName"] = "idllamado";
	$fdata["ownerTable"] = "public.contrato";
	$fdata["Label"] = GetFieldLabel("public_contrato1","idllamado");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.llamado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idllamado";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "pac";

	

	
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


	$tdatacontrato1["idllamado"] = $fdata;
		$tdatacontrato1[".searchableFields"][] = "idllamado";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "public.contrato";
	$fdata["Label"] = GetFieldLabel("public_contrato1","fecha");
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


	$tdatacontrato1["fecha"] = $fdata;
		$tdatacontrato1[".searchableFields"][] = "fecha";
//	nrocontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nrocontrato";
	$fdata["GoodName"] = "nrocontrato";
	$fdata["ownerTable"] = "public.contrato";
	$fdata["Label"] = GetFieldLabel("public_contrato1","nrocontrato");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nrocontrato";

		$fdata["sourceSingle"] = "nrocontrato";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"nrocontrato\"";

	
	
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


	$tdatacontrato1["nrocontrato"] = $fdata;
		$tdatacontrato1[".searchableFields"][] = "nrocontrato";
//	documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "documento";
	$fdata["GoodName"] = "documento";
	$fdata["ownerTable"] = "public.contrato";
	$fdata["Label"] = GetFieldLabel("public_contrato1","documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "documento";

		$fdata["sourceSingle"] = "documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"documento\"";

	
	
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


	$tdatacontrato1["documento"] = $fdata;
		$tdatacontrato1[".searchableFields"][] = "documento";
//	observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "observacion";
	$fdata["GoodName"] = "observacion";
	$fdata["ownerTable"] = "public.contrato";
	$fdata["Label"] = GetFieldLabel("public_contrato1","observacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observacion";

		$fdata["sourceSingle"] = "observacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"observacion\"";

	
	
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


	$tdatacontrato1["observacion"] = $fdata;
		$tdatacontrato1[".searchableFields"][] = "observacion";


$tables_data["public.contrato1"]=&$tdatacontrato1;
$field_labels["public_contrato1"] = &$fieldLabelscontrato1;
$fieldToolTips["public_contrato1"] = &$fieldToolTipscontrato1;
$placeHolders["public_contrato1"] = &$placeHolderscontrato1;
$page_titles["public_contrato1"] = &$pageTitlescontrato1;


changeTextControlsToDate( "public.contrato1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.contrato1"] = array();
//	public.ordendeserviciocabezera
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.ordendeserviciocabezera";
		$detailsParam["dOriginalTable"] = "public.ordendeserviciocabezera";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "ordendeserviciocabezera";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_ordendeserviciocabezera");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.contrato1"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.contrato1"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.contrato1"][$dIndex]["masterKeys"][]="idcontrato";

				$detailsTablesData["public.contrato1"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.contrato1"][$dIndex]["detailKeys"][]="idcontrato";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.contrato1"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.llamado";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.llamado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "llamado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.contrato1"][0] = $masterParams;
				$masterTablesData["public.contrato1"][0]["masterKeys"] = array();
	$masterTablesData["public.contrato1"][0]["masterKeys"][]="idllamado";
				$masterTablesData["public.contrato1"][0]["detailKeys"] = array();
	$masterTablesData["public.contrato1"][0]["detailKeys"][]="idllamado";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idcontrato\",  	\"idllamado\",  	\"fecha\",  	\"nrocontrato\",  	\"documento\",  	\"observacion\"";
$proto0["m_strFrom"] = "FROM \"public\".\"contrato\"";
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
	"m_strName" => "idcontrato",
	"m_strTable" => "public.contrato",
	"m_srcTableName" => "public.contrato1"
));

$proto6["m_sql"] = "\"idcontrato\"";
$proto6["m_srcTableName"] = "public.contrato1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idllamado",
	"m_strTable" => "public.contrato",
	"m_srcTableName" => "public.contrato1"
));

$proto8["m_sql"] = "\"idllamado\"";
$proto8["m_srcTableName"] = "public.contrato1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "public.contrato",
	"m_srcTableName" => "public.contrato1"
));

$proto10["m_sql"] = "\"fecha\"";
$proto10["m_srcTableName"] = "public.contrato1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nrocontrato",
	"m_strTable" => "public.contrato",
	"m_srcTableName" => "public.contrato1"
));

$proto12["m_sql"] = "\"nrocontrato\"";
$proto12["m_srcTableName"] = "public.contrato1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "documento",
	"m_strTable" => "public.contrato",
	"m_srcTableName" => "public.contrato1"
));

$proto14["m_sql"] = "\"documento\"";
$proto14["m_srcTableName"] = "public.contrato1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion",
	"m_strTable" => "public.contrato",
	"m_srcTableName" => "public.contrato1"
));

$proto16["m_sql"] = "\"observacion\"";
$proto16["m_srcTableName"] = "public.contrato1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "public.contrato";
$proto19["m_srcTableName"] = "public.contrato1";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idcontrato";
$proto19["m_columns"][] = "idllamado";
$proto19["m_columns"][] = "fecha";
$proto19["m_columns"][] = "nrocontrato";
$proto19["m_columns"][] = "documento";
$proto19["m_columns"][] = "observacion";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "\"public\".\"contrato\"";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "public.contrato1";
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
$proto0["m_srcTableName"]="public.contrato1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato1 = createSqlQuery_contrato1();


	
		;

						

$tdatacontrato1[".sqlquery"] = $queryData_contrato1;



$tdatacontrato1[".hasEvents"] = false;

?>
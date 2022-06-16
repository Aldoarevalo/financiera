<?php
$tdatabienservicio = array();
$tdatabienservicio[".searchableFields"] = array();
$tdatabienservicio[".ShortName"] = "bienservicio";
$tdatabienservicio[".OwnerID"] = "";
$tdatabienservicio[".OriginalTable"] = "public.bienservicio";


$tdatabienservicio[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabienservicio[".originalPagesByType"] = $tdatabienservicio[".pagesByType"];
$tdatabienservicio[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabienservicio[".originalPages"] = $tdatabienservicio[".pages"];
$tdatabienservicio[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabienservicio[".originalDefaultPages"] = $tdatabienservicio[".defaultPages"];

//	field labels
$fieldLabelsbienservicio = array();
$fieldToolTipsbienservicio = array();
$pageTitlesbienservicio = array();
$placeHoldersbienservicio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsbienservicio["Spanish"] = array();
	$fieldToolTipsbienservicio["Spanish"] = array();
	$placeHoldersbienservicio["Spanish"] = array();
	$pageTitlesbienservicio["Spanish"] = array();
	$fieldLabelsbienservicio["Spanish"]["idbienservicio"] = "Idbienservicio";
	$fieldToolTipsbienservicio["Spanish"]["idbienservicio"] = "";
	$placeHoldersbienservicio["Spanish"]["idbienservicio"] = "";
	$fieldLabelsbienservicio["Spanish"]["descripbienesservicios"] = "Bienes y Servicios";
	$fieldToolTipsbienservicio["Spanish"]["descripbienesservicios"] = "";
	$placeHoldersbienservicio["Spanish"]["descripbienesservicios"] = "";
	$fieldLabelsbienservicio["Spanish"]["modelo"] = "Modelo";
	$fieldToolTipsbienservicio["Spanish"]["modelo"] = "";
	$placeHoldersbienservicio["Spanish"]["modelo"] = "";
	$fieldLabelsbienservicio["Spanish"]["marca"] = "Marca";
	$fieldToolTipsbienservicio["Spanish"]["marca"] = "";
	$placeHoldersbienservicio["Spanish"]["marca"] = "";
	$fieldLabelsbienservicio["Spanish"]["a_o"] = "Año";
	$fieldToolTipsbienservicio["Spanish"]["a_o"] = "";
	$placeHoldersbienservicio["Spanish"]["a_o"] = "";
	$fieldLabelsbienservicio["Spanish"]["impuesto"] = "Impuesto";
	$fieldToolTipsbienservicio["Spanish"]["impuesto"] = "";
	$placeHoldersbienservicio["Spanish"]["impuesto"] = "";
	$fieldLabelsbienservicio["Spanish"]["costo"] = "Costo";
	$fieldToolTipsbienservicio["Spanish"]["costo"] = "";
	$placeHoldersbienservicio["Spanish"]["costo"] = "";
	if (count($fieldToolTipsbienservicio["Spanish"]))
		$tdatabienservicio[".isUseToolTips"] = true;
}


	$tdatabienservicio[".NCSearch"] = true;



$tdatabienservicio[".shortTableName"] = "bienservicio";
$tdatabienservicio[".nSecOptions"] = 0;

$tdatabienservicio[".mainTableOwnerID"] = "";
$tdatabienservicio[".entityType"] = 0;
$tdatabienservicio[".connId"] = "financiero_at_192_168_70_218";


$tdatabienservicio[".strOriginalTableName"] = "public.bienservicio";

	



$tdatabienservicio[".showAddInPopup"] = false;

$tdatabienservicio[".showEditInPopup"] = false;

$tdatabienservicio[".showViewInPopup"] = false;

$tdatabienservicio[".listAjax"] = false;
//	temporary
//$tdatabienservicio[".listAjax"] = false;

	$tdatabienservicio[".audit"] = false;

	$tdatabienservicio[".locking"] = false;


$pages = $tdatabienservicio[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabienservicio[".edit"] = true;
	$tdatabienservicio[".afterEditAction"] = 1;
	$tdatabienservicio[".closePopupAfterEdit"] = 1;
	$tdatabienservicio[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabienservicio[".add"] = true;
$tdatabienservicio[".afterAddAction"] = 1;
$tdatabienservicio[".closePopupAfterAdd"] = 1;
$tdatabienservicio[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabienservicio[".list"] = true;
}



$tdatabienservicio[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabienservicio[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabienservicio[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabienservicio[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabienservicio[".printFriendly"] = true;
}



$tdatabienservicio[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabienservicio[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabienservicio[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabienservicio[".isUseAjaxSuggest"] = true;

$tdatabienservicio[".rowHighlite"] = true;





$tdatabienservicio[".ajaxCodeSnippetAdded"] = false;

$tdatabienservicio[".buttonsAdded"] = false;

$tdatabienservicio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabienservicio[".isUseTimeForSearch"] = false;


$tdatabienservicio[".badgeColor"] = "DAA520";


$tdatabienservicio[".allSearchFields"] = array();
$tdatabienservicio[".filterFields"] = array();
$tdatabienservicio[".requiredSearchFields"] = array();

$tdatabienservicio[".googleLikeFields"] = array();
$tdatabienservicio[".googleLikeFields"][] = "idbienservicio";
$tdatabienservicio[".googleLikeFields"][] = "descripbienesservicios";
$tdatabienservicio[".googleLikeFields"][] = "modelo";
$tdatabienservicio[".googleLikeFields"][] = "marca";
$tdatabienservicio[".googleLikeFields"][] = "año";
$tdatabienservicio[".googleLikeFields"][] = "impuesto";
$tdatabienservicio[".googleLikeFields"][] = "costo";



$tdatabienservicio[".tableType"] = "list";

$tdatabienservicio[".printerPageOrientation"] = 0;
$tdatabienservicio[".nPrinterPageScale"] = 100;

$tdatabienservicio[".nPrinterSplitRecords"] = 40;

$tdatabienservicio[".geocodingEnabled"] = false;










$tdatabienservicio[".pageSize"] = 20;

$tdatabienservicio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabienservicio[".strOrderBy"] = $tstrOrderBy;

$tdatabienservicio[".orderindexes"] = array();


$tdatabienservicio[".sqlHead"] = "SELECT \"idbienservicio\",  	\"descripbienesservicios\",  	\"modelo\",  	\"marca\",  	\"año\",  	\"impuesto\",  	\"costo\"";
$tdatabienservicio[".sqlFrom"] = "FROM \"public\".\"bienservicio\"";
$tdatabienservicio[".sqlWhereExpr"] = "";
$tdatabienservicio[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabienservicio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabienservicio[".arrGroupsPerPage"] = $arrGPP;

$tdatabienservicio[".highlightSearchResults"] = true;

$tableKeysbienservicio = array();
$tableKeysbienservicio[] = "idbienservicio";
$tdatabienservicio[".Keys"] = $tableKeysbienservicio;


$tdatabienservicio[".hideMobileList"] = array();




//	idbienservicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idbienservicio";
	$fdata["GoodName"] = "idbienservicio";
	$fdata["ownerTable"] = "public.bienservicio";
	$fdata["Label"] = GetFieldLabel("public_bienservicio","idbienservicio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idbienservicio";

		$fdata["sourceSingle"] = "idbienservicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idbienservicio\"";

	
	
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


	$tdatabienservicio["idbienservicio"] = $fdata;
		$tdatabienservicio[".searchableFields"][] = "idbienservicio";
//	descripbienesservicios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripbienesservicios";
	$fdata["GoodName"] = "descripbienesservicios";
	$fdata["ownerTable"] = "public.bienservicio";
	$fdata["Label"] = GetFieldLabel("public_bienservicio","descripbienesservicios");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripbienesservicios";

		$fdata["sourceSingle"] = "descripbienesservicios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"descripbienesservicios\"";

	
	
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


	$tdatabienservicio["descripbienesservicios"] = $fdata;
		$tdatabienservicio[".searchableFields"][] = "descripbienesservicios";
//	modelo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "modelo";
	$fdata["GoodName"] = "modelo";
	$fdata["ownerTable"] = "public.bienservicio";
	$fdata["Label"] = GetFieldLabel("public_bienservicio","modelo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "modelo";

		$fdata["sourceSingle"] = "modelo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"modelo\"";

	
	
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


	$tdatabienservicio["modelo"] = $fdata;
		$tdatabienservicio[".searchableFields"][] = "modelo";
//	marca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "marca";
	$fdata["GoodName"] = "marca";
	$fdata["ownerTable"] = "public.bienservicio";
	$fdata["Label"] = GetFieldLabel("public_bienservicio","marca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "marca";

		$fdata["sourceSingle"] = "marca";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"marca\"";

	
	
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


	$tdatabienservicio["marca"] = $fdata;
		$tdatabienservicio[".searchableFields"][] = "marca";
//	año
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "año";
	$fdata["GoodName"] = "a_o";
	$fdata["ownerTable"] = "public.bienservicio";
	$fdata["Label"] = GetFieldLabel("public_bienservicio","a_o");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "año";

		$fdata["sourceSingle"] = "año";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"año\"";

	
	
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


	$tdatabienservicio["año"] = $fdata;
		$tdatabienservicio[".searchableFields"][] = "año";
//	impuesto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "impuesto";
	$fdata["GoodName"] = "impuesto";
	$fdata["ownerTable"] = "public.bienservicio";
	$fdata["Label"] = GetFieldLabel("public_bienservicio","impuesto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "impuesto";

		$fdata["sourceSingle"] = "impuesto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"impuesto\"";

	
	
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


	$tdatabienservicio["impuesto"] = $fdata;
		$tdatabienservicio[".searchableFields"][] = "impuesto";
//	costo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "costo";
	$fdata["GoodName"] = "costo";
	$fdata["ownerTable"] = "public.bienservicio";
	$fdata["Label"] = GetFieldLabel("public_bienservicio","costo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "costo";

		$fdata["sourceSingle"] = "costo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"costo\"";

	
	
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


	$tdatabienservicio["costo"] = $fdata;
		$tdatabienservicio[".searchableFields"][] = "costo";


$tables_data["public.bienservicio"]=&$tdatabienservicio;
$field_labels["public_bienservicio"] = &$fieldLabelsbienservicio;
$fieldToolTips["public_bienservicio"] = &$fieldToolTipsbienservicio;
$placeHolders["public_bienservicio"] = &$placeHoldersbienservicio;
$page_titles["public_bienservicio"] = &$pageTitlesbienservicio;


changeTextControlsToDate( "public.bienservicio" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.bienservicio"] = array();
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


		
	$detailsTablesData["public.bienservicio"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.bienservicio"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.bienservicio"][$dIndex]["masterKeys"][]="idbienservicio";

				$detailsTablesData["public.bienservicio"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.bienservicio"][$dIndex]["detailKeys"][]="idbienservicio";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.bienservicio"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bienservicio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idbienservicio\",  	\"descripbienesservicios\",  	\"modelo\",  	\"marca\",  	\"año\",  	\"impuesto\",  	\"costo\"";
$proto0["m_strFrom"] = "FROM \"public\".\"bienservicio\"";
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
	"m_strName" => "idbienservicio",
	"m_strTable" => "public.bienservicio",
	"m_srcTableName" => "public.bienservicio"
));

$proto6["m_sql"] = "\"idbienservicio\"";
$proto6["m_srcTableName"] = "public.bienservicio";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripbienesservicios",
	"m_strTable" => "public.bienservicio",
	"m_srcTableName" => "public.bienservicio"
));

$proto8["m_sql"] = "\"descripbienesservicios\"";
$proto8["m_srcTableName"] = "public.bienservicio";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "modelo",
	"m_strTable" => "public.bienservicio",
	"m_srcTableName" => "public.bienservicio"
));

$proto10["m_sql"] = "\"modelo\"";
$proto10["m_srcTableName"] = "public.bienservicio";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "marca",
	"m_strTable" => "public.bienservicio",
	"m_srcTableName" => "public.bienservicio"
));

$proto12["m_sql"] = "\"marca\"";
$proto12["m_srcTableName"] = "public.bienservicio";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "año",
	"m_strTable" => "public.bienservicio",
	"m_srcTableName" => "public.bienservicio"
));

$proto14["m_sql"] = "\"año\"";
$proto14["m_srcTableName"] = "public.bienservicio";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "impuesto",
	"m_strTable" => "public.bienservicio",
	"m_srcTableName" => "public.bienservicio"
));

$proto16["m_sql"] = "\"impuesto\"";
$proto16["m_srcTableName"] = "public.bienservicio";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "costo",
	"m_strTable" => "public.bienservicio",
	"m_srcTableName" => "public.bienservicio"
));

$proto18["m_sql"] = "\"costo\"";
$proto18["m_srcTableName"] = "public.bienservicio";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "public.bienservicio";
$proto21["m_srcTableName"] = "public.bienservicio";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "idbienservicio";
$proto21["m_columns"][] = "descripbienesservicios";
$proto21["m_columns"][] = "modelo";
$proto21["m_columns"][] = "marca";
$proto21["m_columns"][] = "año";
$proto21["m_columns"][] = "impuesto";
$proto21["m_columns"][] = "costo";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "\"public\".\"bienservicio\"";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "public.bienservicio";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.bienservicio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bienservicio = createSqlQuery_bienservicio();


	
		;

							

$tdatabienservicio[".sqlquery"] = $queryData_bienservicio;



$tdatabienservicio[".hasEvents"] = false;

?>
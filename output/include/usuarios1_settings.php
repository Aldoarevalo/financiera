<?php
$tdatausuarios1 = array();
$tdatausuarios1[".searchableFields"] = array();
$tdatausuarios1[".ShortName"] = "usuarios1";
$tdatausuarios1[".OwnerID"] = "";
$tdatausuarios1[".OriginalTable"] = "usuarios";


$tdatausuarios1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatausuarios1[".originalPagesByType"] = $tdatausuarios1[".pagesByType"];
$tdatausuarios1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatausuarios1[".originalPages"] = $tdatausuarios1[".pages"];
$tdatausuarios1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatausuarios1[".originalDefaultPages"] = $tdatausuarios1[".defaultPages"];

//	field labels
$fieldLabelsusuarios1 = array();
$fieldToolTipsusuarios1 = array();
$pageTitlesusuarios1 = array();
$placeHoldersusuarios1 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuarios1["Spanish"] = array();
	$fieldToolTipsusuarios1["Spanish"] = array();
	$placeHoldersusuarios1["Spanish"] = array();
	$pageTitlesusuarios1["Spanish"] = array();
	$fieldLabelsusuarios1["Spanish"]["idmodalidad"] = "Idmodalidad";
	$fieldToolTipsusuarios1["Spanish"]["idmodalidad"] = "";
	$placeHoldersusuarios1["Spanish"]["idmodalidad"] = "";
	$fieldLabelsusuarios1["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsusuarios1["Spanish"]["descripcion"] = "";
	$placeHoldersusuarios1["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsusuarios1["Spanish"]))
		$tdatausuarios1[".isUseToolTips"] = true;
}


	$tdatausuarios1[".NCSearch"] = true;



$tdatausuarios1[".shortTableName"] = "usuarios1";
$tdatausuarios1[".nSecOptions"] = 0;

$tdatausuarios1[".mainTableOwnerID"] = "";
$tdatausuarios1[".entityType"] = 6;
$tdatausuarios1[".connId"] = "financiero_at_192_168_70_218";


$tdatausuarios1[".strOriginalTableName"] = "usuarios";

	



$tdatausuarios1[".showAddInPopup"] = false;

$tdatausuarios1[".showEditInPopup"] = false;

$tdatausuarios1[".showViewInPopup"] = false;

$tdatausuarios1[".listAjax"] = false;
//	temporary
//$tdatausuarios1[".listAjax"] = false;

	$tdatausuarios1[".audit"] = false;

	$tdatausuarios1[".locking"] = false;


$pages = $tdatausuarios1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuarios1[".edit"] = true;
	$tdatausuarios1[".afterEditAction"] = 1;
	$tdatausuarios1[".closePopupAfterEdit"] = 1;
	$tdatausuarios1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuarios1[".add"] = true;
$tdatausuarios1[".afterAddAction"] = 1;
$tdatausuarios1[".closePopupAfterAdd"] = 1;
$tdatausuarios1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuarios1[".list"] = true;
}



$tdatausuarios1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuarios1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuarios1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuarios1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuarios1[".printFriendly"] = true;
}



$tdatausuarios1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuarios1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuarios1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuarios1[".isUseAjaxSuggest"] = false;

$tdatausuarios1[".rowHighlite"] = true;





$tdatausuarios1[".ajaxCodeSnippetAdded"] = false;

$tdatausuarios1[".buttonsAdded"] = false;

$tdatausuarios1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios1[".isUseTimeForSearch"] = false;


$tdatausuarios1[".badgeColor"] = "E8926F";


$tdatausuarios1[".allSearchFields"] = array();
$tdatausuarios1[".filterFields"] = array();
$tdatausuarios1[".requiredSearchFields"] = array();

$tdatausuarios1[".googleLikeFields"] = array();
$tdatausuarios1[".googleLikeFields"][] = "idmodalidad";
$tdatausuarios1[".googleLikeFields"][] = "descripcion";




$tdatausuarios1[".printerPageOrientation"] = 0;
$tdatausuarios1[".nPrinterPageScale"] = 100;

$tdatausuarios1[".nPrinterSplitRecords"] = 40;

$tdatausuarios1[".geocodingEnabled"] = false;










$tdatausuarios1[".pageSize"] = 20;

$tdatausuarios1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatausuarios1[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios1[".orderindexes"] = array();


$tdatausuarios1[".sqlHead"] = "";
$tdatausuarios1[".sqlFrom"] = "";
$tdatausuarios1[".sqlWhereExpr"] = "";
$tdatausuarios1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios1[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarios1[".highlightSearchResults"] = true;

$tableKeysusuarios1 = array();
$tdatausuarios1[".Keys"] = $tableKeysusuarios1;


$tdatausuarios1[".hideMobileList"] = array();




//	idmodalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idmodalidad";
	$fdata["GoodName"] = "idmodalidad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("usuarios","idmodalidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idmodalidad";

	
		$fdata["FullName"] = "idmodalidad";

	
	
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


	$tdatausuarios1["idmodalidad"] = $fdata;
		$tdatausuarios1[".searchableFields"][] = "idmodalidad";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("usuarios","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

	
		$fdata["FullName"] = "descripcion";

	
	
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


	$tdatausuarios1["descripcion"] = $fdata;
		$tdatausuarios1[".searchableFields"][] = "descripcion";


$tables_data["usuarios"]=&$tdatausuarios1;
$field_labels["usuarios"] = &$fieldLabelsusuarios1;
$fieldToolTips["usuarios"] = &$fieldToolTipsusuarios1;
$placeHolders["usuarios"] = &$placeHoldersusuarios1;
$page_titles["usuarios"] = &$pageTitlesusuarios1;


changeTextControlsToDate( "usuarios" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["usuarios"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["usuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/usuarios1_ops.php" ) );



	
		;

		

$tdatausuarios1[".sqlquery"] = $queryData_usuarios1;



$tdatausuarios1[".hasEvents"] = false;

?>
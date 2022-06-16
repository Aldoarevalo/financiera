<?php
$tdataproveedor = array();
$tdataproveedor[".searchableFields"] = array();
$tdataproveedor[".ShortName"] = "proveedor";
$tdataproveedor[".OwnerID"] = "";
$tdataproveedor[".OriginalTable"] = "public.proveedor";


$tdataproveedor[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataproveedor[".originalPagesByType"] = $tdataproveedor[".pagesByType"];
$tdataproveedor[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataproveedor[".originalPages"] = $tdataproveedor[".pages"];
$tdataproveedor[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataproveedor[".originalDefaultPages"] = $tdataproveedor[".defaultPages"];

//	field labels
$fieldLabelsproveedor = array();
$fieldToolTipsproveedor = array();
$pageTitlesproveedor = array();
$placeHoldersproveedor = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsproveedor["Spanish"] = array();
	$fieldToolTipsproveedor["Spanish"] = array();
	$placeHoldersproveedor["Spanish"] = array();
	$pageTitlesproveedor["Spanish"] = array();
	$fieldLabelsproveedor["Spanish"]["idproveedor"] = "Idproveedor";
	$fieldToolTipsproveedor["Spanish"]["idproveedor"] = "";
	$placeHoldersproveedor["Spanish"]["idproveedor"] = "";
	$fieldLabelsproveedor["Spanish"]["proveedor"] = "Proveedor";
	$fieldToolTipsproveedor["Spanish"]["proveedor"] = "";
	$placeHoldersproveedor["Spanish"]["proveedor"] = "Ingrese el nombre para el proveedor";
	$fieldLabelsproveedor["Spanish"]["rucnro"] = "Ruc Numero";
	$fieldToolTipsproveedor["Spanish"]["rucnro"] = "";
	$placeHoldersproveedor["Spanish"]["rucnro"] = "";
	$fieldLabelsproveedor["Spanish"]["direccion"] = "Direccion";
	$fieldToolTipsproveedor["Spanish"]["direccion"] = "";
	$placeHoldersproveedor["Spanish"]["direccion"] = "";
	$fieldLabelsproveedor["Spanish"]["telefono"] = "Telefono";
	$fieldToolTipsproveedor["Spanish"]["telefono"] = "";
	$placeHoldersproveedor["Spanish"]["telefono"] = "";
	if (count($fieldToolTipsproveedor["Spanish"]))
		$tdataproveedor[".isUseToolTips"] = true;
}


	$tdataproveedor[".NCSearch"] = true;



$tdataproveedor[".shortTableName"] = "proveedor";
$tdataproveedor[".nSecOptions"] = 0;

$tdataproveedor[".mainTableOwnerID"] = "";
$tdataproveedor[".entityType"] = 0;
$tdataproveedor[".connId"] = "financiero_at_192_168_70_218";


$tdataproveedor[".strOriginalTableName"] = "public.proveedor";

	



$tdataproveedor[".showAddInPopup"] = false;

$tdataproveedor[".showEditInPopup"] = false;

$tdataproveedor[".showViewInPopup"] = false;

$tdataproveedor[".listAjax"] = false;
//	temporary
//$tdataproveedor[".listAjax"] = false;

	$tdataproveedor[".audit"] = false;

	$tdataproveedor[".locking"] = false;


$pages = $tdataproveedor[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproveedor[".edit"] = true;
	$tdataproveedor[".afterEditAction"] = 1;
	$tdataproveedor[".closePopupAfterEdit"] = 1;
	$tdataproveedor[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproveedor[".add"] = true;
$tdataproveedor[".afterAddAction"] = 1;
$tdataproveedor[".closePopupAfterAdd"] = 1;
$tdataproveedor[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproveedor[".list"] = true;
}



$tdataproveedor[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproveedor[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproveedor[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproveedor[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproveedor[".printFriendly"] = true;
}



$tdataproveedor[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproveedor[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproveedor[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproveedor[".isUseAjaxSuggest"] = true;

$tdataproveedor[".rowHighlite"] = true;





$tdataproveedor[".ajaxCodeSnippetAdded"] = false;

$tdataproveedor[".buttonsAdded"] = false;

$tdataproveedor[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproveedor[".isUseTimeForSearch"] = false;


$tdataproveedor[".badgeColor"] = "1E90FF";


$tdataproveedor[".allSearchFields"] = array();
$tdataproveedor[".filterFields"] = array();
$tdataproveedor[".requiredSearchFields"] = array();

$tdataproveedor[".googleLikeFields"] = array();
$tdataproveedor[".googleLikeFields"][] = "idproveedor";
$tdataproveedor[".googleLikeFields"][] = "proveedor";
$tdataproveedor[".googleLikeFields"][] = "rucnro";
$tdataproveedor[".googleLikeFields"][] = "direccion";
$tdataproveedor[".googleLikeFields"][] = "telefono";



$tdataproveedor[".tableType"] = "list";

$tdataproveedor[".printerPageOrientation"] = 0;
$tdataproveedor[".nPrinterPageScale"] = 100;

$tdataproveedor[".nPrinterSplitRecords"] = 40;

$tdataproveedor[".geocodingEnabled"] = false;










$tdataproveedor[".pageSize"] = 20;

$tdataproveedor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataproveedor[".strOrderBy"] = $tstrOrderBy;

$tdataproveedor[".orderindexes"] = array();


$tdataproveedor[".sqlHead"] = "SELECT \"idproveedor\",  	\"proveedor\",  	\"rucnro\",  	\"direccion\",  	\"telefono\"";
$tdataproveedor[".sqlFrom"] = "FROM \"public\".\"proveedor\"";
$tdataproveedor[".sqlWhereExpr"] = "";
$tdataproveedor[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproveedor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproveedor[".arrGroupsPerPage"] = $arrGPP;

$tdataproveedor[".highlightSearchResults"] = true;

$tableKeysproveedor = array();
$tableKeysproveedor[] = "idproveedor";
$tdataproveedor[".Keys"] = $tableKeysproveedor;


$tdataproveedor[".hideMobileList"] = array();




//	idproveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idproveedor";
	$fdata["GoodName"] = "idproveedor";
	$fdata["ownerTable"] = "public.proveedor";
	$fdata["Label"] = GetFieldLabel("public_proveedor","idproveedor");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdataproveedor["idproveedor"] = $fdata;
		$tdataproveedor[".searchableFields"][] = "idproveedor";
//	proveedor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "proveedor";
	$fdata["GoodName"] = "proveedor";
	$fdata["ownerTable"] = "public.proveedor";
	$fdata["Label"] = GetFieldLabel("public_proveedor","proveedor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "proveedor";

		$fdata["sourceSingle"] = "proveedor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"proveedor\"";

	
	
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


	$tdataproveedor["proveedor"] = $fdata;
		$tdataproveedor[".searchableFields"][] = "proveedor";
//	rucnro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rucnro";
	$fdata["GoodName"] = "rucnro";
	$fdata["ownerTable"] = "public.proveedor";
	$fdata["Label"] = GetFieldLabel("public_proveedor","rucnro");
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


	$tdataproveedor["rucnro"] = $fdata;
		$tdataproveedor[".searchableFields"][] = "rucnro";
//	direccion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "direccion";
	$fdata["GoodName"] = "direccion";
	$fdata["ownerTable"] = "public.proveedor";
	$fdata["Label"] = GetFieldLabel("public_proveedor","direccion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "direccion";

		$fdata["sourceSingle"] = "direccion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"direccion\"";

	
	
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


	$tdataproveedor["direccion"] = $fdata;
		$tdataproveedor[".searchableFields"][] = "direccion";
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "public.proveedor";
	$fdata["Label"] = GetFieldLabel("public_proveedor","telefono");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "telefono";

		$fdata["sourceSingle"] = "telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"telefono\"";

	
	
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


	$tdataproveedor["telefono"] = $fdata;
		$tdataproveedor[".searchableFields"][] = "telefono";


$tables_data["public.proveedor"]=&$tdataproveedor;
$field_labels["public_proveedor"] = &$fieldLabelsproveedor;
$fieldToolTips["public_proveedor"] = &$fieldToolTipsproveedor;
$placeHolders["public_proveedor"] = &$placeHoldersproveedor;
$page_titles["public_proveedor"] = &$pageTitlesproveedor;


changeTextControlsToDate( "public.proveedor" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.proveedor"] = array();
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


		
	$detailsTablesData["public.proveedor"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.proveedor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.proveedor"][$dIndex]["masterKeys"][]="idproveedor";

				$detailsTablesData["public.proveedor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.proveedor"][$dIndex]["detailKeys"][]="idproveedor";
//	public.trabajorealizado
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.trabajorealizado";
		$detailsParam["dOriginalTable"] = "public.trabajorealizado";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "trabajorealizado";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_trabajorealizado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.proveedor"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.proveedor"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.proveedor"][$dIndex]["masterKeys"][]="idproveedor";

				$detailsTablesData["public.proveedor"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.proveedor"][$dIndex]["detailKeys"][]="idproveedor";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.proveedor"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_proveedor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idproveedor\",  	\"proveedor\",  	\"rucnro\",  	\"direccion\",  	\"telefono\"";
$proto0["m_strFrom"] = "FROM \"public\".\"proveedor\"";
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
	"m_strName" => "idproveedor",
	"m_strTable" => "public.proveedor",
	"m_srcTableName" => "public.proveedor"
));

$proto6["m_sql"] = "\"idproveedor\"";
$proto6["m_srcTableName"] = "public.proveedor";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "proveedor",
	"m_strTable" => "public.proveedor",
	"m_srcTableName" => "public.proveedor"
));

$proto8["m_sql"] = "\"proveedor\"";
$proto8["m_srcTableName"] = "public.proveedor";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "rucnro",
	"m_strTable" => "public.proveedor",
	"m_srcTableName" => "public.proveedor"
));

$proto10["m_sql"] = "\"rucnro\"";
$proto10["m_srcTableName"] = "public.proveedor";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "direccion",
	"m_strTable" => "public.proveedor",
	"m_srcTableName" => "public.proveedor"
));

$proto12["m_sql"] = "\"direccion\"";
$proto12["m_srcTableName"] = "public.proveedor";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "public.proveedor",
	"m_srcTableName" => "public.proveedor"
));

$proto14["m_sql"] = "\"telefono\"";
$proto14["m_srcTableName"] = "public.proveedor";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "public.proveedor";
$proto17["m_srcTableName"] = "public.proveedor";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idproveedor";
$proto17["m_columns"][] = "proveedor";
$proto17["m_columns"][] = "rucnro";
$proto17["m_columns"][] = "direccion";
$proto17["m_columns"][] = "telefono";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "\"public\".\"proveedor\"";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "public.proveedor";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.proveedor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_proveedor = createSqlQuery_proveedor();


	
		;

					

$tdataproveedor[".sqlquery"] = $queryData_proveedor;



$tdataproveedor[".hasEvents"] = false;

?>
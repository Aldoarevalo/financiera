<?php
$tdataestadodepago = array();
$tdataestadodepago[".searchableFields"] = array();
$tdataestadodepago[".ShortName"] = "estadodepago";
$tdataestadodepago[".OwnerID"] = "";
$tdataestadodepago[".OriginalTable"] = "public.estadodepago";


$tdataestadodepago[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataestadodepago[".originalPagesByType"] = $tdataestadodepago[".pagesByType"];
$tdataestadodepago[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataestadodepago[".originalPages"] = $tdataestadodepago[".pages"];
$tdataestadodepago[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataestadodepago[".originalDefaultPages"] = $tdataestadodepago[".defaultPages"];

//	field labels
$fieldLabelsestadodepago = array();
$fieldToolTipsestadodepago = array();
$pageTitlesestadodepago = array();
$placeHoldersestadodepago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsestadodepago["Spanish"] = array();
	$fieldToolTipsestadodepago["Spanish"] = array();
	$placeHoldersestadodepago["Spanish"] = array();
	$pageTitlesestadodepago["Spanish"] = array();
	$fieldLabelsestadodepago["Spanish"]["idestadopago"] = "Idestadopago";
	$fieldToolTipsestadodepago["Spanish"]["idestadopago"] = "";
	$placeHoldersestadodepago["Spanish"]["idestadopago"] = "";
	$fieldLabelsestadodepago["Spanish"]["estadodepago"] = "Estadodepago";
	$fieldToolTipsestadodepago["Spanish"]["estadodepago"] = "";
	$placeHoldersestadodepago["Spanish"]["estadodepago"] = "";
	if (count($fieldToolTipsestadodepago["Spanish"]))
		$tdataestadodepago[".isUseToolTips"] = true;
}


	$tdataestadodepago[".NCSearch"] = true;



$tdataestadodepago[".shortTableName"] = "estadodepago";
$tdataestadodepago[".nSecOptions"] = 0;

$tdataestadodepago[".mainTableOwnerID"] = "";
$tdataestadodepago[".entityType"] = 0;
$tdataestadodepago[".connId"] = "financiero_at_192_168_70_218";


$tdataestadodepago[".strOriginalTableName"] = "public.estadodepago";

	



$tdataestadodepago[".showAddInPopup"] = false;

$tdataestadodepago[".showEditInPopup"] = false;

$tdataestadodepago[".showViewInPopup"] = false;

$tdataestadodepago[".listAjax"] = false;
//	temporary
//$tdataestadodepago[".listAjax"] = false;

	$tdataestadodepago[".audit"] = false;

	$tdataestadodepago[".locking"] = false;


$pages = $tdataestadodepago[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataestadodepago[".edit"] = true;
	$tdataestadodepago[".afterEditAction"] = 1;
	$tdataestadodepago[".closePopupAfterEdit"] = 1;
	$tdataestadodepago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataestadodepago[".add"] = true;
$tdataestadodepago[".afterAddAction"] = 1;
$tdataestadodepago[".closePopupAfterAdd"] = 1;
$tdataestadodepago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataestadodepago[".list"] = true;
}



$tdataestadodepago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataestadodepago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataestadodepago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataestadodepago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataestadodepago[".printFriendly"] = true;
}



$tdataestadodepago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataestadodepago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataestadodepago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataestadodepago[".isUseAjaxSuggest"] = true;

$tdataestadodepago[".rowHighlite"] = true;





$tdataestadodepago[".ajaxCodeSnippetAdded"] = false;

$tdataestadodepago[".buttonsAdded"] = false;

$tdataestadodepago[".addPageEvents"] = false;

// use timepicker for search panel
$tdataestadodepago[".isUseTimeForSearch"] = false;


$tdataestadodepago[".badgeColor"] = "DB7093";


$tdataestadodepago[".allSearchFields"] = array();
$tdataestadodepago[".filterFields"] = array();
$tdataestadodepago[".requiredSearchFields"] = array();

$tdataestadodepago[".googleLikeFields"] = array();
$tdataestadodepago[".googleLikeFields"][] = "idestadopago";
$tdataestadodepago[".googleLikeFields"][] = "estadodepago";



$tdataestadodepago[".tableType"] = "list";

$tdataestadodepago[".printerPageOrientation"] = 0;
$tdataestadodepago[".nPrinterPageScale"] = 100;

$tdataestadodepago[".nPrinterSplitRecords"] = 40;

$tdataestadodepago[".geocodingEnabled"] = false;










$tdataestadodepago[".pageSize"] = 20;

$tdataestadodepago[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataestadodepago[".strOrderBy"] = $tstrOrderBy;

$tdataestadodepago[".orderindexes"] = array();


$tdataestadodepago[".sqlHead"] = "SELECT \"idestadopago\",  	\"estadodepago\"";
$tdataestadodepago[".sqlFrom"] = "FROM \"public\".\"estadodepago\"";
$tdataestadodepago[".sqlWhereExpr"] = "";
$tdataestadodepago[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataestadodepago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataestadodepago[".arrGroupsPerPage"] = $arrGPP;

$tdataestadodepago[".highlightSearchResults"] = true;

$tableKeysestadodepago = array();
$tableKeysestadodepago[] = "idestadopago";
$tdataestadodepago[".Keys"] = $tableKeysestadodepago;


$tdataestadodepago[".hideMobileList"] = array();




//	idestadopago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idestadopago";
	$fdata["GoodName"] = "idestadopago";
	$fdata["ownerTable"] = "public.estadodepago";
	$fdata["Label"] = GetFieldLabel("public_estadodepago","idestadopago");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idestadopago";

		$fdata["sourceSingle"] = "idestadopago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idestadopago\"";

	
	
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


	$tdataestadodepago["idestadopago"] = $fdata;
		$tdataestadodepago[".searchableFields"][] = "idestadopago";
//	estadodepago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estadodepago";
	$fdata["GoodName"] = "estadodepago";
	$fdata["ownerTable"] = "public.estadodepago";
	$fdata["Label"] = GetFieldLabel("public_estadodepago","estadodepago");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estadodepago";

		$fdata["sourceSingle"] = "estadodepago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"estadodepago\"";

	
	
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


	$tdataestadodepago["estadodepago"] = $fdata;
		$tdataestadodepago[".searchableFields"][] = "estadodepago";


$tables_data["public.estadodepago"]=&$tdataestadodepago;
$field_labels["public_estadodepago"] = &$fieldLabelsestadodepago;
$fieldToolTips["public_estadodepago"] = &$fieldToolTipsestadodepago;
$placeHolders["public_estadodepago"] = &$placeHoldersestadodepago;
$page_titles["public_estadodepago"] = &$pageTitlesestadodepago;


changeTextControlsToDate( "public.estadodepago" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.estadodepago"] = array();
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


		
	$detailsTablesData["public.estadodepago"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.estadodepago"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.estadodepago"][$dIndex]["masterKeys"][]="idestadopago";

				$detailsTablesData["public.estadodepago"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.estadodepago"][$dIndex]["detailKeys"][]="idestadopago";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.estadodepago"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_estadodepago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idestadopago\",  	\"estadodepago\"";
$proto0["m_strFrom"] = "FROM \"public\".\"estadodepago\"";
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
	"m_strName" => "idestadopago",
	"m_strTable" => "public.estadodepago",
	"m_srcTableName" => "public.estadodepago"
));

$proto6["m_sql"] = "\"idestadopago\"";
$proto6["m_srcTableName"] = "public.estadodepago";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estadodepago",
	"m_strTable" => "public.estadodepago",
	"m_srcTableName" => "public.estadodepago"
));

$proto8["m_sql"] = "\"estadodepago\"";
$proto8["m_srcTableName"] = "public.estadodepago";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.estadodepago";
$proto11["m_srcTableName"] = "public.estadodepago";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idestadopago";
$proto11["m_columns"][] = "estadodepago";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"estadodepago\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.estadodepago";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.estadodepago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_estadodepago = createSqlQuery_estadodepago();


	
		;

		

$tdataestadodepago[".sqlquery"] = $queryData_estadodepago;



$tdataestadodepago[".hasEvents"] = false;

?>
<?php
$tdatav_modalidad = array();
$tdatav_modalidad[".searchableFields"] = array();
$tdatav_modalidad[".ShortName"] = "v_modalidad";
$tdatav_modalidad[".OwnerID"] = "";
$tdatav_modalidad[".OriginalTable"] = "public.v_modalidad";


$tdatav_modalidad[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatav_modalidad[".originalPagesByType"] = $tdatav_modalidad[".pagesByType"];
$tdatav_modalidad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatav_modalidad[".originalPages"] = $tdatav_modalidad[".pages"];
$tdatav_modalidad[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatav_modalidad[".originalDefaultPages"] = $tdatav_modalidad[".defaultPages"];

//	field labels
$fieldLabelsv_modalidad = array();
$fieldToolTipsv_modalidad = array();
$pageTitlesv_modalidad = array();
$placeHoldersv_modalidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsv_modalidad["Spanish"] = array();
	$fieldToolTipsv_modalidad["Spanish"] = array();
	$placeHoldersv_modalidad["Spanish"] = array();
	$pageTitlesv_modalidad["Spanish"] = array();
	$fieldLabelsv_modalidad["Spanish"]["idmodalidad"] = "Idmodalidad";
	$fieldToolTipsv_modalidad["Spanish"]["idmodalidad"] = "";
	$placeHoldersv_modalidad["Spanish"]["idmodalidad"] = "";
	$fieldLabelsv_modalidad["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsv_modalidad["Spanish"]["descripcion"] = "";
	$placeHoldersv_modalidad["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsv_modalidad["Spanish"]))
		$tdatav_modalidad[".isUseToolTips"] = true;
}


	$tdatav_modalidad[".NCSearch"] = true;



$tdatav_modalidad[".shortTableName"] = "v_modalidad";
$tdatav_modalidad[".nSecOptions"] = 0;

$tdatav_modalidad[".mainTableOwnerID"] = "";
$tdatav_modalidad[".entityType"] = 0;
$tdatav_modalidad[".connId"] = "financiero_at_192_168_70_218";


$tdatav_modalidad[".strOriginalTableName"] = "public.v_modalidad";

	



$tdatav_modalidad[".showAddInPopup"] = false;

$tdatav_modalidad[".showEditInPopup"] = false;

$tdatav_modalidad[".showViewInPopup"] = false;

$tdatav_modalidad[".listAjax"] = false;
//	temporary
//$tdatav_modalidad[".listAjax"] = false;

	$tdatav_modalidad[".audit"] = false;

	$tdatav_modalidad[".locking"] = false;


$pages = $tdatav_modalidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatav_modalidad[".edit"] = true;
	$tdatav_modalidad[".afterEditAction"] = 1;
	$tdatav_modalidad[".closePopupAfterEdit"] = 1;
	$tdatav_modalidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatav_modalidad[".add"] = true;
$tdatav_modalidad[".afterAddAction"] = 1;
$tdatav_modalidad[".closePopupAfterAdd"] = 1;
$tdatav_modalidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatav_modalidad[".list"] = true;
}



$tdatav_modalidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatav_modalidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatav_modalidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatav_modalidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatav_modalidad[".printFriendly"] = true;
}



$tdatav_modalidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatav_modalidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatav_modalidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatav_modalidad[".isUseAjaxSuggest"] = true;

$tdatav_modalidad[".rowHighlite"] = true;





$tdatav_modalidad[".ajaxCodeSnippetAdded"] = false;

$tdatav_modalidad[".buttonsAdded"] = false;

$tdatav_modalidad[".addPageEvents"] = true;

// use timepicker for search panel
$tdatav_modalidad[".isUseTimeForSearch"] = false;


$tdatav_modalidad[".badgeColor"] = "E07878";


$tdatav_modalidad[".allSearchFields"] = array();
$tdatav_modalidad[".filterFields"] = array();
$tdatav_modalidad[".requiredSearchFields"] = array();

$tdatav_modalidad[".googleLikeFields"] = array();
$tdatav_modalidad[".googleLikeFields"][] = "idmodalidad";
$tdatav_modalidad[".googleLikeFields"][] = "descripcion";



$tdatav_modalidad[".tableType"] = "list";

$tdatav_modalidad[".printerPageOrientation"] = 0;
$tdatav_modalidad[".nPrinterPageScale"] = 100;

$tdatav_modalidad[".nPrinterSplitRecords"] = 40;

$tdatav_modalidad[".geocodingEnabled"] = false;










$tdatav_modalidad[".pageSize"] = 20;

$tdatav_modalidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatav_modalidad[".strOrderBy"] = $tstrOrderBy;

$tdatav_modalidad[".orderindexes"] = array();


$tdatav_modalidad[".sqlHead"] = "select idmodalidad,descripcion";
$tdatav_modalidad[".sqlFrom"] = "from modalidad";
$tdatav_modalidad[".sqlWhereExpr"] = "";
$tdatav_modalidad[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatav_modalidad[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatav_modalidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatav_modalidad[".arrGroupsPerPage"] = $arrGPP;

$tdatav_modalidad[".highlightSearchResults"] = true;

$tableKeysv_modalidad = array();
$tdatav_modalidad[".Keys"] = $tableKeysv_modalidad;


$tdatav_modalidad[".hideMobileList"] = array();




//	idmodalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idmodalidad";
	$fdata["GoodName"] = "idmodalidad";
	$fdata["ownerTable"] = "public.modalidad";
	$fdata["Label"] = GetFieldLabel("public_v_modalidad","idmodalidad");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idmodalidad";

		$fdata["sourceSingle"] = "idmodalidad";

		$fdata["isSQLExpression"] = true;
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


	$tdatav_modalidad["idmodalidad"] = $fdata;
		$tdatav_modalidad[".searchableFields"][] = "idmodalidad";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "public.modalidad";
	$fdata["Label"] = GetFieldLabel("public_v_modalidad","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

		$fdata["sourceSingle"] = "descripcion";

		$fdata["isSQLExpression"] = true;
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


	$tdatav_modalidad["descripcion"] = $fdata;
		$tdatav_modalidad[".searchableFields"][] = "descripcion";


$tables_data["public.v_modalidad"]=&$tdatav_modalidad;
$field_labels["public_v_modalidad"] = &$fieldLabelsv_modalidad;
$fieldToolTips["public_v_modalidad"] = &$fieldToolTipsv_modalidad;
$placeHolders["public_v_modalidad"] = &$placeHoldersv_modalidad;
$page_titles["public_v_modalidad"] = &$pageTitlesv_modalidad;


changeTextControlsToDate( "public.v_modalidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.v_modalidad"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.v_modalidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_v_modalidad()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "idmodalidad,descripcion";
$proto0["m_strFrom"] = "from modalidad";
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
	"m_strName" => "idmodalidad",
	"m_strTable" => "public.modalidad",
	"m_srcTableName" => "public.v_modalidad"
));

$proto6["m_sql"] = "idmodalidad";
$proto6["m_srcTableName"] = "public.v_modalidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "public.modalidad",
	"m_srcTableName" => "public.v_modalidad"
));

$proto8["m_sql"] = "descripcion";
$proto8["m_srcTableName"] = "public.v_modalidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.modalidad";
$proto11["m_srcTableName"] = "public.v_modalidad";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idmodalidad";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "modalidad";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.v_modalidad";
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
												$proto14=array();
						$obj = new SQLField(array(
	"m_strName" => "idmodalidad",
	"m_strTable" => "public.modalidad",
	"m_srcTableName" => "public.v_modalidad"
));

$proto14["m_column"]=$obj;
$obj = new SQLGroupByItem($proto14);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.v_modalidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_v_modalidad = createSqlQuery_v_modalidad();


	
		;

		

$tdatav_modalidad[".sqlquery"] = $queryData_v_modalidad;



include_once(getabspath("include/v_modalidad_events.php"));
$tdatav_modalidad[".hasEvents"] = true;

?>
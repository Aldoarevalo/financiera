<?php
$tdatamodalidad = array();
$tdatamodalidad[".searchableFields"] = array();
$tdatamodalidad[".ShortName"] = "modalidad";
$tdatamodalidad[".OwnerID"] = "";
$tdatamodalidad[".OriginalTable"] = "public.modalidad";


$tdatamodalidad[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamodalidad[".originalPagesByType"] = $tdatamodalidad[".pagesByType"];
$tdatamodalidad[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamodalidad[".originalPages"] = $tdatamodalidad[".pages"];
$tdatamodalidad[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatamodalidad[".originalDefaultPages"] = $tdatamodalidad[".defaultPages"];

//	field labels
$fieldLabelsmodalidad = array();
$fieldToolTipsmodalidad = array();
$pageTitlesmodalidad = array();
$placeHoldersmodalidad = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmodalidad["Spanish"] = array();
	$fieldToolTipsmodalidad["Spanish"] = array();
	$placeHoldersmodalidad["Spanish"] = array();
	$pageTitlesmodalidad["Spanish"] = array();
	$fieldLabelsmodalidad["Spanish"]["idmodalidad"] = "Idmodalidad";
	$fieldToolTipsmodalidad["Spanish"]["idmodalidad"] = "";
	$placeHoldersmodalidad["Spanish"]["idmodalidad"] = "";
	$fieldLabelsmodalidad["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsmodalidad["Spanish"]["descripcion"] = "";
	$placeHoldersmodalidad["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsmodalidad["Spanish"]))
		$tdatamodalidad[".isUseToolTips"] = true;
}


	$tdatamodalidad[".NCSearch"] = true;



$tdatamodalidad[".shortTableName"] = "modalidad";
$tdatamodalidad[".nSecOptions"] = 0;

$tdatamodalidad[".mainTableOwnerID"] = "";
$tdatamodalidad[".entityType"] = 0;
$tdatamodalidad[".connId"] = "financiero_at_192_168_70_218";


$tdatamodalidad[".strOriginalTableName"] = "public.modalidad";

	



$tdatamodalidad[".showAddInPopup"] = false;

$tdatamodalidad[".showEditInPopup"] = false;

$tdatamodalidad[".showViewInPopup"] = false;

$tdatamodalidad[".listAjax"] = false;
//	temporary
//$tdatamodalidad[".listAjax"] = false;

	$tdatamodalidad[".audit"] = false;

	$tdatamodalidad[".locking"] = false;


$pages = $tdatamodalidad[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamodalidad[".edit"] = true;
	$tdatamodalidad[".afterEditAction"] = 1;
	$tdatamodalidad[".closePopupAfterEdit"] = 1;
	$tdatamodalidad[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamodalidad[".add"] = true;
$tdatamodalidad[".afterAddAction"] = 1;
$tdatamodalidad[".closePopupAfterAdd"] = 1;
$tdatamodalidad[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamodalidad[".list"] = true;
}



$tdatamodalidad[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamodalidad[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamodalidad[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamodalidad[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamodalidad[".printFriendly"] = true;
}



$tdatamodalidad[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamodalidad[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamodalidad[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamodalidad[".isUseAjaxSuggest"] = true;

$tdatamodalidad[".rowHighlite"] = true;





$tdatamodalidad[".ajaxCodeSnippetAdded"] = false;

$tdatamodalidad[".buttonsAdded"] = false;

$tdatamodalidad[".addPageEvents"] = true;

// use timepicker for search panel
$tdatamodalidad[".isUseTimeForSearch"] = false;


$tdatamodalidad[".badgeColor"] = "7B68EE";


$tdatamodalidad[".allSearchFields"] = array();
$tdatamodalidad[".filterFields"] = array();
$tdatamodalidad[".requiredSearchFields"] = array();

$tdatamodalidad[".googleLikeFields"] = array();
$tdatamodalidad[".googleLikeFields"][] = "idmodalidad";
$tdatamodalidad[".googleLikeFields"][] = "descripcion";



$tdatamodalidad[".tableType"] = "list";

$tdatamodalidad[".printerPageOrientation"] = 0;
$tdatamodalidad[".nPrinterPageScale"] = 100;

$tdatamodalidad[".nPrinterSplitRecords"] = 40;

$tdatamodalidad[".geocodingEnabled"] = false;










$tdatamodalidad[".pageSize"] = 20;

$tdatamodalidad[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamodalidad[".strOrderBy"] = $tstrOrderBy;

$tdatamodalidad[".orderindexes"] = array();


$tdatamodalidad[".sqlHead"] = "SELECT \"idmodalidad\",  	\"descripcion\"";
$tdatamodalidad[".sqlFrom"] = "FROM \"public\".\"modalidad\"";
$tdatamodalidad[".sqlWhereExpr"] = "";
$tdatamodalidad[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamodalidad[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamodalidad[".arrGroupsPerPage"] = $arrGPP;

$tdatamodalidad[".highlightSearchResults"] = true;

$tableKeysmodalidad = array();
$tableKeysmodalidad[] = "idmodalidad";
$tdatamodalidad[".Keys"] = $tableKeysmodalidad;


$tdatamodalidad[".hideMobileList"] = array();




//	idmodalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idmodalidad";
	$fdata["GoodName"] = "idmodalidad";
	$fdata["ownerTable"] = "public.modalidad";
	$fdata["Label"] = GetFieldLabel("public_modalidad","idmodalidad");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatamodalidad["idmodalidad"] = $fdata;
		$tdatamodalidad[".searchableFields"][] = "idmodalidad";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "public.modalidad";
	$fdata["Label"] = GetFieldLabel("public_modalidad","descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "descripcion";

		$fdata["sourceSingle"] = "descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"descripcion\"";

	
	
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


	$tdatamodalidad["descripcion"] = $fdata;
		$tdatamodalidad[".searchableFields"][] = "descripcion";


$tables_data["public.modalidad"]=&$tdatamodalidad;
$field_labels["public_modalidad"] = &$fieldLabelsmodalidad;
$fieldToolTips["public_modalidad"] = &$fieldToolTipsmodalidad;
$placeHolders["public_modalidad"] = &$placeHoldersmodalidad;
$page_titles["public_modalidad"] = &$pageTitlesmodalidad;


changeTextControlsToDate( "public.modalidad" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.modalidad"] = array();
//	public.llamado
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.llamado";
		$detailsParam["dOriginalTable"] = "public.llamado";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "llamado";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_llamado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.modalidad"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.modalidad"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.modalidad"][$dIndex]["masterKeys"][]="idmodalidad";

				$detailsTablesData["public.modalidad"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.modalidad"][$dIndex]["detailKeys"][]="idmodalidad";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.modalidad"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_modalidad()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idmodalidad\",  	\"descripcion\"";
$proto0["m_strFrom"] = "FROM \"public\".\"modalidad\"";
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
	"m_srcTableName" => "public.modalidad"
));

$proto6["m_sql"] = "\"idmodalidad\"";
$proto6["m_srcTableName"] = "public.modalidad";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "public.modalidad",
	"m_srcTableName" => "public.modalidad"
));

$proto8["m_sql"] = "\"descripcion\"";
$proto8["m_srcTableName"] = "public.modalidad";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.modalidad";
$proto11["m_srcTableName"] = "public.modalidad";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idmodalidad";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"modalidad\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.modalidad";
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
$proto0["m_srcTableName"]="public.modalidad";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_modalidad = createSqlQuery_modalidad();


	
		;

		

$tdatamodalidad[".sqlquery"] = $queryData_modalidad;



include_once(getabspath("include/modalidad_events.php"));
$tdatamodalidad[".hasEvents"] = true;

?>
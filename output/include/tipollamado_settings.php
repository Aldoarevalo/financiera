<?php
$tdatatipollamado = array();
$tdatatipollamado[".searchableFields"] = array();
$tdatatipollamado[".ShortName"] = "tipollamado";
$tdatatipollamado[".OwnerID"] = "";
$tdatatipollamado[".OriginalTable"] = "public.tipollamado";


$tdatatipollamado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatipollamado[".originalPagesByType"] = $tdatatipollamado[".pagesByType"];
$tdatatipollamado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatipollamado[".originalPages"] = $tdatatipollamado[".pages"];
$tdatatipollamado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatipollamado[".originalDefaultPages"] = $tdatatipollamado[".defaultPages"];

//	field labels
$fieldLabelstipollamado = array();
$fieldToolTipstipollamado = array();
$pageTitlestipollamado = array();
$placeHolderstipollamado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipollamado["Spanish"] = array();
	$fieldToolTipstipollamado["Spanish"] = array();
	$placeHolderstipollamado["Spanish"] = array();
	$pageTitlestipollamado["Spanish"] = array();
	$fieldLabelstipollamado["Spanish"]["idtipollamado"] = "idtipollamado";
	$fieldToolTipstipollamado["Spanish"]["idtipollamado"] = "";
	$placeHolderstipollamado["Spanish"]["idtipollamado"] = "";
	$fieldLabelstipollamado["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipstipollamado["Spanish"]["descripcion"] = "";
	$placeHolderstipollamado["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipstipollamado["Spanish"]))
		$tdatatipollamado[".isUseToolTips"] = true;
}


	$tdatatipollamado[".NCSearch"] = true;



$tdatatipollamado[".shortTableName"] = "tipollamado";
$tdatatipollamado[".nSecOptions"] = 0;

$tdatatipollamado[".mainTableOwnerID"] = "";
$tdatatipollamado[".entityType"] = 0;
$tdatatipollamado[".connId"] = "financiero_at_192_168_70_218";


$tdatatipollamado[".strOriginalTableName"] = "public.tipollamado";

	



$tdatatipollamado[".showAddInPopup"] = false;

$tdatatipollamado[".showEditInPopup"] = false;

$tdatatipollamado[".showViewInPopup"] = false;

$tdatatipollamado[".listAjax"] = false;
//	temporary
//$tdatatipollamado[".listAjax"] = false;

	$tdatatipollamado[".audit"] = false;

	$tdatatipollamado[".locking"] = false;


$pages = $tdatatipollamado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatipollamado[".edit"] = true;
	$tdatatipollamado[".afterEditAction"] = 1;
	$tdatatipollamado[".closePopupAfterEdit"] = 1;
	$tdatatipollamado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatipollamado[".add"] = true;
$tdatatipollamado[".afterAddAction"] = 1;
$tdatatipollamado[".closePopupAfterAdd"] = 1;
$tdatatipollamado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatipollamado[".list"] = true;
}



$tdatatipollamado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatipollamado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatipollamado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatipollamado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatipollamado[".printFriendly"] = true;
}



$tdatatipollamado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatipollamado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatipollamado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatipollamado[".isUseAjaxSuggest"] = true;

$tdatatipollamado[".rowHighlite"] = true;





$tdatatipollamado[".ajaxCodeSnippetAdded"] = false;

$tdatatipollamado[".buttonsAdded"] = false;

$tdatatipollamado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipollamado[".isUseTimeForSearch"] = false;


$tdatatipollamado[".badgeColor"] = "D2691E";


$tdatatipollamado[".allSearchFields"] = array();
$tdatatipollamado[".filterFields"] = array();
$tdatatipollamado[".requiredSearchFields"] = array();

$tdatatipollamado[".googleLikeFields"] = array();
$tdatatipollamado[".googleLikeFields"][] = "idtipollamado";
$tdatatipollamado[".googleLikeFields"][] = "descripcion";



$tdatatipollamado[".tableType"] = "list";

$tdatatipollamado[".printerPageOrientation"] = 0;
$tdatatipollamado[".nPrinterPageScale"] = 100;

$tdatatipollamado[".nPrinterSplitRecords"] = 40;

$tdatatipollamado[".geocodingEnabled"] = false;










$tdatatipollamado[".pageSize"] = 20;

$tdatatipollamado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatipollamado[".strOrderBy"] = $tstrOrderBy;

$tdatatipollamado[".orderindexes"] = array();


$tdatatipollamado[".sqlHead"] = "SELECT \"idtipollamado\",  	\"descripcion\"";
$tdatatipollamado[".sqlFrom"] = "FROM \"public\".\"tipollamado\"";
$tdatatipollamado[".sqlWhereExpr"] = "";
$tdatatipollamado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipollamado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipollamado[".arrGroupsPerPage"] = $arrGPP;

$tdatatipollamado[".highlightSearchResults"] = true;

$tableKeystipollamado = array();
$tableKeystipollamado[] = "idtipollamado";
$tdatatipollamado[".Keys"] = $tableKeystipollamado;


$tdatatipollamado[".hideMobileList"] = array();




//	idtipollamado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idtipollamado";
	$fdata["GoodName"] = "idtipollamado";
	$fdata["ownerTable"] = "public.tipollamado";
	$fdata["Label"] = GetFieldLabel("public_tipollamado","idtipollamado");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatatipollamado["idtipollamado"] = $fdata;
		$tdatatipollamado[".searchableFields"][] = "idtipollamado";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "public.tipollamado";
	$fdata["Label"] = GetFieldLabel("public_tipollamado","descripcion");
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


	$tdatatipollamado["descripcion"] = $fdata;
		$tdatatipollamado[".searchableFields"][] = "descripcion";


$tables_data["public.tipollamado"]=&$tdatatipollamado;
$field_labels["public_tipollamado"] = &$fieldLabelstipollamado;
$fieldToolTips["public_tipollamado"] = &$fieldToolTipstipollamado;
$placeHolders["public_tipollamado"] = &$placeHolderstipollamado;
$page_titles["public_tipollamado"] = &$pageTitlestipollamado;


changeTextControlsToDate( "public.tipollamado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.tipollamado"] = array();
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


		
	$detailsTablesData["public.tipollamado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.tipollamado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.tipollamado"][$dIndex]["masterKeys"][]="idtipollamado";

				$detailsTablesData["public.tipollamado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.tipollamado"][$dIndex]["detailKeys"][]="idtipollamado";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.tipollamado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tipollamado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idtipollamado\",  	\"descripcion\"";
$proto0["m_strFrom"] = "FROM \"public\".\"tipollamado\"";
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
	"m_strName" => "idtipollamado",
	"m_strTable" => "public.tipollamado",
	"m_srcTableName" => "public.tipollamado"
));

$proto6["m_sql"] = "\"idtipollamado\"";
$proto6["m_srcTableName"] = "public.tipollamado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "public.tipollamado",
	"m_srcTableName" => "public.tipollamado"
));

$proto8["m_sql"] = "\"descripcion\"";
$proto8["m_srcTableName"] = "public.tipollamado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.tipollamado";
$proto11["m_srcTableName"] = "public.tipollamado";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idtipollamado";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"tipollamado\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.tipollamado";
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
$proto0["m_srcTableName"]="public.tipollamado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipollamado = createSqlQuery_tipollamado();


	
		;

		

$tdatatipollamado[".sqlquery"] = $queryData_tipollamado;



$tdatatipollamado[".hasEvents"] = false;

?>
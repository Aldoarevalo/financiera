<?php
$tdataestado = array();
$tdataestado[".searchableFields"] = array();
$tdataestado[".ShortName"] = "estado";
$tdataestado[".OwnerID"] = "";
$tdataestado[".OriginalTable"] = "public.estado";


$tdataestado[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataestado[".originalPagesByType"] = $tdataestado[".pagesByType"];
$tdataestado[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataestado[".originalPages"] = $tdataestado[".pages"];
$tdataestado[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataestado[".originalDefaultPages"] = $tdataestado[".defaultPages"];

//	field labels
$fieldLabelsestado = array();
$fieldToolTipsestado = array();
$pageTitlesestado = array();
$placeHoldersestado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsestado["Spanish"] = array();
	$fieldToolTipsestado["Spanish"] = array();
	$placeHoldersestado["Spanish"] = array();
	$pageTitlesestado["Spanish"] = array();
	$fieldLabelsestado["Spanish"]["idestado"] = "Idestado";
	$fieldToolTipsestado["Spanish"]["idestado"] = "";
	$placeHoldersestado["Spanish"]["idestado"] = "";
	$fieldLabelsestado["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsestado["Spanish"]["descripcion"] = "";
	$placeHoldersestado["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsestado["Spanish"]))
		$tdataestado[".isUseToolTips"] = true;
}


	$tdataestado[".NCSearch"] = true;



$tdataestado[".shortTableName"] = "estado";
$tdataestado[".nSecOptions"] = 0;

$tdataestado[".mainTableOwnerID"] = "";
$tdataestado[".entityType"] = 0;
$tdataestado[".connId"] = "financiero_at_192_168_70_218";


$tdataestado[".strOriginalTableName"] = "public.estado";

	



$tdataestado[".showAddInPopup"] = false;

$tdataestado[".showEditInPopup"] = false;

$tdataestado[".showViewInPopup"] = false;

$tdataestado[".listAjax"] = false;
//	temporary
//$tdataestado[".listAjax"] = false;

	$tdataestado[".audit"] = false;

	$tdataestado[".locking"] = false;


$pages = $tdataestado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataestado[".edit"] = true;
	$tdataestado[".afterEditAction"] = 1;
	$tdataestado[".closePopupAfterEdit"] = 1;
	$tdataestado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataestado[".add"] = true;
$tdataestado[".afterAddAction"] = 1;
$tdataestado[".closePopupAfterAdd"] = 1;
$tdataestado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataestado[".list"] = true;
}



$tdataestado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataestado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataestado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataestado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataestado[".printFriendly"] = true;
}



$tdataestado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataestado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataestado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataestado[".isUseAjaxSuggest"] = true;

$tdataestado[".rowHighlite"] = true;





$tdataestado[".ajaxCodeSnippetAdded"] = false;

$tdataestado[".buttonsAdded"] = false;

$tdataestado[".addPageEvents"] = false;

// use timepicker for search panel
$tdataestado[".isUseTimeForSearch"] = false;


$tdataestado[".badgeColor"] = "2F4F4F";


$tdataestado[".allSearchFields"] = array();
$tdataestado[".filterFields"] = array();
$tdataestado[".requiredSearchFields"] = array();

$tdataestado[".googleLikeFields"] = array();
$tdataestado[".googleLikeFields"][] = "idestado";
$tdataestado[".googleLikeFields"][] = "descripcion";



$tdataestado[".tableType"] = "list";

$tdataestado[".printerPageOrientation"] = 0;
$tdataestado[".nPrinterPageScale"] = 100;

$tdataestado[".nPrinterSplitRecords"] = 40;

$tdataestado[".geocodingEnabled"] = false;










$tdataestado[".pageSize"] = 20;

$tdataestado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataestado[".strOrderBy"] = $tstrOrderBy;

$tdataestado[".orderindexes"] = array();


$tdataestado[".sqlHead"] = "SELECT \"idestado\",  	\"descripcion\"";
$tdataestado[".sqlFrom"] = "FROM \"public\".\"estado\"";
$tdataestado[".sqlWhereExpr"] = "";
$tdataestado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataestado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataestado[".arrGroupsPerPage"] = $arrGPP;

$tdataestado[".highlightSearchResults"] = true;

$tableKeysestado = array();
$tableKeysestado[] = "idestado";
$tdataestado[".Keys"] = $tableKeysestado;


$tdataestado[".hideMobileList"] = array();




//	idestado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idestado";
	$fdata["GoodName"] = "idestado";
	$fdata["ownerTable"] = "public.estado";
	$fdata["Label"] = GetFieldLabel("public_estado","idestado");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdataestado["idestado"] = $fdata;
		$tdataestado[".searchableFields"][] = "idestado";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "public.estado";
	$fdata["Label"] = GetFieldLabel("public_estado","descripcion");
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


	$tdataestado["descripcion"] = $fdata;
		$tdataestado[".searchableFields"][] = "descripcion";


$tables_data["public.estado"]=&$tdataestado;
$field_labels["public_estado"] = &$fieldLabelsestado;
$fieldToolTips["public_estado"] = &$fieldToolTipsestado;
$placeHolders["public_estado"] = &$placeHoldersestado;
$page_titles["public_estado"] = &$pageTitlesestado;


changeTextControlsToDate( "public.estado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.estado"] = array();
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


		
	$detailsTablesData["public.estado"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.estado"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.estado"][$dIndex]["masterKeys"][]="idestado";

				$detailsTablesData["public.estado"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.estado"][$dIndex]["detailKeys"][]="idestado";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.estado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_estado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idestado\",  	\"descripcion\"";
$proto0["m_strFrom"] = "FROM \"public\".\"estado\"";
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
	"m_strName" => "idestado",
	"m_strTable" => "public.estado",
	"m_srcTableName" => "public.estado"
));

$proto6["m_sql"] = "\"idestado\"";
$proto6["m_srcTableName"] = "public.estado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "public.estado",
	"m_srcTableName" => "public.estado"
));

$proto8["m_sql"] = "\"descripcion\"";
$proto8["m_srcTableName"] = "public.estado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.estado";
$proto11["m_srcTableName"] = "public.estado";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idestado";
$proto11["m_columns"][] = "descripcion";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"estado\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.estado";
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
$proto0["m_srcTableName"]="public.estado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_estado = createSqlQuery_estado();


	
		;

		

$tdataestado[".sqlquery"] = $queryData_estado;



$tdataestado[".hasEvents"] = false;

?>
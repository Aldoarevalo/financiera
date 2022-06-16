<?php
$tdataordendeserviciocompra = array();
$tdataordendeserviciocompra[".searchableFields"] = array();
$tdataordendeserviciocompra[".ShortName"] = "ordendeserviciocompra";
$tdataordendeserviciocompra[".OwnerID"] = "";
$tdataordendeserviciocompra[".OriginalTable"] = "public.ordendeserviciocompra";


$tdataordendeserviciocompra[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataordendeserviciocompra[".originalPagesByType"] = $tdataordendeserviciocompra[".pagesByType"];
$tdataordendeserviciocompra[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataordendeserviciocompra[".originalPages"] = $tdataordendeserviciocompra[".pages"];
$tdataordendeserviciocompra[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataordendeserviciocompra[".originalDefaultPages"] = $tdataordendeserviciocompra[".defaultPages"];

//	field labels
$fieldLabelsordendeserviciocompra = array();
$fieldToolTipsordendeserviciocompra = array();
$pageTitlesordendeserviciocompra = array();
$placeHoldersordendeserviciocompra = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsordendeserviciocompra["Spanish"] = array();
	$fieldToolTipsordendeserviciocompra["Spanish"] = array();
	$placeHoldersordendeserviciocompra["Spanish"] = array();
	$pageTitlesordendeserviciocompra["Spanish"] = array();
	$fieldLabelsordendeserviciocompra["Spanish"]["idordenservicio"] = "Idordenservicio";
	$fieldToolTipsordendeserviciocompra["Spanish"]["idordenservicio"] = "";
	$placeHoldersordendeserviciocompra["Spanish"]["idordenservicio"] = "";
	$fieldLabelsordendeserviciocompra["Spanish"]["idcontrato"] = "Idcontrato";
	$fieldToolTipsordendeserviciocompra["Spanish"]["idcontrato"] = "";
	$placeHoldersordendeserviciocompra["Spanish"]["idcontrato"] = "";
	if (count($fieldToolTipsordendeserviciocompra["Spanish"]))
		$tdataordendeserviciocompra[".isUseToolTips"] = true;
}


	$tdataordendeserviciocompra[".NCSearch"] = true;



$tdataordendeserviciocompra[".shortTableName"] = "ordendeserviciocompra";
$tdataordendeserviciocompra[".nSecOptions"] = 0;

$tdataordendeserviciocompra[".mainTableOwnerID"] = "";
$tdataordendeserviciocompra[".entityType"] = 0;
$tdataordendeserviciocompra[".connId"] = "financiero_at_192_168_70_218";


$tdataordendeserviciocompra[".strOriginalTableName"] = "public.ordendeserviciocompra";

	



$tdataordendeserviciocompra[".showAddInPopup"] = false;

$tdataordendeserviciocompra[".showEditInPopup"] = false;

$tdataordendeserviciocompra[".showViewInPopup"] = false;

$tdataordendeserviciocompra[".listAjax"] = false;
//	temporary
//$tdataordendeserviciocompra[".listAjax"] = false;

	$tdataordendeserviciocompra[".audit"] = false;

	$tdataordendeserviciocompra[".locking"] = false;


$pages = $tdataordendeserviciocompra[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataordendeserviciocompra[".edit"] = true;
	$tdataordendeserviciocompra[".afterEditAction"] = 1;
	$tdataordendeserviciocompra[".closePopupAfterEdit"] = 1;
	$tdataordendeserviciocompra[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataordendeserviciocompra[".add"] = true;
$tdataordendeserviciocompra[".afterAddAction"] = 1;
$tdataordendeserviciocompra[".closePopupAfterAdd"] = 1;
$tdataordendeserviciocompra[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataordendeserviciocompra[".list"] = true;
}



$tdataordendeserviciocompra[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataordendeserviciocompra[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataordendeserviciocompra[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataordendeserviciocompra[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataordendeserviciocompra[".printFriendly"] = true;
}



$tdataordendeserviciocompra[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataordendeserviciocompra[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataordendeserviciocompra[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataordendeserviciocompra[".isUseAjaxSuggest"] = true;

$tdataordendeserviciocompra[".rowHighlite"] = true;





$tdataordendeserviciocompra[".ajaxCodeSnippetAdded"] = false;

$tdataordendeserviciocompra[".buttonsAdded"] = false;

$tdataordendeserviciocompra[".addPageEvents"] = false;

// use timepicker for search panel
$tdataordendeserviciocompra[".isUseTimeForSearch"] = false;


$tdataordendeserviciocompra[".badgeColor"] = "2F4F4F";


$tdataordendeserviciocompra[".allSearchFields"] = array();
$tdataordendeserviciocompra[".filterFields"] = array();
$tdataordendeserviciocompra[".requiredSearchFields"] = array();

$tdataordendeserviciocompra[".googleLikeFields"] = array();
$tdataordendeserviciocompra[".googleLikeFields"][] = "idordenservicio";
$tdataordendeserviciocompra[".googleLikeFields"][] = "idcontrato";



$tdataordendeserviciocompra[".tableType"] = "list";

$tdataordendeserviciocompra[".printerPageOrientation"] = 0;
$tdataordendeserviciocompra[".nPrinterPageScale"] = 100;

$tdataordendeserviciocompra[".nPrinterSplitRecords"] = 40;

$tdataordendeserviciocompra[".geocodingEnabled"] = false;










$tdataordendeserviciocompra[".pageSize"] = 20;

$tdataordendeserviciocompra[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataordendeserviciocompra[".strOrderBy"] = $tstrOrderBy;

$tdataordendeserviciocompra[".orderindexes"] = array();


$tdataordendeserviciocompra[".sqlHead"] = "SELECT \"idordenservicio\",  	\"idcontrato\"";
$tdataordendeserviciocompra[".sqlFrom"] = "FROM \"public\".\"ordendeserviciocompra\"";
$tdataordendeserviciocompra[".sqlWhereExpr"] = "";
$tdataordendeserviciocompra[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataordendeserviciocompra[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataordendeserviciocompra[".arrGroupsPerPage"] = $arrGPP;

$tdataordendeserviciocompra[".highlightSearchResults"] = true;

$tableKeysordendeserviciocompra = array();
$tableKeysordendeserviciocompra[] = "idordenservicio";
$tdataordendeserviciocompra[".Keys"] = $tableKeysordendeserviciocompra;


$tdataordendeserviciocompra[".hideMobileList"] = array();




//	idordenservicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idordenservicio";
	$fdata["GoodName"] = "idordenservicio";
	$fdata["ownerTable"] = "public.ordendeserviciocompra";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocompra","idordenservicio");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idordenservicio";

		$fdata["sourceSingle"] = "idordenservicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idordenservicio\"";

	
	
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


	$tdataordendeserviciocompra["idordenservicio"] = $fdata;
		$tdataordendeserviciocompra[".searchableFields"][] = "idordenservicio";
//	idcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idcontrato";
	$fdata["GoodName"] = "idcontrato";
	$fdata["ownerTable"] = "public.ordendeserviciocompra";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciocompra","idcontrato");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idcontrato";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "documento";

	

	
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


	$tdataordendeserviciocompra["idcontrato"] = $fdata;
		$tdataordendeserviciocompra[".searchableFields"][] = "idcontrato";


$tables_data["public.ordendeserviciocompra"]=&$tdataordendeserviciocompra;
$field_labels["public_ordendeserviciocompra"] = &$fieldLabelsordendeserviciocompra;
$fieldToolTips["public_ordendeserviciocompra"] = &$fieldToolTipsordendeserviciocompra;
$placeHolders["public_ordendeserviciocompra"] = &$placeHoldersordendeserviciocompra;
$page_titles["public_ordendeserviciocompra"] = &$pageTitlesordendeserviciocompra;


changeTextControlsToDate( "public.ordendeserviciocompra" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.ordendeserviciocompra"] = array();
//	public.trabajorealizado
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="public.trabajorealizado";
		$detailsParam["dOriginalTable"] = "public.trabajorealizado";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "trabajorealizado";
	$detailsParam["dCaptionTable"] = GetTableCaption("public_trabajorealizado");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["public.ordendeserviciocompra"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.ordendeserviciocompra"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.ordendeserviciocompra"][$dIndex]["masterKeys"][]="idordenservicio";

				$detailsTablesData["public.ordendeserviciocompra"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.ordendeserviciocompra"][$dIndex]["detailKeys"][]="idordenservicio";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.ordendeserviciocompra"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.ordendeserviciocompra"][0] = $masterParams;
				$masterTablesData["public.ordendeserviciocompra"][0]["masterKeys"] = array();
	$masterTablesData["public.ordendeserviciocompra"][0]["masterKeys"][]="idcontrato";
				$masterTablesData["public.ordendeserviciocompra"][0]["detailKeys"] = array();
	$masterTablesData["public.ordendeserviciocompra"][0]["detailKeys"][]="idcontrato";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ordendeserviciocompra()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idordenservicio\",  	\"idcontrato\"";
$proto0["m_strFrom"] = "FROM \"public\".\"ordendeserviciocompra\"";
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
	"m_strName" => "idordenservicio",
	"m_strTable" => "public.ordendeserviciocompra",
	"m_srcTableName" => "public.ordendeserviciocompra"
));

$proto6["m_sql"] = "\"idordenservicio\"";
$proto6["m_srcTableName"] = "public.ordendeserviciocompra";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idcontrato",
	"m_strTable" => "public.ordendeserviciocompra",
	"m_srcTableName" => "public.ordendeserviciocompra"
));

$proto8["m_sql"] = "\"idcontrato\"";
$proto8["m_srcTableName"] = "public.ordendeserviciocompra";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "public.ordendeserviciocompra";
$proto11["m_srcTableName"] = "public.ordendeserviciocompra";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idordenservicio";
$proto11["m_columns"][] = "idcontrato";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "\"public\".\"ordendeserviciocompra\"";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "public.ordendeserviciocompra";
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
$proto0["m_srcTableName"]="public.ordendeserviciocompra";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ordendeserviciocompra = createSqlQuery_ordendeserviciocompra();


	
		;

		

$tdataordendeserviciocompra[".sqlquery"] = $queryData_ordendeserviciocompra;



$tdataordendeserviciocompra[".hasEvents"] = false;

?>
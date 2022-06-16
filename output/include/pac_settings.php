<?php
$tdatapac = array();
$tdatapac[".searchableFields"] = array();
$tdatapac[".ShortName"] = "pac";
$tdatapac[".OwnerID"] = "";
$tdatapac[".OriginalTable"] = "public.pac";


$tdatapac[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapac[".originalPagesByType"] = $tdatapac[".pagesByType"];
$tdatapac[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapac[".originalPages"] = $tdatapac[".pages"];
$tdatapac[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapac[".originalDefaultPages"] = $tdatapac[".defaultPages"];

//	field labels
$fieldLabelspac = array();
$fieldToolTipspac = array();
$pageTitlespac = array();
$placeHolderspac = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelspac["Spanish"] = array();
	$fieldToolTipspac["Spanish"] = array();
	$placeHolderspac["Spanish"] = array();
	$pageTitlespac["Spanish"] = array();
	$fieldLabelspac["Spanish"]["idpac"] = "Idpac";
	$fieldToolTipspac["Spanish"]["idpac"] = "";
	$placeHolderspac["Spanish"]["idpac"] = "";
	$fieldLabelspac["Spanish"]["fecharesolucion"] = "Fecha de Resolucion";
	$fieldToolTipspac["Spanish"]["fecharesolucion"] = "";
	$placeHolderspac["Spanish"]["fecharesolucion"] = "";
	$fieldLabelspac["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipspac["Spanish"]["descripcion"] = "";
	$placeHolderspac["Spanish"]["descripcion"] = "";
	$fieldLabelspac["Spanish"]["monto"] = "Monto";
	$fieldToolTipspac["Spanish"]["monto"] = "";
	$placeHolderspac["Spanish"]["monto"] = "";
	if (count($fieldToolTipspac["Spanish"]))
		$tdatapac[".isUseToolTips"] = true;
}


	$tdatapac[".NCSearch"] = true;



$tdatapac[".shortTableName"] = "pac";
$tdatapac[".nSecOptions"] = 0;

$tdatapac[".mainTableOwnerID"] = "";
$tdatapac[".entityType"] = 0;
$tdatapac[".connId"] = "financiero_at_192_168_70_218";


$tdatapac[".strOriginalTableName"] = "public.pac";

	



$tdatapac[".showAddInPopup"] = false;

$tdatapac[".showEditInPopup"] = false;

$tdatapac[".showViewInPopup"] = false;

$tdatapac[".listAjax"] = false;
//	temporary
//$tdatapac[".listAjax"] = false;

	$tdatapac[".audit"] = false;

	$tdatapac[".locking"] = false;


$pages = $tdatapac[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapac[".edit"] = true;
	$tdatapac[".afterEditAction"] = 1;
	$tdatapac[".closePopupAfterEdit"] = 1;
	$tdatapac[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapac[".add"] = true;
$tdatapac[".afterAddAction"] = 1;
$tdatapac[".closePopupAfterAdd"] = 1;
$tdatapac[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapac[".list"] = true;
}



$tdatapac[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapac[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapac[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapac[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapac[".printFriendly"] = true;
}



$tdatapac[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapac[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapac[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapac[".isUseAjaxSuggest"] = true;

$tdatapac[".rowHighlite"] = true;





$tdatapac[".ajaxCodeSnippetAdded"] = false;

$tdatapac[".buttonsAdded"] = false;

$tdatapac[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapac[".isUseTimeForSearch"] = false;


$tdatapac[".badgeColor"] = "EDCA00";


$tdatapac[".allSearchFields"] = array();
$tdatapac[".filterFields"] = array();
$tdatapac[".requiredSearchFields"] = array();

$tdatapac[".googleLikeFields"] = array();
$tdatapac[".googleLikeFields"][] = "idpac";
$tdatapac[".googleLikeFields"][] = "fecharesolucion";
$tdatapac[".googleLikeFields"][] = "descripcion";
$tdatapac[".googleLikeFields"][] = "monto";



$tdatapac[".tableType"] = "list";

$tdatapac[".printerPageOrientation"] = 0;
$tdatapac[".nPrinterPageScale"] = 100;

$tdatapac[".nPrinterSplitRecords"] = 40;

$tdatapac[".geocodingEnabled"] = false;










$tdatapac[".pageSize"] = 20;

$tdatapac[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapac[".strOrderBy"] = $tstrOrderBy;

$tdatapac[".orderindexes"] = array();


$tdatapac[".sqlHead"] = "SELECT \"idpac\",  	\"fecharesolucion\",  	\"descripcion\",  	\"monto\"";
$tdatapac[".sqlFrom"] = "FROM \"public\".\"pac\"";
$tdatapac[".sqlWhereExpr"] = "";
$tdatapac[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapac[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapac[".arrGroupsPerPage"] = $arrGPP;

$tdatapac[".highlightSearchResults"] = true;

$tableKeyspac = array();
$tableKeyspac[] = "idpac";
$tdatapac[".Keys"] = $tableKeyspac;


$tdatapac[".hideMobileList"] = array();




//	idpac
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idpac";
	$fdata["GoodName"] = "idpac";
	$fdata["ownerTable"] = "public.pac";
	$fdata["Label"] = GetFieldLabel("public_pac","idpac");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idpac";

		$fdata["sourceSingle"] = "idpac";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idpac\"";

	
	
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


	$tdatapac["idpac"] = $fdata;
		$tdatapac[".searchableFields"][] = "idpac";
//	fecharesolucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fecharesolucion";
	$fdata["GoodName"] = "fecharesolucion";
	$fdata["ownerTable"] = "public.pac";
	$fdata["Label"] = GetFieldLabel("public_pac","fecharesolucion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecharesolucion";

		$fdata["sourceSingle"] = "fecharesolucion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"fecharesolucion\"";

	
	
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


	$tdatapac["fecharesolucion"] = $fdata;
		$tdatapac[".searchableFields"][] = "fecharesolucion";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "public.pac";
	$fdata["Label"] = GetFieldLabel("public_pac","descripcion");
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


	$tdatapac["descripcion"] = $fdata;
		$tdatapac[".searchableFields"][] = "descripcion";
//	monto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "monto";
	$fdata["GoodName"] = "monto";
	$fdata["ownerTable"] = "public.pac";
	$fdata["Label"] = GetFieldLabel("public_pac","monto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "monto";

		$fdata["sourceSingle"] = "monto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"monto\"";

	
	
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


	$tdatapac["monto"] = $fdata;
		$tdatapac[".searchableFields"][] = "monto";


$tables_data["public.pac"]=&$tdatapac;
$field_labels["public_pac"] = &$fieldLabelspac;
$fieldToolTips["public_pac"] = &$fieldToolTipspac;
$placeHolders["public_pac"] = &$placeHolderspac;
$page_titles["public_pac"] = &$pageTitlespac;


changeTextControlsToDate( "public.pac" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.pac"] = array();
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


		
	$detailsTablesData["public.pac"][$dIndex] = $detailsParam;

	
		$detailsTablesData["public.pac"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["public.pac"][$dIndex]["masterKeys"][]="idpac";

				$detailsTablesData["public.pac"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["public.pac"][$dIndex]["detailKeys"][]="idpac";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.pac"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pac()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idpac\",  	\"fecharesolucion\",  	\"descripcion\",  	\"monto\"";
$proto0["m_strFrom"] = "FROM \"public\".\"pac\"";
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
	"m_strName" => "idpac",
	"m_strTable" => "public.pac",
	"m_srcTableName" => "public.pac"
));

$proto6["m_sql"] = "\"idpac\"";
$proto6["m_srcTableName"] = "public.pac";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fecharesolucion",
	"m_strTable" => "public.pac",
	"m_srcTableName" => "public.pac"
));

$proto8["m_sql"] = "\"fecharesolucion\"";
$proto8["m_srcTableName"] = "public.pac";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "public.pac",
	"m_srcTableName" => "public.pac"
));

$proto10["m_sql"] = "\"descripcion\"";
$proto10["m_srcTableName"] = "public.pac";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "monto",
	"m_strTable" => "public.pac",
	"m_srcTableName" => "public.pac"
));

$proto12["m_sql"] = "\"monto\"";
$proto12["m_srcTableName"] = "public.pac";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.pac";
$proto15["m_srcTableName"] = "public.pac";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "idpac";
$proto15["m_columns"][] = "fecharesolucion";
$proto15["m_columns"][] = "descripcion";
$proto15["m_columns"][] = "monto";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".\"pac\"";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.pac";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.pac";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pac = createSqlQuery_pac();


	
		;

				

$tdatapac[".sqlquery"] = $queryData_pac;



$tdatapac[".hasEvents"] = false;

?>
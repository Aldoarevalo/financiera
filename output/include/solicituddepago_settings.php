<?php
$tdatasolicituddepago = array();
$tdatasolicituddepago[".searchableFields"] = array();
$tdatasolicituddepago[".ShortName"] = "solicituddepago";
$tdatasolicituddepago[".OwnerID"] = "";
$tdatasolicituddepago[".OriginalTable"] = "public.solicituddepago";


$tdatasolicituddepago[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasolicituddepago[".originalPagesByType"] = $tdatasolicituddepago[".pagesByType"];
$tdatasolicituddepago[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasolicituddepago[".originalPages"] = $tdatasolicituddepago[".pages"];
$tdatasolicituddepago[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasolicituddepago[".originalDefaultPages"] = $tdatasolicituddepago[".defaultPages"];

//	field labels
$fieldLabelssolicituddepago = array();
$fieldToolTipssolicituddepago = array();
$pageTitlessolicituddepago = array();
$placeHolderssolicituddepago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssolicituddepago["Spanish"] = array();
	$fieldToolTipssolicituddepago["Spanish"] = array();
	$placeHolderssolicituddepago["Spanish"] = array();
	$pageTitlessolicituddepago["Spanish"] = array();
	$fieldLabelssolicituddepago["Spanish"]["idsolicituddepago"] = "Idsolicituddepago";
	$fieldToolTipssolicituddepago["Spanish"]["idsolicituddepago"] = "";
	$placeHolderssolicituddepago["Spanish"]["idsolicituddepago"] = "";
	$fieldLabelssolicituddepago["Spanish"]["idtrabajo"] = "Id del Trabajo";
	$fieldToolTipssolicituddepago["Spanish"]["idtrabajo"] = "";
	$placeHolderssolicituddepago["Spanish"]["idtrabajo"] = "";
	$fieldLabelssolicituddepago["Spanish"]["idestadopago"] = "Estado de pago";
	$fieldToolTipssolicituddepago["Spanish"]["idestadopago"] = "";
	$placeHolderssolicituddepago["Spanish"]["idestadopago"] = "";
	if (count($fieldToolTipssolicituddepago["Spanish"]))
		$tdatasolicituddepago[".isUseToolTips"] = true;
}


	$tdatasolicituddepago[".NCSearch"] = true;



$tdatasolicituddepago[".shortTableName"] = "solicituddepago";
$tdatasolicituddepago[".nSecOptions"] = 0;

$tdatasolicituddepago[".mainTableOwnerID"] = "";
$tdatasolicituddepago[".entityType"] = 0;
$tdatasolicituddepago[".connId"] = "financiero_at_192_168_70_218";


$tdatasolicituddepago[".strOriginalTableName"] = "public.solicituddepago";

	



$tdatasolicituddepago[".showAddInPopup"] = false;

$tdatasolicituddepago[".showEditInPopup"] = false;

$tdatasolicituddepago[".showViewInPopup"] = false;

$tdatasolicituddepago[".listAjax"] = false;
//	temporary
//$tdatasolicituddepago[".listAjax"] = false;

	$tdatasolicituddepago[".audit"] = false;

	$tdatasolicituddepago[".locking"] = false;


$pages = $tdatasolicituddepago[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasolicituddepago[".edit"] = true;
	$tdatasolicituddepago[".afterEditAction"] = 1;
	$tdatasolicituddepago[".closePopupAfterEdit"] = 1;
	$tdatasolicituddepago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasolicituddepago[".add"] = true;
$tdatasolicituddepago[".afterAddAction"] = 1;
$tdatasolicituddepago[".closePopupAfterAdd"] = 1;
$tdatasolicituddepago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasolicituddepago[".list"] = true;
}



$tdatasolicituddepago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasolicituddepago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasolicituddepago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasolicituddepago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasolicituddepago[".printFriendly"] = true;
}



$tdatasolicituddepago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasolicituddepago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasolicituddepago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasolicituddepago[".isUseAjaxSuggest"] = true;

$tdatasolicituddepago[".rowHighlite"] = true;





$tdatasolicituddepago[".ajaxCodeSnippetAdded"] = false;

$tdatasolicituddepago[".buttonsAdded"] = false;

$tdatasolicituddepago[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasolicituddepago[".isUseTimeForSearch"] = false;


$tdatasolicituddepago[".badgeColor"] = "4682B4";


$tdatasolicituddepago[".allSearchFields"] = array();
$tdatasolicituddepago[".filterFields"] = array();
$tdatasolicituddepago[".requiredSearchFields"] = array();

$tdatasolicituddepago[".googleLikeFields"] = array();
$tdatasolicituddepago[".googleLikeFields"][] = "idsolicituddepago";
$tdatasolicituddepago[".googleLikeFields"][] = "idtrabajo";
$tdatasolicituddepago[".googleLikeFields"][] = "idestadopago";



$tdatasolicituddepago[".tableType"] = "list";

$tdatasolicituddepago[".printerPageOrientation"] = 0;
$tdatasolicituddepago[".nPrinterPageScale"] = 100;

$tdatasolicituddepago[".nPrinterSplitRecords"] = 40;

$tdatasolicituddepago[".geocodingEnabled"] = false;










$tdatasolicituddepago[".pageSize"] = 20;

$tdatasolicituddepago[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasolicituddepago[".strOrderBy"] = $tstrOrderBy;

$tdatasolicituddepago[".orderindexes"] = array();


$tdatasolicituddepago[".sqlHead"] = "SELECT \"idsolicituddepago\",  	\"idtrabajo\",  	\"idestadopago\"";
$tdatasolicituddepago[".sqlFrom"] = "FROM \"public\".\"solicituddepago\"";
$tdatasolicituddepago[".sqlWhereExpr"] = "";
$tdatasolicituddepago[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasolicituddepago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasolicituddepago[".arrGroupsPerPage"] = $arrGPP;

$tdatasolicituddepago[".highlightSearchResults"] = true;

$tableKeyssolicituddepago = array();
$tableKeyssolicituddepago[] = "idsolicituddepago";
$tdatasolicituddepago[".Keys"] = $tableKeyssolicituddepago;


$tdatasolicituddepago[".hideMobileList"] = array();




//	idsolicituddepago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idsolicituddepago";
	$fdata["GoodName"] = "idsolicituddepago";
	$fdata["ownerTable"] = "public.solicituddepago";
	$fdata["Label"] = GetFieldLabel("public_solicituddepago","idsolicituddepago");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idsolicituddepago";

		$fdata["sourceSingle"] = "idsolicituddepago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idsolicituddepago\"";

	
	
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


	$tdatasolicituddepago["idsolicituddepago"] = $fdata;
		$tdatasolicituddepago[".searchableFields"][] = "idsolicituddepago";
//	idtrabajo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idtrabajo";
	$fdata["GoodName"] = "idtrabajo";
	$fdata["ownerTable"] = "public.solicituddepago";
	$fdata["Label"] = GetFieldLabel("public_solicituddepago","idtrabajo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idtrabajo";

		$fdata["sourceSingle"] = "idtrabajo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idtrabajo\"";

	
	
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
	$edata["LookupTable"] = "public.trabajorealizado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idtrabajo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idtrabajo";

	

	
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


	$tdatasolicituddepago["idtrabajo"] = $fdata;
		$tdatasolicituddepago[".searchableFields"][] = "idtrabajo";
//	idestadopago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idestadopago";
	$fdata["GoodName"] = "idestadopago";
	$fdata["ownerTable"] = "public.solicituddepago";
	$fdata["Label"] = GetFieldLabel("public_solicituddepago","idestadopago");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "public.estadodepago";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idestadopago";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idestadopago";

	

	
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


	$tdatasolicituddepago["idestadopago"] = $fdata;
		$tdatasolicituddepago[".searchableFields"][] = "idestadopago";


$tables_data["public.solicituddepago"]=&$tdatasolicituddepago;
$field_labels["public_solicituddepago"] = &$fieldLabelssolicituddepago;
$fieldToolTips["public_solicituddepago"] = &$fieldToolTipssolicituddepago;
$placeHolders["public_solicituddepago"] = &$placeHolderssolicituddepago;
$page_titles["public_solicituddepago"] = &$pageTitlessolicituddepago;


changeTextControlsToDate( "public.solicituddepago" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.solicituddepago"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.solicituddepago"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.estadodepago";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.estadodepago";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "estadodepago";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.solicituddepago"][0] = $masterParams;
				$masterTablesData["public.solicituddepago"][0]["masterKeys"] = array();
	$masterTablesData["public.solicituddepago"][0]["masterKeys"][]="idestadopago";
				$masterTablesData["public.solicituddepago"][0]["detailKeys"] = array();
	$masterTablesData["public.solicituddepago"][0]["detailKeys"][]="idestadopago";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.trabajorealizado";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.trabajorealizado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "trabajorealizado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.solicituddepago"][1] = $masterParams;
				$masterTablesData["public.solicituddepago"][1]["masterKeys"] = array();
	$masterTablesData["public.solicituddepago"][1]["masterKeys"][]="idtrabajo";
				$masterTablesData["public.solicituddepago"][1]["detailKeys"] = array();
	$masterTablesData["public.solicituddepago"][1]["detailKeys"][]="idtrabajo";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_solicituddepago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"idsolicituddepago\",  	\"idtrabajo\",  	\"idestadopago\"";
$proto0["m_strFrom"] = "FROM \"public\".\"solicituddepago\"";
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
	"m_strName" => "idsolicituddepago",
	"m_strTable" => "public.solicituddepago",
	"m_srcTableName" => "public.solicituddepago"
));

$proto6["m_sql"] = "\"idsolicituddepago\"";
$proto6["m_srcTableName"] = "public.solicituddepago";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idtrabajo",
	"m_strTable" => "public.solicituddepago",
	"m_srcTableName" => "public.solicituddepago"
));

$proto8["m_sql"] = "\"idtrabajo\"";
$proto8["m_srcTableName"] = "public.solicituddepago";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idestadopago",
	"m_strTable" => "public.solicituddepago",
	"m_srcTableName" => "public.solicituddepago"
));

$proto10["m_sql"] = "\"idestadopago\"";
$proto10["m_srcTableName"] = "public.solicituddepago";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "public.solicituddepago";
$proto13["m_srcTableName"] = "public.solicituddepago";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "idsolicituddepago";
$proto13["m_columns"][] = "idtrabajo";
$proto13["m_columns"][] = "idestadopago";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "\"public\".\"solicituddepago\"";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "public.solicituddepago";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.solicituddepago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_solicituddepago = createSqlQuery_solicituddepago();


	
		;

			

$tdatasolicituddepago[".sqlquery"] = $queryData_solicituddepago;



$tdatasolicituddepago[".hasEvents"] = false;

?>
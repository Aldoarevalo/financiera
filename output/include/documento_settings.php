<?php
$tdatadocumento = array();
$tdatadocumento[".searchableFields"] = array();
$tdatadocumento[".ShortName"] = "documento";
$tdatadocumento[".OwnerID"] = "";
$tdatadocumento[".OriginalTable"] = "public.documento";


$tdatadocumento[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatadocumento[".originalPagesByType"] = $tdatadocumento[".pagesByType"];
$tdatadocumento[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatadocumento[".originalPages"] = $tdatadocumento[".pages"];
$tdatadocumento[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatadocumento[".originalDefaultPages"] = $tdatadocumento[".defaultPages"];

//	field labels
$fieldLabelsdocumento = array();
$fieldToolTipsdocumento = array();
$pageTitlesdocumento = array();
$placeHoldersdocumento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdocumento["Spanish"] = array();
	$fieldToolTipsdocumento["Spanish"] = array();
	$placeHoldersdocumento["Spanish"] = array();
	$pageTitlesdocumento["Spanish"] = array();
	$fieldLabelsdocumento["Spanish"]["iddocumento"] = "Iddocumento";
	$fieldToolTipsdocumento["Spanish"]["iddocumento"] = "";
	$placeHoldersdocumento["Spanish"]["iddocumento"] = "";
	$fieldLabelsdocumento["Spanish"]["idllamado"] = "Idllamado";
	$fieldToolTipsdocumento["Spanish"]["idllamado"] = "";
	$placeHoldersdocumento["Spanish"]["idllamado"] = "";
	$fieldLabelsdocumento["Spanish"]["documento"] = "Documento";
	$fieldToolTipsdocumento["Spanish"]["documento"] = "";
	$placeHoldersdocumento["Spanish"]["documento"] = "";
	$fieldLabelsdocumento["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipsdocumento["Spanish"]["descripcion"] = "";
	$placeHoldersdocumento["Spanish"]["descripcion"] = "";
	if (count($fieldToolTipsdocumento["Spanish"]))
		$tdatadocumento[".isUseToolTips"] = true;
}


	$tdatadocumento[".NCSearch"] = true;



$tdatadocumento[".shortTableName"] = "documento";
$tdatadocumento[".nSecOptions"] = 0;

$tdatadocumento[".mainTableOwnerID"] = "";
$tdatadocumento[".entityType"] = 0;
$tdatadocumento[".connId"] = "financiero_at_192_168_70_218";


$tdatadocumento[".strOriginalTableName"] = "public.documento";

	



$tdatadocumento[".showAddInPopup"] = false;

$tdatadocumento[".showEditInPopup"] = false;

$tdatadocumento[".showViewInPopup"] = false;

$tdatadocumento[".listAjax"] = false;
//	temporary
//$tdatadocumento[".listAjax"] = false;

	$tdatadocumento[".audit"] = false;

	$tdatadocumento[".locking"] = false;


$pages = $tdatadocumento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadocumento[".edit"] = true;
	$tdatadocumento[".afterEditAction"] = 1;
	$tdatadocumento[".closePopupAfterEdit"] = 1;
	$tdatadocumento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadocumento[".add"] = true;
$tdatadocumento[".afterAddAction"] = 1;
$tdatadocumento[".closePopupAfterAdd"] = 1;
$tdatadocumento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadocumento[".list"] = true;
}



$tdatadocumento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadocumento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadocumento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadocumento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadocumento[".printFriendly"] = true;
}



$tdatadocumento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadocumento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadocumento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadocumento[".isUseAjaxSuggest"] = true;

$tdatadocumento[".rowHighlite"] = true;





$tdatadocumento[".ajaxCodeSnippetAdded"] = false;

$tdatadocumento[".buttonsAdded"] = false;

$tdatadocumento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadocumento[".isUseTimeForSearch"] = false;


$tdatadocumento[".badgeColor"] = "6DA5C8";


$tdatadocumento[".allSearchFields"] = array();
$tdatadocumento[".filterFields"] = array();
$tdatadocumento[".requiredSearchFields"] = array();

$tdatadocumento[".googleLikeFields"] = array();
$tdatadocumento[".googleLikeFields"][] = "iddocumento";
$tdatadocumento[".googleLikeFields"][] = "documento";
$tdatadocumento[".googleLikeFields"][] = "descripcion";
$tdatadocumento[".googleLikeFields"][] = "idllamado";



$tdatadocumento[".tableType"] = "list";

$tdatadocumento[".printerPageOrientation"] = 0;
$tdatadocumento[".nPrinterPageScale"] = 100;

$tdatadocumento[".nPrinterSplitRecords"] = 40;

$tdatadocumento[".geocodingEnabled"] = false;










$tdatadocumento[".pageSize"] = 20;

$tdatadocumento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadocumento[".strOrderBy"] = $tstrOrderBy;

$tdatadocumento[".orderindexes"] = array();


$tdatadocumento[".sqlHead"] = "SELECT \"iddocumento\",  	\"documento\",  	\"descripcion\",  	\"idllamado\"";
$tdatadocumento[".sqlFrom"] = "FROM \"public\".\"documento\"";
$tdatadocumento[".sqlWhereExpr"] = "";
$tdatadocumento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadocumento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadocumento[".arrGroupsPerPage"] = $arrGPP;

$tdatadocumento[".highlightSearchResults"] = true;

$tableKeysdocumento = array();
$tableKeysdocumento[] = "iddocumento";
$tdatadocumento[".Keys"] = $tableKeysdocumento;


$tdatadocumento[".hideMobileList"] = array();




//	iddocumento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "iddocumento";
	$fdata["GoodName"] = "iddocumento";
	$fdata["ownerTable"] = "public.documento";
	$fdata["Label"] = GetFieldLabel("public_documento","iddocumento");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "iddocumento";

		$fdata["sourceSingle"] = "iddocumento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"iddocumento\"";

	
	
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


	$tdatadocumento["iddocumento"] = $fdata;
		$tdatadocumento[".searchableFields"][] = "iddocumento";
//	documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "documento";
	$fdata["GoodName"] = "documento";
	$fdata["ownerTable"] = "public.documento";
	$fdata["Label"] = GetFieldLabel("public_documento","documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "documento";

		$fdata["sourceSingle"] = "documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"documento\"";

	
	
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


	$tdatadocumento["documento"] = $fdata;
		$tdatadocumento[".searchableFields"][] = "documento";
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "public.documento";
	$fdata["Label"] = GetFieldLabel("public_documento","descripcion");
	$fdata["FieldType"] = 201;


	
	
			

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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatadocumento["descripcion"] = $fdata;
		$tdatadocumento[".searchableFields"][] = "descripcion";
//	idllamado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idllamado";
	$fdata["GoodName"] = "idllamado";
	$fdata["ownerTable"] = "public.documento";
	$fdata["Label"] = GetFieldLabel("public_documento","idllamado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idllamado";

		$fdata["sourceSingle"] = "idllamado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idllamado\"";

	
	
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
	$edata["LookupTable"] = "public.llamado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idllamado";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "idllamado";

	

	
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


	$tdatadocumento["idllamado"] = $fdata;
		$tdatadocumento[".searchableFields"][] = "idllamado";


$tables_data["public.documento"]=&$tdatadocumento;
$field_labels["public_documento"] = &$fieldLabelsdocumento;
$fieldToolTips["public_documento"] = &$fieldToolTipsdocumento;
$placeHolders["public_documento"] = &$placeHoldersdocumento;
$page_titles["public_documento"] = &$pageTitlesdocumento;


changeTextControlsToDate( "public.documento" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.documento"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.documento"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.llamado";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.llamado";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "llamado";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.documento"][0] = $masterParams;
				$masterTablesData["public.documento"][0]["masterKeys"] = array();
	$masterTablesData["public.documento"][0]["masterKeys"][]="idllamado";
				$masterTablesData["public.documento"][0]["detailKeys"] = array();
	$masterTablesData["public.documento"][0]["detailKeys"][]="idllamado";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_documento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"iddocumento\",  	\"documento\",  	\"descripcion\",  	\"idllamado\"";
$proto0["m_strFrom"] = "FROM \"public\".\"documento\"";
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
	"m_strName" => "iddocumento",
	"m_strTable" => "public.documento",
	"m_srcTableName" => "public.documento"
));

$proto6["m_sql"] = "\"iddocumento\"";
$proto6["m_srcTableName"] = "public.documento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "documento",
	"m_strTable" => "public.documento",
	"m_srcTableName" => "public.documento"
));

$proto8["m_sql"] = "\"documento\"";
$proto8["m_srcTableName"] = "public.documento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "public.documento",
	"m_srcTableName" => "public.documento"
));

$proto10["m_sql"] = "\"descripcion\"";
$proto10["m_srcTableName"] = "public.documento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idllamado",
	"m_strTable" => "public.documento",
	"m_srcTableName" => "public.documento"
));

$proto12["m_sql"] = "\"idllamado\"";
$proto12["m_srcTableName"] = "public.documento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "public.documento";
$proto15["m_srcTableName"] = "public.documento";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "iddocumento";
$proto15["m_columns"][] = "documento";
$proto15["m_columns"][] = "descripcion";
$proto15["m_columns"][] = "idllamado";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "\"public\".\"documento\"";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "public.documento";
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
$proto0["m_srcTableName"]="public.documento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_documento = createSqlQuery_documento();


	
		;

				

$tdatadocumento[".sqlquery"] = $queryData_documento;



$tdatadocumento[".hasEvents"] = false;

?>
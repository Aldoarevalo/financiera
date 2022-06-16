<?php
$tdataordendeserviciodetalle = array();
$tdataordendeserviciodetalle[".searchableFields"] = array();
$tdataordendeserviciodetalle[".ShortName"] = "ordendeserviciodetalle";
$tdataordendeserviciodetalle[".OwnerID"] = "";
$tdataordendeserviciodetalle[".OriginalTable"] = "public.ordendeserviciodetalle";


$tdataordendeserviciodetalle[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataordendeserviciodetalle[".originalPagesByType"] = $tdataordendeserviciodetalle[".pagesByType"];
$tdataordendeserviciodetalle[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataordendeserviciodetalle[".originalPages"] = $tdataordendeserviciodetalle[".pages"];
$tdataordendeserviciodetalle[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataordendeserviciodetalle[".originalDefaultPages"] = $tdataordendeserviciodetalle[".defaultPages"];

//	field labels
$fieldLabelsordendeserviciodetalle = array();
$fieldToolTipsordendeserviciodetalle = array();
$pageTitlesordendeserviciodetalle = array();
$placeHoldersordendeserviciodetalle = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsordendeserviciodetalle["Spanish"] = array();
	$fieldToolTipsordendeserviciodetalle["Spanish"] = array();
	$placeHoldersordendeserviciodetalle["Spanish"] = array();
	$pageTitlesordendeserviciodetalle["Spanish"] = array();
	$fieldLabelsordendeserviciodetalle["Spanish"]["nroorden"] = "Nroorden";
	$fieldToolTipsordendeserviciodetalle["Spanish"]["nroorden"] = "";
	$placeHoldersordendeserviciodetalle["Spanish"]["nroorden"] = "";
	$fieldLabelsordendeserviciodetalle["Spanish"]["nroitemlote"] = "Numero de item lote";
	$fieldToolTipsordendeserviciodetalle["Spanish"]["nroitemlote"] = "";
	$placeHoldersordendeserviciodetalle["Spanish"]["nroitemlote"] = "";
	$fieldLabelsordendeserviciodetalle["Spanish"]["ummedia"] = "Unidad de media";
	$fieldToolTipsordendeserviciodetalle["Spanish"]["ummedia"] = "";
	$placeHoldersordendeserviciodetalle["Spanish"]["ummedia"] = "";
	$fieldLabelsordendeserviciodetalle["Spanish"]["marca"] = "Marca";
	$fieldToolTipsordendeserviciodetalle["Spanish"]["marca"] = "";
	$placeHoldersordendeserviciodetalle["Spanish"]["marca"] = "";
	$fieldLabelsordendeserviciodetalle["Spanish"]["cantidad"] = "Cantidad";
	$fieldToolTipsordendeserviciodetalle["Spanish"]["cantidad"] = "";
	$placeHoldersordendeserviciodetalle["Spanish"]["cantidad"] = "";
	$fieldLabelsordendeserviciodetalle["Spanish"]["preciounitario"] = "Precio unitario";
	$fieldToolTipsordendeserviciodetalle["Spanish"]["preciounitario"] = "";
	$placeHoldersordendeserviciodetalle["Spanish"]["preciounitario"] = "";
	$fieldLabelsordendeserviciodetalle["Spanish"]["grabadas"] = "Grabadas";
	$fieldToolTipsordendeserviciodetalle["Spanish"]["grabadas"] = "";
	$placeHoldersordendeserviciodetalle["Spanish"]["grabadas"] = "";
	$fieldLabelsordendeserviciodetalle["Spanish"]["exentas"] = "Exentas";
	$fieldToolTipsordendeserviciodetalle["Spanish"]["exentas"] = "";
	$placeHoldersordendeserviciodetalle["Spanish"]["exentas"] = "";
	$fieldLabelsordendeserviciodetalle["Spanish"]["5_"] = "iva 5%";
	$fieldToolTipsordendeserviciodetalle["Spanish"]["5_"] = "";
	$placeHoldersordendeserviciodetalle["Spanish"]["5_"] = "";
	$fieldLabelsordendeserviciodetalle["Spanish"]["10_"] = "iva 10%";
	$fieldToolTipsordendeserviciodetalle["Spanish"]["10_"] = "";
	$placeHoldersordendeserviciodetalle["Spanish"]["10_"] = "";
	$fieldLabelsordendeserviciodetalle["Spanish"]["idbienservicio"] = "Bien y o Servicio";
	$fieldToolTipsordendeserviciodetalle["Spanish"]["idbienservicio"] = "";
	$placeHoldersordendeserviciodetalle["Spanish"]["idbienservicio"] = "";
	if (count($fieldToolTipsordendeserviciodetalle["Spanish"]))
		$tdataordendeserviciodetalle[".isUseToolTips"] = true;
}


	$tdataordendeserviciodetalle[".NCSearch"] = true;



$tdataordendeserviciodetalle[".shortTableName"] = "ordendeserviciodetalle";
$tdataordendeserviciodetalle[".nSecOptions"] = 0;

$tdataordendeserviciodetalle[".mainTableOwnerID"] = "";
$tdataordendeserviciodetalle[".entityType"] = 0;
$tdataordendeserviciodetalle[".connId"] = "financiero_at_192_168_70_218";


$tdataordendeserviciodetalle[".strOriginalTableName"] = "public.ordendeserviciodetalle";

	



$tdataordendeserviciodetalle[".showAddInPopup"] = false;

$tdataordendeserviciodetalle[".showEditInPopup"] = false;

$tdataordendeserviciodetalle[".showViewInPopup"] = false;

$tdataordendeserviciodetalle[".listAjax"] = false;
//	temporary
//$tdataordendeserviciodetalle[".listAjax"] = false;

	$tdataordendeserviciodetalle[".audit"] = false;

	$tdataordendeserviciodetalle[".locking"] = false;


$pages = $tdataordendeserviciodetalle[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataordendeserviciodetalle[".edit"] = true;
	$tdataordendeserviciodetalle[".afterEditAction"] = 1;
	$tdataordendeserviciodetalle[".closePopupAfterEdit"] = 1;
	$tdataordendeserviciodetalle[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataordendeserviciodetalle[".add"] = true;
$tdataordendeserviciodetalle[".afterAddAction"] = 1;
$tdataordendeserviciodetalle[".closePopupAfterAdd"] = 1;
$tdataordendeserviciodetalle[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataordendeserviciodetalle[".list"] = true;
}



$tdataordendeserviciodetalle[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataordendeserviciodetalle[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataordendeserviciodetalle[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataordendeserviciodetalle[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataordendeserviciodetalle[".printFriendly"] = true;
}



$tdataordendeserviciodetalle[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataordendeserviciodetalle[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataordendeserviciodetalle[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataordendeserviciodetalle[".isUseAjaxSuggest"] = true;

$tdataordendeserviciodetalle[".rowHighlite"] = true;





$tdataordendeserviciodetalle[".ajaxCodeSnippetAdded"] = false;

$tdataordendeserviciodetalle[".buttonsAdded"] = false;

$tdataordendeserviciodetalle[".addPageEvents"] = false;

// use timepicker for search panel
$tdataordendeserviciodetalle[".isUseTimeForSearch"] = false;


$tdataordendeserviciodetalle[".badgeColor"] = "e07878";


$tdataordendeserviciodetalle[".allSearchFields"] = array();
$tdataordendeserviciodetalle[".filterFields"] = array();
$tdataordendeserviciodetalle[".requiredSearchFields"] = array();

$tdataordendeserviciodetalle[".googleLikeFields"] = array();
$tdataordendeserviciodetalle[".googleLikeFields"][] = "nroorden";
$tdataordendeserviciodetalle[".googleLikeFields"][] = "nroitemlote";
$tdataordendeserviciodetalle[".googleLikeFields"][] = "idbienservicio";
$tdataordendeserviciodetalle[".googleLikeFields"][] = "ummedia";
$tdataordendeserviciodetalle[".googleLikeFields"][] = "marca";
$tdataordendeserviciodetalle[".googleLikeFields"][] = "cantidad";
$tdataordendeserviciodetalle[".googleLikeFields"][] = "preciounitario";
$tdataordendeserviciodetalle[".googleLikeFields"][] = "grabadas";
$tdataordendeserviciodetalle[".googleLikeFields"][] = "exentas";
$tdataordendeserviciodetalle[".googleLikeFields"][] = "5%";
$tdataordendeserviciodetalle[".googleLikeFields"][] = "10%";



$tdataordendeserviciodetalle[".tableType"] = "list";

$tdataordendeserviciodetalle[".printerPageOrientation"] = 0;
$tdataordendeserviciodetalle[".nPrinterPageScale"] = 100;

$tdataordendeserviciodetalle[".nPrinterSplitRecords"] = 40;

$tdataordendeserviciodetalle[".geocodingEnabled"] = false;










$tdataordendeserviciodetalle[".pageSize"] = 20;

$tdataordendeserviciodetalle[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataordendeserviciodetalle[".strOrderBy"] = $tstrOrderBy;

$tdataordendeserviciodetalle[".orderindexes"] = array();


$tdataordendeserviciodetalle[".sqlHead"] = "SELECT \"nroorden\",  	\"nroitemlote\",  	\"idbienservicio\",  	\"ummedia\",  	\"marca\",  	\"cantidad\",  	\"preciounitario\",  	\"grabadas\",  	\"exentas\",  	\"5%\",  	\"10%\"";
$tdataordendeserviciodetalle[".sqlFrom"] = "FROM \"public\".\"ordendeserviciodetalle\"";
$tdataordendeserviciodetalle[".sqlWhereExpr"] = "";
$tdataordendeserviciodetalle[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataordendeserviciodetalle[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataordendeserviciodetalle[".arrGroupsPerPage"] = $arrGPP;

$tdataordendeserviciodetalle[".highlightSearchResults"] = true;

$tableKeysordendeserviciodetalle = array();
$tableKeysordendeserviciodetalle[] = "nroorden";
$tdataordendeserviciodetalle[".Keys"] = $tableKeysordendeserviciodetalle;


$tdataordendeserviciodetalle[".hideMobileList"] = array();




//	nroorden
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "nroorden";
	$fdata["GoodName"] = "nroorden";
	$fdata["ownerTable"] = "public.ordendeserviciodetalle";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciodetalle","nroorden");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nroorden";

		$fdata["sourceSingle"] = "nroorden";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"nroorden\"";

	
	
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
	$edata["LookupTable"] = "public.ordendeserviciocabezera";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nroorden";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nivel";

	

	
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


	$tdataordendeserviciodetalle["nroorden"] = $fdata;
		$tdataordendeserviciodetalle[".searchableFields"][] = "nroorden";
//	nroitemlote
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nroitemlote";
	$fdata["GoodName"] = "nroitemlote";
	$fdata["ownerTable"] = "public.ordendeserviciodetalle";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciodetalle","nroitemlote");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nroitemlote";

		$fdata["sourceSingle"] = "nroitemlote";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"nroitemlote\"";

	
	
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


	$tdataordendeserviciodetalle["nroitemlote"] = $fdata;
		$tdataordendeserviciodetalle[".searchableFields"][] = "nroitemlote";
//	idbienservicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idbienservicio";
	$fdata["GoodName"] = "idbienservicio";
	$fdata["ownerTable"] = "public.ordendeserviciodetalle";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciodetalle","idbienservicio");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idbienservicio";

		$fdata["sourceSingle"] = "idbienservicio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"idbienservicio\"";

	
	
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
	$edata["LookupTable"] = "public.bienservicio";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idbienservicio";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "descripbienesservicios";

	

	
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


	$tdataordendeserviciodetalle["idbienservicio"] = $fdata;
		$tdataordendeserviciodetalle[".searchableFields"][] = "idbienservicio";
//	ummedia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ummedia";
	$fdata["GoodName"] = "ummedia";
	$fdata["ownerTable"] = "public.ordendeserviciodetalle";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciodetalle","ummedia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ummedia";

		$fdata["sourceSingle"] = "ummedia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"ummedia\"";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Kg";
	$edata["LookupValues"][] = "Unidad";

	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataordendeserviciodetalle["ummedia"] = $fdata;
		$tdataordendeserviciodetalle[".searchableFields"][] = "ummedia";
//	marca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "marca";
	$fdata["GoodName"] = "marca";
	$fdata["ownerTable"] = "public.ordendeserviciodetalle";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciodetalle","marca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "marca";

		$fdata["sourceSingle"] = "marca";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"marca\"";

	
	
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


	$tdataordendeserviciodetalle["marca"] = $fdata;
		$tdataordendeserviciodetalle[".searchableFields"][] = "marca";
//	cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cantidad";
	$fdata["GoodName"] = "cantidad";
	$fdata["ownerTable"] = "public.ordendeserviciodetalle";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciodetalle","cantidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cantidad";

		$fdata["sourceSingle"] = "cantidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"cantidad\"";

	
	
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


	$tdataordendeserviciodetalle["cantidad"] = $fdata;
		$tdataordendeserviciodetalle[".searchableFields"][] = "cantidad";
//	preciounitario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "preciounitario";
	$fdata["GoodName"] = "preciounitario";
	$fdata["ownerTable"] = "public.ordendeserviciodetalle";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciodetalle","preciounitario");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "preciounitario";

		$fdata["sourceSingle"] = "preciounitario";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"preciounitario\"";

	
	
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


	$tdataordendeserviciodetalle["preciounitario"] = $fdata;
		$tdataordendeserviciodetalle[".searchableFields"][] = "preciounitario";
//	grabadas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "grabadas";
	$fdata["GoodName"] = "grabadas";
	$fdata["ownerTable"] = "public.ordendeserviciodetalle";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciodetalle","grabadas");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "grabadas";

		$fdata["sourceSingle"] = "grabadas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"grabadas\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataordendeserviciodetalle["grabadas"] = $fdata;
		$tdataordendeserviciodetalle[".searchableFields"][] = "grabadas";
//	exentas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "exentas";
	$fdata["GoodName"] = "exentas";
	$fdata["ownerTable"] = "public.ordendeserviciodetalle";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciodetalle","exentas");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "exentas";

		$fdata["sourceSingle"] = "exentas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"exentas\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataordendeserviciodetalle["exentas"] = $fdata;
		$tdataordendeserviciodetalle[".searchableFields"][] = "exentas";
//	5%
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "5%";
	$fdata["GoodName"] = "5_";
	$fdata["ownerTable"] = "public.ordendeserviciodetalle";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciodetalle","5_");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "5%";

		$fdata["sourceSingle"] = "5%";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"5%\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataordendeserviciodetalle["5%"] = $fdata;
		$tdataordendeserviciodetalle[".searchableFields"][] = "5%";
//	10%
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "10%";
	$fdata["GoodName"] = "10_";
	$fdata["ownerTable"] = "public.ordendeserviciodetalle";
	$fdata["Label"] = GetFieldLabel("public_ordendeserviciodetalle","10_");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "10%";

		$fdata["sourceSingle"] = "10%";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "\"10%\"";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdataordendeserviciodetalle["10%"] = $fdata;
		$tdataordendeserviciodetalle[".searchableFields"][] = "10%";


$tables_data["public.ordendeserviciodetalle"]=&$tdataordendeserviciodetalle;
$field_labels["public_ordendeserviciodetalle"] = &$fieldLabelsordendeserviciodetalle;
$fieldToolTips["public_ordendeserviciodetalle"] = &$fieldToolTipsordendeserviciodetalle;
$placeHolders["public_ordendeserviciodetalle"] = &$placeHoldersordendeserviciodetalle;
$page_titles["public_ordendeserviciodetalle"] = &$pageTitlesordendeserviciodetalle;


changeTextControlsToDate( "public.ordendeserviciodetalle" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["public.ordendeserviciodetalle"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["public.ordendeserviciodetalle"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.ordendeserviciocabezera";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.ordendeserviciocabezera";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "ordendeserviciocabezera";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.ordendeserviciodetalle"][0] = $masterParams;
				$masterTablesData["public.ordendeserviciodetalle"][0]["masterKeys"] = array();
	$masterTablesData["public.ordendeserviciodetalle"][0]["masterKeys"][]="nroorden";
				$masterTablesData["public.ordendeserviciodetalle"][0]["detailKeys"] = array();
	$masterTablesData["public.ordendeserviciodetalle"][0]["detailKeys"][]="nroorden";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="public.bienservicio";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="public.bienservicio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "bienservicio";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["public.ordendeserviciodetalle"][1] = $masterParams;
				$masterTablesData["public.ordendeserviciodetalle"][1]["masterKeys"] = array();
	$masterTablesData["public.ordendeserviciodetalle"][1]["masterKeys"][]="idbienservicio";
				$masterTablesData["public.ordendeserviciodetalle"][1]["detailKeys"] = array();
	$masterTablesData["public.ordendeserviciodetalle"][1]["detailKeys"][]="idbienservicio";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ordendeserviciodetalle()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "\"nroorden\",  	\"nroitemlote\",  	\"idbienservicio\",  	\"ummedia\",  	\"marca\",  	\"cantidad\",  	\"preciounitario\",  	\"grabadas\",  	\"exentas\",  	\"5%\",  	\"10%\"";
$proto0["m_strFrom"] = "FROM \"public\".\"ordendeserviciodetalle\"";
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
	"m_strName" => "nroorden",
	"m_strTable" => "public.ordendeserviciodetalle",
	"m_srcTableName" => "public.ordendeserviciodetalle"
));

$proto6["m_sql"] = "\"nroorden\"";
$proto6["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nroitemlote",
	"m_strTable" => "public.ordendeserviciodetalle",
	"m_srcTableName" => "public.ordendeserviciodetalle"
));

$proto8["m_sql"] = "\"nroitemlote\"";
$proto8["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idbienservicio",
	"m_strTable" => "public.ordendeserviciodetalle",
	"m_srcTableName" => "public.ordendeserviciodetalle"
));

$proto10["m_sql"] = "\"idbienservicio\"";
$proto10["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ummedia",
	"m_strTable" => "public.ordendeserviciodetalle",
	"m_srcTableName" => "public.ordendeserviciodetalle"
));

$proto12["m_sql"] = "\"ummedia\"";
$proto12["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "marca",
	"m_strTable" => "public.ordendeserviciodetalle",
	"m_srcTableName" => "public.ordendeserviciodetalle"
));

$proto14["m_sql"] = "\"marca\"";
$proto14["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad",
	"m_strTable" => "public.ordendeserviciodetalle",
	"m_srcTableName" => "public.ordendeserviciodetalle"
));

$proto16["m_sql"] = "\"cantidad\"";
$proto16["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "preciounitario",
	"m_strTable" => "public.ordendeserviciodetalle",
	"m_srcTableName" => "public.ordendeserviciodetalle"
));

$proto18["m_sql"] = "\"preciounitario\"";
$proto18["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "grabadas",
	"m_strTable" => "public.ordendeserviciodetalle",
	"m_srcTableName" => "public.ordendeserviciodetalle"
));

$proto20["m_sql"] = "\"grabadas\"";
$proto20["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "exentas",
	"m_strTable" => "public.ordendeserviciodetalle",
	"m_srcTableName" => "public.ordendeserviciodetalle"
));

$proto22["m_sql"] = "\"exentas\"";
$proto22["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "5%",
	"m_strTable" => "public.ordendeserviciodetalle",
	"m_srcTableName" => "public.ordendeserviciodetalle"
));

$proto24["m_sql"] = "\"5%\"";
$proto24["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "10%",
	"m_strTable" => "public.ordendeserviciodetalle",
	"m_srcTableName" => "public.ordendeserviciodetalle"
));

$proto26["m_sql"] = "\"10%\"";
$proto26["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "public.ordendeserviciodetalle";
$proto29["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "nroorden";
$proto29["m_columns"][] = "nroitemlote";
$proto29["m_columns"][] = "idbienservicio";
$proto29["m_columns"][] = "ummedia";
$proto29["m_columns"][] = "marca";
$proto29["m_columns"][] = "cantidad";
$proto29["m_columns"][] = "preciounitario";
$proto29["m_columns"][] = "grabadas";
$proto29["m_columns"][] = "exentas";
$proto29["m_columns"][] = "5%";
$proto29["m_columns"][] = "10%";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "\"public\".\"ordendeserviciodetalle\"";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "public.ordendeserviciodetalle";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="public.ordendeserviciodetalle";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ordendeserviciodetalle = createSqlQuery_ordendeserviciodetalle();


	
		;

											

$tdataordendeserviciodetalle[".sqlquery"] = $queryData_ordendeserviciodetalle;



$tdataordendeserviciodetalle[".hasEvents"] = false;

?>
<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'public.ordendeserviciodetalle' => array( 'displayPreview' => 1,
'previewPageId' => 'print' ) ),
'totals' => array( 'idbienservicio' => array( 'totalsType' => '' ),
'descripbienesservicios' => array( 'totalsType' => '' ),
'modelo' => array( 'totalsType' => '' ),
'marca' => array( 'totalsType' => '' ),
'año' => array( 'totalsType' => '' ),
'impuesto' => array( 'totalsType' => '' ),
'costo' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'idbienservicio',
'descripbienesservicios',
'modelo',
'marca',
'año',
'impuesto',
'costo' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'idbienservicio' => array( 'simple_grid_field',
'simple_grid_field7' ),
'descripbienesservicios' => array( 'simple_grid_field1',
'simple_grid_field8' ),
'modelo' => array( 'simple_grid_field2',
'simple_grid_field9' ),
'marca' => array( 'simple_grid_field3',
'simple_grid_field10' ),
'año' => array( 'simple_grid_field4',
'simple_grid_field11' ),
'impuesto' => array( 'simple_grid_field5',
'simple_grid_field12' ),
'costo' => array( 'simple_grid_field6',
'simple_grid_field13' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader' ),
'grid' => array( 'simple_grid_field7',
'simple_grid_field',
'simple_grid_field8',
'simple_grid_field1',
'simple_grid_field9',
'simple_grid_field2',
'simple_grid_field10',
'simple_grid_field3',
'simple_grid_field11',
'simple_grid_field4',
'simple_grid_field12',
'simple_grid_field5',
'simple_grid_field13',
'simple_grid_field6',
'details_preview' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'simple_grid_field7' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field6' => 'grid',
'details_preview' => 'grid' ),
'itemLocations' => array( 'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6' ),
'grid_field_label' => array( 'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field13' ),
'details_preview' => array( 'details_preview' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'idbienservicio_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'descripbienesservicios_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'modelo_fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'marca_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'a_o_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'impuesto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'costo_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'idbienservicio_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'descripbienesservicios_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'modelo_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'marca_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'a_o_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'impuesto_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'costo_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 7,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 7 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'idbienservicio',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'idbienservicio',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'descripbienesservicios',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'descripbienesservicios',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'modelo',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'modelo',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'marca',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'marca',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'año',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'año',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'impuesto',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'impuesto',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'costo',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'costo',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'simple_grid_field' => array( 'field' => 'idbienservicio',
'type' => 'grid_field' ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'idbienservicio' ),
'simple_grid_field1' => array( 'field' => 'descripbienesservicios',
'type' => 'grid_field' ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'descripbienesservicios' ),
'simple_grid_field2' => array( 'field' => 'modelo',
'type' => 'grid_field' ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'modelo' ),
'simple_grid_field3' => array( 'field' => 'marca',
'type' => 'grid_field' ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'marca' ),
'simple_grid_field4' => array( 'field' => 'año',
'type' => 'grid_field' ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'año' ),
'simple_grid_field5' => array( 'field' => 'impuesto',
'type' => 'grid_field' ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'impuesto' ),
'simple_grid_field6' => array( 'field' => 'costo',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'costo' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'public.ordendeserviciodetalle',
'items' => array(  ),
'popup' => false,
'pageId' => 'print' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image',
'image' => array( 'source' => 1,
'image' => 'matheus-negrao-2oQAi9M6cVY-unsplash.jpg' ),
'shadow' => false,
'fullSize' => true ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>
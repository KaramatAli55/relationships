<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$mod_strings = array(
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_HIDEOPTIONS' => 'Hide Options' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Kustuta' /*for 508 compliance fix*/,
    'LBL_POWERED_BY_SUGAR' => 'Powered By SugarCRM' /*for 508 compliance fix*/,
'help'=>array(
    'package'=>array(
            'create'=>'create<br />Provide a Name for the package. The name you enter must be alphanumeric and contain no spaces. (Example: HR_Management)<br /><br />You can provide Author and Description information for package.<br /><br />Click Save to create the package.',
            'modify'=>'modify<br />The properties and possible actions for the Package appear here.<br /><br />You can modify the Name, Author and Description of the package, as well as view and customize all of the modules contained within the package.<br /><br />Click New Module to create a module for the package.<br /><br />If the package contains at least one module, you can Publish and Deploy the package, as well as Export the customizations made in the package.',
            'name'=>'name<br />This is the Name of the current package.<br /><br />The name you enter must be alphanumeric, start with a letter and contain no spaces. (Example: HR_Management)',
            'author'=>'author<br />This is the Author that is displayed during installation as the name of the entity that created the package.<br /><br />The Author could be either an individual or a company.',
            'description'=>'description<br />This is the Description of the package that is displayed during installation.',
            'publishbtn'=>'publishbtn<br />Click Publish to save all entered data and to create a .zip file that is an installable version of the package.',
            'deploybtn'=>'deploybtn<br />Click Deploy to save all entered data and to install the package, including all modules, in the current instance.',
            'duplicatebtn'=>'duplicatebtn<br />Click Duplicate to copy the contents of the package into a new package and to display the new package.<br /><br />For the new package, a new name will be generated automatically by appending a number to the end of the name of the package used to create the new one. You can rename the new package by entering a new Name and clicking Save.',
            'exportbtn'=>'exportbtn<br />Click Export to create a .zip file containing the customizations made in the package.<br /><br />The generated file is not an installable version of the package.<br /><br />Use Module Loader to import the .zip file and to have the package, including customizations, appear in Module Builder.',
            'deletebtn'=>'deletebtn<br />Click Delete to delete this package and all files related to this package.',
            'savebtn'=>'savebtn<br />Click Save to save all entered data related to the package.',
            'existing_module'=>'existing_module<br />Click the Module icon to edit the properties and customize the fields, relationships and layouts associated with the module.',
            'new_module'=>'new_module<br />Click New Module to create a new module for this package.',
            'key'=>'key<br />This 5-letter, alphanumeric Key will be used to prefix all directories, class names and database tables for all of the modules in the current package.<br /><br />The key is used in an effort to achieve table name uniqueness.',
            'readme'=>'readme<br />Click to add Readme text for this package.<br /><br />The Readme will be available at the time of installation.',

),
    'main'=>array(

    ),
    'module'=>array(
        'create'=>'create<br />Provide a Name for the module. The Label that you provide will appear in the navigation tab.<br /><br />Choose to display a navigation tab for the module by checking the Navigation Tab checkbox.<br /><br />Check the Team Security checkbox to have a Team selection field within the module records.<br /><br />Then choose the type of module you would like to create.<br /><br />Select a template type. Each template contains a specific set of fields, as well as pre-defined layouts, to use as a basis for your module.<br /><br />Click Save to create the module.',
        'modify'=>'modify<br />You can change the module properties or customize the Fields, Relationships and Layouts related to the module.',
        'importable'=>'importable<br />Checking the Importable checkbox will enable importing for this module.<br /><br />A link to the Import Wizard will appear in the Shortcuts panel in the module. The Import Wizard facilitates importing of data from external sources into the custom module.',
        'team_security'=>'team_security<br />Checking the Team Security checkbox will enable team security for this module.<br /><br />If team security is enabled, the Team selection field will appear within the records in the module',
        'reportable'=>'reportable<br />Checking this box will allow this module to have reports run against it.',
        'assignable'=>'assignable<br />Checking this box will allow a record in this module to be assigned to a selected user.',
        'has_tab'=>'has_tab<br />Checking Navigation Tab will provide a navigation tab for the module.',
        'acl'=>'acl<br />Checking this box will enable Access Controls on this module, including Field Level Security.',
        'studio'=>'studio<br />Checking this box will allow administrators to customize this module within Studio.',
        'audit'=>'audit<br />Checking this box will enable Auditing for this module. Changes to certain fields will be recorded so that administrators can review the change history.',
        'viewfieldsbtn'=>'viewfieldsbtn<br />Click View Fields to view the fields associated with the module and to create and edit custom fields.',
        'viewrelsbtn'=>'viewrelsbtn<br />Click View Relationships to view the relationships associated with this module and to create new relationships.',
        'viewlayoutsbtn'=>'viewlayoutsbtn<br />Click View Layouts to view the layouts for the module and to customize the field arrangement within the layouts.',
        'viewmobilelayoutsbtn' => 'Click <b>View Mobile Layouts</b> to view the mobile layouts for the module and to customize the field arrangement within the layouts.',
        'duplicatebtn'=>'duplicatebtn<br />Click Duplicate to copy the properties of the module into a new module and to display the new module.<br /><br />For the new module, a new name will be generated automatically by appending a number to the end of the name of the module used to create the new one.',
        'deletebtn'=>'deletebtn<br />Click Delete to delete this module.',
        'name'=>'name<br />This is the Name of the current module.<br /><br />The name must be alphanumeric and must start with a letter and contain no spaces. (Example: HR_Management)',
        'label'=>'label<br />This is the Label that will appear in the navigation tab for the module.',
        'savebtn'=>'savebtn<br />Click Save to save all entered data related to the module.',
        'type_basic'=>'type_basic<br />The Basic template type provides basic fields, such as the Name, Assigned to, Team, Date Created and Description fields.',
        'type_company'=>'type_company<br />The Company template type provides organization-specific fields, such as Company Name, Industry and Billing Address.<br /><br />Use this template to create modules that are similar to the standard Accounts module.',
        'type_issue'=>'type_issue<br />The Issue template type provides case- and bug-specific fields, such as Number, Status, Priority and Description.<br /><br />Use this template to create modules that are similar to the standard Cases and Bug Tracker modules.',
        'type_person'=>'type_person<br />The Person template type provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number.<br /><br />Use this template to create modules that are similar to the standard Contacts and Leads modules.',
        'type_sale'=>'type_sale<br />The Sale template type provides opportunity specific fields, such as Lead Source, Stage, Amount and Probability.<br /><br />Use this template to create modules that are similar to the standard Opportunities module.',
        'type_file'=>'type_file<br />The File template provides Document specific fields, such as File Name, Document type, and Publish Date.<br /><br />Use this template to create modules that are similar to the standard Documents module.',

    ),
    'dropdowns'=>array(
        'default' => 'default<br />All of the Dropdowns for the application are listed here.<br /><br />The dropdowns can be used for dropdown fields in any module.<br /><br />To make changes to an existing dropdown, click on the dropdown name.<br /><br />Click Add Dropdown to create a new dropdown.',
        'editdropdown'=>'editdropdown<br />Dropdown lists can be used for standard or custom dropdown fields in any module.<br /><br />Provide a Name for the dropdown list.<br /><br />If any language packs are installed in the application, you can select the Language to use for the list items.<br /><br />In the Item Name field, provide a name for the option in the dropdown list. This name will not appear in the dropdown list that is visible to users.<br /><br />In the Display Label field, provide a label that will be visible to users.<br /><br />After providing the item name and display label, click Add to add the item to the dropdown list.<br /><br />To reorder the items in the list, drag and drop items into the desired positions.<br /><br />To edit the display label of an item, click the Edit icon, and enter a new label. To delete an item from the dropdown list, click the Delete icon.<br /><br />To undo a change made to a display label, click Undo. To redo a change that was undone, click Redo.<br /><br />Click Save to save the dropdown list.',

    ),
    'subPanelEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Subpanel</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the Subpanel.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'savebtn<br />Click Save & Deploy to save changes you made and to make them active within the module.',
        'historyBtn'=> 'historyBtn<br />Click View History to view and restore a previously saved layout from the history.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.',
        'Hidden' 	=> 'Hidden<br />Hidden fields do not appear in the subpanel.',
        'Default'	=> 'Default<br />Default fields appear in the subpanel.',

    ),
    'listViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Available</b> column contains fields that a user can select in the Search to create a custom ListView. <br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'savebtn<br />Click Save & Deploy to save changes you made and to make them active within the module.',
        'historyBtn'=> 'historyBtn<br />Click View History to view and restore a previously saved layout from the history.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> 'Hidden<br />Hidden fields not currently available for users to see in ListViews.',
        'Available' => 'Available<br />Available fields are not shown by default, but can be added to ListViews by users.',
        'Default'	=> 'Default<br />Default fields appear in ListViews that are not customized by users.'
    ),
    'popupListViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>ListView</b> appear here.<br><br>The <b>Default</b> column contains the fields that are displayed in the ListView by default.<br/><br/>The <b>Hidden</b> column contains fields that can be added to the Default or Available column.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'savebtn'	=> 'savebtn<br />Click Save & Deploy to save changes you made and to make them active within the module.',
        'historyBtn'=> 'historyBtn<br />Click View History to view and restore a previously saved layout from the history.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Hidden' 	=> 'Hidden<br />Hidden fields not currently available for users to see in ListViews.',
        'Default'	=> 'Default<br />Default fields appear in ListViews that are not customized by users.'
    ),
    'searchViewEditor'=>array(
        'modify'	=> 'All of the fields that can be displayed in the <b>Search</b> form appear here.<br><br>The <b>Default</b> column contains the fields that will be displayed in the Search form.<br/><br/>The <b>Hidden</b> column contains fields available for you as an admin to add to the Search form.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    . '<br/><br/>This configuration applies to popup search layout in legacy modules only.',
        'savebtn'	=> 'savebtn<br />Clicking Save & Deploy will save all changes and make them active',
        'Hidden' 	=> 'Hidden<br />Hidden fields do not appear in the Search.',
        'historyBtn'=> 'historyBtn<br />Click View History to view and restore a previously saved layout from the history.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'Default'	=> 'Default<br />Default fields appear in the Search.'
    ),
    'layoutEditor'=>array(
        'defaultdetailview'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>DetailView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'defaultquickcreate'=>'The <b>Layout</b> area contains the fields that are currently displayed within the <b>QuickCreate</b> form.<br><br>The QuickCreate form appears in the subpanels for the module when the Create button is clicked.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'default'	=> 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>EditView</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        //this defualt will be used for edit view
        'defaultrecordview'   => 'The <b>Layout</b> area contains the fields that are currently displayed within the <b>Record View</b>.<br/><br/>The <b>Toolbox</b> contains the <b>Recycle Bin</b> and the fields and layout elements that can be added to the layout.<br><br>Make changes to the layout by dragging and dropping elements and fields between the <b>Toolbox</b> and the <b>Layout</b> and within the layout itself.<br><br>To remove a field from the layout, drag the field to the <b>Recycle Bin</b>. The field will then be available in the Toolbox to add to the layout.'
    . '<br/><br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_dependent.png"/>Indicates a Dependent field that may or may not be visible based on the value of a formula.<br/><!--not_in_theme!--><img src="themes/default/images/SugarLogic/icon_calculated.png" /> Indicates a Calculated field whose value will be automatically determined based on a formula.'
    ,
        'saveBtn'	=> 'saveBtn<br />Click Save to preserve the changes you made to the layout since the last time you saved it.<br /><br />The changes will not be displayed in the module until you Deploy the saved changes.',
        'historyBtn'=> 'historyBtn<br />Click View History to view and restore a previously saved layout from the history.',
        'historyRestoreDefaultLayout'=> 'Click <b>Restore Default Layout</b> to restore a view to its original layout.<br><br><b>Restore Default Layout</b> only restores the field placement within the original layout. To change field labels, click the Edit icon next to each field.',
        'publishBtn'=> 'publishBtn<br />Click Save & Deploy to save all changes you made to the layout since the last time you saved it, and to make the changes active in the module.<br /><br />The layout will immediately be displayed in the module.',
        'toolbox'	=> 'toolbox<br />The Toolbox contains the Recycle Bin, additional layout elements and the set of available fields to add to the layout.<br /><br />The layout elements and fields in the Toolbox can be dragged and dropped into the layout, and the layout elements and fields can be dragged and dropped from the layout into the Toolbox.<br /><br />The layout elements are Panels and Rows. Adding a new row or a new panel to the layout provides additional locations in the layout for fields.<br /><br />Drag and drop any of the fields in the Toolbox or layout onto a occupied field position to swap the locations of the two fields.<br /><br />The Filler field creates blank space in the layout where it is placed.',
        'panels'	=> 'panels<br />The Layout area provides a view of how the layout will appear within the module when the changes made to the layout are deployed.<br /><br />You can reposition fields, rows and panels by dragging and dropping them in the desired location.<br /><br />Remove elements by dragging and dropping them in the Recycle Bin in the Toolbox, or add new elements and fields by dragging them from the Toolboxs and dropping them in the desired location in the layout.',
        'delete'	=> 'delete<br />Drag and drop any element here to remove it from the layout',
        'property'	=> 'property<br />Edit The label displayed for this field.<br />Tab Order controls in what order the tab key switches between field',
    ),
    'fieldsEditor'=>array(
        'default'	=> 'default<br />The Fields that are available for the module are listed here by Field Name.<br /><br />Custom fields created for the module appear above the fields that are available for the module by default.<br /><br />To edit a field, click the Field Name.<br /><br />To create a new field, click Add Field.',
        'mbDefault'=>'mbDefault<br />The Fields that are available for the module are listed here by Field Name.<br /><br />To configure the properties for a field, click the Field Name.<br /><br />To create a new field, click Add Field. The label along with the other properties of the new field can be edited after creation by clicking the Field Name.<br /><br />After the module is deployed, the new fields created in Module Builder are regarded as standard fields in the deployed module in Studio.',
        'addField'	=> 'addField<br />Select a Data Type for the new field. The type you select determines what kind of characters can be entered for the field. For example, only numbers that are integers may be entered into fields that are of the Integer data type.<br /><br />Provide a Name for the field. The name must be alphanumeric and must not contain any spaces. Underscores are valid.<br /><br />The Display Label is the label that will appear for the fields in the module layouts. The System Label is used to refer to the field in the code.<br /><br />Depending on the data type selected for the field, some or all of the following properties can be set for the field:<br /><br />Help Text appears temporarily while a user hovers over the field and can be used to prompt the user for the type of input desired.<br /><br />Comment Text is only seen within Studio &/or Module Builder, and can be used to describe the field for administrators.<br /><br />Default Value will appear in the field. Users can enter a new value in the field or use the default value.<br /><br />Select the Mass Update checkbox in order to be able to use the Mass Update feature for the field.<br /><br />The Max Size value determines the maximum number of characters that can be entered in the field.<br /><br />Select the Required Field checkbox in order to make the field required. A value must be provided for the field in order to be able to save a record containing the field.<br /><br />Select the Reportable checkbox in order to allow the field to be used for filters and for displaying data in Reports.<br /><br />Select the Audit checkbox in order to be able to track changes to the field in the Change Log.<br /><br />Select an option in the Importable field to allow, disallow or require the field to be imported into in the Import Wizard.<br /><br />Select an option in the Duplicate Merge field to enable or disable the Merge Duplicates and Find Duplicates features.<br /><br />Additional properties can be set for certain data types.',
        'editField' => 'editField<br />The properties of this field can be customized.<br /><br />Click Clone to create a new field with the same properties.',
        'mbeditField' => 'mbeditField<br />The Display Label of a template field can be customized. The other properties of the field can not be customized.<br /><br />Click Clone to create a new field with the same properties.<br /><br />To remove a template field so that it does not display in the module, remove the field from the appropriate Layouts.'

    ),
    'exportcustom'=>array(
        'exportHelp'=>'exportHelp<br />Export customizations made in Studio by creating packages that can be uploaded into another Sugar instance through the Module Loader.<br /><br />First, provide a Package Name. You can provide Author and Description information for package as well.<br /><br />Select the module(s) that contain the customizations you wish to export. Only modules containing customizations will appear for you to select.<br /><br />Then click Export to create a .zip file for the package containing the customizations.',
        'exportCustomBtn'=>'exportCustomBtn<br />Click Export to create a .zip file for the package containing the customizations that you wish to export.',
        'name'=>'name<br />This is the Name of the package. This name will be displayed during installation.',
        'author'=>'author<br />This is the Author that is displayed during installation as the name of the entity that created the package. The Author can be either an individual or a company.',
        'description'=>'description<br />This is the Description of the package that is displayed during installation.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'mainHelp<br />Welcome to the Developer Tools area.<br /><br />Use the tools within this area to create and manage standard and custom modules and fields.',
        'studioBtn'	=> 'studioBtn<br />Use Studio to customize deployed modules.',
        'mbBtn'		=> 'mbBtn<br />Use Module Builder to create new modules.',
        'sugarPortalBtn' => 'sugarPortalBtn<br />Use Sugar Portal Editor to manage and customize the Sugar Portal.',
        'dropDownEditorBtn' => 'dropDownEditorBtn<br />Use Dropdown Editor to add and edit global dropdowns for dropdown fields.',
        'appBtn' 	=> 'appBtn<br />Application mode is where you can customize various properties of the program, such as how many TPS reports are displayed on the homepage',
        'backBtn'	=> 'backBtn<br />Return to the previous step.',
        'studioHelp'=> 'studioHelp<br />Use Studio to determine what and how information is displayed in the modules.',
        'studioBCHelp' => ' indicates the module is a backward compatible module',
        'moduleBtn'	=> 'moduleBtn<br />Click to edit this module.',
        'moduleHelp'=> 'moduleHelp<br />The components that you can customize for the module appear here.<br /><br />Click an icon to select the component to edit.',
        'fieldsBtn'	=> 'fieldsBtn<br />Create and customize Fields to store information in the module.',
        'labelsBtn' => 'labelsBtn<br />Edit the Labels that display for the fields and other titles in the module.'	,
        'relationshipsBtn' => 'relationshipsBtn<br />Add new or view existing Relationships for the module.' ,
        'layoutsBtn'=> 'layoutsBtn<br />Customize the module Layouts. The layouts are the different views of the module contaning fields.<br /><br />You can determine which fields appear and how they are organized in each layout.',
        'subpanelBtn'=> 'subpanelBtn<br />Determine which fields appear in the Subpanels in the module.',
        'portalBtn' =>'portalBtn<br />Customize the module Layouts that appear in the Sugar Portal.',
        'layoutsHelp'=> 'layoutsHelp<br />The module Layouts that can be customized appear here.<br /><br />The layouts display fields and field data.<br /><br />Click an icon to select the layout to edit.',
        'subpanelHelp'=> 'subpanelHelp<br />The Subpanels in the module that can be customized appear here.<br /><br />Click an icon to select the module to edit.',
        'newPackage'=>'newPackage<br />Click New Package to create a new package.',
        'exportBtn' => 'exportBtn<br />Click Export Customizations to create and download a package containing customizations made in Studio for specific modules.',
        'mbHelp'    => 'mbHelp<br />Use Module Builder to create packages containing custom modules based on standard or custom objects.',
        'viewBtnEditView' => 'viewBtnEditView<br />Customize the module&#39;s EditView layout.<br /><br />The EditView is the form containing input fields for capturing user-entered data.',
        'viewBtnDetailView' => 'viewBtnDetailView<br />Customize the module&#39;s DetailView layout.<br /><br />The DetailView displays user-entered field data.',
        'viewBtnDashlet' => 'viewBtnDashlet<br />Customize the module&#39;s Sugar Dashlet, including the Sugar Dashlet&#39;s ListView and Search.<br /><br />The Sugar Dashlet will be available to add to the pages in the Home module.',
        'viewBtnListView' => 'viewBtnListView<br />Customize the module&#39;s ListView layout.<br /><br />The Search results appear in the ListView.',
        'searchBtn' => 'searchBtn<br />Customize the module&#39;s Search layouts.<br /><br />Determine what fields can be used to filter records that appear in the ListView.',
        'viewBtnQuickCreate' =>  'viewBtnQuickCreate<br />Customize the module&#39;s QuickCreate layout.<br /><br />The QuickCreate form appears in subpanels and in the Emails module.',

        'searchHelp'=> 'searchHelp<br />The Search forms that can be customized appear here.<br /><br />Search forms contain fields for filtering records.<br /><br />Click an icon to select the search layout to edit.',
        'dashletHelp' =>'dashletHelp<br />The Sugar Dashlet layouts that can be customized appear here.<br /><br />The Sugar Dashlet will be available to add to the pages in the Home module.',
        'DashletListViewBtn' =>'DashletListViewBtn<br />The Sugar Dashlet ListView displays records based on the Sugar Dashlet search filters.',
        'DashletSearchViewBtn' =>'DashletSearchViewBtn<br />The Sugar Dashlet Search filters records for the Sugar Dashlet listview.',
        'popupHelp' =>'popupHelp<br />The Popup layouts that can be customized appear here.',
        'PopupListViewBtn' => 'PopupListViewBtn<br />The Popup ListView displays records based on the Popup search views.',
        'PopupSearchViewBtn' => 'PopupSearchViewBtn<br />The Popup Search views records for the Popup listview.',
        'BasicSearchBtn' => 'BasicSearchBtn<br />Customize the Basic Search form that appears in the Basic Search tab in the Search area for the module.',
        'AdvancedSearchBtn' => 'AdvancedSearchBtn<br />Customize the Advanced Search form that appears in the Advanced Search tab in the Search area for the module.',
        'portalHelp' => 'portalHelp<br />Manage and customize the Sugar Portal.',
        'SPUploadCSS' => 'SPUploadCSS<br />Upload a Style Sheet for the Sugar Portal.',
        'SPSync' => 'SPSync<br />Sync customizations to the Sugar Portal instance.',
        'Layouts' => 'Layouts<br />Customize the Layouts of the Sugar Portal modules.',
        'portalLayoutHelp' => 'portalLayoutHelp<br />The modules within the Sugar Portal appear in this area.<br /><br />Select a module to edit the Layouts.',
        'relationshipsHelp' => 'relationshipsHelp<br />All of the Relationships that exist between the module and other deployed modules appear here.<br /><br />The relationship Name is the system-generated name for the relationship.<br /><br />The Primary Module is the module that owns the relationships. For example, all of the properties of the relationships for which the Accounts module is the primary module are stored in the Accounts database tables.<br /><br />The Type is the type of relationship exists between the Primary module and the Related Module.<br /><br />Click a column title to sort by the column.<br /><br />Click a row in the relationship table to view the properties associated with the relationship.<br /><br />Click Add Relationship to create a new relationship.<br /><br />Relationships can be created between any two deployed modules.',
        'relationshipHelp'=>'relationshipHelp<br />Relationships can be created between the module and another deployed module.<br /><br />Relationships are visually expressed through subpanels and relate fields in the module records.<br /><br />Select one of the following relationship Types for the module:<br /><br />One-to-One - Both modules&#39; records will contain relate fields.<br /><br />One-to-Many - The Primary Module&#39;s record will contain a subpanel, and the Related Module&#39;s record will contain a relate field.<br /><br />Many-to-Many - Both modules&#39; records will display subpanels.<br /><br />Select the Related Module for the relationship.<br /><br />If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br /><br />Click Save to create the relationship.',
        'convertLeadHelp' => "convertLeadHelp<br />Here you can add modules to the convert layout screen and modify the layouts of existing ones.<br />You can re-order the modules by dragging their rows in the table.<br /><br />Module: The name of the module.<br /><br />Required: Required modules must be created or selected before the lead can be converted.<br /><br />Copy Data: If checked, fields from the lead will be copied to fields with the same name in the newly created records.<br /><br />Allow Selection: Modules with a relate field in Contacts can be selected rather than created during the convert lead process.<br /><br />Edit: Modify the convert layout for this module.<br /><br />Delete: Remove this module from the convert layout.",
        'editDropDownBtn' => 'editDropDownBtn<br />Edit a global Dropdown',
        'addDropDownBtn' => 'addDropDownBtn<br />Add a new global Dropdown',
    ),
    'fieldsHelp'=>array(
        'default'=>'default<br />The Fields in the module are listed here by Field Name.<br /><br />The module template includes a pre-determined set of fields.<br /><br />To create a new field, click Add Field.<br /><br />To edit a field, click the Field Name.<br /><br />After the module is deployed, the new fields created in Module Builder, along with the template fields, are regarded as standard fields in Studio.',
    ),
    'relationshipsHelp'=>array(
        'default'=>'default<br />The Relationships that have been created between the module and other modules appear here.<br /><br />The relationship Name is the system-generated name for the relationship.<br /><br />The Primary Module is the module that owns the relationships. The relationship properties are stored in the database tables belonging to the primary module.<br /><br />The Type is the type of relationship exists between the Primary module and the Related Module.<br /><br />Click a column title to sort by the column.<br /><br />Click a row in the relationship table to view and edit the properties associated with the relationship.<br /><br />Click Add Relationship to create a new relationship.',
        'addrelbtn'=>'addrelbtn<br />mouse over help for add relationship..',
        'addRelationship'=>'addRelationship<br />Relationships can be created between the module and another custom module or a deployed module.<br /><br />Relationships are visually expressed through subpanels and relate fields in the module records.<br /><br />Select one of the following relationship Types for the module:<br /><br />One-to-One - Both modules&#39; records will contain relate fields.<br /><br />One-to-Many - The Primary Module&#39;s record will contain a subpanel, and the Related Module&#39;s record will contain a relate field.<br /><br />Many-to-Many - Both modules&#39; records will display subpanels.<br /><br />Select the Related Module for the relationship.<br /><br />If the relationship type involves subpanels, select the subpanel view for the appropriate modules.<br /><br />Click Save to create the relationship.',
    ),
    'labelsHelp'=>array(
        'default'=> 'default<br />The Labels for the fields and other titles in the module can be changed.<br /><br />Edit the label by clicking within the field, entering a new label and clicking Save.<br /><br />If any language packs are installed in the application, you can select the Language to use for the labels.',
        'saveBtn'=>'saveBtn<br />Click Save to save all changes.',
        'publishBtn'=>'publishBtn<br />Click Save & Deploy to save all changes and make them active.',
    ),
    'portalSync'=>array(
        'default' => 'default<br />Enter the Sugar Portal URL of the portal instance to update, and click Go.<br /><br />Then enter a valid Sugar user name and password, and then click Begin Sync.<br /><br />The customizations made to the Sugar Portal Layouts, along with the Style Sheet if one was uploaded, will be transferred to specified the portal instance.',
    ),
    'portalConfig'=>array(
           'default' => '',
       ),
    'portalStyle'=>array(
        'default' => 'default<br />You can customize the look of the Sugar Portal by using a style sheet.<br /><br />Select a Style Sheet to upload.<br /><br />The style sheet will be implemented in the Sugar Portal the next time a sync is performed.',
    ),
),

'assistantHelp'=>array(
    'package'=>array(
            //custom begin
            'nopackages'=>'nopackages<br />To get started on a project, click New Package to create a new package to house your custom module(s).<br /><br />Each package can contain one or more modules.<br /><br />For instance, you might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to other modules already in the application.',
            'somepackages'=>'somepackages<br />A package acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to other modules in the application.<br /><br />After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.<br /><br />When the project is complete, you can Deploy the package to install the custom modules within the application.',
            'afterSave'=>'afterSave<br />Your new package should contain at least one module. You can create one or more custom modules for the package.<br /><br />Click New Module to create a custom module for this package.<br /><br />After creating at least one module, you can publish or deploy the package to make it available for your instance and/or other users&#39; instances.<br /><br />To deploy the package in one step within your Sugar instance, click Deploy.<br /><br />Click Publish to save the package as a .zip file. After the .zip file is saved to your system, use the Module Loader to upload and install the package within your Sugar instance.<br /><br />You can distribute the file to other users to upload and install within their own Sugar instances.',
            'create'=>'create<br />A package acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to other modules in the application.<br /><br />After creating a package for your project, you can create modules for the package right away, or you can return to the Module Builder at a later time to complete the project.',
            ),
    'main'=>array(
        'welcome'=>'welcome<br />Use the Developer Tools to create and manage standard and custom modules and fields.<br /><br />To manage modules in the application, click Studio.<br /><br />To create custom modules, click Module Builder.',
        'studioWelcome'=>'studioWelcome<br />All of the currently installed modules, including standard and module-loaded objects, are customizable within Studio.'
    ),
    'module'=>array(
        'somemodules'=>"somemodules<br />Since the current package contains at least one module, you can Deploy the modules in the package within your Sugar instance or Publish the package to be installed in the current Sugar instance or another instance using the Module Loader.<br /><br />To install the package directly within your Sugar instance, click Deploy.<br /><br />To create a .zip file for the package that can be loaded and installed within the current Sugar instance and other instances using the Module Loader, click Publish.<br /><br />You can build the modules for this package in stages, and publish or deploy when you are ready to do so.<br /><br />After publishing or deploying a package, you can make changes to the package properties and customize the modules further. Then re-publish or re-deploy the package to apply the changes." ,
        'editView'=> 'editView<br />Here you can edit the existing fields. You can remove any of the existing fields or add available fields in the left panel.',
        'create'=>'create<br />When choosing the type of Type of module that you wish to create, keep in mind the types of fields you would like to have within the module.<br /><br />Each module template contains a set of fields pertaining to the type of module described by the title.<br /><br />Basic - Provides basic fields that appear in standard modules, such as the Name, Assigned to, Team, Date Created and Description fields.<br /><br />Company - Provides organization-specific fields, such as Company Name, Industry and Billing Address. Use this template to create modules that are similar to the standard Accounts module.<br /><br />Person - Provides individual-specific fields, such as Salutation, Title, Name, Address and Phone Number. Use this template to create modules that are similar to the standard Contacts and Leads modules.<br /><br />Issue - Provides case- and bug-specific fields, such as Number, Status, Priority and Description. Use this template to create modules that are similar to the standard Cases and Bug Tracker modules.<br /><br />Note: After you create the module, you can edit the labels of the fields provided by the template, as well as create custom fields to add to the module layouts.',
        'afterSave'=>'afterSave<br />Customize the module to suit your needs by editing and creating fields, establishing relationships with other modules and arranging the fields within the layouts.<br /><br />To view the template fields and manage custom fields within the module, click View Fields.<br /><br />To create and manage relationships between the module and other modules, whether modules already in the application or other custom modules within the same package, click View Relationships.<br /><br />To edit the module layouts, click View Layouts. You can change the Detail View, Edit View and List View layouts for the module just as you would for modules already in the application within Studio.<br /><br />To create a module with the same properties as the current module, click Duplicate. You can further customize the new module.',
        'viewfields'=>'viewfields<br />The fields in the module can be customized to suit your needs.<br /><br />You can not delete standard fields, but you can remove them from the appropriate layouts within the Layouts pages.<br /><br />You can quickly create new fields that have similar properties to existing fields by clicking Clone in the Properties form. Enter any new properties, and then click Save.<br /><br />It is recommended that you set all of the properties for the standard fields and custom fields before you publish and install the package containing the custom module.',
        'viewrelationships'=>'viewrelationships<br />You can create many-to-many relationships between the current module and other modules in the package, and/or between the current module and modules already installed in the application.<br /><br />To create one-to-many and one-to-one relationships, create Relate and Flex Relate fields for the modules.',
        'viewlayouts'=>'viewlayouts<br />You can control what fields are available for capturing data within the Edit View. You can also control what data displays within the Detail View. The views do not have to match.<br /><br />The Quick Create form is displayed when the Create is clicked in a module subpanel. By default, the Quick Create form layout is the same as the default Edit View layout. You can customize the Quick Create form so that it contains less and/or different fields than the Edit View layout.<br /><br />You can determine the module security using Layout customization along with Role Management.',
        'existingModule' =>'existingModule<br />After creating and customizing this module, you can create additional modules or return to the package to Publish or Deploy the package.<br /><br />To create additional modules, click Duplicate to create a module with the same properties as the current module, or navigate back to the package, and click New Module.<br /><br />If you are ready to Publish or Deploy the package containing this module, navigate back to the package to perform these functions. You can publish and deploy packages containing at least one module.',
        'labels'=> 'labels<br />The labels of the standard fields as well as custom fields can be changed. Changing field labels will not affect the data stored in the fields.',
    ),
    'listViewEditor'=>array(
        'modify'	=> 'modify<br />There are three columns displayed to the left. The "Default" column contains the fields that are displayed in a list view by default, the "Available" column contains fields that a user can choose to use for creating a custom list view, and the "Hidden" column contains fields available for you as an admin to either add to the default or Available columns for use by users but are currently disabled.',
        'savebtn'	=> 'savebtn<br />Clicking Save will save all changes and make them active.',
        'Hidden' 	=> 'Hidden<br />Hidden fields are fields that are not currently available to users for use in list views.',
        'Available' => 'Available<br />Available fields are fields that are not shown by default, but can be enabled by users.',
        'Default'	=> 'Default<br />Default fields are displayed to users who have not created custom list view settings.'
    ),

    'searchViewEditor'=>array(
        'modify'	=> 'modify<br />There are two columns displayed to the left. The "Default" column contains the fields that will be displayed in the search view, and the "Hidden" column contains fields available for you as an admin to add to the view.',
        'savebtn'	=> 'savebtn<br />Clicking Save & Deploy will save all changes and make them active.',
        'Hidden' 	=> 'Hidden<br />Hidden fields are fields that will not be shown in the search view.',
        'Default'	=> 'Default<br />Default fields will be shown in the search view.'
    ),
    'layoutEditor'=>array(
        'default'	=> 'default<br />There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout.<br /><br />If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br /><br />If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
        'saveBtn'	=> 'saveBtn<br />Clicking this button saves the layout so that you can preserve your changes. When you return to this module you will start from this changed layout. Your layout however will not be seen by users of the module until you click the Save and Publish button.',
        'publishBtn'=> 'publishBtn<br />Click this button to deploy the layout. This means that this layout will immediately be seen by users of this module.',
        'toolbox'	=> 'toolbox<br />The toolbox contains a variety of useful features for editing layouts, including a trash area, a set of additional elements and a set of available fields. Any of these can be dragged and dropped onto the layout.',
        'panels'	=> 'panels<br />This area shows how your layout will look to users of this module when it is depolyed.<br /><br />You can reposition elements such as fields, rows and panels by dragging and dropping them; delete elements by dragging and dropping them on the trash area in the toolbox, or add new elements by dragging them from the toolbox and dropping them on to the layout in the desired position.'
    ),
    'dropdownEditor'=>array(
        'default'	=> 'default<br />There are two columns displayed to the left. The right-hand column, labeled Current Layout or Layout Preview, is where you change the module layout. The left-hand column, entitled Toolbox, contains useful elements and tools for use when editing the layout.<br /><br />If the layout area is titled Current Layout then you are working on a copy of the layout currently used by the module for display.<br /><br />If it is titled Layout Preview then you are working on a copy created earlier by a click on the Save button, that might have already been changed from the version seen by users of this module.',
        'dropdownaddbtn'=> 'dropdownaddbtn<br />Clicking this button adds a new item to the dropdown.',

    ),
    'exportcustom'=>array(
        'exportHelp'=>'exportHelp<br />Customizations made in Studio within this instance can be packaged and deployed in another instance.<br /><br />Provide a Package Name. You can provide Author and Description information for package.<br /><br />Select the module(s) that contain the customizations to export. (Only modules containing customizations will appear for you to select.)<br /><br />Click Export to create a .zip file for the package containing the customizations. The .zip file can be uploaded in another instance through Module Loader.',
        'exportCustomBtn'=>'exportCustomBtn<br />Click Export to create a .zip file for the package containing the customizations that you wish to export.',
        'name'=>'name<br />The Name of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        'author'=>'author<br />The Author is the name of the entity that created the package. The Author can be either an individual or a company.<br /><br />The Author will be displayed in Module Loader after the package is uploaded for installation in Studio.',
        'description'=>'description<br />The Description of the package will be displayed in Module Loader after the package is uploaded for installation in Studio.',
    ),
    'studioWizard'=>array(
        'mainHelp' 	=> 'mainHelp<br />Welcome to the Developer Tools area.<br /><br />Use the tools within this area to create and manage standard and custom modules and fields.',
        'studioBtn'	=> 'studioBtn<br />Use Studio to customize installed modules by changing the field arrangement, selecting what fields are available and creating custom data fields.',
        'mbBtn'		=> 'mbBtn<br />Use Module Builder to create new modules.',
        'appBtn' 	=> 'appBtn<br />Use Application mode to customize various properties of the program, such as how many TPS reports are displayed on the homepage',
        'backBtn'	=> 'backBtn<br />Return to the previous step.',
        'studioHelp'=> 'studioHelp<br />Use Studio to customize installed modules.',
        'moduleBtn'	=> 'moduleBtn<br />Click to edit this module.',
        'moduleHelp'=> 'moduleHelp<br />Select the module component that you would like to edit',
        'fieldsBtn'	=> 'fieldsBtn<br />Edit what information is stored in the module by controlling the Fields in the module.<br /><br />You can edit and create custom fields here.',
        'labelsBtn' => 'Click <b>Save</b> to save your custom labels.'	,
        'layoutsBtn'=> 'layoutsBtn<br />Customize the Layouts of the Edit, Detail, List and search views.',
        'subpanelBtn'=> 'subpanelBtn<br />Edit what information is shown in this modules subpanels.',
        'layoutsHelp'=> 'layoutsHelp<br />Select a Layout to edit.<br /><br />To change the layout that contains data fields for entering data, click Edit View.<br /><br />To change the layout that displays the data entered into the fields in the Edit View, click Detail View.<br /><br />To change the columns which appear in the default list, click List View.<br /><br />To change the Basic and Advanced search form layouts, click Search.',
        'subpanelHelp'=> 'subpanelHelp<br />Select a Subpanel to edit.',
        'searchHelp' => 'searchHelp<br />Select a Search layout to edit.',
        'labelsBtn'	=> 'Click <b>Save</b> to save your custom labels.',
        'newPackage'=>'newPackage<br />Click New Package to create a new package.',
        'mbHelp'    => 'mbHelp<br />Welcome to Module Builder.<br /><br />Use Module Builder to create packages containing custom modules based on standard or custom objects.<br /><br />To begin, click New Package to create a new package, or select a package to edit.<br /><br />A package acts as a container for custom modules, all of which are part of one project. The package can contain one or more custom modules that can be related to each other or to modules in the application.<br /><br />Examples: You might want to create a package containing one custom module that is related to the standard Accounts module. Or, you might want to create a package containing several new modules that work together as a project and that are related to each other and to modules in the application.',
        'exportBtn' => 'exportBtn<br />Click Export Customizations to create a package containing customizations made in Studio for specific modules.',
    ),

),
//HOME
'LBL_HOME_EDIT_DROPDOWNS'=>'Rippmenüü redigeerija',

//ASSISTANT
'LBL_AS_SHOW' => 'Näita assistenti tulevikus.',
'LBL_AS_IGNORE' => 'Ignoreeri assistenti tulevikus.',
'LBL_AS_SAYS' => 'Assistent ütleb:',

//STUDIO2
'LBL_MODULEBUILDER'=>'Module Builder',
'LBL_STUDIO' => 'Studio',
'LBL_DROPDOWNEDITOR' => 'Rippmenüü redigeerija',
'LBL_EDIT_DROPDOWN'=>'Redigeeri rippmenüüd',
'LBL_DEVELOPER_TOOLS' => 'Arendaja tööriistad',
'LBL_SUGARPORTAL' => 'Sugar Portal Editor',
'LBL_SYNCPORTAL' => 'Sync Portal',
'LBL_PACKAGE_LIST' => 'Pakettide loend',
'LBL_HOME' => 'Avaleht',
'LBL_NONE'=>'-None-',
'LBL_DEPLOYE_COMPLETE'=>'Juurutamine lõpetatud',
'LBL_DEPLOY_FAILED'   =>'Viga juurutusprotsessis, sinu pakett ei pruugi olla korrektselt installeeritud',
'LBL_ADD_FIELDS'=>'Lisa kohandatud väljad',
'LBL_AVAILABLE_SUBPANELS'=>'Saadaolevad alampaneelid',
'LBL_ADVANCED'=>'Laiendatud',
'LBL_ADVANCED_SEARCH'=>'Laiendatud otsing',
'LBL_BASIC'=>'Basic',
'LBL_BASIC_SEARCH'=>'Basic Search',
'LBL_CURRENT_LAYOUT'=>'Paigutus',
'LBL_CURRENCY' => 'Valuuta',
'LBL_CUSTOM' => 'Custom',
'LBL_DASHLET'=>'Sugar Dashlet',
'LBL_DASHLETLISTVIEW'=>'Sugar Dashlet loendivaade',
'LBL_DASHLETSEARCH'=>'Sugar Dashlet otsing',
'LBL_POPUP'=>'Hüpikakna vaade',
'LBL_POPUPLIST'=>'Hüpikakna loendivaade',
'LBL_POPUPLISTVIEW'=>'Hüpikakna loendivaade',
'LBL_POPUPSEARCH'=>'Hüpikakna otsing',
'LBL_DASHLETSEARCHVIEW'=>'Sugar Dashlet otsing',
'LBL_DISPLAY_HTML'=>'Kuva HTML kood',
'LBL_DETAILVIEW'=>'Detailvaade',
'LBL_DROP_HERE' => '[Aseta siia]',
'LBL_EDIT'=>'Redigeeri',
'LBL_EDIT_LAYOUT'=>'Redigeeri paigutust',
'LBL_EDIT_ROWS'=>'Redigeeri ridu',
'LBL_EDIT_COLUMNS'=>'Redigeeri veerge',
'LBL_EDIT_LABELS'=>'Redigeeri silte',
'LBL_EDIT_PORTAL'=>'Redigeeri portaali',
'LBL_EDIT_FIELDS'=>'Redigeeri välju',
'LBL_EDITVIEW'=>'EditView',
'LBL_FILTER_SEARCH' => "Search",
'LBL_FILLER'=>'(täitja)',
'LBL_FIELDS'=>'Väljad',
'LBL_FAILED_TO_SAVE' => 'Salvestamine ebaõnnestus',
'LBL_FAILED_PUBLISHED' => 'Avaldamine ebaõnnestus',
'LBL_HOMEPAGE_PREFIX' => 'Minu',
'LBL_LAYOUT_PREVIEW'=>'Paigutuse eelvaade',
'LBL_LAYOUTS'=>'Paigutused',
'LBL_LISTVIEW'=>'ListView',
'LBL_RECORDVIEW'=>'Record View',
'LBL_MODULE_TITLE' => 'Studio',
'LBL_NEW_PACKAGE' => 'Uus pakett',
'LBL_NEW_PANEL'=>'Uus paneel',
'LBL_NEW_ROW'=>'Uus rida',
'LBL_PACKAGE_DELETED'=>'Pakett kustutatud',
'LBL_PUBLISHING' => 'Avaldamine...',
'LBL_PUBLISHED' => 'Avaldatud',
'LBL_SELECT_FILE'=> 'Vali fail',
'LBL_SAVE_LAYOUT'=> 'Salvesta paigutus',
'LBL_SELECT_A_SUBPANEL' => 'Vali alampaneel',
'LBL_SELECT_SUBPANEL' => 'Vali alampaneel',
'LBL_SUBPANELS' => 'Alampaneelid',
'LBL_SUBPANEL' => 'Alampaneel',
'LBL_SUBPANEL_TITLE' => 'Tiitel:',
'LBL_SEARCH_FORMS' => 'Otsi',
'LBL_STAGING_AREA' => 'Peatuskoht (lohista ja aseta ühikud siia)',
'LBL_SUGAR_FIELDS_STAGE' => 'Sugari väljad (klikka ühikutel nende lisamiseks valitud väljale)',
'LBL_SUGAR_BIN_STAGE' => 'Sugari kast (klikka ühikutel nende lisamiseks valitud väljale)',
'LBL_TOOLBOX' => 'Tööriistakast',
'LBL_VIEW_SUGAR_FIELDS' => 'Vaata Sugari välju',
'LBL_VIEW_SUGAR_BIN' => 'Vaata Sugari kasti',
'LBL_QUICKCREATE' => 'QuickCreate',
'LBL_EDIT_DROPDOWNS' => 'Redigeeri globaalset rippmenüüd',
'LBL_ADD_DROPDOWN' => 'Lisa uus globaalne rippmenüü',
'LBL_BLANK' => '-tühi-',
'LBL_TAB_ORDER' => 'Tab Order',
'LBL_TAB_PANELS' => 'Kuva paneelid sakina',
'LBL_TAB_PANELS_HELP' => 'Kuva iga paneeli eraldi sakina, selmet kuvada neid kõiki ühel ekraanil',
'LBL_TABDEF_TYPE' => 'Display Type',
'LBL_TABDEF_TYPE_HELP' => 'Select how this section should be displayed. This option only has effect if you have enabled tabs on this view.',
'LBL_TABDEF_TYPE_OPTION_TAB' => 'Tab',
'LBL_TABDEF_TYPE_OPTION_PANEL' => 'Panel',
'LBL_TABDEF_TYPE_OPTION_HELP' => 'Select Panel to have this panel display within the view of the layout. Select Tab to have this panel displayed within a separate tab within the layout. When Tab is specified for a panel, subsequent panels set to display as Panel will be displayed within the tab. <br/>A new Tab will be started for the next panel for which Tab is selected. If Tab is selected for a panel below the first panel, the first panel will necessarily be a Tab.',
'LBL_TABDEF_COLLAPSE' => 'Collapse',
'LBL_TABDEF_COLLAPSE_HELP' => 'Select to make the default state of this panel collapsed.',
'LBL_DROPDOWN_TITLE_NAME' => 'Nimi',
'LBL_DROPDOWN_LANGUAGE' => 'Keel',
'LBL_DROPDOWN_ITEMS' => 'Ühikute loend',
'LBL_DROPDOWN_ITEM_NAME' => 'Ühiku nimi',
'LBL_DROPDOWN_ITEM_LABEL' => 'Kuva silt',
'LBL_SYNC_TO_DETAILVIEW' => 'Sync to DetailView',
'LBL_SYNC_TO_DETAILVIEW_HELP' => 'Select this option to sync this EditView layout to the corresponding DetailView layout. Fields and field placement in the EditView<br />will be sync&#39;d and saved to the DetailView automatically upon clicking Save or Save & Deploy in the EditView.<br />Layout changes will not be able to be made in the DetailView.',
'LBL_SYNC_TO_DETAILVIEW_NOTICE' => 'This DetailView is sync&#39;d with the corresponding EditView.<br />Fields and field placement in this DetailView reflect the fields and field placement in the EditView.<br />Changes to the DetailView cannot be saved or deployed within this page. Make changes or un-sync the layouts in the EditView.',
'LBL_COPY_FROM_EDITVIEW' => 'Copy from EditView',
'LBL_DROPDOWN_BLANK_WARNING' => 'Values are required for both the Item Name and the Display Label. To add a blank item, click Add without entering any values for the Item Name and the Display Label.',
'LBL_DROPDOWN_KEY_EXISTS' => 'Key already exists in list',
'LBL_NO_SAVE_ACTION' => 'Could not find the save action for this view.',
'LBL_BADLY_FORMED_DOCUMENT' => 'Studio2:establishLocation: badly formed document',
// @TODO: Remove this lang string and uncomment out the string below once studio
// supports removing combo fields if a member field is on the layout already.
'LBL_INDICATES_COMBO_FIELD' => '** Indicates a combination field. A combination field is a collection of individual fields. For example, "Address" is a combination field that contains "Street address", "City", "Zip Code","State" and "Country".<br><br>Doubleclick a combination field to see which fields it contains.',
'LBL_COMBO_FIELD_CONTAINS' => 'contains:',

'LBL_WIRELESSLAYOUTS'=>'Mobiili paigutus',
'LBL_WIRELESSEDITVIEW'=>'Mobiili redigeerimisvaade',
'LBL_WIRELESSDETAILVIEW'=>'Mobiili detailvaade',
'LBL_WIRELESSLISTVIEW'=>'Mobiili loendivaade',
'LBL_WIRELESSSEARCH'=>'Mõbiili otsing',

'LBL_BTN_ADD_DEPENDENCY'=>'Lisa sõltuvus',
'LBL_BTN_EDIT_FORMULA'=>'Redigeeri valemit',
'LBL_DEPENDENCY' => 'Sõltuvus',
'LBL_DEPENDANT' => 'Dependant',
'LBL_CALCULATED' => 'Kalkuleeritud väärtus',
'LBL_READ_ONLY' => 'Lugemisrežiim',
'LBL_FORMULA_BUILDER' => 'Formula Builder',
'LBL_FORMULA_INVALID' => 'Kehtetu valem',
'LBL_FORMULA_TYPE' => 'The formula must be of type',
'LBL_NO_FIELDS' => 'Välju ei leitud',
'LBL_NO_FUNCS' => 'Funktsioone ei leitud',
'LBL_SEARCH_FUNCS' => 'Otsicfunktsioone...',
'LBL_SEARCH_FIELDS' => 'Otsi välju...',
'LBL_FORMULA' => 'Valem',
'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Sõltuv',
'LBL_DEPENDENT_DROPDOWN_HELP' => 'Drag options from the list on the left of available options in the dependent dropdown to the lists on the right to make those options available when the parent option is selected. If no items are under a parent option, when the parent option is selected, the dependent dropdown will not be displayed.',
'LBL_AVAILABLE_OPTIONS' => 'Available Options',
'LBL_PARENT_DROPDOWN' => 'Parent Dropdown',
'LBL_VISIBILITY_EDITOR' => 'Visibility Editor',
'LBL_ROLLUP' => 'Rollup',
'LBL_RELATED_FIELD' => 'Related Field',
'LBL_CONFIG_PORTAL_URL'=>'URL to custom logo image. The recommended logo dimensions are 163 Ã 18 pixels.',
'LBL_PORTAL_ROLE_DESC' => 'Do not delete this role. Customer Self-Service Portal Role is a system-generated role created during the Sugar Portal activation process. Use Access controls within this Role to enable and/or disable Bugs, Cases or Knowledge Base modules in Sugar Portal. Do not modify any other access controls for this role to avoid unknown and unpredictable system behavior. In case of accidental deletion of this role, recreate it by disabling and enabling Sugar Portal.',

//RELATIONSHIPS
'LBL_MODULE' => 'Moodul',
'LBL_LHS_MODULE'=>'Põhimoodul',
'LBL_CUSTOM_RELATIONSHIPS' => '* seos on loodud Studios',
'LBL_RELATIONSHIPS'=>'Seosed',
'LBL_RELATIONSHIP_EDIT' => 'Redigeeri seos',
'LBL_REL_NAME' => 'Nimi',
'LBL_REL_LABEL' => 'Silt',
'LBL_REL_TYPE' => 'Tüüp',
'LBL_RHS_MODULE'=>'Seotud moodul',
'LBL_NO_RELS' => 'Seoseid pole',
'LBL_RELATIONSHIP_ROLE_ENTRIES'=>'Optional Condition' ,
'LBL_RELATIONSHIP_ROLE_COLUMN'=>'Veerg',
'LBL_RELATIONSHIP_ROLE_VALUE'=>'Väärtus',
'LBL_SUBPANEL_FROM'=>'Alampaneel',
'LBL_RELATIONSHIP_ONLY'=>'Kuna need kaks moodulit omavad varasemaid seoseid, siis nähtavaid elemente selle seose jaoks ei looda.',
'LBL_ONETOONE' => 'Üks ühest',
'LBL_ONETOMANY' => 'Üks paljudest',
'LBL_MANYTOONE' => 'Palju ühest',
'LBL_MANYTOMANY' => 'Palju mitmetest',

//STUDIO QUESTIONS
'LBL_QUESTION_FUNCTION' => 'Vali funktsioon või komponent',
'LBL_QUESTION_MODULE1' => 'Vali moodul.',
'LBL_QUESTION_EDIT' => 'Vali moodul redigeerimiseks.',
'LBL_QUESTION_LAYOUT' => 'Vali paigutus redigeerimiseks.',
'LBL_QUESTION_SUBPANEL' => 'Vali alampaneel redigeerimiseks.',
'LBL_QUESTION_SEARCH' => 'Vali otsingu paigutus redigeerimiseks',
'LBL_QUESTION_MODULE' => 'Vali mooduli osa redigeerimiseks.',
'LBL_QUESTION_PACKAGE' => 'Vali pakett redigeerimiseks või loo uus pakett.',
'LBL_QUESTION_EDITOR' => 'Vali tööriist.',
'LBL_QUESTION_DROPDOWN' => 'Vali rippmenüü redigeerimiseks või loo uus rippmenüü.',
'LBL_QUESTION_DASHLET' => 'Vali redigeerimiseks dashleti paigutus.',
'LBL_QUESTION_POPUP' => 'Vali hüpikakna paigutus redigeerimiseks.',
//CUSTOM FIELDS
'LBL_RELATE_TO'=>'Seotud',
'LBL_NAME'=>'Nimi',
'LBL_LABELS'=>'Sildid',
'LBL_MASS_UPDATE'=>'Mass Update',
'LBL_AUDITED'=>'Audit',
'LBL_CUSTOM_MODULE'=>'Moodul',
'LBL_DEFAULT_VALUE'=>'Vaikeväärtus',
'LBL_REQUIRED'=>'Kohustuslik',
'LBL_DATA_TYPE'=>'Tüüp',
'LBL_HCUSTOM'=>'KOHANDA',
'LBL_HDEFAULT'=>'VAIKIMISI',
'LBL_LANGUAGE'=>'Keel:',
'LBL_CUSTOM_FIELDS' => '* field created in Studio',

//SECTION
'LBL_SECTION_EDLABELS' => 'Redigeeri silte',
'LBL_SECTION_PACKAGES' => 'Paketid',
'LBL_SECTION_PACKAGE' => 'Pakett',
'LBL_SECTION_MODULES' => 'Moodulid',
'LBL_SECTION_PORTAL' => 'Portaal',
'LBL_SECTION_DROPDOWNS' => 'Rippmenüüd',
'LBL_SECTION_PROPERTIES' => 'Atribuudid',
'LBL_SECTION_DROPDOWNED' => 'Redigeeri rippmenüüd',
'LBL_SECTION_HELP' => 'Abi',
'LBL_SECTION_ACTION' => 'Tegevus',
'LBL_SECTION_MAIN' => 'Peamine',
'LBL_SECTION_EDPANELLABEL' => 'Redigeeri paneeli silt',
'LBL_SECTION_FIELDEDITOR' => 'Redigeeri välja',
'LBL_SECTION_DEPLOY' => 'Juuruta',
'LBL_SECTION_MODULE' => 'Moodul',
'LBL_SECTION_VISIBILITY_EDITOR'=>'Redigeeri nähtavust',
//WIZARDS

//LIST VIEW EDITOR
'LBL_DEFAULT'=>'Vaikimisi',
'LBL_HIDDEN'=>'Peidetud',
'LBL_AVAILABLE'=>'Saadaval',
'LBL_LISTVIEW_DESCRIPTION'=>'Allolevalt kuvatakse kolme veergu. Vaikeveerg sisaldab välju, mis on kuvatavad vaikimisi loendivaates. Lisaveerud sisaldavad välju, mida kasutaja saab valida kohandatud vaadet luues. Saadaolev veerg kuvab välju sinu kui admini jaoks Vaike või Lisaveergude lisamiseks kasutajate jaoks.',
'LBL_LISTVIEW_EDIT'=>'Vaateloendi redigeerija',

//Manager Backups History
'LBL_MB_PREVIEW'=>'Eelvaade',
'LBL_MB_RESTORE'=>'Taasta',
'LBL_MB_DELETE'=>'Kustuta',
'LBL_MB_COMPARE'=>'Võrdle',
'LBL_MB_DEFAULT_LAYOUT'=>'Vaikepaigutus',

//END WIZARDS

//BUTTONS
'LBL_BTN_ADD'=>'Lisa',
'LBL_BTN_SAVE'=>'Salvesta',
'LBL_BTN_SAVE_CHANGES'=>'Salvesta muudatused',
'LBL_BTN_DONT_SAVE'=>'Loobu muudatustest',
'LBL_BTN_CANCEL'=>'Tühista',
'LBL_BTN_CLOSE'=>'Sulge',
'LBL_BTN_SAVEPUBLISH'=>'Salvesta ja paigalda',
'LBL_BTN_NEXT'=>'Järgmine',
'LBL_BTN_BACK'=>'Tagasi',
'LBL_BTN_CLONE'=>'Kloon',
'LBL_BTN_ADDCOLS'=>'Lisa veerge',
'LBL_BTN_ADDROWS'=>'Lisa ridu',
'LBL_BTN_ADDFIELD'=>'Lisa väli',
'LBL_BTN_ADDDROPDOWN'=>'Lisa rippmenüü',
'LBL_BTN_SORT_ASCENDING'=>'Järjesta kasvavalt',
'LBL_BTN_SORT_DESCENDING'=>'Järjesta kahanevalt',
'LBL_BTN_EDLABELS'=>'Redigeeri silte',
'LBL_BTN_UNDO'=>'Tagasi',
'LBL_BTN_REDO'=>'Tee ümber',
'LBL_BTN_ADDCUSTOMFIELD'=>'Lisa kohandatud väli',
'LBL_BTN_EXPORT'=>'Ekspordi kohandamised',
'LBL_BTN_DUPLICATE'=>'Tee koopia',
'LBL_BTN_PUBLISH'=>'Avalda',
'LBL_BTN_DEPLOY'=>'Paigalda',
'LBL_BTN_EXP'=>'Ekspordi',
'LBL_BTN_DELETE'=>'Kustuta',
'LBL_BTN_VIEW_LAYOUTS'=>'Vaata paigutusi',
'LBL_BTN_VIEW_MOBILE_LAYOUTS'=>'View Mobile Layouts',
'LBL_BTN_VIEW_FIELDS'=>'Vaata välju',
'LBL_BTN_VIEW_RELATIONSHIPS'=>'Vaata seoseid',
'LBL_BTN_ADD_RELATIONSHIP'=>'Lisa seos',
'LBL_BTN_RENAME_MODULE' => 'Change Module Name',
'LBL_BTN_INSERT'=>'Sisesta',
//TABS

//ERRORS
'ERROR_ALREADY_EXISTS'=> 'Viga: Väli on juba olemas',
'ERROR_INVALID_KEY_VALUE'=> "Viga: Kehtetu võtmeväärtus: [']",
'ERROR_NO_HISTORY' => 'Ajaloo faile ei leitud',
'ERROR_MINIMUM_FIELDS' => 'Paigutus peab sisaldama vähemalt ühte välja',
'ERROR_GENERIC_TITLE' => 'Viga',
'ERROR_REQUIRED_FIELDS' => 'Kas soovid jätkata? Paigutusest puuduvad järgnevad nõutud väljad:',
'ERROR_ARE_YOU_SURE' => 'Kas soovid jätkata?',

'ERROR_CALCULATED_MOBILE_FIELDS' => 'Järgnevad väljad omavad kaalutud väärtuseid, mida ei saa ümberkalkuleerida reaalajas SugarCRM Mobile Edit vaates:',
'ERROR_CALCULATED_PORTAL_FIELDS' => 'Järgnevad väljad omavad kaalutud väärtuseid, mida ei saa ümberkalkuleerida reaalajas SugarCRM Mobile Edit vaates:',

//SUGAR PORTAL
    'LBL_PORTAL_DISABLED_MODULES' => 'The following module(s) are disabled:',
    'LBL_PORTAL_ENABLE_MODULES' => 'If you would like to enable them in the portal please enable them <a id="configure_tabs" target="_blank" href="./index.php?module=Administration&amp;action=ConfigureTabs">here</a>.',
    'LBL_PORTAL_CONFIGURE' => 'Configure Portal',
    'LBL_PORTAL_THEME' => 'Theme Portal',
    'LBL_PORTAL_ENABLE' => 'Enable',
    'LBL_PORTAL_SITE_URL' => 'Your portal site is available at:',
    'LBL_PORTAL_APP_NAME' => 'Application Name',
    'LBL_PORTAL_LOGO_URL' => 'Logo URL',
    'LBL_PORTAL_LIST_NUMBER' => 'Number of records to display on list',
    'LBL_PORTAL_DETAIL_NUMBER' => 'Number of fields to display on Detail View',
    'LBL_PORTAL_SEARCH_RESULT_NUMBER' => 'Number of results to display on Global Search',
    'LBL_PORTAL_DEFAULT_ASSIGN_USER' => 'Default assigned for new portal registrations',

'LBL_PORTAL'=>'Portaal',
'LBL_PORTAL_LAYOUTS'=>'Portaali paigutused',
'LBL_SYNCP_WELCOME'=>'Värskendamiseks sisesta portaali URL.',
'LBL_SP_UPLOADSTYLE'=>'Vali stiilileht üleslaadimiseks oma arvutist. <br />Järgmisel sünkroniseerimisel on see stiilileht Sugaris juurutatud.',
'LBL_SP_UPLOADED'=> 'Üleslaetud',
'ERROR_SP_UPLOADED'=>'Veendu, et sa laed üles css stiililehe.',
'LBL_SP_PREVIEW'=>'Siin on eelvaade, milline näeb Sugar välja sellist stiililehte kasutades.',
'LBL_PORTALSITE'=>'Sugar Portal URL:',
'LBL_PORTAL_GO'=>'Mine',
'LBL_UP_STYLE_SHEET'=>'Lae üles stiilileht',
'LBL_QUESTION_SUGAR_PORTAL' => 'Vali Sugari paigutus redigeerimiseks.',
'LBL_QUESTION_PORTAL' => 'Vali portaali paigutus redigeerimiseks.',
'LBL_SUGAR_PORTAL'=>'Sugar Portal Editor',
'LBL_USER_SELECT' => '-- Select --',

//PORTAL PREVIEW
'LBL_CASES'=>'Juhtumid',
'LBL_NEWSLETTERS'=>'Uudiskirjad',
'LBL_BUG_TRACKER'=>'Bug Tracker',
'LBL_MY_ACCOUNT'=>'Minu konto',
'LBL_LOGOUT'=>'Logi välja',
'LBL_CREATE_NEW'=>'Loo uus',
'LBL_LOW'=>'Madal',
'LBL_MEDIUM'=>'Keskmine',
'LBL_HIGH'=>'Kõrge',
'LBL_NUMBER'=>'Number:',
'LBL_PRIORITY'=>'Tähtsus:',
'LBL_SUBJECT'=>'Teema',

//PACKAGE AND MODULE BUILDER
'LBL_PACKAGE_NAME'=>'Paketi nimi:',
'LBL_MODULE_NAME'=>'Mooduli nimi:',
'LBL_MODULE_NAME_SINGULAR' => 'Singular Module Name:',
'LBL_AUTHOR'=>'Autor:',
'LBL_DESCRIPTION'=>'Kirjeldus:',
'LBL_KEY'=>'Võti:',
'LBL_ADD_README'=>'Readme',
'LBL_MODULES'=>'Moodulid:',
'LBL_LAST_MODIFIED'=>'Viimati muudetud:',
'LBL_NEW_MODULE'=>'Uus moodul',
'LBL_LABEL'=>'Silt:',
'LBL_LABEL_TITLE'=>'Silt',
'LBL_SINGULAR_LABEL' => 'Singular Label',
'LBL_WIDTH'=>'Laius',
'LBL_PACKAGE'=>'Pakett:',
'LBL_TYPE'=>'Tüüp:',
'LBL_TEAM_SECURITY'=>'Meeskonna turvalisus',
'LBL_ASSIGNABLE'=>'Loovutatav',
'LBL_PERSON'=>'Isik',
'LBL_COMPANY'=>'Ettevõte',
'LBL_ISSUE'=>'Probleem',
'LBL_SALE'=>'Müük',
'LBL_FILE'=>'Fail',
'LBL_NAV_TAB'=>'Navigatsiooni sakk',
'LBL_CREATE'=>'Loo',
'LBL_LIST'=>'Loend',
'LBL_VIEW'=>'Vaade',
'LBL_LIST_VIEW'=>'Vaate loend',
'LBL_HISTORY'=>'Vaata ajalugu',
'LBL_RESTORE_DEFAULT_LAYOUT'=>'Restore Default Layout',
'LBL_ACTIVITIES'=>'Tegevused',
'LBL_SEARCH'=>'Otsi',
'LBL_NEW'=>'Uus',
'LBL_TYPE_BASIC'=>'algne',
'LBL_TYPE_COMPANY'=>'ettevõte',
'LBL_TYPE_PERSON'=>'isik',
'LBL_TYPE_ISSUE'=>'probleem',
'LBL_TYPE_SALE'=>'müük',
'LBL_TYPE_FILE'=>'file',
'LBL_RSUB'=>'See on alampaneel, mida kuvatakse sinu moodulis',
'LBL_MSUB'=>'See on alampaneel, mida sinu moodul pakub seotud moodulil kuvamiseks',
'LBL_MB_IMPORTABLE'=>'Luba import',

// VISIBILITY EDITOR
'LBL_VE_VISIBLE'=>'nähtav',
'LBL_VE_HIDDEN'=>'peidetud',
'LBL_PACKAGE_WAS_DELETED'=>'[[package]] oli kustutatud',

//EXPORT CUSTOMS
'LBL_EC_TITLE'=>'Ekspordi kohandamised',
'LBL_EC_NAME'=>'Paketi nimi:',
'LBL_EC_AUTHOR'=>'Autor:',
'LBL_EC_DESCRIPTION'=>'Kirjeldus:',
'LBL_EC_KEY'=>'Võti:',
'LBL_EC_CHECKERROR'=>'Palun vali moodul.',
'LBL_EC_CUSTOMFIELD'=>'kohandatud väli (väljad)',
'LBL_EC_CUSTOMLAYOUT'=>'kohandatud paigutus (paigutused)',
'LBL_EC_CUSTOMDROPDOWN' => 'customized dropdown(s)',
'LBL_EC_NOCUSTOM'=>'Kohandatud mooduleid ei ole.',
'LBL_EC_EXPORTBTN'=>'Eksport',
'LBL_MODULE_DEPLOYED' => 'Moodul on paigaldaud.',
'LBL_UNDEFINED' => 'defineerimata',
'LBL_EC_CUSTOMLABEL'=>'customized label(s)',

//AJAX STATUS
'LBL_AJAX_FAILED_DATA' => 'Andmete saamine ebaõnnestus',
'LBL_AJAX_TIME_DEPENDENT' => 'Ajaline rakendamine on veel pooleli. Palun oota ja proovi mõne sekundi pärast uuesti.',
'LBL_AJAX_LOADING' => 'Laadmine...',
'LBL_AJAX_DELETING' => 'Kustutamine...',
'LBL_AJAX_BUILDPROGRESS' => 'Ehitamine pooleli...',
'LBL_AJAX_DEPLOYPROGRESS' => 'Paigaldamine pooleli...',
'LBL_AJAX_FIELD_EXISTS' =>'Sisestatud välja nimi eksisteerib juba. Palun sisesta uus välja nimi.',
//JS
'LBL_JS_REMOVE_PACKAGE' => 'Kas soovid selle paketi eemaldada? Selle paketiga seotud failid kustutatakse jäädavalt.',
'LBL_JS_REMOVE_MODULE' => 'Kas soovid selle mooduli eemaldada? Selle mooduliga seotud failid kustutatakse jäädavalt.',
'LBL_JS_DEPLOY_PACKAGE' => 'Iga kohandamine, mida teed Studios kirjutatakse üle, kui see moodul on ümberjuurutatud. Oled kindel, et soovid jätkata?',

'LBL_DEPLOY_IN_PROGRESS' => 'Paketi juurutamiine',
'LBL_JS_VALIDATE_NAME'=>'Nimi - peab olema tähtnumbriline ilma tühikuteta ja algama tähega',
'LBL_JS_VALIDATE_PACKAGE_KEY'=>'Package Key already exists',
'LBL_JS_VALIDATE_PACKAGE_NAME'=>'Paki nimi juba ekisteerib',
'LBL_JS_VALIDATE_KEY_WITH_SPACE'=>'Key - Must be alphanumeric and begin with a letter.',
'LBL_JS_VALIDATE_KEY'=>'Kood - peab olema tähtnumbriline',
'LBL_JS_VALIDATE_LABEL'=>'Palun sisesta silt, mida kasutatakse kui selle mooduli kuvatav nimi',
'LBL_JS_VALIDATE_TYPE'=>'Palun vali mooduli tüüp, mida soovid allolevast loendist ehitada',
'LBL_JS_VALIDATE_REL_NAME'=>'Nimi - peab olema tähtnumbriline ja ilma tühikuteta',
'LBL_JS_VALIDATE_REL_LABEL'=>'Silt - palun lisa silt, mida kuvatakse alampaneelil',

// Dropdown lists
'LBL_JS_DELETE_REQUIRED_DDL_ITEM' => 'Are you sure you wish to delete this required dropdown list item? This may affect the functionality of your application.',

// Specific dropdown list should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_DDL_NAME)
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_SALES_STAGE_DOM' => 'Are you sure you wish to delete this dropdown list item? Deleting the Closed Won or Closed Lost stages will cause the Forecasting module to not work properly',

// Specific list items should be:
// LBL_JS_DELETE_REQUIRED_DDL_ITEM_(UPPERCASE_ITEM_NAME)
// Item name should have all special characters removed and spaces converted to
// underscores
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_WON' => 'Are you sure you wish to delete the Closed Won sales stage? Deleting this stage will cause the Forecasting module to not work properly',
'LBL_JS_DELETE_REQUIRED_DDL_ITEM_CLOSED_LOST' => 'Are you sure you wish to delete the Closed Lost sales stage? Deleting this stage will cause the Forecasting module to not work properly',

//CONFIRM
'LBL_CONFIRM_FIELD_DELETE'=>"Deleting this custom field will delete both the custom field and all the data related to the custom field in the database. The field will be no longer appear in any module layouts."
        . " If the field is involved in a formula to calculate values for any fields, the formula will no longer work."
        . "\\n\\nThe field will no longer be available to use in Reports; this change will be in effect after logging out and logging back in to the application. Any reports containing the field will need to be updated in order to be able to be run."
        . "\\n\\nDo you wish to continue?",
'LBL_CONFIRM_RELATIONSHIP_DELETE'=>'Kas oled kindel, et soovid selle seose kustutada?',
'LBL_CONFIRM_RELATIONSHIP_DEPLOY'=>'See muudab selle seose püsivaks. Kas oled kindel, et soovid selle seose juurutada?',
'LBL_CONFIRM_DONT_SAVE' => 'Pärast sinu viimast salvestamist on tehtud muudatusi, kas soovid salvestada?',
'LBL_CONFIRM_DONT_SAVE_TITLE' => 'Salvestada muudatused?',
'LBL_CONFIRM_LOWER_LENGTH' => 'Andmed on lühendatud ning seda ei saa muuta, kas soovid jätkata?',

//POPUP HELP
'LBL_POPHELP_FIELD_DATA_TYPE'=>'Vali sobiv andmetüüp, mis sobiks väljale sisestavatele andmetele.',
'LBL_POPHELP_FTS_FIELD_CONFIG' => 'Configure the field to be full text searchable.',
'LBL_POPHELP_FTS_FIELD_BOOST' => 'Boosting is the process of enhancing the relevancy of a record\\\'s fields.<br />Fields with a higher boost level will be given greater weight when the search is performed. When a search is performed, matching records containing fields with a greater weight will be appear higher in the search results.<br />The default value is 1.0 which stands for a neutral boost. To apply a positive boost any float value higher than 1 is accepted. For a negative boost use values lower than 1. For example a value of 1.35 will positively boost a field by 135%. Using a value of 0.60 will apply a negative boost.<br />Note that in previous versions it was required to perform a full text search reindex. This is no longer required.',
'LBL_POPHELP_IMPORTABLE'=>'Jah: Väli kaasatakse impordi protsessi.<br />EI: Välja ei kaasata impordi protsessi<br />Nõutud: Välja väärtus pakutakse iga impordi puhul.',
'LBL_POPHELP_IMAGE_WIDTH'=>'Sisesta laiuse number mõõdetuna pikslites.<br />Üleslaetud kujutis kohandatakse selles laiuses.',
'LBL_POPHELP_IMAGE_HEIGHT'=>'Sisesta kõrgus mõõdetuna pikslites.<br />Üleslaetud kujutis kohandatakse selles kõrguses.',
'LBL_POPHELP_DUPLICATE_MERGE'=>'<b>Enabled</b>: The field will appear in the Merge Duplicates feature, but will not be available to use for the filter conditions in the Find Duplicates feature.<br><b>Disabled</b>: The field will not appear in the Merge Duplicates feature, and will not be available to use for the filter conditions in the Find Duplicates feature.'
. '<br><b>In Filter</b>: The field will appear in the Merge Duplicates feature, and will also be available in the Find Duplicates feature.<br><b>Filter Only</b>: The field will not appear in the Merge Duplicates feature, but will be available in the Find Duplicates feature.<br><b>Default Selected Filter</b>: The field will be used for a filter condition by default in the Find Duplicates page, and will also appear in the Merge Duplicates feature.'
,
'LBL_POPHELP_CALCULATED'=>"Create a formula to determine the value in this field.<br>"
   . "Workflow definitions containing an action that are set to update this field will no longer execute the action.<br>"
   . "Fields using formulas will not be calculated in real-time in "
   . "Mobile EditView layouts.",

'LBL_POPHELP_DEPENDENT'=>"Create a formula to determine whether this field is visible in layouts.<br/>"
        . "Dependent fields will follow the dependency formula in the browser-based mobile view, <br/>"
        . "but will not follow the formula in the native applications, such as Sugar Mobile for iPhone. <br/>"
        . "They will not follow the formula in the Sugar Self-Service Portal.",
'LBL_POPHELP_GLOBAL_SEARCH'=>'Select to use this field when searching for records using the Global Search on this module.',
//Revert Module labels
'LBL_RESET' => 'Lähtesta',
'LBL_RESET_MODULE' => 'Lähtesta moodul',
'LBL_REMOVE_CUSTOM' => 'Eemalda kohandamised',
'LBL_CLEAR_RELATIONSHIPS' => 'Tühista seotus',
'LBL_RESET_LABELS' => 'Lähtesta sildid',
'LBL_RESET_LAYOUTS' => 'Reset Layouts',
'LBL_REMOVE_FIELDS' => 'Eemalda kohandatud väljad',
'LBL_CLEAR_EXTENSIONS' => 'Puhasta laiendused',

'LBL_HISTORY_TIMESTAMP' => 'TimeStamp',
'LBL_HISTORY_TITLE' => 'ajalugu',

'fieldTypes' => array(
                'varchar'=>'TextField',
                'int'=>'Integer',
                'float'=>'Float',
                'bool'=>'Checkbox',
                'enum'=>'DropDown',
                'multienum' => 'MultiSelect',
                'date'=>'Kuupäev',
                'phone' => 'Tlf number',
                'currency' => 'Currency',
                'html' => 'HTML',
                'radioenum' => 'Radio',
                'relate' => 'Relate',
                'address' => 'Aadress',
                'text' => 'TextArea',
                'url' => 'URL',
                'iframe' => 'IFrame',
                'image' => 'Image',
                'encrypt'=>'Encrypt',
                'datetimecombo' =>'Datetime',
                'decimal'=>'Decimal',
),
'labelTypes' => array(
    "" => "[-blank-]<br />Frequently used labels",
    "all" => "Kõik",
),

'parent' => 'Flex Relate',

'LBL_ILLEGAL_FIELD_VALUE' =>"Rippmenüü väärtus ei saa sisaldada pakkumisi.",
'LBL_CONFIRM_SAVE_DROPDOWN' =>"Oled valimas seda ühikut rippmenüü loendist eemaldamiseks. Iga rippmenüü väli kasutab seda loendit koos selle ühikuga kui väärtust ei kuvata enam väärtusena ja väärtust ei saa enam valida rippmenüü väljadelt. Kas oled kindel, et soovid jätkata?",
'LBL_POPHELP_VALIDATE_US_PHONE'=>"Select to validate this field for the entry of a 10-digit<br>" .
                                 "phone number, with allowance for the country code 1, and<br>" .
                                 "to apply a U.S. format to the phone number when the record<br>" .
                                 "is saved. The following format will be applied: (xxx) xxx-xxxx.",
'LBL_ALL_MODULES'=>'All Modules',
'LBL_RELATED_FIELD_ID_NAME_LABEL' => '{0} (related {1} ID)',
);

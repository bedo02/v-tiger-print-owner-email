<?php

/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
*
 ********************************************************************************/


require_once('include/database/PearDatabase.php');
require_once('include/utils/UserInfoUtil.php');
require_once('include/utils/utils.php');

global $mod_strings;
global $app_strings;
global $app_list_strings;

global $adb;
global $theme;
$theme_path="themes/".$theme."/";
$image_path=$theme_path."images/";

$field_module=array('Quotes'=>'Quotes','PurchaseOrder'=>'PurchaseOrder','SalesOrder'=>'SalesOrder','Invoice'=>'Invoice');
$field_module=array('Quotes'=>'Quotes','Invoice'=>'Invoice');
$allfields=Array();
foreach($field_module as $fld_module=>$mod_name)
{
	//$fieldListResult = getDefOrgFieldList($fld_module);
	$language_strings = return_module_language($current_language,$fld_module);
	$fieldListResult = getPDFFieldList($fld_module,$language_strings);
	$noofrows = count($fieldListResult);
	$allfields = $allfields+$fieldListResult ;
}

if($_REQUEST['fld_module'] != '')
	$smarty->assign("DEF_MODULE",$_REQUEST['fld_module']);
else
	$smarty->assign("DEF_MODULE",'Quotes');


function getPDFFieldList($module,$language_strings)
{
	global $adb, $log;
	global $image_path;
	$log->debug("Entering into the function getPDFFieldList($module)");
	$tabid=getTabid($module);
	$pdfsettings = Array();
	$pdfsettings_query="select * from crmnow_pdfsettings where pdfmodul='".$module."'";
	$pdfsettings = $adb->pquery($pdfsettings_query,array());
	$noofpickrows = $adb->num_rows($pdfsettings);
	for($j = 0; $j < $noofpickrows; $j++) {
		if( $adb->query_result($pdfsettings,$j,'pdfeditable')== 1) {
			$visible = "checked";
		}
		else {
			$visible = "";
		}
		$test = $adb->query_result($pdfsettings,$j,"pdfieldid");
		$standfield= '<input type="checkbox" name="'.$adb->query_result($pdfsettings,$j,"pdfieldid").'" '.$visible.'>';
		$pdffieldlist[$module][$j]= array($j=>array(0=>$language_strings[$adb->query_result($pdfsettings,$j,'pdffieldname')],1=>$standfield));
	}
	return $pdffieldlist;
}

$smarty->assign("FIELD_INFO",$field_module);
$smarty->assign("FIELD_LISTS",$allfields);
$smarty->assign("MOD", return_module_language($current_language,'Settings'));
$smarty->assign("IMAGE_PATH",$image_path);
$smarty->assign("APP", $app_strings);
$smarty->assign("CMOD", $mod_strings);
$smarty->assign("MODE",'edit');                    
$smarty->display("PDFFieldAccess.tpl");

?>

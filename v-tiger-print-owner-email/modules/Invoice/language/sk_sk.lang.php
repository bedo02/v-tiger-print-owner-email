<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/
/*********************************************************************************
 * $Header$
 * Description:  Defines the Slovak language pack 
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
$mod_strings = Array(
'LBL_MODULE_NAME'=>'Fakt�ra',
'LBL_SO_MODULE_NAME'=>'Fakt�ra',
'LBL_RELATED_PRODUCTS'=>'Product Details',
'LBL_MODULE_TITLE'=>'Invoice: Home',
'LBL_SEARCH_FORM_TITLE'=>'Invoice Search',
'LBL_LIST_FORM_TITLE'=>'Invoice List',
'LBL_LIST_SO_FORM_TITLE'=>'Sales Order List',
'LBL_NEW_FORM_TITLE'=>'New Invoice',
'LBL_NEW_FORM_SO_TITLE'=>'New Sales Order',
'LBL_MEMBER_ORG_FORM_TITLE'=>'Member Organizations',

'LBL_LIST_ACCOUNT_NAME'=>'Account Name',
'LBL_LIST_CITY'=>'City',
'LBL_LIST_WEBSITE'=>'Website',
'LBL_LIST_STATE'=>'State',
'LBL_LIST_PHONE'=>'Phone',
'LBL_LIST_EMAIL_ADDRESS'=>'Email Address',
'LBL_LIST_CONTACT_NAME'=>'Contact Name',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

'LBL_ACCOUNT'=>'Account:',
'LBL_ACCOUNT_NAME'=>'Account Name:',
'LBL_PHONE'=>'Phone:',
'LBL_WEBSITE'=>'Website:',
'LBL_FAX'=>'Fax:',
'LBL_TICKER_SYMBOL'=>'Add. Account Name:',
'LBL_OTHER_PHONE'=>'Other Phone:',
'LBL_ANY_PHONE'=>'Any Phone:',
'LBL_MEMBER_OF'=>'Member of:',
'LBL_EMAIL'=>'Email:',
'LBL_EMPLOYEES'=>'Employees:',
'LBL_OTHER_EMAIL_ADDRESS'=>'Other Email:',
'LBL_ANY_EMAIL'=>'Any Email:',
'LBL_OWNERSHIP'=>'Ownership:',
'LBL_RATING'=>'Rating:',
'LBL_INDUSTRY'=>'Industry:',
'LBL_SIC_CODE'=>'SIC Code:',
'LBL_TYPE'=>'Type:',
'LBL_ANNUAL_REVENUE'=>'Annual Revenue:',
'LBL_ADDRESS_INFORMATION'=>'Address Information',
'LBL_Quote_INFORMATION'=>'Account Information',
'LBL_CUSTOM_INFORMATION'=>'Custom Information',
'LBL_BILLING_ADDRESS'=>'Billing Address:',
'LBL_SHIPPING_ADDRESS'=>'Shipping Address:',
'LBL_ANY_ADDRESS'=>'Any Address:',
'LBL_CITY'=>'City:',
'LBL_STATE'=>'State:',
'LBL_POSTAL_CODE'=>'Postal Code:',
'LBL_COUNTRY'=>'Country:',
'LBL_DESCRIPTION_INFORMATION'=>'Description Information',
'LBL_DESCRIPTION'=>'Description:',
'LBL_TERMS_INFORMATION'=>'Terms & Conditions',
'NTC_COPY_BILLING_ADDRESS'=>'Copy billing address to shipping address',
'NTC_COPY_SHIPPING_ADDRESS'=>'Copy shipping address to billing address',
'NTC_REMOVE_MEMBER_ORG_CONFIRMATION'=>'Are you sure you want to remove this record as a member organization?',
'LBL_DUPLICATE'=>'Potential Duplicate Accounts',
'MSG_DUPLICATE' => 'Creating this account may potentialy create a duplicate account. You may either select an account from the list below or you may click on Create New Account to continue creating a new account with the previously entered data.',

'LBL_INVITEE'=>'Contacts',
'ERR_DELETE_RECORD'=>"A record number must be specified to delete the account.",

'LBL_SELECT_ACCOUNT'=>'Select Account',
'LBL_GENERAL_INFORMATION'=>'General Information',

//for v4 release added
'LBL_NEW_POTENTIAL'=>'New Potential',
'LBL_POTENTIAL_TITLE'=>'Potentials',

'LBL_NEW_TASK'=>'New Task',
'LBL_TASK_TITLE'=>'Tasks',
'LBL_NEW_CALL'=>'New Call',
'LBL_CALL_TITLE'=>'Calls',
'LBL_NEW_MEETING'=>'New Meeting',
'LBL_MEETING_TITLE'=>'Meetings',
'LBL_NEW_EMAIL'=>'New Email',
'LBL_EMAIL_TITLE'=>'Emails',
'LBL_NEW_CONTACT'=>'New Contact',
'LBL_CONTACT_TITLE'=>'Contacts',

//Added vtiger_fields after RC1 - Release
'LBL_ALL'=>'All',
'LBL_PROSPECT'=>'Prospect',
'LBL_INVESTOR'=>'Investor',
'LBL_RESELLER'=>'Reseller',
'LBL_PARTNER'=>'Partner',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'Account Tools',
//Added for 4GA
'Subject'=>'Subject',
'Quote Name'=>'Quote Name',
'Vendor Name'=>'Vendor Name',
'Invoice Terms'=>'Invoice Terms',
'Contact Name'=>'Contact Name',//to include contact name vtiger_field in Invoice
'Invoice Date'=>'Invoice Date',
'Sub Total'=>'Sub Total',
'Due Date'=>'Due Date',
'Carrier'=>'Carrier',
'Type'=>'Type',
'Sales Tax'=>'Sales Tax',
'Sales Commission'=>'Sales Commission',
'Excise Duty'=>'Excise Duty',
'Total'=>'Total',
'Product Name'=>'Product Name',
'Assigned To'=>'Assigned To',
'Billing Address'=>'Billing Address',
'Shipping Address'=>'Shipping Address',
'Billing City'=>'Billing City',
'Billing State'=>'Billing State',
'Billing Code'=>'Billing Postal Code',
'Billing Country'=>'Billing Country',
'Billing Po Box'=>'Billing PO Box',
'Shipping Po Box'=>'Shipping PO Box',
'Shipping City'=>'Shipping City',
'Shipping State'=>'Shipping State',
'Shipping Code'=>'Shipping Postal Code',
'Shipping Country'=>'Shipping Country',
'City'=>'City',
'State'=>'State',
'Code'=>'Code',
'Country'=>'Country',
'Created Time'=>'Created Time',
'Modified Time'=>'Modified Time',
'Description'=>'Description',
'Potential Name'=>'Potential Name',
'Customer No'=>'Customer Mark',
'Sales Order'=>'Sales Order',
'Pending'=>'Pending',
'Account Name'=>'Account Name',
'Terms & Conditions'=>'Terms & Conditions',
//Quote Info
'LBL_INVOICE_INFORMATION'=>'Invoice Information',
'LBL_INVOICE'=>'Invoice:',
'LBL_SO_INFORMATION'=>'Sales Order Information',
'LBL_SO'=>'Sales Order:',

//Added in release 4.2
'LBL_SUBJECT'=>'Subject:',
'LBL_SALES_ORDER'=>'Sales order:',
'Invoice Id'=>'Invoice Id',
'LBL_MY_TOP_INVOICE'=>'My Top Open Invoice',
'LBL_INVOICE_NAME'=>'Invoice Name:',
'Purchase Order'=>'Purchase Order',
'Status'=>'Status',
'Id'=>'Invoice Id',
'Invoice'=>'Fakt�ra',

//Added for existing Picklist Entries

'Created'=>'Created',
'Approved'=>'Approved',
'Sent'=>'Sent',
'Credit Invoice'=>'Credit Invoice',
'Paid'=>'Paid',
//Added to Custom Invoice Number
'Invoice No'=>'Invoice No',
'Adjustment'=>'Adjustment',

//Added for Reports (5.0.4)
'Tax Type'=>'Tax Type',
'Discount Percent'=>'Discount Percent',
'Discount Amount'=>'Discount Amount',
'Terms & Conditions'=>'Terms & Conditions',
'No'=>'No',
'Date'=>'Date',

// Added affter 5.0.4 GA
//Added for Documents module
'Documents'=>'Documents',

////////////// crm-now extension //////////////////////
//crm-now PDF Configurator
'LBL_PDF_CONFIGURATOR'=>'PDF Configurator for Invoices',
'LBL_PDF_CONFIGURATOR_DESC'=>'Here you may change the PDF output for your invoices.',
'LBL_PDF_CONFIGURATOR_FONTS'=>'The following fonts are available. The standard font is "Dajavu Sans".',
'LBL_PDF_CONFIGURATOR_FONTSSIZE'=>'Here you may change the font sizes for each section in pixel (px).',
'LBL_PDF_CONFIGURATOR_FONTSSIZE_HEADER'=>'Header',
'LBL_PDF_CONFIGURATOR_FONTSSIZE_FOOTER'=>'Footer',
'LBL_PDF_CONFIGURATOR_FONTSSIZE_ADDRESS'=>'Address',
'LBL_PDF_CONFIGURATOR_FONTSSIZE_BODY'=>'Body',
'LBL_PDF_CONFIGURATOR_ROWS'=>'Here you may select the columns of the PDF body. Mark the columns you want to see. ',
'LBL_PDF_CONFIGURATOR_SPACE_HEADER'=>'How many empty lines do you want to have after the header line?',
'LBL_PDF_CONFIGURATOR_SUMMARY'=>'Do you want to display the total?',
'LBL_PDF_DESCRIPTION_CONTENT'=>'What do you want to have printed at the item column?',
'LBL_PDF_DESCRIPTION_CONTENT_NAME'=>'Product Name',
'LBL_PDF_DESCRIPTION_CONTENT_DESCRIPTION'=>'Product Description',
'LBL_PDF_DESCRIPTION_CONTENT_COMMENT'=>'Comment',
'LBL_PDF_PONAME'=>'Do you want to diplay the invoice name?',
'LBL_PDF_CLIENTID'=>'Do you want to diplay the customer id?',
'LBL_LANGUAGES'=>'Select the language for the PDF.',
'LBL_PRINT_LOGO'=>'Do you want to print the logo image?',
'LBL_PRINT_FOOTER'=>'Do you want to print the footer?',
'LBL_PRINT_FOOTERPAGE'=>'Do you want to print the invoice and page numbers at the footer?',
'LBL_PDFSAVE'=>'save',
'Shippingnote' => 'shipping note',
'LBL_PAPERFORMAT'=>'Select the paper format.',
'LBL_PAPERFORMAT'=>'Select the paper format.',

//crm-now hinzugef�gt um Rechnungen zu speichern
'LBL_PDFSUBJECT_INV'=>'safed PDF from an invoice with the subject',
'LBL_PDFSUBJECT_SHN'=>'safed PDF from a shipping note with the subject',
'LBL_PDF_FOLDERNAME'=>'safed PDFs from Invoices',
'LBL_PDF_FOLDERDES'=>'PDF outputs which has been saved at an Invoice detail view.',
'LBL_OWNER_EMAIL'=>'Do you want to print the Email of the person in charge?',
);

?>

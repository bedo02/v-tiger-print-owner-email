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
 * Contributor(s): www.crm-now.de translation to German
 ********************************************************************************/
/*********************************************************************************
 * $Header$
 * Description:  Defines the German (Germany) language pack
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): crm-now, Berlin, www.crm-now.com
 ********************************************************************************/

$mod_strings = Array(
'LBL_MODULE_NAME'=>'Rechnung',
'LBL_SO_MODULE_NAME'=>'Rechnungen',
'LBL_RELATED_PRODUCTS'=>'Artikelliste',
'LBL_MODULE_TITLE'=>'Rechnungen: Home',
'LBL_SEARCH_FORM_TITLE'=>'Rechnungen suchen',
'LBL_LIST_FORM_TITLE'=>'Rechnungsliste',
'LBL_LIST_SO_FORM_TITLE'=>'Liste der Kundenbestellungen',
'LBL_NEW_FORM_TITLE'=>'Neue Rechnung',
'LBL_NEW_FORM_SO_TITLE'=>'Neue Kundenbestellung',
'LBL_MEMBER_ORG_FORM_TITLE'=>'Zugehörige Organisation',

'LBL_LIST_ACCOUNT_NAME'=>'Organisation',
'LBL_LIST_CITY'=>'Ort',
'LBL_LIST_WEBSITE'=>'Webseite',
'LBL_LIST_STATE'=>'Bundesland',
'LBL_LIST_PHONE'=>'Telefon',
'LBL_LIST_EMAIL_ADDRESS'=>'E-Mail',
'LBL_LIST_CONTACT_NAME'=>'Person',

//DON'T CONVERT THESE THEY ARE MAPPINGS
'db_name' => 'LBL_LIST_ACCOUNT_NAME',
'db_website' => 'LBL_LIST_WEBSITE',
'db_billing_address_city' => 'LBL_LIST_CITY',

//END DON'T CONVERT

'LBL_ACCOUNT'=>'Organisation:',
'LBL_ACCOUNT_NAME'=>'Organisation:',
'LBL_PHONE'=>'Telefon:',
'LBL_WEBSITE'=>'Webseite:',
'LBL_FAX'=>'Fax:',
'LBL_TICKER_SYMBOL'=>'Ticker Symbol:',
'LBL_OTHER_PHONE'=>'Anderes Telefon:',
'LBL_ANY_PHONE'=>'Weiteres Telefon:',
'LBL_MEMBER_OF'=>'gehört zu:',
'LBL_EMAIL'=>'E-Mail:',
'LBL_EMPLOYEES'=>'Mitarbeiter:',
'LBL_OTHER_EMAIL_ADDRESS'=>'Weitere E-Mail:',
'LBL_ANY_EMAIL'=>'Andere E-Mail:',
'LBL_OWNERSHIP'=>'Besitzer:',
'LBL_RATING'=>'Bewertung:',
'LBL_INDUSTRY'=>'Industrie:',
'LBL_SIC_CODE'=>'Börsen Code:',
'LBL_TYPE'=>'Typ:',
'LBL_ANNUAL_REVENUE'=>'Jahresumsatz:',
'LBL_ADDRESS_INFORMATION'=>'Adresse',
'LBL_Quote_INFORMATION'=>'Organisation',
'LBL_CUSTOM_INFORMATION'=>'Benutzerdefinierte Felder',
'LBL_BILLING_ADDRESS'=>'Rechnungsadresse:',
'LBL_SHIPPING_ADDRESS'=>'Lieferadresse:',
'LBL_ANY_ADDRESS'=>'Andere Adresse:',
'LBL_CITY'=>'Ort:',
'LBL_STATE'=>'Bundesland:',
'LBL_POSTAL_CODE'=>'PLZ:',
'LBL_COUNTRY'=>'Land:',
'LBL_DESCRIPTION_INFORMATION'=>'Zusatzinformationen',
'LBL_DESCRIPTION'=>'Beschreibung:',
'LBL_TERMS_INFORMATION'=>'Konditionen',
'NTC_COPY_BILLING_ADDRESS'=>'Kopiere Rechnungsadresse zu Lieferadresse',
'NTC_COPY_SHIPPING_ADDRESS'=>'Kopiere Lieferadresse zu Rechnungsadresse',
'NTC_REMOVE_MEMBER_ORG_CONFIRMATION'=>'Möchten Sie diesen Eintrag wirklich löschen?',
'LBL_DUPLICATE'=>'Eventuell doppelte Organisation angelegt',
'MSG_DUPLICATE' => 'Das Anlegen dieser Organisation führt möglicherweise zu einer doppelten Eintragung. Sie können entweder mit der Auswahl einer Organisation aus der untenstehenden Liste fortfahren oder einen neue Organisation anlegen.',

'LBL_INVITEE'=>'Personen',
'ERR_DELETE_RECORD'=>"Zum Löschen muss mindestens ein Eintrag markiert sein.",

'LBL_SELECT_ACCOUNT'=>'Organisation wählen',
'LBL_GENERAL_INFORMATION'=>'Allgemeine Information',

//for v4 release added
'LBL_NEW_POTENTIAL'=>'Neues Verkaufspotential',
'LBL_POTENTIAL_TITLE'=>'Potentials',

'LBL_NEW_TASK'=>'Neue Aufgabe',
'LBL_TASK_TITLE'=>'Aufgaben',
'LBL_NEW_CALL'=>'Neuer Anruf',
'LBL_CALL_TITLE'=>'Anrufe',
'LBL_NEW_MEETING'=>'Neues Meeting',
'LBL_MEETING_TITLE'=>'Meetings',
'LBL_NEW_EMAIL'=>'Neue E-Mail',
'LBL_EMAIL_TITLE'=>'E-Mails',
'LBL_NEW_CONTACT'=>'Neue Person',
'LBL_CONTACT_TITLE'=>'Personen',

//Added fields after RC1 - Release
'LBL_ALL'=>'Alle',
'LBL_PROSPECT'=>'Potentieller Kunde',
'LBL_INVESTOR'=>'Investor',
'LBL_RESELLER'=>'Wiederverkäufer',
'LBL_PARTNER'=>'Partner',

// Added for 4GA
'LBL_TOOL_FORM_TITLE'=>'Werkzeuge',
//Added for 4GA
'Subject'=>'Titel',
'Quote Name'=>'Angebot',
'Vendor Name'=>'Anbieter',
'Invoice Terms'=>'Rechnungsbedingungen',
'Contact Name'=>'Kontaktname',//to include contact name field in Invoice
'Invoice Date'=>'Rechnungsdatum',
'Sub Total'=>'Zwischensumme',
'Due Date'=>'Fälligkeit',
'Carrier'=>'Transporteur',
'Type'=>'Typ',
'Sales Tax'=>'Verkaufssteuer',
'Sales Commission'=>'Provision',
'Excise Duty'=>'Abgaben',
'Total'=>'Total',
'Product Name'=>'Produktname',
'Assigned To'=>'zuständig',
'Billing Address'=>'Rechnung: Strasse',
'Shipping Address'=>'Lieferung: Strasse',
'Billing City'=>'Ort',
'Billing State'=>'Bundesland',
'Billing Code'=>'PLZ',
'Billing Country'=>'Land',
'Billing Po Box'=>'Postfachnr.',
'Shipping Po Box'=>' Postfachnr.',
'Shipping City'=>' Ort',
'Shipping State'=>' Bundesland',
'Shipping Code'=>' PLZ',
'Shipping Country'=>' Land',
'City'=>'Ort',
'State'=>'Bundesland',
'Code'=>'Code',
'Country'=>'Land',
'Created Time'=>'erstellt',
'Modified Time'=>'geändert',
'Description'=>'Beschreibung',
'Potential Name'=>'Verkaufspotential',
'Customer No'=>'Kundenzeichen',
'Sales Order'=>'Bestellung',
'Notes'=>'Notitzen',
'Pending'=>'hängig',
'Account Name'=>'Organisation',
'Terms & Conditions'=>'Konditionen',
//Quote Info
'LBL_INVOICE_INFORMATION'=>'Rechnungs Information',
'LBL_INVOICE'=>'Rechnung:',
'LBL_SO_INFORMATION'=>'Bestellungs Information',
'LBL_SO'=>'Bestellung:',

//Added in release 4.2
'LBL_SUBJECT'=>'Gegenstand:',
'LBL_SALES_ORDER'=>'Bestellung:',
'Invoice Id'=>'Rechnungsnummer',
'LBL_MY_TOP_INVOICE'=>'meine top Rechnungen',
'LBL_INVOICE_NAME'=>'Rechnung:',
'Purchase Order'=>'Auftrag:',
'Status'=>'Status',
'Id'=>'Rechnungsnummer',
'Invoice'=>'Rechnung',

//Added for existing Picklist Entries

'Created'=>'erzeugt',
'Approved'=>'bestätigt',
'Sent'=>'gesendet',
'Credit Invoice'=>'Gutschrift',
'Paid'=>'bezahlt',
//Added to Custom Invoice Number
'Invoice No'=>'Rechnungsnr.',
'Adjustment'=>'Anpassung',

//Added for Reports (5.0.4)
'Tax Type'=>'Steuertyp',
'Discount Percent'=>'Discount (%)',
'Discount Amount'=>'Discount',
'Terms & Conditions'=>'Geschäftsbedingungen',
'No'=>'Nein',
'Date'=>'Datum',

//crm-now PDF Configurator
'LBL_PDF_CONFIGURATOR'=>'PDF Konfigurator',
'LBL_PDF_CONFIGURATOR_DESC'=>'Hier können Sie die PDF Ausgabe für Ihre Rechnungen verändern.',
'LBL_PDF_CONFIGURATOR_FONTS'=>'Welchen Schrifttyp wollen Sie verwenden? Als Standard wurde "Dejavu Serif" voreingestellt.',
'LBL_PDF_CONFIGURATOR_FONTSSIZE'=>'Hier können Sie die Größe der Schrift für die einzelnen Ausgabebestandteile in Pixel (px) festlegen.',
'LBL_PDF_CONFIGURATOR_FONTSSIZE_HEADER'=>'Kopf',
'LBL_PDF_CONFIGURATOR_FONTSSIZE_FOOTER'=>'Fuß',
'LBL_PDF_CONFIGURATOR_FONTSSIZE_ADDRESS'=>'Adresse',
'LBL_PDF_CONFIGURATOR_FONTSSIZE_BODY'=>'Hauptteil',
'LBL_PDF_CONFIGURATOR_ROWS'=>'Hier können Sie einstellen, welche Spalten im Hauptteil angezeigt werden sollen. Markieren Sie die Spalten, welche Sie in Ihrer PDF Ausgabe sehen wollen. ',
'LBL_PDF_CONFIGURATOR_SPACE_HEADER'=>'Wieviel Leerzeilen brauchen Sie nach der Überschrift?',
'LBL_PDF_CONFIGURATOR_SUMMARY'=>'Wollen Sie die Gesamtsumme anzeigen?',
'LBL_PDF_DESCRIPTION_CONTENT'=>'Was wollen Sie in der Spalte Artikel alles anzeigen?',
'LBL_PDF_DESCRIPTION_CONTENT_NAME'=>'Produktname',
'LBL_PDF_DESCRIPTION_CONTENT_DESCRIPTION'=>'Produktbeschreibung',
'LBL_PDF_DESCRIPTION_CONTENT_COMMENT'=>'Kommentar',
'LBL_PDF_PONAME'=>'Wollen Sie den Auftragsnamen anzeigen?',
'LBL_PDF_CLIENTID'=>'Wollen Sie die Kundenummer anzeigen?',
'LBL_LANGUAGES'=>'In welcher Sprache wollen Sie die PDF Ausgabe erzeugen?',
'LBL_PRINT_LOGO'=>'Wollen Sie das Logo Bild im Kopf ausgeben?',
'LBL_PRINT_FOOTER'=>'Wollen Sie die Angaben im Fuß ausgeben?',
'LBL_PRINT_FOOTERPAGE'=>'Wollen Sie im Fuß die Angebot- und Seitennummer ausgeben?',
'LBL_PDFSAVE'=>'speichern',
'LBL_PDFSUBJECT'=>'gespeichertes PDF',
'Shippingnote' => 'Lieferschein',
'LBL_INVOICE_EXPORT_PDF'=>'als PDF exportieren',

);

?>
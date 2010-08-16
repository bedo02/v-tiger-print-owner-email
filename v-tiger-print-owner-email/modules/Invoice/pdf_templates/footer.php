<?php
/*********************************************************************************
** The contents of this file are subject to the GPL License v.3.0
 * You may not use this file except in compliance with the License
 * The Original Code is:  crm-now, www.crm-now.de
 * All Rights Reserved.
*
 ********************************************************************************/
$name_ceo ="Martin Bednar";
$irs_number ="IE4592069F";
$org_taxid ="IE4592069F";
$bank_account ="47120029";
$bank_routing ="932515";
$bank_name ="AIB Bank";
$bank_swift = "AIBKIE2D";
$bank_iban ="IE04AIBK93251547120029";
$org_email = "info@mysite.sk";
global $footerradio, $pageradio;
global $FOOTER_PAGE, $default_font, $font_size_footer, $invoice_no, $NUM_FACTURE_NAME, $pdf_strings, $footer_margin;
global $org_name, $org_address, $org_city, $org_code, $org_country, $org_irs, $org_phone, $org_fax, $org_website;
global $VAR_PAGE, $VAR_OF;
//bank information - labels from language files
global $ACCOUNT_NUMBER, $ROUTING_NUMBER, $SWIFT_NUMBER, $IBAN_NUMBER;
$this->SetFont($default_font,'',$font_size_footer);
if ($footerradio =='true') {
	$this->SetTextColor(120,120,120);
	//*** first column
	$this->SetFont($default_font,'',$font_size_footer);
	$this->SetXY(PDF_MARGIN_LEFT , -PDF_MARGIN_FOOTER+8);
	$this->Cell($this->GetStringWidth($org_name),$this->getFontSize(),decode_html ($org_name),0,0,'L');
	$this->SetXY(PDF_MARGIN_LEFT , -PDF_MARGIN_FOOTER+12);
	$this->Cell($this->GetStringWidth($org_address),$this->getFontSize(),decode_html ($org_address),0,0,'L');
	$this->SetXY(PDF_MARGIN_LEFT , -PDF_MARGIN_FOOTER+16);
	$this->Cell($this->GetStringWidth($org_code),$this->getFontSize(),decode_html ($org_code)." ".decode_html ($org_city),0,0,'L');
	$this->SetXY(PDF_MARGIN_LEFT , -PDF_MARGIN_FOOTER+20);
	$this->Cell($this->GetStringWidth($org_country),$this->getFontSize(),decode_html ($org_country),0,0,'L');
	//draw line
	$x =PDF_MARGIN_LEFT+43;
	$this->SetDrawColor(120,120,120);
	$this->Line($x,$this->h - PDF_MARGIN_FOOTER+9,$x,$this->h - PDF_MARGIN_FOOTER+23);
	//*** second column
	$this->SetXY(PDF_MARGIN_LEFT+45 , -PDF_MARGIN_FOOTER+8);
	$this->Cell($this->GetStringWidth($pdf_strings['VAR_PHONE']." ".$org_phone),$this->getFontSize(),$pdf_strings['VAR_PHONE']." ".$org_phone,0,0,'L');
	$this->SetXY(PDF_MARGIN_LEFT+45 , -PDF_MARGIN_FOOTER+12);
	$this->Cell($this->GetStringWidth($pdf_strings['VAR_EMAIL']." ".$org_email),$this->getFontSize(),$pdf_strings['VAR_EMAIL']." ".$org_email,0,0,'L');
	$this->SetXY(PDF_MARGIN_LEFT+45 , -PDF_MARGIN_FOOTER+16);
	$this->Cell($this->GetStringWidth($pdf_strings['VAR_TAXID']." ".$org_taxid),$this->getFontSize(),$pdf_strings['VAR_TAXID']." ".$org_taxid,0,0,'L'); 
	$this->SetXY(PDF_MARGIN_LEFT+45 , -PDF_MARGIN_FOOTER+20);
	$this->Cell($this->GetStringWidth($org_irs),$this->getFontSize(),$org_irs,0,0,'L');
	//draw line
	$x =PDF_MARGIN_LEFT+83;
	$this->Line($x,$this->h - PDF_MARGIN_FOOTER+9,$x,$this->h - PDF_MARGIN_FOOTER+23);

	//third column
	$this->SetXY(PDF_MARGIN_LEFT+85 , -PDF_MARGIN_FOOTER+8);
	$this->Cell($this->GetStringWidth($bank_name),$this->getFontSize(),decode_html ($bank_name),0,0,'L');
	$this->SetXY(PDF_MARGIN_LEFT+85 , -PDF_MARGIN_FOOTER+12);
	$this->Cell($this->GetStringWidth($pdf_strings['ACCOUNT_NUMBER']." ".$bank_account),$this->getFontSize(),$pdf_strings['ACCOUNT_NUMBER']." ".$bank_account,0,0,'L');
	$this->SetXY(PDF_MARGIN_LEFT+85 , -PDF_MARGIN_FOOTER+16);
	$this->Cell($this->GetStringWidth($pdf_strings['ROUTING_NUMBER']." ".$bank_routing),$this->getFontSize(),$pdf_strings['ROUTING_NUMBER']." ".$bank_routing,0,0,'L');
	//draw line
	$x =PDF_MARGIN_LEFT+130;
	$this->Line($x,$this->h - PDF_MARGIN_FOOTER+9,$x,$this->h - PDF_MARGIN_FOOTER+23);

	//fourth column
	$this->SetXY(PDF_MARGIN_LEFT+132 , -PDF_MARGIN_FOOTER+8);
	$this->Cell($this->GetStringWidth($pdf_strings['SWIFT_NUMBER']." ".$bank_swift),$this->getFontSize(),$pdf_strings['SWIFT_NUMBER']." ".$bank_swift,0,0,'L');
	$this->SetXY(PDF_MARGIN_LEFT+132 , -PDF_MARGIN_FOOTER+12);
	$this->Cell($this->GetStringWidth($pdf_strings['IBAN_NUMBER']." ".$bank_iban),$this->getFontSize(),$pdf_strings['IBAN_NUMBER']." ".$bank_iban,0,0,'L');
	$this->SetXY(PDF_MARGIN_LEFT+132 , -PDF_MARGIN_FOOTER+16);
	$this->Cell($this->GetStringWidth($org_website),$this->getFontSize(),$org_website,0,0,'L');
}
if ($pageradio =='true') {
	//reset colors
	$this->SetTextColor(120,120,120);				
	//Print page number with quote id
	$this->SetXY(PDF_MARGIN_LEFT+170, -PDF_MARGIN_FOOTER+22);
	$this->Cell(0,20,$pdf_strings['VAR_PAGE'].' '.$this->PageNo().' '.$pdf_strings['VAR_OF'].' '.$this->getAliasNbPages(),0,0,'C');
}
	//reset colors
	$this->SetTextColor(0,0,0);				
?>
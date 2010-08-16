Summary:
This simple PDF configurator has been developed to address a couple of issues which are not covered by the original vtiger code:

- allow PDF design changes by the GUI
- create PDFs in different languages
- includes and allows to edit product description and comments
- beeing flexible in layout and contents of the colums
- consider product description as well as comments
- adding as much text as needed, also for description and for terms and conditions
- creating a head line for each page
- creating credit invoice based on status

Installation instructions:

Step 1: save your existing system

1. Make a backup of your database and your file system before you apply any changes.


Step 2: apply the program changes

1. If you have installed the PDF Configurator for version 5.0.4 before, drop all 6 tables in your DB with a name that starts with "crmnow_....".

2. Access your data base and apply the changes as stated in the db-extensions.txt file.

3. Copy the files provided with this package into your CRM file system.

3. Delete any existing Smarty cache at /Smarty/templates_c.

Step 3: enable admin settings
You may add the PDF Configurator to the Settings function only available to the admin. This will allow you to block fields from getting modified by CRM users. 
For this you have to apply the DB changes as stated in enableadmin.txt file.

License Note: Please note the licenses which apply to each individual file, especially if provided by third parties such as www.dhtmlgoodies.com

Modifications:

- each of the PDF files is based on its own language files. This package is provided with English and German language files. You may add your individual language by ceating a new language file.
- the company logo is taken from the settings->company information settings, you may upload an image with the correct size (close to 300*70 pixel recommended)
- the address field is based on the European address format and formated to fit in the window of European letter envelopes, you may change the format at header.php
- the content of the footer is created at the footer.php files, you may change it to your needs. Note that phone, fax and web site information are taken from the company information at settings
- the European number format is used, you may change it at the pdfcreator.php file
- currently all tax calculations are set to pre tax values you may change this to after tax by changing the $taxbasis at pdfcreator.php

If you have any questions, comments or is you find any bugs please post at the vtiger forum. Do not contact crm-now directly.
Note that this is work in progress. Any hints and contributions for improvements are appreciated.
However, no developer support is provided.

You may check this PDF generator at https://vtigercrm5x.co.crm-now.de

As always, this package comes without any warranty. You may use it on your own risk.

This is a Open Source contribution from crm-now to the vtiger community. 
You may check out other contributions from crm-now such as:
- German language files
- Improved Outlook Plugin
- vtiger manual
- Excel import macro
- UTF-8 Converter

For more information about crm-now you may visit our web site at www.crm-now.com

<?php
/******** setting default time zone ************/
error_reporting(E_ALL ^ E_NOTICE);
date_default_timezone_set('Asia/Calcutta');

$config[''] = array( );
/************************* end user type config ****************************/

/************************* start email config *************************/
$config['mail_config']['protocol']	= 'sendmail';
$config['mail_config']['charset']	= 'iso-8859-1';
$config['mail_config']['smtp_host']	= 'ssl://smtp.googlemail.com';
$config['mail_config']['smtp_user']	= 'info@myloandetails.com';
$config['mail_config']['smtp_pass']	= 'sap28aq199h';
$config['mail_config']['smtp_port']	= '587';
$config['mail_config']['smtp_timeout']  = '5';
$config['mail_config']['newline']       = '\r\n';
$config['mail_config']['mailtype']      = 'html'; 
$config['mail_config']['validation']    = TRUE; // bool whether to validate email or not 

$config['web_admin_email_id'] = 'info@myloandetails.com';
/************************* end email config ***************************/

?>
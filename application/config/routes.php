<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/* Router admin  */
$route['admin/mail_config'] = 'admin/manage_mails/mail_configuration/Mailling_Setup';
$route['admin/group_config'] = 'admin/manage_mails/mail_group/Mail_Group_Setup';
$route['admin/creating_individual'] = 'admin/manage_mails/mail_group/Mail_Group_Setup/adding_email';
$route['admin/group_mail'] = 'admin/manage_mails/mail_group/Mail_Group_Setup/adding_email';
$route['admin/create_bank'] = 'admin/bank/Bank_Creation/Create_Bank';
$route['admin/edit_banks'] = 'admin/bank/Bank_Creation/EDIT_Bank';
$route['admin/creating_bank'] = 'admin/bank/bank_creation/Create_Bank';
$route['admin/create_categories'] = 'admin/bank/Bank_Creation/Create_Categories';
$route['admin/edit_categories'] = 'admin/bank/Bank_Creation/EDIT_Categories';
$route['admin/creating_categories'] = 'admin/bank/Bank_Creation/Create_Categories';
$route['admin/faq_edit'] = 'admin/bank/Bank_Creation/Faq_Question_EDIT';
$route['admin/selected_config'] = 'admin/manage_mails/mail_configuration/Mail_Config/selected_config';
$route['admin/mail_setup'] = 'admin/manage_mails/Mailling_Setup';
$route['admin/select_email'] = 'admin/manage_mails/send_mail/Sending_Mail/select_email';
$route['admin/send_email'] = 'admin/manage_mails/send_mail/Sending_Mail/send_email';
$route['admin/creating_bank_loan'] = 'admin/manage_bank_loan/Bank_Loan/create_bank_loan';
$route['admin/create_manage_bank'] = 'admin/manage_banks/Bank_Control/Create_Manage_Bank';
$route['admin/edit_bank'] = 'admin/manage_banks/Bank_Control/EDIT_Bank';
$route['admin/creating_manage_bank'] = 'admin/manage_banks/Bank_Control/Create_Manage_Bank';
$route['admin/create_city'] = 'admin/manage_states/City_Control/Create_Manage_City';
$route['admin/edit_city'] = 'admin/manage_states/City_Control/EDIT_City';
$route['admin/create_manage_city'] = 'admin/manage_states/City_Control/Create_Manage_City';
$route['admin/create_documents'] = 'admin/manage_documents/Document_Control/Create_Manage_Documents';
$route['admin/document_edit'] = 'admin/manage_documents/Document_Control/EDIT_Documents';
$route['admin/create_manage_documents'] = 'admin/manage_documents/Document_Control/Create_Manage_Documents';
$route['admin/document_controlling_system'] = 'admin/manage_documents/Document_Controlling_System';
$route['admin/save_documents'] = 'admin/manage_documents/Document_Controlling_System/save_documents';
//$route['document_control_system'] = '';
//$route['selecting_bank'] = '';
//$route['document_check'] = '';
$route['admin/edit_document'] = 'admin/manage_documents/Document_Control/EDIT_Documents';
$route['admin/manage_document_create'] = 'admin/manage_documents/Document_Control/Create_Manage_Documents';
$route['admin/document_create'] = 'admin/manage_documents/Document_Controlling_System/Create_Manage_Documents';
$route['admin/intrest_rate_create'] = 'admin/manage_interest_rate/Interest_rate_Control/interest_rate_create';
$route['admin/edit_interest_rate'] = 'admin/manage_interest_rate/Interest_rate_Control/EDIT_Interest_Rate';
$route['admin/intrest_rate_creation'] = 'admin/manage_interest_rate/Interest_rate_Control/interest_rate_create';
$route['admin/create_manage_loan'] = 'admin/manage_loans/Loan_Control/Create_Manage_Loan';
$route['admin/edit_loan'] = 'admin/manage_loans/Loan_Control/EDIT_Loan';
$route['admin/creation_manage_loan'] = 'admin/manage_loans/Loan_Control/Create_Manage_Loan';
$route['admin/creation_state'] = 'admin/manage_states/States_Control/Create_Manage_States';
$route['admin/city_control'] = 'admin/manage_states/City_Control';
$route['admin/state_bank'] = 'admin/manage_states/State_Bank';
$route['admin/create_manage_states'] = 'admin/manage_states/States_Control/Create_Manage_States';
$route['admin/edit_states'] = 'admin/manage_states/States_Control/EDIT_States';
$route['admin/creation_manage_states'] = 'admin/manage_states/States_Control/Create_Manage_States';
$route['admin/cities_controlling'] = 'admin/manage_states/City_Control';
$route['admin/state_banks'] = 'admin/manage_states/State_Bank';
$route['admin/state_bank_controlling_system'] = 'admin/manage_states/State_Bank/Create_State_Bank_Controlling';
$route['admin/selecting_bank'] = 'admin/manage_states/State_Bank/Selecting_State_Bank';
$route['admin/edting_state'] = 'admin/manage_states/States_Control/EDIT_States'; 
$route['admin/value_setting'] = 'admin/site_setting/Main_Value_Setting/update_main_value_setting';
$route['admin/change_password']= 'admin/changepassword';
$route['admin/profile_save'] = 'admin/profile/save';
$route['admin/forgot'] = 'admin/forgot';
$route['admin/dashboard'] = 'admin/dashboard';
$route['admin/compose_mail'] = 'admin/manage_mails/send_mail/Sending_Mail';
$route['admin/banks_creation'] = 'admin/bank/Bank_Creation';
$route['admin/loan_crontolling'] = 'admin/manage_loans/Loan_Control';
$route['admin/doucment_manager'] = 'admin/manage_documents/Document_Control';
$route['admin/state_controllings'] = 'admin/manage_states/States_Control';
$route['admin/main_value_setting'] = 'admin/site_setting/Main_Value_Setting';
$route['admin/faq_viewing'] = 'admin/bank/Bank_Creation/FAQ_Question_View';
$route['admin/profiles']= 'admin/profile';
$route['admin/changepassword'] = 'admin/changepassword';
$route['admin/help_profile'] = 'admin/Help_Profile';
$route['admin/logouting'] = 'admin/logout';
$route['admin/forgetting'] = 'admin/forgot';
$route['admin/group_upload'] = 'admin/manage_mails/mail_group/Group_Upload';
$route['admin/pdf'] = 'admin/manage_mails/mail_group/Mail_Group_Setup/load_pdf';
$route['admin/grouping'] = 'admin/manage_mails/mail_group/Mail_Group_Creation/create_group';
$route['admin/group_swap'] = 'admin/manage_mails/mail_group/Group_Swapping';
$route['admin/group_setup_edit'] = 'admin/manage_mails/mail_group/Mail_Group_Setup/edit';
$route['admin/selected_email'] = 'admin/manage_mails/mail_group/Group_Swapping/select_email';
$route['admin/selecting_email'] = 'admin/manage_mails/mail_group/Group_Swapping/selected_email';
$route['admin/creation_groupping'] = 'admin/manage_mails/mail_group/Mail_Group_Setup/create_group';
$route['admin/group_creation_edit'] = 'admin/manage_mails/mail_group/Mail_Group_Creation/edit';
$route['admin/creation_groupping'] = 'admin/manage_mails/mail_group/Mail_Group_Setup/create_group';
$route['admin/group_multiuploading'] = 'admin/manage_mails/mail_group/Group_Upload/multiupload';
$route['admin/bank_viewing'] = 'admin/bank/Bank_Creation/Bank_View';
$route['admin/categories_view'] = 'admin/bank/Bank_Creation/Categories_View';
$route['admin/intrest_rate_controlling'] = 'admin/manage_interest_rate/Interest_rate_Control';
$route['admin/bankcontrol'] = 'admin/manage_banks/Bank_Control';
$route['admin/bankloan'] = 'admin/manage_bank_loan/Bank_Loan';
$route['admin/bank_creation_system'] = 'admin/bank/Bank_Creation/Create_Bank';
$route['admin/creationbank'] = 'admin/bank/Bank_Creation/Create_Bank';
$route['admin/edit_personal_loan'] = 'admin/PersonalLoan/Personal_Loan/EDIT_Personal_loan';
$route['admin/personal_loan_creation'] = 'admin/PersonalLoan/Personal_Loan/Create_Personal_Loan';
$route['admin/personal_loan_create'] = 'admin/PersonalLoan/Personal_Loan/Create_Personal_Loan';
$route['admin/personal_loan'] = 'admin/PersonalLoan/Personal_Loan';
$route['admin/business_loan'] = 'admin/BusinessLoan/Business_Loan';
$route['admin/mailling_setup'] = 'admin/manage_mails/mail_configuration/Mailling_Setup';
$route['admin/mail_config'] = 'admin/manage_mails/mail_configuration/Mail_Config';
$route['admin/mail_group_setup'] = 'admin/manage_mails/mail_group/Mail_Group_Setup';
$route['admin/sending_mail'] = 'admin/manage_mails/send_mail/Sending_Mail';
$route['admin/bank_create'] = 'admin/bank/Bank_Creation';
$route['admin/loan_control'] = 'admin/manage_loans/Loan_Control';
$route['admin/document_control'] = 'admin/manage_documents/Document_Control';
$route['admin/manage_states'] = 'admin/manage_states/States_Control';
$route['admin/mail_value_setting'] = 'admin/site_setting/Main_Value_Setting';
$route['admin/draft'] = 'admin/manage_draft/Draft_Control';
$route['admin/faqs'] = 'admin/bank/Bank_Creation/FAQ_Question_View';
$route['admin/product_description'] = 'admin/product_description/Product_Description_Control';
$route['admin/employee_control'] = 'admin/employee/Employee_Control';
$route['admin/agency_control'] = 'admin/agency/Agency_Control';
$route['admin/file_status_control'] = 'admin/manage_file_status_master/File_Status_Master_Control';
$route['admin/file_process_control'] = 'admin/file_process_status/File_Process_Status_Control';
$route['admin/business_loan_creation'] = 'admin/BusinessLoan/Business_Loan/Create_Business_Loan';
$route['admin/create_control_employee'] = 'admin/employee/Employee_Control/Create_Employee';
$route['admin/edit_employee'] = 'admin/employee/Employee_Control/EDIT_Employee';
$route['admin/create_employee'] = 'admin/employee/Employee_Control/Create_Employee';
$route['admin/create_file'] = 'admin/manage_file_status_master/File_Status_Master_Control/Create_File';
$route['admin/edit_file'] = 'admin/manage_file_status_master/File_Status_Master_Control/EDIT_File';
$route['admin/create_file'] = 'admin/file_process_status/File_Process_Status_Control/Create_File_Process_Status';
$route['admin/file_create'] = 'admin/manage_file_status_master/File_Status_Master_Control/Create_File';
$route['admin/file_edit'] = 'admin/manage_file_status_master/File_Status_Master_Control/EDIT_File';
$route['admin/file_status_create'] = 'admin/manage_file_status_master/File_Status_Master_Control/create_file';
$route['admin/draft_category'] = 'admin/manage_draft/Draft_Control/Create_Manage_category';
$route['admin/business_loan_edit'] = 'admin/BusinessLoan/Business_Loan/EDIT_Bussiness_loan';
$route['admin/draft_creation_category_manage'] = 'admin/manage_draft/Draft_Control/Create_Manage_category';
$route['admin/draft_create'] = 'admin/manage_draft/Draft_Control/Create_Manage_Draft';
$route['admin/agency_create'] = 'admin/agency/Agency_Control/Create_Agency';
$route['admin/agency_edit'] = 'admin/agency/Agency_Control/EDIT_Agency';
$route['admin/master_file_create'] = 'admin/manage_file_status_master/File_Status_Master_Control/Create_Process';
$route['admin/master_file_edit'] = 'admin/manage_file_status_master/File_Status_Master_Control/EDIT_Process';
$route['admin/product_create'] = 'admin/product_description/Product_Description_Control/Create_Manage_ProductView';
$route['admin/master_file_process'] = 'admin/manage_file_status_master/File_Status_Master_Control/Process';
$route['admin/product_createion'] = 'admin/product_description/Product_Description_Control/Create_Product';
$route['posting-query'] = 'Home_Loan_Faq/faq_creation';
$route['admin'] = 'admin/Signin';


/* Router employee  */
$route['employee/dashboard'] = 'employee/Dashboard';
$route['employee/disbursment_create'] = 'employee/Disbursement/create_disbursement';
$route['employee/disbursment_creation_doc'] = 'employee/Disbursement/create_document';
$route['employee/login'] = 'employee/Login';
$route['employee/file_process'] = 'employee/File_process';
$route['employee/disbursement'] = 'employee/Disbursement';
$route['employee/Search'] = 'employee/search';
$route['employee/generate_URC'] = 'employee/login/Generate_URC_File';
$route['employee/search_edit'] = 'employee/Search/EDIT_file';
$route['employee/create_disbursement'] = 'employee/Disbursement/create_document';
$route['employee'] = 'employee/Signin';
$route['employee/profile_save'] = 'employee/Profile/save';


/* Router DSA  */
$route['dsa/generate_URC'] = 'dsa/login/Generate_URC_File';
$route['dsa/create_disbursement'] = 'dsa/Disbursement/create_document';
$route['dsa/search_edit'] = 'dsa/Search/EDIT_file';
$route['dsa/dashboard'] = 'dsa/Dashboard';
$route['dsa/file_process'] = 'dsa/File_process';
$route['dsa/disbursement'] = 'dsa/Disbursement';
$route['dsa/search'] = 'dsa/Search';
$route['dsa'] = 'dsa/Signin';
$route['dsa/disbursment_creation'] = 'dsa/Disbursement/create_disbursement';
$route['dsa/Disbursement_doc'] = 'dsa/Disbursement/create_document';
$route['dsa/profile_save'] = 'dsa/profile/save';


/* Router Visitor  */

$route['home-loan-products-details-terms-conditions'] = 'Products';
$route['home-mortgage-loan-required-documents-checklist'] = 'Documents';
$route['home-loan-interest-rates-tenures-features'] = 'Home_Loan_Interest_Rates';
$route['home-loan-agreement-terms-conditions'] = 'Home_Loan_Aggrement';
$route['draft-sale-lease-rental-construction-agreements-deeds-documents'] = 'Draft_Agreements';
$route['home-loan-salaried-eligibility-calculator'] = 'Home_Loan_Eligibility_Calculator_Residence';
$route['self-employed-home-loan-eligibility-calculator'] = 'Home_Loan_Eligibility_Calculator_Self_Employeed';
$route['nri-salaried-home-loan-eligibility-calculator'] = 'Home_Loan_Eligibility_Calculator_NRI_Salaried';
$route['home-loan-file-status-online-tracking'] = 'Home_Loan_File_Status';
$route['home-personal-business-loans-cibil-properties-faqs'] = 'Business-Loan';
$route['post-a-query'] = 'Home_Loan_Faq';
$route['home-loan-application'] = 'Home_Loan_Application_Residence';
$route['nri-home-loan-application'] = 'Home_Loan_Application_NRI';
$route['Loan-emi-ammortization-calculator'] = 'EMI_Calculators';
$route['privacy-policy'] = 'PrivacyPolicy';
$route['terms-conditions'] = 'Terms_Conditions';
$route['dsa-registration'] = 'Dsa_Login';


$route['new-faq'] = 'Faq_sorting/new_faq';
$route['top-faq'] = 'Faq_sorting/top_results';







/* Router Default  */
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;
//$route['get-email-list'] = 'admin/manage_mails/mail_group/group_Swapping/getMailbygrp';

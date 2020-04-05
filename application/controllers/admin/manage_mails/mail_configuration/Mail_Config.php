<?php

/**
 * Description of Mail_Capture
 *
 * @author HemanthRaj
 */
class Mail_Config extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admin/Mail_Setup', 'ms');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $uridata = $this->session->userdata('i');
        
        $this->outputData['userdata'] = $this->ms->selectByUserId($uridata);
        if ($this->outputData) {
            $this->load->view('admin/email_template/manage_mails/mail_configuration/config_mail', $this->outputData);
        }
    }

    public function selected_config() {
        $selected_config = $this->input->post('selected_id');
        $result = $this->ms->config_select_Id($selected_config);
        $config = $this->config;
        $results = $config->config['mail_config'];
        $results['protocol'] = $result['protocal'];
        $results['charset'] = $result['charset'];
        $results['smtp_host'] = $result['smtp_host'];
        $results['smtp_user'] = $result['smtp_user'];
        $results['smtp_pass'] = $result['smtp_password'];
        $results['smtp_port'] = $result['smtp_port'];
        $results['smtp_timeout'] = $result['smtp_timeout'];
        $results['web_admin_email_id'] = $result['web_email'];
        echo "<pre>";
        print_r($results);
        //$CI->config->set_item($results);
        echo "</pre>";
    }

}

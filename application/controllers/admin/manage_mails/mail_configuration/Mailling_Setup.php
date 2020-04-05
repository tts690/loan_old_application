<?php

/**
 * Description of Mail_Group
 *
 * Developer:- HemanthRaj
 */
class Mailling_Setup extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        //$this->load->model('admin/mail_setup', 'ms');
    }

    /*
      private function _loginValidate() {
      $this->load->library('form_validation');

      $this->form_validation->set_rules('protocal', 'protocal', 'trim|required');
      $this->form_validation->set_rules('charset', 'charset', 'trim|required');
      $this->form_validation->set_rules('smtp_host', 'smtp host', 'trim|required');
      $this->form_validation->set_rules('smtp_user', 'smtp user', 'trim|required');
      $this->form_validation->set_rules('smtp_password', 'smtp password', 'trim|required');
      $this->form_validation->set_rules('smtp_port', 'smtp port', 'trim|required');
      $this->form_validation->set_rules('smtp_timeout', 'smtp timeout', 'trim|required');
      $this->form_validation->set_rules('web_email', 'web email', 'trim|required');
      } */

    public function index() {
        $this->load->view('admin/email_template/manage_mails/mail_configuration/mail_setup');
    }

    public function load_pdf() {
        $this->load->view('admin/email_template/manage_mails/mail_configuration/mail_setup_pdf');
    }

}

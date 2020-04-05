<?php

/**
 * Description of Sending_Mail
 *
 * @author HemanthRaj
 */
class Sending_Mail extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/G_Swapping', 'gs');
    }

    public function index() {
        $this->outputData['data'] = $this->gs->select_group_only();
        $this->load->view('admin/email_template/manage_mails/send_mail/home', $this->outputData);
    }

    public function select_email() {
        $group_id = $this->input->post('group_selecting');
        $this->outputData['group_data'] = $this->gs->select_email_only($group_id);
        $this->outputData['data'] = $this->gs->select_group_only();
        $this->load->view('admin/email_template/manage_mails/send_mail/home', $this->outputData);
    }

    public function send_email() {
        $group = $this->input->post();
        $from = $_POST['from'];
        $to = $_POST['to'];
        $template = $_POST['template'];
        $subject = $_POST['subject'];
        
        foreach ($group['id'] as $value) {
            $data = array();
            $data['to'] = $value . "," . $to;
            $data['Subject'] = $subject;
            $data['cc'] = "";
            $data['bcc'] = "";
            $data['from'] = $from;
            $data['message'] = $template;
        }
        
        if (!sendEmail($data['to'], $data['Subject'], $data['message'], $data['cc'], $data['bcc'], $data['from'])) {
            $this->outputData['error'] = ' Problem in sending mail , please try again';
        } else {
            $this->outputData['error'] = 'SUCCESS';
        }
        $this->load->view('admin/email_template/manage_mails/send_mail/home', $this->outputData);
    }

}

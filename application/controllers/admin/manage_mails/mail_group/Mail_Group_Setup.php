<?php

/**
 * Description of Mail_Capture_Setup
 *
 * @author HemanthRaj
 */
class Mail_Group_Setup extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin/Group_mail_setup', 'gms');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    private function _GroupValidate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('groupname', 'Group Name', 'trim|required');
    }

    private function _CreateGroupValidate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('group_name', 'Group Name', 'trim|required');
    }

    private function _EditValidate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('group_name', 'Group Name', 'trim|required');
    }

    public function _Multi_UploadValidate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('excel', 'Excel', 'trim|required');
    }

    public function index() {
        $this->outputData['data'] = $this->gms->select_group();
        $this->load->view('admin/email_template/manage_mails/mail_group/tabel',$this->outputData);
    }

    public function edit() {
        $this->_EditValidate();
         if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['email'] = $_POST['email'];
            $data['group_name'] = $_POST['group_name'];
            $data['id'] = $_POST['editing_id'];
            
            if ($this->gms->editing($data)) {
                redirect('admin/manage_mails/mail_group/Mail_Group_Setup');
            } else {
                $this->outputData['error'] = 'Failed To Insert';
                redirect('admin/manage_mails/mail_group/Mail_Group_Setup');
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/email_template/manage_mails/mail_group/edit',$this->outputData);
    }

    public function delete() {
        $id = $this->uri->segment(6);

        if ($this->gms->deleteing($id)) {
            redirect('admin/manage_mails/mail_group/Mail_Group_Setup');
        } else {
            redirect('admin/manage_mails/mail_group/Mail_Group_Setup');
        }
        $this->load->view('admin/email_template/manage_mails/mail_group/edit', $this->outputData);
    }

    function adding_email() {
        $this->_GroupValidate();
        $this->outputData['data'] = $this->gms->selecting_group_name();

        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['email'] = $_POST['email'];
            $data['group_id'] = $_POST['groupname'];

            if ($this->gms->adding_email($data)) {
                $this->outputData['error'] = 'Successfully Inserted';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/email_template/manage_mails/mail_group/mail_group_setup', $this->outputData);
    }

    function create_group() {
        $this->_CreateGroupValidate();
        $this->outputData['data'] = $this->gms->select_group_only();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['group_name'] = $_POST['group_name'];

            if ($this->gms->create_group($data)) {
                $this->outputData['error'] = 'Successfully Inserted';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/email_template/manage_mails/mail_group/mail_group_create', $this->outputData);
    }

    function load_pdf() {
        $this->load->view('admin/email_template/manage_mails/mail_group/mail_group_setup_pdf');
    }

    public function multiupload() {
        $this->_Multi_UploadValidate();
        $this->load->helper('download');
        $this->load->library('PHPReport');

        if ($this->form_validation->run() === TRUE) {

            $template = $_POST['excel'];

            //set config for report
            $config = array(
                'template' => $template,
            );
            $R = new PHPReport($config);
            
            print_r($R);
            die();
            $R->load(array(
                'id' => 'student',
                'repeat' => TRUE,
                'data' => $data
                    )
            );
/*
            if ($this->gms->create_group($data)) {
                $this->outputData['error'] = 'Successfully Inserted';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }*/
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/email_template/manage_mails/mail_group/multi_upload');
    }

}

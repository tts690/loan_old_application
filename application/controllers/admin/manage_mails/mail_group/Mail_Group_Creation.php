<?php

/**
 * Description of Mail_Group_creation
 *
 * Developer HemanthRaj
 */
class Mail_Group_creation extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/group_mail_setup', 'gms');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    private function _CreateGroupValidate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('group_name', 'Group Name', 'trim|required');
    }

    private function _EditValidate() {
        $this->load->library('form_validation');
        //$this->form_validation->set_rules('groupid', 'Group ID', 'trim|required');
        $this->form_validation->set_rules('groupname', 'Group Name', 'trim|required');
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

    public function edit() {
        $this->_EditValidate();
        $id = $this->uri->segment(6);

        $this->outputData['data'] = $this->gms->select_group_id($id);
        if ($this->form_validation->run() === TRUE) {
            $group_name = $_POST['groupname'];
            $orginal_group_id = $_POST['editing_group_id'];

            if ($this->gms->update_group($group_name, $orginal_group_id)) {
                $this->outputData['error'] = 'Successfully Updated';
                redirect('admin/manage_mails/mail_group/mail_group_creation/create_group');
                exit();
            } else {
                $this->outputData['error'] = 'Failed To Update';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }

        $this->load->view('admin/email_template/manage_mails/mail_group/mail_group_edit', $this->outputData);
    }

    function delete() {
        $id = $this->uri->segment(6);
        if ($this->gms->delete_group_id($this->uri->segment(6))) {
            $this->outputData['error'] = "Successfully Deleted";
        } else {
            $this->outputData['error'] = "Failed To Deleted";
        }
        redirect('admin/manage_mails/mail_group/mail_group_creation/create_group');
        exit();
    }

}

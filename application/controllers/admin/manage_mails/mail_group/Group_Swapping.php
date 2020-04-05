<?php

/**
 * Description of Group_Swapping
 *
 * @author HemanthRaj
 */
class Group_Swapping extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/G_Swapping', 'gs');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->gs->select_group_only();
        $this->load->view('admin/email_template/manage_mails/mail_group/group_swapping', $this->outputData);
    }

    public function select_email() {
        $group_id = $this->input->post('group_selecting');
        $this->outputData['group_data'] = $this->gs->select_email_only($group_id);
        $this->outputData['data'] = $this->gs->select_group_only();
        $this->load->view('admin/email_template/manage_mails/mail_group/group_swapping', $this->outputData);
    }

    public function selected_email() {
        $group = $this->input->post();
        $swappingToGroupId = $_POST['group_id'];
        foreach ($_POST['id'] as $a) {
            $data = array();
            $data['id'] = $a;
            $data['group_id'] = $swappingToGroupId;
            if($this->gs->updateing_group($data)){
                $this->outputData['data'] = $this->gs->select_group_only();
                $this->outputData['error'] = 'Group Content is Successfully Swapped';
            }else{
                $this->outputData['error'] = 'Error!! in Swapping';
            }
            $this->load->view('admin/email_template/manage_mails/mail_group/group_swapping', $this->outputData);
        }
    }

}

<?php

/**
 * Description of Bank_Control
 *
 * @author HemanthRaj
 */
class Draft_Control extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Manage_Draft/Draftsetting', 'ds');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->ds->select_get_draft();
        $this->load->view('admin/draft_master/draft_view', $this->outputData);
    }

    private function _Manage_category_Create_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');
    }

    public function Create_Manage_category() {
        $this->_Manage_category_Create_Validate();

        $data = array();
        $data['draft_category_name'] = $_POST['draft_category_name'];

        if ($this->ds->Manage_category_Create($data)) {
            $this->outputData['error'] = 'Successfully Your Query is Created';
        } else {
            $this->outputData['error'] = 'Failed To Insert';
        }
        $this->load->view('admin/draft_master/draft_create', $this->outputData);
    }

    private function _Manage_Draft_Create_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('category_name', 'Category Name', 'trim|required');
        $this->form_validation->set_rules('draft_agreement_title', 'Draft Agreement Title', 'trim|required');
    }

    public function Create_Manage_Draft() {
        $this->_Manage_Draft_Create_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['sr_draft_id'] = $_POST['category_name'];
            $data['draft_agreement_title'] = $_POST['draft_agreement_title'];

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'pdf|doc|docx';

            $this->load->library('upload', $config);

            // If upload failed, display error
            if (!$this->upload->do_upload('select_draft_file')) {
                $this->outputData['error'] = $this->upload->display_errors();
            } else {
                $file_data = $this->upload->data();
                $data['select_draft_file'] = $file_data['file_name'];

                if ($this->ds->Manage_Draft_Create($data)) {
                    $this->outputData['error'] = "Successfully Created";
                } else {
                    $this->outputData['error'] = "Failed Operation";
                }
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/draft_master/draft_view', $this->outputData);
    }

    private function _Edit_Draft_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('draft_category_name', 'Category Name', 'trim|required');
    }

    public function EDIT_Draft() {
        $sr_draft_id = $this->uri->segment('5');
        $sr_draft_settings_id = $this->uri->segment('6');

        $this->_Edit_Draft_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['sr_draft_id'] = $_POST['sr_draft_id'];
            $data['draft_category_name'] = $_POST['draft_category_name'];

            $data1 = array();
            $data1['sr_draft_settings_id'] = $_POST['sr_draft_settings_id'];
            $data1['draft_agreement_title'] = $_POST['draft_agreement_title'];

            if ($this->ds->Draft_Editing($data, $data1)) {
                $this->outputData['data'] = $this->ds->select_get_draft();
                $this->outputData['error'] = "Successfully Editted";
            } else {
                $this->outputData['error'] = "Failed TO Edit";
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/draft_master/draft_edit', $this->outputData);
    }

    public function Delete_Draft() {
        $sr_draft_id = $this->uri->segment('5');
        $sr_draft_settings_id = $this->uri->segment('6');
        
        if ($this->ds->Draft_Delete($sr_draft_id,$sr_draft_settings_id)) {
            redirect('admin/manage_draft/Draft_Control');
        } else {
            redirect('admin/manage_draft/Draft_Control');
        }
        $this->load->view('admin/draft_master/draft_view', $this->outputData);
    }

}

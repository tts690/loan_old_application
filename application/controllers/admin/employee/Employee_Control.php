<?php

/**
 * Description of Loan_Control
 *
 * @author HemanthRaj
 */
class Employee_Control extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Employee/Employee_Setting', 'es');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->es->select_get_employee();
        $this->load->view('admin/employee/employee_view', $this->outputData);
    }

    private function _Creating_Employee() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('emp_name', 'Employee Name', 'trim|required');
        $this->form_validation->set_rules('father_name', 'Father Name', 'trim|required');
        $this->form_validation->set_rules('dob', 'DOB', 'trim|required');
        $this->form_validation->set_rules('permanent', 'Permanent Address', 'trim|required');
        $this->form_validation->set_rules('present', 'Present Address', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirmpass', 'Confirm password', 'trim|required');
    }

    public function Create_Employee() {
        $this->_Creating_Employee();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            //$data['role'] = 'emp';
            $data['emp_name'] = $_POST['emp_name'];
            $data['father_name'] = $_POST['father_name'];
            $data['dob'] = date('Y-m-d', strtotime($_POST['dob']));
            $data['parmenent_address'] = $_POST['permanent'];
            $data['present_address'] = $_POST['present'];
            $data['mobile'] = $_POST['mobile'];
            $data['email'] = $_POST['email'];
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            
            if ($_POST['password'] == $_POST['confirmpass']) {
                if ($this->es->Inserting_employee($data)) {
                    $this->outputData['error'] = 'Successfully Your Query is Created';
                } else {
                    $this->outputData['error'] = 'Failed To Insert';
                }
            } else {
                $this->outputData['error'] = 'Password and Confirm password is not matching';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/employee/employee_create', $this->outputData);
    }

    private function _Edit_Employee_Validate() {
        $this->load->library('form_validation');
       $this->form_validation->set_rules('emp_name', 'Employee Name', 'trim|required');
        $this->form_validation->set_rules('father_name', 'Father Name', 'trim|required');
        $this->form_validation->set_rules('dob', 'DOB', 'trim|required');
        $this->form_validation->set_rules('permanent', 'Permanent Address', 'trim|required');
        $this->form_validation->set_rules('present', 'Present Address', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');        
    }

    public function EDIT_Employee() {
        $id = $this->uri->segment(5);
        $this->_Edit_Employee_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $id = $_POST['editing_id'];
            $data['emp_name'] = $_POST['emp_name'];
            $data['father_name'] = $_POST['father_name'];
            $data['dob'] = date('Y-m-d', strtotime($_POST['dob']));
            $data['parmenent_address'] = $_POST['permanent'];
            $data['present_address'] = $_POST['present'];
            $data['mobile'] = $_POST['mobile'];
            $data['email'] = $_POST['email'];
            $data['user_name'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $data['status'] = $_POST['status'];
//            print_r($data);
//            die();
                if ($this->es->Employee_Editing($data, $id)) {
                    $this->outputData['error'] = 'Successfully Your Query is Created';
                } else {
                    $this->outputData['error'] = 'Failed To Insert';
                }
            
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/employee/employee_edit', $this->outputData);
    }

    public function Delete_Employee() {
        $id = $this->uri->segment(5);
        if ($this->es->Employee_Delete($id)) {
            redirect('admin/employee/Employee_Control');
        } else {
            redirect('admin/employee/Employee_Control');
        }
        $this->load->view('admin/employee/employee_view', $this->outputData);
    }

}

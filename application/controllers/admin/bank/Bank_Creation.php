<?php

/**
 * Description of Bank_Creation
 *
 * @author HemanthRaj
 */
class Bank_Creation extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/bank/Bank_setup', 'bs');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->load->view('admin/bank/home_view');
    }

    public function Categories_View() {
        $this->outputData['data'] = $this->bs->select_categories();
        $this->load->view('admin/bank/categories_view', $this->outputData);
    }

    private function _Create_Categories_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('categoriesname', 'Categproes Name', 'trim|required');
    }

    public function Create_Categories() {
        $this->_Create_Categories_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['categories_name'] = $_POST['categoriesname'];

            if ($this->bs->create_categories($data)) {
                $this->outputData['error'] = 'Successfully Category Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/bank/categories_creation', $this->outputData);
    }

    private function _Create_Bank_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bankname', 'Bank Name', 'trim|required');
    }

    public function Create_Bank() {
        $this->_Create_Bank_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['bank_name'] = $_POST['bankname'];

            if ($this->bs->create_bank($data)) {
                $this->outputData['error'] = 'Successfully Bank Created';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/bank/bank_creation', $this->outputData);
    }

    private function _Edit_Categories_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('categories_name', 'Bank Name', 'trim|required');
    }

    public function EDIT_Categories() {
        $this->_Edit_Categories_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['categories_name'] = $_POST['categories_name'];
            $data['id'] = $_POST['editing_id'];

            if ($this->bs->Categories_Editing($data)) {
                redirect('admin/bank/Bank_Creation/Categories_View');
            } else {
                $this->outputData['error'] = 'Failed To Insert';
                redirect('admin/bank/Bank_Creation/Categories_View');
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/bank/categories_edit', $this->outputData);
    }

    public function Deleteing_Categories() {
        $id = $this->uri->segment(5);

        if ($this->bs->Categories_Deleteing($id)) {
            redirect('admin/bank/Bank_Creation/Categories_View');
        } else {
            redirect('admin/bank/Bank_Creation/Categories_View');
        }
        $this->load->view('admin/bank/Categories_edit', $this->outputData);
    }

    public function Bank_View() {
        $this->outputData['data'] = $this->bs->select_bank();
        $this->load->view('admin/bank/bank_view', $this->outputData);
    }

    private function _Edit_Bank_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('bankname', 'Bank Name', 'trim|required');
    }

    public function EDIT_Bank() {
        
        $this->_Edit_Bank_Validate();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['bank_name'] = $_POST['bankname'];
            $data['bank_id'] = $_POST['editing_id'];

            if ($this->bs->Bank_Editing($data)) {
                redirect('admin/bank/Bank_Creation/Bank_View');
            } else {
                $this->outputData['error'] = 'Failed To Insert';
                redirect('admin/bank/Bank_Creation/Bank_View');
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/bank/bank_edit', $this->outputData);
    }

    public function Delete_Bank() {
        $id = $this->uri->segment(5);

        if ($this->bs->Bank_Deleteing($id)) {
            redirect('admin/bank/Bank_Creation/Bank_View');
        } else {
            redirect('admin/bank/Bank_Creation/Bank_View');
        }
        $this->load->view('admin/bank/bank_edit', $this->outputData);
    }

    private function _faq_creation_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('user_email', 'Email', 'trim|required');        
        $this->form_validation->set_rules('category_selecting', 'Category', 'trim|required');
        $this->form_validation->set_rules('user_query', 'Query', 'trim|required');
    }

    public function faq_view() {
        $this->outputData['data'] = $this->bs->merge_bank_crategory();
        $this->load->view('home-loan-faq', $this->outputData);
    }

    public function faq_creation() {
        $this->_faq_creation_Validate();

        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['name'] = $_POST['user_name'];
            $data['email_id'] = $_POST['user_email'];
            $data['bank_id'] = $_POST['bank_selecting'];
            $data['categories_id'] = $_POST['category_selecting'];
            $data['question'] = $_POST['user_query'];
            $data['status'] = "1";
           
            if ($this->bs->faq_create($data)) {
                $this->outputData['error'] = 'Successfully Your Query is posted';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('home-loan-faq', $this->outputData);
    }

    public function faq_question_view() {
        $this->outputData['data'] = $this->bs->select_faq_question();
        $this->load->view('admin/bank/faq_question_view', $this->outputData);
    }
    
    public function commenting_view(){
        $faq_id = $this->uri->segment('5');
        $this->load->view('home-loan-faq_view', $this->outputData);
    }

    private function _Edit_FAQ_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('answer', 'Answer', 'trim|required');
    }

    public function Faq_Question_EDIT() {
        $this->_Edit_FAQ_Validate();
        $faq_answer_by = $this->session->userdata('u');
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['faq_question_id'] = $_POST['faq_id'];
            $data['answer'] = $_POST['answer'];
            $data['answered_by'] = $faq_answer_by;
            
            $last_inserted_id = $this->bs->FAQ_Answering_Question($data);
            $faq_last_data = $this->bs->FAQ_Answering_Question_id($last_inserted_id);
            $faq_last_id = $faq_last_data[0]->faq_question_id;
            
            $this->bs->FAQ_Update_Question_id($faq_last_id);
            
            $datas['userData'] = $faq_last_data[0];

            $message = $this->load->view('PostReplyin_to_Query', $datas, true);
            
            if (sendEmail($faq_last_data[0]->email_id, 'Your Query has been submitted Myloandetails.com', $message)) {
                $this->outputData['error'] = 'Successfully Answered';
            } else {
                $this->outputData['error'] = 'Failed To Answer';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('admin/bank/faq_question_edit', $this->outputData);
    }

    public function Commenting_Reply_Answer() {
        $this->_Commenting_Answer_U();
        $faq_Question_id = $this->uri->segment(5);
        $this->outputData['data'] = $this->bs->FAQ_Answers_Fetch($faq_Question_id);
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['faq_id'] = $faq_Question_id;
            $data['answer'] = $_POST['user_reply'];
            $data['rating'] = $_POST['user_rate'];
            $data['answered_by'] = "Testing User Name";
//            echo "<pre>";
//            print_r($data);
//            echo "</pre>";
//            die();
            if ($this->bs->FAQ_Answering_Question($data)) {
                redirect('Home_Loan_Faq');
            } else {
                $this->outputData['error'] = 'Failed To Answer';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('faq_answers_reply', $this->outputData);
    }
    
    private function _Commenting_Answer_U(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_reply', 'Answer', 'trim|required');
    }

    public function Commenting_Answer_User(){
        $faq_id = $this->uri->segment(5);            
        
        $this->load->view('faq_answers_reply', $this->outputData);
    }
}

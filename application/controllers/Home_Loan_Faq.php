<?php

class Home_Loan_Faq extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Faq_Settings', 'fs');
    }

    function index() {
        $this->load->view('home-loan-faq');
    }

    private function _faq_creation_Validate() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('user_email', 'Email', 'trim|required');
        $this->form_validation->set_rules('category_selecting', 'Category', 'trim|required');
        $this->form_validation->set_rules('user_query', 'Query', 'trim|required');
    }

    public function faq_creation() {
        $this->_faq_creation_Validate();

        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['name'] = $_POST['user_name'];
            $data['email_id'] = $_POST['user_email'];
            //$data['bank_id'] = $_POST['bank_selecting'];
            $data['categories_id'] = $_POST['category_selecting'];
            $data['question'] = $_POST['user_query'];
            $data['status'] = "1";

            $last_inserted_id = $this->fs->faq_create($data);
            $faq_result['res'] = $this->fs->selecting_faq($last_inserted_id);
            $datas['userData'] = $faq_result['res'][0];
            $message = $this->load->view('On_submission_of_Query', $datas, true);
            
            $data['faq_question_id'] = $_POST['faq_id_update'];

            if ($data['faq_question_id']) {
                $this->db->where('faq_question_id', $data['faq_question_id']);
                $this->db->update('faq_question', $data);
            }

            if (!sendEmail($data['email_id'], 'Your Query has been submitted Myloandetails.com', $message)) {
                $this->outputData['error'] = 'Successfully Your Query is posted Admin will reply for your query';
            } else {
                $this->outputData['error'] = 'Failed To Insert';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('home-loan-faq', $this->outputData);
    }

    private function _register_user() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required');
    }

    public function register() {
        $this->_register_user();
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['username'] = $_POST['username'];
            $data['email'] = $_POST['email'];
            $data['password'] = md5($_POST['password']);
            $data['status'] = 1;

            if ($_POST['password'] == $_POST['confirmpassword']) {
                if ($this->fs->reg_user($data)) {
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
        $this->load->view('home-loan-faq', $this->outputData);
    }

    public function logout() {
        if ($this->session->userdata('uu')) {
            $this->session->sess_destroy();
            redirect('home-loan-faq', 'refresh');
        }
    }

    private function _signin_user() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
    }

    public function signin() {
        $this->_signin_user();
        $faq_Question_id = $this->uri->segment(3);

        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['username'] = $_POST['username'];
            $data['password'] = md5($_POST['password']);
            $faq_Question_id = $_POST['faq_id'];

            if ($this->fs->authenticate($data['username'], $data['password'])) {
                //$this->load->view('faq_answers_reply');
                //$faq_Question_id = $this->uri->segment(3);                
                //$this->Commenting_Reply_Answer();
                $this->outputData['error'] = 'Successfully logged now you can answer for your questions';
            } else {
                $this->outputData['error'] = 'Invalid Login!!';
            }
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('home-loan-faq', $this->outputData);
    }

    private function _Commenting_Answer_U() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_reply', 'Answer', 'trim|required');
    }

    public function Commenting_Reply_Answer() {
        $this->_Commenting_Answer_U();
        $faq_Question_id = $this->uri->segment(3);
        if ($faq_Question_id) {
            $this->outputData['data'] = $this->fs->FAQ_Answers_Fetch($faq_Question_id);
        }
        if ($this->form_validation->run() === TRUE) {
            $data = array();
            $data['faq_question_id'] = $faq_Question_id;
            $data['answer'] = $_POST['user_reply'];
            $data['rating'] = $_POST['user_rate'];
            $data['answered_by'] = $this->session->userdata('uu');
            
            $last_inserted_id = $this->fs->FAQ_Answering_Question($data);
            $faq_last_data = $this->fs->FAQ_Answering_Question_id($last_inserted_id);
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
        $this->load->view('faq_answers_reply', $this->outputData);
    }

}

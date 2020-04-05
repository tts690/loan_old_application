<?php

class Home_Loan_File_Status extends Frontend_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('File_status', 'fs');
    }

    private function _Filling_Process() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('urc_code', 'URC CODE', 'trim|required');
    }

    function index() {
        $this->_Filling_Process();
        if ($this->form_validation->run() === TRUE) {
            $urc_code = $_POST['urc_code'];
//            $data = $this->fs->get_generate_details($urc_code);
//            echo "<pre>";
//            print_r($data);
//            echo "</pre>";
//            die();
            $this->outputData['result'] = $this->fs->get_generate_details($urc_code);
        } else {
            $this->outputData['error'] = validation_errors();
        }
        $this->load->view('home-loan-file_status', $this->outputData);
    }

}

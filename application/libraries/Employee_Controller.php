<?php

class Employee_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function _flushOutputArray() {
        $this->outputData = array();
        $this->outputData['errors'] = array();
        $this->outputData['result'] = array();
    }

}

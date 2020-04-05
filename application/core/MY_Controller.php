<?php

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->_flushOutputArray();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

    public function _flushOutputArray() {
        $this->outputData = array();
        $this->outputData['error'] = '';
    }
}

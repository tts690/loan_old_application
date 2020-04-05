<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_Controller extends MY_Controller {

    public function __construct() {
        // echo "fsdafsdaf";die;
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

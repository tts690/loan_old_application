<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function _flushOutputArray() {
        $this->outputData = array();
        $this->outputData['errors'] = array();
        $this->outputData['result'] = array();
    }
    
}

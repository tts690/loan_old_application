<?php
/**
 * Description of Employee_Login
 *
 * @author HemanthRaj
 */
class Employee_Login extends Frontend_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Faq_Settings', 'fs');
    }
    
    public function index(){
        echo "Hello";
        die();
        $this->load->view('faq_answers_reply');
    }
    
}

<?php

class Home_Loan_Interest_Rates_view extends Frontend_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('interest_rate_view_setting', 'irvs');
    }
    
    public function index() {
        $this->load->view('interest-rate-view');
    }
    
    public function view(){
        $interest_id = $this->uri->segment(3);
        $this->outputData['data'] = $this->irvs->get_data($interest_id);
        $this->load->view('interest-rate-view',$this->outputData);
    }
    
    

}

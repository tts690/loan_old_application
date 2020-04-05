<?php

/**
 * Description of Comment
 *
 * @author HemanthRaj
 */
class Faq_sorting extends Frontend_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('Faq_settings', 'faq');
    }
    
    public function index(){
        $categorie_id = $_GET['id'];
        $this->outputData['data'] = $this->faq->sort_categorie($categorie_id);
        $this->load->view('home-loan-faq-sort', $this->outputData);
    }
    
    public function new_faq(){
        $this->outputData['data'] = $this->faq->sort_faq_new();
        $this->load->view('home-loan-faq-sort', $this->outputData);
    }
    
    public function top_results(){
        $this->outputData['data'] = $this->faq->sort_top_results();
        $this->load->view('home-loan-faq-sort', $this->outputData);
    }
}

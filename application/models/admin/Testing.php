<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Testing
 *
 * @author HemanthRaj
 */
class Testing extends MY_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_data($data){
    echo "Hello";
    die();
        $this->db->select('*');
        $this->db->from('faq_answer');
        $this->db->join('faq_question', 'faq_question.id = faq_answer.faq_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            $result = json_decode(json_encode($data), True);
            foreach($result as $value){
            //echo "<pre>";
            //print_r($value); 
             return $value;   
             //echo "</pre>";
            }
        }
        return FALSE;
    }

}

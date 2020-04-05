<?php

/**
 * Description of Bank_Setup
 *
 * @author HemanthRaj
 */
class Bank_setup extends MY_Model{
    
    function create_bank($data){
        $this->db->insert('bank', $data);
        return TRUE;
    }
    
    function faq_create($data){
        $this->db->insert('faq_question', $data);
        return TRUE;
    }
    
    function create_categories($data){
        $this->db->insert('categories', $data);
        return TRUE;   
    }
    
    public function select_bank() {
        $this->db->select('*');
        $this->db->from('bank');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }
    
    public function select_categories(){
        $this->db->select('*');
        $this->db->from('categories');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }
    
    public function Bank_Editing($data) {
        $bankname = $data['bank_name'];
        $id = $data['bank_id'];
        $result = $this->db->query("UPDATE `bank` b set b.bank_name = '$bankname' WHERE b.bank_id =  '$id'");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function FAQ_Update_Question_id($faq_last_id) {
        $result = $this->db->query("UPDATE `faq_question` f set f.status = '0' WHERE f.faq_question_id =  '$faq_last_id'");
        //echo $this->db->last_query();
        //die();
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function Categories_Editing($data) {
        $categoriesname = $data['categories_name'];
        $id = $data['id'];
        $result = $this->db->query("UPDATE `categories` c set c.categories_name = '$categoriesname' WHERE c.id =  '$id'");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function Categories_Deleteing($id) {
        $result = $this->db->query("DELETE FROM categories WHERE id =$id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function Bank_Deleteing($id) {
        $result = $this->db->query("DELETE FROM bank WHERE bank_id =$id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function select_faq_question(){
        $this->db->select('*');
        $this->db->from('faq_question');
        $this->db->order_by("faq_question_id", "asc");
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        $data = $query->result();
        return $data;
    }
    
    public function FAQ_Answering_Question_id($last_inserted_id){
        $this->db->select('*');
        $this->db->from('faq_answer');
        $this->db->where('faq_answer_id',$last_inserted_id);
        $this->db->join('faq_question', 'faq_question.faq_question_id = faq_answer.faq_question_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        $data = $query->result();
        return $data;
    }
    
    public function FAQ_Answering_Question($data){  
         $this->db->insert('faq_answer', $data);
         return $this->db->insert_id();
    }
    
    public function FAQ_Answers_Fetch($faq_Question_id){
        $this->db->select('*');
        $this->db->from('faq_answer');
        $this->db->where('faq_question_id',$faq_Question_id);
        $this->db->join('faq_question', 'faq_question.faq_question_id = faq_answer.faq_question_id');
        $this->db->join('bank', 'bank.bank_id = faq_question.bank_id');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
}
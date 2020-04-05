<?php
/**
 * Description of faq_Settings
 *
 * @author HemanthRaj
 */
class Faq_settings extends MY_Model{
    
    function faq_create($data){
        $this->db->insert('faq_question', $data);
        return $this->db->insert_id();
    }
    
    function faq_update(){
        $this->db->where('faq_question_id', $data['faq_question_id']);
        $this->db->update('faq_question', $data);
        echo $this->db->last_query();
        die();
    }
    
    public function selecting_faq($last_inserted_id){
        $this->db->select('*');
        $this->db->from('faq_question');
        $this->db->where(array('faq_question_id' => $last_inserted_id));
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
    public function sort_categorie($categorie_id){
        $this->db->select('*');
        $this->db->from('faq_question');
        $this->db->distinct();
        $this->db->group_by('faq_answer.faq_question_id');
        $this->db->where(array('categories_id' => $categorie_id));
        $this->db->join('categories', 'categories.id = faq_question.categories_id');
        $this->db->join('faq_answer', 'faq_answer.faq_question_id = faq_question.faq_question_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        $data = $query->result();
        return $data;
    }
    
    public function sort_top_results(){
        $this->db->select("*");
        $this->db->from("faq_question");
        $this->db->distinct();
        $this->db->group_by('faq_answer.faq_question_id');
        $this->db->join('categories', 'categories.id = faq_question.categories_id');
        $this->db->join('faq_answer', 'faq_answer.faq_question_id = faq_question.faq_question_id');
        $this->db->order_by("faq_answer.rating", "desc");
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        return $query->result();
    }


    public function sort_faq_new(){
        $this->db->select("*");
        $this->db->from("faq_question");
        $this->db->distinct();
        $this->db->group_by('faq_answer.faq_question_id');
        $this->db->join('categories', 'categories.id = faq_question.categories_id');
        $this->db->join('faq_answer', 'faq_answer.faq_question_id = faq_question.faq_question_id');
        $this->db->order_by("faq_question.faq_question_id", "desc");
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        return $query->result();
        
        
    }

        public function FAQ_Answers_Fetch($faq_Question_id){
        $sql = $this->db->query("SELECT * FROM `faq_answer` JOIN `faq_question` ON `faq_question`.`faq_question_id` = `faq_answer`.`faq_question_id` WHERE `faq_answer`.`faq_question_id` = $faq_Question_id");        
        $data = $sql->result();
        return $data;
    }
    
    function setSession($data) {
        $this->session->set_userdata('uu', $data['username']);
        $this->session->set_userdata('ue', $data['email']);
        $this->session->set_userdata('uui', $data['user_details_id']);
    }
    
    function authenticate($username, $password) {
        $this->db->select('*');
        $this->db->from('user_details');
        $this->db->where(array('username' => $username, 'password' => $password, 'status' => 1));
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
            $this->setSession($data);
            return TRUE;
        }
        return FALSE;
    }
    
    public function reg_user($data){
        $this->db->insert('user_details', $data);
        return TRUE;
    }

    public function FAQ_Answering_Question($data){  
         $this->db->insert('faq_answer', $data);
         return $this->db->insert_id();
    }
    
    
    public function FAQ_Answering_Question_id($last_inserted_id){
        $this->db->select('*');
        $this->db->from('faq_answer');
        $this->db->where(array('faq_answer_id' => $last_inserted_id));
        $this->db->join('faq_question', 'faq_question.faq_question_id = faq_answer.faq_question_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        $data = $query->result();
        return $data;
    }
}

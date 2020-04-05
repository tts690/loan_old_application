<?php

/**
 * Description of Product
 *
 * @author HemanthRaj
 */
class Product extends MY_Model {

    public function get_all_product($data) {
        
        $this->db->select('*');
        $this->db->from('sr_product_description');
        $this->db->where('income_source_id',$data['income_source_id']);
        $this->db->where('sr_bank_id',$data['sr_bank_id']);
        $this->db->where('sr_loan_id',$data['sr_loan_id']);
        
        $this->db->distinct();
        $this->db->group_by('income_source_id');
        $this->db->join('sr_bank_loan', 'sr_bank_loan.bank_id = sr_product_description.sr_bank_id');
//        SELECT DISTINCT * FROM `sr_product_description`
//        JOIN `sr_bank_loan` ON `sr_bank_loan`.`bank_id` = `sr_product_description`.`sr_bank_id` WHERE `income_source_id` = 'R' AND `sr_bank_id` = '1' AND `sr_loan_id` = '1'

        $query = $this->db->get();
        $data1 = $query->result();
        return $data1;
//        echo $this->db->last_query();
//        die();
        
        
    }
    
    public function get_checked_documents($loan_id){
        $this->db->select('*');
        $this->db->from('loan_documents_list');
        $this->db->where('loan_document_id', $loan_id);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
        
    }
    
     public function get_checked_document($data){
        $this->db->select('*');
        $this->db->from('loan_documents');
        $this->db->where('income_source_id', $data['income_source_id']);
        $this->db->where('bank_id', $data['bank_id']);
        $this->db->where('loan_id', $data['loan_id']);
        $query = $this->db->get();
//        echo $this->db->last_query();
//        die();
        $data = $query->result_array();
        //$lastid = $this->db->insert_id();
        return $data;
        //die();
    }
    
    
    public function select_bank($data) {
        $this->db->select('*');
        $this->db->where('bank_id', $data['bank_id']);
        $this->db->from('sr_bank_loan');
        $this->db->join('sr_loan', 'sr_loan.id = sr_bank_loan.loan_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }
    
    public function generate_urc($data) {
//        echo "Model";
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";
//        die();
        $data = $this->db->insert('generate_file', $data);
//                echo $this->db->last_query();
//                die();
        return $this->db->insert_id();
        
    }
    
     public function get_generate_urc_data($id){
        $this->db->select('*');
        $this->db->from('generate_file');
        $this->db->where('generate_file_id',$id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
            return $data;
        }
        return FALSE;
    }
    
    public function update_generate($data){
        $this->db->where('generate_file_id',$data['generate_file_id']);
        $this->db->update('generate_file', $data);
    }
    
    public function update_generate_urc($urc_code,$id){
        $this->db->where('generate_file_id',$id);
        $this->db->update('generate_file', $urc_code);
        return TRUE;
    }
}

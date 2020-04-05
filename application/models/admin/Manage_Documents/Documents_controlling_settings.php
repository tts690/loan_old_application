<?php

/**
 * Description of LoanSettings
 *
 * @author HemanthRaj
 */
class Documents_controlling_settings extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select_get_Documents_data($data) {
        $this->db->select('*');
        $this->db->where('income_source', $data['income_source']);
        $this->db->from('sr_documents');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        $data = $query->result();
        return $data;
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

    public function insert_loan_documents($data) {
        try {
            $this->db->insert('loan_documents', $data);
            $lastid = $this->db->insert_id();
            //die();
            return $lastid;
//            echo $this->db->last_query();
//            die();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
     public function insert_loan_documents_list($array_list) {
        try {
            $this->db->insert('loan_documents_list',$array_list);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
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
    
    public function get_checked_documents($loan_id){
        $this->db->select('*');
        $this->db->from('loan_documents_list');
        $this->db->where('loan_document_id', $loan_id);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
        
    }
//    public function documents_Editing ($data) {
//        try {
//            $this->db->where(array('id' => $data['id']));
//            $this->db->update('sr_documents', $data);
//            return true;
//        } catch (Exception $e) {
//            return false;
//        }
//    }
//
//    public function Documents_Delete($id) {
//        $result = $this->db->query("DELETE FROM sr_documents WHERE id = $id");
//        if ($result) {
//            return TRUE;
//        } else {
//            return FALSE;
//        }
//    }

}

<?php

/**
 * Description of File_Process
 *
 * @author HemanthRaj
 */
class Setting_disbursement_process extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

     public function update_disbursement_document($data) {
        $this->db->where('generate_file_id',$data['generate_file_id']);
        $this->db->where('role',$data['role']);
        $this->db->update('disbursment_document', $data);
        return TRUE;
    }
    
    public function selection_disbursment($data){
        $this->db->select('*');
        $this->db->from('file_disbursment_details');
        $this->db->where('file_disbursment_details.role', $data['role']);
        $this->db->where('file_disbursment_details.income_source_id', $data['income_source_id']);
        $this->db->where('file_disbursment_details.generate_file_id', $data['generate_file_id']);
        $this->db->where('file_disbursment_details.file_process_id', $data['file_process_id']);
        $this->db->join('disbursment_document', 'disbursment_document.generate_file_id = file_disbursment_details.generate_file_id');
        $this->db->join('generate_file', 'generate_file.generate_file_id = file_disbursment_details.generate_file_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        $data = $query->result();        
        return $data;
    }


    public function update_disbursement($data) {
        $this->db->where('generate_file_id',$data['generate_file_id']);
        $this->db->where('role',$data['role']);
        $this->db->update('file_disbursment_details', $data);
        //echo $this->db->last_query();
        //die();
        return TRUE;
        //$this->db->insert('file_disbursment_details', $data);
        //return $this->db->insert_id();
    }

    public function get_disbursement_document() {
        $this->db->select('*');
        $this->db->where('role',"emp");
        $this->db->from('disbursment_document');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function get_disbursement_doc_id($data_disbursement) {
        $this->db->select('*');
        $this->db->from('disbursment_document');
        $this->db->where('role',"emp");
        $this->db->where('income_source_id', $data_disbursement['income_source_id']);
        $this->db->where('generate_file_id', $data_disbursement['generate_file_id']);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }

    public function update_disbursement_doc_id($data_disbursement) {
        try {
            $this->db->where('role',"emp");
            $this->db->where('income_source_id', $data_disbursement['income_source_id']);
            $this->db->where('generate_file_id', $data_disbursement['generate_file_id']);
            $this->db->update('disbursment_document', $data_disbursement);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function disbursement_doc_Editing($data, $id) {
        try {
            $this->db->where('role',"emp");
            $this->db->where('disbursment_document_id', $id);
            $this->db->update('disbursment_document', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function doc_disbursement_delete($id){
            $result = $this->db->query("DELETE FROM disbursment_document WHERE disbursment_document_id =$id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

<?php

/**
 * Description of File_Process
 *
 * @author HemanthRaj
 */
class Setting_file_process extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function update_generate_details($data) {
        //$this->db->insert('file_generated_details', $data);
        $this->db->where('generate_file_id',$data['generate_file_id']);
        $this->db->where('role',$data['role']);
        $this->db->update('file_generated_details', $data);
        //echo $this->db->last_query();
        //die();
        return TRUE;
    }
    
    public function get_generate_details($last_inserted_id){
        $this->db->select('*');
        $this->db->from('file_generated_details');
        $this->db->where('file_generated_details.generate_file_id',$last_inserted_id);
        $this->db->where('file_generated_details.role','DSA');
        $this->db->join('generate_file', 'generate_file.generate_file_id = file_generated_details.generate_file_id');
        $this->db->join('file_disbursment_details', 'file_disbursment_details.generate_file_id = file_generated_details.generate_file_id');
        $this->db->join('disbursment_document', 'disbursment_document.generate_file_id = file_generated_details.generate_file_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        $data = $query->result();
        return $data;
    }

    public function get_file_process_urc($income_source) {
        $this->db->select('*');
        $this->db->from('generate_file');
        $this->db->where('role',"DSA");
        $this->db->where('income_source_id',$income_source);
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
    public function get_file_process_verification($income_source){
        $this->db->select('*');
        $this->db->from('manage_file_process');
        $this->db->where('income_source_id',$income_source);
        $this->db->distinct();
        $this->db->group_by('process_name');
        $this->db->join('process', 'process.process_id = manage_file_process.process_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }
    
    public function get_file_process_verification_process_id($process_id){
        $this->db->select('*');
        $this->db->from('manage_file_process');
        $this->db->distinct();
        $this->db->group_by('file_status_name');
        $this->db->where('process_id',$process_id);
        $this->db->join('file_process', 'file_process.file_process_id = manage_file_process.file_process_id');
        $query = $this->db->get();
//        echo $this->db->last_query();
//        die();
        $data = $query->result();
        return $data;
    }

}

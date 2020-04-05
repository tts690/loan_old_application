<?php

/**
 * Description of File_Login
 *
 * @author HemanthRaj
 */
class File_login extends MY_Model {

    public function generate_urc($data) {
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";
//        die();
        $data = $this->db->insert('generate_file', $data);
//                echo $this->db->last_query();
//                die();
        return $this->db->insert_id();
        
    }
    
    public function insert_file_generate_details($data) {
        $data = $this->db->insert('file_disbursment_details', $data);
        $id = $this->db->insert_id();
        return $id;        
    }
    
    public function insert_disbursment_document($data) {
        $data = $this->db->insert('disbursment_document', $data);
        $id = $this->db->insert_id();
        return $id;        
    }
    
    public function insert_file_disbursment_details($data) {
        $data = $this->db->insert('file_generated_details', $data);
        $id = $this->db->insert_id();
        return $id;        
    }
    
    public function get_generate_urc_data($id){
        $this->db->select('*');
        $this->db->from('generate_file');
        $this->db->where('role',"emp");
        $this->db->where('generate_file_id',$id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
            return $data;
        }
        return FALSE;
    }
    
    public function update_generate_urc($urc_code,$id){
        //$this->session->set_userdata('gen_urc', $id);
        $this->db->where('generate_file_id',$id);
        $this->db->where('role',"emp");
        $this->db->update('generate_file', $urc_code);
        return TRUE;
    }
    
    public function select_state($data){
        $state_id = $data['sr_state_id'];        
        $this->db->select('*');
        $this->db->from('cities_of_state');
        //$this->db->where('sr_state_id',$state_id);
        $this->db->join('sr_state', 'sr_state.sr_state_id = cities_of_state.sr_state_id');
        $query = $this->db->get();        
        if ($query->num_rows() > 0) {
            $data1 = $query->result();
            return $data1;
        }
        return FALSE;
    }
    
    
    public function get_file_status_process($process_id){
        $this->db->select('*');
        $this->db->from('manage_file_process');
        $this->db->where('process_id',$process_id);
        $this->db->join('file_process','file_process.file_process_id = manage_file_process.file_process_id');        
        $query = $this->db->get();
//        echo $this->db->last_query();
//        die();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
    }

}

<?php

/**
 * Description of Setting_search
 *
 * @author HemanthRaj
 */
class Setting_search extends MY_Model {

    public function select_cust_details() {
        $this->db->select('*');
        $this->db->from('generate_file');        
        $this->db->where('role',"DSA");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }
    
    public function disbursement_Editing($data, $id){
        try {
            $this->db->where('role',$data['role']);
            $this->db->where('generate_file_id', $id);
            $this->db->update('generate_file', $data);
            return TRUE;
        } catch (Exception $e) {
            return FALSE;
        }
    }

}

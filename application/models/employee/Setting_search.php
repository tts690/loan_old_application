<?php

/**
 * Description of Setting_search
 *
 * @author HemanthRaj
 */
class Setting_search extends MY_Model {

    public function select_cust_details() {
        $this->db->select('*');
        $this->db->where('role',"emp");
        $this->db->from('generate_file');        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }
    
    public function disbursement_Editing($data, $id){
        try {
            $this->db->where('role',"emp");
            $this->db->where('generate_file_id', $id);
            $this->db->update('generate_file', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

}

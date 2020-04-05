<?php

/**
 * Description of LoanSettings
 *
 * @author HemanthRaj
 */
class Statesettings extends MY_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function select_get_states(){
        $this->db->select('*');
        $this->db->from('sr_state');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
    
    public function Manage_States_Create($data){
         try {
            $this->db->insert('sr_state', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function State_Editing($data){
       try {
            $this->db->where(array('id' => $data['id']));
            $this->db->update('sr_state', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function State_Delete($id){
        $result = $this->db->query("DELETE FROM sr_state WHERE id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

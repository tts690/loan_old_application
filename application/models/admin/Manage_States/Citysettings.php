<?php

/**
 * Description of LoanSettings
 *
 * @author HemanthRaj
 */
class Citysettings extends MY_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function select_get_city(){
        $this->db->select('*');
        $this->db->from('cities_of_state');
         $this->db->join('sr_state', 'sr_state.sr_state_id = cities_of_state.sr_state_id');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
    
    public function Manage_City_Create($data){
         try {
            $this->db->insert('cities_of_state', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function City_Editing($data){
       try {
            $this->db->where(array('cities_of_state_id' => $data['cities_of_state_id']));
            $this->db->update('cities_of_state', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function City_Delete($id){
        $result = $this->db->query("DELETE FROM cities_of_state WHERE cities_of_state_id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

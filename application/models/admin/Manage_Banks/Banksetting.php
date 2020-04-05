<?php

/**
 * Description of BankSetting
 *
 * @author HemanthRaj
 */
class Banksetting extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select_get_bank() {
        $this->db->select('*');
        $this->db->from('sr_bank');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function Manage_Bank_Create($data) {
        try {
            $this->db->insert('sr_bank', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function Bank_Editing($data){
       try {
            $this->db->where(array('id' => $data['id']));
            $this->db->update('sr_bank', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function Bank_Delete($id){
        $result = $this->db->query("DELETE FROM sr_bank WHERE id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

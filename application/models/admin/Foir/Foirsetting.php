<?php

/**
 * Description of BankSetting
 *
 * @author HemanthRaj
 */
class Foirsetting extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select_get_foir() {
        $this->db->select('*');
        $this->db->from('foir_setting');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function Inserting_foir($data) {
//        echo "<pre>";
//            print_r($data);
//            echo "</pre>";
//            die();
        try {
            $this->db->insert('foir_setting', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function Foir_Editing($data, $id){
       try {
            $this->db->where(array('foir_setting_id' => $id));
            $this->db->update('foir_setting', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function Foir_Delete($id){
        $result = $this->db->query("DELETE FROM foir_setting WHERE foir_setting_id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

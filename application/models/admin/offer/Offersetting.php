<?php

/**
 * Description of BankSetting
 *
 * @author HemanthRaj
 */
class Offersetting extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select_get_offer() {
        $this->db->select('*');
        $this->db->from('offer');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function Manage_Offer_Create($data) {
        try {
            $this->db->insert('offer', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function Offer_Editing($data){
       try {
            $this->db->where(array('offer_id' => $data['offer_id']));
            $this->db->update('offer', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function Offer_Delete($id){
        $result = $this->db->query("DELETE FROM offer WHERE offer_id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

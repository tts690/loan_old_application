<?php

/**
 * Description of BankSetting
 *
 * @author HemanthRaj
 */
class Draftsetting extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select_get_draft() {
        $this->db->select('*');
        $this->db->from('sr_draft');
        $this->db->join('sr_draft_settings', 'sr_draft_settings.sr_draft_id = sr_draft.sr_draft_id');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function Manage_category_Create($data) {
        try {
            $this->db->insert('sr_draft', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function Manage_Draft_Create($data) {
        try {
            $this->db->insert('sr_draft_settings', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function Draft_Editing($data,$data1){
       try {
            $this->db->where(array('sr_draft_id' => $data['sr_draft_id']));
            $this->db->update('sr_draft', $data);
            $this->db->where(array('sr_draft_settings_id' => $data1['sr_draft_settings_id']));
            $this->db->update('sr_draft_settings', $data1);
            
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function Draft_Delete($sr_draft_id,$sr_draft_settings_id){
        $result = $this->db->query("DELETE FROM sr_draft_settings WHERE sr_draft_settings_id = $sr_draft_settings_id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

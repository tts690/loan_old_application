<?php

/**
 * Description of BankSetting
 *
 * @author HemanthRaj
 */
class Agency_setting extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select_get_state_city($state_id) {
        $query = $this->db->query("SELECT * FROM `cities_of_state` WHERE `sr_state_id` = $state_id");
        $data = $query->result();
        return $data;
    }

    public function getting_city($state_id) {
        $query = $this->db->query("SELECT * FROM `cities_of_state` WHERE `sr_state_id` = $state_id");
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $query;
        }
    }

    public function select_get_state_bank($state_id) {
        $query = $this->db->query("SELECT `state_banks_id`, `sr_state_id`, s.`income_source_id` , i.income_source_name
            FROM `state_banks` s INNER JOIN income_source i ON s.`income_source_id` = i.income_source_id WHERE `sr_state_id` = $state_id");
        $result = $query->result();
        return $result;
    }

    public function select_get_agency() {
        $this->db->select('*');
        $this->db->from('sr_agency');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function Inserting_agency($data) {
            $this->db->insert('sr_agency', $data);
            return $this->db->insert_id();
    }
    
    public function Inserting_agency_profile($agency_id){
        $sql = $this->db->query("INSERT INTO sr_agency_profile(sr_agency_id) VALUES ('$agency_id')");
        if($sql){
            return TRUE;
        }else{
            return false;
        }
    }

    public function Agency_Editing($data, $id) {
        try {
            $this->db->where(array('sr_agency_id' => $id));
            $this->db->update('sr_agency', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function Agency_Delete($id) {
        $result = $this->db->query("DELETE FROM sr_agency WHERE sr_agency_id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

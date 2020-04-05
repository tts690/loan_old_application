<?php

/**
 * Description of SiteSetting
 *
 * @author HemanthRaj
 */
class Sitesetting extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    function select_getByUserId() {
        $this->db->select('*');
        $this->db->from('main_value_settings');
        $this->db->where(array('id' => 1));
        $query = $this->db->get();
        //echo $this->db->last_query();
        $data = $query->row_array();
        return $data;
    }

    public function update_main_value_settings($data) {
        try {
            $this->db->where(array('id' => 1));
            $this->db->update('main_value_settings', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

}

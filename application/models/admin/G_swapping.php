<?php

/**
 * Description of Group_Swapping
 *
 * @author HemanthRaj
 */
class G_swapping extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select_email_only($group_id) {
        $query = $this->db->query("SELECT * FROM email WHERE group_id = $group_id");
        $data = $query->result_array();
        return $data;
    }

    public function select_group_only() {
        $this->db->select('*');
        $this->db->from('group_system');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }

    public function updateing_group($group) {
        try {
            $this->db->where('id', $group['id']);
            $query = $this->db->update('email', $group);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }

}

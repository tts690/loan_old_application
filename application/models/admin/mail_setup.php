<?php

/**
 * Description of mail_setup
 *
 * @author HemanthRaj
 */
class mail_setup extends MY_Model {

    public function inserting($data) {
        $this->db->insert('mail_configuration', $data);
        return TRUE;
    }

    public function selectByUserId($id) {
        $query = $this->db->query("SELECT * FROM mail_configuration WHERE id = '$id'");
        $data = $query->result();
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }
    public function config_select_Id($id) {
        $this->db->select('*');
        $this->db->from('mail_configuration as ms');
        $this->db->where(array('config_id'=>$id));
        $query = $this->db->get();
        //echo $this->db->last_query();
        $data =  $query->row_array();
        return $data;
    }

}

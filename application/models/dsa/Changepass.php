<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Changepass extends My_Model {

    public function matchBypass($oldpassword) {
        $username = $this->session->userdata('ai');
        $oldpassword = $oldpassword;
        $query = $this->db->query("SELECT * FROM sr_agency WHERE sr_agency_id = '$username' AND password = '$oldpassword'");
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function updatePassword($id, $newpassword) {
        $data = array(
            'password' => $newpassword
        );

        $this->db->where('sr_agency_id', $id);
        $this->db->update('sr_agency', $data);
     //   echo $this->db->last_query();
       // die();
    }

}

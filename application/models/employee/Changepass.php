<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Changepass extends My_Model {

    public function matchBypass($oldpassword) {
        $username = $this->session->userdata('ei');
        $oldpassword = $oldpassword;
        $query = $this->db->query("SELECT * FROM sr_employee WHERE sr_employee_id = '$username' AND password = '$oldpassword'");
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function updatePassword($id, $newpassword) {
        $data = array(
            'password' => $newpassword
        );

        $this->db->where('sr_employee_id', $id);
        $this->db->update('sr_employee', $data);
     //   echo $this->db->last_query();
       // die();
    }

}

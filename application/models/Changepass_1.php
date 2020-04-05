<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Changepass_1 extends My_Model {

    public function matchBypass($oldpassword) {
        $username = $this->session->userdata('uu');
        $oldpassword = md5($oldpassword);
        $query = $this->db->query("SELECT * FROM user_details WHERE username = '$username' AND password = '$oldpassword'");
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function updatePassword($id, $newpassword) {
        $data = array(
            'password' => md5($newpassword)
        );
        $this->db->where('user_details_id', $id);
        $this->db->update('user_details', $data);
    }

}

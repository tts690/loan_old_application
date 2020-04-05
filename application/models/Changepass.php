<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

class Changepass extends My_Model {

    public function matchBypass($oldpassword) {
        $username = $this->session->userdata('u');
        $oldpassword = md5($oldpassword);
        $query = $this->db->query("SELECT * FROM users WHERE username = '$username' AND password = '$oldpassword'");
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    public function updatePassword($id, $newpassword) {
        $data = array(
            'password' => md5($newpassword)
        );

        $this->db->where('id', $id);
        $this->db->update('users', $data);
     //   echo $this->db->last_query();
       // die();
    }

}

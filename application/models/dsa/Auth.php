<?php if (!defined('BASEPATH'))exit('No direct script access allowed');
/*
 * 
 * /Developer By :Hemanth Raj
 * 
 */

class Auth extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    function setSession($data) {
        $this->session->set_userdata('ai', $data['sr_agency_id']);
        $this->session->set_userdata('ar', $data['role']);
        $this->session->set_userdata('ae', $data['email']);
        $this->session->set_userdata('au', $data['username']);
    }

    function authenticate($username, $password) {
        $this->db->select('*');
        $this->db->from('sr_agency');
        $this->db->where(array('username' => $username, 'password' => $password, 'status' => 1));
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
            $this->setSession($data);
//            echo "<pre>";
//            print_r($data);
//            echo "</pre>";
//            die();
            return TRUE;
        }
        return FALSE;
    }

    function checkEmailExist($email) {
        $this->db->select('email');
        $this->db->where(array('email' => $email));
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    function checkEmailExistWithStatus($email, $status) {
        $this->db->select('email');
        $this->db->where(array('email' => $email, 'status' => $status));
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    function socialAuthenticate($email, $via) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->join('profiles', 'profiles.userId = users.id');
        $this->db->where(array('email' => $email, 'via' => $via, 'status' => 1));

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row_array();
            $this->setSession($data);
            return TRUE;
        }
        return FALSE;
    }

    function validateEmail($md5Email) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('md5(email)' => $md5Email, 'via' => 'Website', 'status' => 0));

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

    function validateEmailForReset($md5Email) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('md5(email)' => $md5Email, 'via' => 'Website', 'status' => 1, 'reset' => 0));       
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return TRUE;
        }
        return FALSE;
    }

}

?>
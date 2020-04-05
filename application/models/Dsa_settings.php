<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DSA_Settings
 *
 * @author HemanthRaj
 */
class Dsa_settings extends MY_Model {

    public function select_get_state_city($state_id) {
        $query = $this->db->query("SELECT * FROM `cities_of_state` WHERE `sr_state_id` = $state_id");
        //echo $this->db->last_query();
        //die();
        $data = $query->result();
        //print_r($data);
        //die();
        return $data;
    }

    public function select_get_state_bank($state_id) {
        $query = $this->db->query("SELECT `state_banks_id`, `sr_state_id`, s.`income_source_id` , i.income_source_name
            FROM `state_banks` s INNER JOIN income_source i ON s.`income_source_id` = i.income_source_id WHERE `sr_state_id` = $state_id");
        $result = $query->result();
        //echo $this->db->last_query();
        //die();
        //print_r($data);
        //die();
        return $result;
    }
    
    public function selecting_agency(){
        
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
    
    public function Update_dsa_status($agency_id){
        $data = array(
            'status' => 1
        );

        $this->db->where('sr_agency_id', $agency_id);
        $this->db->update('sr_agency', $data);
        return true;
    }
    
    public function check_dsa_id($user_id){
        $query = $this->db->query("SELECT * FROM `sr_agency` WHERE `email` = '$user_id'");
        $data = $query->result_array();
        return $data;
    }
    
     public function check_dsa_idd($user_id){
        $query = $this->db->query("SELECT * FROM `sr_agency` WHERE `sr_agency_id` = '$user_id'");
        $data = $query->result_array();
        return $data;
    }
    
    function setSession($data) {
        $this->session->set_userdata('ai', $data['sr_agency_id']);
        $this->session->set_userdata('ar', $data['role']);
        $this->session->set_userdata('ae', $data['email']);
        $this->session->set_userdata('au', $data['agency_name']);
    }

    function authenticate($username, $password) {
        $this->db->select('*');
        $this->db->from('sr_agency');
        //$this->db->join('profiles', 'profiles.userId = users.id');
        $this->db->where(array('username' => $username, 'password' => $password, 'status' => 1));
        $query = $this->db->get();
        
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

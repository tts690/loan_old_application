<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profiles extends My_Model {

    function __construct(){
        parent::__construct();
    }

    function getByUserId($userId){
        $this->db->select('*');
        $this->db->from('profiles as p');
        $this->db->where(array('userId'=>$userId));
        $query = $this->db->get();
        //echo $this->db->last_query();
        $data =  $query->row_array();
        return $data;
    }
    
     function getByEmail($username){
        $this->db->select('*');
        $this->db->from('sr_employee');
        $this->db->where(array('username'=>$username, 'status' => 1));
        $query = $this->db->get();
        $data =  $query->row_array();        
        return $data;
    }
    
    function matchByUserId(){
        $id = $this->session->userdata('ei');
        $query = $this->db->query("SELECT * FROM sr_employee WHERE sr_employee_id = '$id'");
        $data = $query->result();
        if($data){
            return $data;
        }else{
            return false;
        }
    } 
    
    public function saveUser($formData=array()){
        try{
            $id = $this->session->userdata('ei');
            $this->db->where("sr_employee_id='".$id."'");            
            //$formData['dob'] = $valid_date;
            $this->db->update('sr_employee',$formData); 
            //echo $this->db->last_query();
            //die();
            return true;
        }catch(Exception $e){
            return false;
        }        
    }
}
?>
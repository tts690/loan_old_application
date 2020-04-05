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
    
     function getByEmail($id){
        $this->db->select('*');
        $this->db->from('sr_agency_profile');
        $this->db->where(array('sr_agency_id'=>$id));
        $query = $this->db->get();
        $data =  $query->row_array();        
        return $data;
    }
    
    function matchByUserId(){
        $id = $this->session->userdata('ai');
        $query = $this->db->query("SELECT * FROM sr_agency_profile WHERE sr_agency_id = '$id'");
        $data = $query->result();
        if($data){
            return $data;
        }else{
            return false;
        }
    } 
    
    public function saveUser($formData=array()){
        try{
            $originalDate = $formData['dob'];
            $formData['dob'] = date("d-m-Y", strtotime($originalDate));
            $formData['dob'] = implode("-", array_reverse(explode("/", $formData['dob'])));            
            //print_r($formData['dob']);
            //die();
            $this->db->where("sr_agency_id='".$formData['sr_agency_id']."'");            
            //$formData['dob'] = $valid_date;
            $this->db->update('sr_agency_profile',$formData); 
            return true;
        }catch(Exception $e){
            return false;
        }        
    }
}
?>
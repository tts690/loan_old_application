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
    
    function matchByUserId(){
        $id = $this->session->userdata('i');
        $query = $this->db->query("SELECT * FROM profiles WHERE id = '$id'");
        $data = $query->result();
        if($data){
            return $data;
        }else{
            return false;
        }
    } 
    
    public function saveUser($formData=array()){
        try{
            $this->db->where("id='".$formData['id']."'");            
            $this->db->update('profiles',$formData); 
            return true;
        }catch(Exception $e){
            return false;
        }        
    }
}
?>
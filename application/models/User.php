<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends My_Model {

    function __construct(){
        parent::__construct();
    }

    private function buildFacbookProfile($data){
    	$profile = array();

    	$profile['socialDump'] = json_encode($data);
    	$profile['firstName'] = isset( $data['firstName'] ) ? $data['firstName']: '';
    	$profile['lastName'] = isset( $data['lastName'] ) ? $data['lastName']: '';
    	$profile['gender'] = isset( $data['gender'] ) ? $data['gender']: '';
    	$profile['photoUrl'] = isset( $data['photoURL'] ) ? $data['photoURL']: '';

    	return $profile;
    }
    private function buildWebsiteProfile($data){
        $profile = array();
        $profile['socialDump'] = NULL;
        $profile['firstName'] = isset( $data['firstName'] ) ? $data['firstName']: '';
        $profile['lastName'] = isset( $data['lastName'] ) ? $data['lastName']: '';
        return $profile;
    }

    private function buildUserProfile($via,$data){
    	$user = array();
    	$profile = array();
    	if($via === 'Website'){
            $user['email'] = $data['email'];
            $user['password'] = md5($data['password']);
            $user['role'] = 'S';
            $user['status'] = 0;
            $user['via'] = 'Website';
            $profile = $this->buildWebsiteProfile($data);
    	} else{
    		if($via === 'Facebook'){
    			$user['email'] = $data['email'];
    			$user['role'] = 'S';
    			$user['status'] = 1;
    			$user['via'] = 'Facebook';
    			$profile = $this->buildFacbookProfile($data);
    		}
    	}
    	return array($user,$profile);
    }
	
	function create($via,$data){
		$upData = $this->buildUserProfile($via,$data);
		$uid = md5(getmypid().uniqid(rand(), true).$this->session->userdata('session_id'));
		$pid = md5(getmypid().uniqid(rand(), true).$this->session->userdata('session_id').$uid);
		$upData[0]['id'] = $uid;
		$upData[1]['id'] = $pid;
		$upData[1]['userId'] = $uid;

		try{
			$this->db->insert('users',$upData[0]);
			$this->db->insert('profiles',$upData[1]);
			return TRUE;
		}catch(Exception $e){
			$this->db->delete('users', array('id' => $uid));
			$this->db->delete('profiles', array('id' => $pid));
			return FALSE;
		}
    }

    function updateStatus($status,$md5Email){
        $data = array('status' => $status);
        $this->db->where('md5(email)', $md5Email);
        $this->db->update('users', $data);
    }

    function updatePassword($password,$md5Email){
        $data = array('password' => md5($password));
        $this->db->where('md5(email)', $md5Email);
        $this->db->update('users', $data);
    }

    function updateReset($md5Email,$status){
        $data = array('reset' => $status);
        $this->db->where('md5(email)', $md5Email);
        $this->db->update('users', $data);
    }

    function getByEmail($username){
        $this->db->select('u.*,p.*');
        $this->db->from('users as u');
        $this->db->join('profiles as p', 'p.userId = u.id');
        $this->db->where(array('username'=>$username, 'status' => 1));
        $query = $this->db->get();
        $data =  $query->row_array();        
        return $data;
    }

    function getByRole($role){
        $this->db->select('u.*,p.*');
        $this->db->from('users as u');
        $this->db->join('profiles as p', 'p.userId = u.id');
        $this->db->where(array('role'=>$role));
        $query = $this->db->get();
        //echo $this->db->last_query();
        if ($query->num_rows() > 0) {
            $data =  $query->result_array();
        }
        return $data;
    }
    
}
?>
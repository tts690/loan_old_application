<?php

/**
 * Description of LoanSettings
 *
 * @author HemanthRaj
 */
class File_status_master_settings extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select_get_file() {
        $this->db->select('*');
        $this->db->from('file_process');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
    public function Inserting_file($data){
        try {
            $this->db->insert('file_process', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function File_Editing($data,$id) {
        try {
            $this->db->where(array('file_process_id' => $id));
            $this->db->update('file_process', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function File_Delete($id) {
        $result = $this->db->query("DELETE FROM file_process WHERE file_process_id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function select_get_process() {
        $this->db->select('*');
        $this->db->from('process');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
    public function Inserting_process($data) {
        try {
            $this->db->insert('process', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function Process_Editing($data,$id) {
        try {
            $this->db->where(array('process_id' => $id));
            $this->db->update('process', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function Delete_Process($id){
        $result = $this->db->query("DELETE FROM process WHERE process_id =$id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    

}

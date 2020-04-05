<?php

/**
 * Description of LoanSettings
 *
 * @author HemanthRaj
 */
class File_process_status_settings extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_file_process_status() {
        $this->db->select('*');
        $this->db->from('manage_file_process');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
    public function Inserting_File_Status($data){
        try {
            $this->db->insert('manage_file_process', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function get_file_status_process($income_source,$process_id) {
        $this->db->select('*');
        $this->db->from('manage_file_process');
        $this->db->where('process_id',$process_id);
        $this->db->where('income_source_id',$income_source);
        //$this->db->join('process', 'process.process_id = manage_file_process.process_id');
        //$this->db->join('file_process', 'file_process.file_process_id = manage_file_process.file_process_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        $data = $query->result();
        return $data;
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

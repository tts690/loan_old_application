<?php

/**
 * Description of LoanSettings
 *
 * @author HemanthRaj
 */
class Documentssettings extends MY_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function select_get_Documents(){
        $this->db->select('*');
        $this->db->from('sr_documents');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
    
    public function Manage_Document_Create($data){
         try {
            $this->db->insert('sr_documents', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function documents_Editing($data){
       try {
            $this->db->where(array('id' => $data['id']));
            $this->db->update('sr_documents', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function Documents_Delete($id){
        $result = $this->db->query("DELETE FROM sr_documents WHERE id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

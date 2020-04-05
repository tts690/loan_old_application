<?php

/**
 * Description of BankSetting
 *
 * @author HemanthRaj
 */
class Employee_setting extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select_get_employee() {
        $this->db->select('*');
        $this->db->from('sr_employee');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function Inserting_employee($data) {    
        $data['status'] = 1;
        try {
            $this->db->insert('sr_employee', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function Employee_Editing($data,$id){
       try {
            $this->db->where(array('sr_employee_id' => $id));
            $this->db->update('sr_employee', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }
    
    public function Employee_Delete($id){
        $result = $this->db->query("DELETE FROM sr_employee WHERE sr_employee_id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

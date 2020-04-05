<?php

/**
 * Description of LoanSettings
 *
 * @author HemanthRaj
 */
class Loansettings extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function select_all_sr_bank() {
        $this->db->select('*');
        $this->db->from('sr_bank');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }
    
    public function creating_bank_loan($data){
        try {
            $this->db->insert('sr_bank_loan', $data);
            //echo $this->db->last_query();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function Remove_Bank($id){
        $result = $this->db->query("DELETE FROM sr_bank_loan WHERE sr_bank_loan_id =$id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function Get_All_Information($arraydata) {
        $this->db->select('*');
        $this->db->from('sr_bank_loan');
        $this->db->where('bank_id', $arraydata['bank_id']);
        $this->db->join('sr_loan', 'sr_loan.id = sr_bank_loan.loan_id');
        //$this->db->join('sr_bank', 'sr_bank.id = sr_bank_loan.bank_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        //die();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            $result = json_decode(json_encode($data), True);
            //$num_rows = count($result);
            //print_r($result);
            return $result;
//            foreach ($result as $item) {
//                print_r($item);
//                //return($item);
//            }
            
            
            //print_r($item);
//            for ($result = 0; $result <= $num_rows; $result++) {
//                print_r($result);
//            }
            
        }
//        die();
//        //$result = json_decode(json_encode($data), True);
//        foreach ($data as $values) {
//            //echo "<pre>";
//            //print_r($values); 
//            //echo "Model";
//            //die();
//            return $values;
//            //echo "</pre>";
//        }
        //return FALSE;
    }

    public function select_get_loans() {
        $this->db->select('*');
        $this->db->from('sr_loan');
        $query = $this->db->get();
        $data = $query->result();
        return $data;
    }

    public function Manage_Loan_Create($data) {
        try {
            $this->db->insert('sr_loan', $data);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }

    public function Loan_Editing($data) {
        try {
            $this->db->where(array('id' => $data['id']));
            $this->db->update('sr_loan', $data);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public function Loan_Delete($id) {
        $result = $this->db->query("DELETE FROM sr_loan WHERE id = $id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

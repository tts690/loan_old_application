<?php

/**
 * Description of SiteSetting
 *
 * @author HemanthRaj
 */
class Product_description_setting extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    function select_get_product() {
        $this->db->select('*');
        $this->db->from('sr_product_description');
        $query = $this->db->get();
        //echo $this->db->last_query();
        $data = $query->result_array();
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";
//        die();
        return $data;
    }

    public function select_get_loan_name($bank_id) {
        $this->db->select('*');
        $this->db->from('sr_bank_loan');
        $this->db->where('bank_id',$bank_id);
        $this->db->join('sr_loan', 'sr_loan.id = sr_bank_loan.loan_id');
        $query = $this->db->get();
//        echo $this->db->last_query();
//        die();
        $data = $query->result();
        return $data;
    }
    
    
    public function Inserting_Product($data){
        $this->db->insert('sr_product_description', $data);
        return TRUE;   
    }
    
    
    public function Product_Editing($data,$id){   
        $this->db->where('sr_product_description_id',$id);
        $result = $this->db->update('sr_product_description',$data);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    public function Product_Delete($id){
        $result = $this->db->query("DELETE FROM sr_product_description WHERE sr_product_description_id =$id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

<?php

/**
 * Description of File_status
 *
 * @author HemanthRaj
 */
class File_status extends MY_Model{
    
    public function get_generate_details($urc_code){
        $this->db->select('*');
        $this->db->from('generate_file');
        $this->db->where('urc_no',$urc_code);
        $this->db->join('file_generated_details', 'file_generated_details.generate_file_id = generate_file.generate_file_id');
        $this->db->join('process', 'process.process_id = file_generated_details.app_process_process_type_id');
        //$this->db->join('process', 'process.process_id = file_generated_details.co_process_process_type_id');
        $this->db->join('file_process', 'file_process.file_process_id = file_generated_details.file_process_app_status');
        //$this->db->join('file_process', 'file_process.file_process_id = file_generated_details.file_process_co_status');
//        SELECT DISTINCT * FROM `sr_product_description`
//        JOIN `sr_bank_loan` ON `sr_bank_loan`.`bank_id` = `sr_product_description`.`sr_bank_id` WHERE `income_source_id` = 'R' AND `sr_bank_id` = '1' AND `sr_loan_id` = '1'
//generate_file 
//file_generated_details
//process
//file_process        
        $query = $this->db->get();
//       echo $this->db->last_query();
//       die();
        $data1 = $query->result();
        return $data1;
    }
    
}

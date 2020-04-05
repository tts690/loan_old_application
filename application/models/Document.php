<?php

/**
 * Description of Product
 *
 * @author HemanthRaj
 */
class Document extends MY_Model {

    public function get_all_documents($data) {
        
        $income_source = $data['income_source_id'];
        $bank_id = $data['bank_id'];
        $loan_id = $data['loan_id'];
//        $this->db->select('id','doc_code','doc_name');
//        $this->db->where('bank_id', $data['bank_id']);
//        $this->db->where('loan_id', $data['loan_id']);
//        $this->db->where('income_source_id', $data['income_source_id']);
//        $this->db->from('loan_documents');
//        $this->db->distinct('id');
//        //$this->db->group_by(id);
//        
////        $this->db->join('loan_documents_list', 'loan_documents_list.document_id = sr_documents.id');
//        $this->db->join('loan_documents', 'loan_documents.loan_document_id = loan_documents_list.loan_document_id');
//        $query = $this->db->get();
//        echo $sql = "SELECT distinct d.id,d.`doc_code`, d.`doc_name`, d.`income_source`, sr_loan.'LoanName' FROM `loan_documents` ld
//        JOIN `loan_documents_list` ldl ON ld.`loan_document_id`= ldl.loan_document_id
//        JOIN  sr_documents d  ON ldl.document_id = d.id
//        WHERE `income_source_id` = '$income_source' AND `bank_id`= $bank_id AND `loan_id` = $loan_id";
        
        $sql = "SELECT distinct d.id,d.`doc_code`, d.`doc_name`, d.`income_source`, srl.LoanName, ld.bank_id FROM `loan_documents` ld 
        JOIN `loan_documents_list` ldl ON ld.`loan_document_id`= ldl.loan_document_id 
        JOIN sr_documents d ON ldl.document_id = d.id 
        JOIN `sr_loan` srl ON ld.`loan_id`= srl.id 
        WHERE ld.income_source_id = '$income_source' AND ld.bank_id = $bank_id AND ld.loan_id = $loan_id";
        //die();
        $query = $this->db->query($sql);
        
        $data = $query->result();
        //echo $data[0]->doc_name;
//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";
//        die();
        return $data;
//        echo $this->db->last_query();
//        die();        
//        $this->db->select('*');
//        $this->db->from('sr_product_description');
//        $this->db->where('income_source_id',$data['income_source_id']);
//        $this->db->where('sr_bank_id',$data['sr_bank_id']);
//        $this->db->where('sr_loan_id',$data['sr_loan_id']);
//        
//        $this->db->distinct();
//        //$this->db->group_by('process_name');
//        $this->db->join('sr_bank_loan', 'sr_bank_loan.sr_bank_id = sr_product_description.sr_bank_id');
//        $query = $this->db->get();
//        echo $this->db->last_query();
//        die();
        
        
    }

}

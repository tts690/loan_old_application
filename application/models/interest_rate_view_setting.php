<?php

/**
 * Description of interest_rate_view
 *
 * @author HemanthRaj
 */
class interest_rate_view_setting extends MY_Model {

    public function get_data($interest_id) {
        $this->db->select('*');
        $this->db->from('sr_interest_rate');
        $this->db->where('intrest_rate_id',$interest_id);
        $this->db->join('bank', 'bank.bank_id = sr_interest_rate.intrest_rate_id');
        $query = $this->db->get();
//        echo $this->db->last_query();
//        die();
        if ($query->num_rows() > 0) {
            $data1 = $query->result();
            return $data1;
        }
        return FALSE;
    }

}

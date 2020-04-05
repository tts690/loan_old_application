<?php

class Draft_Agreements extends Frontend_Controller {

    function index() {
        $this->load->view('draft-agreements');
    }

    function draft_download() {
        $id = $this->uri->segment('3');
        
        $this->db->select('*');
        $this->db->from('sr_draft_settings');
        $this->db->where('sr_draft_settings_id', $id);
        $query1 = $this->db->get();
        $data1 = $query1->result();
        $this->load->helper('download');
        ob_clean(); 
        $file_name = $data1[0]->select_draft_file;
        $path_name = base_url().'/uploads/'.$file_name;        
        $data = file_get_contents($path_name); 
        $name = $file_name;
        force_download($name, $data);
    }

}

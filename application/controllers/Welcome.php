<?php

class Welcome extends Frontend_Controller {

    public function index() {
        $data = array();
        $data['email'] = $_POST['email'];
        $data['group_id'] = 5;
        $result = $this->db->insert('email', $data);
        if ($result) {
            $this->outputData['error'] = "You Successfully Subscribed";
        } else {
            $this->outputData['error'] = "Failed to Subscribed";
        }
        $this->load->view('home',$this->outputData);
    }

}

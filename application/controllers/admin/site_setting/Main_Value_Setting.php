<?php

/**
 * Description of main_value_setting
 *
 * @author HemanthRaj
 */
class Main_Value_Setting extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/Site_Setting/Sitesetting', 'ss');
        if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->outputData['data'] = $this->ss->select_getByUserId();
        $this->load->view('admin/site_settings/main_value_setting', $this->outputData);
    }

    public function update_main_value_setting() {
        $data = array();
        $data['tax_exemption_amount'] = $_POST['tax_exemption_amount'];
        $data['tds'] = $_POST['tds'];
        $data['max_age_of_resident'] = $_POST['max_age_of_resident'];
        $data['max_age_of_nri'] = $_POST['max_age_of_nri'];
        $data['max_age_of_self_employee'] = $_POST['max_age_of_self_employee'];

        if ($this->ss->update_main_value_settings($data)) {
            redirect('admin/site_setting/Main_Value_Setting');
        } else {
            $this->outputData['error'] = 'Invalid Login!!';
        }
        $this->load->view('admin/site_settings/main_value_setting', $this->outputData);
    }

}

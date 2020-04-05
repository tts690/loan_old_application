<?php

/**
 * Description of Group_Upload
 *
 * @author HemanthRaj
 */
class Group_Upload extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/group_mail_setup', 'gms');
         if (!isLoggedIn()) {
            redirect('admin/Signin', 'refresh');
        }
    }

    public function index() {
        $this->load->view('admin/email_template/manage_mails/mail_group/multi_upload');
    }

    public function multiupload() {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('admin/email_template/manage_mails/mail_group/multi_upload', $error);
        } else {
            //$data = $this->upload->do_upload('userfile');
            $data = $this->upload->data('userfile');

            //echo $fullpath = $data['upload_data']['full_path'];
            //die();
            //echo "<pre>"; print_r($fullpath); die;
            //load the excel library

            $this->load->library('Excel');
            $filename = $_FILES["userfile"]["name"];
            $fullpath = 'uploads/' . $filename;

            //read file from path
            $objPHPExcel = PHPExcel_IOFactory::load($fullpath);

            //get only the Cell Collection
            $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();

            //extract to a PHP readable array format
            foreach ($cell_collection as $cell) {
                $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
                $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
                $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
                if ($row == 1) {
                    $header[$row][$column] = $data_value;
                } else {
                    $arr_data[$row][$column] = $data_value;
                }
            }

            //send the data in an array format
            $data = $arr_data;
            /*
            echo "<pre>";
            print_r($data);
            echo "</pre>";
            die();*/
            $collection = array();
            $collections = array();

            $i = 0;
            foreach ($data as $val) {
                if (!checkForValidEmail($val['A'])) {
                    $collection[$i]['group_id'] = $val['A'];
                } else {
                    redirect('Group_Upload/failure');
                    exit;
                }
                if (!checkForValidName($val['B'])) {
                    $collection[$i]['email'] = $val['B'];
                } else {
                    redirect('Group_Upload/failure');
                    exit;
                }
                $i++;
            }

            if (empty($collection) && count($collection) <= 0) {
                $this->outputData['error'] = 'Your ExcelSheet is Empty';
            } else {
                $datareturn = $this->gms->add_data($collection);
                $dataArray['tabledata'] = $collection;

                if ($dataArray) {
                    $this->outputData['error'] = 'Successfully Your File Uploaded';
                }
            }
            $this->load->view('admin/email_template/manage_mails/mail_group/multi_upload', $this->outputData);
        }
    }

    function failure() {
        $this->outputData['error'] = 'Failed To upload';
        $this->load->view('admin/email_template/manage_mails/mail_group/multi_upload', $this->outputData);
    }

}

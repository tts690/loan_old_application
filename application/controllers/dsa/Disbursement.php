<?php

class Disbursement extends DSA_Controller {

    public function __construct() {
        parent::__construct();
        if (!isLoggedIn_agn()) {
            redirect('dsa/Signin', 'refresh');
        }
        $this->load->model('dsa/Setting_disbursement_process', 'esdp');
    }

    public function index() {
        $this->outputData['data'] = $this->esdp->get_disbursement_document();
        $this->load->view('dsa/disbursement', $this->outputData);
    }

    public function create_document() {
        $data = array();
        $data['role'] = $_POST['role'];
        $data['income_source_id'] = $_POST['income_source_id'];
        $data['generate_file_id'] = $_POST['urc_no'];
        $data['disbursment_document_name'] = $_POST['document_name'];
        $data['status'] = $_POST['status'];
        
        $this->db->select('*');
        $this->db->where('role', $_POST['role']);
        $this->db->where('income_source_id', $data['income_source_id']);
        $this->db->from('file_disbursment_details');
        $query = $this->db->get();
        $data1 = $query->result();

        $file_disbursment_id = $data1[0]->file_disbursment_details_id;
        $data['file_disbursment_details_id'] = $file_disbursment_id;
        
        if ($this->esdp->update_disbursement_document($data)) {
            $this->outputData['error'] = 'Successfully Your Query is Created';
        } else {
            $this->outputData['error'] = 'Failed To Insert';
        }
        $this->load->view('dsa/disbursement_documents/create_disbursement', $this->outputData);
    }

    public function create_disbursement() {
        $data = array();
        $data['role'] = $_POST['role'];
        $data['income_source_id'] = $_POST['income_source_id'];
        $data['generate_file_id'] = $_POST['urc_no'];
        $data['file_process_id'] = $_POST['file_process_id'];
        $data['remarks'] = $_POST['remarks'];
        $data['amount'] = $_POST['amount'];

        $this->esdp->update_disbursement($data);
        $selected_data = $this->esdp->selection_disbursment($data);
        
        $datas['userData'] = $selected_data[0];
        $message = $this->load->view('Sending_Regular_Update_of_File_Status_when_Edited_1', $datas, true);
        
        $message1 = "Welcome to My loan Details for testing Message";
        $url = 'http://www.smsjust.com/blank/sms/user/urlsms.php?' . http_build_query([
                    'username' => 'myloan',
                    'pass' => '123456',
                    'senderid' => 'MyLoan',
                    'dest_mobileno' => $result[0]->a_mob,
                    'message' => $message1,
                    'response' => 'Y'
        ]);

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);

        if (sendEmail($selected_data[0]->a_personal_email, 'Your Loan Application Status Myloandetails.com', $message)) {
            $this->outputData['error'] = "Successfully mail sent";
        } else {
            $this->outputData['error'] = 'Failed To Insert';
        }
        $this->load->view('dsa/disbursement', $this->outputData);
    }

    public function EDIT_disbursement_doc() {
        $data = array();
        $id = $_POST['editing_id'];
        $data['disbursment_document_name'] = $_POST['document_name'];
        $data['status'] = $_POST['status'];
        if ($this->esdp->disbursement_doc_Editing($data, $id)) {
            $this->outputData['error'] = 'Successfully Your Query is Created';
        } else {
            $this->outputData['error'] = 'Failed To Insert';
        }
        $this->load->view('dsa/disbursement_documents/edit_disbursement', $this->outputData);
    }

    public function Deleteing_disbursement_doc() {
        $id = $this->uri->segment(4);
        if ($this->esdp->doc_disbursement_delete($id)) {
            redirect('dsa/Disbursement');
        } else {
            redirect('dsa/Disbursement');
        }
        $this->load->view('dsa/disbursement_documents');
    }

}

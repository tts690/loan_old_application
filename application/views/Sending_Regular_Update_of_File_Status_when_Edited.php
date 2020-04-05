<?php $staticContent = base_url(); 
?>
<link rel="stylesheet" href="<?php echo $staticContent; ?>css/custom_email_template.css">

<div class="mail-template">
    <table width="100%" cellpadding="0" cellspacing="0" >
        <tr>
            <td valign="top" align="center">
                <table width="600" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="right">
                            <a href="<?php echo base_url();?>"><img alt="My Loan Details" src="<?php echo $staticContent; ?>images/myloandetailsogo.png" ></a>
                        </td>
                    </tr>
                </table>
                <table width="600" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                    <tr>
                        <td bgcolor="#FFFFFF" valign="" width="400" colspan="2">
                            <p>

                                Dear <?php echo ucfirst($userData->applicant_name); ?>,<br/>
                            
                            <p>Please find below the update of your loan application with URC No <?php echo $userData->urc_no; ?>. </p>
                   
                             <div class="email-datails">
                               <table class="responsive" style="border-collapse: collapse; border:1px solid black;" >
                                <tbody>
                                <tr>
                                    <td style="border:1px solid black; padding:5px; ">Income Source</td>                                    
                                    <td style="border:1px solid black; padding:5px"><?php                                        
                                    if($userData->income_source_id == "R") {
                                            echo "Resident - Salaried";
                                    }else if($userData->income_source_id == "N"){
                                            echo "NRI - Salaried";
                                    }else{
                                            echo "Resident - Self Employed";
                                    }
                                    ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant process</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('process');
                                    $this->db->where('process_id',$userData->app_process_process_type_id);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->process_name;
                                    ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Co - Applicant process</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('process');
                                    $this->db->where('process_id',$userData->co_process_process_type_id);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->process_name;
                                    ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant status</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('file_process');
                                    $this->db->where('file_process_id',$userData->file_process_app_status);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->file_status_name;
                                    ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Co - Applicant status</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('file_process');
                                    $this->db->where('file_process_id',$userData->file_process_co_status);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->file_status_name;
                                    ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant Reason</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->app_remarks; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Co - Applicant Reason</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->co_remarks; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant eligibality and sanction</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('process');
                                    $this->db->where('process_id',$userData->eli_app_process_type_process_id);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->process_name;
                                    ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Co - Applicant eligibality and sanction</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('process');
                                    $this->db->where('process_id',$userData->eli_co_process_type_process_id);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->process_name;
                                    ?></td>
                                </tr>
                                
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant status</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('file_process');
                                    $this->db->where('file_process_id',$userData->eli_file_process_app_status);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->file_status_name;
                                    ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Co - Applicant status</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('file_process');
                                    $this->db->where('file_process_id',$userData->eli_file_process_co_status);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->file_status_name;
                                    ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant Reason</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->eli_app_remarks; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Co - Applicant Reason</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->eli_co_remarks; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant Amount</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->eli_app_amount; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Co - Applicant Amount</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->eli_co_amount; ?></td>
                                </tr>
                                
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant LEGAL AND TECHNICAL:</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('process');
                                    $this->db->where('process_id',$userData->leg_app_process_type_process_id);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->process_name;
                                    ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Co - Applicant LEGAL AND TECHNICAL</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('process');
                                    $this->db->where('process_id',$userData->leg_app_process_type_process_id);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->process_name;
                                    ?></td>
                                </tr>
                                
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant status</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('file_process');
                                    $this->db->where('file_process_id',$userData->leg_file_process_app_status);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->file_status_name;
                                    ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Co - Applicant status</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('file_process');
                                    $this->db->where('file_process_id',$userData->leg_file_process_co_status);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    echo $data[0]->file_status_name;
                                    ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant Reason</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->leg_app_remarks; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Co - Applicant Reason</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->leg_co_remarks; ?></td>
                                </tr>
                                
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant amount</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->leg_app_amount; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Co - Applicant amount</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->leg_co_amount; ?></td>
                                </tr>
                                </tbody>
                            </table>
                           </div>
                   <p>If you have any queries please feel free to mail us on &nbsp;<a href="mailto:care@cnds.in">care@cnds.in</a></p>
                            <p><strong>Regards,</strong></p>
                            <p><strong>Team CNDS</strong></p>
                             <div class="watermark">
                                <center> <p style="color: #a8a8a8">(This is a computer generated Email and do not reply).</p></center>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td style="background-color:#039BE5;" valign="top" colspan="2">
                            <span style="font-size:10px;line-height:100%;font-family:verdana;color:#fff;">
                                <br />
                                Copyright (C) <?php echo date('Y'); ?>  My Loan Details. All rights reserved.<br />
                                <br />
                            </span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</div>

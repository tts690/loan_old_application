<?php $staticContent = base_url(); ?>
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

                                Dear <?php echo ucfirst($userData['applicant_name']); ?>,<br/>
                            
                            <p>Please find the details of New Application.</p>
                            
                            <div class="email-datails">
                               <table class="responsive" style="border-collapse: collapse; border:1px solid black;" >
                                <tbody>
                                <tr>
                                    <td style="border:1px solid black; padding:5px; ">Income Source</td>                                    
                                    <td style="border:1px solid black; padding:5px"><?php                                        
                                    if($userData['income_source_id'] == "R") {
                                            echo "Resident - Salaried";
                                    }else if($userData['income_source_id'] == "N"){
                                            echo "NRI - Salaried";
                                    }else{
                                            echo "Resident - Self Employed";
                                    }
                                    ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Bank Name</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('bank');
                                    $this->db->where('bank_id',$userData['sr_bank_id']);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    //echo "<pre>";
                                    echo $data[0]->bank_name;
                                    //echo "</pre>";
                                    
                                    ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">State Name</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('sr_state');
                                    $this->db->where('sr_state_id',$userData['sr_state_id']);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    //echo "<pre>";
                                    echo $data[0]->state_name;
                                    //echo "</pre>";
                                    //die();
                                    ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">City Name</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('cities_of_state');
                                    $this->db->where('cities_of_state_id',$userData['cities_of_state_id']);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    //echo "<pre>";
                                    echo $data[0]->city_name;
                                    //echo "</pre>";
                                    //die(); 
                                    ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Loan Name</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    $this->db->select('*');
                                    $this->db->from('sr_loan');
                                    $this->db->where('id',$userData['sr_loan_id']);
                                    $query = $this->db->get();
                                    $data = $query->result();
                                    //echo "<pre>";
                                    //print_r($data);
                                    echo $data[0]->LoanName;
                                    //echo "</pre>";
                                    //die(); 
                                    ?>
                                    </td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Title</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['a_title']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Resident</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['a_res_land']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Timing to call</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['a_time']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">AM/PM</td>
                                    <td style="border:1px solid black; padding:5px"> <?php echo $userData['a_timmings']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Applicant Name</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['applicant_name']; ?></td>
                                </tr>
                                <?php if($userData['income_source_id' == "N"]){ ?>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Local Contact Name</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['local_contact_name']; ?></td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Permanent Address</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['a_permanent_address']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">DOB</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['a_dob']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Personal Email</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['a_personal_email']; ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Personal Mobile</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['a_mob']; ?></td>
                                </tr>
                                <?php if($userData['income_source_id' == "N"]){ ?>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">City Name</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['a_city']; ?></td>
                                </tr>
                                <?php } ?>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Loan Amount</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['loan_amount']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">URC CODE</td>
                                    <td style="border:1px solid black; padding:5px"><?php if($urc_code){
                                        echo $urc_code;
                                    }else{
                                        echo $userData['urc_no'];
                                        } ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Created On</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['created_on']; ?></td>
                                </tr>
                                </tbody>
                            </table>
                           </div>
                                <br/>                         
                            
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

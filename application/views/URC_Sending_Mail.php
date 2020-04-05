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

                                Dear <?php echo ucfirst($userData['applicant_name']); ?> & <?php echo ucfirst($userData['co_applicant_name']); ?>,<br/>
                            <p>Greetings,</p>
                            <p>Thank you for choosing us for your loan services, please make a note of your home loans
                                application Unique Reference Code (URC) No to track your file status online
                                on Myloandetails.com. Please quote this number for your future communications with US. </p>
                            
                            <center><p><strong>URC : <?php echo $userData['urc_no']; ?></strong></p></center>
                            
                            <p> Please enter your URC No <a href="<?php echo site_url('Home_Loan_File_Status'); ?>" target="_blank">here</a> to track your home loan file status</p>
                            
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

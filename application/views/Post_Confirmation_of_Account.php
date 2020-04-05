<?php $staticContent = base_url(); ?>
<link rel="stylesheet" href="<?php echo $staticContent; ?>css/custom_email_template.css">
<link rel="stylesheet" href="<?php echo $staticContent; ?>css/bootstrap.css">
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
                                Hello <?php echo ucfirst($userData['username']); ?>,<br/>
                            <p>Greetings,</p>

                            <p> Please find below your account details and do save this email for your future references. 
                                Please quote your Agency Name in future communications with us to serve you better.
                            </p>
                            <div class="email-datails">
                            <table class="responsive" style="border-collapse: collapse; border:1px solid black;">
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Agency Name</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['agency_name']; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">User Name</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['username']; ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Password</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['password']; ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">SMS Alerts</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    
                                    if($userData['sms_approve'] == 1){
                                        echo "Yes";
                                    }else{
                                        echo "No";
                                    } ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Email Alerts</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    
                                    if($userData['email_approve'] == 1){
                                        echo "Yes";
                                    }else{
                                        echo "No";
                                    } ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Email ID</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['email']; ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Mobile</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData['mobile']; ?></td>
                                </tr>                                
                            </table>
                            </div>
                            <p>You can login to your account <a href="<?php echo $staticContent; ?>Dsa_Login">here</a> and please update your contact details regularly
                                to continue to receive communications from Myloandetails.com</p>
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
<script src="<?php echo $staticContent; ?>vendor/bootstrap.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
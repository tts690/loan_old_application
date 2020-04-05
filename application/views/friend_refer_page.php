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

                                Dear <?php echo "Admin" ?>,<br/>
                            
                            <p>Please find below refer friends details. </p>
                   
                             <div class="email-datails">
                               <table class="responsive" style="border-collapse: collapse; border:1px solid black;" >
                                <tbody>
                                <tr>
                                    <td style="border:1px solid black; padding:5px; ">Name</td>                                    
                                    <td style="border:1px solid black; padding:5px"><?php   
                                    echo $userData['name'];
                                    ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Friends email</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                        echo $userData['f_email'];
                                    ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Email</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    echo $userData['email'];
                                    ?></td>
                                </tr>
                                 <tr>
                                    <td style="border:1px solid black; padding:5px">Message</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                        echo ucfirst($userData['msg']);
                                    ?></td>
                                </tr>
                                 
                                </tbody>
                            </table>
                           </div>
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

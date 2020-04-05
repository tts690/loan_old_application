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

                                Welcome <?php echo ucfirst($userData['username']); ?>,<br/>
                            <p>Greetings,</p>

                            <p> We are happy to welcome you to the family of Myloandetails.com 
                                and request you to confirm your Email id by clicking the below 
                                link to activate the account and to unlock the great features 
                                that Myloandetails offers you to serve your customers by standing 
                                out of the competition.
                            </p>

                            <div class="link">
                                <center> <a href="<?php echo site_url('Dsa_Login/post_mail/' . $userData['sr_agency_id']); ?>" target="_blank" >Unlock Great Features</a></center>
                            </div>

                            <p>If you find any difficulty in activating the account please mail us on <a href="mailto:care@cnds.in"> care@cnds.in</a> with all your details.</p>

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
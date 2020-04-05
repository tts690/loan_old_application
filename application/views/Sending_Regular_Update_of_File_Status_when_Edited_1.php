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
                                    <td style="border:1px solid black; padding:5px">Document Name</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->disbursment_document_name; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Status</td>
                                    <td style="border:1px solid black; padding:5px"><?php 
                                    if($userData->status == 1){
                                        echo "Received";
                                    }else{
                                        echo "Required";
                                    }
                                    
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Document remarks</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->remarks; ?></td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid black; padding:5px">Document amount</td>
                                    <td style="border:1px solid black; padding:5px"><?php echo $userData->amount; ?></td>
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

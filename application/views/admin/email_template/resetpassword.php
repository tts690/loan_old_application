<table width="100%" cellpadding="0" cellspacing="0" >
	<tr>
		<td valign="top" align="center">
			<table width="600" cellpadding="0" cellspacing="0">
				<tr>
					<td align="left" valign="middle" style="padding:5px;border-top:0px solid #000000;border-bottom:10px solid #FFFFFF;">
						<a href="<?php echo base_url();?>">My Loan Details</a>
					</td>
				</tr>
			</table>
			<table width="600" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
				<tr>
					<td bgcolor="#FFFFFF" valign="top" width="400" style="padding:5px;font-size:12px;color:#000000;line-height:150%;font-family:trebuchet ms;" colspan="2">
						<p>
                                                    Hello <?php echo ucfirst($firstName);?>,<br/><br/>

						 	Please reset your password by <a href="<?php echo site_url('admin/reset/index/'.md5($email));?>">clicking here</a>.


							<br/><br/>Thanks and Regards<br/>
							<strong>My Loan Details</strong><br/>
						</p>
					</td>
				</tr>
				<tr>
					<td style="background-color:#039BE5;" valign="top" colspan="2">
						<span style="font-size:10px;line-height:100%;font-family:verdana;color:#fff;">
							<br />
								Copyright (C) <?php echo date('Y');?>  My Loan Details. All rights reserved.<br />
							<br />
						</span>
					</td>
				</tr>
		</table>
		</td>
	</tr>
</table>

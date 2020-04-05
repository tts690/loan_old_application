<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Change Password', 'cssFiles' => array())); ?>
 <?php $staticContent = base_url(); ?>
<div role="main" class="main"> 
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><img src="<?php echo $staticContent; ?>images/icons/password.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                        <li class="breadcrumbtxt"><a href="<?php echo site_url('Home_Loan_Faq'); ?>">FAQ'S</a></li> 
                        <li class="active">Change Password</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="inner-content">
        <div class="container">
            <div class="col-md-6">    
                <?php if (!empty($error)) { ?>
                    <div class="alert alert-success" id="success-alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong><?php echo $error; ?> </strong>
                    </div>
                <?php } ?> 
                <div class="change-password"> 
                    <div class="form-style-3">
                        <fieldset><h1>Change Password</h1>
                            <?php echo form_open('Changepassword', array('class' => 'col s12')); ?>   
                            <label for="field1"><span>Old Password <span class="required"></span></span><input type="password" name="oldpassword" id="pwd" class="form-control" placeholder="" /></label>

                            <label for="field1"><span>New Password <span class="required"></span></span><input type="text" name="newpassword" id="pwd" class="form-control" placeholder="" /></label>
                            <label for="field1"><span>Password <span class="required"></span></span><input type="text" name="confirmpassword" id="pwd" class="form-control" placeholder="" /></label>
                            <label><input type="submit" class="btn"></label>
                            <?php echo form_close(); ?>   
                        </fieldset>
                    </div>           
                </div>
            </div>
        </div>
    </div>
</div>
  <footer id="footer">   
    <div class="fmiddle">
        <div class="container">           
            <div class="">
                <h4>Disclaimer</h4>
                <p>All loans at the sole discretion of the Bank / Financial Institution. Myloandetails.com is just a facilitator which brings home loan seekers and home loan providers at one place, by using of which if any issue raises we are not responsible for it. All the details mentioned in the website are collected from different sources and user's are requested to cross check the details before applying for a home loan with any bank / financial institution.</p>              
                                     
            </div>
        </div>
    </div>
    <div class="footer-submenu">
    </div>

    <div class="footer-copyright">
        <div class="container">           
                <lfooter class="copyrightlink pull-left">
                    <ul class="lastlink">
                        <li class="span"><a href="<?php echo site_url('About'); ?>">About</a></li>
                        <li><a href="<?php echo site_url('Enquiry_Form'); ?>">Contact Us</a></li>
                    </ul>
                </lfooter>         
           
            <span class="copyrightlink pull-right">
                <p>Copyright © 2008-2016, Myloandetails.com All Rights Reserved. </p>
            </span>
         
            </div>
        <div class="pull-right">
            <a href="#0" class="cd-top"></a>
        </div> 
    </div>
</footer> 
    
        <?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>

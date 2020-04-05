<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Dsa Login', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><img src="<?php echo $staticContent; ?>images/icons/detective.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                        <li class="active">DSA Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="inner-content">
        <div class="container">

            <!--Bug Alerts--->
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <p> <?php echo $error; ?> </p>
                </div>
            <?php } ?>   
            <!---End of Alert-->
            <div class="col-md-6">               
                <div class="form-style-3">
                    <div class="dsalogin">
                        <form class="" id="contactform" name="contact" action="<?php echo site_url('Dsa_Login/login') ?>" method="post">
                            <fieldset>
                                <h1>DSA Login</h1>
                                <label for="field1">
                                    <span>Name <span class="required"></span></span>
                                    <input type="text" id="name" class="input-field" name="username" value="" />
                                </label>
                                <label for="field2">
                                    <span>Password <span class="required"></span>                                    
                                    </span><input type="password" id="password" class="input-field" name="password" value="" />
                                </label>
                                <label for="field2">
                                    <span id="hide">&nbsp;</span><input type="submit" value="Login" class="btn btn-primary cr"/><a href="<?php echo site_url('Dsa_Register'); ?>"> <input type="button" value="New DSA Register" class="btn btn-primary cr" /></a>
                                </label>
                                <a href="<?php echo site_url('Dsa_Register/forgot_password'); ?>"><input type="button" value="Forgot Password" class="btn btn-primary cr"/></a>
                                <span>&nbsp;</span> 
                            </fieldset>
                        </form>
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
   
    <div class="footer-copyright">
        <div class="container">           
            <lfooter class="copyrightlink">
                <ul class="lastlink">
                    <li class="span"><a href="<?php echo site_url('About'); ?>">About</a></li>
                    <li><a href="<?php echo site_url('Enquiry_Form'); ?>">Contact Us</a></li>
                </ul>
            </lfooter>         

            <span class="copyrightlink">
                <p>Copyright © 2008-2016, Myloandetails.com All Rights Reserved. </p>
            </span>

        </div>
        <div class="pull-right">
            <a href="#0" class="cd-top"></a>
        </div> 
    </div>
</footer> 
<!-- Libraries -->
<?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>
<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="vendor/magnific-popup/magnific-popup.js"></script>

<script src="js/custom.js"></script>



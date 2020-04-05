<?php $this->load->view('employee/components/page_head', array('pageTitle' => 'Help Profile', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> 

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <?php $this->load->view('employee/sidemenu'); ?>
        </div>
        <div class="right_col" role="main" style="min-height: 1296px;">            

            <div class="logo" align="center">
               <img src="<?php echo base_url(); ?>images/pixsello_logo.png"/>
            </div>                                    
            <div class="helpcontact">
            <div class="col-md-4 col-sm-4 col-xs-12 profile_details well profile_view">
                <div class="">                        
                    <div class="left col-md-7">
                        <h4>Mahantesh Asangi</h4>
                        <p><strong>About: </strong> Founder & CEO </p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-mail-reply-all"></i> <a href="mailto:pixsello@gmail.com">pixsello@gmail.com</a></li>
                            <li><i class="fa fa-phone"></i> Phone : 080 42297299</li>
                        </ul>
                    </div>
                    <div class="right col-md-5 text-center">
                        <img src="<?php echo base_url(); ?>images/help-profile/mahantesh_ceo.png" alt="" class="img-circle img-responsive">
                    </div>                                                  
                </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12 profile_details well profile_view">
                <div class="">                        
                    <div class="left col-md-7">
                        <h4>Hemanth Raj </h4>
                        <p><strong>About: </strong> Back-End developer  </p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-mail-reply-all"></i> <a href="mailto:pixsello.webapp@gmail.com">pixsello.webapp@gmail.com</a></li>
                            <li><i class="fa fa-phone"></i> Phone : 080 42297299</li>
                        </ul>
                    </div>
                    <div class="right col-md-5 text-center">
                        <img src="<?php echo base_url(); ?>images/help-profile/hemanth.png" alt="" class="img-circle img-responsive">
                    </div>                                                  
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 profile_details well profile_view">
                <div class="">                        
                    <div class="left col-md-7">
                        <h4>PrashantKumar Permi</h4>
                        <p><strong>About: </strong> Support developer </p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-mail-reply-all"></i> <a href="mailto:prashant@pixsello.in">prashant@pixsello.in</a></li>
                            <li><i class="fa fa-phone"></i> Phone : 080 42297299</li>
                        </ul>
                    </div>
                    <div class="right col-md-5 text-center">
                        <img src="<?php echo base_url(); ?>images/help-profile/prashant.png" alt="" class="img-circle img-responsive">
                    </div>                                                  
                </div>
            </div>
          
            <div class="col-md-4 col-sm-4 col-xs-12 profile_details well profile_view">
                <div class="">                        
                    <div class="left col-md-7">
                        <h4>Madhu Raddi</h4>
                        <p><strong>About: </strong> Front-End developer </p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-mail-reply-all"></i> <a href="mailto:madhu@pixsello.in">madhu@pixsello.in</a></li>
                            <li><i class="fa fa-phone"></i> Phone : 080 42297299</li>
                        </ul>
                    </div>
                    <div class="right col-md-5 text-center">
                        <img src="<?php echo base_url(); ?>images/help-profile/madhu.png" alt="" class="img-circle img-responsive">
                    </div>                                                  
                </div>
            </div>                    
            <div class="col-md-4 col-sm-4 col-xs-12 profile_details well profile_view">
                <div class="">                        
                    <div class="left col-md-7">
                        <h4>Punit Kankanwadi</h4>
                        <p><strong>About: </strong>Marketing Team</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-mail-reply-all"></i> <a href="mailto:punit@pixsello.in">punit@pixsello.in</a></li>
                            <li><i class="fa fa-phone"></i> Phone : 080 42297299</li>
                        </ul>
                    </div>
                    <div class="right col-md-5 text-center">
                        <img src="<?php echo base_url(); ?>images/help-profile/punit.png" alt="" class="img-circle img-responsive">
                    </div>                                                  
                </div>
            </div>                   
        </div>
            <br>
            <br>
            <!---content ends-->
        </div>      
    </div>
</body>
<?php $this->load->view('employee/components/page_tail', array('jsFiles' => array())); ?>
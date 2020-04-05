<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Draft Sale Construction Lease Rental Agreements – Myloandetails.com', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>
<meta name="description" content="Complete the sale transfer and mortgage process with ease with our ready to edit and use draft agreements. Let the process of transfer be hassle free one">
<meta name="keywords" content="Draft Agreements, draft sale agreements, rental agreements, sale deed, draft sale deed, GPA,general power of attorney, spa, special power of attorney, gift deed, lease deed, agpa, agreement of sale cum general power of attorney, agreement of sale draft">

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><img src="<?php echo $staticContent; ?>images/icons/contract.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                        <li class="active">Draft Sale, Construction and Lease Agreements</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1><strong>Draft Sale, Construction and Lease Agreements</strong> </h1>
                    <p> To complete the legal and technical process over a property which the customer is buying by taking the home loan need to have a sale of agreement between the Buyer and Seller. For this the persons have to go to registration office to get the agreement done. To avoid this time consuming process and to facilitate the customer we are providing with the Draft agreements of all types that can be done over a property. The customer can use these formats for the purpose of their home loan processing and for property registration process. 
                    </p> 
                    <?php
                    $this->db->select('*');
                    $this->db->from('sr_draft');
                    $query = $this->db->get();
                    $data = $query->result_array();
                    ?>

                    <div class="col-md-12 content_cuv">
                        <div class="col-md-12 loginheader">
                            <div class="col-md-6 "><strong>Document Title</strong> </div>
                            <div class="col-md-6 "><strong>Download Documents </strong></div>
                        </div>
                        <br><br>    
                        <?php foreach ($data as $value) { ?>                            
                            <div class="col-md-12"> 
                                <?php //foreach ($data1 as $value1) { ?>
                                <div class="col-md-4 left-side">                                 
                                    <?php echo $value['draft_category_name']; ?>
                                </div>            
                                <?php
                                $this->db->select('*');
                                $this->db->from('sr_draft_settings');
                                $this->db->where('sr_draft_id', $value['sr_draft_id']);
                                $query1 = $this->db->get();
                                $data1 = $query1->result_array();
                                ?>
                                <div class="col-md-8 right-side"> 
                                    <?php foreach ($data1 as $value1) { ?>                                       
                                        <div class="col-md-12">&deg; <a href="<?php echo site_url('Draft_Agreements/draft_download/' . $value1['sr_draft_settings_id']); ?>">
                                                <?php echo $value1['draft_agreement_title']; ?></a> </div>
                                    <?php } ?>
                                </div>
                            </div>                            
                        <?php } ?>
                    </div>

                </div>                 
                <div class="col-md-4">

                </div>
            </div>
        </div>
    </div>
</div>
<footer id="footer">
   <div class="ftop">
        <div class="container">
            <div class="fcontent">
               
                <div class="col-md-5 col-sm-8">                       	
                    <spanl> NEWSLETTER</spanl>                      
                    <form role="search" method="POST" id="newsletter" action="<?php echo site_url('Welcome'); ?>" class="">
                        <div class="input-group">
                            <input type="email" placeholder="Enter Your E-mail Address" autocomplete="off" class="form-control smail" id="send-email" name="email" required>
                            <span class="input-group-btn"><button type="submit" class="btn btn-default" id="subscrib">SUBSCRIBE </button></span>
                        </div>                        
                    </form>                  
                </div>
                
                <div class="col-md-3 col-sm-6 mailblock">   
                    <div class="mails">

                        <h2><a href="mailto:info@myloandetails.com" style="color: #333"> info@myloandetails.com</a> </h2>  
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 rit">    
                    <div class="socialtab">
                        <spanl>FOLLOW US  </spanl>                  
                        <ul class="social-icons">                         
                            <a href="https://www.facebook.com/myloandetails" target="_blank"><li> <i class="fa fa-facebook" aria-hidden="true" id="facebook"></i></li></a>
                            <a href="https://twitter.com/myloandetails" target="_blank"> <li>  <i class="fa fa-twitter" aria-hidden="true" id="twitter"></i></li></a>                          
                            <!--a href="#"> <li> <i class="fa fa-tumblr" aria-hidden="true" id="tumblr"></i></li></a-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fmiddle">
        <div class="container">
            <div class="row">	
                <div class="footer-menu">                
                    <div class="col-md-3">
                        <div class="newsletter">
                            <h4>Home Loans</h4>
                            <ul>
                                <li>Sale Agreement</li>
                                <li>Rental Agreement</li>
                                <li>Draft Agreements</li>
                                <li>Draft Sale Agreements</li>
                                <li>Lease Agreements</li>
                                <li>Draft Deeds and Agreements</li>                                
                            </ul>
                            <div class="alert alert-success hidden" id="newsletterSuccess">
                                <strong>Success!</strong> You've been added to our email list.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 home-menu">
                        <h4>Main Menu</h4>
                        <ul>
                             <li><a href="<?php echo site_url('Products'); ?>">Products</a></li>
                                <li><a href="<?php echo site_url('Documents'); ?>">Documents</a></li>
                                <li><a href="<?php echo site_url('Home_Loan_Interest_Rates'); ?>">Interest Rates</a></li>
                                <li><a href="<?php echo site_url('Home_Loan_Eligibility_Calculator_NRI_Salaried'); ?>"> Eligibility Calculators</a></li>
                                <li><a href="<?php echo site_url('Home_Loan_Aggrement'); ?>"> Agreements</a></li>                              
                                <li><a href="<?php echo site_url('Home_Loan_File_Status'); ?>">File Status</a></li>
                                <li><a href="<?php echo site_url('Home_Loan_Faq'); ?>">FAQ's</a></li>
                                 <li><a href="<?php echo site_url('Home_Loan_Application_Residence'); ?>">Apply</a></li>
                           </ul>

                    </div>
                    <div class="col-md-3 company-menu">
                        <div class="contact-details">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="<?php echo site_url('About'); ?>">About Us</a></li>
                                <li><a href="<?php echo site_url('Enquiry'); ?>">Enquiry</a></li>
                                <li><a href="<?php echo site_url('Terms_Conditions'); ?>">Terms & Conditions</a></li>
                                <li><a href="<?php echo site_url('PrivacyPolicy'); ?>">Privacy Policy</a></li>
                            </ul>


                            <h4 style="color:#FFF; padding-top:14px; margin-bottom:0px">DSA's</h4>
                            <ul>
                                <li><a href="<?php echo site_url('Dsa_Register'); ?>">Register</a></li>
                                <li><a href="<?php echo site_url('Dsa_Login'); ?>">Login</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 disclaimer">
                        <h4>Location</h4>
                        <div class="addh" id="addh">                           	 	 	 
                            <p>HYDERABAD</p>
                            <p>  1-8-732/17, First Floor, Vegitable Market Road, Nallakunta,  New Nallakunta, Hyderabad, Telangana 500044.</p>
                        </div>
                        <div class="addh" id="addb">
                            <p>BANGALORE</p>
                            <p>#24/3, 2nd Floor, Manju Residency, Muniyappa Gardens, 6th Phase, JP Nagar, Bangalore - 560078</p>

                        </div>
                    </div>
                </div>
            </div>

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
            <p>Copyright © 2008-2016, Myloandetails.com All Rights Reserved. </p>
        </div>
        <div class="pull-right">
            <a href="#0" class="cd-top"></a>
        </div> 
    </div>
</footer> 

<!-- footer -->
<?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>

<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="vendor/magnific-popup/magnific-popup.js"></script>
<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#demo').hide();
        $('.vticker').easyTicker();
    });
</script>

<script src="js/custom.js"></script>


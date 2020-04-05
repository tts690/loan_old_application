<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Home Loan Interest Rates Comparison from 30 Major Banks – Myloandetails.com', 'cssFiles' => array())); ?>
<?php
$staticContent = base_url();
?>
<meta name="description" content=":Get 30 major banksfinancial institutionshome loan interest rates at one place with latest product offerings, EMI/lac and tenure details. Compare home loan interest rates of all banks at one place easily"/>
<meta name="keywords" content="home loan interest rates,home loan rates,housing loan interest rates,housing loan rates,interest rates of home loans,interest rates of housing loans,home loan interest rates in India,housing loan interest rates in India,Home Loan interest rates comparision,home loan interest details" />
<!-- Tutorial CSS Files -->
<link rel="stylesheet" href="<?php echo $staticContent; ?>css/compare/animate.min.css"></link>
<link rel="stylesheet" href="<?php echo $staticContent; ?>css/compare/comparison.css"></link>
<link rel="stylesheet" href="<?php echo $staticContent; ?>css/compare/normalize.min.css"></link>

<?php
$this->db->select('*');
$this->db->from('sr_interest_rate');
$this->db->join('bank', 'bank.bank_id = sr_interest_rate.bank_id');
$query = $this->db->get();
$data = $query->result();
?>
    <div role="main" class="main">
        <section class="page-top">
            <div class="container">
                <div class="row">                                            
                    <div class="col-md-12">  
                        <h1><img src="<?php echo $staticContent; ?>images/icons/percentage.png"></h1>
                        <ul class="breadcrumb">
                            <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                            <li class="active"> Interest Rate</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div class="inner-content">
            <div class="compare-banks">
                <div class="row">
                    <div class="cbutton">
                        <a id="compare" href="#animatedModal" disabled class="compare-products">Compare </a>
                    </div>
                </div>
                <div class="container"> 
                    <div class="bank_compare">
                        <!-- Product 1 -->
                        <?php foreach ($data as $value) { ?>
                        <div class="product" data-id="<?php echo $value->bank_id; ?>" data-title="<div class='tenure'><h2><?php echo $value->bank_name; ?></h2></div>"
                                 data-description="<div class='tenure'><p><h3>Tenure :</h3><?php echo $value->tenure; ?></p></div>
                                 
                                <div class='tenure'><p><span><h3>Interest Rate :</h3></span><?php echo $value->interest_rate; ?></p></div>
                                <div class='tenure'><span><h3>Features :</h3></span><?php echo $data[0]->feature; ?></div>">
                                
                                <button><div>+</div></button>

                                <img src="<?php echo base_url('uploads/' . $value->photoUrl); ?>" class="product-image"/>
                                <h3 class="text-center"><strong><?php echo $value->bank_name; ?></strong></h3>
                                <ul>
                                    <li><span>Tenure</span> : <?php echo $value->tenure; ?></li>
                                    <!--li><span>Interest Rate </span>:  <?php echo $value->interest_rate; ?></li-->
                                    <li>
                                        <a href="<?php echo site_url('Home_Loan_Interest_Rates_view/view/' . $value->intrest_rate_id); ?>" target="_blank"> 
                                            <input type="button" value="View" name="view" class="btn btn-primary"></input> 
                                        </a> 
                                    </li>                                                                   
                                </ul>                                                          
                            </div>
                        </div>
                    <?php } ?>  
                    <!-- Product 1 -->                                 
                    <!--Modal-->
                    <div class="row">                                              
                        <div id="animatedModal">
                            <!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
                            <div  id="btn-close-modal" class="close-animatedModal"> 
                                CLOSE
                            </div>
                            <div class="modal-content">
                                <div class="modal-inner">
                                    <div class="no-products">Select Your Banks To Compare</div>  
                                    <div class="modal-products">
                                        
                                    </div>     
                                </div>
                            </div>
                        </div>                                           
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
                                <li>Home Loan Interest Rates</li>
                                <li>Housing Loan Interest Rates</li>
                                <li>Home Loan Rates</li>
                                <li>Housing Loan Rates</li>
                                <li>Home Loan Interest Rates India</li>
                                <li>Housing Loan Interest Rates India</li>
                                <li>Loan Interest Rates</li>
                                <li>Loan Interest Rates India</li>
                            </ul>
                            <div class="alert alert-success hidden" id="newsletterSuccess">
                                <strong>Success!</strong> You've been added to our email list.
                            </div>
                        </div>
                    </div>
                     <div class="col-md-3 home-menu">
                        <h4>Main Menu</h4>
                        <ul>
                             <li><a href="<?php echo site_url('home-loan-products-details-terms-conditions'); ?>">Products</a></li>
                                <li><a href="<?php echo site_url('home-mortgage-loan-required-documents-checklist'); ?>">Documents</a></li>
                                <li><a href="<?php echo site_url('home-loan-interest-rates-tenures-features'); ?>">Interest Rates</a></li>
                                <li><a href="<?php echo site_url('home-loan-salaried-eligibility-calculator'); ?>"> Eligibility Calculators</a></li>
                                <li><a href="<?php echo site_url('home-loan-agreement-terms-conditions'); ?>"> Agreements</a></li>                              
                                <li><a href="<?php echo site_url('home-loan-file-status-online-tracking'); ?>">File Status</a></li>
                                <li><a href="<?php echo site_url('post-a-query'); ?>">FAQ's</a></li>
                                 <li><a href="<?php echo site_url('home-loan-application'); ?>">Apply</a></li>
                           </ul>

                    </div>
                     <div class="col-md-3 company-menu">
                        <div class="contact-details">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="<?php echo site_url('About'); ?>">About Us</a></li>
                                <li><a href="<?php echo site_url('Enquiry'); ?>">Enquiry</a></li>
                                <li><a href="<?php echo site_url('terms-conditions'); ?>">Terms & Conditions</a></li>
                                <li><a href="<?php echo site_url('privacy-policy'); ?>">Privacy Policy</a></li>
                            </ul>

                            <h4 style="color:#FFF; padding-top:14px; margin-bottom:0px">DSA's</h4>
                            <ul>
                                <li><a href="<?php echo site_url('dsa-registration'); ?>">Register</a></li>
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

<?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>
<!-- Tutorial JS Files -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>js/compare/jquery.comparison.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>js/compare/animatedModal.min.js"></script>
<script>

    $("#compare").animatedModal({
        animatedIn: 'lightSpeedIn',
        animatedOut: 'bounceOutDown',
        color: '#3498db',
    });

    $(document).ready(function () {

        $('.product').compare({
            compareButton: '.compare-products'
        });
    });

</script>
<!-- Tutorial JS END -->



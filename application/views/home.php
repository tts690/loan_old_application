<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Myloandetails.com – An Unique Home,Personal,Mortgage and Business Loans Provider in India', 'cssFiles' => array())); ?>
<?php
$staticContent = base_url();
?>

<meta name="description" content="Myloandetails a team of highly experienced people providing services in home loans, mortgage loans and Balance Transfer services to the home loan seekers across India with the facilities of online file tracking, Eligibility Calculators etc">
<meta name="keywords" content="Home Loans,Mortgage Loans,Business Loans,Personal Loans, Home Loan Interest Rates, Eligibility Calculators, EMI Calculators, Home Loan Balance Transfer,Over Draft">


<?php if (empty($error)) { ?>
    <div class="alert alert-success" id="success-alert">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong><?php echo $error; ?> </strong>
    </div>
<?php } ?> 
<div role="main" class="main">
    <div id="conent" class="content-full">
        <div class="carousnner" role="listbox">
            <div class="it">
                <img src="<?php echo $staticContent; ?>images/slider/slider1.jpg" class="img-responsive" alt="myloandeatils"/>
            </div>                   
        </div>
        <!-- slider-->  
    </div>        
    <div id="scroll-animate">
        <div id="scroll-animate-main">
            <div class="wrapper-parallax">
                <div class="home-page-content">
                    <section class="conent">
                        <div class="container home-loan-home">
                            <div class="row">
                                <div class="col-md-4 home-loans">
                                    <div class="slide-desgn">
                                        <div class="icons">
                                            <div class="mobile-view">
                                                <div id="item_1" class="item">
                                                </div>
                                            </div>
                                            <div id="item_2" class="itm">
                                                <div class="tooltip_description" style="display:none" title="Products"> For the convenience of customers we have divided the banks into two categories on the basis of their income consideration.<br>
                                                    <b>Banks considering Gross Income:</b> Details given under this are applicable to those banks
                                                    <p><a href="#" class="crh">Read More</a></p> 
                                                </div>
                                            </div>  
                                            <div id="item_8" class="itm">
                                            </div>
                                            <div id="item_3" class="itm ">
                                                <div class="tooltip_description" style="display:none" title="Apply">Apply</div></div>
                                            <div class="desktop-view">
                                                <div id="item_1" class="item tooltiptopright">
                                                    <div class="tooltip_description" style="display:none" title="Home Loan">Avail best home loans with least interest rates and minimum processing fee. Compare all banks interest rates, and calculate eligibility online. Get all your queries resolved instantly with answers from experts of the industry <p><a href="#" class="crh"></a></p> </div></div>
                                            </div>
                                            <div id="item_4" class="itm">
                                                <div class="tooltip_description" style="display:none" title="Documents">Documents <p><a href="#" class="crh">Read More</a></p></div></div>

                                            <div id="item_5" class="itm">
                                                <div class="tooltip_description" style="display:none" title="File Status">File Status <p><a href="#" class="crh">Read More</a></p></div></div>

                                            <div id="item_6" class="itm">
                                                <div class="tooltip_description" style="display:none" title="Eligibility Calculators">Eligibility Calculators <p><a href="#" class="crh">Read More</a></p></div></div>

                                            <center><div id="item_7" class="itm">
                                                    <div class="tooltip_description" style="display:none" title="Home Loan Agreement">Home Loan Agreement <p><a href="#" class="crh">Read More</a></p></div></div></center>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-8 home-loans-description">
                                    <div class="slide-descrtion">					
                                        <h1>Home Loans</h1>
                                        <p>Avail best home loans with least interest rates and minimum processing fee. Compare all banks interest rates, and calculate eligibility online. Get all your queries resolved instantly with answers from experts of the industry 
                                        </p>
                                        <p class="lead"> For the convenience of customers we have divided the banks into two categories on the basis of their income consideration. </p>
                          <h4> Banks considering Gross Income:</h4>
                            <p>Details given under this are applicable to those banks which consider Monthly Gross Income (Salaried) / Annual Gross Income (Self Employed) for their calculations*.</p>
                            <hr class="small">
                            <h4> Banks considering Net Income:</h4>
                            <p>Details given under this are applicable to those banks which consider Monthly Net Income of salaried (Income after Statutory Deductions) / Annual Net Income of Self Employed (Income after Tax) for their calculations*.</p>

                                        


                                        <p><a href="<?php echo site_url('Documents'); ?>" ><button type="button" class="btn btn-primary cr">Continue Reading</button></a></p>  
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <hr class="tall">
                        </div>
                        <div class="container personal-loan-personal">
                            <div class="row">
                                <div class="col-md-9 personal-loans-description">
                                    <div class="slide-design">
                                        <h1>Personal Loans</h1>
                                        <p>Banks offer personal loans to salaried and self-employed individuals to meet their personal needs by considering their regular income or salary and provide without any collateral security. The loan is funded purely on the basis of income that one get from their employer or from their own business. Banks charge interest rate to customer by considering their company profile too. People working with large corporates and MNC's usually charged less with option Nill pre closing charges.</p>
                                        <b>Eligibility</b>
                                        <ul>
                                            <li>Applicant age must be min 21 Years</li>
                                            <li>Must have 2 years of work experience</li>
                                            <li>Applicant must have a minimum salary of 20,000 / Month</li>
                                            <li>Applicant must have clear CIBIL records</li>
                                            <li>Applicant must be working with any company or self employed</li></ul>

                                        <b>Current Offers</b>
                                        <ul>
                                            <li>Processing fee 1% for CAT A Companies</li>
                                            <li>Paybacks upto a maximum of 1% to CAT B & CAT C Companies</li>
                                            <li>Attractive interest rates for doctors @ 14%</li>
                                        </ul>
                                        <p></p>
                                        <p><a href="<?php echo site_url('Personal_Loan'); ?>" ><button type="button" class="btn btn-primary cr">Continue Reading</button></a></p> 
                                    </div>
                                </div>
                                <div class="col-md-3 personal-loans">
                                    <div class="slide-description">	
                                        <div class="icons">
                                            <div class="mobile-view">
                                                <div id="item_17" class="item tooltipleft">
                                                    <div class="tooltip_description" style="display:none" title="Personal Loans">Looking for funds for your child education or marriage or to meet personal commitments or for medical expenses. Avail best and easy personal loans at least interest rates with nominal processing fees and long repayment periods. <p><a href="#" class="crh">
                                                            </a></p></div></div></>
                                            </div>
                                            <center><div id="item_9" class="itm tooltipleft">
                                                    <div class="tooltip_description" style="display:none" title="Products">Products <p><a href="#" class="crh">Read More</a></p></div></div> </center>


                                            <div id="item_16" class="itm tooltipleft">
                                                <div class="tooltip_description" style="display:none" title="Documents">Documents <p><a href="#" class="crh">Read More</a></p></div></div>
                                            <div class="desktop-view">
                                                <div id="item_17" class="item tooltipleft">
                                                    <div class="tooltip_description" style="display:none" title="Personal Loans">Looking for funds for your child education or marriage or to meet personal commitments or for medical expenses. Avail best and easy personal loans at least interest rates with nominal processing fees and long repayment periods. <p><a href="#" class="crh"></a></p></div></div></>
                                            </div>


                                            <div id="item_18" class="itm tooltipleft">
                                                <div class="tooltip_description" style="display:none" title="Eligibility">Eligibility <p><a href="#" class="crh">Read More</a></p></div></div>

                                            <center><div id="item_15" class="itm tooltipleft">
                                                    <div class="tooltip_description" style="display:none" title="Agree">Agree <p><a href="#" class="crh">Read More</a></p></div></div></center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <hr class="tall">
                        </div>
                        <div class="container home-loan-home">
                            <div class="row">

                                <div class="col-md-3 personal-loans">					
                                    <div class="slide-design">
                                        <div class="icons">
                                            <center><div id="item_10" class="item">
                                                    <div class="tooltip_description" style="display:none" title="Business Loans">Planing for expansion of business avail business loans from all leading and major banks in week days of time without any colletaral security on your company's name. Get your loan processes and disbursed in a week days of time. <p><a href="#" class="crh"></a></p></div></div></center>
                                            <div id="item_13" class="itm">
                                                <div class="tooltip_description" style="display:none" title="Rates">Rates <p><a href="#" class="crh">Read More</a></p></div></div> 




                                            <div id="item_14" class="itm">
                                                <div class="tooltip_description" style="display:none" title="Documents">Documents <p><a href="#" class="crh"></a></p></div></div>

                                            <div id="item_11" class="itm">
                                                <div class="tooltip_description" style="display:none" title="Term">Term <p><a href="#" class="crh"></a></p></div></div>

                                            <div id="item_12" class="itm">
                                                <div class="tooltip_description" style="display:none" title="Apply">Apply <p><a href="#" class="crh"></a></p></div></div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="col-md-9 personal-loans-description"> 
                                    <div class="slide-description">	
                                        <h1>Business Loans</h1>
                                        <p>Planing for expansion of business avail business loans from all leading and major banks in week days of time without any colletaral security on your company's name. Get your loan processes and disbursed in a week days of time.</p>
                                        <p>Small and Medium Enterprise loans are the products which banks offer to the business sectors mainly which are into manufacturing, trading and service providers who have turnover approximately 1 Cr and above consecutively for 3 years. Banks have tailored different products for different needs of companies for their expansion of entity and for purchase of raw materials and production purposes. The products are Working Capitals, Unsecured Business loans, Secured Term Loans, Over Drafts, Cash Credit, Bank Guarantee and Letter of credit.</p>
                                        <p>Banks will take collateral security for Term loans, Over Drafts, Cash Credit, bank Gurantee and Letter of Credit. The collateral can be a residential, Commercial or Industrial Property which the company or the directors own. Banks do fund credit to the companies against stocks, work orders and Plant and Machinery.  </p>
                                        <p><a href="<?php echo site_url('Business-Loan'); ?>" ><button type="button" class="btn btn-primary cr">Continue Reading</button></a></p> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
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
                                <li><a href="<?php echo site_url('home-loan-products-details-terms-conditions'); ?>">Home Loan Products</a></li>
                                <li><a href="<?php echo site_url('home-mortgage-loan-required-documents-checklist'); ?>">Home Loan Documents</a></li>
                                <li><a href="<?php echo site_url('home-loan-interest-rates-tenures-features'); ?>">Home Loan Interest Rates</a></li>
                                <li><a href="<?php echo site_url('home-loan-salaried-eligibility-calculator'); ?>">Home Loan Eligibility Calculators</a></li>
                                <li><a href="<?php echo site_url('home-loan-agreement-terms-conditions'); ?>">Home Loan Agreement</a></li>
                                <li><a href="<?php echo site_url('draft-sale-lease-rental-construction-agreements-deeds-documents'); ?>">Draft Sale and Rental Agreements</a></li>
                                <li><a href="<?php echo site_url('home-loan-file-status-online-tracking'); ?>">Home Loan File Status</a></li>
                                <li><a href="<?php echo site_url('post-a-query'); ?>">News & FAQ's</a></li>
                            </ul>
                            <div class="alert alert-success hidden" id="newsletterSuccess">
                                <strong>Success!</strong> You've been added to our email list.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 home-menu">
                        <h4>Main Menu</h4>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo site_url('home-loan-products-details-terms-conditions'); ?>">Home Loans</a></li>
                            <li><a href="<?php echo site_url('Personal_Loan'); ?>">Personal Loans</a></li>	 
                            <li><a href="<?php echo site_url('home-personal-business-loans-cibil-properties-faqs'); ?>">Business Loans</a></li>                  	 	
                            <li><a href="<?php echo site_url('post-a-query'); ?>">FAQ's</a></li>
                            <li><a href="<?php echo site_url('Loan-emi-ammortization-calculator'); ?>">EMI Calculator</a></li>
                            <li><a href="<?php echo site_url('dsa-registration'); ?>">DSA</a></li>
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
<script src="<?php echo $staticContent; ?>js/jquery.boxloader.min.js">
</script>
<script>
    $(document).ready(function () {
        $('.slide-description').boxLoader({
            direction: "x",
            position: "100%",
            effect: "fadeIn",
            duration: "1s",
            windowarea: "50%"
        });
        $('.slide-design').boxLoader({
            direction: "x",
            position: "-100%",
            effect: "fadeIn",
            duration: "1s",
            windowarea: "50%"
        });
    });
</script>
<script>
    $(window).resize(function () {
        var $source = $('.home-loans-description').find('h1');


        var $dest = $('.home-loans .icons');

        if ($(window).width() <= 991) {

            $source.insertBefore($dest);
        }


    });
</script>

<script>
    $(window).resize(function () {
        var $source = $('.home-page-content').find('#business-loans');

        var $dest = $('#business-loans-description');
        if ($(window).width() <= 991) {
            $source.insertAfter($dest);
        }

    });




</script>



<!--script type="text/javascript" src="<?php echo $staticContent; ?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>js/additional-methods.js"></script>
<script>
    $().ready(function () {
        // validate the comment form when it is submitted
        jQuery.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || /^[a-zA-Z _]+$/i.test(value);
        }, "Letters only please");

        // validate signup form on keyup and submit
        $("#firstcal").validate({
            rules: {
                aa: {
                    lettersonly: true,
                    required: true,
                },
              
               
                agree: "required"
            },
            messages: {
                aa: "Please enter your name",
                a_city: "Please enter city name",
                lastname: "Please enter your lastname",
                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                address: {
                    required: "Please enter your address",
                },
                msg: {
                    required: "Please enter your message",
                },
                a_mob: {
                    required: "Please enter valid phone number",
                    minlength: "Ten digit mobile number"
                },
                a_email: "Please enter a valid email address",
                agree: "Please accept our policy"
            }
        });
    });
</script-->




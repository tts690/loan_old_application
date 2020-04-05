<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Home Loan Product Details Terms Conditions – Myloandetails.com', 'cssFiles' => array())); ?>
<meta name="description" content="Get the product specific details, terms and conditions, legal and technical conditions of banks here by just selecting your desired product in simple and easy steps">
<meta name="keywords" content="Home Loan Product Details, Home Loan Details, Plot Loan, New Purchase, Resale Purchase, Mortgage Loan, Home Loan Balance Transfer, Resale Purchase Vendor Liability, Plot + Construction Loan">

<?php $staticContent = base_url(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $staticContent; ?>css/simpleform.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $staticContent; ?>css/newbootstrap-newstaggered.css"/>


<style>
    .error-msg { 
        padding: 0 !important; 		
    }
    .error-msg .error {
        font-size: initial;	
        background : #d9534f;
        color: #ffffff;		
        -moz-animation: bounce 1s 1 alternate;
        -ms-animation: bounce 1s 1 alternate;
        -o-animation: bounce 1s 1 alternate;
        -webkit-animation: bounce 1s 1 alternate;
        animation: bounce 1s 1 alternate;	
    }	
    .error-msg .error:after {		
        border-right-color: #d9534f;		
        -moz-animation: initial;
        -ms-animation: initial;
        -o-animation: initial;
        -webkit-animation: initial;
        animation: initial;
    }	
    #testform4 input[type="radio"]::after,
    .error::after	{
        border: none !important;
    }	
    .product-form form{
        border-radius: 10px;
        border: 1px solid #ccc;
        /* box-shadow: px 2px 5px 0px #444;*/
        background: #fff;
        position: relative;
        padding: 10px;
        overflow: hidden;
        margin-bottom: 20px;
    }
</style>

<!-- -->
<div role="main" class="main"> 
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><img src="<?php echo $staticContent; ?>images/icons/savings.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                        <li class="active">Product Description</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<div class="inner-content">
        <div class="container">
    <section id="secti">
        <div class="emi-header">
            <h1> Home Loan Products Description</h1>
        </div>
    </section>   
                <div class="row">
                <div class="col-md-12 product-form">
                    <div class="row">
                    
                            <p>Knowing about the product will always make the home loan processing smooth to every customer. Before going for a home loan processing please be aware of your loan product and the terms and conditions that the Bank is asking to fulfil to have the loan done. There are different products for which bank are having different terms and conditions for each product. Check the interest rates, sanction conditions, legal and technical conditions, processing fees charges here by just selecting the required fields for the product that suits your needs.</p>
                            <div class="emi-header pull-right">
                                 <ul class="social-icons">                         
                                                <li><a onclick="return fb();" target="_blank"><i class="fa fa-facebook" aria-hidden="true" id="facebook"></i></a></li>                          
                                                <li><a onclick="return twitter();"><i class="fa fa-twitter" aria-hidden="true" id="twitter"></i></a></li>
                                            </ul>
                            </div>
                       
                    </div>
                    <form id="testform4" method="POST" action="<?php echo site_url('Product_Description/Get_products'); ?>">

                        <fieldset class="personal-data">
                            <div class="news-tagger-container">
                                <div class="row-fluid">
                                    <div class="row">
                                        <div class="row ns-fixed-height">
                                            <div class="col-md-12">
                                                <h3><span>I am a</span></h3>

                                                <span class="error-msg"> </span>
                                            </div>
                                            <div class="col-md-12 news-tagger-content">
                                                <div class="row news-tagger-city">
                                                    <div class="cityNameDiv col-md-4 col-sm-4 col-xs-12 text-center pad-none hover-icon ">
                                                        <div class="touch-icon touch-icon-active">
                                                            <label class="radio">
                                                                <label for="ResidentSalaried">
                                                                    <div class="hvr-puls">
                                                                        <span class="sprite-city icon-rs hvr-outline-out"></span> <span class="city-name">Resident Salaried</span>
                                                                        <div class="radio-box">
                                                                            <input type="radio" name="income_source_id" data-selection="city" data-action="change:edit"
                                                                                   id="ResidentSalaried"
                                                                                   value="R"
                                                                                   data-toggle="radio" 
                                                                                   class=" basic-required-options city-radio-options next-fieldset"/>
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="cityNameDiv col-md-4  col-sm-4 col-xs-12 text-center">
                                                        <div class="touch-icon touch-icon">
                                                            <label class="radio">
                                                                <label for="cityNameCHENNAI">
                                                                    <div class="hvr-puls">
                                                                        <span class="sprite-city icon-se hvr-outline-out"></span> <span class="city-name">Resident Self Employed </span>
                                                                        <div class="radio-box">
                                                                            <input type="radio" name="income_source_id" data-selection="city" data-action="change:edit"
                                                                                 id="cityNameCHENNAI"
                                                                                   value="S"
                                                                                   data-toggle="radio" class=" basic-required-options city-radio-options next-fieldset" />
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="cityNameDiv col-md-4 col-sm-4 col-xs-12 text-center">
                                                        <div class="touch-icon touch-icon">
                                                            <label class="radio">
                                                                <label for="cityNameNEWDELHI">
                                                                    <div class="hvr-puls">
                                                                        <span class="sprite-city icon-nri hvr-outline-out"></span> <span class="city-name">NRI Salaried </span>
                                                                        <div class="radio-box">
                                                                            <input type="radio" name="income_source_id" data-selection="city" data-action="change:edit"
                                                                                  id="cityNameNEWDELHI"
                                                                                   value="N"
                                                                                   data-toggle="radio" class=" basic-required-options city-radio-options next-fieldset" />
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="address-data-inputs">
                            <div class="news-tagger-container">
                                <div class="row-fluid">
                                    <div class="row">
                                        <div class="row ns-fixed-height">
                                            <div class="col-md-12">
                                                <h3><span>I prefer banks which consider...</span></h3>
                                            </div>
                                            <span class="error-msg"></span>
                                            <div class="col-md-12 news-tagger-content">
                                                <div class="row news-tagger-city">
                                                    <div class="cityNameDiv col-md-6 col-sm-6 col-xs-12 text-center pad-none hover-icon">
                                                        <div class="touch-icon touch-icon-active">
                                                            <label class="radio">
                                                                <label for="cityNameMUMBAI">
                                                                    <div class="hvr-puls">
                                                                        <span class="sprite-city icon-gsincome hvr-outline-out"></span> <span class="city-name">Banks Considering Gross Income</span>
                                                                        <div class="radio-box">
                                                                            <input type="radio" name="sr_bank_id" data-selection="city" data-action="change:edit"
                                                                                   id="cityNameMUMBAI"
                                                                                   value="1"
                                                                                   data-toggle="radio" class=" basic-required-options city-radio-options next-fieldset" />
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="cityNameDiv col-md-6 col-sm-6 col-xs-12 text-center pad-none hover-icon">
                                                        <div class="touch-icon touch-icon-acive">
                                                            <label class="radio">
                                                                <label for="cityNameMBAI">
                                                                    <div class="hvr-puls">
                                                                        <span class="sprite-city icon-net_income hvr-outline-out"></span> <span class="city-name">Banks Considering Net Income</span>
                                                                        <div class="radio-box">
                                                                            <input type="radio" name="sr_bank_id" data-selection="city" data-action="change:edit"
                                                                                 id="cityNameMBAI"
                                                                                   value="2"
                                                                                   data-toggle="radio" class=" basic-required-options city-radio-options next-fieldset" />
                                                                        </div> 
                                                                    </div>
                                                                </label>
                                                            </label>                                                                   
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="personal-data finalfield">
                            <div class=" news-tagger-container" data-actionLoc="slideElig:salaryaccount">
                                <div class="row-fluid">
                                    <div class="row">
                                        <div class="row ns-fixed-height">
                                            <div class="col-md-12">
                                                <h3><span>My requirement is for</span></h3>
                                                <span class="error-msg"></span>
                                            </div>
                                            <div class="col-sm-11 col-md-12  pl-salary-account salary-bank">
                                                <div class="row news-tagger-content news-tagger-salary-deposited">
                                                    <div class="col-md-3 col-sm-4 col-xs-12 loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_012"> <span class="sprite-bank-desk icon-bank-12 hvr-outline-out"> </span> <span class="bank-name">New Purchase (Flat Or Independent)</span> </label>
                                                                    <div class="radio-box">
                                                                        <input type="radio" value="1" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_012" name="sr_loan_id" data-toggle="radio"   />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-12 loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_057"> <span class="sprite-bank-desk icon-bank-57 hvr-outline-out"> </span> <span class="bank-name">Resale Purchase (Flat Or Independent House)</span> </label>
                                                                    <div class="radio-box">
                                                                        <input type="radio" value="2" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_057" name="sr_loan_id" data-toggle="radio"   />
                                                                    </div>
                                                                </div>
                                                            </label>                                                  
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-12 loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_05"> <span class="sprite-bank-desk icon-bank-5 hvr-outline-out"> </span> <span class="bank-name">Plot Purchase</span> </label>
                                                                    <div class="radio-box">
                                                                        <input type="radio" value="3" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_05" name="sr_loan_id" data-toggle="radio"   />
                                                                    </div>
                                                                </div>
                                                            </label>                                               
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-12 loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_02"> <span class="sprite-bank-desk icon-bank-2 hvr-outline-out"> </span> <span class="bank-name">Construction</span> </label>
                                                                    <div class="radio-box">
                                                                        <input type="radio" value="16" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_02" name="sr_loan_id" data-toggle="radio"   />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 col-sm-12 col-sm-4 col-xs-12 loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_092"> <span class="sprite-bank-desk icon-bank-92 hvr-outline-out"> </span> <span class="bank-name">Mortgage</span> </label>
                                                                    <div class="radio-box">
                                                                        <input type="radio" value="5" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_092" name="sr_loan_id" data-toggle="radio"   />
                                                                    </div>
                                                                </div>
                                                            </label>                                          
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3  col-sm-4 col-xs-12 loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_0999"> <span class="sprite-bank-desk icon-bank-999 hvr-outline-out"> </span> <span class="bank-name">Plot + Construction</span> </label>
                                                                    <div class="radio-box">
                                                                        <input type="radio" value="6" class="basic-required-options" slideNextOn="change" data-action="change:edit:inclData" id="salaryAccount_radio_0999" name="sr_loan_id" data-toggle="radio"   />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-12 loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_997"> <span class="sprite-bank-desk icon-receive-cash hvr-outline-out"> </span> <span class="bank-name">Balance Transfer</span> </label>
                                                                    <div class="radio-box">
                                                                        <input type="radio" value="7" id="salaryAccount_radio_997" data-action="change:edit:inclData"
                                                                               name="sr_loan_id" class="validate basic-required-options" slideNextOn="change" data-toggle="radio"  />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!--new added-->
                                                    <div class="col-md-3 col-sm-4 col-xs-12 loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_2011"> <span class="sprite-bank-desk Commercial-Mortgage-2012 hvr-outline-out"> </span> <span class="bank-name">Commercial Mortgage</span> </label>
                                                                  <div class="radio-box">
                                                                        <input type="radio" value="9" id="salaryAccount_radio_2011" data-action="change:edit:inclData"
                                                                               name="sr_loan_id" class="validate basic-required-options" slideNextOn="change" data-toggle="radio"  />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-12 loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_2012"> <span class="sprite-bank-desk Resale-Purchase-2012 hvr-outline-out"> </span> <span class="bank-name">Resale Purchase (Vendor Liability)</span> </label>
                                                                    <div class="radio-box">
                                                                        <input type="radio" value="10" id="salaryAccount_radio_2012" data-action="change:edit:inclData"
                                                                               name="sr_loan_id" class="validate basic-required-options" slideNextOn="change" data-toggle="radio"  />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-12 loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_2014"> <span class="sprite-bank-desk salaryAccount-2014 hvr-outline-out"> </span> <span class="bank-name">PLOT Mortgage</span> </label>
                                                                    <div class="radio-box">
                                                                        <input type="radio" value="11" id="salaryAccount_radio_2014" data-action="change:edit:inclData"
                                                                               name="sr_loan_id" class="validate basic-required-options" slideNextOn="change" data-toggle="radio"  />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-4 col-xs-12  loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_2019"> <span class="sprite-bank-desk Loan-Extension-2019 hvr-outline-out"> </span> <span class="bank-name">Resale Purchase(Vender Liability)</span> </label>
                                                                   <div class="radio-box">
                                                                        <input type="radio" value="10" id="salaryAccount_radio_2019" data-action="change:edit:inclData"
                                                                               name="sr_loan_id" class="validate basic-required-options" slideNextOn="change" data-toggle="radio"  />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <!--new added-->
                                                    <div class="col-md-3 col-sm-4 col-xs-12 loan-select">
                                                        <div class="touch-icon">
                                                            <label class="radio">
                                                                <div class="hvr-puls">
                                                                    <label for="salaryAccount_radio_998"> <span class="sprite-bank-desk icon-receive hvr-outline-out"> </span> <span class="bank-name">Loan Extension</span> </label>
                                                                   <div class="radio-box">
                                                                        <input type="radio" value="14" id="salaryAccount_radio_998" data-action="change:edit:inclData"
                                                                               name="sr_loan_id" class="validate basic-required-options" slideNextOn="change" data-toggle="radio"  />
                                                                    </div>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!--div class="col-md-12">
                                                        <div class="col-md-3" style=" padding: 2.85%;"></div>
                                                        <div class="col-md-9">
                                                            <input type="submit" value="Submit">
                                                        </div>
                                                    </div-->
                                                </div>
                                            </div>
                                        </div>                                       
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- main content -->
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
                                <li>New Purchase</li>
                                <li>Resale Purchase</li>
                                <li>Plot+Construction</li>
                                <li>Plot Purchase</li>
                                <li>Construction</li>
                                <li>Mortgage Loan</li>
                                <li>Resale Vendor Liability</li>
                                <li>Home Loan Balance Transfer</li>
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

<script src="<?php echo $staticContent; ?>vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="<?php echo $staticContent; ?>vendor/magnific-popup/magnific-popup.js"></script>

<script type="text/javascript" src="<?php echo $staticContent; ?>js/jquery.easy-ticker.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#demo').hide();
        $('.vticker').easyTicker();
    });
</script>

<script src="<?php echo $staticContent; ?>js/custom.js"></script>

<script src="<?php echo $staticContent; ?>js/section/cbpFWTabs.js"></script>
<script>
    (function () {

        [].slice.call(document.querySelectorAll('.tabs')).forEach(function (el) {
            new CBPFWTabs(el);
        });

    })();
</script>


<script type="text/javascript" src="<?php echo $staticContent; ?>js/simpleform.min.js"></script>
<script type="text/javascript">
    /* $(".testform").simpleform({
     speed: 500,
     transition: 'fade',
     progressBar: true,
     showProgressText: true,
     validate: true
     });
     
     $("#testform2").simpleform({
     speed: 500,
     transition: 'slide',
     progressBar: true,
     showProgressText: true,
     validate: true
     });
     */

    $("#testform4").simpleform({
        speed: 500,
        transition: 'fade',
        progressBar: false,
        showProgressText: false,
        validate: true
    });

    function validateForm(formID, Obj) {

        switch (formID) {

            case 'testform4' :
                Obj.validate({
                    //  errorClass: "error-msg",
                    // errorElement: "label",
                    rules: {
                        income_source_id: {
                            required: true,
                        },
                        sr_bank_id: {
                            required: true,
                        },
                        sr_loan_id: {
                            required: true,
                        }
                    },
                    // errorLabelContainer: ".error-msg",
                    errorPlacement: function (error, element) {

                        var e = element;

                        var n = element.attr("name");

                        if (n == "income_source_id")
                        {
                            alert("Please Select an option");
                        }

                        else if (n == "sr_bank_id")
                            alert('Please Select an Option');
                        else if (n == "sr_loan_id")
                            alert('Please Select an Option');

                    }

                });
                return Obj.valid();
                break;
        }
    }

    $(document).ready(function () {
        //$('.error-msg').insertAfter('#testform4 .ns-fixed-height h3 span');

    });
</script>
<script>
    $(window).scrollTop(function () {
        var navTop = $(window).scrollTop();
        $('.model-0').css("top", navTop + 50);
    });
</script>
<!--social-->
<script type="text/javascript" src="<?php echo $staticContent; ?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>js/additional-methods.js"></script>
<script>
//    $.validator.setDefaults({
//        submitHandler: function () {
//            alert("submitted!");
//        }
//    });

    $().ready(function () {
        // validate the comment form when it is submitted

        jQuery.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
        }, "Letters only please");

        // validate signup form on keyup and submit
        $("#contactform").validate({
            rules: {
                name: {
                    lettersonly: true,
                    required: true,
                },
                cnum: {
                    required: true,
                    minlength: 10,
                    phoneUS: true,
                    maxlength: 10
                },
                email: {
                    required: true,
                    email: true
                },
                topic: {
                    required: "#newsletter:checked",
                    minlength: 2
                },
                agree: "required"
            },
            messages: {
                name: "Please enter your name",
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
                cnum: {
                    required: "Please enter valid phone number",
                    minlength: "Ten digit mobile number"
                },
                email: "Please enter a valid email address",
                agree: "Please accept our policy"
            }
        });
    });
</script>
<script>
    function fb() {
        window.open('https://www.facebook.com/sharer/sharer.php?u=http://demo.myloandetails.com/home-loan-products-details-terms-conditions?[title]=Products', '_blank');

    }
    function twitter() {
        window.open('http://twitter.com/intent/tweet?status=http://demo.myloandetails.com/home-loan-products-details-terms-conditions?[title]=Products', '_blank');
    }
</script>

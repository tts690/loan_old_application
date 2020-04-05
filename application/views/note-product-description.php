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
	
	#testform3 input[type="radio"]::after,
	.error::after	{
		border: none !important;
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
        <div class="row">
            <div class="col-md-8">               
                    <h2><strong>Note</strong></h2>
                      <hr class="small">
                    <div class="row">
                        <div class="col-md">
                               <p class="lead"> For the convenience of customers we have divided the banks into two categories on the basis of their income consideration. </p>     
                           <h4> Banks considering Gross Income:</h4>
                            <p>Details given under this are applicable to those banks which consider Monthly Gross Income (Salaried) / Annual Gross Income (Self Employed) for their calculations*.</p>
                            <hr class="small">
                            <h4> Banks considering Net Income:</h4>
                            <p>Details given under this are applicable to those banks which consider Monthly Net Income of salaried (Income after Statutory Deductions) / Annual Net Income of Self Employed (Income after Tax) for their calculations*.</p>
                            <p><a href="<?php echo site_url('Product_Description'); ?>">
                                    <button type="button" class="btn btn-primary cr">Continue Reading</button>
                                </a></p> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
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

    $("#testform3").simpleform({
        speed: 500,
        transition: 'fade',
        progressBar: false,
        showProgressText: false,
        validate: true
    });

    function validateForm(formID, Obj) {

        switch (formID) {
            		
			case 'testform3' :
                Obj.validate({
					//errorClass: "error-msg",
					//errorElement: "label",
							
							
                    rules: {
                        source_of_income: {
                            required: true,                           
                        },
						
						bank: {
							required: true, 
						},
						
						loan: {
							required: true,	
						}
                    },					
					
					//errorLabelContainer: ".error-msg",					
					
					errorPlacement: function(error, element) {
        
		var e = element;
        
		var n = element.attr("name");
    
		if (n == "source_of_income")
		{
			//element.parents().find('.ns-fixed-height h3').css( { 'background' : 'red' } );
			//var ele = element.parents().find('.ns-fixed-height h3');	
			//var html = '<span class="myspan"></span>' + $(error).text();
			// $(error).html(html).insertAfter(element);
			//errorLabelContainer: ele
			//var ele = $(e).parents().find('.ns-fixed-height h3');
			//var html = '<span class="error-msg"></span>';
			//$(html).insertAfter(ele);
			//var html = '<span class="myspan"></span>' + $(error).text();
			//$(error).html(html).insertAfter(element);
			
			alert("Please Select an option");		
			
		}
		
		else if (n == "bank")
			alert('Please Select an Option');
		else if (n == "loan")
			alert('Please Select an Option');
            
    }  
					
                });
                return Obj.valid();
                break;           
        }
    }

$(document).ready(function() {
	//$('.error-msg').insertAfter('#testform3 .ns-fixed-height h3 span');
		
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
	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$().ready(function() {
		// validate the comment form when it is submitted
		
		jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
}, "Letters only please");
		
	// validate signup form on keyup and submit
		$("#contactform").validate({
			rules: {								
				name: {
					lettersonly:true,
					required: true,                                                                            
										
				},
				
				cnum: {
					required:true,
					minlength:10,
					phoneUS: true,
					maxlength:10
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
    

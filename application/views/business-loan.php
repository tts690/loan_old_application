<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Business Loan', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><img src="<?php echo $staticContent; ?>images/icons/business.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>" style="color:#CCCCCC">Home</a></li> 
                        <li class="active">Business Loans</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="inner-content">
        <div class="container">
            <div class="aniview">
                <div class="row">
                    <div class="col-md-8">
                        <h1><strong>SME Business Loans</strong> </h1>
                        <div class="row">
                            <div class="col-md-12">
                                <p> Small and Medium Enterprise loans are the products which banks offer to the business sectors mainly which are into manufacturing, trading and service providers who have turnover approximately 1 Cr and above consecutively for 3 years. Banks have tailored different products for different needs of companies for their expansion of entity and for purchase of raw materials and production purposes. The products are Working Capitals, Unsecured Business loans, Secured Term Loans, Over Drafts, Cash Credit, Bank Guarantee and Letter of credit.
                                </p>
                                <p>Banks will take collateral security for Term loans, Over Drafts, Cash Credit, bank Gurantee and Letter of Credit. The collateral can be a residential, Commercial or Industrial Property which the company or the directors own. Banks do fund credit to the companies against stocks, work orders and Plant and Machinery. Unsecured loans are funded on the basis of company financials for which no collateral is needed. The funding is purely unsecured and the company will be the primary applicant in repaying the credit raised from the Banks/NBFC’s.
                                </p>
                                <p>Unsecured Business loans are also available for DOCTORS and CA's.</p>
                            </div>
                            <!-- -->
                            <div class="col-md-12">
                                <h3>Interest Rates</h3>
                            </div>
                            <div class="col-md-12 eligibility-list">
                                <div class="">
                                    <ul class="list icons list-unstyled">
                                        <li><i class="icon icon-check"></i>Unsecured Loans : 16% - 18% </li>
                                        <li><i class="icon icon-check"></i>Secured Loans : 12.25% - 14.5%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h6>Proprietorship Firm</h6>
                            </div>
                            <div class="col-md-12 eligibility-list">
                                <div class="">
                                    <ul class="list icons list-unstyled">
                                        <li><i class="icon icon-check"></i> ID Proof (PAN Card / Voter Id / Passport / Driving License)</li>
                                        <li><i class="icon icon-check"></i>Residential Proof (Later Electricity Bill / Telephone Bill)</li>
                                        <li><i class="icon icon-check"></i>PAN Card  </li>
                                        <li><i class="icon icon-check"></i> Office Address Proof </li>
                                        <li><i class="icon icon-check"></i> 3 Years IT Returns duly attested by CA (Including Form 3CB and 3CD)  </li>
                                        <li><i class="icon icon-check"></i>6 months Bank Statement  </li>
                                        <li><i class="icon icon-check"></i>One Photograph  </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-4">
                        <div class="row">
                        <div class="sidebar">
                            <div class="quick-apply">
                                <div class="offers">
                                    <h2><span><marquee>  <?php
                                                $query = "select * from offer order by offer_id DESC limit 1";
                                                $res = $this->db->query($query);
                                                $data = $res->row_array();
                                                echo $data['offer_name'];
                                                ?>
                                    </marquee></span></h2>
                                </div>
                                <h4>Quick Apply</h4>
                                <form class="" id="personalloan-quick-apply" name="" action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="loanamount" id="loanamount" placeholder="Loan Amount"/> 
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Name"/> 
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="companyname" id="companyname" placeholder="Company Name"/> 
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="address" id="address" placeholder="Address with Pincode"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email"/> 
                                    </div>                            
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="contactnumber" id="contactnumber" placeholder="Contact Number"/> 
                                    </div>
                                    <div class="form-group ">
                                        <input type="submit" class="btn btn-primary pull-right" name="apply" value="Apply"/>	
                                    </div>	
                                </form>
                            </div>	
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <h6>Partnership Firm </h6>
                            </div>
                            <div class="col-md-12 eligibility-list">
                                <div class="">
                                    <ul class="list icons list-unstyled">
                                        <li><i class="icon icon-check"></i>ID Proof (PAN Card / Voter Id / Passport / Driving License)  </li>
                                        <li><i class="icon icon-check"></i>Address Proof (Later Electricity Bill / Telephone Bill) </li>
                                        <li><i class="icon icon-check"></i> Company Address Proof (Telephone Bill / C.A/c Bank Statement) </li>
                                        <li><i class="icon icon-check"></i>3 years ID Returns with 3CB and 3CD duly attested by CA. </li>
                                        <li><i class="icon icon-check"></i>Firm Registration  </li>
                                        <li><i class="icon icon-check"></i>Firm Pan Card  </li>
                                        <li><i class="icon icon-check"></i>Latest 6 months bank statement  </li>
                                        <li><i class="icon icon-check"></i>Partnership Deed </li>
                                        <li><i class="icon icon-check"></i> One Photograph of each applicant ID and Residential proofs are mandatory for both partners. </li>
                                    </ul>
                                    <p>Banks reserves the right to ask for Partners ITR’s. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <h6>Pvt Ltd Company </h6>
                            </div>
                            <div class="col-md-12 eligibility-list">
                                <div class="">
                                    <ul class="list icons list-unstyled">
                                        <li><i class="icon icon-check"></i>ID Proofs of all Directors (PAN Card / Voter ID / Passport / Driving License)  </li>
                                        <li><i class="icon icon-check"></i>Residential Proofs of All Directors (Later Electricity Bill / Telephone Bill / Passport)  </li>
                                        <li><i class="icon icon-check"></i>Company Registration  </li>
                                        <li><i class="icon icon-check"></i> Company Address Proof </li>
                                        <li><i class="icon icon-check"></i>Company Pan Card  </li>
                                        <li><i class="icon icon-check"></i>MOA, COA and ROC Return Copies  </li>
                                        <li><i class="icon icon-check"></i>Form 20B  </li>
                                        <li><i class="icon icon-check"></i>Current A/C statement for latest 6 months  </li>
                                        <li><i class="icon icon-check"></i>3 years Directors IT returns / Company Returns duly attested by CA  </li>
                                        <li><i class="icon icon-check"></i>One photograph of each applicant </li>
                                    </ul>
                                    <p>If any loans are there then loan welcome letters are also required and banks reserves the right to ask for loan repayment tracks.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- -->

                    <div class="col-md-12">
                        <hr class="small">
                        <h4>Business Loan Interest Rates</h4>
                        <div class="table-responsive">
                            <table width="100%" cellpadding="5" cellspacing="5" >
                                <tbody>
                                    <tr>
                                        <th align="center" > <center>
                                    <b>Bank</b>
                                </center></th>
                                <th align="center"> <center>
                                    <b>TURN OVER </b>
                                </center></th>
                                <th align="center"> <center>
                                    <b>Profit</b>
                                </center>
                                </th>
                                <th align="center"> <center>
                                    <b>LOAN AMT</b>
                                </center>
                                </th>
                                <th align="center"> <center>
                                    <b>OWN HOUSE / OFFICE </b>
                                </center>
                                </th>
                                <th align="center"> <center>
                                    <b>IRR</b>
                                </center>
                                </th>
                                <th align="center"> <center>
                                    <b>PF </b>
                                </center></th>
                                <th align="center"> <center>
                                    <b>MINIMUM EXP</b>
                                </center></th>
                                <th align="center"> <center>
                                    <b>AGE </b>
                                </center></th>
                                <th align="center"> <center>
                                    <b>INSURANCE </b>
                                </center>
                                </th>                          

                                </tr>
                                <?php
                                $this->db->select('*');
                                $this->db->from('business_loan');
                                $this->db->join('bussiness_loan_bank', 'bussiness_loan_bank.bussiness_loan_bank_id = business_loan.bussiness_loan_bank_id');
                                $query2 = $this->db->get();
                                $data2 = $query2->result_array();
                                ?>
                                <?php foreach ($data2 as $value2) { ?>
                                    <tr>
                                        <td align="center"><strong><?php echo $value2['bank_name']; ?></strong></td>
                                        <td align="center" > <?php echo $value2['turn_over']; ?></td>
                                        <td align="center" ><?php echo $value2['profit']; ?></td>
                                        <td align="center" ><?php echo $value2['loan_amount']; ?></td>
                                        <td align="center" ><?php echo $value2['own_house_office']; ?></td>
                                        <td align="center" ><?php echo $value2['irr']; ?></td>
                                        <td align="center"> <?php echo $value2['pf']; ?></td>
                                        <td align="center" > <?php echo $value2['min_exp']; ?> </td>
                                        <td align="center"> <?php echo $value2['age']; ?> </td>
                                        <td align="center"><?php echo $value2['insurance']; ?></td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
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
                                <li>Business Loans</li>
                                <li>SME Business Loans</li>
                                <li>Small and Medium Enterprise Loans</li>
                                <li>Unsecured Business Loans</li>
                                <li>Secured Business Loans</li>
                                <li>Secured Working Capital Loans</li>   
                                <li>Secured Working Capital Loans</li>
                                <li>Secured Term Loans</li>
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
<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="vendor/magnific-popup/magnific-popup.js"></script>

<script src="js/custom.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>js/additional-methods.js"></script>
<script>
    $.validator.setDefaults({
        submitHandler: function () {
            alert("submitted!");
        }
    });

    $().ready(function () {
        // validate the comment form when it is submitted

        jQuery.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || /^[a-zA-Z]+$/i.test(value);
        }, "Letters only please");

        // validate signup form on keyup and submit
        $("#personalloan-quick-apply").validate({
            rules: {
                name: {
                    lettersonly: true,
                    required: true,
                },
                companyname: {
                    lettersonly: true,
                    required: true,
                },
                address: {
                    required: true,
                },
                loanamount: {
                    required: true,
                },
                contactnumber: {
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
                companyname: "Please enter your company name",
                loanamount: "Please enter your loan amount",
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




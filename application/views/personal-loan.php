<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Personal Loan', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <h1><img src="<?php echo $staticContent; ?>images/icons/personal.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li>                                            
                        <li class="active">Personal Loans</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="inner-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div>   
                        <div class="aniview">
                            <h1><strong>Personal Loans</strong> </h1>    
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Banks offer personal loans to salaried and self-employed individuals to meet their personal needs by considering their regular income or salary and provide without any collateral security. The loan is funded purely on the basis of income that one get from their employer or from their own business. Banks charge interest rate to customer by considering their company profile too. People working with large corporates and MNC's usually charged less with option Nill pre closing charges.</p>
                                </div>
                                <div class="col-md-12">
                                    <h3>Eligibility</h3>

                                </div>
                                <div class="col-md-12 eligibility-list">
                                    <div class="">
                                        <ul class="list icons list-unstyled">
                                            <li><i class="icon icon-check"></i>Applicant age must be min 21 Years</li>
                                            <li><i class="icon icon-check"></i>Must have 2 years of work experience</li>
                                            <li><i class="icon icon-check"></i>Applicant must have a minimum salary of 20,000 / Month</li>
                                            <li><i class="icon icon-check"></i>Applicant must have clear CIBIL records</li>
                                            <li><i class="icon icon-check"></i>Applicant must be working with any company or self employed</li>

                                            <h4>Current Offers:</h4>

                                            <li><i class="icon icon-check"></i>Processing fee 1% for CAT A Companies</li>
                                            <li><i class="icon icon-check"></i>Paybacks upto a maximum of 1% to CAT B & CAT C Companies</li>
                                            <li><i class="icon icon-check"></i>Attractive interest rates for doctors @ 14%</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="quick-apply">
                            <div class="offers">                             
                                <h2>
                                    <span>
                                        <marquee>
                                            <?php
                                            $query = "select * from offer order by offer_id DESC limit 1";
                                            $res = $this->db->query($query);
                                            $data = $res->row_array();
                                            echo $data['offer_name'];
                                            ?>
                                        </marquee>
                                    </span>
                                </h2>
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
                                    <textarea class="form-control" name="address" id="address" placeholder="Address"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email"/> 
                                </div>                            

                                <div class="form-group">
                                    <input type="number" class="form-control" name="contactnumber" id="contactnumber" placeholder="Contact Number"/> 
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary pull-right" name="apply" value="Apply"/>	
                                </div>	
                            </form>
                        </div>	
                    </div>
                </div>

                <!--table strts-->
                <div class="col-md-12">
                    <hr class="small">
                    <h4>Personal Loan Interest Rates</h4>
                    <div class="table-responsive">
                        <table width="100%" cellpadding="5" cellspacing="5" >
                            <tbody>
                                <tr>
                                    <th align="center" > <center>
                                <b>Bank</b>
                            </center></th>
                            <th align="center"> <center>
                                <b>Salary </b>
                            </center></th>
                            <th align="center"> <center>
                                <b>Cat A</b>
                            </center>
                            </th>
                            <th align="center"> <center>
                                <b>CAT B</b>
                            </center>    </th>
                            <th align="center">
                            <center>
                                <b>CAT C</b>
                            </center>
                             </th>
                            <th align="center"> <center>
                                <b>Self Employed</b>
                            </center></th>
                            <th align="center"> <center>
                                <b>Processing Fee</b>
                            </center></th>
                            <th align="center"> <center>
                                <b>Tenure</b>
                            </center></th>
                            <th align="center"> <center>
                                <b>Preclosure Charge</b>
                            </center></th>
                            </tr>
                            <?php
                            $this->db->select('*');
                            $this->db->from('personal_loan');
                            $this->db->join('bank', 'bank.bank_id = personal_loan.bank_id');
                            $query2 = $this->db->get();
                            $data2 = $query2->result_array();
                            foreach ($data2 as $value2) {
                                ?>
                                <tr>
                                    <td align="center" rowspan="4" ><strong><?php echo $value2['bank_name']; ?></strong></td>
                                    <td align="center" ><?php echo $value2['salary1']; ?></td>
                                    <td align="center" > <?php echo $value2['cat_a1']; ?></td>
                                    <td align="center" >  <?php echo $value2['cat_b1']; ?></td>
                                    <td align="center" >  <?php echo $value2['cat_c1']; ?></td>
                                    <td align="center" rowspan="4" > <?php echo $value2['self_employee1']; ?></td>
                                    <td align="center" rowspan="3" ><?php echo $value2['processing_fee1']; ?></td>
                                    <td align="center" rowspan="4" ><?php echo $value2['tenure1']; ?></td>
                                    <td align="center" rowspan="4" ><?php echo $value2['preclosure_charge1']; ?></td>
                                </tr>
                                <tr>
                                    <td align="center" ><?php echo $value2['salary2']; ?></td>
                                    <td align="center" ><?php echo $value2['cat_a2']; ?></td>
                                    <td align="center" ><?php echo $value2['cat_b2']; ?></td>
                                    <td align="center" ><?php echo $value2['cat_c2']; ?></td>
                                </tr>
                                <tr>
                                    <td align="center" ><?php echo $value2['salary3']; ?></td>
                                    <td align="center" ><?php echo $value2['cat_a3']; ?></td>
                                    <td align="center" ><?php echo $value2['cat_b3']; ?></td>
                                    <td align="center" ><?php echo $value2['cat_c3']; ?></td>
                                </tr>
                                <tr class="border-dark">
                                    <td align="center" ><?php echo $value2['salary4']; ?></td>
                                    <td align="center" ><?php echo $value2['cat_a4']; ?></td>
                                    <td align="center" ><?php echo $value2['cat_b4']; ?></td>
                                    <td align="center" ><?php echo $value2['cat_c4']; ?></td>
                                    <td align="center" ><?php echo $value2['processing_fee2']; ?></td>
                                </tr>
        <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    
                    <ul class="list icons list-unstyled">
                        <li><i class="icon icon-check"></i>The Interest rates stated above may vary and request you to apply to us to get exact rate of interest depending on your income and the company that you work in.</li>
                        <li><i class="icon icon-check"></i>Companies category may vary from bank to bank</li>
                        <li><i class="icon icon-check"></i>Processing fee and fore closure offers change from time to time</li>
                    </ul>
                    <hr class="small">
                </div>
                <div class="col-md-12">
                    <h3>Personal Loan Required Documents</h3>

                </div>
                <div class="col-md-6">
                    <h4>Salaried</h4>
                    <ul class="list icons list-unstyled">
                        <li><i class="icon icon-check"></i>ID Proof(PAN Card/Passport/Aadhar/Voter ID/Driving License)</li>
                        <li><i class="icon icon-check"></i>Address Proof(Aadhar/Passport/Driving License/Lease Agreement)</li>
                        <li><i class="icon icon-check"></i>3 Months payslips</li>
                        <li><i class="icon icon-check"></i>6 Months banks statement</li>
                        <li><i class="icon icon-check"></i>Form 16 - 2 Years</li>
                        <li><i class="icon icon-check"></i>One colour passport size photograph</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4>Self Employed</h4>
                    <ul class="list icons list-unstyled">
                        <li><i class="icon icon-check"></i>ID Proof(PAN Card/Passport/Aadhar/Voter ID/Driving License)</li>
                        <li><i class="icon icon-check"></i>Address Proof(Aadhar/Passport/Driving License/Lease Agreement)</li>
                        <li><i class="icon icon-check"></i>3 years IT returns</li>
                        <li><i class="icon icon-check"></i>6 Months banks statement</li>
                        <li><i class="icon icon-check"></i>One colour passport size photograph</li>
                        <li><i class="icon icon-check"></i>Company registration certificate</li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <hr class="small">
                    <h4>Terms and Conditions</h4>
                    <ul class="list icons list-unstyled">
                        <li><i class="icon icon-check"></i>Banks consider regular income that was declared in Payslips and Income Tax returns</li>
                        <li><i class="icon icon-check"></i>Rate of interest is subject to monthly net income and company working in</li>
                        <li><i class="icon icon-check"></i>Banks fund loan to a maximum of 12 to 18 times of net salary recieved monthly</li>
                        <li><i class="icon icon-check"></i>Processing fee is deducted from the loan amount before disbursement</li>
                        <li><i class="icon icon-check"></i>Banks may ask for guarantors if needed depending on customer profile</li>
                    </ul>
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
                            <h4>Personal Loans</h4>
                            <ul>
                                <li>Personal Loans</li>
                                <li>Personal Loan Documents</li>
                                <li>Personal Loan Interest Rates</li>
                                <li>Personal Loan EMI Calculators</li>
                                <li>Personal Loans in India</li>
                                <li>Best Personal Loans</li>                                
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

<!-- Libs -->
<?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>
<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="vendor/magnific-popup/magnific-popup.js"></script>

<script src="js/custom.js"></script>
<!--script src="<?php echo $staticContent; ?>js/jquery.aniview.min.js"></script-->
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
                companyname:{
                     lettersonly: true,
                    required: true,
                },
                address:{
                     required: true,
                },
                 loanamount:{
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


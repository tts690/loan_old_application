<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Home Loan Product Details Terms Conditions – Myloandetails.com', 'cssFiles' => array())); ?>
<meta name="description" content="Get the product specific details, terms and conditions, legal and technical conditions of banks here by just selecting your desired product in simple and easy steps">
<meta name="keywords" content="Home Loan Product Details, Home Loan Details, Plot Loan, New Purchase, Resale Purchase, Mortgage Loan, Home Loan Balance Transfer, Resale Purchase Vendor Liability, Plot + Construction Loan">

<?php $staticContent = base_url(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $staticContent; ?>css/simpleform.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $staticContent; ?>css/newbootstrap-newstaggered.css"/>
<?php $staticContent = base_url(); ?>

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
        <?php
        if ($data) {
            foreach ($data as $value) {
                ?>
                <fieldset class="message-details">
                    <div class=" news-tagger-container">
                        <div class="row-fluid">
                            <div class="container">
                                <div class="col-md-8">
                                    <div class="emi-header">
                                        <h1>Products Description</h1>
                                        <div class="row">
                                            <ul class="social-icons">                         
                                                <li><a onclick="return fb();" target="_blank"><i class="fa fa-facebook" aria-hidden="true" id="facebook"></i></a></li>                          
                                                <li><a onclick="return twitter();"><i class="fa fa-twitter" aria-hidden="true" id="twitter"></i></a></li>
                                            </ul>
                                            <!--path-->
                                            <?php
                                            foreach ($data as $value_result) {
                                                
                                            }

                                            if ($value_result->income_source_id == "R") {
                                                echo "Residence Salried";
                                            } else if ($value_result->income_source_id == "S") {
                                                echo "Residence Self-Employed";
                                            } else {
                                                echo "NRI Salried";
                                            }
                                            echo " -> ";

                                            if ($value_result->sr_bank_id == 1) {
                                                echo "Gross Income";
                                            } else {
                                                echo "Net Income";
                                            }

                                            echo " -> ";

                                            $this->db->select('LoanName');
                                            $this->db->from('sr_loan');
                                            $this->db->where('id', $value_result->sr_loan_id);
                                            $query = $this->db->get();
                                            $datas = $query->result();
                                            echo $datas[0]->LoanName;
                                            ?>
                                            <!--path-->


                                        </div>
                                    </div>
                                    <div class="product-form">
                                        <form>
                                            <div class="dvalue table-responsive" id="print">

                                                <table class="table-striped">
                                                    <thead>                                                           
                                                    <th>Documents</th>
                                                    <th>Description</th>                                                         
                                                    </thead> 
                                                    <tbody>
                                                        <!--row-->
                                                        <tr>
                                                            <td> Rate of Interest   </td>
                                                            <td><?php echo $value->res_min_interest; ?>% To <?php echo $value->res_max_interest; ?>% </td>
                                                        </tr>
                                                        <!--row-->
                                                        <tr>                                        
                                                            <td> Maximum Tenure   </td>
                                                            <td><?php echo $value->res_max_tenure; ?> </td>
                                                        </tr>
                                                        <!--row-->
                                                        <tr> 
                                                            <td> Processing fee   </td>
                                                            <td><?php echo $value->adminprocessingfee; ?></td>
                                                        </tr>
                                                        <!--row-->
                                                        <!--row-->
                                                        <tr> 
                                                            <td> Description   </td>
                                                            <td><?php echo $value->description; ?> </td>
                                                        </tr>
                                                        <!--row-->
                                                        <!--row-->
                                                        <tr> 
                                                            <td>Sanction Condition   </td>
                                                            <td><?php echo $value->sanction_conditions; ?> </td>
                                                        </tr>
                                                        <!--row-->
                                                        <!--row-->
                                                        <tr> 
                                                            <td> Legal and Technical Conditions  </td>
                                                            <td><?php echo $value->legal_technical; ?></td>
                                                        </tr>
                                                        <!--row-->
                                                        <!--row-->
                                                        <tr> 
                                                            <td> Disbursement Conditions  </td>
                                                            <td><?php echo $value->disbursement; ?></td>
                                                        </tr>
                                                        <!--row-->
                                                        <!--row-->
                                                        <tr> 
                                                            <td> Legal and Technical Conditions </td>
                                                            <td><?php echo $value->legal_technical; ?></td>
                                                        </tr>
                                                        <!--row-->
                                                        <!--row-->
                                                        <tr> 
                                                            <td>Pre Closure Conditions  </td>
                                                            <td><?php echo $value->pre_closure; ?></td>
                                                        </tr>
                                                        <!--row-->
                                                    </tbody>
                                                </table>                                            
                                            </div>
                                            <br/>
                                            <input type="submit" value="Print" onClick="printdiv('print');" class="btn btn-primary pull-right" data-loading-text="Loading...">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
            <?php } ?>
        <?php } ?>
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
<script language="javascript">
    function printdiv(printpage)
    {
        var headstr = "<html><head><title></title></head><body>";
        var footstr = "</body>";
        var newstr = document.all.item(printpage).innerHTML;
        var oldstr = document.body.innerHTML;
        document.body.innerHTML = headstr + newstr + footstr;
        window.print();
        document.body.innerHTML = oldstr;
        return false;
    }
</script>

<script>
    function fb() {
        window.open('https://www.facebook.com/sharer/sharer.php?u=http://demo.myloandetails.com/home-loan-products-details-terms-conditions?[title]=Products', '_blank');

    }
    function twitter() {
        window.open('http://twitter.com/intent/tweet?status=http://demo.myloandetails.com/home-loan-products-details-terms-conditions?[title]=Products', '_blank');
    }
</script>
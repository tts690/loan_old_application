<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Salaried Home Loan Eligibility Calculator – Myloandetails.com', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>
<link rel="stylesheet" href="<?php echo $staticContent; ?>css/jquery_ui.css">
<meta name="description" content="Calculate your home loan eligibility before applying for a loan with bank and financial institutions and be confirmed of your eligibility that you will get from any institution and be aware of the EMI and interest components">
<meta name="keywords" content="home loan eligibility calculator, housing loan eligibility calculator, home loan eligibility calculator India, loan eligibility calculator, mortgage calculator">

<!--piechart-->
<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];</script>
<!--/piechart-->

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><img src="<?php echo $staticContent; ?>images/icons/residence_calculator.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>" style="color:#CCCCCC">Home</a></li> 
                        <li class="active">Residence Salaried Home Loan Eligibility Calculator </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="inner-content">
        <div class="container">           
            <div class="col-md-8">
                <div class="form-style-3">
                    <form action="javascript:alert('submitted');" method="POST">
                        <fieldset><legend>Residence Salaried Home Loan Eligibility Calculator </legend>
                            <input type="hidden" name="max_tenure_residence" value=""/>
                            <input type="hidden" name="max_tenure_residence" value=""/>
                            <input type="hidden" name="max_tenure_residence" id="max_tenure_residence" value=""/>
                            <input type="hidden" id="calc_type" name="calc_type" value="R" />
                            <input type="hidden" name="income_source" value=""/>

                            <label for="field1"><span>Bank <span class="required"></span></span>
                                <select class="form-control" name="selected_bank" id="selected_bank">
                                    <option>Select Bank</option>
                                    <option value="1">Banks Considering Gross Income</option>
                                    <option value="2">Banks Considering Net Income</option>
                                </select>
                            </label>
                            <label for="field2">
                                <span>Loan <span class="required"></span></span>
                                <select class="form-control" name="selected_loan[]" id="selected_loan">
                                    <option>Select Loan</option>
                                </select>
                            </label>
                            <label for="field3">
                                <span> Interest Rate <span class="required"></span></span>
                                <select name="roi" class="select-field" id="interest_rate">
                                </select>
                            </label>
                            <label for="field4">
                                <span>Date of Birth <span class="required"></span></span>
                                <input type="text" class="input-field"  id="datepicker" value="<?php echo (isset($userdata[0]->dob)) ? $userdata[0]->dob : ''; ?>" name="dob"/></label>
                            <label for="field1">
                                <span>Age in Year <span class="required"></span></span>
                                <input type="text" class="input-field" name="age" id="proper_age" readonly="readonly" />
                            </label>
                            <label for="field1">
                                <span>Tenure(Years) <span class="required"></span></span>
                                <select name="tenure" class="select-field" id="tenure">
                                </select>
                            </label>
                            <label for="field1">
                                <span>Any Liabilities <span class="required"></span></span>
                                <select name="liabilities" class="select-field" id="liabalities">
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </label>
                            <label for="field1">
                                <span>If Yes Amount <span class="required"></span></span>
                                <input type="text" class="input-field" name="LiabilitiesAmt" value="" id="LiabilitiesAmt"/>
                            </label>
                            <label for="field1">
                                <span>Monthly Gross Pay <span class="required"></span></span>
                                <input type="text" class="input-field" name="monthly_gross_pay" id="monthly_gross_pay"/>
                            </label>
                            <label for="field10">
                                <span>Annual Income <span class="required"></span></span>
                                <input type="text" class="input-field" name="annual_variable_income" id="annual_variable_income" />
                            </label>
                            <label for="field10" id="pfrow">
                                <span>PF</span>
                                <input type="text" name="pf" id="pf" />
                            </label>
                            <label for="field10" id="ptrow">
                                <span>PT</span>
                                <input type="text" id="pt" name="pt" />
                            </label>

                            <label for="field1">
                                <span id="hide">&nbsp; <span class="required"></span></span>
                                <input type="submit" value="Calculate Eligibiliy" id="submitButton" class="btn btn-primary cr"/>
                                <input type="button" value="Reset" class="btn btn-primary cr" />
                            </label>
                        </fieldset>                     
                    </form>

                    <!--div class="form-style-3">
                        <fieldset>
                            <h4>Eligibility : <?php echo $result['home_loan_eligibility'] . "* Lakhs"; ?></h4>
                            <h4>EMI / Month  : <?php echo $result['emi_per_month']; ?></h4>
                            <h4>EMI / Lakh : <?php echo $result['emi_per_lac']; ?></h4>
                        </fieldset>
                    </div-->
                </div>
            </div>
            <div class="col-md-4">
                <aside class="sidechart">
                    <div id='myChart'></div>
                    <div class="row">
                        <div class="col-md-5 col-sm-3" id="sam">&nbsp;Eligibility</div>
                        <div class="col-md-7"> 
                            <input type="text" name="eligibility" id="home_loan_eligibility" readonly/>*Lakhs
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-3" id="rsam">&nbsp;EMI /Month</div>
                        <div class="col-md-7">
                            <input type="text" name="emi_per_month" id="emi_per_month" readonly/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-3" id="gsam">&nbsp;EMI / Lakh</div>
                        <div class="col-md-7">
                            <input type="text" name="emi_per_lac" id="emi_per_lac" readonly/>
                        </div>
                    </div>
                </aside>
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
                                <li>Home Loan Eligibility Calculator</li>
                                <li>Housing Loan Eligibility Calculator</li>
                                <li>Home Loan Calculator</li>
                                <li>Housing Loan Calculator</li>
                                <li>NRI Home Loan Eligibility Calculator</li>
                                <li>NRI Housing Loan Eligibility Calculator</li>
                                <li>Self Employed Home Loan Eligibility Calculator</li>
                                <li>Self Employed Housing Loan Eligibility Calculator</li>
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

<script src="<?php echo $staticContent; ?>vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="<?php echo $staticContent; ?>vendor/magnific-popup/magnific-popup.js"></script>

<!--- Ajax form data sending -->
<script>
    $(document).ready(function () {
        $('#submitButton').click(function () {
            var calc_type = $('#calc_type').val();
            var selected_bank = $('#selected_bank').val();
            var tenure = $('#tenure').val();
            var roi = $('#interest_rate').val();
            var liabalities = $('#liabalities').val();
            var LiabilitiesAmt = $('#LiabilitiesAmt').val();
            var monthly_gross_pay = $('#monthly_gross_pay').val();
            var pf = $('#pf').val();
            var pt = $('#pt').val();            
            
               $.ajax({
                url: siteurl + 'Home_Loan_Eligibility_Calculator_Residence/calc_resident_salaried_eligibility',
                type: 'POST',
                dataType: 'json',
                data: {'calc_type': calc_type, 'selected_bank': selected_bank,'tenure': tenure,'roi': roi,'liabalities': liabalities,'LiabilitiesAmt': LiabilitiesAmt,'monthly_gross_pay': monthly_gross_pay,'pf': pf,'pt':pt},
                success: function (results) {
                    var home_loan_eligibility = results['home_loan_eligibility'];                    
                    var emi_per_month = results['emi_per_month']; 
                    var emi_per_lac = results['emi_per_lac']; 
                    
                    $("#home_loan_eligibility").val(home_loan_eligibility);
                    $("#emi_per_month").val(emi_per_month);
                    $("#emi_per_lac").val(emi_per_lac);

                },
                error: function () {
                    alert("Fail")
                }
            });
        });
    });
</script>



<script>

    $(document).ready(function () {
        var eligibility = $('#home_loan_eligibility').val();
        var emi_per_month = $('#emi_per_month').val();
        var emi_per_lac = $('#emi_per_lac').val();

        var myConfig = {
            "type": "pie",
            "title": {
                "text": "Pie Chart"
            },
            "series": [
                {"values": [eligibility]},
                {"values": [emi_per_month]},
                {"values": [emi_per_lac]}
            ]
        };

        zingchart.render({
            id: 'myChart',
            data: myConfig,
            height: 400,
            width: "100%"
        });
    });

</script>
<script>
    $(document).ready(function () {
        jQuery('#pfrow').hide();
        jQuery('#ptrow').hide();
        $('#selected_bank').change(function () {
            if (jQuery('#selected_bank').val() == 2)
            {
                jQuery('#pfrow').show();
                jQuery('#ptrow').show();
            }
            else
            {
                jQuery('#pfrow').hide();
                jQuery('#ptrow').hide();
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#selected_loan').change(function () {
            var selected_loan = $('#selected_loan').val();
            var selected_bank = $('#selected_bank').val();

            $.ajax({
                url: siteurl + 'Home_Loan_Eligibility_Calculator_Residence/interest_tenure',
                type: 'POST',
                dataType: 'json',
                data: {'selected_loan': selected_loan, 'selected_bank': selected_bank},
                success: function (results) {
                    var res_min_interest = results['result']['res_min_interest'];
                    var res_max_interest = results['result']['res_max_interest'];
                    var res_max_tenure = results['result']['res_max_tenure'];

                    $('#interest_rate')
                            .empty()
                            .append('<option selected="selected" value="0">Select</option>');

                    $("#max_tenure_residence").val(res_max_tenure);
                    var opt = $("#interest_rate");
                    var i = parseFloat(res_max_interest);
                    while (i > parseFloat(res_min_interest)) {
                        i = i - 0.05;
                        var eachres = "<option value='" + i.toFixed(2) + "'>" + i.toFixed(2) + "%</option>";
                        $('#interest_rate').append(eachres);

                    }
                },
                error: function () {
                    alert("Fail")
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#selected_bank').change(function () {
            var selected_bank = $('#selected_bank').val();
            $.ajax({
                url: siteurl + 'Home_Loan_Eligibility_Calculator_Residence/selecting_bank',
                type: 'POST',
                dataType: 'json',
                data: {'selected_bank': selected_bank},
                success: function (result) {

                    $('#selected_loan')
                            .empty()
                            .append('<option selected="selected" value="0">Select</option>');

                    $.each(result, function (resindex, resitem) {
                        var resi;
                        var rescars = [resitem];
                        var mySelect = $('#selected_loan');

                        for (resi = 0; resi < rescars.length; resi++) {
                            var eachres = "<option value='" + rescars[resi]['id'] + "'>" + rescars[resi]['LoanName'] + "</option>";
                            $('#selected_loan').append(eachres);
                        }
                    });
                },
                error: function () {
                    alert("Fail")
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#datepicker').change(function () {
            var date_birth = $('#datepicker').val();
            var max_tenure_residence = $('#max_tenure_residence').val();
            $.ajax({
                url: siteurl + 'Home_Loan_Eligibility_Calculator_Residence/ageCalculator',
                type: 'POST',
                dataType: 'json',
                data: {'date_birth': date_birth, 'max_tenure_residence': max_tenure_residence},
                success: function (results) {
                    //  alert(result);
                    // results['result']['nri_max_tenure'];

                    $('#tenure')
                            .empty()
                            .append('<option selected="selected" value="0">Select</option>');

                    $('#proper_age').val(results['age']);
                    var t = results['tenure'];
                    for (i = parseInt(t); i >= 1; i--) {
                        var eachres = "<option value='" + i + "'>" + i + "</option>";
                        $('#tenure').append(eachres);
                    }
                },
                error: function () {
                    alert("Fail")
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#amt').val("0");
        $('#liabalities').change(function () {
            var liabalities = $('#liabalities').val();
            if (liabalities == "Yes") {
                var amting = $('#amt').val(" ");
                $('#amt').append(amting);
                alert("1) " + "Please add all your EMI`s and enter one single amount." + " \n" +
                        "2) " + "Loans with pending Repayment more than 12 months only to be entered." + " \n" +
                        "3)" + " Loans which you pre close to avail this loan need not to be entered."
                        );
            } else {
                var amting = $('#amt').val("0");
                $('#amt').append(amting);
            }
        });
    });
</script>
<script>
    $(function () {
        $(".datepicker").datepicker();
    });
</script>





<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#demo').hide();
        $('.vticker').easyTicker();
    });
</script>
<script src="js/custom.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
<script>
    $(function () {
        $("#datepicker").datepicker(
                {
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "-65:-10",
                });
    });
</script>

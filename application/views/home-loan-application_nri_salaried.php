<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'NRI Home Loan Application Online – Myloandetails.com', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>
 <link rel="stylesheet" href="<?php echo $staticContent; ?>css/jquery_ui.css">

<meta name="description" content="Home Loan at lease and best possible interest rates with hassle free repayment options for minimum 1 year to maximum 15 years are available. Fill the form to avail">
<meta name="keywords" content="NRI Home Loan Application, NRI Housing Loan Application,NRI loan application,NRI loan offers,NRI home loan offers,NRI Home Loan offers">

<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><img src="<?php echo $staticContent; ?>images/icons/application_residence.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                        <li class="active">NRI Salaried Home Loan Application Form</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>
    <div class="inner-content">
        <div class="container">
            <div class="row">
                <!--Bug Alerts--->
                <?php if (!empty($error)) { ?>
                    <div class="alert alert-success" id="success-alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong><?php echo $error; ?> </strong>
                    </div>
                <?php } ?>   
                <!---End of Alert-->
                <div class="col-md-8">
                    <div class="form-style-10">
                        <h1>NRI Salaried Home Loan Application Form</h1>
                        <form id="applyform" name="contact" action="<?php echo site_url('Home_Loan_Application_NRI'); ?>" method="POST">

                            <?php
//                            $this->db->select('*');
//                            $this->db->from('sr_state');
//                            $query = $this->db->get();
//                            $data = $query->result();
                            ?>

                            <!--design-->
                            <!--div class="section"><span>1</span>First Name &amp; Address</div>
                            <div class="inner-wrap">
                                <label> <select id="selecting_state_id" name="sr_state_id">
                                        <option>Select State</option>
                            <?php //foreach ($data as $value) { ?>                                            
                                            <option value="<?php //echo $value->sr_state_id;   ?>"><?php echo $value->state_name; ?></option>
                            <?php //} ?>
                                    </select>
                                    </label>
                                <label>  <select class="form-control" name="cities_of_state_id[]" id="selected_state">
                                        <option>Select City</option>
                                    </select>
                                </label>
                                <label> <select class="form-control" name="sr_bank_id" id="selected_bank">
                                        <option>Select Bank</option>
                                        <option value="1">Banks Considering Gross Income</option>
                                        <option value="2">Banks Considering Net Income</option>
                                    </select>
                                </label-->
                            <div class="section"><span>1</span>Loan Details</div>
                            <div class="inner-wrap">    
                                <label for="field4"><span></span>
                                    <select class="form-control" name="state_id" id="state_id">
                                        <option>Select State</option>
                                        <?php
                                        $this->db->select('*');
                                        $this->db->from('sr_state');
                                        $query = $this->db->get();
                                        $data = $query->result();
                                        foreach ($data as $value) {
                                            ?>
                                            <option name="state_id" value="<?php echo $value->sr_state_id; ?>"><?php echo $value->state_name ?></option>
                                        <?php } ?>
                                    </select>
                                </label>
                                <label for="field1"><span> <span class="required"></span></span>
                                    <select class="form-control" name="selected_city[]" id="selected_city">
                                        <option>Select City</option>
                                    </select>
                                </label>
                                <label for="field1"><span> <span class="required"></span></span>
                                    <select class="form-control" name="selected_bank[]" id="selected_bank">
                                        <option>Select Bank</option>
                                    </select>
                                </label>

                                <label>  <select class="form-control" name="sr_loan_id[]" id="selected_loan">
                                        <option>Select Loan</option>
                                    </select>
                                </label>
                                <label>  <input type="text" name="loan_amount" placeholder="Loan Amount" class="form-control" /></label>

                            </div>
                            <!-- -->
                            <div class="section"><span>2</span>NRI Contact Details</div>
                            <div class="inner-wrap">
                                <label> 
                                    <select name="a_title" class="form-control">
                                        <option>Select Title</option>
                                        <option selected="selected" value="Mr.">Mr.</option>
                                        <option  value="Mrs.">Mrs.</option>
                                        <option  value="Ms.">Ms.</option>
                                    </select>
                                </label>
                                <label> <input type="text" name="a_name" placeholder="Name" class="form-control"/></label>
                                <label><input type="text" name="a_mob" id="num" class="form-control" placeholder="Your Contact No"/> </label>
                                <label><input type="email" name="a_email" id="email" class="form-control" placeholder="Your Email ID" required/>
                                </label>
                                <label>  <input type="text" name="a_city" class="form-control" placeholder="Your City" required/></label>
                                <label>  <input type="text" name="a_country" class="form-control" placeholder="Your Country" required/></label>
                            </div>
                            <!-- -->
                            <div class="section"><span>3</span>Local Contact Details</div>
                            <div class="inner-wrap">
                                <label> <input type="text" name="local_contact_name" class="form-control" placeholder="Local Contact Name"></label>
                                <label> <textarea name="a_permanent_address" class="form-control" placeholder="Address"></textarea></label>
                                <label>  <input type="text" name="a_res_land" value="" placeholder="Residence No." class="form-control"></label>
                                <label> <input type="text" name="a_mob" class="form-control" placeholder="Mobile No "></label>
                                <label>  <input type="text" class="datepicker form-control" value="" name="a_dob" placeholder="DOB"/> </label>
                                <label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="a_time" class="form-control" placeholder="Preferred Time of Contact">
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control" name="a_timmings">
                                                <option value="am">AM</option>
                                                <option value="pm">PM</option>                                    
                                            </select>
                                        </div>
                                    </div>
                                </label>
                                <div class="row">                                
                                    <div class="col-md-8">
                                        <input type="checkbox" name="check" id="b_1" value="Apply" class="styled"> <label class="styled" for="b_1">I have read and accept the <a href="<?php echo site_url('PrivacyPolicy'); ?>"> Privacy Policy</a> </label>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="submit" name="submit" value="Apply" class="btn btn-primary cr">
                                        <input type="reset" name="reset" value="Reset" class="btn btn-primary cr"> 
                                    </div>
                                </div>
                            </div>
                            <!-- -->
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <aside class="sidebar">
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!--new content-->
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
                                <li>Home Loans Application</li>
                                <li>Housing Loans Application</li>
                                <li>Home Loan For Flat Purchase</li>
                                <li>Plot Purchase Loan</li>
                                <li>Home Loan Balance Transfer</li>
                                <li>Seller Home Loan Balance Transfer</li>     
                                <li>Composite Loans</li>
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
<!-- footer -->
<?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>

<script src="<?php echo $staticContent; ?>vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="<?php echo $staticContent; ?>vendor/magnific-popup/magnific-popup.js"></script>

<script type="text/javascript" src="<?php echo $staticContent; ?>js/jquery.easy-ticker.js"></script>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>


<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>-->

<!--script>
    $(document).ready(function () {
        $('#selecting_state_id').change(function () {
            var selecting_state_id = $('#selecting_state_id').val();
            $.ajax({
                url: siteurl + 'employee/Login/selecting_state',
                type: 'POST',
                dataType: 'json',
                data: {'selecting_state_id': selecting_state_id},
                success: function (result) {
                    
                    $('#selected_state')
                    .empty()
                    .append('<option selected="selected" value="0">Select</option>');
                    
                    $.each(result, function (resindex, resitem) {
                        console.log(resindex);
                        var resi;
                        var rescars = [resitem];
                        var mySelect = $('#selected_state');

                        for (resi = 0; resi < rescars.length; resi++) {
                            var eachres = "<option value='" + rescars[resi]['cities_of_state_id'] + "'>" + rescars[resi]['city_name'] + "</option>";
                            $('#selected_state').append(eachres);
                        }
                    });
                },
                error: function () {
                    alert("Fail")
                }
            });
        });
    });
</script-->
<script>
    $(document).ready(function () {
        $('#state_id').change(function () {
            var selected_state = $('#state_id').val();
            $.ajax({
                url: siteurl + 'Dsa_Login/Get_State_City',
                type: 'POST',
                dataType: 'json',
                data: {'selected_state': selected_state},
                success: function (result) {

                    $('#selected_bank')
                            .empty()
                            .append('<option selected="selected" value="0">Select</option>');

                    $('#selected_city')
                            .empty()
                            .append('<option selected="selected" value="0">Select</option>');

                    $.each(result, function (resindex, resitem) {
                        $.each(this, function (resitem, cities_name) {
                            var resi;
                            var rescars = [cities_name];

                            var mySelect = $('#selected_city');

                            for (resi = 0; resi < rescars.length; resi++) {
                                if (rescars[resi]['city_name']) {
                                    var eachcity = "<option value='" + rescars[resi]['sr_state_id'] + "'>" + rescars[resi]['city_name'] + "</option>";
                                    $('#selected_city').append(eachcity);
                                }

                                if (rescars[resi]['income_source_id']) {

                                    var eachbank = "<option value='" + rescars[resi]['income_source_id'] + "'>" + rescars[resi]['income_source_name'] + "</option>";

                                    $('#selected_bank').append(eachbank);
                                }


                            }
                        });
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
        $('#selected_value').change(function () {
            var document_value_result = $(this).val();
            $.ajax({
                url: siteurl + 'admin/manage_documents/Document_Controlling_System/document_control_system',
                type: 'POST',
                dataType: 'json',
                data: {'income_source_value': document_value_result},
                success: function (value) {


                    $('#mytable')
                            .empty()
                            .append('<option selected="selected" value="0">Select</option>');


                    $.each(value, function (index, item) {
                        var i;
                        var cars = [item];

                        $(function () {

                            // add multiple select / deselect functionality
                            $("#selectall").click(function () {
                                $('.id').attr('checked', this.checked);
                            });

                            // if all checkbox are selected, check the selectall checkbox
                            // and viceversa
                            $(".id").click(function () {

                                if ($(".id").length == $(".id:checked").length) {
                                    $("#selectall").attr("checked", "checked");
                                } else {
                                    $("#selectall").removeAttr("checked");
                                }

                            });
                        });


                        for (i = 0; i < cars.length; i++) {
                            var eachrow = "<tr>"
                                    + '<td><input type="checkbox" class="id" name="selectall[]" value="' + cars[i]['id'] + '"/></td>'
                                    + "<td>" + cars[i]['doc_code'] + "</td>"
                                    + "<td>" + cars[i]['doc_name'] + "</td>"
                                    + "</tr>";
                            $('#mytable').append(eachrow);
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
        $('#selected_value').change(function () {
            $('#mytable').empty();
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('#selected_bank').change(function () {
            var selected_bank = $(this).val();
            $.ajax({
                url: siteurl + 'Home_Loan_Application_NRI/selecting_bank',
                type: 'POST',
                dataType: 'json',
                data: {'selected_bank': selected_bank},
                success: function (result) {

                    $('#selected_loan')
                            .empty()
                            .append('<option selected="selected" value="0">Select</option>');

                    $.each(result, function (resindex, resitem) {
                        console.log(resindex);
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
        $('#selected_loan').change(function () {
            var selected_income = $('#selected_value').val();
            var selected_bank = $('#selected_bank').val();
            var selected_loan = $('#selected_loan').val();

            $.ajax({
                url: siteurl + 'Home_Loan_Application_NRI/document_check',
                type: 'POST',
                dataType: 'json',
                data: {'selected_loan': selected_loan, 'selected_bank': selected_bank, 'selected_income': selected_income},
                success: function (result) {


                    $.each(result, function (index, item) {
                        var i;
                        var cars = [item];
                        for (i = 0; i < cars.length; i++) {

                            $("input:checkbox").each(function () {
                                var c = $(this).val();
                                if (c == cars[i]['document_id'])
                                {
                                    $(this).attr('checked', true);
                                }

                            });

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
    $('#property').click(function () {
        if ($(this).is(":checked")) {
            $("#propertydetails").hide();
            $("#propertydetail").hide();
        } else {
            $("#propertydetails").show();
            $("#propertydetail").show();
        }
    });
</script>
<script>
    $(function () {
        $(".datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-65:-10",
        });
        
    });
</script>

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

<script>
    $(window).scroll(function () {
        var navTop = $(window).scrollTop();
        $('.model-0').css("top", navTop + 50);
    });
</script>
<!--validation-->
<script type="text/javascript" src="<?php echo $staticContent; ?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>js/additional-methods.js"></script>
<script>
    $().ready(function () {
        // validate the comment form when it is submitted
        jQuery.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || /^[a-zA-Z _]+$/i.test(value);
        }, "Letters only please");

        // validate signup form on keyup and submit
        $("#applyform").validate({
            rules: {
                a_name: {
                    lettersonly: true,
                    required: true,
                },
                a_mob: {
                    required: true,
                    minlength: 10,
                    phoneUS: true,
                    maxlength: 10
                },
                a_email: {
                    required: true,
                    email: true
                },
                a_city: {
                    lettersonly: true,
                    required: true,
                },
                address: {
                    required: "true"
                },
                agree: "required"
            },
            messages: {
                a_name: "Please enter your name",
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
</script>
<script>

    $(document).ready(function () {
        $('.radio-option').click(function () {
            $(this).not(this).removeClass('click');
            $(this).toggleClass("click");
        });
    });
</script>
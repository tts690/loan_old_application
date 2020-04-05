<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Home Loan Application nri', 'cssFiles' => array())); ?>
<meta name="description" content="Apply here for best deals in the market for your home loan." />

<meta name="keywords" content="home loan interest rates,home loan rates,icici home loan rates,idbi,ing vysya,sbi home loan rates,sbi home loan details,banks rates,housing loan rates,mortgage rates,mortgage loan rates" />
<meta name="robot" content="index,follow"/>
<meta name="copyright" content="Copyright Â© 2014 Myloandetails.com. All Rights Reserved."/>
<meta name="author" content="Myloandetails."/>
<meta name="generator" content="www.myloandetails.com"/>
<meta http-equiv="Content-Language" content="en-US"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="expires" content="never"/>
<link rel="canonical" href="#"/>
<meta name="revisit-after" content="7 days"/>

<!-- Open Graph -->
<meta property="og:title" content="Myloandetails.com - Home and Mortgage Loan Application "/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="#"/>
<link rel="image_src" href="http://www.myloandetails.com/images001/logowithtitle.gif"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<meta property="og:image" content="http://www.myloandetails.com/images001/logowithtitle.gif"/>
<meta property="og:site_name" content="Myloandetails.com"/>
<meta property="og:description" content="Avail best home loan products from major banks of India with just a simple home loan application form here. Get updates and offers of banks from highly experienced executive of all banks instantly."/>
<!-- End of Open Graph -->


<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><img src="<?php echo $staticContent; ?>images/icons/application_residence.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                        <li class="active"> Resident Indian Home Loan Application</li>
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
                        <h1>Home Loan Application NRI Salaried</h1>
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
                                            <option value="<?php //echo $value->sr_state_id;  ?>"><?php echo $value->state_name; ?></option>
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
                            <div class="section"><span>1</span>First Name &amp; Address</div>
                                <?php  
                                        $generated_id = $_GET['id']; 
                                        $this->db->select('*');
                                        $this->db->from('generate_file');
                                        $this->db->where('generate_file_id',$generated_id);
                                        $query = $this->db->get();
                                        $generated_data = $query->result();
                                ?>
                            <div class="inner-wrap">    
                                <label for="field4"><span></span>
                                    <select class="form-control" name="state_id" id="state_id">
                                        <option>Select</option>
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
                                
                                <input type="hidden" name="generate_file_id" value="<?php echo $generated_data[0]->generate_file_id;?>"/>
                                
                                <label for="field1"><span> <span class="required"></span></span>
                                    <select class="form-control" name="selected_city[]" id="selected_city">
                                        <option>Select</option>
                                    </select>
                                </label>
                                <label for="field1"><span> <span class="required"></span></span>
                                    <select class="form-control" name="selected_bank[]" id="selected_bank">
                                        <option>Select</option>
                                    </select>
                                </label>

                                <label>  <select class="form-control" name="sr_loan_id[]" id="selected_loan">
                                        <option>Select Loan</option>
                                    </select>
                                </label>
                                <label>  <input type="text" name="loan_amount" placeholder="Loan Amount" required="required" value="<?php echo $generated_data[0]->loan_amount; ?>"></label>

                            </div>
                            <!-- -->
                            <div class="section"><span>2</span>NRI Contact Details</div>
                            <div class="inner-wrap">
                                <label> <select name="a_title" class="">
                                        <option>Select Title</option>
                                        <option selected="selected" value="Mr.">Mr.</option>
                                        <option  value="Mrs.">Mrs.</option>
                                        <option  value="Ms.">Ms.</option>
                                    </select>
                                </label>
                                <label> <input type="text" name="a_name" placeholder="Name" value="<?php echo $generated_data[0]->applicant_name; ?>"></label>
                                <label><input type="text" name="a_mob" id="num" class="" placeholder="Your Contact No" required value="<?php echo $generated_data[0]->a_mob; ?>"/> </label>
                                <label><input type="email" name="a_email" id="email" class="" placeholder="Your Email ID" value="<?php echo $generated_data[0]->a_email; ?>" required/>
                                </label>
                                <label>  <input type="text" name="a_city" class="" placeholder="Your City" value="<?php echo $generated_data[0]->a_city; ?>" required/></label>
                                <label>  <input type="text" name="a_country" class="" placeholder="Your Country" value="<?php echo $generated_data[0]->a_country; ?>" required/></label>

                            </div>
                            <!-- -->
                            <div class="section"><span>3</span>Local Contact Details</div>
                            <div class="inner-wrap">
                                <label> <input type="text" name="local_contact_name" class="required" placeholder="Local Contact Name" value="<?php echo $generated_data[0]->local_contact_name; ?>"></label>
                                <label> <textarea name="a_permanent_address" class="required" placeholder="Address"><?php echo $generated_data[0]->a_permanent_address; ?></textarea></label>
                                <label>  <input type="text" name="a_res_land" value="" placeholder="Residence No." class="required" value="<?php echo $generated_data[0]->a_res_land; ?>"></label>
                                <label> <input type="text" name="a_mob" class="required" placeholder="Mobile No" value="<?php echo $generated_data[0]->a_mob; ?>"></label>
                                <label>  <input type="text" class="datepicker" name="a_dob" placeholder="DOB" value="<?php echo $generated_data[0]->a_dob; ?>"/> </label>
                                <label>
                                    <div class="row">
                                        <div class="col-md-6"> <input type="text" name="a_time" class="required" placeholder="Preferred Time of Contact" value="<?php echo $generated_data[0]->a_time; ?>"></div>

                                        <div class="col-md-6"> <select class="form-control" name="a_timmings">
                                                <option value="am">AM</option>
                                                <option value="pm">PM</option>                                    
                                            </select></div>
                                    </div>
                                </label>
                                <div class="">                                
                                    <div class="col-md-7">
                                        <input type="checkbox" name="check" id="b_1" value="Apply" class="styled"> <label class="styled" for="b_1">I have read and accept the <a href="<?php echo site_url('PrivacyPolicy'); ?>"> Privacy Policy</a> </label>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="submit" name="submit" value="Apply">
                                        <input type="reset" name="reset" value="Reset"> 
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
        $(".datepicker").datepicker();
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
<script type="text/javascript" src="<?php echo $staticContent; ?>js/simpleform.min.js"></script>
<script type="text/javascript">
    $(".testform").simpleform({
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

    $("#testform3").simpleform({
        speed: 500,
        transition: 'none',
        progressBar: false,
        showProgressText: false,
        validate: false
    });

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
                address: {
                    required: "true"

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

    $(document).ready(function () {
        $('.radio-option').click(function () {
            $(this).not(this).removeClass('click');
            $(this).toggleClass("click");
        });
    });
</script>
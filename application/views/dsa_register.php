<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Direct Sales Associate (DSA) Registration - Myloandetails.com', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>
<head>
    <meta name="description" content=":Are you an authorized DSA of any bank serving home loan clients then register and provide your customers with step by step file tracking with our unique and updated tool" />
    <meta name="keywords" content=":Home loans,mortgageloans,housingloans,constructionloan,plotloan,online file status,homerefinance,home loan details" />
   
</head>
<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <h1><img src="<?php echo $staticContent; ?>images/icons/register.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                         <li class="breadcrumbtxt"><a href="<?php echo site_url('Dsa_Login'); ?>">Dsa Login</a></li> 
                        <li class="active">DSA Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="inner-content">
        <div class="container">
            <!--Bug Alerts--->
            <?php if (!empty($error)) { ?>
                <div class="alert alert-danger" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <p><?php echo $error; ?> </p>
                </div>
            <?php } ?>   
            <!---End of Alert-->
            <div class="col-md-12">
                <p> Providing the best service increases the business in the market, If you are a DSA of any bank providing home loan services and want to provide the best service in the market your customers, then register here and give the status of their application on each and every step of the process and make them to say that you are the best home loan service provider in the market.</p>
            </div>

            <div class="col-md-6">
                <div class="form-style-3">
                    <fieldset><h1>DSA Register</h1>
                        <form class="" name="contact" action="<?php echo site_url('Dsa_Login/Create_Agency'); ?>" method="post">
                            <label for="field4"><span>State</span>
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
                            <label for="field1"><span>City <span class="required"></span></span>
                                <select class="form-control" name="selected_city[]" id="selected_city">
                                    <option>Select</option>
                                </select>
                            </label>
                            <label for="field1"><span>Bank <span class="required"></span></span>
                                <select class="form-control" name="selected_bank[]" id="selected_bank">
                                    <option>Select</option>
                                </select>
                            </label>
                            <label for="field1"><span>Agency Name <span class="required"></span></span><input type="text" name="agency_name" id="" class="form-control" placeholder="" /></label>
                            <label for="field1"><span>Agency Address <span class="required"></span></span><textarea class="form-control" rows="3" col="3" id="comment" name="address"></textarea> </label>
                            <label for="field1"><span>Contact Person <span class="required"></span></span><input type="text" name="contact_name" id="contact_person" class="form-control" placeholder="" /></label>
                            <label for="field1"><span>Phone Number <span class="required"></span></span> <input type="text" name="phone" id="phone_no" class="form-control"  /> </label>
                            <label for="field1"><span>Mobile Number <span class="required"></span></span> <input type="text" name="mobile" id="mobil_no" class="form-control"/> </label>
                            <label for="field2"><span>Email Id<span class="required"></span></span><input type="email" name="email" id="email" class="form-control" placeholder=""/></label>
                            <input type="hidden" value="<?php echo $id = $this->uri->segment(5); ?>" name="editing_id"/>
                            <label for="field1"><span>User Id <span class="required"></span></span> <input type="text" name="username" id="user_id" class="form-control" placeholder=""/> </label>
                            <label for="field1"><span>Password <span class="required"></span></span><input type="password" name="password" id="password" class="form-control" placeholder=""/></label>
                            <label for="field1"><span>Conform Password <span class="required"></span></span> <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder=""/></label>
                            <label for="field1"><span>Send SMS <span class="required"></span></span>
                                <select name="sms_approve">
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                            </label>
                            <label for="field1"><span>Send Mail <span class="required"></span></span>
                                <select name="email_approve">
                                    <option value="1">Active</option>
                                    <option value="0">InActive</option>
                                </select>
                            </label>

                            <!--design-->
                            <label> <input type="checkbox" value="" id="property">&nbsp;&nbsp;I accept the Terms and Conditions </label>
                            <input type="submit" class="btn btn-primary cr" value="Register" id="sbutton">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
  <footer id="footer">   
    <div class="fmiddle">
        <div class="container">           
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
                <lfooter class="copyrightlink">
                    <ul class="lastlink">
                        <li class="span"><a href="<?php echo site_url('About'); ?>">About</a></li>
                        <li><a href="<?php echo site_url('Enquiry_Form'); ?>">Contact Us</a></li>
                    </ul>
                </lfooter>         
           
            <span class="copyrightlink">
                <p>Copyright © 2008-2016, Myloandetails.com All Rights Reserved. </p>
            </span>
         
            </div>
        <div class="pull-right">
            <a href="#0" class="cd-top"></a>
        </div> 
    </div>
</footer> 

<!-- Libraries -->
<?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>
<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="vendor/magnific-popup/magnific-popup.js"></script>

<script src="js/custom.js"></script>
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
                                if(rescars[resi]['city_name']){
                                    var eachcity = "<option value='" + rescars[resi]['sr_state_id'] + "'>" + rescars[resi]['city_name'] + "</option>";
                                      $('#selected_city').append(eachcity);
                                  }
                                      
                                      if(rescars[resi]['income_source_id']){
                                          
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


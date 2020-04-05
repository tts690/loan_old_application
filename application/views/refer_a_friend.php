<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'About Us', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>
  
  <div role="main" class="main">
    <section class="page-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <h1><img src="<?php echo $staticContent; ?>images/icons/about.png"></h1>
            <ul class="breadcrumb">
           <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
              <li class="active">Refer a Friend</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <div class="inner-content">
        <div class="container">
            <div class="col-md-6">
                 <div class="form-style-3">
                    <div class="dsalogin">
                        <form class="" id="refer"  action="<?php echo site_url('Refer_Friend');?>" method="POST">
                        <fieldset>
                              <h1>Refer a Friend</h1>
                              <p> If you have a friend who is in need of a home loan then refer him to visit our site and make him to feel that you did a great help in guiding him to a right person to obtain the required loan.</p>
                          
                            <label for="field1">
                                <span>Name <span class="required"></span></span>
                                <input type="text" id="name" class="input-field" name="name"/>
                            </label>
                            <label for="field2"><span>Your Email Id<span class="required"></span></span>
                                <input type="email" name="email" id="email" />
                            </label>
                             <label for="field2"><span>Friend's Email Id<span class="required"></span></span>
                                 <input type="text" name="f_email" id="f_email" class="required multiEmail" placeholder="Each mail id Seperated by comma(,)"/>
                            </label>
                            <label for="field1"><span>Your Message<span class="required"></span></span>
                                <textarea class="form-control" rows="3" col="3"  name="msg"></textarea> 
                            </label>
                             <label for="field2">
                            <span id="hide">&nbsp;</span><input type="submit" value="Send" class="btn btn-primary cr"/>
                             </label>
                           
                                <span>&nbsp;</span> 
                          
                        </fieldset>
                    </form>
                    </div>
                 </div>
            </div>
     </div>
    </div>
</div>
<!-- Libs -->
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
<?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>
<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
<script src="vendor/magnific-popup/magnific-popup.js"></script>

<script src="js/custom.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>js/additional-methods.js"></script>
<script>
    $().ready(function () {
        // validate the comment form when it is submitted
        jQuery.validator.addMethod("lettersonly", function (value, element) {
            return this.optional(element) || /^[a-zA-Z _]+$/i.test(value);
        }, "Letters only please");

        // validate signup form on keyup and submit
        $("#refer").validate({
            rules: {
                name: {
                    lettersonly: true,
                    required: true,
                },               
                email: {
                    required: true,
                    email: true
                },                    
                msg: {
                    required: "true"
                },
                agree: "required"
            },
            messages: {
                name: "Please enter your name",               
                msg: {
                    required: "Please enter your message",
                },
                mob: {
                    required: "Please enter valid phone number",
                    minlength: "Ten digit mobile number"
                },
                email: "Please enter a valid email address",
                 emails: "Please enter a valid email address",
                agree: "Please accept our policy"
            }
        });
        
    });
    
    (function ($) {
// Multiple, comma separated email validation 
$.validator.addMethod('multiEmail', function(value, element) {
if (this.optional(element)) {
return true;
} else {
var valid = true;

$.each($.trim(value).replace(/,$/, '').split(','), $.proxy(function (index, email) {
if (!$.validator.methods.email.call(this, $.trim(email), element)) {
valid = false;
}
}, this));

return valid; 
}
}, 'One or more email addresses are invalid');
}(jQuery));
</script>
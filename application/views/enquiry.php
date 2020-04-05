<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Enquiry', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>


  <div role="main" class="main">
    <section class="page-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h1><img src="<?php echo $staticContent; ?>images/icons/enquiry.png"></h1>
              <ul class="breadcrumb">
                  <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                  <li class="active">Enquiry</li>
              </ul>
          </div>
        </div>
      </div>
    </section>
    <div class="inner-content">
    <div class="container">
        <div class="col-md-6">
            <form class="" id="enquiryform" name="contact" action="<?php echo site_url('Enquiry_Form');?>" method="POST">
                 <div class="form-group">
                     <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required/>
                        </div>
                            <div class="form-group">
                                <input type="number" name="cnum" id="cnum" class="form-control" placeholder="Your Contact No" required/>
                            </div>                            
                           <div class="form-group">
                             <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required/>
                            </div>          
                          <div class="form-group">
                            <textarea name="msg" id="msg" placeholder="Your Message" class="form-control" rows="5" required="" aria-required="true" aria-invalid="true"></textarea>                                       
                         </div>                            
                    <input type="submit" class="btn btn-primary cr"/>
            </form>
        </div>
         <div class="col-md-6">
            
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
                <lfooter class="copyrightlink pull-left">
                    <ul class="lastlink">
                        <li class="span"><a href="<?php echo site_url('About'); ?>">About</a></li>
                        <li><a href="<?php echo site_url('Enquiry_Form'); ?>">Contact Us</a></li>
                    </ul>
                </lfooter>         
           
            <span class="copyrightlink pull-right">
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
        $("#enquiryform").validate({
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
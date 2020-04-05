<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'Note Eligibility Calculators View', 'cssFiles' => array())); ?>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
 
  <div role="main" class="main">
    <section class="page-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="breadcrumb">
               <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>" style="color:#CCCCCC">Home</a></li>        
              <li class="active">Eligibility calculators</li>
            </ul>
          </div>
        </div>
        
     
    </section>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2><strong>Note</strong></h2>
          <div class="row">
            <div class="col-md-12">
              <p class="lead">  For the convenience of customers we have divided the banks into two categories on the basis of their income consideration. </p>
            </div>
          </div>
          <hr class="small">
          <div class="row">
            <div class="col-md-12">
              <h4> Banks considering Gross Income:</h4>
              <p>Details given under this are applicable to those banks which consider Monthly Gross Income (Salaried) / Annual Gross Income (Self Employed) for their calculations. </p>
              <hr class="small">
              <h4> Banks considering Net Income:</h4>
              <p>Details given under this are applicable to those banks which consider Monthly Net Income of salaried (Income after Statutory Deductions) / Annual Net Income of Self Employed (Income after Tax) for their calculations*. </p>
              <p><a href="home-loan-eligibility-calculator.html">
                <button type="button" class="btn btn-primary cr">Continue Reading</button>
                </a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <aside class="sidebar">
            
			<div class="calculator">
          <div class="head">EMI Calculator</div>
          <div class="body">
          <div class="calform">
          <label>Loan Amount</label>
          <input type="text"  maxlength="100" class="form-control" value="200000" name="email" id="email">
          <label>Interest Rate (%)</label>
          <input type="text"  maxlength="100" class="form-control" value="9" name="email" id="email">
          <label>Period in Years</label>
          <input type="text"  maxlength="100" class="form-control" value="20" name="email" id="email">
           <input type="submit" value="Calculate"  >
          </div>
           <div class="calanswer">
          <div>
          1799.4 EMI
          </div>
          <div class="clear_cal"></div>
          <div class="part_cal_50">431868
          <br>
          <span>Total Amount Payable
</span>
<div class="clear_cal"></div>
          </div>
          <div class="part_cal_50">231868
          <br>
          <span>Interest Amount
</span>
<div class="clear_cal"></div>
          </div>
          <div class="clear_cal"></div>
          </div>
          <div class="clear_cal"></div>
          </div>
          </div>
		  <br>
			
			<div class="vticker">
            <ul>
			<li>
            <h5><a href="#">Know your agreement</a></h5 ><hr class="small">
            <p> It is the Agreement which a customer need to sign before going for disbursement of the loan which he requested to the bank to fund...</p>
			</li>
            <li>
            <h5><a href="#"> Amortization</a></h5>
            <hr class="small">
            <p> One can calculate the EMI and the amount of principal and interest components in an EMI, and he/she can also calculate the...</p>
			</li>
            <li>
            <h5><a href="#">Eligibility Calculator</a></h5>
            <hr class="small">
            <p> One of the most important stages in home loan processing is the calculation of the applicants' eligibility for the home loan. By taking...</p>
            </li>
            <li>
			<h5><a href="#">List of documents</a></h5>
            <hr class="small">
            <p> To start with the home loan processing a customer need to submit the documents and this will vary depending on the product and...</p>
            </li>
            <li>
			<h5><a href="#">Check your status</a></h5>
            <hr class="small">
            <p> Normally customers want to know their file status during the home loan process. But people face different types of situations where they wrongly...</p>
            </li>
            <li>
			<h5><a href="#">Draft Agreements</a></h5>
            <hr class="small">
            <p> To complete the legal and technical process over a property which the customer is buying by taking the home loan need to have a sale...</p>
          </li>
            </ul>
			</div>
		  
		  </aside>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Libs -->
<?php $this->load->view('Bootstrap/footer', array('jsFiles' => array())); ?>


<script src="vendor/magnific-popup/magnific-popup.js"></script>
<script src="vendor/jflickrfeed/jflickrfeed.js"></script>
<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#demo').hide();
	$('.vticker').easyTicker();
});
</script>

<script src="js/custom.js"></script>
<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.

		<script type="text/javascript">



			var _gaq = _gaq || [];

			_gaq.push(['_setAccount', 'UA-12345678-1']);

			_gaq.push(['_trackPageview']);



			(function() {

			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

			})();



		</script>

		 -->
         <!--SHARE WITH SCRIPTS-->
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51120a573a36c183" async="async"></script>-->
    <!--    <script type="text/javascript">stLight.options({publisher: "c8e95659-7770-4c4c-81e0-24b6ce763b46", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
var options={ "publisher": "c8e95659-7770-4c4c-81e0-24b6ce763b46", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "linkedin", "email", "googleplus", "pinterest"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>-->

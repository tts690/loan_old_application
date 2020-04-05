<?php
$staticContent = base_url();
$cssFile = '';

if (isset($cssFiles)) {
    foreach ($cssFiles as $cssF) {
        $cssFile .= '<link rel="stylesheet" type="text/css" href="' . $staticContent . 'css/' . $cssF . '" />';
    }
}
?>
<link href="https://fonts.googleapis.com/css?family=Prompt:400,600" rel="stylesheet">
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <?php //$page = basename($_SERVER['SCRIPT_NAME']); ?><head>
        <!-- Basic -->
        <meta charset="utf-8">
        <title>MyLoanDetails | <?php echo $pageTitle; ?></title>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">      

        <!--favicon --->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $staticContent; ?>images/1469772987.ico">       
        <!-- Libs CSS -->
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/fonts/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo $staticContent; ?>vendor/owl-carousel/owl.carousel.css" media="screen">
        <link rel="stylesheet" href="<?php echo $staticContent; ?>vendor/owl-carousel/owl.theme.css" media="screen">
        <link rel="stylesheet" href="<?php echo $staticContent; ?>vendor/magnific-popup/magnific-popup.css" media="screen">
        <!--back to top button-->
          <link rel="stylesheet" href="<?php echo $staticContent; ?>css/back-to-top.css">
        <!-- Theme CSS -->
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/theme.css">
        <!--link rel="stylesheet" href="<?php echo $staticContent; ?>css/newbootstrap-newstaggered.css"-->

        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/theme-elements.css">
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/theme-animate.css">
        <!--hover-effect-->
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/hover.css">

        <!-- Current Page Styles -->
        <link rel="stylesheet" href="<?php echo $staticContent; ?>vendor/rs-plugin/css/settings.css" media="screen">
        <link rel="stylesheet" href="<?php echo $staticContent; ?>vendor/circle-flip-slideshow/css/component.css" media="screen">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/skins/red.css">
        <!-- font awsome-->        
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/custom.css">
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/responsive.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/theme-responsive.css" />
        <!--push menu-->
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/pushmenu.css" />
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/mobile_menu.css" />
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/jquery.tooltip.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $staticContent; ?>css/jquery.toolbar.css" type="text/css" />
        
        <?php echo $cssFile; ?>
        <script>
            siteurl = '<?php echo $staticContent; ?>';
        </script>            
    </head>
    <header>
   
    <div class="container">            
        <h1 class="logo">
            <a href="<?php echo $staticContent; ?>">
                <img alt="Myloandetails.com – Home Loans, MortgageLoans, BusinessLoans, Personal Loans" src="<?php echo $staticContent; ?>/images/myloandetailsogo.svg"></a></h1>
        <div class="whatsap">
            <span><img src="<?php echo $staticContent; ?>images/whtsapp.png">91-99803-12909 </span>
        </div>	            
        <div id="main">
            <span onClick="openNav()" class="right-menu">  <i class="fa fa-bars" aria-hidden="true"></i></span>
        </div>
        <button class="btn btn-responsive-nav btn-inverse" data-toggle="clae" data-target="" id="open">
            <i class="icon icon-bars w3-xxlarge"></i></button> 
    </div>

    <div class="navbar-collapse nav-main-collapse collapse">
        <div class="container">
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    <li class=""><a href="<?php echo $staticContent; ?>">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#">HOME LOANS <i class="icon icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('home-loan-products-details-terms-conditions'); ?>">Products</a></li>
                            <li><a href="<?php echo site_url('home-mortgage-loan-required-documents-checklist'); ?>">Documents</a></li>
                            <li><a href="<?php echo site_url('home-loan-interest-rates-tenures-features'); ?>">Interest Rates</a></li>
                            <li class="dropdown-submenu">
                                <a href="#">Eligibility Calculators</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('nri-salaried-home-loan-eligibility-calculator'); ?>">NRI Salaried</a></li>
                                    <li><a href="<?php echo site_url('home-loan-salaried-eligibility-calculator'); ?>">Resident Salaried</a></li>
                                    <li><a href="<?php echo site_url('self-employed-home-loan-eligibility-calculator'); ?>">Resident Self Employed</a></li>
                                </ul>
                            </li>
                            <li><a href="<?php echo site_url('home-loan-agreement-terms-conditions'); ?>">Home loan Agreement</a></li>
                            <li><a href="<?php echo site_url('draft-sale-lease-rental-construction-agreements-deeds-documents'); ?>">Draft Agreement</a></li>
                            <li><a href="<?php echo site_url('home-loan-file-status-online-tracking'); ?>">File Status</a></li>

                            <li class="dropdown-submenu">
                                <a href="#">Apply</a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('nri-home-loan-application'); ?>">NRI Salaried</a></li>
                                    <li><a href="<?php echo site_url('home-loan-application'); ?>">Resident Salaried</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url('Personal_Loan'); ?>">Personal Loans</a></li>
                    <li><a href="<?php echo site_url('home-personal-business-loans-cibil-properties-faqs'); ?>">Business Loans</a></li>
                    <li><a href="<?php echo site_url('post-a-query'); ?>">FAQ'S</a></li>                      
                    <li><a  href="<?php echo site_url('Loan-emi-ammortization-calculator'); ?>">EMI Calculator</a></li>
                    <li><a  href="<?php echo site_url('dsa-registration'); ?>">DSA</a></li>                       
                </ul>
            </nav>
        </div>
    </div>
    <!--mobile menu starts-->
    <div class="mobile-tab hidden-lg hidden-md">
        <div class="container">
            <div id="pm_menu" class="pm_close"> 	
                <div class="mobile-menu">
                    <ul class="">
                        <li class="active"><a  href="<?php echo $staticContent; ?>"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                        <li class="dropdown">                            
                            <a class="dropdownggle" data-toggle="collapse" data-target="#hloan" href="#"><i class="fa fa-money"></i>Home Loan <i class="icon icon-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <div id="hloan" class="collapse">
                                    <li><a href="<?php echo site_url('home-loan-products-details-terms-conditions'); ?>">Products</a></li>
                                    <li><a href="<?php echo site_url('home-mortgage-loan-required-documents-checklist'); ?>">Documents</a></li>
                                    <li><a href="<?php echo site_url('home-loan-interest-rates-tenures-features'); ?>">Interest Rates</a></li>
                                </div>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="collapse" data-target="#nri">Eligibility Calculators  <i class="icon icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <div id="nri" class="collapse">
                                            <li><a href="<?php echo site_url('nri-salaried-home-loan-eligibility-calculator'); ?>">NRI Salaried</a></li>
                                            <li><a href="<?php echo site_url('home-loan-salaried-eligibility-calculator'); ?>">Resident Salaried</a></li>
                                            <li><a href="<?php echo site_url('self-employed-home-loan-eligibility-calculator'); ?>">Resident Self Employed</a></li>
                                        </div>
                                    </ul>
                                </li>
                                <li><a href="<?php echo site_url('home-loan-agreement-terms-conditions'); ?>">Home Loan Agreement</a></li>
                                <li><a href="<?php echo site_url('draft-sale-lease-rental-construction-agreements-deeds-documents'); ?>">Draft Agreement</a></li>
                                <li><a href="<?php echo site_url('home-loan-file-status-online-tracking'); ?>">File Status</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#" data-toggle="collapse" data-target="#apply" >Apply  <i class="icon icon-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <div id="apply" class="collapse">
                                            <li><a href="<?php echo site_url('nri-home-loan-application'); ?>">NRI Salaried</a></li>
                                            <li><a href="<?php echo site_url('home-loan-application'); ?>">Resident Salaried</a></li>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php echo site_url('Personal_Loan'); ?>"><i class="fa fa-briefcase" ></i> Personal Loans</a></li>
                        <li><a href="<?php echo site_url('home-personal-business-loans-cibil-properties-faqs'); ?>"><i class="fa fa-building"></i>Business Loans</a></li>
                        <li><a href="<?php echo site_url('post-a-query'); ?>"><i class="fa fa-question-circle" aria-hidden="true"></i>Frequently Asked Questions</a></li> 
                        <li><a href="<?php echo site_url('Loan-emi-ammortization-calculator'); ?>"><i class="fa fa-calculator"></i>&nbsp;EMI Calculator</a></li>
                        <li><a href="<?php echo site_url('dsa-registration'); ?>"><i class="fa fa-user-secret"></i>&nbsp;DSA</a></li>
                        <li><a href="<?php echo site_url('About'); ?>"><i class="fa fa-user"></i>About</a></li>
                        <li><a href="<?php echo site_url('Enquiry_Form'); ?>"><i class="fa fa-envelope"></i>Enquiry</a></li>
                        <li><a href="<?php echo site_url('terms-conditions'); ?>"><i class="fa fa-user"></i>Terms & Conditions</a></li>
                        <li><a href="<?php echo site_url('privacy-policy'); ?>"><i class="fa fa-file-text" aria-hidden="true"></i>Privacy and Policy</a></li>
                        <li><a href="http://demo.myloandetails.com/blog/" target="_blank"><i class="fa fa-rss"></i>Blog</a></li>
                       <li><a href="<?php echo site_url('Refer_Friend'); ?>"><i class="fa fa-users" aria-hidden="true"></i>Refer a Friend</a></li>
                    </ul>
                </div>
            </div><!--container-->
        </div>
    </div>
</header>
<!-- cals-->
<!-- cals-->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onClick="closeNav()">×</a>
    <div class="sidenav-menu-list">
        <li><a href="<?php echo site_url('About'); ?>">About</a></li>
        <li>  <a href="<?php echo site_url('Enquiry_Form'); ?>">Enquiry</a></li>
        <li>  <a href="<?php echo site_url('Terms_Conditions'); ?>">Terms & Conditions</a></li>
        <li> <a href="<?php echo site_url('privacy-policy'); ?>">Privacy and Policy</a></li>
        <li> <a href="http://demo.myloandetails.com/blog/" target="_blank">Blog</a></li>
        <li><a href="<?php echo site_url('Refer_Friend'); ?>">Refer a Friend</a></li>
    </div>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

</head>
<body>
     <div class="box">
        <div class="box-inner">
            <div id="mobnu">
                <div class="calculator">
                    <button type="button" id="sr" class="slide-right">Calculator</button>
                    <div class="side-calci">
                        <div class="head"><i class="fa fa-calculator" aria-hidden="true">&nbsp;</i>EMI CALCULATOR</div>
                        <div class="body">
                            <div class="calform">
                                <form name = first id="firstcal" name="emi">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></div>
                                        <input type="number" class="form-control" id="exampleInputAmount" placeholder = "Amount" name= "aa" onKeyUp="checnum(this);" required>
                                    </div>
                                    <!--  <label>Interest Rate (%)</label>-->
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></div>
                                        <input type="number" class="form-control" id="exampleInputAmount" placeholder="Interest Rate" name= "bb" onKeyUp="checnum(this);" required>
                                    </div>
                                    <!-- <label>Period in Years</label>-->
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                                        <input type="number" class="form-control" id="exampleInputAmount" placeholder="Period" name= "cc" onkeyup = "checnum(this);" required>
                                    </div>
                                    <!--input type="submit" value="Reset"-->
                                    <div class="cal-button">
                                        <!--a class="cal-btn" href="#">Compute</a-->
                                       <a href="javascript:void(0);" type="button" name="ss" value="Compute" onclick="return loan();" class="btn btn-primary calbutton">Calculate</a>  
                                        <a class="btn btn-primary calbutton" href="javascript:void(0);" onClick="clear_me();">Reset</a>
                                    </div>
                                    <div style="margin-top:10px">
                                        <input name="r1" type=text readonly size="30" placeholder="EMI">
                                        <input name="r2" type=text readonly size="30" placeholder="Total Interest Paid">                                       
                                    </div>
                                </form>                                                 
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>


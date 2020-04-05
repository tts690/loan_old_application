<?php $title = $data[0]->title; ?>
<?php $this->load->view('Bootstrap/header', array('pageTitle' => "$title", 'cssFiles' => array())); ?>

<?php $staticContent = base_url(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo $staticContent; ?>css/simpleform.css" />
<link rel="stylesheet" type="text/css" href="<?php echo $staticContent; ?>css/newbootstrap-newstaggered.css"/>

<meta name="keywords" content="<?php echo $data[0]->keyword; ?>">
<meta name="description" content=" <?php echo $data[0]->description; ?>">  

<div role="main" class="main"> 
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <h1><img src="<?php echo $staticContent; ?>images/icons/percentage.png"></h1>
                   <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                       <li class="breadcrumbtxt"><a href="<?php echo site_url('Home_Loan_Interest_Rates'); ?>">Interest Rate</a></li> 
                       <li class="active"> Interest Rate View</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <div class="inner-content">
        <div>
            <fieldset class="message-details">
                <div class="news-tagger-container">
                    <div class="row-fluid">
                        <div class="container">
                            <div class="row">  
                                <div class="interest-rate-view">
                                    <div class="col-md-8"> 
                                        <div class="interest-rate-head"> 
                                            <div class="bank-logo">
                                                <img 
                                                    src="<?php
                                                    echo base_url('uploads/' . $data[0]->photoUrl);
                                                    ?>"/>
                                            </div>
                                            <div class="abt-bank">
                                                <h4> About</h4><?php echo $data[0]->about; ?>
                                            </div>
                                            <br>
                                            <div class="abt-bank">
                                                <h4>Interest Rate</h4> <?php echo $data[0]->interest_rate; ?>
                                            </div><br/>
                                            <div class="tenure">
                                                <h4>Tenure</h4> <?php echo $data[0]->tenure; ?>
                                            </div><br/>
                                            <div class="feature">
                                                <h4>Feature</h4> <?php echo $data[0]->feature; ?>
                                            </div>
                                            <br/>
                                        </div>                                       
                                    </div>  
                                </div>
                                <div class="col-md-4"> 
                                    <h1></h1>

                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
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
                        <li><a href="<?php echo site_url('Enquiry'); ?>">Contact Us</a></li>
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
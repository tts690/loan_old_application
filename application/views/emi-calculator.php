<?php $this->load->view('Bootstrap/header', array('pageTitle' => 'EMI Amortization Calculatorfor Home Mortgage Business Personal Loans – Myloandetails.coms', 'cssFiles' => array())); ?>
<?php $staticContent = base_url(); ?>
<meta name="description" content="Calculate EMI for home loans,personalloans,businessloans,mortgage loans and get to know what is the Interest and principal components of EMI. ">
<meta name="keywords" content="Home loan emicalculator,housing loan emicalculator,personal loan emicalculator,business loan emicalculator,home loan amortization calculator,personal loan amortization calculator,business loan amortization">

<link href="<?php echo $staticContent; ?>css/simple-slider.css" rel="stylesheet" type="text/css" />
<div role="main" class="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><img src="<?php echo $staticContent; ?>images/icons/emi.png"></h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumbtxt"><a href="<?php echo base_url(); ?>">Home</a></li> 
                        <li class="active">EMI Calculator</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid"> 
        <div class="inner-content">       
            <div class="emi-header" id="emi-bg">
                <h1>EMI CALCULATOR</h1>     
                <ul class="social-icons">                         
                    <li><a onclick="return fb();" target="_blank"><i class="fa fa-facebook" aria-hidden="true" id="facebook"></i></a></li>                          
                    <li><a onclick="return twitter();"><i class="fa fa-twitter" aria-hidden="true" id="twitter"></i></a></li>
                </ul>                                          
            </div>       

            <div class="emi-calculate">
                <div class="row">	
                    <div class="col-md-6">
                        <div class="emi-bgcolor">
                            <div class="emi-calculater">
                                <h4><span class="label label-primary">Loan Amount is <span class ='' id="la_value">260000</span></span></h4>								
                                <input type="text" data-slider="true" value="260000" data-slider-range="0,50000000" data-slider-step="10000" data-slider-snap="true" id="la">
                                <h4><span class="label label-primary">No. of Month is <span class =''  id="nm_value">36</span></span></h4>
                                <input type="text" data-slider="true" value="36" data-slider-range="0,720" data-slider-step="1" data-slider-snap="true" id="nm">
                                <h4><span class="label label-primary">Rate of Interest [ROI] is<span class =''  id="roi_value">10.2</span></span> </h4>
                                <input type="text" data-slider="true" value="10.2" data-slider-range="7,25" data-slider-step=".05" data-slider-snap="true" id="roi">
                                <br>
                                <div class="col-md-12">		
                                    <div class="col-md-1"></div>							
                                    <div class="alert alert-info col-md-5">									  
                                        <center><strong>Monthly EMI</strong> <BR>
                                            <button type="button" class="btn btn-info btn-lg" id='emi'></button></center>
                                    </div>
                                    <div class="alert alert-info col-md-5">									  
                                        <center><strong>Total Interest</strong> <BR>
                                            <button type="button" class="btn btn-info btn-lg" id='tbl_int'></button></center>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-1"></div>
                                    <div class="alert alert-info col-md-5">									  
                                        <center><strong>Payable Amount</strong> <BR>
                                            <button type="button" class="btn btn-info btn-lg" id='tbl_full'></button>
                                        </center>
                                    </div>
                                    <div class="alert alert-info col-md-5">									  
                                        <center>
                                            <strong>Interest Percentage</strong><BR>
                                            <button type="button" class="btn btn-info btn-lg" id='tbl_int_pge'></button>
                                        </center>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>                                                               
                            </div>                                                      
                        </div>
                    </div>
                    <div class="pie-chart">            
                        <div class="col-md-6">
                            <div class="col-md-12" id="container" ></div>
                        </div>
                    </div>	            
                </div>                                 
            </div>
            <div class="col-md-10 center-block emi-value-table">
                <div class="box-body table-responsive " id='datatable'>
                    <table id='illustrate' class='table table-striped table-bordered' width=100% >
                    </table>

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
    <script src="<?php echo $staticContent; ?>js/highcharts.js"></script>
    <script src="<?php echo $staticContent; ?>js/exporting.js"></script>
    <script src="<?php echo $staticContent; ?>js/simple-slider.js"></script>          

    <script type="text/Javascript">	
        $(document).ready(function(){
        $("#la").bind(
        "slider:changed", function (event, data) {				
        $("#la_value").html(data.value.toFixed(0)); 
        calculateEMI();
        }
        );

        $("#nm").bind(
        "slider:changed", function (event, data) {				
        $("#nm_value").html(data.value.toFixed(0)); 
        calculateEMI();
        }
        );

        $("#roi").bind(
        "slider:changed", function (event, data) {				
        $("#roi_value").html(data.value.toFixed(2)); 
        calculateEMI();
        }
        );

        function calculateEMI(){
        var loanAmount = $("#la_value").html();
        var numberOfMonths = $("#nm_value").html();
        var rateOfInterest = $("#roi_value").html();
        var monthlyInterestRatio = (rateOfInterest/100)/12;

        var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
        var bottom = top -1;
        var sp = top / bottom;
        var emi = ((loanAmount * monthlyInterestRatio) * sp);
        var full = numberOfMonths * emi;
        var interest = full - loanAmount;
        var int_pge =  (interest / full) * 100;
        $("#tbl_int_pge").html(int_pge.toFixed(2)+" %");
        //$("#tbl_loan_pge").html((100-int_pge.toFixed(2))+" %");

        var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var full_str = full.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");

        $("#emi").html(emi_str);
        $("#tbl_emi").html(emi_str);
        $("#tbl_la").html(loanAmount_str);
        $("#tbl_nm").html(numberOfMonths);
        $("#tbl_roi").html(rateOfInterest);
        $("#tbl_full").html(full_str);
        $("#tbl_int").html(int_str);
        var detailDesc = "<thead><tr class='success'><th>Payment No.</th><th>Begining Balance</th><th>EMI</th><th>Principal</th><th>Interest</th><th>Ending Balance</th></thead><tbody>";
        var bb=parseInt(loanAmount);
        var int_dd =0;var pre_dd=0;var end_dd=0;
        for (var j=1;j<=numberOfMonths;j++){
        int_dd = bb * ((rateOfInterest/100)/12);
        pre_dd = emi.toFixed(2) - int_dd.toFixed(2);
        end_dd = bb - pre_dd.toFixed(2);
        detailDesc += "<tr><td>"+j+"</td><td>"+bb.toFixed(2)+"</td><td>"+emi.toFixed(2)+"</td><td>"+pre_dd.toFixed(2)+"</td><td>"+int_dd.toFixed(2)+"</td><td>"+end_dd.toFixed(2)+"</td></tr>";
        bb = bb - pre_dd.toFixed(2);
        }
        detailDesc += "</tbody>";
        $("#illustrate").html(detailDesc);
        /*
    
        $('#container').highcharts({

        chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false
        },
        title: {
        text: 'EMI Calculator'
        },
        tooltip: {
        //pointFormat: '{series.name}: <b>{point.value}%</b>'
        },
        plotOptions: {
        pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
        //	enabled: true,
        color: '#000000',
        connectorColor: '#000000',
        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
        }
        }
        },
        series: [{
        type: 'pie',
        name: 'Amount',
        data: [
        ['Loan',   eval(loanAmount)],
        ['Interest',       eval(interest.toFixed(2))]
        ]
        }]
        });	*/		
    	
      var chart = Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
               text: 'EMI Calculator'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            },
		
        
     series: [{
        type: 'pie',
        name: 'Amount',
        data: [
        ['Loan',   eval(loanAmount)],
        ['Interest',       eval(interest.toFixed(2))]
        ]
        }],    	
		
        });
	
    $(window).bind("load resize", function() {
		
                    if (navigator.userAgent.match(/Android/i) ||
                 navigator.userAgent.match(/webOS/i) ||
                 navigator.userAgent.match(/iPhone/i) ||
                 navigator.userAgent.match(/iPad/i) ||
                 navigator.userAgent.match(/iPod/i) ||
                 navigator.userAgent.match(/BlackBerry/) || 
                 navigator.userAgent.match(/Windows Phone/i) || 
                 navigator.userAgent.match(/ZuneWP7/i)
                 ) {			 
		
                    var window_width = $(window).width();
                    if(window_width < 1024) {		
                            console.log(window_width);
                            chart.setSize(window_width, 400);	
                    }
			
                    if(window_width > 1024) {
                            console.log(window_width);
                            chart.setSize(window_width/2, 400);
                    }
		
                    }		
            });
    
        }
        calculateEMI();

        });
    </script>


    <script type="text/javascript">

                                                        var _gaq = _gaq || [];
                                                        _gaq.push(['_setAccount', 'UA-38615761-1']);
                                                        _gaq.push(['_trackPageview']);

                                                        (function () {
                                                            var ga = document.createElement('script');
                                                            ga.type = 'text/javascript';
                                                            ga.async = true;
                                                            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                                                            var s = document.getElementsByTagName('script')[0];
                                                            s.parentNode.insertBefore(ga, s);
                                                        })();

    </script>

    <script type="text/javaScript">

        $(document).ready(function(){

        //var curl = $(location).attr('href');
        var curl = location.href.split("http://ngiriraj.com/").slice(-1);

        var aurl = "";
        $('li > a').each(function() {
        aurl = $(this).attr('href').split("http://ngiriraj.com/").slice(-1);
        if ("'"+curl+"'" == "'"+aurl+"'"){
        $(this).parent().parent().parent().addClass('active');
        $(this).parent().parent().parent().parent().addClass('active');
        $(this).parent().parent().parent().parent().parent().addClass('active');
        $(this).parent().parent().parent().parent().parent().parent().addClass('active');
        $(this).parent().parent().parent().parent().parent().parent().parent().addClass('active');
        }			
        });


        });
    </script>
    <!--hiding emi calculator-->

    <script>
        $(document).ready(function () {
            $("#sr").removeClass("slide-right");
        });
    </script>
    <script>
        function fb() {
            window.open('https://www.facebook.com/sharer/sharer.php?u=http://demo.myloandetails.com/Loan-emi-ammortization-calculator?[title]=Income V/S EMI', '_blank');

        }
        function twitter() {
            window.open('http://twitter.com/intent/tweet?status=http://demo.myloandetails.com/Loan-emi-ammortization-calculator?[title]=Income V/S EMI', '_blank');
        }
    </script>
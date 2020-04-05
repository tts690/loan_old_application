<?php
$staticContent = base_url();
$jsFile = '';
if (isset($jsFiles)) {
    foreach ($jsFiles as $jsF) {
        $jsFile .= '<script type="text/javascript" src="' . $staticContent . 'js/' . $jsF . '"></script> ';
    }
}
$controller = $this->uri->segment(1);
$action = $this->uri->segment(2);
?>

<!--footer-->
<!--  --> 
<!--SHARE WITH SCRIPTS-->
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51120a573a36c183" async="async"></script>-->

<!-- Head Libs -->
<!--script src="<?php echo $staticContent; ?>vendor/modernizr.js"></script-->


<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>css/jquery.tooltip.js"></script>
<script type="text/javascript">
    $j = jQuery.noConflict();
    $j(document).ready(function () {
        $j("div.item").tooltip();
    });
</script>    
<script src="<?php echo $staticContent; ?>vendor/jquery.js"></script>
<script src="<?php echo $staticContent; ?>js/plugins.js"></script>
<script src="<?php echo $staticContent; ?>js/simpleform.min.js"></script>
<script src="<?php echo $staticContent; ?>vendor/jquery.easing.js"></script>
<script src="<?php echo $staticContent; ?>vendor/jquery.appear.js"></script>
<script src="<?php echo $staticContent; ?>vendor/jquery.cookie.js"></script>

<script src="<?php echo $staticContent; ?>vendor/bootstrap.js"></script>
<script src="<?php echo $staticContent; ?>vendor/twitterjs/twitter.js"></script>
<script src="<?php echo $staticContent; ?>vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="<?php echo $staticContent; ?>vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>
<script src="<?php echo $staticContent; ?>vendor/owl-carousel/owl.carousel.js"></script>
<script src="<?php echo $staticContent; ?>vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>

<script src="<?php echo $staticContent; ?>vendor/jquery.validate.js"></script>
<!-- Current Page Scripts -->
<script src="<?php echo $staticContent; ?>js/views/view.home.js"></script>
<!-- Theme Initializer -->
<script src="<?php echo $staticContent; ?>js/theme.js"></script>
<!--push menu-->
<script src="<?php echo $staticContent; ?>js/pushmenu.js"></script>
<!--emi calculator-->
<script src="<?php echo $staticContent; ?>js/jquery.toolbar.js"></script>


<script>
    $('#pm_menu').pushmenu({button: "#open"});
    $('#pm_menu').pushmenu({button: "#calculator"});
    
   
</script>
<script src="//cdn.jsdelivr.net/jquery.marquee/1.3.9/jquery.marquee.min.js" type="text/javascript"></script>
<script>
    jQuery(document).ready(function ($) {

        $('.marquee').marquee({
//speed in milliseconds of the marquee
            duration: 15000,
//gap in pixels between the tickers
            gap: 50,
//time in milliseconds before the marquee will start animating
            delayBeforeStart: 0,
//'left' or 'right'
            direction: 'left',
//true or false - should the marquee be duplicated to show an effect of continues flow
            duplicated: true
        });

    });

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
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>


<script>
    function clear_me()
    {
        var a = document.first.aa.value = '';
        var b = document.first.bb.value = '';
        var c = document.first.cc.value = '';
        document.first.r1.value = '';
        document.first.r2.value = '';
        document.first.r3.value = '';
    }
    function checnum(as)
    {
        var dd = as.value;
        if (isNaN(dd))
        {
            dd = dd.substring(0, (dd.length - 1));
            as.value = dd;
        }
    }
    function loan()
    {
        var a = document.first.aa.value;
        var b = document.first.bb.value;
        var c = document.first.cc.value;
        if ((a == "" || a == null) && (b == "" || b == null) && (c == "" || c == null)) {
            alert("Please Enter all Fields...!");
            return false;
        }

        if (a == null || a == "") {
            alert("Please Enter Amount");
            return false;
        }

        if (b == null || b == "") {
            alert("Please Enter Interest Rate");
            return false;
        }

        if (c == null || c == "") {
            alert("Please Enter Duration");
            return false;
        }


        var n = c * 12;
        var r = b / (12 * 100);
        var p = (a * r * Math.pow((1 + r), n)) / (Math.pow((1 + r), n) - 1);
        var prin = Math.round(p * 100) / 100;
        document.first.r1.value = prin;
        var mon = Math.round(((n * prin) - a) * 100) / 100;
        document.first.r2.value = mon;
        var tot = Math.round((mon / n) * 100) / 100;
        document.first.r3.value = tot;
        for (var i = 0; i < n; i++)
        {
            var z = a * r * 1;
            var q = Math.round(z * 100) / 100;
            var t = p - z;
            var w = Math.round(t * 100) / 100;
            var e = a - t;
            var l = Math.round(e * 100) / 100;
            a = e;
        }
    }
</script> 


<script>

    $(window).scroll(function () {
        if ($(window).width() > 991) {
            if ($(window).scrollTop() > 50) {
                $('header').addClass('stciky-header');
            }
            else {
                $('header').removeClass('stciky-header');
            }
        }
    });
    
    
    
    
</script>
<!--validation-->
<script type="text/javascript" src="<?php echo $staticContent; ?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $staticContent; ?>js/additional-methods.js"></script>

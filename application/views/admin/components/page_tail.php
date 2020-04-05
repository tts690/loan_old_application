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
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="row">© <?php echo date('Y'); ?> My Loan Details</div>
    </div>
</footer>

<?php echo $jsFile; ?>
<!--  Page rendered in {elapsed_time} -->
<script src="<?php echo $staticContent; ?>js/vendors/jquery-2.2.4.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo $staticContent; ?>css/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- FastClick -->
<script src="<?php echo $staticContent; ?>css/admin/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo $staticContent; ?>css/admin/vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->

<!-- gauge.js -->
<!-- <script src="<?php echo $staticContent; ?>css/admin/vendors/gauge.js/dist/gauge.min.js"></script>-->
<!-- bootstrap-progressbar -->
<script src="<?php echo $staticContent; ?>css/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php echo $staticContent; ?>css/admin/vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?php echo $staticContent; ?>css/admin/vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?php echo $staticContent; ?>css/admin/vendors/Flot/jquery.flot.js"></script>
<script src="<?php echo $staticContent; ?>css/admin/vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?php echo $staticContent; ?>css/admin/vendors/Flot/jquery.flot.time.js"></script>
<script src="<?php echo $staticContent; ?>css/admin/vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?php echo $staticContent; ?>css/admin/vendors/Flot/jquery.flot.resize.js"></script>



<!-- Custom Theme Scripts -->
<script src="<?php echo $staticContent; ?>css/admin/build/js/custom.js"></script>
<script src="<?php echo $staticContent; ?>js/moment.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>

<!-- Pagination -->
<script type='text/javascript' src='<?php echo $staticContent ?>js/paginathing.js'></script>

<script>
    $(document).ready(function () {
        $(".alert").delay(2000).slideUp(100, function () {
            $(this).alert('close');
        });
    });
</script>


<!-- Flot -->
<script>
    $(document).ready(function () {
        var data1 = [
            [gd(2012, 1, 1), 17],
            [gd(2012, 1, 2), 74],
            [gd(2012, 1, 3), 6],
            [gd(2012, 1, 4), 39],
            [gd(2012, 1, 5), 20],
            [gd(2012, 1, 6), 85],
            [gd(2012, 1, 7), 7]
        ];

        var data2 = [
            [gd(2012, 1, 1), 82],
            [gd(2012, 1, 2), 23],
            [gd(2012, 1, 3), 66],
            [gd(2012, 1, 4), 9],
            [gd(2012, 1, 5), 119],
            [gd(2012, 1, 6), 6],
            [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
            data1, data2
        ], {
            series: {
                lines: {
                    show: false,
                    fill: true
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 1,
                    fill: 0.4
                },
                points: {
                    radius: 0,
                    show: true
                },
                shadowSize: 2
            },
            grid: {
                verticalLines: true,
                hoverable: true,
                clickable: true,
                tickColor: "#d5d5d5",
                borderWidth: 1,
                color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
                tickColor: "rgba(51, 51, 51, 0.06)",
                mode: "time",
                tickSize: [1, "day"],
                //tickLength: 10,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Verdana, Arial',
                axisLabelPadding: 10
            },
            yaxis: {
                ticks: 8,
                tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false
        });

        function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
        }
    });
</script>


<!-- Skycons -->
<script>
    $(document).ready(function () {
        var icons = new Skycons({
            "color": "#73879C"
        }),
                list = [
                    "clear-day", "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                    "fog"
                ],
                i;

        for (i = list.length; i--; )
            icons.set(list[i], list[i]);

        icons.play();
    });
</script>

<!-- /Skycons -->

<!-- /Doughnut Chart -->


<!-- /bootstrap-daterangepicker -->



</body>
</html>
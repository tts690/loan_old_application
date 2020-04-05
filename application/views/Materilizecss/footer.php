<?php
$staticContent = base_url();
$jsFile = '';
if (isset($jsFiles)) {
    foreach ($jsFiles as $jsF) {
        $jsFile .= '<script type="text/javascript" src="' . $staticContent . 'js/' . $jsF . '"></script> ';
    }
}
echo $controller = $this->uri->segment(1);
echo $action = $this->uri->segment(2);
?>
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="row">© <?php echo date('Y'); ?> MyLoanDetails</div>
    </div>
</footer>
<script src="<?php echo $staticContent; ?>js/vendors/jquery-2.2.4.min.js"></script>
<script src="<?php echo $staticContent; ?>js/vendors/materialize/materialize.js"></script>
<script src="<?php echo $staticContent; ?>js/vendors/materialize/materialize.min.js"></script>
<?php echo $jsFile; ?>
<script type="text/javascript">
    $(document).ready(function () {
        $('.button-collapse').sideNav();
        $('.parallax').parallax();
        $('.modal-trigger').leanModal();

        if ($('#error').length) {
            Materialize.toast($('#error').text(), 4000);
        }
    });
</script>
<!--  Page rendered in {elapsed_time} -->
</body>
</html>
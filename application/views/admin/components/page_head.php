
<?php
$staticContent = base_url();
$cssFile = '';

if (isset($cssFiles)) {
    foreach ($cssFiles as $cssF) {
        $cssFile .= '<link rel="stylesheet" type="text/css" href="' . $staticContent . 'css/' . $cssF . '" />';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <title>My Loan Details | <?php echo $pageTitle; ?></title>
		
		<!--favicon --->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $staticContent; ?>images/1469772987.ico">   
		
        <!-- Bootstrap -->
        <link href="<?php echo $staticContent; ?>css/admin/vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo $staticContent; ?>css/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo $staticContent; ?>css/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo $staticContent; ?>css/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="<?php echo $staticContent; ?>css/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?php echo $staticContent; ?>css/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

        <!-- Custom Theme Style -->
        <link href="<?php echo $staticContent; ?>css/admin/build/css/custom.css" rel="stylesheet">
        <link href="<?php echo $staticContent; ?>css/admin/css/style.css" rel="stylesheet">   
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css"/>
        <link href="<?php echo $staticContent; ?>/css/admin/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
        <link href="<?php echo $staticContent; ?>/css/admin/vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">        
        <!-- Pagination -->
        <link href='http://www.jqueryscript.net/css/jquerysctipttop.css' rel='stylesheet' type='text/css'>

        <?php echo $cssFile; ?>
        <script>
            siteurl = '<?php echo $staticContent; ?>';
        </script>
    </head>
    <body>		
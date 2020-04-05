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
        <title>MyLoanDetails | <?php echo $pageTitle; ?></title>
        <!-- CSS  -->
        <link href="<?php echo $staticContent; ?>css/vendors/materialize/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo $staticContent; ?>css/vendors/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="<?php echo $staticContent; ?>css/vendors/materialize/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <?php echo $cssFile; ?>
        <script>
            siteurl = '<?php echo $staticContent; ?>';
        </script>
    </head>
    <body>
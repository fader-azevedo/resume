<!DOCTYPE html>
<html lang="en" class="root-text-sm">
<head>
    <meta charset="utf-8">
    <title>
        Fader
    </title>
    <meta name="description" content="Profile,Resume,Portfolio">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="" rel="stylesheet" media="screen, print" href="./assets/css/vendors.bundle.css">
    <link id="" rel="stylesheet" media="screen, print" href="./assets/css/app.bundle.css">
    <link id="" rel="stylesheet" media="screen, print" href="./assets/css/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="./assets/css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="./assets/css/fa-solid.css">
</head>
<body class="mod-bg-1 mod-nav-link mod-skin-dark nav-function-fixed">

<?php include 'view/template/script_loader.php' ?>
<div class="page-wrapper">
    <div class="page-inner">
        <?php include 'view/template/aside.php' ?>
        <div class="page-content-wrapper">
            <?php include 'view/template/header.php' ?>
            <main id="js-page-content" role="main" class="page-content">
                <?php include 'view/about.php' ?>
            </main>
            <div class="page-content-overlay" data-action="toggle" data-class="mobile-nav-on"></div>
        </div>
    </div>
</div>

<?php include 'view/template/settings.php' ?>

<script src="./assets/js/vendors.bundle.js"></script>
<script src="./assets/js/app.bundle.js"></script>
<script>
    $(document).ready(function () {

        $('.link-main').on('click', function () {
            const target = $(this).data('target');
            get_view(target);
        });
    });

    function get_view(file) {
        $.ajax({
            url: 'model/controller.php',
            type: 'POST',
            data: {
                action: 'render',
                view: file,
            },
            beforeSend: function () {
                console.log('');
            },
            success: function (data) {
                $('#js-page-content').html(data)
            },
            error: function () {
                console.log('error');
            }
        });
    }
</script>
</body>
</html>

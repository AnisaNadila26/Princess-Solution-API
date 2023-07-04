<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="shortcut icon" href="/assets/images/logop.png">
    <title>Princess Solution</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link href="/css/templatemo-digital-trend.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>


<?= $this->renderSection('myscript'); ?>

<body>
    <?= $this->renderSection('content'); ?>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>

    <script>
        $('#pkManual').hide();
        $('#pkMatic').hide();
        $('#detailsnab').hide();
        $('#detailsnas').hide();
        $('#detailsavnew').hide();
        $('#detailsgmb').hide();
        $('#detailsgmm').hide();

        $('#btnManual').click(function() {
            $('#pkManual').toggle();
            $('#pkMatic').hide();
        });

        $('#btnMatic').click(function() {
            $('#pkMatic').toggle();
            $('#pkManual').hide();
        });

        $('#nab').click(function() {
            $('#detailsnab').toggle();
            $('#detailsnas').hide();
            $('#detailsavnew').hide();
            $('#detailsgmb').hide();
            $('#detailsgmm').hide();
        })

        $('#nas').click(function() {
            $('#detailsnas').toggle();
            $('#detailsnab').hide();
            $('#detailsavnew').hide();
            $('#detailsgmb').hide();
            $('#detailsgmm').hide();
        })

        $('#avnew').click(function() {
            $('#detailsavnew').toggle();
            $('#detailsnab').hide();
            $('#detailsnas').hide();
            $('#detailsgmb').hide();
            $('#detailsgmm').hide();
        })

        $('#gmb').click(function() {
            $('#detailsgmb').toggle();
            $('#detailsnab').hide();
            $('#detailsnas').hide();
            $('#detailsavnew').hide();
            $('#detailsgmm').hide();
        })

        $('#gmm').click(function() {
            $('#detailsgmm').toggle();
            $('#detailsnab').hide();
            $('#detailsnas').hide();
            $('#detailsavnew').hide();
            $('#detailsgmb').hide();
        })
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en" data-ng-app="demoApp">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <base href="<?php echo base_url()?>">
    <title>{{ title }}</title>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600,400italic' rel='stylesheet' type='text/css'>
    <!--------------------------------------------------- LIBs ---------------------------------------------------->

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url()?>assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!------------------------------ ANGULAR LIBS -------------------------------->
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/angular.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/angular-route.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/angular-cookies.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/angular-cookie.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.<?php echo base_url()?>assets/js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--------------------------------------------------- APP JSs ---------------------------------------------------->

    <!-- HELPER FUNCTIONS FILE -->
    <script type="text/javascript" src="<?php echo base_url()?>ng/helpers/custom.js"></script>
    <!-- ------------------ ANGULAR APP FILES -------------------- -->

    <!-- CONFIG AND ROUTES FILE -->
    <script type="text/javascript" src="<?php echo base_url()?>ng/config/config.js"></script>

    <!-- MODELS -->
    <script type="text/javascript" src="<?php echo base_url()?>ng/models/datafactory.js"></script>

    <!-- CONTROLLERS -->
    <script type="text/javascript" src="<?php echo base_url()?>ng/controllers/common.js"></script>
</head>

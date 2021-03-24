<!DOCTYPE html>
<html>

<head>
    <title>RubyNext</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" shrink-to-fit="no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url() ?>assets/user/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url() ?>assets/user/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url() ?>assets/user/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>assets/user/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url() ?>assets/user/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url() ?>assets/user/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url() ?>assets/user/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url() ?>assets/user/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>assets/user/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url() ?>assets/user/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>assets/user/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url() ?>assets/user/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/user/images/favicon-16x16.png">
    <!-- favicons -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/user/css/custom-responsive-style.css">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/user/scripts/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/user/scripts/plugin-active.js"></script>
</head>

<body>
    <?php $this->load->view('home/sections/header') ?>
    <?php $this->load->view('home/sections/banner') ?>

    <a href="#Services" class="mscroll"><img src="<?php echo base_url() ?>assets/user/images/mouse-icon.png" alt="mouse icon"></a>

    <?php $this->load->view('home/sections/services') ?>

    <?php $this->load->view('home/sections/recruitment') ?>
    <?php $this->load->view('home/sections/planning') ?>
    <?php $this->load->view('home/sections/job_description') ?>

    <?php $this->load->view('home/sections/footer') ?>
</body>

</html>
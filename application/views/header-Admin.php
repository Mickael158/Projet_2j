<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Features-Large-Icons-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/swiper-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Simple-Slider-swiper-bundle.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Simple-Slider.css'); ?>">
</head>

<body style="width: 100%;">
    <section id="hero" style="width: 100%;background: var(--bs-gray-200);">
        <div id="hero-top" style="background: #000000;">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="#" style="width: 78px;height: 60px;background: url(&quot;<?php echo base_url('assets/img/kisspng-freihandelsabkommen-treaty-north-american-free-tra-5b4c60db6f9f03.1069406315317321874572.png'); ?>&quot;) center / cover no-repeat;"></a><button style="background-color: white;" data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1" style="font-family: Montserrat, sans-serif;">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/HomeCL/allProposition'); ?>" style="font-weight: bold;color: rgba(254,247,247,0.9);"><i class="fas fa-comments"></i>&nbsp; &nbsp; Statistiques</a></li>
                        </ul>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link active fs-4" href="<?php echo base_url('index.php/HomeCL/home'); ?>" style="color: rgb(233,6,183);border-color: rgb(250,0,255);"><i class="far fa-user" style="color: rgb(240,13,176);"></i>&nbsp; &nbsp; <?php echo $this->session->userdata('membre')['prenom']; ?> </a></li>
                            <li class="nav-item"><a class="nav-link active fs-4" href="<?php echo base_url('index.php/HomeCL/disconnect'); ?>" style="color: rgb(65,65,93);border-color: rgb(175,0,255);">Log out <i class="fas fa-door-open" aria-hidden="true" style="color: rgb(65,65,93);"></i>&nbsp; &nbsp;</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </section>

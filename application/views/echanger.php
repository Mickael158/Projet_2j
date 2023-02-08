<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/swiper-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Simple-Slider-swiper-bundle.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Simple-Slider.css'); ?>">
</head>

<body>
    <div style="text-align: center;background: var(--bs-gray-400);">
        <?php foreach ($data as $info) { ?>
            <h1 style="text-align: center;"><?php echo $info['nomobj']; ?></h1>
            <p><?php echo $info['description']; ?></p>
            <div class="simple-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach($info['picture'] as $picture) { ?>
                        <div class="swiper-slide" style="background: url(&quot;<?php echo base_url('assets/picture/') . $picture; ?>&quot;) center center / cover no-repeat;"></div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <a href="<?php echo base_url('index.php/HomeCL/echageObject/'.$info['ido'].'/'.$info['idmembre']) ?>"><button class="btn btn-primary" type="button" style="color: var(--bs-black);background: var(--bs-pink); margin-top: 8px;">Proposer l'echange avec...</button></a>
        <?php } ?>    
    </div>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Simple-Slider-swiper-bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Simple-Slider.js'); ?>"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Lightbox-Gallery-baguetteBox.min.css'); ?>">
</head>

<body>
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Vos articles</h2>
                    <p>Voulez vous l'echanger avec la quelle de vos article :</p>
                </div>
            </div>
            <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3" data-bss-baguettebox="" style="text-align: center;">
                <?php foreach ($data as $info) { ?>
                    <div class="col">
                            <a href="<?php echo base_url('assets/picture/') . $info['picture'][0]; ?>">
                                <img class="img-fluid" src="<?php echo base_url('assets/picture/') . $info['picture'][0]; ?>">
                            </a>
                            <a href="<?php echo base_url('index.php/HomeCL/demandeEchange/'.$info['ido']); ?>">
                                <button class="btn btn-primary" type="button" style="background: var(--bs-pink); margin: 15px;">Echanger</button>
                            </a>
                        </div>
                <?php } ?>
        </div>
    </section>
    <script src="<?php echo base_url('assets/js/Lightbox-Gallery-baguetteBox.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Lightbox-Gallery.js'); ?>"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Team-Horizontal-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Team-Horizontal-images.css'); ?>">
</head>

<body style="text-align: center;background: rgb(0,0,0);">
    <h1 style="color: rgb(0,0,0);">Echange</h1>
    <div class="table-responsive" style="color: rgb(255,255,255);">
        <table class="table">
            <thead style="color: rgb(0,0,0);">
                <tr style="color: rgb(0,0,0));">
                    <th>Vos article</th>
                    <th><i class="far fa-handshake"></i></th>
                    <th>Ses article</th>
                </tr>
            </thead>
            <tbody style="color: var(--bs-table-bg);">
                <?php foreach($data as $info) { ?>
                    <tr style="color: var(--bs-table-bg);">
                        <td style="color: var(--bs-table-bg);">
                            <div class="col" style="color: var(--bs-card-cap-bg);">
                                <div class="card border-0 shadow-none" style="color: var(--bs-card-cap-bg);">
                                    <div class="card-body d-flex align-items-center p-0" style="color: var(--bs-table-bg);text-align: left;"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="130" height="130" src="<?php echo base_url('assets/picture/') . $info['me'][0]['picture'][2]; ?>">
                                        <div>
                                            <h5 class="fw-bold text-primary mb-0" style="color: rgb(234,237,240);"><?php echo $info['me'][0]['nomobj']; ?></h5>
                                            <p class="text-muted mb-1"><?php echo $info['me'][0]['prenom']; ?></p>
                                            <ul class="list-inline fs-6 text-muted w-100 mb-0">
                                                <li class="list-inline-item text-center">
                                                    <div class="d-flex flex-column align-items-center"></div>
                                                </li>
                                                <li class="list-inline-item text-center">
                                                    <div class="d-flex flex-column align-items-center"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-5">
                                <div class="card border-0 shadow-none"></div>
                            </div>
                        </td>
                        <td style="text-align: center;">
                            <a href="<?php echo base_url('index.php/HomeCL/approveChange/'.$info['id']);?>"><button class="btn btn-secondary" type="button" style="background-color: green;">Accepter</button></a>
                            <a href="<?php echo base_url('index.php/HomeCL/cancel/'.$info['id']);?>"><button class="btn btn-secondary" type="button" style="margin: 10px; background-color: red;">Refuser</button></a>
                        </td>
                        <td style="text-align: right;">
                            <div class="col">
                                <div class="card border-0 shadow-none">
                                    <div class="card-body d-flex align-items-center p-0" style="text-align: right;"><img class="rounded-circle flex-shrink-0 me-3 fit-cover" width="130" height="130" src="<?php echo base_url('assets/picture/') . $info['other'][0]['picture'][0]; ?>">
                                        <div>
                                            <h5 class="fw-bold text-primary mb-0" style="color: var(--bs-red);"><?php echo $info['other'][0]['nomobj']; ?></h5>
                                            <p class="text-muted mb-1"><?php echo $info['other'][0]['prenom']; ?></p>
                                            <ul class="list-inline fs-6 text-muted w-100 mb-0">
                                                <li class="list-inline-item text-center">
                                                    <div class="d-flex flex-column align-items-center"></div>
                                                </li>
                                                <li class="list-inline-item text-center">
                                                    <div class="d-flex flex-column align-items-center"></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.jsé"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</body>

</html>
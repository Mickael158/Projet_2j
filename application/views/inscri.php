<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Inscription</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/Login-Form-Basic-icons.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>

<body style="background: linear-gradient(125deg, var(--bs-indigo), rgb(199,47,123) 73%, var(--bs-pink) 100%);">
    <section class="py-4 py-xl-5" style="height: 100%;width: 100%;">
        <h1>Inscription</h1>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5" style="background: rgba(255,255,255,0);">
                        <div class="card-body d-flex flex-column align-items-center" style="background: rgba(244,244,244,0.52);box-shadow: -1px 16px 20px 9px;text-shadow: 0px 0px;border-radius: 8px;">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: rgb(0,0,0);"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-bounding-box">
                                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"></path>
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                                </svg></div>
                            <form class="text-center" method="post" id="form">
                                <div class="mb-3"><input class="form-control" type="text" name="nom" placeholder="Nom"/></div>
                                <div class="mb-3"><input class="form-control" type="text" name="prenom" placeholder="Prenom"/></div>
                                <div class="mb-3"><input class="form-control form-control" type="date" name="dtn" placeholder="Date de naissance" /></div>
                                <div class="mb-3"><input class="form-control" type="email" name="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" /></div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(0,0,0);">Confirm</button>
                                    <div id="spinner" style="display: none;">
                                        <div class="d-flex justify-content-center" style="margin-top: 8px;">
                                            <div class="spinner-border" role="status">
                                                <span class="sr-only"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-muted"><a href="<?php echo base_url('index.php/HomeCL/index'); ?>">Sign in</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/Inscri.js'); ?>"></script>
</body>

</html>
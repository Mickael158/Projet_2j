
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Takalo -takalo</h2>
                <p>Atakalozy ny entanao mba ahazoanao tsaratsara kokoa</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <?php foreach ($data as $info) { ?>
                <div class="col">
                    <div class="card"><img class="card-img-top w-100 d-block fit-cover" style="height: 200px;" src="<?php echo base_url('assets/picture/') . $info['picture'][0]; ?>">
                        <div class="card-body p-4" style="padding-top: -15px;">
                            <h4 class="card-title"><?php echo $info['nomobj']; ?></h4>
                            <p class="card-text"><?php echo $info['description']; ?></p>
                            <div class="d-flex">
                                <div>
                                    <p class="fw-bold mb-0"><?php echo $info['prenom']; ?></p>
                                </div>
                                <div class="button" style="margin-left: 70px;">
                                    <a href="<?php echo base_url('index.php/HomeCL/echager/'.$info['ido']); ?>"><button class="btn btn-primary" type="button" style="background: var(--bs-pink);color: var(--bs-black);">ECHANGER</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
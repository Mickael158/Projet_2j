
    <div style="text-align: center;background: var(--bs-gray-300);">
        <section class="py-4 py-xl-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <h2>Vos article</h2>
                    </div>
                </div>
                <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3" data-bss-baguettebox="">
                    <?php foreach ($data as $info) { ?>
                        <div class="col">
                            <h1 style="color: rgb(9,11,14);"><?php echo $info['nomobj']; ?></h1>
                            <p><?php echo $info['description']; ?></p>
                            <img class="img-fluid" style="height: 350px; width: auto;" src="<?php echo base_url('assets/picture/') . $info['picture'][0]; ?>">
                            <div class="d-flex" style="justify-content: center; align-items: center; margin-top: 8px;">
                                <button class="btn btn-primary" type="button" style="text-align: center;transform: translate(15px);background: var(--bs-pink);color: var(--bs-black);">Modifier</button>
                                <button class="btn btn-primary" type="button" style="text-align: center;transform: translate(15px);background: var(--bs-pink);color: var(--bs-black);">Supprimer</button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </div>
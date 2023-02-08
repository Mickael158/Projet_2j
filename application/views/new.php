<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body>
    <section class="py-4 py-xl-5" style="background: linear-gradient(-163deg, var(--bs-indigo), var(--bs-pink));">
        <div class="container">
            <div class="row" style="background: rgba(255,255,255,0);">
                <div class="col" style="background: rgba(255,255,255,0);"></div>
                <div class="col-md-6 col-xl-4">
                    <div>
                        <?php if(isset($response)) echo $response; ?>
                        <form class="p-3 p-xl-4" action="<?php echo base_url('index.php/Upload/index'); ?>" method="post" enctype='multipart/form-data'>
                            <h4>Publier un nouveau article</h4>
                            <p style="color: rgb(255,255,255);">Tous le monde peut vous envoyer des proposition d'echange apres la publlication de votre article</p>
                            <div class="mb-3"><label class="form-label" for="name">Nom de l'article</label><input id="name" class="form-control" type="text" name="name" style="background: rgba(255,255,255,0.6);" placeholder="Caraccteriser l'article" /></div>
                            <div class="mb-3"><label class="form-label" for="name">Categories</label><div style="display: flex;"><select class="form-select" style="background: rgba(255,255,255,0.53);">
                                    <optgroup label="All categorie">
                                        <?php foreach ($cat as $c) { ?>
                                        <option value="<?php echo $c['id']; ?>"><?php echo $c['nom']; ?></option>
                                        <?php } ?>
                                    </optgroup>
                                </select>
                                <button style="margin-left: 8px;" class="btn btn-primary" type="button"><i class="fas fa-plus"></i> </button></div>
                            </div>
                            <div class="mb-3"><label class="form-label" for="email">Image</label><div style="display: flex;"><input class="form-control" type="file" name="file" style="background: rgba(255,255,255,0.54);"><button style="margin-left: 8px;" class="btn btn-primary" type="button"><i class="fas fa-plus"></i> </button></div></div>
                            <div class="mb-3"><label class="form-label" for="message">Description</label><textarea id="message" class="form-control" name="message" rows="6" style="height: 73px;background: rgba(255,255,255,0.53);" placeholder="Apropos de cette article"></textarea></div>
                            <div class="mb-3"><label class="form-label" for="name">Prix estimatif</label><input id="name" class="form-control" type="number" name="prix" style="background: rgba(255,255,255,0.6);" placeholder="Prix estimatif"/></div>
                            <div class="mb-3"><input class="btn btn-primary" type="submit" name="upload" value="Send" style="background: var(--bs-btn-border-color);"/></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
<h1>Nos articles</h1>

<?php foreach ($produits as $produit) { ?>

    <div>
        <!-- <h2><a href="?page=produit&id=<?= $produit['id_produit'] ?>"><?= $article['titre'] ?></a>  </h2> -->
        <img src="<?= $produit['image'] ?>" alt="">
        <p>
            <?= $produit['description'] ?>
            <?= $produit['prix'] ?>

        </p>

        <br>

    </div>

<?php } ?>


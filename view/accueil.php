<h1>Bienvenu sur SmartBike !</h1>

<h2>Notre dernier vélo :</h2>
<div class="lastProduct">
    <a href="?page=commander&velo=<?= $product['id_velo'] ?>">
        <h3>
            <?= $product["nom"] ?>
        </h3>
        <img src="<?= $product['image'] ?>" alt="le dernier article en date">
        <p>
            Description : </br>
            <?= $product["description"] ?>
        </p>
    </a>
</div>
<h1>Commande</h1>
<form action="" method="post">
Produit :
    <select name="veloDropdown" id="veloDropdown">
        <option value="<?= $produits['nom'] ?>">
    </select> </br>
Nom : <input type="text" name="nom"required> <br>
Prenom : <input type="text" name="prenom"required> <br>
Email : <input type="email" name="email" required > <br>
Tel : <input type="text" name="tel" required> <br>
message : <input type="text" name="message" required> <br>

<button>Envoyer</button>

</form>


<?php
// Connexion à la base de données
$db = mysqli_connect('localhost', 'jeux-videos', 'IsImA_ZZ2/%', 'jeux-videos', 3307)
or die('Erreur SQL'.mysqli_error($db));
$db->query('SET NAMES UTF8');

// Suppression des articles du panier
$query = "DELETE FROM panier_article WHERE id_panier = 1";
if ($db->query($query)) {
    echo "Le panier a été vidé.";
    header("Location: index.php");
} else {
    echo "Erreur lors de la suppression du panier : " . $db->error;
}

mysqli_close($db);
?>

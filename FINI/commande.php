<?php
// Traitement du formulaire
if (isset($_POST['produit-1'])) {
    $produit = $_POST['produit-1'];
    $quantite = $_POST['quantite-1'];
    // Ajouter le produit au panier ou à la base de données
    // Afficher un message de confirmation ou d'erreur
} elseif (isset($_POST['produit-2'])) {
    $produit = $_POST['produit-2'];
    $quantite = $_POST['quantite-2'];
    // Ajouter le produit au panier ou à la base de données
    // Afficher un message de confirmation ou d'erreur
} else {
    // Rediriger l'utilisateur vers la page d'accueil ou afficher un message d'erreur
}
?>
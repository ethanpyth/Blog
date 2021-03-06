<?php

// On demande les 5 derniers billets (mod�le)
include_once('Models/blog/get_billets.php');
$billets = get_billets(0, 5);

// On effectue du traitement sur les donn�es (contr�leur)
// Ici, on doit surtout sécuriser l'affichage
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu'] = nl2br(htmlspecialchars($billet['contenu']));
}

// On affiche la page (Views)
include_once('Views/blog/index.php');


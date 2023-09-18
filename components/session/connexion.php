<?php
include('../../includes/dbconnect.php');

    $pseudoSaisi = $_GET["user"];
    echo 'Pseudo récupéré : '.$pseudoSaisi.'<br>';

    $req = 'SELECT * FROM users WHERE user_pseudo = '.$pseudoSaisi;
    echo 'Requete SQL : '.$req.'<br>';

    $req_results = $connexion->query($req);
    echo 'Résultat de la requête : '. $req_results .'<br>';

    foreach ($req_results as $result) {
        echo $result[1];
    }


  ?>











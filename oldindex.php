<?php


try {
    $connexion = new PDO('mysql:host=localhost;dbname=BD_GAMEGOGS','zisquier','pass');
} catch (PDOException $getError) {
    echo 'erreur :'.$getError->getMessage();
}
$req = 'SELECT * FROM video_games';

$req_results = $connexion -> query($req);

foreach ($req_results as $result) {
    echo '<p>';
    echo ' <img src="./assets/' . $result[4] . '" alt="">';
    print_r($result[3]);
    echo '</p>';
}  
?>







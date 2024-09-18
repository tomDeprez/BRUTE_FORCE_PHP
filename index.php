<?php
// $handle = fopen("password.txt", "r");
// echo($handle);


#URL login : http://192.168.28.145/
# utiliser CURL avec les données login et password en POST

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://192.168.28.145/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,
            "username=test&password=test");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

curl_close($ch);

if (strpos($server_output, 'Nom d\'utilisateur ou mot de passe incorrect') !== false) {
    // Le texte "Nom d'utilisateur ou mot de passe incorrect" a été trouvé
    echo "Erreur : Nom d'utilisateur ou mot de passe incorrect";
} else {
    // Le texte n'a pas été trouvé
    echo "Connexion réussie ou autre réponse";
}

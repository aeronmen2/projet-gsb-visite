<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

include_once "$racine/modele/medecin.php";
include_once "$racine/modele/medecinDAO.php";
include_once "$racine/modele/connexionDAO.php";
include_once "$racine/modele/visiteurDAO.php";
include_once "$racine/modele/visiteur.php";

$listemedecin = medecinDAO::getMedecinDAO();


if (visiteurDAO::isloggedon()){
    include "$racine/vue/entete.html.php";
    include "$racine/vue/listemedecins.html.php";
    include "$racine/vue/footer.html.php";
}
else {

    include "$racine/vue/connexion.html.php";

}

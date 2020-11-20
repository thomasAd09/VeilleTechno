<?php ob_start();

$sous_titre ='Local File Include (LFI)';

$fichier = $_GET['fichier'];

if($fichier == "") 
{
    include("FailleLFI/LFIaccueil.php");   
}
else
{
    include("fichier/$fichier");
}

$contenu = ob_get_clean();
require 'gabarit.php';
?>
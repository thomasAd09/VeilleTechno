<?php
ob_start();
session_start();

if(isset($_SESSION['username'])) {
echo "Vous êtes connecté en tant que <strong>".$_SESSION['username']."</strong><br/>";
}else {
header('location: vueFailleSQL.php');
}
?>

<a href="logout.php">Se Déconnecter</a>

<?php
$contenu = ob_get_clean();
require "Vue/gabarit.php";
?>

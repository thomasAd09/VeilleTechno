<?php

$sous_titre = "Local File Include";

ob_start(); 

$page = array_key_exists('page', $_GET) ? $_GET['page'] : null ;
if (!is_null($page)) {
  include($page) ;
} else {
  echo "Aucun page à inclure..." ;
}   

?>



<?php

$contenu = ob_get_clean();

require 'gabarit.php';
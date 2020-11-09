<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="../Contenu/style.css" />
    <title><?= $titre ?></title>   <!-- Élément spécifique -->
  </head>
  <body>
    <div id="global">
      <header>
        <h1 id="titreBlog">Veille Technologique</h1>
            <ul>
                <li><a href="index.php">Présentation</a></li>
                <li><a href="vueFailleSQL.php">Faille SQL</a></li>
                <li><a href="vueLFI.php">Faille LFI</a></li>
                <li class="dropdown">
                    <a href="vueFailleXSS.php" class="dropbtn">Faille XML</a>
                    <div class="dropdown-content">
                        <a href="vueReflectedXSS.php">Reflected XSS</a>
                        <a href="vueStoredXSS.php">Stored XSS</a>
                        <a href="vueCSSXSS.php">Cross Site Scripting XSS</a>
                    </div>
                </li>
                <li><a href="vueManInTheMiddle.php">Attaque de l'Homme du Milieu</a></li>
            </ul>
        <p><h3><?php echo $sous_titre; ?></h3></p>
      </header>
      <div id="contenu">
        <?= $contenu ?>   <!-- Élément spécifique -->
      </div>
      <footer id="piedBlog">
        Site réalisé par Thomas Adriao et Kilian Fournier.
      </footer>
    </div> <!-- #global -->
  </body>
</html>

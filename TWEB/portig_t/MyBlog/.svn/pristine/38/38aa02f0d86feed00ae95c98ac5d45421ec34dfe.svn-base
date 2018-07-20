<?php
session_start();
if (empty($_SESSION))
{
  header('Location:/index.php');
die ('redirection vers: localhost');
}
$user = 'root';
$password = 'root';
$db = 'My_Blog';
$host = '127.0.0.1';
$port = 3306;
$socket = '127.0.0.1:/Applications/MAMP/tmp/mysql/mysql.sock';

$link = mysqli_init ();
$success = mysqli_real_connect (
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port,
   $socket
);
$messagesParPage = 5;
$sql_recherche = 'SELECT * FROM Articles';
        $sql_count = 'SELECT COUNT(*) AS total FROM Articles where 1 = 1';
        //Une connexion SQL doit être ouverte avant cette ligne...
        $retour_total = $link->query($sql_count); //Nous récupérons le contenu de la requête dans $retour_total
        $donnees_total = $retour_total->fetch_assoc(); //On range retour sous la forme d'un tableau.
        $total = $donnees_total['total']; //On récupère le total pour le placer dans la variable $total.
        $nombreDePages = ceil($total/$messagesParPage);
        if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
        {
            $pageActuelle=intval($_GET['page']);
            if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
            {
                $pageActuelle=$nombreDePages;
            }
        } else // Sinon
        {
            $pageActuelle = 1; // La page actuelle est la n°1
        }
        $premiereEntree = ($pageActuelle-1)*$messagesParPage; // On calcul la première entrée à lire

       $result = $link->query($sql_recherche.' LIMIT '.$premiereEntree.', '.$messagesParPage.'');

?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
    <meta charset="utf-8" />
    <title>My_Blog</title>
</head>
<body>
    <h1 id='main-title'>My_Blog</h1>
<div id='create'> 
        <a href="articles.php">Creer un article</a>
</div>

<?php
  if ($result->num_rows != 0):
    while ($rows = $result->fetch_assoc()):
?>
  Titre : <?php echo $rows['titre']; ?><br />

  Description :  <?php echo $rows['description']; ?><br />
  
  Resume :  <?php echo $rows['resume']; ?><br />
  <?php
endwhile;
endif;
?>
<?php
    $pg_skiped = false;
        for($i=1; $i<=$nombreDePages; $i++) {
            if (($i <= 3 || $i >= $nombreDePages - 3) || ($i >= $pageActuelle -1 && $i <= $pageActuelle + 1)) {
                echo '<li><a href="'.$url_base.'?page='.$i."\n".'">' . $i . '</a></li>';
                $pg_skiped = false;
                    } else {
                        if (!$pg_skiped) {
                            echo '<li class="disabled"><a>...</a></li>';
                            $pg_skiped = true;
                        }
                    }
                }
?>
</body>
</html>


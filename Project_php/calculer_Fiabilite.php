<?php
$fqn = $_GET['fqn'];
$fql = $_GET['fql'];
$fiabilite = $fql * $fqn;

    $db=new PDO('mysql:host=localhost;dbname=iot_db','root','');

 if(isset($_POST["btnEn"]) AND $_POST['btnEn']=='Enregistrer'){
    $reqSql="INSERT INTO fiabilitetable VALUES('','$fqn','$fql','$fiabilite')";
    $db->exec($reqSql);
    header('location:index.php');
}
?>


<!doctype html>
<html lang="fr">
<head>
</head>
<body>
    <p><h1>Iot project </h1></p>
<form action="" method="post">
    <input type="number" name="resultat_Calcul" placeholder="resultat fiabilité" value=<?php echo $fiabilite ?>  ><br><p></p>
    <input type="submit" id="enregistrer" name="btnEn" value="Enregistrer" />
</form>
    </body>
</html>
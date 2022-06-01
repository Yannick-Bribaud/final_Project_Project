<?php
$nbrRelation = $_GET['nbr_relation'];
$nbrObjet = $_GET['nbr_objet'];
$centralite = $nbrRelation/$nbrObjet;

    $db=new PDO('mysql:host=localhost;dbname=iot_db','root','');

 if(isset($_POST["btnCentralite"]) AND $_POST['btnCentralite']=='Enregistrer'){
    $reqSql="INSERT INTO centralite VALUES('','$nbrRelation','$nbrObjet','$centralite')";
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
    <input type="number" name="Honnetete" placeholder="Honnêteté" value=<?php echo $centralite ?> ><br><p></p>
    <input type="submit" id="enregistrer" name="btnCentralite" value="Enregistrer" />
</form>
    </body>
</html>
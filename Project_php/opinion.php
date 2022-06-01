<?php
$rc = $_GET['rc'];
$valeur = $_GET['valeur'];
$Opinion = $rc*$valeur;

    $db=new PDO('mysql:host=localhost;dbname=iot_db','root','');

 if(isset($_POST["btnOpinion"]) AND $_POST['btnOpinion']=='Enregistrer'){
    $reqSql="INSERT INTO OpinionTable VALUES('','$rc','$valeur','$Opinion')";
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
    <input type="number" name="Honnetete" placeholder="Honnêteté" value=<?php echo $Opinion ?> ><br><p></p>
    <input type="submit" id="enregistrer" name="btnOpinion" value="Enregistrer" />
</form>
    </body>
</html>
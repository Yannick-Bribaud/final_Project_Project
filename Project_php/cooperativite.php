<?php
$nta = $_GET['nta'];
$ntr = $_GET['ntr'];
$cooperativite = $nta/$ntr;

    $db=new PDO('mysql:host=localhost;dbname=iot_db','root','');

 if(isset($_POST["btnEnCoop"]) AND $_POST['btnEnCoop']=='Enregistrer'){
    $reqSql="INSERT INTO cooperativite VALUES('','$nta','$ntr','$cooperativite')";
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
    <input type="number" name="coop" placeholder="cooperativite" value=<?php echo $cooperativite ?> ><br><p></p>
    <input type="submit" id="enregistrer" name="btnEnCoop" value="Enregistrer" />
</form>
    </body>
</html>
<?php
$Nep = $_GET['NEP'];
$Tec = $_GET['TEC'];
$Honnetete = $Nep/$Tec;

    $db=new PDO('mysql:host=localhost;dbname=iot_db','root','');

 if(isset($_POST["btnEnHonnete"]) AND $_POST['btnEnHonnete']=='Enregistrer'){
    $reqSql="INSERT INTO honnetete VALUES('','$Nep','$Tec','$Honnetete')";
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
    <input type="number" name="Honnetete" placeholder="Honnêteté" value=<?php echo $Honnetete ?> ><br><p></p>
    <input type="submit" id="enregistrer" name="btnEnHonnete" value="Enregistrer" />
</form>
    </body>
</html>
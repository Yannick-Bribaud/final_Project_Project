<?php

$croyabilite = $_GET['Croyabilite'];
$exactitude = $_GET['Exactitude'];
$nbreMsgRecu = $_GET['NbreMsgRecu'];
$nbreMsgAttendu = $_GET['NbreMsgAttendu'];

$DigneDeConfiance=$nbreMsgRecu/$nbreMsgAttendu;
$credibilite_source=$croyabilite + $exactitude + $DigneDeConfiance;
$completude=$DigneDeConfiance;

$credibilite_msg=$credibilite_source+$completude;
$Credibilite = $credibilite_source * $credibilite_msg;

$db=new PDO('mysql:host=localhost;dbname=iot_db','root','');

 if(isset($_POST["btnEnCredit"]) AND $_POST['btnEnCredit']=='Enregistrer'){
    $reqSql="INSERT INTO credibiliteTable VALUES('','$croyabilite','$exactitude','$nbreMsgRecu','$nbreMsgAttendu','$DigneDeConfiance','$credibilite_source','$completude','$credibilite_msg','$Credibilite')";
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
    <input type="number" name="resultat_Calcul" placeholder="resultat credibilité" value=<?php echo $Credibilite ?>  ><br><p></p>
    <input type="submit" id="enregistrer" name="btnEnCredit" value="Enregistrer" />
</form>
    </body>
</html>
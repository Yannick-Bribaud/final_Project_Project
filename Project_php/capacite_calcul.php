<?php
$Nm = $_GET['nm'];
$Ccm = $_GET['ccm'];
$Delay = $_GET['Delay'];
$CapaciteCalcul=0;

    if(($Delay * $Ccm)>0 ){
        $CapaciteCalcul=$Nm/($Delay * $Ccm);
    }else{
        echo 'Le delai ou la capacité de calcul doivent être différents de 0';
    }

    $db=new PDO('mysql:host=localhost;dbname=iot_db','root','');

 if(isset($_POST["btnEnregCapacite"]) AND $_POST['btnEnregCapacite']=='Enregistrer'){
    $reqSql="INSERT INTO capacitecalcultable VALUES('','$Nm','$Ccm','$Delay','$CapaciteCalcul')";
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
    <input type="number" name="Capacite" placeholder="Nombre Transaction" value=<?php echo $CapaciteCalcul ?>  ><br><p></p>
    <input type="submit" id="enregistrer" name="btnEnregCapacite" value="Enregistrer"/>
</form>
    </body>
</html>
<?php
$Tj = $_GET['tempsFinal'];
$Ti = $_GET['tempsInitial'];
$Delay = $_GET['Delay'];
$NbreTransaction=0;

    if($Tj>= $Ti){
     $NbreTransaction=($Tj-$Ti)/$Delay;
    }else{
        echo 'le temps final doit être supérieur ou égal au temps initial';
    }

    $db=new PDO('mysql:host=localhost;dbname=iot_db','root','');

 if(isset($_POST["btnEnNbretransac"]) AND $_POST['btnEnNbretransac']=='Enregistrer'){
    $reqSql="INSERT INTO nbreTransactionTable VALUES('','$Tj','$Ti','$Delay','$NbreTransaction')";
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
    <input type="number" name="Transaction" placeholder="Nombre Transaction" value=<?php echo $NbreTransaction ?>  ><br><p></p>
    <input type="submit" id="enregistrer" name="btnEnNbretransac" value="Enregistrer" />
</form>
    </body>
</html>
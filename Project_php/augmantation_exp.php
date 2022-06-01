<?php

$exp_t = $_GET['exp_t'];
$alpha = $_GET['alpha'];
$maxExp = $_GET['maxExp'];

$delta_exp_t_1=$alpha-$alpha/$maxExp * $exp_t;
$exp_t_1=$exp_t + $delta_exp_t_1;

$db=new PDO('mysql:host=localhost;dbname=iot_db','root','');

 if(isset($_POST["btnEnExp_t_1"]) AND $_POST['btnEnExp_t_1']=='Enregistrer'){
    $reqSql="INSERT INTO experiencestable VALUES('','$exp_t','$alpha','$maxExp','$delta_exp_t_1','$exp_t_1')";
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
    <input type="number" name="experience" placeholder="Experience (t+1)" value=<?php echo $exp_t_1 ?>  ><br><p></p>
    <input type="submit" id="enregistrer" name="btnEnExp_t_1" value="Enregistrer" />
</form>
    </body>
</html>

<?php
    $db=new PDO('mysql:host=localhost;dbname=iot_db','root','');
?>

<!doctype html>
<html lang="fr">
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <p><h1>SIOT project </h1></p>

<form action="calculer_Fiabilite.php">
    <p><h1>FIABILITE </h1></p>
    <input id="numberPlaceHol" type="number" name="fqn" placeholder="fiabilité quantitative" min="1"><br><p></p>
    <input id="numberPlaceHol" type="number"name="fql" placeholder="fiabilité qualitative" step="0.01" min=0.01 max="1">
    <button>Calcul Fiabilité </button>
    <br><p></p>
</form>

<form action="calculer_Credibilite.php">
    <p><h1>CREDIBILITE </h1></p>
    <input id="numberPlaceHol" type="number" name="Croyabilite" placeholder="Croyabilite du msg" step="1" min="0" max="1"><br><p></p>
    <input id="numberPlaceHol" type="number"name="Exactitude" placeholder="Exactitude du msg" step="1" min="0" max="1"><br><p></p>
    
    <input id="numberPlaceHol" type="number" name="NbreMsgRecu" placeholder="taille du message reçu" step="1" min="0"><br><p></p>
    <input id="numberPlaceHol" type="number"name="NbreMsgAttendu" placeholder="taille du message cencé ètre reçu" step="1" min="1">
    <button>Calcul Crédibilité </button>
    <br><p></p>
</form>

<form action="nombre_transactions.php">
    <p><h1>Nombre de transactions</h1></p>
        <input id="numberPlaceHol" type="number" name="tempsFinal" placeholder="Temps Final" step="1" min="0" ><br><p></p>
        <input id="numberPlaceHol" type="number"name="tempsInitial" placeholder="Temps Initial" step="1" min="0"><br><p></p>
        <input id="numberPlaceHol" type="number" name="Delay" placeholder=" durée de pause d’un programme" step="1" min="1">
    <button>Calcul Nombre transactions </button>
    <br><p></p>
</form>

<form action="capacite_calcul.php">
    <p><h1>Capacité de calcul </h1></p>
        <input id="numberPlaceHol" type="number" name="nm" placeholder="Nombre de mesure" step="1" min="0" ><br><p></p>
        <input id="numberPlaceHol" type="number"name="ccm" placeholder="Capacite de calcul" step="1" min="0"><br><p></p>
        <input id="numberPlaceHol" type="number" name="Delay" placeholder=" durée de pause d’un programme" step="1" min="1">
    <button>Calcul Nombre transactions </button>
    <br><p></p>
</form>


<form action="cooperativite.php">
    <p><h1>Coopérativité</h1></p>
        <input id="numberPlaceHol" type="number" name="nta" placeholder="Nombre de tâche à accomplir" step="1" min="0" ><br><p></p>
        <input id="numberPlaceHol" type="number"name="ntr" placeholder="Nombre de tâche requise" step="1" min="1">
    <button>coopération</button>
    <br><p></p>
</form>


<form action="Honnetete.php">
    <p><h1>Honnêteté</h1></p>
        <input id="numberPlaceHol" type="number" name="NEP" placeholder="Nombre d'expérience positive" step="1" min="0" ><br><p></p>
        <input id="numberPlaceHol" type="number"name="TEC" placeholder="Total des expériences collectées" step="1" min="1">
    <button>Honnêteté</button>
    <br><p></p>
</form>

<form action="augmantation_exp.php">
    <p><h1>Augmantation experience</h1></p>
        <input id="numberPlaceHol" type="number" name="exp_t" placeholder="experience(t+1)" step="1" min="0" ><br><p></p>
        <input id="numberPlaceHol" type="number"name="alpha" placeholder="valeur apha" step="0.1" min="0.1"><br><p></p>
        <input id="numberPlaceHol" type="number"name="maxExp" placeholder="max experience" step="1" min="0" max="1">
    <button>Experience t+1</button>
    <br><p></p>
</form>

<form action="opinion.php">
    <p><h1>opinion</h1></p>
        <input id="numberPlaceHol" type="number" name="rc" placeholder="valeur relation communication" step="0.1" min="0" ><br><p></p>
        <input id="numberPlaceHol" type="number"name="valeur" placeholder="valeur" step="0.1" min="0.0"><br><p></p>
    <button>Opinion</button>
    <br><p></p>
</form>

<form action="centralite.php">
    <p><h1>Centralité</h1></p>
        <input id="numberPlaceHol" type="number" name="nbr_relation" placeholder="nombre relation" step="1" min="0" ><br><p></p>
        <input id="numberPlaceHol" type="number"name="nbr_objet" placeholder="nombre d'objet" step="1" min="1"><br><p></p>
    <button>centralité</button>
    <br><p></p>
</form>


</body>
</html>
<?php
$text = filter_input(INPUT_POST, 'txt');
if (!empty($text)){
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', 'MY_PASSWORD');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage("error"));
}

$reponse = $bdd->query("INSERT INTO test2 (text, date)
values ('$text',now())");
if ($bdd->query($reponse)){
    echo "text submitted sucessfully";
}
else{
echo "Error: ". $reponse ."
". $bdd->error;
}
$bdd->close();
}

else{
echo "text should not be empty";
die();
}

?>

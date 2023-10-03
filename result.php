<?php
require_once ("functions.php");
var_dump($_POST);
if($_POST) {
$name = $_POST ['fname'];
    if(empty($name)) {
        echo "</br>nom vide";
    } else {
        echo "</br> Mon nom est:". $name;
    }

$namelength = $namelength ($_POST['fname']);

echo'</br>';
var_dump($namelength);

if(!$namelength['valid'])      {

}

}
?>
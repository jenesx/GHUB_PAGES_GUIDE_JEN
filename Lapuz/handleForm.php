<?php
require_once 'dbconfig.php';

if (isset($_POST['insertNewArchiRecords'])){
    echo"<pre>";
    print_r($POST);
    echo"<pre>";
}
?>

<?php

require_once 'dbconfig.php';
require_once 'models.php';

if (isset($_POST['insertNewArchiRecords'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $position = $_POST['position'];
    $age = $_POST['age'];
    $DesigningSkills_rate = $_POST['DesigningSkills_rate'];
    $Creativity_rate = $_POST['Creativity_rate'];
    $CommunicationSkills_rate = $_POST['CommunicationSkills_rate'];
    $Projectmanagement_rate = $_POST['Projectmanagement_rate'];

    $query = insertNewArchiRecords($pdo,$firstname, $lastname,$position,$age,$DesigningSkills_rate,$CreativitySkills_rate,$Projectmanagenent_rate);

    if ($query){
        header("index.php");
    } else{
        echo "Query failed";
    }
}
?>s


<?php 

require_once 'dbconfig.php';

function insertNewArchiRecords($pdo,$firstname, $lastname,$position,$age,$DesigningSkills_rate,$CreativitySkills_rate,$Projectmanagenent_rate) {

	$sql = "INSERT INTO softdevs (firstname, lastname,position,age,DesigningSkills_rate,CreativitySkills_rate,Projectmanagenent_rate) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute(array($firstname, $lastname,$position,$age,$DesigningSkills_rate,$CreativitySkills_rate,$Projectmanagenent_rate));

	if ($executeQuery) {
		return true;	
	}
}   

function seeAllArchiRecords($pdo){
    $sql = "SELECT * FROM student_records";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery){
        return $stmt->fetchAll();
    }
}
?>
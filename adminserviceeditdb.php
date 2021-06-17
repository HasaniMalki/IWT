
<!-- ******
IT20615970
Gunapala K. M. H. M. M 
Group MLB_01.02.04
****** -->

<?php
session_start();
include("dbconnection.php");
$idValue = $_POST['idValue'];
$sql = "select * From services where id=" . $idValue;
if (!is_numeric($idValue)) 
{ 
  $_SESSION['danger'] = "Service not found";
  header('location: adminservice.php');
}
$servicedata = $conn->query($sql);
$hasValue = false;
foreach ($servicedata as $key => $value) {
  $hasValue = true;
}
if (!$hasValue) {
  $_SESSION['danger'] = "Service not found";

  header('location: adminservice.php');
}

// $sql = "UPDATE services SET title='".$_POST['category']."',title='".$_POST['category']."' WHERE id=".$idValue;

$sql = "UPDATE services SET  title='".$_POST['title']."' ,category='".$_POST['category']."' ,price='".$_POST['price']."' ,intro='".$_POST['intro']."',description='".$_POST['description']."' WHERE id=".$idValue;

if($conn -> query($sql)==true){
  session_start(); //also can be done before it

$_SESSION['success'] = "Services update successful";

header('location: adminservice.php');

}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn ->close();
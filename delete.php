<?php
include "db.php";
session_start();
$id=$_GET['id_article'];
$sql="DELETE FROM article WHERE ar_id=".$id;
$articles=$conn->query($sql) or die(mysqli_error($conn));
$_SESSION['delete']=true;
if($articles){
 header("Location: index.php");
}
?>
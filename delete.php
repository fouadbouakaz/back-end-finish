<?php
include "dataBase_Connection.php";
$id = $_GET['id'];

$sql = "DELETE FROM `crud` WHERE id = $id ";
 $result = mysqli_query($conn, $sql);

 if($result) {
    header("Location: index.php?msg= record delete successfully");
  }else{
    echo"Failed:" . mysqli_error($conn);
  }


?>
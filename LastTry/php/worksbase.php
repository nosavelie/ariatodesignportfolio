<?php 
    $connection = mysqli_connect("localhost", "root", "", "ariatodesignbase");

    if ($connection == false) {
      echo "Error!";
      echo mysqli_connect_errno();
      exit();
    }
  
    $query1 = mysqli_query($connection, "SELECT * FROM works ORDER BY id DESC");
  
?>
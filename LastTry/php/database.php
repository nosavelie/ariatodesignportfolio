<?php 
    $connection = mysqli_connect("localhost", "root", "", "ariatodesignbase");

    if ($connection == false) {
      echo "Error!";
      echo mysqli_connect_errno();
      exit();
    }
  
    $query = mysqli_query($connection, "SELECT * FROM news ORDER BY id DESC");
  
?>
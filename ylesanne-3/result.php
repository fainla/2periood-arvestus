<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
   
<?php
  
  $isSubmitted = isset($_POST["submit"]);
  if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $sex = $_POST["sex"];
  
  
  }
  ?>
<?php
if (!isset($username) || $sex == "naine" || $sex == "mees") {

 }
    

    ?>
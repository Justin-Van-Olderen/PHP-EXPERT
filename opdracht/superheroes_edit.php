<?php
require "database.php";
error_reporting(0);
$uid = $_GET['ID'];

?>

<!doctype html>
<html lang="en">
  <head>
  <title>Superheroes Edit</title>

  </head>
  <body class="text-center">
 


    <main class="form-signin">
      <form method="post" action=" ">
      <a href='superheroes_index.php' class='btn btn-primary'>Ga Terug</a>
      <?php

      $stmttasks = $db_conn->prepare("SELECT * FROM superheroes WHERE ID = '$uid'");
      $stmttasks->execute();
        foreach($stmttasks as $rows){
         $titel = $rows['Title'];
         $AL = $rows['Alignment'];
          echo '<h1 class="h3 mb-3 fw-normal">plan a task</h1>';
          echo "<input type='text' class='form-control' name='subject' id='subject' value='$titel'>";
          echo "<input type='text' class='form-control' name='subject1' id='subject1' value='$AL'>";
          echo '<button class="w-100 btn btn-lg btn-primary" name="form_update" type="submit">Update</button>';
        }

      $TitleV = $_POST['subject'];
      $Ali = $_POST['subject1'];


      $stmt0 = $db_conn->prepare("UPDATE superheroes SET Title = '$TitleV' WHERE ID = '$uid'");
      $stmt1 = $db_conn->prepare("UPDATE superheroes SET Alignment = '$Ali' WHERE ID = '$uid'");

      $stmt0->execute();
      $stmt1->execute();

       ?>


      </form>
    </main>
 
  </body>
</html>
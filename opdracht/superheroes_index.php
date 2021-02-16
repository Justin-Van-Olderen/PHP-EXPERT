<?php
include "database.php";

error_reporting(0);


// if(isset($_POST['userDelete'])){
//   $sql = "DELETE FROM users WHERE email = :ph_email";
//   $stmt = $db_conn->prepare($sql); 
//   $stmt->bindParam(":ph_email", $email );
//   $stmt->execute();
//   header("location: dashboard.php");
  

// }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <link href="CSS/tasks.css" rel="stylesheet"> -->
    <title>Superheroes Index</title>
  
    <link href="CSS/nav.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">
    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Favicons -->
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <script src="https://kit.fontawesome.com/ace718374c.js" crossorigin="anonymous"></script>
    <!-- Custom styles for this template -->
    <link href="superheroes_index.css" rel="stylesheet">
  </head>
  <body>
 

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
   
      <span class="navbar-toggler-icon"></span>
    </button> 
     
    </div>
  </div>
</nav>
<div class="container">
 
      <div class="card">
   <div class="card-head">
     <h3>Superheroes and Villains List</h3>
    </div>
   
  <table class="tableTasks">
                <tr>
                    <th>Name</th>
                    <th>Alignment</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                   
                </tr>
                    
                <?php
                         $stmttasks = $db_conn->prepare("SELECT * FROM superheroes");
                         $stmttasks->execute();
                           foreach($stmttasks as $rows){
                            $idname = $rows['ID'];
                            echo "<tr><td>" . $rows['Title']. "</td>";
                            echo "<td>" . $rows['Alignment']. "</td>";
                            echo "<td><a class='btn' href='superheroes_show.php?ID=$idname'><i class='far fa-eye'></i></a></td>";
                            echo "<td><a class='btn' href='superheroes_edit.php?ID=$idname'><i class='fas fa-pencil-alt'> </i></a></td>";
                            echo "<td><a class='btn' href='superheroes_delete.php?ID=$idname'><i class='fas fa-times'> </i></a></td></tr>";
                           }
                    ?>
            </table>
            
             
            
      </div>       
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
 
  </body>
</html>
      



<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/master.css">
    <title>Department Allocations</title>
</head>
<body>

    <nav class="navbar navbar-expand-sm shadow-lg mb-5">
        <div class="navbar-brand ms-5">Student Department Allocations</div>
    </nav>


    <div class="tablebase container-sm  justify-content-center">
        <table class="mt-2 table table-striped table-sm-responsive  table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>ID</th>
                    <th>Sex</th>
                    <th>Department Given</th>
                </tr>
            </thead>
            <tbody class="table-secondary">
           <?php

           require 'php/populate.php';

          

          foreach ($result as $value) {
            echo'<tr>';
            foreach ($value as $data) {
                echo"<td>".$data."</td>";
            }
            echo"</tr>";
            }

           ?>
            </tbody>
        </table>



</body>
</html>
<?php 
    include "../php/process.php";

    $query = $connection->query("SELECT * FROM Highscores ORDER BY highscore DESC");
    $highscores = $query->fetchAll(PDO::FETCH_ASSOC);
    

    ;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>



        <div class="container-highscores">
            <h1 class="main-title">CS:GO Quiz Highscores</h1>
            <table class="highscore-table">
                <tr>
                    <th>Name</th>
                    <th>Score</th>
                </tr>
                
                <?php
                
                foreach($highscores as $userscore){
                    echo '<tr>
                    <td>' . $userscore['username'] . '</td>
                    <td>' . $userscore['highscore'] . '</td>
                </tr>';
                }
                
                ?>
                
                    
            </table>
        </div>
</body>
</html>
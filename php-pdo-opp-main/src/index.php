<?php
session_start();
include "database.php"



?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP QUIZ</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
           
            
        
            
        <div class="container-main">
            <h1 class="main-title">CS:GO Quiz</h1>
            <h2 class="secondary-title">This quiz has <?php echo $total ?> questions</h2>
            <!--  -->
            <a class="main-page-button" type="submit"  href="question.php?n=1">Start</a><br>
            <a class="main-page-button-scores"  href="highscores.php">Highscores</a>
        </div>
        
<?php 

?>

    </body>
</html>
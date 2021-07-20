<?php 
include "../config.php";

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

    

    <?php

        
        $number = (int) $_GET['n'];
        



        $query  = $connection->query("SELECT * from Question WHERE Id = $number");
        $questions = $query->fetchAll(PDO::FETCH_ASSOC);
        foreach($questions as $question) {
            $subQuery  = $connection->prepare("SELECT * from Answer where Answer.QuestionId = ?");
            $subQuery->bindValue(1, $question['Id']);
            $subQuery->execute(); 
            $answers = $subQuery->fetchAll(PDO::FETCH_ASSOC);
            $question['answers'] = $answers;


        
        if(file_exists($question['Text'])){
            echo '<p class="question-image-text"> Name this Map </p>';
            $link = '<img class="questionImage" src="' .$question['Text'] . '" alt="">';
        } else {
            $link = $question['Text'];
        }
        
            
            
        }
        

        
        ?>

        

        <div class="container-2"> <?php echo $link;?></div>
        <div class="currentQuestion">
        <form method="post" action="../php/process.php" name="phpForm">
        <ul>
        <?php  foreach($answers as $answer) {
                echo '<button type="submit" name="choice" class="input" value="'. $answer["Id"] . '">' .$answer['Text'] . '</button>';
            }
        ?>
            
             <input type="hidden" name="number" value="<?php echo $number ?>">
        </ul>
        </form>
            
        </div>
        
       
        
</body>
</html>
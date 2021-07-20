<?php 
    session_start();
    include "database.php";

        if(!isset($_SESSION['score'])){
        $_SESSION['score'] = 0;
    }   

    if($_POST) {
        $number = $_POST['number'];
        $selected = $_POST['choice'];
        $next = $number+1;
        

        
        $results = $connection->query("SELECT count(*) FROM Question");

        $total = $results->fetchColumn();

        $result = $connection->query("SELECT * FROM Answer WHERE QuestionId = $number AND isCorrect = 1 ");

        $row = $result->fetchAll(PDO::FETCH_ASSOC);

        $correct = $row[0]['Id'];

        if($correct == $selected) {
            $_SESSION['score']++;
        } 

        

        if($number == $total){
            header("Location:../templates/final.php");
            exit;
        }else {
            header("Location:../templates/question.php?n=" . $next);
        }

        

        

        


    }

    

  
 
    


        






    
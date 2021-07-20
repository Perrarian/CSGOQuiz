<?php  

    
    include "../php/process.php";
    include_once "../php/functions.php";


if(!isset($_SESSION['score'])) {
    if(isset($_POST['username'])) {
       saveHighscore($_POST['username'], $_POST['score']) ;
    }

    header('Location: introduction.php');
}

function feedback(){
    if($_SESSION['score'] < 4) {
    echo "Negative";}
    elseif($_SESSION['score'] < 9){
    echo "Fire in the Hole!";}
    else {
        echo "That is pristine!";
    }
}

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
<div class="containerfinalscore">
    <h1 class="final-title"><?php feedback(); ?></h1>
    <div class="finalContainer">

            <!-- <form action="#" method="post" class="finalform">
            <h5 class="name-tag">Enter your name:</h5>
            <input class="name-input" type="text" name="username"><br>
            <input type="hidden" name="score" value="<?php echo $_SESSION['score'] ;?>"> -->

        <h4 class="final-score">You got <?php echo $_SESSION['score']; ?> question(s) correct!</h4>

        <!-- </form><br>
        <button class="final-button" href="introduction.php">Try Again</button> -->
        <a class="final-button" href="introduction.php">Try Again</a>
    </div>
    
</div>
</body>
</html>
<?php 
unset($_SESSION);
session_destroy(); ?>
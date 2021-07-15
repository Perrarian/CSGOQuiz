<?php 

 

 define('DB_NAME', getenv('DB_NAME'));
 define('DB_USER', getenv('DB_USER'));
 define('DB_PASSWORD', getenv('DB_PASSWORD'));
 define('DB_HOST', getenv('DB_HOST'));



 $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);

 $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
 $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

 if (empty($tables)) {
     echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
 } 

$results = $connection->query("SELECT count(*) FROM Question");
$total = $results->fetchColumn();


<?php 

function DBConnection() {
    try { 
        $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'HTTP_HOST = ' . $_SERVER['HTTP_HOST'] . '<br>';
        echo 'DB_NAME = ' . DB_NAME . '<br>';
        echo 'DB_USER = ' . DB_USER . '<br>';
        echo 'DB_PASSWORD = ' . DB_PASSWORD . '<br>';
        echo 'DB_HOST = ' . DB_HOST . '<br>';
        exit;

    }
    return $connection;
}

    //Use !== false; strpos() may return Boolean or number >= 0
    //'strpos' or 'string position'
    //strpos() can return false, 0 ... N (or any number > 0), so we have to use not false
    if (strpos($_SERVER['HTTP_HOST'], 'localhost:') !== false) {
        //DB runs in local Docker container: localhost
        define('DB_NAME', getenv('DB_NAME'));
        define('DB_USER', getenv('DB_USER'));
        define('DB_PASSWORD', getenv('DB_PASSWORD'));
        define('DB_HOST', getenv('DB_HOST'));
    } else {
        /* 
        HOSTPOINT DB (ipiluwig_ck) ACCESS

        Hostname: ipiluwig_ck.mysql.db.internal
        MySQL version: 10.3-MariaDB

        DB: ipiluwig
        User: ipiluwig
        Pwd: 
        */
        define('DB_HOST', 'ipiluwig.mysql.db.internal');
        define('DBNAME', 'ipiluwig_gs');
        define('DBUSER', 'ipiluwig_05');
        define('DB_PASSWORD', 'Opport2021');

        // define('DB_NAME', getenv('DB_NAME'));
        // define('DB_USER', getenv('DB_USER'));
        // define('DB_PASSWORD', getenv('DB_PASSWORD'));
        // define('DB_HOST', getenv('DB_HOST'));

    }


 $connection = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASSWORD);
 

 $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
 $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

 if (empty($tables)) {
     echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
 } 

$results = $connection->query("SELECT count(*) FROM Question");
$total = $results->fetchColumn();


<!--Brian Maina, 12/10, IT202-001,  Project-Part3-->
<?php
    $dsn = 'mysql:host=localhost;dbname=bookstore';
    $username = 'mgs_user';
    $password = 'pa55word';
 
    try {
        $db = new PDO($dsn, $username, $password);
        echo '<p?>You are connected to the database!</p';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('error.php');
        exit();
    }
?>
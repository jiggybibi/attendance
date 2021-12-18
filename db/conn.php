<?php 
    //Development Connection
    $host = '127.0.0.1';
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    //Remote Database Connection
    // $host = 'b8a7waa1fvcl4tbomcyr-mysql.services.clever-cloud.com';
    // $db = 'b8a7waa1fvcl4tbomcyr';
    // $user = 'un64gyw23ckdnkzw';
    // $pass = 'jglyixtvepc4by2wihgk';
    // $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOexception $e) {
        throw new PDOexception($e->getmessage());
    }

    require_once 'crud.php';
    require_once 'user.php';
    $crud = new crud($pdo);
    $user = new user($pdo);

    $user->insertUser("admin","password");
?>
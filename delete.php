<?php

$id = $_GET["id"];
try {
    $pdo = new PDO('mysql:dbname=ikuromori_a_db;charset=utf8;host=mysql57.ikuromori.sakura.ne.jp', 'ikuromori', '********');
  } catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
  }


$stmt = $pdo->prepare("DELETE FROM b_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  
$status = $stmt->execute();
if ($status==false) {
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    header("Location: maintain.php");
    exit;
}

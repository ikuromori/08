<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>患者一覧</title>
</head>
<body>

<p>患者一覧</p>
  
<?php
try {
  $pdo = new PDO('mysql:dbname=ikuromori_a_db;charset=utf8;host=mysql57.ikuromori.sakura.ne.jp', 'ikuromori', 'akabane1');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//２．データ登録SQL作成

$stmt = $pdo->prepare("SELECT * FROM b_table");
$status = $stmt->execute();

//３．データ表示


if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo 
      '<p>' . 
      $result['id'] . 
      ':' . 
      $result['u_name'] . 
      '     ' .
      '<a href="delete.php?id='.$result["id"].'">'.
      '削除'. 
      '</a>'. 
      "</p>\n";
    }
}
?>

</body>
</html>


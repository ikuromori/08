<?php
 
$accessToken = '******************';
 
//ユーザーからのメッセージ取得
$json_string = file_get_contents('php://input');
$json_object = json_decode($json_string);
 
//取得データ
$replyToken = $json_object->{"events"}[0]->{"replyToken"};        //返信用トークン
$message_type = $json_object->{"events"}[0]->{"message"}->{"type"};    //メッセージタイプ
$message_text = $json_object->{"events"}[0]->{"message"}->{"text"};    //メッセージ内容

// LINEからのメッセージを定義する
$all_msg = explode("\n",$message_text);
$msg1 = $all_msg[0];
$msg2 = $all_msg[1];
$msg3 = $all_msg[2];
$msg4 = $all_msg[3];
$msg5 = $all_msg[4];


if($msg1 =="登録する"){


// データベースと接続
try {
  $pdo = new PDO('mysql:dbname=ikuromori_a_db;charset=utf8;host=mysql57.ikuromori.sakura.ne.jp', 'ikuromori', 'akabane1');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


// データベースに挿入
$stmt = $pdo->prepare("INSERT INTO b_table(id, u_name, u_password,l_name,l_id
 )VALUES(NULL, :u_name, :u_password,:l_name,:l_id)");
$stmt->bindValue(':u_name', $msg2, PDO::PARAM_STR);  
$stmt->bindValue(':u_password', $msg3, PDO::PARAM_STR);
$stmt->bindValue(':l_name', $msg4, PDO::PARAM_STR);  
$stmt->bindValue(':l_id', $msg5, PDO::PARAM_STR);
$status = $stmt->execute();

// // データベースからIDを引き出す
$stmt2 = $pdo->prepare("SELECT * FROM b_table WHERE u_name IN('$msg2')");
$status2 = $stmt2->execute();
$result = $stmt2->fetch(PDO::FETCH_ASSOC);

$r_id = $result["id"];
$r_name = $result["u_name"];
$r_password = $result["u_password"];

//メッセージタイプが「text」以外のときは何も返さず終了
if($message_type != "text") exit;
 
//返信メッセージ
$return_message_text ="診察券を発行しました。\n診察券番号:".$r_id."\n名前:". $r_name."\nパスワード:".$r_password;
}else if($msg1 =="表示"){

// データベースと接続
try {
  $pdo = new PDO('mysql:dbname=ikuromori_a_db;charset=utf8;host=mysql57.ikuromori.sakura.ne.jp', 'ikuromori', 'akabane1');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


// // データベースからIDを引き出す
$stmt = $pdo->prepare("SELECT * FROM b_table WHERE l_name IN('$msg2')");
$status = $stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$r_id = $result["id"];
$r_name = $result["u_name"];
$r_password = $result["u_password"];

//メッセージタイプが「text」以外のときは何も返さず終了
if($message_type != "text") exit;
 
//返信メッセージ
$return_message_text ="あなたの診察券情報は\n診察券番号:".$r_id."\n名前:". $r_name."\nパスワード:".$r_password;

}

// // 削除
// // else if($msg1 =="削除"){

// // $id = $all_msg[1];

// // データベースと接続
// try {
//   $pdo = new PDO('mysql:dbname=ikuromori_a_db;charset=utf8;host=mysql57.ikuromori.sakura.ne.jp', 'ikuromori', 'akabane1');
// } catch (PDOException $e) {
//   exit('DbConnectError:'.$e->getMessage());
// }

// $stmt = $pdo->prepare("DELETE FROM b_table WHERE id=:id;");
// $stmt->bindValue(':id', $id, PDO::PARAM_INT); //文字列
// $status = $stmt->execute();

// //メッセージタイプが「text」以外のときは何も返さず終了
// if($message_type != "text") exit;
 
// //返信メッセージ
// $return_message_text ="診察券番号".$id."の診察券情報を消去しました。";

// }



// 入力ミスの時
else{
$return_message_text ="正しく入力してください。"; 

};
 
//返信実行
sending_messages($accessToken, $replyToken, $message_type, $return_message_text);
?>
<?php
//メッセージの送信
function sending_messages($accessToken, $replyToken, $message_type, $return_message_text){
    //レスポンスフォーマット
    $response_format_text = [
        "type" => $message_type,
        "text" => $return_message_text
    ];
 
    //ポストデータ
    $post_data = [
        "replyToken" => $replyToken,
        "messages" => [$response_format_text]
    ];
 
    //curl実行
    $ch = curl_init("https://api.line.me/v2/bot/message/reply");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post_data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json; charser=UTF-8',
        'Authorization: Bearer ' . $accessToken
    ));
    $result = curl_exec($ch);
    curl_close($ch);
}
?>


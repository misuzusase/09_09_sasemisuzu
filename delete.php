<?php
// 関数ファイルの読み込み
include('functions.php');
$pdo = connectToDb();

//1. GETデータ取得
$id   = $_GET['id'];

//2. DB接続します(エラー処理追加)
$dbn = 'mysql:dbname=gsacfd04_09;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  exit('dbError:' . $e->getMessage());
}

//3．データ登録SQL作成
$sql = 'DELETE FROM 09_07_sasemisuzu WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ登録処理後
if ($status == false) {
  showSqlErrorMsg($stmt);
} else {
  //select.phpへリダイレクト
  header('Location: select.php');
  exit;
}

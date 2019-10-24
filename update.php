<?php
// 関数ファイル読み込み
include('functions.php');
$pdo = connectToDb();

//入力チェック(受信確認処理追加)
if (isset($_POST['genre'])) {
  $janre = $_POST['genre'];
  echo 'ジャンル：' . $janre . '<br>';
} else {
  echo 'ジャンルが選択されていません。<br>';
}

//var_dump($POST);
if (
  !isset($_POST['music']) || $_POST['music'] == ''

) {
  exit('ParamError');
}


//POSTデータ取得
$music = $_POST['music'];
$singer = $_POST['singer'];
$genre = $_POST['genre'];
$urll = $_POST['urll'];
//DB接続します(エラー処理追加)
$dbn = 'mysql:dbname=gsacfd04_09;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  exit('dbError:' . $e->getMessage());
}


//データ登録SQL作成

$sql = 'UPDATE 09_07_sasemisuzu SET music=:a1, singer=:a2, genre=:a3 WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $task, PDO::PARAM_STR);
$stmt->bindValue(':a2', $deadline, PDO::PARAM_STR);
$stmt->bindValue(':a3', $comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ登録処理後
if ($status == false) {
  showSqlErrorMsg($stmt);
} else {
  header('Location: select.php');
  exit;
}

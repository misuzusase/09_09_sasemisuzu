<?php

// 入力チェック
// ネットで見た通りにしてもradioで選択したものからテキストデータをとって保存しておけない
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

//音声ファイルをうらるにしてかつSQLにいれたかった
//POSTデータ取得
$music = $_POST['music'];
$singer = $_POST['singer'];
$genre = $_POST['genre'];
$urll = $_POST['urll'];

//DB接続
$dbn = 'mysql:dbname=gsacfd04_09;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  exit('dbError:' . $e->getMessage());
}

//データ登録SQL作成
// 楽曲URLの入れ方わかったらいろいろ付け加えること
$sql = 'INSERT INTO 09_07_sasemisuzu(id,music,singer,genre,urll,indate)VALUES(NULL,:a1,:a2,:a3,:a4,sysdate())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $music, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $singer, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $genre, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a4', $urll, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':a4', $urll, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  //５．index.phpへリダイレクト
  header('Location: index.php');
}

<?php

// 入力チェック
//var_dump($POST);
if (
    !isset($_POST['lid']) || $_POST['lid'] == '' ||
    !isset($_POST['lpw']) || $_POST['lpw'] == ''

) {
    exit('ParamError');
}

//音声ファイルをうらるにしてかつSQLにいれたかった
//POSTデータ取得
$lid = $_POST['lid'];
$lpw = $_POST['lpw'];

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
$sql = 'INSERT INTO user_table(id,name,lid,lpw,kanri_flg,life_flg)VALUES(NULL,:a1,:a2,:a3,1,0)';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $music, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $singer, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $genre, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':a4', $urll, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// $stmt->bindValue(':a4', $urll, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit('sqlError:' . $error[2]);
} else {
    //５．index.phpへリダイレクト
    header('Location: login.php');
}

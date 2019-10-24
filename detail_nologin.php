<?php
// 関数ファイルの読み込み
include('functions.php');
$pdo = connectToDb();
// getで送信されたidを取得
$id = $_GET['id'];


//DB接続します
$dbn = 'mysql:dbname=gsacfd04_09;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

try {
    $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
    exit('dbError:' . $e->getMessage());
}

//データ登録SQL作成，指定したidのみ表示する
$sql = 'SELECT * FROM 09_07_sasemisuzu WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
if ($status == false) {
    // エラーのとき
    showSqlErrorMsg($stmt);
} else {
    // エラーでないとき
    $rs = $stmt->fetch();
    // fetch()で1レコードを取得して$rsに入れる
    // $rsは配列で返ってくる．$rs["id"], $rs["task"]などで値をとれる
    // var_dump()で見てみよう
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>music更新ページ</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">mymusic更新</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">music登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="select.php">music一覧</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">ログイン</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <form method="post" action="update.php">
        <div class="form-group">
            <label for="task">musicname</label>

            <input type="text" name="music" class="form-control" id="task" value="<?= $rs['music'] ?>" disabled="disabled">
        </div>
        <div class="form-group">
            <label for="deadline">singer</label>

            <input type="text" name="singer" class="form-control" id="deadline" value="<?= $rs['singer'] ?>" disabled="disabled">
        </div>

        <div class="custom-control custom-checkbox" value="<?= $rs['music'] ?>" disabled="disabled">

            <label><input type="radio" name="genre" value="クラシック" id="comment" rows="3" disabled="disabled">クラシック</label>
            <br>
            <label><input type="radio" name="genre" value="ロック" id="comment" rows="3" disabled="disabled">ロック</label>
            <br>
            <label><input type="radio" name="genre" value="ポップス" id="comment" rows="3" disabled="disabled">ポップス</label>
            <br>
            <label><input type="radio" name="genre" value="サントラ" id="comment" rows="3" disabled="disabled">サントラ</label>
        </div>

        <label id='open-file'>
            音楽ファイルを開く

            <input id='file-input' name='urll' type='file' accept='audio/*' disabled="disabled">
        </label>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <!-- idは変えたくない = ユーザーから見えないようにする-->
        <input type="hidden" name="id" value="<?= $rs['id'] ?>">
    </form>

</body>

</html>
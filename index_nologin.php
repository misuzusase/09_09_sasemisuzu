<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>mymusic登録</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <style>
    div {
      padding: 10px;
      font-size: 16px;
    }

    <style>body {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    #display {
      display: block;
      margin: 1em 0;
    }

    #open-file {
      background-color: rgb(112, 125, 198);
      color: white;
      text-align: center;
      padding: 0.5em 1em;
      cursor: pointer;
    }

    #file-input {
      display: none;
    }
  </style>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">mymusic登録</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="select_nologin.php">music一覧</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">ログイン</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="touroku.php">ユーザー登録</a>
          </li>
        </ul>
      </div>


    </nav>
  </header>

  <form method="post">
    <div class="form-group">
      <label for="task">musicname</label>
      <input type="text" name="music" class="form-control" id="task" disabled="disabled">
    </div>
    <div class="form-group">
      <label for="deadline">singer</label>
      <input type="text" name="singer" class="form-control" id="deadline" disabled="disabled">
    </div>

    <div class="custom-control custom-checkbox">
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
      <input id='file-input' name='urll' type='file' accept='audio/*'>
    </label>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    ;
  </script>
</body>

</html>
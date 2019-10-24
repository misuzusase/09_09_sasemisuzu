<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ユーザー登録</title>
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
            <a class="navbar-brand" href="#">ユーザー登録</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        </nav>
    </header>

    <form action="touroku_insert.php" method="post">
        <div class="form-group">
            <label for="task">名前</label>
            <input type="text" name="name" class="form-control" id="task">
        </div>
        <div class="form-group">
            <label for="task">ユーザーID</label>
            <input type="text" name="lid" class="form-control" id="task">
        </div>
        <div class="form-group">
            <label for="deadline">パスワード</label>
            <input type="text" name="lpw" class="form-control" id="deadline">
        </div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary">ユーザー登録</button>
        </div>
    </form>

</body>

</html>
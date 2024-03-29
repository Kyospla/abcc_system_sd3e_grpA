<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Top/css/style.css">
    <title>投稿</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" style="background-color:#76FF60">
        <div class="container-fluid">
          <!-- <a class="navbar-brand" href="#"><img src="../img/rogo b t.png" width="20%"></a> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./catalog.html"><font size="5">トップ</font></a>
              </li> -->
              <li class="nav-item">
                <a class="text-black nav-link" href="../Top/Top.php">情報共有掲示板</a>
              </li>
              <li class="nav-item">
                <a class="text-black nav-link" href="../Post/Post.php">投稿</a>
              </li>
              <li class="nav-item">
                <a class="text-black nav-link " href="../Post/History.php">投稿履歴</a>
              </li>
            </ul>
            <a href="../プロフィール画面/Profile.php" class="name"><?php echo $_SESSION['name'] ?></a>
            <form role="search" action="../Top/Search.php" method="post">
              <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search" name="search">
            </form>
          </div>
        </div>
    </nav>

	<?php
            // データベースへの接続
            $pdo = new PDO('mysql:host=localhost;dbname=hiroyuki;charset=utf8',
            'root', 'root');

            


            // 投稿フォームからのデータを取得
            $commentText = $_POST['reply'];
            // 直前に挿入されたスレッドのIDを取得
            $threadId = $conn->insert_id;
            // コメントをcommentsテーブルに挿入
            $sql = "INSERT INTO comments (threads_id, user_id, post_date, comment) VALUES ($threadId, 1, CURDATE(), '$commentText')";
            $conn->query($sql);

            // 接続を閉じる
            $conn->close();
    ?>

    <div class="row">
        <h5 class="mt-5 text-center">
            投稿されました。
        </h5>
        <a class="col-12 text-center mt-3"href="Post.php">投稿画面へ戻る</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>





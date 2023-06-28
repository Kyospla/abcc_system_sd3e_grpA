<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>検索結果画面</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" style="background-color:#76FF60">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="text-black nav-link" href="../トップ画面/Top.php">情報共有掲示板</a>
          </li>
          <li class="nav-item">
            <a class="text-black nav-link" href="../投稿/Post.php">投稿</a>
          </li>
          <li class="nav-item">
            <a class="text-black nav-link " href="../投稿/History.php">投稿履歴</a>
          </li>
        </ul>
        <a href="../プロフィール画面/Profile.php" class="name">名無しさん</a>
        <form role="search" action="../トップ画面/Search.php" method="post">
          <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search" name="search">
        </form>
      </div>
    </div>
  </nav>
  <?php
    // $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
    // $sql="SELECT * FROM threads ORDER BY threads_date DESC";
  ?>
    <h1 class="mt-4 offset-1">検索結果</h1>
    <h5 class="mt-2 offset-1">検索キーワード：<?php echo "ses"?></h5>
    <h5 class="mt-2 offset-1">件数：<?php echo "1件"?></h5>
    <div class="card offset-1 col-10 card-box mt-3">
        <a href="#" class="thred-link">
          <div class="card-body">
            <h5 class="nikku-name"><?php echo "加藤純一"?><span class="zikan">
              <?php 
              $timestamp = time() ;
              date_default_timezone_set('Asia/Tokyo');
              $week = array( "日", "月", "火", "水", "木", "金", "土" );
               echo date("Y年n月d日(".$week[date("w")].") H:i",$timestamp)?></span></h5>
            <h2 class="card-title">新卒sesってどう？</h2>
          </div>
        </a>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
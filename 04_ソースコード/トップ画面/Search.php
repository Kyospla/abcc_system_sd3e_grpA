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
            <a class="text-black nav-link" href="./Top.php">情報共有掲示板</a>
          </li>
          <li class="nav-item">
            <a class="text-black nav-link" href="../Post/Post.php">投稿</a>
          </li>
          <li class="nav-item">
            <a class="text-black nav-link " href="../History/History.php">投稿履歴</a>
          </li>
        </ul>
        <a href="../Profile/Profile.php" class="name">名無しさん<?php //echo $_SESSION['name'] ?></a>
        <form role="search" action="./Search.php" method="post">
          <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search" name="search">
        </form>
      </div>
    </div>
  </nav>
  <?php
    $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
    $sql="SELECT * FROM threads AS T INNER JOIN users AS U
          ON T.user_id = U.user_id
          WHERE T.threads_title LIKE CONCAT('%', ?, '%')
          ORDER BY T.threads_date DESC";
    $ps = $pdo -> prepare($sql);
    $ps ->bindValue(1,$_POST["search"],PDO::PARAM_STR);
    $ps -> execute();
    $selectArray = $ps -> fetchAll();
  ?>
    <h1 class="mt-4 offset-1">検索結果</h1>
    <h5 class="mt-2 offset-1">検索キーワード：<?php echo $_POST["search"] ?></h5>
    <h5 class="mt-2 offset-1">件数：<?php echo count($selectArray)?></h5>
    <div class="card offset-1 col-10 card-box mt-3">
        <?php 
          foreach($selectArray as $row){
            $id = $row['threads_id'];
        ?>
        <a href="../Reply/Reply.php?id=<?php echo $id ?>" class="thred-link">
          <div class="card-body">
            <h5 class="nikku-name"><?php echo $row['user_niku']?><span class="zikan">2023年７月４日
              <?php 
              //echo $row['threads_data']
              // $timestamp = time() ;
              // date_default_timezone_set('Asia/Tokyo');
              // $week = array( "日", "月", "火", "水", "木", "金", "土" );
              //  echo date("Y年n月d日(".$week[date("w")].") H:i",$timestamp) 
              ?>
              </span></h5>
            <h2 class="card-title"><?php echo $row['threads_title']?></h2>
          </div>
        </a>
        <?php
          } 
        ?>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
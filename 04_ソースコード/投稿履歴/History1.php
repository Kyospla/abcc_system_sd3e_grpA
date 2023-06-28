<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="./css/style.css">
<title>投稿履歴</title>
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
            <a class="text-black nav-link" href="#">情報共有掲示板</a>
          </li>
          <li class="nav-item">
            <a class="text-black nav-link" href="#">投稿</a>
          </li>
          <li class="nav-item">
            <a class="text-black nav-link " href="./login.html">投稿履歴</a>
          </li>
        </ul>
        <a href="#" class="name">名無しさん</a>
        <form role="search">
          <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
      <div class = "box">
        <div class = "text">
        <br><h1 class="offset-2 col-8 text-black mb-2 text-rihgt">投稿履歴</h1>
        <hr class="offset-2 col-8" size="4"noshade>
     </div>
        <div class="card offset-2 col-8 offset-2 card-box mt-2">
          <?php
            // データベースへの接続
            $servername = "mysql213.phy.lolipop.lan";
            $username = "LAA1418543";
            $password = "12345hiroyuki";
            $dbname = "LAA1418543-hiroyuki";

            // 接続を作成
            $conn = new mysqli($servername, $username, $password, $dbname);

            // 接続を確認
            if ($conn->connect_error) {
              die("データベースに接続できませんでした: " . $conn->connect_error);
            }

            // 投稿履歴の取得
            $sql = "SELECT * FROM comments ORDER BY post_date DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              // 投稿履歴がある場合は表示
              while($row = $result->fetch_assoc()) {
                $author = $row["投稿者"];
                $content = $row["投稿内容"];
                $timestamp = $row["投稿日時"];
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>投稿者: " . $author . "</h5>";
                echo "<p class='card-text'>投稿内容: " . $content . "</p>";
                echo "<p class='card-text'>投稿日時: " . $timestamp . "</p>";
                echo "</div>";
              }
            } else {
              echo "<p>投稿履歴はありません。</p>";
            }

            // 接続を閉じる
            $conn->close();
          ?>
          </a>
        </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     </body>
</html>

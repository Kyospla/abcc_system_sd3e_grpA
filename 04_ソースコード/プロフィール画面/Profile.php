<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="../トップ画面/css/style.css">
<title>プロフィール画面</title>
</head>
<body>
  <?php
    session_start();
    if(isset($_SESSION['name']) == false || isset($_SESSION['pass']) == false){
      header('Location:../ログイン画面/login.php');
    }
  ?>  
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
            <a class="text-black nav-link" href="../トップ画面/top.php">情報共有掲示板</a>
          </li>
          <li class="nav-item">
            <a class="text-black nav-link" href="../投稿/Post.php">投稿</a>
          </li>
          <li class="nav-item">
            <a class="text-black nav-link " href="../投稿/history.php">投稿履歴</a>
          </li>
        </ul>
        <a href="../プロフィール修正/Profile.php" class="name"><?php echo $_SESSION['name'] ?></a>
        <form role="search">
          <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
      <div class = "row">
        <div class = "col-5 text-end">
          <h1 class="mb-2 mt-3">プロフィール</h1>
        </div>
        <div class="col-3 text-end mt-3 ">
          <input type="submit" class="btn btn-danger" value="ログアウト">
        </div>
      </div>

      <?php
        $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
        $sql="SELECT * FROM users WHERE user_name = ?";
        $ps = $pdo ->prepare($sql);
        $ps -> bindValue(1,$_SESSION['name'],PDO::PARAM_STR);
        $ps -> execute();
      ?>
      
        <div class="row">
          <form action="../プロフィール修正/profilefix.php" method="post">
            <div class="col-5">
              <h3 class="text-end">氏名:</h3>
            </div>
            <div class="col-7">
                <input type="text" class="box"  name="name"  value="<?php ?>" readonly>
            </div>

            <div class="col-5">
              <h3 class="text-end">ニックネーム:</h3>
            </div>
            <div class="col-7">
                <input type="text" class="box"  name="nikku" value="加藤純一" readonly>
            </div>

            <div class="col-5">
              <h3 class="text-end">〒:</h3>
            </div>
            <div class="col-7">
                <input type="text" class="box"  name="post" value="810-0000" readonly>
            </div>

            <div class="col-5">
              <h3 class="text-end">住所:</h3>
            </div>
            <div class="col-7">
                <input type="text" class="box"  name="address" value="福岡県福岡市博多区博多駅南" readonly>
            </div>

            <div class="col-5">
              <h3 class="text-end">番地:</h3>
            </div>
            <div class="col-7">
                <input type="text" class="box"  name="address2" value="2-12-35" readonly>
            </div>

            <div class="col-5">
              <h3 class="text-end">電話番号:</h3>
            </div>
            <div class="col-7">
                <input type="tel" class="box"  name="tel" value="08012345678" readonly>
            </div>

            <div class="col-5">
              <h3 class="text-end">メールアドレス:</h3>
            </div>
            <div class="col-7">
                <input type="email" class="box"  name="mail" value="2100000@s.asojuku.ac.jp" readonly>
            </div>

            <div class="col-5">
              <h3 class="text-end">パスワード:</h3>
            </div>
            <div class="col-7">
                <input type="password" class="box"  name="pass" value="abcdefghijk" readonly>
                <input type="submit" href="" class="btn btn-warning text-white" value="変更する">
            </div>
            <input type="submit"  class="btn btn-primary mt-3 offset-5 col-2" value="修正する">
          </form>
        </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
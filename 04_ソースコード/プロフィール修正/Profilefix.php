<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="../Top/css/style.css">
<title>プロフィール修正画面</title>
</head>
<body>
    
  <nav class="navbar navbar-expand-md navbar-dark" aria-label="Fourth navbar example" style="background-color:#76FF60">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <!-- <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./catalog.html"><font size="5">トップ</font></a>
          </li> -->
          <li class="nav-item">
            <a class="text-black nav-link" href="../トップ画面/Top.php">情報共有掲示板</a>
          </li>
          <li class="nav-item">
            <a class="text-black nav-link" href="../投稿/Post.php">投稿</a>
          </li>
          <li class="nav-item">
            <a class="text-black nav-link " href="../投稿履歴/History.php">投稿履歴</a>
          </li>
        </ul>
        <a href="#" class="name">名無しさん</a>
        <form role="search">
          <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
      <?php
        $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
        $sql="SELECT * FROM users WHERE user_id = 1";
        $ps = $pdo ->prepare($sql);
        //$ps -> bindValue(1,$_SESSION['id'],PDO::PARAM_STR);
        $ps -> execute();
        $searchArray = $ps -> fetchAll();
      ?>
      <div class = "row">
        <div class = "col-5 text-end">
          <h1 class="mb-2 mt-3">プロフィール</h1>
        </div>
        
      </div>
      
      <div class="row">
        <?php 
           foreach($searchArray as $row){
        ?>
        <div class="offset-5 col-5">
        <form action="../Profile/ProfileCheck.php" method="post">
            <p class="error">
              <?php
                if(isset($_SESSION['errormsg'])){
                  echo $_SESSION['errormsg'];
                  unset($_SESSION['errormsg']);
                }
              ?>
            </p>
        </div>
        
        <div class="col-5">
          <h3 class="text-end">氏名:</h3>
        </div>
        <div class="col-7">
            <input type="text" class="box"  name="name"  value="<?php echo $row['user_name']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">ニックネーム:</h3>
        </div>
        <div class="col-7">
            <input type="text" class="box"  name="nikku" value="<?php echo $row['user_niku']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">〒:</h3>
        </div>
        <div class="col-7">
            <input type="text" class="box"  name="post" value="<?php echo $row['user_zip']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">住所:</h3>
        </div>
        <div class="col-7">
            <input type="text" class="box"  name="address" value="<?php echo $row['user_address']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">番地:</h3>
        </div>
        <div class="col-7">
            <input type="text" class="box"  name="address2" value="<?php echo $row['user_banchi']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">電話番号:</h3>
        </div>
        <div class="col-7">
            <input type="tel" class="box"  name="tel" value="<?php echo $row['user_number']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">メールアドレス:</h3>
        </div>
        <div class="col-7">
            <input type="email" class="box"  name="mail" value="<?php echo $row['user_mail']?>">
        </div>
      <div class="mt-3">
        <input type="submit"  class="btn btn-primary offset-4 col-2"  value="更新する">
        
      </div>
      </form> 
      <?php 
              }
      ?>
        
    </div>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
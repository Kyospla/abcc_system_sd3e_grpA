<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="../トップ画面/css/style.css">

<title>パスワード確認画面</title>
</head>
<body>
  <?php
  //現在のパスワードをチチェック
    session_start();
    if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false){
      header('Location:../パスワード確認/checkPass.php');
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
        <form role="search" action="../Top/Search.php" method="post">
        <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search" name="search" required>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
  <?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   $password = $_POST['password'];
//   $confirmPassword = $_POST['confirm_password'];

//   if ($password === $confirmPassword) {
//     echo "パスワードが一致しました。";
//   } else {
//     echo "パスワードが一致しません。";
//}
//}
?>
<div class="row">
  <form action="./CurrentPassCheck.php" method="post">
  <h1 class="offset-2 col-8 text-black mt-3 mb-5 text-right">現在のパスワードの確認</h1>
    <div class="error">
      <?php
        if(isset($_SESSION['errormsg'])){
          echo nl2br($_SESSION['errormsg']);
          unset($_SESSION['errormsg']);
        }
      ?>
    </div>
    <div>
    <div class="row justify-content-center"> <!-- 中央寄せするためのdivを追加 -->
        <h3 class="col-5 text-center">現在のパスワードの確認:</h3> <!-- text-centerクラスを追加 -->
        <input type="password" id="password" name="pass" class="col-4" required>
    </div>
    </div>  
    <div class="row offset-4 col-3  mt-4">
        <input type="submit" value="変更する" class="btn btn-warning" name="changepass">
    </div>
  </form>
</div>
    

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="./css/style.css">
<!DOCTYPE html>
<html>
<head>
  <title>パスワード変更</title>
  <style>
    body 
    


    h1 {
      text-align: center;
    }

    .container {
      margin: 20px auto;
      max-width: 400px;
    }

    .form-container {
      margin-top: 20px;
    }

    .form-container label,
    .form-container input[type="password"],
    .form-container input[type="submit"] {
      display: block;
      width: 100%;
      padding: 5px;
      font-size: 16px;
    }

    .form-container input[type="submit"] {
      margin-top: 10px;
      padding: 5px 20px;
      font-size: 16px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <title>トップ画面</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];
  
  if ($password === $confirm_password) {
    // パスワードが一致する場合の処理を記述します
    echo "パスワードが一致しました";
  } else {
    // パスワードが一致しない場合の処理を記述します
    echo "パスワードが一致しません";
  }
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
        <form role="search">
          <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <h1>パスワード変更</h1>

    <div class="form-container">
      <!--
      <form id="password-form">
        <label for="current-password">現在のパスワード:</label>
        <input type="password" id="current-password" required>
-->
        <label for="new-password">新しいパスワード:</label>
        <input type="password" id="new-password" placeholder="8文字以上、24文字以内で入力してください" required>

        <label for="confirm-password">新しいパスワード（確認）:</label>
        <input type="password" id="confirm-password" placeholder="上記のパスワードをもう一度入力してください" required>

        <input type="submit" value="変更する">
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

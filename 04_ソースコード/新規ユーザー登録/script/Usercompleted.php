<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="../プロフィール画面/css/style.css">
<title>新規ユーザー登録完了画面</title>
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
            <a class="text-black nav-link" href="../トップ画面/Top.php">情報共有掲示板</a>
          </li>
        </ul>
        <a href="#" class="name"><?php echo $_SESSION['name'] ?></a>
        <form role="search">
          <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>

  <?php
    session_start();

    $username = $_SESSION['username'];

    if (!empty($username)) {
        echo '<p>ユーザー名: ' . $username . '</p>';
    }
    ?>

    <p>ユーザー登録完了</p>
        <a href="login.php">ログイン画面へ</a>
</body>
</html>

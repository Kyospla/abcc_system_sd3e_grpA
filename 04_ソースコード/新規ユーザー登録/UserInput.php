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
<title>新規ユーザー登録画面</title>
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
          <li class="nav-item">
            <a class="text-black nav-link" href="../投稿/Post.php">投稿</a>
          </li>
          <li class="nav-item">
            <a class="text-black nav-link " href="../投稿/History.php">投稿履歴</a>
          </li>
        </ul>
        <a href="#" class="name"><?php echo $_SESSION['name'] ?></a>
        <form role="search">
          <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>


<h1 style="text-align:center;margin-top: 2em;margin-bottom: 1em;" class="h1_log">新規ユーザー登録</h1>
    <form method="post" action="register.php">
        <label for="username">氏名:</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="userniku">ニックネーム:</label>
        <input type="text" name="userniku" id="userniku" required><br><br>

        <label for="userzip">〒:</label>
        <input type="text" name="userzip" id="userzip" required><br><br>

        <label for="useraddress">住所:</label>
        <input type="text" name="useraddress" id="useraddress" required><br><br>
        
        <label for="useraddress">番地:</label>
        <input type="text" name="useraddress" id="useraddress" required><br><br>

        <label for="usernumber">電話番号:</label>
        <input type="text" name="usernumber" id="usernumber" required><br><br>

        <label for="usermail">メールアドレス:</label>
        <input type="mail" name="usermail" id="usermail" required><br><br>

        <label for="userpass">パスワード:</label>
        <input type="userpass" name="userpass" id="userpass" required><br><br>
        
        <label for="userpass">パスワード再確認:</label>
        <input type="userpass" name="userpass" id="userpass" required><br><br>

        <input type="submit" value="登録">
    </form>
</body>
</html>
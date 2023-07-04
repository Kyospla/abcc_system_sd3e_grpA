<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../トップ画面/css/style.css">
    <title>投稿画面</title>
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

<form method="POST" action="<?php print($_SERVER['PHP_SELF']) ?>">

    <h1 class="offset-1 mt-2">情報共有掲示板</h1>
      <div class="offset-1 col-10 mt-3">
        <label  for="txt1"  class="form-label">タイトル</label>
        <input type="text"  name="personal_name" class="form-control" id="txt1" placeholder="タイトルを記入してください">
    </div>
    <div class="offset-1 col-10">
        <label  for="txt2"  class="form-label">投稿内容</label>
        <textarea type="text"  name="contents" class="form-control" id="txt2" placeholder="投稿内容を記入してください" rows="3"></textarea>
    </div>
        

        <input type="submit" class="mt-3 offset-8 col-3" name="btn1" value="投稿する">
</form>

<?php

$personal_name = $_POST['personal_name'];
$contents = $_POST['contents'];

print('<p>タイトル:'.$personal_name.'</p>');
print('<p>内容:</p>');
print('<p>'.$contents.'</p>');

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
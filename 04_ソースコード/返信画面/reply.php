<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>返信画面</title>
</head>
<body>
<?php
    session_start();
    if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false){
      header('Location:../Login/Login.php');
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
          <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search"></input>
        </form>
      </div>
    </div>
  </nav>
  <hr>

  <h2>返信画面</h2>
<?php
session_start();

// セッションからIDを取得
if (isset($_SESSION['thread_id'])) {
  $thread_id = $_SESSION['thread_id'];
}
$pdo = new PDO('mysql:host=localhost;dbname=hiroyuki;charset=utf8',
'root', 'root');

$sql="SELECT comments.comments_id,comments.comment,threads.threads_title,comments.post_date,users.user_niku,users.user_id FROM  (comments INNER JOIN threads ON comments.threads_id=threads.threads_id) INNER JOIN users ON comments.user_id = users.user_id ORDER BY comments_id ASC";
$selectData = $pdo->query($sql);

foreach($selectData as $row){
  if($row['comments_id'] == 1){
   echo $row['threads_title']."<br>";
  };
    echo $row['user_niku']."<br>";
    echo $row['comment']."<br>";
    echo $row['post_date']."<br>";
    echo"--------------------------<br>";
}
?> 
  
  <form action = "replycheck.php" method="post">
<h1>返信する</h1>
<input type="text" name="reply" class="form-control" id="txt" placeholder="返信を入力してください" required minlength="1" maxlength="800">
<br>
<input type="submit" value="送信">
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="./css/style.css">
<title>トップ画面</title>
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
        <br><h1 class="offset-2 col-8 text-black mb-2 text-rihgt">タイムライン</h1>
        <hr class="offset-2 col-8" size="4"noshade>
     </div>
        <div class="card offset-2 col-8 offset-2 card-box mt-2">
          
          <?php
          $pdo = new PDO('mysql:host=localhost;dbname=hiroyuki;charset=utf8',
          'root', 'root');
          $sql="SELECT comments.comments_id,comments.comment,threads.threads_title,comments.post_date,users.user_niku,users.user_id FROM  (comments INNER JOIN threads ON comments.threads_id=threads.threads_id) INNER JOIN users ON comments.user_id = users.user_id ORDER BY comments_id ASC";
$selectData = $pdo->query($sql);

//foreach($selectData as $row){
  //if($row['comments_id'] == 1){
   //echo $row['threads_title']."<br>";
  //};
    //echo $row['user_niku']."<br>";
    //echo $row['comment']."<br>";
   // echo"--------------------------<br>";
//}
//スレッドを降順にする
$sql="SELECT threads_title threads_date user_niku
FROM threads
INNER JOIN users ON threads.user_id = users.user_id
ORDER BY threads_date DESC";
//sql実行
$selectData = $pdo->query($sql);
//下の三つを繰り返し表示
foreach($selectData as $row){
  echo $row['user_niku'];
  echo $row['threads_date']."<br>";
  echo $row['threads_title'];
}

?>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     </body>
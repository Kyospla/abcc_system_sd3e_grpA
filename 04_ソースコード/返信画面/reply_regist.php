<?php
session_start();

// セッションからIDを取得
$id = $_SESSION['id'];
$pdo = new PDO('mysql:host=localhost;dbname=hiroyuki;charset=utf8',
'root', 'root');
$sql = "INSERT INTO comments(post_date,user_id,threads_id,comment)
        values(?,?,?,?)";
$ps = $pdo->prepare($sql);
$date = date("Y/m/d");
$ps->bindValue(1,$date,PDO::PARAM_STR);
$ps->bindValue(2,"1",PDO::PARAM_STR);
$ps->bindValue(3,"1",PDO::PARAM_STR);
$ps->bindValue(4,$_POST['reply'],PDO::PARAM_STR);
$ps->execute();
echo"返信が完了しました",$_POST['reply'];
?>      
<a href="Top.php">戻る</a>
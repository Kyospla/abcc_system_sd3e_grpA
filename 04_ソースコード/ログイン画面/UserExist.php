<?php
session_start();
$pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');

        $sql="SELECT * FROM users WHERE user_mail = ? AND user_pass=?";
        $ps = $pdo ->prepare($sql);
        $ps -> bindValue(1,$_POST['mail'],PDO::PARAM_STR);
		$ps -> bindValue(1,$_POST['pass'],PDO::PARAM_STR);
        $ps -> execute();
        $result = $ps -> fetchAll();

$searchArray = $ps->fetchAll();
foreach($searchArray as  $row){
	$_SESSION['mail'] = $row['user_mail'];
	$_SESSION['pass'] = $row['user_pass'];
	header('Location:login.php');
}

if(count($searchArray)==0){
	$_SESSION['msg'] = "メールアドレスまたはパスワードが間違っています";
	header('Location:login.php');
}
?>
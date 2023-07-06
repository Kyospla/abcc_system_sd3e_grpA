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
	$_SESSION['id'] = $row['user_id'];
	$_SESSION['name'] = $row['user_name'];
	header('Location:../Top/Top.php');
}

if(count($searchArray)==0){
	$_SESSION['msg'] = "メールアドレスまたはパスワードが間違っています";
	header('Location:Login.php');
}
?>
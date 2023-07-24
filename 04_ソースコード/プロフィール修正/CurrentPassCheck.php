<?php
//現在のパスワードチェック
session_start();
//エラーがあった場合に$_SESSION['errormsg']に文字が格納されていく。$cntはエラーのカウント数を示している。
$_SESSION['errormsg'] = "";
$cnt = 0;

//DB接続
$pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
$sql = "SELECT * FROM users WHERE user_id = ?";
$ps = $pdo -> prepare($sql);
$ps ->bindValue(1,$_SESSION["id"],PDO::PARAM_STR);
$ps -> execute();
$selectArray = $ps -> fetchAll();

foreach($selectArray as $row){
    if($_POST['pass'] != $row['user_pass']){
        $_SESSION['errormsg'] .= "現在のパスワードと一致していません。";
        $cnt++;
        break;
    }
}

if($cnt == 0){
    //OKの場合
    unset($_SESSION['errormsg']);
    header('Location:./UserPass.php');
}else{
    //NGの場合
    header('Location:./CheckPass.php');
}
?>
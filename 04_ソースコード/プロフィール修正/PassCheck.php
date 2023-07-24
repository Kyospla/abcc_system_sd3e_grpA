<?php
//新規パスワードチェック
 //セッションスタート
 session_start();
 //ログインされていない場合はログイン画面に遷移する。
 if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false){
     header('Location:../Login/Login.php');
 }
 //エラーがあった場合に$_SESSION['errormsg']に文字が格納されていく。$cntはエラーのカウント数を示している。
 $_SESSION['errormsg'] = "";
 $cnt = 0;

 if (!preg_match('/^[a-zA-Z0-9.?\/\-@]{8,24}$/', $_POST['pass'])) {
    $_SESSION['errormsg'] .= "パスワードは半角英数字と記号（.?/-@）のみ使用可能で、8文字以上24文字以内で入力してください。\n";
    $cnt++;
}

if ($_POST['pass'] != $_POST['passcheck']) {
    $_SESSION['errormsg'] .= "パスワードが一致していません。\n";
    $cnt++;
}

//チェックOKの場合
if($cnt == 0){
    //DB接続し更新するユーザを照合する。
    $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
    $sql = "INSERT INTO users(user_pass) VALUES (?) ";
    $ps = $pdo -> prepare($sql); 
    $ps ->bindValue(1,$_POST['pass'],PDO::PARAM_STR);
    $ps->execute();

    //エラーメッセージのセッション内容を破棄する。
    unset($_SESSION['errormsg']);
            
    //
    header('Location:./PassRegist.php');
}else{
    //NGの場合、
    header('Location:./UserPass.php');
}


?>
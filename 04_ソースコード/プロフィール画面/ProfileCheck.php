<?php
    //セッションスタート
    session_start();
    //ログインされていない場合はログイン画面に遷移する。
    if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false){
        header('Location:../ログイン画面/login.php');
    }
    //エラーがあった場合に$_SESSION['errormsg']に文字が格納されていく。$cntはエラーのカウント数を示している。
    $_SESSION['errormsg'] = "";
    $cnt = 0;

    //名前が未入力だった場合の処理
    if(strlen($_POST['name']) < 1){
        $_SESSION['errormsg'] .= "氏名を入力してください\n";
        $cnt++;
    }

    //ニックネームが未入力だった場合の処理
    if(strlen($_POST['nikku']) < 1){
        $_SESSION['errormsg'] .= "ニックネームを入力してください。\n";
        $cnt++;
    }

    //郵便番号の正規表現チェック
    if(!preg_match("/^[0-9]{3}-[0-9]{4}$/", $_POST['post'])){
        $_SESSION['errormsg'] .= "郵便番号を入力してください。\n";
        $cnt++;
    }
    

    //住所が未入力だった場合の処理
    if(empty($_POST['address'])){
        $_SESSION['errormsg'] .= "住所を入力してください。\n";
        $cnt++;
    }

    //番地の正規表現チェック
    if(preg_match("/^[0-9-]+$/",$_POST['address2']) == false){
        $_SESSION['errormsg'] .= "番地を入力してください。\n";
        $cnt++;
    }

    //電話番号の正規表現チェック
    if(preg_match("/[^0-9]/", $_POST['tel']) || strlen($_POST['tel']) != 11){
        $_SESSION['errormsg'] .= "電話番号を入力してください。\n";
        $cnt++;
    }    

    //メールアドレスの正規表現チェック
    if(!preg_match("/^[-a-z0-9~!$%^&*_=+}{'?.]+(\.[-a-z0-9~!$%^&*_=+}{'?.]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i", $_POST['mail'])){
        $_SESSION['errormsg'] .= "メールアドレスを入力してください。\n";
        $cnt++;
    }
    


    //チェックOKの場合の処理
    if($cnt == 0){
        //DB接続し更新するユーザデータを格納する。
        $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
        $sql="UPDATE users SET user_name = ?,user_niku = ?,user_zip = ?,user_address = ?,user_banchi = ?,user_number = ?,user_mail = ? WHERE user_id = ?";
        $ps = $pdo -> prepare($sql);
        //1～7はPOSTで代入する　8はuser_idをSESSIONで代入
        $ps->bindValue(1, $_POST['name'], PDO::PARAM_STR);
        $ps->bindValue(2, $_POST['nikku'], PDO::PARAM_STR);
        $ps->bindValue(3, $_POST['post'], PDO::PARAM_STR);
        $ps->bindvalue(4,$_POST['address'],PDO::PARAM_STR);
        $ps->bindValue(5, $_POST['address2'], PDO::PARAM_STR);
        $ps->bindValue(6, $_POST['tel'], PDO::PARAM_STR);
        $ps->bindValue(7, $_POST['mail'], PDO::PARAM_STR);
        $ps->bindvalue(8,$_SESSION['id'],PDO::PARAM_INT);
        $ps->execute();

        //セッション内容を破棄する。
        unset($_SESSION['errormsg']);
        //プロフィールの更新ができた場合は、Profilefix.phpに遷移する。
        header('Location:./ProfileRegist.php');
        

    //チェックNGの場合の処理
    }else{
        //エラーメッセージをProfilefix.phpに表示させる。
        header('Location:../ProfileChange/Profilefix.php');
    }
?>
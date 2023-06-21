<?php
    session_start();
    if(isset($_SESSION['name']) == false || isset($_SESSION['id']) == false){
        header('Location:../ログイン画面/login.php');
    }

    $_SESSION['errormsg'] = "";
    $cnt = 0;

    //名前が未入力だった場合の処理
    if(empty($_POST['name'])){
        $_SESSION['errormsg'] += "氏名を入力してください\n";
        $cnt++;
    }

    //ニックネームが未入力だった場合の処理
    if(empty($_POST['niku'])){
        $_SESSION['errormsg'] += "ニックネームを入力してください\n";
        $cnt++;
    }

    //郵便番号の正規表現チェック
    if(preg_match("/^[0-9]{3}-[^0-9]{4}$/",$_POST['post'])){
        $_SESSION += "郵便番号を入力してください。\n";
        $cnt++;
    }

    //住所が未入力だった場合の処理
    if(empty($_POST['address'])){
        $_SESSION += "住所を入力してください。\n";
        $cnt++;
    }

    //番地の正規表現チェック
    if(preg_match("/^[0-9-]+$/",$_POST['address2']) == false){
        $_SESSION += "番地を入力してください。\n";
        $cnt++;
    }

    //電話番号の正規表現チェック
    if(preg_match("/[^0-9]/",strlen($_POST['tel'] > 8)) == false){
        $_SESSION += "電話番号を入力してください。\n";
        $cnt++;
    }

    //メールアドレスの正規表現チェック
    if(preg_match("/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i",$_POST['mail']) == false){
        $_SESSION += "メールアドレスを入力してください。";
        $cnt++;
    }


    //チェックOKの場合の処理
    if($cnt == 0){
        //DB接続しデータを格納する。
        $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
        $sql="SELECT * FROM users WHERE user_id = ?";
    //チェックNGの場合の処理
    }else{
        //エラーメッセージをProfilefix.phpに表示させる。
        header('Location:../プロフィール修正/Profilefix.php');
    }
?>
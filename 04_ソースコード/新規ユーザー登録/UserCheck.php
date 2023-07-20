<?php
    session_start(); 
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
    
    //パスワードの正規表示チェック
    if (!preg_match('/^[a-zA-Z0-9.?\/\-@]{8,24}$/', $_POST['pass'])) {
        $_SESSION['errormsg'] .= "パスワードは半角英数字と記号（.?/-@）のみ使用可能で、8文字以上24文字以内で入力してください。\n";
        $cnt++;
    }
    
    //パスワード再確認一致
    if(var_dump($_POST['pass'] === $_POST['passcheck'])){
        $_SESSION['errormsg'] .= "パスワードと一致していません。\n";
        $cnt++;
    }
    

    //チェックOKの場合の処理
    if($cnt == 0){
        //DB接続し更新するユーザデータを格納する。
        $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
        $sql="INSERT INTO users (user_name, user_niku, user_zip, user_address, user_banchi, user_number, user_mail,user_pass) VALUES (?, ?, ?, ?, ?, ?, ?,?)";
        $ps = $pdo -> prepare($sql);
        //1～8はPOSTで代入する
        $ps->bindValue(1, $_POST['name'], PDO::PARAM_STR);
        $ps->bindValue(2, $_POST['nikku'], PDO::PARAM_STR);
        $ps->bindValue(3, $_POST['post'], PDO::PARAM_STR);
        $ps->bindvalue(4, $_POST['address'],PDO::PARAM_STR);
        $ps->bindValue(5, $_POST['address2'], PDO::PARAM_STR);
        $ps->bindValue(6, $_POST['tel'], PDO::PARAM_STR);
        $ps->bindValue(7, $_POST['mail'], PDO::PARAM_STR);
        $ps->bindvalue(8, $_POST['pass'],PDO::PARAM_STR);
        $ps->execute();

        //エラーメッセージのセッション内容を破棄する。
        unset($_SESSION['errormsg']);
        
        //新規ユーザー登録ができた場合は、UserRegist.phpに遷移する。
        header('Location:./UserRegist.php');
        

    //チェックNGの場合の処理
    }else{
        //NGの場合、UserInput.phpに遷移する。
        header('Location:./UserInput.php');
    }
?>
<?php
    //タイトルが未入力だった場合の処理
    if(strlen($_POST['title']) < 1){
        $_SESSION['errormsg'] .= "タイトルを入力してください\n";
        $cnt++;
    }

    //投稿内容が未入力だった場合の処理
    if(strlen($_POST['post']) < 1){
        $_SESSION['errormsg'] .= "投稿内容を入力してください。\n";
        $cnt++;
    }

    //チェックOKの場合の処理
    if($cnt == 0){
        //DB接続し更新するユーザデータを格納する。
        $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
        $sql="UPDATE users SET user_name = ?,user_niku = ?,user_zip = ?,user_address = ?,user_banchi = ?,user_number = ?,user_mail = ? WHERE user_id = ?";
        $ps = $pdo -> prepare($sql);
        //1,2はPOSTで代入する
        $ps->bindValue(1, $_POST['title'], PDO::PARAM_STR);
        $ps->bindValue(2, $_POST['post'], PDO::PARAM_STR);
        $ps->execute();

    //チェックNGの場合の処理
    }else{
        //エラーメッセージをProfilefix.phpに表示させる。
        header('Location:../ProfileChange/Profilefix.php');
    }
?>
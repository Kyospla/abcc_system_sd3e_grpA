<?php
    //   DBに接続
    // xamp
    //   $pdo = new PDO('mysql:host=localhost;dbname=hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
    // lolipop
    // $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');

    $pdo = new PDO('mysql:host=localhost;dbname=hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
    $sql = "INSERT INTO thread(threads_title,user_id,threads_date)VALUES(?,?,?)";
    $ps = $pdo -> prepare($sql);
    
    $ps->bindValue(1, $_POST['titele'], PDO::PARAM_STR);
    $ps->bindValue(2,"1", PDO::PARAM_STR);
    $ps->bindValue(3, $dayStr, PDO::PARAM_STR);
    $dayStr = date("Y/m/d");
    
    $ps->execute();

    // タイトルとコメント表示
    // $selectSQL = "SELECT * FROM thtead";
    // $selectdata = $pdo->query($selectSQL);
    // echo "タイトル：".$_POST['title']."<br>";
    // echo "コメント：".$_POST['comment']."<br>";
?>
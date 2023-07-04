<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <style>

    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
</head>
<body>
    <div class="container-fluid">
    <?php
            // session_start();
            // if(isset($_SESSION['name']) == true && isset($_SESSION['id']) == true){
            //     header('Location:Top.php');
            // }
    ?>
        <div class="text-center mt-3">
                <h2>ログイン</h2>
        </div>
        <div class="text-danger text-center">
        <?php
        // $pdo = new PDO('mysql:host=mysql213.phy.lolipop.lan;dbname=LAA1418543-hiroyuki;charset=utf8','LAA1418543', '12345hiroyuki');
        // $sql="SELECT * FROM users WHERE user_id = ?";
        // $ps = $pdo ->prepare($sql);
        // $ps -> bindValue(1,$_SESSION['name'],PDO::PARAM_STR);
        // $ps -> execute();
        // $result = $ps -> fetchAll();
      ?>
        </div>
        <form action="logincheck.php" method="post">
            <div class="row offset-sm-4 offset-3 col-sm-4  col-6 mt-3">
                <label for="txt1" class="form-label">メールアドレス</label>
                <input type="email" name="mail" class="form-control" id="txt1" placeholder="name@example.com">
            </div>
            <div class="row offset-sm-4 offset-3 col-sm-4  col-6 mt-3">
                <label for="txt2" class="form-label">パスワード</label>
                <input type="password" name="pass" class="form-control" id="txt2">
            </div>
            <div class="row offset-sm-4 offset-3 col-sm-4  col-6 mt-4">
                <input type="submit" class="btn btn-warning" name="login" value="ログイン" >
            </div>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
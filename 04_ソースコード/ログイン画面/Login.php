<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>ログイン画面</title>
</head>
<body>
    <div class="container-fluid">
    <?php
            // session_start();
            // if(isset($_SESSION['name']) == true && isset($_SESSION['id']) == true){
            //     header('Location:Top.php');
            // }
    ?>
        <div class="row">
            <div class="col-12" style="background-color:#76FF60">
                <h1 class="text-center p-2">情報共有掲示板</h1>
            </div>
            <h1 class="text-center mt-5">ログイン</h1>
            <div class="text-center mt-2">
            <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }
            ?>
        </div>
            
            <div class="offset-4 col-4">
                <label for="txt1" class="form-label mt-3 mb-0">メールアドレス</label>
                <input type="text" class="form-control" id="txt1" placeholder="name@example.com" name="mail">
            </div>
            <div class="offset-4 col-4">
                <label for="txt2" class="form-label mt-2 mb-0">パスワード</label>
                <input type="password" class="form-control" id="txt2" name="pass">
            </div>
            <div class="row offset-4 col-4 mt-3">
                <input type="submit" value="ログイン" class="btn btn-warning textbtn" name="login">
            </div>
            <div class="text-center mt-4">
                <p>初めての方は<a href="../新規ユーザー登録/UserInput.html">こちらから</a></p>
            </div>
        </div>
    </div>
    
        <form action="./UserExist.php" method="post">
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://yubinbango.github.io/yubinbango/yubinbango.js" charset="UTF-8"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>新規ユーザー登録</title>
</head>
<body>
      <div class = "row">
        <div class = "col-5 text-end">
          <h1 class="mb-2 mt-3">新規ユーザー登録</h1>
        </div>
        
      </div>
      
      <div class="row">
        <?php 
           foreach($searchArray as $row){
        ?>
        <div class="offset-5 col-5">
        <form action="./UserInput/UserCheck.php" method="post">
            <p class="error">
              <?php
                if(isset($_SESSION['errormsg'])){
                  echo nl2br($_SESSION['errormsg']);
                  unset($_SESSION['errormsg']);
                }
              ?>
            </p>
        </div>

        <div class="col-5">
          <h3 class="text-end">氏名:</h3>
        </div>
        <div class="col-7">
            <input type="text" class="box"  name="name"  value="<?php echo $row['user_name']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">ニックネーム:</h3>
        </div>
        <div class="col-7">
            <input type="text" class="box"  name="nikku" value="<?php echo $row['user_niku']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">〒:</h3>
        </div>
        <div class="col-7">
            <input type="text" class="box"  name="post" value="<?php echo $row['user_zip']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">住所:</h3>
        </div>
        <div class="col-7">
            <input type="text" class="box"  name="address" value="<?php echo $row['user_address']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">番地:</h3>
        </div>
        <div class="col-7">
            <input type="text" class="box"  name="address2" value="<?php echo $row['user_banchi']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">電話番号:</h3>
        </div>
        <div class="col-7">
            <input type="tel" class="box"  name="tel" value="<?php echo $row['user_number']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">メールアドレス:</h3>
        </div>
        <div class="col-7">
            <input type="email" class="box"  name="mail" value="<?php echo $row['user_mail']?>">
        </div>

        <div class="col-5">
          <h3 class="text-end">パスワード:</h3>
        </div>
        <div class="col-7">
            <input type="text" class="box"  name="pass" value="<?php echo $row['user_pass']?>">
        </div>

      <div class="mt-3">
        <input type="submit"  class="btn btn-primary offset-4 col-2"  value="登録する">
        
      </div>
      </form> 
      <?php 
              }
      ?>
        
    </div>     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
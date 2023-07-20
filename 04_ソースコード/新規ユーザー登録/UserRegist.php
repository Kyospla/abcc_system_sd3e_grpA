<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Top/css/style.css">
    <title>登録後ユーザ登録完了画面</title>
</head>
<body>
  <?php
    session_start();
  ?>
    <div id="app">
        <div class="container-fluid">
            <form>
            <div class="row">
                <div class="col-12" style="background-color:#76FF60">
                    <h1 class="text-center p-2">情報共有掲示板</h1>
                </div>
                
                <div class="col-12">
                    <h1 class="text-center mt-3 mb-5">新規ユーザー登録</h1>
                </div>
                <a href="../新規ユーザー登録画面/UserInput.php" class="name"><?php echo $_SESSION['name'] ?></a>
            <form role="search" action="../Top/Search.php" method="post">
              <input class="form-control" type="search" placeholder="タイトル検索" aria-label="Search" name="search" required>
            </form>
          </div>
        </div>
    <div class="row">
        <h5 class="mt-5 text-center">
            ユーザー情報が正常に登録されました。
        </h5>
        <a class="col-12 text-center mt-3"href="./UserInput.php">新規ユーザー登録画面へ戻る</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
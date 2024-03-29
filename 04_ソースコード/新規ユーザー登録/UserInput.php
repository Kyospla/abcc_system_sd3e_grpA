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
    <div id="app">
        <div class="container-fluid">
            <form method="POST" action="UserCheck.php">
                <div class="row">
                    <div class="col-12" style="background-color:#76FF60">
                        <h1 class="text-center p-2">情報共有掲示板</h1>
                    </div>
                    <p class="text-center">
                    <?php 
                        session_start(); // セッションの開始

                         if (isset($_SESSION['errormsg'])) {
                             echo nl2br($_SESSION['errormsg']);
                             unset($_SESSION['errormsg']);
                         }
                        ?>
                    </p>
                    <div class="col-12">
                        <h1 class="text-center mt-3 mb-5">新規ユーザー登録</h1>
                    </div>
                    <div class="col-5">
                        <h3 class="text-end">氏名:</h3>
                    </div>
                    <div class="col-7">
                        <input type="text" class="inputbox" v-model="name" name="name" placeholder="氏名を入力"/>
                    </div>
                    <p v-if="isInValidName" class="error offset-5 col-7 mb-1">※氏名を入力してください。</p>

                    <div class="col-5">
                        <h3 class="text-end">ニックネーム:</h3>
                    </div>
                    <div class="col-7">
                        <input type="text" class="inputbox" v-model="nikku" name="nikku" placeholder="サイトに表示する名前を入力"/>
                    </div>
                    <p v-if="isInValidNikku" class="error offset-5 col-7 mb-1">※ニックネームを入力してください</p>

                    <div class="col-5">
                        <h3 class="text-end">〒:</h3>
                    </div>
                    <div class="col-7">
                        <input type="text" class="inputbox" v-model="post" name="post" placeholder="例：810-0000"/>
                    </div>
                    <p v-if="isInValidPost" class="error offset-5 col-7 mb-1">※郵便番号を入力してください。</p>

                    <div class="col-5">
                        <h3 class="text-end">住所:</h3>
                    </div>
                    <div class="col-7">
                        <input type="text" class="inputbox" v-model="address" name="address" placeholder="例：福岡県福岡市博多区博多駅南"/>
                    </div>
                    <p v-if="isInValidaddress" class="error offset-5 col-7 mb-1">※住所を入力してください。</p>

                    <div class="col-5">
                        <h3 class="text-end">番地:</h3>
                    </div>
                    <div class="col-7">
                        <input type="text" class="inputbox" v-model="address2" name="address2" placeholder="例：2-12-32"/>
                    </div>
                    <p v-if="isInValidaddress2" class="error offset-5 col-7 mb-1">※番地を入力してください。<br>　半角数字と半角記号-のみしか使えません。</p>

                    <div class="col-5">
                        <h3 class="text-end">電話番号:</h3>
                    </div>
                    <div class="col-7">
                        <input type="tel" class="inputbox" v-model="tel" name="tel" placeholder="01203456789"/>
                    </div>
                    <p v-if="isInValidaTel" class="error offset-5 col-7 mb-1">※電話番号を入力してください。<br>　-は入れないでください。</p>

                    <div class="col-5">
                        <h3 class="text-end">メールアドレス:</h3>
                    </div>
                    <div class="col-7">
                        <input type="email" class="inputbox" v-model="mail" name="mail" placeholder="name@example.com"/>
                    </div>
                    <p v-if="isInValidaMail" class="error offset-5 col-7 mb-1">※メールアドレスを入力してください。</p>
                    
                    <p class="textmessage offset-5 col-7 mb-0">半角英数字と記号（.?/-@）のみ使用可能</p>
                    <div class="col-5">
                        <h3 class="text-end">パスワード:</h3>
                    </div>
                    <div class="col-7">
                        <input type="password" class="inputbox" v-model="pass" name="pass" placeholder="パスワードを入力"/>
                    </div>
                    <p v-if="isInValidaPass" class="error offset-5 col-7 mb-1">※パスワードを8文字以上24文字以内で入力してください。</p>
                    <div class="col-5">
                        <h3 class="text-end">パスワード再確認:</h3>
                    </div>
                    <div class="col-7">
                        <input type="password" class="inputbox" v-model="passcheck" name="passcheck"/>
                    </div>
                    <p v-if="isInValidaPassCheck" class="error offset-5 col-7">※パスワードが一致していません。</p>
                    <input type="submit"  class="btn btn-warning mt-2 mb-4 offset-5 col-2" value="登録する">
                </div>
            </form>
        </div>
    </div>
    <script src="./script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>
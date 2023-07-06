<?php
// データベースへの接続
$servername = "mysql213.phy.lolipop.lan";
$username = "LAA1418543";
$password = "12345hiroyuki";
$dbname = "LAA1418543-hiroyuki";

// 接続を作成
$conn = new mysqli($servername, $username, $password, $dbname);

// 接続を確認
if ($conn->connect_error) {
    die("データベースに接続できませんでした: " . $conn->connect_error);
}
// echo "MySQLデータベースへの接続に成功しました！";

// 投稿フォームからのデータを取得
$threadTitle = $_POST['thread_title'];
$commentText = $_POST['comment'];

// スレッドをthreadsテーブルに挿入
$sql = "INSERT INTO threads (threads_title, user_id, threads_date) VALUES ('$threadTitle', 1, CURDATE())";
$conn->query($sql);

// 直前に挿入されたスレッドのIDを取得
$threadId = $conn->insert_id;

// コメントをcommentsテーブルに挿入
$sql = "INSERT INTO comments (threads_id, user_id, post_date, comment) VALUES ($threadId, 1, CURDATE(), '$commentText')";
$conn->query($sql);

// 接続を閉じる
$conn->close();
?>
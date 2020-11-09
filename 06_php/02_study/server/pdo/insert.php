<?php

// 接続に必要な情報を定義
define('DSN', 'mysql:host=db;dbname=pg_camp;charset=utf8;');
define('USER', 'testuser');
define('PASSWORD', '9999');

// DBに接続
try {
    $dbh = new PDO(DSN, USER, PASSWORD);
    echo '接続に成功しました！' . '<br>';
} catch (PDOException $e) {
    // 接続がうまくいかない場合こちらの処理がなされる
    echo $e->getMessage();
    exit;
}

// SQL文の組み立て
$sql = 'INSERT INTO members (name, email, password) VALUES (:name, :email, :password)';

// プリペアドステートメントの準備
$stmt = $dbh->prepare($sql);

// バインド(代入)するパラメータの準備
$name = 'ken';
$email = 'ken@example.com';
$password = '3333';

// パラメータのバインド(プレースホルダへの代入)
// 文字列の場合: PDO::PARAM_STR
// 数値の場合: PDO::PARAM_INT
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);

// プリペアドステートメントの実行
$stmt->execute();

echo 'データを登録しました！' . '<br>';

// SQL文の組み立て
$sql2 = 'SELECT * FROM members';

// プリペアドステートメントの準備
$stmt = $dbh->prepare($sql2);

// プリペアドステートメントの実行
$stmt->execute();

// 結果の受け取り
$members = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($members as $member) {
    echo $member['name'] . 'さん<br>';
}
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

// 削除対象のidの定義
$id = 1;

// SQLの組み立て
$sql = 'DELETE FROM members WHERE id = :id';

// プリペアドステートメントの準備
$stmt = $dbh->prepare($sql);

// パラメータのバインド
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

// プリペアドステートメントの実行
$stmt->execute();


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
<?php

// 接続に必要な情報を定義
// hostにはコンテナ名を指定する
define('DSN', 'mysql:host=db;dbname=pg_camp;charset=utf8;');
define('USER', 'testuser');
define('PASSWORD', '9999');


// try ~ catch 構文
// ここはコピペでOK
// 気になる人は「例外処理」で検索
try {
    $dbh = new PDO(DSN, USER, PASSWORD);
    echo '接続に成功しました！' . '<br>';
} catch (PDOException $e) {
    // 接続がうまくいかない場合こちらの処理がなされる
    echo $e->getMessage();
    exit;
}
/* try ~ catch 命令 *
try {
    // 例外発生する可能性がある処理
} catch(発生するかもしれない例外の種類 例外を受け取る変数名) {
    // 例外発生時の処理
}

*/

/* PDOクラスの書き方 *

new PDO($dsn, $user, $password);
$dsn     : データベース接続用の文字列 mysql:host=db;dbname=pg_camp;charset=utf8;
$user    : 接続するときのユーザー名
$password: 接続する際のパスワード

*/
<?php

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if ($_POST['uname'] === '') {
        $errors['uname'] = '名前を入力して下さい。';
    }

    if ($_POST['email'] === '') {
        $errors['email'] = 'メールアドレスを入力して下さい。';

    } else if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        $errors['email']='形式に誤りがあります。';

    if ($_POST['message'] === '') {
        $errors['message'] = '感想を入力して下さい。';
    }

    if(($_POST['job']==='')){
    $errors['job'] = '職業を選択して下さい。';
    }

    if(empty($_POST['rate'])){
    $errors['rate'] = '書籍の満足度を入れて下さい。';
    }

    if(empty($_POST['rate2'])){
    $errors['rate2'] = 'ボリュームの満足度を入れて下さい。';
    }

    if (count($_POST) === 0){
        $_POST['form']= $post;
        header('Location: check.php');
        exit();
    }

    } else {
    if (isset($_POST['form'])) {
        $_POST = $_POST['form'];
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <title>アンケートフォーム</title>
</head>

<body>
<h1>アンケートフォーム(1.回答画面)</h1>
<p>アンケートに回答して「確認ボタン」をクリックして下さい。</p>

<?php if ($errors):?>
    <?php foreach ($errors as $error):?>
        <li>
            <?=htmlspecialchars($error)?>
        </li>
    <?php endforeach;?>
<?php endif;?>

<form method ="POST" action = "">
    <table border="1">
        <tr> 
            <td>お名前</td>
            <td><input type="text" name="uname" size="50" value="<?=htmlspecialchars($_POST['uname'])?>"></td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td><input type="trext" name="email" size="50" value="<?=htmlspecialchars($_POST['email'])?>"></td>
        </tr>
        <tr>
            <td>性別</td>
            <td>
                <input type = "radio" name = "genders" value ="男" checked>男性
                <input type = "radio" name = "genders" value ="女">女性
                <input type = "radio" name = "genders" value ="両方">どちらでもない
            </td>
        </tr>
        <tr>
            <td>職業</td>
            <td>
                <select name = "job">
                    <option value ="">選択</option>
                    <option value ="学生">学生</option>
                    <option value ="会社員">会社員</option>
                    <option value ="公務員">公務員</option>
                    <option value ="自営業">自営業</option>
                    <option value ="その他">その他</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>書籍の満足度は？</td>
            <td>
                <?php $ar_rate = array(
                    "5" => "満足",
                    "4" => "やや満足",
                    "3" => "普通",
                    "2" => "やや不満",
                    "1" => "不満",
                )?>
                <?php foreach ($ar_rate as $key=>$value):?>
                    <?= "<input type=\"radio\" name=\"rate\" value=\"{$key}\">{$value}"?>
                <?php endforeach;?>
            </td>
        </tr>
        <tr>
            <td>書籍のボリュームは？</td>
            <td>
                <?php foreach ($ar_rate as $key=>$value):?>
                    <?= "<input type=\"radio\" name=\"rate2\" value=\"{$key}\">{$value}"?>
                <?php endforeach;?>
            </td>
        </tr>
        <tr>
            <td>経験のある技術(複数選択可)</td>
            <td>
                <input type= "checkbox" name="tec[]" value="PHP">PHP
                <input type= "checkbox" name="tec[]" value="Java">Java
                <input type= "checkbox" name="tec[]" value="JavaScript">JavaScript
                <input type= "checkbox" name="tec[]" value="Ruby">Ruby
                <input type= "checkbox" name="tec[]" value="C#">C#
            </td>
        </tr>
        <tr>
            <td>新刊情報のお知らせ</td>
            <td>
                <input type = "radio" name= "dm" checked>送付を希望する
                <input type = "radio" name= "dm" >送付を希望しない
            </td>
        </tr>
        <tr>
            <td>書籍の感想</td>
        <td>
            <textarea rows="5" cols="40" name="message"><?=htmlspecialchars($_POST['message'])?></textarea>
        </td>
        </tr>
        <tr>
            <td align="right" colspan="2">
                <input type="submit" value="確認する" name="sub1">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
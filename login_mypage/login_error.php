<?php
session_start();
if(isset($_SESSION['id'])){
    header("Location:mypage.php");
}

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
        </header>

        <main>
            <form action="mypage.php" method="post" >
            <div class="form_contents">
                <div class="error_messege">
                    <p>メールアドレスまたはパスワードが間違っています。</p>
                </div>
                <div class="mail">
                    <label>メールアドレス</label><br>
                    <input type="text" class="formbox" name="mail" size="65" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>

                <div class="password">
                    <label>パスワード</label><br>
                    <input type="password" class="formbox" size="65" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
                </div>

                <div class="button">
                        <input type="submit" class="submit_button" size="35" value="ログイン">
                </div>
            </div>
            </form>
        </main>

        <footer>
            © 2018 InterNous.inc.All rights reserved
        </footer>
    </body>
</html>
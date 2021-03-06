<?php
  require_once('conn.php');
?> 

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>註冊會員</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="wrapper">
      本站為練習使用，註冊時請勿使用任何真實的帳號密碼！！！
    </div>
  </header>
  <main>
    <div class="wrapper">
      <section class="sendMessage registerForm">
        <div class="memberLogin">
          <a class="inputBtn" href="login.php">登 入</a>
          <a class="inputBtn" href="index.php">回留言區</a>
        </div>
        <h3>註冊會員</h3>
        <form method="POST" action="handle_register.php">
          <div class="registerInfo">
            <label for="暱稱">暱稱：</label>
            <input type="text" name="nickname">
          </div>
          <div class="registerInfo">
            <label for="帳號">帳號：</label>
            <input type="text" name="username">
          </div>
          <div class="registerInfo">
            <label for="密碼">密碼：</label>
            <input type="password" name="password">
          </div>

          <!-- 顯示錯誤訊息 -->
          <?php
            if(!empty($_GET['errCode'])) {
              $code = $_GET['errCode'];
              $msg = 'error';

              if ($code === '1') {
                $msg = '資料不齊全';
              } else if ($code === '2') {
                $msg = '帳號已有人使用，請重新輸入';
              }
              echo '<h4 class="error">' . $msg . '</h4>';
            }
          ?>
          
          <input class="inputBtn" type="submit" value="送 出">
        </form>
      </section>
    </div>
  </main>
</body>
</html>
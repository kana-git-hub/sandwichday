<!--<?php var_dump( $_POST ); ?>-->

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>ご注文ご確認 | SandwichDay | カスタムサンドウィッチカフェ</title>
  <meta name="description" content="よくあるご質問はこちらです。">
  <link rel="icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="webclip.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="check">
  <div class="wrapper">
    <main>
      <div class="container-wrap">
        <section class="check-box">
          <div class="form-box">
            <h2>ご注文ご確認</h2>
            <form action="thanks.php" method="post">
              <table class="block">
                <tbody>
                  <tr>
                    <th>料金</th>
                    <td class="php"><?php echo $_POST['total']; ?></td>
                  </tr>
                  <tr>
                    <th>数量</th>
                    <td class="php"><?php echo $_POST['number']; ?></td>
                  </tr>
                  <tr>
                    <th><label for="namae">お名前<span class="required-txt">必須</span></label></th>
                    <td><input type="text" name="namae" id="namae" size="40" autocomplete="name" placeholder="お名前" required>
                    </td>
                  </tr>
                  <tr>
                    <th><label for="email">メールアドレス<span class="required-txt">必須</span></label></th>
                    <td><input type="email" name="email-address" id="email" size="40" placeholder="info@sd.com"></td>
                  </tr>
                </tbody>
              </table>
              <div class="submit-btn">
                <input type="submit" value="この内容で注文する">
              </div>
              <!--/submit-btn-->
            </form>
          </div>
          <!--/form-box-->
        </section>
        <!--/concept-->
      </div>
      <!--/container-wrap-->
    </main>
    <form action="thanks.php" method="post">
      <input type="hidden" name="number" class="number" value="<?php echo $_POST['number']; ?>">
      <input type="hidden" name="number" class="number" value="<?php echo $_POST['pan_white']; ?>">
    </form>
  </div>
  <!--/wrapper-->
</body>

</html>

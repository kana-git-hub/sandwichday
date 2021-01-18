<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>店舗情報 | SandwichDay | カスタムサンドウィッチカフェ</title>
  <meta name="description" content="店舗の情報はこちらです。住所、営業時間、電話番号">
  <link rel="icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="webclip.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="store">
  <div class="wrapper">
    <header>
      <nav class="clearfix">
        <p class="logo">
          <a href="index.php">
            <img src="images/logo-gNav.svg" width="200" height="60" alt="SandwichDay（サンドウィッチディ）">
          </a>
        </p>
         <ul>
            <li class="main1"><a href="menu.php">メニュー</a>
              <ul>
                <li class="sub1"><?php echo'<a href="order.php">ご注文</a>'; ?></li>
              </ul>
           </li>
            <li><a href="fussy.php">こだわり</a></li>
            <li><a href="store.php">店舗情報</a></li>
            <li><a href="qa.php">よくあるご質問</a></li>
            <li class="separator"><a href="#">カートを見る</a></li>
            <li class="separator"><a href="#">ログイン</a></li>
            <li class="separator"><a href="#">会員登録</a></li>
          </ul>
      </nav>
    </header>

    <main>
      <div class="top-box"></div><!--/top-box-->
     <div class="container-wrap">
        <section class="store-box">
         <h2>店舗住所<br><span>STORE ADDRESS</span></h2>
            <address>
              <table>
                <tbody>
                  <tr>
                    <th>住所</th>
                    <td>〒03-1234-5678 東京都千代田区丸の内1-9-2000</td>
                  </tr>
                  <tr>
                    <th>営業時間</th>
                    <td>月〜金曜日/10:00 - 18:00</td>
                  </tr><tr>
                    <th>電話番号</th>
                    <td>03-1234-5678</td>
                  </tr>
                </tbody>
              </table>
            </address>
           <div class="store-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6481.71693195875!2d139.76097864501241!3d35.68048683525346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbcd794975%3A0x239c242b7b27f6c9!2z44CSMTAwLTAwMDUg5p2x5Lqs6YO95Y2D5Luj55Sw5Yy65Li444Gu5YaF!5e0!3m2!1sja!2sjp!4v1610932243827!5m2!1sja!2sjp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div><!--/store-map-->
        </section><!--/store-box-->
     </div><!--/container-wrap-->

    </main>

    <footer>
      <div class="footer-box">
        <div class="footer-left">
          <address>
            <p>〒03-1234-5678</p>
            <p>東京都千代田区丸の内1-9-2000<a href="#"><span>(Google Map)</span></a></p>
            <p>TEL : 03-1234-5678</p>
          </address>
            <ul class="socials">
              <li><a href="#"><i class="fab fa-facebook-f fa-2x facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter fa-2x twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram fa-2x insta"></i></a></li>
            </ul>
        </div><!--/footer-left-->

        <div class="footer-center">
          <img src="images/logo-footer.svg" width="257" height="140" alt="SandwichDay（サンドウィッチディ）">
        </div><!--/footer-center-->

        <div class="footer-right">
          <ul>
            <li><a href="#">サイトマップ</a></li>
            <li><a href="#">会社情報</a></li>
            <li><a href="#">お問い合わせ</a></li>
          </ul>
        </div><!--/footer-right-->
      </div><!--/footer-box-->
      <p class="copy"><small>&copy;2020 SandwichDay.</small></p>
    </footer>
  </div><!--/wrapper-->

</body></html>

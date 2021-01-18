<?php
  $pan_white = 500;
  $pan_brown = 300;
  $pan_low = 400;

  $pan_leaf = 5;

  $total = 0;
//  $total = $pan_white + $pan_brown + $pan_low;
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>ご注文 | SandwichDay | カスタムサンドウィッチカフェ</title>
  <meta name="description" content="カスタムサンドウィッチのご注文方法はこちらです。スマホでご注文いただけます。">
  <link rel="icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="webclip.png">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="jquery-3.5.1.min.js"></script>
  
  <script> //クリックしたトッピングの金額をcheck.phpに送る
  $(function(){
      $('#thum-pan-white')
        .click(function(){
        $('#price').html('<?php echo $total += $pan_white; ?>');
    });
      $('#thum-pan-brown')
        .click(function(){
        $('#price').html('<?php echo $total += $pan_brown; ?>');
    });
      $('#thum-pan-low')
        .click(function(){
        $('#price').html('<?php echo $total += $pan_low; ?>');
    });
    
      $('#thum-leaf')
        .click(function(){
        $('#price').append('<?php echo $pan_leaf; ?>');
      });
    });
    
</script>
</head>


<body class="order">
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
              <li class="sub1"><a href="order.php">ご注文</a></li>
            </ul>
          </li>
          <li><a href="fussy.php">こだわり</a></li>
          <li><a href="store.php">店舗情報</a></li>
          <li><a href="qa.php">よくあるご質問</a></li>
          <li class="separator cart"><a href="#">カートを見る</a></li>
          <li class="separator"><a href="#">ログイン</a></li>
          <li class="separator"><a href="#">会員登録</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="container-wrap">
        <section class="order-box">
          <h2>カスタムサンドウィッチご注文方法</h2>
          <div class="tab-wrap clearfix">
    <input id="tab1" type="radio" name="tab-btn" checked>
    <input id="tab2" type="radio" name="tab-btn">
            
    <div class="tab-area">
      <label class="tab1-label" for="tab1">はじめにパンメニューをお選びください<span class="arrow tab-arrow"></span></label>
      <label class="tab2-label" for="tab2">次にトッピングをお選びください<span class="arrow tab-arrow"></span></label>
      
    </div><!--/tab-area-->

    <div class="order-left">
      <p><img src="images/plate.png" width="468" height="468" alt="お皿" id="plate"></p>
      <div id="topping-01">
        <img src="images/topping-pan_white.png" width="335" height="335" alt="食パン" id="pan-white">
        <img src="images/topping-pan.png" width="335" height="335" alt="全粒粉パン" id="pan-brown">
        <img src="images/topping-pan_low.png" width="335" height="335" alt="低糖質パン" id="pan-low">
        <img src="images/topping-leaf.png" width="335" height="335" alt="レタス" id="leaf">
        <img src="images/topping-tomato.png" width="335" height="335" alt="トマト" id="tomato">
        <img src="images/topping-cucumber.png" width="335" height="335" alt="きゅうり" id="cucumber">
        <img src="images/topping-chicken.png" width="335" height="335" alt="サラダチキン" id="chicken">
        <img src="images/topping-avo.png" width="335" height="335" alt="アボカド" id="avo">
        <img src="images/topping-beef.png" width="335" height="335" alt="ローストビーフ" id="beef">
        <img src="images/topping-egg.png" width="335" height="335" alt="卵" id="egg">
      </div>

      <div class="total-price-box">
        <div class="price">
          <p>TOTAL</p>
          <p>￥<span id="price"><?php echo $total ?></span></p>
        </div>

      <form action="check.php" method="post">
        <input type="hidden" name="total" value="<?php echo $total; ?>">
        <input type="hidden" name="pan_white" value="<?php echo $pan_white; ?>">
        <input type="hidden" name="pan_brown" value="<?php echo $pan_brown; ?>">
        <input type="hidden" name="pan_low" value="<?php echo $pan_low; ?>">
        数量：<input type="number" name="number" class="number"><br>
        <input type="image" name="submit-img" src="images/order-cartIn.svg" width="250" height="47" alt="カートに入れるボタン" id="submit-btn">
<!--                <input type="submit" name="photo" src="images/order-cartIn.svg" width="300" height="47" alt="カートに入れるボタン" value="カートに入れる">-->
      </form>
      </div><!--/total-price-->
    </div><!--/order-left-->

    <div class="panel-area">
      <div id="panel1" class="tab-panel">
        <div class="custom-content">
          <p class="panel-01-title"><span>1.&nbsp;</span>パンメニュー&nbsp;</p>
            <div class="topping-box">
              <input id="pan-white-btn" type="radio" name="pan" value="8">
              <label for="pan-white-btn">
              <img src="images/topping-pan_white.png" width="100" height="100" alt="食パン" id="thum-pan-white">
              <p>食パン</p>
              </label>
            </div><!--/topping-box-->
            <div class="topping-box">
              <input id="pan-brown-btn" type="radio" name="pan" value="9">
              <label for="pan-brown-btn">
              <img src="images/topping-pan.png" width="100" height="100" alt="全粒粉パン" id="thum-pan-brown">
              <p>全粒粉パン</p>
              </label>
            </div>
            <!--/topping-box-->
            <div class="topping-box">
              <input id="pan-low-btn" type="radio" name="pan" value="10">
              <label for="pan-low-btn">
              <img src="images/topping-pan_low.png" width="100" height="100" alt="低糖質パン" id="thum-pan-low">
              <p>低糖質パン</p>
              </label>
            </div><!--/topping-box-->
        </div><!--/custom-content-->
      </div><!--/panel1-->

      <div id="panel2" class="tab-panel">
        <div class="custom-content">
          <p class="panel-02-title"><span>1.&nbsp;</span>野菜トッピング&nbsp;</p>

          <div class="vege-topping">
            <input id="leaf-btn" type="radio" name="vege-topping" value="1">
            <label for="leaf-btn">
              <div class="topping-box flex-item">
                <img src="images/topping-leaf.png" width="100" height="100" alt="レタス" id="thum-leaf">
                <p>レタス</p>
              </div><!--/topping-box-->
            </label>
            <input id="cucumber-btn" type="radio" name="vege-topping" value="2">
            <label for="cucumber-btn">
              <div class="topping-box flex-item">
                <img src="images/topping-cucumber.png" width="100" height="100" alt="きゅうり" id="thum-cucumber">
                <p>きゅうり</p>
              </div><!--/topping-box-->
            </label>
            <input id="tomato-btn" type="radio" name="vege-topping" value="3">
            <label for="tomato-btn">
              <div class="topping-box flex-item">
                <img src="images/topping-tomato.png" width="100" height="100" alt="トマト" id="thum-tomato">
                <p>トマト</p>
              </div><!--/topping-box-->
            </label>
          </div><!--/vege-->

          <p class="panel-02-title"><span>2.&nbsp;</span>メイントッピング&nbsp;</p>
          <div class="main-topping">
            <input id="chicken-btn" type="radio" name="main-topping" value="4">
            <label for="chicken-btn">
              <div class="topping-box">
                <img src="images/topping-chicken.png" width="100" height="100" alt="サラダチキン" id="thum-chicken">
                <p>サラダチキン</p>
              </div><!--/topping-box-->
            </label>
            <input id="beef-btn" type="radio" name="main-topping" value="5">
            <label for="beef-btn">
              <div class="topping-box">
                <img src="images/topping-beef.png" width="100" height="100" alt="ローストビーフ" id="thum-beef">
                <p>ローストビーフ</p>
              </div><!--/topping-box-->
            </label>
          </div><!--/main-topping-->

          <p class="panel-02-title"><span>3.&nbsp;</span>サイドトッピング&nbsp;</p>
          <div class="side-topping">
            <input id="egg-btn" type="radio" name="side-topping" value="6">
            <label for="egg-btn">
              <div class="topping-box">
                <img src="images/topping-egg.png" width="100" height="100" alt="卵" id="thum-egg" class="submit-trigger">
                <p>卵</p>
              </div><!--/topping-box-->
            </label>
            <input id="avo-btn" type="radio" name="side-topping" value="7">
            <label for="avo-btn">
              <div class="topping-box">
                <img src="images/topping-avo.png" width="100" height="100" alt="アボカド" id="thum-avo" class="submit-trigger">
                <p>アボカド</p>
              </div><!--/topping-box-->
            </label>
          </div><!--/side-topping-->

        </div><!--/custom-content-->
      </div><!--/panel2-->
    </div><!--/panel-area-->
          </div><!--/tab-wrap-->
        
          <div class="return">
            <p><a href="order.php" class="arrow back-arrow">初めから注文しなおす</a></p>
            <p><a href="menu.php" class="arrow back-arrow">グランドメニューを注文する</a></p>
          </div><!--/return-->
        </section><!--/concept-->
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
        </div>
        <!--/footer-left-->

        <div class="footer-center">
          <img src="images/logo-footer.svg" width="257" height="140" alt="SandwichDay（サンドウィッチディ）">
        </div>
        <!--/footer-center-->

        <div class="footer-right">
          <ul>
            <li><a href="#">サイトマップ</a></li>
            <li><a href="#">会社情報</a></li>
            <li><a href="#">お問い合わせ</a></li>
          </ul>
        </div>
        <!--/footer-right-->
      </div>
      <!--/footer-box-->
      <p class="copy"><small>&copy;2020 SandwichDay.</small></p>
    </footer>
  </div><!--/wrapper-->
  <script src="js/script.js"></script>
</body>

</html>

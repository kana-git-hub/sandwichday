<?php var_dump( $_POST ); ?>

<?php $total =2000;?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>2php</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="wrapper">
    
    
    <?php
  
    echo '料金：'.$total;
    echo '<br>';
    ?>
    
        
    <?php
  
    echo '数量：';
    echo $_POST['number']
    ?>
    
    
<!--
    <form action="2.php" method="post">
            <div class="price">TOTAL￥:
            
            <?php $total =1000;?>
            
            <?php echo $total ?>
            
            </div>
            <input type="hidden" name="toral">
            
            数量：<input type="number" name="number" class="number">
    </form>
-->
  </div><!--/wrapper-->
</body>

</html>

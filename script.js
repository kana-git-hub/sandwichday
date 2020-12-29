//$(function () {
//  $('#weasle').animate({ left: 400 });
//  $('#weasle').animate({top: 400 });
//  $('#weasle,#robo').animate({left: 400 }).animate({top: 400 });
  //$('.title').animate({left: 400 }).animate({top: 400 });
  //【書き方の名前】メソッドチェーン
  //$('#weasle').animate({left: 400 }).animate({top: 400 });
  //$('#robo').delay(800).animate({left: 400 }).animate({top: 400 });
  //【.delay】ブラウザを開いて1秒たってから動く
  //$('#weasle,#robo').animate({left:400,top:400},10000,'linear').animate({top:0,left:0});
  //.animate一つで、一つのキュー
  //$('#weasle').delay(500).animate({left:400},5000).animate({top:400}).animate({top:0}).animate({left:0});
  //.animate一つで、一つのキュー　→一つのキューが終わったらもう一つのキューが始まる
//  $('img').animate({top:500});
//  $('#weasle')
//        .animate({ left: 100, top: -50 })
//        .animate({ left: 200, top: 0 })
//        .animate({ left: 300, top: -50 })
//        .animate({ left: 400, top: 0 });
//  $('#robo')
//        .animate({ left: 100, top: -50 }, 500, 'linear')
//        .animate({ left: 200, top: 0 },   500, 'linear')
//        .animate({ left: 300, top: -50 }, 500, 'linear')
//        .animate({ left: 400, top: 0 },   500, 'linear');
  //$('#robo').animate({left: 100, top:-50}, 500, 'linear');
//  $('#sheep')
//  .animate({left: 200})
//  .queue(function(){
//    //queueの中にアニメーションに登録してほしい命令をかく。
//    //アニメーションに登録できない命令はqueueの中に書く！
//    $('#sheep')
//    .css('background', 'red')
//    .dequeue();
//    $('#sheep').animate({left: 0 });
//  });
//  $('#sheep')
//    .animate({left: 200})
//    .queue(function(){
//  $('body').css('background', 'red');
//  $('#sheep').dequeue();
//  })
//    .animate({left: 0});
//  queueの中身は主語を変えることができる
//  只しdequeueは管理してる主にかける
  
//  
//  $('#weasle')
//  .animate({left: 850})
//  .queue(function(){
//      $('body').css('background','#eee');
//      $('#weasle').dequeue();
//  })
//  .fadeOut(1000)
//  .delay(2000)
//  
//  $('#robo')
//  .delay(500)
//  .animate({left: 850,top: -200})
//  .queue(function(){
//    $('body').css('background','#ccc');
//    $('#robo').dequeue();
//  })
//  .fadeOut(1000);
//  
//  $('#sheep')
//  .delay(1000)
//  .animate({left: 850,top: -400})
//  .queue(function(){
//    $('body').css('background','#888');
//    $('#sheep').dequeue();
//  })
  
//  .fadeOut(1000);

//  $('#pig')
//  .delay(1500)
//  .animate({left: 850,top: -600})
//  .queue(function(){
//    $('body').css('background','#000');
//    $('#pig').dequeue();
//  })
//  .fadeOut(1000);

  
//  $('.character').fadeOut( 0 ).delay( 3000 ).fadeIn( 3000 )
//  .queue(function(){
//    $('.character')
//      .css('background','pink');
//  });
  //最初は消えていて、3秒後に出てくる
  
  
//  $('#sheep').click(function(){
//    $('#sheep').fadeOut( 2000 ).delay( 1000 ).fadeIn( 2000 );
//  });
  
  
//  $('#sheep').click(function(){
//    $('#robo').animate({left: 500},1000,'linear');
//  });
  
  
//  $('#sheep').click(function(){
//      $('#sheep img').attr('src','https://livedoor.blogimg.jp/drazuli/imgs/8/8/88cb1de5.jpg');
//  });
  
  
//  $('#sheep').click(function(){
//    $('#sheep').append('<p>￥500</p>');
//  });
  //append（アペンド）中身を追加していく
  //.htmlは中身を書き換えてしまう

  
//  $('.character').click(function(){
//    $(this)
//      .animate({left: 200,top: -500}, 1000, 'linear')
//      .delay(1000)
//      .queue(function(){
//    $('.character')
//      .css('background','#ccc')
//      $('.character').dequeue();
//    });
//  });
  
//});



        // JavaScriptの道具 function
    //    bearFlyの名前は好きに付けても良いが全て統一すること
//    function soundFly(){
//      $('#music')
//        .animate({left: '+=100px',top: '-=100px'}, 400)
//        .animate({left: '-=100px',top: '+=100px'}, 400);
//      setTimeout('soundFly()', 100);
//    }
//
//
//  function drumFly(){
//      $('#drum-R,#drum-L')
//        .animate({top: '+=5px',top: '-=5px'}, 100)
//        .animate({top: '-=5px',top: '+=5px'}, 100);
//      setTimeout('drumFly()', 100);
//    }
//
//  function bassFly(){
//      $('#bass img')
//        .animate({left: '+=10px',top: '-=10px'}, 100)
//        .animate({left: '-=10px',top: '+=10px'}, 100);
//      setTimeout('bassFly()', 100);
//    }
//
//  function bassPfly(){
//      $('#bass p')
//        .animate({top: '-=5px'}, 100)
//        .animate({top: '+=5px'}, 100);
//      setTimeout('bassPfly()', 100);
//    }


//  $(function(){
    // setTimeoutはJavaScriptの道具
//    $('#music').fadeOut( 0 );
//    $('#voice').click(function(){
//    $('#music').fadeIn( 0 );
//    setTimeout('soundFly()');
//  });
//
//    $('#drum').click(function(){
//    setTimeout('drumFly()');
//  });
//
//  $('#bass').click(function(){
//    setTimeout('bassFly()');
//    setTimeout('bassPfly()');
//  });
//
//   
//    $('#bass img')
//      .fadeOut(0)
//    $('#bass')
//      .click(function(){
//    $('#bass img')
//      .fadeIn(0)
//      .css('transform','rotate(-45deg)')
//      .css('top','145px')
//      .css('left','45px');
//  });
//    
//    
//    $('#bass p').mouseover(function(){
//      $(this)
//      .animate({top: '+=5px'});
//  });
//  
//    
//    $('#bass p').mouseout(function(){
//      $(this)
//      .animate({top: '-=5px'});
//  });
//    
//
//  
//  $('#woman')
//    .delay(1000)
//    .animate({left: 800},2000)
//    .fadeOut(0);
//  
//  $('#stage')
//    .fadeOut(0);
//  $('#band,#drum,#bass p')
//    .fadeOut(0);
//  
//  
//  $('#back')
//    .delay(1000)
//    .animate({left: -1000},2000)
//    .fadeOut(-1000)
//    .queue(function(){
//    $('#stage')
//      .fadeIn(0)
//      .dequeue();
//  });
//  $('#band,#drum,#bass p')
//    .delay(3500)
//    .fadeIn(1000);

$(function(){
    $('#topping-01 img')
      .fadeOut( 0 );
  
    $('#thum-pan')
      .click(function(){
    $('#pan')
      .fadeIn( 0 );
  });
  
    $('#thum-leaf')
      .click(function(){
    $('#leaf')
      .fadeIn( 0 );
  });
    $('#thum-tomato')
      .click(function(){
    $('#tomato')
      .fadeIn( 0 );
  });
     $('#thum-cucumber')
      .click(function(){
    $('#cucumber')
      .fadeIn( 0 );
  });
     $('#thum-chicken')
      .click(function(){
    $('#chicken')
      .fadeIn( 0 );
  });
    $('#thum-beef')
      .click(function(){
    $('#beef')
      .fadeIn( 0 );
  });
    $('#thum-egg')
      .click(function(){
    $('#egg')
      .fadeIn( 0 );
  });
  $('#thum-avo')
      .click(function(){
    $('#avo')
      .fadeIn( 0 )
      .css('z-index','3');
  });
  
  
  $('.main-topping,.side-topping')
    .fadeOut ( 0 );

  $('.vege-topping')
      .click(function(){
    $('.main-topping')
      .fadeIn( 0 )
  });
  
  $('.main-topping')
      .click(function(){
    $('.side-topping')
      .fadeIn( 0 )
  });
  
  
  
  
  $( 'input[name="vege-topping"]:radio' ).change( function() {

      var radioval = $(this).val();
      if(radioval == 1){
         $('#cucumber,#tomato').fadeOut( 0 );
      }
      if(radioval == 2){
         $('#leaf,#tomato').fadeOut( 0 );
      }
      if(radioval == 3){
         $('#leaf,#cucumber').fadeOut( 0 );
      }
   });
  
  $( 'input[name="main-topping"]:radio' ).change( function() {

      var radioval = $(this).val();
      if(radioval == 4){
         $('#beef').fadeOut( 0 );
      }
      if(radioval == 5){
         $('#chicken').fadeOut( 0 );
      }
   });
  
  $( 'input[name="side-topping"]:radio' ).change( function() {

      var radioval = $(this).val();
      if(radioval == 6){
         $('#avo').fadeOut( 0 );
      }
      if(radioval == 7){
         $('#egg').fadeOut( 0 );
      }
   });
  
  
  
  
    });
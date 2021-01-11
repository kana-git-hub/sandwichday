$(function(){
    $('#topping-01 img')
      .fadeOut( 0 );
  
    $('#thum-pan-brown')
      .click(function(){
    $('#pan-brown')
      .fadeIn( 0 );
      console.log( "price : " + price );
  });
  
    $('#thum-pan-white')
      .click(function(){
    $('#pan-white')
      .fadeIn( 0 );
  });
  
    $('#thum-pan-low')
      .click(function(){
    $('#pan-low')
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
  
      $( 'input[name="pan"]:radio' ).change( function() {

      var radioval = $(this).val();
      if(radioval == 8){
         $('#pan-brown,#pan-low').fadeOut( 0 );
      }
      if(radioval == 9){
         $('#pan-white,#pan-low').fadeOut( 0 );
      }
      if(radioval == 10){
         $('#pan-white,#pan-brown').fadeOut( 0 );
      }
   });
  
    });
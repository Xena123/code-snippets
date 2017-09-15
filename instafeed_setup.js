$(document).ready(function() {
    /* Instagram carousel */
  var feed = new Instafeed({
      'get'        : 'user',
      'userId'     : 1434664018,
      'clientId'   : '3c91522ee22941e2b432c4b4a05e6282',
      'accessToken': '1434664018.3c91522.3168c705b6324667a1c6fbe913ad9a27',
      'limit'      : 5 ,
      'resolution' : 'standard_resolution',
      'template'   : '<div class="grid-item grid-fifth"><a href="{{link}}" target="_blank"><div class="grid-item__inner block insta__block btn hvr--insta" style="background: url({{image}})"><div class="block__content"></div></div></a></div>',

  });



  feed.run();

        /* instagram carousel */

});//ready
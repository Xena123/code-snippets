//Excerpt from Old Mutual Ebook - downing-scripts.js
$(function () {
if (navigator.userAgent.indexOf('Safari') != -1 &&
    navigator.userAgent.indexOf('Chrome') == -1) {
        $("body").addClass("safari");
    }
});

// Worked for 10 but not 11
$(function(){
  if ($.browser.msie && $.browser.version == 10) {
    $('body').addClass('ie10');
  }
	else if ($.browser.msie && $.browser.version == 11) {
    $('body').addClass('ie11');
  }
});

// Worked on 11
(function detectIE() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
        // IE 10 or older => return version number
        var ieV = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
        document.querySelector('body').className += ' IE';
    }

    var trident = ua.indexOf('Trident/');
    if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        var ieV = parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
        document.querySelector('body').className += ' IE';
    }

    var edge = ua.indexOf('Edge/');
    if (edge > 0) {
       // IE 12 (aka Edge) => return version number
       var ieV = parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
        document.querySelector('body').className += ' IE';
    }

    // other browser
    return false;
})();

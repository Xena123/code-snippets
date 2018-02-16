// To use with twitter fetcher plugin
// https://github.com/jasonmayes/Twitter-Post-Fetcher

$(document).ready( function () {

      var config1 = {
        "profile": {"screenName": 'ChartwellsInd'},
        "domId": 'twitter',
        "maxTweets": 4,
        "enableLinks": true,
        "showImages": true,
        "customCallback": handleTweets
      };
    

    
      function handleTweets(tweets) {
        var x = tweets.length;
        var n = 0;
        var element = document.getElementById('twitter');
        var html = '<ul>';
        while(n < x) {
          html += '<li>' + tweets[n] + '</li>';
          n++;
        }

        html += '</ul>';
        element.innerHTML = html;

        myStyles();
        

      }
    

      function myStyles() {

        $('#twitter li').each(function(i) {
          var imgSrc = $(this).find(".media img").attr("src");
          var img = $(this).find('.media img');
          var tweetText = $(this).find('.tweet').text();

          
          if (img.length > 0)  {
            $(this).replaceWith('<li class="grid-item grid-quarter"><div class="grid-item__inner block--partial block--constrained"><a href="https://twitter.com/ChartwellsInd" class="btn--overlay"></a><div class="block__background block--tweet" style="background-image: url('+imgSrc+')"></div><div class="block__content-partial"><a href="https://twitter.com/ChartwellsInd"><p class="tweet">'+tweetText+'</p></a></div></div></li>');
          } else {
            $(this).replaceWith('<li class="grid-item grid-quarter"><div class="grid-item__inner block--partial block--constrained"><a href="https://twitter.com/ChartwellsInd" class="btn--overlay"></a><div class="block__background block--tweet" style="background-image: url('+"/assets/img/content/article.jpg"+')"></div><div class="block__content-partial"><a href="https://twitter.com/ChartwellsInd"><p class="tweet">'+tweetText+'</p></a></div></div></li>');
          }

          


        });

      }
      if ( document.getElementById( 'twitter' ) ) {
        twitterFetcher.fetch(config1);
      }
};
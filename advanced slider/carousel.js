(function($){

  var defaults = {
    waitTime: 400
  }

  function lSAdvancedSlider(element, settings){
    this.options = {};
    this.element = element;

    this.carouselOuter = this.element;

    $.extend(this.options, defaults, settings);

    this.autoSlide = this.options.autoSlide;
    this.carouselInner = $(this.options.carouselInner);
    this.wrapper = $(this.options.wrapper);
    this.leftTransparentElement = $(this.options.leftTransparentElement);
    this.rightTransparentElement = $(this.options.rightTransparentElement);
    this.transparentWidth = this.rightTransparentElement.width();
    this.customHeight = this.options.customHeight;
    this.carouselItem = this.options.carouselItem;
    this.singleImageWidth = this.carouselOuter.width() -
        (this.leftTransparentElement.width() + 
          this.rightTransparentElement.width());
    this.leftLink = $(this.options.leftLink);
    this.rightLink = $(this.options.rightLink);
    this.scrollButtonsContainer = $(this.options.scrollButtonsContainer);
    this.scrollButtonClass = this.options.scrollButtonClass;

    this.init();
  }

  lSAdvancedSlider.prototype.init = function(){
    var parent = this,
      numberOfImages = $(parent.carouselItem).length;
      //Set the width of the img 
      $(parent.carouselItem).width(parent.singleImageWidth);
      //Set the width of the wrapper to be a calculation of the width of the all images
      parent.wrapper.width(numberOfImages * parent.singleImageWidth);
      //Set the height of all the containers to equal the customHeight setting
      parent.carouselInner.height(parent.customHeight).width(parent.singleImageWidth);
      parent.leftTransparentElement.height(parent.customHeight);
      parent.rightTransparentElement.height(parent.customHeight);
      $(parent.carouselItem).height(parent.customHeight);
      //Get the last img and the insert it before the first img
      $(parent.carouselItem).eq($(parent.carouselItem).length - 1).
        insertBefore($(parent.carouselItem).eq(0));

      //Set the wait time to 0 to get the first img in the right place without anyone seeing
      var originalWaitTime = parent.waitTime;
      parent.waitTime = 0;

      //Call slideLeft function to get the first img into the right position
      parent.slideLeft();
      //Set the wait time back to what it was before
      parent.waitTime = originalWaitTime;

      var linkHeight = parent.leftLink.height();
      var leftLinkContainerHeight = parent.carouselInner.height();
      var rightLinkContainerHeight = parent.carouselInner.height();

      //Set the height of the arrows by dividing the height of the container by 2
      parent.leftLink
        .css({"top": ((leftLinkContainerHeight - linkHeight)/2)+"px"})
        .on("click", function(){
          parent.slideRight.call(parent);
        });
      parent.rightLink
        .css({"top": ((rightLinkContainerHeight - linkHeight)/2)+"px"})
        .on("click", function(){
          parent.slideLeft.call(parent);
        });

      $(document).on("keyup", function(e){
        parent.handleDocumentKeyPress(e);
      });

      parent.createSlidingLinks();
      parent.scrollButtonsContainer.find("li").first().addClass("activeLink");

  }

  lSAdvancedSlider.prototype.slideLeft = function(numberOfSlides){

    var parent = this;

    //if the img wrapper has a css property of left which is equal to the width of a single img then append the last img to the first img
    if((parseInt(parent.wrapper.css("left").replace("px", ""))) == -(parent.singleImageWidth)) {
      var first = $(parent.carouselItem).first();
      var last = $(parent.carouselItem).last();

      first.insertAfter(last);

      parent.wrapper
        .animate({"left": "+=" +parent.singleImageWidth+ "px"}, 0);

    }

    //find the active class in the scroll button container and get the next element
    var currentActiveLink = parent.scrollButtonsContainer.find(".activeLink");
    var nextActiveLink = currentActiveLink.next();

    nextActiveLink.addClass("activeLink");
    currentActiveLink.removeClass("activeLink");
    
    //if the next element is empty then get the first element
    if (nextActiveLink.length == 0){
      nextActiveLink = parent.scrollButtonsContainer.children().first();
      nextActiveLink.addClass("activeLink");
    }

    $(document).off("keyup");
    //Animate wrapper to the left
    parent.wrapper.animate({"left": "-=" + parent.singleImageWidth+"px"}, parent.waitTime, function(){

      var originalWaitTime;

      $(document).on("keyup", function(e){
        parent.handleDocumentKeyPress(e);
      });

      originalWaitTime = parent.waitTime;
      parent.waitTime = 100;

      if (numberOfSlides > 1){
        parent.slideLeft(--numberOfSlides);
      }

      parent.waitTime = originalWaitTime;

    });

  }

  lSAdvancedSlider.prototype.slideRight = function(numberOfSlides){

    var parent = this;

    //if the img wrapper has a css property of left == to the width of a single img then append the first img to the last img
    if((parseInt(parent.wrapper.css("left").replace("px", ""))) == -(parent.singleImageWidth)) {
      var first = $(parent.carouselItem).first();
      var last = $(parent.carouselItem).last();

      last.insertBefore(first);

      parent.wrapper
        .animate({"left": "-=" +parent.singleImageWidth+ "px"}, 0);

    }
    //find the active class in the scroll button container and get the next element
    var currentActiveLink = parent.scrollButtonsContainer.find(".activeLink");
    var nextActiveLink = currentActiveLink.prev();

    currentActiveLink.removeClass("activeLink");
    nextActiveLink.addClass("activeLink");

    //if the next element is empty then get the first element
    if (nextActiveLink.length == 0){
      nextActiveLink = parent.scrollButtonsContainer.children().last();
      nextActiveLink.addClass("activeLink");
    }
    $(document).off("keyup");
    //Animate wrapper to the right
    parent.wrapper.animate({"left": "+=" + parent.singleImageWidth+"px"}, parent.waitTime, function(){

      var originalWaitTime;

      $(document).on("keyup", function(e){
        parent.handleDocumentKeyPress(e);
      });

      originalWaitTime = parent.waitTime;
      parent.waitTime = 100;

      if (numberOfSlides > 1){
        parent.slideRight(--numberOfSlides);
      }

      parent.waitTime = originalWaitTime;

    });

  }

  lSAdvancedSlider.prototype.handleDocumentKeyPress = function(e){
    var parent = this;
    //when you press the left key it fires the slideRight function
    if(e.keyCode == 37){
      parent.slideRight();
    }
    //when you press the right key it fires the slideLeft function
    if(e.keyCode == 39){
      parent.slideLeft();
    }
  }

  lSAdvancedSlider.prototype.createSlidingLinks = function(){
    var parent = this;

    $(parent.carouselItem).each(function(index, value){

      var newLink = $('<li>', { class : parent.scrollButtonClass.replace(".", "") }).text(index+1);

      newLink.on("click", function(){
        var index, numberOfSlides;
        //find the element that has the class of .activeLink
        var currentActiveLink = parent.scrollButtonsContainer.find(".activeLink");
        //log the index of that element
        var indexOfActiveLink = parent.scrollButtonsContainer.find("li").index(currentActiveLink);
        //log the index of the clicked link
        var indexOfClickedLink = parent.scrollButtonsContainer.find("li").index($(this));
        if (indexOfActiveLink !== indexOfClickedLink) {
          //if the index of the active link is smaller than the index of the clicked link (ie to the left of the clicked link) then we need to move right
          if(indexOfActiveLink < indexOfClickedLink) {
            
            numberOfSlides = indexOfClickedLink - indexOfActiveLink;

            parent.slideLeft(numberOfSlides);
          //else we move left
          } else {

            numberOfSlides = indexOfActiveLink - indexOfClickedLink;

            parent.slideRight(numberOfSlides);

          }

        }
      });

      parent.scrollButtonsContainer.append(newLink);

    });
  }


  $.fn.advancedCarousel = function(setting){

    var $this = this;

    new lSAdvancedSlider($this, setting);

    return $this;

  }

})(jQuery)
// When you click on the img, find the src and save the path, run the function
$("#isotope a").click(function () {
  var imagePath = $(this).find("img").first().attr("src").replace("_thumb");
  console.log(imagePath);
  UpdateAndSendImage(imagePath);
});


// Take img variable through to step 2 and replace background img with new path
if (document.getElementById('previewCol')) {
  var query = window.location.search.substring(1);
  var querySplit = query.split("=");
  var imgPath = querySplit[1];
  var newPath = "url('" + imgPath + "')";
  $("#cardImage").css("background-image", newPath);
}


// Post the image path using the url through to the next page
function UpdateAndSendImage(imagePath) {
  if (imagePath != ""){
    Comm({
      imagePath: imagePath
    }, "UpdateImage",
        function () {
          window.location.href = "http://ecard.dev.bon.fanaticdev.co.uk/Card/AddContent?imgPath=" + imagePath;
        }
    );
  }
}

function CommBase(oData, method, successCallback, guid) {
    if (oData == null)
        oData = {};
    oData.cardGuid = guid;
    console.log(guid);
    $.ajax({
        type: "POST",
        url: "../ws/CardService.asmx/" + method,
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        data: JSON.stringify(oData),
        success: successCallback,
        error:  function(jqXHR, textStatus, errorThrown){
            alert(errorThrown);
        }
    });
}

function Comm(oData, method, successCallback) {
    CommBase(oData, method, successCallback, $('#guidId').val());
}

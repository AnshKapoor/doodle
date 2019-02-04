var timer;
$(document).ready(function(){
    $(".result").on("click",function(){
     var url = $(this).attr("href");
     var id = $(this).attr("data-linkId");
     if(!id){
         alert("LinkId Not found");
     }
     increaseLinkClicks(id,url);
    });
    var grid = $(".imageResults");
    grid.on("layoutComplete",function(){
        $(".gridItem img").css("visibility","visible");
    });
    grid.masonry({
        itemSelector:".gridItem",
        columnWidth:200,
        gutter:5,
        isInitLayout:false
    });
});
function loadImage(src){
    var image = $("<img>");
    image.on("load",function(){
        $("."+className+"a").append(image);
        clearTimeout(timer);
        timer = setTimeout(function(){
            $(".imageResults").masonry();
        },500);
     
    });
    image.on("error",function(){
     $("."+className).remove();
     $.post("ajax/setBroken.php",{src:src});
    });
    image.attr("src",src);

}
function increaseLinkClicks(linkId,url){
$.post("ajax/updateLinkCount.php",{linkId:linkId}).done(function(result){
    if(result!=""){
        alert(result);
        return;
    }
    window.location.href = url;
});
}
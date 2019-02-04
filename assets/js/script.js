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
    grid.masonry({
        itemSelector:".gridItem",
        columnWidth:200,
        gutter:5,
        isInitLayout:false
    });
});
function increaseLinkClicks(linkId,url){
$.post("ajax/updateLinkCount.php",{linkId:linkId}).done(function(result){
    if(result!=""){
        alert(result);
        return;
    }
    window.location.href = url;
});
}
$(function(){ 
  
  settings = {
          tl: { radius: 16 },
          tr: { radius: 16 },
          bl: { radius: 16 },
          br: { radius: 16 },
          antiAlias: true,
          autoPad: true,
          validTags: ["div"]
      }

  $('.portrait').corner(settings);
  
  settings = {
            tl: { radius: 4 },
            tr: { radius: 4 },
            bl: { radius: 4 },
            br: { radius: 4 },
            antiAlias: true,
            autoPad: true,
            validTags: ["div"]
        }

    $('.temp').corner(settings);
  
});

$(document).ready(function() {
  $("#menu li").mouseover(function() {
    $(this).addClass("hover");
  }).mouseout(function() {
    $(this).removeClass("hover");
  });
});
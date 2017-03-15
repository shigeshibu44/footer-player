jQuery(function(){
jQuery("div.footer-player").click(function(){
  location.href = jQuery("a.link-to-latest-episode").attr("href");
});
});

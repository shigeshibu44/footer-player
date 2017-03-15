jQuery(function(){
jQuery('.powerpress_player,.powerpress_links').prependTo('div.entry-content');

var playing = false;
var audio = jQuery("audio.wp-audio-shortcode");
var playButton = jQuery("div.play-button");
jQuery(audio).one("play",function(){
	//ga('send', 'event', 'episode', 'play', this.currentSrc.match(/[^\/]*\.mp3/)[0], 1);
});
jQuery(audio).bind("play",function(){
	playing = true;
  jQuery("img.play").hide();
  jQuery("img.pause").show();
});
jQuery(audio).bind("pause",function(){
	playing = false;
  jQuery("img.play").show();
  jQuery("img.pause").hide();
});

for(var idx = 0; idx < audio.length; idx++){
	var isFirstPlay = true;
	audio.get(idx).addEventListener("play",function(){
	  if(isFirstPlay){
	    ga('send', 'event', 'episode', 'play', this.currentSrc.match(/[^\/]*\.mp3/)[0], 1);
	    isFirstPlay = false;
	  }
	  playing = true;
	  jQuery("img.play").hide();
	  jQuery("img.pause").show();
	},false);
	audio.get(idx).addEventListener("pause",function(){
		playing = false;
	  jQuery("img.play").show();
	  jQuery("img.pause").hide();
	},false);
}
jQuery("div.footer-player").click(function(){
	if(audio.length < 1){
		return;
	}
	if(playing){
		audio.get(0).pause();
	}else{
		audio.get(0).play();
	}
});
window.onbeforeunload = function(){
	if(playing){
		ga('send', 'event', 'episode', 'stop-by-unloading', audio.currentSrc.match(/[^\/]*\.mp3/)[0], 1);
		return '別のページに移動すると、再生中のエピソードは停止します。よろしいですか？';
	}
};
});

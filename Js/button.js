$(document).ready(function(){
				$(".button").append('<span class="hover"</span>').each(function(){
					var $anime = $('span.hover', this).css('opacity',0);
					
					$(this).hover(function(){
					$anime.stop().fadeTo(800,1);
					},
					function(){
					$anime.stop().fadeTo(800,0);
					});
				});
});
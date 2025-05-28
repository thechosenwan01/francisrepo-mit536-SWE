

jQuery(document).ready(function(){

	"use strict";
	
	edina_tm_animate_text();

	

	
});

function edina_tm_animate_text(){
	
	"use strict";
	
	var animateSpan			= jQuery('.edina_tm_animation_text_word');
	
		animateSpan.typed({
			strings: ["MIT 536 - Final Validation Exam"],
			loop: true,
			startDelay: 1e3,
			backDelay: 55e3
		});
}


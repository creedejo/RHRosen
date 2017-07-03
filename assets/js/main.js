(function($) {
	var $counter = $("#stats .container");
	$(document).ready(function(){
		
		/* TRIGGER STATS COUNtEr */
		var waypoints = $('#stats').waypoint({
		  handler: function() {
		    if(!$counter.hasClass('counting')){
		    	startCounter($counter);
		    }
		  },
		  context: '.page_container',
		  offset: '150%'
		});
	});

	function startCounter($target){
		console.log('count...');
		$target.addClass('counting');

		$target.find('.count').each(function(i){
			$(this).stop();
			var $c = $(this);
			var start = $c.data('start');
			var end = $c.data('end');


			
			$({
        	countNum: start
	      	}).animate({
	          countNum: end
	        },

	        {
	          queue:false,
	          duration: 2500,
	          step: function() {
	          	var num = numberWithCommas(Math.floor(this.countNum));
	            $c.text(num);
	          },
	          complete: function() {
	          	var num = numberWithCommas(Math.floor(this.countNum));
	            $c.text(num);
	          }

	        });
	        
	    });
	    
	}

	function numberWithCommas(x) {
	    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}
}(jQuery));
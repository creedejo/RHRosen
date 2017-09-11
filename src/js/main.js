(function($) {
	var $counter = $("#stats .container");
	$page = $(".page_container");
	$body = $("body");
	$inquiry = $(".inquiry");
	$search = $(".search_container");
	$(document).ready(function(){

		$("body.home a.navlink_home").addClass("active");
		$("body.your-business a.navlink_business").addClass("active");
		$("body.how-we-can-help a.navlink_help").addClass("active");
		$("body.resources a.navlink_resources").addClass("active");
		
		/* TRIGGER STATS COUNTER */
		var waypoints = $('#stats').waypoint({
		  handler: function() {
		    if(!$counter.hasClass('counting')){
		    	startCounter($counter);
		    }
		  },
		  context: '.page_container',
		  offset: '150%'
		});

		/* UPDATE HEADER ON SCROLL */
		var $top = $page.scrollTop();
		var $body = $('body');
		if($top>=20){
			$body.addClass('scrolled');
		}

		$page.scroll(function(){

			$top = $page.scrollTop();
			//$body = $('body');

			if($top>=20 && !$body.hasClass('scrolled')){
				$body.addClass('scrolled');
			}
			else if($top<20 && $body.hasClass('scrolled')){
				$body.removeClass('scrolled');
			}

		});

		$(".nav-toggle").on('touchstart click',function(e){
			e.preventDefault();
			e.stopPropagation();

			$(".hamburger,nav,.page_container").toggleClass("nav-open");
		});

		$inquiry.find(".handle").on('touchstart click',function(e){
			e.preventDefault();
			e.stopPropagation();
			$inquiry.toggleClass("open");
		});

		$(".inquiry-link").on('touchstart click',function(e){
			e.preventDefault();
			e.stopPropagation();
			openInquiry();
		});

		$(".toggle_search").on("touchstart click",function(e){
			e.preventDefault();
			e.stopPropagation();
			$search.toggleClass("open");
		});

		$("a.show_me").on('touchstart click',function(e){
			e.preventDefault();
			e.stopPropagation();
			$(".bar_fg").removeClass("off");
		});

		$(".jumpmenu a").on('touchstart click',function(e){
			e.preventDefault();
			e.stopPropagation();
			var $target = $($(this).attr("href"));

			var currTop = $page.scrollTop();
			var newTop = $target.offset().top-$(".header").eq(0).height();

			console.log("CURRENT: " + currTop);
			console.log("TARGET: " + newTop);

			$page.animate({scrollTop:newTop+currTop},1000);

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

	function openInquiry(){
		if(!$inquiry.hasClass("open")){
			$inquiry.addClass("open");
		}
	}

	function closeInquiry(){
		if($inquiry.hasClass("open")){
			$inquiry.removeClass("open");
		}
	}

}(jQuery));
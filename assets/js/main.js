(function($) {
	var $counter = $("#stats .container");
	var $page = $(".page_container");
	var $content = $(".content_page");
	var $body = $("body");
	var $inquiry = $(".inquiry");
	var $search = $(".search_container");
	var $btop = $(".back_top_top");
	$(document).ready(function(){

		if(window.location.hash) {
		  var section_to_scroll = "section_"+window.location.hash.substr(1);
		  var $section_to_scroll = $("#"+section_to_scroll);
		  //alert($section_to_scroll.position().top);
		  $page.animate({scrollTop:$section_to_scroll.position().top-$(".header").height()},600);
		}

		$(".home__path__steps a.step").on('touchstart click',function(e){
			//e.preventDefault();
			//e.stopPropagation();
			var leftOff = $(this).data("lity-position");
			var classToAdd = "lity-"+leftOff;
			if(classToAdd=="lity-left"){
				$body.removeClass("lity-right");
			}
			if(classToAdd=="lity-right"){
				$body.removeClass("lity-left");
			}

			if(classToAdd=="lity-center"){
				$body.removeClass("lity-left");
				$body.removeClass("lity-right");
			}
			else{
				$body.addClass(classToAdd);
			}
			//return true;
		});
		
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

		$(".inquiry__close").on('touchstart click',function(e){
			closeInquiry();
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

		$(".btn_explore").on('touchstart click',function(e){
			e.preventDefault();
			e.stopPropagation();
			console.log('scroll to next section');
			console.log($('html,body').scrollTop());
			var newTop = $(".carousel").height();
			$('html, body, .page_container').animate({
			    scrollTop: newTop-20
			 }, 750);
		});

		$(".home__path__steps .step a").on('touchstart click',function(e){
			e.preventDefault();
			e.stopPropagation();
		})


		$(".content_page__down a").on('touchstart click',function(e){
			e.preventDefault();
			e.stopPropagation();
			var $section;
			if($(this).data("target")){
				$section=$($(this).data("target"));
			}
			else{
				$section = $(this).closest('section').next('section');
			}
			console.log($section.attr('class'));
			//var ntop = $(".hero").height()+$section.height()+40;
			console.log("SECTION: " + $section.offset().top);
			console.log("PAGE: " + $page.offset().top);
			//var ntop = $(".hero").height() + $section.position().top+60-$page.scrollTop();
			var ntop = $section.offset().top-$content.offset().top-$page.offset().top-$(".header").height();
			console.log("ntop = " + ntop);
			console.log($section.attr('class'));
			$("html,body,.page_container").animate({scrollTop:ntop},600);
		});

		$btop.on('touchstart click',function(e){
			e.preventDefault();
			e.stopPropagation();
			$page.animate({scrollTop:0},1200);
		});

		$page.scroll(function(){
			var st = $page.scrollTop();
			if(st>=200 && !$btop.hasClass("visible")){
				$btop.addClass("visible");
				$btop.fadeIn();
			}

			if(st<200 && $btop.hasClass("visible")){
				$btop.removeClass("visible");
				$btop.fadeOut();
			}
		});

		$(".content_page__down a i").addClass('bounce');

		/*
		$('.content_page__down a i').each(function() {
		  $(this).waypoint(function() {
		    $(this).addClass('bounce');
		  },{context: '.page_container'});
		});
		*/
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
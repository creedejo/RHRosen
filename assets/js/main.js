(function($) {
	var $counter = $("#stats .container");
	var $page = $(".page_container");
	var $content = $(".content_page");
	var $body = $("body");
	var $inquiry = $(".inquiry");
	var $search = $(".search_container");
	var $btop = $(".back_top_top");
	$(document).ready(function(){

		if($("body").hasClass("home")){
			$content = $(".home_content");
		}

		$('.tell_me a').tooltipster({
			trigger: 'click',
			maxWidth: 450,
			side: ['top'],
			functionPosition: function(instance, helper, position){
		        //position.coord.top += 100;
		        //alert(window.innerWidth);

		        var w = window.innerWidth;
		        if(w>=1400){
		        	position.coord.left -= 160;
		        }
		        else if(w>=1050){
		        	position.coord.left -= 100;
		        }
		        else if(w>=550){
		        	position.coord.left -= 60;
		        }
		   
		        return position;
		    },
		    functionBefore: function(instance,helper){
		    	var reason = $(helper.origin).data('reason');
		    	//ga('send', 'event', 'Reasons Clients Turn To Us', 'click', reason);
		    	gtag('event', 'Reasons Clients Turn To Us', {
				  'event_category':'engagement',
				  'event_label': reason
				});
		    	//console.log('EVENT: ' + reason);
		    }
		});

		if(($("body").hasClass("resources") && !window.location.hash) || $("body").hasClass("hwch")){
			var $hero = $(".hero__title").eq(0);
			
			 $page.animate({scrollTop:$hero.offset().top-100},600);
		}

		if(window.location.hash) {
		  var section_to_scroll = "section_"+window.location.hash.substr(1);
		  var $section_to_scroll = $("#"+section_to_scroll);
		  var addMore=0;
		  if(section_to_scroll=='section_about_bob' || section_to_scroll=='section_the_blog' || section_to_scroll=='section_the_book' || section_to_scroll=='section_the_podcast'){
		  	addMore=80;
		  }
		 	if($section_to_scroll.length>0){
		 		var tts = 600;
		 		if(section_to_scroll=='section_about_bob'){
		 			tts=0;
		 		}
			  $page.animate({scrollTop:$section_to_scroll.position().top-$(".header").height()+addMore},tts);
			}

			if(window.location.hash.substr(1)=="respond" || window.location.hash.substr(1).indexOf('comment')>=0){
				$page.animate({scrollTop:$("#respond").position().top-$(".header").height()},600);
			}
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
		  offset: '100%'
		});

		/* TRIGGER STATS COUNTER */
		var waypoints2 = $('#bar_3').waypoint({
		  handler: function() {
		    $(".bar_fg").removeClass("off");
		  },
		  context: '.page_container',
		  offset: '100%'
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

		$(".inquiry-link,.btn_talk").on('touchstart click',function(e){
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
//alert($target);
			if($(this).attr("href")=='#the_book'){
				newTop-=20;
			}

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
			
		
			var ntop = $section.offset().top-$content.offset().top-$page.offset().top-$(".header").height();
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



		$("#blog_filters_mobile").select2();
		$("#blog_filters_mobile").on('change',function(e){
			e.preventDefault();
			e.stopPropagation();
			var val = $(this).val();
			if(val!="all"){
				window.location='/blog/category/'+val;
			}
			else{
				window.location='/blog';
			}
		});

		
		$("#blog_search_form").submit(function(e){
			e.preventDefault();
			e.stopPropagation();
			var val = $("#blog_search").val();
			if(val){
				window.location = '/blog/search/'+val;
			}
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
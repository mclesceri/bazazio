jQuery(document).ready(function($){
	//Scroll on list target
	function activate_scrollbox(target){
		$(target).perfectScrollbar({
	        'wheelSpeed': 1,
	        'suppressScrollX': true,
	        'maxScrollbarLength': 75,
	        'wheelPropagation':false
    	});
	}
	//activate the comment scroll box
	activate_scrollbox(".comment_scroll");
	/*--------------
	 * Navigation. *
	 --------------*/
	 	/*
	 	 * Navigation Toggle Button (Three Bars)
	 	 */
		$('.menu-cont').on('click', function(e) {
			e.preventDefault();
			//add active class to the toggle, so that it does it's little animation.
			$('.menu_toggle').toggleClass('active');
			//add an active class to the off canvas menu, so that it pops out.
			$('.off-canvas').toggleClass('active');
			//and make sure that all sub-menus reset to the top-level menu position. 
			$('.sub-menu').closest('.has-dropdown').removeClass('active_dd');
		});

		/*
		 * Append a few elements.
		 */
			//Create an element within the navigation items for dropdown toggling.
			//Done this way, so that we may support touch-screen dropdowns.
			$('.has-dropdown>a').append('<span class="dd-toggle"></span>');
			//add the little arrow above the sub-menus for going back.
			$('.sub-menu').append('<span class="toggle-this-sub-menu"></span>');

		/*
		 * Sub Menu Activation
		 */ 
			//when the user clicks that arrow, the need to be brought back a level.
			$('.toggle-this-sub-menu').click(function(){
				var parent = $(this).closest('.has-dropdown');
				parent.removeClass('active_dd');
			});
			//When that specified element is clicked, we need to show the submenu, and prevent
			//the initial link from following through. 
			$('.dd-toggle').click(function(e){
				//Bind the click.
				e.preventDefault();
				//target the parent li element that has the class "has-dropdown"
				var parent = $(this).closest('.has-dropdown');
				//If the parent has the class of "active_dd" already?
				//Remove it.
				if(parent.hasClass('active_dd')==true){
					parent.removeClass('active_dd');
				//Else...
				}else{
					//remove the class from the currently active one,
					$(this).closest('.sub-menu').children('.active_dd').removeClass('active_dd');
					//and give it to the new one.
					parent.addClass('active_dd');
				}
			});
			$('.close_off_canvas').click(function(){
				$('.off-canvas').removeClass('active');
				$('.menu_toggle').removeClass('active');
			});
	/*------------------
	 * End Navigation. *
	 ------------------*/

	/*-------------------------
	 * Fixed position on menu *
	 *------------------------*/
	 function screen_width_set_class(){
	 	var screen_width = $("body").width();
		 if(screen_width>840){
		 	$("body").addClass('desktop');
		 	$("body").removeClass('mobile');
		 }else{
		 	$("body").addClass('mobile');
		 	$("body").removeClass('desktop')
		 }
		 return screen_width;
	 }	 
	 function screen_when_set_menu_fixed(screen_width){	 	
	 	if($("body").hasClass('desktop')){
	 		var target = $(".main_banner");
	 		var banner_height = target.height();
	 		var scrolled_amount = $(document).scrollTop();
	 		if(banner_height<scrolled_amount){
	 			target.addClass('fixed');
	 			if(screen_width>1024){
	 				$(".sub_header .side_navigation").addClass('fixed_active');
	 			}	 			
	 		}else{
	 			target.removeClass('fixed');
	 			$(".sub_header .side_navigation").removeClass('fixed_active');
	 		}
	 		if(screen_width<1024){
	 			$(".sub_header .side_navigation").removeClass('fixed_active');
	 		}
	 	}else if($("body").hasClass('mobile')){
	 		
	 	}
	 }
	 var screen_width = screen_width_set_class();
	 screen_when_set_menu_fixed(screen_width);
	 $(window).resize(function(){
	 	var screen_width = screen_width_set_class();
	 	screen_when_set_menu_fixed(screen_width);
	 });
	 $(window).scroll(function(){
	 	var screen_width = screen_width_set_class();
	 	screen_when_set_menu_fixed(screen_width);
	 });
	 
	 $("body").scrollTop()
	 
});
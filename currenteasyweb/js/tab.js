$(document).ready(function() {
$('.verticalTab-nav .navList li span').click(function(){
		var count = $(this).parent().index();
		$(this).parent().addClass('active');
		$(this).parent().siblings().removeClass('active');
		$(this).siblings('.accList').slideDown();
		$(this).parent().siblings().find('.accList').slideUp();		
		$(this).parents('.verticalTab-nav').siblings('.verticalTab-content').children().eq(count).siblings().hide();
		$(this).parents('.verticalTab-nav').siblings('.verticalTab-content').children().eq(count).fadeIn(); 
	});
	// Sub accordion 
	$('ul.navList li i, .acc-heading i').click(function(){
		$(this).siblings('ul').slideToggle();
	});
	
	// Mobile accordion
	$('.acc-heading span').click(function(){
		$(this).parent().addClass('active');
		$(this).parents('.tab-wrap').siblings().find('.acc-heading').removeClass('active');
		
		$(this).parent().siblings('.acc-content').slideToggle();
		$(this).parents('.tab-wrap').siblings().find('.acc-content').slideUp();
		
		$(this).siblings('.accList').slideToggle();
		$(this).parents('.tab-wrap').siblings().find('.accList').slideUp();	
	});
});

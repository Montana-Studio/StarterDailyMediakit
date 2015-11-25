$( document ).ready(function() {
	$('a.animate-scroll').on('click',function(e){
        e.preventDefault();
        var strAncla=$(this).attr('href');
         
        $('body,html').stop(true,true).animate({
            scrollTop: $(strAncla).offset().top
        },1000);
    });

	$('.mobile-menu').click(function(){
		$('.menu-mobile-media').toggleClass( 'show-menu');
		$('#navbar').toggleClass( 'show-menu-inside');
	});

	$('.animate-scroll').click(function(){
		$('.menu-mobile-media').removeClass( 'show-menu');
		$('#navbar').removeClass( 'show-menu-inside');
	});

	 $('.numero-specs').append('<div class="rest-specs"><div>');

});  
 

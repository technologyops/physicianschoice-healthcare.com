jQuery(function($) {
		$(".accordion-group .accordion-toggle").live('click', function(){
	        var $self = $(this).parent().parent();
	        $body = $self.find('.accordion-body');
	        if($self.find('.accordion-heading').hasClass('in_head')){
	          $self.parent().find('.accordion-heading').removeClass('in_head');
	        }else{  
	          $self.parent().find('.accordion-heading').removeClass('in_head');
	          $self.find('.accordion-heading').addClass('in_head');
                 
	        }
	          
	    });
		
		$('#tweet_footer').cycle();
		if($('.clients').length){
		$('.clients').imagesLoaded(function(){
       			$(this).carouFredSel( 
				{
					
					items : { visible:5, width : 187 },
					responsive:true,
					scroll : { items : 1 }

				});
				$(this).parent().css('border-right', '1px solid #eaeaea')
		});
		}

	
    $("audio,video").mediaelementplayer();               


	$(".lightbox-gallery").fancybox();
	$('.lightbox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
	
	$('.tabbable ').each(function(){
		var height = $(this).find('.nav-tabs').height();
		$(this).find('.tab-content').css('height', height);
	});


	
	$(".carousel_blog").each(function(){
        $self = $(this);
       			
       			$self.carouFredSel( 
				{
					
					circular: false,
					infinite: false,
					auto 	: false,
					
					scroll  : {

        				items           : 1
        			},
					pagination	: $self.parent().parent().parent().parent().find('.pagination')

					

					
				});
       
          
		});
    $(".carousel_portfolio").each(function(){
        $self = $(this);
        var cl = 3;
        var nr = $self.find('.portfolio-item').length; 
        if($self.parent().hasClass('three-cols'))
        	cl = 3;
        if($self.parent().hasClass('four-cols'))
        	cl = 4;
        if($self.parent().hasClass('two-cols'))
        	cl = 2;
        if($self.parent().hasClass('one-cols'))
        	cl = 1;
        
       	$self.imagesLoaded(function(){
       			$self.carouFredSel( 
				{
					
					circular: false,
					infinite: false,
					auto 	: false,

					pagination	: $self.parent().parent().parent().find('.pagination')

					

					
				});
		});
       	
          
		});
    $('.testimonials .content li:first-child').addClass('active');   
	$('.testimonials .list li:first-child').addClass('active');
	$('.testimonials .list li').live('click', function(){
		var id = $(this).data('id');
		$(this).parent().find('li').removeClass('active');
		$(this).parent().parent().find('.content').find('li').removeClass('active');
		$(this).parent().parent().find('.content').find('li[data-id="'+id+'"]').addClass('active');
		$(this).addClass('active')
	});
   
	
	
	
	

	
	
	
	if($().mobileMenu) {
		$('#navigation nav').each(function(){
			$(this).mobileMenu();
		});
		
	}



	$('.flexslider').flexslider({
			animationSpeed: 400,
			animation: "fade",
			controlNav: false,
			pauseOnAction: true,
			pauseOnHover: false
		});
	$("#attention button.close_button").click(function(){
		$("#attention").height(4);
		$(this).parent().parent().parent().find('.open_button').css('top', 3);
	});
	$("#attention span.open_button").mouseenter(function(){
		$("#attention").height(60);
		$(this).css('top', 59);
	});
	$(".menu .sub-menu a").live('click', function(){
		var button = $(this);
		
		var title = button.attr('title').split("-");
		if(title[0] == 'skin'){

			document.cookie = 'themeple_skin='+title[1] ; 
			setTimeout(function(){
								    window.location.hash = "#wpwrap";
						 			window.location.reload(true);
								
             }, 1000);

		}else if(title[0] == 'blog'){
			document.cookie = 'themeple_blog='+title[1] ; 
			setTimeout(function(){
								    window.location.hash = "#wpwrap";
						 			window.location.reload(true);
								
             }, 1000);
		}else if(title[0] == 'layout'){
			document.cookie = 'themeple_layout='+title[1] ; 
			setTimeout(function(){
								    window.location.hash = "#wpwrap";
						 			window.location.reload(true);
								
             }, 1000);
		}
	});

	var $container = $('.filterable');
    
    
    if( $('.visual_image img', $container).size() ) {
          $('.visual_image img', $container).one("load", function(){
			    $container.isotope({
			      filter: '*',
			      
			      resizeble: true,
			      animationOptions: {
			         duration: 750,
			         easing: 'linear',
			         queue: false,
			       }
			    });
			});

          setTimeout(function(){
		        $container.isotope({
		          filter: '*',
		          resizeble: true,
		          animationOptions: {
		             duration: 750,
		             easing: 'linear',
		             queue: false,
		           }
		        });
		    }, 100);
   
}
  

 $('nav#portfolio-filter ul li a').click(function(){
    var selector = $(this).attr('data-filter');
    $(this).parent().parent().parent().find('.active').removeClass('active');
    $(this).parent().parent().addClass('active');
    $container.isotope({ 
    filter: selector,
    
	resizeble: true,
    animationOptions: {
       duration: 750,
       easing: 'linear',
       queue: false,
     
     }
    });
    return false;
  });

	$('.img_effect img').hoverZoom({zoom:20, overlay:false});
	
	
});



(function($){

    $.fn.extend({ 

        hoverZoom: function(settings) {
 
            var defaults = {
                overlay: true,
                overlayColor: '#2e9dbd',
                overlayOpacity: 0.7,
                zoom: 25,
                speed: 300
            };
             
            var settings = $.extend(defaults, settings);
         
            return this.each(function() {
            
                var s = settings;

                var image = $(this);
		  var hz = $(image).parent();

                image.load(function() {
                    
                    if(s.overlay === true) {
                        $(this).parent().append('<div class="zoomOverlay" />');
                        $(this).parent().find('.zoomOverlay').css({
                            opacity:0, 
                            display: 'block', 
                            backgroundColor: s.overlayColor
                        }); 
                    }
                
                    var width = $(image).width();
                    var height = $(image).height();
                
                    $(this).fadeIn(1000, function() {
                        $(this).parent().css('background-image', 'none');
                        hz.hover(function() {
                            
                            
                            $('img', this).stop().animate({
                                height: height + s.zoom,
                                marginLeft: -(s.zoom),
                                marginTop: -(s.zoom)
                            }, s.speed);
                            image.css('width', 'auto');
                            if(s.overlay === true) {
                                $(this).parent().find('.zoomOverlay').stop().animate({
                                    opacity: s.overlayOpacity
                                }, s.speed);
                            }
                        }, function() {
                            $('img', this).stop().animate({
                                height: height,
                                marginLeft: 0,
                                marginTop: 0
                            }, s.speed);
                            if(s.overlay === true) {
                                $(this).parent().find('.zoomOverlay').stop().animate({
                                    opacity: 0
                                }, s.speed);
                            }
                        });
                    });
                });    
            });
        }
    });
})(jQuery);

 $(document).ready(function() {

 	//AJAX submit a form
	$('.submitFormBtn').click(function(){
		$(this).addClass('ajax-loading');
		$(this).prop('disabled', true);
		$.ajax({
			context: this,
			type: $(this).attr('formmethod'),
			data: $(this).closest('form').serialize(),
			url: $('base').attr('href')+$(this).attr('formaction'),
		}).done(function(data){
			$(this).closest('form').children('.error').html(data);
			$(this).removeClass('ajax-loading');
			$(this).prop('disabled', false);
			if(data.indexOf("class='green'") >= 0) $(this).closest('form')[0].reset();
		});

		return false;
	});

	//OFF CANVAS
	$('.toggle-off-canvas').click(function(){
		var pageBody = $('body');
		var offCanvas = $('#off-canvas');
		var pageWrapper = $('#wrapper');

		if(pageBody.hasClass('off-canvas-enabled')){
			offCanvas.addClass('animation-leave');
			setTimeout(function(){
				offCanvas.removeClass('animation-enter animation-enter-active').addClass('animation-leave-active');
				pageWrapper.removeClass('animation-enter-active-wrapper').addClass('animation-leave-active-wrapper');

				setTimeout(function(){
					pageBody.removeClass('off-canvas-enabled');
					pageWrapper.removeClass('animation-leave-active-wrapper');
					offCanvas.removeClass('animation-leave animation-leave-active');
				}, 500);

			}, 250);
		}
		else{
			pageBody.addClass('off-canvas-enabled');
			offCanvas.addClass('animation-enter');
			setTimeout(function() {
				offCanvas.addClass('animation-enter-active');
				pageWrapper.addClass('animation-enter-active-wrapper');
			}, 250);
		}
	});

	var swiper = new Swiper('.swiper-container.swiper-container-header', {
	        pagination: '.swiper-pagination.swiper-pag-first',
	        paginationClickable: true,
          	autoplay: 5000,
          	effect: 'fade'
	    });

    
	var slideuri = 2;
	if(screen.width<=768){
		slideuri = 1;
	}
    var swiper2 = new Swiper('.swiper-container.swiper-container-puppies', {
      		pagination: '.swiper-pagination.swiper-pag-puppies',
	        paginationClickable: true,
          	autoplay: 5000,
          	slidesPerView: slideuri,
          	spaceBetween: 30,
    });

  var slideuriMobile = 2;
	if(screen.width<=480){
		slideuriMobile = 1;
	}

    var swiper4 = new Swiper('.swiper-container.swiper-container-puppies-mobile.news1', {
      		pagination: '.swiper-pagination.swiper-pag-puppies-mobile.news1',
	        paginationClickable: true,
          	autoplay: 5000,
          	slidesPerView: slideuriMobile,
          	spaceBetween: 30,
    });
//     var swiper5 = new Swiper('.swiper-container.swiper-container-puppies-mobile.s2', {
//       		pagination: '.swiper-pagination.swiper-pag-puppies-mobile.pag2',
// 	        paginationClickable: true,
//           	autoplay: 5000,
//           	slidesPerView: slideuriMobile,
//           	spaceBetween: 30,
//     });
//     var swiper6 = new Swiper('.swiper-container.swiper-container-puppies-mobile.s3', {
//       		pagination: '.swiper-pagination.swiper-pag-puppies-mobile.pag3',
// 	        paginationClickable: true,
//           	autoplay: 5000,
//           	slidesPerView: slideuriMobile,
//           	spaceBetween: 30,
//     });



    $(window).scroll(function() {
        if($(window).scrollTop() > 0) {
            $(".scroll-up").css("display","block");
        } else {
            $(".scroll-up").css("display","none");
        }
    }); 

    $(".scroll-up").click(function() {
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
    });

    // x.classList.toggle("change");


	// more magic goes here...
    
})
 var width=250;
 if(screen.width<=768){
 	width=230
 }
 function changeMenu(x) {
  // x.classList.toggle("change");
  document.getElementById("mySidenav").style.width = width+"px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

$(".menu-mobile").click(function(){
	if($(".menu-mobile").hasClass("afisat")){
// 		$(".menu-mobile").slideLeft();
		$(".menu-mobile").removeClass("afisat");
	}
	else{
		$(".menu-mobile").addClass("afisat");	
// 		$(".menu-mobile").slideRight();
	}
});

if(screen.width<=768){
$(window).scroll(function(){
	if($(window).scrollTop()>=150){
		$("#header.menu-black").css("opacity", "1");
    }
	else{
		$("#header.menu-black").css("opacity", "0.7");
	}
});
}
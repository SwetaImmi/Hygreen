/*TOPBAR SEARCH EXPAND*/
$('.search-icon-box .search-icon').click(function(){
	$(this).next().slideToggle(200);
	$(".ui-autocomplete-input").focus();
});
/*TOPBAR SEARCH EXPAND END*/
/*TOPBAR USER EXPAND BOX*/
$(".login-lnk-box .login-user").click(function(){
	$(this).next().toggleClass("open").slideToggle(300);
});

function goto(event) {
  var noRedirect = '.login-lnk-box .login-user, .login-expand-box';
  if (!event.target.matches(noRedirect)) {
	  $(".login-expand-box").slideUp(300);
  }
  
$(".login-lnk-box .login-user").click(function(e) { 
e.stopPropagation(); return true; 
});
$(".login-expand-box").click(function(e) { 
e.stopPropagation(); return false; 
});
$(".my-account-btn .btn-typ5").click(function(e) { 
e.stopPropagation(); return true; 
});
$(".signout-lnk a").click(function(e) { 
e.stopPropagation(); return true; 
});

};
/*HIDDEN TO PREVENT THE AUTO CLOSE IN INITIAL LOAD document.body.addEventListener('click', goto);*/
/*TOPBAR USER EXPAND END*/
/*Topbar fix on scroll*/
$(window).scroll(function () {
	
    if ($(window).scrollTop() > 64 ) {
        $("body").addClass("topbar-fix");
    }
    else if ($(window).scrollTop() < 64 ){
        $("body").removeClass("topbar-fix");
    }else {
		$("body").removeClass("topbar-fix");
	}
});
/*Topbar fix on scroll*/
/*NAVIGATION RESPONSIVE*/
$('button.lines-button').click(function(){
	if(jQuery(window).width() < 979){
		$(this).toggleClass("nav-close");
		$(".navigation-box").slideToggle(400);
	}
});


$('.expand-main').click(function(){
	if(jQuery(window).width() < 1199){
		$('.expand-main').removeClass("current");
		var xxx=$(this);
		if(xxx.hasClass('current')){
			xxx.removeClass('current');
		}else{
			xxx.addClass('current');
		}
		$(this).next().toggleClass("expand").slideToggle(300,function(){
			$('.expand-main').each(function(){
				if($(this).hasClass("current")==false && $(this).next().hasClass("expand")==true){
					$(this).next().toggleClass("expand").slideToggle(300);
				}
				else if($(this).hasClass("current")==true && $(this).next().hasClass("expand")==false){
					$(this).removeClass("current");
				}
			});
		});
	}
});

if($(window).width() > 1199){
	$( ".expand-main" ).mouseover(function() {
		$(".topbar-wrapper").addClass("topbar-shadow");
	});
	$('.expand-main').not('.sub-menu-box').mouseleave(function() {
		$(".topbar-wrapper").removeClass("topbar-shadow");
	});
	
	$( ".sub-menu-box" ).mouseover(function() {
		$(".topbar-wrapper").addClass("shadow-switch");
	});
	$('.sub-menu-box').mouseleave(function() {
		$(".topbar-wrapper").removeClass("shadow-switch");
	});
	
}

/*NAVIGATION RESPONSIVE END*/


/*PRODUCTS EXPAND COLLAPSE*/
/*$('.expand-plus-typ').click(function(){
	$('.expand-plus-typ').removeClass("current");
	var xxx=$(this);
    if(xxx.hasClass('current')){
        xxx.removeClass('current');
    }else{
        xxx.addClass('current');
    }
	$(this).parent().find(".sidebar-lnk-expand").toggleClass("expand").slideToggle(300,function(){
		$('.expand-plus-typ').each(function(){
			if($(this).hasClass("current")==false && $(this).parent().find(".sidebar-lnk-expand").hasClass("expand")==true){
				$(this).parent().find(".sidebar-lnk-expand").toggleClass("expand").slideToggle(300);
				$(this).parent().toggleClass("expand-link");
			}
			else if($(this).hasClass("current")==true && $(this).parent().find(".sidebar-lnk-expand").hasClass("expand")==false){
				$(this).removeClass("current");
			}
		});
	});
});
*/
$( document ).ready(function() {	
	 if($(".prod-main-lnk").hasClass('active')==true) {
		  $(".prod-main-lnk.active").parent().addClass('expand-open');
	  }
	  else {
		   $(".prod-main-lnk").parent().removeClass('expand-open');
	  }
});
/*PRODUCTS EXPAND COLLAPSE END*/

/*PRODUCT FILTER EXPAND COLLAPSE*/
$('.filter-icon').click(function(){
	$(this).parent().parent().parent().next().slideToggle(400);
});
/*PRODUCT FILTER EXPAND COLLAPSE END*/

/*CVV EXPAND COLLAPSE*/
$('.cvv-icon-img').click(function(){
	$(this).next().slideToggle(400);
});
/*CVV EXPAND COLLAPSE*/

/*WISHLIST COMMENT EXPAND*/
$('.wishlist-edit-btn').click(function(){
	$(this).parent().parent().parent().parent().find(".wish-list-comment-box").slideDown(200);
});
$('.update-comments-btn').click(function(){
	$(this).parent().slideUp(200);
});
/*WISHLIST COMMENT EXPAND END*/

/*Footer Scroll top*/
 $(window).scroll(function() {
        if ($(this).scrollTop()) {
            $(".scroll-to-top").fadeIn();
        } else {
            $(".scroll-to-top").fadeOut();
        }
    });


    $(".scroll-to-top").click(function() {
        $("html, body").animate({scrollTop: 0}, 1000);
    });
/*Footer Scroll top end*/

/*COLORBOX POPUP*/
if($(window).width() < 979){
			popupwidth ='80%';
			popupwidth1 ='80%';
		}
		else {
			popupwidth = "700px";
			popupwidth1 = "600px";
		}
		
/*Product detail image popup*/
	$('.zoom-icon-typ').colorbox({
		inline:true,
		href:'#popup-image-box',
		width:popupwidth
	})
/*Product detail image popup End*/

/*Account Information edit popup*/
	$('.account-info-edit').colorbox({
		inline:true,
		href:'#account-info-edit-popup',
		width:popupwidth
	})
	$('.account-info-edit.box2').colorbox({
		inline:true,
		href:'#account-info-edit-popup1',
		width:popupwidth
	})
	//login to calculate 
	
/*Account Information edit popup end*/

/*Contact Information edit popup*/
	$('.contact-info-edit').colorbox({
		inline:true,
		href:'#contact-info-edit-popup',
		width:popupwidth
	})
/*Contact Information edit popup End*/

/*Change Password popup*/
	$('.change-passwd-lnk-typ').colorbox({
		inline:true,
		href:'#change-password-popup',
		width:popupwidth
	})
/*Change Password popup End*/

/*Billing address edit popup*/
	$('.billing-address-edit').colorbox({
		inline:true,
		href:'#billing-address-popup',
		width:popupwidth
	})
/*Billing address edit popup End*/

/*Shipping address edit popup*/
	$('.shipping-address-edit').colorbox({
		inline:true,
		href:'#shipping-address-popup',
		width:popupwidth
	})
/*Shipping address edit popup*/

/*Billing address edit popup in Address book page*/
	$('.billing-add-edit-lnk').colorbox({
		inline:true,
		href:'.billing-add-edit-popup',
		width:popupwidth
	})
	$('.shipping-add-edit-lnk').colorbox({
		inline:true,
		href:'.shipping-add-edit-popup',
		width:popupwidth
	})
/*Billing address edit popup in Address book page end*/

/*Add New Address pop up in Address book page */
	$('.add-new-address-popup-btn').colorbox({
		inline:true,
		href:'#add-new-addree-popup',
		width:popupwidth
	})
/*Add New Address pop up in Address book page End */

/*Send us Message Popup */
	$('.send-us-message').colorbox({
		inline:true,
		href:'#send-us-message-popup',
		width:popupwidth
	})
/*Send us Message Popup end */

/*view my orders Popup */
	$('.my-orders').colorbox({
		inline:true,
		href:$(this).attr("href"),
	//	href:$(this).attr("href"),
	//	iframe:true,
	//	innerWidth:popupwidth,
	//	innerHeight:344,
		width:popupwidth
	})
/*Send us credit application popup end */

//quick-view
	$('.quick-now-btn').colorbox({
		inline:true,
		href:$(this).attr("href"),
	//	iframe:true,
	//	innerWidth:popupwidth,
	//	innerHeight:344,
		width:popupwidth
	})
/*Send us credit application popup Popup 
	$('.send-us-credit').colorbox({
		inline:true,
		href:'#send-us-credit-popup',
		width:popupwidth
	})
Send us credit application popup end */
/*New Product Request Popup */
	$('.new-product-request').colorbox({
		inline:true,
		href:'#new-product-request-popup',
		width:popupwidth
	})
/*New Product Request Popup end */

/*TH height find jquery*/

/*$(document).ready(function() {
var maxHeight = 0;

$("th .txt-cover").each(function(){
   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
});

$('th .txt-cover').css("line-height", ($('th .txt-cover').height(maxHeight)));
});*/

/*TH height find jquery*/


$(window).resize(function(){
	if($(window).width() > 767){
		$.colorbox.resize({width:'74%'});
	}else if ($(window).width() < 767){
	   $.colorbox.resize({width:'80%'});
	}
	
});


//WOW JS
new WOW({
	boxClass:     'wow',      // default
	animateClass: 'animated', // default
	offset:       0,          // default
	mobile:       true,       // default
	live:         true        // default
 }).init();
//WOW JS END
function maintainedSameHeight(htmlCollection, mediaQueries) {
  var maxHeight = 0;

  [].forEach.call(htmlCollection, function(htmlElement) {
    htmlElement.style.height = "";
    maxHeight = (htmlElement.offsetHeight > maxHeight) ? htmlElement.offsetHeight : maxHeight;
  });

  if (!mediaQueries || window.matchMedia(mediaQueries).matches) {
    [].forEach.call(htmlCollection, function(htmlElement) {
      htmlElement.style.height = maxHeight + "px";
    });
  }
};
/* Create a function to apply on the `.col-md-1` already in the DOM the previous created function. */
function setHeightOnImages() {
  maintainedSameHeight(
        // Target all column you want inspect to find the most height.
        document.querySelectorAll(".col-md-2"),
        // Because under 992px, you will be have one column, there are no necessity to maintain same height in this case.
        "(min-width: 992px)"
  );
}

/* Apply at first time. */
window.addEventListener("load", setHeightOnImages);
/* And update in case of Responsive. */
window.addEventListener("resize", setHeightOnImages);

/*$('.tree1 li').click(function(){
	$('.tree1 li').removeClass("current");
	//$(this).addClass("current");
	var xxx=$(this);
    if(xxx.hasClass('current')){
        xxx.removeClass('current');
    }else{
        xxx.addClass('current');
    }
	$(this).parent().next().toggleClass("expand").slideToggle(300,function(){
		$('.tree1 li').each(function(){
			if($(this).hasClass("current")==false && $(this).parent().next().hasClass("expand")==true){
				$(this).parent().next().toggleClass("expand").slideToggle(300);
			}
			else if($(this).hasClass("current")==true && $(this).parent().next().hasClass("expand")==false){
				$(this).removeClass("current");
			}
		});
	});
});
*/
var $window=$(window),$root=$("html, body");function colorScheme(){$(".dark-logo");$(".color-scheme").click(function(){$("body").toggleClass("nill-dark"),$(".section").toggleClass("bg-dark"),$(".color-scheme").removeClass("d-none").addClass("d-inline-block"),$(this).removeClass("d-inline-block").addClass("d-none")})}function menuToggler(){"use strict";$(".overlay-menu-toggler").click(function(){$(".overlay-menu").addClass("show")}),$(".overlay-menu").click(function(){$(this).removeClass("show")})}function sliderOwlCarousel(){$(".hero .owl-carousel").owlCarousel({loop:!0,items:1,nav:!1,dots:!1,autoplay:!0,touchDrag:!0,smartSpeed:5e3,animateOut:"fadeOut"}),$("#hero-slider").on("translate.owl.carousel",function(){setTimeout(function(){$(".hero-slide").removeClass("zoom")},1e3)}),$("#hero-slider").on("translated.owl.carousel",function(){$(".owl-item.active .hero-slide").addClass("zoom")})}function typedJS(){"use strict";var s={strings:$(".element").attr("data-elements").split(","),typeSpeed:100,backDelay:3e3,backSpeed:50,loop:!0};new Typed(".element",s)}function popUpVideo(){"use strict";$(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({disableOn:700,type:"iframe",mainClass:"mfp-fade",removalDelay:160,preloader:!1,fixedContentPos:!1})}function skills(){"use strict";$(".skillbar").each(function(){$(this).find(".skillbar-bar").animate({width:$(this).attr("data-percent")},6e3)})}function countup(){"use strict";$(".timer").countTo(),$(".count-number").removeClass("timer")}function portfolioPopup(){"use strict";0<".portfolio-items".length&&$(".portfolio-items").each(function(){$(this).magnificPopup({delegate:".js-zoom-gallery",type:"image",gallery:{enabled:!0}})})}function portfolioIsotop(){"use strict";var e=$(".portfolio-items"),o=$("#portfolio-filter");e.isotope({filter:"*",layoutMode:"masonry",animationOptions:{duration:750,easing:"linear"}}),o.find("a").on("click",function(){var s=$(this).attr("data-filter");return o.find("a").removeClass("active"),$(this).addClass("active"),e.isotope({filter:s,animationOptions:{animationDuration:750,easing:"linear",queue:!1}}),!1})}function validateEmail(s){"use strict";return/\S+@\S+\.\S+/.test(s)}function sendEmail(){"use strict";var s=$("#name").val(),e=$("#email").val(),o=$("#subject").val(),t=$("#comments").val();s?e?validateEmail(e)?o?t?$.ajax({type:"POST",data:$("#contactForm").serialize(),url:"sendEmail.php",beforeSend:function(){$("#submit-btn").html('<span class="spinner-border spinner-border-sm"></span> Loading..')},success:function(s){$("#submit-btn").html("Submit");var e=JSON.parse(s);"Congratulation"==e.status?($("#message").toast("show").addClass("bg-success").removeClass("bg-danger bg-warning"),$(".toast-body").html("<strong>"+e.status+" : </strong> "+e.message)):"Error"==e.status?($("#message").toast("show").addClass("bg-danger").removeClass("bg-success bg-warning"),$(".toast-body").html("<strong>"+e.status+" : </strong> "+e.message)):"Warning"==e.status&&($("#message").toast("show").addClass("bg-warning").removeClass("bg-success bg-danger"),$(".toast-body").html("<strong>"+e.status+" : </strong> "+e.message))},error:function(s){$("#submit-btn").html("Submit"),$("#message").toast("show").addClass("bg-danger").removeClass("bg-success bg-warning"),$(".toast-body").html("<strong> Error : </strong> Something went wrong, Please try again.")}}):($("#message").toast("show").addClass("bg-danger").removeClass("bg-success"),$(".toast-body").html("Comments is  required")):($("#message").toast("show").addClass("bg-danger").removeClass("bg-success"),$(".toast-body").html("Subject is  required")):($("#message").toast("show").addClass("bg-danger").removeClass("bg-success"),$(".toast-body").html("Email is not valid")):($("#message").toast("show").addClass("bg-danger").removeClass("bg-success"),$(".toast-body").html("Email is  required")):($("#message").toast("show").addClass("bg-danger").removeClass("bg-success"),$(".toast-body").html("Name is  required"))}$(document).ready(function(){"use strict";colorScheme(),menuToggler(),sliderOwlCarousel(),typedJS(),popUpVideo(),skills(),countup(),portfolioIsotop(),portfolioPopup(),validateEmail(),sendEmail(),$(".owl-item.active .hero-slide").addClass("zoom")}),$window.on("load",function(){$("#overlayer").delay(500).fadeOut("slow"),$(".loader").delay(1e3).fadeOut("slow")});
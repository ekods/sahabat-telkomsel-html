/*------------------------------------------------------------------
Template Name:  N. agency - Responisve Landing Page for Agency
Version:        1.0
Last update:    12/17/2017
Author:         tabthemes
URL:            http://www.tabthemes.com/
-------------------------------------------------------------------*/

$(function () {
	'use strict';

	// Toggle Nav on Click
	$('.offpage-nav-login').click(function() {
			$('.offpage-login').addClass('open');
			// Calling a function in case you want to expand upon this.
			$('body').addClass('show-nav');
			$('.offpage-register').removeClass('open');
	});

	// Toggle Nav on Click
	$('.offpage-nav-register').click(function() {
			$('.offpage-register').addClass('open');
			// Calling a function in case you want to expand upon this.
			$('body').addClass('show-nav');
			$('.offpage-login').removeClass('open');
	});



	$('.toggle-close').on('click', function(){
		$('body').removeClass('show-nav');
		$('#offpage').removeClass('open');
	});


	function readURL(input) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function(e) {
	            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
	            $('#imagePreview').hide();
	            $('#imagePreview').fadeIn(650);
	        }
	        reader.readAsDataURL(input.files[0]);
	    }
	}

	$("#imageUpload").change(function() {
	    readURL(this);
	});


	$('#datepicker').datepicker({
		  changeMonth: true,
	    changeYear: true,
			yearRange: '1995:2010',
			beforeShow:function(textbox, instance){
		    $('#ui-datepicker-div').css({
		        position: 'absolute',
		        top:-20,
		        left:5
		    });
		    $('.date-picker').append($('#ui-datepicker-div'));
		    $('#ui-datepicker-div').hide();
		}
	});


	document.querySelectorAll(".drop-zone__input").forEach((inputElement) => {
	  const dropZoneElement = inputElement.closest(".drop-zone");

	  dropZoneElement.addEventListener("click", (e) => {
	    inputElement.click();
	  });

	  inputElement.addEventListener("change", (e) => {
	    if (inputElement.files.length) {
	      updateThumbnail(dropZoneElement, inputElement.files[0]);
	    }
	  });

	  dropZoneElement.addEventListener("dragover", (e) => {
	    e.preventDefault();
	    dropZoneElement.classList.add("drop-zone--over");
	  });

	  ["dragleave", "dragend"].forEach((type) => {
	    dropZoneElement.addEventListener(type, (e) => {
	      dropZoneElement.classList.remove("drop-zone--over");
	    });
	  });

	  dropZoneElement.addEventListener("drop", (e) => {
	    e.preventDefault();

	    if (e.dataTransfer.files.length) {
	      inputElement.files = e.dataTransfer.files;
	      updateThumbnail(dropZoneElement, e.dataTransfer.files[0]);
	    }

	    dropZoneElement.classList.remove("drop-zone--over");

			document.getElementByClassName('drop-zone"').classList.add('someclassname')

	  });
	});

	/**
	 * Updates the thumbnail on a drop zone element.
	 *
	 * @param {HTMLElement} dropZoneElement
	 * @param {File} file
	 */
	function updateThumbnail(dropZoneElement, file) {
	  let thumbnailElement = dropZoneElement.querySelector(".drop-zone__thumb");

	  // First time - remove the prompt
	  if (dropZoneElement.querySelector(".drop-zone__prompt")) {
	    dropZoneElement.querySelector(".drop-zone__prompt h5").textContent = "";
	  }

	  // First time - there is no thumbnail element, so lets create it
	  if (!thumbnailElement) {
	    thumbnailElement = document.createElement("div");
	    thumbnailElement.classList.add("drop-zone__thumb");
	    dropZoneElement.appendChild(thumbnailElement);

	  }

	  thumbnailElement.dataset.label = file.name;
		dropZoneElement.querySelector(".drop-zone__prompt h5").textContent = file.name;

		dropZoneElement.classList.add("drop-zone--over");


	  // Show thumbnail for image files
	  if (file.type.startsWith("image/")) {
	    const reader = new FileReader();

	    reader.readAsDataURL(file);
	    reader.onload = () => {
	      thumbnailElement.style.backgroundImage = `url('${reader.result}')`;
	    };
	  } else {
	    thumbnailElement.style.backgroundImage = null;
	  }
	}

	function checkboxDropdown(el) {
	  var $el = $(el)

	  function updateStatus(label, result) {
	    if(!result.length) {
	      label.html('Select Options');
	    }
	  };

	  $el.each(function(i, element) {
	    var $list = $(this).find('.dropdown-list'),
	      $label = $(this).find('.dropdown-label'),
	      $checkAll = $(this).find('.check-all'),
	      $inputs = $(this).find('.check'),
	      defaultChecked = $(this).find('input[type=checkbox]:checked'),
	      result = [];

	    updateStatus($label, result);
	    if(defaultChecked.length) {
	      defaultChecked.each(function () {
	        result.push($(this).next().text());
	        $label.html(result.join(", "));
	      });
	    }

	    $label.on('click', ()=> {
	      $(this).toggleClass('open');
	    });

	    $checkAll.on('change', function() {
	      var checked = $(this).is(':checked');
	      var checkedText = $(this).next().text();
	      result = [];
	      if(checked) {
	        result.push(checkedText);
	        $label.html(result);
	        $inputs.prop('checked', false);
	      }else{
	        $label.html(result);
	      }
	        updateStatus($label, result);
	    });

	    $inputs.on('change', function() {
	      var checked = $(this).is(':checked');
	      var checkedText = $(this).next().text();
	      if($checkAll.is(':checked')) {
	        result = [];
	      }
	      if(checked) {
	        result.push(checkedText);
	        $label.html(result.join(", "));
	        $checkAll.prop('checked', false);
	      }else{
	        let index = result.indexOf(checkedText);
	        if (index >= 0) {
	          result.splice(index, 1);
	        }
	        $label.html(result.join(", "));
	      }
	      updateStatus($label, result);
	    });

	    $(document).on('click touchstart', e => {
	      if(!$(e.target).closest($(this)).length) {
	        $(this).removeClass('open');
	      }
	    });
	  });
	};

	checkboxDropdown('.dropdown');




	function showList(e) {
	  var $gridCont = $('.grid-container');
	  e.preventDefault();
	  $gridCont.hasClass('list-view') ? $gridCont.removeClass('list-view') : $gridCont.addClass('list-view');
	}
	function gridList(e) {
	  var $gridCont = $('.grid-container')
	  e.preventDefault();
	  $gridCont.removeClass('list-view');
	}

	$(document).on('click', '.btn-grid', gridList);
	$(document).on('click', '.btn-list', showList);



/*--------------------------------------------------
    Stellar Parallax Animation
---------------------------------------------------*/

  $(window).stellar({
    responsive: true,
    horizontalOffset: 0,
    horizontalScrolling: false
  });


/*--------------------------------------------------
    WOW Effects Animation
---------------------------------------------------*/

  var wow = new WOW({
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       100,          // distance to the element when triggering the animation (default is 0)
    mobile:       false        // trigger animations on mobile devices (true is default)
  });
  wow.init();


/*--------------------------------------------------
    Preloader Page
---------------------------------------------------*/

  $(window).load(function () {
    $("#preloader").delay(600).fadeOut("slow");
  });


/*--------------------------------------------------
    Menu Features
---------------------------------------------------*/

  // Sticky Navigation

  $(window).scroll(function(){
    if ($(window).scrollTop() > 1 && $('.navbar-toggle').is(":hidden")){
      $('.navigation-overlay, .navigation, .nav-solid').addClass("sticky");
      $('.logo-wrap').addClass("shrink");
    } else {
      $('.navigation-overlay, .navigation, .nav-solid').removeClass("sticky");
      $('.logo-wrap').removeClass("shrink");
    }
  });

  // Closes the Responsive Menu on Menu Item Click
  $('.navbar-collapse ul li a').on('click',function() {
    $(".navbar-collapse").collapse('hide');
  });

  // Mobile Menu Resize
  $(".navbar .navbar-collapse").css("max-height", $(window).height() - $(".navbar-header").height() );


/*--------------------------------------------------
    Page Scroll Features
---------------------------------------------------*/

  smoothScroll.init({
    speed: 2000,
    updateURL: false,
    offset: 70
  });


/*--------------------------------------------------
    Owl Carousel Slider
---------------------------------------------------*/

  $("#owl-slider").owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots: true,
    items:1,
		autoplay:true,
		smartSpeed: 1500,
    autoplayHoverPause:false,
		transitionStyle: "fade",
		animateIn: 'fadeIn',
animateOut: 'fadeOut',
  });

/*--------------------------------------------------
    Owl Carousel Testimonials
---------------------------------------------------*/

  $("#owl-testimonials").owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots: true,
    items:1,
		autoplay:true,
		smartSpeed: 1500,
    autoplayHoverPause:false
  });


/*--------------------------------------------------
    Owl Carousel Blog
---------------------------------------------------*/

  $("#owl-blog").owlCarousel({
    loop:true,
    margin:20,
    nav:true,
    dots: false,
    navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
    responsive:{
        0:{
            items:1
        },
        480:{
            items:2
        },
        768:{
            items:2
        },
        992:{
            items:3
        }
    }

  });

/*--------------------------------------------------
    Owl Carousel Clients
---------------------------------------------------*/

  $("#owl-clients").owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    responsive:{
        0:{
            items:2
        },
        480:{
            items:3
        },
        768:{
            items:4
        },
        992:{
            items:4
        },
        1170:{
            items:5
        }
    }
  });


/*--------------------------------------------------
    Stat Counter
---------------------------------------------------*/
  $(".stat-item-number").appear(function() {
    var count = $(this);
    count.countTo({
        from: 0,
        to: count.html(),
        speed: 3000,
        refreshInterval: 60,
    });
  });



/*--------------------------------------------------
    Magnific Popup
---------------------------------------------------*/
  $(".lightbox-image").magnificPopup({
      type: 'image',
      gallery: {
          enabled: true
      },
      mainClass: "mfp-fade"

  });

  $(".individual-gallery").magnificPopup({
      type: 'image',
      gallery: {
          enabled: true
      },
      mainClass: "mfp-fade"

  });

  $('.lightbox-video').magnificPopup({
      disableOn: 700,
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: false
  });


  /*--------------------------------------------------
    Portfolio Isotope
---------------------------------------------------*/

  if ($.fn.isotope && $.fn.imagesLoaded && ($('.portfolio').length > 0)) {

      $('.portfolio-isotope').imagesLoaded(function() {

          $('.iso-button').on("click", function() {
              $('.iso-button').removeClass('iso-active');
              $(this).addClass('iso-active');

              var selector = $(this).attr('data-filter');
              container.isotope({
                  filter: selector
              });

              return false;
          });

          $(window).resize(function() {
              container.isotope({});

          });

          var container = $('.portfolio-isotope');

          container.isotope({
              itemSelector: '.pf-item',
              transitionDuration: '0.6s',
              layoutMode: 'fitRows'

          });

      });
  }


/*--------------------------------------------------
    Youtube Video Background
---------------------------------------------------*/

  $(function() {
      $(".video-player").YTPlayer();
  });


/*--------------------------------------------------
    CountTo Facts
---------------------------------------------------*/

  $('.countup').appear(function() {
    var count_element =  $(this);
        count_element.countTo({
          from: 0,
          to: parseInt( count_element.text() , 10 ) ,
          speed: 3000
        });
  });


/* ---------------------------------------------
 Height 100%
 --------------------------------------------- */

  $(function () {
      $(".js-height-full").height($(window).height());
      $(".js-height-parent").each(function(){
          $(this).height($(this).parent().first().height());
      });
  });


/*--------------------------------------------------
  Back to Top
---------------------------------------------------*/

  if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function() {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function() {
        backToTop();
    });
    $('#back-to-top').on('click', function(e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
  }


	    function isOlderEdgeOrIE() {
	      return (
	        window.navigator.userAgent.indexOf("MSIE ") > -1 ||
	        !!navigator.userAgent.match(/Trident.*rv\:11\./) ||
	        window.navigator.userAgent.indexOf("Edge") > -1
	      );
	    }

	    function valueTotalRatio(value, min, max) {
	      return ((value - min) / (max - min)).toFixed(2);
	    }

	    function getLinearGradientCSS(ratio, leftColor, rightColor) {
	      return [
	        '-webkit-gradient(',
	        'linear, ',
	        'left top, ',
	        'right top, ',
	        'color-stop(' + ratio + ', ' + leftColor + '), ',
	        'color-stop(' + ratio + ', ' + rightColor + ')',
	        ')'
	      ].join('');
	    }

	    function updateRangeEl(rangeEl) {
	      var ratio = valueTotalRatio(rangeEl.value, rangeEl.min, rangeEl.max);
	      rangeEl.style.backgroundImage = getLinearGradientCSS(ratio, '#FDA22B', '#DBDBDB');
	    }

	    function initRangeEl1() {
	      var rangeEl1 = document.querySelector('#range1');

	       updateRangeEl(rangeEl1);
	       rangeEl1.addEventListener("input", function(e) {
	         updateRangeEl1(e.target);
	         textEl.value = e.target.value;
	       });
	    }

	    function initRangeEl2() {
	      var rangeEl2 = document.querySelector('#range2');

	       updateRangeEl(rangeEl2);
	       rangeEl2.addEventListener("input", function(e) {
	         updateRangeEl2(e.target);
	         textEl.value = e.target.value;
	       });
	    }

	    function initRangeEl3() {
	      var rangeEl3 = document.querySelector('#range3');

	       updateRangeEl(rangeEl3);
	       rangeEl3.addEventListener("input", function(e) {
	         updateRangeEl3(e.target);
	         textEl.value = e.target.value;
	       });
	    }

	    function initRangeEl4() {
	      var rangeEl3 = document.querySelector('#range4');

	       updateRangeEl(rangeEl4);
	       rangeEl4.addEventListener("input", function(e) {
	         updateRangeEl4(e.target);
	         textEl.value = e.target.value;
	       });
	    }

	    initRangeEl1();
	    initRangeEl2();
	    initRangeEl3();
	    initRangeEl4();



});

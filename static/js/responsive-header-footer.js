/* Used on Responsive/Non-Responsive New Header/Footer (push to /static/js only) */

//Initially store the width of the page.
var pageType = '', pageWidth = getPageProperties(), resizeFn = [];

$(document).ready(function () {
  resizeGlobal();

	//Prevent anchor tag from firing when href is set to #
  $('.main-nav-section').find('ul.tier2').on('click', 'a[href=#]', function (e) {
    if ($('html').width() >= 768) {
      e.preventDefault();
    }
  });

	//only shown in mobile
  $('#mobile-search-button').on('click', function (e) {
		e.preventDefault();
		e.stopPropagation();
		$('#masthead-search').toggleClass('open');
		$('.utility').find('> li').removeClass('open');
  });

	//Prevent anchor tag from firing when href is set to # on mobile
  $('.footer-top-section').on('click', 'a[href=#]', function (e) {
    if ($('html').width() < 768) {
      e.preventDefault();
    }
  });

  $('body')
		/*.on('click', '.site-canvas', function() {
			if($('html').hasClass('openNav')) {
				$('.navbar-toggle').trigger('click');
			}
		})*/
		.on('click', '.subLinks > a, .subLinks > span', function (e) {
			//Add functionality for when user uses touch on navigation/footer.

			if($(this).parents('#footer').length && pageWidth >= 768) {
				return false;
			}

			e.preventDefault();
			e.stopPropagation();

			var elem = $(this).parent();

			//Remove all "open" class that is a sibling to the currently touched element.
			elem.siblings()
				.find('.open').removeClass('open').end()
				.removeClass('open');

			if (elem.hasClass('open')) {
				//Remove all "open" class inside of the currently touched element.
				elem.find('.open').removeClass('open').end().removeClass('open');
			}
			else {
				elem.addClass('open');

				if (pageType == 0) { //Mobile
					//Animate background color to notify user that they have touched that element.
					//Require: jQuery Color v2.1.2 plugin
					var originalBG = $(this).css('background-color');

					elem.css({backgroundColor: '#007db8'});

					$('html, body').animate({scrollTop: $(this).offset().top}, function () {
						elem.animate({backgroundColor: originalBG}, 500, function () {
							elem.css('backgroundColor', '');
						});
					});
				}
			}
		})
		.on('click', '.dropdown', function (e) {
			//Prevent dropdown from hiding when clicking on a non-link area.
			if($(e.target).parents('.dropdown-menu').length) {
				e.stopPropagation();
			}
			else {
				//Dropdown class is being used in the utility toolbar.
				//Close all dropdown that is a sibling to the clicked element.

				$(this).siblings().removeClass('open');
				$('#masthead-search').removeClass('open');
				//$(this).toggleClass('open');
			}
    })
    .on('click', function () {
			//Close country popup when user clicks any where on the page.
      if(pageWidth > 767) {
        $('#country-popup').css('display', '');
      }
    })
    .on('click', '.navbar-toggle', function (e) {
			e.stopPropagation();

    	//Hamburger - Mobile
			//Open & Close slide out navigation.
      if ($('html').width() < 768) {
        e.preventDefault();
        $('html').toggleClass('openNav');
        $('.utility').find('> li').removeClass('open');
        $('#masthead-search').removeClass('open');
      }
    });

  // Search
	if($('#search-form').length) {
		$('#search-form').on('submit', function(e) {
			e.preventDefault();
			document.location.href = "/search/results/?q=" + encodeURIComponent(Encoder.htmlEncode($('#searchterm').val()));
			return false;
		});

		if(!$.fn.autocomplete) {
			$.getScript('/Static/Scripts/jquery.autocomplete.min.js', function() {
				initAdobeSearch();
			});
		}
		else {
			initAdobeSearch();
		}
	}

  /* Country Dropdown */

  $('#current-country').on('click', function (e) {
    if(pageWidth > 767) {
      e.stopPropagation();
      e.preventDefault();
      $('#country-popup').toggle();
    }
  });

	//Issue with iPad Chrome where links couldn't be clicked.
	//Reason was for SiteCatalyst injecting onclick attribute to all anchor tag.
	$('footer').on('click', 'a', function(e) {
		e.preventDefault();
		e.stopImmediatePropagation();

		location.href = $(this).attr('href');
	});
});

$(window).load(function() {
	//This is only used on the new header/footer not responsive.
  $('.bootstrap').each(function() {
    //copy modernizr classes from html tag to be copied over to where .bootstrap class is defined.
    $(this).get(0).className = $.trim($(this).get(0).className) + ' ' + $.trim($('html').get(0).className);
  });

	/*$('footer').find('a').each(function() {
		$(this).removeAttr('onclick');
	});*/

	if($('html').hasClass('touch')) {
		$.getScript('/static/library/jQueryMobile/jquery.mobile.custom.min.js');
	}

	if(pageWidth < 992) {
		$.getScript('/static/library/jQuery/jquery.color-2.1.2.min.js');
	}
});

addResize('resizeGlobal');

$(window).resize(function() {
	//Prevent resizing from firing when modifying dom structure.

	var prevPageType = pageType;

	pageWidth = getPageProperties();

	//Execute only when page type has changed.
	if(prevPageType != pageType) {
		$.each(resizeFn, function (i, obj) {
			if(typeof obj.fn == 'function') {
				if(obj.type === undefined || obj.type == pageType) {
					obj.fn.call();
				}
			}
			else if (typeof window[obj.fn] == 'function') {
				if(obj.type === undefined || obj.type == pageType) {
					window[obj.fn].call();
				}
			}
		});
	}
});

function getPageProperties() {
	//Workaround for Google Chrome. The vertical scrollbar is not included in determining the width of the device.
	$('body').css('overflow', 'hidden');
	var w = $('html').width();

	$('body').css('overflow', '');

	//Define pageType
	if(w >= 1200) {
		pageType = 3;
	}
	else if(w >= 992) {
		pageType = 2;
	}
	else if(w >= 768) {
		pageType = 1;
	}
	else {
		pageType = 0;
	}

	return w;
}

function addResize(fn, type) {
  resizeFn.push({fn: fn, type: type});
}

function resizeGlobal() {
	var w = (pageWidth >= 768) ? '300':'auto';

  //Increase width of UL if its child doesn't have sublinks
  $('.main-nav-section').find('ul:gt(0)').each(function() {
    if(!$(this).find('> li.subLinks').length) {
      $(this).css('width', w);
    }
  });

  $('.open').removeClass('open');
  $('#country-popup').css('display', '');
}

//This is used to make a not responsive page responsive. This will be removed when all pages converts to be responsive.
function makeResponsive() {
  $('.not-responsive').removeClass('not-responsive').addClass('is-responsive');
  $('#wrapper').attr('id', '').addClass('site-wrapper').wrapInner('<div class="site-canvas">');
}

function initAdobeSearch() {
	var config = {
		account : "sp10050c33",
		searchDomain : "http://sp10050c33.guided.ss-omtrdc.net",
		inputElement : "#searchterm",
		inputFormElement : "#search-form",
		delay : 300,
		minLength : 2,
		maxResults : 10,
		browserAutocomplete : false,
		queryCaseSensitive : false,
		startsWith : false,
		searchOnSelect : true,
		submitOnSelect: true,
		highlightWords: false,
		highlightWordsBegin: false
	};

	if($.fn.AdobeAutocomplete) {
		$('#searchterm').AdobeAutocomplete(config);
	}
	else {
		$.getScript('//content.atomz.com/content/pb00003799/publish/build/search/jquery/autocomplete/1.4/jquery.adobe.autocomplete.min.js', function() {
			$('#searchterm').AdobeAutocomplete(config);
		});
	}
}


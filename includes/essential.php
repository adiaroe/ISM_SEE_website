<meta http-equiv="Content-Type" content="text/html; charset=utf-8">



<meta name="viewport" content="width=device-width,initial-scale=1">


<meta name="robots" content="noindex">


<meta name="description" content="Official alumni website of Indian School of Mines, Dhanbad">
<meta property="og:description" content="Official alumni website of Indian School of Mines, Dhanbad">
<meta property="og:image" content="media/images/ism_logo.png" />


<meta name="keywords" content="Alumni, Students, Faculty, College, Indian School of Mines, ISM" />


<title>Indian School of Mines Alumni Website</title>
<meta property="og:title" content="Indian School of Mines Alumni Website" />







<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="static/js/gmaps.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<link href='http://fonts.googleapis.com/css?family=Convergence|Bitter|Droid+Sans|Ubuntu+Mono' rel='stylesheet' type='text/css'/>
<LINK rel="stylesheet" type="text/css" href="static/css/alumsite.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="static/css/bootstrap.css"></LINK>

<script>
    $(document).ready(function(){
      var map = new google.maps.Map(
        document.getElementById('map'), 
        {
          zoom: 18,
          center: new google.maps.LatLng(23.8143681, 86.4412045)
        }
      );
    });
  </script>


<LINK rel="stylesheet" type="text/css" href="static/css/foundation-v=1452231657.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="static/css/normalize-v=1452231657.css"></LINK>
<LINK rel="stylesheet" type="text/css" href="static/css/index-v=1452684915.css"></LINK>





<LINK rel="stylesheet" type="text/css" href="static/css/themes/fourth/base-v=1452231657.css"></LINK>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"></link>




<LINK rel="stylesheet" type="text/css" href="static/css/alumsite-v=1452684915.css"></LINK>




<link rel="shortcut icon" href="media/images/ism_logo.png" />


<!-- <link rel="stylesheet" type="text/css" href="static/css/demo_sidebar.css"> -->

<style>
  .reveal-modal-bg {
    background: rgba(37,55,79,0.95);
  }
</style>




<style type="text/css">
#event_attendees_page #attendees_header p{
width:100%;
text-align:center;
margin:2rem 0rem 4rem;
}

#event_attendees_page #attendees_header div.button{
width:20%;
}

#thank_you_page{
background : #F5F5F5 !important;
}

#data_download_btn {
margin-right:30% !important;
}
</style>



<script type="text/javascript" src="static/js/jquery-latest.min.js"></script>


<script type="text/javascript">
/*!
 * jQuery Cookie Plugin v1.4.0
 * https://github.com/carhartl/jquery-cookie
 *
 * Copyright 2013 Klaus Hartl
 * Released under the MIT license
 */
(function (factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as anonymous module.
    define(['jquery'], factory);
  } else {
    // Browser globals.
    factory(jQuery);
  }
}(function ($) {

  var pluses = /\+/g;

  function encode(s) {
    return config.raw ? s : encodeURIComponent(s);
  }

  function decode(s) {
    return config.raw ? s : decodeURIComponent(s);
  }

  function stringifyCookieValue(value) {
    return encode(config.json ? JSON.stringify(value) : String(value));
  }

  function parseCookieValue(s) {
    if (s.indexOf('"') === 0) {
      // This is a quoted cookie as according to RFC2068, unescape...
      s = s.slice(1, -1).replace(/\\"/g, '"').replace(/\\\\/g, '\\');
    }

    try {
      // Replace server-side written pluses with spaces.
      // If we can't decode the cookie, ignore it, it's unusable.
      // If we can't parse the cookie, ignore it, it's unusable.
      s = decodeURIComponent(s.replace(pluses, ' '));
      return config.json ? JSON.parse(s) : s;
    } catch(e) {}
  }

  function read(s, converter) {
    var value = config.raw ? s : parseCookieValue(s);
    return $.isFunction(converter) ? converter(value) : value;
  }

  var config = $.cookie = function (key, value, options) {

    // Write

    if (value !== undefined && !$.isFunction(value)) {
      options = $.extend({}, config.defaults, options);

      if (typeof options.expires === 'number') {
        var days = options.expires, t = options.expires = new Date();
        t.setTime(+t + days * 864e+5);
      }

      return (document.cookie = [
        encode(key), '=', stringifyCookieValue(value),
        options.expires ? '; expires=' + options.expires.toUTCString() : '', // use expires attribute, max-age is not supported by IE
        options.path    ? '; path=' + options.path : '',
        options.domain  ? '; domain=' + options.domain : '',
        options.secure  ? '; secure' : ''
      ].join(''));
    }

    // Read

    var result = key ? undefined : {};

    // To prevent the for loop in the first place assign an empty array
    // in case there are no cookies at all. Also prevents odd result when
    // calling $.cookie().
    var cookies = document.cookie ? document.cookie.split('; ') : [];

    for (var i = 0, l = cookies.length; i < l; i++) {
      var parts = cookies[i].split('=');
      var name = decode(parts.shift());
      var cookie = parts.join('=');

      if (key && key === name) {
        // If second argument (value) is a function it's a converter...
        result = read(cookie, value);
        break;
      }

      // Prevent storing a cookie that we couldn't decode.
      if (!key && (cookie = read(cookie)) !== undefined) {
        result[name] = cookie;
      }
    }

    return result;
  };

  config.defaults = {};

  $.removeCookie = function (key, options) {
    if ($.cookie(key) === undefined) {
      return false;
    }

    // Must not alter options, thus extending a fresh object...
    $.cookie(key, '', $.extend({}, options, { expires: -1 }));
    return !$.cookie(key);
  };

}));
</script>



<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="static/css/hopscotch.css"></link>
<script type="text/javascript" src="static/js/hopscotch.min.js"></script>







<script type="text/javascript">
function openLink(anchor) {
  if(anchor.attr('target')) window.open(anchor.attr('href'), '_blank');
  else window.location = anchor.attr('href');
  return false;
}

function initializeMenuClickForMobile() {
  $('#menu li.menu_item:not(.secondary)').off('click').on('click', function() {
    var submenu = $(this).children('.submenu');
    if(submenu.length)
    {
      $(this).toggleClass('expanded').children('.submenu').toggleClass('visible');
    }
    else
    {
      openLink($(this).find('a'));
    }
    return false;
  });
}
function initializeMenuHoverForDesktop() {
  var submenuTimer;
    $('#menu li.menu_item:not(.secondary)').hover(function() {
      var submenu = $(this).children('.submenu');
      submenuTimer = setTimeout(function() {
        submenu.addClass('visible');
      }, 200);
    }, function(){
        clearTimeout(submenuTimer);
        $(this).children('.submenu').removeClass('visible');
    });
}

$(function() {
  if(window.Foundation.utils.is_large_up())
  {
    initializeMenuHoverForDesktop();    
  }
  else
  {
    initializeMenuClickForMobile();
  }
  $('#menu .top-bar').css('max-height', $(window).height());

  $('#menu .submenu a').click(function() {
    return openLink($(this));
  });

  $('#menu .menu-icon').click(function() {
    if($('#menu .top-bar').hasClass('expanded'))
    {
      $('body').removeClass('noscroll');
    }
    else
    {
      $('body').addClass('noscroll');
    }
  });

});
</script>
<!--
<script src="static/js/demo_sidebar.js"></script> -->
<script type="text/javascript">
function getQueryParamsFromString(query)
{
	var tokens = query.split('&');
	var params = {};
	for(var i=0; i<tokens.length; i++)
	{
		var keyval = tokens[i].split('=');
		params[keyval[0]] = keyval[1];
	}
	return params;
}

function constructQueryStringFromParams(params)
{
	var s = '';
	for(var key in params)
	{
		if(key && params[key]) s += key + '=' + params[key] + '&';
	}
	return s.substr(0, s.length - 1); //Remove trailing &
}

$.fn.serializeObject = function()
{
    var o = {};
    var a = this.serializeArray();
    $.each(a, function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
    });
    return o;
};

function smoothScroll(position, callback)
{
  $('html, body').animate({
        scrollTop: position
    }, 300, 'swing', function() {
      if(callback)
      {
        callback();
      }
    });
}

function doListsIntersect(array1, array2)
{
  var intersection = array1.filter(function(n) {
    return array2.indexOf(n) != -1
  });
  return intersection.length > 0;
}

function validateEmailId(email) { 
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

</script>



<script src="static/js/slick.min.js"></script>
<script type="text/javascript">
$(function() {
  $('#home_search_box input').keyup(function(e) {
    if(e.which==13)
    {
      window.location = '/search?q=' + $(this).val();
    }
  });

  $('.btn').click(function() {
    if($(this).data('url')) window.location.href = $(this).data('url');
  });

  if($('#home_hero_slider').length)
  {
    $('#home_hero_slider').slick({
      autoplay: true,
      autoplaySpeed: 4000,
      draggable: false,
      dots: false,
      arrows: true,
      cssEase: 'ease',
      touchThreshold: 20,
    });
  }

  
  if(window.Foundation.utils.is_large_up()) var num_notable_alumni = 2;
  else var num_notable_alumni = 1;
  $('#notable_alumni_slider').slick({
    slidesToShow: num_notable_alumni,
    slidesToScroll: num_notable_alumni,
    autoplay: true,
    dots: false,
    arrows: true,
    touchThreshold: 20,
    prevArrow: '<a class="slick-nav slick-prev" href="#"><i class="fa fa-angle-left"></i></a>',
    nextArrow: '<a class="slick-nav slick-next" href="#"><i class="fa fa-angle-right"></i></a>',
  });
  $('#notable_alumni_slider a.slick-prev').click(function() {
    $('#notable_alumni_slider').slick('slickPrev');
    return false;
  });
  $('#notable_alumni_slider a.slick-next').click(function() {
    $('#notable_alumni_slider').slick('slickNext');
    return false;
  });
  

  if(!window.Foundation.utils.is_large_up())
  {
    
    $('#home_gallery_slider').slick({
      autoplay: false,
      dots: false,
      arrows: false,
      cssEase: 'ease',
      touchThreshold: 20,
    });
    $('#home_gallery_slider').on('setPosition', function(e, slick) {
      var width = $('#home_gallery_slider .home_gallery_slide').width();
      $('#home_gallery_slider .home_gallery_slide').width(width - 5);
    });
    
  }

  
    
});
</script>
<script src="static/js/foundation/foundation.js"></script>
<script src="static/js/foundation/foundation.topbar.js"></script>
<script src="static/js/foundation/foundation.reveal.js"></script>
<script type="text/javascript" src="js/jscript.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- Other JS plugins can be included here -->



<script>
  $(document).foundation();
</script>

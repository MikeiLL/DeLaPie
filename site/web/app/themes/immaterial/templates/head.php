<?php

use Roots\Sage\Assets;

?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
  <style type="text/css">
    .no-svg .svg {
      display: none;
    }

    .fallback {
      display: none;
    }

    .no-svg .fallback {
      display: block;
    }

* {
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
}

.front-page__cover {
  min-width:100%;
  padding: 1rem;
  }

.front-page__card-holder {
  padding: 1rem;
}

.mdl-card__media > img {
  max-width: 100%;
}

 #bio_image .hero {
    height: 632px;
    margin: 0 auto;
    position: relative;
    transition: all 0.5s ease 0s;
    width: 100%;
    background-position: -130px center;
    }

#bio_image .textholder {
    height: 100%;
    margin-left: 24%;
    max-width: 200px;
    width: 100%;
    position: relative;
    margin: 0 auto;
}

.biography {
  margin: 1.8rem 1rem;
}

.biography p {
  font-size: 1.2rem;
}

#bio_image .hero .picture_text {
    color: #fffaf5;
    font-family: "Helvetica Neue", Helvetica, sans serif;
    font-size: 20px;
    letter-spacing: 6px;
    line-height: 25px;
    text-transform: uppercase;
    position: absolute;
    font-weight: 600;
    left: -58px;
    line-height: 42px;
    right: 0;
    top: 70px;
    width: 180px;
}

    /* h2 was
  color: hsla(253, 6%, 74%, 1); */

@media (min-width: 480px) {

#bio_image .textholder {
    max-width: 1000px;
}

#bio_image .hero {
    background-position: -130px center;
}

  #bio_image .hero .picture_text {
    color: #fffaf5;
    font-size: 3.4rem;
    letter-spacing: 6px;
    line-height: 4rem;
    text-transform: uppercase;
    top: 180px;
    width: 290px;
    position: absolute;
    left: 400px;
  }

  .biography {
  margin: 2rem 2rem;
}

.biography p {
  font-size: 1.6rem;
  line-height: 2rem;
}

}

@media (min-width: 600px) {

#bio_image .textholder {
    max-width: 1000px;
  }

  #bio_image .hero {
    background-position: -110px center;
  }

}


@media (min-width: 840px) {

  #bio_image .textholder {
    height: 100%;
    margin: 0 auto;
    max-width: 1500px;
    position: relative;
  }

  #bio_image .hero {
    background-position: 0 center;
  }

  #bio_image .hero .picture_text {
    left: inherit;
    right: 164px;
    top: 150px;
    width: 290px;
    left: 600px;
  }

}

@media (min-width: 960px) {

  #bio_image .hero .picture_text {
    left: 700px;
  }

}

@media (min-width: 1280px) {
  #bio_image .hero {
    background-position: 0 -6rem;
  }
}

.active, .closed {
  width: 90%;
  list-style: none;
  font-size: 1.2rem;
  padding: 1rem;
  border-bottom: 1px solid rgba(0, 0, 0, 0.3);
  cursor: pointer;
}

.active {
  background-color:rgba(0, 0, 0, 0.1);
  -webkit-transition: .5s all ease-out;
  transition: .5s all ease-out;
  }

.response-definition {
  max-width: 80%;
  }

  </style>
</head>

<script type="text/javascript">

// SVG feature detection
;(function (window, document, undefined) {

	'use strict';

	// SVG feature detection
	var supports = !!document.createElementNS && !!document.createElementNS('http://www.w3.org/2000/svg', 'svg').createSVGRect;
	if ( !supports ) return;

	// Add `.svg` class to <html> element
	document.documentElement.className += (document.documentElement.className ? ' ' : '') + 'svg';

})(window, document);

//https://github.com/iamdustan/smoothscroll
document.addEventListener('DOMContentLoaded', function(e) { setTimeout(function() {

// Make header disappear when scrolling down and return when scroll up.
  var main_header = document.getElementsByClassName('mdl-layout__header')[0];
      main_container = document.getElementsByClassName('mdl-layout__content')[0];
      header_rows = document.getElementsByClassName("mdl-layout__header-row");
      fade_class = "mdl-layout__header-row fade_out";
      opaque_class = "mdl-layout__header mdl-color--grey-800 mdl-color-text--yellow-500 mdl-layout__header--waterfall";
      transparent_class = "mdl-layout__header mdl-layout__header--transparent";
      display_class = "mdl-layout__header-row";
      lastVal = 0;

  }, 2000) // /setTimeOut
}, false); // /addEventListener

function modifyMainHeader(visibility_class, opacity_class, hide) {
  for (var i = 1; i < header_rows.length; i++) {
    header_rows[i].className = visibility_class;
  }
  main_header.className = opacity_class;
  if (hide === true) {
    main_header.setAttribute("style", "min-height:16px;transition-duration: 0.8s;transition-property: min-height, box-shadow;");
  } else {
    main_header.removeAttribute("style");
  }
}

</script>


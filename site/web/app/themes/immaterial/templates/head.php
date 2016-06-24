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

.nav-icon {
  display: inline-block;
  width: 100px;
  height: 100px;
  fill: #f0eeeb;
  margin: .5em;
}

.mdl-layout__drawer-button > i {
  display: none;
}

.mdl-layout__header-row .mdl-navigation a {
  display: none;
}

.mdl-mega-footer__drop-down-section img {
  max-width: 90%;
  margin: .8rem;
}

.evaluation::before {
    font-family: 'Material Icons';
    content: "&#xE8D3;";
    content: "supervisor_account";
    -webkit-font-feature-settings: 'liga';
    padding-right: 1em;
}

#articles .mdl-cell--12-col, #articles .mdl-cell--8-col-tablet {
  width: calc(100% - 4rem);
  margin: 1rem 2rem;
}

.mdl-mega-footer {
  margin: 0;
}


.wrap {
  width: 100%;
  text-align: center;
}

    /* h2 was
  color: hsla(253, 6%, 74%, 1); */

@media (min-width: 480px) {



}

@media (min-width: 600px) {


.mdl-layout__header-row .mdl-navigation a {
  display: block;
}



}


@media (min-width: 840px) {



}

@media (min-width: 960px) {

}

@media (min-width: 1280px) {

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


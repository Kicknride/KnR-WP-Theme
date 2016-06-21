<?php
   header('content-type: text/css');
   ob_start('ob_gzhandler');
   header('Cache-Control: max-age=31536000, must-revalidate');
   $theme_color = $_GET['theme_color'];
?>

/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------
# Normalize
# Typography
# Elements
# Forms
# Navigation
  ## Links
  ## Menus
# Accessibility
# Alignments
# Clearings
# Widgets
# Content
    ## Posts and pages
  ## Asides
  ## Comments
# Infinite scroll
# Media
  ## Captions
  ## Galleries
  ## Testimonial
# Woocommerce
--------------------------------------------------------------*/

/*--------------------------------------------------------------
# Normalize
--------------------------------------------------------------*/
html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust:     100%;
}
body, button, input, select, textarea {
  color: #404040;
  font-family: open sans;
  font-size: 14px;
  line-height: 1.5;
}

h1, h2, h3, h4, h5, h6 {clear: both;}
p {margin-bottom: 1.5em;}
dfn, cite, em, i {font-style: italic;}
blockquote {margin: 0 1.5em;}
address {margin: 0 0 1.5em;}

pre {
  background: #eee;
  font-family: "Courier 10 Pitch", Courier, monospace;
  font-size: 15px;
  font-size: 0.9375rem;
  line-height: 1.6;
  margin-bottom: 1.6em;
  max-width: 100%;
  overflow: auto;
  padding: 1.6em;
}

code, kbd, tt, var {
  font-family: Monaco, Consolas, "Andale Mono", "DejaVu Sans Mono", monospace;
  font-size: 15px;
  font-size: 0.9375rem;
}

abbr, acronym {
  border-bottom: 1px dotted #666;
  cursor: help;
}

mark, ins {
  background: #fff9c0;
  text-decoration: none;
}

big {font-size: 125%;}
body {font-family: 'Open Sans', sans-serif !important; margin: 0;}
body.admin-bar .logo-menu{ margin-top: 32px;}
a, a:link, a:focus, a:link, a:visited, a:active {
  outline: 0; color: #<?php echo $theme_color; ?>; font-weight: normal;}

a, button, .btn { transition: all 0.4s ease-in-out; }
code{color: #<?php echo $theme_color; ?>;}

.btn-theme {background: #<?php echo $theme_color; ?>; color: #fff; }
.btn-theme:hover {color: #fff; opacity: 0.8; }
.pull-left {margin-right: 7px; text-transform: uppercase;font-size:11px;}
.pull-right {margin-left: 7px; text-transform:uppercase;font-size:11px;}
.theme-color {color: #<?php echo $theme_color; ?>; }
.theme-bg {background: #<?php echo $theme_color; ?>; }
.overlay {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background: rgba(0, 0, 0, 0.2); }
.no-padding {padding: 0 !important; }
.text-left {text-align: left !important; }
.form-control:focus {border-color: #<?php echo $theme_color; ?>; }


/*----------Section Title----------*/
.section-title {
  text-align: center;
  text-transform: uppercase;
  font-size: 28px; }
.section-title .underline {
  width: 50px;
  height: 2px;
  background: #<?php echo $theme_color; ?>;
  margin: 0 auto; }


/*----------Animation on dropdown-----------*/
.dropdown-menu {
  transform: scale(0.5);
  opacity: 0;
  transition: all 0.4s ease-in-out; }
li.open:hover .dropdown-menu {
  transform: scale(1);
  opacity: 1; }

article,
aside,
details,
figcaption,
figure,
footer,
header,
main,
menu,
nav,
section,
summary {
  display: block;
}

audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}

audio:not([controls]) {
  display: none;
  height: 0;
}

[hidden],
template {
  display: none;
}

abbr[title] {
  border-bottom: 1px dotted;
}

b,
strong {
  font-weight: bold;
}

dfn {
  font-style: italic;
}

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

mark {
  background: #<?php echo $theme_color; ?>;
  color: #000;
}

small {
  font-size: 80%;
}

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sup {
  top: -0.5em;
}

sub {
  bottom: -0.25em;
}

img {
  border: 0;
}

svg:not(:root) {
  overflow: hidden;
}

figure {
  margin: 1em 40px;
}

hr {
  box-sizing: content-box;
  height: 0;
}

pre {
  overflow: auto;
}

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}

button {
  overflow: visible;
}

button,
select {
  text-transform: none;
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}

button[disabled],
html input[disabled] {
  cursor: default;
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

input {
  line-height: normal;
}

input[type="checkbox"],
input[type="radio"] {
  box-sizing: border-box;
  padding: 0;
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

input[type="search"] {
  -webkit-appearance: textfield;
  box-sizing: content-box;
}

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

fieldset {
  border: 1px solid #999;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}

legend {
  border: 0;
  padding: 0;
}

textarea {
  overflow: auto;
}

optgroup {
  font-weight: bold;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

td,
th {
  padding: 0;
}

/*--------------------------------------------------------------
# Typography
--------------------------------------------------------------*/


/*--------------------------------------------------------------
# Elements
--------------------------------------------------------------*/
html {
  box-sizing: border-box;
}

*,
*:before,
*:after { /* Inherit box-sizing to make it easier to change the property for components that leverage other behavior; see http://css-tricks.com/inheriting-box-sizing-probably-slightly-better-best-practice/ */
  box-sizing: inherit;
}

body {
  background: #fff; /* Fallback for when there is no custom background color defined. */
}

blockquote:before,
blockquote:after,
q:before,
q:after {
  content: "";
}

blockquote,
q {
  quotes: "" "";
}

hr {
  background-color: #ccc;
  border: 0;
  height: 1px;
  margin-bottom: 1.5em;
}

ul,
ol {
  margin: 0 0 1.5em 3em;
}

ul {
  list-style: disc;
}

ol {
  list-style: decimal;
}

li > ul,
li > ol {
  margin-bottom: 0;
  margin-left: 1.5em;
}

dt {
  font-weight: bold;
}

dd {
  margin: 0 1.5em 1.5em;
}

img {
  height: auto; /* Make sure images are scaled correctly. */
  max-width: 100%; /* Adhere to container width. */
}

table {
  margin: 0 0 1.5em;
  width: 100%;
}

.elements .single {
  margin-top: 40px;
  display: block;
  overflow: auto; }
  .elements .single .title {
    font-size: 20px;
    text-transform: uppercase;
    border-bottom: 1px solid #f0f0f0;
    padding-bottom: 4px;
    margin: 0; }
  .elements .single .underline {
    width: 50px;
    height: 2px;
    margin-top: -1px;
    background: #<?php echo $theme_color; ?>;
    margin-bottom: 10px; }

@media (min-width: 1367px) {
  .container {
    width: 1366px !important; } }
@media (max-width: 1365px) {
  .container {
    width: 100% !important; } }
section {
  max-width: 1920px;
  margin: 0 auto; }



/*--------------------------------------------------------------
# Forms
--------------------------------------------------------------*/


/*--------------------------------------------------------------
# Navigation
--------------------------------------------------------------*/
/*----------------Smart Menu-------------*/
/*
 You probably do not need to edit this at all.

 Add some SmartMenus required styles not covered in Bootstrap 3's default CSS.
 These are theme independent and should work with any Bootstrap 3 theme mod.
*/
/* sub menus arrows on desktop */
.navbar-nav:not(.sm-collapsible) ul .caret {
  position: absolute;
  right: 0;
  margin-top: 6px;
  margin-right: 15px;
  border-top: 4px solid transparent;
  border-bottom: 4px solid transparent;
  border-left: 4px dashed; }

.navbar-nav:not(.sm-collapsible) ul a.has-submenu {
  padding-right: 30px; }

/* make sub menu arrows look like +/- buttons in collapsible mode */
.navbar-nav.sm-collapsible .caret, .navbar-nav.sm-collapsible ul .caret {
  position: absolute;
  right: 0;
  margin: -3px 15px 0 0;
  padding: 0;
  width: 32px;
  height: 26px;
  line-height: 24px;
  text-align: center;
  border-width: 1px;
  border-style: solid; }

.navbar-nav.sm-collapsible .caret:before {
  content: '+';
  font-family: monospace;
  font-weight: bold; }

.navbar-nav.sm-collapsible .open > a > .caret:before {
  content: '-'; }

.navbar-nav.sm-collapsible a.has-submenu {
  padding-right: 50px; }

/* revert to Bootstrap's default carets in collapsible mode when the "data-sm-skip-collapsible-behavior" attribute is set to the ul.navbar-nav */
.navbar-nav.sm-collapsible[data-sm-skip-collapsible-behavior] .caret, .navbar-nav.sm-collapsible[data-sm-skip-collapsible-behavior] ul .caret {
  position: static;
  margin: 0 0 0 2px;
  padding: 0;
  width: 0;
  height: 0;
  border-top: 4px dashed;
  border-right: 4px solid transparent;
  border-bottom: 0;
  border-left: 4px solid transparent; }

.navbar-nav.sm-collapsible[data-sm-skip-collapsible-behavior] .caret:before {
  content: '' !important; }

.navbar-nav.sm-collapsible[data-sm-skip-collapsible-behavior] a.has-submenu {
  padding-right: 15px; }

/* scrolling arrows for tall menus */
.navbar-nav span.scroll-up, .navbar-nav span.scroll-down {
  position: absolute;
  display: none;
  visibility: hidden;
  height: 20px;
  overflow: hidden;
  text-align: center; }

.navbar-nav span.scroll-up-arrow, .navbar-nav span.scroll-down-arrow {
  position: absolute;
  top: -2px;
  left: 50%;
  margin-left: -8px;
  width: 0;
  height: 0;
  overflow: hidden;
  border-top: 7px dashed transparent;
  border-right: 7px dashed transparent;
  border-bottom: 7px solid;
  border-left: 7px dashed transparent; }

.navbar-nav span.scroll-down-arrow {
  top: 6px;
  border-top: 7px solid;
  border-right: 7px dashed transparent;
  border-bottom: 7px dashed transparent;
  border-left: 7px dashed transparent; }

/* add more indentation for 2+ level sub in collapsible mode - Bootstrap normally supports just 1 level sub menus */
.navbar-nav.sm-collapsible ul .dropdown-menu > li > a,
.navbar-nav.sm-collapsible ul .dropdown-menu .dropdown-header {
  padding-left: 35px; }

.navbar-nav.sm-collapsible ul ul .dropdown-menu > li > a,
.navbar-nav.sm-collapsible ul ul .dropdown-menu .dropdown-header {
  padding-left: 45px; }

.navbar-nav.sm-collapsible ul ul ul .dropdown-menu > li > a,
.navbar-nav.sm-collapsible ul ul ul .dropdown-menu .dropdown-header {
  padding-left: 55px; }

.navbar-nav.sm-collapsible ul ul ul ul .dropdown-menu > li > a,
.navbar-nav.sm-collapsible ul ul ul ul .dropdown-menu .dropdown-header {
  padding-left: 65px; }

.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #555;
  background-color: #<?php echo $theme_color; ?> ;
}

/* fix SmartMenus sub menus auto width (subMenusMinWidth and subMenusMaxWidth options) */
.navbar-nav .dropdown-menu > li > a {
  white-space: normal; }

.navbar-nav ul.sm-nowrap > li > a {
  white-space: nowrap; }

.navbar-nav.sm-collapsible ul.sm-nowrap > li > a {
  white-space: normal; }

/* fix .navbar-right subs alignment */
.navbar-right ul.dropdown-menu {
  left: 0;
  right: auto; }

/*----------Logo-----Menu-----*/
.logo-menu {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  background: rgba(255, 255, 255, 0.9); 
}
.logo-menu .logo {float: left; padding: 15px 0; position: relative; z-index: 999; }
.logo-menu .logo img {max-width: 150px; }
.logo h1{font-size: 2em; margin: -3px 0px 0px; padding:4px 0px 0px;}
 .logo a, .logo a:hover {font-size: 46px;color: #<?php echo $theme_color; ?>; margin: 0; padding: 0; text-transform: none; font-family: 'Russo One';}
/*.logo a, .logo a:hover {font-size: 46px; color: #<?php echo $theme_color; ?>; margin: 0; padding: 0; text-transform: none; font-family: 'Russo One'; }*/
.logo-menu .logo .slogan {
    color: #666;
    font-size: 11px;
    line-height: 1.4;
    margin: 0;
    padding: 0;
}

.logo-menu .main-menu .navbar {
  margin: 0;
  padding: 0;
  border: none;
  background: none; }
.logo-menu .main-menu .navbar-default .navbar-nav > li > a {
  text-align: center; }
.logo-menu .main-menu .navbar-nav > li > a {
  padding: 20.5px;
  font-size: 14px;
  text-transform: uppercase; }
.logo-menu .main-menu .navbar-nav > li > a:hover {
  color: #<?php echo $theme_color; ?>; }
.logo-menu .main-menu .navbar-default .navbar-nav > .active > a, 
.logo-menu .main-menu .navbar-default .navbar-nav > .active > a:hover, 
.logo-menu .main-menu .navbar-default .navbar-nav > .active > a:focus {
  background: #<?php echo $theme_color; ?>;
  color: #fff; }

.logo-menu .main-menu .navbar-default .navbar-nav > .active > a:hover {
  color: #555; }
.logo-menu .main-menu .nav > li {
  padding: 0 15px; }
.logo-menu .main-menu .dropdown-menu > li > a {
  padding: 10px 20px;
  border-bottom: 1px solid #f0f0f0; }
.logo-menu .main-menu .dropdown-menu > li:last-child a {
  border-bottom: none; }
.logo-menu .main-menu .dropdown-menu {
  border: 1px solid #f0f0f0;
  border-top: 4px solid #<?php echo $theme_color; ?>;
  margin: 0;
  padding: 0;
  border-radius: 4px 4px 0 0; }
.logo-menu .main-menu .dropdown-menu:before {
  font-family: FontAwesome;
  display: inline-block;
  padding-right: 3px;
  vertical-align: middle;
  content: "";
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #<?php echo $theme_color; ?>;
  position: absolute;
  top: -10px;
  left: 50%;
  margin-left: -10px; }
.logo-menu .main-menu .dropdown-menu .dropdown-menu:before {
  border-bottom: 10px solid transparent; }
.logo-menu .main-menu .dropdown-menu > li > a:hover {
  color: #<?php echo $theme_color; ?>; }
.logo-menu .main-menu .has-submenu {
  background: none;
  color: #666; }
.logo-menu .main-menu .has-submenu:hover {
  background: none !important; }
.logo-menu .main-menu .navbar-nav > li > a{
  padding-top: 31px;
  padding-bottom: 31px;
}
.logo-menu .main-menu .navbar-nav > li > a.has-icon{
  padding-top: 21px;
  padding-bottom: 21px;
}
/*--------Sticky------*/
.logo-menu.sticky-menu {
  background: #fff;
  border-bottom: 4px solid #<?php echo $theme_color; ?>; }
.logo-menu.sticky-menu .navbar-default .navbar-nav > li > a {
  padding: 20px 20.5px; }
.logo-menu.sticky-menu .navbar-default .navbar-nav > li > a.has-icon{
  padding: 10px 20.5px;
}
.logo-menu.sticky-menu .logo {
  padding: 4px 0; }




/*--------------------------------------------------------------
## Links
--------------------------------------------------------------*/

.page-numbers .current{
    background: #<?php echo $theme_color; ?> none repeat scroll 0 0;
    border-color: #<?php echo $theme_color; ?>;
    color: #fff; border-radius: 4px;
    display: inline-block;
    padding: 3px 14px;
}
.page-numbers > li {
    display: inline-block;
    list-style: outside none none;
}
li a, li a:hover {
    color: #<?php echo $theme_color; ?>;
}
.screen-reader-text{display: none;}

.tag-comment .pull-left{max-width: 60%;font-size:11px}
.tag-comment .pull-left a {
    color: #999;
}
.tag-comment .pull-right a {
    color: #999;
}


/*--------------------------------------------------------------
## Menus
--------------------------------------------------------------*/

.dropdown-menu > .active > a, 
.dropdown-menu > .active > a:hover, 
.dropdown-menu > .active > a:focus{color: #<?php echo $theme_color; ?> !important; background: none !important;}

.main-menu .dropdown-menu .dropdown .has-submenu:after{
  content: '';
  position: absolute;
  right: 10px;
  border-left: 5px solid #999;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  top: 50%;
  margin-top: -5px;
}

@media (max-width: 613px) {
  .main-menu .dropdown-menu .dropdown .has-submenu:after {
   right: 40px !important; } 
}

.fa, .wp-icon a:before {content: '';}
.fa-search:before, .wp-icon.wp-fa-search a:before {}


/*--------------------------------------------------------------
# Accessibility
--------------------------------------------------------------*/
/* Text meant only for screen readers. */


/*--------------------------------------------------------------
# Alignments
--------------------------------------------------------------*/
.alignleft {
  display: inline;
  float: left;
  margin-right: 1.5em;
}

.alignright {
  display: inline;
  float: right;
  margin-left: 1.5em;
}

.aligncenter {
  clear: both;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

/*--------------------------------------------------------------
# Clearings
--------------------------------------------------------------*/
.clear:before,
.clear:after,
.entry-content:before,
.entry-content:after,
.comment-content:before,
.comment-content:after,
.site-header:before,
.site-header:after,
.site-content:before,
.site-content:after,
.site-footer:before,
.site-footer:after {
  content: "";
  display: table;
}

.clear:after,
.entry-content:after,
.comment-content:after,
.site-header:after,
.site-content:after,
.site-footer:after {
  clear: both;
}

/*--------------------------------------------------------------
# Widgets
--------------------------------------------------------------*/
.widget {
  margin: 0 0 1.5em;
}

/* Make sure select elements fit in widgets. */
.widget select {
  max-width: 100%;
}

/* Search widget. */
.widget_search .search-submit {
  display: none;
}

/*--------------------------------------------------------------
# Content
--------------------------------------------------------------*/

/*-------------4 column masonry layout-----------*/
.masonry-4 {
  margin-top: 30px;
  -moz-column-count: 4;
  -moz-column-gap: 10px;
  -webkit-column-count: 4;
  -webkit-column-gap: 10px;
  column-count: 4;
  column-gap: 10px;
  width: 100%; }

@media (max-width: 1100px) {
  .masonry-4 {
    -moz-column-count: 3;
    -webkit-column-count: 3;
    column-count: 3; } }
@media (max-width: 850px) {
  .masonry-4 {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2; } }
@media (max-width: 560px) {
  .masonry-4 {
    -moz-column-count: 1;
    -webkit-column-count: 1;
    column-count: 1; } }


/*-------------3 column masonry layout-----------*/
.masonry-3 {
  margin-top: 30px;
  -moz-column-count: 3;
  -moz-column-gap: 10px;
  -webkit-column-count: 3;
  -webkit-column-gap: 10px;
  column-count: 3;
  column-gap: 10px;
  width: 100%; }

@media (max-width: 1160px) {
  .masonry-3 {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2; } }
@media (max-width: 560px) {
  .masonry-3 {
    -moz-column-count: 1;
    -webkit-column-count: 1;
    column-count: 1; } }


/*-------------2 column masonry layout-----------*/
.masonry-2 {
  margin-top: 30px;
  -moz-column-count: 2;
  -moz-column-gap: 10px;
  -webkit-column-count: 2;
  -webkit-column-gap: 10px;
  column-count: 2;
  column-gap: 10px;
  width: 100%; }

@media (max-width: 1160px) {
  .masonry-2 {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2; } }
@media (max-width: 560px) {
  .masonry-2 {
    -moz-column-count: 1;
    -webkit-column-count: 1;
    column-count: 1; } }


footer ul {
    margin-left: 2px; padding-left: 0px; padding-right: 0px;
}
footer li {
    list-style: outside none none;
}
/*--------------------------------------------------------------
## Posts and pages
--------------------------------------------------------------*/
.sticky {
  display: block;
  border: 1px solid #28C2AA;
  margin-top: 11px;
  
}

.hentry {
 
}

.byline,
.updated:not(.published) {
  display: none;
}

.single .byline,
.group-blog .byline {
  display: inline;
}

.page-content,
.entry-content,
.entry-summary {
  margin: 1.5em 0 0;
}

.page-links {
  clear: both;
  margin: 0 0 1.5em;
}

/*--------------------------------------------------------------
## Asides
--------------------------------------------------------------*/
.blog .format-aside .entry-title,
.archive .format-aside .entry-title {display: none;}
aside.sidebar .single .title:after{
display: block;
content: '';
width: 50px;
height: 2px;
margin-top: 4px;
background: #<?php echo $theme_color; ?> none repeat scroll 0% 0%;
}
aside.sidebar {padding: 10px 0; }
aside.sidebar .single {margin-top: 30px; }
aside.sidebar .single p {margin-top: 10px; }
aside.sidebar .single .search .form-control {height: 26px;  border-radius: 0; width: 90%; }
aside.sidebar .single .search .btn {
  background: #<?php echo $theme_color; ?>;
  color: #fff;
  border-color: #<?php echo $theme_color; ?>;
  padding: 9px 17px;
  border-radius: 0; }
aside.sidebar .single .title {
  font-size: 20px;
  text-transform: uppercase;
  border-bottom: 1px solid #f0f0f0;
  padding-bottom: 0px;
  margin: 0; }
aside.sidebar .single .underline {
  width: 50px;
  height: 2px;
  margin-top: -1px;
  background: #<?php echo $theme_color; ?>; }
aside.sidebar .single ul{margin-left: 0; padding-left: 0; padding-right: 0px;}
aside.sidebar .single ul li{list-style: none;}
aside.sidebar .single ul li a {
  display: block;
  line-height: 30px;
  color: #666;
  text-decoration: none; }
aside.sidebar .single ul li a:hover {color: #<?php echo $theme_color; ?>; }
aside.sidebar .single ul li a::before {
  font-family: FontAwesome;
  display: inline-block;
  padding-right: 3px;
  padding-left: 3px;
  vertical-align: middle; }
aside.sidebar .single ul li a::before {
  content: "\f101"; }
aside.sidebar .single ul li.cat-item a::before {
  content: "\f115"; }
aside.sidebar .single.recent ul li a::before {
  content: "\f044"; }
aside.sidebar .single .tagcloud a::before {
  content: "\f02b"; font-family: FontAwesome;
  display: inline-block;
  padding-right: 3px; padding-left: 3px;
  vertical-align: middle;}
aside.sidebar .single ul li.recentcomments a::before {
  content: "\f0e5"; }
aside.sidebar .single.archives ul li a::before {
  content: "\f133"; }
aside.sidebar .single .tagcloud a {
    color: #666; display: inline-block; padding-top: 5px; padding-right: 8px;}
aside.sidebar .single .tagcloud a:hover{color:#<?php echo $theme_color; ?>; text-decoration: none; }

/*--------------------------------------------------------------
## Comments
--------------------------------------------------------------*/

.single-page .comment-form {
  max-width: 1000px;
  margin: 0 auto;
  border-top: 1px solid #f0f0f0; 
}
.single-page .comment-form .block-title {
  font-size: 20px;
  text-transform: uppercase;
  text-align: center; 
}
.single-page .comment-form .form-control {
  margin-top: 15px;
  min-height: 40px; 
}
.single-page .comment-form .submit-button {
  margin-top: 30px;
  text-align: center; 
}
.single-page .comment-form .submit-button .btn {
  text-transform: uppercase; }
.single-page .comments-block {
  max-width: 1000px;
  margin: 0 auto;
  border-top: 1px solid #f0f0f0;
  margin-top: 30px; 
}
.single-page .block-title {
  font-size: 20px;
  text-transform: uppercase;
  text-align: left; }
.single-page .comment {
  background: #f0f0f0;
  padding: 15px; list-style: none;
  margin-top: 20px; }
.single-page .comment p {
  font-size: 14px;
  line-height: 24px;
  color: #666; }
.single-page .comment .name {
  font-size: 16px;
  color: #<?php echo $theme_color; ?>; }
.single-page .comment .comment {
  border-top: 1px solid #aaa; }
.single-page .comment .reply-btn {
  background: #fcfcfc;
  color: #<?php echo $theme_color; ?>;
  padding: 4px 16px; }

.comments-title{font-size: 20px;}
.comment-list {
    margin-left: 0;
    padding-right: 0px;
    padding-left: 0;
}
.children {
    margin-left: 0; 
    padding-right: 0px;
    padding-left: 0;
}
.comment-meta {
    background: transparent none repeat scroll 0 0;
    clear: both;
    overflow: hidden;
    padding-bottom: 10px;
}
.comment-author.vcard{
  float: left;
}
.comment-metadata{
  padding: 5px; float: right;
}
.fn, .fn a, .says, time{
  color: #<?php echo $theme_color; ?>;
}
time a:hover{
  text-decoration: none !important;
}
#reply-title {
  font-size: 20px; 
  padding-bottom: 20px;
  text-transform: uppercase;}
.comment-notes {padding-top: 15px;}
.comment-reply-link{    
  background: #fcfcfc none repeat scroll 0 0;
    color: #<?php echo $theme_color; ?>;
    padding: 4px 16px;
}
.comment-reply-link:hover{
  text-decoration: none; color: #<?php echo $theme_color; ?>;
}
textarea {
  padding-left: 3px;
  width: 100%;
}
.form-submit {
    display: none;
}
.comment-content a {
  word-wrap: break-word;
}

.bypostauthor {
  display: block;
}

/*--------------------------------------------------------------
# Infinite scroll
--------------------------------------------------------------*/
/* Globally hidden elements when Infinite Scroll is supported and in use. */
.infinite-scroll .posts-navigation, /* Older / Newer Posts Navigation (always hidden) */
.infinite-scroll.neverending .site-footer { /* Theme Footer (when set to scrolling) */
  display: none;
}

/* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before. */
.infinity-end.neverending .site-footer {
  display: block;
}

/*-------------Scroll to top--------------*/
.scroll-top-wrapper {
  position: fixed;
  opacity: 0;
  visibility: hidden;
  overflow: hidden;
  text-align: center;
  z-index: 99999999;
  background-color: #<?php echo $theme_color; ?>;
  color: #eeeeee;
  width: 44px;
  height: 44px;
  line-height: 44px;
  right: 22px;
  bottom: 80px;
  padding-bottom: 2px;
  border-radius: 100%;
  border: 1px solid rgba(255, 255, 255, 0.1);
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  box-shadow: none; }

.scroll-top-wrapper:hover {
  opacity: 0.6 !important; }

.scroll-top-wrapper.show {
  visibility: visible;
  cursor: pointer;
  opacity: 1.0; }

.scroll-top-wrapper i.fa {
  line-height: inherit; }

/*--Selection-------*/
::-moz-selection {
  text-shadow: none;
  background: #<?php echo $theme_color; ?>;
  color: #fff; }

::selection {
  text-shadow: none;
  background: #<?php echo $theme_color; ?>;
  color: #fff; }

img::selection {
  background: 0 0; }

img::-moz-selection {
  background: 0 0; }




/*--------------------------------------------------------------
# Media
--------------------------------------------------------------*/
.page-content .wp-smiley,
.entry-content .wp-smiley,
.comment-content .wp-smiley {
  border: none;
  margin-bottom: 0;
  margin-top: 0;
  padding: 0;
}

/* Make sure embeds and iframes fit their containers. */
embed,
iframe,
object {
  max-width: 100%;
}

/*--------------------------------------------------------------
## Captions
--------------------------------------------------------------*/
.wp-caption {
  margin-bottom: 1.5em;
  max-width: 100%;
}

.wp-caption img[class*="wp-image-"] {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.wp-caption .wp-caption-text {
  margin: 0.8075em 0;
}

.wp-caption-text {
  text-align: center;
}
.lpimg{
  max-height: 208px;
  overflow: hidden;
}


/*--------------------------------------------------------------
## Galleries
--------------------------------------------------------------*/
.gallery {
  margin-bottom: 1.5em;
}

.gallery-item {
  display: inline-block;
  text-align: center;
  vertical-align: top;
  width: 100%;
}

.gallery-columns-2 .gallery-item {
  max-width: 50%;
}

.gallery-columns-3 .gallery-item {
  max-width: 33.33%;
}

.gallery-columns-4 .gallery-item {
  max-width: 25%;
}

.gallery-columns-5 .gallery-item {
  max-width: 20%;
}

.gallery-columns-6 .gallery-item {
  max-width: 16.66%;
}

.gallery-columns-7 .gallery-item {
  max-width: 14.28%;
}

.gallery-columns-8 .gallery-item {
  max-width: 12.5%;
}

.gallery-columns-9 .gallery-item {
  max-width: 11.11%;
}

.gallery-caption {
  display: block;
}



/*--------------------------------------------------------------
## FOOTER
--------------------------------------------------------------*/
footer {background: #222; padding: 20px 0 0 0; }
footer .single {margin-top: 30px; }
footer .single p {color: #aaa; }
footer .single .single-title {font-size: 16px; color: #<?php echo $theme_color; ?>;text-transform: uppercase; }
footer .single li a {
  color: #aaa;
  display: block;
  text-decoration: none;
  line-height: 30px; }
footer .single li a:hover {color: #<?php echo $theme_color; ?>; }
footer .single address {color: #aaa; }
footer .single address a {color: #aaa; text-decoration: none; }
footer .single address i {color: #<?php echo $theme_color; ?>; }
footer .single.about img {max-width: 180px; margin-bottom: 15px; }
footer .copyright {
  background: #111;
  padding: 15px 0;
  margin-top: 20px; }
footer .copyright h6 {
  margin: 0; float: left;
  color: #aaa;
  text-transform: uppercase;
  line-height: 36px; }
footer .copyright .social-media {
  text-align: right;
  margin: 0;
  padding: 0; }
footer .copyright .social-media li a {
  display: inline-block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  color: #<?php echo $theme_color; ?>;
  background: rgba(255, 255, 255, 0.1); }
footer .copyright .social-media li a:hover {background: #<?php echo $theme_color; ?>; color: #fff; }



/*--------------------------------------------------------------
## THEME HOMEPAGE CSS
--------------------------------------------------------------*/

/*--------------------------------------------------------------
## FULL WIDTH SLIDER
--------------------------------------------------------------*/
html, body {height: 100%; }
.carousel, .item, .active {height: 100%; }
.carousel-inner {height: 100%; }

/* Background images are set within the HTML using inline CSS, not here */
.fill {
  width: 100%;
  height: 100%;
  background-position: center;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  -o-background-size: cover; }

.carousel-caption {left: 0; right: 0; padding-bottom: 0; }
.carousel-caption h3 {font-size: 36px; text-transform: uppercase; }
.carousel-caption p {font-size: 14px; line-height: 24px; }
.carousel-caption .buttons .btn {
  background: #<?php echo $theme_color; ?>;
  color: #fff;
  margin: 0 10px;
  text-transform: uppercase;
  font-size: 18px;
  margin-top: 15px;
  font-weight: 100;
  padding: 10px 12px; }
.carousel-caption .buttons .btn:hover {opacity: 0.8; }
.carousel-caption .buttons .btn-slider1 {background: #111; color: #<?php echo $theme_color; ?>; }
.outer {
  display: table;
  position: absolute;
  z-index: 999;
  height: 100%;
  width: 100%; }
.middle {display: table-cell; vertical-align: middle; }
.inner {margin-left: auto; margin-right: auto; max-width: 700px; }


/*--------------------------------------------------------------
## SLIDER
--------------------------------------------------------------*/
.carousel-indicators li {
  width: 20px;
  height: 20px;
  border: none;
  background: rgba(255, 255, 255, 0.5);
  margin: 0 5px; }
.carousel-indicators .active {
  background: #<?php echo $theme_color; ?>;
  width: 20px;
  height: 20px; }
.carousel-indicators {z-index: 9991; }



/*--------------------------------------------------------------
## INTRO
--------------------------------------------------------------*/
.intro {background: #<?php echo $theme_color; ?>; padding: 60px 0; }
.intro .single {
  text-align: center;
  padding: 15px;
  margin: 30px 0;
  transition: all 0.4s ease-in-out; }
.intro .single:hover {
  background: rgba(255, 255, 255, 0.1);
  box-shadow: 0 3px 0px rgba(0, 0, 0, 0.1); }
.intro .single .block-title {
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 300;
  color: #fff; }
.intro .single p {
  color: #fff;
  font-size: 14px;
  font-weight: 300;
  line-height: 22px; }
.intro .single .read-more {
  background: rgba(255, 255, 255, 0.5);
  color: #<?php echo $theme_color; ?>;
  border-radius: 50%; }
.intro .single .read-more:hover {background: rgba(255, 255, 255, 0.9); }



/*--------------------------------------------------------------
## SERVICES
--------------------------------------------------------------*/
.section-title h3{font-size: 36px;}
.services {padding: 60px 0; }
.services .single {text-align: center; margin: 30px 0; }
.services .single .content {
  padding: 15px;
  background: #fcfcfc;
  border: 1px solid #f0f0f0;
  margin-top: 3px; }
.services .single .content .block-title {
  font-size: 18px;
  text-transform: uppercase;
  color: #333; }
.services .single .content p {
  font-size: 14px;
  line-height: 22px;
  color: #666; }
.services .single .content .read-more {
  background: #fff;
  border: 1px solid #f0f0f0;
  color: #<?php echo $theme_color; ?>; }
.services .single .content .read-more:hover {
  background: #<?php echo $theme_color; ?>;
  color: #fff; }



/*--------------------------------------------------------------
## TESTIMONIAL
--------------------------------------------------------------*/
.testimonials {
    background-size: cover !important;
    background-attachment: fixed !important;
    background-repeat: no-repeat !important;
    background-position: center center !important;
    position: relative;
  padding: 60px 0;
}
.testimonials .section-title h3 {color: #<?php echo $theme_color; ?>; }
.testimonials .feedback {
  max-width: 700px;
  margin: 0 auto;
  margin-top: 30px;
  text-align: center; }
.testimonials .feedback p {color: #fff; line-height: 22px; }
.testimonials .client-info {margin: 0 auto; text-align: center; }
.testimonials .client-info h3 {
  color: #<?php echo $theme_color; ?>;
  font-size: 15px;
  text-transform: uppercase; }
.testimonials .client-info p {color: #<?php echo $theme_color; ?>; font-size: 13px; }
.testimonials .owl-theme .owl-controls .owl-page span {
  width: 20px;
  height: 20px;
  background: rgba(255, 255, 255, 0.5); }
.testimonials .owl-theme .owl-controls .owl-page.active span {
  background: #<?php echo $theme_color; ?>; }



/*--------------------------------------------------------------
## LATEST POST
--------------------------------------------------------------*/
.latest-post {padding: 60px 0; }
.latest-post .single {text-align: center; margin: 30px 0; }
.latest-post .single .content {
  padding: 15px;
  padding-top: 0;
  background: #fcfcfc;
  border: 1px solid #f0f0f0;
  margin-top: 3px; }
.latest-post .single .content .post-info {
  font-size: 13px;
  color: #999;
  padding: 5px 0; }
.latest-post .single .content .block-title {
  font-size: 18px;
  text-transform: uppercase;
  color: #333; }
.latest-post .single .content p {
  font-size: 14px;
  line-height: 22px;
  color: #666; }
.latest-post .single .content .read-more {
  background: #<?php echo $theme_color; ?>;
  border: 1px solid #<?php echo $theme_color; ?>;
  color: #fff; }
.latest-post .single .content .read-more:hover {
  background: #fff;
  color: #<?php echo $theme_color; ?>; }



/*--------------------------------------------------------------
## OUR WORKS
--------------------------------------------------------------*/
.our-works {padding: 60px 0; padding-bottom: 0; }
.our-works .section-title {margin-bottom: 30px; }
.our-works .single {
  padding: 0;
  overflow: hidden;
  text-align: center;
  position: relative; }
.our-works .single:hover .on-hover {
  transform: translate(0px, 0px);
  visibility: visible; }
.our-works .single .on-hover {
  position: absolute;
  background: rgba(0, 0, 0, 0.5);
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  transform: translate(100px, 100px);
  visibility: hidden;
  transition: all 0.6s ease-in-out; }
.our-works .single .underline {
  width: 50px;
  height: 2px;
  background: #<?php echo $theme_color; ?>;
  margin: 0 auto; }
.our-works .single .read-more {background: #<?php echo $theme_color; ?>; color: #fff; }
.our-works .single h3 {color: #fff; text-transform: uppercase; font-size: 16px; }
.our-works .single p {color: #fff; line-height: 22px; }



/*--------------------------------------------------------------
## NEWSLETTER
--------------------------------------------------------------*/
.newsletter {
  padding: 60px 0;
  background: #<?php echo $theme_color; ?>;
  padding-left: 30px;
  padding-right: 30px; }
.newsletter .block {
  max-width: 600px;
  margin: 0 auto;
  text-align: center; }
.newsletter .block h3 {
  font-size: 20px;
  text-transform: uppercase;
  color: #fff;
  margin-bottom: 30px; }
.newsletter .block .form-control {
  height: 50px; 
  border-radius: 4px 0 0 4px; 
  width: 480px;
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.5); }
.newsletter .block .form-control::-webkit-input-placeholder {
  color: #fff; }
.newsletter .block .form-control::-moz-placeholder {
  color: #fff; }
.newsletter .block .btn {
  background: rgba(0, 0, 0, 0.8);
  border-color: #000;
  color: #fff;
  text-transform: uppercase;
  padding: 13px 25px;
  font-size: 16px; }



/*--------------------------------------------------------------
## THEME INNERPAGE CSS
--------------------------------------------------------------*/
.page-header {
  padding: 60px 0 !important;
  position: relative; background-color: #666;
  background-size: cover;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-position: center center;
  margin: 0 !important;
  border-bottom: none; }
.page-header .block {text-align: center; }
.page-header .block .page-title {
  font-size: 30px;
  font-family: Open Sans;
  color: #fff;
  margin-top: 80px; }
.page-header .block .underline {
  width: 50px;
  height: 2px;
  margin: 0 auto;
  background: #<?php echo $theme_color; ?>; }
.page-header .block .bc {margin-top: 20px; }
.page-header .block .bc li a {
  display: inline-block;
  border: 1px solid rgba(255, 255, 255, 0.5);
  padding: 4px 8px;
  border-radius: 4px;
  color: #<?php echo $theme_color; ?>;
  text-decoration: none; }
.page-header .block .bc li a:hover {border-color: #<?php echo $theme_color; ?>; }
.page-header .block .bc li:last-child a {color: #fff; }
.page-header .block .bc li:last-child a:hover {border-color: rgba(255, 255, 255, 0.5); }
.bc .post-categories {margin-left: 0; padding-left: 0;}
.bc .post-categories li {float: left; list-style: none; margin-right: 5px;}
.list-inline > li{overflow: hidden;}




/*--------------------------------------------------------------
## BLOG PAGE
--------------------------------------------------------------*/
.inner-content {padding-bottom: 40px; }
.inner-content .single-post {
  display: inline-block;
  margin-bottom: 20px;
  width: 100%;
  padding: 10px;
  border: 1px solid transparent;
  transition: all 0.4s ease-in-out; }
.inner-content .single-post:hover {border: 1px solid #f0f0f0; }
.inner-content .single-post .post-title {font-size: 20px; }
.post-title a, .post-title a:hover {color: #<?php echo $theme_color; ?>;}
.taxonomy-description > p {color: #<?php echo $theme_color; ?>;}
.inner-content .single-post .post-info {color: #999; text-transform: uppercase; }
.inner-content .single-post p {color: #666; }
.inner-content .single-post .read-more {
  background: #fff none repeat scroll 0 0;
  border: 1px solid #f0f0f0;
  color: #<?php echo $theme_color; ?>;}
.inner-content .single-post .read-more:hover {
  background: #<?php echo $theme_color; ?> none repeat scroll 0 0;
  color: #fff;}
.inner-content .single-post .tag-comment {
  border-top: 1px solid #f0f0f0;
  margin-top: 10px;
  padding: 5px 0;
  color: #999; }
.content h3{margin-top: 0px;}



/*--------------------------------------------------------------
## CONTACT PAGE
--------------------------------------------------------------*/
.contact-head {
  max-width: 1024px;
  margin: 0 auto;
  padding: 30px 0;
  text-align: center; }
.contact-form {max-width: 1024px; margin: 0 auto; }
.contact-form .single {margin-top: 30px; text-align: center; }
.wpcf7-submit {
    background: #<?php echo $theme_color; ?>;
    border: medium none;
    border-radius: 5px;
    color: #fff;
    margin-top: 30px;
    padding: 6px 20px;
    text-align: center;
}
.google-map {margin-top: 30px; }
.google-map .embed-responsive-16by9 {padding-bottom: 35%; }



/*--------------------------------------------------------------
## PAGE NOT FOUND
--------------------------------------------------------------*/
.not-found {
  max-width: 640px;
  margin: 0 auto;
  text-align: center;
  padding: 60px 0; }
.not-found h1 {font-size: 200px; color: #<?php echo $theme_color; ?>; margin: 30px 0; }
.not-found h3 {font-size: 30px; color: #333; }
.not-found p {font-size: 20px; color: #666; }
.not-found .form-control {margin-top: 40px; text-align: center; }
.not-found .input-group.search { width: 100%;}
.not-found .btn.btn-default{display: none;}



/*--------------------------------------------------------------
## SINGLE POST
--------------------------------------------------------------*/
.single-page {
  margin-top: 40px;
  /*----------Comment Form-------------*/
  /*-----------Comments Block----------*/ 
}
.single-page .featured-image{position: relative; overflow: hidden;}
.single-page .imgcaption {background: #333; bottom: 0; color: #fff; left: 0; opacity: 0.7; padding: 3px 8px; position: absolute;}
.single-page .post-info {color: #999; padding: 5px 0; padding-bottom: 15px; overflow: auto; }
.single-page .post-info a {color: #999; text-decoration: none; }
.single-page .post-info a:hover {color: #<?php echo $theme_color; ?>; }
.single-page blockquote {
  margin: 0 auto;
  margin-bottom: 20px;
  background: #fcfcfc;
  border: 1px solid #f0f0f0;
  border-top: 4px solid #<?php echo $theme_color; ?>;
  border-radius: 4px 4px 0 0; }
.single-page blockquote p {font-size: 14px; line-height: 24px; font-style: italic; }
.single-page blockquote cite {font-size: 14px; color: #<?php echo $theme_color; ?>; }
.single-page .content {padding-bottom: 20px; overflow: hidden;}
.single-page .content p {
  font-size: 14px;
  line-height: 23px;
  margin-bottom: 20px; }
.single-page .content form .form-control{float: right; height: auto; width: 97%;}
.single-page .social-media {text-align: center; clear: both;}
.single-page .social-media li a {
  display: inline-block;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  border: 1px solid #f0f0f0;
  color: #<?php echo $theme_color; ?>;
  border-radius: 3px;
  overflow: hidden; }
.single-page .social-media li a:hover i:first-child {
  transform: translate(5px, 0px); }
.single-page .social-media li a:hover i:last-child {
  transform: translate(20px, 0px); }
.single-page .social-media li a i {
  transition: all 0.4s ease-in-out; }
.single-page .social-media li a i:first-child {
  transform: translate(-20px, 0px); }
.single-page .social-media li a i:last-child {
  transform: translate(-5px, 0px); }
.single-page .pager li > a, .single-page .pager li > span {
  font-size: 20px;
  padding: 1px 20px;
  border-radius: 3px;
  color: #<?php echo $theme_color; ?>; }

.single-page .pagination {margin-top: 30px; }
.pagination {
  margin: 0 auto;
  display: block;
  width: 100%; }
.pagination ul {text-align: center; }
.pagination ul li a {
  display: inline-block;
  padding: 3px 14px;
  border: 1px solid #f0f0f0;
  border-radius: 4px;
  color: #<?php echo $theme_color; ?>; }
.pagination ul li.active a {
  background: #<?php echo $theme_color; ?>;
  border-color: #<?php echo $theme_color; ?>;
  color: #fff; }
.posted-on {display: block; padding-bottom: 8px;}
.entry-footer span {margin-right: 15px;}

.content h1 {
  font-size: 2.5em;
  margin: 1.5em 0 1em 0;
  padding: 0.25em 0 0.5em 0;
  border-top: 3px solid #<?php echo $theme_color; ?>;
/*  border-radius: 3px 3px 0 0;*/
}

.content blockquote.knr-info {
  padding-left: 100px;
  border-top: 4px solid green;
}

.content blockquote.knr-alert {
  padding-left: 100px;
  border-top: 4px solid #ff9000;
}

.content blockquote.knr-danger {
  padding-left: 100px;
  border-top: 4px solid #ff0000;
}

.content blockquote.sommaire {
    font-style: normal;
    padding-left: 50px;
    border: none;
    background: rgba(204, 51, 0, 0.025);
    padding-bottom: 0.001em;
    border-radius: 4px 4px 4px 4px; 

}


/*--------------------------------------------------------------
## NEWSLETTER PLUGIN CSS
--------------------------------------------------------------*/
.newsletter-widget .input-group form{
  width: 500px !important;
}
.newsletter-widget form {
    display: block;
    margin: 0 auto;
    text-align: center;
}
.newsletter-widget form p{
  float: left;
  display: inline-block;
}

@media (max-width: 640px){
  .newsletter .block .form-control{width: 445px !important;}
}
@media (max-width: 620px){
  .newsletter .block .form-control{width: 425px !important;}
}
@media (max-width: 600px){
  .newsletter .block .form-control{width: 390px !important;}
}
@media (max-width: 568px){
  .newsletter .block .form-control{width: 370px !important;}
}
@media (max-width: 540px){
  .newsletter .block .form-control{width: 350px !important;}
}
@media (max-width: 480px){
  .newsletter .block .form-control{width: 290px !important;}
}
@media (max-width:420px){
  .newsletter .block .form-control{width: 230px !important;}
}
@media (max-width: 380px){
  .newsletter .block .form-control{width: 190px !important;}
}
@media (max-width: 360px){
  .newsletter .block .form-control{width: 170px !important;}
}
@media (max-width: 320px){
  .newsletter .block .form-control{width: 140px !important;}
}



/*--------------------------------------------------------------
## WOO COMMERCE EXTRA CSS
--------------------------------------------------------------*/
.woocommerce-breadcrumb > li {
    display: inline-block;
    margin-right: 10px;
    
}
.woocommerce .woocommerce-breadcrumb a{ 
    color: #<?php echo $theme_color; ?>; 
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 4px;
    padding: 4px 8px;  
}
.woocommerce ul.products li.product h3 {
    color: #<?php echo $theme_color; ?>;
    text-transform: uppercase;
}
.woocommerce .star-rating::before,
.woocommerce .products .star-rating,
.woocommerce ul.products li.product .price{color: #<?php echo $theme_color; ?>;}

.woocommerce #respond input#submit, 
.woocommerce a.button, .woocommerce button.button, 
.woocommerce input.button {
    background-color: #<?php echo $theme_color; ?>;
    font-weight: 400;
}


/*Woo-commerce Single Page*/
.woocommerce div.product div.images, 
.woocommerce div.product div.summary{margin-top: 3em;}
.woocommerce div.product .product_title {
  color: #<?php echo $theme_color; ?>; 
  font-weight: 300; 
  text-transform: uppercase;
}
.woocommerce .star-rating span {color: #<?php echo $theme_color; ?>;}
.woocommerce-review-link {color: #<?php echo $theme_color; ?>;}
.woocommerce div.product p.price ins, 
.woocommerce div.product span.price ins {
    color: #<?php echo $theme_color; ?>;
    font-weight: 600;
}
.woocommerce div.product p.price, 
.woocommerce div.product span.price {color: #<?php echo $theme_color; ?>;}
.woocommerce ul.products li.product h3 {}
.product li:before{content: none !important;}

.woocommerce ul.products li.product .star-rating {}
.woocommerce ul.products li.product .price {}

.product_meta .posted_in a {color: #<?php echo $theme_color; ?>; padding-right: 5px;}

.description_tab a {font-size: 18px; font-weight: 500 !important; text-transform: uppercase;}
.reviews_tab a {font-size: 18px;font-weight: 500 !important; text-transform: uppercase;}
#tab-description h2{color: #<?php echo $theme_color; ?>; font-weight: 300;}

#review_form_wrapper {
    border: 1px solid #ddd;
    border-radius: 5px;
    margin: 10px;
    padding: 10px;
}
.woocommerce #reviews h3{
  color: #<?php echo $theme_color; ?>; 
  font-weight: 300; 
  padding-bottom: 10px; 
  text-transform: uppercase;
}
#review_form input {
    border: 1px solid #ddd;
    border-radius: 5px;
    float: right;
    padding: 2px 8px;
    width: 90%;
}
#review_form textarea {
    border: 1px solid #ddd;
    border-radius: 5px;
    float: right;
    margin-bottom: 10px;
    padding: 2px 8px;
    width: 100%;
}
.woocommerce #respond input#submit, 
.woocommerce a.button, 
.woocommerce button.button, 
.woocommerce input.button{}
.woocommerce #respond input#submit:hover, 
.woocommerce a.button:hover, 
.woocommerce button.button:hover, 
.woocommerce input.button:hover{}
.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current{
  border: none; padding: 11px !important;
}

.woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt, 
.woocommerce button.button.alt, 
.woocommerce input.button.alt{
  background-color: #<?php echo $theme_color; ?>; color: #fff !important;}
.woocommerce #respond input#submit.alt:hover, 
.woocommerce a.button.alt:hover, 
.woocommerce button.button.alt:hover, 
.woocommerce input.button.alt:hover{opacity: 0.8; background-color: #<?php echo $theme_color; ?> !important;}

.woocommerce #reviews #comments ol.commentlist li img.avatar{width: 78px;}
.woocommerce #reviews #comments ol.commentlist li .comment-text{margin: 0 0 0 85px;}

.woocommerce #reviews #comments h2 {
    clear: none;
    color: #<?php echo $theme_color; ?>;
    font-size: 28px;
    font-weight: 300;
}
.woocommerce #reviews h3{margin: 10px 0;}
#review_form .comment-form-author{float: none !important;}
#review_form .comment-form-email{float: none !important;}
#review_form .comment-form-rating{}

.woocommerce p.stars a.star-1::after, 
.woocommerce p.stars a.star-2::after, 
.woocommerce p.stars a.star-3::after, 
.woocommerce p.stars a.star-4::after, 
.woocommerce p.stars a.star-5::after{color: #<?php echo $theme_color; ?>;}

.related.products > h2 {color: #<?php echo $theme_color; ?>; font-size: 28px; font-weight: 300;}
.product-categories li {border-left: medium none; padding-left: 5px;}
.product-name > a{color: #<?php echo $theme_color; ?>; }
.product-name > a:hover{color: #<?php echo $theme_color; ?>; }
.woocommerce-cart table.cart img{width: 100%;}
.cross-sells > h2 {
  color: #<?php echo $theme_color; ?>;
    float: left;
    font-size: 22px;
    font-weight: 300;
}
.woocommerce .cart-collaterals .cross-sells ul.products li, 
.woocommerce-page .cart-collaterals .cross-sells ul.products li{width: 100%;}

.actions .button {width: 200px;}
.woocommerce-cart table.cart td.actions .coupon .input-text{padding: 7px 6px; width: 200px;}

.woocommerce form .form-row input.input-text, 
.woocommerce form .form-row textarea{padding: 8px; border: 1px solid #ddd !important; border-radius: 3px;}


/*Woo-Commerce Cart Page*/
.woocommerce ul.cart_list li a, 
.woocommerce ul.product_list_widget li a{font-weight: 400;}
.woocommerce .woocommerce-info {
    border-top-color: #<?php echo $theme_color; ?>;
}
.woocommerce .woocommerce-info::before{color: #<?php echo $theme_color; ?>;}
.showlogin, .showlogin:hover{color: #<?php echo $theme_color; ?>;}
.showcoupon, .showcoupon:hover{color: #<?php echo $theme_color; ?>;}
.woocommerce form .form-row label, 
.woocommerce-page form .form-row label{font-weight: 400;}
.lost_password a, .lost_password a:hover{color: #<?php echo $theme_color; ?>;}

.woocommerce .col2-set .col-1, 
.woocommerce-page .col2-set .col-1{width: 100%; border: 1px solid #ddd; border-radius: 5px; padding: 10px; margin-bottom: 20px;}
.woocommerce .col2-set .col-2, 
.woocommerce-page .col2-set .col-2{width: 100%; border: 1px solid #ddd; border-radius: 5px; padding: 10px;}
.woocommerce-billing-fields {color: #444;}
.woocommerce-billing-fields h3{font-weight: 300; color: #<?php echo $theme_color; ?>; text-transform: uppercase;}
.woocommerce-billing-fields label{font-weight: 300;}

.woocommerce-shipping-fields h3{font-weight: 300; color: #<?php echo $theme_color; ?>; text-transform: uppercase;}
.woocommerce-shipping-fields label{font-weight: 300;}
#order_review_heading{font-weight: 300; color: #<?php echo $theme_color; ?>; text-transform: uppercase;}

.select2-container .select2-choice{border-color: #999;}
.input-checkbox{width: auto;}
#rememberme {float: left; margin: 7px; width: auto;}

.woocommerce-checkout #payment ul.payment_methods li input{width: auto;}

.woocommerce #respond input#submit, 
.woocommerce a.button, 
.woocommerce button.button, 
.woocommerce input.button{width: auto;}

.order_details {
    border: 1px solid #<?php echo $theme_color; ?>;
    border-radius: 4px;
    padding: 15px;
}
.woocommerce > h2 {
    color: #<?php echo $theme_color; ?>;
    font-weight: 300;
    text-transform: uppercase;
}
header > h2 {
    color: #<?php echo $theme_color; ?>;
    font-weight: 300;
    text-transform: uppercase;
}
.title > h3 {
    color: #<?php echo $theme_color; ?>;
    font-weight: 300;
    text-transform: uppercase;
}

@media (max-width: 1170px) {
  .logo-menu .main-menu .nav > li {padding: 0 0; } 
}

@media (max-width: 900px) {  
  .logo-menu .main-menu .navbar-default .navbar-nav > li > a {padding: 20.5px 10px; } 
  .logo-menu.sticky-menu .navbar-default .navbar-nav > li > a.has-icon {padding: 10px 10px;}
}

@media (max-width: 800px) {
  .logo h1{font-size: 17px;}
  .logo-menu.sticky-menu .logo h1{padding-top: 12px;}
  .logo-menu .main-menu .navbar-default .navbar-nav > li > a {padding: 23px 10px; } 
  .latest-post .single .content{min-height: 232px;}
}

@media (max-width: 767px) {
  body.admin-bar .logo-menu{margin-top: 0px;}
  .logo-menu {
    background: rgba(255, 255, 255, 0.9) none repeat scroll 0 0;
    left: 0; position: fixed; right: 0; top: 0; z-index: 9999;}
  .logo h1{font-size: 2em;}
  .navbar-default .navbar-toggle {
    border-color: #<?php echo $theme_color; ?>;
    border-radius: 0;
    margin-top: 22px; }
  .navbar-default .navbar-toggle:focus {background: none; }
  .navbar-default .navbar-toggle .icon-bar {background: #<?php echo $theme_color; ?>; }
  .navbar {min-height: 1px; }
  .logo-menu .main-menu .navbar-default .navbar-nav > li > a {
    text-align: left;
    padding: 10px 15px;
    border-bottom: 1px solid #f0f0f0; }
  .logo-menu .main-menu .navbar-default .navbar-nav > li > a i {margin-right: 8px; }
  .logo-menu .main-menu .navbar-default .navbar-nav > li > a br {display: none; }
  .logo-menu {position: relative; }
  .page-header{margin-top: -80px !important;}
  .latest-post .single .content{min-height: auto !important;}
  footer .copyright .social-media {text-align: center; }
  footer .copyright h6 {text-align: center; width: 100%; } 
}

.page-content aside.sidebar .single .search .form-control {
  width: 97.1% !important;
}
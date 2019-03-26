<!DOCTYPE html>
<html>
  <head><!--[if lt IE 9]><script language="javascript" type="text/javascript" src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <meta charset="UTF-8"><style>/*
 * Bootstrap v2.2.1
 *
 * Copyright 2012 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */
.clearfix {
  *zoom: 1;
}
.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
  line-height: 0;
}
.clearfix:after {
  clear: both;
}
html {
  font-size: 100%;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
a:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
a:hover,
a:active {
  outline: 0;
}
button,
input,
select,
textarea {
  margin: 0;
  font-size: 100%;
  vertical-align: middle;
}
button,
input {
  *overflow: visible;
  line-height: normal;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0;
}
body {
  margin: 0;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 20px;
  color: #333;
  background-color: #fff;
}
a {
  color: #08c;
  text-decoration: none;
}
a:hover {
  color: #005580;
  text-decoration: underline;
}
.row {
  margin-left: -20px;
  *zoom: 1;
}
.row:before,
.row:after {
  display: table;
  content: "";
  line-height: 0;
}
.row:after {
  clear: both;
}
[class*="span"] {
  float: left;
  min-height: 1px;
  margin-left: 20px;
}
.container,
.navbar-static-top .container,
.navbar-fixed-top .container,
.navbar-fixed-bottom .container {
  width: 940px;
}
.span12 {
  width: 940px;
}
.span11 {
  width: 860px;
}
.span10 {
  width: 780px;
}
.span9 {
  width: 700px;
}
.span8 {
  width: 620px;
}
.span7 {
  width: 540px;
}
.span6 {
  width: 460px;
}
.span5 {
  width: 380px;
}
.span4 {
  width: 300px;
}
.span3 {
  width: 220px;
}
.span2 {
  width: 140px;
}
.span1 {
  width: 60px;
}
[class*="span"].pull-right,
.row-fluid [class*="span"].pull-right {
  float: right;
}
.container {
  margin-right: auto;
  margin-left: auto;
  *zoom: 1;
}
.container:before,
.container:after {
  display: table;
  content: "";
  line-height: 0;
}
.container:after {
  clear: both;
}
p {
  margin: 0 0 10px;
}
.lead {
  margin-bottom: 20px;
  font-size: 21px;
  font-weight: 200;
  line-height: 30px;
}
small {
  font-size: 85%;
}
h1 {
  margin: 10px 0;
  font-family: inherit;
  font-weight: bold;
  line-height: 20px;
  color: inherit;
  text-rendering: optimizelegibility;
}
h1 small {
  font-weight: normal;
  line-height: 1;
  color: #999;
}
h1 {
  line-height: 40px;
}
h1 {
  font-size: 38.5px;
}
h1 small {
  font-size: 24.5px;
}
body {
  margin-top: 90px;
}
.header {
  position: fixed;
  top: 0;
  left: 50%;
  margin-left: -480px;
  background-color: #fff;
  border-bottom: 1px solid #ddd;
  padding-top: 10px;
  z-index: 10;
}
.footer {
  color: #ddd;
  font-size: 12px;
  text-align: center;
  margin-top: 20px;
}
.footer a {
  color: #ccc;
  text-decoration: underline;
}
.the-icons {
  font-size: 14px;
  line-height: 24px;
}
.switch {
  position: absolute;
  right: 0;
  bottom: 10px;
  color: #666;
}
.switch input {
  margin-right: 0.3em;
}
.codesOn .i-name {
  display: none;
}
.codesOn .i-code {
  display: inline;
}
.i-code {
  display: none;
}
</style>
    <link rel="stylesheet" href="css/fontello.css">
    <script>
      function toggleCodes(on) {
        var obj = document.getElementById('icons');
        
        if (on) {
          obj.className += ' codesOn';
        } else {
          obj.className = obj.className.replace(' codesOn', '');
        }
      }
      
    </script>
  </head>
  <body>
    <div class="container header">
      <h1>
        icons
         <small>font demo</small>
      </h1>
      <label class="switch">
        <input type="checkbox" onclick="toggleCodes(this.checked)">show codes
      </label>
    </div>
    <div id="icons" class="container">
      <div class="row">
        <div title="Code: 0xe800" class="the-icons span3"><i class="icon-emo-happy"></i> <span class="i-name">icon-emo-happy</span><span class="i-code">0xe800</span></div>
        <div title="Code: 0xe801" class="the-icons span3"><i class="icon-emo-wink"></i> <span class="i-name">icon-emo-wink</span><span class="i-code">0xe801</span></div>
        <div title="Code: 0xe802" class="the-icons span3"><i class="icon-emo-wink2"></i> <span class="i-name">icon-emo-wink2</span><span class="i-code">0xe802</span></div>
        <div title="Code: 0xe803" class="the-icons span3"><i class="icon-emo-unhappy"></i> <span class="i-name">icon-emo-unhappy</span><span class="i-code">0xe803</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe804" class="the-icons span3"><i class="icon-emo-sleep"></i> <span class="i-name">icon-emo-sleep</span><span class="i-code">0xe804</span></div>
        <div title="Code: 0xe805" class="the-icons span3"><i class="icon-emo-thumbsup"></i> <span class="i-name">icon-emo-thumbsup</span><span class="i-code">0xe805</span></div>
        <div title="Code: 0xe806" class="the-icons span3"><i class="icon-emo-devil"></i> <span class="i-name">icon-emo-devil</span><span class="i-code">0xe806</span></div>
        <div title="Code: 0xe807" class="the-icons span3"><i class="icon-emo-surprised"></i> <span class="i-name">icon-emo-surprised</span><span class="i-code">0xe807</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe808" class="the-icons span3"><i class="icon-emo-tongue"></i> <span class="i-name">icon-emo-tongue</span><span class="i-code">0xe808</span></div>
        <div title="Code: 0xe809" class="the-icons span3"><i class="icon-emo-coffee"></i> <span class="i-name">icon-emo-coffee</span><span class="i-code">0xe809</span></div>
        <div title="Code: 0xe80a" class="the-icons span3"><i class="icon-emo-sunglasses"></i> <span class="i-name">icon-emo-sunglasses</span><span class="i-code">0xe80a</span></div>
        <div title="Code: 0xe80b" class="the-icons span3"><i class="icon-emo-displeased"></i> <span class="i-name">icon-emo-displeased</span><span class="i-code">0xe80b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe80c" class="the-icons span3"><i class="icon-emo-beer"></i> <span class="i-name">icon-emo-beer</span><span class="i-code">0xe80c</span></div>
        <div title="Code: 0xe80d" class="the-icons span3"><i class="icon-emo-grin"></i> <span class="i-name">icon-emo-grin</span><span class="i-code">0xe80d</span></div>
        <div title="Code: 0xe80e" class="the-icons span3"><i class="icon-emo-angry"></i> <span class="i-name">icon-emo-angry</span><span class="i-code">0xe80e</span></div>
        <div title="Code: 0xe80f" class="the-icons span3"><i class="icon-emo-saint"></i> <span class="i-name">icon-emo-saint</span><span class="i-code">0xe80f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe810" class="the-icons span3"><i class="icon-emo-cry"></i> <span class="i-name">icon-emo-cry</span><span class="i-code">0xe810</span></div>
        <div title="Code: 0xe811" class="the-icons span3"><i class="icon-emo-shoot"></i> <span class="i-name">icon-emo-shoot</span><span class="i-code">0xe811</span></div>
        <div title="Code: 0xe812" class="the-icons span3"><i class="icon-emo-squint"></i> <span class="i-name">icon-emo-squint</span><span class="i-code">0xe812</span></div>
        <div title="Code: 0xe813" class="the-icons span3"><i class="icon-emo-laugh"></i> <span class="i-name">icon-emo-laugh</span><span class="i-code">0xe813</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe814" class="the-icons span3"><i class="icon-spin1 animate-spin"></i> <span class="i-name">icon-spin1</span><span class="i-code">0xe814</span></div>
        <div title="Code: 0xe815" class="the-icons span3"><i class="icon-spin2 animate-spin"></i> <span class="i-name">icon-spin2</span><span class="i-code">0xe815</span></div>
        <div title="Code: 0xe816" class="the-icons span3"><i class="icon-spin3 animate-spin"></i> <span class="i-name">icon-spin3</span><span class="i-code">0xe816</span></div>
        <div title="Code: 0xe817" class="the-icons span3"><i class="icon-spin4 animate-spin"></i> <span class="i-name">icon-spin4</span><span class="i-code">0xe817</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe818" class="the-icons span3"><i class="icon-spin5 animate-spin"></i> <span class="i-name">icon-spin5</span><span class="i-code">0xe818</span></div>
        <div title="Code: 0xe819" class="the-icons span3"><i class="icon-spin6 animate-spin"></i> <span class="i-name">icon-spin6</span><span class="i-code">0xe819</span></div>
        <div title="Code: 0xe81a" class="the-icons span3"><i class="icon-firefox"></i> <span class="i-name">icon-firefox</span><span class="i-code">0xe81a</span></div>
        <div title="Code: 0xe81b" class="the-icons span3"><i class="icon-chrome"></i> <span class="i-name">icon-chrome</span><span class="i-code">0xe81b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe81c" class="the-icons span3"><i class="icon-opera"></i> <span class="i-name">icon-opera</span><span class="i-code">0xe81c</span></div>
        <div title="Code: 0xe81d" class="the-icons span3"><i class="icon-ie"></i> <span class="i-name">icon-ie</span><span class="i-code">0xe81d</span></div>
        <div title="Code: 0xe81e" class="the-icons span3"><i class="icon-crown"></i> <span class="i-name">icon-crown</span><span class="i-code">0xe81e</span></div>
        <div title="Code: 0xe81f" class="the-icons span3"><i class="icon-crown-plus"></i> <span class="i-name">icon-crown-plus</span><span class="i-code">0xe81f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe820" class="the-icons span3"><i class="icon-crown-minus"></i> <span class="i-name">icon-crown-minus</span><span class="i-code">0xe820</span></div>
        <div title="Code: 0xe821" class="the-icons span3"><i class="icon-marquee"></i> <span class="i-name">icon-marquee</span><span class="i-code">0xe821</span></div>
        <div title="Code: 0xe822" class="the-icons span3"><i class="icon-glass"></i> <span class="i-name">icon-glass</span><span class="i-code">0xe822</span></div>
        <div title="Code: 0xe823" class="the-icons span3"><i class="icon-music"></i> <span class="i-name">icon-music</span><span class="i-code">0xe823</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe824" class="the-icons span3"><i class="icon-search"></i> <span class="i-name">icon-search</span><span class="i-code">0xe824</span></div>
        <div title="Code: 0xe825" class="the-icons span3"><i class="icon-mail"></i> <span class="i-name">icon-mail</span><span class="i-code">0xe825</span></div>
        <div title="Code: 0xe826" class="the-icons span3"><i class="icon-mail-alt"></i> <span class="i-name">icon-mail-alt</span><span class="i-code">0xe826</span></div>
        <div title="Code: 0xe827" class="the-icons span3"><i class="icon-mail-squared"></i> <span class="i-name">icon-mail-squared</span><span class="i-code">0xe827</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe828" class="the-icons span3"><i class="icon-heart"></i> <span class="i-name">icon-heart</span><span class="i-code">0xe828</span></div>
        <div title="Code: 0xe829" class="the-icons span3"><i class="icon-heart-empty"></i> <span class="i-name">icon-heart-empty</span><span class="i-code">0xe829</span></div>
        <div title="Code: 0xe82a" class="the-icons span3"><i class="icon-star"></i> <span class="i-name">icon-star</span><span class="i-code">0xe82a</span></div>
        <div title="Code: 0xe82b" class="the-icons span3"><i class="icon-star-empty"></i> <span class="i-name">icon-star-empty</span><span class="i-code">0xe82b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe82c" class="the-icons span3"><i class="icon-star-half"></i> <span class="i-name">icon-star-half</span><span class="i-code">0xe82c</span></div>
        <div title="Code: 0xe82d" class="the-icons span3"><i class="icon-star-half-alt"></i> <span class="i-name">icon-star-half-alt</span><span class="i-code">0xe82d</span></div>
        <div title="Code: 0xe82e" class="the-icons span3"><i class="icon-user"></i> <span class="i-name">icon-user</span><span class="i-code">0xe82e</span></div>
        <div title="Code: 0xe82f" class="the-icons span3"><i class="icon-users"></i> <span class="i-name">icon-users</span><span class="i-code">0xe82f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe830" class="the-icons span3"><i class="icon-male"></i> <span class="i-name">icon-male</span><span class="i-code">0xe830</span></div>
        <div title="Code: 0xe831" class="the-icons span3"><i class="icon-female"></i> <span class="i-name">icon-female</span><span class="i-code">0xe831</span></div>
        <div title="Code: 0xe832" class="the-icons span3"><i class="icon-child"></i> <span class="i-name">icon-child</span><span class="i-code">0xe832</span></div>
        <div title="Code: 0xe833" class="the-icons span3"><i class="icon-video"></i> <span class="i-name">icon-video</span><span class="i-code">0xe833</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe834" class="the-icons span3"><i class="icon-videocam"></i> <span class="i-name">icon-videocam</span><span class="i-code">0xe834</span></div>
        <div title="Code: 0xe835" class="the-icons span3"><i class="icon-picture"></i> <span class="i-name">icon-picture</span><span class="i-code">0xe835</span></div>
        <div title="Code: 0xe836" class="the-icons span3"><i class="icon-camera"></i> <span class="i-name">icon-camera</span><span class="i-code">0xe836</span></div>
        <div title="Code: 0xe837" class="the-icons span3"><i class="icon-camera-alt"></i> <span class="i-name">icon-camera-alt</span><span class="i-code">0xe837</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe838" class="the-icons span3"><i class="icon-th-large"></i> <span class="i-name">icon-th-large</span><span class="i-code">0xe838</span></div>
        <div title="Code: 0xe839" class="the-icons span3"><i class="icon-th"></i> <span class="i-name">icon-th</span><span class="i-code">0xe839</span></div>
        <div title="Code: 0xe83a" class="the-icons span3"><i class="icon-th-list"></i> <span class="i-name">icon-th-list</span><span class="i-code">0xe83a</span></div>
        <div title="Code: 0xe83b" class="the-icons span3"><i class="icon-ok"></i> <span class="i-name">icon-ok</span><span class="i-code">0xe83b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe83c" class="the-icons span3"><i class="icon-ok-circled"></i> <span class="i-name">icon-ok-circled</span><span class="i-code">0xe83c</span></div>
        <div title="Code: 0xe83d" class="the-icons span3"><i class="icon-ok-circled2"></i> <span class="i-name">icon-ok-circled2</span><span class="i-code">0xe83d</span></div>
        <div title="Code: 0xe83e" class="the-icons span3"><i class="icon-ok-squared"></i> <span class="i-name">icon-ok-squared</span><span class="i-code">0xe83e</span></div>
        <div title="Code: 0xe83f" class="the-icons span3"><i class="icon-cancel"></i> <span class="i-name">icon-cancel</span><span class="i-code">0xe83f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe840" class="the-icons span3"><i class="icon-cancel-circled"></i> <span class="i-name">icon-cancel-circled</span><span class="i-code">0xe840</span></div>
        <div title="Code: 0xe841" class="the-icons span3"><i class="icon-cancel-circled2"></i> <span class="i-name">icon-cancel-circled2</span><span class="i-code">0xe841</span></div>
        <div title="Code: 0xe842" class="the-icons span3"><i class="icon-plus"></i> <span class="i-name">icon-plus</span><span class="i-code">0xe842</span></div>
        <div title="Code: 0xe843" class="the-icons span3"><i class="icon-plus-circled"></i> <span class="i-name">icon-plus-circled</span><span class="i-code">0xe843</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe844" class="the-icons span3"><i class="icon-plus-squared"></i> <span class="i-name">icon-plus-squared</span><span class="i-code">0xe844</span></div>
        <div title="Code: 0xe845" class="the-icons span3"><i class="icon-plus-squared-alt"></i> <span class="i-name">icon-plus-squared-alt</span><span class="i-code">0xe845</span></div>
        <div title="Code: 0xe846" class="the-icons span3"><i class="icon-minus"></i> <span class="i-name">icon-minus</span><span class="i-code">0xe846</span></div>
        <div title="Code: 0xe847" class="the-icons span3"><i class="icon-minus-circled"></i> <span class="i-name">icon-minus-circled</span><span class="i-code">0xe847</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe848" class="the-icons span3"><i class="icon-minus-squared"></i> <span class="i-name">icon-minus-squared</span><span class="i-code">0xe848</span></div>
        <div title="Code: 0xe849" class="the-icons span3"><i class="icon-minus-squared-alt"></i> <span class="i-name">icon-minus-squared-alt</span><span class="i-code">0xe849</span></div>
        <div title="Code: 0xe84a" class="the-icons span3"><i class="icon-help"></i> <span class="i-name">icon-help</span><span class="i-code">0xe84a</span></div>
        <div title="Code: 0xe84b" class="the-icons span3"><i class="icon-help-circled"></i> <span class="i-name">icon-help-circled</span><span class="i-code">0xe84b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe84c" class="the-icons span3"><i class="icon-info-circled"></i> <span class="i-name">icon-info-circled</span><span class="i-code">0xe84c</span></div>
        <div title="Code: 0xe84d" class="the-icons span3"><i class="icon-info"></i> <span class="i-name">icon-info</span><span class="i-code">0xe84d</span></div>
        <div title="Code: 0xe84e" class="the-icons span3"><i class="icon-home"></i> <span class="i-name">icon-home</span><span class="i-code">0xe84e</span></div>
        <div title="Code: 0xe84f" class="the-icons span3"><i class="icon-link"></i> <span class="i-name">icon-link</span><span class="i-code">0xe84f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe850" class="the-icons span3"><i class="icon-unlink"></i> <span class="i-name">icon-unlink</span><span class="i-code">0xe850</span></div>
        <div title="Code: 0xe851" class="the-icons span3"><i class="icon-link-ext"></i> <span class="i-name">icon-link-ext</span><span class="i-code">0xe851</span></div>
        <div title="Code: 0xe852" class="the-icons span3"><i class="icon-link-ext-alt"></i> <span class="i-name">icon-link-ext-alt</span><span class="i-code">0xe852</span></div>
        <div title="Code: 0xe853" class="the-icons span3"><i class="icon-attach"></i> <span class="i-name">icon-attach</span><span class="i-code">0xe853</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe854" class="the-icons span3"><i class="icon-lock"></i> <span class="i-name">icon-lock</span><span class="i-code">0xe854</span></div>
        <div title="Code: 0xe855" class="the-icons span3"><i class="icon-lock-open"></i> <span class="i-name">icon-lock-open</span><span class="i-code">0xe855</span></div>
        <div title="Code: 0xe856" class="the-icons span3"><i class="icon-lock-open-alt"></i> <span class="i-name">icon-lock-open-alt</span><span class="i-code">0xe856</span></div>
        <div title="Code: 0xe857" class="the-icons span3"><i class="icon-pin"></i> <span class="i-name">icon-pin</span><span class="i-code">0xe857</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe858" class="the-icons span3"><i class="icon-eye"></i> <span class="i-name">icon-eye</span><span class="i-code">0xe858</span></div>
        <div title="Code: 0xe859" class="the-icons span3"><i class="icon-eye-off"></i> <span class="i-name">icon-eye-off</span><span class="i-code">0xe859</span></div>
        <div title="Code: 0xe85a" class="the-icons span3"><i class="icon-tag"></i> <span class="i-name">icon-tag</span><span class="i-code">0xe85a</span></div>
        <div title="Code: 0xe85b" class="the-icons span3"><i class="icon-tags"></i> <span class="i-name">icon-tags</span><span class="i-code">0xe85b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe85c" class="the-icons span3"><i class="icon-bookmark"></i> <span class="i-name">icon-bookmark</span><span class="i-code">0xe85c</span></div>
        <div title="Code: 0xe85d" class="the-icons span3"><i class="icon-bookmark-empty"></i> <span class="i-name">icon-bookmark-empty</span><span class="i-code">0xe85d</span></div>
        <div title="Code: 0xe85e" class="the-icons span3"><i class="icon-flag"></i> <span class="i-name">icon-flag</span><span class="i-code">0xe85e</span></div>
        <div title="Code: 0xe85f" class="the-icons span3"><i class="icon-flag-empty"></i> <span class="i-name">icon-flag-empty</span><span class="i-code">0xe85f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe860" class="the-icons span3"><i class="icon-flag-checkered"></i> <span class="i-name">icon-flag-checkered</span><span class="i-code">0xe860</span></div>
        <div title="Code: 0xe861" class="the-icons span3"><i class="icon-thumbs-up"></i> <span class="i-name">icon-thumbs-up</span><span class="i-code">0xe861</span></div>
        <div title="Code: 0xe862" class="the-icons span3"><i class="icon-thumbs-down"></i> <span class="i-name">icon-thumbs-down</span><span class="i-code">0xe862</span></div>
        <div title="Code: 0xe863" class="the-icons span3"><i class="icon-thumbs-up-alt"></i> <span class="i-name">icon-thumbs-up-alt</span><span class="i-code">0xe863</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe864" class="the-icons span3"><i class="icon-thumbs-down-alt"></i> <span class="i-name">icon-thumbs-down-alt</span><span class="i-code">0xe864</span></div>
        <div title="Code: 0xe865" class="the-icons span3"><i class="icon-download"></i> <span class="i-name">icon-download</span><span class="i-code">0xe865</span></div>
        <div title="Code: 0xe866" class="the-icons span3"><i class="icon-upload"></i> <span class="i-name">icon-upload</span><span class="i-code">0xe866</span></div>
        <div title="Code: 0xe867" class="the-icons span3"><i class="icon-download-cloud"></i> <span class="i-name">icon-download-cloud</span><span class="i-code">0xe867</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe868" class="the-icons span3"><i class="icon-upload-cloud"></i> <span class="i-name">icon-upload-cloud</span><span class="i-code">0xe868</span></div>
        <div title="Code: 0xe869" class="the-icons span3"><i class="icon-reply"></i> <span class="i-name">icon-reply</span><span class="i-code">0xe869</span></div>
        <div title="Code: 0xe86a" class="the-icons span3"><i class="icon-reply-all"></i> <span class="i-name">icon-reply-all</span><span class="i-code">0xe86a</span></div>
        <div title="Code: 0xe86b" class="the-icons span3"><i class="icon-forward"></i> <span class="i-name">icon-forward</span><span class="i-code">0xe86b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe86c" class="the-icons span3"><i class="icon-quote-left"></i> <span class="i-name">icon-quote-left</span><span class="i-code">0xe86c</span></div>
        <div title="Code: 0xe86d" class="the-icons span3"><i class="icon-quote-right"></i> <span class="i-name">icon-quote-right</span><span class="i-code">0xe86d</span></div>
        <div title="Code: 0xe86e" class="the-icons span3"><i class="icon-code"></i> <span class="i-name">icon-code</span><span class="i-code">0xe86e</span></div>
        <div title="Code: 0xe86f" class="the-icons span3"><i class="icon-export"></i> <span class="i-name">icon-export</span><span class="i-code">0xe86f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe870" class="the-icons span3"><i class="icon-export-alt"></i> <span class="i-name">icon-export-alt</span><span class="i-code">0xe870</span></div>
        <div title="Code: 0xe871" class="the-icons span3"><i class="icon-share"></i> <span class="i-name">icon-share</span><span class="i-code">0xe871</span></div>
        <div title="Code: 0xe872" class="the-icons span3"><i class="icon-share-squared"></i> <span class="i-name">icon-share-squared</span><span class="i-code">0xe872</span></div>
        <div title="Code: 0xe873" class="the-icons span3"><i class="icon-pencil"></i> <span class="i-name">icon-pencil</span><span class="i-code">0xe873</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe874" class="the-icons span3"><i class="icon-pencil-squared"></i> <span class="i-name">icon-pencil-squared</span><span class="i-code">0xe874</span></div>
        <div title="Code: 0xe875" class="the-icons span3"><i class="icon-edit"></i> <span class="i-name">icon-edit</span><span class="i-code">0xe875</span></div>
        <div title="Code: 0xe876" class="the-icons span3"><i class="icon-print"></i> <span class="i-name">icon-print</span><span class="i-code">0xe876</span></div>
        <div title="Code: 0xe877" class="the-icons span3"><i class="icon-retweet"></i> <span class="i-name">icon-retweet</span><span class="i-code">0xe877</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe878" class="the-icons span3"><i class="icon-keyboard"></i> <span class="i-name">icon-keyboard</span><span class="i-code">0xe878</span></div>
        <div title="Code: 0xe879" class="the-icons span3"><i class="icon-gamepad"></i> <span class="i-name">icon-gamepad</span><span class="i-code">0xe879</span></div>
        <div title="Code: 0xe87a" class="the-icons span3"><i class="icon-comment"></i> <span class="i-name">icon-comment</span><span class="i-code">0xe87a</span></div>
        <div title="Code: 0xe87b" class="the-icons span3"><i class="icon-chat"></i> <span class="i-name">icon-chat</span><span class="i-code">0xe87b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe87c" class="the-icons span3"><i class="icon-comment-empty"></i> <span class="i-name">icon-comment-empty</span><span class="i-code">0xe87c</span></div>
        <div title="Code: 0xe87d" class="the-icons span3"><i class="icon-chat-empty"></i> <span class="i-name">icon-chat-empty</span><span class="i-code">0xe87d</span></div>
        <div title="Code: 0xe87e" class="the-icons span3"><i class="icon-bell"></i> <span class="i-name">icon-bell</span><span class="i-code">0xe87e</span></div>
        <div title="Code: 0xe87f" class="the-icons span3"><i class="icon-bell-alt"></i> <span class="i-name">icon-bell-alt</span><span class="i-code">0xe87f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe880" class="the-icons span3"><i class="icon-attention-alt"></i> <span class="i-name">icon-attention-alt</span><span class="i-code">0xe880</span></div>
        <div title="Code: 0xe881" class="the-icons span3"><i class="icon-attention"></i> <span class="i-name">icon-attention</span><span class="i-code">0xe881</span></div>
        <div title="Code: 0xe882" class="the-icons span3"><i class="icon-attention-circled"></i> <span class="i-name">icon-attention-circled</span><span class="i-code">0xe882</span></div>
        <div title="Code: 0xe883" class="the-icons span3"><i class="icon-location"></i> <span class="i-name">icon-location</span><span class="i-code">0xe883</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe884" class="the-icons span3"><i class="icon-direction"></i> <span class="i-name">icon-direction</span><span class="i-code">0xe884</span></div>
        <div title="Code: 0xe885" class="the-icons span3"><i class="icon-compass"></i> <span class="i-name">icon-compass</span><span class="i-code">0xe885</span></div>
        <div title="Code: 0xe886" class="the-icons span3"><i class="icon-trash"></i> <span class="i-name">icon-trash</span><span class="i-code">0xe886</span></div>
        <div title="Code: 0xe887" class="the-icons span3"><i class="icon-doc"></i> <span class="i-name">icon-doc</span><span class="i-code">0xe887</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe888" class="the-icons span3"><i class="icon-docs"></i> <span class="i-name">icon-docs</span><span class="i-code">0xe888</span></div>
        <div title="Code: 0xe889" class="the-icons span3"><i class="icon-doc-text"></i> <span class="i-name">icon-doc-text</span><span class="i-code">0xe889</span></div>
        <div title="Code: 0xe88a" class="the-icons span3"><i class="icon-doc-inv"></i> <span class="i-name">icon-doc-inv</span><span class="i-code">0xe88a</span></div>
        <div title="Code: 0xe88b" class="the-icons span3"><i class="icon-doc-text-inv"></i> <span class="i-name">icon-doc-text-inv</span><span class="i-code">0xe88b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe88c" class="the-icons span3"><i class="icon-file-pdf"></i> <span class="i-name">icon-file-pdf</span><span class="i-code">0xe88c</span></div>
        <div title="Code: 0xe88d" class="the-icons span3"><i class="icon-file-word"></i> <span class="i-name">icon-file-word</span><span class="i-code">0xe88d</span></div>
        <div title="Code: 0xe88e" class="the-icons span3"><i class="icon-file-excel"></i> <span class="i-name">icon-file-excel</span><span class="i-code">0xe88e</span></div>
        <div title="Code: 0xe88f" class="the-icons span3"><i class="icon-file-powerpoint"></i> <span class="i-name">icon-file-powerpoint</span><span class="i-code">0xe88f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe890" class="the-icons span3"><i class="icon-file-image"></i> <span class="i-name">icon-file-image</span><span class="i-code">0xe890</span></div>
        <div title="Code: 0xe891" class="the-icons span3"><i class="icon-file-archive"></i> <span class="i-name">icon-file-archive</span><span class="i-code">0xe891</span></div>
        <div title="Code: 0xe892" class="the-icons span3"><i class="icon-file-audio"></i> <span class="i-name">icon-file-audio</span><span class="i-code">0xe892</span></div>
        <div title="Code: 0xe893" class="the-icons span3"><i class="icon-file-video"></i> <span class="i-name">icon-file-video</span><span class="i-code">0xe893</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe894" class="the-icons span3"><i class="icon-file-code"></i> <span class="i-name">icon-file-code</span><span class="i-code">0xe894</span></div>
        <div title="Code: 0xe895" class="the-icons span3"><i class="icon-folder"></i> <span class="i-name">icon-folder</span><span class="i-code">0xe895</span></div>
        <div title="Code: 0xe896" class="the-icons span3"><i class="icon-folder-open"></i> <span class="i-name">icon-folder-open</span><span class="i-code">0xe896</span></div>
        <div title="Code: 0xe897" class="the-icons span3"><i class="icon-folder-empty"></i> <span class="i-name">icon-folder-empty</span><span class="i-code">0xe897</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe898" class="the-icons span3"><i class="icon-folder-open-empty"></i> <span class="i-name">icon-folder-open-empty</span><span class="i-code">0xe898</span></div>
        <div title="Code: 0xe899" class="the-icons span3"><i class="icon-box"></i> <span class="i-name">icon-box</span><span class="i-code">0xe899</span></div>
        <div title="Code: 0xe89a" class="the-icons span3"><i class="icon-rss"></i> <span class="i-name">icon-rss</span><span class="i-code">0xe89a</span></div>
        <div title="Code: 0xe89b" class="the-icons span3"><i class="icon-rss-squared"></i> <span class="i-name">icon-rss-squared</span><span class="i-code">0xe89b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe89c" class="the-icons span3"><i class="icon-phone"></i> <span class="i-name">icon-phone</span><span class="i-code">0xe89c</span></div>
        <div title="Code: 0xe89d" class="the-icons span3"><i class="icon-phone-squared"></i> <span class="i-name">icon-phone-squared</span><span class="i-code">0xe89d</span></div>
        <div title="Code: 0xe89e" class="the-icons span3"><i class="icon-fax"></i> <span class="i-name">icon-fax</span><span class="i-code">0xe89e</span></div>
        <div title="Code: 0xe89f" class="the-icons span3"><i class="icon-menu"></i> <span class="i-name">icon-menu</span><span class="i-code">0xe89f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8a0" class="the-icons span3"><i class="icon-cog"></i> <span class="i-name">icon-cog</span><span class="i-code">0xe8a0</span></div>
        <div title="Code: 0xe8a1" class="the-icons span3"><i class="icon-cog-alt"></i> <span class="i-name">icon-cog-alt</span><span class="i-code">0xe8a1</span></div>
        <div title="Code: 0xe8a2" class="the-icons span3"><i class="icon-wrench"></i> <span class="i-name">icon-wrench</span><span class="i-code">0xe8a2</span></div>
        <div title="Code: 0xe8a3" class="the-icons span3"><i class="icon-sliders"></i> <span class="i-name">icon-sliders</span><span class="i-code">0xe8a3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8a4" class="the-icons span3"><i class="icon-basket"></i> <span class="i-name">icon-basket</span><span class="i-code">0xe8a4</span></div>
        <div title="Code: 0xe8a5" class="the-icons span3"><i class="icon-calendar"></i> <span class="i-name">icon-calendar</span><span class="i-code">0xe8a5</span></div>
        <div title="Code: 0xe8a6" class="the-icons span3"><i class="icon-calendar-empty"></i> <span class="i-name">icon-calendar-empty</span><span class="i-code">0xe8a6</span></div>
        <div title="Code: 0xe8a7" class="the-icons span3"><i class="icon-login"></i> <span class="i-name">icon-login</span><span class="i-code">0xe8a7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8a8" class="the-icons span3"><i class="icon-logout"></i> <span class="i-name">icon-logout</span><span class="i-code">0xe8a8</span></div>
        <div title="Code: 0xe8a9" class="the-icons span3"><i class="icon-mic"></i> <span class="i-name">icon-mic</span><span class="i-code">0xe8a9</span></div>
        <div title="Code: 0xe8aa" class="the-icons span3"><i class="icon-mute"></i> <span class="i-name">icon-mute</span><span class="i-code">0xe8aa</span></div>
        <div title="Code: 0xe8ab" class="the-icons span3"><i class="icon-volume-off"></i> <span class="i-name">icon-volume-off</span><span class="i-code">0xe8ab</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8ac" class="the-icons span3"><i class="icon-volume-down"></i> <span class="i-name">icon-volume-down</span><span class="i-code">0xe8ac</span></div>
        <div title="Code: 0xe8ad" class="the-icons span3"><i class="icon-volume-up"></i> <span class="i-name">icon-volume-up</span><span class="i-code">0xe8ad</span></div>
        <div title="Code: 0xe8ae" class="the-icons span3"><i class="icon-headphones"></i> <span class="i-name">icon-headphones</span><span class="i-code">0xe8ae</span></div>
        <div title="Code: 0xe8af" class="the-icons span3"><i class="icon-clock"></i> <span class="i-name">icon-clock</span><span class="i-code">0xe8af</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8b0" class="the-icons span3"><i class="icon-lightbulb"></i> <span class="i-name">icon-lightbulb</span><span class="i-code">0xe8b0</span></div>
        <div title="Code: 0xe8b1" class="the-icons span3"><i class="icon-block"></i> <span class="i-name">icon-block</span><span class="i-code">0xe8b1</span></div>
        <div title="Code: 0xe8b2" class="the-icons span3"><i class="icon-resize-full"></i> <span class="i-name">icon-resize-full</span><span class="i-code">0xe8b2</span></div>
        <div title="Code: 0xe8b3" class="the-icons span3"><i class="icon-resize-full-alt"></i> <span class="i-name">icon-resize-full-alt</span><span class="i-code">0xe8b3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8b4" class="the-icons span3"><i class="icon-resize-small"></i> <span class="i-name">icon-resize-small</span><span class="i-code">0xe8b4</span></div>
        <div title="Code: 0xe8b5" class="the-icons span3"><i class="icon-resize-vertical"></i> <span class="i-name">icon-resize-vertical</span><span class="i-code">0xe8b5</span></div>
        <div title="Code: 0xe8b6" class="the-icons span3"><i class="icon-resize-horizontal"></i> <span class="i-name">icon-resize-horizontal</span><span class="i-code">0xe8b6</span></div>
        <div title="Code: 0xe8b7" class="the-icons span3"><i class="icon-move"></i> <span class="i-name">icon-move</span><span class="i-code">0xe8b7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8b8" class="the-icons span3"><i class="icon-zoom-in"></i> <span class="i-name">icon-zoom-in</span><span class="i-code">0xe8b8</span></div>
        <div title="Code: 0xe8b9" class="the-icons span3"><i class="icon-zoom-out"></i> <span class="i-name">icon-zoom-out</span><span class="i-code">0xe8b9</span></div>
        <div title="Code: 0xe8ba" class="the-icons span3"><i class="icon-down-circled2"></i> <span class="i-name">icon-down-circled2</span><span class="i-code">0xe8ba</span></div>
        <div title="Code: 0xe8bb" class="the-icons span3"><i class="icon-up-circled2"></i> <span class="i-name">icon-up-circled2</span><span class="i-code">0xe8bb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8bc" class="the-icons span3"><i class="icon-left-circled2"></i> <span class="i-name">icon-left-circled2</span><span class="i-code">0xe8bc</span></div>
        <div title="Code: 0xe8bd" class="the-icons span3"><i class="icon-right-circled2"></i> <span class="i-name">icon-right-circled2</span><span class="i-code">0xe8bd</span></div>
        <div title="Code: 0xe8be" class="the-icons span3"><i class="icon-down-dir"></i> <span class="i-name">icon-down-dir</span><span class="i-code">0xe8be</span></div>
        <div title="Code: 0xe8bf" class="the-icons span3"><i class="icon-up-dir"></i> <span class="i-name">icon-up-dir</span><span class="i-code">0xe8bf</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8c0" class="the-icons span3"><i class="icon-left-dir"></i> <span class="i-name">icon-left-dir</span><span class="i-code">0xe8c0</span></div>
        <div title="Code: 0xe8c1" class="the-icons span3"><i class="icon-right-dir"></i> <span class="i-name">icon-right-dir</span><span class="i-code">0xe8c1</span></div>
        <div title="Code: 0xe8c2" class="the-icons span3"><i class="icon-down-open"></i> <span class="i-name">icon-down-open</span><span class="i-code">0xe8c2</span></div>
        <div title="Code: 0xe8c3" class="the-icons span3"><i class="icon-left-open"></i> <span class="i-name">icon-left-open</span><span class="i-code">0xe8c3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8c4" class="the-icons span3"><i class="icon-right-open"></i> <span class="i-name">icon-right-open</span><span class="i-code">0xe8c4</span></div>
        <div title="Code: 0xe8c5" class="the-icons span3"><i class="icon-up-open"></i> <span class="i-name">icon-up-open</span><span class="i-code">0xe8c5</span></div>
        <div title="Code: 0xe8c6" class="the-icons span3"><i class="icon-angle-left"></i> <span class="i-name">icon-angle-left</span><span class="i-code">0xe8c6</span></div>
        <div title="Code: 0xe8c7" class="the-icons span3"><i class="icon-angle-right"></i> <span class="i-name">icon-angle-right</span><span class="i-code">0xe8c7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8c8" class="the-icons span3"><i class="icon-angle-up"></i> <span class="i-name">icon-angle-up</span><span class="i-code">0xe8c8</span></div>
        <div title="Code: 0xe8c9" class="the-icons span3"><i class="icon-angle-down"></i> <span class="i-name">icon-angle-down</span><span class="i-code">0xe8c9</span></div>
        <div title="Code: 0xe8ca" class="the-icons span3"><i class="icon-angle-circled-left"></i> <span class="i-name">icon-angle-circled-left</span><span class="i-code">0xe8ca</span></div>
        <div title="Code: 0xe8cb" class="the-icons span3"><i class="icon-angle-circled-right"></i> <span class="i-name">icon-angle-circled-right</span><span class="i-code">0xe8cb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8cc" class="the-icons span3"><i class="icon-angle-circled-up"></i> <span class="i-name">icon-angle-circled-up</span><span class="i-code">0xe8cc</span></div>
        <div title="Code: 0xe8cd" class="the-icons span3"><i class="icon-angle-circled-down"></i> <span class="i-name">icon-angle-circled-down</span><span class="i-code">0xe8cd</span></div>
        <div title="Code: 0xe8ce" class="the-icons span3"><i class="icon-angle-double-left"></i> <span class="i-name">icon-angle-double-left</span><span class="i-code">0xe8ce</span></div>
        <div title="Code: 0xe8cf" class="the-icons span3"><i class="icon-angle-double-right"></i> <span class="i-name">icon-angle-double-right</span><span class="i-code">0xe8cf</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8d0" class="the-icons span3"><i class="icon-angle-double-up"></i> <span class="i-name">icon-angle-double-up</span><span class="i-code">0xe8d0</span></div>
        <div title="Code: 0xe8d1" class="the-icons span3"><i class="icon-angle-double-down"></i> <span class="i-name">icon-angle-double-down</span><span class="i-code">0xe8d1</span></div>
        <div title="Code: 0xe8d2" class="the-icons span3"><i class="icon-down"></i> <span class="i-name">icon-down</span><span class="i-code">0xe8d2</span></div>
        <div title="Code: 0xe8d3" class="the-icons span3"><i class="icon-left"></i> <span class="i-name">icon-left</span><span class="i-code">0xe8d3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8d4" class="the-icons span3"><i class="icon-right"></i> <span class="i-name">icon-right</span><span class="i-code">0xe8d4</span></div>
        <div title="Code: 0xe8d5" class="the-icons span3"><i class="icon-up"></i> <span class="i-name">icon-up</span><span class="i-code">0xe8d5</span></div>
        <div title="Code: 0xe8d6" class="the-icons span3"><i class="icon-down-big"></i> <span class="i-name">icon-down-big</span><span class="i-code">0xe8d6</span></div>
        <div title="Code: 0xe8d7" class="the-icons span3"><i class="icon-left-big"></i> <span class="i-name">icon-left-big</span><span class="i-code">0xe8d7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8d8" class="the-icons span3"><i class="icon-right-big"></i> <span class="i-name">icon-right-big</span><span class="i-code">0xe8d8</span></div>
        <div title="Code: 0xe8d9" class="the-icons span3"><i class="icon-up-big"></i> <span class="i-name">icon-up-big</span><span class="i-code">0xe8d9</span></div>
        <div title="Code: 0xe8da" class="the-icons span3"><i class="icon-right-hand"></i> <span class="i-name">icon-right-hand</span><span class="i-code">0xe8da</span></div>
        <div title="Code: 0xe8db" class="the-icons span3"><i class="icon-left-hand"></i> <span class="i-name">icon-left-hand</span><span class="i-code">0xe8db</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8dc" class="the-icons span3"><i class="icon-up-hand"></i> <span class="i-name">icon-up-hand</span><span class="i-code">0xe8dc</span></div>
        <div title="Code: 0xe8dd" class="the-icons span3"><i class="icon-down-hand"></i> <span class="i-name">icon-down-hand</span><span class="i-code">0xe8dd</span></div>
        <div title="Code: 0xe8de" class="the-icons span3"><i class="icon-left-circled"></i> <span class="i-name">icon-left-circled</span><span class="i-code">0xe8de</span></div>
        <div title="Code: 0xe8df" class="the-icons span3"><i class="icon-right-circled"></i> <span class="i-name">icon-right-circled</span><span class="i-code">0xe8df</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8e0" class="the-icons span3"><i class="icon-up-circled"></i> <span class="i-name">icon-up-circled</span><span class="i-code">0xe8e0</span></div>
        <div title="Code: 0xe8e1" class="the-icons span3"><i class="icon-down-circled"></i> <span class="i-name">icon-down-circled</span><span class="i-code">0xe8e1</span></div>
        <div title="Code: 0xe8e2" class="the-icons span3"><i class="icon-cw"></i> <span class="i-name">icon-cw</span><span class="i-code">0xe8e2</span></div>
        <div title="Code: 0xe8e3" class="the-icons span3"><i class="icon-ccw"></i> <span class="i-name">icon-ccw</span><span class="i-code">0xe8e3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8e4" class="the-icons span3"><i class="icon-arrows-cw"></i> <span class="i-name">icon-arrows-cw</span><span class="i-code">0xe8e4</span></div>
        <div title="Code: 0xe8e5" class="the-icons span3"><i class="icon-level-up"></i> <span class="i-name">icon-level-up</span><span class="i-code">0xe8e5</span></div>
        <div title="Code: 0xe8e6" class="the-icons span3"><i class="icon-level-down"></i> <span class="i-name">icon-level-down</span><span class="i-code">0xe8e6</span></div>
        <div title="Code: 0xe8e7" class="the-icons span3"><i class="icon-shuffle"></i> <span class="i-name">icon-shuffle</span><span class="i-code">0xe8e7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8e8" class="the-icons span3"><i class="icon-exchange"></i> <span class="i-name">icon-exchange</span><span class="i-code">0xe8e8</span></div>
        <div title="Code: 0xe8e9" class="the-icons span3"><i class="icon-history"></i> <span class="i-name">icon-history</span><span class="i-code">0xe8e9</span></div>
        <div title="Code: 0xe8ea" class="the-icons span3"><i class="icon-expand"></i> <span class="i-name">icon-expand</span><span class="i-code">0xe8ea</span></div>
        <div title="Code: 0xe8eb" class="the-icons span3"><i class="icon-collapse"></i> <span class="i-name">icon-collapse</span><span class="i-code">0xe8eb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8ec" class="the-icons span3"><i class="icon-expand-right"></i> <span class="i-name">icon-expand-right</span><span class="i-code">0xe8ec</span></div>
        <div title="Code: 0xe8ed" class="the-icons span3"><i class="icon-collapse-left"></i> <span class="i-name">icon-collapse-left</span><span class="i-code">0xe8ed</span></div>
        <div title="Code: 0xe8ee" class="the-icons span3"><i class="icon-play"></i> <span class="i-name">icon-play</span><span class="i-code">0xe8ee</span></div>
        <div title="Code: 0xe8ef" class="the-icons span3"><i class="icon-play-circled"></i> <span class="i-name">icon-play-circled</span><span class="i-code">0xe8ef</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8f0" class="the-icons span3"><i class="icon-play-circled2"></i> <span class="i-name">icon-play-circled2</span><span class="i-code">0xe8f0</span></div>
        <div title="Code: 0xe8f1" class="the-icons span3"><i class="icon-stop"></i> <span class="i-name">icon-stop</span><span class="i-code">0xe8f1</span></div>
        <div title="Code: 0xe8f2" class="the-icons span3"><i class="icon-pause"></i> <span class="i-name">icon-pause</span><span class="i-code">0xe8f2</span></div>
        <div title="Code: 0xe8f3" class="the-icons span3"><i class="icon-to-end"></i> <span class="i-name">icon-to-end</span><span class="i-code">0xe8f3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8f4" class="the-icons span3"><i class="icon-to-end-alt"></i> <span class="i-name">icon-to-end-alt</span><span class="i-code">0xe8f4</span></div>
        <div title="Code: 0xe8f5" class="the-icons span3"><i class="icon-to-start"></i> <span class="i-name">icon-to-start</span><span class="i-code">0xe8f5</span></div>
        <div title="Code: 0xe8f6" class="the-icons span3"><i class="icon-to-start-alt"></i> <span class="i-name">icon-to-start-alt</span><span class="i-code">0xe8f6</span></div>
        <div title="Code: 0xe8f7" class="the-icons span3"><i class="icon-fast-fw"></i> <span class="i-name">icon-fast-fw</span><span class="i-code">0xe8f7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8f8" class="the-icons span3"><i class="icon-fast-bw"></i> <span class="i-name">icon-fast-bw</span><span class="i-code">0xe8f8</span></div>
        <div title="Code: 0xe8f9" class="the-icons span3"><i class="icon-eject"></i> <span class="i-name">icon-eject</span><span class="i-code">0xe8f9</span></div>
        <div title="Code: 0xe8fa" class="the-icons span3"><i class="icon-target"></i> <span class="i-name">icon-target</span><span class="i-code">0xe8fa</span></div>
        <div title="Code: 0xe8fb" class="the-icons span3"><i class="icon-signal"></i> <span class="i-name">icon-signal</span><span class="i-code">0xe8fb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe8fc" class="the-icons span3"><i class="icon-award"></i> <span class="i-name">icon-award</span><span class="i-code">0xe8fc</span></div>
        <div title="Code: 0xe8fd" class="the-icons span3"><i class="icon-desktop"></i> <span class="i-name">icon-desktop</span><span class="i-code">0xe8fd</span></div>
        <div title="Code: 0xe8fe" class="the-icons span3"><i class="icon-laptop"></i> <span class="i-name">icon-laptop</span><span class="i-code">0xe8fe</span></div>
        <div title="Code: 0xe8ff" class="the-icons span3"><i class="icon-tablet"></i> <span class="i-name">icon-tablet</span><span class="i-code">0xe8ff</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe900" class="the-icons span3"><i class="icon-mobile"></i> <span class="i-name">icon-mobile</span><span class="i-code">0xe900</span></div>
        <div title="Code: 0xe901" class="the-icons span3"><i class="icon-inbox"></i> <span class="i-name">icon-inbox</span><span class="i-code">0xe901</span></div>
        <div title="Code: 0xe902" class="the-icons span3"><i class="icon-globe"></i> <span class="i-name">icon-globe</span><span class="i-code">0xe902</span></div>
        <div title="Code: 0xe903" class="the-icons span3"><i class="icon-sun"></i> <span class="i-name">icon-sun</span><span class="i-code">0xe903</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe904" class="the-icons span3"><i class="icon-cloud"></i> <span class="i-name">icon-cloud</span><span class="i-code">0xe904</span></div>
        <div title="Code: 0xe905" class="the-icons span3"><i class="icon-flash"></i> <span class="i-name">icon-flash</span><span class="i-code">0xe905</span></div>
        <div title="Code: 0xe906" class="the-icons span3"><i class="icon-moon"></i> <span class="i-name">icon-moon</span><span class="i-code">0xe906</span></div>
        <div title="Code: 0xe907" class="the-icons span3"><i class="icon-umbrella"></i> <span class="i-name">icon-umbrella</span><span class="i-code">0xe907</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe908" class="the-icons span3"><i class="icon-flight"></i> <span class="i-name">icon-flight</span><span class="i-code">0xe908</span></div>
        <div title="Code: 0xe909" class="the-icons span3"><i class="icon-fighter-jet"></i> <span class="i-name">icon-fighter-jet</span><span class="i-code">0xe909</span></div>
        <div title="Code: 0xe90a" class="the-icons span3"><i class="icon-paper-plane"></i> <span class="i-name">icon-paper-plane</span><span class="i-code">0xe90a</span></div>
        <div title="Code: 0xe90b" class="the-icons span3"><i class="icon-paper-plane-empty"></i> <span class="i-name">icon-paper-plane-empty</span><span class="i-code">0xe90b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe90c" class="the-icons span3"><i class="icon-space-shuttle"></i> <span class="i-name">icon-space-shuttle</span><span class="i-code">0xe90c</span></div>
        <div title="Code: 0xe90d" class="the-icons span3"><i class="icon-leaf"></i> <span class="i-name">icon-leaf</span><span class="i-code">0xe90d</span></div>
        <div title="Code: 0xe90e" class="the-icons span3"><i class="icon-font"></i> <span class="i-name">icon-font</span><span class="i-code">0xe90e</span></div>
        <div title="Code: 0xe90f" class="the-icons span3"><i class="icon-bold"></i> <span class="i-name">icon-bold</span><span class="i-code">0xe90f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe910" class="the-icons span3"><i class="icon-italic"></i> <span class="i-name">icon-italic</span><span class="i-code">0xe910</span></div>
        <div title="Code: 0xe911" class="the-icons span3"><i class="icon-header"></i> <span class="i-name">icon-header</span><span class="i-code">0xe911</span></div>
        <div title="Code: 0xe912" class="the-icons span3"><i class="icon-paragraph"></i> <span class="i-name">icon-paragraph</span><span class="i-code">0xe912</span></div>
        <div title="Code: 0xe913" class="the-icons span3"><i class="icon-text-height"></i> <span class="i-name">icon-text-height</span><span class="i-code">0xe913</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe914" class="the-icons span3"><i class="icon-text-width"></i> <span class="i-name">icon-text-width</span><span class="i-code">0xe914</span></div>
        <div title="Code: 0xe915" class="the-icons span3"><i class="icon-align-left"></i> <span class="i-name">icon-align-left</span><span class="i-code">0xe915</span></div>
        <div title="Code: 0xe916" class="the-icons span3"><i class="icon-align-center"></i> <span class="i-name">icon-align-center</span><span class="i-code">0xe916</span></div>
        <div title="Code: 0xe917" class="the-icons span3"><i class="icon-align-right"></i> <span class="i-name">icon-align-right</span><span class="i-code">0xe917</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe918" class="the-icons span3"><i class="icon-align-justify"></i> <span class="i-name">icon-align-justify</span><span class="i-code">0xe918</span></div>
        <div title="Code: 0xe919" class="the-icons span3"><i class="icon-list"></i> <span class="i-name">icon-list</span><span class="i-code">0xe919</span></div>
        <div title="Code: 0xe91a" class="the-icons span3"><i class="icon-indent-left"></i> <span class="i-name">icon-indent-left</span><span class="i-code">0xe91a</span></div>
        <div title="Code: 0xe91b" class="the-icons span3"><i class="icon-indent-right"></i> <span class="i-name">icon-indent-right</span><span class="i-code">0xe91b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe91c" class="the-icons span3"><i class="icon-list-bullet"></i> <span class="i-name">icon-list-bullet</span><span class="i-code">0xe91c</span></div>
        <div title="Code: 0xe91d" class="the-icons span3"><i class="icon-list-numbered"></i> <span class="i-name">icon-list-numbered</span><span class="i-code">0xe91d</span></div>
        <div title="Code: 0xe91e" class="the-icons span3"><i class="icon-strike"></i> <span class="i-name">icon-strike</span><span class="i-code">0xe91e</span></div>
        <div title="Code: 0xe91f" class="the-icons span3"><i class="icon-underline"></i> <span class="i-name">icon-underline</span><span class="i-code">0xe91f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe920" class="the-icons span3"><i class="icon-superscript"></i> <span class="i-name">icon-superscript</span><span class="i-code">0xe920</span></div>
        <div title="Code: 0xe921" class="the-icons span3"><i class="icon-subscript"></i> <span class="i-name">icon-subscript</span><span class="i-code">0xe921</span></div>
        <div title="Code: 0xe922" class="the-icons span3"><i class="icon-table"></i> <span class="i-name">icon-table</span><span class="i-code">0xe922</span></div>
        <div title="Code: 0xe923" class="the-icons span3"><i class="icon-columns"></i> <span class="i-name">icon-columns</span><span class="i-code">0xe923</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe924" class="the-icons span3"><i class="icon-crop"></i> <span class="i-name">icon-crop</span><span class="i-code">0xe924</span></div>
        <div title="Code: 0xe925" class="the-icons span3"><i class="icon-scissors"></i> <span class="i-name">icon-scissors</span><span class="i-code">0xe925</span></div>
        <div title="Code: 0xe926" class="the-icons span3"><i class="icon-paste"></i> <span class="i-name">icon-paste</span><span class="i-code">0xe926</span></div>
        <div title="Code: 0xe927" class="the-icons span3"><i class="icon-briefcase"></i> <span class="i-name">icon-briefcase</span><span class="i-code">0xe927</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe928" class="the-icons span3"><i class="icon-suitcase"></i> <span class="i-name">icon-suitcase</span><span class="i-code">0xe928</span></div>
        <div title="Code: 0xe929" class="the-icons span3"><i class="icon-ellipsis"></i> <span class="i-name">icon-ellipsis</span><span class="i-code">0xe929</span></div>
        <div title="Code: 0xe92a" class="the-icons span3"><i class="icon-ellipsis-vert"></i> <span class="i-name">icon-ellipsis-vert</span><span class="i-code">0xe92a</span></div>
        <div title="Code: 0xe92b" class="the-icons span3"><i class="icon-off"></i> <span class="i-name">icon-off</span><span class="i-code">0xe92b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe92c" class="the-icons span3"><i class="icon-road"></i> <span class="i-name">icon-road</span><span class="i-code">0xe92c</span></div>
        <div title="Code: 0xe92d" class="the-icons span3"><i class="icon-list-alt"></i> <span class="i-name">icon-list-alt</span><span class="i-code">0xe92d</span></div>
        <div title="Code: 0xe92e" class="the-icons span3"><i class="icon-qrcode"></i> <span class="i-name">icon-qrcode</span><span class="i-code">0xe92e</span></div>
        <div title="Code: 0xe92f" class="the-icons span3"><i class="icon-barcode"></i> <span class="i-name">icon-barcode</span><span class="i-code">0xe92f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe930" class="the-icons span3"><i class="icon-book"></i> <span class="i-name">icon-book</span><span class="i-code">0xe930</span></div>
        <div title="Code: 0xe931" class="the-icons span3"><i class="icon-ajust"></i> <span class="i-name">icon-ajust</span><span class="i-code">0xe931</span></div>
        <div title="Code: 0xe932" class="the-icons span3"><i class="icon-tint"></i> <span class="i-name">icon-tint</span><span class="i-code">0xe932</span></div>
        <div title="Code: 0xe933" class="the-icons span3"><i class="icon-check"></i> <span class="i-name">icon-check</span><span class="i-code">0xe933</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe934" class="the-icons span3"><i class="icon-check-empty"></i> <span class="i-name">icon-check-empty</span><span class="i-code">0xe934</span></div>
        <div title="Code: 0xe935" class="the-icons span3"><i class="icon-circle"></i> <span class="i-name">icon-circle</span><span class="i-code">0xe935</span></div>
        <div title="Code: 0xe936" class="the-icons span3"><i class="icon-circle-empty"></i> <span class="i-name">icon-circle-empty</span><span class="i-code">0xe936</span></div>
        <div title="Code: 0xe937" class="the-icons span3"><i class="icon-circle-thin"></i> <span class="i-name">icon-circle-thin</span><span class="i-code">0xe937</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe938" class="the-icons span3"><i class="icon-circle-notch"></i> <span class="i-name">icon-circle-notch</span><span class="i-code">0xe938</span></div>
        <div title="Code: 0xe939" class="the-icons span3"><i class="icon-dot-circled"></i> <span class="i-name">icon-dot-circled</span><span class="i-code">0xe939</span></div>
        <div title="Code: 0xe93a" class="the-icons span3"><i class="icon-asterisk"></i> <span class="i-name">icon-asterisk</span><span class="i-code">0xe93a</span></div>
        <div title="Code: 0xe93b" class="the-icons span3"><i class="icon-gift"></i> <span class="i-name">icon-gift</span><span class="i-code">0xe93b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe93c" class="the-icons span3"><i class="icon-fire"></i> <span class="i-name">icon-fire</span><span class="i-code">0xe93c</span></div>
        <div title="Code: 0xe93d" class="the-icons span3"><i class="icon-magnet"></i> <span class="i-name">icon-magnet</span><span class="i-code">0xe93d</span></div>
        <div title="Code: 0xe93e" class="the-icons span3"><i class="icon-chart-bar"></i> <span class="i-name">icon-chart-bar</span><span class="i-code">0xe93e</span></div>
        <div title="Code: 0xe93f" class="the-icons span3"><i class="icon-ticket"></i> <span class="i-name">icon-ticket</span><span class="i-code">0xe93f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe940" class="the-icons span3"><i class="icon-credit-card"></i> <span class="i-name">icon-credit-card</span><span class="i-code">0xe940</span></div>
        <div title="Code: 0xe941" class="the-icons span3"><i class="icon-floppy"></i> <span class="i-name">icon-floppy</span><span class="i-code">0xe941</span></div>
        <div title="Code: 0xe942" class="the-icons span3"><i class="icon-megaphone"></i> <span class="i-name">icon-megaphone</span><span class="i-code">0xe942</span></div>
        <div title="Code: 0xe943" class="the-icons span3"><i class="icon-hdd"></i> <span class="i-name">icon-hdd</span><span class="i-code">0xe943</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe944" class="the-icons span3"><i class="icon-key"></i> <span class="i-name">icon-key</span><span class="i-code">0xe944</span></div>
        <div title="Code: 0xe945" class="the-icons span3"><i class="icon-fork"></i> <span class="i-name">icon-fork</span><span class="i-code">0xe945</span></div>
        <div title="Code: 0xe946" class="the-icons span3"><i class="icon-rocket"></i> <span class="i-name">icon-rocket</span><span class="i-code">0xe946</span></div>
        <div title="Code: 0xe947" class="the-icons span3"><i class="icon-bug"></i> <span class="i-name">icon-bug</span><span class="i-code">0xe947</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe948" class="the-icons span3"><i class="icon-certificate"></i> <span class="i-name">icon-certificate</span><span class="i-code">0xe948</span></div>
        <div title="Code: 0xe949" class="the-icons span3"><i class="icon-tasks"></i> <span class="i-name">icon-tasks</span><span class="i-code">0xe949</span></div>
        <div title="Code: 0xe94a" class="the-icons span3"><i class="icon-filter"></i> <span class="i-name">icon-filter</span><span class="i-code">0xe94a</span></div>
        <div title="Code: 0xe94b" class="the-icons span3"><i class="icon-beaker"></i> <span class="i-name">icon-beaker</span><span class="i-code">0xe94b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe94c" class="the-icons span3"><i class="icon-magic"></i> <span class="i-name">icon-magic</span><span class="i-code">0xe94c</span></div>
        <div title="Code: 0xe94d" class="the-icons span3"><i class="icon-cab"></i> <span class="i-name">icon-cab</span><span class="i-code">0xe94d</span></div>
        <div title="Code: 0xe94e" class="the-icons span3"><i class="icon-taxi"></i> <span class="i-name">icon-taxi</span><span class="i-code">0xe94e</span></div>
        <div title="Code: 0xe94f" class="the-icons span3"><i class="icon-truck"></i> <span class="i-name">icon-truck</span><span class="i-code">0xe94f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe950" class="the-icons span3"><i class="icon-money"></i> <span class="i-name">icon-money</span><span class="i-code">0xe950</span></div>
        <div title="Code: 0xe951" class="the-icons span3"><i class="icon-euro"></i> <span class="i-name">icon-euro</span><span class="i-code">0xe951</span></div>
        <div title="Code: 0xe952" class="the-icons span3"><i class="icon-pound"></i> <span class="i-name">icon-pound</span><span class="i-code">0xe952</span></div>
        <div title="Code: 0xe953" class="the-icons span3"><i class="icon-dollar"></i> <span class="i-name">icon-dollar</span><span class="i-code">0xe953</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe954" class="the-icons span3"><i class="icon-rupee"></i> <span class="i-name">icon-rupee</span><span class="i-code">0xe954</span></div>
        <div title="Code: 0xe955" class="the-icons span3"><i class="icon-yen"></i> <span class="i-name">icon-yen</span><span class="i-code">0xe955</span></div>
        <div title="Code: 0xe956" class="the-icons span3"><i class="icon-rouble"></i> <span class="i-name">icon-rouble</span><span class="i-code">0xe956</span></div>
        <div title="Code: 0xe957" class="the-icons span3"><i class="icon-try"></i> <span class="i-name">icon-try</span><span class="i-code">0xe957</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe958" class="the-icons span3"><i class="icon-won"></i> <span class="i-name">icon-won</span><span class="i-code">0xe958</span></div>
        <div title="Code: 0xe959" class="the-icons span3"><i class="icon-bitcoin"></i> <span class="i-name">icon-bitcoin</span><span class="i-code">0xe959</span></div>
        <div title="Code: 0xe95a" class="the-icons span3"><i class="icon-sort"></i> <span class="i-name">icon-sort</span><span class="i-code">0xe95a</span></div>
        <div title="Code: 0xe95b" class="the-icons span3"><i class="icon-sort-down"></i> <span class="i-name">icon-sort-down</span><span class="i-code">0xe95b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe95c" class="the-icons span3"><i class="icon-sort-up"></i> <span class="i-name">icon-sort-up</span><span class="i-code">0xe95c</span></div>
        <div title="Code: 0xe95d" class="the-icons span3"><i class="icon-sort-alt-up"></i> <span class="i-name">icon-sort-alt-up</span><span class="i-code">0xe95d</span></div>
        <div title="Code: 0xe95e" class="the-icons span3"><i class="icon-sort-alt-down"></i> <span class="i-name">icon-sort-alt-down</span><span class="i-code">0xe95e</span></div>
        <div title="Code: 0xe95f" class="the-icons span3"><i class="icon-sort-name-up"></i> <span class="i-name">icon-sort-name-up</span><span class="i-code">0xe95f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe960" class="the-icons span3"><i class="icon-sort-name-down"></i> <span class="i-name">icon-sort-name-down</span><span class="i-code">0xe960</span></div>
        <div title="Code: 0xe961" class="the-icons span3"><i class="icon-sort-number-up"></i> <span class="i-name">icon-sort-number-up</span><span class="i-code">0xe961</span></div>
        <div title="Code: 0xe962" class="the-icons span3"><i class="icon-sort-number-down"></i> <span class="i-name">icon-sort-number-down</span><span class="i-code">0xe962</span></div>
        <div title="Code: 0xe963" class="the-icons span3"><i class="icon-hammer"></i> <span class="i-name">icon-hammer</span><span class="i-code">0xe963</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe964" class="the-icons span3"><i class="icon-gauge"></i> <span class="i-name">icon-gauge</span><span class="i-code">0xe964</span></div>
        <div title="Code: 0xe965" class="the-icons span3"><i class="icon-sitemap"></i> <span class="i-name">icon-sitemap</span><span class="i-code">0xe965</span></div>
        <div title="Code: 0xe966" class="the-icons span3"><i class="icon-spinner"></i> <span class="i-name">icon-spinner</span><span class="i-code">0xe966</span></div>
        <div title="Code: 0xe967" class="the-icons span3"><i class="icon-coffee"></i> <span class="i-name">icon-coffee</span><span class="i-code">0xe967</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe968" class="the-icons span3"><i class="icon-food"></i> <span class="i-name">icon-food</span><span class="i-code">0xe968</span></div>
        <div title="Code: 0xe969" class="the-icons span3"><i class="icon-beer"></i> <span class="i-name">icon-beer</span><span class="i-code">0xe969</span></div>
        <div title="Code: 0xe96a" class="the-icons span3"><i class="icon-user-md"></i> <span class="i-name">icon-user-md</span><span class="i-code">0xe96a</span></div>
        <div title="Code: 0xe96b" class="the-icons span3"><i class="icon-stethoscope"></i> <span class="i-name">icon-stethoscope</span><span class="i-code">0xe96b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe96c" class="the-icons span3"><i class="icon-ambulance"></i> <span class="i-name">icon-ambulance</span><span class="i-code">0xe96c</span></div>
        <div title="Code: 0xe96d" class="the-icons span3"><i class="icon-medkit"></i> <span class="i-name">icon-medkit</span><span class="i-code">0xe96d</span></div>
        <div title="Code: 0xe96e" class="the-icons span3"><i class="icon-h-sigh"></i> <span class="i-name">icon-h-sigh</span><span class="i-code">0xe96e</span></div>
        <div title="Code: 0xe96f" class="the-icons span3"><i class="icon-hospital"></i> <span class="i-name">icon-hospital</span><span class="i-code">0xe96f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe970" class="the-icons span3"><i class="icon-building"></i> <span class="i-name">icon-building</span><span class="i-code">0xe970</span></div>
        <div title="Code: 0xe971" class="the-icons span3"><i class="icon-building-filled"></i> <span class="i-name">icon-building-filled</span><span class="i-code">0xe971</span></div>
        <div title="Code: 0xe972" class="the-icons span3"><i class="icon-bank"></i> <span class="i-name">icon-bank</span><span class="i-code">0xe972</span></div>
        <div title="Code: 0xe973" class="the-icons span3"><i class="icon-smile"></i> <span class="i-name">icon-smile</span><span class="i-code">0xe973</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe974" class="the-icons span3"><i class="icon-frown"></i> <span class="i-name">icon-frown</span><span class="i-code">0xe974</span></div>
        <div title="Code: 0xe975" class="the-icons span3"><i class="icon-meh"></i> <span class="i-name">icon-meh</span><span class="i-code">0xe975</span></div>
        <div title="Code: 0xe976" class="the-icons span3"><i class="icon-anchor"></i> <span class="i-name">icon-anchor</span><span class="i-code">0xe976</span></div>
        <div title="Code: 0xe977" class="the-icons span3"><i class="icon-terminal"></i> <span class="i-name">icon-terminal</span><span class="i-code">0xe977</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe978" class="the-icons span3"><i class="icon-eraser"></i> <span class="i-name">icon-eraser</span><span class="i-code">0xe978</span></div>
        <div title="Code: 0xe979" class="the-icons span3"><i class="icon-puzzle"></i> <span class="i-name">icon-puzzle</span><span class="i-code">0xe979</span></div>
        <div title="Code: 0xe97a" class="the-icons span3"><i class="icon-shield"></i> <span class="i-name">icon-shield</span><span class="i-code">0xe97a</span></div>
        <div title="Code: 0xe97b" class="the-icons span3"><i class="icon-extinguisher"></i> <span class="i-name">icon-extinguisher</span><span class="i-code">0xe97b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe97c" class="the-icons span3"><i class="icon-bullseye"></i> <span class="i-name">icon-bullseye</span><span class="i-code">0xe97c</span></div>
        <div title="Code: 0xe97d" class="the-icons span3"><i class="icon-wheelchair"></i> <span class="i-name">icon-wheelchair</span><span class="i-code">0xe97d</span></div>
        <div title="Code: 0xe97e" class="the-icons span3"><i class="icon-language"></i> <span class="i-name">icon-language</span><span class="i-code">0xe97e</span></div>
        <div title="Code: 0xe97f" class="the-icons span3"><i class="icon-graduation-cap"></i> <span class="i-name">icon-graduation-cap</span><span class="i-code">0xe97f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe980" class="the-icons span3"><i class="icon-paw"></i> <span class="i-name">icon-paw</span><span class="i-code">0xe980</span></div>
        <div title="Code: 0xe981" class="the-icons span3"><i class="icon-spoon"></i> <span class="i-name">icon-spoon</span><span class="i-code">0xe981</span></div>
        <div title="Code: 0xe982" class="the-icons span3"><i class="icon-cube"></i> <span class="i-name">icon-cube</span><span class="i-code">0xe982</span></div>
        <div title="Code: 0xe983" class="the-icons span3"><i class="icon-cubes"></i> <span class="i-name">icon-cubes</span><span class="i-code">0xe983</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe984" class="the-icons span3"><i class="icon-recycle"></i> <span class="i-name">icon-recycle</span><span class="i-code">0xe984</span></div>
        <div title="Code: 0xe985" class="the-icons span3"><i class="icon-tree"></i> <span class="i-name">icon-tree</span><span class="i-code">0xe985</span></div>
        <div title="Code: 0xe986" class="the-icons span3"><i class="icon-database"></i> <span class="i-name">icon-database</span><span class="i-code">0xe986</span></div>
        <div title="Code: 0xe987" class="the-icons span3"><i class="icon-lifebuoy"></i> <span class="i-name">icon-lifebuoy</span><span class="i-code">0xe987</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe988" class="the-icons span3"><i class="icon-rebel"></i> <span class="i-name">icon-rebel</span><span class="i-code">0xe988</span></div>
        <div title="Code: 0xe989" class="the-icons span3"><i class="icon-empire"></i> <span class="i-name">icon-empire</span><span class="i-code">0xe989</span></div>
        <div title="Code: 0xe98a" class="the-icons span3"><i class="icon-bomb"></i> <span class="i-name">icon-bomb</span><span class="i-code">0xe98a</span></div>
        <div title="Code: 0xe98b" class="the-icons span3"><i class="icon-adn"></i> <span class="i-name">icon-adn</span><span class="i-code">0xe98b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe98c" class="the-icons span3"><i class="icon-android"></i> <span class="i-name">icon-android</span><span class="i-code">0xe98c</span></div>
        <div title="Code: 0xe98d" class="the-icons span3"><i class="icon-apple"></i> <span class="i-name">icon-apple</span><span class="i-code">0xe98d</span></div>
        <div title="Code: 0xe98e" class="the-icons span3"><i class="icon-behance"></i> <span class="i-name">icon-behance</span><span class="i-code">0xe98e</span></div>
        <div title="Code: 0xe98f" class="the-icons span3"><i class="icon-behance-squared"></i> <span class="i-name">icon-behance-squared</span><span class="i-code">0xe98f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe990" class="the-icons span3"><i class="icon-bitbucket"></i> <span class="i-name">icon-bitbucket</span><span class="i-code">0xe990</span></div>
        <div title="Code: 0xe991" class="the-icons span3"><i class="icon-bitbucket-squared"></i> <span class="i-name">icon-bitbucket-squared</span><span class="i-code">0xe991</span></div>
        <div title="Code: 0xe992" class="the-icons span3"><i class="icon-codeopen"></i> <span class="i-name">icon-codeopen</span><span class="i-code">0xe992</span></div>
        <div title="Code: 0xe993" class="the-icons span3"><i class="icon-css3"></i> <span class="i-name">icon-css3</span><span class="i-code">0xe993</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe994" class="the-icons span3"><i class="icon-delicious"></i> <span class="i-name">icon-delicious</span><span class="i-code">0xe994</span></div>
        <div title="Code: 0xe995" class="the-icons span3"><i class="icon-deviantart"></i> <span class="i-name">icon-deviantart</span><span class="i-code">0xe995</span></div>
        <div title="Code: 0xe996" class="the-icons span3"><i class="icon-digg"></i> <span class="i-name">icon-digg</span><span class="i-code">0xe996</span></div>
        <div title="Code: 0xe997" class="the-icons span3"><i class="icon-dribbble"></i> <span class="i-name">icon-dribbble</span><span class="i-code">0xe997</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe998" class="the-icons span3"><i class="icon-dropbox"></i> <span class="i-name">icon-dropbox</span><span class="i-code">0xe998</span></div>
        <div title="Code: 0xe999" class="the-icons span3"><i class="icon-drupal"></i> <span class="i-name">icon-drupal</span><span class="i-code">0xe999</span></div>
        <div title="Code: 0xe99a" class="the-icons span3"><i class="icon-facebook"></i> <span class="i-name">icon-facebook</span><span class="i-code">0xe99a</span></div>
        <div title="Code: 0xe99b" class="the-icons span3"><i class="icon-facebook-squared"></i> <span class="i-name">icon-facebook-squared</span><span class="i-code">0xe99b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe99c" class="the-icons span3"><i class="icon-flickr"></i> <span class="i-name">icon-flickr</span><span class="i-code">0xe99c</span></div>
        <div title="Code: 0xe99d" class="the-icons span3"><i class="icon-foursquare"></i> <span class="i-name">icon-foursquare</span><span class="i-code">0xe99d</span></div>
        <div title="Code: 0xe99e" class="the-icons span3"><i class="icon-git-squared"></i> <span class="i-name">icon-git-squared</span><span class="i-code">0xe99e</span></div>
        <div title="Code: 0xe99f" class="the-icons span3"><i class="icon-git"></i> <span class="i-name">icon-git</span><span class="i-code">0xe99f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9a0" class="the-icons span3"><i class="icon-github"></i> <span class="i-name">icon-github</span><span class="i-code">0xe9a0</span></div>
        <div title="Code: 0xe9a1" class="the-icons span3"><i class="icon-github-squared"></i> <span class="i-name">icon-github-squared</span><span class="i-code">0xe9a1</span></div>
        <div title="Code: 0xe9a2" class="the-icons span3"><i class="icon-github-circled"></i> <span class="i-name">icon-github-circled</span><span class="i-code">0xe9a2</span></div>
        <div title="Code: 0xe9a3" class="the-icons span3"><i class="icon-gittip"></i> <span class="i-name">icon-gittip</span><span class="i-code">0xe9a3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9a4" class="the-icons span3"><i class="icon-google"></i> <span class="i-name">icon-google</span><span class="i-code">0xe9a4</span></div>
        <div title="Code: 0xe9a5" class="the-icons span3"><i class="icon-gplus"></i> <span class="i-name">icon-gplus</span><span class="i-code">0xe9a5</span></div>
        <div title="Code: 0xe9a6" class="the-icons span3"><i class="icon-gplus-squared"></i> <span class="i-name">icon-gplus-squared</span><span class="i-code">0xe9a6</span></div>
        <div title="Code: 0xe9a7" class="the-icons span3"><i class="icon-hacker-news"></i> <span class="i-name">icon-hacker-news</span><span class="i-code">0xe9a7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9a8" class="the-icons span3"><i class="icon-html5"></i> <span class="i-name">icon-html5</span><span class="i-code">0xe9a8</span></div>
        <div title="Code: 0xe9a9" class="the-icons span3"><i class="icon-instagramm"></i> <span class="i-name">icon-instagramm</span><span class="i-code">0xe9a9</span></div>
        <div title="Code: 0xe9aa" class="the-icons span3"><i class="icon-joomla"></i> <span class="i-name">icon-joomla</span><span class="i-code">0xe9aa</span></div>
        <div title="Code: 0xe9ab" class="the-icons span3"><i class="icon-jsfiddle"></i> <span class="i-name">icon-jsfiddle</span><span class="i-code">0xe9ab</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9ac" class="the-icons span3"><i class="icon-linkedin-squared"></i> <span class="i-name">icon-linkedin-squared</span><span class="i-code">0xe9ac</span></div>
        <div title="Code: 0xe9ad" class="the-icons span3"><i class="icon-linux"></i> <span class="i-name">icon-linux</span><span class="i-code">0xe9ad</span></div>
        <div title="Code: 0xe9ae" class="the-icons span3"><i class="icon-linkedin"></i> <span class="i-name">icon-linkedin</span><span class="i-code">0xe9ae</span></div>
        <div title="Code: 0xe9af" class="the-icons span3"><i class="icon-maxcdn"></i> <span class="i-name">icon-maxcdn</span><span class="i-code">0xe9af</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9b0" class="the-icons span3"><i class="icon-openid"></i> <span class="i-name">icon-openid</span><span class="i-code">0xe9b0</span></div>
        <div title="Code: 0xe9b1" class="the-icons span3"><i class="icon-pagelines"></i> <span class="i-name">icon-pagelines</span><span class="i-code">0xe9b1</span></div>
        <div title="Code: 0xe9b2" class="the-icons span3"><i class="icon-pied-piper-squared"></i> <span class="i-name">icon-pied-piper-squared</span><span class="i-code">0xe9b2</span></div>
        <div title="Code: 0xe9b3" class="the-icons span3"><i class="icon-pied-piper-alt"></i> <span class="i-name">icon-pied-piper-alt</span><span class="i-code">0xe9b3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9b4" class="the-icons span3"><i class="icon-pinterest-circled"></i> <span class="i-name">icon-pinterest-circled</span><span class="i-code">0xe9b4</span></div>
        <div title="Code: 0xe9b5" class="the-icons span3"><i class="icon-pinterest-squared"></i> <span class="i-name">icon-pinterest-squared</span><span class="i-code">0xe9b5</span></div>
        <div title="Code: 0xe9b6" class="the-icons span3"><i class="icon-qq"></i> <span class="i-name">icon-qq</span><span class="i-code">0xe9b6</span></div>
        <div title="Code: 0xe9b7" class="the-icons span3"><i class="icon-reddit"></i> <span class="i-name">icon-reddit</span><span class="i-code">0xe9b7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9b8" class="the-icons span3"><i class="icon-reddit-squared"></i> <span class="i-name">icon-reddit-squared</span><span class="i-code">0xe9b8</span></div>
        <div title="Code: 0xe9b9" class="the-icons span3"><i class="icon-renren"></i> <span class="i-name">icon-renren</span><span class="i-code">0xe9b9</span></div>
        <div title="Code: 0xe9ba" class="the-icons span3"><i class="icon-skype"></i> <span class="i-name">icon-skype</span><span class="i-code">0xe9ba</span></div>
        <div title="Code: 0xe9bb" class="the-icons span3"><i class="icon-slack"></i> <span class="i-name">icon-slack</span><span class="i-code">0xe9bb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9bc" class="the-icons span3"><i class="icon-soundclowd"></i> <span class="i-name">icon-soundclowd</span><span class="i-code">0xe9bc</span></div>
        <div title="Code: 0xe9bd" class="the-icons span3"><i class="icon-spotify"></i> <span class="i-name">icon-spotify</span><span class="i-code">0xe9bd</span></div>
        <div title="Code: 0xe9be" class="the-icons span3"><i class="icon-stackexchange"></i> <span class="i-name">icon-stackexchange</span><span class="i-code">0xe9be</span></div>
        <div title="Code: 0xe9bf" class="the-icons span3"><i class="icon-stackoverflow"></i> <span class="i-name">icon-stackoverflow</span><span class="i-code">0xe9bf</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9c0" class="the-icons span3"><i class="icon-steam"></i> <span class="i-name">icon-steam</span><span class="i-code">0xe9c0</span></div>
        <div title="Code: 0xe9c1" class="the-icons span3"><i class="icon-steam-squared"></i> <span class="i-name">icon-steam-squared</span><span class="i-code">0xe9c1</span></div>
        <div title="Code: 0xe9c2" class="the-icons span3"><i class="icon-stumbleupon"></i> <span class="i-name">icon-stumbleupon</span><span class="i-code">0xe9c2</span></div>
        <div title="Code: 0xe9c3" class="the-icons span3"><i class="icon-stumbleupon-circled"></i> <span class="i-name">icon-stumbleupon-circled</span><span class="i-code">0xe9c3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9c4" class="the-icons span3"><i class="icon-tencent-weibo"></i> <span class="i-name">icon-tencent-weibo</span><span class="i-code">0xe9c4</span></div>
        <div title="Code: 0xe9c5" class="the-icons span3"><i class="icon-trello"></i> <span class="i-name">icon-trello</span><span class="i-code">0xe9c5</span></div>
        <div title="Code: 0xe9c6" class="the-icons span3"><i class="icon-tumblr"></i> <span class="i-name">icon-tumblr</span><span class="i-code">0xe9c6</span></div>
        <div title="Code: 0xe9c7" class="the-icons span3"><i class="icon-tumblr-squared"></i> <span class="i-name">icon-tumblr-squared</span><span class="i-code">0xe9c7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9c8" class="the-icons span3"><i class="icon-twitter-squared"></i> <span class="i-name">icon-twitter-squared</span><span class="i-code">0xe9c8</span></div>
        <div title="Code: 0xe9c9" class="the-icons span3"><i class="icon-twitter"></i> <span class="i-name">icon-twitter</span><span class="i-code">0xe9c9</span></div>
        <div title="Code: 0xe9ca" class="the-icons span3"><i class="icon-vimeo-squared"></i> <span class="i-name">icon-vimeo-squared</span><span class="i-code">0xe9ca</span></div>
        <div title="Code: 0xe9cb" class="the-icons span3"><i class="icon-vine"></i> <span class="i-name">icon-vine</span><span class="i-code">0xe9cb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9cc" class="the-icons span3"><i class="icon-vkontakte"></i> <span class="i-name">icon-vkontakte</span><span class="i-code">0xe9cc</span></div>
        <div title="Code: 0xe9cd" class="the-icons span3"><i class="icon-wechat"></i> <span class="i-name">icon-wechat</span><span class="i-code">0xe9cd</span></div>
        <div title="Code: 0xe9ce" class="the-icons span3"><i class="icon-weibo"></i> <span class="i-name">icon-weibo</span><span class="i-code">0xe9ce</span></div>
        <div title="Code: 0xe9cf" class="the-icons span3"><i class="icon-windows"></i> <span class="i-name">icon-windows</span><span class="i-code">0xe9cf</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9d0" class="the-icons span3"><i class="icon-wordpress"></i> <span class="i-name">icon-wordpress</span><span class="i-code">0xe9d0</span></div>
        <div title="Code: 0xe9d1" class="the-icons span3"><i class="icon-xing"></i> <span class="i-name">icon-xing</span><span class="i-code">0xe9d1</span></div>
        <div title="Code: 0xe9d2" class="the-icons span3"><i class="icon-xing-squared"></i> <span class="i-name">icon-xing-squared</span><span class="i-code">0xe9d2</span></div>
        <div title="Code: 0xe9d3" class="the-icons span3"><i class="icon-youtube"></i> <span class="i-name">icon-youtube</span><span class="i-code">0xe9d3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9d4" class="the-icons span3"><i class="icon-yahoo"></i> <span class="i-name">icon-yahoo</span><span class="i-code">0xe9d4</span></div>
        <div title="Code: 0xe9d5" class="the-icons span3"><i class="icon-youtube-squared"></i> <span class="i-name">icon-youtube-squared</span><span class="i-code">0xe9d5</span></div>
        <div title="Code: 0xe9d6" class="the-icons span3"><i class="icon-youtube-play"></i> <span class="i-name">icon-youtube-play</span><span class="i-code">0xe9d6</span></div>
        <div title="Code: 0xe9d7" class="the-icons span3"><i class="icon-blank"></i> <span class="i-name">icon-blank</span><span class="i-code">0xe9d7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9d8" class="the-icons span3"><i class="icon-lemon"></i> <span class="i-name">icon-lemon</span><span class="i-code">0xe9d8</span></div>
        <div title="Code: 0xe9d9" class="the-icons span3"><i class="icon-music-outline"></i> <span class="i-name">icon-music-outline</span><span class="i-code">0xe9d9</span></div>
        <div title="Code: 0xe9da" class="the-icons span3"><i class="icon-music-1"></i> <span class="i-name">icon-music-1</span><span class="i-code">0xe9da</span></div>
        <div title="Code: 0xe9db" class="the-icons span3"><i class="icon-search-outline"></i> <span class="i-name">icon-search-outline</span><span class="i-code">0xe9db</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9dc" class="the-icons span3"><i class="icon-search-1"></i> <span class="i-name">icon-search-1</span><span class="i-code">0xe9dc</span></div>
        <div title="Code: 0xe9dd" class="the-icons span3"><i class="icon-mail-1"></i> <span class="i-name">icon-mail-1</span><span class="i-code">0xe9dd</span></div>
        <div title="Code: 0xe9de" class="the-icons span3"><i class="icon-heart-1"></i> <span class="i-name">icon-heart-1</span><span class="i-code">0xe9de</span></div>
        <div title="Code: 0xe9df" class="the-icons span3"><i class="icon-heart-filled"></i> <span class="i-name">icon-heart-filled</span><span class="i-code">0xe9df</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9e0" class="the-icons span3"><i class="icon-star-1"></i> <span class="i-name">icon-star-1</span><span class="i-code">0xe9e0</span></div>
        <div title="Code: 0xe9e1" class="the-icons span3"><i class="icon-star-filled"></i> <span class="i-name">icon-star-filled</span><span class="i-code">0xe9e1</span></div>
        <div title="Code: 0xe9e2" class="the-icons span3"><i class="icon-user-outline"></i> <span class="i-name">icon-user-outline</span><span class="i-code">0xe9e2</span></div>
        <div title="Code: 0xe9e3" class="the-icons span3"><i class="icon-user-1"></i> <span class="i-name">icon-user-1</span><span class="i-code">0xe9e3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9e4" class="the-icons span3"><i class="icon-users-outline"></i> <span class="i-name">icon-users-outline</span><span class="i-code">0xe9e4</span></div>
        <div title="Code: 0xe9e5" class="the-icons span3"><i class="icon-users-1"></i> <span class="i-name">icon-users-1</span><span class="i-code">0xe9e5</span></div>
        <div title="Code: 0xe9e6" class="the-icons span3"><i class="icon-user-add-outline"></i> <span class="i-name">icon-user-add-outline</span><span class="i-code">0xe9e6</span></div>
        <div title="Code: 0xe9e7" class="the-icons span3"><i class="icon-user-add"></i> <span class="i-name">icon-user-add</span><span class="i-code">0xe9e7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9e8" class="the-icons span3"><i class="icon-user-delete-outline"></i> <span class="i-name">icon-user-delete-outline</span><span class="i-code">0xe9e8</span></div>
        <div title="Code: 0xe9e9" class="the-icons span3"><i class="icon-user-delete"></i> <span class="i-name">icon-user-delete</span><span class="i-code">0xe9e9</span></div>
        <div title="Code: 0xe9ea" class="the-icons span3"><i class="icon-video-1"></i> <span class="i-name">icon-video-1</span><span class="i-code">0xe9ea</span></div>
        <div title="Code: 0xe9eb" class="the-icons span3"><i class="icon-videocam-outline"></i> <span class="i-name">icon-videocam-outline</span><span class="i-code">0xe9eb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9ec" class="the-icons span3"><i class="icon-videocam-1"></i> <span class="i-name">icon-videocam-1</span><span class="i-code">0xe9ec</span></div>
        <div title="Code: 0xe9ed" class="the-icons span3"><i class="icon-picture-outline"></i> <span class="i-name">icon-picture-outline</span><span class="i-code">0xe9ed</span></div>
        <div title="Code: 0xe9ee" class="the-icons span3"><i class="icon-picture-1"></i> <span class="i-name">icon-picture-1</span><span class="i-code">0xe9ee</span></div>
        <div title="Code: 0xe9ef" class="the-icons span3"><i class="icon-camera-outline"></i> <span class="i-name">icon-camera-outline</span><span class="i-code">0xe9ef</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9f0" class="the-icons span3"><i class="icon-camera-1"></i> <span class="i-name">icon-camera-1</span><span class="i-code">0xe9f0</span></div>
        <div title="Code: 0xe9f1" class="the-icons span3"><i class="icon-th-outline"></i> <span class="i-name">icon-th-outline</span><span class="i-code">0xe9f1</span></div>
        <div title="Code: 0xe9f2" class="the-icons span3"><i class="icon-th-1"></i> <span class="i-name">icon-th-1</span><span class="i-code">0xe9f2</span></div>
        <div title="Code: 0xe9f3" class="the-icons span3"><i class="icon-th-large-outline"></i> <span class="i-name">icon-th-large-outline</span><span class="i-code">0xe9f3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9f4" class="the-icons span3"><i class="icon-th-large-1"></i> <span class="i-name">icon-th-large-1</span><span class="i-code">0xe9f4</span></div>
        <div title="Code: 0xe9f5" class="the-icons span3"><i class="icon-th-list-outline"></i> <span class="i-name">icon-th-list-outline</span><span class="i-code">0xe9f5</span></div>
        <div title="Code: 0xe9f6" class="the-icons span3"><i class="icon-th-list-1"></i> <span class="i-name">icon-th-list-1</span><span class="i-code">0xe9f6</span></div>
        <div title="Code: 0xe9f7" class="the-icons span3"><i class="icon-ok-outline"></i> <span class="i-name">icon-ok-outline</span><span class="i-code">0xe9f7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9f8" class="the-icons span3"><i class="icon-ok-1"></i> <span class="i-name">icon-ok-1</span><span class="i-code">0xe9f8</span></div>
        <div title="Code: 0xe9f9" class="the-icons span3"><i class="icon-cancel-outline"></i> <span class="i-name">icon-cancel-outline</span><span class="i-code">0xe9f9</span></div>
        <div title="Code: 0xe9fa" class="the-icons span3"><i class="icon-cancel-1"></i> <span class="i-name">icon-cancel-1</span><span class="i-code">0xe9fa</span></div>
        <div title="Code: 0xe9fb" class="the-icons span3"><i class="icon-cancel-alt"></i> <span class="i-name">icon-cancel-alt</span><span class="i-code">0xe9fb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xe9fc" class="the-icons span3"><i class="icon-cancel-alt-filled"></i> <span class="i-name">icon-cancel-alt-filled</span><span class="i-code">0xe9fc</span></div>
        <div title="Code: 0xe9fd" class="the-icons span3"><i class="icon-cancel-circled-outline"></i> <span class="i-name">icon-cancel-circled-outline</span><span class="i-code">0xe9fd</span></div>
        <div title="Code: 0xe9fe" class="the-icons span3"><i class="icon-cancel-circled-1"></i> <span class="i-name">icon-cancel-circled-1</span><span class="i-code">0xe9fe</span></div>
        <div title="Code: 0xe9ff" class="the-icons span3"><i class="icon-plus-outline"></i> <span class="i-name">icon-plus-outline</span><span class="i-code">0xe9ff</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea00" class="the-icons span3"><i class="icon-plus-1"></i> <span class="i-name">icon-plus-1</span><span class="i-code">0xea00</span></div>
        <div title="Code: 0xea01" class="the-icons span3"><i class="icon-minus-outline"></i> <span class="i-name">icon-minus-outline</span><span class="i-code">0xea01</span></div>
        <div title="Code: 0xea02" class="the-icons span3"><i class="icon-minus-1"></i> <span class="i-name">icon-minus-1</span><span class="i-code">0xea02</span></div>
        <div title="Code: 0xea03" class="the-icons span3"><i class="icon-divide-outline"></i> <span class="i-name">icon-divide-outline</span><span class="i-code">0xea03</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea04" class="the-icons span3"><i class="icon-divide"></i> <span class="i-name">icon-divide</span><span class="i-code">0xea04</span></div>
        <div title="Code: 0xea05" class="the-icons span3"><i class="icon-eq-outline"></i> <span class="i-name">icon-eq-outline</span><span class="i-code">0xea05</span></div>
        <div title="Code: 0xea06" class="the-icons span3"><i class="icon-eq"></i> <span class="i-name">icon-eq</span><span class="i-code">0xea06</span></div>
        <div title="Code: 0xea07" class="the-icons span3"><i class="icon-info-outline"></i> <span class="i-name">icon-info-outline</span><span class="i-code">0xea07</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea08" class="the-icons span3"><i class="icon-info-1"></i> <span class="i-name">icon-info-1</span><span class="i-code">0xea08</span></div>
        <div title="Code: 0xea09" class="the-icons span3"><i class="icon-home-outline"></i> <span class="i-name">icon-home-outline</span><span class="i-code">0xea09</span></div>
        <div title="Code: 0xea0a" class="the-icons span3"><i class="icon-home-1"></i> <span class="i-name">icon-home-1</span><span class="i-code">0xea0a</span></div>
        <div title="Code: 0xea0b" class="the-icons span3"><i class="icon-link-outline"></i> <span class="i-name">icon-link-outline</span><span class="i-code">0xea0b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea0c" class="the-icons span3"><i class="icon-link-1"></i> <span class="i-name">icon-link-1</span><span class="i-code">0xea0c</span></div>
        <div title="Code: 0xea0d" class="the-icons span3"><i class="icon-attach-outline"></i> <span class="i-name">icon-attach-outline</span><span class="i-code">0xea0d</span></div>
        <div title="Code: 0xea0e" class="the-icons span3"><i class="icon-attach-1"></i> <span class="i-name">icon-attach-1</span><span class="i-code">0xea0e</span></div>
        <div title="Code: 0xea0f" class="the-icons span3"><i class="icon-lock-1"></i> <span class="i-name">icon-lock-1</span><span class="i-code">0xea0f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea10" class="the-icons span3"><i class="icon-lock-filled"></i> <span class="i-name">icon-lock-filled</span><span class="i-code">0xea10</span></div>
        <div title="Code: 0xea11" class="the-icons span3"><i class="icon-lock-open-1"></i> <span class="i-name">icon-lock-open-1</span><span class="i-code">0xea11</span></div>
        <div title="Code: 0xea12" class="the-icons span3"><i class="icon-lock-open-filled"></i> <span class="i-name">icon-lock-open-filled</span><span class="i-code">0xea12</span></div>
        <div title="Code: 0xea13" class="the-icons span3"><i class="icon-pin-outline"></i> <span class="i-name">icon-pin-outline</span><span class="i-code">0xea13</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea14" class="the-icons span3"><i class="icon-pin-1"></i> <span class="i-name">icon-pin-1</span><span class="i-code">0xea14</span></div>
        <div title="Code: 0xea15" class="the-icons span3"><i class="icon-eye-outline"></i> <span class="i-name">icon-eye-outline</span><span class="i-code">0xea15</span></div>
        <div title="Code: 0xea16" class="the-icons span3"><i class="icon-eye-1"></i> <span class="i-name">icon-eye-1</span><span class="i-code">0xea16</span></div>
        <div title="Code: 0xea17" class="the-icons span3"><i class="icon-tag-1"></i> <span class="i-name">icon-tag-1</span><span class="i-code">0xea17</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea18" class="the-icons span3"><i class="icon-tags-1"></i> <span class="i-name">icon-tags-1</span><span class="i-code">0xea18</span></div>
        <div title="Code: 0xea19" class="the-icons span3"><i class="icon-bookmark-1"></i> <span class="i-name">icon-bookmark-1</span><span class="i-code">0xea19</span></div>
        <div title="Code: 0xea1a" class="the-icons span3"><i class="icon-flag-1"></i> <span class="i-name">icon-flag-1</span><span class="i-code">0xea1a</span></div>
        <div title="Code: 0xea1b" class="the-icons span3"><i class="icon-flag-filled"></i> <span class="i-name">icon-flag-filled</span><span class="i-code">0xea1b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea1c" class="the-icons span3"><i class="icon-thumbs-up-1"></i> <span class="i-name">icon-thumbs-up-1</span><span class="i-code">0xea1c</span></div>
        <div title="Code: 0xea1d" class="the-icons span3"><i class="icon-thumbs-down-1"></i> <span class="i-name">icon-thumbs-down-1</span><span class="i-code">0xea1d</span></div>
        <div title="Code: 0xea1e" class="the-icons span3"><i class="icon-download-outline"></i> <span class="i-name">icon-download-outline</span><span class="i-code">0xea1e</span></div>
        <div title="Code: 0xea1f" class="the-icons span3"><i class="icon-download-1"></i> <span class="i-name">icon-download-1</span><span class="i-code">0xea1f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea20" class="the-icons span3"><i class="icon-upload-outline"></i> <span class="i-name">icon-upload-outline</span><span class="i-code">0xea20</span></div>
        <div title="Code: 0xea21" class="the-icons span3"><i class="icon-upload-1"></i> <span class="i-name">icon-upload-1</span><span class="i-code">0xea21</span></div>
        <div title="Code: 0xea22" class="the-icons span3"><i class="icon-upload-cloud-outline"></i> <span class="i-name">icon-upload-cloud-outline</span><span class="i-code">0xea22</span></div>
        <div title="Code: 0xea23" class="the-icons span3"><i class="icon-upload-cloud-1"></i> <span class="i-name">icon-upload-cloud-1</span><span class="i-code">0xea23</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea24" class="the-icons span3"><i class="icon-reply-outline"></i> <span class="i-name">icon-reply-outline</span><span class="i-code">0xea24</span></div>
        <div title="Code: 0xea25" class="the-icons span3"><i class="icon-reply-1"></i> <span class="i-name">icon-reply-1</span><span class="i-code">0xea25</span></div>
        <div title="Code: 0xea26" class="the-icons span3"><i class="icon-forward-outline"></i> <span class="i-name">icon-forward-outline</span><span class="i-code">0xea26</span></div>
        <div title="Code: 0xea27" class="the-icons span3"><i class="icon-forward-1"></i> <span class="i-name">icon-forward-1</span><span class="i-code">0xea27</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea28" class="the-icons span3"><i class="icon-code-outline"></i> <span class="i-name">icon-code-outline</span><span class="i-code">0xea28</span></div>
        <div title="Code: 0xea29" class="the-icons span3"><i class="icon-code-1"></i> <span class="i-name">icon-code-1</span><span class="i-code">0xea29</span></div>
        <div title="Code: 0xea2a" class="the-icons span3"><i class="icon-export-outline"></i> <span class="i-name">icon-export-outline</span><span class="i-code">0xea2a</span></div>
        <div title="Code: 0xea2b" class="the-icons span3"><i class="icon-export-1"></i> <span class="i-name">icon-export-1</span><span class="i-code">0xea2b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea2c" class="the-icons span3"><i class="icon-pencil-1"></i> <span class="i-name">icon-pencil-1</span><span class="i-code">0xea2c</span></div>
        <div title="Code: 0xea2d" class="the-icons span3"><i class="icon-pen"></i> <span class="i-name">icon-pen</span><span class="i-code">0xea2d</span></div>
        <div title="Code: 0xea2e" class="the-icons span3"><i class="icon-feather"></i> <span class="i-name">icon-feather</span><span class="i-code">0xea2e</span></div>
        <div title="Code: 0xea2f" class="the-icons span3"><i class="icon-edit-1"></i> <span class="i-name">icon-edit-1</span><span class="i-code">0xea2f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea30" class="the-icons span3"><i class="icon-print-1"></i> <span class="i-name">icon-print-1</span><span class="i-code">0xea30</span></div>
        <div title="Code: 0xea31" class="the-icons span3"><i class="icon-comment-1"></i> <span class="i-name">icon-comment-1</span><span class="i-code">0xea31</span></div>
        <div title="Code: 0xea32" class="the-icons span3"><i class="icon-chat-1"></i> <span class="i-name">icon-chat-1</span><span class="i-code">0xea32</span></div>
        <div title="Code: 0xea33" class="the-icons span3"><i class="icon-chat-alt"></i> <span class="i-name">icon-chat-alt</span><span class="i-code">0xea33</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea34" class="the-icons span3"><i class="icon-bell-1"></i> <span class="i-name">icon-bell-1</span><span class="i-code">0xea34</span></div>
        <div title="Code: 0xea35" class="the-icons span3"><i class="icon-attention-1"></i> <span class="i-name">icon-attention-1</span><span class="i-code">0xea35</span></div>
        <div title="Code: 0xea36" class="the-icons span3"><i class="icon-attention-filled"></i> <span class="i-name">icon-attention-filled</span><span class="i-code">0xea36</span></div>
        <div title="Code: 0xea37" class="the-icons span3"><i class="icon-warning-empty"></i> <span class="i-name">icon-warning-empty</span><span class="i-code">0xea37</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea38" class="the-icons span3"><i class="icon-warning"></i> <span class="i-name">icon-warning</span><span class="i-code">0xea38</span></div>
        <div title="Code: 0xea39" class="the-icons span3"><i class="icon-contacts"></i> <span class="i-name">icon-contacts</span><span class="i-code">0xea39</span></div>
        <div title="Code: 0xea3a" class="the-icons span3"><i class="icon-vcard"></i> <span class="i-name">icon-vcard</span><span class="i-code">0xea3a</span></div>
        <div title="Code: 0xea3b" class="the-icons span3"><i class="icon-address"></i> <span class="i-name">icon-address</span><span class="i-code">0xea3b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea3c" class="the-icons span3"><i class="icon-location-outline"></i> <span class="i-name">icon-location-outline</span><span class="i-code">0xea3c</span></div>
        <div title="Code: 0xea3d" class="the-icons span3"><i class="icon-location-1"></i> <span class="i-name">icon-location-1</span><span class="i-code">0xea3d</span></div>
        <div title="Code: 0xea3e" class="the-icons span3"><i class="icon-map"></i> <span class="i-name">icon-map</span><span class="i-code">0xea3e</span></div>
        <div title="Code: 0xea3f" class="the-icons span3"><i class="icon-direction-outline"></i> <span class="i-name">icon-direction-outline</span><span class="i-code">0xea3f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea40" class="the-icons span3"><i class="icon-direction-1"></i> <span class="i-name">icon-direction-1</span><span class="i-code">0xea40</span></div>
        <div title="Code: 0xea41" class="the-icons span3"><i class="icon-compass-1"></i> <span class="i-name">icon-compass-1</span><span class="i-code">0xea41</span></div>
        <div title="Code: 0xea42" class="the-icons span3"><i class="icon-trash-1"></i> <span class="i-name">icon-trash-1</span><span class="i-code">0xea42</span></div>
        <div title="Code: 0xea43" class="the-icons span3"><i class="icon-doc-1"></i> <span class="i-name">icon-doc-1</span><span class="i-code">0xea43</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea44" class="the-icons span3"><i class="icon-doc-text-1"></i> <span class="i-name">icon-doc-text-1</span><span class="i-code">0xea44</span></div>
        <div title="Code: 0xea45" class="the-icons span3"><i class="icon-doc-add"></i> <span class="i-name">icon-doc-add</span><span class="i-code">0xea45</span></div>
        <div title="Code: 0xea46" class="the-icons span3"><i class="icon-doc-remove"></i> <span class="i-name">icon-doc-remove</span><span class="i-code">0xea46</span></div>
        <div title="Code: 0xea47" class="the-icons span3"><i class="icon-news"></i> <span class="i-name">icon-news</span><span class="i-code">0xea47</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea48" class="the-icons span3"><i class="icon-folder-1"></i> <span class="i-name">icon-folder-1</span><span class="i-code">0xea48</span></div>
        <div title="Code: 0xea49" class="the-icons span3"><i class="icon-folder-add"></i> <span class="i-name">icon-folder-add</span><span class="i-code">0xea49</span></div>
        <div title="Code: 0xea4a" class="the-icons span3"><i class="icon-folder-delete"></i> <span class="i-name">icon-folder-delete</span><span class="i-code">0xea4a</span></div>
        <div title="Code: 0xea4b" class="the-icons span3"><i class="icon-archive"></i> <span class="i-name">icon-archive</span><span class="i-code">0xea4b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea4c" class="the-icons span3"><i class="icon-box-1"></i> <span class="i-name">icon-box-1</span><span class="i-code">0xea4c</span></div>
        <div title="Code: 0xea4d" class="the-icons span3"><i class="icon-rss-outline"></i> <span class="i-name">icon-rss-outline</span><span class="i-code">0xea4d</span></div>
        <div title="Code: 0xea4e" class="the-icons span3"><i class="icon-rss-1"></i> <span class="i-name">icon-rss-1</span><span class="i-code">0xea4e</span></div>
        <div title="Code: 0xea4f" class="the-icons span3"><i class="icon-phone-outline"></i> <span class="i-name">icon-phone-outline</span><span class="i-code">0xea4f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea50" class="the-icons span3"><i class="icon-phone-1"></i> <span class="i-name">icon-phone-1</span><span class="i-code">0xea50</span></div>
        <div title="Code: 0xea51" class="the-icons span3"><i class="icon-menu-outline"></i> <span class="i-name">icon-menu-outline</span><span class="i-code">0xea51</span></div>
        <div title="Code: 0xea52" class="the-icons span3"><i class="icon-menu-1"></i> <span class="i-name">icon-menu-1</span><span class="i-code">0xea52</span></div>
        <div title="Code: 0xea53" class="the-icons span3"><i class="icon-cog-outline"></i> <span class="i-name">icon-cog-outline</span><span class="i-code">0xea53</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea54" class="the-icons span3"><i class="icon-cog-1"></i> <span class="i-name">icon-cog-1</span><span class="i-code">0xea54</span></div>
        <div title="Code: 0xea55" class="the-icons span3"><i class="icon-wrench-outline"></i> <span class="i-name">icon-wrench-outline</span><span class="i-code">0xea55</span></div>
        <div title="Code: 0xea56" class="the-icons span3"><i class="icon-wrench-1"></i> <span class="i-name">icon-wrench-1</span><span class="i-code">0xea56</span></div>
        <div title="Code: 0xea57" class="the-icons span3"><i class="icon-basket-1"></i> <span class="i-name">icon-basket-1</span><span class="i-code">0xea57</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea58" class="the-icons span3"><i class="icon-calendar-outlilne"></i> <span class="i-name">icon-calendar-outlilne</span><span class="i-code">0xea58</span></div>
        <div title="Code: 0xea59" class="the-icons span3"><i class="icon-calendar-1"></i> <span class="i-name">icon-calendar-1</span><span class="i-code">0xea59</span></div>
        <div title="Code: 0xea5a" class="the-icons span3"><i class="icon-mic-outline"></i> <span class="i-name">icon-mic-outline</span><span class="i-code">0xea5a</span></div>
        <div title="Code: 0xea5b" class="the-icons span3"><i class="icon-mic-1"></i> <span class="i-name">icon-mic-1</span><span class="i-code">0xea5b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea5c" class="the-icons span3"><i class="icon-volume-off-1"></i> <span class="i-name">icon-volume-off-1</span><span class="i-code">0xea5c</span></div>
        <div title="Code: 0xea5d" class="the-icons span3"><i class="icon-volume-low"></i> <span class="i-name">icon-volume-low</span><span class="i-code">0xea5d</span></div>
        <div title="Code: 0xea5e" class="the-icons span3"><i class="icon-volume-middle"></i> <span class="i-name">icon-volume-middle</span><span class="i-code">0xea5e</span></div>
        <div title="Code: 0xea5f" class="the-icons span3"><i class="icon-volume-high"></i> <span class="i-name">icon-volume-high</span><span class="i-code">0xea5f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea60" class="the-icons span3"><i class="icon-headphones-1"></i> <span class="i-name">icon-headphones-1</span><span class="i-code">0xea60</span></div>
        <div title="Code: 0xea61" class="the-icons span3"><i class="icon-clock-1"></i> <span class="i-name">icon-clock-1</span><span class="i-code">0xea61</span></div>
        <div title="Code: 0xea62" class="the-icons span3"><i class="icon-wristwatch"></i> <span class="i-name">icon-wristwatch</span><span class="i-code">0xea62</span></div>
        <div title="Code: 0xea63" class="the-icons span3"><i class="icon-stopwatch"></i> <span class="i-name">icon-stopwatch</span><span class="i-code">0xea63</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea64" class="the-icons span3"><i class="icon-lightbulb-1"></i> <span class="i-name">icon-lightbulb-1</span><span class="i-code">0xea64</span></div>
        <div title="Code: 0xea65" class="the-icons span3"><i class="icon-block-outline"></i> <span class="i-name">icon-block-outline</span><span class="i-code">0xea65</span></div>
        <div title="Code: 0xea66" class="the-icons span3"><i class="icon-block-1"></i> <span class="i-name">icon-block-1</span><span class="i-code">0xea66</span></div>
        <div title="Code: 0xea67" class="the-icons span3"><i class="icon-resize-full-outline"></i> <span class="i-name">icon-resize-full-outline</span><span class="i-code">0xea67</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea68" class="the-icons span3"><i class="icon-resize-full-1"></i> <span class="i-name">icon-resize-full-1</span><span class="i-code">0xea68</span></div>
        <div title="Code: 0xea69" class="the-icons span3"><i class="icon-resize-normal-outline"></i> <span class="i-name">icon-resize-normal-outline</span><span class="i-code">0xea69</span></div>
        <div title="Code: 0xea6a" class="the-icons span3"><i class="icon-resize-normal"></i> <span class="i-name">icon-resize-normal</span><span class="i-code">0xea6a</span></div>
        <div title="Code: 0xea6b" class="the-icons span3"><i class="icon-move-outline"></i> <span class="i-name">icon-move-outline</span><span class="i-code">0xea6b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea6c" class="the-icons span3"><i class="icon-move-1"></i> <span class="i-name">icon-move-1</span><span class="i-code">0xea6c</span></div>
        <div title="Code: 0xea6d" class="the-icons span3"><i class="icon-popup"></i> <span class="i-name">icon-popup</span><span class="i-code">0xea6d</span></div>
        <div title="Code: 0xea6e" class="the-icons span3"><i class="icon-zoom-in-outline"></i> <span class="i-name">icon-zoom-in-outline</span><span class="i-code">0xea6e</span></div>
        <div title="Code: 0xea6f" class="the-icons span3"><i class="icon-zoom-in-1"></i> <span class="i-name">icon-zoom-in-1</span><span class="i-code">0xea6f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea70" class="the-icons span3"><i class="icon-zoom-out-outline"></i> <span class="i-name">icon-zoom-out-outline</span><span class="i-code">0xea70</span></div>
        <div title="Code: 0xea71" class="the-icons span3"><i class="icon-zoom-out-1"></i> <span class="i-name">icon-zoom-out-1</span><span class="i-code">0xea71</span></div>
        <div title="Code: 0xea72" class="the-icons span3"><i class="icon-popup-1"></i> <span class="i-name">icon-popup-1</span><span class="i-code">0xea72</span></div>
        <div title="Code: 0xea73" class="the-icons span3"><i class="icon-left-open-outline"></i> <span class="i-name">icon-left-open-outline</span><span class="i-code">0xea73</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea74" class="the-icons span3"><i class="icon-left-open-1"></i> <span class="i-name">icon-left-open-1</span><span class="i-code">0xea74</span></div>
        <div title="Code: 0xea75" class="the-icons span3"><i class="icon-right-open-outline"></i> <span class="i-name">icon-right-open-outline</span><span class="i-code">0xea75</span></div>
        <div title="Code: 0xea76" class="the-icons span3"><i class="icon-right-open-1"></i> <span class="i-name">icon-right-open-1</span><span class="i-code">0xea76</span></div>
        <div title="Code: 0xea77" class="the-icons span3"><i class="icon-down-1"></i> <span class="i-name">icon-down-1</span><span class="i-code">0xea77</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea78" class="the-icons span3"><i class="icon-left-1"></i> <span class="i-name">icon-left-1</span><span class="i-code">0xea78</span></div>
        <div title="Code: 0xea79" class="the-icons span3"><i class="icon-right-1"></i> <span class="i-name">icon-right-1</span><span class="i-code">0xea79</span></div>
        <div title="Code: 0xea7a" class="the-icons span3"><i class="icon-up-1"></i> <span class="i-name">icon-up-1</span><span class="i-code">0xea7a</span></div>
        <div title="Code: 0xea7b" class="the-icons span3"><i class="icon-down-outline"></i> <span class="i-name">icon-down-outline</span><span class="i-code">0xea7b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea7c" class="the-icons span3"><i class="icon-left-outline"></i> <span class="i-name">icon-left-outline</span><span class="i-code">0xea7c</span></div>
        <div title="Code: 0xea7d" class="the-icons span3"><i class="icon-right-outline"></i> <span class="i-name">icon-right-outline</span><span class="i-code">0xea7d</span></div>
        <div title="Code: 0xea7e" class="the-icons span3"><i class="icon-up-outline"></i> <span class="i-name">icon-up-outline</span><span class="i-code">0xea7e</span></div>
        <div title="Code: 0xea7f" class="the-icons span3"><i class="icon-down-small"></i> <span class="i-name">icon-down-small</span><span class="i-code">0xea7f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea80" class="the-icons span3"><i class="icon-left-small"></i> <span class="i-name">icon-left-small</span><span class="i-code">0xea80</span></div>
        <div title="Code: 0xea81" class="the-icons span3"><i class="icon-right-small"></i> <span class="i-name">icon-right-small</span><span class="i-code">0xea81</span></div>
        <div title="Code: 0xea82" class="the-icons span3"><i class="icon-up-small"></i> <span class="i-name">icon-up-small</span><span class="i-code">0xea82</span></div>
        <div title="Code: 0xea83" class="the-icons span3"><i class="icon-cw-outline"></i> <span class="i-name">icon-cw-outline</span><span class="i-code">0xea83</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea84" class="the-icons span3"><i class="icon-cw-1"></i> <span class="i-name">icon-cw-1</span><span class="i-code">0xea84</span></div>
        <div title="Code: 0xea85" class="the-icons span3"><i class="icon-arrows-cw-outline"></i> <span class="i-name">icon-arrows-cw-outline</span><span class="i-code">0xea85</span></div>
        <div title="Code: 0xea86" class="the-icons span3"><i class="icon-arrows-cw-1"></i> <span class="i-name">icon-arrows-cw-1</span><span class="i-code">0xea86</span></div>
        <div title="Code: 0xea87" class="the-icons span3"><i class="icon-loop-outline"></i> <span class="i-name">icon-loop-outline</span><span class="i-code">0xea87</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea88" class="the-icons span3"><i class="icon-loop"></i> <span class="i-name">icon-loop</span><span class="i-code">0xea88</span></div>
        <div title="Code: 0xea89" class="the-icons span3"><i class="icon-loop-alt-outline"></i> <span class="i-name">icon-loop-alt-outline</span><span class="i-code">0xea89</span></div>
        <div title="Code: 0xea8a" class="the-icons span3"><i class="icon-loop-alt"></i> <span class="i-name">icon-loop-alt</span><span class="i-code">0xea8a</span></div>
        <div title="Code: 0xea8b" class="the-icons span3"><i class="icon-shuffle-1"></i> <span class="i-name">icon-shuffle-1</span><span class="i-code">0xea8b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea8c" class="the-icons span3"><i class="icon-play-outline"></i> <span class="i-name">icon-play-outline</span><span class="i-code">0xea8c</span></div>
        <div title="Code: 0xea8d" class="the-icons span3"><i class="icon-play-1"></i> <span class="i-name">icon-play-1</span><span class="i-code">0xea8d</span></div>
        <div title="Code: 0xea8e" class="the-icons span3"><i class="icon-stop-outline"></i> <span class="i-name">icon-stop-outline</span><span class="i-code">0xea8e</span></div>
        <div title="Code: 0xea8f" class="the-icons span3"><i class="icon-stop-1"></i> <span class="i-name">icon-stop-1</span><span class="i-code">0xea8f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea90" class="the-icons span3"><i class="icon-pause-outline"></i> <span class="i-name">icon-pause-outline</span><span class="i-code">0xea90</span></div>
        <div title="Code: 0xea91" class="the-icons span3"><i class="icon-pause-1"></i> <span class="i-name">icon-pause-1</span><span class="i-code">0xea91</span></div>
        <div title="Code: 0xea92" class="the-icons span3"><i class="icon-fast-fw-outline"></i> <span class="i-name">icon-fast-fw-outline</span><span class="i-code">0xea92</span></div>
        <div title="Code: 0xea93" class="the-icons span3"><i class="icon-fast-fw-1"></i> <span class="i-name">icon-fast-fw-1</span><span class="i-code">0xea93</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea94" class="the-icons span3"><i class="icon-rewind-outline"></i> <span class="i-name">icon-rewind-outline</span><span class="i-code">0xea94</span></div>
        <div title="Code: 0xea95" class="the-icons span3"><i class="icon-rewind"></i> <span class="i-name">icon-rewind</span><span class="i-code">0xea95</span></div>
        <div title="Code: 0xea96" class="the-icons span3"><i class="icon-record-outline"></i> <span class="i-name">icon-record-outline</span><span class="i-code">0xea96</span></div>
        <div title="Code: 0xea97" class="the-icons span3"><i class="icon-record"></i> <span class="i-name">icon-record</span><span class="i-code">0xea97</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea98" class="the-icons span3"><i class="icon-eject-outline"></i> <span class="i-name">icon-eject-outline</span><span class="i-code">0xea98</span></div>
        <div title="Code: 0xea99" class="the-icons span3"><i class="icon-eject-1"></i> <span class="i-name">icon-eject-1</span><span class="i-code">0xea99</span></div>
        <div title="Code: 0xea9a" class="the-icons span3"><i class="icon-eject-alt-outline"></i> <span class="i-name">icon-eject-alt-outline</span><span class="i-code">0xea9a</span></div>
        <div title="Code: 0xea9b" class="the-icons span3"><i class="icon-eject-alt"></i> <span class="i-name">icon-eject-alt</span><span class="i-code">0xea9b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xea9c" class="the-icons span3"><i class="icon-bat1"></i> <span class="i-name">icon-bat1</span><span class="i-code">0xea9c</span></div>
        <div title="Code: 0xea9d" class="the-icons span3"><i class="icon-bat2"></i> <span class="i-name">icon-bat2</span><span class="i-code">0xea9d</span></div>
        <div title="Code: 0xea9e" class="the-icons span3"><i class="icon-bat3"></i> <span class="i-name">icon-bat3</span><span class="i-code">0xea9e</span></div>
        <div title="Code: 0xea9f" class="the-icons span3"><i class="icon-bat4"></i> <span class="i-name">icon-bat4</span><span class="i-code">0xea9f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeaa0" class="the-icons span3"><i class="icon-bat-charge"></i> <span class="i-name">icon-bat-charge</span><span class="i-code">0xeaa0</span></div>
        <div title="Code: 0xeaa1" class="the-icons span3"><i class="icon-plug"></i> <span class="i-name">icon-plug</span><span class="i-code">0xeaa1</span></div>
        <div title="Code: 0xeaa2" class="the-icons span3"><i class="icon-target-outline"></i> <span class="i-name">icon-target-outline</span><span class="i-code">0xeaa2</span></div>
        <div title="Code: 0xeaa3" class="the-icons span3"><i class="icon-target-1"></i> <span class="i-name">icon-target-1</span><span class="i-code">0xeaa3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeaa4" class="the-icons span3"><i class="icon-wifi-outline"></i> <span class="i-name">icon-wifi-outline</span><span class="i-code">0xeaa4</span></div>
        <div title="Code: 0xeaa5" class="the-icons span3"><i class="icon-wifi"></i> <span class="i-name">icon-wifi</span><span class="i-code">0xeaa5</span></div>
        <div title="Code: 0xeaa6" class="the-icons span3"><i class="icon-desktop-1"></i> <span class="i-name">icon-desktop-1</span><span class="i-code">0xeaa6</span></div>
        <div title="Code: 0xeaa7" class="the-icons span3"><i class="icon-laptop-1"></i> <span class="i-name">icon-laptop-1</span><span class="i-code">0xeaa7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeaa8" class="the-icons span3"><i class="icon-tablet-1"></i> <span class="i-name">icon-tablet-1</span><span class="i-code">0xeaa8</span></div>
        <div title="Code: 0xeaa9" class="the-icons span3"><i class="icon-mobile-1"></i> <span class="i-name">icon-mobile-1</span><span class="i-code">0xeaa9</span></div>
        <div title="Code: 0xeaaa" class="the-icons span3"><i class="icon-contrast"></i> <span class="i-name">icon-contrast</span><span class="i-code">0xeaaa</span></div>
        <div title="Code: 0xeaab" class="the-icons span3"><i class="icon-globe-outline"></i> <span class="i-name">icon-globe-outline</span><span class="i-code">0xeaab</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeaac" class="the-icons span3"><i class="icon-globe-1"></i> <span class="i-name">icon-globe-1</span><span class="i-code">0xeaac</span></div>
        <div title="Code: 0xeaad" class="the-icons span3"><i class="icon-globe-alt-outline"></i> <span class="i-name">icon-globe-alt-outline</span><span class="i-code">0xeaad</span></div>
        <div title="Code: 0xeaae" class="the-icons span3"><i class="icon-globe-alt"></i> <span class="i-name">icon-globe-alt</span><span class="i-code">0xeaae</span></div>
        <div title="Code: 0xeaaf" class="the-icons span3"><i class="icon-sun-1"></i> <span class="i-name">icon-sun-1</span><span class="i-code">0xeaaf</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeab0" class="the-icons span3"><i class="icon-sun-filled"></i> <span class="i-name">icon-sun-filled</span><span class="i-code">0xeab0</span></div>
        <div title="Code: 0xeab1" class="the-icons span3"><i class="icon-cloud-1"></i> <span class="i-name">icon-cloud-1</span><span class="i-code">0xeab1</span></div>
        <div title="Code: 0xeab2" class="the-icons span3"><i class="icon-flash-outline"></i> <span class="i-name">icon-flash-outline</span><span class="i-code">0xeab2</span></div>
        <div title="Code: 0xeab3" class="the-icons span3"><i class="icon-flash-1"></i> <span class="i-name">icon-flash-1</span><span class="i-code">0xeab3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeab4" class="the-icons span3"><i class="icon-moon-1"></i> <span class="i-name">icon-moon-1</span><span class="i-code">0xeab4</span></div>
        <div title="Code: 0xeab5" class="the-icons span3"><i class="icon-waves-outline"></i> <span class="i-name">icon-waves-outline</span><span class="i-code">0xeab5</span></div>
        <div title="Code: 0xeab6" class="the-icons span3"><i class="icon-waves"></i> <span class="i-name">icon-waves</span><span class="i-code">0xeab6</span></div>
        <div title="Code: 0xeab7" class="the-icons span3"><i class="icon-rain"></i> <span class="i-name">icon-rain</span><span class="i-code">0xeab7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeab8" class="the-icons span3"><i class="icon-cloud-sun"></i> <span class="i-name">icon-cloud-sun</span><span class="i-code">0xeab8</span></div>
        <div title="Code: 0xeab9" class="the-icons span3"><i class="icon-drizzle"></i> <span class="i-name">icon-drizzle</span><span class="i-code">0xeab9</span></div>
        <div title="Code: 0xeaba" class="the-icons span3"><i class="icon-snow"></i> <span class="i-name">icon-snow</span><span class="i-code">0xeaba</span></div>
        <div title="Code: 0xeabb" class="the-icons span3"><i class="icon-cloud-flash"></i> <span class="i-name">icon-cloud-flash</span><span class="i-code">0xeabb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeabc" class="the-icons span3"><i class="icon-cloud-wind"></i> <span class="i-name">icon-cloud-wind</span><span class="i-code">0xeabc</span></div>
        <div title="Code: 0xeabd" class="the-icons span3"><i class="icon-wind"></i> <span class="i-name">icon-wind</span><span class="i-code">0xeabd</span></div>
        <div title="Code: 0xeabe" class="the-icons span3"><i class="icon-plane-outline"></i> <span class="i-name">icon-plane-outline</span><span class="i-code">0xeabe</span></div>
        <div title="Code: 0xeabf" class="the-icons span3"><i class="icon-plane"></i> <span class="i-name">icon-plane</span><span class="i-code">0xeabf</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeac0" class="the-icons span3"><i class="icon-leaf-1"></i> <span class="i-name">icon-leaf-1</span><span class="i-code">0xeac0</span></div>
        <div title="Code: 0xeac1" class="the-icons span3"><i class="icon-lifebuoy-1"></i> <span class="i-name">icon-lifebuoy-1</span><span class="i-code">0xeac1</span></div>
        <div title="Code: 0xeac2" class="the-icons span3"><i class="icon-briefcase-1"></i> <span class="i-name">icon-briefcase-1</span><span class="i-code">0xeac2</span></div>
        <div title="Code: 0xeac3" class="the-icons span3"><i class="icon-brush"></i> <span class="i-name">icon-brush</span><span class="i-code">0xeac3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeac4" class="the-icons span3"><i class="icon-pipette"></i> <span class="i-name">icon-pipette</span><span class="i-code">0xeac4</span></div>
        <div title="Code: 0xeac5" class="the-icons span3"><i class="icon-power-outline"></i> <span class="i-name">icon-power-outline</span><span class="i-code">0xeac5</span></div>
        <div title="Code: 0xeac6" class="the-icons span3"><i class="icon-power"></i> <span class="i-name">icon-power</span><span class="i-code">0xeac6</span></div>
        <div title="Code: 0xeac7" class="the-icons span3"><i class="icon-check-outline"></i> <span class="i-name">icon-check-outline</span><span class="i-code">0xeac7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeac8" class="the-icons span3"><i class="icon-check-1"></i> <span class="i-name">icon-check-1</span><span class="i-code">0xeac8</span></div>
        <div title="Code: 0xeac9" class="the-icons span3"><i class="icon-gift-1"></i> <span class="i-name">icon-gift-1</span><span class="i-code">0xeac9</span></div>
        <div title="Code: 0xeaca" class="the-icons span3"><i class="icon-temperatire"></i> <span class="i-name">icon-temperatire</span><span class="i-code">0xeaca</span></div>
        <div title="Code: 0xeacb" class="the-icons span3"><i class="icon-chart-outline"></i> <span class="i-name">icon-chart-outline</span><span class="i-code">0xeacb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeacc" class="the-icons span3"><i class="icon-chart"></i> <span class="i-name">icon-chart</span><span class="i-code">0xeacc</span></div>
        <div title="Code: 0xeacd" class="the-icons span3"><i class="icon-chart-alt-outline"></i> <span class="i-name">icon-chart-alt-outline</span><span class="i-code">0xeacd</span></div>
        <div title="Code: 0xeace" class="the-icons span3"><i class="icon-chart-alt"></i> <span class="i-name">icon-chart-alt</span><span class="i-code">0xeace</span></div>
        <div title="Code: 0xeacf" class="the-icons span3"><i class="icon-chart-bar-outline"></i> <span class="i-name">icon-chart-bar-outline</span><span class="i-code">0xeacf</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xead0" class="the-icons span3"><i class="icon-chart-bar-1"></i> <span class="i-name">icon-chart-bar-1</span><span class="i-code">0xead0</span></div>
        <div title="Code: 0xead1" class="the-icons span3"><i class="icon-chart-pie-outline"></i> <span class="i-name">icon-chart-pie-outline</span><span class="i-code">0xead1</span></div>
        <div title="Code: 0xead2" class="the-icons span3"><i class="icon-chart-pie"></i> <span class="i-name">icon-chart-pie</span><span class="i-code">0xead2</span></div>
        <div title="Code: 0xead3" class="the-icons span3"><i class="icon-ticket-1"></i> <span class="i-name">icon-ticket-1</span><span class="i-code">0xead3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xead4" class="the-icons span3"><i class="icon-credit-card-1"></i> <span class="i-name">icon-credit-card-1</span><span class="i-code">0xead4</span></div>
        <div title="Code: 0xead5" class="the-icons span3"><i class="icon-clipboard"></i> <span class="i-name">icon-clipboard</span><span class="i-code">0xead5</span></div>
        <div title="Code: 0xead6" class="the-icons span3"><i class="icon-database-1"></i> <span class="i-name">icon-database-1</span><span class="i-code">0xead6</span></div>
        <div title="Code: 0xead7" class="the-icons span3"><i class="icon-key-outline"></i> <span class="i-name">icon-key-outline</span><span class="i-code">0xead7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xead8" class="the-icons span3"><i class="icon-key-1"></i> <span class="i-name">icon-key-1</span><span class="i-code">0xead8</span></div>
        <div title="Code: 0xead9" class="the-icons span3"><i class="icon-flow-split"></i> <span class="i-name">icon-flow-split</span><span class="i-code">0xead9</span></div>
        <div title="Code: 0xeada" class="the-icons span3"><i class="icon-flow-merge"></i> <span class="i-name">icon-flow-merge</span><span class="i-code">0xeada</span></div>
        <div title="Code: 0xeadb" class="the-icons span3"><i class="icon-flow-parallel"></i> <span class="i-name">icon-flow-parallel</span><span class="i-code">0xeadb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeadc" class="the-icons span3"><i class="icon-flow-cross"></i> <span class="i-name">icon-flow-cross</span><span class="i-code">0xeadc</span></div>
        <div title="Code: 0xeadd" class="the-icons span3"><i class="icon-certificate-outline"></i> <span class="i-name">icon-certificate-outline</span><span class="i-code">0xeadd</span></div>
        <div title="Code: 0xeade" class="the-icons span3"><i class="icon-certificate-1"></i> <span class="i-name">icon-certificate-1</span><span class="i-code">0xeade</span></div>
        <div title="Code: 0xeadf" class="the-icons span3"><i class="icon-scissors-outline"></i> <span class="i-name">icon-scissors-outline</span><span class="i-code">0xeadf</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeae0" class="the-icons span3"><i class="icon-scissors-1"></i> <span class="i-name">icon-scissors-1</span><span class="i-code">0xeae0</span></div>
        <div title="Code: 0xeae1" class="the-icons span3"><i class="icon-flask"></i> <span class="i-name">icon-flask</span><span class="i-code">0xeae1</span></div>
        <div title="Code: 0xeae2" class="the-icons span3"><i class="icon-wine"></i> <span class="i-name">icon-wine</span><span class="i-code">0xeae2</span></div>
        <div title="Code: 0xeae3" class="the-icons span3"><i class="icon-coffee-1"></i> <span class="i-name">icon-coffee-1</span><span class="i-code">0xeae3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeae4" class="the-icons span3"><i class="icon-beer-1"></i> <span class="i-name">icon-beer-1</span><span class="i-code">0xeae4</span></div>
        <div title="Code: 0xeae5" class="the-icons span3"><i class="icon-anchor-outline"></i> <span class="i-name">icon-anchor-outline</span><span class="i-code">0xeae5</span></div>
        <div title="Code: 0xeae6" class="the-icons span3"><i class="icon-anchor-1"></i> <span class="i-name">icon-anchor-1</span><span class="i-code">0xeae6</span></div>
        <div title="Code: 0xeae7" class="the-icons span3"><i class="icon-puzzle-outline"></i> <span class="i-name">icon-puzzle-outline</span><span class="i-code">0xeae7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeae8" class="the-icons span3"><i class="icon-puzzle-1"></i> <span class="i-name">icon-puzzle-1</span><span class="i-code">0xeae8</span></div>
        <div title="Code: 0xeae9" class="the-icons span3"><i class="icon-tree-1"></i> <span class="i-name">icon-tree-1</span><span class="i-code">0xeae9</span></div>
        <div title="Code: 0xeaea" class="the-icons span3"><i class="icon-calculator"></i> <span class="i-name">icon-calculator</span><span class="i-code">0xeaea</span></div>
        <div title="Code: 0xeaeb" class="the-icons span3"><i class="icon-infinity-outline"></i> <span class="i-name">icon-infinity-outline</span><span class="i-code">0xeaeb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeaec" class="the-icons span3"><i class="icon-infinity"></i> <span class="i-name">icon-infinity</span><span class="i-code">0xeaec</span></div>
        <div title="Code: 0xeaed" class="the-icons span3"><i class="icon-pi-outline"></i> <span class="i-name">icon-pi-outline</span><span class="i-code">0xeaed</span></div>
        <div title="Code: 0xeaee" class="the-icons span3"><i class="icon-pi"></i> <span class="i-name">icon-pi</span><span class="i-code">0xeaee</span></div>
        <div title="Code: 0xeaef" class="the-icons span3"><i class="icon-at"></i> <span class="i-name">icon-at</span><span class="i-code">0xeaef</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeaf0" class="the-icons span3"><i class="icon-at-circled"></i> <span class="i-name">icon-at-circled</span><span class="i-code">0xeaf0</span></div>
        <div title="Code: 0xeaf1" class="the-icons span3"><i class="icon-looped-square-outline"></i> <span class="i-name">icon-looped-square-outline</span><span class="i-code">0xeaf1</span></div>
        <div title="Code: 0xeaf2" class="the-icons span3"><i class="icon-looped-square-interest"></i> <span class="i-name">icon-looped-square-interest</span><span class="i-code">0xeaf2</span></div>
        <div title="Code: 0xeaf3" class="the-icons span3"><i class="icon-sort-alphabet-outline"></i> <span class="i-name">icon-sort-alphabet-outline</span><span class="i-code">0xeaf3</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeaf4" class="the-icons span3"><i class="icon-sort-alphabet"></i> <span class="i-name">icon-sort-alphabet</span><span class="i-code">0xeaf4</span></div>
        <div title="Code: 0xeaf5" class="the-icons span3"><i class="icon-sort-numeric-outline"></i> <span class="i-name">icon-sort-numeric-outline</span><span class="i-code">0xeaf5</span></div>
        <div title="Code: 0xeaf6" class="the-icons span3"><i class="icon-sort-numeric"></i> <span class="i-name">icon-sort-numeric</span><span class="i-code">0xeaf6</span></div>
        <div title="Code: 0xeaf7" class="the-icons span3"><i class="icon-dribbble-circled"></i> <span class="i-name">icon-dribbble-circled</span><span class="i-code">0xeaf7</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeaf8" class="the-icons span3"><i class="icon-dribbble-1"></i> <span class="i-name">icon-dribbble-1</span><span class="i-code">0xeaf8</span></div>
        <div title="Code: 0xeaf9" class="the-icons span3"><i class="icon-facebook-circled"></i> <span class="i-name">icon-facebook-circled</span><span class="i-code">0xeaf9</span></div>
        <div title="Code: 0xeafa" class="the-icons span3"><i class="icon-facebook-1"></i> <span class="i-name">icon-facebook-1</span><span class="i-code">0xeafa</span></div>
        <div title="Code: 0xeafb" class="the-icons span3"><i class="icon-flickr-circled"></i> <span class="i-name">icon-flickr-circled</span><span class="i-code">0xeafb</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeafc" class="the-icons span3"><i class="icon-flickr-1"></i> <span class="i-name">icon-flickr-1</span><span class="i-code">0xeafc</span></div>
        <div title="Code: 0xeafd" class="the-icons span3"><i class="icon-github-circled-1"></i> <span class="i-name">icon-github-circled-1</span><span class="i-code">0xeafd</span></div>
        <div title="Code: 0xeafe" class="the-icons span3"><i class="icon-github-1"></i> <span class="i-name">icon-github-1</span><span class="i-code">0xeafe</span></div>
        <div title="Code: 0xeaff" class="the-icons span3"><i class="icon-lastfm-circled"></i> <span class="i-name">icon-lastfm-circled</span><span class="i-code">0xeaff</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb00" class="the-icons span3"><i class="icon-lastfm"></i> <span class="i-name">icon-lastfm</span><span class="i-code">0xeb00</span></div>
        <div title="Code: 0xeb01" class="the-icons span3"><i class="icon-linkedin-circled"></i> <span class="i-name">icon-linkedin-circled</span><span class="i-code">0xeb01</span></div>
        <div title="Code: 0xeb02" class="the-icons span3"><i class="icon-linkedin-1"></i> <span class="i-name">icon-linkedin-1</span><span class="i-code">0xeb02</span></div>
        <div title="Code: 0xeb03" class="the-icons span3"><i class="icon-pinterest-circled-1"></i> <span class="i-name">icon-pinterest-circled-1</span><span class="i-code">0xeb03</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb04" class="the-icons span3"><i class="icon-pinterest"></i> <span class="i-name">icon-pinterest</span><span class="i-code">0xeb04</span></div>
        <div title="Code: 0xeb05" class="the-icons span3"><i class="icon-skype-outline"></i> <span class="i-name">icon-skype-outline</span><span class="i-code">0xeb05</span></div>
        <div title="Code: 0xeb06" class="the-icons span3"><i class="icon-skype-1"></i> <span class="i-name">icon-skype-1</span><span class="i-code">0xeb06</span></div>
        <div title="Code: 0xeb07" class="the-icons span3"><i class="icon-tumbler-circled"></i> <span class="i-name">icon-tumbler-circled</span><span class="i-code">0xeb07</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb08" class="the-icons span3"><i class="icon-tumbler"></i> <span class="i-name">icon-tumbler</span><span class="i-code">0xeb08</span></div>
        <div title="Code: 0xeb09" class="the-icons span3"><i class="icon-twitter-circled"></i> <span class="i-name">icon-twitter-circled</span><span class="i-code">0xeb09</span></div>
        <div title="Code: 0xeb0a" class="the-icons span3"><i class="icon-twitter-1"></i> <span class="i-name">icon-twitter-1</span><span class="i-code">0xeb0a</span></div>
        <div title="Code: 0xeb0b" class="the-icons span3"><i class="icon-vimeo-circled"></i> <span class="i-name">icon-vimeo-circled</span><span class="i-code">0xeb0b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb0c" class="the-icons span3"><i class="icon-vimeo"></i> <span class="i-name">icon-vimeo</span><span class="i-code">0xeb0c</span></div>
        <div title="Code: 0xeb0d" class="the-icons span3"><i class="icon-music-2"></i> <span class="i-name">icon-music-2</span><span class="i-code">0xeb0d</span></div>
        <div title="Code: 0xeb0e" class="the-icons span3"><i class="icon-search-2"></i> <span class="i-name">icon-search-2</span><span class="i-code">0xeb0e</span></div>
        <div title="Code: 0xeb0f" class="the-icons span3"><i class="icon-mail-2"></i> <span class="i-name">icon-mail-2</span><span class="i-code">0xeb0f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb10" class="the-icons span3"><i class="icon-heart-2"></i> <span class="i-name">icon-heart-2</span><span class="i-code">0xeb10</span></div>
        <div title="Code: 0xeb11" class="the-icons span3"><i class="icon-star-2"></i> <span class="i-name">icon-star-2</span><span class="i-code">0xeb11</span></div>
        <div title="Code: 0xeb12" class="the-icons span3"><i class="icon-user-2"></i> <span class="i-name">icon-user-2</span><span class="i-code">0xeb12</span></div>
        <div title="Code: 0xeb13" class="the-icons span3"><i class="icon-videocam-2"></i> <span class="i-name">icon-videocam-2</span><span class="i-code">0xeb13</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb14" class="the-icons span3"><i class="icon-camera-2"></i> <span class="i-name">icon-camera-2</span><span class="i-code">0xeb14</span></div>
        <div title="Code: 0xeb15" class="the-icons span3"><i class="icon-photo"></i> <span class="i-name">icon-photo</span><span class="i-code">0xeb15</span></div>
        <div title="Code: 0xeb16" class="the-icons span3"><i class="icon-attach-2"></i> <span class="i-name">icon-attach-2</span><span class="i-code">0xeb16</span></div>
        <div title="Code: 0xeb17" class="the-icons span3"><i class="icon-lock-2"></i> <span class="i-name">icon-lock-2</span><span class="i-code">0xeb17</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb18" class="the-icons span3"><i class="icon-eye-2"></i> <span class="i-name">icon-eye-2</span><span class="i-code">0xeb18</span></div>
        <div title="Code: 0xeb19" class="the-icons span3"><i class="icon-tag-2"></i> <span class="i-name">icon-tag-2</span><span class="i-code">0xeb19</span></div>
        <div title="Code: 0xeb1a" class="the-icons span3"><i class="icon-thumbs-up-2"></i> <span class="i-name">icon-thumbs-up-2</span><span class="i-code">0xeb1a</span></div>
        <div title="Code: 0xeb1b" class="the-icons span3"><i class="icon-pencil-2"></i> <span class="i-name">icon-pencil-2</span><span class="i-code">0xeb1b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb1c" class="the-icons span3"><i class="icon-comment-2"></i> <span class="i-name">icon-comment-2</span><span class="i-code">0xeb1c</span></div>
        <div title="Code: 0xeb1d" class="the-icons span3"><i class="icon-location-2"></i> <span class="i-name">icon-location-2</span><span class="i-code">0xeb1d</span></div>
        <div title="Code: 0xeb1e" class="the-icons span3"><i class="icon-cup"></i> <span class="i-name">icon-cup</span><span class="i-code">0xeb1e</span></div>
        <div title="Code: 0xeb1f" class="the-icons span3"><i class="icon-trash-2"></i> <span class="i-name">icon-trash-2</span><span class="i-code">0xeb1f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb20" class="the-icons span3"><i class="icon-doc-2"></i> <span class="i-name">icon-doc-2</span><span class="i-code">0xeb20</span></div>
        <div title="Code: 0xeb21" class="the-icons span3"><i class="icon-note"></i> <span class="i-name">icon-note</span><span class="i-code">0xeb21</span></div>
        <div title="Code: 0xeb22" class="the-icons span3"><i class="icon-cog-2"></i> <span class="i-name">icon-cog-2</span><span class="i-code">0xeb22</span></div>
        <div title="Code: 0xeb23" class="the-icons span3"><i class="icon-params"></i> <span class="i-name">icon-params</span><span class="i-code">0xeb23</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb24" class="the-icons span3"><i class="icon-calendar-2"></i> <span class="i-name">icon-calendar-2</span><span class="i-code">0xeb24</span></div>
        <div title="Code: 0xeb25" class="the-icons span3"><i class="icon-sound"></i> <span class="i-name">icon-sound</span><span class="i-code">0xeb25</span></div>
        <div title="Code: 0xeb26" class="the-icons span3"><i class="icon-clock-2"></i> <span class="i-name">icon-clock-2</span><span class="i-code">0xeb26</span></div>
        <div title="Code: 0xeb27" class="the-icons span3"><i class="icon-lightbulb-2"></i> <span class="i-name">icon-lightbulb-2</span><span class="i-code">0xeb27</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb28" class="the-icons span3"><i class="icon-tv"></i> <span class="i-name">icon-tv</span><span class="i-code">0xeb28</span></div>
        <div title="Code: 0xeb29" class="the-icons span3"><i class="icon-desktop-2"></i> <span class="i-name">icon-desktop-2</span><span class="i-code">0xeb29</span></div>
        <div title="Code: 0xeb2a" class="the-icons span3"><i class="icon-mobile-2"></i> <span class="i-name">icon-mobile-2</span><span class="i-code">0xeb2a</span></div>
        <div title="Code: 0xeb2b" class="the-icons span3"><i class="icon-cd"></i> <span class="i-name">icon-cd</span><span class="i-code">0xeb2b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb2c" class="the-icons span3"><i class="icon-inbox-1"></i> <span class="i-name">icon-inbox-1</span><span class="i-code">0xeb2c</span></div>
        <div title="Code: 0xeb2d" class="the-icons span3"><i class="icon-globe-2"></i> <span class="i-name">icon-globe-2</span><span class="i-code">0xeb2d</span></div>
        <div title="Code: 0xeb2e" class="the-icons span3"><i class="icon-cloud-2"></i> <span class="i-name">icon-cloud-2</span><span class="i-code">0xeb2e</span></div>
        <div title="Code: 0xeb2f" class="the-icons span3"><i class="icon-paper-plane-1"></i> <span class="i-name">icon-paper-plane-1</span><span class="i-code">0xeb2f</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb30" class="the-icons span3"><i class="icon-fire-1"></i> <span class="i-name">icon-fire-1</span><span class="i-code">0xeb30</span></div>
        <div title="Code: 0xeb31" class="the-icons span3"><i class="icon-graduation-cap-1"></i> <span class="i-name">icon-graduation-cap-1</span><span class="i-code">0xeb31</span></div>
        <div title="Code: 0xeb32" class="the-icons span3"><i class="icon-megaphone-1"></i> <span class="i-name">icon-megaphone-1</span><span class="i-code">0xeb32</span></div>
        <div title="Code: 0xeb33" class="the-icons span3"><i class="icon-database-2"></i> <span class="i-name">icon-database-2</span><span class="i-code">0xeb33</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb34" class="the-icons span3"><i class="icon-key-2"></i> <span class="i-name">icon-key-2</span><span class="i-code">0xeb34</span></div>
        <div title="Code: 0xeb35" class="the-icons span3"><i class="icon-beaker-1"></i> <span class="i-name">icon-beaker-1</span><span class="i-code">0xeb35</span></div>
        <div title="Code: 0xeb36" class="the-icons span3"><i class="icon-truck-1"></i> <span class="i-name">icon-truck-1</span><span class="i-code">0xeb36</span></div>
        <div title="Code: 0xeb37" class="the-icons span3"><i class="icon-money-1"></i> <span class="i-name">icon-money-1</span><span class="i-code">0xeb37</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb38" class="the-icons span3"><i class="icon-food-1"></i> <span class="i-name">icon-food-1</span><span class="i-code">0xeb38</span></div>
        <div title="Code: 0xeb39" class="the-icons span3"><i class="icon-shop"></i> <span class="i-name">icon-shop</span><span class="i-code">0xeb39</span></div>
        <div title="Code: 0xeb3a" class="the-icons span3"><i class="icon-diamond"></i> <span class="i-name">icon-diamond</span><span class="i-code">0xeb3a</span></div>
        <div title="Code: 0xeb3b" class="the-icons span3"><i class="icon-t-shirt"></i> <span class="i-name">icon-t-shirt</span><span class="i-code">0xeb3b</span></div>
      </div>
      <div class="row">
        <div title="Code: 0xeb3c" class="the-icons span3"><i class="icon-wallet"></i> <span class="i-name">icon-wallet</span><span class="i-code">0xeb3c</span></div>
      </div>
    </div>
    <div class="container footer">Generated by <a href="http://fontello.com">fontello.com</a></div>
  </body>
</html>
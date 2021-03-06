<!doctype html>
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie10 lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html class="no-js lt-ie10" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chinese</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge, chrome=1">

  <!-- favicons -->

  <!-- Prerendering pages: be careful with this option -->
  <!-- <link rel="prerender" href="http://css-tricks.com"> -->

  <!-- Subresources:  -->
  <!-- Identify the resources that are the highest priority and should be requested before prefetched items -->
  <!-- <link rel="subresource" href="styles.css"> -->
  
  <!-- Prefetch DNS for external assets -->
  <!-- <link href="https://fontastic.s3.amazonaws.com" rel="dns-prefetch"> -->

  <!-- Preconnect for dynamic request URLs -->
  <!-- <link href='https://fonts.gstatic.com' rel='preconnect' crossorigin> -->
  
  <!-- Prefetch Resourses -->
  <!-- <link href="sprite.png" rel="prefetch"> -->
  <!-- <link href="http://mydomain.com/my-next-page.htm" rel="prerender"> -->

  <link rel="stylesheet" href="assets/css/main.css">
  <script>
    /* svg4everybody:js */
    !function(e,t){"function"==typeof define&&define.amd?define([],function(){return e.svg4everybody=t()}):"object"==typeof exports?module.exports=t():e.svg4everybody=t()}(this,function(){function e(e,t){if(t){var n=document.createDocumentFragment(),i=!e.getAttribute("viewBox")&&t.getAttribute("viewBox");i&&e.setAttribute("viewBox",i);for(var r=t.cloneNode(!0);r.childNodes.length;)n.appendChild(r.firstChild);e.appendChild(n)}}function t(t){t.onreadystatechange=function(){if(4===t.readyState){var n=t._cachedDocument;n||(n=t._cachedDocument=document.implementation.createHTMLDocument(""),n.body.innerHTML=t.responseText,t._cachedTarget={}),t._embeds.splice(0).map(function(i){var r=t._cachedTarget[i.id];r||(r=t._cachedTarget[i.id]=n.getElementById(i.id)),e(i.svg,r)})}},t.onreadystatechange()}function n(n){function i(){for(var n=0;n<h.length;){var d=h[n],s=d.parentNode;if(s&&/svg/i.test(s.nodeName)){var u=d.getAttribute("xlink:href")||d.getAttribute("href");if(r){var l=document.createElement("img");l.style.cssText="display:inline-block;",l.setAttribute("width",s.getAttribute("width")||s.clientWidth),l.setAttribute("height",s.getAttribute("height")||s.clientHeight),l.src=a(u,s,d),s.replaceChild(l,d)}else if(c&&(!o.validate||o.validate(u,s,d))){s.removeChild(d);var v=u.split("#"),b=v.shift(),f=v.join("#");if(b.length){var p=g[b];p||(p=g[b]=new XMLHttpRequest,p.open("GET",b),p.send(),p._embeds=[]),p._embeds.push({svg:s,id:f}),t(p)}else e(s,document.getElementById(f))}}else++n}m(i,67)}var r,a,o=Object(n);a=o.fallback||function(e){return e.replace(/\?[^#]+/,"").replace("#",".").replace(/^\./,"")+".png"+(/\?[^#]+/.exec(e)||[""])[0]},r="nosvg"in o?o.nosvg:/\bMSIE [1-8]\b/.test(navigator.userAgent),r&&(document.createElement("svg"),document.createElement("use"));var c,d=/\bMSIE [1-8]\.0\b/,s=/\bTrident\/[567]\b|\bMSIE (?:9|10)\.0\b/,u=/\bAppleWebKit\/(\d+)\b/,l=/\bEdge\/12\.(\d+)\b/;c="polyfill"in o?o.polyfill:d.test(navigator.userAgent)||s.test(navigator.userAgent)||(navigator.userAgent.match(l)||[])[1]<10547||(navigator.userAgent.match(u)||[])[1]<537;var g={},m=window.requestAnimationFrame||setTimeout,h=document.getElementsByTagName("use");c&&i()}return n});
    /* endinject */
    svg4everybody({
      polyfill: true,
      fallback: function (src, svg, use) {
        // src: current xlink:href String 
        // svg: current SVG Element 
        // use: current USE Element 

       var path = use.getAttribute('data-fallback');
       if (path) {
         return 'assets/svg/fallback/' + path + '.png';
       } else {
         return src.replace('sprites.svg#', 'fallback/') + '.png';
       }
      }
    });
    
    /* modernizr:js */
    /* endinject */
  </script>

  <!--[if (lt IE 9)]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/go-native.ie8.min.js"></script>
    
    <link href="http://externalcdn.com/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
    <link href="assets/cross-domain/respond.proxy.gif" id="respond-redirect" rel="respond-redirect" />
    <script src="assets/cross-domain/respond.proxy.js"></script>  
  <![endif]-->
</head>
<body>
<noscript>
  <p class="enable-js">
    To enjoy our website, you'll need to enable <b>JavaScript</b> in your web browser. Please <a href="http://enable-javascript.com/" target="_blank"><b>click here</b></a> to learn how.
  </p>
</noscript>
<!--[if lt IE 9]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<header class="site-header">
</header>
<ul>
  <?php
    $dir = "assets/chinese/img/";
    $files = glob("assets/chinese/img/*.*");
    $imgformat = array(".jpg", ".png", ".gif");
    for ($i=1; $i<count($files); $i++) {
      $path = $files[$i];
      echo 
      '<li class="item">
        <a href="' .$path. '"><img src="'.$path.'" alt=""></a>
      </li>'
      ;
    }
  ?>
</ul>

<script src="assets/js/script.js"></script>
</body>
</html>

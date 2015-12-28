<footer role="contentinfo" class="global">
    <a href="/" class="scroll-to-top"><span>To top</span></a>
    	<div id="site-info" role="contentinfo">
        <p class="attribution"><a href="/" title="the-inbetween.com by Mike Nowak">the-inbetween</a> (2000&mdash;) is the weblog of <a href="http://mikenowak.ca" title="Mike Nowak">Mike Nowak</a>. It is powered by <a href="http://wordpress.org/" title="WordPress">WordPress</a> and all original content is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/ca/" title="CC Attribution-Share Alike 2.5 License">Creative Commons Attribution-Share Alike 2.5 Canada License</a> except where otherwise noted.</p>
    </div>
  
    <div id="site-aside">
        <p>You can also find me on <a href="http://twitter.com/n0wak" target="_blank">Twitter</a>, my tumblr <a href="http://nullscapes.tumblr.com/" target="_blank">nullscapes</a>, <a href="http://www.flickr.com/photos/n0wak/">flickr</a>, &amp; <a href="http://500px.com/n0wak" target="_blank">500px</a>, and mostly everywhere on the web.</p>
	
    </div>	
</footer> <!-- end footer -->

<dialog><img src="" alt="Modal image" /></dialog>   
<?php 
	wp_footer(); // js scripts are inserted using this function 
?>
</body>
<script type="text/javascript">
/*!
* verge 1.9.1+201402130803
* https://github.com/ryanve/verge
* MIT License 2013 Ryan Van Etten
*/
  !function(a,b,c){"undefined"!=typeof module&&module.exports?module.exports=c():a[b]=c()}(this,"verge",function(){function a(){return{width:k(),height:l()}}function b(a,b){var c={};return b=+b||0,c.width=(c.right=a.right+b)-(c.left=a.left-b),c.height=(c.bottom=a.bottom+b)-(c.top=a.top-b),c}function c(a,c){return a=a&&!a.nodeType?a[0]:a,a&&1===a.nodeType?b(a.getBoundingClientRect(),c):!1}function d(b){b=null==b?a():1===b.nodeType?c(b):b;var d=b.height,e=b.width;return d="function"==typeof d?d.call(b):d,e="function"==typeof e?e.call(b):e,e/d}var e={},f="undefined"!=typeof window&&window,g="undefined"!=typeof document&&document,h=g&&g.documentElement,i=f.matchMedia||f.msMatchMedia,j=i?function(a){return!!i.call(f,a).matches}:function(){return!1},k=e.viewportW=function(){var a=h.clientWidth,b=f.innerWidth;return b>a?b:a},l=e.viewportH=function(){var a=h.clientHeight,b=f.innerHeight;return b>a?b:a};return e.mq=j,e.matchMedia=i?function(){return i.apply(f,arguments)}:function(){return{}},e.viewport=a,e.scrollX=function(){return f.pageXOffset||h.scrollLeft},e.scrollY=function(){return f.pageYOffset||h.scrollTop},e.rectangle=c,e.aspect=d,e.inX=function(a,b){var d=c(a,b);return!!d&&d.right>=0&&d.left<=k()},e.inY=function(a,b){var d=c(a,b);return!!d&&d.bottom>=0&&d.top<=l()},e.inViewport=function(a,b){var d=c(a,b);return!!d&&d.bottom>=0&&d.right>=0&&d.top<=l()&&d.left<=k()},e});
/* Mike Nowak */
var justScroll=function(){EasingFunctions={linear:function(t){return t},easeInQuad:function(t){return t*t},easeOutQuad:function(t){return t*(2-t)},easeInOutQuad:function(t){return t<.5?2*t*t:-1+(4-2*t)*t},easeInCubic:function(t){return t*t*t},easeOutCubic:function(t){return--t*t*t+1},easeInOutCubic:function(t){return t<.5?4*t*t*t:(t-1)*(2*t-2)*(2*t-2)+1},easeInQuart:function(t){return t*t*t*t},easeOutQuart:function(t){return 1- --t*t*t*t},easeInOutQuart:function(t){return t<.5?8*t*t*t*t:1-8*--t*t*t*t},easeInQuint:function(t){return t*t*t*t*t},easeOutQuint:function(t){return 1+--t*t*t*t*t},easeInOutQuint:function(t){return t<.5?16*t*t*t*t*t:1+16*--t*t*t*t*t}};var isTweening=false;var tweenPosition=0;var tweenDuration=60;var tweenEasing="easeInOutCubic";var tween=function(){var p=tweenPosition/tweenDuration;tweenPosition++;return EasingFunctions[tweenEasing](p)};var going=function(){var p=tween();window.scroll(0,tweenFrom+(tweenTo-tweenFrom)*p);if(p!=1){requestAnimationFrame(going)}else{isTweening=false}};var getScrollY=function(){var supportPageOffset=window.pageXOffset!==undefined;var isCSS1Compat=(document.compatMode||"")==="CSS1Compat";return supportPageOffset?window.pageYOffset:isCSS1Compat?document.documentElement.scrollTop:document.body.scrollTop};var to=function(scrollTo,time,easing){if(isTweening){return}if(typeof scrollTo=="number"){tweenTo=scrollTo}else if(typeof scrollTo=="string"){var el=document.getElementById(scrollTo);tweenTo=document.getElementById(scrollTo).offsetTop}else{tweenTo=0}if(typeof time=="number"){tweenDuration=Math.floor(time*60)}else{tweenDuration=60}if(typeof easing=="string"&&typeof EasingFunctions[easing]=="function"){tweenEasing=easing}else{tweenEasing="easeInOutCubic"}tweenPosition=0;isTweening=true;tweenFrom=getScrollY();if(typeof requestAnimationFrame=="undefined"){window.scroll(0,tweenTo)}else{going()}};return{to:to}}();
	   
// Debounce
function debounce(n,t,u){var e;return function(){var a=this,i=arguments,o=function(){e=null,u||n.apply(a,i)},r=u&&!e;clearTimeout(e),e=setTimeout(o,t),r&&n.apply(a,i)}}

/*!
 * contentloaded.js
 * Author: Diego Perini (diego.perini at gmail.com)
 * License: MIT
 * Version: 1.2
 * URL:
 * http://javascript.nwbox.com/ContentLoaded/
 * http://javascript.nwbox.com/ContentLoaded/MIT-LICENSE
 */
function contentLoaded(e,t){var a=!1,n=!0,o=e.document,c=o.documentElement,d=o.addEventListener,l=d?"addEventListener":"attachEvent",r=d?"removeEventListener":"detachEvent",y=d?"":"on",i=function(n){("readystatechange"!=n.type||"complete"==o.readyState)&&(("load"==n.type?e:o)[r](y+n.type,i,!1),!a&&(a=!0)&&t.call(e,n.type||n))},m=function(){try{c.doScroll("left")}catch(e){return void setTimeout(m,50)}i("poll")};if("complete"==o.readyState)t.call(e,"lazy");else{if(!d&&c.doScroll){try{n=!e.frameElement}catch(v){}n&&m()}o[l](y+"DOMContentLoaded",i,!1),o[l](y+"readystatechange",i,!1),e[l](y+"load",i,!1)}}

// weblog
inbetween = {
    "sizeText" : function() {		     
        var elem = document.getElementById("top-header");
        if (elem) {
            var h = parseInt(elem.offsetHeight, 10);                    
            var smax = 2000;
            var smin = 1;  
            var s = smin + (smax - smin)/2;
            var ls = -1;          
            elem.style.height = h + "px";                 
            var elemChild = (elem.getElementsByTagName("h1"))[0];
            if (elemChild) {               
                while(true) {              
                    elemChild.style.fontSize = s + "px";            
                    var ns = elemChild.offsetHeight;
                    if (ns > h) {
                        smax = s
                    } else if (ns < h) {
                        smin = s;                
                    }             
                    s = Math.floor(smin + (smax - smin)/2);
                    if (ls === s) {
                        break;
                    }            
                    ls = s;
                }          
            }
        }
    },

    "canUseDialog" : function () {
        var testdialog = document.createElement("dialog");
        testdialog.setAttribute("open", "");
        return testdialog.open == true;
    },

    "initializeDialogs" : function () {
    	var elems = document.getElementsByTagName("dialog");
    	var l = elems.length;
    	for (var i = 0; i < l; i++) {
    		elems[i].addEventListener("click", inbetween.onDialogClick, false);
    	}        
    },
    
    "onDialogClick" : function (e) {
        e.preventDefault();
        this.close();
        this.firstChild.setAttribute("src", "");
    },

    "initializeImageLinks" : function () {
        if (!inbetween.canUseDialog()) {
            return;
        }
        var elems = document.getElementsByTagName("a");
        var l = elems.length;
        for (var i = 0; i < l; i++) {
            var href = (elems[i].getAttribute("href")).toLowerCase();
            var ex = (href.substring(href.lastIndexOf(".")));
            switch (ex) {
                case ".jpg":
                case ".gif":
                case ".jpeg":
                case ".png":
                    elems[i].addEventListener("click", inbetween.onImageLink);            
            }
        }
    },
    "initializeImageLoad" : function () {
        var elems = document.getElementsByTagName("img");
        var l = elems.length;
        for (var i = 0; i < l; i++) {
            var href = (elems[i].getAttribute("data-src"));
            if (href) {
                elems[i].setAttribute("src", elems[i].getAttribute("data-src"));            
            }
        }
    },

    "onImageLink" : function (e) {      
        e.preventDefault();
        e.stopPropagation();
    
        var firstDiag = document.getElementsByTagName("dialog")[0];
        if (firstDiag) {
            var img = firstDiag.firstChild;
            img.setAttribute("src", this.getAttribute("href"));
            firstDiag.showModal();
        }
        return false;
    },
    
    "initializeScrollToTop" : function() {
        var scrollLink = document.getElementsByClassName("scroll-to-top");
        for (var i = 0; i < scrollLink.length; i++) {
            scrollLink[i].addEventListener("click", function(e) {
                e.preventDefault();
                justScroll.to(0, 0.8);
            });
        }
    }
};
	  

      
// Needs to be onload as we need the font loaded
window.onload = function() {
    if (window.scrollY == 0 && document.body.classList.contains("single-post")) {
  	  justScroll.to((parseInt(document.getElementById("top-header").offsetHeight, 10) - 6) , 0.6 );
    }
}
    
contentLoaded(window, function() {
    inbetween.initializeDialogs();
    inbetween.initializeImageLinks();       
    inbetween.sizeText();    
    inbetween.initializeScrollToTop();
    inbetween.initializeImageLoad();
    
});

var clientWidth = verge.viewportW();
var clientHeight = verge.viewportH();
// Just in case
window.onresize = debounce(function() {
    var w = verge.viewportW();
    var h = verge.viewportH();
    if (w != clientWidth || Math.abs(h - clientHeight) > 25) { 
        clientWidth = w;
        clientHeight = h;
        inbetween.sizeText();
    }
}, 300);
    

WebFontConfig = {
google: {
    families: ['Gentium+Basic:400<?php echoIfSingle(',400italic,700');?>', 'Comfortaa:700']
  },
  active : function() {	  
  	inbetween.sizeText();
  	
  },
  inactive: function() {
  	inbetween.sizeText();
  }
};

(function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
              '://ajax.googleapis.com/ajax/libs/webfont/1.5.6/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-1859107-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>
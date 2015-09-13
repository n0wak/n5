
	
<footer role="contentinfo" class="global">
    <a href="/" class="scroll-to-top"><span>Scroll to top</span></a>
    	<div id="site-info" role="contentinfo">
        <p class="attribution"><a href="/" title="the-inbetween.com by Mike Nowak">the-inbetween.com</a> (2000&mdash;) is the weblog of <a href="http://mikenowak.ca" title="Mike Nowak">Mike Nowak</a>. It is powered by <a href="http://wordpress.org/" title="WordPress">WordPress</a> and all <em>original</em> writing, code, design, and imagery is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.5/ca/" title="CC Attribution-Share Alike 2.5 License">Creative Commons Attribution-Share Alike 2.5 Canada License</a> except where otherwise noted.</p>
    </div>
  
    <div id="site-aside">
        <p>You can also find me on <a href="http://twitter.com/n0wak" target="_blank">Twitter</a>, my tumblr <a href="http://nullscapes.tumblr.com/" target="_blank">nullscapes</a>, <a href="http://www.flickr.com/photos/n0wak/">flickr</a>, &amp; <a href="http://500px.com/n0wak" target="_blank">500px</a>, and mostly everywhere on the web.</p>
	
    </div> <!-- end #inner-footer -->
	
</footer> <!-- end footer -->

<dialog><img src="" alt="Modal image" /></dialog>
    
                
		<?php 
			wp_footer(); // js scripts are inserted using this function 
		?>

</body>

            
<script>
WebFontConfig = {
  google: {
    families: ['Gentium+Basic:400,400italic', 'Comfortaa:700'] // 700
  },
  loading : function() {
    //console.log ("wfc loading");
  },
  active : function() {	  
      //console.log ("wfc active");
  	inbetween.sizeText();
  	
  },
  inactive: function() {
      //console.log ("wfc inactive");
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
  
</script>

<script type="text/javascript">
  /*!
   * verge 1.9.1+201402130803
   * https://github.com/ryanve/verge
   * MIT License 2013 Ryan Van Etten
   */
  !function(a,b,c){"undefined"!=typeof module&&module.exports?module.exports=c():a[b]=c()}(this,"verge",function(){function a(){return{width:k(),height:l()}}function b(a,b){var c={};return b=+b||0,c.width=(c.right=a.right+b)-(c.left=a.left-b),c.height=(c.bottom=a.bottom+b)-(c.top=a.top-b),c}function c(a,c){return a=a&&!a.nodeType?a[0]:a,a&&1===a.nodeType?b(a.getBoundingClientRect(),c):!1}function d(b){b=null==b?a():1===b.nodeType?c(b):b;var d=b.height,e=b.width;return d="function"==typeof d?d.call(b):d,e="function"==typeof e?e.call(b):e,e/d}var e={},f="undefined"!=typeof window&&window,g="undefined"!=typeof document&&document,h=g&&g.documentElement,i=f.matchMedia||f.msMatchMedia,j=i?function(a){return!!i.call(f,a).matches}:function(){return!1},k=e.viewportW=function(){var a=h.clientWidth,b=f.innerWidth;return b>a?b:a},l=e.viewportH=function(){var a=h.clientHeight,b=f.innerHeight;return b>a?b:a};return e.mq=j,e.matchMedia=i?function(){return i.apply(f,arguments)}:function(){return{}},e.viewport=a,e.scrollX=function(){return f.pageXOffset||h.scrollLeft},e.scrollY=function(){return f.pageYOffset||h.scrollTop},e.rectangle=c,e.aspect=d,e.inX=function(a,b){var d=c(a,b);return!!d&&d.right>=0&&d.left<=k()},e.inY=function(a,b){var d=c(a,b);return!!d&&d.bottom>=0&&d.top<=l()},e.inViewport=function(a,b){var d=c(a,b);return!!d&&d.bottom>=0&&d.right>=0&&d.top<=l()&&d.left<=k()},e});
  

var justScroll=function(){EasingFunctions={linear:function(t){return t},easeInQuad:function(t){return t*t},easeOutQuad:function(t){return t*(2-t)},easeInOutQuad:function(t){return t<.5?2*t*t:-1+(4-2*t)*t},easeInCubic:function(t){return t*t*t},easeOutCubic:function(t){return--t*t*t+1},easeInOutCubic:function(t){return t<.5?4*t*t*t:(t-1)*(2*t-2)*(2*t-2)+1},easeInQuart:function(t){return t*t*t*t},easeOutQuart:function(t){return 1- --t*t*t*t},easeInOutQuart:function(t){return t<.5?8*t*t*t*t:1-8*--t*t*t*t},easeInQuint:function(t){return t*t*t*t*t},easeOutQuint:function(t){return 1+--t*t*t*t*t},easeInOutQuint:function(t){return t<.5?16*t*t*t*t*t:1+16*--t*t*t*t*t}};var isTweening=false;var tweenPosition=0;var tweenDuration=60;var tweenEasing="easeInOutCubic";var tween=function(){var p=tweenPosition/tweenDuration;tweenPosition++;return EasingFunctions[tweenEasing](p)};var going=function(){var p=tween();window.scroll(0,tweenFrom+(tweenTo-tweenFrom)*p);if(p!=1){requestAnimationFrame(going)}else{isTweening=false}};var getScrollY=function(){var supportPageOffset=window.pageXOffset!==undefined;var isCSS1Compat=(document.compatMode||"")==="CSS1Compat";return supportPageOffset?window.pageYOffset:isCSS1Compat?document.documentElement.scrollTop:document.body.scrollTop};var to=function(scrollTo,time,easing){if(isTweening){return}if(typeof scrollTo=="number"){tweenTo=scrollTo}else if(typeof scrollTo=="string"){var el=document.getElementById(scrollTo);tweenTo=document.getElementById(scrollTo).offsetTop}else{tweenTo=0}if(typeof time=="number"){tweenDuration=Math.floor(time*60)}else{tweenDuration=60}if(typeof easing=="string"&&typeof EasingFunctions[easing]=="function"){tweenEasing=easing}else{tweenEasing="easeInOutCubic"}tweenPosition=0;isTweening=true;tweenFrom=getScrollY();if(typeof requestAnimationFrame=="undefined"){window.scroll(0,tweenTo)}else{going()}};return{to:to}}();
	   
// Returns a function, that, as long as it continues to be invoked, will not
// be triggered. The function will be called after it stops being called for
// N milliseconds. If `immediate` is passed, trigger the function on the
// leading edge, instead of the trailing.
function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	};
};

  
/*!
 * contentloaded.js
 *
 * Author: Diego Perini (diego.perini at gmail.com)
 * Summary: cross-browser wrapper for DOMContentLoaded
 * Updated: 20101020
 * License: MIT
 * Version: 1.2
 *
 * URL:
 * http://javascript.nwbox.com/ContentLoaded/
 * http://javascript.nwbox.com/ContentLoaded/MIT-LICENSE
 *
 */

// @win window reference
// @fn function reference
function contentLoaded(win, fn) {

	var done = false, top = true,

	doc = win.document,
	root = doc.documentElement,
	modern = doc.addEventListener,

	add = modern ? 'addEventListener' : 'attachEvent',
	rem = modern ? 'removeEventListener' : 'detachEvent',
	pre = modern ? '' : 'on',

	init = function(e) {
		if (e.type == 'readystatechange' && doc.readyState != 'complete') return;
		(e.type == 'load' ? win : doc)[rem](pre + e.type, init, false);
		if (!done && (done = true)) fn.call(win, e.type || e);
	},

	poll = function() {
		try { root.doScroll('left'); } catch(e) { setTimeout(poll, 50); return; }
		init('poll');
	};

	if (doc.readyState == 'complete') fn.call(win, 'lazy');
	else {
		if (!modern && root.doScroll) {
			try { top = !win.frameElement; } catch(e) { }
			if (top) poll();
		}
		doc[add](pre + 'DOMContentLoaded', init, false);
		doc[add](pre + 'readystatechange', init, false);
		win[add](pre + 'load', init, false);
	}

}

 
    
inbetween = {
  
    // 
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
                    var ns = elemChild.offsetHeight; // p.innerHeight();
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
        this.removeAttribute("open");
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

    "onImageLink" : function (e) {      
        e.preventDefault();
        e.stopPropagation();
    
        var firstDiag = document.getElementsByTagName("dialog")[0];
        firstDiag.firstChild.setAttribute("src", this.getAttribute("href"));
        firstDiag.show();
  
        return false;
    }
};
	  
	  
      
     
    
    
    
    
   
      
      

    
      
// Needs to be onload as we need the font loaded
window.onload = function() {
    console.log ("WINDOW ON LOAD"); 
    //inbetween.sizeText();
    
    /*if (window.scrollY == 0 && document.body.classList.contains("single-post")) {
        //alert ("SINGLE POST 0");        
        console.log("scroll into view");
        document.getElementById("single-post").scrollIntoView(false);
    }*/
    
    //if (window.scrollY == 0 && document.body.classList.contains("single-post")) {
      //  var p = (parseInt(document.getElementById("top-header").offsetHeight, 10));
        //window.scrollTo(0, p);
    //}
    
   // window.scrollTo(0, 0);
    
    if (window.scrollY == 0 && document.body.classList.contains("single-post")) {
  	  justScroll.to((parseInt(document.getElementById("top-header").offsetHeight, 10) - 6) , 0.6 );
    }
}
    
contentLoaded(window, function() {
    //window.addEventListener("DOMContentLoaded", function(e) {
    console.log ("ON DOM LOAD", inbetween);
    inbetween.initializeDialogs();
    inbetween.initializeImageLinks();       
    inbetween.sizeText();  
    
    
    //window.scroll(0, document.getElementById("top-header").offsetHeight);
    
    //window.scrollTo(0, 0);
    
    
});


var clientWidth = verge.viewportW();
var clientHeight = verge.viewportH();
// Just in case
window.onresize = debounce(function() {
    var w = verge.viewportW();
    var h = verge.viewportH();
    if (w != clientWidth || Math.abs(h - clientHeight) > 25) { // Only if width changes. If height changes it's possible it's because of andoid ui hiding.
        

        console.log ("onresize " + Math.abs(h - clientHeight));
        clientWidth = w;
        clientHeight = h;
        inbetween.sizeText();
    }
}, 300);
    
    
        
    

var scrollLink = document.getElementsByClassName("scroll-to-top");
    
for (var i = 0; i < scrollLink.length; i++) {
    scrollLink[i].addEventListener("click", function(e) {
        e.preventDefault();
        justScroll.to(0, 0.8);
    });
}
    
window.onscroll = function() {
      //console.log (window.scrollY, window.scrollY > verge.viewportH()*0.8);      
}
      
	 
		  
	  </script>
</html>
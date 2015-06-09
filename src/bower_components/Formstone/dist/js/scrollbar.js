/*! formstone v0.6.4 [scrollbar.js] 2015-06-08 | MIT License | formstone.it */

!function(a,b){"use strict";function c(){r=b.$body}function d(){w.iterate.call(y,i)}function e(){y=a(t.base)}function f(a){var b="";b+='<div class="'+u.bar+'">',b+='<div class="'+u.track+'">',b+='<span class="'+u.handle+'"></span>',b+="</div></div>",a.paddingRight=parseInt(this.css("padding-right"),10),a.paddingBottom=parseInt(this.css("padding-bottom"),10),this.addClass([u.base,a.customClass,a.horizontal?u.horizontal:""].join(" ")).wrapInner('<div class="'+u.content+'" />').prepend(b),a.$content=this.find(t.content),a.$bar=this.find(t.bar),a.$track=this.find(t.track),a.$handle=this.find(t.handle),a.trackMargin=parseInt(a.trackMargin,10),a.$content.on(v.scroll,a,j),this.on(v.touchMouseDown,t.track,a,l).on(v.touchMouseDown,t.handle,a,m),i(a),e()}function g(a){a.$bar.remove(),a.$content.off(v.namespace).contents().unwrap(),this.removeClass([u.base,u.active,a.customClass].join(" ")).off(v.namespace)}function h(b,c,d){var e=d||b.duration,f={};if("number"!==a.type(c)){var g=a(c);if(g.length>0){var h=g.position();c=b.horizontal?h.left+b.$content.scrollLeft():h.top+b.$content.scrollTop()}else c=b.$content.scrollTop()}f[b.horizontal?"scrollLeft":"scrollTop"]=c,b.$content.stop().animate(f,e)}function i(a){a.$el.addClass(u.isSetup);var b={},c={},d={},e=0,f=!0;if(a.horizontal){a.barHeight=a.$content[0].offsetHeight-a.$content[0].clientHeight,a.frameWidth=a.$content.outerWidth(),a.trackWidth=a.frameWidth-2*a.trackMargin,a.scrollWidth=a.$content[0].scrollWidth,a.ratio=a.trackWidth/a.scrollWidth,a.trackRatio=a.trackWidth/a.scrollWidth,a.handleWidth=a.handleSize>0?a.handleSize:a.trackWidth*a.trackRatio,a.scrollRatio=(a.scrollWidth-a.frameWidth)/(a.trackWidth-a.handleWidth),a.handleBounds={left:0,right:a.trackWidth-a.handleWidth},a.$content.css({paddingBottom:a.barHeight+a.paddingBottom});var g=a.$content.scrollLeft();e=g*a.ratio,f=a.scrollWidth<=a.frameWidth,b={width:a.frameWidth},c={width:a.trackWidth,marginLeft:a.trackMargin,marginRight:a.trackMargin},d={width:a.handleWidth}}else{a.barWidth=a.$content[0].offsetWidth-a.$content[0].clientWidth,a.frameHeight=a.$content.outerHeight(),a.trackHeight=a.frameHeight-2*a.trackMargin,a.scrollHeight=a.$content[0].scrollHeight,a.ratio=a.trackHeight/a.scrollHeight,a.trackRatio=a.trackHeight/a.scrollHeight,a.handleHeight=a.handleSize>0?a.handleSize:a.trackHeight*a.trackRatio,a.scrollRatio=(a.scrollHeight-a.frameHeight)/(a.trackHeight-a.handleHeight),a.handleBounds={top:0,bottom:a.trackHeight-a.handleHeight};var h=a.$content.scrollTop();e=h*a.ratio,f=a.scrollHeight<=a.frameHeight,b={height:a.frameHeight},c={height:a.trackHeight,marginBottom:a.trackMargin,marginTop:a.trackMargin},d={height:a.handleHeight}}f?a.$el.removeClass(u.active):a.$el.addClass(u.active),a.$bar.css(b),a.$track.css(c),a.$handle.css(d),q(a,e),a.$el.removeClass(u.setup)}function j(a){w.killEvent(a);var b=a.data,c={};if(b.horizontal){var d=b.$content.scrollLeft();0>d&&(d=0),b.handleLeft=d/b.scrollRatio,b.handleLeft>b.handleBounds.right&&(b.handleLeft=b.handleBounds.right),c={left:b.handleLeft}}else{var e=b.$content.scrollTop();0>e&&(e=0),b.handleTop=e/b.scrollRatio,b.handleTop>b.handleBounds.bottom&&(b.handleTop=b.handleBounds.bottom),c={top:b.handleTop}}b.$handle.css(c)}function k(b){var c=b.originalEvent,d="undefined"!==a.type(c.targetTouches)?c.targetTouches[0]:null;return{pageX:d?d.pageX:b.clientX,pageY:d?d.pageY:b.clientY}}function l(a){w.killEvent(a);var b=a.data,c=k(a),d=b.$track.offset();b.horizontal?(b.pointerStart=c.pageX,b.handleLeft=c.pageX-d.left+x.scrollLeft()-b.handleWidth/2,q(b,b.handleLeft)):(b.pointerStart=c.pageY,b.handleTop=c.pageY-d.top+x.scrollTop()-b.handleHeight/2,q(b,b.handleTop)),n(b)}function m(a){w.killEvent(a);var b=a.data,c=k(a);b.horizontal?(b.pointerStart=c.pageX,b.handleLeft=parseInt(b.$handle.css("left"),10)):(b.pointerStart=c.pageY,b.handleTop=parseInt(b.$handle.css("top"),10)),n(b)}function n(a){a.$content.off(v.namespace),r.on(v.touchMouseMove,a,o).on(v.touchMouseUp,a,p)}function o(a){w.killEvent(a);var b=a.data,c=k(a),d=0;d=b.horizontal?b.handleLeft-(b.pointerStart-c.pageX):b.handleTop-(b.pointerStart-c.pageY),q(b,d)}function p(a){w.killEvent(a),a.data.$content.on(v.scroll,a.data,j),r.off(v.namespace)}function q(a,b){var c={};a.horizontal?(b<a.handleBounds.left&&(b=a.handleBounds.left),b>a.handleBounds.right&&(b=a.handleBounds.right),c={left:b},a.$content.scrollLeft(Math.round(b*a.scrollRatio))):(b<a.handleBounds.top&&(b=a.handleBounds.top),b>a.handleBounds.bottom&&(b=a.handleBounds.bottom),c={top:b},a.$content.scrollTop(Math.round(b*a.scrollRatio))),a.$handle.css(c)}var r,s=b.Plugin("scrollbar",{widget:!0,defaults:{customClass:"",duration:0,handleSize:0,horizontal:!1,trackMargin:0},classes:["content","bar","track","handle","horizontal","setup","active"],methods:{_setup:c,_construct:f,_destruct:g,_resize:d,scroll:h,resize:i}}),t=s.classes,u=t.raw,v=s.events,w=s.functions,x=b.$window,y=[];v.touchMouseDown=[v.touchStart,v.mouseDown].join(" "),v.touchMouseMove=[v.touchMove,v.mouseMove].join(" "),v.touchMouseUp=[v.touchEnd,v.mouseUp].join(" ")}(jQuery,Formstone);
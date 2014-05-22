/*jslint nomen: true,indent: 2 */
/*global window, document, navigator */

(function (w, d, a) {
  // keep JSLint happy
  "use strict";
  var $ = w[a.k] = {
    'a': a,
    'd': d,
    'w': w,
    's': {},
    'f': (function () {
      return {
                
        collectionToArray: function(coll) {
          var arr = [], i = 0;
          for (; i < coll.length; i = i + 1) {
            arr.push(coll[i]);
          }
          return arr;
        },
        addClass: function (el, text) {
          var c = el.className.split(' '), i, n = c.length, found = false;
          for (i = 0; i < n; i = i + 1) {
            if (text === c[i]) {
              found = true;
            }
          }
          if (!found) {
            if (el.className) {
              text = ' ' + text;
            }
            el.className = el.className + text;
          }
        },
        removeClass: function (el, text) {
          var c = el.className.split(' '), i, n = c.length, newClassName = '', sep = '';
          for (i = 0; i < n; i = i + 1) {
            if (c[i] !== text) {
              newClassName = newClassName  + sep + c[i];
              sep = ' ';  
            }
          }
          el.className = newClassName;
        },

        // get a DOM property or text attribute
        get: function (el, att) {
          var v = null;
          if (typeof el[att] === 'string') {
            v = el[att];
          } else {
            v = el.getAttribute(att);
          }
          return v;
        },
        // set a DOM property or text attribute
        set: function (el, att, string) {
          if (typeof el[att] === 'string') {
            el[att] = string;
          } else {
            el.setAttribute(att, string);
          }
        },
        // create a DOM element
        make: function (obj) {
          var el = false, tag, att;
          for (tag in obj) {
            if (obj[tag].hasOwnProperty) {
              el = $.d.createElement(tag);
              for (att in obj[tag]) {
                if (obj[tag][att].hasOwnProperty) {
                  if (typeof obj[tag][att] === 'string') {
                    $.f.set(el, att, obj[tag][att]);
                  }
                }
              }
              break;
            }
          }
          return el;
        },
        // remove a DOM element
        kill: function (obj) {
          if (typeof obj === 'string') {
            obj = $.d.getElementById(obj);
          }
          if (obj && obj.parentNode) {
            obj.parentNode.removeChild(obj);
          }
        },
        // listen for events in a cross-browser fashion
        listen : function (el, ev, fn) {
          if ($.w.addEventListener !== undefined) {
            el.addEventListener(ev, fn, false);
          } else if ($.w.attachEvent !== undefined) {
            el.attachEvent('on' + ev, fn);
          }
        },

        // a click!
        click: function (v) {
          // decode events and targets in a cross-browser manner
          var el = null, cmd;
          v = v || $.w.event;
          // find the event target
          if (v.target) {
            el = (v.target.nodeType === 3) ? v.target.parentNode : v.target;
          } else {
            el = v.srcElement;
          }
          if (el) {
            cmd = $.f.get(el, 'cmd');
            if (cmd && $.f.cmd[cmd]) {
              $.f.cmd[cmd](el);
              if(typeof v.preventDefault === 'function') {
                v.preventDefault();
              }
            }
          }
        },

        cmd: {
          toggleBurger: function () {
            $.v.nav = $.f.get($.d.b, 'nav');
            if ($.v.hazBurger === true) {
              $.f.removeClass($.d.b, 'hazBurger');
              $.v.hazBurger = false;
            } else {
              $.v.nav = $.f.get($.d.b, 'nav');
              var group = $.s.stack.getElementsByTagName('SPAN');
              
              for (var i = 0; i < group.length; i = i + 1) {
                group[i].className = 'closed';
                var a = group[i].getElementsByTagName('UL')[0].getElementsByTagName('A');
                for (var j = 0; j < a.length; j = j + 1) {
                  if (a[j].id === $.v.nav) {
                    group[i].className = '';
                    break;
                  }
                }
              }
              
              $.f.addClass($.d.b, 'hazBurger');
              $.v.hazBurger = true;
                            
              // here we need to figure out what section to open
            }
          },
          toggleNav: function (el) {
            if (!el.parentNode.parentNode.className) {
              el.parentNode.parentNode.className = 'closed';
              return;
            }
            var nav = el.parentNode.parentNode.parentNode.id;
            var span = $.s.stack.getElementsByTagName('SPAN');
            for (var i = 0; i < span.length; i = i + 1) {
              $.f.addClass(span[i], 'closed');
              if (span[i] === el.parentNode.parentNode) {
                $.f.removeClass(span[i], 'closed');
              }
            }
            $.w.scrollTo(0, 0);
          }
        },
        
        init: function () {
          var i, el, ua;
          
          $.d.b = $.d.getElementsByTagName('BODY')[0];
          $.d.d = $.d.documentElement;


          $.v = { 
            'hazBurger': false
          };
          
         // get structural nodes we're watching
          for (i = 0; i < $.a.struc.length; i = i + 1) {
            el = $.d.getElementById($.a.struc[i]);
            if (el) {
              $.s[$.a.struc[i]] = $.d.getElementById($.a.struc[i]);
            }
          }
          if (typeof $.w.ontouchstart === 'object') {
            $.f.listen($.d.b, 'touchstart', $.f.click);
          } else {
            $.f.listen($.d.b, 'click', $.f.click);
          }
          
          
          $.d.b.appendChild($.f.make({'SCRIPT': {'type': 'text/javascript', 'src': 'http://www.google-analytics.com/ga.js', 'async': true}}));

        }
      };
    }())
  };
  $.f.init();
}(window, document, {
  'k': 'P',
  'struc': [
    'navBurger', 'stack', 'glass'
  ]
}));
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-35781104-1']);
_gaq.push(['_trackPageview']);


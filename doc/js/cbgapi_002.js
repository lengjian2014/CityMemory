/* JS */ gapi.loaded_1(function(_){var window=this;
var NJ=function(a){var c=a.redirecturi||"postmessage",f=(0,_.Ge)((a.scope||"").replace(/[\s\xa0]+/g," ")),c={client_id:a.clientid,redirect_uri:c,response_type:"code token id_token gsession",scope:f};a.approvalprompt&&(c.approval_prompt=a.approvalprompt);a.state&&(c.state=a.state);f="offline"==a.accesstype?!0:(f=a.redirecturi)&&"postmessage"!=f;f&&(c.access_type="offline");a.requestvisibleactions&&(c.request_visible_actions=(0,_.Ge)(a.requestvisibleactions.replace(/[\s\xa0]+/g," ")));a.after_redirect&&
(c.after_redirect=a.after_redirect);a.cookiepolicy&&"none"!==a.cookiepolicy&&(c.cookie_policy=a.cookiepolicy);a.e&&(c.e=a.e);(a=a.authuser||(0,_.P)("googleapis.config/sessionIndex"))&&(c.authuser=a);(a=(0,_.P)("useoriginassocialhost"))&&(c.use_origin_as_socialhost=a);return c};var OJ=function(a){(0,_.of)("signin",0);_.Ek.Ff(a,function(a){(0,_.pf)("signin",0);_.Ek.JI(a)})};
_.PJ=function(a){if("force"!==a.approvalprompt){a=NJ(a);a.immediate=!0;delete a.redirect_uri;delete a.approval_prompt;var c;if(QJ){for(c=0;c<RJ.length;c++){var f=RJ[c];a[f]!==QJ[f]&&window.console&&window.console.log&&window.console.log("Ignoring mismatched auth param "+f+"="+a[f])}c=!0}else QJ=a,c=!1;c||(_.Ek.$f(a.client_id),OJ(a))}};_.SJ=function(a){a=NJ(a);(0,_.Fa)("oauth-flow/authWindowWidth",445);(0,_.Fa)("oauth-flow/authWindowHeight",615);OJ(a)}; _.TJ=function(a){_.Ek.aF.jC(_.Ek.NC.LC,a);_.Ek.aF.Nz(_.Ek.NC.LC,a)};var QJ=null,RJ=["request_visible_actions","client_id","scope"];_.Ek.vb();(0,_.C)("gapi.signin.processConnectIframes",_.Ek.yk,void 0);

_.hz=function(a){return a.cookiepolicy?!0:((0,_.Lt)("cookiepolicy is a required field.  See https://developers.google.com/+/web/signin/#button_attr_cookiepolicy for more information."),!1)};
_.Ht=function(a){var c=a.scope||"";0>c.indexOf("https://www.googleapis.com/auth/plus.login")&&(c+=" https://www.googleapis.com/auth/plus.login");a.scope=c;a.apppackagename&&(a.after_redirect="keep_open");a.redirecturi&&delete a.redirecturi;(0,_.P)("enableMultilogin")||(a.authuser=0);a.apppackagename&&(a.apppackagename=a.apppackagename.replace(/^[\s\xa0]+|[\s\xa0]+$/g,""));return a};
_.Kt=function(a){if("string"===typeof a)if(window[a])a=window[a];else{(0,_.Lt)('Callback function named "'+a+'" not found');return}a&&(0,_.TJ)(a)};
_.Pt=function(a){var c=new Qt;(0,_.TJ)(function(f){if(c.B&&f){if(f.access_token){(0,_.Fa)("isPlusUser",!0);var g={};(0,_.eb)(f,g);g.client_id=a.clientid;g.scope=a.scope}c.B=!1;if(f.access_token&&"consent"==f.prompt){g=f["g-oauth-window"];f=f.id_token;var h=a.apppackagename;if(h&&g){var l=!0;try{l=g.closed}catch(n){}l||(f=(0,_.P)("iframes/:socialhost:")+"/_/history/otaappinstall?clientId="+(0,window.encodeURIComponent)(a.clientid)+"&appId="+(0,window.encodeURIComponent)(h)+"&idToken="+(0,window.encodeURIComponent)(f),
f=(0,_.Xb)(f),g.location.href=f)}}else if(g=f["g-oauth-window"],a.apppackagename&&g)try{g.close()}catch(q){}}});return c};_.UJ=function(a,c){c.B=!0;var f=a,f=(0,_.Ht)(f);(0,_.SJ)(f)};_.Nt=function(a){a=(0,_.Ht)(a);(0,_.Kt)(a.callback);_.Ek.vb(function(){(0,_.PJ)(a)})};_.Lt=function(a){window.console&&(window.console.error?window.console.error(a):window.console.log&&window.console.log(a))};var Qt=function(){this.B=!1}; _.VJ=function(a,c){var f=(0,_.Pt)(a);(0,_.Nt)(a);c?(0,_.Wb)(c,"click",function(){(0,_.UJ)(a,f)}):(0,_.UJ)(a,f)};

(0,_.vl)("signin_annotation",function(a){var c=a.iframeNode;a=a.userParams||{};(0,_.hz)(a)&&(0,_.VJ)(a,c)});
});

// Copyright 2002-2013 Google Inc.

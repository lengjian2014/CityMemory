Zendesk.NS("Tickets.Table",this.jQuery,function(f){var k=this,i={},e=(window.Minilog?window.Minilog("collision"):function(){});var b={};function a(l){return l.attr("data-zd-account-id")+","+l.attr("data-zd-ticket-nice-id")}function h(l){l.find("td.description").hover(function(){f(this).closest("tr[title]").each(function(m,n){f(n).attr("data-title",f(n).attr("title")).removeAttr("title")})},function(){f(this).closest("tr[data-title]").each(function(m,n){f(n).attr("title",f(n).attr("data-title")).removeAttr("data-title")})})}function d(l){l.find("tbody tr[data-zd-ticket-nice-id][data-zd-account-id]").each(function(){var o=f(this);var m=a(o);var n=b[m];if(n){o.find("td:first-child").addClass("beingViewed");o.attr("title",n)}else{o.find("td:first-child").removeClass("beingViewed");o.attr("title",null)}})}function g(m,l){(function(){var o=0;function n(){if(++o>3){return}e("GET /api/v1/users/"+m+".json, attempt "+o);f.ajax("/api/v1/users/"+m+".json",{type:"GET",dataType:"json",cache:false,success:function(q,r,p){e("GET /api/v1/users/"+m+".json success",q,r);l(q)},error:function(r,q,p){if(o<3){e("Retrying GET /api/v1/users/"+m+".json due to #api_error",r.status,r.statusText,r.getAllResponseHeaders&&r.getAllResponseHeaders(),r.responseText)}n()}})}n()}())}function j(p,m){var o=[],l=p.length,q=0;if(l<1){m(o)}for(var n=0;n<l;n++){(function(r,s){if(i[s]){o[r]=i[s];q++;if(q==l){m(o)}return}g(s,function(t){o[r]=i[s]=t;q++;if(q==l){m(o)}})}(n,p[n]))}}this.getAndApplyViewingStatuses=function(l){this.getAndApplyViewingStatusesWithRadarClient(l)};this.applyViewingStatuses=function(){var l=f("table.tickets");d(l);h(l)};var c={};this.getViewerIdsForTicket=function(n,o){var q=n.op==="online";var m=n.op==="offline";var l=false;if(!q&&!m){return}var p=c[o];if(!p){p=c[o]={}}_.keys(n.value).forEach(function(r){if(r==Zendesk.currentUser.id){return}var s=!!(p[r]);if(q!=s){delete p[r];if(q){p[r]=q}l=true}});if(l){return _.keys(p)}};this.updateViewingStatusesForTicket=function(m,n){var l=this;j(m,function(){var o=""+currentAccount.id+","+n,p=[];m.forEach(function(q){if(q==Zendesk.currentUser.id){return}i[q]&&i[q].name&&p.push(i[q].name)});if(p.length==1){b[o]=p[0]+" is viewing this ticket."}else{if(p.length>1){b[o]=""+p.length+" agents are viewing this ticket."}else{delete b[o]}}l.applyViewingStatuses()})};this.applyViewingStatusesWithRadarClient=function(l,n){var m=k.getViewerIdsForTicket(l,n);if(!m){return}k.updateViewingStatusesForTicket(m,n)};this.getAndApplyViewingStatusesWithRadarClient=function(m){var l=this;RadarClient.alloc("collision",function(){for(var n=m.length-1;n>=0;n--){var o=m[n];(function(p){RadarClient.presence("ticket/"+p).on(function(q){l.applyViewingStatusesWithRadarClient(q,p)}).sync()}(o))}})};this.linkifyRows=function(l){l.find("tbody tr").each(function(){var m=f(this).attr("data-href");if(!m||!m.length){return}f(this).click(function(n){if(!n){return}var o=Zendesk.embeddedInLotusAdmin&&Zendesk.embeddedInLotusAdmin();if(o||f(n.target).attr("href")===m){return}if(n.ctrlKey||n.metaKey){window.open(m,"_blank").blur();window.focus()}else{window.location.href=m}})})};this.applyViewStatusToTooltip=function(l){l=f(l);var q=l.attr("aria-describedby");if(!q){return}var n=f("#"+q);if(n.length===0){return}if(n.find(".otherViewers").length>0){return}var p=l.closest("tr[data-zd-account-id][data-zd-ticket-nice-id]");if(p.length===0){return}var m=a(p);var o=b[m];if(!o){return}n.find(".title").prepend('<span class="otherViewers">'+o+"</span>")}});
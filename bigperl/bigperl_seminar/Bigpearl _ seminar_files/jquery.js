(function(a){a.fn.mobileMenu=function(b){var e={defaultText:"Navigate to...",className:"select-menu",subMenuClass:"sub-menu",subMenuDash:"&ndash;"},d=a.extend(e,b),c=a(this);this.each(function(){c.find("ul").addClass(d.subMenuClass);a("<select />",{"class":d.className}).insertAfter(c);a("<option />",{value:"#",text:d.defaultText}).appendTo("."+d.className);c.find("a").each(function(){var i=a(this),g="&nbsp;"+i.text(),h=i.parents("."+d.subMenuClass),f=h.length,j;if(i.parents("ul").hasClass(d.subMenuClass)){j=Array(f+1).join(d.subMenuDash);g=j+g;}a("<option />",{value:this.href,html:g,selected:(this.href==window.location.href)}).appendTo("."+d.className);});a("."+d.className).change(function(){var f=a(this).val();if(f!=="#"){window.location.href=a(this).val();}});});return this;};})(jQuery);
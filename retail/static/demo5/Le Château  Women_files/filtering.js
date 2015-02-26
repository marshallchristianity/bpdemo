jQuery(document).ready(function(){
	logDebug('filtering setup');
	jQuery('body').delegate('#facetSortForm', 'submit', function(e){
		e.preventDefault();
		return submitFacetForm();
	});
	jQuery('.expandTitleQuickview').live('mouseenter', function(){
		jQuery(this).children('.facetSelectedOptionsQuickview').show();
	});
	jQuery('.expandTitleQuickview').live('mouseleave', function(){
		jQuery(this).children('.facetSelectedOptionsQuickview').hide();
	});
	jQuery('a.remove.sideBarMenu-SubCategory').live('click', function(){
		var href = jQuery(this).attr('href');
		searchWithParameters(href.substring(1, href.length));
	});
	jQuery('.clearFacetFilters').live('click', function(){
		jQuery('.facetSelection').removeAttr('checked');
		submitFacetForm();
	});
	jQuery('.sortOptionsSelections span').live('click', function(){
		var selectedValue = jQuery(this).attr('rel');
		var sortOptions = selectedValue.split('|');
		jQuery('#qfh_docSort').val(sortOptions[0]);
		jQuery('#qfh_docSortOrder').val(sortOptions[1]);
		var sortSaved = sortOptions[0];
		if (sortOptions[1] == 'descending') {
			sortSaved = '-' + sortSaved;
		};
		jQuery('#sortSaved').val(sortSaved);
		submitFacetForm();
	});
	jQuery('.sortOptionsSelectedLabel').live('click', function(){
		jQuery(this).parent().children('.sortOptionsSelections').slideDown();
	});
	jQuery('.pageSizeOptions').live('click', function(){
		var selectedValue = jQuery(this).attr('rel');
		jQuery('#qfh_pageSize').val(selectedValue);
		submitFacetForm();
		return false;
	});
	jQuery('.sortOptions').live('mouseleave', function(){
		jQuery(this).children('.sortOptionsSelections').slideUp();
	});
	jQuery('.facetFilterOptionClearButton').live('click', function(){
		jQuery(this).parents('.facetFilterOptionSelections').each(function(){
			jQuery(this).find('.facetSelection').removeAttr('checked');
		});
	});
	jQuery('.facetFilterOptionClearButton').live('mousedown', function(){
		var src = jQuery(this).attr('src');
		var rel = jQuery(this).attr('rel');
		jQuery(this).attr('src', rel).attr('rel', src);
	});
	jQuery('.facetFilterOptionClearButton').live('mouseup', function(){
		var src = jQuery(this).attr('src');
		var rel = jQuery(this).attr('rel');
		jQuery(this).attr('src', rel).attr('rel', src);
	});
	jQuery('.facetFilterOptionCancelButton').live('mousedown', function(){
		jQuery(this).children('img').each(function(){
			var src = jQuery(this).attr('src');
			var rel = jQuery(this).attr('rel');
			jQuery(this).attr('src', rel).attr('rel', src);
		});
	});
	jQuery('.facetFilterOptionCancelButton').live('mouseup', function(){
		jQuery(this).children('img').each(function(){
			var src = jQuery(this).attr('src');
			var rel = jQuery(this).attr('rel');
			jQuery(this).attr('src', rel).attr('rel', src);
		});
	});
	jQuery('.facetFilterOptionSelectButton').live('mousedown', function(){
		var src = jQuery(this).attr('src');
		var rel = jQuery(this).attr('rel');
		jQuery(this).attr('src', rel).attr('rel', src);
	});
	jQuery('.facetFilterOptionSelectButton').live('mouseup', function(){
		var src = jQuery(this).attr('src');
		var rel = jQuery(this).attr('rel');
		jQuery(this).attr('src', rel).attr('rel', src);
	});
	jQuery('.facetFilterOptionCancelButton').live('click', function(){
		jQuery(this).parents('.facetFilterOptionSelections').each(function(){
			cancelOptions(this);
		});
		return false;
	});
	jQuery('label.facetFilterOptionSelection.color').live('click', function(e){
		e.preventDefault();
		var selected = false;
		jQuery(this).children('img').each(function(index,img){
			if (jQuery(img).is('.selectedColor')) {
				selected = true;
			}
		});
		if (selected){
			jQuery(this).children('img').removeClass('selectedColor');
			jQuery(this).children('input').attr('checked', false);
		} else {
			jQuery(this).children('img').addClass('selectedColor');
			jQuery(this).children('input').attr('checked', true);
		}
	});
	searchURLReset();
});

function cancelOptions(optionDiv) {
	jQuery(optionDiv).find('.facetSelection').removeAttr('checked');
	jQuery(optionDiv).find('.facetSelection[def="checked"]').attr('checked','checked');
}

function submitFacetForm(){
	try {
		logDebug('facet sort form submission');
		logDebug('look for selected facets');
		var selectedFacetMap = {};
		jQuery('.facetSelection:checked').each(function(){
			var rel = jQuery(this).attr('rel');
			var val = jQuery(this).attr('value');
			if (selectedFacetMap[rel]){
				selectedFacetMap[rel] = selectedFacetMap[rel] + '|' + val;
			} else {
				selectedFacetMap[rel] = val;
			};
		});
		logDebug('create URL to send to server');
		var facetURL = "";
		jQuery('.hiddenFacetValue').each(function(){
			if (facetURL != '') {
				facetURL = facetURL + ':';
			}
			facetURL = facetURL + jQuery(this).val();
			logDebug('HIDDEN: facetURL: ' + facetURL);
		});
		
		for (var facet in selectedFacetMap) {
			if (facetURL != "") {
				facetURL = facetURL + ':';
			}
			facetURL = facetURL + facet + ':' + selectedFacetMap[facet];
			logDebug('CHECKBOX: facetURL: ' + facetURL);
		}

		logDebug('FINAL: facetURL: ' + facetURL);
		var searchSettings = {
		    q_docSort: jQuery('#qfh_docSort').val(),
		    q_docSortOrder: jQuery('#qfh_docSortOrder').val(),
		    q_pageNum:1,
		    q_pageSize: jQuery('#qfh_pageSize').val(),
		    q_question: jQuery('#questionSaved').val(),
		    q_facetTrail: facetURL,
		    categoryId: jQuery('#catIdSaved').val(),
		    sort: jQuery('#sortSaved').val()
		};
		logDebug('add URL params to the URL as an anchor, for back button reload');
		var anchor = '#q_docSort=' + searchSettings['q_docSort'];
		anchor = anchor + '&q_docSortOrder=' + searchSettings['q_docSortOrder'];
		anchor = anchor + '&q_pageNum=' + searchSettings['q_pageNum'];
		anchor = anchor + '&q_pageSize=' + searchSettings['q_pageSize'];
		anchor = anchor + '&q_question=' + searchSettings['q_question'];
		anchor = anchor + '&sort=' + searchSettings['sort'];
		anchor = anchor + '&q_facetTrail=' + searchSettings['q_facetTrail'];
		anchor = anchor + '&categoryId=' + searchSettings['categoryId'];
		anchor = anchor + '&nsraction=handleProductsLoad';
		logDebug('anchor = ' + anchor);
		window.location = anchor;
		logDebug('make ajax call to narrow results');
		searchWithParameters(anchor.substring(1, anchor.length));
		} catch (e){
			logDebug('ERROR - ' + e);
		}
		return false;
}
var loggingDebug = true;
function logDebug(message){
	if (loggingDebug){
		if (window.console){
			console.log('********' + message);
		}
	}
}
function searchWithParameters(parameters){
	var url = "/style/browse/gadgets/categoryContentsSL.jsp?pathname=" + location.pathname;
	url = url + '&' + parameters;
	logDebug('AJAX URL: ' + url);
	var navLoadUrl = "/style/navigation/gadgets/leftSideFacetNav.jsp?debugNav=true&" + parameters;
	jQuery.get(url, function(data){
		logDebug('got data...replacing atg_store_main');
		jQuery('#ajaxContainer').remove();
		jQuery('.remstart').remove();
		jQuery('.atg_store_main').append(data);
		//jQuery('.atg_store_main').html(data);
		logDebug('reloading menu');
		var navReload = jQuery('#leftSideNavReload').html();
		if (navReload.length > 0) {
			jQuery('#atg_store_facets').html(navReload);
		}
		jQuery('#leftSideNavReload').html('');
		logDebug('done data update');
		initPage(jQuery, true);
		ajaxRequestIdentefication(false);
	}, 'html');
	
	logDebug('update results');
	ajaxRequestIdentefication(true);
}
function searchURLReset(){
	var url = window.location.href;
	var qDocSortIndex = url.indexOf('#q_docSort');
	if (qDocSortIndex > 0) {
		var anchor = url.substring(qDocSortIndex + 1, url.length);
		searchWithParameters(anchor);
	}
}

/**
*
* @param showAjaxSpinnerImage boolean identifying should we add ajax spinner image or remove
*/
function ajaxRequestIdentefication(showAjaxSpinnerImage) {

 if (showAjaxSpinnerImage) {
   logDebug('Add spinner');
   jQuery("div[name='transparentLayer']").addClass("active");
   jQuery("div[name='ajaxSpinner']").addClass("active");
 } else {
   logDebug('Remove spinner');
   jQuery("div[name='transparentLayer']").removeClass("active");  
   jQuery("div[name='ajaxSpinner']").removeClass("active");
 }

}
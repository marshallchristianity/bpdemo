function clickLooksSize(size,refreshUrl,index,color,productId){
	refreshUrl=refreshUrl+"&selectedSize="+size+"&savedquantity="+jQuery("#qty"+index).val()+"&selectedColor="+accentReplacement(color)+"&refreshLooksPicker=true";;
	document.getElementById('productSize' + index).value = productId + '-' +size;

	jQuery.ajax({
		url: refreshUrl,
		context: "",
		success: function(data){
			jQuery("#atg_store_looks_picker"+index).html(data);
			jQuery("#finalsku"+index).val(jQuery("#sku"+index).val());

			// remove previous colorbox overlay, colorbox will be reinitialized on refresh
			$("#cboxOverlay").remove();
			$("#colorbox").remove();
		}
	});
}
function accentReplacement(input) {
	var output = input;
	output = encodeURIComponent(output);
	return output;
}
function clickLooksColor(color,refreshUrl,index,size,productId){
	refreshUrl=refreshUrl+"&selectedColor="+color+"&savedquantity="+jQuery("#qty"+index).val()+"&selectedSize="+size+"&refreshLooksPicker=true";
	document.getElementById('productColor' + index).value = productId + '-' +color;

	jQuery.ajax({
		url: refreshUrl,
		context: "",
		success: function(data){
			jQuery("#atg_store_looks_picker"+index).html(data);
			jQuery("#finalsku"+index).val(jQuery("#sku"+index).val());

			// remove previous colorbox overlay, colorbox will be reinitialized on refresh
			$("#cboxOverlay").remove();
			$("#colorbox").remove();
		}
	});
}

function updateFinalForm(items){
	jQuery(".stlProductError").hide();
	jQuery("#generalSTLError").hide();
	jQuery("#generalSTLErrorCustom").hide();
	jQuery("#finalFormSkus").html('');

	var num=Number(items);
	if(num==1)
	{
		jQuery("#finalFormSkus").append("<input type='hidden' name='"+jQuery("#sku"+0).val()+"' id='"+jQuery("#sku"+0).val()+"' value='"+ jQuery("#qty"+0).val()+"'/>");
		jQuery("#finalFormSkus").append("<input type='hidden' name='"+jQuery("#product"+0).val()+"' id='"+jQuery("#product"+0).val()+"' value='"+ jQuery("#qty"+0).val()+"'/>");
        jQuery("#finalsku"+0).val(jQuery("#sku"+0).val());
	}
	else
	{
		for(i=0;i<num;i++)
		{
			jQuery("#finalFormSkus").append("<input type='hidden' name='"+jQuery("#sku"+i).val()+"' id='"+jQuery("#sku"+i).val()+"' value='"+ jQuery("#qty"+i).val()+"'/>");
			jQuery("#finalFormSkus").append("<input type='hidden' name='"+jQuery("#product"+i).val()+"' id='"+jQuery("#product"+i).val()+"' value='"+ jQuery("#qty"+i).val()+"'/>");
	        jQuery("#finalsku"+i).val(jQuery("#sku"+i).val());
		}
	}		
}

function updateWishListForm(items, wishlistId, wishlistFormId){
	var num=Number(items);
	for(i=0;i<num;i++)
	{
		if (jQuery("#qty"+i).val() != null && jQuery("#sku"+i).val() != null)
		{
			jQuery("#giftqty"+i).val(jQuery("#qty"+i).val());
			jQuery("#giftsku"+i).val(jQuery("#sku"+i).val());
			jQuery("#giftprod"+i).val(jQuery("#finalproduct"+i).val());
		}
		else
		{
			jQuery("#giftqty"+i).val("0");
			jQuery("#giftsku"+i).val("");
			jQuery("#giftprod"+i).val(jQuery("#finalproduct"+i).val());
		}
	}
	jQuery("#giftId").val(wishlistId);
	jQuery("#"+wishlistFormId).submit();
}

function addErrorToSTLProduct(element, msg){
	jQuery(element).parent().parent().parent().children(".stlProductError").html(msg).show();
}
var stlErrors = null;
var stlErrorsDisplayed = false;
function sendSTLFormByAjax(){
	stlErrors = null;
	stlErrorsDisplayed = false;
	var url = window.location.href;
	var formInfo = jQuery("#shopbylooksform").serialize();
	var postObj = jQuery.post(
		url,
		formInfo,
		function(data){
			if (data.error){
				stlErrors = data.errors;
				//get the list of all product names
				jQuery(".stlProductName").each(function(){
					var b = this;
					var found = false;
					var stlProductName = this.innerHTML;
					//search the error list for the names of the product
					var errLength = stlErrors.length;
					for (var i=0; i<errLength; i++){
						if (stlErrors[i].indexOf(stlProductName)>0){
							//if one is found, get the sibling error DIV, and add the error
							addErrorToSTLProduct(this, stlErrors[i]);
							stlErrorsDisplayed = true;
							break;
						}
					}
				});
				if (!stlErrorsDisplayed){
					var errLength = stlErrors.length;
					jQuery("#generalSTLErrorCustom").html("");
					for (var i=0; i<errLength; i++){
						jQuery("#generalSTLErrorCustom").append("<p>" +stlErrors[i] + "</p>");
					}
					jQuery("#generalSTLErrorCustom").show();
				}
				
				window.scrollTo(0,0);
        	} else {
	        	windowRCSummary.setAllCartData(data);
	        	windowRCSummary.toggleCart();
        	}
		},
		'json'
	).error(function(error) {
    	jQuery("#generalSTLError").show();
	});
}
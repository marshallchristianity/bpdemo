/**
 * Color/Size picker implementation.
 * Dojo version: 1.0
 */

dojo.provide("atg.store.picker");

atg.store.picker={ 

/**
 * Updates item in cart
 */
  updateItem: function (){
	  console.debug('updating commerce item in cart');
	    var refreshform = dojo.byId("colorsizerefreshform");
	    var updateForm = dojo.byId("colorsizeupdateform");
	    var currentColor = refreshform.elements.selectedColor.value;
	    var currentSize = refreshform.elements.selectedSize.value;

	    var currentQuantity = dojo.byId("atg_store_quantityField").value;
	    
	    updateForm.elements.updateSelectedColor.value=currentColor;
	    updateForm.elements.updateSelectedSize.value=currentSize;
	    updateForm.elements.updateSelectedQuantity.value=currentQuantity;
	    
	    var picker=atg.store.picker;
	    updateForm.submit();   
  },
/**
 * Adds the item to Cart 
 */
  addtoCart : function (){
    
    if (!this.checkAddtoCartAvailable()){
      // if product's color/size is not selected do nothing
      // just show corresponding message
      dojo.byId('promptSelectDIV').style.display='block';
      dojo.byId('promptSelectDIV2').style.display='none';
      dojo.byId('promptSelectDIV3').style.display='none';
      return;
    }
    //post addToCart form to richCart widget
    dijit.byId("atg_store_richCart").postForm("addToCart");
    
  },

/**
 * Check the status of addToCart form
 *
 * @return  true: if item can be added to the cart
 *     false: if not
 */
  checkAddtoCartAvailable: function(){ 
    var addtocartform = dojo.byId("addToCart");
    var selectedSku =  addtocartform.elements["/atg/store/order/purchase/CartFormHandler.items[0].catalogRefId"].value;    
   
    if( !selectedSku){  
      return false;
      console.debug("checkAddtoCartAvailable: SKU not available");
    }

    return true;
  },
  
/**
 * Called when a user clicks on a color, it changes selected color
 * to the passed one
 * @param color: which color is selected
 */
  clickColor: function(color){
    console.debug('selected color is ' + color);
    var form = dojo.byId("colorsizerefreshform");
    var currentColor = form.elements.selectedColor.value;

    //if the color is not changing, don't do anything
    if(currentColor == color){
      return;
    }

    //set the new selected color in the refresh form and submit it
    form.elements.selectedColor.value = color;
    var picker=atg.store.picker;
    picker.setQuantity();
    picker.setGiftlistId();
    picker.submitRefreshForm();  
  },  

/**
	 * Called when a user clicks on a color, it changes selected color
	 * to the passed one
	 * @param color: which color is selected
	 */
	  clickColorInParentWindow: function(color){
	    console.debug('selected color is ' + color +" from parent window.");
	    var form = window.parent.document.getElementById("colorsizerefreshform");
	    var currentColor = form.elements.selectedColor.value;

	    //if the color is not changing, don't do anything
	    if(currentColor == color){
	      return;
	    }

	    //set the new selected color in the refresh form and submit it
	    form.elements.selectedColor.value = color;
	    var picker=atg.store.picker;
	    var currentQuantity = window.parent.document.getElementById("atg_store_quantityField").value;
	    form.elements.savedquantity.value = currentQuantity;
	    picker.submitRefreshForm();  
	  },  

/**
 * Called when a user clicks on a size, it changes selected size 
 * in the refresh form to the passed one
 * @param size: which size is selected
 */
  clickSize: function(size){
    console.debug('selected size is ' + size);
    var form = dojo.byId("colorsizerefreshform");

    //if the user clicks the size that's already selected, don't do anything
    var currentSize = form.elements.selectedSize.value;
    if(currentSize === size){
      return;
    }

    //set the new selected size in the refresh form and submit it
    form.elements.selectedSize.value = size;
    var picker=atg.store.picker;
    picker.setQuantity();
    picker.setGiftlistId();
    picker.submitRefreshForm();       
  },

  
/**
 * Gets the quantity from the addToCart form and sets the refresh form quantity.
 * We do this so we can preserve the quantity between refreshes.
 */
  setQuantity: function()
  {
    var currentQuantity = dojo.byId("atg_store_quantityField").value;
    var refreshform = dojo.byId("colorsizerefreshform");
    refreshform.elements.savedquantity.value = currentQuantity;
  },
  
 
/**
 * Gets the gift list id from the addToGiftList form and sets the refreshform savedgiftlist
 * parameter.
 * We do this so we can preserve the gift list selection between refreshes
 */
  setGiftlistId: function() {
    var addToGiftListForm = dojo.byId("addToGiftList");
    if(!addToGiftListForm){
      return;  
    }
    
    var currentGiftList = addToGiftListForm.elements["/atg/commerce/gifts/GiftlistFormHandler.giftlistId"].value;
    var refreshform = dojo.byId("colorsizerefreshform");
    refreshform.elements.savedgiftlist.value = currentGiftList; 
  },
  
   
/**
 * Resets the color and size selected and submits the refresh form
 */
  resetPicker: function(){
    var form = dojo.byId("colorsizerefreshform");
    //reset the new selected size and color in the refresh form and submit it
    form.elements.selectedSize.value = "";
    form.elements.selectedColor.value = "";

    var picker=atg.store.picker;
    picker.setQuantity();
    picker.setGiftlistId();
    picker.submitRefreshForm();  
  },

/**
 * Submits the refresh form. 
 */  
  submitRefreshForm: function(){

    dojo.xhrGet({
    
      //url: "http://localhost:8080/store/browse/gadgets/pickerContents.jsp",
      load: function(data){
        var divColorPicker = dojo.byId("atg_store_picker");
        //data = data.replace(/<form\s*[^>]*>|<\/form>/g,"");
        divColorPicker.innerHTML = data;
        dijit.byId('atg_store_richCart').hijackAllAddToCartNodes();
        // just check that we don't need any popuplaunchers on the new code
        atg.store.util.setUpPopupEnhance();
      },
      form:  "colorsizerefreshform"
    });
  },
  
/**
 * Submits the addToFavorites form. 
 */  
  submitAddToFavoritesForm : function(){


    if(!this.checkGiftListSubmitAvailable("addToFavorites", "/atg/commerce/gifts/GiftlistFormHandler.catalogRefIds")){
     // display message that user should select product's color 
     // and size before adding it to favorites list
     dojo.byId('promptSelectDIV2').style.display='block';
     dojo.byId('promptSelectDIV').style.display='none';
     dojo.byId('promptSelectDIV3').style.display='none';
     
     // close the popup
     dojo.byId("atg_picker_moreActionsButton").className = "more";
     
     return;
    }
    //console.debug(dojo.byId("atg_store_addToFavorites"));
    //alert(dojo.byId("addToFavorites").nodeName);
    dojo.byId("atg_store_addToFavorites").click();
    // Nasty work around for an IE6 form submission bug that sometimes it just won't go the first time round.
    if(dojo.isIE && dojo.isIE < 7){
        setTimeout("atg.store.picker.submitAddToFavoritesForm()", 500);
    }
    
  },

/**
 * Submits the addToGiftList form. 
 */   
  submitGiftListForm : function(giftList){

    if(!this.checkGiftListSubmitAvailable("addToGiftList", 
                                           "/atg/commerce/gifts/GiftlistFormHandler.catalogRefIds")){
     // display message that user should select product's color 
     // and size before adding it to gift list
     dojo.byId('promptSelectDIV3').style.display='block';
     dojo.byId('promptSelectDIV').style.display='none';
     dojo.byId('promptSelectDIV2').style.display='none';
     
     
     return;
    }
    
    // set form's giftListId to the one that is clicked by user
    this.setGiftlistIdOnGiftListForm(giftList);
    // set quantity on gift list form
    this.setQuantityOnGiftlistForm();
    // submit form
    dojo.byId("atg_store_addToGiftSubmit").click();
  }, 
  
 
/**
 * Checks if  addToGiftList or addToFavorites form is ready for submit
 * @param giftListForm: form id
 * @param giftListRefIdElement: id of form's element that contains  SKU id 
 *                              that is going to be added    
 * @return true: if can be submitted
 *          false: if not 
 */
  checkGiftListSubmitAvailable : function(giftListForm, giftListRefIdElement ){
    var selectedSku = dojo.byId(giftListForm).elements[giftListRefIdElement].value;
    if(!selectedSku){
      return false;
    }    
    return true;
  },
  
 /**
  * Used to set quantity of items to add to gift list. Quantity value is taken
  * from addToCart form.
  */
  setQuantityOnGiftlistForm: function() {
    // get quantity from addToCart form
    var currentQuantity = dojo.byId("atg_store_quantityField").value;
    var addtogiftlistform = dojo.byId("addToGiftList");
    //set the quantity in the add to gift lsit form
    addtogiftlistform.elements.giftListAddQuantity.value = currentQuantity;
  },
  
/**
 * Used to set giftListId selected by user in addToGiftList from.
 */
  setGiftlistIdOnGiftListForm: function(giftListId) {
    var addToGiftListForm = dojo.byId("addToGiftList");
    if(!addToGiftListForm){
      return;  
    }
    
    addToGiftListForm.elements["/atg/commerce/gifts/GiftlistFormHandler.giftlistId"].value = giftListId;   
  }    
};
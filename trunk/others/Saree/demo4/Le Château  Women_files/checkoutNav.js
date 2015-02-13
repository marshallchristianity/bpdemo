/**
 * This file contains Javascript functions used by the Checkout Navigation.
 */
 
dojo.provide("atg.store.checkoutNav");
// root object name
atg.store.checkoutNav={
  // Initialisation function
  init: function() {
    
    // Check that this is atg_store_checkoutLogin
    if(dojo.byId("atg_store_checkoutLogin")){
      // Find the parent div        
      var container = dojo.byId("atg_store_checkoutLogin");
      //find the radios inside that div, loop thru and add an onclick event
      dojo.query("input[type=radio]", container).forEach(
          function(radioTag) {
              console.debug(radioTag);
              dojo.connect(radioTag, "onclick", atg.store.checkoutNav.loginTogglerTab);
              if(radioTag.checked){
                atg.store.checkoutNav.loginTogglerTab(radioTag)
              }
          }
      );
      // Add click behaviors to the title tabs for the radios
      dojo.query("h2 span", container).forEach(
          function(h2Tag) {
              dojo.connect(h2Tag, "onclick", atg.store.checkoutNav.loginTogglerTab);
          }
      ); 
    }
    
    // init setup the page if the page has saved address UI, add switcher class to body
    if(!dojo.byId("atg_store_savedAddress") && dojo.byId("atg_store_createAddress") ){
      dojo.query('body')[0].className = "atg_store_pageShipping atg_store_createAddress";
    }
    
    // Check that this is shipping or billing UI's
    if(dojo.byId('atg_store_savedAddress') || dojo.byId('atg_store_checkoutBilling') ){
        
      // check that this is shipping UI
      if(dojo.byId("atg_store_availableShippingAddresses")){
        
        // double check that this isn't the billing page
        if(!dojo.query('.atg_store_newCreditCardTabs')[0]){
          atg.store.checkoutNav.shippingTogglerTab(dojo.byId('atg_store_savedAddress'));
          // Tab click Logic For Saved Addresses
          dojo.connect(dojo.byId("atg_store_savedAddress"), "onclick", atg.store.checkoutNav.shippingTogglerTab);
          
          if(dojo.byId("atg_store_createAddress")){
            // Tab click Logic For Saved Addresses
            dojo.connect(dojo.byId("atg_store_createAddress"), "onclick", atg.store.checkoutNav.shippingTogglerTab);
            // if create address is checked, apply the correct behavior
            if(dojo.byId("atg_store_createAddress").checked) {
                atg.store.checkoutNav.shippingTogglerTab(dojo.byId("atg_store_createAddress"))
            }            
          }
        }
        
        // does the page have credit card options drop down
        if(dojo.byId("atg_store_creditCardOption")){
          // apply drop down show hide trigger behavior, trigger behavior with the current selection
          atg.store.checkoutNav.addressTogglerView(dojo.byId("atg_store_creditCardOption"));
          dojo.connect(dojo.byId("atg_store_creditCardOption"), "onchange", atg.store.checkoutNav.addressTogglerView);
        }
      }
      
      // Saved address tab in UI?      
      if(dojo.byId("saved_credit_card_and_address")){
        // apply tab click behavior
        dojo.connect(dojo.byId("saved_credit_card_and_address"), "onclick", atg.store.checkoutNav.shippingTogglerTab);
      }
      
      // new credit card tab in UI
      if(dojo.byId("atg_store_newCreditCardSelect")){
        // apply click behavior
        dojo.connect(dojo.byId("atg_store_newCreditCardSelect"), "onclick", atg.store.checkoutNav.shippingTogglerTab);
        // is this radio checked, if so run the trigger so the UI matches
        if(dojo.byId("atg_store_newCreditCardSelect").checked) {
          atg.store.checkoutNav.shippingTogglerTab(dojo.byId("atg_store_newCreditCardSelect"))
        }
      }
            
    }
    
    if(dojo.byId("atg_store_checkoutShippingAddress")){
      // now that everything is laid out according to the above, make the shipping visible prevents the flicker)
      dojo.byId("atg_store_checkoutShippingAddress").style.visibility = "visible";
    }
    
    if(dojo.byId("addressId")){
      // which address to show based on drop down logic
      atg.store.checkoutNav.addressTogglerView(dojo.byId("addressId"));
      // Wire up the behavior to the onchange on the select drop down      
      dojo.connect(dojo.byId("addressId"), "onchange", atg.store.checkoutNav.addressTogglerView);
    }
    
    // fire the fix the billing/shipping height function to the continue button is at the bottom
    // needed due to most of the content being absolutely positioned and heightless in the flow
    atg.store.checkoutNav.billingShippingHeightFix();   
    
    // fix for a rendering buy in IE6 forces redraw of the nav so it appears.
    try{
      dojo.query(".atg_store_checkoutNav")[0].style.right= "0px";
    }catch(e){
      
    }
    
    
  },

  // Tab Toggler for the Login Page
  loginTogglerTab: function(e) {
    // is function being passed an event or a node
    if(e.target){
      e.cancelBubble=true;
      //e.preventDefault();
      target = e.target;
    }else{
      target = e;
    }
    
    if(target.nodeName == "INPUT"){
      var container = target.parentNode.parentNode.parentNode;
    }else{
      var container = target.parentNode.parentNode;
    }
    
    // hide the 3 divs with the class of hid
    dojo.query("div.hid").forEach(function(node){
      node.style.display = "none";
    });
    
    // find tab that is a sibling to this radio   
    var associatedHid = dojo.query(".hid", container)[0];
    dojo.query("input[type=radio]", container)[0].checked = true;
    
    // if the radio has an associated Hid node (the content)
    if(associatedHid != null) {
      // toggle it based on it's current visibility
      associatedHid.style.display = (dojo.getComputedStyle(associatedHid).display == "block")? "none" : "block";
      // find first text field and apply focus to it
      dojo.query("input[type=text]", associatedHid)[0].focus();
    }

  },

  // Tab Toggler for the Shipping and Billing Pages
  shippingTogglerTab: function(e){
    // is it an event or a node
    if(e.target){
      e.cancelBubble=true;
      //e.preventDefault();
      target = e.target;
    }else{
      target = e;
    }
    
    // Toggle the body class based on the target id, so the css can handle the layout    
    var bodyClassForTab = target.id;
    dojo.query('body')[0].className = "atg_store_pageShipping "+ bodyClassForTab;
    // Layout changed, so redo the height fix function
    atg.store.checkoutNav.billingShippingHeightFix();
      
  },
  
  // Utility Function to find next real node (ignores text nodes caused by whitespace)
  getNextRealSibling: function(el) {
    el = el.nextSibling;
    while (el.nodeType!=1) {
      el = el.nextSibling;
    }
    return el;
  },

  // fixes the height of billing and shipping area so it's the 
  billingShippingHeightFix: function(e){

    var enclosingArea = false;
    // the parent container we need to inspect
    if(dojo.byId("atg_store_checkoutOptionArea")){
      enclosingArea = dojo.byId("atg_store_checkoutOptionArea");
    }

    if(enclosingArea){
      var mostBottomNess = 0;
      // find all the child fieldsets
      dojo.query("fieldset", enclosingArea).forEach(
          function(tags) {
              // get the fieldsets dimensions
              coords = dojo.coords(tags);
              // see if this childs content is taller, if it is make the height bigger
              if((coords.t + coords.h) > mostBottomNess) mostBottomNess = (coords.t + coords.h);

          }
      );
      // if there is a form validation take it's height into consideration
      if(dojo.byId("atg_store_formValidationError")){
        mostBottomNess = mostBottomNess + dojo.coords(dojo.byId("atg_store_formValidationError")).h;
      }
      // debug
      console.debug("Resize the ship/bill section so it is: ", mostBottomNess+"px");
      
      // if this is shipping apply the height to the correct element
      if(dojo.byId("atg_store_checkoutShippingAddress")){
        dojo.byId("atg_store_checkoutShippingAddress").style.height = mostBottomNess+40+"px";
      }
      // if this is billing apply the height to the correct element      
      if(dojo.byId("atg_store_checkoutBilling")){
        dojo.byId("atg_store_checkoutBilling").style.height = mostBottomNess+40+"px";
      }
    }
    // another hack fix for IE6 this style set, makes it redraw the button so it doesn't get hidden
    if(dojo.query(".atg_store_checkoutContinue")[0]){
      dojo.query(".atg_store_checkoutContinue")[0].style.height = "auto";
    }
    

  },
  
  // Toggles addresses associated with a select drop down
  addressTogglerView: function(e){
    // is it an event or a node
    if(e.target){
      e.cancelBubble=true;
      e.preventDefault();
      target = e.target;
    }else{
      target = e;
    }

    var chosenAddressIndex = target.selectedIndex;

    //ACF commented this section because of error on checkout shipping page
    //feel free to put it back if necessary
    
    // hide all the addresses
    //var addressListNode = atg.store.checkoutNav.getNextRealSibling(target.parentNode);
   // dojo.forEach(
    //    dojo.query("UL LI",addressListNode),
    //    function(addressBlock) {
    //        addressBlock.style.display = "none";
    //    }
    //);
    // now show the one we picked
    //dojo.query("UL LI", addressListNode)[chosenAddressIndex].style.display = "block";
   // console.debug("Address dropdown should be showing: ", dojo.query("UL LI", addressListNode)[chosenAddressIndex]);
    
  },
  

  emailSelect: function(seq) {
    var emails=document.getElementsByName("email");
    if(emails && emails.length < 1) {
      return false;
    }
    for(var i=0; i < emails.length; i++) {
      if(parseInt(seq) == parseInt(i)) {
        emails[i].disabled = false;
      }else{
        emails[i].disabled = true;
        emails[i].value="";
      }
    }
  },
  
  radioSelect: function() {
    var radios=document.getElementsByName("returning");
    radios[0].checked="true";
    if(radios && radios.length<1) {
      return false;
    }
    showSelect(0);
  }
}
// fire the initialisation method and get the ball rolling
dojo.addOnLoad(atg.store.checkoutNav.init);
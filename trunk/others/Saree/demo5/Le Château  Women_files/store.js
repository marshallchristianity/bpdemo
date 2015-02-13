/**
 * This file contains Javascript utility functions used throughout the store application.
 */

dojo.provide("atg.store.util");

atg.store.util={

  createNode: function(nodeName){
  return document.createElement(nodeName);
  },
  removeNode: function (targetNode){
  targetNode.parentNode.removeChild(targetNode);
  },
  insertBefore: function(newNode,targetNode){
  targetNode.parentNode.insertBefore(newNode,targetNode);
  },
  replaceNode: function(newNode,targetNode) { 
  targetNode.parentNode.replaceChild(newNode,targetNode);
  targetNode = null;
  },
  dropOffParentNode: function (srcNode){
  if(dojo.isString(srcNode)){
    srcNode = dojo.byId(srcNode);
  }
  
  for(var i=0; i<srcNode.childNodes.length; i++){
    var node = srcNode.childNodes[i];
    var _node =node.cloneNode(true);
    this.insertBefore(_node,srcNode);
  }

  this.removeNode(srcNode);

  },
  forceUpdateNodeContent: function(targetNode,content){

  for (i=0; i < targetNode.childNodes.length; i++) {
    this.removeNode(targetNode.childNodes[i]);
  }

  try
  {
    targetNode.innerHTML = dojo.trim(content);
  }
  catch (err)
  {

    var tmpdom = document.createElement("div");
    tmpdom.innerHTML = dojo.trim(content);
    for (i=0; i < tmpdom.childNodes.length; i++)
    {
      try
      {
        targetNode.appendChild(tmpdom.childNodes[i]);
      }
      catch (err)
      {
        console.debug("can't update"+err);
        return false;
      }
      
    }
    tmpdom = null;
  }
  
  return true;
  },

  getCompleteHTML: function (srcNode){
  var _div = this.createNode("div");
  var _displayNode = srcNode.cloneNode(true);
  _div.appendChild(_displayNode);
  var completeHTML = _div.innerHTML;
  _displayNode = null;
  _div = null;
  return completeHTML;
  },

  forceDisplayNewNodeInTargetNode:function (displayNode,targetNode){

  var div = this.createNode("div");

  div.innerHTML = this.getCompleteHTML(displayNode);
    this.replaceNode(div.firstChild,targetNode);
  


  },

  forceDisplayExitNodeInTargetNode:function (exitNode){
   var tmpNode = this.createNode("div");
   this.insertBefore(tmpNode,exitNode);
   this.forceDisplayNewNodeInTargetNode(exitNode,tmpNode);
   this.removeNode(exitNode);

  },
  addParentNodeToExitNode: function(parentNode,src,flag){
   this.insertBefore(parentNode,src);
   if (flag==="node"){

     this.forceUpdateNodeContent(parentNode,src);
   } else if(flag==="html"){

     this.forceUpdateNodeContent(parentNode,this.getCompleteHTML(src));
     this.removeNode(src);
   }
   
  },

  openwindow:function(url,name,iWidth,iHeight) {
  var url;
  var name;
  var iWidth;
  var iHeight;
  var iTop = (window.screen.availHeight-30-iHeight)/2;
  var iLeft = (window.screen.availWidth-10-iWidth)/2;
  var param = 'height='+iHeight+',,innerHeight='+iHeight+',width='+iWidth+',innerWidth='+iWidth+',top='+iTop+',left='+iLeft+',toolbar=no,menubar=no,scrollbars=yes,resizeable=no,location=no,status=no';
  window.open(url,name,param);
 },

  /** 
   * Used on the cart page to autoselect the giftnote when 
   * a user selects the gift wrap option
   */
  autoSelectGiftNote: function() {    
    if (document.cartform.atg_store_addWrap.checked &&
        !document.cartform.atg_store_addNote.checked) {       
      document.cartform.atg_store_addNote.click();
    }  
  },
  
  /**
   * The email campaign popup.  First check the form fields to 
   * make sure we can submit.
   */ 
  emailSignup: function(URL, theForm) {  
    // need to make sure the required fields are not null
    var openWindow = true;
    
    // check to see if we have an email address at all
    var addressEntered = theForm.atg_store_signUpInput.value;
    if (dojo.trim(addressEntered) === "") {
      openWindow = false;
    }
    
    //if email id is not valid don't open the window
    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(addressEntered))){
      openWindow = false;
    }
  
    // don't open window if we had a form error
    if (openWindow) {
      document.open(URL,"","scrollbars=yes,toolbar=no,directories=no,menubar=no,resizable=yes,status=yes,width=480,height=500");
    }
  },
  
  /**
   * The product details popup 
   */
  detailsPopup: function(URL) {
    document.open(URL,"","scrollbars=yes,toolbar=no,directories=no,menubar=no,resizable=yes,status=yes,width=450,height=525");
  },

  /**
   * The notify me when in-stock popup 
   */  
  
  setUpPopupEnhance: function() {

    dojo.query(".atg_store_popupTrigger").forEach(
      function(item, index, array){
        console.debug("Adding Popup Trigger Behavior to: ", item);
        dojo.connect(item, "onclick", atg.store.util, "notifyMePopup");
      }
    );
  },
  
  /**
   * The notify me when in-stock popup 
   */
  notifyMePopup: function(evt) {   
    if(evt.target){      
      evt.cancelBubble=true;
      evt.preventDefault();      
    }
    
    var url = evt.currentTarget;
    document.open(url,"","scrollbars=yes,toolbar=no,directories=no,menubar=no,resizable=yes,status=yes,width=480,height=500");

    return false;
  },

  /**
   * Return false if the key pressed in the event object is the return key, true otherwise
   */
  killEnter: function(evt) {
    if(evt.keyCode == 13 || evt.which == 13) {
      return false;
    }
    return true;
  },

  /**
   * Return true if the key pressed in the event object is numeric or a cursor control key
   * such as backspace, cursor left/right etc.; false otherwise
   */
  isNumeric: function(evt){
    var keyCode;

    if (window.event){    // IE
      keyCode = evt.keyCode;
    }
    else if (evt.which){  // Netscape/Firefox/Opera
      keyCode = evt.which;
    }

    if ( ((keyCode == null) || (keyCode == 0) || (keyCode == 8)
           || (keyCode == 10) || (keyCode == 13) || (keyCode == 27)
           || (keyCode == 35) || (keyCode == 36) || (keyCode == 46)
           || (keyCode == 37) || (keyCode == 38) || (keyCode == 39) || (keyCode == 40))
         || (keyCode >= 48 && keyCode <= 57)
         || (keyCode >= 96 && keyCode <= 105) ){
      // Control character or numeric
      return true;
    }
    else{
      return false;
    }
  },

  /**
   * Update facet trail value
   */
  updateFacetTrail: function(xkeyword){
    var trltxt = dojo.string.trim(document.facetSearch.trailtext.value);
    if(trltxt === "" || trltxt === dojo.string.trim(xkeyword)){
      document.facetSearch.addFacet.value="";
      document.facetSearch.trailtext.value="";
    }
    else{
      document.facetSearch.addFacet.value="SRCH:"+trltxt;
    }
    return true;
  }, 
   
  /**
   * Display block if none 
   */
  toggleOptions: function(divName){
	console.debug("toggleOptions ("+divName+") is called");
	var children = document.getElementById(divName).getElementsByTagName('div');
	console.debug(children.length+ " childrens are found");
	for(var i=0; i<children.length; i++){
	  var displayStyle = children[i].style.display;
	  if (displayStyle == "block"){
		children[i].style.display = "none";
	  }
	  if (displayStyle == "none"){
		children[i].style.display = "block";
	  }
	}
  },
  
   /**
   * Caller function for toggleDIv and compressDiv
   */
  toggleBothDiv: function(idx, totalFacet,optionType){
    
  var animation;
  if(optionType==1){
     atg.store.util.toggleOptions(idx);
     animation = dojo.fx.wipeIn({node: "lessDiv" + idx, duration: 500});
     animation.play();
  }else if(optionType==2){
     animation = dojo.fx.wipeOut({node: "lessDiv" + idx, duration: 500});
     animation.play();
     atg.store.util.toggleOptions(idx);         
  }
  },
 
  /**
   * Display the catalog flyout menus in IE6. All other browsers handle flyouts via CSS.
   */
  catalogNavIE: function(){
    if (!dojo.isIE){
      // Only apply to IE6
      return;
    }
    
    var catNav = dojo.byId('atg_store_catNav');
    if (!catNav){
      return;
    }
    
    var navItems = dojo.query('#atg_store_catNav > li');
  
    for(i=0; i<navItems.length; i++){    
      // Add the "over" class if the current list item doesn't have the class "active"
      dojo.connect(navItems[i], "onmouseover", function(evt){
          dojo.addClass(evt.currentTarget, "over");
          evt.stopPropagation();
      });
    
      // Remove the "over" class   
      dojo.connect(navItems[i], "onmouseout", function(evt){
        dojo.removeClass(evt.currentTarget, "over");
        evt.stopPropagation();
      });
    }
  },

  /**
   * Text Area character counter
   */
  textAreaCounter: function(htmlTextArea , currentCounter, maxCounter) {
    var maxLimit = document.getElementById(maxCounter).firstChild.nodeValue;
    var currentCount = document.getElementById(currentCounter);

    if (htmlTextArea.value.length > maxLimit){
      htmlTextArea.value = htmlTextArea.value.substring(0, maxLimit);
    }else{
      currentCount.innerHTML = htmlTextArea.value.length;
    }
  },
  
  /**
   * Disable nodes that have atg_behavior_disableOnClick CSS class applied to them when they are clicked.
   * 
   * Expects the following attributes passed in on the params object
   *   cssClass: CSS class denoting the behavior
   *   defaultDisabledValue: Text value that will be set on the node when clicked and disabled
   *   freezeWidth: boolean signifying whether the width of the nodes should be retained
   * 
   * Any node that the behavior is attached to will be disabled whenever a click event is intercepted. This
   * should help prevent any double submit errors on the server.
   * 
   * A 'disabledValue' attribute may be set on the node itself. This value will override any default 
   * value that is set on this function.
   */
  applyDisableOnClickBehavior: function(params){    
    var elements=dojo.query(params.cssClass);
    console.debug("Applying DisableOnClick behavior to "+elements.length+" nodes with class ["+params.cssClass+"]");
    
    for (var i=0; i<elements.length; i++){
      var node=elements[i];
      console.debug(node);
      
      dojo.event.connect(node,"onclick",function(evt){  
        var node=evt.target;
        if (node.justClicked){
          console.debug("Ignoring click");
          // Node has already been clicked and is being handled, so ignore this click
          evt.preventDefault();
          evt.stopPropagation();
          return false;
        }
        
        console.debug("Disabling node before form submission");
        console.debug(node);
        
        // retain original node width - prevents node from resizing when disabled value text is set on it
        if (params.freezeWidth){
          node.style.width=dojo.html.getBorderBox(node).width+"px";
        }
        
        // Get disabled text from node if set, otherwise use default passed to this function. If default not
        // set, just use the existing value on the button.
        var disabledValue=node.getAttribute("disabledValue");
        var originalValue=(node.nodeName=="INPUT" ? node.value : node.innerHTML);
        if (!disabledValue) { 
          disabledValue=(params.defaultDisabledValue ? params.defaultDisabledValue : originalValue);
        }
        
        if (node.nodeName=="INPUT"){
          // Create hidden form element to copy submit button's value into. Need to do this as disabled elements
          // are not submitted from a form by the browser.
          var replacementNode=document.createElement("INPUT");
          replacementNode.type="hidden";
          replacementNode.name=node.name;
          replacementNode.value=node.value;
          
          // Append this to the parent form
          var formNode=dojo.html.getParentByType(node,"FORM");
          formNode.appendChild(replacementNode);
          
          // Disable the node
          node.value=disabledValue;
          node.name="";
          node.disabled=true;
          
          // Disabling the submit button prevents the form from being submitted in IE, so submit it here
          evt.preventDefault();
          formNode.submit();        
        } 
        else if (node.nodeName=="A"){
          node.innerHTML=disabledValue;
          node.justClicked=true; // Prevent further clicks from causing default behavior
        }
        
        // Continue with normal browser processing of click event
        return true;
      });
    }
  },
  noenter: function() {
    return !(window.event && window.event.keyCode == 13); 
  }
};

/**
 *  Product detail page tab object
 */
function ProductDetailTab() {
  
  /** All the tabs in the page*/
  this.tabs = new Array("description", "features", "contents");
  
  
  this.getTabTitle = function (tabId) {
    return dojo.byId(tabId + "Title");
  };
  
  this.inactiveTile = function (tabId) {
    this.getTabTitle(tabId).className = "";
  };
  
  this.inactiveAllTiles = function () {
    for (var i = 0; i < this.tabs.length; i++) {
      this.inactiveTile(this.tabs[i]);
    }
  };
  
  this.activeTile = function (tabId) {
    this.getTabTitle(tabId).className = "active";
  };
  
  this.activeTab = function (tabId) {
    dojo.byId(tabId).className = "tab_content active";
  };
  
  this.inactiveTab = function (tabId) {
    dojo.byId(tabId).className = "tab_content";
  };
  
  this.inactiveAllTabs = function () {
    for (var i = 0; i < this.tabs.length; i++) {
      this.inactiveTab(this.tabs[i]);
    }
  };
  
  this.switchToTab = function (tabId) {
    this.inactiveAllTiles();
    this.inactiveAllTabs();
    this.activeTile(tabId);
    this.activeTab(tabId);
  };
}

/**
 *  Switch tabs in Product detail page 
 */
function switchProductDetailTab(nowTabId) {
  var productDetailTab = new ProductDetailTab();
  productDetailTab.switchToTab(nowTabId);
  return false;
}
/**
 *  control searchInput and signInput  in pageContainer
 */
  function inputGetFocus(inputId,inputText){
    
    var input=document.getElementsByName(inputId);
    for(var i=0;i<input.length;i++){
      if(input[i].value==inputText){
        input[i].value="";
        }
    }
  
  }
  function inputLoseFocus(inputId,inputText){
    var input=document.getElementsByName(inputId);
    for(var i=0;i<input.length;i++){
      if(trim(input[i].value)==""){
        input[i].value=inputText;
      }
    }
  }
  
  function trim(str)
  {
    return str.replace(/^\s*/,"").replace(/\s*$/,"");
  }

  function highlightSelectedPersonalNav(selectedNodeId){
    var selectedNode = document.getElementById(selectedNodeId);
      selectedNode.className=selectedNode.className + ' active';
      //alert(document.getElementById(selectedNodeId).className)
  }
  
/**
 *  Switches password input field to text input field to display 
 *  help note (defaultMessage). If user has already filled password input field then 
 *  do not switch.
 */   
function   changeToTextTypeIfEmpty(password, textId, defaultMessage)   
{ 
  if (password.value != '') {
    return;
  }  
  var text=document.getElementById(textId);
  text.value=defaultMessage;    
  text.style.disabled=false;       
  text.style.display="";   
  password.style.display="none";  
  password.style.disabled=true;
}   
  
/**
 *  Switches text input field to password input field 
 *  (should be called when text field is focused).  
 */     
function   changeToPasswordType(text, passwordId)   
{ 
  var password=document.getElementById(passwordId);    
  password.style.disabled=false;     
  password.style.display="";   
  text.style.display="none";   
  text.style.disabled=true;      
  password.focus();
}        
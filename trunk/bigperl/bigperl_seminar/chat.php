Enter Chat and press enter
<div><input id=input placeholder=you-chat-here /></div>
 
Chat Output
<div id=box></div>
 
<script src=http://cdn.pubnub.com/pubnub.min.js></script>
<script>(function(){
var box = PUBNUB.$('box'), input = PUBNUB.$('input'), channel = 'chat';
PUBNUB.subscribe({
channel : channel,
callback : function(text) { box.innerHTML = (''+text).replace( /[<>]/g, '' ) + '<br>' + box.innerHTML }
});
PUBNUB.bind( 'keyup', input, function(e) {
(e.keyCode || e.charCode) === 13 && PUBNUB.publish({
channel : channel, message : input.value, x : (input.value='')
})
} )
})()</script>

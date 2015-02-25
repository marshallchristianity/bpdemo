

// livechat by www.mylivechat.com/  


if(typeof(MyLiveChat)=="undefined")
{
	MyLiveChat={};
	MyLiveChat.RawConfig={};
	MyLiveChat.RawQuery={hccid:"63821550",apimode:"chatinline"};
	for(var p in MyLiveChat.RawConfig)
	{
		MyLiveChat[p]=MyLiveChat.RawConfig[p];
	}
	for(var p in MyLiveChat.RawQuery)
	{
		MyLiveChat[p]=MyLiveChat.RawQuery[p];
	}
	if(MyLiveChat.InPageTemplate=="1")
		MyLiveChat.InlineChatTemplate="2";
	MyLiveChat.HCCID='63821550';
	MyLiveChat.PageBeginTime=new Date().getTime();
	MyLiveChat.LoadingHandlers=[];
	//	,"Departments"
	MyLiveChat.CPRFIELDS=["SyncType","SyncStatus","SyncResult","HasReadyAgents","VisitorUrls","VisitorStatus","VisitorDuration","VisitorEntryUrl","VisitorReferUrl"];
}



MyLiveChat.Version=1013;
MyLiveChat.FirstRequestTimeout=10800;
MyLiveChat.NextRequestTimeout=21600;
MyLiveChat.SyncType=''
MyLiveChat.SyncStatus="LOADING";
MyLiveChat.SyncUserName=null;
MyLiveChat.SyncResult="LOADING";
MyLiveChat.HasReadyAgents=false;
MyLiveChat.SourceUrl="http://www.worldindia.com/";
MyLiveChat.AgentTimeZone=parseInt("6" || "-5");
	
MyLiveChat.Departments=[];

MyLiveChat.Departments.push({
	Name:"Default",
	Agents:[{
		Id:'User:1',
		Name:'admin',
		Online:false
	}],
	Online:false
});


	
MyLiveChat.VisitorUrls=[];


	
   	

function MyLiveChat_AddScript(tag)
{
	var func=MyLiveChat_AddScript;
	var arr=func._list;
	if(!arr)func._list=arr=[];
	if(func._loading)
	{
		arr.push(tag);
		return;
	}
	function ontagload()
	{
		func._loading=false;
		if(!arr.length)return;
		tag=arr.shift();
		LoadTag();
	}
	function LoadTag()
	{
		func._loading=true;
		if('onload' in tag)
		{
			tag.onload=ontagload;
		}
		else
		{
			var iid=setInterval(function()
			{
				if(tag.readyState!='complete'&&tag.readyState!='loaded')
					return;
				clearInterval(iid);
				ontagload();
			},10);
		}
		document.body.insertBefore(tag,document.body.firstChild);
		
	}
	LoadTag();
}

function MyLiveChat_GetLastScriptTag()
{
	var coll=document.getElementsByTagName("script");
	return coll[coll.length-1];
}
function MyLiveChat_DocWrite(html,relativetag)
{
	//inside <head>
	if(!document.body)
	{
		document.write(html);
		return;
	}

	//TODO: do not use document.write , some thridparty may override it.
	if(document.readyState=="loading")
	{
		document.write(html);
		return;
	}
	
	if(html.substr(0,7)=="<script")	//Low IE interactive or defer
	{
		var tag=document.createElement("script");
		var src=html.match(/src=["']?([^"'>]*)["']/)[1];
		if(!MyLiveChat.LoadedScripts)MyLiveChat.LoadedScripts={};
		if(MyLiveChat.LoadedScripts[src])return;
		MyLiveChat.LoadedScripts[src]=true;
		tag.setAttribute("src",src);
		MyLiveChat_AddScript(tag);
	}
	else
	{
		
		if(!relativetag)relativetag=MyLiveChat_GetLastScriptTag();

		var div = document.createElement("DIV");
		div.innerHTML = html;
		while (true) {
			var c = div.firstChild;
			if (!c) break;
			div.removeChild(c);
			relativetag.parentNode.insertBefore(c,relativetag);
		}
	}
}

if(!MyLiveChat.CCCustomerId)
{
   	MyLiveChat.CCCustomerId=null;
}
MyLiveChat.VisitorStatus="";
MyLiveChat.VisitorDuration=0;
MyLiveChat.VisitorEntryUrl="";
MyLiveChat.VisitorReferUrl="";

MyLiveChat.ShowButton=true;
MyLiveChat.ShowLink=true;
MyLiveChat.ShowBox=true;
MyLiveChat.ShowInvite=true;
MyLiveChat.ShowSmart=false;
MyLiveChat.ScriptUrl="https://s3.mylivechat.com/livechat/livechat.aspx?hccid=63821550\x26apimode=chatinline";
MyLiveChat.UrlBase="https://s3.mylivechat.com/livechat/";
MyLiveChat.SiteUrl="https://s3.mylivechat.com/";



MyLiveChat.NoPrivateLabel=true;

MyLiveChat.RandomID='b576eeac-fdd9-424f-982a-7fe559cedd31';

MyLiveChat.LoadingHandlers.push(function(funcself)
{
   	MyLiveChat_RunLoadingHandler('chatinline',funcself);
});

MyLiveChat.ResourcesVary="\x26culture=en-US\x26mlcv=1013";

function MyLiveChat_LoadMoreScripts()
{
   	var mlcresurl=MyLiveChat.UrlBase+"resources.aspx?HCCID="+MyLiveChat.HCCID;
   	if(MyLiveChat.InPageTemplate)mlcresurl+="&InPageTemplate="+MyLiveChat.InPageTemplate;
   	if(MyLiveChat.InlineChatTemplate)mlcresurl+="&InlineChatTemplate="+MyLiveChat.InlineChatTemplate;
	
   	if(!window.jsml)
   	{
   		MyLiveChat_DocWrite("<script src='"+MyLiveChat.SiteUrl+"JSML/jsml.js'></scr"+"ipt>");
   	}
   	MyLiveChat_DocWrite("<script src='"+mlcresurl+MyLiveChat.ResourcesVary+"'></scr"+"ipt>");

   	if(false)
	{
		window.mlcapimodeisdialog=true;
		var surl=MyLiveChat.ScriptUrl;
		MyLiveChat_DocWrite("<script onerror='LoaderScriptTagError()' src='" + MyLiveChat.UrlBase + "dialog.aspx?"+surl.substring(surl.indexOf('?')+1)+"'></scr" + "ipt>");	
		MyLiveChat_DocWrite("<script onerror='LoaderScriptTagError()' src='" +  MyLiveChat.UrlBase + "script/dialoginit.js'></scr" + "ipt>");
	}
	else if(false)
	{
   		MyLiveChat.IsDesignMode=true;
	}
}

MyLiveChat['chatinline'+"_script_tag"]=MyLiveChat_GetLastScriptTag();

if(typeof(MyLiveChat_Initialize)=="undefined")
{
	MyLiveChat_LoadMoreScripts();
}
else
{
	MyLiveChat_Initialize()
}


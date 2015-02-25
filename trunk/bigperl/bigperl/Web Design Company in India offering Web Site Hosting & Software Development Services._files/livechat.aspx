

// livechat by www.mylivechat.com/  




MyLiveChat.Version=1013;
MyLiveChat.FirstRequestTimeout=10800;
MyLiveChat.NextRequestTimeout=21600;
MyLiveChat.SyncType='VISIT'
MyLiveChat.SyncStatus="READY";
MyLiveChat.SyncUserName="Guest_5a668551";
MyLiveChat.SyncResult=null;
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


	
   	

MyLiveChat.LastLoadTime=new Date().getTime();
MyLiveChat.VisitorStatus="VISIT";
MyLiveChat.VisitorDuration=92;
MyLiveChat.VisitorEntryUrl="http://www.worldindia.com/";
MyLiveChat.VisitorReferUrl=null;



MyLiveChat_Initialize();

if(MyLiveChat.localStorage||MyLiveChat.userDataBehavior)
{
	MyLiveChat_SyncToCPR();
}
	

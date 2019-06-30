/* This is an Customized Javascript File used to do Chat operates throughout Application.
 * -------------------------------------------------------------------------------------------------------------------------
 * | While the Customer using the pages without login into their account (UnRegistered / UnLogged Pages), chat-pop gets    |
 * | displayed. It is being invoked with the help of load_chatpopup() javascript Function.                                 |
 * |
 * |
 */
 
/* The Properties that to be set while using app.ui.chatpopup.js File */

/* SessionStorage Variable : */
var chatPopupContent = PROJECT_SESSIONSTORAGE_VARIABLES.CHAT_CUSTOMER_DEFAULTPOPUPCONTENT;
var queueStatus = PROJECT_SESSIONSTORAGE_VARIABLES.CHAT_CUSTOMER_QUEUESTATUS; // INQUEUE
var queueLastViewed = PROJECT_SESSIONSTORAGE_VARIABLES.CHAT_LIVESUPPORT_QUEUELASTVIEWED; // TIMESTAMP

/* chatInitialContent : */
var welcomeMsg = encodeURI('<div align="center"><b>Welcome to HereWeGet.com</b></div>');
var greetingMsg = encodeURI('<div align="center" style="color:red;"><b>Greetings for the Day...!!!</b></div>');

var chatInitialContent = [{"title":"","msg":welcomeMsg},
						  {"title":"","msg":greetingMsg},
			              {"title":"AssignmentHelp","msg":"Hi, Do you need assignment help?"}];
						  
/* liveSupportChatURL : (This is the Rest web-service URL that deals with Chat) */						  
var liveSupportChatURL = PROJECT_URL+'backend/php/dac/controller.livesupport.chat.php';

function load_chatpopup(){
/* FUNCTION DESCRIPTION: 
 */
 /*
 if(window.sessionStorage.getItem(chatPopupContent)===null){ 
   window.sessionStorage.setItem(chatPopupContent, JSON.stringify(chatInitialContent));
 } */
 chatBoxInitilaizer();
}

function connectToLiveChat(){
 // $("div#chatInitialForm").removeAttr('style','width:300px;');
 var elem = $("div#chatInitialForm").parent().html('');
 
// ui-widget 
 var chatDivision = document.createElement("div");
      chatDivision.setAttribute("id","appCore-ui-chatDivision1");
  document.body.appendChild(chatDivision);
  var box = null;
  if(box) { box.chatbox("option", "boxManager").toggleBox(); }
  else { box = $("#appCore-ui-chatDivision1").chatbox({
         title : '<i class="fa fa-comments" aria-hidden="true"></i> Live Chat Support'});
    
    box = $("#appCore-ui-chatDivision1").chatbox({id:"You", user:{key : "value"},
          title : '<i class="fa fa-comments" aria-hidden="true"></i> Live Chat Support',
          messageSent : function(id, user, msg) {
            $("#appCore-ui-chatDivision1").chatbox("option", "boxManager").addMsg(id, msg);
		  //  chatData.push({"title":id,"msg":msg});
			customerLSChat_formSubmit_storeChat(id, msg);
          }}); 

  for(var index=0;index<chatInitialContent.length;index++){
   $("#appCore-ui-chatDivision1").chatbox("option", "boxManager")
    .addMsg(chatInitialContent[index].title, decodeURI(chatInitialContent[index].msg));
  } 
 customerLSChat_display_chatUpdate();
}
}

function chatBoxInitilaizer(chat_div){
/* FUNCTION DESCRIPTION: 
 */
  /* Step -1 : Creating  a div tag with Id where Chat pop gets displayed */
  var chatDivision = document.createElement("div");
      chatDivision.setAttribute("id","appCore-ui-chatDivision");
  document.body.appendChild(chatDivision);
  
  /* Step-2 : Adding UnRegistered / UnLogged Customers to Queue */
  customerChat_formSubmit_addUnRegUnLogToQueue();
  
  
 // var chatData=JSON.parse(window.sessionStorage.getItem(chatPopupContent));
  var box = null;
  if(box) { box.chatbox("option", "boxManager").toggleBox(); }
  else { box = $("#appCore-ui-chatDivision").chatbox({
         title : '<i class="fa fa-comments" aria-hidden="true"></i> Live Chat Support'});
  }

  $("div.ui-widget-content.ui-chatbox-content").attr('id','chatInitialForm');
  $("div#chatInitialForm").attr('style','width:300px;');
  var content='<div class="container-fluid">';
  
      content+='<div class="row">';
	  content+='<div class="col-xs-12">';
	  content+='<div class="form-group">';
	  content+='<i>Fill your following details and submit to connect with our ';
	  content+='Online Customer Representative for your Online Support.</i>';
	  content+='</div>'; // form-group
	  content+='</div>'; // col-xs-12
	  content+='</div>'; // row
	  
      content+='<div class="row">';
	  content+='<div class="col-xs-12">';
	  content+='<div class="form-group">';
	  content+='<label>Name</label>';
	  content+='<input type="text" class="form-control" placeholder="Enter your Name"/>';
	  content+='</div>'; // form-group
	  content+='</div>'; // col-xs-12
	  content+='</div>'; // row
	  
	  content+='<div class="row">';
	  content+='<div class="col-xs-12">';
	  content+='<div class="form-group">';
	  content+='<label>Country</label>';
	  content+='<select class="form-control">';
	  content+='<option value="">Select your Country</option>';
	  content+='<option value="India">India</option>';
	  content+='<option value="Australia">Australia</option>';
	  content+='</select>';
	  content+='</div>'; // form-group
	  content+='</div>'; // col-xs-12
	  content+='</div>'; // row
	  
	  content+='<div class="row">';
	  content+='<div class="col-xs-12">';
	  content+='<div class="form-group">';
	  content+='<button class="btn btn-yellow form-control" onclick="connectToLiveChat();">';
	  content+='<b>Connect to Live Chat</b></button>';
	  content+='</div>'; // form-group
	  content+='</div>'; // col-xs-12
	  content+='</div>'; // row
	  
	  content+='</div>'; // container-fluid
  document.getElementById("chatInitialForm").innerHTML=content;
 
}

function customerChat_formSubmit_addUnRegUnLogToQueue(){
/* FUNCTION DESCRIPTION: 
 */
if(window.sessionStorage.getItem(queueStatus)===null){
  js_ajax("GET",liveSupportChatURL, { action: 'ADDUSER_TO_QUEUE', queueStatus:'ONLINE', 
   IPAddress:CLIENT_IPADDRESS, SessionId:SESSION_ID, toAgent:'', queueOn:'0000-00-00 00:00:00',
   agentPicked:'0000-00-00 00:00:00', chatFinished:'0000-00-00 00:00:00', order_Id:'', account_Id:'', 
   finished:'N' }, function(response){
	ACCOUNT_QUEUEID = response.queue_Id;
	ACCOUNT_HELPID = response.toAgent;
	window.sessionStorage.setItem(queueStatus, 'INQUEUE'); // Sets Status in Online
  });
}
 
}

function customerLSChat_formSubmit_storeChat(title, msg){
  js_ajax("GET",liveSupportChatURL,{ action:'SETSUPPORTCHAT', queue_Id:ACCOUNT_QUEUEID,
		title:title, msg:msg, toAgent:ACCOUNT_HELPID }, function(response){
    console.log(response);
  });
}

function customerLSChat_display_chatUpdate(){
 setInterval(function(){
 js_ajax("GET",liveSupportChatURL,{ action:'GETSUPPORTCHAT', queue_Id:ACCOUNT_QUEUEID }, 
  function(response){
	document.getElementById('appCore-ui-chatDivision1').innerHTML='';
	
	for(var index=0;index<chatInitialContent.length;index++){
     $("#appCore-ui-chatDivision1").chatbox("option", "boxManager")
	   .addMsg(chatInitialContent[index].title, decodeURI(chatInitialContent[index].msg));
    }
	 
	for(var index=0;index<response.length;index++){
	   $("#appCore-ui-chatDivision1").chatbox("option", "boxManager")
	   .addMsg(response[index].title, decodeURI(response[index].msg));
	}
  });
 },3000);
}

function liveSupportChat_display_chatData(agent_Id){
 js_ajax("GET",liveSupportChatURL,{ action:'LIVESUPPORTAGENT_CHATHISTORY', account_Id:agent_Id }, 
  function(response){
    console.log("liveSupportChat_display_chatData: "+JSON.stringify(response));
  });
}


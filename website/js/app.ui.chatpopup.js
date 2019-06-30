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

function chatBoxInitilaizer(chat_div){
/* FUNCTION DESCRIPTION: 
 */
  /* Step -1 : Creating  a div tag with Id where Chat pop gets displayed */
  var chatDivision = document.createElement("div");
      chatDivision.setAttribute("id","appCore-ui-chatDivision");
  document.body.appendChild(chatDivision);
  
  /* Step-2 : Adding UnRegistered / UnLogged Customers to Queue */
  customerChat_formSubmit_addUnRegUnLogToQueue();
  
  var chatData=JSON.parse(window.sessionStorage.getItem(chatPopupContent));
  var box = null;
  if(box) { box.chatbox("option", "boxManager").toggleBox(); }
  else {  box = $("#appCore-ui-chatDivision").chatbox({id:"You", user:{key : "value"},
          title : '<i class="fa fa-comments" aria-hidden="true"></i> Live Chat Support',
          messageSent : function(id, user, msg) {
            $("#appCore-ui-chatDivision").chatbox("option", "boxManager").addMsg(id, msg);
		    chatData.push({"title":id,"msg":msg});
			customerLSChat_formSubmit_storeChat(id, msg);
          }});
  }
  for(var index=0;index<chatInitialContent.length;index++){
   $("#appCore-ui-chatDivision").chatbox("option", "boxManager")
    .addMsg(chatInitialContent[index].title, decodeURI(chatInitialContent[index].msg));
  } 
 customerLSChat_display_chatUpdate();
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
	document.getElementById('appCore-ui-chatDivision').innerHTML='';
	
	for(var index=0;index<chatInitialContent.length;index++){
     $("#appCore-ui-chatDivision").chatbox("option", "boxManager")
	   .addMsg(chatInitialContent[index].title, decodeURI(chatInitialContent[index].msg));
    }
	 
	for(var index=0;index<response.length;index++){
	   $("#appCore-ui-chatDivision").chatbox("option", "boxManager")
	   .addMsg(response[index].title, decodeURI(response[index].msg));
	}
  });
 },3000);
}


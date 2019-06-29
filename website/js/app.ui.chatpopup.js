/* This is an Customized Javascript File used to do Chat operates throughout Application.
 * -------------------------------------------------------------------------------------------------------------------------
 * | While the Customer using the pages without login into their account (UnRegistered / UnLogged Pages), chat-pop gets    |
 * | displayed. It is being invoked with the help of load_chatpopup() javascript Function.                                 |
 * |
 * |
 */
 
/* The Properties that to be set while using app.ui.chatpopup.js File */

/* Cookies Variable : */
var chatPopupContent = PROJECT_COOKIES_VARIABLES.CHAT_CUSTOMER_DEFAULTPOPUPCONTENT;
var queueStatus = PROJECT_COOKIES_VARIABLES.CHAT_CUSTOMER_QUEUEJOINEDON; // QUEUE JOINED TIMESTAMP
var queueLastViewed = PROJECT_COOKIES_VARIABLES.CHAT_LIVESUPPORT_QUEUELASTVIEWED; // TIMESTAMP

/* chatInitialContent : */
var chatInitialContent = [{"title":"","msg":"Welcome to HereWeGet.com."},
						  {"title":"","msg":"Greetings for the Day...!!!"},
			              {"title":"AssignmentHelp","msg":"Hi, Do you need assignment help?"}];
						  
/* liveSupportChatURL : (This is the Rest web-service URL that deals with Chat) */						  
var liveSupportChatURL = PROJECT_URL+'backend/php/dac/controller.livesupport.chat.php';

function load_chatpopup(){
/* FUNCTION DESCRIPTION: 
 */
 if(getCookie(chatPopupContent).length==0){ setCookie(chatPopupContent, JSON.stringify(chatInitialContent), 1); }
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
  
  
  var chatData=JSON.parse(getCookie(chatPopupContent));
  console.log("chatData: "+getCookie(chatPopupContent));
  var box = null;
  if(box) { box.chatbox("option", "boxManager").toggleBox(); }
  else {
    box = $("#appCore-ui-chatDivision").chatbox({id:"You", user:{key : "value"},
            title : '<i class="fa fa-comments" aria-hidden="true"></i> Live Chat Support',
            messageSent : function(id, user, msg) {
                $("#appCore-ui-chatDivision").chatbox("option", "boxManager").addMsg(id, msg);
            }});
  }
  for(var index=0;index<chatData.length;index++){
   $("#appCore-ui-chatDivision").chatbox("option", "boxManager").addMsg(chatData[index].title, chatData[index].msg);
  }
}

function customerChat_formSubmit_addUnRegUnLogToQueue(){
/* FUNCTION DESCRIPTION: 
 */
if(getCookie(queueStatus).length==0){
 js_ajax("GET",liveSupportChatURL, { action: 'ADDUSER_TO_QUEUE', queueStatus:'ONLINE', 
   IPAddress:CLIENT_IPADDRESS, SessionId:SESSION_ID, toAgent:'', queueOn:QUEUE_ADDEDON, 
   agentPicked:'0000-00-00 00:00:00', chatFinished:'0000-00-00 00:00:00', order_Id:'', account_Id:'', 
   finished:'N' }, function(response){
    console.log(response);
	setCookie(queueStatus, getCurentTimestamp(), 1); // Sets Status in Online
 });
}
console.log("queueStatus: "+getCookie(queueStatus));
}

function liveSupport_fetch_customersInQueue(){
 // FETCHQUEUELIST  queueLastViewed
}


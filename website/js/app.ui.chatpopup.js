/* This is an Customized Javascript File used to do Chat operates throughout Application.
 * -------------------------------------------------------------------------------------------------------------------------
 * | While the Customer using the pages without login into their account (UnRegistered / UnLogged Pages), chat-pop gets    |
 * | displayed. It is being invoked with the help of load_chatpopup() javascript Function.                                 |
 * |
 * |
 */
 
/* The Properties that to be set while using app.ui.chatpopup.js File */
var welcomeMsg;
var greetingMsg;
var chatBoxName;
var initialMsg;
var chatInitialContent;
/* SessionStorage Variable : */
var chatPopupContent = PROJECT_SESSIONSTORAGE_VARIABLES.CHAT_CUSTOMER_DEFAULTPOPUPCONTENT;
var userQueueStatus = PROJECT_SESSIONSTORAGE_VARIABLES.CHAT_CUSTOMER_QUEUESTATUS; // INQUEUE
var queueLastViewed = PROJECT_SESSIONSTORAGE_VARIABLES.CHAT_LIVESUPPORT_QUEUELASTVIEWED; // TIMESTAMP
						  
/* liveSupportChatURL : (This is the Rest web-service URL that deals with Chat) */						  
var liveSupportChatURL = PROJECT_URL+'backend/php/dac/controller.livesupport.chat.php';

function load_chatpopup(){
/* FUNCTION DESCRIPTION: 
 */
 /*
 if(window.sessionStorage.getItem(chatPopupContent)===null){ 
   window.sessionStorage.setItem(chatPopupContent, JSON.stringify(chatInitialContent));
 } */
 if(window.localStorage.getItem(userQueueStatus)===null){
    chatBoxInitilaizer();
 } else {
    connectToLiveChat();
 }
}

function chatBoxFormValidator(){
 var name = document.getElementById("chatpopup_form_name").value;
 var country = document.getElementById("chatpopup_form_country").value;
 if(name.length>0){
   if(country.length>0){
     window.localStorage.setItem("CHATBOX_USERNAME",name);
     connectToLiveChat();
   } else { div_display_warning('chatpopup_form_warning','W009'); }
 } else { div_display_warning('chatpopup_form_warning','W001'); }
}

function connectToLiveChat(){

/* chatInitialContent : */
  welcomeMsg = encodeURI('<div align="center"><b>Welcome to HereWeGet.com</b></div>');
  greetingMsg = encodeURI('<div align="center" style="color:red;"><b>Greetings for the Day...!!!</b></div>');
  chatBoxName = window.localStorage.getItem("CHATBOX_USERNAME");
  initialMsg = "Hi "+chatBoxName+", Do you need assignment help?";
  chatInitialContent = [{"title":"","msg":welcomeMsg},
						  {"title":"","msg":greetingMsg},
			              {"title":"AssignmentHelp","msg":initialMsg}];

 /* Adding UnRegistered / UnLogged Customers to Queue */
 customerChat_formSubmit_addUnRegUnLogToQueue();
  
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
	  content+='<div id="chatpopup_form_warning" class="form-group">';
	  content+='';
	  content+='</div>'; // form-group
	  content+='</div>'; // col-xs-12
	  content+='</div>'; // row
	  
      content+='<div class="row">';
	  content+='<div class="col-xs-12">';
	  content+='<div class="form-group">';
	  content+='<label>Name</label>';
	  content+='<input id="chatpopup_form_name" type="text" class="form-control" placeholder="Enter your Name"/>';
	  content+='</div>'; // form-group
	  content+='</div>'; // col-xs-12
	  content+='</div>'; // row

	  content+='<div class="row">';
	  content+='<div class="col-xs-12">';
	  content+='<div class="form-group">';
	  content+='<label>Country</label>';
	  content+='<select id="chatpopup_form_country" class="form-control">';
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
	  content+='<button class="btn btn-yellow form-control" onclick="chatBoxFormValidator();">';
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

if(window.localStorage.getItem(userQueueStatus)===null){
  var name = document.getElementById("chatpopup_form_name").value;
  var country = document.getElementById("chatpopup_form_country").value;
  js_ajax("GET",liveSupportChatURL, { action: 'ADDUSER_TO_QUEUE', queueStatus:'ONLINE', 
   chatName: name, country: country, IPAddress:CLIENT_IPADDRESS, SessionId:SESSION_ID, toAgent:'', 
   queueOn:'0000-00-00 00:00:00', agentPicked:'0000-00-00 00:00:00', chatFinished:'0000-00-00 00:00:00', 
   order_Id:'', account_Id:'', finished:'N' }, function(response){
    console.log("response: "+JSON.stringify(response));
	ACCOUNT_QUEUEID = response.queue_Id;
	ACCOUNT_HELPID = response.toAgent;
	window.localStorage.setItem(userQueueStatus, 'INQUEUE'); // Sets Status in Online
	console.log("ACCOUNT_QUEUEID: "+ACCOUNT_QUEUEID);
	console.log("ACCOUNT_HELPID: "+ACCOUNT_HELPID);
	console.log("userQueueStatus: "+window.localStorage.getItem(userQueueStatus));
  });
}
}

function customerLSChat_formSubmit_storeChat(title, msg){
  customerLSChat_bridge_storeChat(ACCOUNT_QUEUEID,title, msg, ACCOUNT_HELPID);
}

function customerLSChat_bridge_storeChat(queue_Id,title, msg, toAgent){
js_ajax("GET",liveSupportChatURL,{ action:'SETSUPPORTCHAT', queue_Id:queue_Id,
		title:title, msg:msg, toAgent:toAgent }, function(response){
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

function liveSupportChat_display_customersList(div_Id, agent_Id, account_Id){
 js_ajax("GET",liveSupportChatURL,{ action:'LIVESUPPORTAGENT_CUSTOMERSLIST', account_Id:agent_Id }, 
  function(response){
    var init_customerSessionId = "";
	var init_queue_Id = "";
    var content='<div class="messaging">';
        content+='<div class="inbox_msg">';
        content+='<div class="inbox_people">';
        content+='<div class="headind_srch">';
        content+='<div class="recent_heading"><h4>Recent</h4></div>';
        content+='<div>';
		content+='<div class="input-group">';
        content+='<input type="text" class="form-control"  placeholder="Search"/>';
        content+='<span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>';
		content+='</div>';
        content+='</div>';
        content+='</div>';
        content+='<div class="inbox_chat">';
		
        for(var index=0;index<response.length;index++){
		  var SessionId = response[index].SessionId;
		  var queue_Id = response[index].queue_Id;
		  var chatName = response[index].chatName;
		  var message = response[index].msg.split("|")[0];
		  var msgTime = response[index].msg.split("|")[1];
		  if(index===0){
		    init_customerSessionId = SessionId;
	        init_queue_Id = queue_Id; 
		  }
		  content+='<div id="'+SessionId+'" class="chat_list" ';
		  content+='onclick="javascript:liveSupportChat_display_chatData(this.id,\''+queue_Id+'\');">';
          content+='<div class="chat_people">';
          content+='<div class="chat_img"><img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"></div>';
          content+='<div class="chat_ib">';
          content+='<h5>'+chatName+' <span class="chat_date">'+get_stdDateTimeFormat01(msgTime)+'</span></h5>';
		  content+='<div class="mtop5p"><span class="label label-primary">UNREGISTERED</span></div>';
          content+='<div class="mtop15p"><p>'+message+'</p></div>';
          content+='</div>'; //  chat_ib
          content+='</div>'; // chat_people
          content+='</div>'; // chat_list
		}
		
        content+='</div>'; // inbox_chat
        content+='</div>';
        content+='<div class="mesgs">';
        content+='<div id="liveSupportChat-display-customerChat" class="msg_history">';
// 
        content+='</div>';
        content+='<div class="type_msg">';
        content+='<div class="input_msg_write">';
        content+='<input id="liveSupportChat-chat-toCustomer" type="text" class="write_msg" placeholder="Type a message"/>';
        content+='<button class="msg_send_btn" type="button" ';
		content+='onclick="javascript:liveSupportChat_formSubmit_storeChat(\''+account_Id+'\');">';
		content+='<i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>';
        content+='</div>';
        content+='</div>';
        content+='</div>';
        content+='</div>';
        content+='</div>';

    document.getElementById(div_Id).innerHTML=content;  
	liveSupportChat_display_chatData(init_customerSessionId, init_queue_Id);
    console.log("liveSupportChat_display_chatData: "+JSON.stringify(response));
  });
}
var LIVESUPPORTCHAT_CURRENT_QUEUEID; // This will updated on viewing customer chat LiveSupportAgent
function liveSupportChat_formSubmit_storeChat(account_Id){
 var customerMessage = document.getElementById("liveSupportChat-chat-toCustomer").value;
 customerLSChat_bridge_storeChat(LIVESUPPORTCHAT_CURRENT_QUEUEID,'AssignmentHelp', customerMessage, account_Id);
 document.getElementById("liveSupportChat-chat-toCustomer").value='';
}

function liveSupportChat_display_chatData(customerSessionId, queue_Id){
 LIVESUPPORTCHAT_CURRENT_QUEUEID=queue_Id;
 if($('.chat_list').hasClass('active_chat')){ $('.chat_list').removeClass('active_chat'); }
 if(!$('#'+customerSessionId).hasClass('active_chat')){ $('#'+customerSessionId).addClass('active_chat'); }
 js_ajax("GET",liveSupportChatURL,{ action:'GETSUPPORTCHAT', queue_Id:queue_Id }, 
  function(response){
    var content='';
    for(var index=0;index<response.length;index++){
	  var chat_Id = response[index].chat_Id;
	  var queue_Id = response[index].queue_Id;
	  var title = response[index].title;
	  var msg = response[index].msg;
	  var toAgent = response[index].toAgent;
	  var msg_On = response[index].msg_On;
	  if(title==='You'){
	    content+='<div class="incoming_msg mtop15p">';
        content+='<div class="incoming_msg_img">';
		content+='<img src="https://ptetutorials.com/images/user-profile.png" alt="sunil">';
		content+='</div>';
        content+='<div class="received_msg">';
        content+='<div class="received_withd_msg">';
        content+='<p>'+msg+'</p>';
        content+='<span class="time_date">'+get_stdDateTimeFormat01(msg_On)+'</span></div>';
        content+='</div>';
        content+='</div>';
	  } else {
	    content+='<div class="outgoing_msg mtop15p">';
        content+='<div class="sent_msg">';
        content+='<p>'+msg+'</p>';
        content+='<span class="time_date">'+get_stdDateTimeFormat01(msg_On)+'</span></div>';
        content+='</div>';
	  }
    }
        
        
	document.getElementById("liveSupportChat-display-customerChat").innerHTML=content;
    console.log("liveSupportChat_display_chatData: "+JSON.stringify(response));
  });
}


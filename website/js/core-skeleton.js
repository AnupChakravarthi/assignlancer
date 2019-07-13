function core_url_transfer(url){
 window.location.href=url;
}

function core_ajax_request(method,url,data,fn_successOutput,fn_errorOutput){
 $.ajax({type:method,url:url,data:data,success:function(response){ fn_successOutput(response); },
 error:function(response){ fn_errorOutput(response) }});
}
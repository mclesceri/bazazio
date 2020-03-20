var username;

$(document).ready(function()
{
    username = $('#username').html();

    pullData();
	
	$("#send").click(function () {
    		 sendMessage();
		});
	
    $(document).keyup(function(e) {
		
        if (e.keyCode == 13)
            sendMessage();
        else
            isTyping();
    });
});

function pullData()
{
    retrieveChatMessages();
    retrieveTypingStatus();
    setTimeout(pullData,3000);
}

function retrieveChatMessages()
{
	$.ajax({
        url: "retrieveChatMessages",
        type:"POST",
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {username: username},
        success:function(data){
            if (data.length > 0)
            $('#chat-window').append('<br><div>'+data+'</div><br>');
        }
    });
	
    $.post('retrieveChatMessages', {username: username}, function(data)
    {
        if (data.length > 0)
            $('#chat-window').append('<br><div>'+data+'</div><br>');
    });
}

function retrieveTypingStatus()
{	

	$.ajax({
        url: "retrieveTypingStatus",
        type:"POST",
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {username: username},
        success:function(data){
            if (data.length > 0)
            $('#typingStatus').html(username+' is typing');
        	else
            $('#typingStatus').html('');
        }
    });

    $.post('retrieveTypingStatus', {username: username}, function(username)
    {
        if (username.length > 0)
            $('#typingStatus').html(username+' is typing');
        else
            $('#typingStatus').html('');
    });
}

function sendMessage()
{
    var text = $('#text').val();
	
    if (text.length > 0)
    {
		$.ajax({
        url: "sendMessage",
        type:"POST",
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {text: text, username: username},
        success:function(data){
            $('#chat-window').append('<br><div style="text-align: right">'+text+'</div><br>');
            $('#text').val('');
            notTyping();
        },error:function(){ 
            alert("error!!!!");
        }
    });
		
        /*$.post('sendMessage', {text: text, username: username}, function()
        {
            $('#chat-window').append('<br><div style="text-align: right">'+text+'</div><br>');
            $('#text').val('');
            notTyping();
        });*/
    }
}

function isTyping()
{
	$.ajax({
        url: "isTyping",
        type:"POST",
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {username: username}
    });
    //$.post('isTyping', {username: username});
}

function notTyping()
{
	$.ajax({
        url: "notTyping",
        type:"POST",
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');

            if (token) {
                  return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {username: username}
    });
    //$.post('notTyping', {username: username});
}
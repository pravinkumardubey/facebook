$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
/*
* Open ChatBox Code
*/
$(".close-chat").on("click", function(){
    $(".conversation-box").removeClass("active");
    return false;
});
/*
* Chatting Code here
*/
function openChat(argument,id) {
    let html = '';
    $.ajax({
    	url:'chatting/'+id,
    	type:'GET',
    	success:function(response){
    		$('#friendName').html(response.friendData.friendName);
    		$('#friend_id').val(response.friendData.friendId);
    		$('.chat-user-info img').attr('src',APP_URL+'storage/postImages/'+response.friendData.friendPhoto);
    		$.each(response.data,function(key,val){
                html +=`<div class="chat-msg `+((val.status==1?'st2':''))+`">
							`+((val.file!=null?`<img src="`+APP_URL+'storage/postImages/'+val.file+`">`:''))+`
							`+((val.msg!=null?`<p>`+val.msg+`</p>`:''))+`
							<span>`+val.timeago+`</span>
						</div>`;
            });
            $(".chat-hist").html(html);
            $(".conversation-box").toggleClass("active");
            $('.conversation-box').removeClass("chatMinimise");
    	}
    });
} 
function showImage(event){
	$("#chat_message").hide();
	$('.typing-msg form textarea').css("margin-top","60px");
	$(".wrapDiv").show();
	$('.typing-msg form button').css("top","60px");
	$('#chatImage').attr('src',URL.createObjectURL(event.files[0]));
	$("textarea").focus();
}
$(".la-times-circle-o,.close-chat").on("click",function(){
	$("#chatForm")[0].reset();
	$("#chat_message").show();
	$('.typing-msg form textarea').css("margin-top","0px");
	$(".wrapDiv").hide();
	$('.typing-msg form button').css("top","0px");
	$("textarea").focus();
});
$("#chatForm").on("submit",function(e){
    e.preventDefault();
    let chatMessage = $('#chat_message').val();
	let file = $('#chat_file').val();
	if (chatMessage == "" && file == "") {
		$('#chat_message').focus();
	}
	else{
	$.ajax({
        url: APP_URL+'store',
        method:"POST",
        data: new FormData(this),
        dataType:'json',
        contentType: false,
        cache: false,
        processData: false,
        success:function (response) {
            console.log(response);
            $("#chatForm")[0].reset();
            $(".wrapDiv").hide();
			$("#chat_message").show();
			$('.typing-msg form textarea').css("margin-top","0px");
			$('.typing-msg form button').css("top","0px");
			$("textarea").focus();
        },
        error: function(errorData) {
         	//
        }
    });
    }
});


$('.minimise-chat').on("click",function(){
	$('.conversation-box').toggleClass("chatMinimise");
});







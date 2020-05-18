$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
/*Outsidr div click div become hide*/

$( "#postForm" ).validate({
  rules: {
    description: {
      	 required: true,
    },
  },
  submitHandler: function () {
        $.ajax({
        	url:APP_URL+'create-post',
        	type:'post',
        	data:new FormData($('#postForm')[0]),
	        contentType: false,
	        processData: false,
        	success:function(response){
				$('#postForm')[0].reset();
        		$('.la-times-circle-o').click();
                window.location.reload();
        	},
        	error: function (errorData) {
        		var as= errorData.responseJSON.errors;
        		$.each(as,function(key,val){
        			$('#error_'+key).html(val);
        		});
            }
        });
    }
});


function likePost(arg,id,status){
    $.ajax({
        url:APP_URL+'likePost/'+id+'/'+status,
        type:'GET',
        success:function(data){
            $('#'+id+'like').html(data.like);
            $('#'+id+'dislike').html(data.dislike);
            $(arg).css("color","blue");
        }
    });
}

setInterval(function(){
    let html = '';
    $.ajax({
        url:'getOnlineStatus',
        type:'GET',
        success:function(response){
            $.each(response,function(key,val){
                html +=`<div class="job" onclick="openChat(this,`+response[key].id+`)">
                <div class="leftContent">
                `+response[key].name+`
                </div>
                <div class="rightContent">
                 `+response[key].status+`
                </div>
                </div>`;
            });
            $("#activeStatus").html(html);
        }
    })
}, 5000);




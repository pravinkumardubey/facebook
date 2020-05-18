$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$( "#myform" ).validate({
  rules: {
	    gender: {
	      required: true
	    },
	    name: {
            required: true,
        },
        email: {
            required: true,
            email: true,
        },
        password: {
            required: true,
            minlength: 5,
        },
        dob: {
            required: true,
        },
  },
  submitHandler: function () {

        $.ajax({
        	url:APP_URL+'create',
        	type:'post',
        	data:$('#myform').serialize(),
        	success:function(response){
        		if (response==true) {
                    $('#myform')[0].reset();
                    window.location.href=APP_URL+"dashboard";
                }else{
                    //
                }
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

/*$(document).mouseup(function(e){
var con=$('#tab-3');
if (!con.is(e.target) && con.has(e.target).length == 0) {
	$('#myform')[0].reset();
	$("#myform").validate().resetForm();
}
});*/



/*Login Form*/
$( "#loginForm" ).validate({
  rules: {
	    username: {
	      required: true,
	      email: true,
	    },
	    passwd: {
            required: true,
            minlength:6,
        },
  },
  submitHandler: function () {

        $.ajax({
        	url:APP_URL+'login',
        	type:'post',
        	data:$('#loginForm').serialize(),
        	success:function(response){
        		if (response==true) {
                    $('#loginForm')[0].reset();
                    window.location.href=APP_URL+"dashboard";
                }else{
                    $('#error_passwd').html("Please check your login credentials");
                }
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
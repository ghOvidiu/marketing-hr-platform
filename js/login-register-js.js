$("#username, #password, #password2, #email, #submit-button").focus(function(){
	$(".header, #login").css("opacity", "1");
});

$("#username, #password, #password2, #email, #submit-button").focusout(function(){
	$(".header, #login").css("opacity", "0.9");
});
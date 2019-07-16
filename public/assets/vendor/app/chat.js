setInterval(lena_message, 3000);
lena_message();
var cantidad_mesaje=0;


var altura = $(document).height()*6000;

$('html, body').animate({
    scrollTop: altura 
 }, 2000);

//var altura = $(document).height();



 
     //win.animate({ scrollTop: win[0].scrollHeight}, 1000);

//alert(altura);

//$(window).scrollTop(altura)
 



//var div = document.getElementById('tudiv');
    //$win.scrollTop('999');
/*
$win.scroll(function () {

	alert($win.scrollTop());

});*/





function lena_message() {
	var idchat=$("#id_chat").val();
$.get("conversation/"+idchat+"",function(response,state){

	if(response.length!=cantidad_mesaje){

	$("#body_chat").empty();
	   cantidad_mesaje=response.length;
	  for(i=0;i<response.length;i++){
		if(response[i].tipo_mensaje==1){

			if(response[i].tipo==0){
				var message = '<div class="outgoing_msg">';
                message = message + '<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>';
                message = message + '<div class="received_msg">';
                message = message + '<div class="received_withd_msg">';
                message = message + ' <p>'+response[i].texto+'</p>';
                message = message + '<span class="time_date">'+response[i].fecha+' &nbsp;'+response[i].hora+'</span>';
                message = message + '</div></div></div>';
				$("#body_chat").append(message);	   
		    }else{

		    	var message = '<div class="outgoing_msg">';
		    	message = message +'<div class="sent_msg">';
		    	message = message + '<p>'+response[i].texto+'</p>';
		    	message = message + '<span class="time_date">'+response[i].fecha+' &nbsp;'+response[i].hora+'</span>';
		    	message = message +'</div></div>';
		    	$("#body_chat").append(message);
		    
		    }

		}else{

			if(response[i].tipo_mensaje==2){
				if(response[i].tipo==0){

					var message = '<div class="outgoing_msg">';
					message = message +'<div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>';
					message = message +'<div class="received_msg">';
					message = message +'<div class="received_withd_msg">';
					message = message +'<p> <audio src="http://mirrorapp.net/audio/'+response[i].texto+'" controls ></audio></p> ';
					message = message + '<span class="time_date">'+response[i].fecha+' &nbsp;'+response[i].hora+'</span>';
					message = message + '</div></div></div>';
					$("#body_chat").append(message);
				}else{

					var message = '<div class="outgoing_msg">';
					message = message +'<div class="sent_msg">';
					message = message +'<p> <audio src="http://mirrorapp.net/audio/'+response[i].texto+'" controls ></audio></p> ';
					message = message + '<span class="time_date">'+response[i].fecha+' &nbsp;'+response[i].hora+'</span>';
					message = message +'</div></div>';
					$("#body_chat").append(message);		

				}
			}

		}
    } 


    $('html, body').animate({
    scrollTop: altura 
 }, 2000);

    }       	
});

}


  
function Send(){

	var msg = $("#mensagem").val();
	
	if(!msg){

		var vanish = document.querySelector(".aviso");

			vanish.classList.remove("vanish");

			setTimeout(function(){

				vanish.classList.add("vanish");

			},3000);
	}else{
		sendPhp(msg);
	}

}

function sendPhp(msg){

	var type="add";
	
	$.ajax({
		type:"POST",
		data: {msg:msg, type:type},
		url: "php/saveMsg.php",
		success:function(data){
			
			document.getElementById('box-show-msg').innerHTML = location.reload();
		}


	});


};

function limpa(){

	var type ='clean';

	$.ajax({
		type:"POST",
		data:{type:type},
		url:"php/saveMsg.php",
		success:function(data){

			document.getElementById('box-show-msg').innerHTML = location.reload();
		}
	});
}
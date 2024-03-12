$(function(){
	//inserir
	$("#submit").click(function(){
		var msg = $("#messages").val();
			msg  = $.trim(msg);
		if(msg != ''){
			$.post('chat.php',
					{
					messages : msg,
					acao     : 'inserer'
					}, function(retorno){
					$("#painel") .prepend(retorno);
					$("#messages").val('');
				});
		}
	});
	
	//atualizar
	setInterval(function(){
		$.post('chat.php',
				{
				  acao : 'atualiser'
				}, function(retorno){
					$("#painel").html(retorno);
				});		
	}, 5000);
	
});
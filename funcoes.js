$(function(){

	// Requisicao AJAX
	var requisicao = function(){
		$.ajax({
			url: "contador.php"
		}).done(function(resultado){
			// Exibe o resultado no elemento com ID contador
			$("#contador").html(resultado);
		});
	};

	// Executa a requisicao com intervalo de 100ms
	setInterval(requisicao, 100);
});
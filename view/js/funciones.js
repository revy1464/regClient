
function flotante(tipo){
	if (tipo==1){
		$('#contenedor').show();
    	$('#flotante').animate({
      		marginTop: "-152px"
    	});
	}
	if (tipo==2){
    	$('#flotante').animate({
      	marginTop: "-756px"
    });
		setTimeout(function(){
		$('#contenedor').hide();
		},500)
	}

}

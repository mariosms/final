$(document).ready(function(){
    $("#dp08").click(function(evento){
    	// direccionar a mapa
    	window.location.href = "tiendas.php";
    });

    $("#dp12").click(function(evento){
    	// direccionar a mapa
    	$("html, body").animate({ scrollTop: 0 }, 0);
    	$("#dp14").show();
    });


 });
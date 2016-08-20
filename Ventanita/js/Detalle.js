$(document).ready(function(){
    $('.p').click(function(evento){
        var e = $(this).attr('id');
        $("html").css("overflow","auto");
        $("body").css("overflow","auto");       
        window.location.href = "detalle.php?e="+e;
    })

    $("#p60").click(function(evento){
    	$("html").css("overflow","auto");
        $("body").css("overflow","auto");    	
    	window.location.href = "productos.php";
    });

    $("#p51").click(function(evento){
        $("html").css("overflow","auto");
        $("body").css("overflow","auto");       
        window.location.href = "productos.php";
    });    

});
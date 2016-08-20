$(document).ready(function(){
    $("#dp04").val("00/00/0000");
    $("#dp06").click(function(evento){
       var now = new Date();
       var f0 = $("#dp04").val()
       f0 = f0.replace("/", ", ")
       var f1 = new Date(f0); 
       var f2 = new Date(now.getFullYear(), now.getMonth(), now.getDate());
       var f3 = f2.getYear() - f1.getYear();   
       if (f3 >= 18){
           $("#dp07").hide();
           $("#dp17").hide();
           $("html").css("overflow","auto");
           $("body").css("overflow","auto");
       }else{
           $("#dp04").val("00/00/0000");
       };
    });
    $("#p150").click(function(evento){
        $("#dp14").hide();
    });   
 });
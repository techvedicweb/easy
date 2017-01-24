$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="hardware"){
                $(".boxes").not(".hardware").hide();
                $(".hardware").show();
            }
			else if($(this).attr("value")=="abc"){
                $(".boxes").not(".abc").hide();
                $(".abc").show();
            }
            else if($(this).attr("value")=="access"){
                $(".boxes").not(".access").hide();
                $(".access").show();
            }
            else if($(this).attr("value")=="server"){
                $(".boxes").not(".server").hide();
                $(".server").show();
            }
            else{
                $(".boxes").hide();
            }
        });
    }).change();
});

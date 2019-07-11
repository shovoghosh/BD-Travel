$(document).ready(function(){

$("#desSearch").keypress(function(){
	

	$.ajax({
		url:"/searchPlacesAjax",
		method:"get",
		data:{
			letter:$('#desSearch').val()
		},
		success:function(res){
			//var name = jQuery.parseJSON(res);
			var name=[];
			var i=0;
			for(i=0;i<res.length;i++){
				name.push(res[i].name);
			}
			$( "#desSearch" ).autocomplete({
		      source: name
		    });
		}
	});
});

    $("#desSearch2").keypress(function(){


        $.ajax({
            url:"/searchPlacesAjax",
            method:"get",
            data:{
                letter:$('#desSearch').val()
            },
            success:function(res){
                //var name = jQuery.parseJSON(res);
                var name=[];
                var i=0;
                for(i=0;i<res.length;i++){
                    name.push(res[i].name);
                }
                $( "#desSearch2" ).autocomplete({
                    source: name
                });
            }
        });
    });


});
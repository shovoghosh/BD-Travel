$(document).ready(function(){

$("#usernameSearch").keypress(function(){
	//alert('asdsa');

	$.ajax({
		url:"/searchUserForImageAjax",
		method:"get",
		data:{
			letter:$('#usernameSearch').val()
		},
		success:function(res){
			//var name = jQuery.parseJSON(res);
			var name=[];
			var i=0;
			for(i=0;i<res.length;i++){
				name.push(res[i].username);
			}
			$( "#usernameSearch" ).autocomplete({
		      source: name
		    });
		}
	});
});
});


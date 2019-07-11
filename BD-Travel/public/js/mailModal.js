$(document).ready(function(){
	$(".forModal").click(function(){
		console.log(this.id);
		$.ajax({
			url:"/modalMessage",
			method:"get",
			data:{
				id:this.id
			},
			success:function(res){
				console.log(res);
				$("#modalFrom").html(res.email);
				$("#modalSubject").html(res.subject);
				$("#modalMessage").html(res.message);
				$(".repBtn").attr('id', res.id);
				$(".delBtn").attr('id', res.id);
				
			}
		});
	});

	$(".repBtn").click(function(){
		$.ajax({
			url:"/modalMessage",
			method:"get",
			data:{
				id:this.id
			},
			success:function(res){
				$("#modalrepTo").html(res.email);
				$("#modalrepSubject").html(res.subject);
				
			}
		});
	});

	$(".delBtn").click(function(){
		//alert(this.id);
		$.ajax({
			url:"/deleteMessage",
			method:"get",
			data:{
				id:this.id
			},
			success:function(res){
                alert(res);
				location.reload();

				
			}
		});
	});

	$("#sendBtn").click(function(){
		let date = new Date();
		var hour = date.getHours();
		var min = date.getMinutes();
		var timee = hour +':'+min;
		if($('#modalrepMessage').val()==''){
			alert('please write your message');
			return false;
		}
		$.ajax({
			url:"/insertMessageFromAdmin",
			method:"get",
			data:{

				mto:$('#modalrepTo').html(),
				message:$('#modalrepMessage').val(),
				subject:$('#modalrepSubject').html(),
				time:timee
			},
			success:function(res){
				alert(res);
			}
		});
	});

	$('#newemailForm').submit(function(){
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  			if(emailReg.test($('#newemailTo').val())){
  				return true;
  			}else{

  			 	alert('invalid email');
  				return false;
  			}
	});
});
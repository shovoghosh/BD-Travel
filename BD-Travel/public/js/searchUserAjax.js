$(document).ready(function(){

    $(".memberEdit").click(function(){


        $.ajax({
            url:"/searchUserAjax",
            method:"get",
            data:{
                id:this.id
            },
            success:function(res){
                console.log(res);
                $(".username").val(res.username);
                $(".email").val(res.email);
                $(".mobile").val(res.phone);
                $(".hidden").val(res.id);
            }
        });
    });

    $(document).on('submit','#editForm',function(){
        if($("#order_name").val()==="" || $("#order_email ").val()==="" || $("#order_mobile ").val()==="" )
        {
            alert('every field is required');
            return false;
        }else{
            if(parseInt($("#order_mobile").val())){

            }else{
                alert('invalid mobile no.');
                return false;
            }

        }
    });

    $('.delBtn').click(function () {
        $('.delMemberHidden').val(this.id);
    });

});
$(document).ready(function(){

    $("#username").keyup(function(){
        //alert($('#username').val());
        var a = $('#username').val();


        if(a==="" || a.length <5)
        {
            document.getElementById('userNameMsg').innerHTML= "minimum 5 characters";
        }else{
            $.ajax({
                url:"/searchUserRegAjax",
                method:"get",
                data:{
                    letter:$('#username').val()
                },
                success:function(res){

                    if(res==""){
                        document.getElementById("userNameMsg").innerHTML = '&#10003';
                    }else{
                        document.getElementById("userNameMsg").innerHTML = 'Username has taken. Please try another one';
                    }


                }
            });
        }


    });




});
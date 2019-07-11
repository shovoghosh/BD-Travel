function ValidateEmail()
{
    var a = document.getElementById('order_email').value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{3})+$/;
    if(a.match(mailformat))
    {

        document.getElementById('order_email_msg').innerHTML= " &#10003";
    }
    else
        document.getElementById('order_email_msg').innerHTML= "invalid";
}

function userNameValidation()
{
    var a = document.getElementById('order_name').value;


    if(a==="" || a.length <5)
    {
        document.getElementById('order_name_msg').innerHTML= "minimum 5 characters";
    }
    else {
        document.getElementById('order_name_msg').innerHTML= "&#10003";
    }

}
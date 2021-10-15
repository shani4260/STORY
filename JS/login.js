function login(){
    var request=new XMLHttpRequest();

    request.onreadystatechange=function(){
       if (request.readyState==4 & request.status==200)
        {
            if( request.responseText == 0 ) {
                window.location.href = "../index.php";
            } else {
                document.getElementById("error").innerHTML = request.responseText;
            }
        }

    }
    request.open("POST",'../Includes/login_ajax.php',true);
    request.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    request.send("user=" + document.getElementById("user").value + "&password=" + document.getElementById("password").value);
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1812828</title>
<script>
    function showHint(str){
        if(str.length==0){
            document.getElementById("txtHint").innerHTML="";
            return;
        }else{
            var xmlhttp=new XMLHttpRequest();
            xmlhttp.onreadystatechange=function(){
                if(this.readyState==4 && this.status==200){
                    document.getElementById("txtHint").innerHTML=this.responseText;
                }
            };
            xmlhttp.open("GET","gethint.php?q="+str, true);
            xmlhttp.send();
        }
    }
</script>

</head>
<body>
    <p><b>Start typing a name in the input field below:</b></p>
    <form action="">
        <label for="fname">First name:</label>
        <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)" >
    </form>
    <p> Sugggestions: <span id="txtHint"></span></p>

</body>
</html>
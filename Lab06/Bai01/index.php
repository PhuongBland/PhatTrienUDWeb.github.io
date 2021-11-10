<h1>Ajax example</h1>

    <button onclick="callAjax();">Call AJAX</button>
    <div id="demo"></div>
    <script>
        function callAjax(){
            var ajax=new XMLHttpRequest();
            ajax.open("GET","ajax.php");
            ajax.send();
            ajax.onload=function(){
                document.getElementById("demo").innerHTML=this.responseText;
            }
        }
    </script>
<?php
    if(isset($_POST['name'])|| isset($_POST['age'])){
        if(preg_match("/[^A-Za-z'-]/",$_POST['name'])){
            die("invalid nam and name should be alpha");
        }
        echo"Welcome ".$_POST['name']. "<br/>";
        echo "You are ". $_POST['age']. " years old.";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="<?php $_POST_SELF?>"method="POST">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age"/>
        <input type="submit"/>
</form>
</body>
</html>
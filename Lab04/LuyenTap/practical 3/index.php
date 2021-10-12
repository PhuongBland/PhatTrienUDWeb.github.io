<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
    <?php
        include 'interface.php';
        $cat = new Cat();
        $dog=new Dog();
        $mouse=new Mouse();
        $animals=array($cat, $dog, $mouse);

    foreach($animals as $animal){
        $animal->makeSound();
    }
    ?>
</body>
</html>
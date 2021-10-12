<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
</head>
<body>
    <?php
    include 'loger.php';
    $logger=new Filelogger('./log.txt', 'w');
    $logger->log('PHP interface is awesome');

    $loggers = [
        new Filelogger('./log.txt'),
        new DatabaseLogger()
    ];
    foreach($loggers as $logger){
        $logger->log('Log message');
    }
    ?>
</body>
</html>
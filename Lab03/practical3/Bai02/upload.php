<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>
<body>
    <?php
    $MAX_FILE_SIZE=1000000;
    if($_SERVER['REQUEST_METHOD']!="POST"){
        echo 'Upload not successfull (not POST)';
        exit(-1);
    }
   if ( !isset($_FILES["file_upload"]["error"]) || $_FILES["file_upload"]["error"] != 0 ) {
    echo 'Upload not sucessfull (error upload processing)';
    exit(-1);
   }
    if($_FILES["file_upload"]["size"]>$MAX_FILE_SIZE){
        echo "Upload not sucessfull (file size too large". $_FILES['file_upload']['size'].")";
        exec(-1);
    }
        $temp = preg_split('/[\/\\\\]+/', $_FILES["file_upload"]["name"]);    $filename=$temp[count($temp)-1];
        $filename = $temp[count($temp)-1];    
        if (!preg_match('/\.(jpg|bmp|gif|png)$/i', $filename)){
                echo `Upload not sucessfull <br>`;
                echo `Please, upload image file <br>`;
                exit(-1);
            }
            $upload_dir="upload";
            if(!file_exists($upload_dir))
            mkdir("upload");
        $upload_file = $upload_dir."/".$filename;
        if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $upload_file) ) {
                echo "Uploaded: ".$_FILES["file_upload"]["name"]."<br />";
                echo "Type: ".$_FILES["file_upload"]["type"]."<br />";
                echo "Size: ".($_FILES["file_upload"]["size"]/1024)." Kb<br />";
        } 
    else{
        echo  `Upload not sucessfull (error on server)`;
    }
    ?>
</body>
</html>
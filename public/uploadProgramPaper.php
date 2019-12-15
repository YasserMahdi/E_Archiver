<?php
$connect = mysqli_connect("localhost", "root", "12312345", "station");
if(isset($_POST["insert"]))
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $name = $_POST["name"];
    $id = $_POST["id"];
    $query = "INSERT INTO programimgs (name,paper,program_id) VALUES ('$name','$file','$id')";
    if(mysqli_query($connect, $query))
    {
        header("Location: http://127.0.0.1:8000/uploadunitpaper/?id=$id");
    }
    else{
        echo '<script>alert("Image Dose not Inserted into Database")</script>';
    }
}

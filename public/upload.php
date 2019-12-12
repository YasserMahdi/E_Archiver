<?php
$connect = mysqli_connect("localhost", "root", "12312345", "station");
if(isset($_POST["insert"]))
{
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $name = $_POST["name"];
    $id = $_POST["id"];
    $query = "INSERT INTO empimgs (name,doc,emp_id) VALUES ('GRA1','$file',1)";
    if(mysqli_query($connect, $query))
    {
        echo '<script>alert("Image Inserted into Database")</script>';
    }
    else{
        echo '<script>alert("Image Dose not Inserted into Database")</script>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="QqGtXRvWCGqvu2BJQVZbhRJRrClLMwOpzjTuSLVD">

    <title>Laravel</title>

    <!-- Scripts -->
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=3m8izLiKPwRYDdrGZmTymu3YkWb9n3ror8E5NkONTpA8MJP8FBNk2fqPO1SCX8eN" charset="UTF-8"></script><script src="http://127.0.0.1:8000/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">

    <style>




    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="http://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

</head>
<body>
 <div id="app">

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="http://127.0.0.1:8000">
            الرئيسية
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="http://127.0.0.1:8000/logout"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="QqGtXRvWCGqvu2BJQVZbhRJRrClLMwOpzjTuSLVD">                                    </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>



 </div>









<div class="container" style="width:500px;">

    <br />
    <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Name" id="name" value="name" name="name">
                <br/>
                <br/>
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Employeer ID" id="id" value="id" name="id">
                <br/><br/>
            </div>
        </div>
        <input type="file" name="image" id="image" />
        <br /><br />

        <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
    </form>

</div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#insert').click(function(){
            var image_name = $('#image').val();
            if(image_name == '')
            {
                alert("Please Select Image");
                return false;
            }
            else
            {
                var extension = $('#image').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                {
                    alert('Invalid Image File');
                    $('#image').val('');
                    return false;
                }
            }
        });
    });
</script>

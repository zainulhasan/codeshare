<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Codeshare</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="js/respond.js">

    <style>
        #current_user{

            background-color: transparent;
            border-color: transparent;
            text-align: center;
            width:200px;
            height: 35px;
            font-size:17px;
        }

        #current_user:hover{

            color:#fff;

        }
        #current_user:hover {
            cursor: pointer;

        }

        #sub{

            margin-top: 10px;
            margin-right: 30px;
            height: 35px;
            width: 200px;
            border-radius: 8px;
            padding:10px;
        }
    </style>

</head>
<body>

<!-- header -->
<header>
    <div class="header-main">

        <div class="logo logo-home">
             <a href="index.php"><img src="img/logo.png" alt="logo"></a>
        </div>


        <div class="nav-main">

            <input type="text" id="sub" placeholder="Enter Subject Here.">
            <button class="btn btn-default" id="save-btn" style="background-color: #EC3360;border-color: #ea1c4e;text-align: center;width:130px;height: 35px;"
            data-toggle="modal" data-target="#myModal">Save your Code</button>

        </div>

    </div>
</header>



</div>
<div id="editor" class="editor">

</div>

<!-- Modal -->
<div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enter Page Title</h4>
      </div>
      <div class="modal-body">

       <input type="text" id="title">



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" id="update">Save</button>
      </div>
    </div>

  </div>
</div>

<!-- JavaScript-->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script>



    $("#save-btn").click(function(){

        editor.setValue("hello Pakistan")
    });




</script>
</body>
</html>
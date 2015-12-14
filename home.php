<?php
    include('function.php');
    include('config.php');
     $name="";
    $btn_value="Login";
    session_start();
    
if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $btn_value="Logout";
        $name=get_name_by_email($email);

}else{
    
    header('Location:login.php');
}



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
            <button class="btn btn-default" id="current_user" disabled><?php echo $name ;?></button>
            <button class="btn btn-default" id="save-btn" style="background-color: #EC3360;border-color: #ea1c4e;text-align: center;width:130px;height: 35px;">Save your Code</button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Settings</button>
            <button class="btn btn-default" id="logout_btn" onclick=redirect();><?php echo $btn_value;?></button>
        </div>

    </div>
</header>



</div>
<pre id="editor" class="editor">function foo(items) {
    var i;
    for (i = 0; i &lt; items.length; i++) {
        alert("value " + items[i]);
    }
}</pre>

<!-- Modal -->
<div id="myModal" class="modal fade " role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content setting">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Settings</h4>
      </div>
      <div class="modal-body">

        <!-- Syntax -->
        <label for="syntax">Syntax:</label>
        <select name="syntax" id="syntax">
            <option>javascript</option>
            <option>html</option>
            <option>css</option>
            <option>php</option>
            <option>json</option>

        </select>
        <br>
        <!-- Theme -->
        <label for="theme">Theme: </label>
        <select name="theme" id="theme">
            <option>twilight</option>
            <option>monokai</option>
            <option>dreamweaver</option>
            <option>github</option>
            <option>chrome</option>
            <option>eclipse</option>
        </select>
        <br>

        <!-- FontSize -->
        <label for="fontSize">Font Size: </label>
       <select name="fontSize" id="fontSize">

            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>18</option>

        </select>
        <br>
        <!-- Tab Size -->
        <label for="tabsize">Tab Size: </label>
        <select name="tabsize" id="tabsize">
            <option>1</option>
            <option>2</option>
            <option>4</option>
            <option>6</option>
            <option>8</option>
            <option>10</option>
        </select>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" id="update">Update</button>
      </div>
    </div>

  </div>
</div>

<!-- JavaScript-->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="src/src-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="js/script.js"></script>
<script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/chrome");
    editor.session.setMode("ace/mode/javascript");
    editor.setOption("highlightActiveLine", false);


    //document.getElementById('save-btn').onclick=function(){

      //  alert(editor.getSession().getValue());
    //}
    
    $("#save-btn").click(function(){
        
        var code=editor.getSession().getValue();
        $.post(
            
            "hello.php",
            {name:code},
            function(resp){
                alert(resp);
            }
        );
    });
    
    
    
    document.getElementById('update').onclick=function(){
        // Theme setting
        var T="ace/theme/";
        var Tname=document.getElementById('theme').value;
        T=T+Tname;
        editor.setTheme(T);

        // Tab Setting

        var tabSize=document.getElementById('tabsize').value;
        var contant=editor.getSession().setTabSize(tabSize);
        alert(contant);
       




        // Font Size
        var font=document.getElementById('fontSize').value;
        document.getElementById('editor').style.fontSize=font+'px';


        // Mode Setting
        // editor.session.setMode("ace/mode/javascript");
        var Mode=document.getElementById('syntax').value;
        var modeName="ace/mode/";
        modeName=modeName+Mode;
        editor.session.setMode(modeName);

    }

    function redirect(){

        <?php echo "location.href='logout.php'";?>
    }

</script>
</body>
</html>
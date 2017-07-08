<?php

    session_start();

    include("connection.php");

    $query = "SELECT notebook FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_array($result);

    $notebook = $row['notebook'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Secret Notebook</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="http://www.justinaguilar.com/animations/css/animations.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .navbar-brand {
            font-size: 1.8em;
        }

        #topContainer {
            background-image: url("lena-bell.jpg");
            width: 100%;
            background-size: 100% 100%;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        #topRow {
            margin-top: 80px;
            text-align: center;
        }

  

    </style>

</head>

<body data-spy="scroll" data-target=".navbar-collapse">

    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header pull-left">

                <a href="" class="navbar-brand">Secret Notebook</a>
            </div>
            <ul class="navbar-nav nav">
                    <li class="nav-item active"> <a href="about.php">About</a></li>
                </ul>

            <div class="pull-right">
                <ul class="navbar-nav nav">
                    <li><a href="index.php?logout=1">Log Out</a></li>



                </ul>
            </div>
        </div>
    </div>

    <div class="container contentContainer" id="topContainer">
        <div class="row" id="home">
            <div class="col-md-6 col-md-offset-3" id="topRow">
             <textarea class="form-control" style="background-color: #e4ccaa"><?php echo $notebook; ?></textarea>


            </div>
        </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


    <script>
        $(".contentContainer").css("min-height", $(window).height());
        $("textarea").css("height", $(window).height()-200);
        $("textarea").keyup(function(){
            $.post("updatenotebook.php", {notebook: $("textarea").val()} );

        })



    </script>
</body>

</html>

<?php
        session_start();
        include("connection.php");

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
            background-image: url("pen.jpg");
            width: 100%;
            background-size: 100% 100%;
            background-attachment: fixed;

        }

        #topRow {
            margin-top: 300px;
            text-align: center;
            color: #2B2B2B;
            text-rendering: optimizeLegibility;
            text-shadow: 0 1px 0 white;

        }



        #footer {

            position: fixed;
            bottom: 0;
            height: 3em;
            margin-top: -3em;
            color:          grey;
            text-shadow:    none;
            padding: 0.5em;



        }


    </style>

</head>

<body data-spy="scroll" data-target=".navbar-collapse">

    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <a href="index.php" class="navbar-brand">Secret Notebook</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>




            <div class="collapse navbar-collapse">
              <ul class="navbar-nav nav">
                    <li class="nav-item active"> <a href="about.php">About</a></li>
                </ul>

        </div>

    </div>

    <div class="container contentContainer"  id="topContainer">
    <div class ="row">
    <div class="col-md-6 col-md-offset-3" id="topRow">
            <h1>This is a page created by Bojar Laci-Thomassen</h1>
            <h3>Here you are allowed to write your own Secret Notebook which can be accessed wherever you go. All you have to do is type in the brown field when you're logged in and the notes will be saved automatically.</h3>


        </div>


    </div>
</div>

    <div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container">
            <div class="navbar-header">
      <div id="footer">
                <p>Contact info: bojar.laci@hotmail.com   Phone: 40608390</p>

    </div>














    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>


    <script>
        $(".contentContainer").css("min-height", $(window).height());

        if (sessionStorage.length == 0) {
            console.log("no session here");
        }else{
            console.log("vi har en session");
        }


    </script>
</body>

</html>

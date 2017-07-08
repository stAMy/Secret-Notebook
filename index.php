<?php include("login.php"); ?>

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
            background-image: url("background.jpg");
            width: 100%;
            background-size: 100% 100%;
            background-attachment: fixed;
            background-repeat: no-repeat;
            text-shadow: white 0px 0px 10px;
        }

        #topRow {
            margin-top: 100px;
            text-align: center;
        }

        .bold {
            font-weight: bold;
        }

        .marginTop {
            margin-top: 20px;
        }



  }



    </style>

</head>

<body data-spy="scroll" data-target=".navbar-collapse">

    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <a href="" class="navbar-brand">Secret Notebook</a>
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
                <form class="navbar-form navbar-right" method="post" >
                    <div class="form-group">
                        <input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
                    </div>
                    <input type="submit" name="submit" class="btn btn-success" value="Log In">
                </form>
            </div>
        </div>
    </div>

    <div class="container contentContainer" id="topContainer">
        <div class="row" id="home">
            <div class="col-md-6 col-md-offset-3" id="topRow">
                <h1 class="marginTop">Secret Notebook!</h1>
                <p class="lead">Access your own Secret Notebook anytime, everywhere you go!</p>


      <?php
          if($error){

            echo '<div class ="alert alert-danger">'.addslashes($error).'</div>';
          }

          if($message){

            echo '<div class ="alert alert-success">'.addslashes($message).'</div>';
          }

            ?>


                <p class="bold marginTop">Interested? Sign Up Below!</p>

                <form class="marginTop" method="post">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" required class="form-control" placeholder="Your Email" name="email" value="<? echo addslashes($_POST['email']); ?>" />
                    </div>

                     <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" required class="form-control" placeholder="password" name="password" value="<? echo addslashes($_POST['password']); ?>" />
                    </div>

                    <input type="submit" name="submit" value="Sign Up"  class="btn btn-success btn-lg marginTop" />
                </form>
            </div>



        </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>


    <script>
        $(".contentContainer").css("min-height", $(window).height());



        $("#noRefresh").submit(function(){

            return false;

        });

    </script>
</body>

</html>

<?php

    session_start();

    include("connection.php");

    $query="UPDATE users SET notebook='".mysqli_real_escape_string($link, $_POST['notebook'])."'WHERE id='".$_SESSION['id']."' LIMIT 1";

    mysqli_query($link, $query);


?>

<form method="post">
<input name="notebook"/>
<input type = "submit" />

</form>
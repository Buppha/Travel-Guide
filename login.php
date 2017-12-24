<!DOCTYPE html>
<html>
<title>Travel Guide</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php
    $reg = mysqli_connect ('localhost','root','','travel');
    mysqli_set_charset($reg, "UTF8");

    $name = $_POST['uname'];
    $pass = $_POST['pas'];

    $keb = "SELECT * FROM login WHERE username = '".$name."' and password = '".$pass."'";
    $sql = mysqli_query($reg,$keb);// or trigger_error("Query Failed! SQL: $sql - Error: ".mysqli_error(), E_USER_ERROR);;
    $check=mysqli_num_rows($sql);
    if($check){
        session_start();
        $_SESSION["user"]=$name;
        echo '<h1>Signin Success :)</h1>';
        echo '
        <!DOCTYPE html>
        <html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <body>
                <form action="IndexTravel.php">
                <input type="submit" value="Go to next page." />
        </form>
            </body>
        </html>

        ';
       
    }
    else
    {
        echo '<h1>Signin faile, You do not memmber.Please Sign up.</h1>';//. mysqli_error($reg);
        echo '
        <!DOCTYPE html>
        <html>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <body>
                <form action="LoginTravel.html">
                <input type="submit" value="Go to Sign up" />
        </form>
            </body>
        </html>

        ';
    }
?>

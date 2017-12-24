<!DOCTYPE html>
<html>
<title>Travel Guide</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php
session_start();
session_unset();
echo '<h1>signout success :)</h1><br /> ';
echo 'Thank you to came in our page.';

?>
<hr>
<form action="LoginTravel.html">
    <input type="submit" value="Okay" />
</form>
</body>
</html>

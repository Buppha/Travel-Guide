<?php
if(isset($_SESSION["user"])){
    echo '<a href="logout.php" class="w3-bar-item w3-button">SIGN OUT</a>';
}
else{
    echo '<a href="LoginTravel.html" class="w3-bar-item w3-button">SIGN IN</a>';
}
?>
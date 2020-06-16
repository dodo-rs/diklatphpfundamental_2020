<?php
// start the session
session_start();
?>
<!doctype html>
<html>
<body>

<?php
// Set session variables that were set on previous page
echo "Favorite colour is ".$_SESSION["favcolour"].".<br>";
echo "Favorite animal is ".$_SESSION["favanimal"].".";
?>

</body>
<html>
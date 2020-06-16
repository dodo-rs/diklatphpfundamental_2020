<?php
// start the session
session_start();
?>
<!doctype html>
<html>
<body>

<?php
// Set session variables
$_SESSION["favcolour"] = "green";
$_SESSION["favanimal"] = "cat";

echo "Session variable are set.";


?>

</body>
<html>
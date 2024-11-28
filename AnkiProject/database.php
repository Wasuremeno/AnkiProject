
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anki</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="favicon.png">
</head>
<body>
</body>

<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "Anki";
$conn = "";



try{
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

}
catch(mysqli_sql_exeption){
    echo "Could not connect";
}
if($conn){
    // echo "You're connected!";
}
?>


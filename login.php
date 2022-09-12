<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>
    <?php  

$username = $_POST["username"]; 
$password = $_POST["password"];


if($username == "blah" && $password == "whah" ){
    echo "<h1><Welcome/h1><br><h2>Login success</h2>";
}

else{
    echo "<h2>Login Failed</h2>";
}

?>

<a href="login.html">Back to site</a>

</body>
</html>
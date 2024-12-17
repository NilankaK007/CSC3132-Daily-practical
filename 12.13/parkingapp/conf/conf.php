<?php
define('SERVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','ica02');

try {
    $connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

if (!$connect) {
    die("Connection failed");
}
else{
    //echo "Connected Succesfully";
}
echo "<br>";
} catch (Exception $e) {
    die($e ->getMessage());
}
?>
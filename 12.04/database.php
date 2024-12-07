<?php
define('SEVERNAME','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DBNAME','students');


try{
    //connect with database
    $connect=mysqli_connect(SEVERNAME,USERNAME,PASSWORD,DBNAME);
    if(!$connect){
        die("connection failed".mysqli_connect_error());
    }else{
        //echo "connected successfully<br>";
    }
}
catch(Exception $e){
    die($e->getmessage());
}
//echo "abc<br>";

?>
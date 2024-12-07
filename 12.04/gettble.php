<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="GET">
        <table>
            <tr>
                <td align="right">Name:</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td > </td>
                <td > <input type="submit" value="Search"/></td>
                    
            </tr>
        </table>
    </form>
    <?php
        require_once 'database.php';
        require_once 'myfunc.php';

        //serach form
        echo $_SERVER['PHP_SELF'];
        //print_table("students",$connect,["id","name","age","course"]);


        //search_student('Nilanka',$connect);
        //search_student('thisara',$connect);

    ?>
    <?php
        if(isset($_GET['name']) && $_GET['name']!=''){
            search_student($_GET['name'],$connect);
        }
        print_table("students",$connect,['id','name','age','course']);
    ?>

    
    
</body>
</html>

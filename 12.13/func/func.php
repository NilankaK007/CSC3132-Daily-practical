<?php

function divColor($result){
        while ($row=mysqli_fetch_assoc($result)) {
            foreach ($row as $key => $value) {
                if ($value=='EMPTY') {
                    echo "<style>
                    .parking-container > div{
                        background-color: #D8000C;
                    }
                </style> ";
                    break;}
                else{
                    echo "<style>
                    .parking-container > div{
                        background-color: #f1f1f1;
                    }
                </style> ";}
            }
        }

}

function new1($row){
    foreach ($row as $key => $value) {
        if ($key=='vehicle_no' && $value=='EMPTY') {
            echo "style='background-color: #D8000C;'";}
        else
            echo "style='background-color: #f1f1f1'";
    }
}

function showDetails($tableName,$connect){
    try{
    
        $sql = "SELECT * FROM $tableName";
    
        $result = mysqli_query($connect,$sql);
    
        if (mysqli_num_rows($result)>0) {

            while($row = mysqli_fetch_assoc($result)){
                if(in_array('EMPTY',$row)){
                    $background = '#f1f1f1';
                }else{
                    $background = '#D8000C';
                }
                echo "<div style=background-color:$background>";
                foreach ($row as $key => $value) {
                    if ($key!='id') {
                        echo "$value <br>";
                    }
                } 
                echo "</div>";  
            }
    
            }
        else{
            echo "No results";
        }
        }
    catch(Exception $e){
        die($e->getMessage());
    }
    }

function GetTableData($query,$connection){
    $result = mysqli_query($connection,$query);
    $data = array();
    if (mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
    return $data;
}

function RequiredField($value,$msg="the field can't be empty")
{
    if (empty($_POST[$value])) {
        echo $msg;
        return false;
    } else {
        return true;
    }

}

?>

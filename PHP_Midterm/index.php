<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
       $username = "root";
       $password = "";
       $localhost = "localhost";
       $database = "mid_term";
       $connect = mysqli_connect($localhost, $username, $password, $database);
       $fetch_query = "SELECT * FROM mid_table";
       $result = mysqli_query( $fetch_query);//initialize result
       
    
    if($bmi>25){
        
        echo $row['name']." has a bmi of ".$bmi." and is overweight";
    }else if($bmi>18.5 && $bmi<24.9){
        echo $row['name']." has a bmi of ".$bmi." and is healthy";
    }else if($bmi<18.5){
        echo $row['name']." has a bmi of ".$bmi." and is underweight";
    }
    
    
 }    
}
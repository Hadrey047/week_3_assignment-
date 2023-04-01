<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "header.php";
    ?>

    <P>Welcome!</P>


    <?php
     function multiply ($num1, $num2, $num3 = 5){
          $answer = $num1 * $num2 * $num3;
         return $answer;
       }

       echo multiply (4,7);




       $insert_data = mysqli_query($db_connect, 
 "Insert into result_new(First_Number,Second_Number,Third_Number,Result) VALUES('4','7','5','140')");

 if ($insert_data) {
    echo "Data saved succefully";
 }
    ?>

    

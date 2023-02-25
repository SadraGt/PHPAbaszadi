<?php
// //  Constant

// // define('AppName', 'Foxblog');
// $Test = 'Name';
// if(true){
//     // define('AppName', 'Foxblog');
//     define('App' . $Test, 'Foxblog');
//     // const AppVersion = 'v1.0';❌
// }
// const AppVersion = 'v1.0';

// echo AppName, '<br>', AppVersion;

// $Name = 'Sadra';
// $$Name = 'is good!';

// echo "Hallo $Name. {$Name} mode {$$Name}. <br>";    //Hallo Sadra. Sadra mode is good!.
// echo "Hallo $Name. {$Name} mode " . $Sadra;         //Hallo Sadra. Sadra mode is good!



//----------------------------------------------
// Scaler --> boolean , integer , float , string

$Int = (int) '10';
$Bool = false;
$Str = "sadra";
$Float = 1.55;

// var_dump($Int);     //int(10)     
// echo "<br>";
// var_dump($Bool);    //bool(true)
// echo "<br>";
// var_dump($Str);     //string(5) "sadra"
// echo "<br>". $Str[2] . "<br>";
// var_dump($Float);   //float(1.55)
// echo "<br>";

//----------------------------------------------
//Compound --> Array , Object , Callabel , Iterable
//Special --> Resources , NULL

// $Variable = null;
// $Variable = 10;
// unset($Variable)

//------------------------------
// Array

$Name = ['Sadra', 'Mariam', 2, 5];
#print_r($Name);     //Array ( [0] => Sadra [1] => Mariam [2] => 2 [3] => 5 )
#echo $Name[1];  //Mariam 

//Array Dictionary

$Stu = [ "Sadra" => 18, 'Mariam' => 19, 20 => 20 ];
#print_r($Stu);      //Array ( [Sadra] => 18 [Mariam] => 19 [20] => 20 )
##echo $Stu[1];  ❌
#echo $Stu['Sadra'];     // 18
#echo $Stu[20];     // 20

?>

<html>
    <head>

    </head>

    <body>
        <pre>
            <?php 
                echo '<br>';
                // print_r($Name);
                print_r($Stu);
            ?>
        </pre>
    </body>
</html>
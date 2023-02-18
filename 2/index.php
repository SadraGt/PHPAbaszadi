<?php

// echo print "Hello World ";      #Hello World 1  

// echo "Hello\" \\ ";
// print("donya "); 

// echo "Welcome " , "to ", "this web page ", print("Hallo")

#-------------------------------------------

// $A = 10;
// $B = $A;
// $C = &$A;       #Reference Assignment

// $A = 123;

// echo "A: " ,$A," B: ";      #A: 123
// print $B;                   #B: 10
// echo " C: " , $C;           #C: 123

#-------------------------------------------

// $Name = "Sadra";
// $Lastname = "Gt";
// $Age  = 19;

// #print ('Hello your name is : $Name   and your age is : $Age  /  ');     # Hello your name is : $Name and your age is : $Age
// #print ("Hello your name is : $Name   and your age is : $Age");          # Hello your name is : Sadra and your age is : 19
// print ("Hello your name is : $Name   and your age is : $Age");          # Hello your name is : Sadra and your age is : 19  -- this is better

// print 'your name is :' . $Name . ' your lastname is :' . $Lastname . ' your age is : ' . $Age;      # your name is :Sadra your lastname is :Gt your age is : 19

// $All = 'your name is :' . $Name . ' your lastname is :' . $Lastname . ' your age is : ' . $Age;

// print($All)     # your name is :Sadra your lastname is :Gt your age is : 19

#-------------------------------------------






?>

<?php

$Title = 'Sadra GT'

?>
<html>

    <head>
        <title>
            <?php echo $Title; ?>
        </title>    
    </head>

    <body>
        <h1>
            <!-- <?php echo "this is a header" ?> -->
            <!-- <?= "this is a header" ?> -->
            <?php echo 'this is my first website'; ?>
        </h1>
        <h2>
            <?php echo 'this is a smaller title'; ?>
        </h2>
    </body>

</html>
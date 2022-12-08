<?php

    // 1. Function With No Return \\

    // function printText(){
    //     print "This is php language" ;
    // }
    // printText();

    // function printMessage(){
    //     echo "This is a function with no return type <br/>";
    // }

    // printMessage(); // Call The Function


     // 2. Funtion With Arguments \\
     
    //  function connectName($firstName , $lastName){
    //     print  $firstName.' '.$lastName ;
    //  }

    //  connectName("Md. Khairuzzaman","Hridoy");

    // function connectCity($capital,$division){
    //     echo "$capital to $division <br/>";
    // }

    // connectCity("Dhaka","Khulna"); // Call the function


    //3. Function With Default Argument Value \\

    // function fullName($myName="Binoy Rana"){
    //     echo "My name is : $myName";
    // }

    // fullName(); // Call The Function


    //4. Function With Return Value \\ 

    // function fullName($firstName , $lastName){
    //     return "$firstName  $lastName <br/>";
    // };

    // print(fullName("MK","Hridoy"))


    // 5. Function With Default Argument Value \\

    // function fullName($hisName="Imtiaz"){
    //     echo " $hisName ";
    // } 

    // fullName()


    // 6. Function With Returning Vale \\

    // function fullName($firstName , $lastName){
    //     echo $firstName.' '.$lastName;
    // }
    // fullName('Mk','Hridoy');

    // function launchName($firstName , $lastName){
    //     print $firstName.' '.$lastName;
    // };
    // launchName("MV","Hridoy")

    
     //7. Return Type Declaration \\

    //  function addNumber (float $x= 0 , float $y = 0)
    //  {
    //     return  $x + $y;
    //  }
    //  print addNumber(12,17.7);

    // function minusNumber (int $m , int $n){
    //     return $m-$n;
    // }

    // print minusNumber(18,11);


    // 8. Function With Reference Argument \\

    // function fiveCount(&$addFive){
    //     $addFive +=5;
    // }
    // $countNumber = 26;
    // fiveCount($countNumber);
    // print($countNumber); //31


    // FUNCTION  CALCULATOR \\

    function calculator($method="sum",int $m,int $n){
        if($method == "sum")
        return $m+$n;
        elseif($method== "sub")
        return $m-$n;
        elseif($method== "mul")
        return $m*$n;
        elseif ($method == "div")
        return $m/$n;
    };

    print calculator("sub",30,11); //41

?>
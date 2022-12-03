<?php 
// if..else

// $age =21 ;
// if($age >= 18 )
// echo "You are an adult";
// else 
// echo "You are not adult"; 

// $color = "blue";
// if($color == "blue")
// echo "The color is  blue";
// else
// echo "The color is not blue " ;

//  if..elseif..else 

/*
$color = "red";
if($color == "green")
print "The color is not red. It is green" ;
elseif($color=="blue")
print "The color is not red. It is blue";
elseif($color == "aqua")
print "The color is is not red . It is aqua" ;
elseif($color == "yellow")
print "This is red color";
else 
print "Color is not found"; */

// Switch Case 

/*
$color = "black" ;

switch($color){
    case "blue":
        echo " This is not black . This is blue";
        break ;
    case "green":
        echo "This is not black . This is green";
        break;
    case "pink":
        echo " This is black color . ";
        break;
    default:
        print "404 !  Color is not found!!";
} */

// $capital = "Dhaka";

// switch($capital){
//     case "Khulna":
//         echo "Khulna is not capital city .";
//         break;
//     case "Barisal":
//         echo "Barisal is not capital city . ";
//         break;
//     case "Rangpur":
//         echo "Dhaka is our capital city";
//         break;
//     default:
//         echo "Capital not found!";

// }

/* PHP LOOPS */ 

// While Loops

// $t_price = 0; \\

// while($t_price <=100){
//     echo "The ticket price is: $t_price <br/> ";
//     $t_price++;
// }

// Do While Loop \\

// do{
//     echo" Ticket price : $t_price  <br/>";
//     $t_price++;
// }while($t_price<100 )


// For Loop \\ 

// for($t_price=0; $t_price <=50; $t_price++){
//     echo "The amount of ticktet : $t_price <br/> ";
// }

// For Each Loop ( Key : Value)

// $jhuri = ["Komla","Amloki","Pepe","Mango","Grapes"];

// foreach($jhuri as $value){
//     echo "$value <br/> ";
// };

$persons = array(
    "Imtu"=> 15,
    "Isht"=> 11,
    "Hrid"=>22
);

foreach ($persons as $key => $value){
    echo "Name : $key & Age: $value <br/>";
}


?>
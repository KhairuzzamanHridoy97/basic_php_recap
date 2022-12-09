<?php 
/*
The PHP superglobal variables are:
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

/*Globals */
// $x = 715;
// $y = 215; 

// function addition() {
//   $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
// }

// addition();
// echo "$z <br/>";

// $m= 240;
// $n = 130;

// function addResult(){
//     $GLOBALS ['p'] = $GLOBALS['m']+$GLOBALS['n'];
// };

// addResult();
// echo $p;
// echo '<br/>';


// $var1 = 350;
// $var2 = 50 ;

// function subResult(){
//     $GLOBALS['result']= $GLOBALS['var1']-$GLOBALS['var2'];
// };

// subResult();
// print $result;



/*SERVER */

// echo $_SERVER['PHP_SELF'];
// echo "<br>";
// echo $_SERVER['SERVER_NAME'];
// echo "<br>";
// echo $_SERVER['HTTP_HOST'];
// echo "<br>";
// echo $_SERVER['HTTP_REFERER'];
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
// echo "<br>";
// echo $_SERVER['SERVER_PORT'];

?>



<!-- <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname" >
  <input type="submit">
</form> -->

<?php 
/*_REQUEST & _POST */
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // collect value of input field
//     $name = $_REQUEST['fname'];
//     if (empty($name)) {
//       echo "Name is empty";
//     } else {
//       echo $name;
//     }
//   }
?>

<!-- <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="tName" id=""> 
    <input type="submit" value="Submit">
</form> -->

<?php  
    // Request & Post \\ 
    // if($_SERVER["REQUEST_METHOD"]=="POST"){
    //     // Collect Value Of Input
    //     $name=$_REQUEST['tName'];
    //     if(empty($name)){
    //         echo "No name inputed";
    //     }else{
    //         echo $name;
    //     }
    // }
?> 

<form action="<?php $_SERVER['PHP_SELF'] ; ?>" method="post">
    <input type="text" name="jName" >
    <input  type="submit" value="সাবমিট করুন">
</form>

<?php
    // Request & Post
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name=$_REQUEST['jName'];
        if(empty($name)){
            echo 'কোনো নাম সাবমিট হয়নি';
        }
        else{
            echo $name;
        }
    }
?>
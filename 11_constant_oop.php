<?php 
/*
Constants cannot be changed once it is declared.
Class constants can be useful if you need to define some constant data within a class.
A class constant is declared inside a class with the const keyword.
Class constants are case-sensitive. However, it is recommended to name the constants in all uppercase letters.
*/

class FlashMessages {
    const created = "Your product added successfully!!";
    const edited = "Your product updated successfully!!";
    const deleted = "Your product deleted successfully!!";
    const error = "Something went Wrong";

    public function productStored()
    {
        echo self::created;
    }
    public function productUpdated()
    {
        echo self::edited;
    }
    public function productDeleted()
    {
        echo self::deleted;
    }
    public function error()
    {
        echo self::error;
    }

}

$postion = "deleted";
$barta = new FlashMessages();

switch($postion){
    case "created": 
        $barta->productStored();
        break;
    case "updated":
        $barta->productUpdated();
        break;
    case "deleted":
        $barta->productDeleted();
        break;
    case "error":
        $barta->error();
        break;
    default:
        echo "Unknown Action";
}





?>
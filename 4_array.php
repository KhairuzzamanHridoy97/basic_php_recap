<!-- Array -->

<?php 
    // Array 01 \\
    // $companies = array("Honda","Yahamaha","Bajaj","Sujuki","Kawasaki");
    // $companiesLength =  count($companies) ; 

    // for($index=0; $index<$companiesLength; $index++){
    //     echo " $index => $companies[$index] <br/>" ;
    // }
    // print($companiesLength);


    // Array 02 \\ 

    //  $marketShare = array("Honda"=>"25b","Bajaj"=>"18b","Yahamaha"=>"21b","Sujuki"=>"30b","Kawasaki"=>"23b");
     
    //  foreach ($marketShare as $key=>$value){
    //     echo "Company: $key => NetWorth: $value <br/>";
    //  };


    $loadPower = array("Parabot"=>1450,"Sundarban"=>1500,"Rajarhat"=>1200,"Yaad"=>700,"Shurovi"=>1300,"Shatil"=>1100);
    foreach($loadPower as $key=>$value){
        echo "Name:$key || Capacity:$value  <br/>";
    }

?>
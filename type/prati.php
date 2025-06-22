<?php

//$marks=array("Maths"=>70,"Tamil"=>95,"English"=>40);

//echo $marks["Maths"];
//echo $marks["Tamil"];
//echo $marks["English"];

//foreach($marks as $key=>$vale)
//echo $key."=".$vale

$marks=[70,20,90,30];


echo "<pre>";
print_r($marks);
echo "</pre>";

    //print_r($marks);

    //foreach($marks as $key=>$vale){

    //    echo $key."=".$vale;"<br>";
   // }


function getFullname($fname,$lname){

    return $fname."_".$lname;

}
$fullname=getfullname("sivakaran","paviskar");

echo  "My full name is ".$fullname;


?>
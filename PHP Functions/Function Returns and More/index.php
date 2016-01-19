

<?php 
//Return Values
function hello($name){
    
    if($name == "Mike"){
        
        return "Hello, Mike!<br>";
    }
    else{
        return "Hello, Stranger!<br>";

    }
}

//assign function and return to var
$greeting = hello("Mike");

//echo var
echo $greeting;



//add integers
function add_up($a, $b){
    
  return $a + $b;
}
 $value = add_up(2,4);
//print_r to print array 
//print_r($value);

echo $value;
echo "<br>";
//VARIABLE FUNCTIONS
function answer(){
    return 42;
}

$func = 'add_up';

$num = $func(5,10);

echo $num;
echo "<br>";
//PHP CLOSURES
$name = "Lorinda";
$greet = function() use($name){
	echo "Hello there, $name.";
};

$greet();


?>
